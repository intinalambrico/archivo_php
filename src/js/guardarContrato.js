
 


function enviarArchivo(id) {
    event.preventDefault();
    
let contrato = id; 
    $("#success_guardar").html('');
    $("#modalArchivo").show();

    var url = "src/modulos/tablaContratos/guardar_contrato.php";
    $.ajax({
        type: "POST",
        url: url,
        data: $("#contrato"+contrato).serialize(),
        success: function(data){
            $("#modalArchivo").hide();
            $("#success_guardar").html(data);
        }
    });
}

