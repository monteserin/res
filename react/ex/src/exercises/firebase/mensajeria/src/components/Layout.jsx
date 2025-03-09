import { Link, Outlet } from 'react-router-dom';

function Layout() {
  return (
    <div>
      <div>
        <ul>
          <li><Link to="/mensajeria/">Home</Link></li>
          <li><Link to="/mensajeria/seeMessages">See messages</Link></li>
          <li><Link to="/mensajeria/writeMessage">Write message</Link></li>
        </ul>
      </div>
      <Outlet />
    </div>
  );
}

export default Layout;
