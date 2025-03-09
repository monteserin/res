import { useState } from 'react';
import Popup from './components/Popup';

function App() {
  const [visible, setVisible] = useState(false);
  return (
    <div>
      <button onClick={() => setVisible(!visible)}>Abrir/Cerrar</button>
      <Popup visible={visible} setVisible={(v) => setVisible(v)} />
    </div>
  );
}

export default App;
