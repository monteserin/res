import { Container, Content, Overlay } from './Popup.styles';

function Popup({ visible }) {
  return (
    <Container visible={visible}>
      <Overlay />
      <Content>
        Enhorabuena! has ganado!
      </Content>
    </Container>
  );
}

export default Popup;
