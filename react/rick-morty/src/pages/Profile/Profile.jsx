//import { Test } from './Profile.styles';

import { useEffect, useState } from "react";
import { getCharacterById } from "../../services/services";
import { useParams, Link } from "react-router-dom";
import { Row } from "./Profile.styles";

const Profile = (props) => {
  const [character, setCharacter] = useState();
  const { id } = useParams();
  useEffect(() => {
    getCharacterById(id).then(setCharacter);
  }, []);

  console.log(character);
  return (
    <Row>
      <div>
        <p>
          <Link to="/">Volver</Link>
        </p>
        <p>Name: {character?.name}</p>
        <p>Gener: {character?.gender}</p>
        <p>Species:{character?.species}</p>
        <p>Status: {character?.status}</p>
      </div>
      <div>
        <img src={character?.image} alt="" />
      </div>
    </Row>
  );
};

export default Profile;
