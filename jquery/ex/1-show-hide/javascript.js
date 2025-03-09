$(document).ready(function () {
    $("#boton1").click(function () {
        $("#capaRoja").hide("slow");
    });
    $("#boton2").click(function () {
        $("#capaRoja").show("fast");
    });
});

/*"show" muestra el objeto con una animación que dura tantos milisegundos como le indicamos:
show([cantidad de milisegundos])

"show" muestra el objeto con una animación que dura tantos milisegundos como le indicamos
y ejecuta al final la función que le pasamos como segundo parámetro:
show([cantidad de milisegundos],[función])
*/