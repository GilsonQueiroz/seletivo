<?php

use \Hcode\PageAdmin;
use \Hcode\Model\User;
use \Hcode\Model\Edital;
use \Hcode\Model\Cargo;

//Rotas Edital - Admin

$app->get("/admin/edital", function (){

	User::verifylogin();

	$edital = Edital::listAll();

	$page = new PageAdmin();

	$page->setTpl("edital", [
		"edital"=>$edital
	]);
	
});

$app->get("/admin/edital/vagas", function (){

	User::verifylogin();

	$edital = Edital::listAll();

	$page = new PageAdmin();

	$page->setTpl("edital-vagas", [
		"edital"=>$edital
	]);
	
});


$app->get("/admin/edital/create", function (){

	User::verifylogin();

	$page = new PageAdmin();

	$page->setTpl("edital-create");
	
});

$app->post("/admin/edital/create", function (){

	User::verifylogin();

	$edital = new Edital();

	$edital->setData($_POST);

	if ($_FILES["fileUpload"]["name"] !== "")
	{

		$edital->uploadPDF($_FILES["fileUpload"]);
	}

	$edital->save();

	header("Location: /admin/edital");
	exit;
	
});

$app->get("/admin/edital/:idedital/delete", function ($idedital){

	User::verifylogin();

	$edital = new Edital();

	$edital->get((int)$idedital);

	$edital->delete();

	header("Location: /admin/edital");
	exit;
	
});

$app->get("/admin/edital/:idedital", function ($idedital){

	User::verifylogin();

	$edital = new Edital();

	$edital->get((int)$idedital);

	$page = new PageAdmin();

	$page->setTpl("edital-update", [
		"edital"=>$edital->getValues()
	]);

});

$app->post("/admin/edital/:idedital", function ($idedital){

	User::verifylogin();

	$edital = new Edital();

	$edital->get((int)$idedital);

	$edital->setData($_POST);

	if ($_FILES["fileUpload"]["name"] !== "")
	{

		$edital->uploadPDF($_FILES["fileUpload"]);
	}

	$edital->save();

	header("Location: /admin/edital");
	exit;

});

//End Rota edital - Admin

//Rotas Vagas

$app->get("/admin/edital/:idedital/vagas", function ($idedital){

	User::verifylogin();

	$edital = new Edital();

	$edital->get((int)$idedital);

	$page = new PageAdmin();

	$page->setTpl("edital-cargos", [
		'edital'=>$edital->getValues(),
		'cargosNotRelated'=>$edital->getCargos(false),
		'cargosRelated'=>$edital->getCargos()
	]);

});

$app->get("/admin/edital/:idedital/vagas/:idcargo/add", function ($idedital, $idcargo){

	User::verifylogin();

	$edital = new Edital();

	$edital->get((int)$idedital);

	$cargo = new Cargo();

	$cargo->get((int)$idcargo);

	$page = new PageAdmin();

	$page->setTpl("edital-cargos-vaga", [
		'edital'=>$edital->getValues(),
		'cargo'=>$cargo->getValues()
	]);

});

$app->post("/admin/edital/:idedital/vagas/:idcargo/add", function ($idedital, $idcargo){

	User::verifylogin();

	$edital = new Edital();

	$edital->get((int)$idedital);

	$cargo = new Cargo();

	$cargo->get((int)$idcargo);

	$edital->addCargo($cargo);

	header("Location: /admin/edital/".$idedital."/vagas");
	exit;

});

$app->get("/admin/edital/:idedital/vagas/:idcargo/remove", function ($idedital, $idcargo){

	User::verifylogin();

	$edital = new Edital();

	$edital->get((int)$idedital);

	$cargo = new Cargo();

	$cargo->get((int)$idcargo);

	$edital->removeCargo($cargo);

	header("Location: /admin/edital/".$idedital."/vagas");
	exit;

});

//End Rota vagas

?>