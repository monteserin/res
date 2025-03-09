import { Scene } from "phaser";

export class Boot extends Scene {
  constructor() {
    super("Boot");
  }

  preload() {
    const isLocal = window.location.hostname.startsWith("localhost");
    if (!isLocal) {
      this.load.setPath("/res/phaser/games/opwolf/dist");
    }

    // this.load.tilemapTiledJSON('jsonLevel', '/assets/map/map.json");
    // this.load.image('tilesetPNG', '/assets/map/tiles.png');
    this.load.spritesheet("caterpillar", "/assets/caterpillar.png", {
      frameWidth: 96,
      frameHeight: 192,
    });
    this.load.image("back1", "/assets/fondo.png");
    this.load.image("back2", "/assets/fondo2.png");
  }

  create() {
    this.anims.create({
      key: "caterpillarWalk",
      frames: this.anims.generateFrameNumbers("caterpillar", {
        start: 0,
        end: 3,
      }),
      frameRate: 7,
      repeat: -1,
    });
    this.scene.start("Game");
  }
}
