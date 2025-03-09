function nand(a, b) {
    return !(a && b);
}

const x = nand(true, true);
console.log(x);