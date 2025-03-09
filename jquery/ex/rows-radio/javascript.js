$(document).ready(inicializar);

function inicializar() {
    $("tr").click(function () {
        $("tr").css("background-color", "white");
        $(this).css("background-color", "#959E0F");
        $(this).find('input:radio').prop('checked', true);
    });
}