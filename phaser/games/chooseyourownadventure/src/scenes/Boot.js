import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/chooseyourownadventure/dist");
    }

    this.load.setPath("/res/phaser/games/chooseyourownadventure/dist");
    this.load.image("spaceBG", "/assets/images/space.jpg");
    this.load.image("homeBG", "/assets/images/home.jpg");
    this.load.image("monsterBG", "/assets/images/monster.jpg");
    this.load.image("spaceshipBG", "/assets/images/spaceship.jpg");
  }

  create() {
    this.scene.start("Game");
  }
}
