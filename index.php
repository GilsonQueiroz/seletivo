<?php

session_start(); 
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\Model\User;
use \Hcode\Model\Areadoc;
use \Hcode\Model\Typedoc;
use \Hcode\Model\Situation;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

$app->get('/admin', function() {
    
	User::verifylogin();

	$page = new PageAdmin();

	$page->setTpl("index");

});

$app->get('/admin/login', function() {
    
	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login");

});

$app->post('/admin/login', function() {
    
	User::login($_POST["login"], $_POST["password"]);

	header("Location: /admin");
	exit;

});


$app->get('/admin/logout', function(){

	User::logout();

	header("Location: /admin");
	exit;

});

$app->get('/admin/users', function() {
    
	User::verifylogin();

	$users = User::listAll();

	$page = new PageAdmin();

	$page->setTpl("users", array(
		"users"=>$users
	));

});

$app->get('/admin/users/create', function() {
    
	User::verifylogin();

	$page = new PageAdmin();

	$page->setTpl("users-create");

});

$app->get('/admin/users/:iduser/delete', function($iduser) {
    
	User::verifylogin();

	$user = new User();

	$user->get((int)$iduser);

	$user->delete();

	header("Location: /admin/users");
 	exit;
 	
});

$app->get('/admin/users/:iduser', function($iduser) {
    
	User::verifylogin();

	$user = new User();

	$user->get((int)$iduser);

	$page = new PageAdmin();

	$page->setTpl("users-update", array(
		"user"=>$user->getValues()
	));

});

$app->post('/admin/users/create', function() {
    
	User::verifylogin();

	$user = new User();

	$_POST['despassword'] = password_hash($_POST["despassword"], PASSWORD_DEFAULT, [

 		"cost"=>12

 	]);

 	$user->setData($_POST);

	$user->save();

	header("Location: /admin/users");
 	exit;

});

$app->post('/admin/users/:iduser', function($iduser) {
    
	User::verifylogin();

	$user = new User();

	$user->get((int)$iduser);

	$user->setData($_POST);

	$user->update();

	header("Location: /admin/users");
 	exit;	
	
});

$app->get("/admin/forgot", function(){

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot");

});

$app->post("/admin/forgot", function(){

	$user = User::getForgot($_POST["email"]);

	header("Location: /admin/forgot/sent");
	exit;

});

$app->get("/admin/forgot/sent", function(){

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-sent");

});

$app->get("/admin/forgot/reset", function(){

	$user = User::validForgotDecrypt($_GET["code"]);

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-reset", array(
		"name"=>$user["desperson"],
		"code"=>$_GET["code"]
	));

});

$app->post("/admin/forgot/reset", function(){

	$forgot = User::validForgotDecrypt($_POST["code"]);

	User::setForgotUsed($forgot["idrecovery"]);

	$user = new User();

	$user->get((int)$forgot["iduser"]);

	$password = password_hash($_POST["password"], PASSWORD_DEFAULT, [

 		"cost"=>12

 	]);

	$user->setPassword($password);

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-reset-success");

});

//Rotas Areadoc

$app->get("/admin/areadoc", function (){

	User::verifylogin();

	$areadoc = Areadoc::listAll();

	$page = new PageAdmin();

	$page->setTpl("areadoc", [
		"areadoc"=>$areadoc
	]);
	
});

$app->get("/admin/areadoc/create", function (){

	User::verifylogin();

	$page = new PageAdmin();

	$page->setTpl("areadoc-create");
	
});

$app->post("/admin/areadoc/create", function (){

	User::verifylogin();

	$areadoc = new Areadoc();

	$areadoc->setData($_POST);

	$areadoc->save();

	header("Location: /admin/areadoc");
	exit;
	
});

$app->get("/admin/areadoc/:idareadoc/delete", function ($idareadoc){

	User::verifylogin();

	$areadoc = new Areadoc();

	$areadoc->get((int)$idareadoc);

	$areadoc->delete();

	header("Location: /admin/areadoc");
	exit;
	
});

