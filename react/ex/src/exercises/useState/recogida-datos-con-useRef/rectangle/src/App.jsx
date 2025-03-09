import { useState, useRef } from 'react';

function App() {
  const widthRef = useRef();
  const heightRef = useRef();
  const [area, setArea] = useState(0);

  const calcular = () => {
    setArea(widthRef.current.value * heightRef.current.value);
  };
  return (
    <div>
      <input type="text" ref={widthRef} />
      <input type="text" ref={heightRef} />
      <button onClick={calcular}>Enviar</button>
      <p>{area}</p>
    </div>
  );
}

export default App;
