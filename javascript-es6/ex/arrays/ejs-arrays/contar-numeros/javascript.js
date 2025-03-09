const numbers = [1, 9, -3, 8, -5, 0, 3, 4, 6, -7];

let positiveValues = 0;
let negativeValues = 0;
let zeroValues = 0;

for (let i = 0; i < numbers.length; i++) {
	if (numbers[i] > 0) {
		positiveValues++;
	} else if (numbers[i] < 0) {
		negativeValues++;
	} else {
		zeroValues++;
	}
}


console.log('Cantidad de positivos: ' + positiveValues);
console.log('Cantidad de negativos: ' + negativeValues);
console.log('Cantidad de ceros: ' + zeroValues);