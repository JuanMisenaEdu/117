<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicioadmin.css">
    <link rel="stylesheet" href="css/clientes.css">
    <title> Reposteria Cielito | Dashboard</title>
</head>
<body>

    <header class="dash-menu">
        <img class="logo-dash-admin" src="css/img/logo_admin.png" alt="logo">
        <h1>Clientes</h1>
        <ul class="list-menu-ul">
            <li class='list-menu-dash'> Sergio Alejandro Panche </li>
            <li class="list-menu-dash"> <img class="img-menu-dash-users" src="css/img/usuario.png" alt=""> </li>
        </ul>
    </header>

    <div class="registro-productos">
      <h1 class="text-title">Tabla de Productos</h1>
        <form id="dataform" action="" class="formularios">
            <div class="form-contet">
            <label form="name">Nombre:</label>
                <div class="centrar-text-input">
                <input type="text" id="name" required class="campos-input caja-texto" id="input-nombreCliente">
                </div>
            </div>

            <div class="form-contet">
            <label form="name">Numero documento:</label>
                <div class="centrar-text-input">
                <input type="text" id="documento" required class="campos-input caja-texto" id="input-nro-documento">
                </div>
            </div>

            <div class="form-contet">
            <label form="name">Telefono:</label>
                <div class="centrar-text-input">
                <input type="tel" id="telefono" required class="campos-input caja-texto" id="input-telefonoCliente">
                </div>
            </div>

            <div class="form-contet">
                <label for="t-cargo">Tipo cargo:</label>
                <div class="centrar-text-input">
                    <select name="t-cargo" class="campos-input caja-texto" id="input-t-cargo">
                        
                        <option disabled selected>--Selecionar cargo--</option>
                        <option value="1">cajero</option>
                        <option value="2">Vendedor</option>
                        <option value="3">Patelero</option>
                    </select>
                </div> 
            </div>

            <div class="seccion-boton" value="--">
                <input type="submit" class="btn btn-agregar" value="Agregar">
                <p class="text-informativo">(*) Campos Obligatorios</p>
            </div>
        </form>
    </div>

</body>
</html>