const generarNombre3 = (c1, c2, c3) => {
    if (c1.length < 5 || c2.length < 5 || c3.length < 5) {
        return 'error';
    } else {
        return c1.substring(c1.length - 3) + c2.substring(c2.length - 3) + c3.substring(c3.length - 3)
    }
}

const nuevaPalabra = generarNombre3('coche', 'garbanzo', 'cocodrilo');
console.log(nuevaPalabra);