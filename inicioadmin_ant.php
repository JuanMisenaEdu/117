<!DOCTYPE html>
<html>

  <head lang="en">
    <meta charset="utf-8">
    <meta name="descrption" content="Venta de Postres">
    <meta name="Keywards" content="Venta de postres,Postres,Tortas,Galletas,Resposteria">
    <meta name="author" content="Resposteria Cielito">
    <title> Resposteria Cielito</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Allan&family=Courgette&family=Roboto&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="css/Normalize.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="css/inicioadmin.css" rel="stylesheet" type="text/css">
    <link rel="preoland" href="css/inicioadmin.css" as="Style">
  </head>

<body onload="ocultarFormularios()">
  <header>
    <div class="hero">
      <nav>
        
      </nav>
    </div>
  </header>
  <hr>
  <main class="Exhibicion">
    <div class="navegacion">
      <ul class="list">
        <div class="icon-user">
          <img src="/tienda/css/iconos/user.svg" alt="">
          <?php
            $nombre = $_GET['nombre'];

            echo("<p>Hola $nombre</p>");
          ?>
        </div>
        <li class="lista_item lista_item--click">
          <div class="lista_button lista_button--click">
            <a href="#" class="nav_link">Menu</a>
            <img src="/tienda/css/iconos/flecha.svg" class="list_flecha">
          </div>

          <ul class="list_show">
            <li class="list_inside">
              <a href="#.php" class="nav_link nav_link--inside" onclick="mostrarFormulario()">Clientes</a>
            </li>


            <li class="list_inside">
              <a href="#" class="nav_link nav_link--inside">Productos</a>
            </li>

            <li class="list_inside">
              <a href="#.php" class="nav_link nav_link--inside">Empleados</a>
            </li>

            <li class="list_inside">
              <a href="#.php" class="nav_link nav_link--inside">Reportes</a>
            </li>

             <li class="list_inside">
              <a href="#.php" class="nav_link nav_link--inside">Ventas</a>
            </li>

          </ul>
        </li>
      </ul>
    </div>

    <div class="registro-productos" id="formularioProducto">
      <h1 class="text-title">Registro Clientes</h1>
      <form action="" class="formularios" onsubmit="return validarFormularioClientes()">
        <label for="t-documento">Tipo Documento: <strong>*</strong> </label>
        <select name='t-documento' type='t-documento' class="campos-input caja-texto" value="--" id="input-t-documento">
            <option selected disabled>--</option>
            <option value="1">Cedula Ciudadania</option>
            <option value="2">NIT</option>
            <option value="3">Pasaporte</option>
            <option value="4">Tarjeta Identidad</option>
        </select>

        <label for="nrodocumento">Número Documento: <strong>*</strong> </label>
        <input type="number" name="nrodocumento" class="campos-input caja-texto" id="input-nro-documento">

        <label for="nombreCliente">Nombre: <strong>*</strong> </label>
        <input type="text" name="nombreCliente" class="campos-input caja-texto" id="input-nombreCliente">

        <label for="telefonoCliente">Telefono:</label>
        <input type="number" name="telefonoCliente" class="campos-input caja-texto" id="input-telefonoCliente">

        <label for="direccionCliente">Dirección: </label>
        <input type="text" name="direccionCliente" class="campos-input caja-texto" id="input-direccionCliente">

        <div class="seccion-boton">
          <input type="submit" class="btn btn-agregar" value="Agregar">
          <p class="text-informativo">(*) Campos Obligatorios</p>
        </div>
        
      </form>
    </div>

    <div class="seccion-utilidades" id="utilidadesProductos">
      <div class="utilidades">
        <a href="#" class="img-utilidades"><img src="css/img/registros/consultar.png" alt=""></a>
        <p>Consultar Usuarios</p>
      </div>
      
      <div class="utilidades">
        <a href="#" class="img-utilidades"><img src="css/img/registros/reporte.png" alt=""></a>
        <p>Reporte Usuarios</p>
      </div>
    </div>

  </main>
  <footer>
   
  </footer>
</body>

<script src="/tienda/js/validarRegistro.js"></script>
<script src="/tienda/js/barra.js"></script>
<script src="/tienda/js/carro.js"></script>

</html>