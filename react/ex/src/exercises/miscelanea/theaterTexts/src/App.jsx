import { useState } from 'react';
import { P } from './app/styles';
import lines from './data/lines.json';

function App() {
  const [currentParagraph, setCurrentParagraph] = useState(0);
  return (
    <div>
      <div>
        <button onClick={() => setCurrentParagraph(currentParagraph - 1)}>
          Anterior
        </button>
        <button onClick={() => setCurrentParagraph(currentParagraph + 1)}>
          Siguiente
        </button>
      </div>
      {
        lines.map((line, index) => <P highlighting={index === currentParagraph}>{line}</P>)
      }
    </div>
  );
}

export default App;
