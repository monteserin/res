import { useContext, useState } from "react";
import { AppContext } from "../app/CartContext";
import { saveOrder } from "../app/api";

const Cart = () => {
    const { items, removeItem } = useContext(AppContext);
    const [name, setName] = useState('');
    const [email, setEmail] = useState('');
    const [phone, setPhone] = useState('');

    console.log('items', items)
    return (
        <div>
            <form>
                <p><input type="text" placeholder="Name" onChange={e => setName(e.target.value)} /></p>
                <p><input type="text" placeholder="Phone" onChange={e => setPhone(e.target.value)} /></p>
                <p><input type="email" placeholder="Email" onChange={e => setEmail(e.target.value)} /></p>
                <button type="button" onClick={() => {
                    const order = {
                        buyer: { name, phone, email },
                        items
                    }
                    saveOrder(order)
                }}>Comprar</button>

            </form>
            {
                items.length > 0 ?
                    <>
                        {
                            items.map(item => <div>
                                <p>Nombre: {item.title}</p>
                                <p>Cantidad: {item.quantity}</p>
                                <p>Precio: {item.price} €</p>
                                <button onClick={() => removeItem(item.id)}>Remove item</button>
                                <hr />
                            </div>)
                        }
                        <p>Coste total: {items.reduce((acc, item) => acc + item.price * item.quantity, 0)} €</p>
                    </>
                    : <p>No hay productos en el carrito</p>
            }
        </div>
    )
}

export default Cart;