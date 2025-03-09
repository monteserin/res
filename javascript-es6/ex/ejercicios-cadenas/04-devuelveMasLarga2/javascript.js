const devuelveMasLarga2 = (txt1, txt2, txt3) => {
    const txt1Length = txt1.length;
    const txt2Length = txt2.length;
    const txt3Length = txt3.length;

    if (txt1Length > txt2Length && txt1Length > txt3Length) {
        return txt1;
    } else if (txt2Length > txt1Length && txt2Length > txt3Length) {
        return txt2;
    } else if (txt3Length > txt1Length && txt3Length > txt2Length) {
        return txt3;
    } else {
        return 'No hay una única cadena más larga.';
    }
}


const v = devuelveMasLarga2('hola', 'adios', 'hello');
console.log(v);