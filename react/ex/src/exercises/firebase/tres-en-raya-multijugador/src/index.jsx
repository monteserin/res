import App from "./App";
import RoomProvider from "./components/Lobby/providers/RoomProvider";

const index = () => {
  return (
    <RoomProvider>
      <App />
    </RoomProvider>
  );
};

export default index;
