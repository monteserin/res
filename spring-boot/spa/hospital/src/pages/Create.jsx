import { useState } from 'react';
import { createPacient } from "../app/api";
import { useNavigate } from 'react-router-dom';

const Create = () => {
    const [name, setName] = useState('');
    const [surname, setSurname] = useState('');
    const [date, setDate] = useState('');
    const navigate = useNavigate();

    return (
        <div>
            <h1>Create</h1>
            <p><input type="text" placeholder='Pacient Name' onChange={e => setName(e.target.value)} /></p>

            <p><input type="text" placeholder='Pacient SurName' onChange={e => setSurname(e.target.value)} /></p>

            <p><input type="date" onChange={e => setDate(e.target.value)} /></p>

            <p><button onClick={() => {
                navigate('/');
                createPacient({ nombre: name, apellidos: surname, fecha_alta: date })
            }}>Create</button></p>
        </div >
    )
}

export default Create;