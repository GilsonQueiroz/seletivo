<?php

use \Hcode\Page;
use \Hcode\Model\Cargo;
use \Hcode\Model\Edital;

//Rota edital - site

$app->get('/editais_abertos', function() {
    
	$edital = Edital::listAberto();

	$page = new Page();

	$page->setTpl("edital", [
		"edital"=>$edital,
		"fase"=>"Abertos",
		"button"=>" Participar "
	]);

});

$app->get('/editais_andamento', function() {
    
	$edital = Edital::listAndamento();

	$page = new Page();

	$page->setTpl("edital", [
		"edital"=>$edital,
		"fase"=>"Em Andamento",
		"button"=>" Visualizar "
	]);

});

$app->get('/editais_encerrados', function() {
    
	$edital = Edital::listEncerrado();

	$page = new Page();

	$page->setTpl("edital", [
		"edital"=>$edital,
		"fase"=>"Encerrados",
		"button"=>" Ver Resultado "
	]);

});

// End Rota Edital - Site
// Rotas Edital / Cargo - Site

$app->get('/editalaberto_:idcargo', function($idcargo) {
    
	$cargo = new Cargo();

	$cargo->get((int)$idcargo);

	$cargosEdital = Cargo::getCargosEdital($idcargo, '3');

	$page = new Page();

//	var_dump($cargo);
//	exit;

	$page->setTpl("editalcargo", [
		"nomeCargo"=>$cargo->getdescargo(),
		"editais"=>$cargosEdital,
		"fase"=>"Abertos"
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

})

 ?>