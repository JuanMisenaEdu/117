function validarFormularioClientes(){

    let tipoDocumento = document.getElementById("input-t-documento");
    let nroDocumento = document.getElementById("input-nro-documento");
    let nombre = document.getElementById("input-nombreCliente");

    tipoDocumento.style.border = "none";
    nroDocumento.style.border = "none";
    nombre.style.border = "none";

    if(tipoDocumento.value === "--" || tipoDocumento == ""){
        tipoDocumento.focus();
        tipoDocumento.style.border = "2px solid red";
        return false;
    }

    if(nroDocumento.value == ""){
        nroDocumento.focus();
        nroDocumento.style.border = "2px solid red";
        return false;
    }

    if(nombre.value == ""){
        nombre.focus();
        nombre.style.border = "2px solid red";
        return false;
    }
}

function ocultarFormularios(){
    formularioProductos = document.getElementById("formularioProducto");
    utilidadesProductos = document.getElementById("utilidadesProductos");

    formularioProductos.style.display = "none";
    utilidadesProductos.style.display = "none";
}

function mostrarFormulario(){
    formularioProductos = document.getElementById("formularioProducto");
    utilidadesProductos = document.getElementById("utilidadesProductos");

    formularioProductos.style.display = "";
    utilidadesProductos.style.display = "";
}