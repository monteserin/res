import crash from './assets/img/crash.png';

class Enemy extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y, sprite) {
        super(scene, x, y, sprite);
        scene.physics.add.collider(this, scene.collisionLayer);
        scene.add.existing(this);
        this.speed = 100;
        this.direction = 1;

        this.anims.create({
            key: 'crashAnim',
            frames: this.anims.generateFrameNumbers('crash', { start: 0, end: 4 }),
            frameRate: 7
        });
        this.on('animationcomplete', this.animationComplete, this);
    }

    animationComplete(animation, frame, sprite) {
        if (animation.key === 'crashAnim') {
            this.destroy();
        }
    }

    static loadAssets(scene) {
        scene.load.spritesheet('crash', crash, { frameWidth: 199, frameHeight: 200 });
    }

    update() {
        this.body.setVelocityX(this.direction * this.speed);

        const nextX = Math.floor(this.x / 32) + this.direction;
        let nextY = this.y + this.height / 2;
        nextY = Math.round(nextY / 32);
        const nextTile = this.scene.collisionLayer.hasTileAt(nextX, nextY);
        if (!nextTile && this.body.blocked.down) {
            this.direction *= -1;
        }
        if (this.direction > 0) {
            this.flipX = false;
        } else {
            this.flipX = true;
        }
    }

    die() {
        this.disableBody();
        this.play('crashAnim');
    }
}

export default Enemy;