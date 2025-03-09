import { useSelector } from 'react-redux';
import { selectGrades } from '../../redux/states/grade/selecters';

function PintarResultado() {
  const grades = useSelector(selectGrades);

  return <output>{grades}</output>;
}

export default PintarResultado;
