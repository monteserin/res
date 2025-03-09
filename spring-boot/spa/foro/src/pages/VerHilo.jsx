import { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import { getComentarios, createComentario } from "../app/services/comentarios";

const VerHilo = () => {
    const { id } = useParams();
    const [comentarios, setComentarios] = useState([]);
    const [newComentario, setNewComentario] = useState("");

    const showComments = () => getComentarios(id).then(res => {
        console.log(id, 'rrrrrrrrrrrrr', res)
        setComentarios(res.data)
    });

    useEffect(() => {
        showComments();
    }, []);


    return (
        <div>
            {
                comentarios.map(comentario => <p key={comentario.id}>{comentario.txt}</p>)
            }

            <textarea onChange={(e) => setNewComentario(e.target.value)}></textarea>
            <p><button onClick={async (e) => {
                await createComentario(id, newComentario);
                await showComments();
            }}>Salvar comentario</button></p>
        </div>
    )
}

export default VerHilo;