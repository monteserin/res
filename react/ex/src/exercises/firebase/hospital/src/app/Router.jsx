import { Route, Routes } from 'react-router-dom';
import Home from '../pages/Home';
import Read from '../pages/Read';
import Create from '../pages/Create';
import Update from '../pages/Update';

function Router() {
  return (
    <Routes>
      <Route index element={<Home />} />
      <Route path="create" element={<Create />} />
      <Route path="read" element={<Read />} />
      <Route path="update/:id" element={<Update />} />
      <Route path="*" element={<div>404</div>} />
    </Routes>
  );
}

export default Router;
