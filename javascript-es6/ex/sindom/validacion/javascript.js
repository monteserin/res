let isRight = false;


const hasNumber = (myString) => /\d/.test(myString);



while (!isRight) {
    const name = prompt('Introduzca su nombre, por favor');
    if (!hasNumber(name)) {
        const real = prompt('El nombre introducido no tiene ningún número. ¿Es su nombre real? Yes / No');
        if (real === 'Yes') {
            isRight = true;
            alert('Seguimos con el proceso de registro');
        } else {
            alert('Como ese no es su nombre real, debe volver a realizar el proceso de registro');
        }
    } else {
        alert('El nombre introducido tiene números. Debe volver a introducir su nombre');
    }
}