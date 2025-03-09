import { useState, useContext, useEffect } from 'react';
import { createHilo } from '../app/services/hilos';
import { AppContext } from '../app/Provider';

function WriteMessage() {
  const [state, setState] = useContext(AppContext);
  const [nombre, setNombre] = useState('');

  return (
    <div>
      <h1>Crear Hilos</h1>
      <p><input type="text" placeholder="Nombre del hilo" onChange={(e) => setNombre(e.target.value)} /></p>
      <p><button onClick={() => createHilo(nombre, state.id)}>Crear Hilo</button></p>
    </div>
  );
}

export default WriteMessage;
