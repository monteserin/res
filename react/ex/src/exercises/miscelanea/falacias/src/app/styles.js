import styled from 'styled-components';

export const LI = styled.div`
  background-color: ${({ isRed }) => (isRed ? 'red' : 'transparent')};
`;
