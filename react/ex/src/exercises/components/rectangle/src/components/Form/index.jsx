import { useState } from 'react';

function Form() {
  const [width, setWidth] = useState(0);
  const [height, setHeight] = useState(0);
  const [area, setArea] = useState(0);

  const calcular = () => {
    const r = width * height;
    setArea(r);
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

export default Form;
