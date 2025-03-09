import { useSelector } from 'react-redux';
import { selectRectangleArea } from '../../redux/states/rectangle/selecters';

function PintarResultado() {
  const rectangleArea = useSelector(selectRectangleArea);

  return <output>{rectangleArea}</output>;
}

export default PintarResultado;
