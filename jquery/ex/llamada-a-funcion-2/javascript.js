$(document).ready(inicializar);

function inicializar() {
    $("#boton").on('click', botonPulsado);
}

function botonPulsado() {
    alert("Boton pulsado");
}