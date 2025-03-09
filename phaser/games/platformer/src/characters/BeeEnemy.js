class BeeEnemy extends Phaser.Physics.Arcade.Sprite {
  constructor(scene, x, y) {
    super(scene, x, y, "bee");
    scene.add.existing(this);

    this.play("beeFly");

    this.flyPath = new Phaser.Curves.Ellipse(x, y, 100, 100);
    // this.pathIndex es el grado de completitud de dicha trayetoria. 0 será el punto inicial de la trayectoria circular y 1 el punto final.
    this.pathIndex = 0;
    this.pathSpeed = 0.001;
    this.currentPosition = new Phaser.Math.Vector2();

    // La función getPoint aplicada sobre la trayectoria de vuelo (flyPath), modificara el valor de currentPosition para darle unas coordenadas en funcion del grado de completitud de la trayectoria (primer parametro) recibe dos parámetros
    this.flyPath.getPoint(this.pathIndex, this.currentPosition);
    this.setPosition(this.currentPosition.x, this.currentPosition.y);
    this.patrolCircle = new Phaser.Geom.Circle(0, 0, 256);
    this.attackPath = new Phaser.Curves.Line([0, 0, 0, 0]);

    this.on("animationcomplete", this.animationComplete, this);
    this.startPlace = new Phaser.Math.Vector2(
      this.currentPosition.x,
      this.currentPosition.y
    );
  }

  update(time) {
    if (this.x < this.scene.player.x) {
      this.flipX = true;
    } else {
      this.flipX = false;
    }
    if (this.state === BeeEnemy.FLYING) {
      this.checkPlayer(time);
    } else if (this.state === BeeEnemy.CHASING) {
      this.chasePlayer(time);
    } else if (this.state === BeeEnemy.RETURNING) {
      this.pathIndex += this.pathSpeed * 2;
      this.attackPath.getPoint(this.pathIndex, this.currentPosition);
      this.setPosition(this.currentPosition.x, this.currentPosition.y);
      if (this.pathIndex >= 1) {
        this.keepFlying();
      }
    }
  }

  chasePlayer(time) {
    const player = this.scene.player;
    this.attackPath.p1.set(player.x, player.y);
    this.pathIndex += this.pathSpeed * 2;
    this.attackPath.getPoint(this.pathIndex, this.currentPosition);
    this.setPosition(this.currentPosition.x, this.currentPosition.y);
    if (this.scene.physics.overlap(this, player)) {
      this.play("beeAttack", true);
      player.playerHittedByBee();
    }

    if (
      !this.patrolCircle.contains(player.x, player.y) &&
      time - this.timeFromStartingToChase > 4000
    ) {
      this.returnHome();
    }
  }

  checkPlayer(time) {
    this.pathIndex = Phaser.Math.Wrap(this.pathIndex + this.pathSpeed, 0, 1);
    this.flyPath.getPoint(this.pathIndex, this.currentPosition);
    this.setPosition(this.currentPosition.x, this.currentPosition.y);

    this.patrolCircle.x = this.x;
    this.patrolCircle.y = this.y;

    // El jugador ha entrado dentro del area de patrulla de la avispa?
    const player = this.scene.player;
    if (this.patrolCircle.contains(player.x, player.y)) {
      this.attackPath.p0.set(this.x, this.y);
      this.attackPath.p1.set(player.x, player.y);
      this.pathIndex = 0;
      this.state = BeeEnemy.CHASING;
      this.timeFromStartingToChase = time;
    }
  }

  animationComplete(animation, frame, sprite) {
    if (animation.key === "beeAttack") {
      this.returnHome();
    }
  }

  returnHome() {
    this.play("beeFly", true);
    this.attackPath.p0.set(this.x, this.y);
    this.attackPath.p1.set(this.startPlace.x, this.startPlace.y);
    this.pathIndex = 0;
    this.state = BeeEnemy.RETURNING;
  }

  keepFlying() {
    this.state = BeeEnemy.FLYING;
    this.pathIndex = 0;
  }
}

BeeEnemy.FLYING = 0;
BeeEnemy.CHASING = 1;
BeeEnemy.RETURNING = 2;

export default BeeEnemy;
