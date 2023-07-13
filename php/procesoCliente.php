<?php

    $contadorClientes = 0;
    $clientes = array();

    $SQLconsultarClientes = "SELECT * FROM cliente";

    $dataCliente = mysqli_query($conexion, $SQLconsultarClientes);

    if(mysqli_num_rows($dataCliente) > 0 ){

        while ($registroCliente = mysqli_fetch_assoc($dataCliente)) {
            $contadorClientes++;
            
            $clientes[] = $registroCliente;

            echo('<tr>');

            if ($registroCliente['clienteTipoDocumento'] == '1') {
                echo('<td class="body-table-inventory"> CC </td>');
            } else {
                echo('<td class="body-table-inventory"> NIT </td>');
            }
            
            echo('<td class="body-table-inventory">'.$registroCliente['clienteNroDocumento'].'</td>');
            echo('<td class="body-table-inventory">'.$registroCliente['clienteNombre'].'</td>');
            echo('<td class="body-table-inventory">'.$registroCliente['clienteTelefono'].'</td>');
            echo('<td class="body-table-inventory">'.$registroCliente['clienteDireccion'].'</td>');
            echo('<td class="body-table-inventory">'.$registroCliente['clienteEmail'].'</td>');
            echo('<td class="body-table-inventory"> <img src="css/img/EliminarCliente.png" alt="eliminar"> <img src="css/img/updateCliente.png" alt="update"> </td>');
            echo('</tr>');
        } 

    }

    mysqli_close($conexion);
?>