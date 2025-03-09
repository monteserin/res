function testElse(val) {
    let result = "";

    if (val > 5) {
        result = "Bigger than 5";
    } else if (val < 5) {
        result = "Smaller than 5";
    } else {
        result = "Equal to 5";
    }

    return result;
}


const x = testElse(7);
console.log(x);