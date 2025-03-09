import { Link, Outlet } from 'react-router-dom';

function Layout() {
  return (
    <div>
      <div>
        <ul>
          <li><Link to=".">Read</Link></li>
          <li><Link to="create">Create</Link></li>
          <li><Link to="delete">Delete</Link></li>
        </ul>
      </div>
      <Outlet />
    </div>
  );
}

export default Layout;
