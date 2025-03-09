class Enemy extends Phaser.Physics.Arcade.Sprite {
  constructor(scene, type) {
    if (type === "catepillar") {
      super(scene, 200, 200, "caterpillar");
    }
    scene.add.existing(this);
    scene.physics.add.existing(this);
    this.createAnimations();
    this.play("caterpillarWalk");
  }

  createAnimations() {}
  static loadAssets(scene) {}

  update(time, delta) {
    this.setVelocityX(300);
  }
}

export default Enemy;
