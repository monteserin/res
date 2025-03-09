$(document).ready(docLoaded);

function docLoaded() {
    $(".required").blur(validarSiHayAlgoEscrito);
}

function validarSiHayAlgoEscrito() {
    if ($.trim($(".required").val()) == "")
        alert("Debe introducir algún valor");
}