import { Scene } from 'phaser';


export class Boot extends Scene {
    constructor() {
        super('Boot');
    }

    preload() {
        const isLocal = window.location.hostname.startsWith("localhost");
        if (!isLocal) {
            this.load.setPath("/res/phaser/games/racerwitharcade/dist");
        }
        this.load.tilemapTiledJSON('jsonLevel', '/assets/map.json');
        this.load.image('tilesetPNG', "/assets/tiles.jpg");

        this.load.spritesheet('player0', '/assets/player0.png', { frameWidth: 32, frameHeight: 32 });
        this.load.spritesheet('player1', '/assets/player1.png', { frameWidth: 32, frameHeight: 32 });
        this.load.spritesheet('player2', '/assets/player2.png', { frameWidth: 32, frameHeight: 32 });
        this.load.spritesheet('player3', '/assets/player3.png', { frameWidth: 32, frameHeight: 32 });
        this.load.image('win', "/assets/win.jpg");

    }

    create() {
        this.scene.start('Game');
    }
}
