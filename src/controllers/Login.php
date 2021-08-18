<?php
require_once("src/models/Usuario.php");
class Login{
    
    private $user;
    private $password;
    private $prefijo  ="hannil-";

    function __construct($user, $password){
        $this->user = $user;
        $this->password = $password;
    }

    public function validarUsuario(){
        $getUsers 	=  new Usuario($this->user, $this->password);
        $resultado = $getUsers->findOneUser($this->user);
        $claveEncriptada = hash('sha256',$this->prefijo.$this->password);
        echo $claveEncriptada;
        if($resultado != false){
             
            if($claveEncriptada == $resultado->getPassword()){
                 
                session_start();
                $_SESSION["autenticado"]  = "SI";
                $_SESSION["USER"]       = $this->user;
                echo $_SESSION["autenticado"];
                echo "<script>location.href='index.php';</script>";
            }

        }else{
             
            echo "<script>location.href='login.php?error=user';</script>";
        }
    }
 
}


?>