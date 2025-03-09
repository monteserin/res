import { Back } from '../app/styles';

function Popup({ visible, setVisible }) {
  return (
    <Back $visible={visible}>
      <button onClick={() => setVisible(false)}>Cerrar</button>
    </Back>
  );
}
export default Popup;
