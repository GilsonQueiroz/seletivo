<?php 

namespace Hcode\Model;

use Hcode\DB\SqL;
use Hcode\Model;
use Hcode\Mailer;

class Cargo extends Model{

	public static function listAll()
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_cargos ORDER BY descargo");
	}


    public function save()
	{

		$sql = new SqL();

		$results = $sql->select("CALL sp_cargos_save(:idcargo, :descargo, :nrgraduation, :desrequeriment, :desactivity, :desbasesalary, :desweekhours)", array(
			":idcargo"=>$this->getidcargo(),
			":descargo"=>$this->getdescargo(),
			":nrgraduation"=>$this->getnrgraduation(),
			":desrequeriment"=>$this->getdesrequeriment(),
			":desactivity"=>$this->getdesactivity(),
			":desbasesalary"=>$this->getdesbasesalary(),
			":desweekhours"=>$this->getdesweekhours()
		));

		$this->setData($results[0]);

		Cargo::updateFile();

	}


	public function get($idcargo){

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_cargos WHERE idcargo = :idcargo", array(
			"idcargo"=>$idcargo
		));

		$this->setData($results[0]);

	}

	public function delete()
	{

		$sql = new SqL();

		$sql->query("DELETE FROM tb_cargos WHERE idcargo = :idcargo", array(
			":idcargo"=>$this->getidcargo()
		));

		Cargo::updateFile();

	}

	public static function updateFile()
	{

		$cargo = Cargo::listAll();

		$html = [];

		//comando html a se repetir
		foreach ($cargo as $row) {
			array_push($html, '<li><a href="/editalpublicado_'.$row['idcargo'].'"><i class="fa fa-angle-double-right mr10"></i>'.$row['descargo'].'</a></li><hr>');
		}

		file_put_contents($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "cargo-menu.html", implode('',$html));

	}

	public function getCargosEdital($idcargo){

		$sql = new Sql();

		return $sql->select("
			SELECT * FROM
				(SELECT v.idvacancy, v.idedital, v.idcargo, v.nrvacancy, s.descodedital, s.desedital, s.dtregister, s.desresumo, s.idatualfase, s.desfase, s.desurl, s.descargolist
				FROM tb_vacancies v INNER JOIN
					(SELECT * FROM	 
						(SELECT * FROM tb_editais WHERE idedital IN 
							(SELECT a.idedital FROM tb_editais a
							INNER JOIN tb_vacancies b ON a.idedital = b.idedital
							WHERE b.idcargo = :idcargo
							)
						) e INNER JOIN tb_fases f ON e.idatualfase = f.idfase 
					) s ON v.idedital = s.idedital WHERE v.idcargo = :idcargo
				) t
			INNER JOIN 
				(SELECT c.idcargo, c.descargo, c.nrgraduation, g.desgraduation, c.desrequeriment, c.desactivity, c.desbasesalary, c.desweekhours 
				FROM tb_cargos c INNER JOIN tb_graduations g ON c.nrgraduation = g.nrgraduation
				) j
			ON t.idcargo = j.idcargo;
			", [
				':idcargo'=>$idcargo
			]);
	}


}



 ?>