<?php
require_once("src/models/Connections.php");

class Usuario {

	private $id;
	private $user;
	private $password;

	public function __construct($user, $password ,$id=null){
			$this->id 	 		= $id;
			$this->user  		= $user;
			$this->password 	= $password;
	}

	public function getId(){
		return $this->getid;
	}
	public function setId($id){
		$this->id 	= $id;
	}

	public function setUser($user){
		$this->user = $user;
	}

	public function getUser(){
		return $this->user;
	}

	public function setPassword($password){
		$this->password =  $password;
	}

	public function getPassword(){
		return $this->password;
	}

	public function guardar(){
		$stm =   Connections::Connectar();
	}
    public function error($error){
        return $error;
    }

	public function findOneUser($user){
		$stm	= new Connections(); 
		$sql = $stm->Connectar()->prepare("SELECT * FROM users WHERE user = :user limit 0,1");
		$sql->bindParam(":user" , $user , PDO::PARAM_STR);
		$sql->execute();
		$filas	= $sql->rowCount();
		if($filas > 0 ){
			$resultado = $sql->fetch(PDO::FETCH_ASSOC);
			return new self($resultado["user"], $resultado["password"] , $resultado["id"]);
			 
		}else{
		    return false;
		}
	}



}


?>