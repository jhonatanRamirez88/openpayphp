<?php
require_once __DIR__ . '/vendor/autoload.php';
	$openpay = Openpay::getInstance('mzdtln0bmtms6o3kck8f', 'sk_e568c42a6c384b7ab02cd47d2e407cab');
	$customer = array(
	     'name' => $_POST["name"],
	     'last_name' => $_POST["last_name"],
	     'phone_number' => $_POST["phone_number"],
	     'email' => $_POST["email"],);

	$chargeData = array(
	    'method' => 'card',
	    'source_id' => $_POST["token_id"],
	    'amount' => (float)$_POST["amount"],
	    'description' => $_POST["description"],
	    //'use_card_points' => $_POST["use_card_points"], // Opcional, si estamos usando puntos
	    'device_session_id' => $_POST["deviceIdHiddenFieldName"],
	    'customer' => $_POST[$customer]
	    );

	$charge = $openpay->charges->create($chargeData);
?>