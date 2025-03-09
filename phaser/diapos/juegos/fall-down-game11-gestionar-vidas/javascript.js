class Escena extends Phaser.Scene {
    constructor() {
        super('Escena');
    }
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
        this.load.audio('sonidoExplosion', 'audio/explosion.mp3');
        this.load.audio('sonidoBoom', 'audio/boom.mp3');
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

        this.physics.world.on('worldbounds', (target) => {
            this.sonidoBoom.play({volume:1});

target.enable = false;

            target.gameObject.play("explosionAnim");
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
            this.sonidoExplosion = this.sound.add('sonidoExplosion');
                this.sonidoBoom = this.sound.add('sonidoBoom');
    }

    lanzarMisil() {
        const aleatorio = Math.floor(Math.random() * 2);
        const posicionMisil = Math.floor(Math.random() * 550)+100;
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
        this.sonidoExplosion.play({volume:1});
        m.play("explosionAnim");
    }

    animationComplete(animation, frame, sprite) {
        if (animation.key === 'explosionAnim') {
            console.log(this)
            sprite.disableBody(true, true);
            sprite.destroy();
        }
    }
}


class PerderEscena extends Phaser.Scene {
    constructor() {
        super('perderScene');
    }

    preload() {
        this.load.image('fin', '../img/perder-juego.jpg');
        this.load.audio('muerte', 'audio/he-muerto.mp3');
    }

    create() {
        this.add.image(480, 320, 'fin');

        this.input.keyboard.on('keydown', function (event) {
            if (event.keyCode === 32) {
                this.scene.volverAJugar();
            }
        });

        this.input.on('pointerdown', () => this.volverAJugar());
        const sonidoMuerte = this.sound.add('muerte');
        sonidoMuerte.play({volume:1})
    }

    volverAJugar() {
        this.scene.start('Escena');
    }
}

function resize() {
    const canvas = document.querySelector("canvas");
    const windowWidth = window.innerWidth;
    const windowHeight = window.innerHeight;
  
    const windowRatio = windowWidth / windowHeight;
    const gameRatio = config.width / config.height;
    if (windowRatio < gameRatio) {
      canvas.style.width = `${windowWidth}px`;
      canvas.style.height = `${windowWidth / gameRatio}px`;
    } else {
      canvas.style.width = `${windowHeight * gameRatio}px`;
      canvas.style.height = `${windowHeight}px`;
    }
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

window.addEventListener( 'keyup', (e) => {
    var keyCode = e.keyCode;
    if(keyCode == 13){
       location.href='../galeria-tiro/index.html';
    }
    if(keyCode == 8){
        location.href = '../acierta-imagen-10-perder-escena/index.html'
     }
});