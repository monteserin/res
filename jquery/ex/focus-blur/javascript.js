$(document).ready(function () {
    $("#buscar").on('focus', function () {
        $("#buscar").val("primer texto");
    });
    $("#buscar").on('blur', function () {
        $("#buscar").val("segundo texto");
    });

});