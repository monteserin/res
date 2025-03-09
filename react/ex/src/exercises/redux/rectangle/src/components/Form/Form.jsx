import { useState } from 'react';
import { useDispatch } from 'react-redux';
import { setRectangleArea } from '../../redux/states/rectangle/reducer';

function Form({ updateArea }) {
  const dispatch = useDispatch();
  const [width, setWidth] = useState();
  const [height, setHeight] = useState();

  const calcular = () => {
    dispatch(setRectangleArea(width * height));
  };

  return (
    <div>
      <input type="text" onChange={(e) => setWidth(e.target.value)} />
      <input type="text" onChange={(e) => setHeight(e.target.value)} />
      <button onClick={calcular}>Calcular</button>
    </div>
  );
}

export default Form;
