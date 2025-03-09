import { Player } from "../characters/Player";
import { CaterpillarEnemy } from "../characters/CaterpillarEnemy";
import { Trap } from "../characters/Trap";
import { generateCoordinates } from "../utils";

export class Game extends Phaser.Scene {
  constructor() {
    super("Game");
  }

  generateEnemyWave = () => { };
  create() {
    const gameWidth = this.game.config.width;
    const gameHeight = this.game.config.height;
    this.player = new Player(this, gameWidth / 2, gameHeight / 2);
    this.cameras.main.startFollow(this.player);


    this.badGuys = this.insertObjects(this, CaterpillarEnemy);
    this.physics.add.collider(
      this.player,
      this.badGuys,
      this.player.checkEnemy,
      null,
      this.player // This is the scope (or context) in which the 'checkEnemy' function is run.
    );

    const traps = this.insertObjects(this, Trap);

    this.physics.add.overlap(
      this.player,
      traps,
      (player, trap) => {
        trap.activate();
      },
      null,
      this
    );
  }


  insertObjects(scene, type) {
    const group = scene.physics.add.group({
      classType: type,
      runChildUpdate: true,
      runChildCreate: true,
    }); // Cuando instanciamos un grupo, los parámetros de gravedad los ponemos en la creación del grupo en lugar de en el personaje individual

    const coordinates = generateCoordinates(
      this.player.x,
      this.player.y,
      500,
      1200,
      20,
      20
    );


    for (let i = 0; i < coordinates.length; i++) {
      const object = new type(scene, coordinates[i].x, coordinates[i].y);
      group.add(object);
    }

    const object = new type(scene, coordinates[0].x, coordinates[0].y);
    group.add(object);
    return group;
  }

  update(time, delta) {
    this.player.update(time, delta);
  }
}
