const cambiarImagen1 = e => {
	e.preventDefault();
	e.stopPropagation();
	document.querySelector('#marco').src = "/curso/assets/p/azul.html";
}

const cambiarImagen2 = e => {
	e.preventDefault();
	e.stopPropagation();
	document.querySelector('#marco').src = "/curso/assets/p/rosa.html";
}

window.addEventListener('load', () => {

	document.querySelector('#btn1').addEventListener('click', cambiarImagen1);
	document.querySelector('#btn2').addEventListener('click', cambiarImagen2);

});