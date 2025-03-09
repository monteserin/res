const generarNombre2 = (c1, c2, c3) => {
    if (c1.length < 5 || c2.length < 5 || c3.length < 5) {
        return 'error';
    } else {
        return c1.substring(c1.length - 1) + c2.substring(c2.length - 1) + c3.substring(c3.length - 1);
    }
}

const nombre = generarNombre2('coche', 'troglodita', 'spierman');
console.log(nombre);