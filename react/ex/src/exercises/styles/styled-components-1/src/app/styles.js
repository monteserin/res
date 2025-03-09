import styled from 'styled-components';

export const MyStyledComponent = styled.div`
  width: 300px;
  height: 300px;
  background-color: ${({ color }) => color};
`;
