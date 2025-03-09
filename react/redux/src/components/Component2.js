import { useSelector } from "../store";
import { selectUserName } from "../store/user";
import { selectTheme } from "../store/app-preferences";

const Component2 = () => {
    const userName = useSelector(selectUserName);
    const theme = useSelector(selectTheme);

    return (
        <p>{userName} - {theme}</p>
    );
}

export default  Component2;