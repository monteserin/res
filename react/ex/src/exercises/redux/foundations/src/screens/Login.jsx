import { useSelector, useDispatch } from 'react-redux';
import { setName } from '../redux/states/user/reducer';
import { selectUserName } from '../redux/states/user/selecters';

function Login() {
  const name = useSelector(selectUserName); // useSelector me devuelve el estado de toda la aplicación. Llamaremos al método selectUserName para acceder concretamente a la propiedad de ese estado que nos interesa
  const dispatch = useDispatch(); // el método dispatch recibe un objeto action. Dicho objeto será pasado a todos los reducers para ver con cual coincide el type y en función de eso, modificar el state
  // un objeto action es aquel que tiene como propiedades un type y un payload

  const onChange = ({ target }) => {
    // console.log(setName(target.value));
    const objAction = setName(target.value);
    dispatch(objAction);
  };

  return (
    <div>
      <p>{name}</p>
      <input type="text" onChange={onChange} />
    </div>
  );
}

export default Login;
