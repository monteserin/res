$(document).ready(function () {
    $(".ver_popup").click(function () {
        $(".black_overlay").css('display', 'block')
    });

    $(".black_overlay").click(function (e) {
        if (e.target == this) {
            $(".black_overlay").css("display", "none");
        }
    });
});