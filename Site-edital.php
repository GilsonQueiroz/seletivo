<?php

use \Hcode\Page;
use \Hcode\Model\Cargo;
use \Hcode\Model\Edital;
use \Hcode\Model\Vacancy;

//Rota edital - site

$app->get('/editais_abertos', function() {
    
	$edital = Edital::listAberto();

	$page = new Page();

	if (empty($edital)) {

	$page->setTpl("editalabertovazio", [
		"edital"=>$edital,
		"fase"=>"abertos",
		"button"=>" Visualizar "		
	]);

	} else {

	$page->setTpl("edital", [
		"edital"=>$edital,
		"fase"=>"abertos",
		"button"=>" Visualizar "		
	]);

	}

});

$app->get('/editais_publicados', function() {
    
	$edital = Edital::listAll();

	$page = new Page();

	$page->setTpl("edital", [
		"edital"=>$edital,
		"fase"=>"publicados",
		"button"=>" Visualizar "
	]);

});

$app->get('/editais_encerrados', function() {
    
	$edital = Edital::listEncerrado();

	$page = new Page();

	if (empty($edital)) {

	$page->setTpl("editalencerradovazio", [
		"edital"=>$edital,
		"fase"=>"abertos",
		"button"=>" Visualizar "		
	]);

	} else {

	$page->setTpl("edital", [
		"edital"=>$edital,
		"fase"=>"encerrados",
		"button"=>" Visualizar "
	]);

	}

});

// End Rota Edital - Site

// Rotas Edital / Cargo - Site

$app->get('/editalpublicado_:idcargo', function($idcargo) {
    
	$cargo = new Cargo();

	$cargo->get((int)$idcargo);

	$cargosEdital = Cargo::getCargosEdital($idcargo);

	$page = new Page();

	$page->setTpl("editalcargo", [
		"nomeCargo"=>$cargo->getdescargo(),
		"editais"=>$cargosEdital,
		"fase"=>"Abertos"
	]);

});

$app->get('/cargo_:idcargo', function($idcargo){

	$cargo = new Cargo();

	$cargo->get((int)$idcargo);

	$page = new Page();

	$page->setTpl("cargo", [
		"cargo"=>$cargo->getValues()
	]);

});

//End Rota edital - site

//Página de detalhes do edital
$app->get("/detalhar_:desurl", function($desurl){

	$edital = new Edital();

	$edital->getFromURL($desurl);

	$page = new Page();

	$page->setTpl("editaldetail", [
		"edital"=>$edital->getValues(),
		"cargos"=>$edital->getCargosList(),
		"files"=>$edital->getFiles()
	]);

});
// fim página de detalhes do edital

// Participar
$app->get("/participa_:desurl", function($desurl){

	$edital = new Edital();

	$edital->getFromURL($desurl);

	$page = new Page();

	$page->setTpl("participa", [
		"edital"=>$edital->getValues(),
		"cargos"=>$edital->getCargosList()
	]);

});

 ?>