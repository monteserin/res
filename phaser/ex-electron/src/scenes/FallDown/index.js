import { gameHeight, gameWidth } from '../../consts';
import back from './assets/img/back.jpg';
import missile0 from './assets/img/missile0.png';
import missile1 from './assets/img/missile1.png';
import crash from './assets/img/crash.png';
import life from './assets/img/life.png';

class FallDown extends Phaser.Scene {
    constructor() {
        super('FallDown');
    }
    preload() {
        this.load.image('back', back);
        this.load.image('missile0', missile0);
        this.load.image('missile1', missile1);
        this.load.spritesheet('crash', crash, {
            frameWidth: 199,
            frameHeight: 200
        });

        this.load.spritesheet('life', life, {
            frameWidth: 50,
            frameHeight: 50
        });
    }

    create() {
        this.add.sprite(gameWidth / 2, gameHeight / 2, 'back');
        this.launchMissile();
        this.life1 = this.add.sprite(50, 30, 'life');
        this.life2 = this.add.sprite(100, 30, 'life');
        this.life3 = this.add.sprite(150, 30, 'life');
        this.anims.create({
            key: 'crashAnim',
            frames: this.anims.generateFrameNumbers('crash', { start: 0, end: 4 }),
            frameRate: 7
        });

        this.lifeCounter = 3;

        this.physics.world.on('worldbounds', (body, up, down, left, right) => {
            if (down) {
                body.gameObject.disableBody();
                body.gameObject.play("crashAnim");
                --this.lifeCounter;
                if (this.lifeCounter == 2) {
                    this.life3.setFrame(1);
                } else if (this.lifeCounter == 1) {
                    this.life2.setFrame(1);
                } else if (this.lifeCounter == 0) {
                    this.life1.setFrame(1);
                    this.scene.start('Lose');
                }
            }
        });

    }

    launchMissile() {
        const missilePosition = Math.floor(Math.random() * (gameWidth - 100)) + 50;
        const random = Math.floor(Math.random() * 2);
        const missile = this.physics.add.sprite(missilePosition, -100, `missile${random}`);
        missile.setVelocity(0, 100);
        missile.setInteractive();
        this.time.delayedCall(1000, this.launchMissile, [], this);
        missile.on('pointerdown', () => this.clickedMissile(missile));
        missile.on('animationcomplete', this.animationComplete, this);
        missile.setCollideWorldBounds(true);
        missile.body.onWorldBounds = true;
        missile.body.gravity.y = 300;

    }
    update() {
        console.log('update');
    }
    clickedMissile(m) {
        m.play("crashAnim");
    }

    animationComplete(animation, frame, sprite) {
        if (animation.key === 'crashAnim') {
            sprite.destroy();
        }
    }
}

export default FallDown;