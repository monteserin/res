import { Provider } from 'react-redux';
import { store } from './redux';
import Form from './components/Form';
import PintarResultado from './components/Pintarresultado';

function App() {
  return (
    <Provider store={store}>
      <Form />
      <PintarResultado />
    </Provider>
  );
}

export default App;
