import styled from "styled-components";

export const Container = styled.div`
  display: flex;
  max-width: 1200px;
  margin: auto;

  & > div {
    width: 50%;
  }
  img {
    width: 100%;
  }
`;
