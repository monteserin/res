import { Link } from "react-router-dom";
import styled from "styled-components";

export const Grid = styled.div`
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
`;

export const Card = styled(Link)`
  cursor: pointer;
  text-align: center;
  font-weight: bold;
  img {
    width: 100%;
  }
`;
