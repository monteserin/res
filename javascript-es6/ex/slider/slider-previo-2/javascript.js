let contador = 0;
window.addEventListener('load', () =>{
    document.querySelector('#enlace1').addEventListener('click', () =>{
        contador++;
        if (contador == 3) contador = 0;
        const desplazamiento = contador * 500;
        document.querySelectorAll('.capa').forEach(obj => {
        	obj.style.opacity = 0;
        	obj.style.transform = 'scale(0)';
        });
        const elemento = contador+1;
        console.log(elemento)
        const obj = document.querySelector(".capa:nth-child("+elemento+")");
        obj.style.transform = "scale(1)";
        obj.style.opacity = "1";
    });
});