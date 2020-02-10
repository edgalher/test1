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
			<div class="row">
				<h1>Problemas</h1>
			</div>
			<!-- Menu de opciones para problemas -->
			<div class="row">
				<div class="col l6">
					<a href="nuevoProblema.html">Agregar Problema</a>
				</div>
				<div class="input-field col l6">
	        <input id="buscar" type="text" class="validate">
	        <label for="buscar">Buscar</label>
	      </div>
			</div>
			<!-- Tabla Problemas -->
			<div class="row">
				<div class="col l12">
					<table>
			        <thead>
			          <tr>
			          	<th>No.</th>
		              <th>Problema</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			            <td>1</td>
			            <td>Chinches</td>			            
			          </tr>
			          <tr>
			            <td>2</td>
			            <td>Cucarachas</td>
			          </tr>
			          <tr>
			            <td>3</td>
			            <td>Arañas</td>
			          </tr>
			        </tbody>
			     </table>
				</div>
			</div>
		</div>
	</main>
	
</body>
</html>