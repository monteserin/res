export class Game extends Phaser.Scene {
  constructor() {
    super("Game");
  }

  create() {
    this.add.image(0, 0, "back").setOrigin(0);
    this.createSprite();
  }

  createSprite() {
    const gameWidth = this.sys.game.config.width;
    const gameHeight = this.sys.game.config.height;
    const y = Math.floor(Math.random() * gameHeight);
    const x = Math.random() > 0.5 ? gameWidth + 100 : -100;
    const direction = x == -100 ? 1 : -1;

    const bugs = ["caterpillar", "ant", "bee"];
    const random = Math.floor(Math.random() * bugs.length);
    const spriteName = bugs[random];
    const obj = this.physics.add
      .sprite(x, y, spriteName)
      .setInteractive()
      .on("pointerdown", () => this.clickedBug(obj));
    obj.setVelocity(direction * 200, 0);
    obj.play(spriteName + "Walk");

    obj.on("animationcomplete", this.animationComplete, this);
    if (direction == -1) {
      obj.flipX = true;
    }
    this.time.delayedCall(
      1000,
      () => {
        this.createSprite();
      },
      [],
      this
    );
  }

  animationComplete(animation, frame, sprite) {
    if (animation.key === "crashAnim") {
      sprite.destroy();
    }
  }

  clickedBug(bug) {
    if (bug.body.enable) {
      bug.disableBody();
      bug.play("crashAnim");
    }
  }

  update() {
    console.log("update");
  }
}
