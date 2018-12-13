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
		"fase"=>"Abertos"
	]);

});

$app->get('/editais_andamento', function() {
    
	$edital = Edital::listAndamento();

	$page = new Page();

	$page->setTpl("edital", [
		"edital"=>$edital,
		"fase"=>"Em Andamento"
	]);

});

$app->get('/editais_encerrados', function() {
    
	$edital = Edital::listEncerrado();

	$page = new Page();

	$page->setTpl("edital", [
		"edital"=>$edital,
		"fase"=>"Encerrados"
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


 ?>