var contador = 0;
$(function () {
    $("#enlace1").click(function () {
        contador++;
        if (contador == 3) contador = 0;
        var desplazamiento = contador * 500;
        var elemento = contador + 1;
        $(".capa").css("opacity", 0).css("transform", "scale(0)");
        $(".capa:nth-child(" + elemento + ")").css("opacity", 1).css("transform", "scale(1)");

        $("#layers").css("margin-left", -desplazamiento + "px");
    });

});
