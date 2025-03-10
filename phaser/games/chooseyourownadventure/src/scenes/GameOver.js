import { Scene } from "phaser";

export class GameOver extends Scene {
  constructor() {
    super("GameOver");
  }

  create() {
    this.cameras.main.setBackgroundColor(0xff0000);

    this.add.image(0, 0, "lose").setOrigin(0);

    this.input.once("pointerdown", () => {
      this.scene.start("Game");
    });
  }
}
