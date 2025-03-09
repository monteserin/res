class Fly extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y) {
        super(scene, x, y, 'fly');

        this.scene = scene;

        this.scene.add.existing(this);
        this.scene.physics.add.existing(this);

        this.cursores = this.scene.input.keyboard.createCursorKeys();

        this.animacionVolar = {}
        this.animacionVolar.key = 'volar';
        this.animacionVolar.frames = this.scene.anims.generateFrameNames('sprites_fly', {
            prefix: 'volar',
            start: 1,
            end: 2
        })
        this.animacionVolar.frameRate = 10;
        this.animacionVolar.repeat = -1;
        this.scene.anims.create(this.animacionVolar);

        this.body.allowGravity = false;

        this.play('volar',true);
    }

    update(){

        if(this.body != null){

            if(this.body.velocity.x > 0) {
                this.setFlipX(true);
            } else if (this.body.velocity.x < 0) {
                this.setFlipX(false);
            }

            if(this.body.position.x > 1950) {
                this.setVelocityX(-350);
            }

            if(this.body.position.x < -50) {
                this.setVelocityX(350);
            }
        }
    }
}