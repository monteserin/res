export class Game extends Phaser.Scene {
  constructor() {
    super("Game");
  }
  preload() {}

  create() {
    this.add.image(0, 0, "back").setOrigin(0, 0);
    this.launchMissile();
    this.life1 = this.add.sprite(50, 30, "life");
    this.life2 = this.add.sprite(100, 30, "life");
    this.life3 = this.add.sprite(150, 30, "life");
    this.anims.create({
      key: "crashAnim",
      frames: this.anims.generateFrameNumbers("crash", { start: 0, end: 4 }),
      frameRate: 7,
    });

    this.lifeCounter = 3;

    this.physics.world.on("worldbounds", (body, up, down, left, right) => {
      if (down) {
        body.gameObject.disableBody();
        body.gameObject.play("crashAnim");
        --this.lifeCounter;
        if (this.lifeCounter == 2) {
          this.life3.setFrame(1);
        } else if (this.lifeCounter == 1) {
          this.life2.setFrame(1);
        } else if (this.lifeCounter == 0) {
          this.life1.setFrame(1);
          this.scene.start("GameOver");
        }
      }
    });
  }

  launchMissile() {
    const missilePosition =
      Math.floor(Math.random() * (this.sys.game.config.width - 100)) + 50;
    const random = Math.floor(Math.random() * 2);
    const missile = this.physics.add.sprite(
      missilePosition,
      -100,
      `missile${random}`
    );
    missile.setVelocity(0, 100);
    missile.setInteractive();
    this.time.delayedCall(1000, this.launchMissile, [], this);
    missile.on("pointerdown", () => this.clickedMissile(missile));
    missile.on("animationcomplete", this.animationComplete, this);
    missile.setCollideWorldBounds(true);
    missile.body.onWorldBounds = true;
    missile.body.gravity.y = 300;
  }
  update() {
    console.log("update");
  }
  clickedMissile(m) {
    m.play("crashAnim");
  }

  animationComplete(animation, frame, sprite) {
    if (animation.key === "crashAnim") {
      sprite.destroy();
    }
  }
}
