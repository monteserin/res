import axios from 'axios';
const instance = axios.create({ baseURL: 'http://localhost:8080/user' });

export const access = async (name) => await instance.get('/' + name);


export const getUsers = async () => await instance.get('/');