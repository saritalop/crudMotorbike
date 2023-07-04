<?php
include("db.php");

if (isset($_GET['id_cliente'])) {
    $id_cliente = $_GET['id_cliente'];
    
    $query = "DELETE  FROM clientes WHERE id_cliente = $id_cliente";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("consulta fallida");
    }
    $_SESSION['message_usuario_borrado'] = 'usuario borrado correctamente';
    $_SESSION['message type'] = 'warning ';

    header("Location:clientes.php");
}
?>