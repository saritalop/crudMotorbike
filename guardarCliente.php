<?php

include('db.php');

$id_cliente = $_POST['id'];
$nombre_cliente = $_POST['nombre'];
$cedula_cliente = $_POST['cedula'];
$email = $_POST['email'];
$direccion_cliente = $_POST['direccion'];
$telefono_cliente = $_POST['telefono'];
$query = "INSERT INTO clientes (id_cliente, nombre_cliente, cedula_cliente, email, direccion_cliente, telefono_cliente ) VALUES('$id_cliente', '$nombre_cliente','$cedula_cliente', '$email', '$direccion_cliente', '$telefono_cliente')";

$result = mysqli_query($conn, $query);

if (!isset($result)) {
    echo 'failed';
}

$_SESSION['message'] = 'El usuario se ha  registrado con exito';
$_SESSION['message type'] = 'success';
header("Location:clientes.php");
?>