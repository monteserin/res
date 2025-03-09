import { createContext, useState } from 'react';

function MyProvider(props) {
  const [state, setState] = useState({});
  return (
    <div>
      <AppContext.Provider value={[state, setState]}>
        {props.children}
      </AppContext.Provider>
    </div>
  );
}

export default MyProvider;
export const AppContext = createContext();
