import { Provider } from 'react-redux';
import { store } from './redux';
import Form from './components/form';
import PintarResultado from './components/pintarresultado';

function App() {
  return (
    <Provider store={store}>
      <Form />
      <PintarResultado />
    </Provider>
  );
}

export default App;
