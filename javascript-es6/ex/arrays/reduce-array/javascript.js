const valores = [{precio: 1},{precio: 2},{precio: 3},{precio: 4}];
const arrayAcumulado = [];

let val = valores.reduce(
	// En cada iteración devolvemos el array con los valores que estamos acumulando
	(arrayAcumulado, obj) => [...arrayAcumulado,obj.precio*2], 
[]);