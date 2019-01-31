<?php

class Usuario{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdUsuario(){
		return $this->idusuario;
	}

	public function setIdUsuario($idusuario){
		$this->idusuario = $idusuario;
	}

	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDeslogin($deslogin){
		$this->deslogin = $deslogin;
	}

	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha($dessenha){
		$this->dessenha = $dessenha;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($dtcadastro){
		$this->dtcadastro = $dtcadastro;
	}

	public function loadById($id){
		$sql = new Sql();
		$result = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if(count($result) > 0){
			$row = $result[0];


			$this->setIdUsuario($row["idusuario"]);
			$this->setDeslogin($row["deslogin"]);
			$this->setDessenha($row["dessenha"]);
			$this->setDtcadastro(new DateTime($row["dtcadastro"]));
		}
	}

	public static function getList(){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");
	}


	public static function search($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuario WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
			':SEARCH'=>"%".$login."%"
		));
	}


	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->getIdUsuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}

	public function login($login, $password){
		$sql = new Sql();
		$result = $sql->select("SELECT * FROM tb_usuario WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));

		if(count($result) > 0){
			$row = $result[0];


			$this->setIdUsuario($row["idusuario"]);
			$this->setDeslogin($row["deslogin"]);
			$this->setDessenha($row["dessenha"]);
			$this->setDtcadastro(new DateTime($row["dtcadastro"]));
		}else{
			throw new Exception("Login e/ou senha invalidos");
			
		}
	}
}

?>