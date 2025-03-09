import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/tank/dist");
    }

    this.load.image("tank1", "/assets/tank1.png");
    this.load.image("tank2", "/assets/tank2.png");
    this.load.image("bullet", "/assets/bullet.jpg");
    this.load.image("ground", "/assets/ground.png");
    this.load.image("building", "/assets/building.png");
  }

  create() {
    this.scene.start("Game");
  }
}
