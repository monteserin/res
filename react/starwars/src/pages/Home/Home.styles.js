import styled from "styled-components";

export const PaginationContainer = styled.div`
  font-size: 1.5rem;
  a {
    display: inline-block;
    padding: 7px;
  }
`;

export const Container = styled.div`
  max-width: 1200px;
  margin: auto;
`;

export const Grid = styled.div`
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 30px;
  img {
    max-width: 100%;
  }
`;
