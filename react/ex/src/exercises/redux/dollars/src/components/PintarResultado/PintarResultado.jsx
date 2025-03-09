import { useSelector } from 'react-redux';
import { selectEuros } from '../../redux/states/money/selecters';

function PintarResultado() {
  const dollars = useSelector(selectEuros);
  return <output>{dollars}</output>;
}

export default PintarResultado;
