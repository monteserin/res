import { BrowserRouter, Route, Routes } from "react-router-dom";
import Home from "../pages/Home";
import Profile from "../pages/Profile";

const Router = () => (
  <BrowserRouter basename="/res/react/starwars/dist">
    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/:page" element={<Home />} />

      <Route path="profile/:id" element={<Profile />} />
    </Routes>
  </BrowserRouter>
);

export default Router;
