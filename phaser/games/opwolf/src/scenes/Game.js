import Enemy from "../characters/enemy";

export class Game extends Phaser.Scene {
  constructor() {
    super("Game");
  }

  create() {
    const gameWidth = this.sys.game.config.width;
    const gameHeight = this.sys.game.config.height;
    this.bg1 = this.add.sprite(0, gameHeight / 2, "back1").setOrigin(0);
    this.bg2 = this.add.sprite(0, gameHeight / 2, "back2").setOrigin(0);

    this.input.on("pointerdown", () => this.replay());
    // const map = this.make.tilemap({ key: 'jsonLevel' });
    // const tileset = map.addTilesetImage('nombreDelTilesetEnTiled', 'tilesetPNG');
    // map.createLayer('grassLayer', tileset).setDepth(100);
    this.cameras.main.scrollY = 0;
    this.enemies = this.physics.add.group({
      classType: Enemy,
      runChildUpdate: true,
      runChildCreate: true,
      gravityY: 0,
    });
  }

  replay() {
    this.scene.start("Start");
  }

  update(time, delta) {
    this.cameras.main.scrollX = this.cameras.main.scrollX + delta / 10;

    if (this.cameras.main.scrollX > 100) {
      // this.enemies.add(new Enemy(this, 'catepillar'));
    }
  }
}
