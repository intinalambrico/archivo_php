<?php
if (!isset($_SESSION)) { session_start(); }

if($_SESSION["autenticado"]=="SI"){
    @$documento = $_POST["search"];
require_once("../../../function/Functions.php");
    
    $getCliente = json_getCliente($documento);
    if(isset($getCliente[0]["id_cliente"]) ){ $id_get_cliente = $getCliente[0]["id_cliente"]; }else{ $id_get_cliente = false; }
    
    if($id_get_cliente != false){
?>
<script src="src/js/sincronizarContratos.js" type="text/javascript"></script>

<div class="card"  >
   
   <div class="card-body">
       <div class="alert alert-secondary">
           La información acá mostrada viene directamente de control mas
       </div>
        <code>
            <div class="row"> 
                <div class="col">
                    <?php 
                    

                        if($getCliente[0]["tipo_cliente"] == "J"){
                            echo "Tipo_cliente => Persona Juridica </br>";
                            echo "Razon_social => ".$getCliente[0]["razon_social"]."</br>";
                            echo "Representante_legal => ".$getCliente[0]["nombres_rep"]."</br>";
                        }else{
                            echo "Tipo_cliente => Persona Natural </br>";
                            echo "Nombres => ".$getCliente[0]["nombre_primer"]." ".$getCliente[0]["nombre_segundo"]."</br>";
                            echo "Apellidos => ".$getCliente[0]["apellido_paterno"]." ".$getCliente[0]["apellido_materno"]."</br>";
                        }
                        echo "id_cliente =>".$getCliente[0]["id_cliente"]."</br>";
                        echo "mail => ".$getCliente[0]["mail"]."</br>";
                        echo "celular => ".$getCliente[0]["celular_a"]."/".$getCliente[0]["celular_a"]."</br>";
                    }else{

                    ?>
                            <script type="text/javascript">
                              swal({title: "mmmmmm", text: "Parece que le documento ingresado no existe", type: "warning", allowEscapeKey: false, confirmButtonColor: "#43ABDB"});
                             </script>

                   <?php
                }

                    ?>
                </div>
                <div class="col">
                    <?php  if($id_get_cliente != false){ ?>
                    <form id="enviarContratos" method="post" name="enviarContratos">
                            <input type="hidden" name="id_cliente" value="<?php echo $getCliente[0]["id_cliente"]?>" id="id_cliente">
                    <?php $getContratos = json_getContratos($getCliente[0]["id_cliente"]); 
                        $resultado = true;
                        foreach($getContratos as $key){
                            if($key["resultado"] != false){
                            echo "Contrato => ".$key["id_contrato"]."</br>";
                            echo "<input name='idcontrato[]' id='idcontrato' type='hidden' value='".$key["id_contrato"]."' />";
                            }else{
                                echo "Sin Contratos registrados";
                                $resultado = false;
                            }
                            
                        }
                        if($resultado != false){
                            echo "<button type='submit' class='btn btn-success' id='btn_enviar_sincronizacion'> Sincronizar con servidor apps.internetinalambrico.com.co</button>";
                        }

                    }
                    ?>
                    
                    
                        </form>
                </div>
        </div>
                    <hr>
        <div id="respuestaSincronizacion"></div>
        </code>
<hr>
        <div id="respuestatabla"> </div>
                   
    </div>
</div>
 


<?php

}else{
    echo "no Autorizado";
}

?>