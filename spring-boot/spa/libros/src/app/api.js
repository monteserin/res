import axios from 'axios';
const instance = axios.create({ baseURL: 'http://localhost:8080/book' });

// CREATE
export const createBook = (obj) => instance.post('/', obj)

// READ
export const getBooks = async () => await instance.get('/');

// DELETE
export const deleteBook = async (id) => await instance.delete('/' + id);

export const updateBook = async (obj) => await instance.put('/', obj);