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
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra&family=Allan&family=Courgette&family=Roboto&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="css/Normalize.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="/JODIENDA/css/detalle.css" rel="stylesheet" type="text/css">
    <link rel="preoland" href="/JODIENDA/css/detalle.css" as="Style">
</head>

<body>
    <header>
        <div class="hero">
            <nav>
                <div class="logo_header">
                    <img src="/JODIENDA/css/img/logo reposteria cielito.png" alt="" width="">
                    <UL>
                        <li><a href="Inicio.php"><i class="fa-sharp fa-solid fa-house"
                                    style="color: #000000;"></i>INICIO</a></li>
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
                            <span id="contador-productos">0</span>
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
    <main>
        <div class="detalle-container">
            <div class="silencioso">
                <div class="img">
                    <img src="/JODIENDA//css/img/postres/cheesecake.jpg" alt="">
                </div>
                <div class="detalle-informacion">
                    <div class="titulo-flex">
                        <a href="../../Inicio.php">Inicio</a>
                        <span class="lash">/</span>
                        <a href="postres.php">Postres</a>
                    </div>

                    <div class="contenedor-informacion">
                        <div class="titulo-detalle">
                            <h1>Cheesecake</h1>
                            <p class="precio">$65.000</p>
                        </div>
                    </div>

                   
                    <input class="boton-detalle" type="submit" value="Agregra al carrito">
                    <div class="texto-info">
                    <p class="texto-informacion">Nuestra clasica torta</p>
                    </div>
                    
                </div>
            </div>

        </div>
    </main>
    <footer>
        <div class="container_footer">
            <div class="box_footer">
                <div class="logo_footer">
                    <img src="/JODIENDA//css/img/logo reposteria cielito.png" alt="" width="">
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
<script src="/JODIENDA//js/carro.js"></script>

</html>