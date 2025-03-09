import { useState } from 'react';

function App() {
  const [contador, setContador] = useState(1);
  return <button onClick={() => setContador(contador + 1)}>{contador}</button>;
}

export default App;
