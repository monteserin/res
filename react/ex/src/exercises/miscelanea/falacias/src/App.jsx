import { useEffect, useState } from 'react';
import falacys from './data/falacias.json';
import { getRandom, shuffle } from './utils/utils';
import { LI } from './app/styles';
import ClueButton from './components/ClueButton';

const falacysLength = falacys.length;

function App() {
  const [falacy, setFalacy] = useState({});
  const [falacySample, setFalacySample] = useState();
  const [questionFalacys, setQuestionFalacys] = useState([]);
  const [redAnswer, setRedAnswer] = useState([]);
  const [numQuestion, setNumQuestion] = useState(0);

  useEffect(() => {
    chooseRandomFalacySample();
  }, []);

  const chooseRandomFalacySample = () => {
    const i = Math.floor(Math.random() * falacysLength);

    const falacy = falacys[i];
    const fs = falacy.samples[Math.floor(Math.random() * falacy.samples.length)];
    setFalacySample(fs);

    setFalacy(falacy);

    const posibilities = getRandom(falacys, 2);
    posibilities.push(falacy);
    setQuestionFalacys(shuffle(posibilities));
  };

  const evaluateAnswer = (s) => {
    if (s.type === falacy.type) {
      alert('exito');
      chooseRandomFalacySample();
      setRedAnswer([]);
      setNumQuestion(numQuestion + 1);
    } else {
      alert('fail');
      // redAnswer.push(i);
      setRedAnswer(redAnswer);
    }
  };
  return (
    <div>
      <p>{falacySample}</p>

      <ul>
        {
                    questionFalacys.map((s, i) => (
                      <LI key={i} isRed={falacy.type === s.type}>
                        <button onClick={() => evaluateAnswer(s)}>X</button>
                        {' '}
                        {s.type}
                        {' '}
                        <ClueButton numQuestion={numQuestion} clue={s.def} />
                      </LI>
                    ))
                }
      </ul>
    </div>
  );
}

export default App;
