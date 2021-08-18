<?php

if (!isset($_SESSION)) { session_start(); }

if($_SESSION["autenticado"] == "SI"){

    @$resultado = false;
    @$id    = $_POST["id"];
    if(isset($_POST["ch_contrato"])){ $contrato = 1; }else{ $contrato = 0; }
    if(isset($_POST["ch_cedula"])){ $cedula = 1; }else{ $cedula = 0; }
    if(isset($_POST["ch_recibo"])){ $recibo = 1; }else{ $recibo = 0; }
    @$comentario    = $_POST["comentario"];
    
    require_once("../../models/Contrato.php");
        $updateArchivo = new Contrato();
        $responseArchivo  = $updateArchivo->guardarArchivo($contrato , $cedula , $recibo,  $comentario, $id);
        if($responseArchivo != false){
            $resultado = true;
        }else{
            $resultado = false;
        }
    
    
    if($resultado == true){
?>

<script type="text/javascript">
    swal({title: "Exito !", text: "información guarda!", type: "success", allowEscapeKey: false, confirmButtonColor: "#43ABDB"});
</script>

<?php

    }else{

        ?>
            <script type="text/javascript">
            swal({title: "Lo Sentimos", text: "Error al guardar su información", type: "warning", allowEscapeKey: false, confirmButtonColor: "#43ABDB"});
            </script>


    <?php
    }

}else{
    echo "Acceso Denegado";
}



?>