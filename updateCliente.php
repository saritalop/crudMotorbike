<?php

include('db.php');

$id_cliente = $_POST['id'];
$nombre_cliente = $_POST['nombre'];
$cedula_cliente = $_POST['cedula'];
$email = $_POST['email'];
$direccion_cliente = $_POST['direccion'];
$telefono_cliente = $_POST['telefono'];
$query = "UPDATE clientes set nombre_cliente='$nombre_cliente', cedula_cliente='$cedula_cliente', email='$email', direccion_cliente='$direccion_cliente' , telefono_cliente='$telefono_cliente'  WHERE  id_cliente=$id_cliente";

$result = mysqli_query($conn, $query);

if (!isset($result)) {
    echo 'failed';
}

$_SESSION['message'] = 'El usuario se ha  registrado con exito';
$_SESSION['message type'] = 'success';
header("Location:servicios.php");
?>