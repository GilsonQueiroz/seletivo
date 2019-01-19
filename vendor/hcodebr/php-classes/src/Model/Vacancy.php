<?php 

namespace Hcode\Model;

use Hcode\DB\SqL;
use Hcode\Model;
use Hcode\Mailer;

class Vacancy extends Model{

	public function get($idvacancy){

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_vacancies WHERE idvacancy = :idvacancy", array(
			"idvacancy"=>$idvacancy
		));

		$this->setData($results[0]);

	}

}



 ?>