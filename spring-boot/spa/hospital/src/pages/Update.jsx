import { useState, useEffect } from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import { deletePacient, getPacientById, updatePacient } from '../app/api';
import { convertDate } from '../app/utils';


const Delete = () => {
    const { id } = useParams();
    const [pacient, setPacient] = useState([]);
    const navigate = useNavigate();

    useEffect(() => {
        getPacientById(id).then(res => {
            const r = convertDate(res.data.fecha_alta);
            console.log('aaaaaaaaaaa', r);
            setPacient({ ...res.data, fecha_alta: convertDate(res.data.fecha_alta) });
        });
    }, []);

    return (
        <div>
            <h1>Update y Delete</h1>
            <p>
                <input type="text" placeholder="Name" defaultValue={pacient.nombre} onChange={e => setPacient({ ...pacient, nombre: e.target.value })} />
                <input type="text" placeholder="Surname" defaultValue={pacient.apellidos} onChange={e => setPacient({ ...pacient, apellidos: e.target.value })} />
                <input type="date" placeholder="date" defaultValue={pacient.fecha_alta} onChange={e => setPacient({ ...pacient, date: e.target.value })} />
            </p>

            <p>
                <button onClick={async () => {
                    await deletePacient(id);
                    navigate('/');
                }}>Delete</button>
                <button onClick={async () => {
                    await updatePacient(id, pacient);
                    navigate('/');
                }}>Update</button>
            </p>


        </div>
    )
}

export default Delete;