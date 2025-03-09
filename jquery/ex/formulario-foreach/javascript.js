$(function () {
    comprobarOpcionesSeleccionadas();

    $("input").click(function () {
        comprobarOpcionesSeleccionadas();
    })
});

function comprobarOpcionesSeleccionadas() {
    var $inputs = $("input:checked");
    var valueFinal = 300;
    $inputs.each(function () {


        valueFinal += parseInt($(this).val());

    });
    $("#coste").html(valueFinal + " €");
}