import axios from 'axios';
import { getHiloById } from './hilos';
const instance = axios.create({ baseURL: 'http://localhost:8080/comentario' });


export const createComentario = async (hiloId, comentario) => {
    instance.post('/', { txt: comentario, hilo: { id: hiloId } });
}

// READ
export const getComentarios = async (hiloId) => await instance.get('/' + hiloId);
