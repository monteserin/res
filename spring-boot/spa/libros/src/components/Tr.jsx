import { useState } from "react";
import { deleteBook, updateBook } from "../app/api";

const Tr = ({ book, renderBooks }) => {
    const [title, setTitle] = useState(book.titulo);
    const [price, setPrice] = useState(book.precio);
    return (
        <tr>
            <td>{book.id}</td>
            <td><input type="text" defaultValue={title} onChange={e => setTitle(e.target.value)} /></td>
            <td><input type="text" defaultValue={price} onChange={e => setPrice(e.target.value)} /></td>
            <td><button onClick={async () => {
                await deleteBook(book.id);
                renderBooks();
            }}>Remove</button>
                <button onClick={async () => {
                    await updateBook({ id: book.id, titulo: title, precio: price });
                    renderBooks();
                }}>Update</button>
            </td>
        </tr>
    )
}

export default Tr;