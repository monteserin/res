class Jugador extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y) {
        super(scene, x, y, 'player');

        this.scene = scene;

        this.scene.add.existing(this);
        this.scene.physics.add.existing(this);

        this.setBounce(0.2);

        this.cursores = this.scene.input.keyboard.createCursorKeys();

        this.animacionCaminar = {}
        this.animacionCaminar.key = 'walk';
        this.animacionCaminar.frames = this.scene.anims.generateFrameNames('sprites_player', {
            prefix: 'walk',
            start: 1,
            end: 2
        })
        this.animacionCaminar.frameRate = 10;
        this.animacionCaminar.repeat = -1;
        this.scene.anims.create(this.animacionCaminar);

        this.animacionParado = {}
        this.animacionParado.key = 'stand';
        this.animacionParado.frames = this.scene.anims.generateFrameNames('sprites_player', {
            prefix: 'stand',
            start: 1,
            end: 1
        })
        this.animacionParado.frameRate = 10;
        this.animacionCaminar.repeat = -1;
        this.scene.anims.create(this.animacionParado);

        this.animacionSaltar = {}
        this.animacionSaltar.key = 'jump';
        this.animacionSaltar.frames = this.scene.anims.generateFrameNames('sprites_player', {
            prefix: 'jump',
            start: 1,
            end: 1
        })
        this.animacionSaltar.frameRate = 10;
        this.animacionSaltar.repeat = -1;
        this.scene.anims.create(this.animacionSaltar);
    }

    update(){

        if(this.body.onFloor()){
            if(this.body.velocity.y > 0) {
                this.body.velocity.y = 0;
            }
        }

        if(this.body.velocity.x > 0) {
            this.setFlipX(false);
        } else if (this.body.velocity.x < 0) {
            this.setFlipX(true);
        }

        if(this.cursores.left.isDown) {
            this.setVelocityX(-500);
            if(this.body.onFloor()){
                this.play('walk',true);
            }
        } else if (this.cursores.right.isDown) {
            this.setVelocityX(500);
            if(this.body.onFloor()){
                this.play('walk',true);
            }
        } else {
            this.setVelocityX(0);
            if(this.body.onFloor()){
                this.play('stand',true);
            }
        }

        if(this.cursores.space.isDown && this.body.onFloor()){
            this.scene.audioJump.play();
            this.setVelocityY(-650);
            this.play('jump',true);
        }

    }
}