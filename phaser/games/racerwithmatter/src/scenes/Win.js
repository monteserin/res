import { Scene } from 'phaser';

export class Win extends Scene {
    constructor() {
        super('Win');
    }

    create() {
        this.add.image(0, 0, 'win').setOrigin(0);

        this.input.once('pointerdown', () => {

            this.scene.start('MainMenu');
        });
    }
}
