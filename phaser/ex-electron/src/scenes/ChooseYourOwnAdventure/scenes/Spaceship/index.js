import spaceship from './assets/img/spaceship.jpg';
import { gameWidth, gameHeight } from '../../../../consts';
import { loadZone } from '../utils';

class Spaceship extends Phaser.Scene {
    constructor() {
        super('Spaceship');
    }
    preload() {
        this.load.image('spaceship', spaceship);
    }

    create() {
        this.add.sprite(gameWidth / 2, gameHeight / 2, 'spaceship');
        loadZone(this, 150, 180, 240, 360, 'Monster');
        loadZone(this, 530, 180, 230, 360, 'Home');
    }
}

export default Spaceship;