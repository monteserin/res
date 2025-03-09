import styled from "styled-components";
import img from "./assets/tablegame.jpg";

export const Board = styled.div`
  background-image: url(${img});
  background-size: 100% 100%;
  margin: 0 auto;
  max-width: 900px;
  aspect-ratio: 1;
  display: grid;
  grid-template-columns: repeat(5, 20%);
  grid-template-rows: repeat(5, 20%);

  div {
    border: 3px solid red;
    position: relative;
  }
`;

export const Chip1 = styled.div`
  background-color: red;
  border-radius: 100%;
  width: 50px;
  height: 50px;
  position: absolute;
`;

export const Chip2 = styled.div`
  background-color: blue;
  border-radius: 100%;
  width: 50px;
  height: 50px;
  position: absolute;
`;
