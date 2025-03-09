import monster from './assets/img/monster.jpg';
import { gameWidth, gameHeight } from '../../../../consts';
import { loadZone } from '../utils';

class Monster extends Phaser.Scene {
    constructor() {
        super('Monster');
    }
    preload() {
        this.load.image('monster', monster);
    }

    create() {
        this.add.sprite(gameWidth / 2, gameHeight / 2, 'monster');
        loadZone(this, 0, 0, gameWidth, gameHeight, 'Init');
    }
}

export default Monster;