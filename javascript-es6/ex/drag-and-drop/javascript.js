let zonadestino;

const init = () => {
    const dragon = document.querySelector("#dragon");
    zonadestino = document.querySelector("#zona_destino");

    dragon.addEventListener("dragstart", arrastrar_dragon);
    /* Este código es necesario para que fncione el listener del drop*/
    document.addEventListener("dragover", (event) => {
        event.preventDefault();
        event.dataTransfer.dropEffect = "move";
    }, false);
    zonadestino.addEventListener("drop", soltar_dragon);
}

const arrastrar_dragon = event => {
    const src_img = "<img src='" + event.target.getAttribute("src") + "'>";
    event.dataTransfer.setData("Text", src_img);
}

const soltar_dragon = event => {
    event.preventDefault();
    zonadestino.innerHTML = event.dataTransfer.getData("Text");
}


window.addEventListener("load", init);