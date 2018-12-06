<?php 

namespace Hcode\Model;

use Hcode\DB\SqL;
use Hcode\Model;
use Hcode\Mailer;

class Typedoc extends Model{

	public static function listAll()
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_typedoc ORDER BY destypedoc");
	}


    public function save()
	{

		$sql = new SqL();

		$results = $sql->select("CALL sp_typedoc_save(:idtypedoc, :destypedoc)", array(
			":idtypedoc"=>$this->getidtypedoc(),
			":destypedoc"=>$this->getdestypedoc()
		));

		$this->setData($results[0]);

	}


	public function get($idtypedoc){

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_typedoc WHERE idtypedoc = :idtypedoc", array(
			"idtypedoc"=>$idtypedoc
		));

		$this->setData($results[0]);

	}

	public function delete()
	{

		$sql = new SqL();

		$sql->query("DELETE FROM tb_typedoc WHERE idtypedoc = :idtypedoc", array(
			":idtypedoc"=>$this->getidtypedoc()
		));

	}

}



 ?>