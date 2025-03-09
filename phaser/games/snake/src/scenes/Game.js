const speed = 150;

export class Game extends Phaser.Scene {
  constructor() {
    super("Game");
  }

  create() {
    const coordinates = this.getRandomXYCoordinates();
    this.player = this.physics.add.sprite(
      coordinates.x,
      coordinates.y,
      "player"
    );
    this.player.setVelocityX(speed);
    this.cursors = this.input.keyboard.createCursorKeys();
    this.createFood();
    this.physics.add.overlap(
      this.player,
      this.food,
      this.collisionHandler,
      null,
      this
    );

    this.currentPosition = new Phaser.Math.Vector2(
      coordinates.x,
      coordinates.y
    );
    this.distanceThreshold = 18;
    this.bodies = [];
    this.positions = [];
    this.physics.add.overlap(
      this.player,
      this.bodies,
      this.collideWithBody,
      null,
      this
    );
  }

  collideWithBody(head, body) {
    if (body === this.bodies[0] || body === this.bodies[1]) {
      //  Never collide the first couple of body parts with the head
      return;
    }
    alert("colisión con la propia cola");
  }

  collisionHandler(player, food) {
    this.eatFood();
  }

  createFood() {
    const coordinates = this.getRandomXYCoordinates();
    this.food = this.physics.add.sprite(coordinates.x, coordinates.y, "food");
  }

  getRandomXYCoordinates() {
    const gameWidth = this.sys.game.config.width;
    const gameHeight = this.sys.game.config.height;
    const x = Phaser.Math.Between(0, gameWidth);
    const y = Phaser.Math.Between(0, gameHeight);
    return { x, y };
  }
  repositionFood() {
    const coordinates = this.getRandomXYCoordinates();
    this.food.x = coordinates.x;
    this.food.y = coordinates.y;
  }

  movePlayer() {
    if (this.cursors.left.isDown) {
      this.player.setVelocityX(-speed);
      this.player.setVelocityY(0);
    } else if (this.cursors.right.isDown) {
      this.player.setVelocityX(speed);
      this.player.setVelocityY(0);
    } else if (this.cursors.up.isDown) {
      this.player.setVelocityX(0);
      this.player.setVelocityY(-speed);
    } else if (this.cursors.down.isDown) {
      this.player.setVelocityX(0);
      this.player.setVelocityY(speed);
    }
  }
  update() {
    this.movePlayer();

    if (
      Phaser.Math.Distance.BetweenPoints(this.currentPosition, this.player) >
      this.distanceThreshold
    ) {
      this.currentPosition.copy(this.player); // Este método de la clase Vector2 copia las características del player en currentPosition, sobreescribiendo sus valores

      this.positions.push({
        x: this.currentPosition.x,
        y: this.currentPosition.y,
      });

      // Debemos comprobar que en this.positions no se almacenen más posiciones que los bodies disponibles
      if (this.positions.length > this.bodies.length + this.distanceThreshold) {
        this.positions.shift();
      }
    }

    let p = this.positions.length - 1;

    for (let i = 0; i < this.bodies.length; i++) {
      const part = this.bodies[i];
      const position = this.positions[p];

      part.x = position.x;
      part.y = position.y;

      p--;
    }
  }

  eatFood() {
    this.repositionFood();
    const position = this.positions[0];

    const bodyPart = this.physics.add.sprite(position.x, position.y, "player");

    bodyPart.setDirectControl();

    this.bodies.push(bodyPart);
  }
}
