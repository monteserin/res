import { useNavigate, Link } from "react-router-dom";

function Home() {
  const navigate = useNavigate();
  return (
    <div>
      <ul>
        <li>
          <Link to="/reactRouter">Home</Link>
        </li>
        <li>
          <Link to="/reactRouter/page2">Page2</Link>
        </li>
        <li>
          <Link to="/reactRouter/product?param=8">Product</Link>
        </li>
        <li>
          <Link to="/reactRouter/ajksdfkjhasdk"> Error en la url</Link>
        </li>
      </ul>

      <button onClick={() => navigate(`${process.env.PUBLIC_URL}/page2`)}>
        Pulsar
      </button>
    </div>
  );
}
export default Home;
