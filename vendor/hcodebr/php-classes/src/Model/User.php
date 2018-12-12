<?php 

namespace Hcode\Model;

use Hcode\DB\SqL;
use Hcode\Model;
use Hcode\Mailer;

class User extends Model{

	const SESSION = "User";
	const SECRET = "TestPMRPseletivo";

	public static function login($login, $password)
	{

		$sql = new SqL();

		$results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b ON a.idperson = b.idperson WHERE a.deslogin = :Login", array(
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

			$data['desperson'] = utf8_encode($data['desperson']);

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

		return $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) INNER JOIN tb_permissions c USING(idpermission) ORDER BY b.desperson");
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

	public static function getForgot($email)
	{

		$sql = new SqL();

		$results = $sql->select("
			SELECT * 
			FROM tb_users a
			INNER JOIN tb_persons b USING(idperson)
			WHERE a.desemail = :email;
		", array(
			"email"=>$email
		));

		if (count($results) === 0) 
		{
			throw new \Exception("Não foi possível recuperar a senha.");
		} else
		{
			$data = $results[0];

			$results2 = $sql->select("CALL sp_userpassrecoveries_create(:iduser, :desip)", array(
				":iduser"=>$data["iduser"],
				":desip"=>$_SERVER["REMOTE_ADDR"]
			));

			if (count($results2) === 0)
			{
				throw new \Exception("Não foi possível recuperar a senha.");
			}
			else
			{
				$dataRecovery = $results2[0];

				$code = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, User::SECRET, $dataRecovery["idrecovery"], MCRYPT_MODE_ECB));

				$link = "http://www.seletivo.rondondopara.pa.gov.br/admin/forgot/reset?code=$code";

				$mailer = new Mailer($data["desemail"], $data["desperson"], "Redefinir Senha PMRP-Seletivo", "forgot", array(
					"name"=>$data["desperson"],
					"link"=>$link
				));

				$mailer->send();

				return $data;

			}
		}

	}

	public static function validForgotDecrypt($code)
	{

		$idrecovery = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, User::SECRET, base64_decode($code), MCRYPT_MODE_ECB);

		$sql = new SqL();

		$results = $sql->select("
			SELECT * FROM tb_userpassrecoveries a
			INNER JOIN tb_users b USING(iduser)
			INNER JOIN tb_persons c USING(idperson)
			WHERE
				a.idrecovery = :idrecovery
			    AND
			    a.dtrecovery IS NULL
			    AND
			    DATE_ADD(a.dtregister, INTERVAL 1 DAY) >= NOW();
		", array(
			":idrecovery"=>$idrecovery
		));

		if (count($results) === 0)
		{
			throw new \Exception("Não foi possível recuperar a senha");
		}
		else
		{
			return $results[0];
		}

	}


	public static function setForgotUsed($idrecovery)
	{

		$sql = new Sql();

		$sql->query("UPDATE tb_userpassrecoveries SET dtrecovery = NOW() WHERE idrecovery = :idrecovery", array(
			":idrecovery"=>$idrecovery
		));

	}

	public function setPassword($password)
	{

		$sql = new Sql();

		$sql->query("UPDATE tb_users SET despassword = :password WHERE iduser = :iduser", array(
			":password"=>$password,
			":iduser"=>$this->getiduser()
		));

	}


}



 ?>