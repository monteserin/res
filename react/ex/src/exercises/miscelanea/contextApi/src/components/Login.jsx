import { useUserContext } from "../providers/UserProvider";

const Login = () => {
  const { setUser } = useUserContext();

  return (
    <button onClick={() => setUser({ username: "Paco", uid: 33 })}>
      Save User
    </button>
  );
};

export default Login;
