let a = 5;
let b = 7;
let c = a;
a = b;
b = c;
console.log('a: ', a); //Debería mostrar 7
console.log('b: ', b); //Debería mostrar 5