var x;
$(document).ready(inicializarEventos);

function inicializarEventos() {
    $("#boton1").click(eliminarElementos)
    $("#boton2").click(restaurarLista);
    $("#boton3").click(anadirElementoFinal);
    $("#boton4").click(anadirElementoPrincipio);
    $("#boton5").click(eliminarElementoFinal);
    $("#boton6").click(eliminarElementoPrincipio);
    $("#boton7").click(eliminarPrimeroSegundo)
    $("#boton8").click(eliminarDosUltimos)
}

function eliminarElementos() {
    $("ul").empty();
}

function restaurarLista() {
    $("ul").html('<li>Primer item.</li><li>Segundo item.</li><li>Tercer item.</li><li>Cuarto item.</li>');
}

function anadirElementoFinal() {
    $("ul").append("<li>otro item al final</li>");
}

function anadirElementoPrincipio() {
    $("ul").prepend("<li>otro item al principio</li>");
}

function eliminarElementoFinal() {
    $("li").eq($("li").length - 1).remove();
}

function eliminarElementoPrincipio() {
    $("li").eq(0).remove();
}