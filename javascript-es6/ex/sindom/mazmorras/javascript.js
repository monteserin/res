




let isAlive = true;

while (isAlive) {
    const n = Math.floor(Math.random() * 2) + 1;
    alert(n)
    const userDoor = Number(prompt('Entras en una mazmorra con dos puertas. La puerta 1 y la puerta 2. Tras una de las dos puertas, se encuentra una muerte segura. ¿Qué puerta escoges? 1/2'));

    if (userDoor === n) {
        alert('Has escogido sabiamente');
    } else {
        alert('Mala suerta. Un dragón te come');
        isAlive = false;
    }
}