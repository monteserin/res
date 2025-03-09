$(function () {
    $window = $(window);
    distanciaInicial = $('.nav').offset().top;
    $(window).scroll(function () {
        if ($window.scrollTop() >= distanciaInicial) {
            $('.nav').addClass('pegado');
        } else {
            $('.nav').removeClass('pegado');
        }
    });
});