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
    <link rel="preoland" href="css/Iniciar.css" as="Style">
    <link rel="stylesheet" href="css/Normalize.css">
    <link href="css/Iniciar.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="grid">
        <div class="c1">
            <header>
                <div class="hero">
                    <nav>
                        <UL>
                            <li><a href="Inicio.php">INICIO</a></li>
                            <li><a href="torta.php">MENU</a></li>
                            <li><a href="Contacto.php">CONTACTO</a></li>
                            <li><a href="Nosotros.php">NOSOTROS</a></li>
                        </UL>

                    </nav>
                </div>
            </header>
            <main class="Formulario">
                <h1 class="titulo">REPOSTERIA CIELITO</h1>
            </main>
            <div class="centrar">
                <div class="Contenedor">
                    <form id="Formulario" action="php/iniciar_usuario.php" method="POST">
                        <div class="Form-control">
                            <label for="E-mail">E-mail</label>
                            <input id="E-mail" type="text" name="e_mail">
                            <p></p>
                        </div>
                        <div class="Form-control">
                            <label for="Pass">Password</label>
                            <input id="Pass" type="Password" name="contrasena">
                            <p></p>
                        </div>
                        <input class="btn" type="submit" name="contact" value="Ingresar">
                        <a class="Registrar" href="Registrar.php">Registrar</a>
                    </form>
                </div>
            </div>
            <!-- <script src="app.js"></script>   -->
        </div>
        <div class="c2">
            <img class="logo" src="css/img/logo reposteria cielito.png" width="300px" height="380px">
            <h2>"Piensa positivo y<br> endulza tu vida"</h2>
        </div>
    </div>
    <hr>
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
    <!-- <script src="/Jodienda/js/app.js"></script>         -->
</body>

</html>