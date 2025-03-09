import win from './assets/img/win.jpg';
import { gameWidth, gameHeight } from '../../../../consts';

class Win extends Phaser.Scene {
    constructor() {
        super('Win');
    }
    preload() {
        this.load.image('win', win);
    }
    create() {
        this.add.image(gameWidth / 2, gameHeight / 2, 'win');
        this.input.on('pointerdown', () => this.replay())
    }
    replay() {
        this.scene.start('Platform');
    }
}

export default Win;