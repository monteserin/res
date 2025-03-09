const showAnswers = () => {
	document.querySelectorAll('.red').forEach(obj => {
		obj.style.backgroundColor = 'red';
	});
}

document.querySelector('button').addEventListener('click', showAnswers);