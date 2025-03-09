$(document).ready(function () {
    $("#boton1").click(function () {
        $("#descripcion").addClass("recuadro");
    });
    $("#boton2").click(function () {
        $("#descripcion").removeClass("recuadro");
    });
});