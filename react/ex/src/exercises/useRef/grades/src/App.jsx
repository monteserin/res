import { useRef } from 'react';

function App() {
  const gradesRef = useRef(null);
  const resultRef = useRef(null);

  const calculate = () => {
    const grades = gradesRef.current.value;
    const result = (grades * 9 / 5) + 32;
    resultRef.current.innerHTML = `${grades}°C son ${result}°F`;
  };

  return (
    <div>
      <input type="text" placeholder="Grados centígrados" ref={gradesRef} />
      <button onClick={calculate}>Calcular</button>
      <p ref={resultRef} />
    </div>
  );
}

export default App;
