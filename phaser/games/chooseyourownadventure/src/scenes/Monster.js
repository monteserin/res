export class Monster extends Phaser.Scene {
  constructor() {
    super("Monster");
  }

  create() {
    this.add.image(0, 0, "monsterBG").setOrigin(0);
    this.input.on("pointerdown", () => this.scene.start("Game"), this);
  }

  update() {}
}
