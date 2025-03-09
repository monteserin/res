import { useEffect } from "react";
import Login from "./pages/Login";
import Tasks from "./pages/Tasks";
import { useUserContext } from "./providers/UserProvider";
import { onAuthStateChanged, auth } from "./services/firebase";

const App = () => {
  const { user, setUser } = useUserContext();

  useEffect(() => {
    onAuthStateChanged(auth, (user) => {
      if (user) {
        console.log("user", user, " userId:", user.uid);
        setUser(user);
      } else {
        console.log("No user logged");
        setUser(null);
      }
    });
  }, []);
  return user ? <Tasks /> : <Login />;
};
export default App;
