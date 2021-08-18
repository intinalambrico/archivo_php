<?php
 

     function alertWarnnig($message){

        echo '<script language="javascript">alert("'.$message.'");window.location.href="login.php"</script>';
    }

    function json_getCliente($documento){
        
        $init = curl_init();
        $url  = "https://internetinalambrico.com.co/in/api/v1_2021/cliente.php";
        $data = array(
            "documento"=>$documento,
            "token" => "3d524a53c110e4c22463b10ed32cef9d"
        );
        $params = json_encode($data);
        curl_setopt($init, CURLOPT_URL, $url);
        curl_setopt($init,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($init, CURLOPT_POSTFIELDS, $params);
        curl_setopt($init,CURLOPT_HEADER, false); 
        if (false === ($obj = curl_exec($init))) {
            throw new Exception('Error: '.curl_error($init));
        }
        curl_close($init);
        $obj=json_decode($obj, true); 
        return $obj;
}

function json_getContratos($id){
    $init = curl_init();
    $url  = "https://internetinalambrico.com.co/in/api/v1_2021/contrato.php";
    $data = array(
        "id_cliente"=>$id,
        "token" => "3d524a53c110e4c22463b10ed32cef9d"
    );
    $params = json_encode($data);
    curl_setopt($init, CURLOPT_URL, $url);
    curl_setopt($init,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($init, CURLOPT_POSTFIELDS, $params);
    curl_setopt($init,CURLOPT_HEADER, false); 
    if (false === ($obj = curl_exec($init))) {
        throw new Exception('Error: '.curl_error($init));
    }
    curl_close($init);
    $obj=json_decode($obj, true); 
    return $obj;
}

function json_setContrato($id){
    $init = curl_init();
    $url = "https://internetinalambrico.com.co/in/api/v1_2021/archivo.php?title=save";
    $data = array(
        "cus" => $id,
        "cedula" => "",
        "contrato" => "",
        "recibo"    => "",
        "comentario" => ""
    );
    $params = json_encode($data);
    curl_setopt($init, CURLOPT_URL, $url);
    curl_setopt($init,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($init, CURLOPT_POSTFIELDS, $params);
    curl_setopt($init,CURLOPT_HEADER, false); 
    if (false === ($obj = curl_exec($init))) {
        throw new Exception('Error: '.curl_error($init));
    }
    curl_close($init);
    $obj=json_decode($obj, true); 
    return $obj;
}

function filial($id){
    $servicio_array = array(
        '1' => 'Internet Yopal',
'2' => 'Internet Aguazul',
'3' => 'Internet Tame',
'4' => 'Internet Villanueva',
'5' => 'Internet Paz de Ariporo',
'6' => 'Internet Pore',
'7' => 'Internet TÃ¡mara',
'8' => 'Internet Monterrey',
'9' => 'Internet Sabanalarga',
'10' => 'C+ San Pedro Internet',
'11' => 'Internet SincÃ©',
'12' => 'C+ Yopal MÃ³vil',
'13' => 'C+ Yopal Internet',
'14' => 'C+ Bogota Internet',
'15' => 'C+ Tauramena Internet',
'16' => 'C+ CuritÃ­ Internet',
'17' => 'C+ Yopal Television',
'18' => 'C+ Tame Television ',
'19' => 'C+ Bogota Television',
'20' => 'C+ Tauramena Television ',
'21' => 'C+ Curiti Television ',
'22' => 'C+ Since Television ',
'23' => 'C+ Suba Television ',
'24' => 'C+ San Fernando Television ',
'25' => 'C+ Potrerillos Television ',
'26' => 'C+ Venado Television ',
'27' => 'C+ Aguazul Television ',
'28' => 'C+ Medina Television',
'29' => 'C+ Santa Maria Television',
'30' => 'C+ San Fernando Internet',
'31' => 'C+ Yopal Digital ',
'32' => 'C+ Bogota Digital ',
'33' => 'C+ Venado Internet',
'34' => 'C+ Potrerillos Internet',
'35' => 'MIGRACIONES NO USAR',
'36' => 'NONONONONONONONO',
'37' => 'C+ Bogota MÃ³vil',
'38' => 'C+ Tauramena MÃ³vil',
'39' => 'C+ Tame Internet',
'40' => 'C+ Bilbao Television ',
'41' => 'C+ Bilbao Internet ',
'42' => 'C+ ST de Lago Television ',
'43' => 'C+ St de Lago Internet ',
'44' => 'C+ Paz de Ariporo Internet',
'45' => 'C+ Paz de Ariporo Television ',
'46' => 'C+ Since Internet',
'47' => 'C+ Aguazul Internet',
'48' => 'C+ Curiti MÃ³vil',
'49' => 'C+ Since MÃ³vil',
'50' => 'C+ San Pedro MÃ³vil',
'51' => 'C+ Aguazul MÃ³vil',
'52' => 'C+ San Pedro Television ',
'53' => 'C+ Recetor',
'54' => 'C+ Betulia',
'55' => 'C+ OTROS',
'56' => 'Canal 2 Publicidad',
    );
    $servicio = $servicio_array[$id];
    return $servicio;
}

function tieneContrato($id){
    require_once("../../../src/controllers/Controller.php");
    $contrato  = new Controller();
    $respuesta = $contrato->getTieneContrato($id);

    return $respuesta;
    

}

function tieneCedula($id){
    require_once("../../../src/controllers/Controller.php");
    $contrato  = new Controller();
    $respuesta = $contrato->getTieneCedula($id);

    return $respuesta;
    

}

function tieneRecibo($id){
    require_once("../../../src/controllers/Controller.php");
    $contrato  = new Controller();
    $respuesta = $contrato->getTieneRecibo($id);

    return $respuesta;
    

}

function comentario($id){
    require_once("../../../src/controllers/Controller.php");
    $contrato  = new Controller();
    $respuesta = $contrato->getComentario($id);

    return $respuesta;
    

}

?>