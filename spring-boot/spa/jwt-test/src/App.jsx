import { useState } from "react";
import axios from "axios";

const App = () => {
  const [userName, setUserName] = useState("");
  const [password, setPassword] = useState("");

  const handleSubmit = () => {
    alert("userName: " + userName + " password: " + password);
    axios
      .post(
        "http://localhost:8080/login",
        {},
        {
          headers: {
            "Content-Type": "application/json",
            Authorization: "basic " + btoa(userName + ":" + password),
          },
        }
      )
      .then(
        (response) => {
          console.log(response);
        },
        (error) => {
          console.log(error);
        }
      );
  };

  return (
    <>
      <input type="text" onChange={(e) => setUserName(e.target.value)} />
      <input type="password" onChange={(e) => setPassword(e.target.value)} />
      <button onClick={handleSubmit}>Enviar</button>
    </>
  );
};

export default App;
