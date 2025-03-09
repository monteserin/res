class Escena extends Phaser.Scene {
    constructor() {
        super('Escena');
    }

    preload() {
        resize();
        this.load.image('fondo', 'img/fondo.jpg');
        this.load.spritesheet('bola', 'img/bola.png', {frameWidth: 100, frameHeight: 100});
        this.load.image('mano1', 'img/mano1.png');
        this.load.image('mano2', 'img/mano2.png');
        this.load.image('leftbtn', 'img/flecha.png');
    }

    create() {
                this.input.addPointer();
        this.input.addPointer();
        this.input.addPointer();
        this.add.sprite(480, 320, 'fondo');
       // this.physics.world.setBoundsCollision(true, true, true, true);

       this.anims.create({
        key: 'brillar',
        frames: this.anims.generateFrameNumbers('bola', {start: 0, end: 3}),
        frameRate: 10,
        repeat: -1
    });

       this.mano1 = this.physics.add.image(70, 320, 'mano1');
       this.mano1.body.immovable = true;
       this.mano1.setBounce(10);
       this.mano1.setSize(60, 250);

       this.mano1.setCollideWorldBounds(true);

       this.mano2 = this.physics.add.image(882, 320, 'mano2');
       this.mano2.body.immovable = true;
       this.mano2.setBounce(10);
       this.mano2 = this.mano2.setSize(60, 250);
       this.mano2.setCollideWorldBounds(true);

       this.mano2.setBounce(0.1, 0.1);

       this.colocarPelota();
       this.cursors = this.input.keyboard.createCursorKeys();
       this.controlesVisuales({x: 50, y: 50}, {x: 50, y: 590}, this.mano1);
       this.controlesVisuales({x: 910, y: 50}, {x: 910, y: 590}, this.mano2);

       this.alguienGano = false;

       this.pintarMarcador();
   }

   update() {
    this.bola.rotation += 0.1;

    if (this.bola.x < 0 && this.alguienGano === false) {
        this.alguienGano = true;
        this.marcadorMano2.text = parseInt(this.marcadorMano2.text) + 1;
        this.colocarPelota();
        if(this.marcadorMano2.text > 3){
            this.scene.start('perderScene');
        }
    } else if (this.bola.x > 960 && this.alguienGano === false) {
        this.alguienGano = true;
        this.marcadorMano1.text = parseInt(this.marcadorMano1.text) + 1;
        this.colocarPelota();
        if(this.marcadorMano1.text > 3){
            this.scene.start('perderScene');
        }
    }

    if (this.cursors.up.isDown || this.mano1.getData('direccionVertical') === 1) {
        this.mano1.y = this.mano1.y - 5;
    } else if (this.cursors.down.isDown || this.mano1.getData('direccionVertical') === -1) {
        this.mano1.y = this.mano1.y + 5;
    }

    if (this.cursors.up.isDown || this.mano2.getData('direccionVertical') === 1) {
        this.mano2.y = this.mano2.y - 5;
    } else if (this.cursors.down.isDown || this.mano2.getData('direccionVertical') === -1) {
        this.mano2.y = this.mano2.y + 5;
    }
}

pintarMarcador() {
    this.marcadorMano1 = this.add.text(440, 75, '0', {
        fontFamily: 'font1',
        fontSize: 80,
        color: '#ffffff',
        align: 'right'
    }).setOrigin(1, 0);
    this.marcadorMano2 = this.add.text(520, 75, '0', {fontFamily: 'font1', fontSize: 80, color: '#ffffff'});
}


colocarPelota() {
    const velocidad = 500;

    let anguloInicial = Math.random() * (Math.PI / 4 * 3 - Math.PI / 4) + Math.PI / 4;
    const derechaOIzq = Math.floor(Math.random() * 2);
    if (derechaOIzq === 1) anguloInicial = anguloInicial + Math.PI;

    const vx = Math.sin(anguloInicial) * velocidad;
    const vy = Math.cos(anguloInicial) * velocidad;

    this.bola = this.physics.add.sprite(480, 320, 'bola');
    this.bola.play('brillar', true);

    this.bola.setBounce(1);
    this.physics.world.enable(this.bola);

    this.bola.setCollideWorldBounds(true);
    this.physics.world.setBoundsCollision(false, false, true, true);

    this.bola.body.velocity.x = vx;
    this.bola.body.velocity.y = vy;
    this.physics.add.collider(this.bola, this.mano1);
    this.physics.add.collider(this.bola, this.mano2);
    this.alguienGano = false;

}

controlesVisuales(btn1, btn2, player) {
    player.setData('direccionVertical', 0);

    const upbtn = this.add.sprite(btn1.x, btn1.y, 'leftbtn').setInteractive();
    const downbtn = this.add.sprite(btn2.x, btn2.y, 'leftbtn').setInteractive();

    downbtn.flipY = true;

    downbtn.on('pointerdown', () => {
        player.setData('direccionVertical', -1);
    });

    upbtn.on('pointerdown', () => {
        player.setData('direccionVertical', 1);
    });

    downbtn.on('pointerup', () => {
        player.setData('direccionVertical', 0);
    });

    upbtn.on('pointerup', () => {
        player.setData('direccionVertical', 0);
    });
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
        this.input.on('pointerdown', () => this.volverAJugar())
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
    scene: [Escena,PerderEscena],
    physics: {
        default: 'arcade',
        arcade: {
            debug: false,

        }
    },
}

new Phaser.Game(config);

window.addEventListener( 'keyup', (e) => {
    var keyCode = e.keyCode;
    if(keyCode == 13){
       location.href='../coches-16-con-portada/index.html';
    }
    if(keyCode == 8){
        location.href = '../flappy-bird-15-detectar-cuando-el-player-sale-de-la-pantalla/index.html'
     }
});