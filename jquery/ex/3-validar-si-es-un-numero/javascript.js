$(document).ready(docLoaded);

function docLoaded() {
    $(".required").blur(validarSiHayAlgoEscrito);
}

function validarSiHayAlgoEscrito() {
    if (isNaN($(".required").val()))
        alert("Debe introducir un número");
}