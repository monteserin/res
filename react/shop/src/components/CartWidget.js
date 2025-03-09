import { useContext } from "react";
import CartWidgetImg from '../assets/shopping-cart.png';
import { AppContext } from "../app/CartContext";


const CartWidget = () => {
    const { items } = useContext(AppContext);
    const c = items.reduce((app, current) => (app + current.quantity), 0)

    return (
        <> {c > 0 && <div className='cartWidgetContainer'>
            <img className='cartWidget' src={CartWidgetImg} alt="" /><span className='numProd'>{c}</span>
        </div>}</>

    )
}
export default CartWidget;