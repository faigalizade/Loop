<?php
use App\Application;

//Global Helper
require_once './helpers.php';
// Require RedbeanPHP ORM
require_once './database/RedBeanPHP.php';

//Autoload
require_once './vendor/autoload.php';

//Create instanceof Application
$application = new Application();

// Run app
echo $application->run();