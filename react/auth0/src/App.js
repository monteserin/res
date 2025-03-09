
import { useAuth0, withAuthenticationRequired } from '@auth0/auth0-react';

const App = () => {
  const { isAuthenticated, logout, user } = useAuth0();

  return (
    <div>
      <span>Hi, {user.name} <img width={50} height={50} src={user.picture} alt="" /></span>
      <div>Logged: {String(isAuthenticated)}</div>
      <div>Verified: {String(user.email_verified)}</div>
      <button onClick={() => logout()}>Logout</button>
    </div>
  );
};

export default withAuthenticationRequired(App);