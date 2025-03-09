import { useEffect, useState, useContext } from 'react';
import { useParams } from 'react-router-dom';
import { getCommentsFromThread, saveComment } from '../app/services/threads';
import { AppContext } from '../app/Provider';

function Thread() {
  const [comments, setComments] = useState([]);
  const [state, setState] = useContext(AppContext);
  const [txt, setTxt] = useState('');
  const { id } = useParams();

  useEffect(() => {
    getC();
  }, []);

  const getC = () => getCommentsFromThread(id).then((c) => {
    setComments(c);
  });
  return (
    <div>
      <h1>See message</h1>
      <div>
        {
                    comments.map((comment) => <div key={comment.id}>{comment.txt}</div>)
                }
      </div>

      <textarea onChange={(e) => setTxt(e.target.value)} />
      {' '}
      <br />
      <button onClick={async () => {
        await saveComment(txt, id);
        getC();
      }}
      >
        Salvar comentario
      </button>
    </div>
  );
}

export default Thread;
