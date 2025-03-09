import axios from 'axios';
const instance = axios.create({ baseURL: 'http://localhost:8080/hilo' });

export const createHilo = async (nombre) => {
    console.log('aaaaaaaaaaaaaaaaaaa', nombre);
    instance.post('/', { titulo: nombre })
};

// READ
export const getHilos = async () => await instance.get('/');

export const getHiloById = async (id) => await instance.get('/' + id);