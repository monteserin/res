import { useRef } from 'react';

function App() {
  const nombreRef = useRef();
  const resultadoRef = useRef();

  const procesar = () => {
    resultadoRef.current.innerHTML = nombreRef.current.value;
  };

  return (
    <div>
      <input type="text" ref={nombreRef} />
      <button onClick={procesar}>Enviar</button>
      <div ref={resultadoRef} />
    </div>
  );
}

export default App;
