
$(function(){
$("#btn_enviar").click(function(){
$("#modalArchivo").show();
$("#respuesta").html('');

    var url = "src/modulos/buscarCliente/buscarCliente.php";
    $.ajax({
        type: "POST",
        url: url,
        data: $("#buscarCliente").serialize(),
        success:function(data){
            $("#respuesta").html(data);
            $("#modalArchivo").hide();
        }
    })
    
 
return false;
})



});