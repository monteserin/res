import { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import { getItemsByCategory, getProducts } from "../app/api";
import Item from "./Item";

const ItemList = () => {
    const [products, setProducts] = useState([]);
    const { id } = useParams();
    useEffect(() => {
        const getInfo = async () => {
            console.log(!id ? "No hay id" : id);
            console.log(await getItemsByCategory(id))
            setProducts(!id ? await getProducts() : await getItemsByCategory(id));
        }
        getInfo();
    }, [id])


    return (
        <ul class="items">
            {products.map(item => (
                <Item key={item.id} item={item} />
            ))}
        </ul>
    );
}

export default ItemList;