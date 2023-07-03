<?php

include('db.php');

$id_servicio = $_POST['id_servicio'];
$nombre_servicio = $_POST['nombre_servicio'];
$descripcion = $_POST['descripcion'];
$query = "UPDATE servicios set nombre_servicio='$nombre_servicio', descripcion='$descripcion' WHERE  id_servicio=$id_servicio";

$result = mysqli_query($conn, $query);

if (!isset($result)) {
    echo 'failed';
}

$_SESSION['message'] = 'El usuario se ha  registrado con exito';
$_SESSION['message type'] = 'success';
header("Location:servicios.php");
?>