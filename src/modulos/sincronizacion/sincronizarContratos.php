<?php

if (!isset($_SESSION)) { session_start(); }


if($_SESSION["autenticado"]=="SI"){
    require_once("../../../function/Functions.php");
@$respuestaCreacionContrato = array();
    //recorrer clientes
    foreach($_POST["idcontrato"] as $key){

        $setContrato = json_setContrato($key);
        echo "Contrato => ".$setContrato["id_contrato"]." respuesta del servidor app.internetinalambrico.com.co => ".$setContrato["respuesta"]."</br>";
        
        
    }

        

}else{

        echo "no Autorizado";
    }
?>
 