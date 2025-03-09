import { createContext, useState } from 'react';

function Provider({ children }) {
  const [state, setState] = useState({});
  return (
    <AppContext.Provider value={[state, setState]}>
      {children}
    </AppContext.Provider>
  );
}

export const AppContext = createContext();
export default Provider;
