import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { getPacients } from '../app/api';
import { convertDate } from '../app/utils';

const Read = () => {
    const [pacients, setPacients] = useState([]);

    useEffect(() => {
        getPacients().then(res => {
            setPacients(res.data);
        });
    }, []);



    return (
        <div>
            <h1>Read</h1>
            <table border="1px">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>surname</th>
                        <th>date</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        pacients.map(pacient => (
                            <tr key={pacient.id}>
                                <td><Link to={`/pacient/${pacient.id}`}>{pacient.id}</Link></td>
                                <td>{pacient.nombre}</td>
                                <td>{pacient.apellidos}</td>
                                <td> {convertDate(pacient.fecha_alta)}</td>
                            </tr>
                        )
                        )
                    }
                </tbody>
            </table>
        </div>
    )
}

export default Read;