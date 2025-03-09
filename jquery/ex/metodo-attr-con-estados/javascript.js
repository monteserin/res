$(document).ready(function () {
    var i = 0;
    $("#boton1").click(function () {
        if (i % 2 == 0)
            $("#dibujo").attr("src", "/res/jquery/img/tuxes/tux2.png");
        else
            $("#dibujo").attr("src", "/res/jquery/img/tuxes/tux1.png");

        i++
    });

});