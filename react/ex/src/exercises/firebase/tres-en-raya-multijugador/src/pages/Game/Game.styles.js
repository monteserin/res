import styled from "styled-components";

export const Board = styled.div`
  display: grid;
  grid-template-columns: 150px 150px 150px;
  grid-template-rows: 150px 150px 150px;
  justify-content: center;
  button {
    cursor: pointer;
  }
`;
export const Flip = styled.button`
  background-color: ${({ color }) =>
    color === "X" ? "red" : color === "O" ? "blue" : "gray"};
`;
