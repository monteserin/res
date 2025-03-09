import { useState } from 'react';
import { Board, Chip1, Chip2 } from './styles';

function App() {
  const [player1Position, setPlayer1Position] = useState(1);
  const [player2Position, setPlayer2Position] = useState(1);
  const [currentDice, setCurrentDice] = useState(0);
  const [isPlayer1, setIsPlayer1] = useState(true);
  return (
    <div>
      <button
        onClick={() => {
          const dice = Math.floor(Math.random() * 6) + 1;
          setCurrentDice(dice);
          const nextPos = (isPlayer1 ? player1Position : player2Position) + dice;
          const finalPos = nextPos === 5
            ? 8
            : nextPos === 6
              ? 19
              : nextPos === 17
                ? 23
                : nextPos === 10
                  ? 3
                  : nextPos === 20
                    ? 12
                    : nextPos === 21
                      ? 3
                      : nextPos;
          if (isPlayer1) {
            setPlayer1Position(finalPos);
          } else {
            setPlayer2Position(nextPos);
          }
          setIsPlayer1(!isPlayer1);
        }}
      >
        Roll the dice
      </button>
      {currentDice}
      <Board>
        {Array.from({ length: 25 }).map((_, index) => (
          <div>
            {player1Position === index + 1 && <Chip1 />}
            {player2Position === index + 1 && <Chip2 />}
          </div>
        ))}
      </Board>
    </div>
  );
}

export default App;
