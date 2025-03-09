$(document).ready(docLoaded);

function docLoaded() {
    $(".required").blur(validarFecha);
}

function validarFecha() {
    var cadena = $(".required").val();
    var dia = cadena.substring(0, cadena.indexOf("/"));
    var mes = cadena.substring(cadena.indexOf("/") + 1, cadena.lastIndexOf("/"));
    var anio = cadena.substring(cadena.lastIndexOf("/") + 1, cadena.length);

    console.log("dia: " + dia);
    console.log("mes: " + mes);
    console.log("anio: " + anio);
}