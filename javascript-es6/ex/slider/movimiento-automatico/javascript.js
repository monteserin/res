let contador = 0;
let n = 0;
window.addEventListener('load', () => {
    n = document.querySelectorAll("#layers .capa").length;
    const ancho_contenedora = n * 500;

    document.querySelector('#layers').style.width = ancho_contenedora + "px";
    setInterval(function () {
        avanza()
    }, 1500);
    document.querySelector('#enlace1').addEventListener('click', () => {
        avanza();
    });

});

function avanza() {
    contador++;
    if (contador == n) contador = 0;
    const desplazamiento = contador * 500;
    const elemento = contador + 1;
    document.querySelectorAll('.capa').forEach(obj => {
        obj.style.opacity = 0;
        obj.style.transform = 'scale(0)';
    })
    const obj = document.querySelector('.capa:nth-child(' + elemento + ')');
    obj.style.opacity = 1;
    obj.style.transform = 'scale(1)';

    document.querySelector('#layers').style.marginLeft = -desplazamiento + 'px';
}