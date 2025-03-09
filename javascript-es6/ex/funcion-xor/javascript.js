function xor(a, b) {
    return a !== b;
}


const v1 = xor(true, false);
const v2 = xor(false, true);
const v3 = xor(true, true);
const v4 = xor(false, false);

console.log(v1);
console.log(v2);
console.log(v3);
console.log(v4);