$(document).ready(function () {
    $("#boton").click(function () {
        alert($(this).closest("div").attr("id"));
    });
    $("#boton1").click(function () {
        alert($(this).parent("#capaIntermedia").attr("id"));
    });
    $("#boton2").click(function () {
        alert($(this).parents("div").eq(2).attr("id"));
    });
});