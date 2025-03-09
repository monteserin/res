const randomNumber = Math.floor(Math.random() * 5) + 1;
let isPlaying = true;
let attempts = 0;
while (isPlaying) {
    const userNumber = Number(prompt('Introduce un número, por favor.'));
    if (userNumber === randomNumber) {
        alert('Número acertado, Hemos ganado.');
        isPlaying = false;
    } else {
        alert('Número fallado.');
        attempts++;
        if (attempts === 3) {
            isPlaying = false;
            alert('Hemos perdido.');
        }
    }
}

alert('Fin de juego');