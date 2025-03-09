import { useState } from "react";
import { signIn, signUp } from "../services/auth";

const Login = () => {
  const [email, setEmail] = useState();
  const [password, setPassword] = useState();
  return (
    <div>
      <input
        type="text"
        placeholder="email"
        onChange={(e) => setEmail(e.target.value)}
      />
      <br />
      <input
        type="password"
        placeholder="password"
        onChange={(e) => setPassword(e.target.value)}
      />
      <br />
      <button onClick={() => signIn(email, password)}>SignIn</button>
      <button onClick={() => signUp(email, password)}>SignUp</button>
    </div>
  );
};

export default Login;
