var n = 0;
var contador = 1;
var signo = 1;
$(function () {
    n = $("#layers .capa").length;
    var ancho_contenedora = n * 500;

    $("#layers").css("width", ancho_contenedora + "px");
    setInterval(function () {
        avanza()
    }, 1500);
    $("#enlace1").click(function () {

        avanza();
    });

});

function avanza() {
    var desplazamiento = contador * 500;
    var elemento = contador + 1;
    $(".capa").css("opacity", 0).css("transform", "scale(0)");
    $(".capa:nth-child(" + elemento + ")").css("opacity", 1).css("transform", "scale(1)");

    $("#layers").css("margin-left", -desplazamiento + "px");


    if (contador >= n - 1 || contador < 1) {
        signo = signo * (-1);
    }
    contador = contador + 1 * signo;


}