import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/vampiresurvivors/dist");
    }

    this.load.spritesheet("trap", "/assets/images/trap/trap.png",
      {
        frameWidth: 180,
        frameHeight: 180,
      }
    );
    this.load.spritesheet("idle", "/assets/images/player/walk-down.png", {
      frameWidth: 60,
      frameHeight: 72,
    });
    this.load.spritesheet(
      "playerWalkSide",
      "/assets/images/player/walk-side.png",
      {
        frameWidth: 56,
        frameHeight: 66,
      }
    );

    this.load.spritesheet(
      "playerWalkDiagonalUp", // idleWalkDiagonalUp
      "/assets/images/player/walk-diagonal-up.png",
      {
        frameWidth: 60,
        frameHeight: 70,
      }
    );

    this.load.spritesheet(
      "playerWalkDiagonalDown",
      "/assets/images/player/walk-diagonal-down.png",
      {
        frameWidth: 58,
        frameHeight: 66,
      }
    );

    this.load.spritesheet("playerWalkUp", "/assets/images/player/walk-up.png", {
      frameWidth: 60,
      frameHeight: 72,
    });

    this.load.spritesheet(
      "playerWalkDown",
      "/assets/images/player/walk-down.png",
      {
        frameWidth: 60,
        frameHeight: 72,
      }
    );


    this.load.spritesheet(
      "enemy1walk",
      "/assets/images/enemy/Run (32x32).png",
      {
        frameWidth: 32,
        frameHeight: 32,
      }
    );

    this.load.spritesheet(
      "playerIdleDiagonalUp", //
      "/assets/images/player/idle-diagonal-up.png",
      {
        frameWidth: 60,
        frameHeight: 70,
      }
    );
    this.load.spritesheet(
      "playerIdleDiagonalDown", //
      "/assets/images/player/idle-diagonal-down.png",
      {
        frameWidth: 58,
        frameHeight: 66,
      }
    );

    this.load.spritesheet(
      "playerIdleDown", //
      "/assets/images/player/idle-down.png",
      {
        frameWidth: 60,
        frameHeight: 72,
      }
    );

    this.load.spritesheet(
      "playerIdleUp", //
      "/assets/images/player/idle-up.png",
      {
        frameWidth: 60,
        frameHeight: 72,
      }
    );

    this.load.spritesheet(
      "playerIdleSide", //
      "/assets/images/player/idle-side.png",
      {
        frameWidth: 56,
        frameHeight: 66,
      }
    );
  }

  create() {
    this.anims.create({
      key: "enemy1walk",
      frames: this.anims.generateFrameNumbers("enemy1walk", {
        start: 0,
        end: 11,
      }),
      frameRate: 12,
      repeat: -1,
    });

    this.anims.create({
      key: "trapActivated",
      frames: this.anims.generateFrameNumbers("trap", {
        start: 2,
        end: 5,
      }),
      frameRate: 12,
      repeat: 1,
    });
    // this.anims.create({
    //   key: "crashAnim",
    //   frames: this.anims.generateFrameNumbers("crash", {
    //     start: 0,
    //     end: 4,
    //   }),
    //   frameRate: 7,
    // });

    this.anims.create({
      key: "playerWalkSide",
      frames: this.anims.generateFrameNumbers("playerWalkSide", {
        start: 0,
        end: 4,
      }),
      frameRate: 24,
      repeat: -1,
    });

    this.anims.create({
      key: "playerWalkUp",
      frames: this.anims.generateFrameNumbers("playerWalkUp", {
        start: 0,
        end: 6,
      }),
      frameRate: 12,
      repeat: -1,
    });

    this.anims.create({
      key: "playerWalkDown",
      frames: this.anims.generateFrameNumbers("playerWalkDown", {
        start: 0,
        end: 6,
      }),
      frameRate: 12,
      repeat: -1,
    });

    this.anims.create({
      key: "playerWalkDiagonalUp",
      frames: this.anims.generateFrameNumbers("playerWalkDiagonalUp", {
        start: 0,
        end: 6,
      }),
      frameRate: 12,
      repeat: -1,
    });

    this.anims.create({
      key: "playerWalkDiagonalDown",
      frames: this.anims.generateFrameNumbers("playerWalkDiagonalDown", {
        start: 0,
        end: 6,
      }),
      frameRate: 12,
      repeat: -1,
    });

    this.anims.create({
      key: "playerIdleDiagonalUp",
      frames: this.anims.generateFrameNumbers("playerIdleDiagonalUp", {
        start: 0,
        end: 3,
      }),
      frameRate: 20,
      repeat: -1,
    });

    this.anims.create({
      key: "playerIdleDiagonalDown",
      frames: this.anims.generateFrameNumbers("playerIdleDiagonalDown", {
        start: 0,
        end: 3,
      }),
      frameRate: 20,
      repeat: -1,
    });

    this.anims.create({
      key: "playerIdleDown",
      frames: this.anims.generateFrameNumbers("playerIdleDown", {
        start: 0,
        end: 3,
      }),
      frameRate: 20,
      repeat: -1,
    });

    this.anims.create({
      key: "playerIdleUp",
      frames: this.anims.generateFrameNumbers("playerIdleUp", {
        start: 0,
        end: 6,
      }),
      frameRate: 20,
      repeat: -1,
    });

    this.anims.create({
      key: "playerIdleSide",
      frames: this.anims.generateFrameNumbers("playerIdleSide", {
        start: 0,
        end: 4,
      }),
      frameRate: 20,
      repeat: -1,
    });

    this.anims.create({
      key: "hitted",
      frames: this.anims.generateFrameNumbers("hitted", { start: 0, end: 6 }),
      frameRate: 20,
      repeat: -1,
      onRepeat: function (sprite, animation) {
        sprite.setTint(0xff0000);
      },
    });

    this.scene.start("Game");
  }
}
