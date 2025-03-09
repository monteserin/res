import { useState, useContext, useEffect } from 'react';
import { getUsers } from '../app/services/users';
import { createMessage } from '../app/services/messages';
import { AppContext } from '../app/Provider';

const WriteMessage = () => {
    const [state, setState] = useContext(AppContext);
    const [users, setUsers] = useState([]);
    const [checkedUsersIds, setCheckedUsersIds] = useState([]);

    const [message, setMessage] = useState('');
    useEffect(() => {
        getUsers().then(res => {
            console.log('111111111111', res)
            setUsers(res.data);
        });
    }, []);

    // Cada vez que una checkbox cambia, se actualiza el array de usuarios seleccionados
    const onChange = (userId) => {
        if (checkedUsersIds.includes(userId)) {
            setCheckedUsersIds(checkedUsersIds.filter(id => userId != id))
        } else {
            setCheckedUsersIds([...checkedUsersIds, userId]);
        }
    }


    return (
        <div>
            <h1>Write message</h1>
            <div>
                <textarea onChange={(e) => setMessage(e.target.value)}></textarea>
            </div>
            <button onClick={() => {
                checkedUsersIds.map(checkedUserIds => {
                    createMessage(state.id, checkedUserIds, message);
                })
            }}>Enviar</button>

            <h2>¿A quien quieres mandar el mensaje?</h2>
            {
                users.map(user => <div key={user.id}><input type="checkbox" checked={checkedUsersIds.includes(user.id)} onChange={() => onChange(user.id)} /> {user.nombre}</div>)
            }
        </div>
    )
}

export default WriteMessage;