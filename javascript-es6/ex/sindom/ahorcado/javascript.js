const replaceAt = (string, character, index) => {
    return string.substring(0, index) + character + string.substring(index + character.length);
}

const words = ['casa', 'coche', 'vaca', 'perro']
const secretWord = words[Math.floor(Math.random() * words.length)]
let hiddenWord = secretWord.replace(/./g, "_ ");

alert(secretWord)

let gameIsNotOver = true;
while (gameIsNotOver) {
    alert(hiddenWord);

    const letter = prompt('Introduce una letra');

    for (let i = 0; i < secretWord.length; i++) {
        if (letter == secretWord[i]) {
            hiddenWord = replaceAt(hiddenWord, letter, i * 2);
        }
    }
    if (!hiddenWord.includes("_")) {
        gameIsNotOver = false;
        alert('Enhorabuena, has ganado!')
    }
}

