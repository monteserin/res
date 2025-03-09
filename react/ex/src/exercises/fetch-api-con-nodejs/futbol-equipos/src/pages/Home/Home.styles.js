import styled from 'styled-components';
import { Link } from 'react-router-dom';

export const Team = styled(Link)`
 display: flex;
 width: 230px;
 height:70px;
 border:2px solid black;
 margin-bottom:20px;
 align-items:center;
 p{margin:0}
 img{
     margin-right:20px
 }
`;

export const Container = styled.div`
max-width:1200px;
margin:0 auto;
display:flex;
flex-wrap:wrap;
justify-content:space-around;

`;
