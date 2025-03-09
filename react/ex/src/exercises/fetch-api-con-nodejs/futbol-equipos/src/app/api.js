import axios from 'axios';
// const i = axios.create({ baseURL: 'http://localhost:5000' });
const i = axios.create({ baseURL: 'https://nodejs-futbol.herokuapp.com/' });

// CREATE
export const createPacient = (obj) => {
  console.log(obj);
  i.post('/pacient', obj);
};

// READ
export const getEquipos = async () => {
  const result = await i.get('/equipo');
  return result.data;
};

export const getEquipoById = async (id) => {
  const result = await i.get(`/equipo/${id}`);
  console.log(result);
  return result.data;
};
