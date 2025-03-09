import { Route, Routes } from 'react-router-dom';
import Layout from '../components/Layout.jsx';
import Home from '../pages/Home.jsx';
import SeeMessages from '../pages/SeeMessages.jsx';
import WriteMessage from '../pages/WriteMessage.jsx';

function Router() {
  return (
    <Routes>
      <Route element={<Layout />}>
        <Route index element={<Home />} />
        <Route path="seeMessages" element={<SeeMessages />} />
        <Route path="writeMessage" element={<WriteMessage />} />
        <Route path="*" element={<div>404</div>} />
      </Route>
    </Routes>
  );
}

export default Router;
