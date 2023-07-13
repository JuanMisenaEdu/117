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
    <link rel="preoland" href="css/contacto.css" as="Style">
    <link href="css/contacto.css" rel="stylesheet" type="text/css">
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
                        <li><a href="Inicio.php"><i class="fa-sharp fa-solid fa-house"
                                    style="color: #000000;"></i>INICIO</a></li>
                    </UL>
                </div>
                <div class="centrar">
                    <p>CONTACTO</p>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="contacto-container">
            <form action="php/contactoo.php" method="post" autocomplete="off">
                <div class="form-group">
                    <div class="form-contet">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" placeholder="name">
                    </div>

                    <div class="form-contet">
                        <label for="phone">Telefono:</label>
                        <input type="tel" id="phone" name="phone" placeholder="Telefono">
                    </div>

                    <div class="form-contet">
                        <label for="email">Correo:</label>
                        <input type="email" id="email" name="email" placeholder="Correo">
                    </div>
                </div>

                <label for="message">PQRS:</label>
                <textarea class="textarea" name="message" id="message" cols="30" rows="10" placeholder="PQRS"></textarea>

                <input class="btn" type="submit" name="contact" value="Enviar PQRS">
            </form>
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
<?php
    include('contactoo.php')
?>

</html>