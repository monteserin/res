const addGuiones = (txt) => {
    let palabraGenerada = '';
    for (let i = 0; i < txt.length; i++) {
        const letra = txt[i];
        palabraGenerada += letra + '-';
    }
    return palabraGenerada;
}

const nuevaPalabra = addGuiones('amor');
console.log(nuevaPalabra);