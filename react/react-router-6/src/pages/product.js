import { useParams } from 'react-router-dom';
import { useLocation } from "react-router-dom";


const Product = () => {
    const query = new URLSearchParams(useLocation().search);
    const number = query.get('param');


    const { id } = useParams();
    return <div>La id es: {number}</div>
}
export default Product;