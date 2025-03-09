import Player from "../characters/Player";
import AntEnemy from "../characters/AntEnemy";
import CaterpillarEnemy from "../characters/CaterpillarEnemy";
import BeeEnemy from "../characters/BeeEnemy";
import { findObjectsByClassInObjectsLayer, insertBadGuys } from "../utils";

export class Game extends Phaser.Scene {
  constructor() {
    super("Game");
  }

  create() {
    const gameWidth = this.sys.game.config.width;
    const gameHeight = this.sys.game.config.height;
    // this.add.sprite(gameWidth / 2, gameHeight / 2, 'back');
    this.bg = this.add
      .tileSprite(gameWidth / 2, gameHeight / 2, gameWidth, gameHeight, "back")
      .setScrollFactor(0);
    const map = this.make.tilemap({ key: "jsonLevel" });
    const tileset = map.addTilesetImage(
      "nombreDelTilesetEnTiled",
      "tilesetPNG"
    );
    this.collisionLayer = map.createLayer("collisionLayer", tileset);

    // this.debugCamera = new DebugMapCamera(this);

    const playersFromTiled = findObjectsByClassInObjectsLayer("player", map);

    this.player = new Player(
      this,
      playersFromTiled[0].x,
      playersFromTiled[0].y
    );

    // Hacemos que los tiles que pertenecen a la collisionLayer sean colisionables
    this.collisionLayer.setCollisionByExclusion([-1]);
    // Establecemos la colisión entre el jugador y la collisionLayer
    this.physics.add.collider(this.player, this.collisionLayer);
    map.createLayer("grassLayer", tileset).setDepth(100);
    map.createLayer("backgroundLayer", tileset);

    this.cameras.main.setSize(gameWidth, gameHeight);
    // this.cameras.main.startFollow(this.player);
    this.cameras.main.scrollY = 0;

    const antsFromTiled = findObjectsByClassInObjectsLayer("antEnemy", map);
    const ants = insertBadGuys(this, antsFromTiled, AntEnemy);

    this.physics.add.overlap(
      this.player,
      ants,
      this.player.checkEnemy,
      null,
      this.player
    );

    const caterpillarsFromTiled = findObjectsByClassInObjectsLayer(
      "caterpillarEnemy",
      map
    );
    const caterpillars = insertBadGuys(
      this,
      caterpillarsFromTiled,
      CaterpillarEnemy
    );
    this.physics.add.overlap(
      this.player,
      caterpillars,
      this.player.checkEnemy,
      null,
      this.player
    );

    const beesFromTiled = findObjectsByClassInObjectsLayer("beeEnemy", map);
    const bees = insertBadGuys(this, beesFromTiled, BeeEnemy);

    const goalFromTiled = findObjectsByClassInObjectsLayer("goal", map)[0];
    this.putCheckPoint(goalFromTiled.x, goalFromTiled.y, "goal");
    this.cameras.main.setBounds(0, 0, 3520, 640);

    this.physics.world.setBoundsCollision(false, false, false, true);
    this.physics.world.on("worldbounds", () => {
      this.scene.start("GameOver");
    });
  }

  putCheckPoint(x, y, sprite) {
    const goal = this.physics.add.sprite(x, y, sprite);
    goal.body.immovable = true;
    goal.body.moves = false;
    goal.setSize(160, 160);
    this.physics.add.overlap(
      this.player,
      goal,
      this.playerReachGoal,
      null,
      this
    );
  }

  playerReachGoal() {
    this.scene.start("Win");
  }

  update(time, delta) {
    // this.debugCamera.update(time, delta);
    this.player.update();
    this.cameras.main.scrollX = this.player.x - 400;
    this.bg.tilePositionX = this.player.x;
  }
}
