$(document).ready(docLoaded);

function validacionFinal() {
    var formularioValido = true;
    var objetosValidacion = $(".required");
    objetosValidacion.push($(".numero"));
    objetosValidacion.push($(".fiveDigits"));
    objetosValidacion.push($(".fecha"));
    objetosValidacion.push($(".mail"));
    objetosValidacion.each(function (i) {
        if ($(this).attr("valido") != "true") {
            formularioValido = false;
            return false;
        }
    });
    if (formularioValido == false) {
        alert("Revise el formulario, hay datos incorrectos");

    } else {
        alert("Eviando formulario...")
    }
}

function docLoaded() {
    $(".required").blur(contieneValor);
    $(".numero").blur(soloNumeros);
    $(".fiveDigits").blur(fiveDigits);
    $(".fecha").blur(validarFecha);
    $(".mail").blur(validarMail);
    $("#enviar").click(validacionFinal);
}

function soloNumeros() {
    if (isNaN($(this).val()) || $.trim($(this).val()) == "") {
        pintarError($(this), "Sólo pueden insertarse numeros.");
    } else {
        limpiar($(this));
    }
}

function fiveDigits() {
    if ($(this).val().length != 5 || $.trim($(this).val()) == "" || isNaN($(this).val())) {
        pintarError($(this), "Debe introducir 5 dígitos exactamente.");
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
        pintarError($(this), "Fecha incorrecta");
    } else {
        limpiar($(this));

    }
}

function validarMail() {
    if (/^\w+([\.-]\w+)*@\w+([\.-]\w+)*$/.test($(this).val()) == false) {
        pintarError("La dirección de email es incorrecta.");
    } else {
        limpiar($(this));
    }
}

function contieneValor() {
    if ($(this).val() == "") {
        pintarError($(this), "El campo debe contener un valor.");

    } else {
        limpiar($(this));
    }
}

function pintarError(elemento, msg) {
    elemento.css("background", "salmon");
    elemento.next().html(msg);
    elemento.attr("valido", "false");
}

function limpiar(elemento) {
    elemento.css("background", "PaleGreen");
    elemento.next().html("");
    elemento.attr("valido", "true");
}