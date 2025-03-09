import styled, { createGlobalStyle } from 'styled-components';
import back from '../assets/img/parchis.svg';

export const Board = styled.div`
    width:${({ width }) => width}px;
    height: ${({ height }) => height}px;
    background-image: url(${back});
    background-size: 100% 100%;
    background-repeat: no-repeat;
    position:relative;
    margin:auto;
`;

export const GlobalStyle = createGlobalStyle`
body{
    margin:0;
     height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
}
#root{
    padding:0;
}
`;

export const Position = styled.div`
border: 1px solid  blue;
position:absolute;
top: ${({ y }) => y}%;
left: ${({ x }) => x}%;
width:${({ width }) => width}%;
height:${({ height }) => height}%;
`;

export const Chip = styled.div`
background:${({ color }) => color};
width:5%;
height:5%;
border-radius: 100%;
top: ${({ y }) => y}%;
left: ${({ x }) => x}%;
position:absolute;
`;

export const RollTheDice = styled.button`
    position:absolute;
    top: 0;
    left:0;
    padding:15px;
    border: 2px solid black;
    border-radius:5px;
    box-shadow: 3px 3px 3px black;
    cursor: pointer;
`;
