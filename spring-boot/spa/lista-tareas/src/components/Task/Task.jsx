import { useState } from "react";
import { deleteTask, updateTask } from "../../app/services/tasks";
import { EditPanel } from "./Task.styles";


const Task = ({ userId, id, txt, getTasks }) => {
  const [visible, setVisible] = useState(false);
  const [text, setText] = useState(txt);

  return (
    <div>
      {
        !visible ? <p>{txt}</p> : <EditPanel>
          <input type="text" value={text} onChange={e => setText(e.target.value)} />
          <button onClick={() => updateTask(userId, id, text)}>Realmente actualizar</button>
        </EditPanel>
      }
      <button onClick={() => {
        deleteTask(userId, i)
        getTasks();
      }
      }>Borrar</button>
      <button onClick={() => setVisible(!visible)}>Actualizar</button>
    </div>
  )
}

export default Task;