import Phaser from "phaser";
import { loadZone } from "../utils";

export class Game extends Phaser.Scene {
  constructor() {
    super("Game");
  }

  create() {
    this.add.image(0, 0, "spaceBG").setOrigin(0);
    loadZone(this, 140, 10, 440, 400, "Spaceship");
    loadZone(this, 590, 240, 370, 410, "Home");
  }
}
