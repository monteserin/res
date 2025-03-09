import { createContext, useState, useContext, useEffect } from "react";
import { createRoom, onRoomUpdated } from "../services/room";

const AppContext = createContext();
export const useRoomContext = () => useContext(AppContext);
const rId = Math.random().toString(36).substring(7);

const RoomProvider = ({ children }) => {
  const [roomId, setRoomId] = useState(rId);
  const [isHost, setIsHost] = useState(true);
  const [isHostTurn, setIsHostTurn] = useState(true);
  const [roomData, setRoomData] = useState();

  useEffect(() => {
    createRoom(roomId).then(() => {
      console.log("room created", roomId);
    });
  }, []);

  useEffect(() => {
    onRoomUpdated(roomId, (roomDataRecovered) => {
      if (roomDataRecovered?.guestIsReady === true) {
        setRoomData(roomDataRecovered);
      }
    });
  }, [roomId]);

  return (
    <AppContext.Provider
      value={{
        roomId,
        setRoomId,
        isHost,
        setIsHost,
        roomData,
        setRoomData,
        isHostTurn,
        setIsHostTurn,
      }}
    >
      {children}
    </AppContext.Provider>
  );
};

export default RoomProvider;
