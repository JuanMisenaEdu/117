<?php

    include 'conexion.php';

    $e_mail = $_POST['e_mail'];
    $contrasena = $_POST['contrasena'];

    $consultausuario = "SELECT * FROM usuario WHERE usuarioEmail ='$e_mail'";

    $validar_login = mysqli_query($conexion, $consultausuario);

    if(mysqli_num_rows($validar_login) > 0 ){
        $registrobd = mysqli_fetch_assoc($validar_login);

        $contrasenabd = $registrobd['usuarioPassword'];
        $nombreUsuario = $registrobd['usuarioNombre'];

        $contrasenadigitada = hash('sha512', $contrasena);

        if ($contrasenadigitada == $contrasenabd) {
            $tipousuario = $registrobd['usuarioTipoUsuario'];

            if ($tipousuario == 'C') {
                header("location: ../inicioadmin.php?nombre=$nombreUsuario");
                exit;
            }else{
                header("location: ../inicio.php");
                exit;
            }
        } else{
            echo'<sript>
                     alert("contraseña incorrecta, por favor verifique los datos ingresados");
                 </sript>';
            exit;
        }
        
    } else{
        echo'
            <sript>
                alert("Usuario no existe, por favor verifique los datos ingresados");
                window.location = "../iniciar.php";
            </sript>         
        ';
        exit;
    }
?>