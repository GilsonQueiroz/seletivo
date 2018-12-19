<?php 

namespace Hcode\Model;

use Hcode\DB\SqL;
use Hcode\Model;
use Hcode\Mailer;

class Docfiles extends Model{

	public static function listAll($idedital)
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_files ORDER BY destitle WHERE idedital = :idedital", array(
			":idedital"=>$idedital
		));
	}


    public function save($idedital)
	{

		$sql = new SqL();

		$results = $sql->select("CALL sp_docfiles_save(:idfile, :idedital, :destitle, :desnamefile)", array(
			":idfile"=>$this->getidfile(),
			":idedital"=>$idedital,
			":destitle"=>$this->getdestitle(),
			":desnamefile"=>$this->getdesnamefile()
		));

		$this->setData($results[0]);

	}


	public function get($idfile){

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_files WHERE idfile = :idfile", array(
			"idfile"=>$idfile
		));

		$this->setData($results[0]);

	}

	public function delete()
	{

		$sql = new SqL();

		$sql->query("DELETE FROM tb_files WHERE idfile = :idfile", array(
			":idfile"=>$this->getidfile()
		));

	}

// Checar se tem pdf
	public function checkpdf()
	{

		if (file_exists($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "res" . DIRECTORY_SEPARATOR . "site" . DIRECTORY_SEPARATOR . "pdf" . DIRECTORY_SEPARATOR . "Edital" . $this->getidedital() . ".pdf")) {

			$filename = "Edital" . $this->getidedital() . ".pdf";

		} else {

			$filename = "Editalbase.pdf";

		}

		return $this->setdesfile($filename);

	}

//fazer upload do pdf
	public function uploadPDF($file, $idedital)
	{

		$extension = explode('.', $file['name']);

		$extension = end($extension);

		$pfile = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "res" . DIRECTORY_SEPARATOR . "site" . DIRECTORY_SEPARATOR . "pdf" . DIRECTORY_SEPARATOR . $this->getdesnamefile() . $idedital . ".pdf";

		if ($extension === "pdf") {

			if (move_uploaded_file($file['tmp_name'], $pfile)) {

			} else {

				throw new Exception("Não foi possível realizar o upload");

			}

		} else {

			throw new Exception("Tipo de arquivo não permitido");

		}

	}


}

?>