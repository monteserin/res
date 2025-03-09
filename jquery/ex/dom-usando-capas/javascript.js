$(document).ready(inicializarEventos);

function inicializarEventos() {
    $("#eliminarElementos").click(function () {
        $("div").empty();
    })
    $("#pintarCuadradoVerde").click(function () {
        $("div").html("<span id='rqr' style='float:left; background-color:green; width:50px; height:30px'></span>");
    });
    $("#anadirElementoAlFinal").click(function () {
        $("div").append("<span style=' float:left; background-color:blue'>texto al final</span>");
    });
    $("#anadirElementoAlPrincipio").click(function () {
        $("div").prepend("<span style='float:left; background-color:green'>texto al pricipio</span>");
    });
    /*Mediante el método eq (equal) indicamos la posición del elemento que vamos a borrar*/

    $("#eliminarUltimoElemento").click(function () {
        $("span").eq($("span").length - 1).remove();
    });
    $("#eliminarPrimerElemento").click(function () {
        $("span").eq(0).remove();
    });
}