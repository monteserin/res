import { useState, useEffect } from 'react';
import { getEquipos } from '../../app/api';
import { Team, Container } from './Home.styles';

function Home() {
  const [equipos, setEquipos] = useState([]);
  useEffect(() => {
    getEquipos().then((equipos) => {
      console.log(equipos);
      setEquipos(equipos);
    });
  }, []);
  return (
    <div>
      <h1>Home</h1>
      <Container>
        {
          equipos.map((equipo) => (
            <Team to={`equipo/${equipo.id}`} key={equipo.id}>
              <img src={`/img-futbol/${equipo.foto_escudo}`} />
              <div>
                <p>{equipo.nombre}</p>
                <p>{equipo.fundacion}</p>
                <p>{equipo.presidente}</p>
              </div>
            </Team>
          ))
        }
      </Container>
    </div>
  );
}

export default Home;
