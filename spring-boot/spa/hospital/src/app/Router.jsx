import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Home from '../pages/Home';
import Read from '../pages/Read';
import Create from '../pages/Create';
import Update from '../pages/Update';

const Router = () => (
    <BrowserRouter>
        <Routes>
            <Route index element={<Home />} />
            <Route path="create" element={<Create />} />
            <Route path="read" element={<Read />} />
            <Route path="pacient/:id" element={<Update />} />
            <Route path="*" element={<div>404</div>} />
        </Routes>
    </BrowserRouter>
);

export default Router;