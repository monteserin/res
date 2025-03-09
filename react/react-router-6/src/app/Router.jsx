import { BrowserRouter, Route, Routes } from "react-router-dom";
import Home from "../pages/Home";
import Page2 from "../pages/Page2";
import Product from "../pages/Product";
import Layout from "../components/Layout/Layout";

const Router = () => (
  <BrowserRouter basename={import.meta.env.VITE_PUBLIC_URL}>
    <Layout>
      <Routes>
        <Route index element={<Home />} />
        <Route path="/page2" element={<Page2 />} />
        <Route path="/product/:id" element={<Product />} />
        <Route path="*" element={<div>404</div>} />
      </Routes>
    </Layout>
  </BrowserRouter>
);

export default Router;
