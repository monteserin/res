import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Layout from '../components/Layout';
import Home from '../pages/Home';
import SeeMessages from '../pages/SeeMessages';
import WriteMessage from '../pages/WriteMessage';


const RoutesConfig = () => (
    <BrowserRouter>
        <Routes>
            <Route element={<Layout />}>
                <Route index element={<Home />} />
                <Route path="seeMessages" element={<SeeMessages />} />
                <Route path="writeMessage" element={<WriteMessage />} />
                <Route path="*" element={<div>404</div>} />
            </Route>
        </Routes>
    </BrowserRouter>
);

export default RoutesConfig;