<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Nuevo Cliente</title>	 
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
				<h1>Nuevo Cliente</h1>
			</div>
			<!-- Campos Nombre -->
			<div class="row">
				<h2>Nombre:</h2>
			</div>
			<div class="row">
				<div class="input-field col l4">
          <input id="nombre" type="text" class="validate">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col l4">
          <input id="paterno" type="text" class="validate">
          <label for="paterno">Apellido Paterno</label>
        </div>
        <div class="input-field col l4">
          <input id="materno" type="text" class="validate">
          <label for="materno">Apellido Materno</label>
        </div>
			</div>
			<!-- Campos Domicilio -->
			<div class="row">
				<h2>Domicilio:</h2>
			</div>
			<div class="row">
				<div class="input-field col l5">
          <input id="Calle" type="text" class="validate">
          <label for="Calle">Calle</label>
        </div>
        <div class="input-field col l2">
          <input id="numero" type="text" class="validate">
          <label for="numero">No.</label>
        </div>
        <div class="input-field col l5">
          <input id="colonia" type="text" class="validate">
          <label for="colonia">Colonia</label>
        </div>
			</div>

			<div class="row">
				<div class="input-field col l6">
          <input id="ciudad" type="text" class="validate">
          <label for="ciudad">Ciudad</label>
        </div>
         <div class="input-field col l6">
          <input id="estado" type="text" class="validate">
          <label for="estado">Estado</label>
        </div>
			</div>
			<!-- Campos Contacto -->
			<div class="row">
				<h2>Contacto:</h2>
			</div>
			
			<div class="row">
				<div class="input-field col l6">
          <input id="telefono" type="text" class="validate">
          <label for="telefono">Telefono</label>
        </div>
        <div class="input-field col l6">
          <input id="email" type="text" class="validate">
          <label for="email">Correo Electronico</label>
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