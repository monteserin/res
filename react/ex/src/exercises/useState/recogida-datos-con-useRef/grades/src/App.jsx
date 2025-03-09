import { useState } from "react";
import { useRef } from "react";

const App = () => {
  const centigradesRef = useRef();
  const [fahrenheitGrades, setFahrenheitGrades] = useState();
  const calculate = () => {
    const centigrades = centigradesRef.current.value;
    const fahrenheit = (centigrades * 9) / 5 + 32;
    setFahrenheitGrades(fahrenheit);
  };
  return (
    <>
      <input type="text" placeholder="centigrades" ref={centigradesRef} />
      <button onClick={calculate}>Calcular</button>
      <output>{fahrenheitGrades}</output>
    </>
  );
};

export default App;
