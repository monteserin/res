import axios from 'axios';
// const instance = axios.create({ baseURL: 'http://localhost:8080/people' });
// const instance = axios.create({ baseURL: 'https://listainvitados.onrender.com/people' });
const instance = axios.create({ baseURL: 'https://docker2-46v4.onrender.com/people' });



export const savePersonName = async (obj) => await instance.post('/', obj)

export const getPersons = async () => await instance.get();

export const deletePerson = async (id) => await instance.delete('/' + id);

export const updatePerson = async (id, name) => await instance.put('/' + id, { nombre: name });

