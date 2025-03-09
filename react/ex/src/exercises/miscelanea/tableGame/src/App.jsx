import { useState, useEffect } from 'react';
import {
  Board, Position, Chip, RollTheDice, GlobalStyle,
} from './app/styles';
import data from './assets/data/data.json';

function App() {
  const [width, setWidth] = useState(0);
  const [height, setHeight] = useState(0);
  const [turn, setTurn] = useState(0);
  const [players, setPlayers] = useState([{
    name: 'player1', pos: 0, x: 0, y: 0, color: 'red',
  }, {
    name: 'player2', pos: 0, x: 0, y: 0, color: 'blue',
  }]);

  const calculateSceneDimensions = () => {
    const w = window.innerWidth;
    const h = window.innerHeight;

    if (w > h) {
      setWidth(h * 0.9);
      setHeight(h * 0.9);
    } else {
      setHeight(w * 0.9);
      setWidth(w * 0.9);
    }
  };

  useEffect(() => {
    window.addEventListener('resize', calculateSceneDimensions);
    calculateSceneDimensions();
  }, []);

  const rollTheDice = () => {
    const t = turn < 1 ? turn + 1 : 0;

    const n = Math.floor(Math.random() * 6) + 1;
    const playerPos = n + players[t].pos;

    if (playerPos > 68) {
      alert(`Ha ganado el player ${players[t].name}`);
    } else {
      const { x, y } = data[playerPos];

      setTurn(t);
      setPlayers(
        players.map((obj, i) => (i === t ? {
          ...obj, pos: n + obj.pos, x, y,
        } : obj)),
      );
    }
  };

  console.log(players);
  return (
    <Board width={width} height={height}>
      <GlobalStyle />
      <RollTheDice onClick={() => rollTheDice()}>Roll the dice</RollTheDice>
      {' '}
      {
                data.map((obj, i) => <Position key={i} x={obj.x} y={obj.y} width={obj.width} height={obj.height} />)
            }

      {
                players.map((obj, i) => <Chip key={i} x={obj.x} y={obj.y} color={obj.color} />)
            }

    </Board>
  );
}

export default App;
