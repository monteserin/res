import { useState } from 'react';
import { createPacient } from '../app/api';

function Create() {
  const [name, setName] = useState('');
  const [surname, setSurname] = useState('');
  const [date, setDate] = useState('');

  return (
    <div>
      <h1>Create</h1>
      <p><input type="text" placeholder="Pacient Name" onChange={(e) => setName(e.target.value)} /></p>

      <p><input type="text" placeholder="Pacient SurName" onChange={(e) => setSurname(e.target.value)} /></p>

      <p><input type="date" onChange={(e) => setDate(e.target.value)} /></p>

      <p><button onClick={() => createPacient({ name, surname, date })}>Create</button></p>
    </div>
  );
}

export default Create;
