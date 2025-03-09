$(document).ready(docLoaded);

function docLoaded() {
    $(".required").blur(validarSiHayAlgoEscrito);
}

function validarSiHayAlgoEscrito() {
    if ($(".required").val() == "")
        alert("Debe introducir algún valor");
}