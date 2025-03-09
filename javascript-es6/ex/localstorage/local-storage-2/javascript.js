const lista = document.querySelector("#lista");

if (localStorage.getItem("lista")) {
    lista.innerHTML = localStorage.getItem("lista");
}

document.querySelector('#salvarCambios').addEventListener('click', () => {
    localStorage.setItem("lista",lista.innerHTML);
});

document.querySelector('#borrarCambios').addEventListener('click', () => {
    localStorage.clear();
    location.reload();
});