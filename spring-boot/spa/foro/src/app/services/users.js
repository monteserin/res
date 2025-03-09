import axios from 'axios';
const instance = axios.create({ baseURL: 'http://localhost:8080/user' });


export const getUsers = async () => instance.get('/');

const getIdByUserName = async (userName) => {
    const result = await instance.get('/' + userName);
    return result.id;
}

export const access = async (name) => {
    console.log('aaaaaaaaaaaaaaa')
    const result = await instance.get('/' + name);
    console.log('222222222222', result)
    if (result.data === "") {
        console.log('rrrrrrrrrrrrrr')
        await instance.post('/', { nombre: name });

    }
    const id = getIdByUserName(name);
    return id;
}
