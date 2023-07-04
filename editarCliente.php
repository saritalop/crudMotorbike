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

    if (isset($_GET['id_cliente'])) {
        $id_servicio = $_GET['id_cliente'];
        $query = "SELECT * FROM clientes WHERE id_cliente = $id_cliente";
        $resultado = mysqli_query($conn, $query);
        if (mysqli_num_rows($resultado) == 1) {
            $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
            $id_cliente = $row['id_cliente'];
            $nombre_cliente = $row['nombre_cliente'];
            $cedula_cliente = $row['cedula_cliente'];
            $email = $row['email'];
            $direccion_cliente = $row['direccion_cliente'];
            $telefono_cliente = $row['telefono_cliente'];
        }
    }

    ?>

<form action="updateCliente.php" method="POST" id="editForm">
                <div class="nombreUsua2">
                    <div class="input-box2">
                    <input type="hidden" id="editar-id" name="id" placeholder="Ingrese el Id del cliente" value="<?php echo $id_cliente ?>">
                    </div>
                    <div class="form-row">
                    <div class="input-box2">
                        <span class="details">Nombre</span><br>
                        <input type="text" id="editar-nombre" name="nombre" placeholder="Ingrese su nombre completo" value="<?php echo $nombre_cliente ?>" >
                    </div>
                    <div class="input-box2">
                        <span class="details">Cedula</span><br>
                        <input id="editar-cedula" name="cedula" type="text" placeholder="Ingrese su cedula" value="<?php echo $cedula_cliente ?>" >
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="input-box2">
                        <span class="details">Dirección</span><br>
                        <input id="editar-direccion" name="direccion" type="text" placeholder="Ingrese su dirección" value="<?php echo $direccion_cliente ?>" >
                    </div>
                    <div class="input-box2">
                        <span class="details">Email</span><br>
                        <input id="editar-email" name="email" type="text" placeholder="Ingrese su email" value="<?php echo $email ?>" >
                    </div>
                    </div>
                    <div class="input-box2">
                    <span class="details">Telefono</span><br>
                    <input id="editar-telefono" name="telefono" type="text" placeholder="Ingresa tu numero de telefono"  value="<?php echo $telefono_cliente ?>" >>
                    </div>
                    <br>
                    <br>
                    <div class="button-container">
                    <button type="submit" class="btn btn-outline-success" name="guardar">Actualizar</button>
                    <button type="submit" class="btn btn-outline-danger">Cancelar</button>
                    </div>
                </div>
                </form>

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
            <a href="servicios.php"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancelar</button></a>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" name="guardar" value="guardardocente">Guardar</button>
        </div>
    </form>
    <script src="validarEditarServicios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>