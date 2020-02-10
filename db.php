<?php 
$serverName = "localhost:3308";
$dBUsername = "root";
$dbPassword = "";
$dBName = "fumipronort";

$conn = mysqli_connect($serverName, $dBUsername, $dbPassword, $dBName);

if(!$conn){
    die("La conexión ha fallado: ".mysqli_connect_error());
}

function agregarCliente($apellidoP, $apellidoM, $nombre, $direccion, $telefono, $correo, $conn){
    $sql = "INSERT INTO cliente (apellidoP, apellidoM, nombre, direccion, telefono, correo)
    VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../clientes.php?error=sqlError");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "ssssss", $apellidoP, $apellidoM, $nombre, $direccion, $telefono, $correo);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
  
    }

    
}
?>