import player from './assets/img/player.png';
import arrow from './assets/img/arrow.png';
import { gameHeight } from '../../../../consts';

class Player extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y) {
        super(scene, x, y, 'player');
        scene.add.existing(this);
        scene.physics.add.existing(this);
        this.body.gravity.y = 700;
        this.setSize(90, 180, true);
        this.cursors = this.scene.input.keyboard.createCursorKeys();
        this.createAnimations();
        this.play('idle', true);
        this.onGround = false;
        this.visualControls(scene);

        this.isAlive = true;
        this.on('animationcomplete', this.animationComplete, this);
        this.anims.create({
            key: 'crashAnim',
            frames: this.anims.generateFrameNumbers('crash', { start: 0, end: 4 }),
            frameRate: 7
        });
        this.setCollideWorldBounds(true);
        this.body.onWorldBounds = true;
    }

    createAnimations() {
        this.anims.create({
            key: 'walk',
            frames: this.anims.generateFrameNumbers('player', { start: 2, end: 5 }),
            frameRate: 10,
            repeat: -1,
        });

        this.anims.create({
            key: 'idle',
            frames: this.anims.generateFrameNumbers('player', { start: 0, end: 1 }),
            frameRate: 4,
            repeat: -1,
        });

        this.anims.create({
            key: 'fall',
            frames: this.anims.generateFrameNumbers('player', { start: 6, end: 7 }),
            frameRate: 7,
            repeat: -1,
        });
    }

    static loadAssets(scene) {
        scene.load.spritesheet('player', player, { frameWidth: 180, frameHeight: 180 });
        scene.load.image('arrow', arrow);
    }

    update() {
        if (this.isAlive) {
            if (!this.isDazing) {
                this.onGround = this.body.onFloor();
                if (this.cursors.left.isDown || this.getData('horizontalDirection') === Phaser.LEFT) {
                    this.leftWalk()
                } else if (this.cursors.right.isDown || this.getData('horizontalDirection') === Phaser.RIGHT) {
                    this.rightWalk();
                } else {
                    this.idle();
                }

                if (this.cursors.up.isDown || this.getData('isJumping') === Phaser.UP) {
                    this.jump();
                }
            }
        }
    }

    leftWalk() {
        this.body.setVelocityX(-250);
        this.flipX = true;
        if (this.onGround) this.play('walk', true);
    }

    rightWalk() {
        this.body.setVelocityX(250);
        this.flipX = false;
        if (this.onGround) this.play('walk', true);
    }

    idle() {
        this.body.setVelocityX(0);
        if (this.onGround) this.play('idle', true);
    }

    jump() {
        if (this.onGround) {
            this.body.setVelocityY(-500);
            this.play('fall', true);
        }
    }

    visualControls(scene) {
        const leftbtn = scene.add.sprite(50, gameHeight - 30, 'arrow').setInteractive();
        leftbtn.setDepth(200);
        leftbtn.setScrollFactor(0, 0); // este método hará que cuando en los siguientes pasos hagamos que la cámara siga al jugador, el botón de desplazamiento no se desplace. Si no utilizásemos este método, cuando hagamos el pointerup, como este no se hace en la misma posición en la que hicimos el pointerdown, no funcionaría
        const rightbtn = scene.add.sprite(140, gameHeight - 30, 'arrow').setInteractive();
        rightbtn.flipX = true;
        rightbtn.setDepth(200);
        rightbtn.setScrollFactor(0, 0);
        const upbtn = scene.add.sprite(850, gameHeight - 30, 'arrow').setInteractive();
        upbtn.rotation = Math.PI / 2;
        upbtn.setDepth(200);
        upbtn.setScrollFactor(0, 0);


        this.setData('horizontalDirection', 0);
        this.setData('isJumping', false);

        leftbtn.on('pointerdown', () => {
            this.setData('horizontalDirection', Phaser.LEFT);
        });

        rightbtn.on('pointerdown', () => {
            this.setData('horizontalDirection', Phaser.RIGHT);
        });

        upbtn.on('pointerdown', () => {
            this.setData('isJumping', Phaser.UP);
        });

        leftbtn.on('pointerup', () => {
            this.setData('horizontalDirection', Phaser.NONE);
        });

        rightbtn.on('pointerup', () => {
            this.setData('horizontalDirection', Phaser.NONE);
        });

        upbtn.on('pointerup', () => {
            this.setData('isJumping', Phaser.NONE);
        });
    }

    checkEnemy(player, enemy) {
        //  El jugador está cayendo?
        if (this.body.velocity.y > 0) {
            enemy.die();
        } else {
            this.die();
        }
    }
    die() {
        this.isAlive = false;
        this.disableBody();
        //Para que esta animación se ejecute es necesario haber puesto el código que evalúa this.estaVivo en el update, para que no se sigan ejecutando el resto de animaciones y comportamientos
        this.play('crashAnim');
    }

    animationComplete(animation, frame, sprite) {
        if (animation.key === 'crashAnim') {
            this.scene.scene.start('Lose');
        }
    }

    playerHittedByBee() {
        this.isDazing = true;
        this.body.setVelocity(-150, -150);
        this.play('fall', true);
        this.scene.time.addEvent({ delay: 1000, callback: this.dazeFinished, callbackScope: this });
    }

    dazeFinished() {
        this.isDazing = false;
    }
}

export default Player;