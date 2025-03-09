import { useState } from 'react';
import {
  Btn, Overlay, PopupInfo, Container,
} from './Popup.styles';

function Popup({ children }) {
  const [visible, setVisible] = useState(false);

  return (
    <>
      <Btn onClick={() => setVisible(true)} />

      <Container className="container" visible={visible}>
        <Overlay className="overlay" onClick={() => setVisible(false)} />

        <PopupInfo className="popup">{children}</PopupInfo>
      </Container>
    </>
  );
}

export default Popup;
