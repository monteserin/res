import { useState } from 'react';

function App() {
  const [contador, setContador] = useState(0);
  return (
    <div>
      <button onClick={() => setContador(contador + 1)}>{contador}</button>
      {contador % 2 === 0
                && <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia nostrum obcaecati asperiores? Laborum corrupti officia nobis placeat, dolor totam voluptates explicabo perferendis, sed itaque nesciunt, tenetur molestias quo dolore libero?</p>}
    </div>
  );
}

export default App;
