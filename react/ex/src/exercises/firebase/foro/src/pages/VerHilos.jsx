import { useEffect, useState, useContext } from "react";
import { Link } from "react-router-dom";
import { getHilos } from "../app/services/hilos";

function SeeMessages() {
  const [hilos, setHilos] = useState([]);

  useEffect(() => {
    getHilos().then((msgs) => {
      setHilos(msgs);
    });
  }, []);

  return (
    <div>
      <h1>Ver hilos</h1>
      <ul>
        {hilos.map((hilo) => (
          <li>
            <Link to={`/foro/ver-hilo/${hilo.id}`}>{hilo.nombre}</Link>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default SeeMessages;
