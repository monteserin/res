import { Scene } from 'phaser';

export class MainMenu extends Scene {
    constructor() {
        super('MainMenu');
    }

    create() {
        this.add.sprite(0, 0, 'landscreen').setOrigin(0);
        const option2Players = this.add.sprite(280, 550, '2players').setInteractive();
        const option3Players = this.add.sprite(480, 550, '3players').setInteractive();
        const option4Players = this.add.sprite(680, 550, '4players').setInteractive();
        option2Players.on('pointerdown', () => this.chooseAmountOfPlayers(2));
        option3Players.on('pointerdown', () => this.chooseAmountOfPlayers(3));
        option4Players.on('pointerdown', () => this.chooseAmountOfPlayers(4));
    }
    chooseAmountOfPlayers(amountOfPlayers) {
        this.scene.start('Game', { amountOfPlayers });
    }
}
