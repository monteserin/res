import { Link } from "react-router-dom";
const Layout = ({ children }) => (
  <div>
    <nav>
      <ul>
        <li>
          <Link to="/">Home</Link>
        </li>
        <li>
          <Link to="/page2">Page2</Link>
        </li>
        <li>
          <Link to="/product/1">Producto 1</Link>
        </li>
      </ul>
    </nav>
    <main>{children}</main>
  </div>
);

export default Layout;
