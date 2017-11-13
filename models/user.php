<?php

class UserModel extends Model {
	private $errorName;
	private $errorEmail;
	private $errorPassword;

	public function register() {
		if(isset($_POST['submit'])) {

			if($_POST['name'] == "" || $_POST['email'] == "" || $_POST['password'] == "" || $_POST['cpassword'] == "") {
				Messages::setMessage("All Fields Are Required!", "error");
				return null;
			}

			$this->validateName($_POST['name']);
			$this->validateEmail($_POST['email']);
			$this->validatePassword($_POST['password'], $_POST['cpassword']);

			if($this->errorName == false && $this->errorEmail == false && $this->errorPassword == false) {
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
			} else {
				return null;
			}

			
		}
		return null;
	}

	private function validateName($name) {
		if(strlen($name) > 25 || strlen($name) < 2) {
			$this->errorName = true;
			Messages::setMessage("Name must be between 2 and 25 characters", "error");
			return null;
		}
		$this->errorName = false;
	}

	private function validateEmail($email) {
		if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
			$this->errorEmail = true;
			Messages::setMessage("Enter valid email. eg. example@example.com", "error");
			return null;
		}
		$this->errorEmail = false;
	}

	private function validatePassword($password, $cpassword) {
		if($password != $cpassword) {
			$this->errorPassword = true;
			Messages::setMessage("Your Password Don't Match", "error");
			return null;
		}

		if(preg_match('/[^A-Za-z0-9]/', $password)) {
			$this->errorPassword = true;
			Messages::setMessage("Your password can only contain numbers and letters", "error");
			return null;
		}

		if(strlen($password) > 30 || strlen($password) < 5) {
			$this->errorPassword = true;
			Messages::setMessage("Password must be between 5 and 30 characters", "error");
			return null;
		}
		$this->errorPassword = false;
	}
}