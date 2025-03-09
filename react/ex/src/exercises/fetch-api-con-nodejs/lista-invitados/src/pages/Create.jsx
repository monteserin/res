import { useState } from 'react';
import { createGuest } from '../app/api';

function Create() {
  const [name, setName] = useState('');

  return (
    <div>
      <h1>Create</h1>
      <p>
        <input type="text" placeholder="Guest Name" onChange={(e) => setName(e.target.value)} />
        <button onClick={() => createGuest(name)}>Create</button>
      </p>
    </div>
  );
}

export default Create;
