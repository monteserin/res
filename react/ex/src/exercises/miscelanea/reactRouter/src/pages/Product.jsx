import { useParams, useLocation, Link } from "react-router-dom";

function Product() {
  const query = new URLSearchParams(useLocation().search);
  const number = query.get("param");

  const { id } = useParams();
  return (
    <div>
      La id es:
      {id}
      <p>
        <Link to="/reactRouter/">Volver a home</Link>
      </p>
    </div>
  );
}
export default Product;
