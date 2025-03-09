import { useState } from 'react';
import ComponenteMultiple from './components/ComponenteMultiple';

function App() {
  const [dato1, setDato1] = useState(0);
  const [dato2, setDato2] = useState(0);

  return (
    <div>
      <input type="text" onChange={(e) => setDato1(e.target.value)} />
      <input type="text" onChange={(e) => setDato2(e.target.value)} />
      <ComponenteMultiple opcion={1} dato1={dato1} />
      <ComponenteMultiple opcion={2} dato1={dato1} />
      <ComponenteMultiple opcion={3} dato1={dato1} dato2={dato2} />
    </div>
  );
}

export default App;
