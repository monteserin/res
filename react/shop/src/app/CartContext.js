import { createContext, useState } from 'react';

const CartContext = ({ children }) => {
    const [items, setItems] = useState([]);
    const addItem = (newItem, quantity) => {
        //!items.find(item => item.id === newItem.id) &&
        setItems([...items, { ...newItem, quantity }]);
    };
    const removeItem = id => {
        setItems(items.filter(item => item.id !== id));
    };
    const clear = () => setItems([]);
    const isInCart = (id) => items.find(item => item.id === id) ? true : false;

    return (
        <AppContext.Provider value={{ items, addItem, removeItem, clear, isInCart }}>
            {children}
        </AppContext.Provider>
    );
}

export const AppContext = createContext();
export default CartContext;