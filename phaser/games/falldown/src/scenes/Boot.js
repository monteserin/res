import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/falldown/dist");
    }

    this.load.setPath("/res/phaser/games/falldown/dist");
    this.load.image("lose", "/assets/images/lose.jpg");
    this.load.image("back", "/assets/images/back.jpg");
    this.load.image("missile0", "/assets/images/missile0.png");
    this.load.image("missile1", "/assets/images/missile1.png");
    this.load.spritesheet("crash", "/assets/images/crash.png", {
      frameWidth: 199,
      frameHeight: 200,
    });
    this.load.spritesheet("life", "/assets/images/life.png", {
      frameWidth: 50,
      frameHeight: 50,
    });
  }

  create() {
    this.scene.start("Game");
  }
}
