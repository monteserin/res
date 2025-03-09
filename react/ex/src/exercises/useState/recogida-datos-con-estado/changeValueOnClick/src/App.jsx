import { useState } from 'react';

function App() {
  const [inputText, setInputText] = useState('');
  const [valorAMostrar, setValorAMostrar] = useState(0);

  return (
    <div>
      <input type="text" onChange={(txt) => setInputText(txt.target.value)} />
      <button onClick={() => setValorAMostrar(inputText)}>Cambiar valor</button>
      <div>{valorAMostrar}</div>
    </div>
  );
}

export default App;
