import { useState } from 'react';

function App() {
  const [euros, setEuros] = useState(0);

  return (
    <div>
      <input type="text" onChange={(e) => setEuros(e.target.value)} />
      <output>{euros * 2}</output>
    </div>
  );
}

export default App;
