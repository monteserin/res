import Building from "../objects/Building";
import { insertBuildings } from "../utils";

let player1, player2, activePlayer, cursors, angleText, powerText;
let bullets,
  angle = 45,
  power = 500,
  canShoot = true;

export class Game extends Phaser.Scene {
  constructor() {
    super("Game");
  }

  create() {
    this.add.image(400, 575, "ground");
    this.cursors = this.input.keyboard.createCursorKeys();

    this.angleText = this.add.text(10, 10, `Ángulo: ${angle}`, {
      fontSize: "16px",
      fill: "#ff0000",
    });
    this.powerText = this.add.text(10, 30, `Potencia: ${power}`, {
      fontSize: "16px",
      fill: "#ff0000",
    });

    this.player1 = this.physics.add.sprite(100, 100, "tank1");
    this.player2 = this.physics.add.sprite(700, 100, "tank2");
    this.activePlayer = player1;
    this.bullets = this.physics.add.group({ allowGravity: true });
    // this.physics.add.collider(player2, bullets, this.hitPlayer, null, this);

    const gameWidth = this.sys.game.config.width;
    const gameHeight = this.sys.game.config.height;
    const numberOfBuildings = Math.floor(Math.random() * 5) + 5;
    const buildingWidth = gameWidth / numberOfBuildings;
    const buildingHeight = gameHeight / 2;
    // TODO cual es la mejor forma de añadir los edificios y porque me da error en ambos casos

    const buildingCoordinates = Array.from(
      { length: numberOfBuildings },
      (_, i) => ({
        buildingWidth,
        buildingHeight,
        x: i * buildingWidth,
        y: gameHeight,
      })
    );
    const buildings = insertBuildings(this, buildingCoordinates);

    console.log('ñññññññññññññññññññ', buildings)
    this.physics.add.collider(this.player1, buildings);
    this.physics.add.collider(this.player2, buildings);


  }

  update() {
    if (this.cursors.left.isDown) {
      angle -= 1;
    } else if (this.cursors.right.isDown) {
      angle += 1;
    }

    if (this.cursors.up.isDown) {
      power += 10;
    } else if (this.cursors.down.isDown) {
      power -= 10;
    }

    if (this.cursors.space.isDown && canShoot) {
      this.shootBullet();
    }

    this.angleText.setText(`Ángulo: ${angle}`);
    this.powerText.setText(`Potencia: ${power}`);
  }

  shootBullet() {
    canShoot = false;
    this.bullet = bullets.create(activePlayer.x, activePlayer.y, "bullet");
    this.physics.velocityFromAngle(angle - 90, power, bullet.body.velocity);
    setTimeout(() => {
      canShoot = true;
      activePlayer = activePlayer === player1 ? player2 : player1;
    }, 1000);
  }

  hitPlayer(player, bullet) {
    this.bullet.disableBody(true, true);
  }
}
