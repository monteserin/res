import { Link } from 'react-router-dom';

const Menu = () => (
    <div>
        <ul>
            <li><Link to={"/ver-hilos"}>Ver hilos</Link></li>
            <li><Link to={"/crear-hilos"}>Crear hilos</Link></li>
        </ul>
    </div>
)

export default Menu;