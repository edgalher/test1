<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
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
				<h1>Clientes</h1>
			</div>
			<!-- Menu de opciones para Clientes -->
			<div class="row">
				<div class="col l6">
					<a href="nuevoCliente.html">Agregar Cliente</a>
				</div>
				<div class="input-field col l6">
					<input id="buscar" type="text" class="validate">
					<label for="buscar">Buscar</label>
				</div>
			</div>
			<!-- Tabla de Clientes -->
			<div class="row">
				<div class="col l12">
					<table>
						<thead>
							<tr>
								<th>No.</th>
								<th>Nombre</th>
								<th>Apellido Paterno</th>
								<th>Apellido Materno</th>
								<th>Domicilio</th>
								<th>Telefono</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$sql = "SELECT * FROM CLIENTE";
							if ($result = $conn->query($sql)) {
								while ($row = $result->fetch_assoc()) { ?>

									<tr>
										<td><?php echo $row['idCliente']?></td>
										<td><?php echo $row['nombre']?></td>
										<td><?php echo $row['apellidoP']?></td>
										<td><?php echo $row['apellidoM']?></td>
										<td><?php echo $row['direccion']?></td>
										<td><?php echo $row['telefono']?></td>
									</tr>
							<?php
								}
							}
							?>
						
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>

</body>

</html>