import { Link, Outlet } from 'react-router-dom';

function Layout() {
  return (
    <div>
      <div>
        <ul>
          <li><Link to="/foro-nodejs/">Home</Link></li>
          <li><Link to="/foro-nodejs/see-threads">Ver hilos</Link></li>
          <li><Link to="/foro-nodejs/write-thread">Crear nuevo hilo</Link></li>
        </ul>
      </div>
      <Outlet />
    </div>
  );
}

export default Layout;
