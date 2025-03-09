$(document).ready(function () {
    $("#btn").click(function () {
        alert($(this).closest("span").siblings("select").val());
    });
});