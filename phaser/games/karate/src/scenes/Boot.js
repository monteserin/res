import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/karate/dist");
    }

    this.load.spritesheet(
      "karateka0",
      "/assets/karate-man/bad-guy-walking-136x238.png",
      {
        frameWidth: 136,
        frameHeight: 238,
      }
    );

    this.load.image("back", "/assets/back.jpg");

    this.load.spritesheet(
      "player",
      "/assets/karate-man/player-idle-128x224.png",
      {
        frameWidth: 128,
        frameHeight: 224,
      }
    );

    this.load.spritesheet(
      "playerAttack1",
      "/assets/karate-man/player-hit-1-278X272.png",
      {
        frameWidth: 278,
        frameHeight: 272,
      }
    );

    this.load.spritesheet(
      "playerAttack2",
      "/assets/karate-man/player-hit-2-278X272.png",
      {
        frameWidth: 278,
        frameHeight: 272,
      }
    );

    this.load.spritesheet(
      "playerAttack3",
      "/assets/karate-man/player-hit-3-278X272.png",
      {
        frameWidth: 278,
        frameHeight: 272,
      }
    );
  }

  create() {
    this.anims.create({
      key: "playerIdle",
      frames: this.anims.generateFrameNumbers("player", { start: 0, end: 1 }),
      frameRate: 7,
      repeat: -1,
    });

    this.anims.create({
      key: "playerAttack1",
      frames: this.anims.generateFrameNumbers("playerAttack1", {
        start: 0,
        end: 3,
      }),
      frameRate: 7,
    });

    this.anims.create({
      key: "playerAttack2",
      frames: this.anims.generateFrameNumbers("playerAttack2", {
        start: 0,
        end: 3,
      }),
      frameRate: 7,
    });

    this.anims.create({
      key: "playerAttack3",
      frames: this.anims.generateFrameNumbers("playerAttack3", {
        start: 0,
        end: 3,
      }),
      frameRate: 7,
    });

    this.anims.create({
      key: "enemyWalking",
      frames: this.anims.generateFrameNumbers("karateka0", {
        start: 0,
        end: 3,
      }),
      frameRate: 7,
      repeat: -1,
    });

    this.scene.start("Game");
  }
}
