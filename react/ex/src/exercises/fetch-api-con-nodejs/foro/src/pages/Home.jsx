import { useState, useContext } from 'react';
import { AppContext } from '../app/Provider';
import { access } from '../app/services/users';

function Home() {
  const [name, setName] = useState('');
  const [state, setState] = useContext(AppContext);

  return (
    <div>
      <p>Introduce tu nombre. Si no está en la base de datos, se creará.</p>
      <input type="text" onChange={(e) => setName(e.target.value)} />
      <p>{name}</p>
      <p>{state.id}</p>
      <button onClick={async () => {
        const id = await access(name);
        console.log('id', id);
        setState({ ...state, id });
      }}
      >
        Acceder
      </button>
    </div>
  );
}

export default Home;
