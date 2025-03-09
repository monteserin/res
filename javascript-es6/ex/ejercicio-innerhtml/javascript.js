const cambiaContenidoCapa2 = _ => {
    document.querySelector("#capa2").innerHTML = "Has hecho mouse over sobre la capa 1";
}

document.querySelector('#capa1').addEventListener('mouseover', cambiaContenidoCapa2);