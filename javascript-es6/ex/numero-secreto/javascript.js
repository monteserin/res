const nRandom = Math.floor(Math.random() * 5) + 1;
let tries = 0;
const output = document.querySelector('output');
const button = document.querySelector('button');
const evaluate = () => {
	const n = document.querySelector('#n').value;
	if (Number(n) === nRandom) {
		output.value = "Muy bien, has acertado";
	} else {
		output.value = "Muy mal, has fallado";
		tries++;
		if (tries === 3) {
			output.value = "Muy mal, has perdido";
			button.disabled = true;
		}
	}
}
button.addEventListener('click', evaluate)