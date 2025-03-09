const epic = ['a', 'long', 'time', 'ago', 'in a', 'galaxy', 'far far', 'away'];
const frase = epic.reduce((acc, el) => `${acc} ${el}`);
console.log(frase);