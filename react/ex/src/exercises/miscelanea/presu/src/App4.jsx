import { useState, useEffect } from 'react';
import { Panel, Row, Container } from './app/styles';
import CustomInput from './components/CustomInput';
import Popup from './components/Popup';

function App() {
  const url = new URL(window.location.href);

  const getBooleanVal = (val) => url.searchParams.get(val) === 'true';
  const getNumericVal = (val) => url.searchParams.get(val);
  const getStringVal = (val) => url.searchParams.get(val);

  const [paginaWeb, setPaginaWeb] = useState(getBooleanVal('paginaWeb'));
  const [campaniaSeo, setCampaniaSeo] = useState(getBooleanVal('campaniaSeo'));
  const [campaniaAds, setCampaniaAds] = useState(getBooleanVal('campaniaAds'));
  const [price, setPrice] = useState(getNumericVal('price') ? getNumericVal('price') : 500);
  const [nPaginas, setNPaginas] = useState(getNumericVal('nPaginas') ? getNumericVal('nPaginas') : 1);
  const [nIdiomas, setNIdiomas] = useState(getNumericVal('nIdiomas') ? getNumericVal('nIdiomas') : 1);

  useEffect(() => {
    setPrice((paginaWeb ? 500 : 0) + (campaniaSeo ? 300 : 0) + (campaniaAds ? 200 : 0) + (paginaWeb ? nPaginas * nIdiomas * 30 : 0));

    const url = `?paginaWeb=${paginaWeb}&campaniaSeo=${campaniaSeo}&campaniaAds=${campaniaAds}&nPaginas=${nPaginas}&nIdiomas=${nIdiomas}`;

    window.history.pushState('object or string', 'Title', url);
  }, [paginaWeb, campaniaSeo, campaniaAds, nPaginas, nIdiomas]);

  return (
    <Container>
      <p>¿Qué quieres hacer?</p>
      <p>
        <input type="checkbox" defaultChecked={paginaWeb} onClick={(e) => setPaginaWeb(e.target.checked)} />
        Una pàgina web (500 €))
      </p>
      <Panel visible={paginaWeb}>
        <Row>
          <label htmlFor="n_paginas">Número de páginas </label>
          <CustomInput
            value={nPaginas}
            onChange={(val) => {
              setNPaginas(val);
            }}
          />
          {' '}
          <Popup>En este componente debe indicar el número de páginas que tendrá su sitio web.</Popup>
        </Row>
        <Row>
          <label htmlFor="n_idiomas">Número de idiomas </label>
          <CustomInput value={nIdiomas} onChange={(val) => setNIdiomas(val)} />
          {' '}
          <Popup>En este componente debe indicar el número de idiomas que tendrá su sitio web.</Popup>
        </Row>
      </Panel>
      <p>
        <input type="checkbox" defaultChecked={campaniaSeo} onClick={(e) => setCampaniaSeo(e.target.checked)} />
        Una consultoria SEO (300 €)
      </p>
      <p>
        <input type="checkbox" defaultChecked={campaniaAds} onClick={(e) => setCampaniaAds(e.target.checked)} />
        Una campanya de Google Ads (200 €)
      </p>

      <p>
        Preu:
        {price}
      </p>
    </Container>
  );
}

export default App;
