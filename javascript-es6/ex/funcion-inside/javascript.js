function test(val) {
    if (val >= 10 && val <= 20) { // Cambia esta línea
        return "Inside";
    } else {
        return "Outside";
    }
}

const x = test(17);

console.log(x);