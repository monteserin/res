class Escena extends Phaser.Scene {

    preload() {
        resize();
        window.addEventListener('resize', resize);
        this.load.image('fondo', 'img/fondo.jpg');
        this.load.image('misil0', 'img/misil0.png');
        this.load.image('misil1', 'img/misil1.png');
        this.load.spritesheet('explosion', 'img/crash.png', {
            frameWidth: 199,
            frameHeight: 200
        });
        this.load.spritesheet('vida', 'img/vida.png', {
            frameWidth: 50,
            frameHeight: 50
        });
    }

    create() {
        this.add.sprite(480, 320, 'fondo');
        this.vida1 = this.add.sprite(50, 30, 'vida');
        this.vida2 = this.add.sprite(100, 30, 'vida');
        this.vida3 = this.add.sprite(150, 30, 'vida');
        this.contadorVidas = 3;

        this.time.delayedCall(0, this.onEvent, [], this);

        this.physics.world.setBoundsCollision(true, true, true, true);

        this.anims.create({
            key: 'explosionAnim',
            frames: this.anims.generateFrameNumbers('explosion', {start: 0, end: 4}),
            frameRate: 7
        });
        this.anims.create({
            key: 'sinVida',
            frames: this.anims.generateFrameNumbers('vida', {start: 1, end: 2}),
            frameRate: 1
        });
        this.lanzarMisil();

        this.physics.world.on('worldbounds', (body) => {
            body.destroy();
            --this.contadorVidas;
            if (this.contadorVidas == 2) {
                this.vida3.play("sinVida");
            }
            if (this.contadorVidas == 1) {
                this.vida2.play("sinVida");
            }
            if (this.contadorVidas == 0) {
                this.vida1.play("sinVida");
                this.scene.start('perderScene');
            }
        });

    }

    lanzarMisil() {
        const aleatorio = Math.floor(Math.random() * 2);
        const posicionMisil = Math.floor(Math.random() * 590);
        const misil = this.physics.add.sprite(posicionMisil, 100, `misil${aleatorio}`).setInteractive();
        misil.setVelocity(0, 200);
        misil.setCollideWorldBounds(true);
        misil.body.onWorldBounds = true;
        misil.setBounce(0.1, 0.1);

        misil.on('pointerdown', () => this.misilPulsado(misil));
                misil.on('animationcomplete', this.animationComplete, this);

        this.time.delayedCall(1000, this.lanzarMisil, [], this);
    }

    misilPulsado(m) {
        m.disableBody();
        m.play("explosionAnim");
    }

    animationComplete(animation, frame, sprite) {
        if (animation.key === 'explosionAnim') {
            this.disableBody(true, true);
        }
    }
}


class PerderEscena extends Phaser.Scene {
    constructor() {
        super('perderScene');
    }

    preload() {
        this.load.image('fin', '../img/perder-juego.jpg');
    }

    create() {
        this.add.image(480, 320, 'fin');

        this.input.keyboard.on('keydown', function (event) {
            if (event.keyCode === 32) {
                this.scene.volverAJugar();
            }
        });

        this.input.on('pointerdown', () => this.volverAJugar())

    }

    volverAJugar() {
        location.href = '../index.html';
    }
}

function resize() {
  const canvas = document.querySelector("canvas");
  const windowWidth = window.innerWidth;
  const windowHeight = window.innerHeight;

  canvas.style.width = `${windowWidth}px`;
  canvas.style.height = `${windowHeight}px`;

}

const config = {
    type: Phaser.AUTO,
    width: 960,
    height: 640,
    scene: [Escena, PerderEscena],
    physics: {
        default: 'arcade',
        arcade: {
            gravity: {y: 200},
        },
    },
};

new Phaser.Game(config);