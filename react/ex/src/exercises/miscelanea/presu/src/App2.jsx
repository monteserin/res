import { useState, useEffect } from 'react';
import { Panel } from './app/styles';

function App() {
  const [paginaWeb, setPaginaWeb] = useState(false);
  const [campaniaSeo, setCampaniaSeo] = useState(false);
  const [campaniaAds, setCampaniaAds] = useState(false);
  const [price, setPrice] = useState(0);
  const [nPaginas, setNPaginas] = useState(0);
  const [nIdiomas, setNIdiomas] = useState(1);

  useEffect(() => {
    setPrice((paginaWeb ? 500 : 0) + (campaniaSeo ? 300 : 0) + (campaniaAds ? 200 : 0) + (nPaginas * nIdiomas * 30));
  }, [paginaWeb, campaniaSeo, campaniaAds, nPaginas, nIdiomas]);
  return (
    <div>
      <p>¿Qué quieres hacer?</p>
      <p>
        <input type="checkbox" onClick={(e) => setPaginaWeb(e.target.checked)} />
        Una pàgina web (500 €))
      </p>
      <Panel visible={paginaWeb}>
        <p>
          <label htmlFor="n_paginas">Número de páginas</label>
          {' '}
          <input id="n_paginas" type="text" onChange={(e) => setNPaginas(e.target.value)} />
        </p>
        <p>
          <label htmlFor="n_idiomas">Número de idiomas</label>
          {' '}
          <input id="n_idiomas" type="text" onChange={(e) => setNIdiomas(e.target.value)} />
        </p>

      </Panel>
      <p>
        <input type="checkbox" onClick={(e) => setCampaniaSeo(e.target.checked)} />
        Una consultoria SEO (300 €)
      </p>
      <p>
        <input type="checkbox" onClick={(e) => setCampaniaAds(e.target.checked)} />
        Una campanya de Google Ads (200 €)
      </p>

      <p>
        Preu:
        {price}
        €
      </p>

    </div>

  );
}

export default App;
