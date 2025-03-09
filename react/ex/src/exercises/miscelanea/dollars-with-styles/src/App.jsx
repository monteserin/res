import { useRef } from 'react';
// import './styles.css';

function App() {
  const eurosRef = useRef();
  const resultadoRef = useRef();

  const calcular = () => {
    const eurosValue = eurosRef.current.value;
    const dolares = eurosValue * 2;
    resultadoRef.current.innerHTML = dolares;
  };

  return (
    <div className="container">
      <div className="content">
        <input type="text" ref={eurosRef} />
        <button onClick={calcular}>Enviar</button>
        <div className="output" ref={resultadoRef} />
      </div>
    </div>
  );
}

export default App;
