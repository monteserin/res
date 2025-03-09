$(function () {
    var $mywindow = $(window);
    var mypos = $mywindow.scrollTop();
    $mywindow.scroll(function () {
        if ($mywindow.scrollTop() > mypos) {
            $('.nav').fadeOut();
        } else {
            $('.nav').fadeIn();
        }
        mypos = $mywindow.scrollTop();
    });

})	