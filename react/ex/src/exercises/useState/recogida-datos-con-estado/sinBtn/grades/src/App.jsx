import { useState } from 'react';

function App() {
  const [centigrades, setCentigrades] = useState();
  return (
    <div>
      <input type="text" onChange={(e) => setCentigrades(e.target.value)} />
      <output>{centigrades && (centigrades * 9) / 5 + 32}</output>
    </div>
  );
}

export default App;
