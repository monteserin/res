import { useEffect, useState, useContext } from 'react';
import { newTask, getTasksByUserId } from '../app/services/tasks';
import { AppContext } from '../app/Provider';
import Task from '../components/Task';

const Tasks = () => {
    const [tasks, setTasks] = useState([]);
    const [taskText, setTaskText] = useState('');
    const [state] = useContext(AppContext);

    const getTasks = () => getTasksByUserId(state.id).then(res => {
        console.log('11111111111111-', state.id)
        setTasks(res.data)
    });

    useEffect(() => {
        getTasks()
    }, []);

    return (
        <div>
            <h1>Tasks</h1>
            <div>
                {
                    tasks.map((task) => <Task key={task.id} txt={task.txt} id={task.id} userId={state.id} getTasks={getTasks} />)
                }
            </div>

            <textarea onChange={(e) => setTaskText(e.target.value)}></textarea>
            <p><button onClick={async () => {
                await newTask(state.id, taskText)
                getTasks();
            }}>Añadir tarea</button></p>
        </div>
    )
}

export default Tasks;