import styled from "styled-components";
import { deleteTask, updateTask } from "../services/tasks";
import { Modal } from "antd";
import { useState } from "react";
import TextArea from "antd/es/input/TextArea";

const Row = styled.div`
  display: flex;
`;

const Task = ({ task, queryTasks }) => {
  const [showPopup, setShowPopup] = useState();
  const [newTaskText, setNewTaskText] = useState(task.text);
  return (
    <>
      <Row>
        {task.text} <button onClick={() => setShowPopup(true)}>Editar</button>{" "}
        <button
          onClick={async () => {
            await deleteTask(task.id);
            queryTasks();
          }}
        >
          Borrar
        </button>
      </Row>

      <Modal
        title="Basic Modal"
        open={showPopup}
        onOk={async () => {
          await updateTask(task.id, { text: newTaskText });
          setShowPopup(false);
          queryTasks();
        }}
        onCancel={() => setShowPopup(false)}
      >
        <TextArea
          value={newTaskText}
          onChange={(e) => setNewTaskText(e.target.value)}
        />
      </Modal>
    </>
  );
};

export default Task;
