import App from "./App";
import UserProvider from "./providers/UserProvider";

const index = () => {
  return (
    <UserProvider>
      <App />
    </UserProvider>
  );
};

export default index;
