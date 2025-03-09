const cambiarImagen = _ => {
    document.querySelector('#imagen').setAttribute('src', '/res/javascript-es6/ex/cambiar-src/img/feliz.png');
}

document.querySelector('#imagen').addEventListener('click', cambiarImagen);