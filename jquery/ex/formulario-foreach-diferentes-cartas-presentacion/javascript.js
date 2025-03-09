$(function () {
    comprobarOpcionesSeleccionadas();

    $("input").click(function () {
        comprobarOpcionesSeleccionadas();
    })
});

function comprobarOpcionesSeleccionadas() {
    var $inputs = $("input:checked");
    var txtFinal = "";
    $inputs.each(function () {


        txtFinal += $(this).val() + "<br><br/>";

    });
    $("#coste").html(txtFinal);
}