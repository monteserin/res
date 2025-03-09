import { useState } from 'react';
import {
  Container, LeftArrow, RightArrow, Row, Img,
} from './app/styles';
import workouts from './assets/data/workouts';
import leftArrow from './assets/img/flecha.png';

function App() {
  const [currentWorkout, setCurrentWorkout] = useState(0);
  const [currentExercise, setCurrentExercise] = useState(0);
  const workout = workouts[currentWorkout];
  return (
    <Container>
      <h1>
        <Row>
          <LeftArrow
            src={leftArrow}
            onClick={() => currentWorkout !== 0 && setCurrentWorkout(currentWorkout - 1)}
          />
          {' '}
          {workout.title}
          <RightArrow
            src={leftArrow}
            onClick={() => currentWorkout !== workouts.length - 1
              && setCurrentWorkout(currentWorkout + 1)}
          />
        </Row>
      </h1>

      <Row>
        <img src={workout.exercises[currentExercise].img} alt="" />
        <Row>
          {workout.exercises.map((ex, i) => (
            <Img
              key={i + currentWorkout + ex.img}
              src={ex.img}
              onClick={() => setCurrentExercise(i)}
              $highlight={i === currentExercise}
            />
          ))}
        </Row>
      </Row>
    </Container>
  );
}

export default App;
