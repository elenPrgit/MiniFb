
<?php

// Include config

require('config.php');

require 'classes/Bootstrap.php';
require 'classes/Controller.php';
require 'classes/Model.php';

require 'controllers/Home.php';
require 'controllers/shares.php';
require 'controllers/users.php';

require 'models/home.php';
require 'models/share.php';
require 'models/user.php';

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();

if($controller){
	$controller->execute_action();	
}