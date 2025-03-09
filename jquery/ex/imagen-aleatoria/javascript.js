$(function () {
    $("#btn").click(function () {
        var n_aleatorio = Math.floor(Math.random() * 2) + 1;
        $("#foto").attr("src", "/res/jquery/img/tuxes/tux" + n_aleatorio + ".png");
    });
});