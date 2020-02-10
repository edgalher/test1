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
				<h1>Servicios</h1>
			</div>
			<!-- Menu de opciones para servicios -->
			<div class="row">
				<div class="col l6">
					<a href="nuevoServicio.html">Nuevo</a>
				</div>
				<div class="input-field col l6">
	        <input id="buscar" type="text" class="validate">
	        <label for="buscar">Buscar</label>
	      </div>
			</div>
		
		<!-- Tabla de Servicios -->
			<div class="row">
				<div class="col l12">
					<table>								        
		        <thead>
		          <tr>
		          	<th>No.</th>
		          	<th>Fecha</th>
		          	<th>Tipo de Servicio</th>
	              <th>Cliente</th>
	              <th>Problema</th>
	              <th>Tecnico</th>
	              <th>Presupuesto</th>
	             <!--  <th>Atencion a Garantia (Si/No)</th>
	              <th>Recibo o Factura</th>
	              <th>Forma de Pago</th>
	              <th>Costo</th>
	              <th>Observaciones del Técnico</th> -->
	              <th>Detalles</th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Fecha</td>
		            <td>Dependencia de Gobierno</td>
		            <td>Juan Pérez López</td>
		            <td>Cucarachas</td>
		            <td>José Cardenas</td>
		            <td>$ 3,000.00</td>
		            <!-- <td>No</td>
		            <td>0536</td>
								<td>Tarjeta de Debito</td>
								<td>$ 3,000.00</td>
								<td>Ninguna</td> -->
								<td><a href="#">Ver</a></td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>Fecha</td>
		            <td>Empresarial</td>
		            <td>Juan López Pérez</td>
		            <td>Arañas</td>
		            <td>José Cardenas</td>
		            <td>$ 3,000.00</td>
		            <!-- <td>No</td>
		            <td>Pendiente</td>
								<td>Tarjeta de Credito</td>
								<td>$ 3,000.00</td>
								<td>Ninguna</td> -->
								<td><a href="#">Ver</a></td>
		          </tr>
		          <tr>
		            <td>3</td>
		            <td>Fecha</td>
		            <td>Habitacional</td>
		            <td>Juan López Pérez</td>
		            <td>Ratones</td>
		            <td>José Cardenas</td>
		            <td>$ 3,000.00</td>
		            <!-- <td>No</td>
		            <td>0689</td>
								<td>Efectivo</td>
								<td>$ 3,000.00</td>
								<td>Ninguna</td> -->
								<td><a href="#">Ver</a></td>
		          </tr>
		        </tbody>
			    </table>
				</div>
			</div>
		</div>
	</main>
	
</body>

</html>