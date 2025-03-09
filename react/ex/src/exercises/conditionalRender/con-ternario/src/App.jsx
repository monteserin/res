import { useState } from 'react';

function App() {
  const [counter, setCounter] = useState(0);
  return (
    <div>
      <button onClick={() => setCounter(counter + 1)}>Pulsar</button>
      {
        counter % 2 === 0 ? <p>Hola</p> : <p>Adios</p>
      }
    </div>
  );
}

export default App;
