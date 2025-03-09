import { NavLink } from 'react-router-dom';
import Logo from '../assets/pablo-monteserin.jpg'
import CartWidget from './CartWidget';


const NavBar = () => (
    <div className='navbar'>
        <img src={Logo} className="logo" />
        <ul>
            <li><NavLink to="">Home</NavLink></li>
            <li><NavLink to="category/1">Balls</NavLink></li>
            <li><NavLink to="category/2">Clubs</NavLink></li>
            <li><CartWidget num={4} /></li>
        </ul>
    </div>
)

export default NavBar;