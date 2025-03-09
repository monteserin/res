let characters;
let collectedCharacters = [];
let collectedCharacters2 = [];

const getWomansName = () => {
    const r = characters.filter(character => character.gender === 'female').map(character => character.name);
    console.log('getWomansName() → ', r);
}

const getSmallerPeople = () => {
    const r = characters.map(character => ({ ...character, height: character.height - 10 }));
    console.log('getSmallerPeople() → ', r);
}

const sumaDePeso = () => {
    const r = characters.reduce((acc, character) => acc + Number(character.mass), 0);
    console.log('sumaDePeso() → ', r);
}

const mediaDeAltura = () => {
    const r = characters.reduce((acc, character) => acc + Number(character.height), 0) / characters.length;
    console.log('mediaDeAltura() → ', r);
}

const collectByIndex = (index) => {
    const selectedCharacter = characters[index];
    collectedCharacters.push(selectedCharacter);
    console.log('collectByIndex() → ', collectedCharacters);
}

const collectByName = (characterName) => {
    const selectedCharacter = characters.find(character => character.name === characterName);
    collectedCharacters.push(selectedCharacter);
    console.log('collectByName() → ', collectedCharacters);
}

const removeByName = (characterName) => {
    const r = collectedCharacters.filter(character => character.name !== characterName);
    console.log('removeByName() → ', r);
}

const getCharacterFilms = (characterName) => {
    const r = characters.find(character => character.name === characterName);
    console.log('getCharacterFilms() → ', r.films);
}

const collectByName2 = (characterName) => {
    const char = collectedCharacters2.find(character => character.name === characterName);
    if (char) {
        char.amount++;
    } else {
        const selectedCharacter = characters.find(character => character.name === characterName);
        collectedCharacters2.push({ ...selectedCharacter, amount: 1 });
    }
    console.log('collectByName2() → ', collectedCharacters2);
}

const mediaDeAltura2 = () => {
    const r = collectedCharacters2.reduce((acc, character) => acc + Number(character.height), 0) / collectedCharacters2.length;
    console.log('mediaDeAltura2() → ', r);
}

const removeByName2 = (charactersName) => {
    const r = collectedCharacters2.filter(character => character.name !== charactersName);
    console.log('removeByName2() → ', r);
}

fetch('https://swapi.dev/api/people')
    .then(res => res.json())
    .then(data => {
        characters = data.results;
        // Aquí ejecutaremos las llamadas a las funciones que definiremos más arriba
        console.log(characters);
        getWomansName();
        getSmallerPeople();
        sumaDePeso();
        mediaDeAltura();
        collectByIndex(3);
        collectByIndex(4);
        collectByName('Darth Vader');
        removeByName('Darth Vader');
        getCharacterFilms('Darth Vader');
        collectByName2('Darth Vader');
        collectByName2('Darth Vader');
        collectByName2('Darth Vader');
        collectByName2('Darth Vader');
        collectByName2('Darth Vader');

        collectByName2('Luke Skywalker');
        removeByName2('Darth Vader');

    });