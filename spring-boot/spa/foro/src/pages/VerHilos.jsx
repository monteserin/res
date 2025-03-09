import { useEffect, useState } from 'react';
import { getHilos } from '../app/services/hilos';
import { Link } from 'react-router-dom';

const SeeMessages = () => {
    const [hilos, setHilos] = useState([]);

    useEffect(() => {
        getHilos().then(msgs => {
            console.log('3333333333333', msgs)
            setHilos(msgs.data);
        });
    }, []);


    return (
        <div>
            <h1>Ver hilos</h1>
            <div>
                {
                    hilos.map(hilo => <p key={hilo.id}><Link to={`/ver-hilo/${hilo.id}`}>{hilo.titulo}</Link></p>)
                }
            </div>
        </div>
    )
}

export default SeeMessages;