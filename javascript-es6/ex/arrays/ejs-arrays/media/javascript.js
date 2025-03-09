const numbers = [1, 9, -3, 8, -5, 0, 3, 4, 6, -7];

let positiveSum = 0;
let positiveCount = 0;

let negativeSum = 0;
let negativeCount = 0;

for (let i = 0; i < numbers.length; i++) {
	if (numbers[i] > 0) {
		positiveSum += numbers[i];
		positiveCount++;
	} else if (numbers[i] < 0) {
		negativeSum += numbers[i];
		negativeCount++;
	}
}


console.log('La media de los positivos es: ' + positiveSum / positiveCount);

console.log('La media de los negativos es: ' + negativeSum / negativeCount);

