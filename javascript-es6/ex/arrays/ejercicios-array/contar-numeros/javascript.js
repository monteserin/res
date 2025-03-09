const numbers = [1, 9, -3, 8, -5, 0];
let positivesCounter = 0;
let negativesCounter = 0;
let zerosCounter = 0;

const result = numbers.forEach(number => {
	if (number > 0) positivesCounter++;
	else if (number < 0) negativesCounter++;
	else zerosCounter++;
});

console.log(positivesCounter); // 3
console.log(negativesCounter); // 2
console.log(zerosCounter); // 1

