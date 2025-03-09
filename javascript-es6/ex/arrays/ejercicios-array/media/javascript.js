const numbers = [1, 9, -3, 8, -5, 0];
let positives = 0;
let negatives = 0;
let positivesCounter = 0;
let negativesCounter = 0;
const result = numbers.forEach(number => {
	if (number > 0) {
		positives += number;
		positivesCounter++;
	} else if (number < 0) {
		negatives += number;
		negativesCounter++;
	}
});

const r1 = positives / positivesCounter;
const r2 = negatives / negativesCounter;

console.log(r1);
console.log(r2);

