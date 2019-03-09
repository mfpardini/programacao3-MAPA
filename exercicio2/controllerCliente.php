<?php
session_start();

require_once("Cliente.php");

$cliente = new Cliente();

foreach ($_POST as $key => $value) {
	$cliente->{"set".ucfirst($key)}($value);

}
echo $cliente->getDataNascimento();

$_SESSION['cliente'] = $cliente->imprimir();

header("Location: mostrarCadastro.php");

?>