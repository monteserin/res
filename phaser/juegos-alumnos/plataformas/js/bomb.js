class Bomb extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y) {
        super(scene, x, y, 'bomb');

        this.scene = scene;

        this.scene.add.existing(this);
        this.scene.physics.add.existing(this);
    }

    update() {

    }
}