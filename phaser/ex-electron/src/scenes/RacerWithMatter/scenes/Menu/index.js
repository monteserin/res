import portada from './assets/img/portada.jpg';
import players2 from './assets/img/2.png';
import players3 from './assets/img/3.png';
import players4 from './assets/img/4.png';
import musica from './assets/Loyalty_Freak_Music_-_13_-_Ghost_Surf_Rock.mp3';

class RacerFrontPage extends Phaser.Scene {

    constructor() {
        super('RacerWithMatterMenu');
    }

    preload() {
        this.load.image('portada', portada);
        this.load.image('2jugadores', players2);
        this.load.image('3jugadores', players3);
        this.load.image('4jugadores', players4);
        this.load.audio('musica', musica);
    }

    create() {
        this.add.sprite(480, 320, 'portada');
        const opcion2Jugadores = this.add.sprite(280, 540, '2jugadores').setInteractive();
        const opcion3Jugadores = this.add.sprite(480, 540, '3jugadores').setInteractive();
        const opcion4Jugadores = this.add.sprite(680, 540, '4jugadores').setInteractive();

        opcion2Jugadores.on('pointerdown', () => this.opcionJugador(2));
        opcion3Jugadores.on('pointerdown', () => this.opcionJugador(3));
        opcion4Jugadores.on('pointerdown', () => this.opcionJugador(4));

        const musica = this.sound.add('musica');
        musica.play({
            volume: 1
        })
    }

    opcionJugador(nJugadores) {
        this.scene.start('RacerWithMatter', { nJugadores });
    }
}

export default RacerFrontPage;