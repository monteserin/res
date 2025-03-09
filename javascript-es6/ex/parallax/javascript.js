parallax = _ => {
    pinas.style.top = -(window.pageYOffset / 5) + "px";
    oranges.style.top = -(window.pageYOffset / 2) + "px";
}

start = _ => {
    pinas = document.querySelector("#pinas");
    oranges = document.querySelector("#oranges");
}

window.addEventListener("scroll", parallax);
window.addEventListener("load", start);