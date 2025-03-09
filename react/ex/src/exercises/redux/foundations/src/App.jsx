import { Provider } from 'react-redux';
import { store } from './redux';
import Login from './screens/Login';

function App() {
  return (
    <Provider store={store}>
      <Login />
    </Provider>
  );
}

export default App;
