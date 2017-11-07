<?php


require_once("classes/Bootstrap.php");
require_once("classes/Controller.php");

require_once("controllers/home.php");
require_once("controllers/users.php");

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
if($controller) {
	$controller->executeAction();
}