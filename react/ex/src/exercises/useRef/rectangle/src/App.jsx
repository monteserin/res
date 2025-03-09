import { useRef } from 'react';

function App() {
  const anchoRef = useRef();
  const altoRef = useRef();
  const resultadoRef = useRef();

  const calcular = () => {
    const anchoValue = anchoRef.current.value;
    const altoValue = altoRef.current.value;
    const r = anchoValue * altoValue;
    resultadoRef.current.innerHTML = r;
  };
  return (
    <div>
      <input type="text" ref={anchoRef} />
      <input type="text" ref={altoRef} />
      <button onClick={calcular}>Enviar</button>
      <div ref={resultadoRef} />
    </div>
  );
}

export default App;
