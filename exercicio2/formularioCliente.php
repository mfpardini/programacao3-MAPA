<?php
session_start();

if (isset($_SESSION['cliente']) || isset($_SESSION['colaborador'])) {
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
    <link rel="stylesheet" type="text/css" href="../css/site.css">

    <title>Formulário Cliente</title>
  </head>
  <body class="body">
	<!-- Barra de navegação -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #e3f2fd;">
	  <span class="navbar-brand" href="index.php">Exercício 02</span>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Página Inicial</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="formularioCliente.php">Formulário Cliente</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="formularioColaborador.php">Formulário Colaborador</a>
	      </li>
	      <li class="nav-item disabled">
	        <a class="nav-link" href="index.php?erro=1">Mostrar cadastro</a>
	      </li>
	    </ul>
	  </div>
	</nav>
  	<div class="container">
		<form action="controllerCliente.php" method="post">
		  	<div class="form-group">
		  		<h1 class="p-2 text-center">Cadastro de Cliente</h1>
	    		<h3 class="p-1 text-center">Entre com os dados do cliente:</h3>
	    		<div class="form-group row p-1">
	    			<label class="col-sm-3 text-md-right">Código do Cliente:</label>
		    		<input class="form-control col-sm-6" type="text" name="codigo" placeholder="Código">
		    	</div>
	    		<div class="form-group row p-1">
	    			<label class="col-sm-3 text-md-right">Nome:</label>
	    			<input class="form-control col-sm-6" type="text" name="nome" placeholder="Nome">
	    		</div>
	    		<div class="form-group row p-1">
	    			<label class="col-sm-3 text-md-right">Data de nascimento:</label>
	    			<input class="form-control col-sm-6" type="text" name="dataNascimento" placeholder="dd/mm/aaaa">
	    		</div>
		    	<div class="form-group row p-1">
		    		<label class="col-sm-3 text-md-right">Preferência:</label>
		    		<input class="form-control col-sm-6" type="text" name="preferencia" placeholder="Preferência">
		    	</div>
		    	<div class="col text-center">
		  			<button type="submit" class="btn btn-primary">Enviar formulário</button>
		  		</div>
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