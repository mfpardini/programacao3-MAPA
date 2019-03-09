<?php
session_start();

if (isset($_SESSION['carro'])) {
	session_unset();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/site.css">

    <title>Formulário</title>
  </head>
  <body class="body">

	<!-- Barra de navegação -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #e3f2fd;">
	  <span class="navbar-brand" href="index.php">Exercício 01</span>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Página Inicial</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="formulario.php">Formulário</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container d-flex align-items-center flex-column full-page">
		<!-- Formulário -->
		<form action="controller.php" method="post">
		  	<div class="form-group">
			    <h3 style="margin-top: 50px;">Entre com os dados do carro:</h3>
		    	<div class="form-row p-1">
		    		<div class="col-sm-4">
			    		<input class="form-control" type="text" name="marca" placeholder="Marca">
			    	</div>
		    		<div class="col-sm-4">
		    			<input class="form-control" type="text" name="modelo" placeholder="Modelo">
		    		</div>
		    	</div>
		    		<div class="form-row p-1">	
		    		<div class="col-sm-4">
		    			<input class="form-control" type="text" name="cor" placeholder="Cor">
		    		</div>
			    	<div class="col-sm-4">
			    		<input class="form-control" type="text" name="ano" placeholder="Ano">
			    	</div>
			    	<div class="col-sm-4">
			    		<input class="form-control" type="text" name="cambio" placeholder="Câmbio">
			    	</div>
		    	</div>
		    	<h3 style="margin-top: 50px;">Entre com os dados do motor:</h3>
		    	<div class="form-row">
		    		<div class="col-sm-3">
		    			<input class="form-control" type="text" name="cilindro" placeholder="Cilindro">
		    		</div>
		    		<div class="col-sm-3">
		    			<input class="form-control" type="text" name="potencia" placeholder="Potência">
		    		</div>
			    	<div class="col-sm-3">
			    		<input class="form-control" type="text" name="giroAtual" placeholder="Giro Atual">
			    	</div>
			    	<div class="col-sm-3">
			    		<input class="form-control" type="text" name="combustivel" placeholder="Combustível">
			    	</div>
		    	</div>
		  	</div>
		  	<div class="form-row justify-content-center">
		  		<button  type="submit" class="btn btn-primary btn-block">Enviar formulário</button>
		  	</div>
		</form>
	</div>
    

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>