<?php

use \Hcode\PageAdmin;
use \Hcode\Model\User;
use \Hcode\Model\Edital;
use \Hcode\Model\Cargo;
use \Hcode\Model\Vacancy;
use \Hcode\Model\Docfiles;

//Rotas Edital Files - Admin

//Lista todos os editais
$app->get("/admin/edital/files", function (){

	User::verifylogin();

	$edital = Edital::listAll();

	$page = new PageAdmin();

	$page->setTpl("edital-files", [
		"edital"=>$edital
	]);
	
});

//Ao apertar o botão incluir chama o formulário
$app->get("/admin/edital_files/add/:idedital", function ($idedital){

	User::verifylogin();

	$page = new PageAdmin();

	$edital = new Edital();

	$edital->get((int)$idedital);

	$page->setTpl("edital-filesupload", [
		"edital"=>$edital->getValues()
	]);
	
});

//Retorno com a confirmação de inclusão - falta definir para não gravar duplicado
$app->post("/admin/edital_files/add/:idedital", function ($idedital){

	User::verifylogin();

	$docfiles = new Docfiles();

	$docfiles->setData($_POST);

	if ($_FILES["fileUpload"]["name"] !== "")
	{

		$docfiles->uploadPDF($_FILES["fileUpload"], $idedital);
	
	}

	$docfiles->save($idedital);

	header("Location: /admin/edital_files/".$idedital);
	exit;
	
});

//Lista arquivos que foram anexados ao edital
$app->get("/admin/edital_files/:idedital", function ($idedital){

	User::verifylogin();

	$docfiles = Docfiles::listAll($idedital);

	$edital = new Edital();

	$edital->get((int)$idedital);

	$page = new PageAdmin();

	$page->setTpl("edital-fileslist", [
		"edital"=>$edital->getValues(),
		"docfiles"=>$docfiles
	]);
	
});

//Apagar arquivos
$app->get("/admin/edital_files/:idedital/delete/:idfile", function ($idedital, $idfile){

	User::verifylogin();

	$docfiles = new Docfiles();

	$docfiles->get((int)$idfile);

	$docfiles->delete();

	header("Location: /admin/edital_files/".$idedital);
	exit;
	
});

//End Rotas Edital Files - Admin

//Rotas Vagas

$app->get("/admin/edital/vagas", function (){

	User::verifylogin();

	$edital = Edital::listAll();

	$page = new PageAdmin();

	$page->setTpl("edital-vagas", [
		"edital"=>$edital
	]);
	
});

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

	$vagas = $_POST["vacancy"];

	$cadreserva = $_POST["cadreserva"];

	$analise = $_POST["analise"];

	$enterview = $_POST["enterview"];

	$edital->addCargo($cargo, $vagas, $cadreserva, $analise, $enterview);

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

//Rotas Edital - Admin

$app->get("/admin/edital", function (){

	User::verifylogin();

	$edital = Edital::listAll();

	$page = new PageAdmin();

	$page->setTpl("edital", [
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

	$edital->save();

	header("Location: /admin/edital");
	exit;

});

//End Rota edital - Admin

?>