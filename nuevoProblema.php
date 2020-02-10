<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Test1</title>	 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/application.js"></script>
</head>

<body>
	<!-- Header -->
	<?php require 'header.php' ?>

	<main>
		<div class="container">
			<!-- Titulos -->
			<div class="row center">
				<h1>Nuevo Problema</h1>
			</div>
			<!-- Campos tipo de problema -->
			<div class="row">
				<div class="input-field col l12">
          <input id="tipo" type="text" class="validate">
          <label for="tipo">Tipo de Problema</label>
        </div>
      </div>
      <!-- Boton Guardar -->
			<div class="row">
				<div class="col l12 center">
					<button class="btn waves-effect waves-light" type="submit" name="action">Guardar
				    <i class="material-icons right">send</i>
				  </button>
				</div>
			</div>

		</div>
	</main>
	
</body>
</html>