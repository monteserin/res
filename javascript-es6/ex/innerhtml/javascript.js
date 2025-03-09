const writeText = () => {
	document.querySelector('.red').innerHTML = 'Has hecho mouse over sobre la capa 1';
}

document.querySelector('.yellow').addEventListener('mouseover', writeText)