import { useEffect, useState } from "react";
import { Link, useParams } from "react-router-dom";
import { getCharacters } from "../../app/services/services";
import { getIdFromUrl } from "../../app/utils";
import { PaginationContainer, Container, Grid } from "./Home.styles";

const Home = () => {
  const [characters, setCharacters] = useState([]);
  const [linksAmount, setLinksAmount] = useState(0);
  const { page } = useParams();
  useEffect(() => {
    getCharacters(page).then((data) => {
      setCharacters(data.results);
      setLinksAmount(Math.ceil(data.count / 10));
    });
  }, [page]);

  return (
    <Container>
      <Grid>
        {characters.map((character) => {
          const id = getIdFromUrl(character.url);
          return (
            <Link key={character.name} to={`/profile/${id}`}>
              <img
                src={`https://starwars-visualguide.com/assets/img/characters/${id}.jpg`}
                alt=""
              />
              <h2>{character.name}</h2>
            </Link>
          );
        })}
      </Grid>
      <PaginationContainer>
        {Array(9)
          .fill()
          .map((_, index) => (
            <Link key={index} to={`/${index + 1}`}>
              {index + 1}
            </Link>
          ))}
      </PaginationContainer>
    </Container>
  );
};

export default Home;
