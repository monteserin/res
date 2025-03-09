import Lobby from "./components/Lobby";
import { useRoomContext } from "./components/Lobby/providers/RoomProvider";
import Game from "./pages/Game/Game";

function App() {
  const { roomData } = useRoomContext();
  return <>{roomData?.guestIsReady === true ? <Game /> : <Lobby />}</>;
}

export default App;
