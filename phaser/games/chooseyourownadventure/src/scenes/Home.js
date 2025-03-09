export class Home extends Phaser.Scene {
  constructor() {
    super("Home");
  }

  create() {
    this.add.image(0, 0, "homeBG").setOrigin(0);
    this.input.on("pointerdown", () => this.scene.start("Game"), this);
  }

  update() {}
}
