import { useState } from 'react';
import Componente from './components/Componente';

function App() {
  const [val, setVal] = useState(0);
  return (
    <div>
      <Componente updateVal={setVal} />
      {val}
    </div>
  );
}

export default App;
