<?php
include("db.php");

if (isset($_GET['id_servicio'])) {
    $id_servicio = $_GET['id_servicio'];
    $query = "DELETE  FROM servicios WHERE id_servicio = $id_servicio";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("consulta fallida");
    }
    $_SESSION['message_usuario_borrado'] = 'usuario borrado correctamente';
    $_SESSION['message type'] = 'warning ';

    header("Location:servicios.php");
}
?>