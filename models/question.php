<?php

class QuestionModel extends Model {
	public function index() {
		$this->query("SELECT questions.*, users.name FROM questions INNER JOIN users ON questions.id_user=users.id ORDER BY createdAt DESC");
		$rows = $this->resultSet();
		return $rows;
	}

	public function add() {
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['question'] != null) {
			$this->query("INSERT INTO questions (id_user, question, tags) VALUES (:id_user, :question, :tags)");
			$this->bind(":id_user", $_SESSION['user']['id']);
			$this->bind(":question", $post['question']);
			$this->bind(":tags", $post['tags']);
			$this->execute();

			if($this->lastInsertId()) {
				header("Location: " . ROOT_URL."questions");
			}
		}
		return null;
	}

	public function show($id) {

		if(isset($_POST['submit'])) {
			$this->query("INSERT INTO answers (id_user, id_question, answer) VALUES (:id_user, :id_question, :answer)");
			$this->bind(":id_user", $_SESSION['user']['id']);
			$this->bind(":id_question", $id);
			$this->bind(":answer", $_POST['answer']);
			$this->execute();
			if($this->lastInsertId()) {
				header("Location: " . ROOT_URL . "questions/" . $id);
			}
			return null;
		} else {
			$this->query("SELECT questions.*, users.name FROM questions INNER JOIN users ON questions.id_user=users.id WHERE questions.id=:id");
			$this->bind(":id", $id);
			$row = $this->getSingleRow();
			return $row;
		}
	}

	public function showAnswers($id) {
		$this->query("SELECT answers.*, users.name FROM answers INNER JOIN users ON answers.id_user=users.id WHERE answers.id_question=:id");
		$this->bind(":id", $id);
		$rows = $this->resultSet();
		return $rows;
	}

	public function edit($id) {

		if(isset($_POST['submit'])) {
			$this->query("UPDATE questions SET question=:question, tags=:tags WHERE id=:id");
			$this->bind(":question", $_POST['question']);
			$this->bind(":tags", $_POST['tags']);
			$this->bind(":id", $id);
			$this->execute();
			header("Location: " . ROOT_URL . "questions/" . $id);
		} else {
			$this->query("SELECT * FROM questions WHERE id=:id AND id_user=:id_user");
			$this->bind(":id", $id);
			$this->bind(":id_user", $_SESSION['user']['id']);
			$row = $this->getSingleRow();
			if($row != null) {
				return $row;
			} else {
				header("Location: " . ROOT_URL . "questions/" . $id);
			}
		}

	}
}
