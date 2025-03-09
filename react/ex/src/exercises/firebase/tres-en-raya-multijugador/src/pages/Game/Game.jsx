import { useEffect } from "react";
import { useRoomContext } from "../../components/Lobby/providers/RoomProvider";
import { updateRoomData } from "../../components/Lobby/services/room";
import { Board, Flip } from "./Game.styles";

const Game = () => {
  const { isHost, roomId, roomData, setRoomData } = useRoomContext();
  const move = (position) => {
    if ((isHost && roomData.isHostTurn) || (!isHost && !roomData.isHostTurn)) {
      const oldBoard = roomData.board;
      oldBoard[position] = isHost ? "X" : "O";
      const newRoomData = {
        ...roomData,
        board: oldBoard,
        isHostTurn: !roomData.isHostTurn,
      };
      if (evaluateWin()) {
        newRoomData.isWinner = true;
      }

      setRoomData(newRoomData);
      updateRoomData(roomId, newRoomData);
    } else {
      alert("No es tu turno");
    }
  };

  useEffect(() => {
    console.log(roomData);
    if (roomData?.isWinner) {
      alert("Ganaste");
    }
  }, [roomData]);

  const evaluateWin = () => {
    const winPositions = [
      [0, 1, 2],
      [3, 4, 5],
      [6, 7, 8],
      [0, 3, 6],
      [1, 4, 7],
      [2, 5, 8],
      [0, 4, 8],
      [2, 4, 6],
    ];

    for (let i = 0; i < winPositions.length; i++) {
      const [a, b, c] = winPositions[i];
      if (
        roomData.board[a] &&
        roomData.board[a] === roomData.board[b] &&
        roomData.board[a] === roomData.board[c]
      ) {
        return true;
      }
    }
    return false;
  };
  return (
    <div>
      <Board>
        {Array(9)
          .fill(null)
          .map((b, i) => (
            <Flip key={i} color={roomData?.board[i]} onClick={() => move(i)} />
          ))}
      </Board>
    </div>
  );
};

export default Game;
