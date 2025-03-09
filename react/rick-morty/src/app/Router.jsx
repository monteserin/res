import { BrowserRouter, Route, Routes } from "react-router-dom";
import Home from "../pages/Home";
import Profile from "../pages/Profile";
import Layout from "../components/Layout";
const Router = () => (
  <BrowserRouter basename="/res/react/rick-morty/dist">
    <Layout>
      <Routes>
        <Route index element={<Home />} />
        <Route path="/profile/:id" element={<Profile />} />
        <Route path="*" element={<div>404</div>} />
      </Routes>
    </Layout>
  </BrowserRouter>
);

export default Router;
