import { useState, useEffect } from 'react';
import { Panel, Row, Container } from './app/styles';
import CustomInput from './components/CustomInput';
import Popup from './components/Popup';

function App() {
  const [paginaWeb, setPaginaWeb] = useState(false);
  const [campaniaSeo, setCampaniaSeo] = useState(false);
  const [campaniaAds, setCampaniaAds] = useState(false);
  const [price, setPrice] = useState(0);
  const [nPaginas, setNPaginas] = useState(1);
  const [nIdiomas, setNIdiomas] = useState(1);

  useEffect(() => {
    setPrice((paginaWeb ? 500 : 0) + (campaniaSeo ? 300 : 0) + (campaniaAds ? 200 : 0) + (nPaginas * nIdiomas * 30));
  }, [paginaWeb, campaniaSeo, campaniaAds, nPaginas, nIdiomas]);

  return (
    <Container>
      <p>¿Qué quieres hacer?</p>
      <p>
        <input type="checkbox" onClick={(e) => setPaginaWeb(e.target.checked)} />
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

    </Container>

  );
}

export default App;
