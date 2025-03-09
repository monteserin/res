import { useState } from 'react';
import questions from './assets/data/questions';
import {
  Row, MainImg, QuestionTxt, Box, Popup,
} from './styled';
import { shuffleArray } from './Utils';

const q = shuffleArray(questions);

function App() {
  const [currentQuestion, setCurrentQuestion] = useState(0);
  const [visible, setVisible] = useState(false);

  const clickedAnswer = (isRight) => {
    if (isRight) {
      if (currentQuestion < questions.length - 1) setCurrentQuestion(currentQuestion + 1);
      else {
        setVisible(true);
      }
    } else {
      setCurrentQuestion(currentQuestion > 0 ? currentQuestion - 1 : currentQuestion);
    }
  };
  const question = q[currentQuestion];

  return (
    <div>
      <h1>Trivial</h1>
      <QuestionTxt>{question.question}</QuestionTxt>
      <Row>
        <Box>
          {shuffleArray(question.answers).map((obj) => (
            <p>
              <button onClick={() => clickedAnswer(obj.isRight)}>X</button>
              {' '}
              {obj.txt}
            </p>
          ))}
        </Box>
        <MainImg src={question.img} />

      </Row>

      <Popup visible={visible}>
        <div>
          <p>Enhorabuena, has ganado</p>
          <button onClick={() => setCurrentQuestion(0)}>Volver a empezar</button>
        </div>
      </Popup>
    </div>
  );
}

export default App;
