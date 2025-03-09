import { useEffect, useState } from 'react';
import { login, onAuthChanged } from './services';

export const withAuthenticationRequired = (Component) => props => {
    const [logged, setLogged] = useState(false);

    useEffect(() => {
        onAuthChanged((user) => {
            if (user) {
                setLogged(true);
                // ...
            } else {
                setLogged(false);
                login();
            }
        });
    }, []);

    return logged ? <Component {...props} /> : <button onClick={login}>login</button>;
}