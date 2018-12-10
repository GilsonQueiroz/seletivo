<?php

session_start(); 
require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once("Site-login.php");
//require_once("site-users.php");
require_once("Site-edital.php");
//require_once("site-results.php");
require_once("Admin-login.php");
require_once("Admin-users.php");
require_once("Admin-config.php");
require_once("Admin-edital.php");
//require_once("admin-results.php");
require_once("myfunctions.php");

$app->run();

 ?>