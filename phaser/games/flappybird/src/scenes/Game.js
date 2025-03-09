import { Scene } from "phaser";

export class Game extends Scene {
  constructor() {
    super("Game");
  }

  create() {
    const gameWidth = this.sys.game.config.width;
    const gameHeight = this.sys.game.config.height;
    this.bg = this.add
      .tileSprite(0, 0, gameWidth, gameHeight, "back")
      .setOrigin(0)
      .setScrollFactor(0);
    this.player = this.physics.add.sprite(50, 100, "hero");
    this.player.play("fly");

    this.input.keyboard.on("keydown", (event) => {
      if (event.keyCode === 32) {
        this.jump();
      }
    });

    this.input.on("pointerdown", () => this.jump());

    this.player.on("animationcomplete", this.animationComplete, this);

    this.newPipe();

    this.physics.world.on("worldbounds", (body) => {
      this.scene.start("GameOver");
    });

    this.player.setCollideWorldBounds(true);
    this.player.body.onWorldBounds = true;

    this.player.body.gravity.y = 300;
  }

  update(time) {
    this.bg.tilePositionX = time * 0.1;
  }

  jump() {
    this.player.setVelocityY(-200);
    this.player.play("jump");
  }

  animationComplete(animation, frame, sprite) {
    if (animation.key === "jump") {
      this.player.play("fly");
    }
  }

  newPipe() {
    //Una tubería un grupo de cubos
    const pipe = this.physics.add.group();
    //Cada tubería tendrá un hueco (zona en la que no hay cubos) por dónde pasará el super héroe
    const gap = Math.floor(Math.random() * 5) + 1;
    const random = Math.floor(Math.random() * 2);
    for (let i = 0; i < 8; i++) {
      //El agujero son cuatro casillas
      if (i !== gap && i !== gap + 1 && i !== gap - 1) {
        let cube;
        if (i == gap - 2) {
          cube = pipe.create(960, i * 100, `pipeUp${random}`);
        } else if (i == gap + 2) {
          cube = pipe.create(960, i * 100, `pipeDown${random}`);
        } else {
          cube = pipe.create(960, i * 100, `pipe${random}`);
        }
        cube.body.allowGravity = false;
      }
    }
    pipe.setVelocityX(-200);
    //Detectaremos cuando las columnas salen de la pantalla...
    pipe.checkWorldBounds = true;
    //... y con la siguiente línea las eliminaremos
    pipe.outOfBoundsKill = true;
    this.physics.add.overlap(this.player, pipe, this.hitPipe, null, this);

    //Cada 1000 milisegundos llamaremos de nuevo a esta función para que genere una nueva columna
    this.time.delayedCall(1000, this.newPipe, [], this);
  }

  hitPipe() {
    this.scene.start("GameOver");
  }
}
