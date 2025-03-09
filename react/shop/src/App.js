import './app/styles.css';
import Router from './app/Router';
import CartContext from './app/CartContext';

const App = () => <div>
    <CartContext>
        <Router />
    </CartContext>

</div>

export default App;