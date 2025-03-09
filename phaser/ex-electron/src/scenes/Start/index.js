import { gameWidth, gameHeight } from "../../consts";

function getURLParameter(paramName) {
    const urlSearchParams = new URLSearchParams(window.location.search);
    return urlSearchParams.get(paramName);
}



class Start extends Phaser.Scene {
    constructor() {
        super('Start');
    }

    preload() {
        const game = getURLParameter('game');
        game && this.scene.start(game);
    };

    create() {
        const w = gameWidth / 5;
        this.makeButton(w, 100, "Acierta Imagen", "ChooseFaces");
        this.makeButton(w * 2, 100, "Racer with Matter", "RacerWithMatterMenu");
        this.makeButton(w * 3, 100, "Racer with Arcade", "RacerWithArcade");
        this.makeButton(w * 4, 100, "Pong", "Pong");
        this.makeButton(w, 300, "Platform", "Platform");
        this.makeButton(w * 2, 300, "Shoot Gallery", "ShootingGallery");
        this.makeButton(w * 3, 300, "Flappy Bird", "FlappyBird");
        this.makeButton(w * 4, 300, "FallDown Game", "FallDown");
        this.makeButton(w, 400, "Choose your own adventure", "Init");
        this.makeButton(w * 2, 400, "Tanks", "Tanks");
        this.makeButton(w * 3, 400, "Multiplayer Room", "MultiplayerRoom")
    }

    makeButton(x, y, txt, sceneName) {
        const button = this.add.text(x, y, txt, {
            color: '#00ff00',
            align: 'center',
            fixedWidth: 200,
            backgroundColor: '#000055'
        }).setPadding(32)
            .setOrigin(0.5)
            .setStyle({ backgroundColor: '#888' })
            .setInteractive({ useHandCursor: true })
            .on('pointerdown', () => this.scene.start(sceneName));
    }
}

export default Start;