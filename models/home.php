<?php

class HomeModel extends Model {
	public function index() {
		$this->query("SELECT questions.*, users.name FROM questions INNER JOIN users ON questions.id_user=users.id ORDER BY createdAt DESC");
		$rows = $this->resultSet();
		return $rows;
	}
}
