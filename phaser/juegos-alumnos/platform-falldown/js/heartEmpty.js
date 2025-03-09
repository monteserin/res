class HeartEmpty extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y) {
        super(scene, x, y, 'heartEmpty');

        this.scene = scene;

        this.scene.add.existing(this);
        this.scene.physics.add.existing(this);

        this.body.allowGravity = false;
    }

    update() {

    }
}