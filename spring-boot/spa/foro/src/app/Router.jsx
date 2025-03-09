import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Home from '../pages/Home';
import VerHilos from '../pages/VerHilos';
import VerHilo from '../pages/VerHilo';

import CrearHilos from '../pages/CrearHilos';
import Menu from '../pages/Menu';


const Router = () => (
    <BrowserRouter>
        <Routes>
            <Route>
                <Route index element={<Home />} />
                <Route path="/menu/" element={<Menu />} />
                <Route path="/ver-hilos/" element={<VerHilos />} />
                <Route path="/crear-hilos/" element={<CrearHilos />} />
                <Route path="/ver-hilo/:id" element={<VerHilo />} />
                <Route path="*" element={<div>404</div>} />
            </Route>
        </Routes>
    </BrowserRouter>

);

export default Router;