const numbers = [1, 9, -3, 8, -5, 0, 3, 4, 6, -7];

let postiveCount = 0;
let negativeCount = 0;
let zeroCount = 0;

numbers.forEach(number => {
	if (number > 0) {
		postiveCount++;
	} else if (number < 0) {
		negativeCount++;
	} else {
		zeroCount++;
	}
});

console.log('Cantidad de positivos: ' + postiveCount);
console.log('Cantidad de negativos: ' + negativeCount);
console.log('Cantidad de ceros: ' + zeroCount);