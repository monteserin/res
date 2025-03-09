import styled from 'styled-components';

export const Container = styled.div`
 display: ${({ visible }) => (visible ? 'flex' : 'none')};
justify-content: center;
align-items: center;
position: fixed;
width: 100%;
height: 100vh;
left:0;
top:0;
`;

export const Overlay = styled.div`
background-color: rgba(0,0,0,0.5);
position: absolute;
width: 100%;
height: 100%;
left:0;
top:0;
`;

export const Content = styled.div`
    max-width: 600px;
    background-color: white;
    position: relative;
    z-index: 10;
    padding: 20px;
    border-radius: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
`;
