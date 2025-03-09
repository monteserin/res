import { useState, useEffect } from 'react';

function App() {
  const [paginaWeb, setPaginaWeb] = useState(false);
  const [campaniaSeo, setCampaniaSeo] = useState(false);
  const [campaniaAds, setCampaniaAds] = useState(false);
  const [price, setPrice] = useState(0);

  useEffect(() => {
    setPrice((paginaWeb ? 500 : 0) + (campaniaSeo ? 300 : 0) + (campaniaAds ? 200 : 0));
  }, [paginaWeb, campaniaSeo, campaniaAds]);
  return (
    <div>
      <p>¿Qué quieres hacer?</p>
      <p>
        <input type="checkbox" onClick={(e) => setPaginaWeb(e.target.checked)} />
        Una pàgina web (500 €))
      </p>
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
