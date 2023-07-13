<?php

    include 'conexion.php';

    $tipoDocumento = $_POST['tDocument'];
    $nroIdentificacion = $_POST['nroIdentificacion'];
    $nombre = $_POST['nombreCliente'];
    $telefono = $_POST['TelCliente'];
    $direccion = $_POST['DirCliente'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $tipoUsuario = 'C';

    // Antes de insertar se valida que el correo no exista en la bases de datos
    $SQLcorreoExistente = "SELECT * FROM cliente WHERE clienteEmail='$email'";
    $verificar_email = mysqli_query($conexion, $SQLcorreoExistente);
    
    if(mysqli_num_rows($verificar_email) > 0){
        echo'<script>
                alert("Este e_mail ya esta registrado, ingresar otro diferente");
                window.location = "../Registrar.php";
            </script>';
        exit;
    } else {
        //encriptar contraseña
        $contrasena = hash('sha512', $contrasena);

        // Sentencia insertar usuario
        $SQLinsertUsuario = "INSERT INTO usuario VALUES (0, '$nombre', '$email', '$contrasena', '$tipoUsuario')";

        // Sentencia consultar usuarioId
        $SQLrecuperarIdUsuario = "SELECT * FROM usuario WHERE usuarioEmail = '$email'";

        // Insertamos usuario
        $ResultadoInsert = mysqli_query($conexion, $SQLinsertUsuario);
        
        if($ResultadoInsert){
            $ResultadoIdUsuario = mysqli_query($conexion, $SQLrecuperarIdUsuario);

            $registroidUsuario = mysqli_fetch_assoc($ResultadoIdUsuario);
            $idUsuario = $registroidUsuario['usuarioId'];

            // Sentencia insertar cliente
            $SQLinsertCliente = "INSERT INTO cliente values(0, $tipoDocumento, '$nroIdentificacion', '$nombre', $telefono, '$direccion', '$email', $idUsuario)";

            // Insertamos tabla cliente
            $ResultadoInsert = mysqli_query($conexion, $SQLinsertCliente);

            if($ResultadoInsert){
            echo '
                <script>
                    alert("Usuario registrado exitosamente");
                    window.location = "' . $_SERVER['HTTP_REFERER'] . '";
                </script>';
            }else{
                echo '
                    <script>
                        alert("Error Insertando Cliente");
                        window.location = "' . $_SERVER['HTTP_REFERER'] . '";
                    </script>
                ';
            }
        }
        exit;
    }

?>