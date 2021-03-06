<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Agregar Servicio</title>	 
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="js/application.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    

</head>

<body>
	<!-- Header -->
	<?php require 'header.php' ?>

	<main>
		<div class="container">
			<!-- Titulos -->
			<div class="row center">
				<h1>Agregar Servicio</h1>
			</div>
			<!-- Campos Nuevo Servicio -->
			<div class="row">
				<div class="input-field col l4">
          <input type="text" class="datepicker validate">
          <label for="fecha">Fecha</label>          
        </div>
        <div class="input-field col l4">
          <select>
            <option value="" disabled selected>Seleccionar Tipo de Servicio</option>
            <option value="1">Gobierno</option>
            <option value="2">Empresarial</option>
            <option value="3">Habitacional</option>
          </select>
          <label>Tipo de Servicio</label>
        </div>
        <div class="input-field col l4">
          <select>
            <option value="" disabled selected>Seleccionar Cliente</option>
            <option value="1">Cliente 1</option>
            <option value="2">Cliente 2</option>
            <option value="3">Cliente 3</option>
          </select>
          <label>Cliente</label>
        </div>
        <div class="input-field col l4">
          <select>
            <option value="" disabled selected>Seleccionar Problema</option>
            <option value="1">Problema 1</option>
            <option value="2">Problema 2</option>
            <option value="3">Problema 3</option>
          </select>
          <label>Problema</label>
        </div>
        <div class="input-field col l4">
          <select>
            <option value="" disabled selected>Seleccionar Técnico</option>
            <option value="1">Técnico 1</option>
            <option value="2">Técnico 2</option>
            <option value="3">Técnico 3</option>
          </select>
          <label>Técnico</label>
        </div>
        <div class="input-field col l4">
          <input id="presupuesto" type="text">
          <label for="presupuesto">Presupuesto</label>
        </div>
        <div class="input-field col l4">
          <select>
            <option value="" disabled selected>Seleccionar</option>
            <option value="1">No</option>
            <option value="2">Si</option>
          </select>
          <label>Técnico</label>
        </div>    
        <div class="input-field col l4">
          <input id="recibo" type="text">
          <label for="recibo">Recibo o factura (Asignar Folio)</label>
        </div>
         <div class="input-field col l4">
          <select>
            <option value="" disabled selected>Seleccionar Forma de Pago</option>
            <option value="1">Efectivo</option>
            <option value="2">Tarjeta de Debito</option>
            <option value="3">Tarjeta de Crédito</option>
          </select>
          <label>Forma de Pago</label>
        </div>
        <div class="input-field col l4">
          <input id="costo" type="text">
          <label for="costo">Costo</label>
        </div>
         <div class="input-field col l8">
          <input id="observaciones" type="text">
          <label for="observaciones">Observaciones del Técnico</label>
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