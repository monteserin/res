$(function () {
    console.log("llega")
    $('.filtro a').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var filtro = $(this).attr('href');
        filtro = filtro.substring(1, filtro.length);
        var $objs = $('.box');

        if (filtro == "todos") {
            $objs.each(function () {
                $this = $(this);
                $this.removeClass("oculta")

            });
        } else {
            $objs.each(function () {
                $this = $(this);
                if ($this.hasClass(filtro)) {
                    $this.removeClass("oculta")
                } else {
                    $this.addClass("oculta")
                }
            });

        }
    });
})