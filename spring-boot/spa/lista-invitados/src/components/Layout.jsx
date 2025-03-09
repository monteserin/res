import { Link } from 'react-router-dom';

const Layout = ({ children }) => (
    <div>
        <div>
            <ul>
                <li><Link to=".">Read</Link></li>
                <li><Link to="create">Create</Link></li>
                <li><Link to="delete">Delete</Link></li>
            </ul>
        </div>
        {children}
    </div>
)

export default Layout;