const tieneLetra = (txt, letra) => txt.toUpperCase().indexOf(letra.toUpperCase()) >= 0;

const laLetraEsta = tieneLetra('amor', 'R');
console.log(laLetraEsta);
