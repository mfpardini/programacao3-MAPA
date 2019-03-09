<?php

session_start();

require_once("Carro.php");
require_once("Motor.php");

if (!isset($_POST["marca"])) {
	header("Location: index.php");
} else {

	$carro = new Carro();


	foreach ($_POST as $key => $value) {

		if (property_exists("Carro", $key)) {
			$carro->$key = $value;
		} elseif (property_exists("Motor", $key)) {
			$carro->motor->$key = $value;
		}
	}

	$_SESSION['carro'] = json_encode($carro->imprimeCarro());
	$_SESSION['motor'] = json_encode($carro->imprimeMotor());

	header("Location: index.php");
}
?>