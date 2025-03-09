
import { gameWidth, gameHeight } from "../../consts";
import win from './assets/win.jpg';

class Win extends Phaser.Scene {
    constructor() {
        super('Win');
    }
    preload() {
        this.load.image('fin', win);
    }
    create() {
        this.add.image(gameWidth / 2, gameHeight / 2, 'fin');

        this.input.keyboard.on('keydown', event => {
            if (event.keyCode === 32) {
                this.scene.volverAJugar();
            }
        });
        this.input.on('pointerdown', () => this.volverAJugar())
    }
    volverAJugar() {
        this.scene.start('Start');
    }
}

export default Win;