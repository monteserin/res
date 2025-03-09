import { useState } from 'react';
import { MyStyledComponent } from './app/styles';

function App() {
  const [color, setColor] = useState('red');
  return (
    <div>
      <button onClick={() => setColor('blue')}>Pulsar</button>
      <MyStyledComponent color={color} />
    </div>
  );
}

export default App;
