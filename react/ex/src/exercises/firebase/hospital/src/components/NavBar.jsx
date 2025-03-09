import { Link, Outlet } from 'react-router-dom';

function NavBar() {
  return (
    <div>
      <div>
        <ul>
          <li><Link to="create">Create</Link></li>
          <li><Link to="read">Read</Link></li>
        </ul>
      </div>
      <Outlet />
    </div>
  );
}

export default NavBar;
