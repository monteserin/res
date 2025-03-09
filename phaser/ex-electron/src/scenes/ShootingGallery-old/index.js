import { gameHeight, gameWidth } from '../../consts';
import back from './assets/img/back.jpg';
import caterpillar from './assets/img/caterpillar.png';
import ant from './assets/img/ant.png';
import bee from './assets/img/bee.png';
import crash from './assets/img/crash.png';

class ShootingGallery extends Phaser.Scene {
  constructor() {
    super('ShootingGallery');
  }
  preload() {
    this.load.image('back', back);
    this.load.spritesheet('caterpillar', caterpillar, {
      frameWidth: 96,
      frameHeight: 192
    });
    this.load.spritesheet('ant', ant, {
      frameWidth: 192,
      frameHeight: 96
    });
    this.load.spritesheet('bee', bee, {
      frameWidth: 128,
      frameHeight: 128
    });
    this.load.spritesheet('crash', crash, {
      frameWidth: 199,
      frameHeight: 200
    });
  }

  create() {
    this.add.sprite(gameWidth / 2, gameHeight / 2, 'back');
    this.sceneAnimations();
    this.createSprite();
  }

  update() {
    console.log('update');
  }

  sceneAnimations() {
    this.anims.create({
      key: 'caterpillarWalk',
      frames: this.anims.generateFrameNumbers('caterpillar', { start: 0, end: 3 }),
      frameRate: 7,
      repeat: -1,
    });
    this.anims.create({
      key: 'antWalk',
      frames: this.anims.generateFrameNumbers('ant', { start: 0, end: 3 }),
      frameRate: 7,
      repeat: -1,
    });

    this.anims.create({
      key: 'beeWalk',
      frames: this.anims.generateFrameNumbers('bee', { start: 0, end: 2 }),
      frameRate: 10,
      repeat: -1,
    });
    this.anims.create({
      key: 'crashAnim',
      frames: this.anims.generateFrameNumbers('crash', { start: 0, end: 4 }),
      frameRate: 7
    });
  }

  createSprite() {

    const bugs = ['caterpillar', 'ant', 'bee'];
    const random = Math.floor(Math.random() * bugs.length);
    const spriteName = bugs[random];

    const y = Math.floor(Math.random() * gameHeight);
    const x = Math.random() > 0.5 ? gameWidth + 100 : -100;
    const direction = x == -100 ? 1 : -1;


    const obj = this.physics.add.sprite(x, y, spriteName);
    obj.setVelocity(200 * direction, 0).setInteractive().on('pointerdown', () => this.clickedBug(obj));
    obj.play(spriteName + 'Walk');
    obj.on('animationcomplete', this.animationComplete, this);

    if (direction == -1) {
      obj.flipX = true;
    }

    this.time.delayedCall(1000, () => {
      this.createSprite()
    }, [], this);
  }

  clickedBug(bug) {
    bug.disableBody();
    bug.play("crashAnim");
  }

  animationComplete(animation, frame, sprite) {
    if (animation.key === 'crashAnim') {
      sprite.disableBody(true, true);
      sprite.destroy();
    }
  }
}

export default ShootingGallery;