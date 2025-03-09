import { BrowserRouter, Route, Routes } from "react-router-dom";
import SqlBox from "../components/SqlBox";

const Router = () => (
  <BrowserRouter basename="/res/sql/app/dist">
    <Routes>
      <Route path="/" element={<SqlBox />} />
      <Route path="*" element={<div>404</div>} />
    </Routes>
  </BrowserRouter>
);

export default Router;
