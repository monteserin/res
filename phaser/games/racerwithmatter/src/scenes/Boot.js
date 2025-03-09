import { Scene } from 'phaser';

export class Boot extends Scene {
    constructor() {
        super('Boot');
    }

    preload() {
        const isLocal = window.location.hostname.startsWith("localhost");
        if (!isLocal) {
            this.load.setPath("/res/phaser/games/racerwithmatter/dist");
        }

        this.load.spritesheet('player0', 'assets/player0.png', { frameWidth: 64, frameHeight: 32 });
        this.load.spritesheet('player1', 'assets/player1.png', { frameWidth: 64, frameHeight: 32 });
        this.load.spritesheet('player2', 'assets/player2.png', { frameWidth: 64, frameHeight: 32 });
        this.load.spritesheet('player3', 'assets/player3.png', { frameWidth: 64, frameHeight: 32 });

        this.load.image('background', 'assets/background.jpg');

        this.load.image('leftside', '/assets/leftside.png');
        this.load.image('rightside', '/assets/rightside.png');
        this.load.image('center', '/assets/center.png');
        this.load.image('moon', '/assets/moon.png');
        this.load.image('saturn', '/assets/saturn.png');
        this.load.image('astronaut', '/assets/astronaut.png');
        this.load.json('matter', '/matter.json');

        this.load.image('2players', 'assets/2.png');
        this.load.image('3players', 'assets/3.png');
        this.load.image('4players', 'assets/4.png');
        this.load.image('landscreen', 'assets/landscreen.jpg');
        this.load.image('win', 'assets/win.jpg');


    }

    create() {
        this.scene.start('MainMenu');
    }
}
