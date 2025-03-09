import axios from 'axios';
// const i = axios.create({ baseURL: 'http://localhost:5000/' });
const i = axios.create({ baseURL: 'https://nodejs-mensajeria.herokuapp.com/' });

export const createMessage = async (remitenteId, destinatarioId, msg) => {
  i.post('/message', { remitenteId, destinatarioId, msg });
};

// READ
export const getMessages = async (id) => {
  const data = await i.get(`/message/${id}`);
  return data.data;
};
