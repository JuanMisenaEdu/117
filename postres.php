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
  <link rel="preoland" href="css/productos.css" as="Style">
  <link href="css/productos.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/Normalize.css">
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <div class="hero">
      <nav>
        <div class="logo_header">
          <img src="css/img/logo reposteria cielito.png" alt="" width="">
          <UL>
            <li><a href="Inicio.php"><i class="fa-sharp fa-solid fa-house" style="color: #000000;"></i>INICIO</a></li>
          </UL>
        </div>
        <div class="centrar">
          <P>MENU</P>
          <div class="buscar">
            <input type="text" placeholder="Buscar">
            <button><i class="fas fa-search"></i></button>
          </div>
        </div>
        <div class="carrito">
          <div class="container-card-icon">
            <i class="fas fa-shopping-cart fa-lg"></i>
            <div class="count-products">
              <span id="contador-prodcutos">0</span>
            </div>
          </div>

          <div class="container-card-products hidden-card">
            <div class="rows-product">
              <div class="card-product">
                <div class="info-card-product">
                  <span class="cantidad-producto-carrito">1</span>
                  <p class="titulo-producto-carrito">cheekse</p>
                  <span class="precio-producto-carrito">$30</span>
                </div>
                <img class="close" src="/JODIENDA//css/iconos/cruzar.png" alt="">
              </div>
            </div>
            <div class="cart-total">
              <h3>Total:</h3>
              <span class="total-pagar">
                $200
              </span>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <hr>
  <main class="Exhibicion">
    <div class="navegacion">
      <ul class="list">
        <li class="lista_item lista_item--click">
          <div class="lista_button lista_button--click">
            <a href="#" class="nav_link">Productos</a>
            <img src="/Jodienda/css/iconos/flecha.svg" class="list_flecha">
          </div>

          <ul class="list_show">
            <li class="list_inside">
              <a href="#" class="seleccionado nav_link--inside ">Postres</a>
            </li>


            <li class="list_inside">
              <a href="tortas.php" class="nav_link nav_link--inside">Tortas</a>
            </li>

            <li class="list_inside">
              <a href="galletas.php" class="nav_link nav_link--inside">Galletas</a>
            </li>

            <li class="list_inside">
              <a href="Cupcakes.php" class="nav_link nav_link--inside">Cupcakes</a>
            </li>

          </ul>
        </li>
        <li class="lista_item lista_item--click">
          <div class="lista_button lista_button--click">
            <a href="#" class="nav_link">Fechas especiales</a>
            <img src="/Jodienda/css/iconos/flecha.svg" class="list_flecha">
          </div>

          <ul class="list_show">
            <li class="list_inside">
              <a href="cumpleaños.php" class="nav_link nav_link--inside">Cumpleaños</a>
            </li>

            <li class="list_inside">
              <a href="boda.php" class="nav_link nav_link--inside">Bodas</a>
            </li>

            <li class="list_inside">
              <a href="baby.php" class="nav_link nav_link--inside">Baby shower </a>
            </li>

            <li class="list_inside">
              <a href="otro.php" class="nav_link nav_link--inside">Otros</a>
            </li>

          </ul>
        </li>
      </ul>
    </div>
    <div class="grid">
      <div class="img-exhibicion">
        <img src="css/img/postres/cheesecake.jpg">
        <a href="productos/postres/cheesek.php" class="boton-exhibixion">Postre cheesecake</a>
      </div>
      <div class="img-exhibicion">
        <img src="css/img/postres/turron.jpg">
        <a href="postre.html" class="boton-exhibixion">Turron mousse</a>
      </div>
      <div class="img-exhibicion">
        <img src="css/img/postres/limon.jpg">
        <a href="postre.html" class="boton-exhibixion">Postre de limon</a>
      </div>
      <div class="img-exhibicion">
        <img src="css/img/postres/chococrema.jpg">
        <a href="postre.html" class="boton-exhibixion">Postre de frambuesa</a>
      </div>
      <div class="img-exhibicion">
        <img src="css/img/postres/chococrema.jpg">
        <a href="postre.html" class="boton-exhibixion">Postre chococrema</a>
      </div>
      <div class="img-exhibicion">
        <img src="css/img/postres/chocolate.jpg">
        <a href="postre.html" class="boton-exhibixion">Postre de chocolate</a>
      </div>
      <div class="img-exhibicion">
        <img src="css/img/postres/waffle.jpg">
        <a href="postre.html" class="boton-exhibixion">Postre de waffle</a>
      </div>
      <div class="img-exhibicion">
        <img src="css/img/postres/fresa.jpg">
        <a href="postre.php" class="boton-exhibixion">Postre de fresa</a>
      </div>
    </div>
  </main>
  <footer>
    <div class="container_footer">
      <div class="box_footer">
        <div class="logo_footer">
          <img src="css/img/logo reposteria cielito.png" alt="" width="">
        </div>
        <div class="termino">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit nisi,
            inventore optio saepe tempora voluptatum debitis illum.
            Eveniet, quaerat odit cum nulla quidem eum distinctio
            deserunt impedit accusamus illo saepe.
          </p>
        </div>
      </div>
      <div class="box_footer">
        <h2>Soluciones</h2>
        <a href="#">App</a>
        <a href="#">App</a>
        <a href="#">App</a>
        <a href="#">App</a>
      </div>

      <div class="box_footer">
        <h2>Compañia</h2>
        <a href="#">Acerca de</a>
        <a href="#">Trabajos</a>
        <a href="#">Procesos</a>
        <a href="#">Servicios</a>
      </div>

      <div class="box_footer">
        <h2>Redes sociales</h2>
        <a href="#"> <i class="fa-brands fa-facebook"></i> Facebook</a>
        <a href="#"> <i class="fa-brands fa-instagram"></i> Instagram</a>
      </div>
    </div>
    <div class="copyright">
      <hr>
      <p>Todos los derechos reservados © 2023
        <b>ReposteriaCielito</b>
      </p>
    </div>
  </footer>
</body>
<script src="/Jodienda/js/barra.js"></script>
<script src="/Jodienda/js/carro.js"></script>

</html>