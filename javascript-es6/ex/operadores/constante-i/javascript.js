const i = 130;

if (i >= 0) {
    console.log(i + ' es positivo.');
} else {
    console.log(i + ' es negativo.');
}

if (i % 2 === 0) {
    console.log(`${i} es par.`);
} else {
    console.log(`${i} no es par.`);
}

if (i % 5 === 0) {
    console.log(`${i} es múltiplo de 5.`);
} else {
    console.log(`${i} no es múltiplo de 5.`);
}

if (i % 10 === 0) {
    console.log(`${i} es múltiplo de 10.`);
} else {
    console.log(`${i} no es múltiplo de 10.`);
}

if (i > 100) {
    console.log(i + ' es mayor que 100.');
} else {
    console.log(i + ' no es mayor que 100.');
}