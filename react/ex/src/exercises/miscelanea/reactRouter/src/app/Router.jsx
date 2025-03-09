import { Route, Routes } from 'react-router-dom';
import Home from '../pages/Home';
import Page2 from '../pages/page2';
import Product from '../pages/product';

function Router() {
  return (
    <Routes>
      <Route index element={<Home />} />
      <Route path="/page2" element={<Page2 />} />
      <Route path="/product" element={<Product />} />
      {/* Es muy recomendable añadir esta ruta para obtener un mensaje de error en el caso de que la ruta no exista. De lo contrario, si la ruta no existe llegaremos a una página en blanco */}
      <Route path="*" element={<div>404</div>} />
    </Routes>
  );
}

export default Router;
