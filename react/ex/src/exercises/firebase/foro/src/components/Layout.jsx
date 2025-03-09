import { Link, Outlet } from 'react-router-dom';

function Layout() {
  return (
    <div>
      <ul>
        <li><Link to="/foro/ver-hilos">Ver hilos</Link></li>
        <li><Link to="/foro/crear-hilos">Crear hilos</Link></li>
      </ul>
      <Outlet />
    </div>
  );
}

export default Layout;
