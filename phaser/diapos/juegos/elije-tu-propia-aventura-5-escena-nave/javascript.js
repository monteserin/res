class EscenaEspacio extends Phaser.Scene {
    constructor() {
        super({key: 'sceneA'});
    }

    preload() {
        resize();
        window.addEventListener('resize', resize);
        this.load.image('fondo', 'img/espacio.jpg');
    }

    create() {
        this.add.sprite(480, 320, 'fondo');

        const opcionNave = this.add.zone(140, 10, 440, 400);
        opcionNave.setOrigin(0);
        opcionNave.setName('nave');
        opcionNave.setInteractive();
        opcionNave.once('pointerdown', () => this.opcionPulsada(opcionNave));
        //this.add.graphics().lineStyle(2, 0xff0000).strokeRectShape(opcionNave);

        const opcionMundo = this.add.zone(590, 240, 370, 410);
        opcionMundo.setOrigin(0);
        opcionMundo.setName('tierra');
        opcionMundo.setInteractive();
        opcionMundo.once('pointerdown', () => this.opcionPulsada(opcionMundo));

           }

    opcionPulsada(opcion) {
        console.log("Opción:" + opcion.name)
        if (opcion.name === 'nave') {
            this.scene.start('naveScene');
        } else {
            this.scene.start('homeScene');
        }
    }
}

class EscenaNave extends Phaser.Scene {

    constructor() {
        super({key: 'naveScene'});
    }

    preload() {
        this.load.image('nave', 'img/nave.jpg');
    }

    create() {
        this.add.sprite(480, 320, 'nave');

        const opcionNave = this.add.zone(150, 170, 250, 370);
        opcionNave.setOrigin(0);
        opcionNave.setName('boss');
        opcionNave.setInteractive();
        opcionNave.once('pointerdown', () => this.opcionPulsada(opcionNave));
      //  this.add.graphics().lineStyle(2, 0xff0000).strokeRectShape(opcionNave);

        const opcionMundo = this.add.zone(530, 170, 250, 370);
        opcionMundo.setOrigin(0);
        opcionMundo.setName('home');
        opcionMundo.setInteractive();
        opcionMundo.once('pointerdown', () => this.opcionPulsada(opcionMundo));
      //  this.add.graphics().lineStyle(2, 0x00ff00).strokeRectShape(opcionMundo);
    }

    opcionPulsada(opcion) {
        if (opcion.name === 'boss') {
            this.scene.start('monstruoScene');
        } else {
            this.scene.start('homeScene');
        }
    }
}

class EscenaHome extends Phaser.Scene {

    constructor() {
        super({key: 'homeScene'});
    }

    preload() {
        this.load.image('home', 'img/home.jpg');
        this.load.audio('ganar', 'audio/hogar-dulce-hogar.mp3');
    }

    create() {
        this.add.sprite(480, 320, 'home');
        this.input.on('pointerdown', () => this.irAHome());
        const sonidoGanar = this.sound.add('ganar');
        sonidoGanar.play({volume:1})
    }
    irAHome(){
        this.scene.start('sceneA');

    }
}

class EscenaMonstruo extends Phaser.Scene {

    constructor() {
        super({key: 'monstruoScene'});
    }

    preload() {
        this.load.image('monstruo', 'img/monstruo.jpg');
        this.load.audio('muerte', 'audio/he-muerto.mp3');
    }

    create() {
        this.add.sprite(480, 320, 'monstruo');
        this.input.on('pointerdown', () => this.irAHome())

        const sonidoMuerte = this.sound.add('muerte');
        sonidoMuerte.play({volume:1})
    }
    irAHome(){
        this.scene.start('sceneA');
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
    type: Phaser.CANVAS,
    parent: 'phaser-example',
    width: 960,
    height: 640,
    scene: [EscenaEspacio, EscenaNave, EscenaHome, EscenaMonstruo],
};

new Phaser.Game(config);

window.addEventListener( 'keyup', (e) => {
    var keyCode = e.keyCode;
    if(keyCode == 13){
       location.href = '../acierta-imagen-10-perder-escena/index.html'
    }
    if(keyCode == 8){
        location.href = '../../index.html'
     }
}); 