function nor(bool1, bool2) {
    return !(bool1 && bool2);

    // return !bool1 || !bool2;

    // if (bool1 === false || bool2 === false) {
    //     return true
    // } else return false
}

console.log(nor(false, false));
console.log(nor(false, true));
console.log(nor(true, false));
console.log(nor(true, true));