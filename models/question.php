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
		$this->query("SELECT questions.*, users.name FROM questions INNER JOIN users ON questions.id_user=users.id WHERE questions.id=:id");
		$this->bind(":id", $id);
		$row = $this->getSingleRow();
		return $row;
	}
}
