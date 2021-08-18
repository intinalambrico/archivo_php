$(function(){

    $("#btn_enviar_sincronizacion").click(function(){
        $("#btn_enviar_sincronizacion").attr("disabled" , "disabled");
        $("#modalArchivo").show();
        $("#respuestaSincronizacion").html('');
        $("#respuestatabla").html('');

        var url = "src/modulos/sincronizacion/sincronizarContratos.php";
        $.ajax({
            type : "POST",
            url : url,
            data: $("#enviarContratos").serialize(),
            success: function(data)
            {
                
                $("#respuestaSincronizacion").html(data);
                cargarTabla();
            }

        })

        

        return false
    })
});

function cargarTabla(){
    var url = "src/modulos/tablaContratos/tablaContratos.php";
        $.ajax({
            type: "POST",
            url:url,
            data:$("#enviarContratos").serialize(),
            success: function(data){
                $("#respuestatabla").html(data);
                $("#modalArchivo").hide();
            }
        })
}