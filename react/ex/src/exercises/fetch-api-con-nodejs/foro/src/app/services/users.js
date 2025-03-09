import axios from 'axios';
// const i = axios.create({ baseURL: 'http://localhost:5000/' });
const i = axios.create({ baseURL: 'https://nodejs-foro.herokuapp.com/' });

export const getUsers = async () => {
  const v = await i.get('/user');
  return v.data;
};

export const access = async (name) => {
  console.log('name: ', name);
  const r = await i.post('/user/access', { name });
  return r.data.id;
};
