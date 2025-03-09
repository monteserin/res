import { useState, useContext } from 'react';
import { useNavigate } from 'react-router-dom';
import { createHilo } from '../app/services/hilos';
import { AppContext } from '../app/Provider';

const WriteMessage = () => {
    const [state] = useContext(AppContext);
    const [nombre, setNombre] = useState('');
    const navigate = useNavigate();

    return (
        <div>
            <h1>Crear Hilos</h1>
            <p><input type="text" placeholder='Nombre del hilo' onChange={e => setNombre(e.target.value)} /></p>
            <p><button onClick={() => {
                createHilo(nombre, state.id);
                navigate('/menu');
            }}>Crear Hilo</button></p>
        </div>
    )
}

export default WriteMessage;