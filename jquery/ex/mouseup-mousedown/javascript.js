$(document).ready(function () {
    $("#buscar").on('mousedown', function () {
        $("#buscar").val("primer texto");
    });
    $("#buscar").on('mouseup', function () {
        $("#buscar").val("segundo texto");
    });
});