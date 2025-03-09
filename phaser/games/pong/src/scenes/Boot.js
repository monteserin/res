import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/pong/dist");
    }

    this.load.image("back", "/assets/back.jpg");
    this.load.image("hand1", "/assets/hand1.png");
    this.load.image("hand2", "/assets/hand2.png");
    this.load.image("arrow", "/assets/arrow.png");

    this.load.spritesheet("ball", "/assets/ball.png", {
      frameWidth: 100,
      frameHeight: 100,
    });
  }

  create() {
    this.scene.start("Game");
  }
}
