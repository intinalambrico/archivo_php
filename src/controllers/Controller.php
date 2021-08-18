<?php

class Controller{


    public function dashboard(){
        include("src/view/_dashboard.php");
    }

    public function getTieneContrato($id){
        require_once("../../../src/models/Contrato.php");
        $getTieneContrato = new Contrato();
        $respuestaContrato = $getTieneContrato->tieneContrato($id);
        $responder = "";
        if($respuestaContrato != false){
            if($respuestaContrato["contrato"] == 0){
                $responder ="<input class='form-check-input' type='checkbox' value='".$respuestaContrato["id_archivo"]."' name='ch_contrato'> ";
            }else{
                $responder ="<input class='form-check-input' type='checkbox' value='".$respuestaContrato["id_archivo"]."' checked name='ch_contrato' >";
            }
        }else{

            $responder ="Error de Sincronización";
        }
        return $responder;
    }
    public function getTieneCedula($id){
        require_once("../../../src/models/Contrato.php");
        $getTieneContrato = new Contrato();
        $respuestaContrato = $getTieneContrato->tieneCedula($id);
        $responder = "";
        if($respuestaContrato != false){
            if($respuestaContrato["cedula"] == 0){
                $responder ="<input class='form-check-input' type='checkbox' value='".$respuestaContrato["id_archivo"]."' name='ch_cedula'> ";
            }else{
                $responder ="<input class='form-check-input' type='checkbox' value='".$respuestaContrato["id_archivo"]."' checked name='ch_cedula' >";
            }
        }else{

            $responder ="Error de Sincronización";
        }
        return $responder;
    }
    public function getTieneRecibo($id){
        require_once("../../../src/models/Contrato.php");
        $getTieneContrato = new Contrato();
        $respuestaContrato = $getTieneContrato->tieneRecibo($id);
        $responder = "";
        if($respuestaContrato != false){
            if($respuestaContrato["recibo"] == 0){
                $responder ="<input class='form-check-input' type='checkbox' value='".$respuestaContrato["id_archivo"]."' name='ch_recibo'> ";
            }else{
                $responder ="<input class='form-check-input' type='checkbox' value='".$respuestaContrato["id_archivo"]."' checked name='ch_recibo' >";
            }
        }else{

            $responder ="Error de Sincronización";
        }
        return $responder;
    }

    public function getComentario($id){
        require_once("../../../src/models/Contrato.php");
        $getTieneContrato = new Contrato();
        $respuestaContrato = $getTieneContrato->comentario($id);
        $responder = "";
        if($respuestaContrato != false){
             $responder = "<input type='text' name='comentario' class='form-control' value='".$respuestaContrato["comentario"]."'/><input name='id' type='hidden' value='".$respuestaContrato["id_archivo"]."'/>";
        }else{

            $responder ="Error de Sincronización";
        }
        return $responder;
    }
}


?>