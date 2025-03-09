const step = 15;

export class Game extends Phaser.Scene {
  constructor() {
    super("Game");
  }

  create() {
    this.player = this.physics.add.sprite(400, 300, "player");

    this.movePlayer();
    this.cursors = this.input.keyboard.createCursorKeys();
    this.direction = "right";
    this.createFood();
    this.physics.add.overlap(
      this.player,
      this.food,
      this.collisionHandler,
      null,
      this
    );
  }

  collisionHandler(player, food) {
    alert("Colisión entre player y food");
  }

  createFood() {
    const coordinates = this.getRandomXYCoordinates();
    this.food = this.physics.add.sprite(coordinates.x, coordinates.y, "food");
  }

  getRandomXYCoordinates() {
    const playerWidth = 20;
    const gameWidth = this.sys.game.config.width;
    const gameHeight = this.sys.game.config.height;
    const x = Phaser.Math.Between(0, gameWidth / playerWidth);
    const y = Phaser.Math.Between(0, gameHeight / playerWidth);
    return { x: x * playerWidth, y: y * playerWidth };
  }
  repositionFood() {
    const coordinates = this.getRandomXYCoordinates();
    this.food.x = coordinates.x;
    this.food.y = coordinates.y;
  }

  update() {
    if (this.cursors.left.isDown) {
      this.direction = "left";
    } else if (this.cursors.right.isDown) {
      this.direction = "right";
    } else if (this.cursors.up.isDown) {
      this.direction = "up";
    } else if (this.cursors.down.isDown) {
      this.direction = "down";
    }
  }

  movePlayer() {
    if (this.direction === "right") {
      this.player.x += step;
    } else if (this.direction === "left") {
      this.player.x -= step;
    } else if (this.direction === "up") {
      this.player.y -= step;
    } else if (this.direction === "down") {
      this.player.y += step;
    }
    this.time.addEvent({
      delay: 100,
      callback: this.movePlayer,
      callbackScope: this,
    });
  }

  eatFood() {}
}
