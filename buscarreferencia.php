<?php

	//Simulacion de peticion a ZOHO
	$numero_referencia = $_POST["numero_referencia"];
	$monto = "123.60";
	$descripcion = "Pago anticipo 70% de oportunidad " .$numero_referencia;
	$direccion = "Calle equis, No 123, Col. Alguna de Benito Juaréz";
	header('Location: http://localhost:8888/openpay/index.php?numero_referencia='.$numero_referencia.'&monto='.$monto.'&descripcion='.$descripcion.'&direccion='.$direccion);

?>
