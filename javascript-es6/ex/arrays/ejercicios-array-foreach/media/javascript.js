const arr = [1, 9, -3, 8, -5, 0, 3, 4, 6, -7];

let positiveSum = 0;
let positiveCount = 0;
let negativeSum = 0;
let negativeCount = 0;

for (let i = 0; i < arr.length; i++) {
	const n = arr[i];
	if (n > 0) {
		positiveSum += n;
		positiveCount++;
	} else if (n < 0) {
		negativeSum += n;
		negativeCount++;
	}
}


console.log("Media de positivos : " + (positiveSum / positiveCount));
console.log("Media de negativos : " + (negativeSum / negativeCount));