class Escena extends Phaser.Scene {
    constructor(){
        super('Escena');
    }
    preload() {
        resize();
        window.addEventListener('resize', resize, false);
        this.load.image('fondo', 'img/espacio.jpg');
        this.load.spritesheet('heroe', 'img/heroe.png', {
            frameWidth: 50,
            frameHeight: 50
        });
        this.load.image('pipe0', 'img/pipe0.png');
        this.load.image('pipeAbajo0', 'img/pipeAbajo0.png');
        this.load.image('pipeArriba0', 'img/pipeArriba0.png');

        this.load.image('pipe1', 'img/pipe1.png');
        this.load.image('pipeAbajo1', 'img/pipeAbajo1.png');
        this.load.image('pipeArriba1', 'img/pipeArriba1.png');
        this.load.audio('jump', 'audio/jump.mp3');
    }

    create() {
        this.bg = this.add.tileSprite(480, 320, 960, 640, 'fondo').setScrollFactor(0);
        this.player = this.physics.add.sprite(50, 200, 'heroe');

        this.anims.create({
            key: 'volar',
            frames: this.anims.generateFrameNumbers('heroe', {start: 0, end: 2}),
            frameRate: 7,
            repeat: -1,
        });
        this.player.anims.play('volar', true);

        this.input.keyboard.on('keydown', function (event) {
            if (event.keyCode === 32) {
                this.scene.saltar();
            }
        });

        this.input.on('pointerdown', () => this.saltar());

        this.time.delayedCall(1000, this.nuevaColumna, [], this);
        this.player.on('animationcomplete', this.animationComplete, this);

        this.physics.world.setBoundsCollision(true);

        this.physics.world.on('worldbounds', (body) => {
            this.scene.start('perderScene');
        });

        this.player.setCollideWorldBounds(true);
        this.player.body.onWorldBounds = true;
        this.jump = this.sound.add('jump');
    };

    saltar() {
        this.jump.play({volume:1});
        this.player.setVelocityY(-300);
        this.player.play('saltar');
    }

    animationComplete(animation, frame, sprite) {
        if (animation.key === 'saltar') {
            this.player.play('volar');
        }
    }

    nuevaColumna() {
        console.log('nueva columna');
        const columna = this.physics.add.group();

        const hueco = Math.floor(Math.random() * 5) + 1;

        const aleatorio = Math.floor(Math.random() * 2);

        for (let i = 0; i < 8; i++) {

            //El agujero son cuatro casillas
            if (i !== hueco && i !== hueco + 1 && i !== hueco - 1) {
                let cubo;
                if (i == hueco - 2) {
                    cubo = columna.create(960, i * 100, `pipeArriba${aleatorio}`);
                } else if (i == hueco + 2) {
                    cubo = columna.create(960, i * 100, `pipeAbajo${aleatorio}`);
                } else {
                    cubo = columna.create(960, i * 100, `pipe${aleatorio}`);
                }
                cubo.body.allowGravity = false;
            }
        }
        columna.setVelocityX(-200);
        columna.checkWorldBounds = true;
        columna.outOfBoundsKill = true;
        this.time.delayedCall(1500, this.nuevaColumna, [], this);
        this.physics.add.overlap(this.player, columna, this.hitColumna, null, this);
    }

    hitColumna() {
        this.scene.start('perderScene');
    }

    update(time){
        this.bg.tilePositionX = time*0.1;
    }
}

class PerderEscena extends Phaser.Scene {
    constructor() {
        super({key: 'perderScene'});
    }

    preload() {
        this.load.image('perder', '../img/perder-juego.jpg');
        this.load.audio('muerte', 'audio/he-muerto.mp3');
    }

    create() {
        this.add.image(480, 320, 'perder');

        this.input.keyboard.on('keydown', function (event) {
            if (event.keyCode === 32) {
                this.scene.volverAJugar();
            }
        });

        const pantalla = this.add.zone(0, 0, 960, 640);
        pantalla.setInteractive();
        pantalla.setOrigin(0);
        pantalla.on('pointerdown', () => this.volverAJugar());
        const muerte = this.sound.add('muerte');
        muerte.play({volume:1});
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
            gravity: {y: 500}
        },
    },
};

new Phaser.Game(config);

window.addEventListener( 'keyup', (e) => {
    var keyCode = e.keyCode;
    if(keyCode == 13){
       location.href = '../pong-20-limitar-area-juego/index.html';
    }
    if(keyCode == 8){
        location.href = '../galeria-tiro/index.html'
     }
});