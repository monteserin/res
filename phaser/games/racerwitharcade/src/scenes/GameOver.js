import { Scene } from 'phaser';

export class GameOver extends Scene {
    constructor() {
        super('GameOver');
    }

    create() {
        this.add.image(0, 0, 'win').setOrigin(0);
        this.input.once('pointerdown', () => {
            this.scene.start('Game');
        });
    }
}
