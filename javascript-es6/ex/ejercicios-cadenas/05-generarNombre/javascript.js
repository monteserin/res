const generarNombre = (c1, c2, c3) => {
    if (c1.length < 5 || c2.length < 5 || c3.length < 5) {
        return 'error';
    } else {
        return c1.substring(0, 3) + c2.substring(0, 3) + c3.substring(0, 3);
    }
}

const nombre = generarNombre('casanova', 'coche', 'amoroso');
console.log(nombre);