import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Layout from '../components/Layout';
import Read from '../pages/Read';
import Create from '../pages/Create';
import Delete from '../pages/Delete';


const Router = () => (
    <BrowserRouter>
        <Layout>
            <Routes>
                <Route>
                    <Route index element={<Read />} />
                    <Route path="create" element={<Create />} />
                    <Route path="delete" element={<Delete />} />
                    <Route path="*" element={<div>404</div>} />
                </Route>
            </Routes>
        </Layout>
    </BrowserRouter>
);

export default Router;