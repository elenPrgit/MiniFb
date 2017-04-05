
<?php

// Include config

require('config.php');

require 'classes/Bootstrap.php';
require 'classes/Controller.php';
require 'controllers/Home.php';

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();

if($controller){
	$controller->execute_action();	
}