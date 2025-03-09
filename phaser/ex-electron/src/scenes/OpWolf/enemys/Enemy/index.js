import caterpillar from './assets/img/caterpillar.png';


class Enemy extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, type) {
        if (type === 'catepillar') {
            super(scene, 200, 200, 'caterpillar');
        }
        scene.add.existing(this);
        scene.physics.add.existing(this);
        this.createAnimations();
        this.play('caterpillarWalk');

    }

    createAnimations() {
        this.anims.create({
            key: 'caterpillarWalk',
            frames: this.anims.generateFrameNumbers('caterpillar', { start: 0, end: 3 }),
            frameRate: 7,
            repeat: -1,
        });
    }
    static loadAssets(scene) {
        scene.load.spritesheet('caterpillar', caterpillar, { frameWidth: 96, frameHeight: 192 });
    }

    update(time, delta) {
        this.setVelocityX(300);
    }
}

export default Enemy;