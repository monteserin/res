import styled from 'styled-components';

export const Back = styled.div`
  width: 300px;
  height: 300px;
  background-color: red;
  display: ${({ $visible }) => ($visible ? 'block' : 'none')};
`;
