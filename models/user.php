<?php

class UserModel extends Model {
	public function register() {
		if(isset($_POST['submit'])) {
			// INSERT INTO DATABASE

			$this->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
			$this->bind(":name", $_POST['name']);
			$this->bind(":email", $_POST['email']);
			$this->bind(":password", $_POST['password']);
			$this->execute();

			// We need to verify that this worked or not.

			if($this->lastInsertId()) {
				header("Location: ".ROOT_URL);
			}
		}
		return null;
	}
}