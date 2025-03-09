import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/shootinggallery/dist");
    }

    this.load.image("back", "/assets/back.jpg");
    this.load.spritesheet("caterpillar", "/assets/caterpillar.png", {
      frameWidth: 96,
      frameHeight: 192,
    });
    this.load.spritesheet("ant", "/assets/ant.png", {
      frameWidth: 192,
      frameHeight: 96,
    });
    this.load.spritesheet("bee", "/assets/bee.png", {
      frameWidth: 128,
      frameHeight: 128,
    });
    this.load.spritesheet("crash", "/assets/crash.png", {
      frameWidth: 199,
      frameHeight: 200,
    });
  }

  create() {
    this.anims.create({
      key: "caterpillarWalk",
      frames: this.anims.generateFrameNumbers("caterpillar", {
        start: 0,
        end: 3,
      }),
      frameRate: 7,
      repeat: -1,
    });
    this.anims.create({
      key: "antWalk",
      frames: this.anims.generateFrameNumbers("ant", { start: 0, end: 3 }),
      frameRate: 7,
      repeat: -1,
    });

    this.anims.create({
      key: "beeWalk",
      frames: this.anims.generateFrameNumbers("bee", { start: 0, end: 2 }),
      frameRate: 10,
      repeat: -1,
    });
    this.anims.create({
      key: "crashAnim",
      frames: this.anims.generateFrameNumbers("crash", { start: 0, end: 4 }),
      frameRate: 7,
    });
    this.scene.start("Game");
  }
}
