import { useState } from 'react';

function App() {
  const [width, setWidth] = useState(0);
  const [height, setHeight] = useState(0);
  const [area, setArea] = useState(0);

  const calcular = () => {
    setArea(width * height);
  };
  return (
    <div>
      <input type="text" onChange={(e) => setWidth(e.target.value)} />
      <input type="text" onChange={(e) => setHeight(e.target.value)} />
      <button onClick={calcular}>Enviar</button>
      <p>{area}</p>
    </div>
  );
}

export default App;
