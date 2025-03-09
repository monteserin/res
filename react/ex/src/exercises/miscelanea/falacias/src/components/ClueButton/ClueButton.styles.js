import styled from 'styled-components';

export const Span = styled.span`
display:${({ visible }) => (visible ? 'inline-block' : 'none')} ;
`;
