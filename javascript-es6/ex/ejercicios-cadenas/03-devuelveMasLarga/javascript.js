const devuelveMasLarga = (txt1, txt2) => txt1.length >= txt2.length ? txt1 : txt2;

const cadenaMasLarga = devuelveMasLarga('ana', 'jorge');
console.log(cadenaMasLarga);