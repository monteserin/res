import './application/firebase';
import { withAuthenticationRequired } from './application/hocs';
import { logout, getCurrentUser } from './application/services';

const App = () => {
    const user = getCurrentUser();
    console.log(user)
    return (
        <div>
            <div>
                {user.displayName}
            </div>
            <button onClick={logout}>Logout</button>
        </div>
    );
}

export default withAuthenticationRequired(App);
