const contadorLetras = (txt, letra) => {
    let contadorLetras = 0;
    for (let i = 0; i < txt.length; i++) {
        if (txt[i].toUpperCase() === letra.toUpperCase()) contadorLetras++;
    }
    return contadorLetras;
}

const cantidadLetras = contadorLetras('casa', 'A');
console.log(cantidadLetras);