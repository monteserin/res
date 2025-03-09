import { useState, useEffect } from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import { deletePacient, getPacientById, updatePacient } from '../app/api';

function Delete() {
  const [pacient, setPacient] = useState([]);
  const { id } = useParams();
  const navigate = useNavigate();

  useEffect(() => {
    getPacientById(id).then((pacient) => {
      setPacient(pacient);
    });
  }, []);

  return (
    <div>
      <h1>Update y Delete</h1>
      <p>
        <input
          type="text"
          placeholder="Name"
          defaultValue={pacient.name}
          onChange={(e) => setPacient({ ...pacient, name: e.target.value })}
        />
        <input
          type="text"
          placeholder="Surname"
          defaultValue={pacient.surname}
          onChange={(e) => setPacient({ ...pacient, surname: e.target.value })}
        />
        <input
          type="date"
          placeholder="date"
          defaultValue={pacient.date}
          onChange={(e) => setPacient({ ...pacient, date: e.target.value })}
        />
      </p>

      <p>
        <button
          onClick={() => {
            deletePacient(id);
            navigate('/hospital/');
          }}
        >
          Delete
        </button>
        <button
          onClick={() => {
            updatePacient(id, pacient);
            alert('usuario modificado');
          }}
        >
          Update
        </button>
      </p>
    </div>
  );
}

export default Delete;
