import { Provider } from 'react-redux';
import { store } from './redux';
import Listado from './components/Listado';
import ShowName from './components/ShowName';

function ListadoPersonas() {
  return (
    <Provider store={store}>
      <Listado />
      <ShowName />
    </Provider>
  );
}

export default ListadoPersonas;
