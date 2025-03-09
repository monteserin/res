function testEqual(val) {
    if (val === 12) { // Cambia esta línea
        return "Equal";
    }
    return "Not Equal";
}

const x = testEqual(12);
console.log(x);
