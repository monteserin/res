class Escena extends Phaser.Scene {
    constructor() {
        super('Escena');
    }

    preload() {
        resize();
        this.load.image('fondo', 'img/fondo-infinito.jpg');
        this.load.image('serpiente', './img/meta.png');
        this.load.image('gameTiles', 'img/tiles.png');
        this.load.image('pablomonteserin', 'img/pablomonteserin.png');

        //frameWidth y frameHeight son los tamaños de cada uno de los frames de la animación
        this.load.spritesheet('player', 'img/player.png', { frameWidth: 180, frameHeight: 180 });
        this.load.spritesheet('oruga', 'img/oruga.png', {
            frameWidth: 96,
            frameHeight: 192
        });
        this.load.spritesheet('hormiga', 'img/hormiga.png', {
            frameWidth: 192, frameHeight: 96
        });
        this.load.spritesheet('avispa', 'img/avispa.png', {
            frameWidth: 128,
            frameHeight: 128
        });
        this.load.tilemapTiledJSON('level1', 'img/map.json');
        this.load.image('flecha', 'img/flecha.png');
        this.load.spritesheet('explosion', 'img/crash.png', {
            frameWidth: 199,
            frameHeight: 200
        });
    }

    create() {
        this.diapo = 0;
        this.btnPulsado = false;
        this.bg = this.add.tileSprite(480, 320, 960, 640, 'fondo').setScrollFactor(0);

        this.serpiente = new Serpiente(this, -150,355).setDepth(50);
        const txtSmall = {
            fontFamily: 'font1',
            fontSize: 40,
            color: 'rgb(255, 195, 0)',
            align: 'left',
            stroke: 'black',
            strokeThickness: 2
        }

        const txtVerySmallBlack = {
            fontFamily: 'font1',
            fontSize: 20,
            color: 'black',
            align: 'left',
            stroke: 'rgb(255, 195, 0)',
            strokeThickness: 2

        }
        const txtVerySmallYellow = {
            fontFamily: 'font1',
            fontSize: 20,
            color: 'rgb(255, 195, 0)',
            align: 'left',
            stroke: 'black',
            strokeThickness: 2

        }

        

        this.pablomonteserinLogo = this.add.sprite(950, 400, 'pablomonteserin').setDepth(2);
        this.pablomonteserinText1 = this.add.text(230, 20, "Presentación del libro:", {
            fontFamily: 'font1',
            fontSize: 40,
            color: 'black',
            align: 'left',
            stroke: 'rgb(255, 195, 0)',
            strokeThickness: 2
        });

        this.pablomonteserinText2 = this.add.text(230, 100, "Aprender desarrollo de \n videojuegos para\n móviles y web \ncon Phaser.js", txtSmall).setDepth(2);

        this.pablomonteserinText4 = this.add.text(230, 450, "Autor:", txtVerySmallBlack).setDepth(2);
        this.pablomonteserinText5 = this.add.text(230, 500, "Página web:", txtVerySmallBlack).setDepth(2);
        this.pablomonteserinText6 = this.add.text(450, 450, "Pablo Monteserín ", txtVerySmallYellow).setDepth(2);
        this.pablomonteserinText7 = this.add.text(450, 500, "pablomonteserin.com", txtVerySmallYellow).setDepth(2);
        this.cargarFondo();
        this.animacionesDeLaEscena();
        const playersFromTiled = findObjectsByType('player', this.map);
        this.player = new Player(this, playersFromTiled[0].x, playersFromTiled[0].y);
        this.oruga = new Oruguita(this, 150, 300);
        this.avispa = new Avispita(this,100, 300).setDepth(2);

        this.texto1FromTiled = findObjectsByType('texto1', this.map);

        this.comoEmpezoTodo = this.add.text(250, -100, "¿Cómo empezó todo? ", {
            fontFamily: 'font1',
            fontSize: 50,
            color: 'rgb(255, 195, 0)',
            align: 'right',
            stroke: 'black',
            strokeThickness: 2
        }).setDepth(2);

        this.meGustanLosVideojuegos = this.add.text(300, -100, "Me gustan los videojuegos ", txtSmall).setDepth(2);

        this.usoLinux = this.add.text(300, -100, "Usaba Linux ", txtSmall).setDepth(2);

        this.soyProfesor = this.add.text(300, -100, "Soy profesor", txtSmall).setDepth(2);

        this.yEntoncesAparecioPablo = this.add.text(260, -100, "Y entonces apareció Pablo ", txtSmall).setDepth(49);
        this.yEntoncesAparecioWahab = this.add.text(260, -100, "Y entonces apareció Wahab", txtSmall).setDepth(100);
        this.yComenzoLaAventura = this.add.text(260, -100, "Y comenzó la aventura", txtSmall).setDepth(100);
        /*
                const hormigas = this.insertarMalos(hormigasFromTiled, HormigaEnemy, this);
                const orugas = this.insertarMalos(orugasFromTiled, OrugaEnemy, this);
                const avispas = this.insertarMalos(avispasFromTiled, AvispaEnemy, this);
        */

        this.physics.add.collider(this.player, this.collisionLayer);
        this.physics.add.collider(this.serpiente, this.collisionLayer);
        this.physics.add.collider(this.oruga, this.collisionLayer);

        /* this.physics.add.overlap(this.player, hormigas, this.player.checkEnemy, null, this.player);
         this.physics.add.overlap(this.player, orugas, this.player.checkEnemy, null, this.player);
         this.physics.add.overlap(this.player, this.meta, this.playerAlcanzaMeta, null, this);
 */
        this.cursors = this.input.keyboard.createCursorKeys();
        console.log(this.cursors)
        this.cameras.main.setSize(960, 640);
        this.cameras.main.setBounds(200, 0, 100000, 640);
        this.physics.world.setBoundsCollision(false, false, false, true);
        this.physics.world.on('worldbounds', () => {
            this.scene.start('perderScene');
        });
        this.pathSpeed = 0.005;
        this.colorBlanco = new Phaser.Display.Color(255, 255, 255);
        this.fondoBlanco = this.add.rectangle(680, 320, 960, 640, this.colorBlanco.color).setDepth(0);

        window.addEventListener( 'keyup', (e) => {
            var keyCode = e.keyCode;
            if(keyCode == 13){
               this.diapo++;
            }
        });
    }

    cargarFondo() {
        this.map = this.add.tilemap('level1');
        const tileset = this.map.addTilesetImage('tiles', 'gameTiles');
        //      this.bgLayer = this.map.createStaticLayer('backgroundLayer', tileset);
        /* 
        To change the transparency, this is not working
      this.bgLayer.setAlpha(0);
      this.bgLayer.alpha = 0;
      this.hierbaLayer.setAlpha(0);
      console.log(this.bgLayer)
           
              map.layers[0].alpha = 0;
              map.layers[1].alpha = 0;
              map.layers[2].alpha = 0;
      
              map.layers[0].opacity = 0;
              map.layers[1].opacity = 0;
              map.layers[2].opacity = 0;
      
              map.layers[0].visible = false;
              map.layers[1].visible = false;
              map.layers[2].visible = false;
      */
     this.hierbaLayer = this.map.createStaticLayer('hierbaLayer', tileset).setDepth(100);
        this.collisionLayer = this.map.createStaticLayer('collisionLayer', tileset).setDepth(3);
        this.collisionLayer.setCollisionByExclusion([-1]);
    }
    playerAlcanzaMeta() {
        this.scene.start('finScene');
    }

    animacionesDeLaEscena() {
        this.anims.create({
            key: 'andar',
            frames: this.anims.generateFrameNumbers('player', { start: 1, end: 3 }),
            frameRate: 10,
            repeat: -1,
        });
        this.anims.create({
            key: 'reposo',
            frames: this.anims.generateFrameNumbers('player', { start: 0, end: 1 }),
            frameRate: 4,
            repeat: -1,
        });
        this.anims.create({
            key: 'caer',
            frames: this.anims.generateFrameNumbers('player', { start: 6, end: 8 }),
            frameRate: 7,
            repeat: -1,
        });
        this.anims.create({
            key: 'hormigaLeft',
            frames: this.anims.generateFrameNumbers('hormiga', { start: 0, end: 3 }),
            frameRate: 7,
            repeat: -1,
        });
        this.anims.create({
            key: 'explosionAnim',
            frames: this.anims.generateFrameNumbers('explosion', { start: 0, end: 4 }),
            frameRate: 7
        });
        this.anims.create({
            key: 'orugaLeft',
            frames: this.anims.generateFrameNumbers('oruga', { start: 0, end: 3 }),
            frameRate: 7,
            repeat: -1,
        });
        this.anims.create({
            key: 'avispaLeft',
            frames: this.anims.generateFrameNumbers('avispa', { start: 0, end: 2 }),
            frameRate: 10,
            repeat: -1,
        });
        this.anims.create({
            key: 'avispaAttack',
            frames: this.anims.generateFrameNumbers('avispa', { frames: [3, 4, 5, 4, 3] }),
            frameRate: 10
        });
    }


    insertarMalos(arrayDeMalos, type, scene) {
        const enemies = scene.physics.add.group({ classType: type, runChildUpdate: true, runChildCreate: true });
        for (let i = 0; i < arrayDeMalos.length; i++) {
            const malo = new type(arrayDeMalos[i].x, arrayDeMalos[i].y, scene);
            enemies.add(malo);
        }
        return enemies;
    }

    update(time, delta) {

        this.cameras.main.scrollX = this.player.x - 400;
        this.cameras.main.scrollY = 0;

        if (this.diapo == 1) {
            desplazarObjeto(this.pablomonteserinText1, { y: -500 });
            desplazarObjeto(this.pablomonteserinText2, { y: -500 });

            desplazarObjeto(this.comoEmpezoTodo, { y: 35 });
            desplazarObjeto(this.pablomonteserinLogo, { y: 500 });

            desplazarObjeto(this.pablomonteserinText4, { x: -150 });
            desplazarObjeto(this.pablomonteserinText5, { x: -150 });
            desplazarObjeto(this.pablomonteserinText6, { y: 1000 });
            desplazarObjeto(this.pablomonteserinText7, { y: 1000 });

            // if (this.player.x < 2560) this.bg.tilePositionX = this.player.x;
        } else if (this.diapo == 2) {
            desplazarObjeto(this.meGustanLosVideojuegos, { y: 160 });

        } else if (this.diapo == 3) {
            desplazarObjeto(this.usoLinux, { y: 260 });

        } else if (this.diapo == 4) {
            desplazarObjeto(this.soyProfesor, { y: 360 });

        } else if (this.diapo == 5) {
            this.soyProfesor.configuracionInicial = undefined;
            this.usoLinux.configuracionInicial = undefined;
            this.meGustanLosVideojuegos.configuracionInicial = undefined;
            this.comoEmpezoTodo.configuracionInicial = undefined;

            desplazarObjeto(this.soyProfesor, { y: 7000 });
            desplazarObjeto(this.usoLinux, { y: -7000 });
            desplazarObjeto(this.meGustanLosVideojuegos, { y: -6000 });
            desplazarObjeto(this.comoEmpezoTodo, { y: -1500 });

            desplazarObjeto(this.yEntoncesAparecioPablo, { y: 250 });
        } else if (this.diapo == 6) {

            this.oruga.caminarALaIzquierda();

            this.serpiente.caminarALaDerecha();
            if (this.serpiente.x > 250) {
                this.serpiente.parar();
                this.diapo++;
            }
        } else if (this.diapo == 7) {
            this.player.reposo();

        } else if (this.diapo == 8) {
            this.yEntoncesAparecioPablo.configuracionInicial = undefined;
            desplazarObjeto(this.yEntoncesAparecioPablo, { y: 2500 });
            desplazarObjeto(this.yEntoncesAparecioWahab, { y: 200 });

            if(this.miDelta == undefined){
                this.miDelta = -delta;
            }
            if(this.miDelta <= 600){
                this.miDelta = this.miDelta + delta;
            }
            this.avispa.update(this.miDelta);
        } else if (this.diapo == 9) {
            this.yEntoncesAparecioWahab.configuracionInicial = undefined;
            desplazarObjeto(this.yEntoncesAparecioWahab, { y: 2500 });
            desplazarObjeto(this.yComenzoLaAventura, { y: 200 });
            this.avispa.update(this.miDelta);
            console.log(this.player.x)
            if(this.player.x < 550){
                this.player.caminarALaDerecha();
            }else{
                this.player.reposo();
            }
        } else if (this.diapo == 10) {
            desplazarObjeto(this.yComenzoLaAventura, { y: 2000 });
            this.player.caminarALaDerecha();
                this.serpiente.caminarALaDerecha();
                this.avispa.update(this.player.x-100);
        } else if (this.diapo == 11) {
            location.href = './juegos/elije-tu-propia-aventura-5-escena-nave';
        } else if (this.diapo == 12) {

        }
        /*
                if (this.cursors.left.isDown) {
                    this.player.caminarALaIzquierda();
                } else if (this.cursors.right.isDown) {
                    this.player.caminarALaDerecha();
                } else {
                }*/

        if (this.cursors.up.isDown) {
            this.player.saltar();
        }
        this.player.update();


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
    scene: [Escena],
    physics: {
        default: 'arcade',
        arcade: {
            debug: false,
            gravity: { y: 200 }
        }
    }
};

new Phaser.Game(config);
window.addEventListener('resize', resize, false);