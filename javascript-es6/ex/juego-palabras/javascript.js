function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

const btnPulsado = (e) => {
    document.querySelector('.frasePropuesta').innerHTML += e.target.innerHTML + ' ';
}

const comprobar = () => {

    if (frase === document.querySelector('.frasePropuesta').textContent.trim()) {
        alert('exito');
    } else {
        alert('fracaso');
    }
}


const frases = ["la hormiga es más pequeña que el elefante", "la liebre es más rápida que la hormiga"];

const frase = frases[Math.floor(Math.random() * frases.length)];
const palabras = frase.split(" ");
const palabrasDesordenadas = shuffle(palabras);

const palabrasHTML = palabrasDesordenadas.map(palabra => `<span class="button">${palabra}</span>`).join(' ');


document.querySelector('.frase').innerHTML = palabrasHTML;

document.querySelectorAll('.button').forEach(obj => obj.addEventListener('click', btnPulsado));


document.querySelector('button').addEventListener('click', comprobar);