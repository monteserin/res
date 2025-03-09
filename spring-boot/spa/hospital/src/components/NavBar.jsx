import { Link } from 'react-router-dom';

const NavBar = () => (
    <div>
        <ul>
            <li><Link to="create">Create</Link></li>
            <li><Link to="read">Read</Link></li>
        </ul>
    </div>
)

export default NavBar;