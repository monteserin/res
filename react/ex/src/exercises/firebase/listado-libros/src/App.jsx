import { useState, useEffect } from 'react';
import { createBook, getBooks } from './app/api';
import Tr from './components/Tr';

function App() {
  const [title, setTitle] = useState('');
  const [price, setPrice] = useState('');
  const [books, setBooks] = useState([]);

  const renderBooks = () => getBooks().then((b) => setBooks(b));

  useEffect(() => {
    renderBooks();
  }, []);

  return (
    <div>
      <table border="1px">
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Price</th>
          <th>Option</th>
        </tr>
        {
                    books.map((book) => <Tr book={book} renderBooks={renderBooks} />)
                }
        <tr>
          <th />
          <th><input type="text" onChange={(e) => setTitle(e.target.value)} /></th>
          <th><input type="text" onChange={(e) => setPrice(e.target.value)} /></th>
          <td>
            <button onClick={() => {
              createBook({ title, price });
              renderBooks();
              setTitle('');
              setPrice('');
            }}
            >
Add
</button>
          </td>
        </tr>
      </table>
    </div>
  );
}

export default App;
