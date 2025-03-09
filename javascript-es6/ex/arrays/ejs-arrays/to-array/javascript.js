const toArray = (a, b) => {
    const newArray = [];
    // newArray.push(a);
    // newArray.push(b);
    newArray[0] = a;
    newArray[1] = b;

    return newArray;
}


const v = toArray(1, 4); // [1, 4]
console.log(v);