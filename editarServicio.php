<?php
include('db.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_GET['id_servicio'])) {
        $id_servicio = $_GET['id_servicio'];
        $query = "SELECT * FROM servicios WHERE id_servicio = $id_servicio";
        $resultado = mysqli_query($conn, $query);
        if (mysqli_num_rows($resultado) == 1) {
            $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
            $id_servicio = $row['id_servicio'];
            $nombre_servicio = $row['nombre_servicio'];
            $descripcion = $row['descripcion'];
        }
    }







    ?>
    <form class="row g-3" action="updateServicio.php" id="editForm" method="POST">
        <div class="col-auto">
            <label for="">id </label>
            <input type="text" id="id-servicio" name="id_servicio" value="<?php echo $id_servicio ?>" readonly>

            <label for="validationCustom01" class="form-label">nombre_servicio</label>

            <input name="nombre_servicio" type="text" value="<?php echo $nombre_servicio ?>" class="form-control" id="nombre_servicio" placeholder="nombre_servicio">
        </div>
        <div class="col-auto">
            <label for="validationCustom01" class="form-label">descripcion</label>
            <input name="descripcion" value="<?php echo $descripcion ?>" type="text" class="form-control" id="descripcion" placeholder="descripcion"><br>
        </div>

        <div class="col-auto">
            <a href="servicios.php"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button></a>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" name="guardar" value="guardardocente">Registrar</button>
        </div>
    </form>
    <script src="validarUpdateServicios.js"></script>
</body>

</html>