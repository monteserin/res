class Escena extends Phaser.Scene {
    constructor() {
        super({key: 'sceneA'});
    }

    preload() {
        resize();
        window.addEventListener('resize', resize);
        this.load.image('fondo', '../img/phaser.png');
        this.load.image('rdavey', '../img/richard-davey.png');
        this.load.image('mar1', '../img/mar1.jpg');
        this.load.image('mar2', '../img/mar2.jpg');
        this.load.image('mar3', '../img/mar3.jpg');
        this.load.image('mar4', '../img/mar4.jpg');


    }

    create() {
        this.diapo = 0;
        this.add.sprite(480, 320, 'fondo');
        this.rdavey = this.add.sprite(-480, 320, 'rdavey');
        this.mar1 = this.add.sprite(-480, 0, 'mar1');
        this.mar2 = this.add.sprite(-480, 700, 'mar2');
        this.mar3 = this.add.sprite(1360, 0, 'mar3');
        this.mar4 = this.add.sprite(1360, 700, 'mar4');

        

        


        window.addEventListener( 'keyup', (e) => {
            var keyCode = e.keyCode;
            if(keyCode == 13){
               this.diapo++;
            }
        });
    }

    update(){
        if (this.diapo == 1) {
            desplazarObjeto(this.rdavey, { x: 480 });
        }else if (this.diapo == 2) {
            desplazarObjeto(this.mar1, { x: 240, y: 200});
            desplazarObjeto(this.mar2, { x: 240, y: 500});
            desplazarObjeto(this.mar3, { x: 700, y: 200 });
            desplazarObjeto(this.mar4, { x: 700, y: 500 });

        }
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