import { useContext } from "react";
import { AppContext } from '../app/Provider';
import { access } from '../app/services/users';

const Home = () => {
    const [state, setState] = useContext(AppContext);

    return (
        <div>
            <p>Introduce tu nombre. Si no está en la base de datos, se creará.</p>
            <input type="text" onChange={e => setState({ userName: e.target.value })} />
            <p>{state.userName}</p>
            <p>{state.id}</p>
            <button onClick={async () => {
                const id = await access(state.userName)
                setState({ ...state, id });
            }}>Acceder</button>
        </div>
    )
}

export default Home;