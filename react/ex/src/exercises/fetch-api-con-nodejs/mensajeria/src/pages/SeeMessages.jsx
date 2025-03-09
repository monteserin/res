import { useEffect, useState, useContext } from 'react';
import { getMessages } from '../app/services/messages';
import { AppContext } from '../app/Provider';

function SeeMessages() {
  const [messages, setMessages] = useState([]);
  const [state, setState] = useContext(AppContext);

  useEffect(() => {
    getMessages(state.id).then((msgs) => {
      setMessages(msgs);
    });
  }, []);

  return (
    <div>
      <h1>See message</h1>
      <div>
        {
                    messages.map((message) => <div key={message.id}>{message.msg}</div>)
                }
      </div>
    </div>
  );
}

export default SeeMessages;
