import styled from 'styled-components';
import info from './Iconos_info_gris.svg';

export const Container = styled.div`
    position:fixed;
    top:0;
    left:0;
    width: 100%;
    height:100vh;
    z-index: 5;
    display:${({ visible }) => (visible ? 'flex' : 'none')};
    justify-content: center;
    align-items: center;
`;

export const Overlay = styled.div`
position:fixed;
background:rgba(0,0,0,0.4);
z-index:4;
 width: 100%;
    height:100vh;
    left:0;
    top:0;
    display:block;
    z-index: -1;

`;

export const PopupInfo = styled.div`
max-width:700px;
border-radius: 25px;
border: 3px solid black;
background-color: white;
padding:30px;
`;

export const Btn = styled.button`
width:20px;
height:20px;
background-image:url(${info});
background-size: 100% 100%;
border: none;
cursor: pointer;
margin-left: 5px;
`;
