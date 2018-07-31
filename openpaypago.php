<?php
	require_once __DIR__ . '/vendor/autoload.php';
	echo "Si entre aca";
	echo "Valor de la variable: ".$_POST["token_id"];
	echo "Valor de la variable: ".$_POST["deviceIdHiddenFieldName"];
	echo "Valor de la variable: ".$_POST[$customer];
	$openpay = Openpay::getInstance('mzdtln0bmtms6o3kck8f', 'sk_e568c42a6c384b7ab02cd47d2e407cab');
	echo "Si entre aca";
	echo $openpay;
	echo "Si entre aca";
	$customer = array(
	     'name' => "Juan",
	     'last_name' => "Hernandez",
	     'phone_number' => "7226098765",
	     'email' => "juan@dominio.com",);

	$chargeData = array(
	    'method' => 'card',
	    'source_id' => $_POST["token_id"],
	    'amount' => (float)"125.56",
	    'description' => "Prueba de pago",
	    //'use_card_points' => $_POST["use_card_points"], // Opcional, si estamos usando puntos
	    'device_session_id' => $_POST["deviceIdHiddenFieldName"],
	    'customer' => $_POST[$customer]
	    );

	$charge = $openpay->charges->create($chargeData);
?>
