import { useDispatch } from "../store";
import { setUserName, setUserAge } from "../store/user/actions";
import { setTheme } from "../store/app-preferences/actions";

const Component1 = () => {
    const dispatch = useDispatch();

    const onNameChange = ({ target }) => dispatch(setUserName(target.value));
    const onAgeChange = ({ target }) => dispatch(setUserAge(target.value));
    const onThemeChange = ({ target }) => dispatch(setTheme(target.value));

    return (
        <div>
            <p><input type="text" onChange={onNameChange} /></p>
            <p><input type="text" onChange={onAgeChange} /></p>
            <p><input type="text" onChange={onThemeChange} /></p>
        </div>
    );
}

export default Component1;