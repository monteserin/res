import home from './assets/img/home.jpg';
import { gameWidth, gameHeight } from '../../../../consts';
import { loadZone } from '../utils';

class Home extends Phaser.Scene {
    constructor() {
        super('Home');
    }
    preload() {
        this.load.image('home', home);
    }

    create() {
        this.add.sprite(gameWidth / 2, gameHeight / 2, 'home');
        loadZone(this, 0, 0, gameWidth, gameHeight, 'Init');
    }
}

export default Home;