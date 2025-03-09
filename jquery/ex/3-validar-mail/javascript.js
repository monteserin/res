$(document).ready(docLoaded);

function docLoaded() {
    $(".required").blur(validarMail);
}

function validarMail() {
    var valor = $(".required").val();
    if (/^\w+[\.-]$/.test(valor)) {
        alert("La dirección de email " + valor + " es correcta.");
    } else {
        alert("La dirección de email es incorrecta.");
    }
}