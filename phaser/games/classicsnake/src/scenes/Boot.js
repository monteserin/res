import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/classicsnake/dist");
    }

    this.load.image("player", "/assets/player.png");
    this.load.image("food", "/assets/food.png");
  }

  create() {
    this.scene.start("Game");
  }
}
