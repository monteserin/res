import axios from 'axios';
const instance = axios.create({ baseURL: 'http://localhost:8080/message' });


export const createMessage = async (remitenteId, destinatarioId, msg) => instance.post(('/'), { remitente: { id: remitenteId }, destinatario: { id: destinatarioId }, texto: msg });

// READ
export const getMessages = async (id) => await instance.get('/' + id)
