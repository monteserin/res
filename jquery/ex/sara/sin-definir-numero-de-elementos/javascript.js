var contador = 0;
var n = 0;
$(function () {
    n = $("#layers .capa").length;
    var ancho_contenedora = n * 500;
    $("#layers").css("width", ancho_contenedora + "px");
    $("#enlace1").click(function () {

        contador++;
        if (contador == n) contador = 0;
        var desplazamiento = contador * 500;
        var elemento = contador + 1;
        $(".capa").css("opacity", 0).css("transform", "scale(0)");
        $(".capa:nth-child(" + elemento + ")").css("opacity", 1).css("transform", "scale(1)");

        $("#layers").css("margin-left", -desplazamiento + "px");
    });

});