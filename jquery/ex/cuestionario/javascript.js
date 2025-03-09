$(function () {
    $("#comprobar_preguntas").click(function () {
        $("input[type=radio]:checked").each(function () {
            if ($(this).hasClass("correcta")) {
                $(this).closest("p").css("background", "green");
            } else {
                $(this).closest("p").css("background", "red");
            }
        })
    });
})