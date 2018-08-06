<?php
	require_once __DIR__ . '/vendor/autoload.php';
    $openpay = Openpay::getInstance('m4nfgskfrdp587hw8pi5', 'sk_fbcaa99d2230400fa0dcd4155f80e51a');
    //EL customer Data es requrido para hacer el cargo
	$customerData = array(
        'name' => $_POST["nombre"],//Dato requerido
        'email' => "prueba@prueba.com" //Dato requerido
    );
    $chargeData = array(
        'method' => 'card',
        'source_id' => $_POST["token_id"],
    	'amount' => (float)$_POST["monto"],
        'description' => $_POST["descripcion"],
        'device_session_id' => $_POST["deviceIdHiddenFieldName"],
        'customer' => $customerData//Dato requerido
    );
	$charge = $openpay->charges->create($chargeData);
	$mensaje = "Operación realizada éxitosamente";
	header('Location: http://localhost/openpay/buscarreferenciaindex.php?mensaje='.$mensaje);
?>
