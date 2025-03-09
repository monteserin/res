import styled from 'styled-components';

export const Container = styled.div`
  max-width: 1200px;
  margin: auto;
`;

export const Row = styled.div`
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  & > * {
    width: 50%;
  }
  img {
    max-width: 100%;
  }
`;

export const LeftArrow = styled.img`
  width: 40px;
`;

export const RightArrow = styled.img`
  width: 40px;
  transform: rotate(180deg);
`;

export const Img = styled.img`
  border: ${({ $highlight }) => ($highlight ? '6px solid red' : '6px solid transparent')};
  box-sizing: border-box;
  border-radius: 30px;
`;
