$(document).ready(docLoaded);

function docLoaded() {
    $(".required").blur(contieneValor);
    $(".numero").blur(soloNumeros);
    $(".cincoNumeros").blur(cincoNumeros);
    $(".fecha").blur(validarFecha);
    $(".mail").blur(validarMail);

}

function soloNumeros() {
    if (isNaN($(this).val()) || $.trim($(this).val()) == "") {
        $(this).next().html("Sólo pueden insertarse numeros.");
        $(this).css("background", "salmon");
    } else {
        limpiar($(this));
    }
}

function cincoNumeros() {
    if ($(this).val().length != 5 || $.trim($(this).val()) == "" || isNaN($(this).val())) {
        $(this).next().html("Debe introducir 5 dígitos exactamente.");
        $(this).css("background", "salmon");
    } else {
        limpiar($(this));
    }
}

function validarFecha() {
    var cadena = $(this).val();
    var dia = cadena.substring(0, cadena.indexOf("/"));
    var mes = cadena.substring(cadena.indexOf("/") + 1, cadena.lastIndexOf("/"));
    var anio = cadena.substring(cadena.lastIndexOf("/") + 1, cadena.length);
    var fechaCorrecta = true;

    if (isNaN(anio) || anio.length != 4 || parseFloat(anio) < 1900) {
        fechaCorrecta = false;
    }
    if (isNaN(mes) || parseFloat(mes) < 1 || parseFloat(mes) > 12) {
        fechaCorrecta = false;
    }
    if (isNaN(dia) || parseFloat(dia) < 1 || parseFloat(dia) > 31) {
        fechaCorrecta = false;
    }

    /*Los meses 4, 6, 9 y 11 no tienen más de 30 días. Además, el mes 2 no tendrá más de 29 días*/
    if ((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia > 30)
        fechaCorrecta = false;
    if (mes == 2 && dia > 28)
        fechaCorrecta = false;

    if (fechaCorrecta == false) {
        $(this).next().html("Fecha incorrecta");
        $(this).css("background", "salmon");
    } else {
        limpiar($(this));
    }
}

function validarMail() {
    if (/^\w+([\.-]\w+)*@\w+([\.-]\w+)*$/.test($(this).val()) == false) {
        $(this).next().html("La dirección de email es incorrecta.");
        $(this).css("background", "salmon");
    } else {
        limpiar($(this));
    }
}

function contieneValor() {
    if ($(this).val() == "") {
        $(this).css("background", "salmon");
        $(this).next().html("El campo debe contener un valor.");
    } else {
        limpiar($(this));
    }
}

function limpiar(elemento) {
    elemento.css("background", "PaleGreen");
    elemento.next().html("");
}