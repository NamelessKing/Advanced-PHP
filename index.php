<?php


require_once("classes/Bootstrap.php");

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();