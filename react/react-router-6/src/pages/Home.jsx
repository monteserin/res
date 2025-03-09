import { Link } from "react-router-dom";
import { useNavigate } from "react-router-dom";


const Home = () => {
    const navigate = useNavigate();

    const pulsado = () => {
        navigate('/page2');
    }

    return (
        <div>
            <h1>Home</h1>
            <button onClick={pulsado}>Pulsame</button>

        </div>
    )
}

export default Home