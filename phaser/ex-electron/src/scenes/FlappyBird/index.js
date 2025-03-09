import { gameHeight, gameWidth } from '../../consts';
import back from './assets/img/back.jpg';
import hero from './assets/img/hero.png';
import pipe0 from './assets/img/pipe0.png';
import pipeUp0 from './assets/img/pipeUp0.png';
import pipeDown0 from './assets/img/pipeDown0.png';
import pipe1 from './assets/img/pipe1.png';
import pipeUp1 from './assets/img/pipeUp1.png';
import pipeDown1 from './assets/img/pipeDown1.png';

class Init extends Phaser.Scene {
    constructor() {
        super('FlappyBird');
    }
    preload() {
        this.load.image('back', back);
        this.load.spritesheet('hero', hero, { frameWidth: 50, frameHeight: 50 });
        this.load.image('pipe0', pipe0);
        this.load.image('pipeUp0', pipeUp0);
        this.load.image('pipeDown0', pipeDown0);
        this.load.image('pipe1', pipe1);
        this.load.image('pipeUp1', pipeUp1);
        this.load.image('pipeDown1', pipeDown1);
    }

    create() {
        this.bg = this.add.tileSprite(gameWidth / 2, gameHeight / 2, gameWidth, gameHeight, 'back').setScrollFactor(0);
        this.player = this.physics.add.sprite(50, 100, 'hero');

        this.anims.create({
            key: 'fly',
            frames: this.anims.generateFrameNumbers('hero', { start: 0, end: 1 }),
            frameRate: 10,
            repeat: -1,
        });

        this.anims.create({
            key: 'jump',
            frames: this.anims.generateFrameNumbers('hero', { start: 2, end: 2 }),
            frameRate: 7,
            repeat: 1,
        });

        this.player.play('fly');


        this.input.keyboard.on('keydown', (event) => {
            if (event.keyCode === 32) {
                this.jump();
            }
        });

        this.input.on('pointerdown', () => this.jump());

        this.player.on('animationcomplete', this.animationComplete, this);

        this.newPipe();

        this.physics.world.on('worldbounds', (body) => {
            this.scene.start('Lose');
        });

        this.player.setCollideWorldBounds(true);
        this.player.body.onWorldBounds = true;

        this.player.body.gravity.y = 300;
    }

    update(time) {
        this.bg.tilePositionX = time * 0.1;
    }

    jump() {
        this.player.setVelocityY(-200);
        this.player.play('jump');
    }

    animationComplete(animation, frame, sprite) {
        if (animation.key === 'jump') {
            this.player.play('fly');
        }
    }

    newPipe() {
        //Una tubería un grupo de cubos
        const pipe = this.physics.add.group();
        //Cada tubería tendrá un hueco (zona en la que no hay cubos) por dónde pasará el super héroe
        const gap = Math.floor(Math.random() * 5) + 1;
        const random = Math.floor(Math.random() * 2);
        for (let i = 0; i < 8; i++) {
            //El agujero son cuatro casillas
            if (i !== gap && i !== gap + 1 && i !== gap - 1) {
                let cube;
                if (i == gap - 2) {
                    cube = pipe.create(960, i * 100, `pipeUp${random}`);
                } else if (i == gap + 2) {
                    cube = pipe.create(960, i * 100, `pipeDown${random}`);
                } else {
                    cube = pipe.create(960, i * 100, `pipe${random}`);
                }
                cube.body.allowGravity = false;
            }
        }
        pipe.setVelocityX(-200);
        //Detectaremos cuando las columnas salen de la pantalla...
        pipe.checkWorldBounds = true;
        //... y con la siguiente línea las eliminaremos
        pipe.outOfBoundsKill = true;
        this.physics.add.overlap(this.player, pipe, this.hitPipe, null, this);

        //Cada 1000 milisegundos llamaremos de nuevo a esta función para que genere una nueva columna
        this.time.delayedCall(1000, this.newPipe, [], this);
    }


    hitPipe() {
        this.scene.start('Lose');
    }
}

export default Init;