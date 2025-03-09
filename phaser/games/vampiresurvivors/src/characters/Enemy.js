class Enemy extends Phaser.Physics.Arcade.Sprite {
  constructor(scene, x, y, sprite) {
    super(scene, x, y, sprite);
    scene.physics.add.collider(this, scene.collisionLayer);
    scene.add.existing(this);
    this.speed = 100;
    this.pathIndex = 0;
    this.attackPath = new Phaser.Curves.Line([0, 0, 0, 0]);
    this.currentPosition = new Phaser.Math.Vector2();
    this.on("animationcomplete", this.animationComplete, this);
  }

  animationComplete(animation, frame, sprite) {
    if (animation.key === "crashAnim") {
      // this.destroy();
    }
  }

  update(time) {
    const player = this.scene.player;
    this.chasePlayer(time);
    if (this.x > player.x) {
      this.setFlipX(true);
    } else {
      this.setFlipX(false);
    }
  }

  chasePlayer() {
    const player = this.scene.player;

    this.scene.physics.moveTo(this, player.x, player.y, this.speed);
    if (this.scene.physics.overlap(this, player)) {
      // this.play("beeAttack", true);
      // player.playerHittedByBee();
    }
  }

  die() {
    console.log('dieeeeeeeeeeeeeeeeeeeeeeeeee');
    // this.disableBody();
    // this.play("crashAnim");
  }
}

export default Enemy;
