import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import { Auth0Provider } from "@auth0/auth0-react";


ReactDOM.render(
  <React.StrictMode>
    <Auth0Provider
      domain="pruebas-tutorial.eu.auth0.com"
      clientId="DHmHK59IZLIvalW28PbhlTbjtJ3Tjje3"
      redirectUri={window.location.origin + process.env.PUBLIC_URL + '/'}
    >
      <App />
    </Auth0Provider>
  </React.StrictMode>,
  document.getElementById('root')
);

