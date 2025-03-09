import { useContext, useState } from "react";
import { AppContext } from '../app/Provider';
import { access } from '../app/services/users';

const Home = () => {
    const [userName, setUserName] = useState('');
    const [state, setState] = useContext(AppContext);

    return (
        <div>
            <p>Introduce tu nombre. Si no está en la base de datos, se creará.</p>
            <input type="text" onChange={e => setUserName(e.target.value)} />
            <p>{state.userName}</p>
            <button onClick={async () => {
                const { data } = await access(userName)
                setState({ ...state, id: data });
            }}>Acceder</button>
        </div>
    )
}

export default Home;