$(document).ready(function () {
    $("#buscar").mouseover(function () {
        $(this).val("primer texto");
    });
    $("#buscar").mouseout(function () {
        $(this).val("segundo texto");
    });
});