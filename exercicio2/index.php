<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <title>Página Inicial</title>
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
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Página Inicial</a>
	      </li>
	      <li class="nav-item">
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
	<div class="container d-flex flex-column justify-content-center align-items-center full-page">
		<?php
			if (isset($_GET['erro'])) {
			?>
				<div>
					<h3 class="text-center text-monospace" style="color: red">
					Não é possível mostrar o cadastro antes de preencher o formulário</h3>
				</div>	
				<?php
			}
		?>
  		<div class="flex-row">
	        <div class="col-md p-2">
	          <a href="formularioCliente.php" class="btn btn-primary btn-lg">Formulário Cliente</a>
	        </div>
	        <div class="col-md p-2">
	          <a href="formularioColaborador.php" class="btn btn-primary btn-lg">Formulário Colaborador</a>
	        </div>  
     	</div>
  	</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>