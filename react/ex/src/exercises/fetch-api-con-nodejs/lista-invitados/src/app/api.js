import axios from 'axios';
// const instance = axios.create({ baseURL: 'http://localhost:5000' });
const instance = axios.create({ baseURL: 'https://nodejs-lista-invitados.herokuapp.com/' });

export const createGuest = async (name) => await instance.post('/guest/', { name });

export const getGuests = async () => await instance.get('/guest/');

export const deleteGuest = async (id) => {
  console.log(id);

  await instance.delete(`/guest/${id}`);
};
