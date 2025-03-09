import { Route, Routes } from 'react-router-dom';
import Layout from '../components/Layout';
import Home from '../pages/Home';
import Threads from '../pages/Threads';
import WriteThread from '../pages/WriteThread';
import Thread from '../pages/Thread';

function RoutesConfig() {
  return (
    <Routes>
      <Route element={<Layout />}>
        <Route index element={<Home />} />
        <Route path="see-threads" element={<Threads />} />
        <Route path="thread/:id" element={<Thread />} />

        <Route path="write-thread" element={<WriteThread />} />
        <Route path="*" element={<div>404</div>} />
      </Route>
    </Routes>
  );
}

export default RoutesConfig;
