import { useState } from 'react';
import { useDispatch } from 'react-redux';
import { setGrades } from '../../redux/states/grade/reducer';

function Form() {
  const [g, setG] = useState();
  const dispatch = useDispatch();

  const click = () => {
    dispatch(setGrades(g * 9 / 5 + 32));
  };

  return (
    <div>
      <input type="text" onChange={(e) => { setG(e.target.value); }} />
      <button onClick={(e) => { click(); }}>Calcular</button>
    </div>
  );
}
export default Form;
