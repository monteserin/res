const selectColor = (e) => {
	const color = e.target.value;
	document.querySelector('body').style.backgroundColor = color;
}

document.querySelector('#color').addEventListener('change', selectColor);