import { Route, Routes } from 'react-router-dom';
import Home from '../pages/Home';
import Equipo from '../pages/Equipo';

function Router() {
  return (
    <Routes>
      <Route>
        <Route index element={<Home />} />
        <Route path="equipo/:id" element={<Equipo />} />
        <Route path="*" element={<div>404</div>} />
      </Route>
    </Routes>
  );
}

export default Router;
