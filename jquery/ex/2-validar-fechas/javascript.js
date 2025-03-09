$(document).ready(docLoaded);

function docLoaded() {
    $(".required").blur(validarFecha);
}

function validarFecha() {
    var cadena = $(".required").val();
    var dia = cadena.substring(0, cadena.indexOf("/"));
    var mes = cadena.substring(cadena.indexOf("/") + 1, cadena.lastIndexOf("/"));
    var anio = cadena.substring(cadena.lastIndexOf("/") + 1, cadena.length);

    if (isNaN(anio) || anio.length != 4 || parseFloat(anio) < 1900)
        alert("valor del año incorrecto");
    if (isNaN(mes) || parseFloat(mes) < 1 || parseFloat(mes) > 12)
        alert("valor del mes incorrecto");
    if (isNaN(dia) || parseFloat(dia) < 1 || parseFloat(dia) > 31)
        alert("valor del día incorrecto");
}
