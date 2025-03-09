import lose from './assets/img/lose.jpg';
import { gameWidth, gameHeight } from '../../consts';

class Lose extends Phaser.Scene {
    constructor() {
        super('Lose');
    }

    preload() {
        this.load.image('lose', lose);
    }

    create() {
        this.add.image(gameWidth / 2, gameHeight / 2, 'lose');
        this.input.on('pointerdown', () => this.replay())
    }

    replay() {
        this.scene.start('Start');
    }
}

export default Lose;