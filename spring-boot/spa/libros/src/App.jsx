import { useState, useEffect } from "react";
import { createBook, getBooks } from "./app/api";
import Tr from './components/Tr';

const App = () => {
    const [title, setTitle] = useState('');
    const [price, setPrice] = useState('');
    const [books, setBooks] = useState([]);

    const renderBooks = () => getBooks().then(b => setBooks(b.data));

    useEffect(() => {
        renderBooks();
    }, [])

    return (
        <div>
            <table border="1px">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        books.map(book => <Tr key={book.id} book={book} renderBooks={renderBooks} />)
                    }
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th><input type="text" onChange={e => setTitle(e.target.value)} /></th>
                        <th><input type="text" onChange={e => setPrice(e.target.value)} /></th>
                        <td><button onClick={async () => {
                            await createBook({ titulo: title, precio: price });
                            renderBooks();
                            setTitle('');
                            setPrice('');
                        }}>Add</button></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    )
}

export default App;
