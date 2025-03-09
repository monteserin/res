import { useState, useEffect } from 'react';
import { Span } from './ClueButton.styles';

function ClueButton({ clue, numQuestion }) {
  const [showClue, setShowClue] = useState(false);

  useEffect(() => {
    setShowClue(false);
  }, [numQuestion]);

  return (
    <>
      <button onClick={() => {
        setShowClue(!showClue);
      }}
      >
        Mostrar pista
      </button>
      <Span visible={showClue}>{clue}</Span>
    </>
  );
}
export default ClueButton;
