<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

	#$sql = new Hcode\DB\SqL();

	#$results = $sql->select("SELECT * FROM tb_permissions");

	#echo json_encode($results);

});

$app->run();

 ?>