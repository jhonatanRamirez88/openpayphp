<?php
    require_once __DIR__ . '/vendor/autoload.php';
    //Creacion de variables
    $puntos = "";
    //Creacion de la instancia de openpay
    $openpay = Openpay::getInstance('m4nfgskfrdp587hw8pi5', 'sk_fbcaa99d2230400fa0dcd4155f80e51a');
    //EL customer Data es requrido para hacer el cargo
	$customerData = array(
        'name' => $_POST["nombre"],//Dato requerido
        'email' => "prueba@prueba.com" //Dato requerido
    );
    $payment = array(
        'payments' => "3"//Pueden ser 3,6,9,12,18
    );
    //Validacion si se paga en puntos o no
    if($_POST["use_card_points"] == "true"){
        $puntos = "MIXED"; //Cargo con puntos y efectivo
    }else{
        $puntos = "NONE"; //Unicamente cargo en efectivo
    }
    $chargeData = array(
        'method' => 'card',
        'source_id' => $_POST["token_id"],
    	'amount' => (float)$_POST["monto"],
		'use_card_points' => $puntos, // Opcional, si estamos usando puntos
        'description' => $_POST["descripcion"],
    //    'payment_plan' => $payment,//Opcional, es para los meses sin intereses
        'device_session_id' => $_POST["deviceIdHiddenFieldName"],
        'customer' => $customerData//Dato requerido
    );
    $charge = $openpay->charges->create($chargeData);
	$mensaje = "Operación realizada éxitosamente";
	header('Location: http://localhost/openpay/buscarreferenciaindex.php?mensaje='.$mensaje);
?>
