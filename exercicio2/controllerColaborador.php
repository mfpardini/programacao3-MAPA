<?php
session_start();

require_once("Colaborador.php");

$colaborador = new Colaborador();

foreach ($_POST as $key => $value) {
	$colaborador->{"set".ucfirst($key)}($value);

}

$_SESSION['colaborador'] = $colaborador->imprimir();

header("Location: mostrarCadastro.php");

?>