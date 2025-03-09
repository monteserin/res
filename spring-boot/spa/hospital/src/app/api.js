import axios from 'axios';
const instance = axios.create({ baseURL: 'http://localhost:8080/pacient' });

// CREATE
export const createPacient = (obj) => instance.post('/', obj);

// READ
export const getPacients = async () => await instance.get();

// DELETE
export const deletePacient = async (id) => await instance.delete('/' + id);

export const updatePacient = async (id, obj) => await instance.put('/' + id, obj);

export const getPacientById = async (id) => await instance.get('/' + id);