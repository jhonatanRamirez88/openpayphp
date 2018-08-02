<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$openpay = Openpay::getInstance('id_tienda', 'llave_privada');
	$customerData = array(
        'name' => "Juan",
        'last_name' => "Fernandez",
        'phone_number' => "7228907654",
        'email' => "prueba@prueba.com",);
    $customer = $openpay->customers->add($customerData);
    $chargeData = array(
        'method' => 'card',
        'source_id' => $_POST["token_id"],
	    	'amount' => (float)"123",
				'use_card_points' => $_POST["use_card_points"], // Opcional, si estamos usando puntos
        'description' => "Algo",
        'device_session_id' => $_POST["deviceIdHiddenFieldName"],
        'customer' => $customerData
    );
	$charge = $openpay->charges->create($chargeData);
	$mensaje = "Operación realizada éxitosamente";
	header('Location: http://localhost:8888/openpay/buscarreferenciaindex.php?mensaje='.$mensaje);
?>
