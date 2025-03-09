const n1 = Number(prompt('Introduce el primer número'));
const n2 = Number(prompt('Introduce el segundo número'));
const op = prompt('Introduce la operación a realizar');

let resultado;
if (op === '+') {
    resultado = n1 + n2;
} else if (op === '-') {
    resultado = n1 - n2;
} else if (op === '*') {
    resultado = n1 * n2;
} else if (op === '/') {
    resultado = n1 / n2;
}

alert(resultado);
