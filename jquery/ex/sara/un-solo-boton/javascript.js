var contador = 0;
$(function () {
    $("#enlace1").click(function () {
        contador++;
        if (contador == 3) contador = 0;
        var desplazamiento = contador * 500;
        $("#layers").css("margin-left", -desplazamiento + "px");
    });

});