<?php 

namespace Hcode\Model;

use Hcode\DB\SqL;
use Hcode\Model;
use Hcode\Mailer;

class Vacancy extends Model{

/*	public static function listAll()
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_areadoc ORDER BY desareadoc");
	}
*/

    public function addCargo($idedital, $idcargo)
	{

		$sql = new SqL();

		$sql->query("INSERT INTO tb_vacancies (idvacancy, idedital, idcargo, nrvacancy) VALUES(:idvacancy, :idedital, :idcargo, :nrvacancy)", array(
			":idvacancy"=>$this->getidvacany(),
			":idedital"=>$idedital,
			":idcargo"=>$idcargo,
			":nrvacancy"=>$this->getnrvacany()
		));

	}

    public function removeCargo($idedital, $idcargo)
	{

		$sql = new SqL();

		$sql->query("DELETE FROM tb_vacancies WHERE idedital = :idedital AND idcargo = :idcargo", array(
			":idedital"=>$idedital,
			":idcargo"=>$idcargo
		));

	}

	public function get($idvacancy){

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_vacancies WHERE idvacancy = :idvacancy", array(
			"idvacancy"=>$idvacancy
		));

		$this->setData($results[0]);

	}

/*	public static function updateFile()
	{

		$areadoc = Areadoc::listAll();

		$html = [];

		//comando html a se repetir
		foreach ($areadoc as $row) {
			array_push($html, '<li><a href="/areadoc/'.$row['idareadoc'].'">'.$row['desareadoc'].'</a></li>');
		}

		file_put_contents($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "areadoc-menu.html", implode('',$html));

	} */

}



 ?>