<?php 

namespace Hcode\Model;

use Hcode\DB\SqL;
use Hcode\Model;

class User extends Model{

	const SESSION = "User";

	public static function login($login, $password)
	{

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :Login", array(
				":Login"=>$login
		));

				if (count($results) === 0)
		{

			throw new \Exception("Usuário inexistente ou senha inválida.");

		}

		$data = $results[0];

		if (password_verify($password, $data["despassword"]) === true)
		{

			$user = new User();

			$user->setData($data);

			$_SESSION[User::SESSION] = $user->getValues();

			return $user;
			
		} else {

			throw new \Exception("Usuário inexistente ou senha inválida.");

		}

	}

	public static function verifyLogin($permission = 1)
	{

		//echo (int)$_SESSION[User::SESSION]["idpermission"];
		//exit; 

		if (
			!isset($_SESSION[User::SESSION])
			||
			!$_SESSION[User::SESSION]
			||
			!(int)$_SESSION[User::SESSION]["iduser"] > 0
			||
			(int)$_SESSION[User::SESSION]["idpermission"] == $permission
		){

			header("Location: /admin/login");
			exit;

		}

	}

	public static function logout()
	{


		$_SESSION[User::SESSION] = NULL;
		
	}

	public static function listAll()
	{

		$sql = new SqL();

		return $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) ORDER BY b.desperson");
	}

	public function save()
	{

		$sql = new SqL();

		$results = $sql->select("CALL sp_users_save(:desperson, :descpf, :desrg, :desrgemitter, :desrgstate, :dtrgemitter, :dtbirth, :dessex, :desmother, :deslogin, :despassword, :desemail, :idpermission)", array(
			":desperson"=>utf8_decode($this->getdesperson()),
			":descpf"=>$this->getdescpf(),
			":desrg"=>$this->getdesrg(),
			":desrgemitter"=>$this->getdesrgemitter(),
			":desrgstate"=>$this->getdesrgstate(),
			":dtrgemitter"=>$this->getdtrgemitter(),
			":dtbirth"=>$this->getdtbirth(),
			":dessex"=>$this->getdessex(),
			":desmother"=>$this->getdesmother(),
			":deslogin"=>$this->getdeslogin(),
			":despassword"=>$this->getdespassword(),
			":desemail"=>$this->getdesemail(),
			":idpermission"=>$this->getidpermission()
		));

		$this->setData($results[0]);

	}


	public function get($iduser){

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = :iduser", array(
			"iduser"=>$iduser
		));

		$this->setData($results[0]);

	}

	public function update(){

		$sql = new SqL();

		$results = $sql->select("CALL sp_usersupdate_save(:iduser, :desperson, :descpf, :desrg, :desrgemitter, :desrgstate, :dtrgemitter, :dtbirth, :dessex, :desmother, :desemail, :idpermission)", array(
			":iduser"=>$this->getiduser(),
			":desperson"=>utf8_decode($this->getdesperson()),
			":descpf"=>$this->getdescpf(),
			":desrg"=>$this->getdesrg(),
			":desrgemitter"=>$this->getdesrgemitter(),
			":desrgstate"=>$this->getdesrgstate(),
			":dtrgemitter"=>$this->getdtrgemitter(),
			":dtbirth"=>$this->getdtbirth(),
			":dessex"=>$this->getdessex(),
			":desmother"=>$this->getdesmother(),
			":desemail"=>$this->getdesemail(),
			":idpermission"=>$this->getidpermission()
		));

		$this->setData($results[0]);

	}

	public function delete()
	{

		$sql = new SqL();

		$sql->query("CALL sp_users_delete(:iduser)", array(
			":iduser"=>$this->getiduser()
		));

	}

}



 ?>