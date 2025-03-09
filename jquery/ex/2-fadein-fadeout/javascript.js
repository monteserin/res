$(document).ready(inicializarEventos);

function inicializarEventos() {
    $("#boton1").click(function () {
        $("#capaRoja").fadeOut("slow");
    });
    $("#boton2").click(function () {
        $("#capaRoja").fadeIn("slow");
    });
}
