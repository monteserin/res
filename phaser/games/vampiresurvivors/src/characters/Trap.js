export class Trap extends Phaser.Physics.Arcade.Sprite {
  constructor(scene, x, y) {
    super(scene, x, y, "trap");
    scene.physics.add.collider(this, scene.collisionLayer);
    scene.add.existing(this);
    this.isActivated = false;
    this.on('animationcomplete', this.animationComplete, this);

  }

  create() { }


  animationComplete(animation, frame) {
    if (animation.key === 'trapActivated') {
      this.isActivated = true;
    }
  }
  activate() {
    this.play('trapActivated');
  }

  update() {
    if (this.isActivated) {
      const badGuys = this.scene.badGuys.getChildren();

      if (this.scene.physics.overlap(this, badGuys)) {
        console.log('kill bad guy')
        badGuys[0].die();
        //TODO
        // const mask = this.make.bitmapMask({
        //   x,
        //   y,
        //   key: 'trap'
        // });
        // this.setMask(mask);


      }
    }
  }
}
