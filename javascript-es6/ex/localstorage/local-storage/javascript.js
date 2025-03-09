document.querySelector("#salvarCambios").addEventListener('click', () => {
	debugger
	localStorage.setItem("lista", document.querySelector("#lista").innerHTML);
});
if (localStorage.getItem("lista")) {
	document.querySelector("#lista").innerHTML = localStorage.getItem("lista");
}
