import { useState } from 'react';

function App() {
  const [dollars, setDollars] = useState(0);
  const [result, setResult] = useState(0);

  const calcular = (e) => {
    const eurosValue = e.target.value;
    const dollarsValue = eurosValue * 2;
    setDollars(dollarsValue);
  };

  return (
    <div>
      <input type="text" onChange={calcular} />

      <button onClick={() => setResult(dollars)}>Enviar</button>
      <p>{result}</p>
    </div>
  );
}

export default App;
