<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicioadmin.css">
    <title> Reposteria Cielito | Dashboard</title>
</head>
<body>
    
    <?php
        $nombre = $_GET['nombre'];
    ?>

    <header class="dash-menu">
        <img class="logo-dash-admin" src="css/img/logo_admin.png" alt="logo">
        <ul class="list-menu-ul">
            <?php
                echo("<li class='list-menu-dash'> $nombre </li>");
            ?>
            <li class="list-menu-dash"> <img class="img-menu-dash-users" src="css/img/usuario.png" alt=""> </li>
        </ul>
    </header>

    <div class="contenedor">
        <a href="clientes.php" class="contenedor-moduls">
            <img class="img-moduls" src="css/img/users.png" alt="img01">
            <h2 class="title-moduls">CLIENTES</h2>
            <p class="text-moduls" >Crea, modifica, consulta tus clientes y mas...</p>
        </a>

        <a href="dashboard-inventario.html" class="contenedor-moduls">
            <img class="img-moduls" src="css/img/productos.png" alt="img01">
            <h2 class="title-moduls">PRODUCTOS</h2>
            <p class="text-moduls" >Crea, modifica, consulta tus productos y mas...</p>
        </a>

        <a href="#" class="contenedor-moduls">
            <img class="img-moduls" src="css/img/empleados.png" alt="img01">
            <h2 class="title-moduls"> EMPLEADOS </h2>
            <p class="text-moduls"> Crea, modifica, consulta tus productos y mas... </p>
        </a>

        <a href="#" class="contenedor-moduls">
            <img class="img-moduls" src="css/img/ventas.png" alt="img01">
            <h2 class="title-moduls">VENTAS</h2>
            <p class="text-moduls"> Crea, modifica, consulta tus ventas y mas... </p>
        </a>

        <a href="#" class="contenedor-moduls">
            <img class="img-moduls" src="css/img/reportes.png" alt="img01">
            <h2 class="title-moduls">REPORTES</h2>
            <p class="text-moduls" > Crea y consulta tus reportes y mas... </p>
        </a>

        <a href="#" class="contenedor-moduls">
            <img class="img-moduls" src="css/img/mantenimiento.gif" alt="img01">
            <h2 class="title-moduls">PROXIMAMENTE</h2>
            <p class="text-moduls" > </p>
        </a>
    </div>

</body>
</html>