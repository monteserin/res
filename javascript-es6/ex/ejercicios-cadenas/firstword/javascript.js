const firstWord = (txt) => {
    const whiteSpacePos = txt.indexOf(' ');
    const result = txt.substring(0, whiteSpacePos);
    return result;
}

const v = firstWord("see and stop");
console.log(v);