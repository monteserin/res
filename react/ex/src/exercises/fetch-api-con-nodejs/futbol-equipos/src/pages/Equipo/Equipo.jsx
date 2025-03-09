import { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';
import { getEquipoById } from '../../app/api';

function Equipo() {
  const { id } = useParams();
  const [equipo, setEquipo] = useState({});
  const [jugadores, setJugadores] = useState([]);

  console.log(equipo);
  useEffect(() => {
    getEquipoById(id).then((data) => {
      setEquipo(data.equipo);
      setJugadores(data.jugadores);
    });
  }, []);

  return (
    <div>
      <h1>{equipo.nombre}</h1>
      <img src={`/img-futbol/${equipo.foto_escudo}`} alt="" />
      <img src={`/img-futbol/${equipo.foto_equipo}`} alt="" />

      {
        jugadores.map((jugador) => (
          <p>
            {jugador.numero_camiseta}
            {' '}
            -
            {' '}
            {jugador.nombre}
            {' '}
            {jugador.apellidos}
          </p>
        ))
      }
    </div>
  );
}

export default Equipo;
