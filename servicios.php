<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="css/usuarios.css">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/51aee0fcba.js" crossorigin="anonymous"></script>



</head>

<body>
    <!-- BOTON DE GENERAR REPORTES -->

    <div class="text-right">
        <a href="fpdf/reporteServicios.php" id="reporte" target="_blank" class="btn btn-success"><i class="fas fa-file-pdf"></i></a>


    </div>


    <!-- BARRA Y BOTÓN DE BUSQUEDA -->

    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" id="barraBusqueda">
    <button class="btn btn-outline-dark " id="botonBuscar" type="submit">Buscar</button>


    <div id="content">

        <section>
            <br>
            <h1 class="h1">Servicios</h1>


            <div class="div1">
                <div class="div2"><a href="#" class="agregar" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg> Agregar Servicio</a></div>


                <!-- BARRA DE BUSQUEDA -->




                <style>
                    .container {
                        max-width: 700px;
                        width: 100%;
                        padding: 25px 30px;
                        border-radius: 5px;

                    }

                    .container .title {
                        font-size: 25px;
                        font-weight: 500;
                        position: relative;
                    }

                    .container .title::before {
                        content: '';
                        position: absolute;
                        left: 0;
                        bottom: 0;
                        height: 3px;
                        width: 30px;
                        background: linear-gradient(135deg, #88BDBF, #000);

                    }

                    .container form .nombreUsua {
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-between;
                        margin: 20px 50px 20px 0px;
                    }

                    form .nombreUsua .input-box {
                        margin-bottom: 15px;
                        width: calc(100% / 3=20px);

                    }

                    #barraBusqueda {
                        position: absolute;
                        width: 150px;
                        top: 185px;
                        left: 710px;
                    }

                    #botonBuscar {
                        position: absolute;

                        top: 185px;
                        left: 850px;
                    }



                    .nombreUsua .input-box .form-select {
                        height: 40px;
                        width: 245px;

                    }

                    .nombreUsua .input-box .details {
                        font-weight: 500;
                        margin-bottom: 10px;
                        margin-left: 40px;
                    }

                    .nombreUsua .input-box input {
                        height: 40px;
                        width: 250px;
                        outline: none;
                        border-radius: 5px;
                        border: 1px solid #ccc;
                        padding-left: 15px;
                        font-size: 16px;
                        border-bottom-width: 2px;
                        transition: all 0.3s ease;
                        border-color: #88BDBF;
                        margin-left: 45px;


                    }

                    /* .nombreUsua .input-box input:focus,
                    .nombreUsua .input-box input:valid{
                        border-color: #88BDBF;
                    } */

                    .form-select {
                        border: 1px solid #ccc;
                        border-bottom-width: 2px;
                        border-color: #88BDBF;
                    }

                    .button {
                        margin-left: -90px;
                    }

                    .btn-outline-dark {
                        margin-left: 20px;


                    }

                    .modar-header {
                        align-items: center;
                    }

                    #estado {

                        margin-left: 45px;
                    }

                    #estado {
                        margin-left: 50px;
                    }

                    #estadoSpan {
                        margin-left: 0px;
                    }

                    #estadoAdd {
                        margin-left: 0px;
                    }

                    #IconoEstado {
                        color: green;
                        cursor: pointer;
                    }

                    #reporte {
                        position: absolute;
                        width: 50px;
                        top: 185px;
                        left: 950px;
                    }
                </style>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Servicio</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">

                                    <form action="guardarServicios.php" id="formula" method="post">


                                        <div class="nombreUsua">
                                            <div class="input-box">
                                                <span class="details">Nombre</span><br>
                                                <input type="text" id="nombre_servicio" name=nombre_servicio placeholder="Ingrese el nombre">
                                            </div>


                                            <div class="input-box">
                                                <span class="details">Descripción</span><br>
                                                <input id="descripcion" name="descripcion" type="text" placeholder="Ingrese la descripción">
                                            </div>


                                            <div class="input-box" id="estado">
                                                <span class="details" id="estadoAdd">Estado</span><br>
                                                <select id="rol" class="form-select" aria-label="Default select example">
                                                    <option value="1">Activo</option>
                                                    <option value="2">Inactivo</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-outline-dark">Agregar</button>
                                            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal" onclick="cancelar()">Cancelar</button>


                                    </form>

                                </div>
                                <br>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <br>
            <br>

            <table class="table" id="tableData">
                <thead>
                    <tr class="tr">
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody id="user-list">
                    <?php
                    $query = "SELECT * FROM servicios";
                    $result_1 = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_1)) { ?>


                        <tr>
                            <td><?php echo $row['id_servicio'] ?></td>
                            <td><?php echo $row['nombre_servicio'] ?></td>
                            <td><?php echo $row['descripcion'] ?></td>

                            <!-- BOTON DE EDITAR -->
                            <td><a href="editarServicio.php?id_servicio=<?php echo $row['id_servicio'] ?>">EDITAR</a></td>
                            <td><a href="deleteServicios.php?id_servicio=<?php echo $row['id_servicio'] ?>"><i class="fa-solid fa-power-off" id="IconoEstado"></i></a></td>




                        <?php
                    }
                        ?>
                        <!-- DESDE ACÁ SE PEGA EL MODAL -->




                        <style>
                            .Editar {
                                text-decoration: none;
                                color: #000;
                            }
                        </style>




                        <!-- 
                        <nav class="pagination" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

        </section>
    </div> -->
                        <script src="hola.js"></script>

                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>