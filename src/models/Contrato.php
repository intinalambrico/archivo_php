<?php

class Contrato {

    public function TieneContrato($id){
            require_once("../../../src/models/Connections.php");
            $conn = new Connections();
            $stm = $conn->Connectar()->prepare("SELECT id_archivo, contrato FROM archivo WHERE cus = :id ");
            $stm->bindParam(":id" , $id , PDO::PARAM_INT);
            $stm->execute();
            $filas = $stm->rowCount();
            if($filas > 0 ){
                return $stm->fetch();
            }else{
                return false;
            }
    }

    public function TieneCedula($id){
        require_once("../../../src/models/Connections.php");
        $conn = new Connections();
        $stm = $conn->Connectar()->prepare("SELECT id_archivo, cedula FROM archivo WHERE cus = :id ");
        $stm->bindParam(":id" , $id , PDO::PARAM_INT);
        $stm->execute();
        $filas = $stm->rowCount();
        if($filas > 0 ){
            return $stm->fetch();
        }else{
            return false;
        }
}
public function TieneRecibo($id){
    require_once("../../../src/models/Connections.php");
    $conn = new Connections();
    $stm = $conn->Connectar()->prepare("SELECT id_archivo, recibo FROM archivo WHERE cus = :id ");
    $stm->bindParam(":id" , $id , PDO::PARAM_INT);
    $stm->execute();
    $filas = $stm->rowCount();
    if($filas > 0 ){
        return $stm->fetch();
    }else{
        return false;
    }
}

public function Comentario($id){
    require_once("../../../src/models/Connections.php");
    $conn = new Connections();
    $stm = $conn->Connectar()->prepare("SELECT id_archivo, comentario FROM archivo WHERE cus = :id ");
    $stm->bindParam(":id" , $id , PDO::PARAM_INT);
    $stm->execute();
    $filas = $stm->rowCount();
    if($filas > 0 ){
        return $stm->fetch();
    }else{
        return false;
    }
}

public function guardarArchivo($contrato , $cedula , $recibo, $comentario, $id){
    require_once("../../../src/models/Connections.php");
    $conn = new Connections();
    $stm = $conn->Connectar()->prepare("UPDATE  archivo SET contrato = :contrato, cedula = :cedula, recibo = :recibo  , comentario = :comentario WHERE id_archivo = :id ");
    $stm->bindParam(":id" , $id , PDO::PARAM_INT);
    $stm->bindParam(":contrato" , $contrato, PDO::PARAM_INT);
    $stm->bindParam(":cedula" , $cedula, PDO::PARAM_INT);
    $stm->bindParam(":recibo" , $recibo, PDO::PARAM_INT);
    $stm->bindParam(":comentario" , $comentario, PDO::PARAM_STR);

    if($stm->execute()){
        return true;
    }else{
        return false;
    }
} 


}




?>