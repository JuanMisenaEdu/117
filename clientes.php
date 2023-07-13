<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicioadmin.css">
    <link rel="stylesheet" href="css/clientes.css">
    <title> Reposteria Cielito | Dashboard</title>
</head>
<body>

    <header class="dash-menu">
        <img class="logo-dash-admin" src="css/img/logo_admin.png" alt="logo">
        <h1>Clientes</h1>
        <ul class="list-menu-ul">
            <li class='list-menu-dash'> Sergio Alejandro Panche </li>
            <li class="list-menu-dash"> <img class="img-menu-dash-users" src="css/img/usuario.png" alt=""> </li>
        </ul>
    </header>

    <section class="option-inventory" >
        <?php
            include("php/conexion.php");
        ?>

        <div class="info-inventory" >

            <nav class="input-busqueda">
                <input class="busqueda-cliente" type="search" name="" id="input-name-cliente" placeholder="Nombre Cliente">
                <button class="btn" id="btn-crear-cliente" onclick="abrirModalCrearCliente()">Crear Cliente </button>
                <!--
                <div class="div-img-busqueda">
                    <img src="css/img/lupa.png" class="img-busqueda" alt="">
                </div>
                -->
            </nav>

            <table class="table-list-product">
                <tr class="title-table-inventory">
                    <td class="head-table-inventory"> Tipo Documento </td>
                    <td class="head-table-inventory"> Número Documento </td>
                    <td class="head-table-inventory"> Nombre Completo </td>
                    <td class="head-table-inventory"> Telefono </td>
                    <td class="head-table-inventory"> Direccion </td>
                    <td class="head-table-inventory"> Email </td>
                    <td class="head-table-inventory"> Acciones </td>
                </tr>

                <?php
                    include("php/procesoCliente.php");
                ?>

            </table>

            <?php
                if ($contadorClientes == 0) {
                    echo('<p class="noClientes"> No existen clientes </p>');
                }
            ?>
        </div>

    </section>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span id="cerrarModal" class="close" onclick="cerrarModalCrearCliente()">&times;</span>
            <h2 class="titulo-crear-cliente">Crear cliente</h2>
            
            <form action="php/registrar_usuario.php" method="POST">
                <div class="registro-formulario">
                    <label for="tDocument" class="lbl-cliente">Tipo Documento:<strong>*</strong></label>    
                    <select name='tDocument' class="input-create-cliente">
                        <option selected disabled>--</option>
                        <option value="1">Cedula Ciudadania</option>
                        <option value="2">NIT</option>
                        <option value="3">Cedula Extranjeria</option>
                    </select>
                </div>

                <div class="registro-formulario">
                    <label for="nroIdentificacion" class="lbl-cliente">Número Documento:<strong>*</strong> </label>    
                    <input type="text" name="nroIdentificacion" class="input-create-cliente">
                </div>

                <div class="registro-formulario">
                    <label for="nombreCliente" class="lbl-cliente">Nombre:<strong>*</strong> </label>    
                    <input type="text" name="nombreCliente" class="input-create-cliente">
                </div>

                <div class="registro-formulario">
                    <label for="TelCliente" class="lbl-cliente">Telefono: </label>    
                    <input type="number" name="TelCliente" class="input-create-cliente">
                </div>

                <div class="registro-formulario">
                    <label for="DirCliente" class="lbl-cliente">Direccion:<strong>*</strong> </label>    
                    <input type="text" name="DirCliente" class="input-create-cliente">
                </div>

                <div class="registro-formulario">
                    <label for="email" class="lbl-cliente">Email:<strong>*</strong> </label>    
                    <input type="email" name="email" class="input-create-cliente">
                </div>

                <div class="registro-formulario">
                    <label for="contrasena" class="lbl-cliente">Contraseña:<strong>*</strong> </label>    
                    <input type="password" name="contrasena" class="input-create-cliente">
                </div>

                <div class="btn-formulario-cliente">
                    <button id="crearClienteBtn" class="btn" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/clientes.js"></script>
</body>
</html>