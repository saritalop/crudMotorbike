<?php

include('db.php');


$nombre_servicio = $_POST['nombre_servicio'];
$descripcion = $_POST['descripcion'];
$query = "INSERT INTO servicios(id_servicio, nombre_servicio, descripcion) VALUES(NULL, '$nombre_servicio','$descripcion')";

$result = mysqli_query($conn, $query);

if (!isset($result)) {
    echo 'failed';
}

$_SESSION['message'] = 'El usuario se ha  registrado con exito';
$_SESSION['message type'] = 'success';
header("Location:servicios.php");
?>