$(document).ready(function () {
    $("#boton1").click(function () {
        $("#rojo").addClass("animated bounce");
        window.setTimeout(function () {
            $("#rojo").removeClass('animated bounce');
        }, 2000);
    });
});