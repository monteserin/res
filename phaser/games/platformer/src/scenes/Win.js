export class Win extends Phaser.Scene {
  constructor() {
    super("Win");
  }

  create() {
    this.add.image(0, 0, "win").setOrigin(0);

    this.input.once("pointerdown", () => {
      this.scene.start("Game");
    });
  }

  update() {}
}
