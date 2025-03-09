import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/multiplayerroom/dist");
    }

    this.load.html("roomForm", "/assets/main.html");
  }

  create() {
    this.scene.start("Game");
  }
}
