$(document).ready(function () {
    $(document).mousemove(function (event) {
        $("#cory").text("coordenada y=" + event.pageY);
    });
    $(document).click(function (e) {
        $("#corx").text("coordenada x=" + e.pageX);
    })
});