<?php

class questions extends Controller {

	protected function index() {
		$viewModel = new QuestionModel();

		if($this->request['id']) {
			$this->action = "show";
			$show = $viewModel->show($this->request['id']);
			$answers = $viewModel->showAnswers($this->request['id']);
			$viewModel = array_merge($show, $answers);
			$this->returnView($viewModel, true);
		} else {
			$this->returnView($viewModel->index(), true);
		}
	}

	protected function add() {
		if(!isset($_SESSION['loggedIn'])) {
			header("Location: " . ROOT_URL . 'questions');
		}
		$viewModel = new QuestionModel();
		$this->returnView($viewModel->add(), true);
	}

	protected function edit() {
		$viewModel = new QuestionModel();
		if($this->request['id']) {
			$this->returnView($viewModel->edit($this->request['id']), true);
		} else {
			header("Location: " . ROOT_URL . 'questions');
		}
	}
}
