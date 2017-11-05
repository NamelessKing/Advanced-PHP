<?php

class Bootstrap {
	private $controller;
	private $action;
	private $request;

	public function __construct($request) {
		$this->request = $request;

		if($this->request['controller'] == "") {
			$this->controller = "home";
		} else {
			$this->controller = $this->request['controller'];
		}

		if($this->request['action'] == "") {
			$this->action = "index";
		} else {
			$this->action = $this->request['action'];
		}

	}

	public function createController() {
		// Check for class
		if(class_exists($this->controller)) {
			// Return the parent classes of the given class
			$parents = class_parents($this->controller);
			// Check for Base Controller
			if(in_array("Controller", $parents)) {
				// Check for method/action
				if(method_exists($this->controller, $this->action)) {
					return new $this->controller($this->action, $this->request);
				} else {
					echo "Method/Action Not Found";
					return;
				}
			} else {
				echo "Base Controller Not Found";
				return;
			}
		} else {
			// Controller Class Not Found
			echo "Controller Class Not Found!";
			return;
		}
	}
}