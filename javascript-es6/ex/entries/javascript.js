const obj = {
	nombre : 'Pablo',
	apellidos: 'Monteserín',
	edad : 36
}
//Convertimos un objeto en un array de arrays
const arrayDeArrays = Object.entries(obj);
console.log(arrayDeArrays);