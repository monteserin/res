import { createContext, useState } from 'react';

export default function ({ children }) {
  const [state, setState] = useState({});
  return (
    <AppContext.Provider value={[state, setState]}>
      {children}
    </AppContext.Provider>
  );
}

export const AppContext = createContext();
