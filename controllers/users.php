<?php

class users extends Controller {
	protected function register() {
		$viewModel = new UserModel();
		$this->returnView($viewModel->register(), true);
	}
}