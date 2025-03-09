import { useState } from "react";

const ANIMAL_IMAGES = {
  img1: "https://pablomonteserin.com/lorempixel/111x111",
  img2: "https://pablomonteserin.com/lorempixel/222x222",
  img3: "https://pablomonteserin.com/lorempixel/333x333",
};

const App = () => {
  const [src, setSrc] = useState(ANIMAL_IMAGES.img1);
  return (
    <>
      <button onClick={() => setSrc(ANIMAL_IMAGES.img1)}>Img 1</button>
      <button onClick={() => setSrc(ANIMAL_IMAGES.img2)}>Img 2</button>
      <button onClick={() => setSrc(ANIMAL_IMAGES.img3)}>Img 3</button>
      <br />
      <img src={src} alt="" />
    </>
  );
};

export default App;
