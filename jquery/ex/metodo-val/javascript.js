$(function () {
    $("#btn1").click(function () {
        $("#txt").val("value cambiado");
    });
    $("#btn2").click(function () {
        alert($("#txt").val());
    })
})