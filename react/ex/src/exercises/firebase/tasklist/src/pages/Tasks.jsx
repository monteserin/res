import { useEffect, useState } from "react";
import { createTask, getTasks } from "../services/tasks";
import Task from "../components/Task";

const Tasks = () => {
  const [text, setText] = useState();
  const [tasks, setTasks] = useState();
  useEffect(() => {
    queryTasks();
  }, []);

  const queryTasks = () => getTasks().then(setTasks);
  return (
    <div>
      <div>
        {tasks?.map((task) => (
          <Task key={task.id} task={task} queryTasks={queryTasks} />
        ))}
      </div>
      <textarea
        value={text}
        onChange={(e) => setText(e.target.value)}
      ></textarea>
      <button
        onClick={async () => {
          await createTask({ text });
          queryTasks();
          setText("");
        }}
      >
        Save task
      </button>
    </div>
  );
};

export default Tasks;
