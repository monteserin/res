import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    //TODO
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/platformer/dist");
    }

    this.load.tilemapTiledJSON("jsonLevel", "/assets/maps/map.json");
    this.load.image("tilesetPNG", "/assets/maps/tiles.png");
    this.load.image("arrow", "/assets/arrow.png");
    this.load.image("back", "/assets/back.jpg");
    this.load.image("lose", "/assets/lose.jpg");
    this.load.image("win", "/assets/win.jpg");
    this.load.image("goal", "/assets/goal.png");
    this.load.spritesheet("ant", "/assets/ant.png", {
      frameWidth: 192,
      frameHeight: 96,
    });
    this.load.spritesheet("bee", "/assets/bee.png", {
      frameWidth: 128,
      frameHeight: 128,
    });
    this.load.spritesheet("caterpillar", "/assets/caterpillar.png", {
      frameWidth: 96,
      frameHeight: 192,
    });

    this.load.spritesheet("crash", "/assets/crash.png", {
      frameWidth: 199,
      frameHeight: 200,
    });

    this.load.spritesheet("player", "/assets/player.png", {
      frameWidth: 180,
      frameHeight: 180,
    });
  }

  create() {
    this.anims.create({
      key: "antWalk",
      frames: this.anims.generateFrameNumbers("ant", { start: 0, end: 3 }),
      frameRate: 7,
      repeat: -1,
    });

    this.anims.create({
      key: "beeFly",
      frames: this.anims.generateFrameNumbers("bee", { start: 0, end: 2 }),
      frameRate: 10,
      repeat: -1,
    });

    this.anims.create({
      key: "caterpillarWalk",
      frames: this.anims.generateFrameNumbers("caterpillar", {
        start: 0,
        end: 3,
      }),
      frameRate: 7,
      repeat: -1,
    });
    this.scene.start("Game");
  }
}
