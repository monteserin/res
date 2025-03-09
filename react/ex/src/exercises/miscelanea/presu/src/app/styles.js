import styled from 'styled-components';

export const Panel = styled.div`
border:  ${({ visible }) => (visible ? '3px' : '0')} solid black;
transition: 0.4s;
max-height: ${({ visible }) => (visible ? '800px' : '0')};
border-radius: 15px;
padding: ${({ visible }) => (visible ? '20px' : '0   ')};
overflow: hidden;
display: inline-block;
`;

export const Row = styled.p`
display:flex;
align-items: center;
`;

export const Container = styled.div`
max-width:600px;
margin:auto;
`;
