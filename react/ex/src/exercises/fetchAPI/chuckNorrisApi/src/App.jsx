import { useState, useEffect } from 'react';
import { getCategories, getJokeFromCategory } from './services/services';

function App() {
  const [cats, setCats] = useState(null);
  const [currentCat, setCurrentCat] = useState(null);
  const [joke, setJoke] = useState(null);

  useEffect(() => {
    getCategories().then((res) => setCats(res.data));
  }, []);

  useEffect(() => {
    getJokeFromCategory(currentCat).then((res) => {
      setJoke(res.data);
    });
  }, [currentCat]);

  return (
    <div>
      <ul>
        {
                    cats && cats.map((obj) => (
                      <li>
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
