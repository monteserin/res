import Login from "./components/Login";
import UserInfo from "./components/UserInfo";
import UserProvider from "./providers/UserProvider";

function App() {
  return (
    <UserProvider>
      <Login />
      <UserInfo />
    </UserProvider>
  );
}

export default App;
