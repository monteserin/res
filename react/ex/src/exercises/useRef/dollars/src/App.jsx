import { useRef } from 'react';

function App() {
  const eurosRef = useRef(null);
  const dollarsRef = useRef(null);

  const calculate = () => {
    const euros = eurosRef.current.value;
    dollarsRef.current.innerHTML = euros * 2;
  };

  return (
    <div>
      <input type="text" ref={eurosRef} />
      <button onClick={calculate}>Calcular</button>
      <p ref={dollarsRef} />
    </div>
  );
}

export default App;
