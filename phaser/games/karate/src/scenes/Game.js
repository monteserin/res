import { makeZone } from "../utils";

export class Game extends Phaser.Scene {
  constructor() {
    super("Game");
  }

  create() {
    const gameWidth = this.sys.game.config.width;
    const gameHeight = this.sys.game.config.height;
    this.add.image(gameWidth / 2, gameHeight / 2, "back");
    this.player = this.physics.add.sprite(200, 100, "player");
    this.player.play("playerIdle");
    this.cursor = this.input.keyboard.createCursorKeys();
    // this.anims.create({
    //   key: "playerHitted",
    //   frames: this.anims.generateFrameNumbers("player", { start: 2, end: 7 }),
    //   frameRate: 7,
    // });

    const tooLateHitMomentZoneY = 200;

    this.rightHitMomentZone = makeZone(
      this,
      0,
      0,
      gameWidth / 2,
      300,
      "0xff0000",
      true
    );
    this.tooLateHitMomentZone = makeZone(
      this,
      0,
      0,
      gameWidth / 2,
      100,
      "0x00ff00", // verde
      true
    );
    this.safeZone = makeZone(
      this,
      0,
      gameHeight - 30,
      gameWidth / 2,
      30,
      "0x0000ff",
      true
    );
    this.visualButtonsForAttack();
    this.launchKarateka();
  }

  visualButtonsForAttack() {
    const gameWidth = this.sys.game.config.width;
    const gameHeight = this.sys.game.config.height;
    // Este botón ocupa el primer tercio de la pantalla
    this.btn1 = makeZone(
      this,
      0,
      0,
      gameWidth / 3,
      gameHeight,
      "0x000000",
      false
    );
    // Este botón ocupa el segundo tercio de la pantalla
    this.btn2 = makeZone(
      this,
      gameWidth / 3,
      0,
      gameWidth / 3,
      gameHeight,
      "0xffffff",
      false
    );
    // Este botón ocupa el tercer tercio de la pantalla
    this.btn3 = makeZone(
      this,
      (2 * gameWidth) / 3,
      0,
      gameWidth / 3,
      gameHeight,
      "0xff0",
      false
    );

    this.btn1.on("pointerdown", () => {
      this.playerAttack1();
    });

    this.btn2.on("pointerdown", () => {
      this.playerAttack2();
    });

    this.btn3.on("pointerdown", () => {
      this.playerAttack3();
    });
  }

  launchKarateka() {
    const randomSprite = Math.floor(Math.random() * 2);
    const randomPosition = Math.floor(Math.random() * 3);
    const karatekaPosition =
      randomPosition === 0 ? 100 : randomPosition == 1 ? 200 : 300;
    const karateka = this.physics.add.sprite(
      karatekaPosition,
      600,
      `karateka0`
    );
    karateka.play("enemyWalking");
    karateka.setVelocity(0, -500);
    karateka.setCollideWorldBounds(true);
    karateka.body.onWorldBounds = true;

    this.physics.add.overlap(karateka, this.rightHitMomentZone, () => {
      this.rightHitMoment = true;
      this.currentSprite = randomSprite;
      this.currentKarateka = karateka;
    });

    this.physics.add.overlap(karateka, this.safeZone, () => {
      this.rightHitMoment = false;
    });

    this.physics.add.overlap(karateka, this.tooLateHitMomentZone, () => {
      this.rightHitMoment = false;
      karateka.destroy();
    });

    this.time.delayedCall(2000, this.launchKarateka, [], this);
  }

  playerHitted(player, enemy) {
    player.play("playerHitted");
    enemy.destroy();
  }

  update() {
    if (this.cursor.right.isDown) {
      this.playerAttack3();
    } else if (this.cursor.left.isDown) {
      this.playerAttack1();
    } else if (this.cursor.up.isDown) {
      this.playerAttack2();
    }
  }

  playerAttack1() {
    console.log("btn is clicked", this.rightHitMoment, this.currentSprite);

    this.player.play("playerAttack1", true);
    this.player.on("animationcomplete", () => {
      this.player.play("playerIdle");
    });
  }

  playerAttack2() {
    console.log("btn is clicked", this.rightHitMoment, this.currentSprite);

    this.player.play("playerAttack2", true);
    this.player.on("animationcomplete", () => {
      this.player.play("playerIdle");
    });
  }

  playerAttack3() {
    console.log("btn is clicked", this.rightHitMoment, this.currentSprite);

    this.player.play("playerAttack3", true);
    this.player.on("animationcomplete", () => {
      this.player.play("playerIdle");
    });
  }
}
