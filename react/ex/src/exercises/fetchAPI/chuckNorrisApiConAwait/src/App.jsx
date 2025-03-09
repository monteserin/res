import { useState, useEffect } from 'react';
import { getCategories, getJokeFromCategory } from './services/services';

function App() {
  const [cats, setCats] = useState(null);
  const [currentCat, setCurrentCat] = useState(null);
  const [joke, setJoke] = useState(null);

  useEffect(() => {
    async function fetchData() {
      const res = await getCategories();
      setCats(res.data);
    }
    fetchData();
  }, []);

  useEffect(() => {
    async function fetchData() {
      const res = await getJokeFromCategory(currentCat);
      setJoke(res.data);
    }
    fetchData();
  }, [currentCat]);

  return (
    <div>
      <ul>
        {
                    cats && cats.map((obj) => (
                      <li key={obj.id}>
                        <a
                          href="#"
                          onClick={(e) => {
                            e.preventDefault();
                            setCurrentCat(obj);
                          }}
                        >
                          {obj}
                        </a>
                      </li>
                    ))
                }
      </ul>
      {joke && joke.value}
    </div>
  );
}

export default App;
