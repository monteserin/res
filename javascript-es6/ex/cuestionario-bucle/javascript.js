const evaluateAnswers = () => {
	document.querySelectorAll('input[type=radio]').forEach((input) => {
		input.closest('p').style.backgroundColor = 'transparent';
	});

	document.querySelectorAll('input[type=radio]:checked').forEach((answer) => {
		if (answer.classList.contains('right')) {
			answer.closest('p').style.backgroundColor = 'palegreen';
		} else {
			answer.closest('p').style.backgroundColor = 'red';
		}
	});
}

document.querySelector('button').addEventListener('click', evaluateAnswers);