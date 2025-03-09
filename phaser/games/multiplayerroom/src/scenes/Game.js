import { Scene } from "phaser";
import { createRoom, getRoomById } from "../services/room";

export class Game extends Scene {
  constructor() {
    super("Game");
  }

  create() {
    const f = async () => {
      const currentRoomId = await createRoom();
      const form = this.add.dom(400, 100).createFromCache("roomForm");

      const roomInput = form.getChildByID("roomId");
      const playButton = form.getChildByID("conectar");

      roomInput.textContent = currentRoomId;

      playButton.onclick = async (event) => {
        if (event.target.name === "conectar") {
          const roomId = roomInput.value;
          const room = await getRoomById(roomId);
          if (!room) {
            alert("No existe una room con este id");
          } else {
            this.scene.start("Karate");
          }
        }
      };
    };
    f();
  }
}
