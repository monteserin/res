import { loadZone } from "../utils";

export class Spaceship extends Phaser.Scene {
  constructor() {
    super("Spaceship");
  }

  create() {
    this.add.image(0, 0, "spaceshipBG").setOrigin(0);
    loadZone(this, 160, 180, 240, 350, "Monster");
    loadZone(this, 530, 180, 250, 350, "Home");
  }
}
