import { useRef, useState } from 'react';

function App() {
  const eurosRef = useRef(null);
  const [dollars, setDollars] = useState(0);

  const calculate = () => {
    const euros = eurosRef.current.value;
    const dollarsAux = euros * 2;
    setDollars(dollarsAux);
  };

  return (
    <>
      <input type="text" ref={eurosRef} />
      <button onClick={calculate}>Calcular</button>
      <p>{dollars}</p>
    </>
  );
}

export default App;