$app->get("/admin/areadoc/:idareadoc", function ($idareadoc){

	User::verifylogin();

	$areadoc = new Areadoc();

	$areadoc->get((int)$idareadoc);

	$page = new PageAdmin();

	$page->setTpl("areadoc-update", [
		"areadoc"=>$areadoc->getValues()
	]);

});

$app->post("/admin/areadoc/:idareadoc", function ($idareadoc){

	User::verifylogin();

	$areadoc = new Areadoc();

	$areadoc->get((int)$idareadoc);

	$areadoc->setData($_POST);

	$areadoc->save();

	header("Location: /admin/areadoc");
	exit;

});

//End Rota Areadoc
//Rotas Typedoc

$app->get("/admin/typedoc", function (){

	User::verifylogin();

	$typedoc = Typedoc::listAll();

	$page = new PageAdmin();

	$page->setTpl("typedoc", [
		"typedoc"=>$typedoc
	]);
	
});

$app->get("/admin/typedoc/create", function (){

	User::verifylogin();

	$page = new PageAdmin();

	$page->setTpl("typedoc-create");
	
});

$app->post("/admin/typedoc/create", function (){

	User::verifylogin();

	$typedoc = new Typedoc();

	$typedoc->setData($_POST);

	$typedoc->save();

	header("Location: /admin/typedoc");
	exit;
	
});

$app->get("/admin/typedoc/:idtypedoc/delete", function ($idtypedoc){

	User::verifylogin();

	$typedoc = new Typedoc();

	$typedoc->get((int)$idtypedoc);

	$typedoc->delete();

	header("Location: /admin/typedoc");
	exit;
	
});

$app->get("/admin/typedoc/:idtypedoc", function ($idtypedoc){

	User::verifylogin();

	$typedoc = new Typedoc();

	$typedoc->get((int)$idtypedoc);

	$page = new PageAdmin();

	$page->setTpl("typedoc-update", [
		"typedoc"=>$typedoc->getValues()
	]);

});

$app->post("/admin/typedoc/:idtypedoc", function ($idtypedoc){

	User::verifylogin();

	$typedoc = new typedoc();

	$typedoc->get((int)$idtypedoc);

	$typedoc->setData($_POST);

	$typedoc->save();

	header("Location: /admin/typedoc");
	exit;

});

//End Rota Typedoc
//Rotas situation

$app->get("/admin/situation", function (){

	User::verifylogin();

	$situation = Situation::listAll();

	$page = new PageAdmin();

	$page->setTpl("situation", [
		"situation"=>$situation
	]);
	
});

$app->get("/admin/situation/create", function (){

	User::verifylogin();

	$page = new PageAdmin();

	$page->setTpl("situation-create");
	
});

$app->post("/admin/situation/create", function (){

	User::verifylogin();

	$situation = new Situation();

	$situation->setData($_POST);

	$situation->save();

	header("Location: /admin/situation");
	exit;
	
});

$app->get("/admin/situation/:idsituation/delete", function ($idsituation){

	User::verifylogin();

	$situation = new Situation();

	$situation->get((int)$idsituation);

	$situation->delete();

	header("Location: /admin/situation");
	exit;
	
});

$app->get("/admin/situation/:idsituation", function ($idsituation){

	User::verifylogin();

	$situation = new Situation();

	$situation->get((int)$idsituation);

	$page = new PageAdmin();

	$page->setTpl("situation-update", [
		"situation"=>$situation->getValues()
	]);

});

$app->post("/admin/situation/:idsituation", function ($idsituation){

	User::verifylogin();

	$situation = new Situation();

	$situation->get((int)$idsituation);

	$situation->setData($_POST);

	$situation->save();

	header("Location: /admin/situation");
	exit;

});

//End Rota situation

$app->get("/areadoc/:idareadoc", function($idareadoc){

	$areadoc = new Areadoc();

	$areadoc->get((int)$idareadoc);

	$page = new Page();

	$page->setTpl("areadoc", [
		'areadoc'=>$areadoc->getValues()
	]);

});


$app->run();

 ?>