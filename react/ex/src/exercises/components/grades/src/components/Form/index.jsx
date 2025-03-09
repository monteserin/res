import { useState } from 'react';

function Grades() {
  const [centigrades, setCentigrades] = useState(0);
  const [fahrenheit, setFahrenheit] = useState('');

  const calcular = () => {
    const fahrenheitValue = centigrades * 9 / 5 + 32;
    setFahrenheit(fahrenheitValue);
  };

  return (
    <div>
      <input type="text" onChange={(e) => setCentigrades(e.target.value)} />
      <button onClick={calcular}>Enviar</button>
      {fahrenheit}
    </div>
  );
}

export default Grades;
