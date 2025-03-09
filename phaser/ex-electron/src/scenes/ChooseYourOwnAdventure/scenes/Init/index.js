import space from './assets/img/space.jpg';
import { gameWidth, gameHeight } from '../../../../consts';
import { loadZone } from '../utils';

class Init extends Phaser.Scene {
    constructor() {
        super('Init');
    }
    preload() {
        this.load.image('space', space);
    }

    create() {
        this.add.sprite(gameWidth / 2, gameHeight / 2, 'space');
        loadZone(this, 140, 10, 440, 400, 'Spaceship');
        loadZone(this, 590, 240, 370, 410, 'Home');
    }
}

export default Init;