<?php 

namespace Hcode\Model;

use Hcode\DB\SqL;
use Hcode\Model;
use Hcode\Mailer;

class Edital extends Model{

	public static function listAll()
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_editais a INNER JOIN tb_fases b ON a.idatualfase = b.idfase ORDER BY descodedital");

	}

	public static function listAberto()
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_editais a INNER JOIN tb_fases b ON a.idatualfase = b.idfase WHERE a.idatualfase = 3 ORDER BY descodedital");
	}

	public static function listAndamento()
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_editais a INNER JOIN tb_fases b ON a.idatualfase = b.idfase WHERE a.idatualfase = 4 ORDER BY descodedital");
	}

	public static function listEncerrado()
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_editais a INNER JOIN tb_fases b ON a.idatualfase = b.idfase WHERE a.idatualfase = 5 OR a.idatualfase = 6 ORDER BY descodedital");
	}


    public function save()
	{

		$sql = new SqL();

		$results = $sql->select("CALL sp_editais_save(:idedital, :descodedital, :desedital, :desurl, :desresumo, :idatualfase)", array(
			":idedital"=>$this->getidedital(),
			":descodedital"=>$this->getdescodedital(),
			":desedital"=>$this->getdesedital(),
			":desurl"=>$this->getdesurl(),
			":desresumo"=>$this->getdesresumo(),
			":idatualfase"=>$this->getidatualfase()
		));

		$this->setData($results[0]);

	}

	public function get($idedital){

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_editais WHERE idedital = :idedital", array(
			"idedital"=>$idedital
		));

		if (is_null($results)) { 
		} 
		else {
			$this->setData($results[0]); 
		}

	}

	public function delete()
	{

		$sql = new SqL();

		$sql->query("DELETE FROM tb_editais WHERE idedital = :idedital", array(
			":idedital"=>$this->getidedital()
		));

//Apagar pdfs (Alterar para apagar todas)
//		$pfile = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "res" . DIRECTORY_SEPARATOR . "site" . DIRECTORY_SEPARATOR . "pdf" . DIRECTORY_SEPARATOR . "Edital" . $this->getidedital() . ".pdf";
//
//		if (file_exists($pfile)) {
//
//			unlink($pfile);
//		}
	}


	public function getCargos($related = true)
	{

		$sql = new Sql();

		if ($related === true) {

		return $sql->select("SELECT * FROM tb_vacancies v INNER JOIN 
								(SELECT * FROM tb_cargos WHERE idcargo IN(
	    						SELECT a.idcargo FROM tb_cargos a
								INNER JOIN tb_vacancies b ON a.idcargo = b.idcargo
								WHERE b.idedital = :idedital)) s ON v.idcargo = s.idcargo WHERE v.idedital = :idedital;
						);
			", [':idedital'=>$this->getidedital()]);

		} else {

		return $sql->select("SELECT * FROM tb_cargos WHERE idcargo NOT IN(
						    SELECT a.idcargo FROM tb_cargos a
							INNER JOIN tb_vacancies b ON a.idcargo = b.idcargo
							WHERE b.idedital = :idedital
						);
			", [':idedital'=>$this->getidedital()]);
		
		}

	}

	public function addCargo(Cargo $cargo, $vagas)
	{

		$sql = new SqL();

		$sql->query("INSERT INTO tb_vacancies (idedital, idcargo, nrvacancy) VALUES(:idedital, :idcargo, :nrvacancy)", array(
			":idedital"=>$this->getidedital(),
			":idcargo"=>$cargo->getidcargo(),
			":nrvacancy"=>$vagas
		));

	}

    public function removeCargo(Cargo $cargo)
	{

		$sql = new SqL();

		$sql->query("DELETE FROM tb_vacancies WHERE idedital = :idedital AND idcargo = :idcargo", array(
			":idedital"=>$this->getidedital(),
			":idcargo"=>$cargo->getidcargo()
		));

	}


}

?>