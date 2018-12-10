<?php

use \Hcode\PageAdmin;
use \Hcode\Model\User;
use \Hcode\Model\Areadoc;
use \Hcode\Model\Typedoc;
use \Hcode\Model\Situation;
use \Hcode\Model\Cargo;

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
//Rotas function

$app->get("/admin/cargo", function (){

	User::verifylogin();

	$cargo = Cargo::listAll();

	$page = new PageAdmin();

	$page->setTpl("cargo", [
		"cargo"=>$cargo
	]);
	
});

$app->get("/admin/cargo/create", function (){

	User::verifylogin();

	$page = new PageAdmin();

	$page->setTpl("cargo-create");
	
});

$app->post("/admin/cargo/create", function (){

	User::verifylogin();

	$cargo = new cargo();

	$cargo->setData($_POST);

	$cargo->save();

	header("Location: /admin/cargo");
	exit;
	
});

$app->get("/admin/cargo/:idcargo/delete", function ($idcargo){

	User::verifylogin();

	$cargo = new cargo();

	$cargo->get((int)$idcargo);

	$cargo->delete();

	header("Location: /admin/cargo");
	exit;
	
});

$app->get("/admin/cargo/:idcargo", function ($idcargo){

	User::verifylogin();

	$cargo = new Cargo();

	$cargo->get((int)$idcargo);

	$page = new PageAdmin();

	$page->setTpl("cargo-update", [
		"cargo"=>$cargo->getValues()
	]);

});

$app->post("/admin/cargo/:idcargo", function ($idcargo){

	User::verifylogin();

	$cargo = new cargo();

	$cargo->get((int)$idcargo);

	$cargo->setData($_POST);

	$cargo->save();

	header("Location: /admin/cargo");
	exit;

});

//End Rota cargo

?>