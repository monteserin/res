$(document).ready(function () {
    $("#titulo1").on('click', function () {
        $("#titulo1").css("color", "#ff0000");
        $("#titulo1").css("background-color", "#ffff00");
        $("#titulo1").css("font-family", "Courier");
    });

    $("#titulo2").on('click', function () {
        $("#titulo2").css("color", "#ffff00");
        $("#titulo2").css("background-color", "#ff0000");
        $("#titulo2").css("font-family", "Arial");
    });

});