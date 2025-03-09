export const convertDate = (date) => {
    var fechaObjeto = new Date(date);
    const r = fechaObjeto.getFullYear() + '-' + completarDosDigitos(fechaObjeto.getMonth() + 1) + '-' + completarDosDigitos(fechaObjeto.getDate());
    return r;
}

function completarDosDigitos(numero) {
    if (numero < 10) {
        return "0" + Number(numero); // Agrega un cero a la izquierda si es un solo dígito
    }
    return numero
}
