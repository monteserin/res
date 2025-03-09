const dniSinLetra = prompt('Introduce tu DNI, sin la letra');

const calcularLetraDNI = (txt) => {
    if (txt.length === 8 && Number(dniSinLetra)) {
        const resto = txt % 23;
        const letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
        const letra = letras.charAt(resto);
        return letra;

    } else {
        return null;
    }
}

const letra = calcularLetraDNI(dniSinLetra);
console.log(letra);