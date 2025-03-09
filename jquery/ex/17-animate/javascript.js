$(document).ready(function () {
    $("#boton1").click(anima);
    $("#boton2").click(anima2);
});

function anima() {
    $("#capaRoja").animate({"height": "800px"}, 500);
}

function anima2() {
    $("#capaRoja").animate({"height": "800px", "width": "800px"}, 500);
}