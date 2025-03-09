import { useState, useEffect } from "react";
import { getCharacters } from "../../services/services";
import { Card, Grid } from "./Home.styles";

const Home = (props) => {
  const [characters, setCharacters] = useState([]);
  useEffect(() => {
    getCharacters().then((response) => {
      setCharacters(response);
    });
  }, []);
  return (
    <Grid>
      {characters.map((character) => (
        <Card key={character.id} to={`/profile/${character.id}`}>
          <img src={character.image} alt={character.name} />
          {character.name}
        </Card>
      ))}
    </Grid>
  );
};

export default Home;
