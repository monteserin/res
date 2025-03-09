import { BrowserRouter, Route, Routes } from 'react-router-dom';
import ItemListContainer from '../pages/ItemListContainer';
import ItemDetailContainer from '../pages/ItemDetailContainer';
import Cart from '../pages/Cart';
import Layout from './Layout';
import InserccionProductos from '../components/InserccionProductos';

const Router = () => (
    <BrowserRouter>
        <Routes>
            <Route path={process.env.PUBLIC_URL} element={<Layout />}>
                <Route index element={<ItemListContainer />} />
                <Route path="category/:id" element={<ItemListContainer />} />
                <Route path="item/:id" element={<ItemDetailContainer />} />
                {/* <Route path="add" element={<InserccionProductos />} /> */}

                <Route path="cart" element={<Cart />} />
                <Route path="*" element={<div>404</div>} />

            </Route>
        </Routes>
    </BrowserRouter>
)

export default Router;