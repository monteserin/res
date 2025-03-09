import axios from 'axios';
const instance = axios.create({ baseURL: 'http://localhost:8080/tarea' });


export const newTask = async (userId, taskText) => instance.post('/', { usuario: { id: userId }, txt: taskText });



export const deleteTask = async (taskId) => await instance.delete('/' + taskId);


export const updateTask = async (userId, taskId, taskText) => {
    console.log('aaaaaaaaaaa', taskText);
    await instance.put('/' + taskId, { txt: taskText, usuario: { id: userId } });
};

export const getTasksByUserId = async (userId) => {
    const result = await instance.get('/' + userId);
    console.log('666666666666', result)
    return result;
}
