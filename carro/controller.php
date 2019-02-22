<?php
require_once("Carro.php");
require_once("Motor.php");

if (!isset($_POST["marca"])) {
?>	
	<script type="text/javascript">alert("Formulário não foi preenchido")</script>
	<h1><a style="margin-left: 100px;" href="index.php">Retornar para a página inicial</a></h1>
<?php
}

$carro = new Carro();


foreach ($_POST as $key => $value) {

	if (property_exists("Carro", $key)) {
		$carro->$key = $value;
	} elseif (property_exists("Motor", $key)) {
		$carro->motor->$key = $value;
	}
}

$carro->imprimeCarro();
$carro->imprimeMotor();


?>