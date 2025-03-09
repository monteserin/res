import { useEffect, useState } from 'react';
import { getEquipos, getJugadores } from './app/api';

function App() {
  const [equipos, setEquipos] = useState([]);
  const [jugadores, setJugadores] = useState([]);
  const [currentEquipoId, setCurrentEquipoId] = useState(-1);

  useEffect(() => {
    getEquipos().then((data) => {
      setEquipos(data);
    });
  }, []);

  useEffect(() => {
    console.log(currentEquipoId);
    getJugadores(currentEquipoId).then((data) => {
      console.log('aaaaaaaa', data);
      setJugadores(data);
    });
  }, [currentEquipoId]);

  return (
    <div>
      <select onChange={(e) => setCurrentEquipoId(e.target.value)}>
        <option value={-1}>Seleccione un equipo</option>
        {
          equipos.map((equipo) => (<option key={equipo.id} value={equipo.id}>{equipo.nombre}</option>))
        }
      </select>

      <div style={{ display: 'flex', width: '100%' }}>

        <table border="3px">
          {
            jugadores.map((jugador) => (
              <tr>
                <td>{jugador.id}</td>
                <td>{jugador.nombre}</td>
              </tr>
            ))
          }
        </table>
        <table border="3px">
          <tr>
            {
              jugadores.map((jugador) => (
                <td style={{ verticalAlign: 'bottom' }} key={`b${jugador.id}`}>
                  <div style={{
                    backgroundColor: 'yellow', height: `${jugador.calidad * 30}px`, border: '2px solid black', width: '20px',
                  }}
                  />
                </td>
              ))
            }
          </tr>
          <tr>
            {
              jugadores.map((jugador) => (<td>{jugador.numero_camiseta}</td>))
            }
          </tr>
        </table>
      </div>

    </div>
  );
}

export default App;
