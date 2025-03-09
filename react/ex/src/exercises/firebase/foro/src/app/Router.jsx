import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Layout from '../components/Layout';
import Home from '../pages/Home';
import VerHilos from '../pages/VerHilos';
import VerHilo from '../pages/VerHilo';

import CrearHilos from '../pages/CrearHilos';

function Router() {
  return (
    <Routes>
      <Route element={<Layout />}>
        <Route index element={<Home />} />
        <Route path="/ver-hilos/" element={<VerHilos />} />
        <Route path="/crear-hilos/" element={<CrearHilos />} />
        <Route path="/ver-hilo/:id" element={<VerHilo />} />
        <Route path="*" element={<div>404</div>} />
      </Route>
    </Routes>
  );
}

export default Router;
