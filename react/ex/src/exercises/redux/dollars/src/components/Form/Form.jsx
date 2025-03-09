import { useState } from 'react';
import { useDispatch } from 'react-redux';
import { setEuros } from '../../redux/states/money/reducer';

function Form() {
  const dispatch = useDispatch();
  const [d, setD] = useState(0);
  const click = (e) => {
    dispatch(setEuros(d * 2));
  };

  return (
    <>
      <input type="text" onChange={(e) => setD(e.target.value)} />
      <button onClick={(e) => click(e)}>Calcular</button>
    </>
  );
}

export default Form;
