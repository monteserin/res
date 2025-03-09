$(function () {
    $('#hamburger').click(function () {
        if ($(".menu").hasClass("desplegado")) {
            $(".menu").removeClass("desplegado");
        } else {
            $(".menu").addClass("desplegado");
        }
    });
})