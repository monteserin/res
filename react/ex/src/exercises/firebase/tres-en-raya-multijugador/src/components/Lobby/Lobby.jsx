import { useState } from "react";
import { guestEnterInRoom } from "./services/room";
import { useRoomContext } from "./providers/RoomProvider";

const Lobby = () => {
  const { roomId, setRoomId, setIsHost } = useRoomContext();
  const [roomIdAux, setRoomIdAux] = useState();
  return (
    <div>
      <p>Código de la sala: {roomId}</p>
      <hr />
      <input
        type="text"
        placeholder="Código de la sala"
        onChange={(e) => setRoomIdAux(e.target.value)}
      />
      <button
        onClick={() => {
          setIsHost(false);
          setRoomId(roomIdAux);
          guestEnterInRoom(roomIdAux);
        }}
      >
        Acceder
      </button>
    </div>
  );
};

export default Lobby;
