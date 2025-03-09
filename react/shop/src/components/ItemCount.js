import { useEffect, useState } from "react";

const ItemCount = ({ stock, initial, onAdd }) => {
    const [count, setCount] = useState();

    const handleIncrement = () => setCount(count < stock ? count + 1 : stock);
    const handleDecrement = () => setCount(count > 0 ? count - 1 : count);


    useEffect(() => {
        setCount(initial != undefined ? initial : stock);
    }, [initial, stock]);
    return (
        <div className="itemCount">
            <div className="toprow">
                <button className="btn" onClick={handleDecrement}>-</button>
                <span>{count}</span>
                <button className="btn" onClick={handleIncrement}>+</button>
            </div>
            <button className="add" onClick={() => onAdd(count)} >Agregar al carrito</button>
        </div>
    );
}

export default ItemCount;