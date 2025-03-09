$(document).ready(function () {
    $("#boton1").click(function () {
        $("#wrapper").html('<div style="background:red; width:300px; height:300px"></div>');
    });
    $("#boton2").click(function () {
        alert($("#wrapper").html());
    });
});