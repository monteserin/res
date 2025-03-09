import styled, { createGlobalStyle } from 'styled-components';
import nicolast from './assets/fonts/Nicolast.ttf';

const desktopStartWidth = 996;

const desktop = `@media (min-width: ${desktopStartWidth}px)`;
const mobile = `@media (max-width: ${desktopStartWidth}px)`;

export const StyledComponent1 = styled.div`
  width: 300px;
  height: 300px;
  background-color: red;

  ${mobile} {
    width: 100% !important;
  }
`;

export const StyledComponent2 = styled(StyledComponent1)`
  border-radius: 70px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  box-sizing: border-box;
  font-family: nicolast;
  transition: 1s;
  width: ${({ width }) => width}px;

  &:hover {
    background-color: blue;
  }
`;

export const GlobalStyle = createGlobalStyle`

@font-face {
  font-family: nicolast;
  src: url(${nicolast});
}
  body {
    background-color: lightblue;
  }
`;
