const setFirstElement = (arr, n) => {
    arr[0] = n;
    return arr;
}


const v = setFirstElement([1, 2, 3], 4);
console.log(v);// [4, 2, 3]