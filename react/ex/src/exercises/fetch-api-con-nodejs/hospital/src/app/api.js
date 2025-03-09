import axios from 'axios';

// const i = axios.create({ baseURL: 'http://localhost:5000' });
const i = axios.create({ baseURL: 'https://nodejs-hospital.herokuapp.com/' });

// CREATE
export const createPacient = (obj) => {
  console.log(obj);
  i.post('/pacient', obj);
};

// READ
export const getPacients = async () => {
  const result = await i.get('/pacient');
  return result.data;
};

// DELETE
export const deletePacient = async (id) => {
  // await deleteDoc(doc(db, 'pacients', id));
};

export const updatePacient = async (id, obj) => {
  await i.post(`/pacient/${id}`, obj);
};

export const getPacientById = async (id) => {
  const result = await i.get(`/pacient/${id}`);
  return result.data[0];
};
