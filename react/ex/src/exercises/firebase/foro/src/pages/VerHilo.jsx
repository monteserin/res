import { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import { createComentario, getHiloById } from '../app/services/hilos';

function VerHilo() {
  const { id } = useParams();
  const [hilo, setHilo] = useState({});
  const [newComentario, setNewComentario] = useState('');

  const showComments = () => getHiloById(id).then((res) => setHilo(res));

  useEffect(() => {
    showComments();
  }, []);

  console.log(hilo.comentarios);
  return (
    <div>
      {
                hilo.comentarios && hilo.comentarios.map((comentario) => <p>{comentario}</p>)
            }

      <textarea onChange={(e) => setNewComentario(e.target.value)} />
      <p>
        <button onClick={async (e) => {
          await createComentario(hilo.id, newComentario);
          await showComments();
        }}
        >
          Salvar comentario
        </button>
      </p>
    </div>
  );
}

export default VerHilo;
