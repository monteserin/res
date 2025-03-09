import { useState } from 'react';

function Dollars() {
  const [dolares, setDolares] = useState(0);

  return (
    <div>
      <input type="text" onChange={(e) => setDolares(e.target.value * 2)} />
      <p>{dolares}</p>
    </div>
  );
}

export default Dollars;
