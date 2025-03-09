const replaceAt = (string, character, index) => {
    return string.substring(0, index) + character + string.substring(index + character.length);
}

const words = ['casa', 'perro', 'gato', 'coche'];
const secretWord = words[Math.floor(Math.random() * words.length)];
let hiddenWord = secretWord.replace(/./g, "_ ");
document.querySelector('.hiddenWord').innerHTML = hiddenWord;
let errorCounter = 0;
const evaluateWord = () => {
    const letter = document.querySelector('input').value;
    document.querySelector('input').value = '';
    let error = true;
    for (let i = 0; i < secretWord.length; i++) {
        if (secretWord[i] === letter) {
            hiddenWord = replaceAt(hiddenWord, letter, i * 2);
            error = false;
        }
    }
    document.querySelector('.hiddenWord').innerHTML = hiddenWord;

    if (error) {
        errorCounter++;
        document.querySelector('.ahorcado').style.backgroundPosition = -errorCounter * 300 + 'px';
        if (errorCounter === 4) {
            document.querySelector('.info').innerHTML = '<h1>Has perdido</h1>';
        }
    }
    if (!hiddenWord.includes("_")) {
        document.querySelector('.info').innerHTML = '<h1>Has ganado</h1>';
    }


}

document.querySelector('button').addEventListener('click', evaluateWord);