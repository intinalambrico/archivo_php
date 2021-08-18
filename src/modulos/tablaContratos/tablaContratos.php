<?php

if (!isset($_SESSION)) { session_start(); }


if($_SESSION["autenticado"] == "SI"){
    require_once("../../../function/Functions.php");

    $getTabla  = json_getContratos($_POST["id_cliente"]);
      function saberEstado($id){
        $estado;
        if($id == 0){ $estado = "Creado/sin aprobar";}
        if($id == 1){ $estado = "Activo";}
        if($id == 2){ $estado = "Cortado";}
        if($id == 3){ $estado = "Anulado";}
        if($id == 4){ $estado = "Retirado";}
        
        return $estado;
    }
    
    
    
    ?>
<script src="src/js/guardarContrato.js" type="text/javascript"></script>
         <div class="row bg-info text-white" style="font-size: 14px">
             <div class="col-md-1">        <strong> CUS </strong>       </div>
             <div class="col-md-1">      <strong>  Contrato  </strong>     </div>
             <div class="col-md-1">      <strong>  Estado  </strong>     </div>
             <div class="col-md-1">     <strong>Filial   </strong>    </div>
             <div class="col-md-1">     <strong>Estrato	</strong>        </div>
             <div class="col-md-1">    <strong> Tiene Contrato ? </strong>       </div>
             <div class="col-md-1">     <strong>Tiene Cédula ?   </strong>     </div>
             <div class="col-md-1">    <strong> Tiene Recibo ?  </strong>      </div>
             <div class="col-md-3">    <strong> Comentario  </strong>     </div>
             <div class="col-md-1">     <strong> Accion </strong></div>
         </div>
         <hr>
                <?php
                        foreach($getTabla as $key){
                            echo "<form method='POST' id=contrato".$key["id_contrato"]."><div class='row' style='font-size: 14px'> 
                                        <div class='col-md-1'>".$key["id_contrato"]."</div>
                                        <div class='col-md-1'>".$key["fisico"]."</div>
                                        <div class='col-md-1'>".saberEstado($key["estado"])."</div>
                                        <div class='col-md-1'>".filial($key["id_servicio"])."</div>
                                        <div class='col-md-1'>".$key["estrato"]."</div>
                                        <div class='col-md-1'>".tieneContrato($key["id_contrato"])."</div>
                                        <div class='col-md-1'>".tieneCedula($key["id_contrato"])."</div>
                                        <div class='col-md-1'>".tieneRecibo($key["id_contrato"])."</div>
                                        <div class='col-md-3'>".comentario($key["id_contrato"])."</div>
                                        <div class='col-md-1'><button type='submit' class='btn btn-success' id='guardar_documentos' onClick='enviarArchivo(".$key["id_contrato"].")'>Save</button></div>
                                  </div> </form> <hr>";
                        }
                ?>
             
        <div id="success_guardar" ></div>

<?php


}else{


    echo "no Autorizado";
}



?>