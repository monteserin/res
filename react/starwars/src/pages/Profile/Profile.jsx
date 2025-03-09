import { useEffect, useState } from "react";
import { getCharacterById, getFilms } from "../../app/services/services";
import { useParams } from "react-router-dom";
import { Container } from "./Profile.styles";

const Profile = () => {
  const { id } = useParams();
  const [character, setCharacter] = useState(null);
  const [films, setFilms] = useState([]);
  useEffect(() => {
    getCharacterById(id).then((data) => {
      setCharacter(data);
      getFilms(data.films).then(setFilms);
    });
  }, []);
  return (
    <Container>
      <div>
        <h1>Profile</h1>
        <p>Character: {id}</p>
        <p>Name: {character?.name}</p>
        <p>Height: {character?.height}</p>
        <p>Mass: {character?.mass}</p>
        <p>Hair color: {character?.hair_color}</p>
        <h2>Films</h2>
        {films.map((film) => (
          <p key={film.title}>{film.title}</p>
        ))}
      </div>

      <img
        src={`https://starwars-visualguide.com/assets/img/characters/${id}.jpg`}
        alt=""
      />
    </Container>
  );
};

export default Profile;
