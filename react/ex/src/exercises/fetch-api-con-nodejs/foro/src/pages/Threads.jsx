import { useEffect, useState, useContext } from 'react';
import { Link } from 'react-router-dom';
import { getThreads } from '../app/services/threads';
import { AppContext } from '../app/Provider';

function SeeMessages() {
  const [threads, setThreads] = useState([]);
  const [state, setState] = useContext(AppContext);

  useEffect(() => {
    getThreads().then((t) => {
      console.log(t);
      setThreads(t);
    });
  }, []);

  return (
    <div>
      <h1>See message</h1>
      <div>
        {
                    threads.map((thread) => <div key={thread.id}><Link to={`/foro-nodejs/thread/${thread.id}`}>{thread.txt}</Link></div>)
                }
      </div>
    </div>
  );
}

export default SeeMessages;
