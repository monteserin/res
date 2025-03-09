const contadorDeLetras2 = (txt1, txt2, letter) => {
    let count1 = 0;
    let count2 = 0;
    for (let i = 0; i < txt1.length; i++) {
        if (txt1[i] === letter) {
            count1++;
        }
    }
    for (let i = 0; i < txt2.length; i++) {
        if (txt2[i] === letter) {
            count2++;
        }
    }
    return count1 > count2 ? txt1 : txt2;
}


console.log(contadorDeLetras2('hola', 'mundo', 'o'));