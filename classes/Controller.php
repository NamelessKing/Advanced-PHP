<?php

abstract class Controller {
	protected $request;
	protected $action;

	public function __construct($action, $request) {
		$this->action = $action;
		$this->request =  $request;
	}

	public function executeAction() {
		return $this->{$this->action}();
	}

	protected function returnView($viewModel, $fullView) { //$fullView is a boolean so it will either true or false.
		$view = 'views/'.get_class($this)."/".$this->action.".php";
		if($fullView == true) {
			require_once('views/main.php');
		} else {
			require_once($view);
		}
	}
}