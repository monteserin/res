const nombre = 'Juan';
const material = 'madera';
const dimensiones = 'diminutas';
const comentario = 'Que sea bonita, pero de una belleza estraña, indómita';

const msg = nombre + ' ha pedido una caja de ' + material + ' con unas dimensiones ' + dimensiones + '. ' + comentario;

const msg2 = `${nombre} ha pedido una caja de ${material} con unas dimensiones ${dimensiones}. ${comentario}`;

console.log(msg2);