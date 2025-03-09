import { Link } from 'react-router-dom';

function Layout({ children }) {
  return (
    <div>
      <ul>
        <li><Link to="/layout/">Home</Link></li>
        <li><Link to="/layout/page2/">Page 2</Link></li>
      </ul>
      <div>
        {children}
      </div>
    </div>
  );
}

export default Layout;
