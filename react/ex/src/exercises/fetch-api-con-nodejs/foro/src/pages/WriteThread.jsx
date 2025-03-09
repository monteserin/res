import { useState, useContext, useEffect } from 'react';
import { getUsers } from '../app/services/users';
import { createThread } from '../app/services/threads';
import { AppContext } from '../app/Provider';

function WriteMessage() {
  const [state, setState] = useContext(AppContext);
  const [threads, setThreads] = useState([]);
  const [txt, setTxt] = useState('');

  useEffect(() => {
    getUsers().then((users) => {
      setThreads(users);
    });
  }, []);

  return (
    <div>
      <h1>Write message</h1>
      <div>
        <textarea onChange={(e) => setTxt(e.target.value)} />
      </div>
      <button onClick={() => {
        createThread(txt);
      }}
      >
        Enviar
      </button>

    </div>
  );
}

export default WriteMessage;
