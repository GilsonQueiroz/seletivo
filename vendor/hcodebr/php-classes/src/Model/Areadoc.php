<?php 

namespace Hcode\Model;

use Hcode\DB\SqL;
use Hcode\Model;
use Hcode\Mailer;

class Areadoc extends Model{

	public static function listAll()
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_areadoc ORDER BY desareadoc");
	}


    public function save()
	{

		$sql = new SqL();

		$results = $sql->select("CALL sp_areadoc_save(:idareadoc, :desareadoc)", array(
			":idareadoc"=>$this->getidareadoc(),
			":desareadoc"=>$this->getdesareadoc()
		));

		$this->setData($results[0]);

		Areadoc::updateFile();

	}


	public function get($idareadoc){

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_areadoc WHERE idareadoc = :idareadoc", array(
			"idareadoc"=>$idareadoc
		));

		$this->setData($results[0]);

	}

	public function delete()
	{

		$sql = new SqL();

		$sql->query("DELETE FROM tb_areadoc WHERE idareadoc = :idareadoc", array(
			":idareadoc"=>$this->getidareadoc()
		));

		Areadoc::updateFile();

	}

	public static function updateFile()
	{

		$areadoc = Areadoc::listAll();

		$html = [];

		//comando html a se repetir
		foreach ($areadoc as $row) {
			array_push($html, '<li><a href="/areadoc/'.$row['idareadoc'].'">'.$row['desareadoc'].'</a></li>');
		}

		file_put_contents($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "areadoc-menu.html", implode('',$html));

	}

}



 ?>