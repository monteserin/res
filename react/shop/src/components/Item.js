import { Link } from "react-router-dom";
const Item = ({ item }) => (
    <div className="item">
        <div>
            <p className="itemTitle">{item.title}</p>
            <img src={item.pictureUrl} alt="product img" />
            <p className="description">{item.description}</p>
        </div>
        <div style={{ padding: 15 }}>
            <Link to={`item/${item.id}`}>    Ver detalle del producto</Link>
        </div>
    </div>
)

export default Item;