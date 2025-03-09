import Component1 from "./components/Component1";
import Component2 from "./components/Component2";
import { Provider } from "./store";

function App() {
  return (
    <Provider>
      <Component1/>
      <Component2/>
    </Provider>
  );
}

export default App;
