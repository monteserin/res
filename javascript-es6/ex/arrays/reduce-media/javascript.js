const numbers = [1, 2, 3];
const r = numbers.reduce((acc, number) => acc + number, 0) / numbers.length;

console.log(r);
