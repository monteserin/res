import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { getPacients } from '../app/api';

function Read() {
  const [pacients, setPacients] = useState([]);

  useEffect(() => {
    getPacients().then((guests) => {
      setPacients(guests);
    });
  }, []);

  return (
    <div>
      <h1>Read</h1>
      <table border="1px">
        <tr>
          <th>id</th>
          <th>name</th>
          <th>surname</th>
          <th>date</th>
        </tr>
        {
                    pacients.map((pacient) => (
                      <tr>
                        <td><Link to={`/hospital/update/${pacient.id}`}>{pacient.id}</Link></td>
                        <td>{pacient.name}</td>
                        <td>{pacient.surname}</td>
                        <td>
                          {' '}
                          {pacient.date}
                        </td>
                      </tr>
                    ))
                }
      </table>
    </div>
  );
}

export default Read;
