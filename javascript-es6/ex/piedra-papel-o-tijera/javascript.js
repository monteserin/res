const posibilities = ['piedra', 'papel', 'tijera'];

const newGame = () => {
  document.querySelector('.answer').src = './img/question.jpeg';
  const randomIndex = Math.floor(Math.random() * posibilities.length);
  const answer = posibilities[randomIndex];
  return answer;
}


const evaluateWin = (choosedValue) => {
  if (answer === 'papel') {
    if (choosedValue === 'papel') {
      return 0;
    } else if (choosedValue === 'tijera') {
      return 1;
    } else {
      return -1;
    }
  } else if (answer === 'tijera') {
    if (choosedValue === 'papel') {
      return -1;
    } else if (choosedValue === 'tijera') {
      return 0;
    } else {
      return 1;
    }
  } else if (answer === 'piedra') {
    if (choosedValue === 'papel') {
      return 1;
    } else if (choosedValue === 'tijera') {
      return -1;
    } else {
      return 0;
    }
  }
}

const addListeners = () => {
  const imgs = document.querySelectorAll('.row img');
  imgs.forEach(button => button.addEventListener('click', (e) => {
    const value = e.target.getAttribute("data-value");
    const result = evaluateWin(value);
    if (result === 0) {
      alert('Empate!');
    } else if (result === 1) {
      alert('Ganaste!');
    } else {
      alert('Perdiste!');
    }

    document.querySelector('.answer').src = './img/' + answer + '.jpeg';

    setTimeout(() => {
      answer = newGame();
    }, 2000
    )

  }));
}

let answer = newGame();

addListeners();





