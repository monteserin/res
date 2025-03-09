import { useState } from 'react';

function App() {
  const [fahrenheit, setFahrenheit] = useState(0);
  const [result, setResult] = useState();

  const calcular = (e) => {
    const centigradesValue = e.target.value;
    const fahrenheitValue = centigradesValue * 9 / 5 + 32;
    setFahrenheit(fahrenheitValue);
  };

  return (
    <div>
      <input type="text" onChange={calcular} />
      <button onClick={() => setResult(fahrenheit)}>Enviar</button>
      {result}
    </div>
  );
}

export default App;
