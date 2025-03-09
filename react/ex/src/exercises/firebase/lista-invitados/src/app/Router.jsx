import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Layout from '../components/Layout';
import Read from '../pages/Read';
import Create from '../pages/Create';
import Delete from '../pages/Delete';

function RoutesConfig() {
  return (
    <Routes>
      <Route element={<Layout />}>
        <Route index element={<Read />} />
        <Route path="create" element={<Create />} />
        <Route path="delete" element={<Delete />} />
        <Route path="*" element={<div>404</div>} />
      </Route>
    </Routes>
  );
}

export default RoutesConfig;
