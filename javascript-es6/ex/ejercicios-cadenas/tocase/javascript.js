const toCase = (txt) => {
    return txt.toLowerCase() + '-' + txt.toUpperCase();
}

const palabras = toCase('Pablo');
console.log(palabras);