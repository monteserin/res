import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/flappybird/dist");
    }

    this.load.setPath("/res/phaser/games/flappybird/dist");
    this.load.image("lose", "/assets/lose.jpg");
    this.load.image("back", "/assets/back.jpg");
    this.load.image("pipe0", "/assets/pipe0.png");
    this.load.image("pipeUp0", "/assets/pipeUp0.png");
    this.load.image("pipeDown0", "/assets/pipeDown0.png");
    this.load.image("pipe1", "/assets/pipe1.png");
    this.load.image("pipeUp1", "/assets/pipeUp1.png");
    this.load.image("pipeDown1", "/assets/pipeDown1.png");
    this.load.spritesheet("hero", "/assets/hero.png", {
      frameWidth: 50,
      frameHeight: 50,
    });
  }

  create() {
    this.anims.create({
      key: "fly",
      frames: this.anims.generateFrameNumbers("hero", { start: 0, end: 1 }),
      frameRate: 10,
      repeat: -1,
    });

    this.anims.create({
      key: "jump",
      frames: this.anims.generateFrameNumbers("hero", { start: 2, end: 2 }),
      frameRate: 7,
      repeat: 1,
    });
    this.scene.start("Game");
  }
}
