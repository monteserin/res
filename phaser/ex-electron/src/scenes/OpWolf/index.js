import { gameWidth, gameHeight } from '../../consts';
import jsonLevel from './assets/map/map.json';
import tilesetPNG from './assets/map/tiles.png';
import Enemy from './enemys/Enemy';


class OpWolf extends Phaser.Scene {
    constructor() {
        super('OpWolf');
    }

    preload() {
        this.load.tilemapTiledJSON('jsonLevel', jsonLevel);
        this.load.image('tilesetPNG', tilesetPNG);
        Enemy.loadAssets(this);
    }

    create() {
        this.input.on('pointerdown', () => this.replay());
        const map = this.make.tilemap({ key: 'jsonLevel' });
        const tileset = map.addTilesetImage('nombreDelTilesetEnTiled', 'tilesetPNG');
        map.createLayer('grassLayer', tileset).setDepth(100);
        this.cameras.main.scrollY = 0;
        this.enemies = this.physics.add.group({ classType: Enemy, runChildUpdate: true, runChildCreate: true, gravityY: 0 });

    }

    replay() {
        this.scene.start('Start');
    }

    update(time, delta) {

        this.cameras.main.scrollX = this.cameras.main.scrollX + delta / 10;

        if (this.cameras.main.scrollX > 100) {
            this.enemies.add(new Enemy(this, 'catepillar'));

        }
    }
}

export default OpWolf;