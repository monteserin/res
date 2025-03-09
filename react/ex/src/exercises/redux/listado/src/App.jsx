import { store } from './redux';
import Listado from './components/Listado';
import ShowName from './components/ShowName';
import MyProvider from './app/Provider';

function App() {
  return (
    <MyProvider store={store}>
      <Listado />
      <ShowName />
    </MyProvider>
  );
}

export default App;
