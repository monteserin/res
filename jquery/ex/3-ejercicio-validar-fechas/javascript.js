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

    /*Los meses 4, 6, 9 y 11 no tienen más de 30 días. Además, el mes 2 no tendrá más de 29 días*/
    if ((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia > 30)
        alert('valor del mes incorrecto');
    if (mes == 2 && dia > 28)
        alert('valor del mes incorrecto');
}