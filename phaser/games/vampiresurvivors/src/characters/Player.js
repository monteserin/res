export class Player extends Phaser.Physics.Arcade.Sprite {
  constructor(scene, x, y) {
    super(scene, x, y, "player");
    scene.add.existing(this);
    scene.physics.add.existing(this);
    // this.setSize(90, 180, true);
    this.cursors = this.scene.input.keyboard.createCursorKeys();
    this.play("playerIdleDown", true);
    this.isMoving = false;
    // this.scale = 3;
    this.isAlive = true;
    this.isHitted = false;

    this.idleTimer = 0;

    this.on("animationcomplete", this.animationComplete, this);
  }

  update(time, delta) {
    // TODO ¿pq this.isDazing es true en la traza de ñññññ y false en la de 22222?
    //console.log("222222222", this.isDazing);
    this.isMoving = false;

    if (this.isAlive) {
      if (!this.isDazing) {
        // RIGHT
        if (this.cursors.right.isDown) {
          this.flipX = false;
          this.isMoving = true;
          this.body.setVelocityX(250);
          // RIGHT UP
          if (this.cursors.up.isDown) {
            this.body.setVelocityY(-250);
            this.play(this.isHitted ? "hitted" : "playerWalkDiagonalUp", true);
          } else if (this.cursors.down.isDown) {
            this.body.setVelocityY(250);
            this.play(
              this.isHitted ? "hitted" : "playerWalkDiagonalDown",
              true
            );
          } else {
            this.body.setVelocityY(0);
            // this.play(this.isHitted ? "hitted" : "playerWalkSide", true);
          }

          // LEFT
        } else if (this.cursors.left.isDown) {
          this.flipX = true;
          this.isMoving = true;
          this.body.setVelocityX(-250);
          // + UP
          if (this.cursors.up.isDown) {
            console.log("uuuuuuuuuuuuuuuuuuuuuuuuuuuu");
            this.body.setVelocityY(-250);
            this.play(this.isHitted ? "hitted" : "playerWalkDiagonalUp", true);
            // + DOWN
          } else if (this.cursors.down.isDown) {
            this.body.setVelocityY(250);
            this.play(
              this.isHitted ? "hitted" : "playerWalkDiagonalDown",
              true
            );
          } else {
            this.play(this.isHitted ? "hitted" : "playerWalkSide", true);
          }

          // DOWN
        } else if (this.cursors.down.isDown) {
          this.isMoving = true;
          this.body.setVelocityY(250);
          this.play(this.isHitted ? "hitted" : "playerWalkDown", true);

          // UP
        } else if (this.cursors.up.isDown) {
          this.isMoving = true;
          console.log("444444");
          this.body.setVelocityY(-250);
          this.play(this.isHitted ? "hitted" : "playerWalkUp", true);
        } else {
          this.setVelocityY(0);
          this.setVelocityX(0);
        }

        // if (!this.isMoving && this.cursors.up.isDown) {
        //   this.play(this.isHitted ? "hitted" : "playerWalkUp", true);
        // } else if (this.cursors.down.isDown) {
        //   this.downWalk();
        // } else {
        //   this.setVelocityY(0);
        // }

        if (this.body.velocity.x === 0 && this.body.velocity.y === 0) {
          // this.play(this.isHitted ? "hitted" : "idle", true);
        }
      }
    }

    if (this.isMoving) {
      this.idleTimer = 0;
    } else {
      this.idleTimer += delta;
    }

    if (this.idleTimer > 100) {
      const currentAnimKey = this.anims.currentAnim.key;

      const idleKey = currentAnimKey.replace("Walk", "Idle");
      this.play(idleKey, true);
    }
  }

  // rightWalk() {
  //   this.isMoving = true;
  //   this.body.setVelocityX(250);
  //   this.flipX = false;
  //   this.play(this.isHitted ? "hitted" : "playerWalkSide", true);
  // }

  // upWalk() {
  //   this.isMoving = true;
  //   this.play(this.isHitted ? "hitted" : "playerWalkUp", true);

  //   this.body.setVelocityY(-250);
  // }

  // downWalk() {
  //   this.isMoving = true;
  //   this.body.setVelocityY(250);
  // }

  // idle() {
  //   this.body.setVelocityX(0);
  // }

  checkEnemy(player, enemy) {
    this.isDazing = true;
    //console.log("ññññññññññññ", this.isDazing);
  }
  die() {
    this.isAlive = false;
    this.disableBody();
    //Para que esta animación se ejecute es necesario haber puesto el código que evalúa this.estaVivo en el update, para que no se sigan ejecutando el resto de animaciones y comportamientos
    this.play("crashAnim");
  }

  animationComplete(animation, frame, sprite) {
    if (animation.key === "crashAnim") {
      this.scene.scene.start("Lose");
    }
  }

  playerHittedByBee() {
    this.isDazing = true;
    this.body.setVelocity(-150, -150);
    this.play("fall", true);
    this.scene.time.addEvent({
      delay: 1000,
      callback: this.dazeFinished,
      callbackScope: this,
    });
  }

  dazeFinished() {
    this.isDazing = false;
  }
}
