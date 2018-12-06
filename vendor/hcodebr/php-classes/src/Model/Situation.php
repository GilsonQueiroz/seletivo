<?php 

namespace Hcode\Model;

use Hcode\DB\SqL;
use Hcode\Model;
use Hcode\Mailer;

class Situation extends Model{

	public static function listAll()
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_situation ORDER BY dessituation");
	}


    public function save()
	{

		$sql = new SqL();

		$results = $sql->select("CALL sp_situation_save(:idsituation, :dessituation)", array(
			":idsituation"=>$this->getidsituation(),
			":dessituation"=>$this->getdessituation()
		));

		$this->setData($results[0]);

	}


	public function get($idsituation){

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_situation WHERE idsituation = :idsituation", array(
			"idsituation"=>$idsituation
		));

		$this->setData($results[0]);

	}

	public function delete()
	{

		$sql = new SqL();

		$sql->query("DELETE FROM tb_situation WHERE idsituation = :idsituation", array(
			":idsituation"=>$this->getidsituation()
		));

	}

}



 ?>