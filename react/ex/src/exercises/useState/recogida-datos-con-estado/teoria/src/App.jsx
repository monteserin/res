import { useState } from 'react';

function App() {
  const [value, setValue] = useState(0);
  return (
    <div>
      <input type="text" onChange={(e) => setValue(e.target.value)} />
      {value}
    </div>
  );
}

export default App;
