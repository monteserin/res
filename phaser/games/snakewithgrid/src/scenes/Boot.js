import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/snakewithgrid/dist");
    }

    this.load.image("background", "assets/bg.png");
  }

  create() {
    this.scene.start("Preloader");
  }
}
