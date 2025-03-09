const showAnswers = () => {
	document.querySelector('.r1').style.backgroundColor = 'red';
	document.querySelector('.r2').style.backgroundColor = 'red';
	document.querySelector('.r3').style.backgroundColor = 'red';

}

document.querySelector('button').addEventListener('click', showAnswers);