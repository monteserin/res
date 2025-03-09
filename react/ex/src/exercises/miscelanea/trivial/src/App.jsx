import { useState } from 'react';

import originalQuestions from './assets/data/questions';
import { Container, Question, Row } from './app/styles';
import Popup from './components/Popup';
import { shuffleArray } from './app/utils';

const questions = shuffleArray(originalQuestions);

function App() {
  const [currentQuestionIndex, setCurrenQuestionIndex] = useState(0);
  const [displayPopup, setDisplayPopup] = useState(false);
  const q = questions[currentQuestionIndex];
  return (
    <Container>
      <Question>
        {
          q.question
        }
      </Question>
      <Row>

        <div>
          {
            q.answers.map((a) => (
              <p key={a.txt}>
                <button onClick={
              () => {
                if (a.isRight) {
                  if (currentQuestionIndex === questions.length - 1) {
                    setDisplayPopup(true);
                  } else {
                    setCurrenQuestionIndex(currentQuestionIndex + 1);
                  }
                } else {
                  setCurrenQuestionIndex(currentQuestionIndex === 0 ? 0 : currentQuestionIndex - 1);
                }
              }
            }
                >
                  X
                </button>
                {' '}
                {a.txt}
              </p>
            ))
          }
        </div>
        <img src={q.img} />
      </Row>

      <Popup visible={displayPopup} />
    </Container>
  );
}

export default App;
