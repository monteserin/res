let n = 0;
let contador = 1;
let signo = 1;
window.addEventListener('load', () =>{
    n = document.querySelectorAll("#layers .capa").length;
    const ancho_contenedora = n * 500;

    document.querySelector("#layers").style.width = ancho_contenedora + 'px';
    setInterval(avanza, 1500);
    document.querySelector('#enlace1').addEventListener('click', () =>{
        avanza();
    });
});

function avanza() {
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

    if (contador >= n - 1 || contador < 1) {
        signo = signo * (-1);
    }
    contador = contador + 1 * signo;
}