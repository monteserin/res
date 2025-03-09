import { Provider } from 'react-redux';
import { store } from './redux';
import Form from './components/form/index.js';
import PintarResultado from './components/pintarResultado';

function App() {
  return (
    <Provider store={store}>
      <Form />
      <PintarResultado />
    </Provider>
  );
}

export default App;
