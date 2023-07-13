<?php

include ('conexion.php');

if(isset($_POST['contact'])){
    if (
        strlen ($_POST['name']) >= 1 && 
        strlen ($_POST['phone'])>= 1 &&
        strlen ($_POST['email'])>= 1 &&
        strlen ($_POST['message'])>= 1 
        ) {

            $name = trim($_POST['name']);
            $phone = trim($_POST['phone']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO contacto(nombre_contacto , telefono_contacto , email_contacto , mensaje_contacto, fecha_contacto)
            VALUES ('$name', '$phone', '$email', '$message', '$fecha')";
            $resultado = mysqli_query($conexion, $consulta);
            if($resultado) {
                echo'
                <script>
                    alert("Tu registro se ha completado");
                    window.location = "../contacto.php";
                </script>
            ';
              exit;
            } else {
                echo'
                <script>
                    alert("Ocurrio un error");
                    window.location = "../contacto.php";
                </script>
            ';
            }
    } else  { 
        echo'
        <script>
            alert("Llena todo los campos");
            window.location = "../contacto.php";
        </script>
    '; }  
}
?>


