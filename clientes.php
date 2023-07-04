<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="css/usuarios.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/51aee0fcba.js" crossorigin="anonymous"></script>

    <script src="clientes.js"></script>

</head>

<body>

    <!-- BARRA Y BOTÓN DE BUSQUEDA -->
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" id="barraBusqueda">
        <button class="btn btn-outline-dark " id="botonBuscar" type="submit">Buscar</button>

    <div id="content">

        <section>
            <br>
            <h1 class="h1">Clientes</h1>


            <div class="div1">
                <div class="div2"><a href="#" class="agregar" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg
                            xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg> Agregar Cliente</a></div>
                <style>
                    .container {
                        max-width: 700px;
                        width: 100%;
                        padding: 25px 30px;
                        border-radius: 5px;

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
                        background: linear-gradient(135deg, #000000, #000);

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
                        border: 1px solid #636262;
                        padding-left: 15px;
                        font-size: 16px;
                        border-bottom-width: 2px;
                        transition: all 0.3s ease;
                        border-color: #000000;
                        margin-left: 45px;


                    }

                    /* .nombreUsua .input-box input:focus,
                        .nombreUsua .input-box input:valid{
                            border-color: #88BDBF;
                        } */

                    .form-select {
                        border: 1px solid #636262;
                        border-bottom-width: 2px;
                        border-color: #000000;
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

                    #IconoEstado {
                        color: green;
                        cursor: pointer;
                    }
                </style>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Cliente</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form id="formulario" action="guardarCliente.php" method="post">
                                        <div class="nombreUsua">
                                            <div class="input-box">
                                                <span class="details">Nombre</span><br>
                                                <input type="text" id="nombre" placeholder="Ingrese su nombre completo"
                                                    >
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Cedula</span><br>
                                                <input id="cedula" type="text" placeholder="Ingrese su cedula" >
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Dirección</span><br>
                                                <input id="direccion" type="text" placeholder="Ingrese su direccion"
                                                    >
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Email</span><br>
                                                <input id="email" type="text" placeholder="Ingrese su email" >
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Telefono</span><br>
                                                <input id="telefono" type="text"
                                                    placeholder="Ingresa tu numero de telefono" >
                                            </div>
                                            <br>
                                            <div class="button-container">
                                            <button type="submit" class="btn btn-outline-success" name="actualizar">Agregar</button>
                                            <button type="submit" class="btn btn-outline-danger">Cancelar</button>
                                            </div>

                                        </div>
                                        <br>
                                    </form>
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
                            <th scope="col">Cedula</th>
                            <th scope="col">Email</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody id="user-list">
                    <?php
                    $query = "SELECT * FROM clientes";
                    $result_1 = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_1)) { ?>
                        <tr>
                            <td><?php echo $row['id_cliente'] ?></td>
                            <td><?php echo $row['nombre_cliente'] ?></td>
                            <td><?php echo $row['cedula_cliente'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['direccion_cliente'] ?></td>
                            <td><?php echo $row['telefono_cliente'] ?></td>
                            <!-- BOTON DE EDITAR -->
                            <td><a href="editarCliente.php?id_cliente=<?php echo $row['id_cliente'] ?>">EDITAR</a></td>
                            <td><a href="deleteCliente.php?id_cliente=<?php echo $row['id_cliente'] ?>"><i class="fa-solid fa-power-off" id="IconoEstado"></i></a></td>

                            <?php
                    }
                        ?>
                            <!-- <td><a href="#" class="Editar" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <style>
                                    .Editar {
                                        text-decoration: none;
                                        color: #000;
                                    }
                                </style>
                                <div class="modal fade" id="exampleModal2" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Cliente</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <form action="#">
                                                        <div class="nombreUsua">
                                                            <div class="input-box">
                                                                <span class="details">Nombre</span><br>
                                                                <input type="text" id="nombreE"
                                                                    placeholder="Ingrese su nombre completo" required>
                                                            </div>
                                                            <div class="input-box">
                                                                <span class="details">Cedula</span><br>
                                                                <input id="cedulaE" type="text"
                                                                    placeholder="Ingrese su cedula" required>
                                                            </div>
                                                            <div class="input-box">
                                                                <span class="details">Dirección</span><br>
                                                                <input id="direccionE" type="text"
                                                                    placeholder="Ingrese su dirección" required>
                                                            </div>
                                                            <div class="input-box">
                                                                <span class="details">Email</span><br>
                                                                <input id="emailE" type="text"
                                                                    placeholder="Ingrese su email" required>
                                                            </div>
                                                            <div class="input-box">
                                                                <span class="details">Telefono</span><br>
                                                                <input id="telefonoE" type="text"
                                                                    placeholder="Ingresa tu numero de telefono"
                                                                    required>
                                                            </div>


                                                        </div>
                                                        <br>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-dark"
                                                    onclick="guardar()">Guardar</button>
                                                <button type="button" class="btn btn-outline-dark"
                                                    data-bs-dismiss="modal" onclick=""
                                                    id="modalcancelar">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>


                            <!-- ICONO DE ESTADO -->
                            <!-- <td><i class="fa-solid fa-power-off" id="IconoEstado"></i></td> --> 



                            <!-- <td><i onclick="toggleFunctionality()"><svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-power" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 6a7.75 7.75 0 1 0 10 0"></path>
                        <path d="M12 4l0 8"></path>
                     </svg></i></td> -->
                            <!-- <td> 
                        <a href="#" class="btn btn-danger btn-sm delete" onclick="clearFields()">Delete</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                    </td>
                    
                    </tr> -->
                    </tbody>
                </table>

            </div>
            <!-- <div class="search" width="40%" style="margin-top: -396px; margin-left: 690px;">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Buscar</button>
                </form>
            </div> -->

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
    </div>
    <script src="estadoColor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>