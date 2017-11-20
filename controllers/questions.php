<?php

class questions extends Controller {

	protected function index() {
		$viewModel = new QuestionModel();
		$this->returnView($viewModel->index(), true);
	}

	protected function add() {
		if(!isset($_SESSION['loggedIn'])) {
			header("Location: " . ROOT_URL . 'questions');
		}
		$viewModel = new QuestionModel();
		$this->returnView($viewModel->add(), true);
	}
}