const cosas = ['corazon', 'cara sonriente', 'sol'];
console.log(cosas); // ['corazon', 'cara sonriente', 'sol'];

cosas.push('fresa'); // Añade elemento al final
console.log(cosas); // ['corazon', 'cara sonriente', 'sol', 'fresa'];

cosas.pop(); // Elimina el último elemento
console.log(cosas); // ['corazon', 'cara sonriente', 'sol']

const newArray = cosas.slice(1, 2); //Devuelve un recorte desde la posición indicada por el primer parámetro hasta la posición indcada por el segundo parámetro
console.log(newArray); // ['cara sonriente']

cosas.splice(1, 2) //Elimina, a partir de cierta posición (primer parámetro), el número de elementos indicado (segundo parámetro)   
console.log(cosas); // ['corazon']	