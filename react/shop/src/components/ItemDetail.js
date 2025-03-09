import { useContext, useState } from "react";
import { Link } from "react-router-dom";
import { AppContext } from "../app/CartContext";
import ItemCount from "./ItemCount";

const ItemDetail = ({ item }) => {
    const [count, setCount] = useState(0);
    console.log('aaaaaaaaa', item)
    const { items, addItem, removeItem, clear } = useContext(AppContext);

    return (
        <div className="detailedInfo">

            <div>
                <h2>Información detallada</h2>
                <p className="itemTitle">{item.title}</p>
                <img src={item.pictureUrl} alt="product img" />
                <p className="description">Description: {item.description}</p>
                {
                    count === 0 ?
                        <ItemCount stock={item.stock} onAdd={(c) => setCount(c)} />
                        : <div>
                            <p><button onClick={() => addItem(item, count)}>Comprar</button></p>
                            <p><Link to={process.env.PUBLIC_URL + `/cart`}>Terminar compra</Link></p>
                        </div>
                }
            </div>
        </div >
    )
}
export default ItemDetail;