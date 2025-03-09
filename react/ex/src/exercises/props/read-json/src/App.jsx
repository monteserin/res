import Book from './components/Book';
import books from './data/books.json';

const App = () => {
  return (
    <>
      {/* <Book book="Viaje a la luna" /> */}

      {
        books.map(book => <Book key={book.title} book={book} />)
      }
    </>
  )
}

export default App;
