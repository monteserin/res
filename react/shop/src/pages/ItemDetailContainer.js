import { useEffect, useState } from "react";
import { useParams } from 'react-router-dom';
import { getProductById } from '../app/api';
import ItemDetail from "../components/ItemDetail";

const ItemDetailContainer = () => {
    const [product, setProduct] = useState({});
    const { id } = useParams();

    useEffect(() => {
        const getProduct = async () => {
            const product = await getProductById(id);
            setProduct(product);
        }
        getProduct();

    }, [id]);

    return (
        <ItemDetail item={product} />
    )
}

export default ItemDetailContainer;