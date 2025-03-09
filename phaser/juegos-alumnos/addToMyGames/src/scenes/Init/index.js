import backGround from './img/background.jpeg';
import gameOver from './img/gameoverphrase.jpg';
import platform from './img/platform.png';
import ball from './img/pngegg.png';

class Init extends Phaser.Scene {

    constructor(){
        super({ key: 'Init' });
    }

	preload() {
		//console.log('preload');
        this.load.image('background', backGround);
        this.load.image('gameOver', gameOver);
        this.load.image('platform', platform);
        this.load.image('ball', ball);
	}

	create() {
		//console.log('create');
        this.physics.world.setBoundsCollision(true, true, true, false);

        this.add.image(0, 0, 'background').setOrigin(0, 0);
        this.gameoverImage = this.add.image(480,190, 'gameOver');
        this.gameoverImage.visible = false;

        this.platform = this.physics.add.image(480, 500, 'platform').setScale(0.5).setImmovable();
        this.platform.body.allowGravity = false;

        this.ball = this.physics.add.image(480, 30, 'ball').setScale(0.05);
        this.ball.setCollideWorldBounds(true);

        let velocity = 100 * Phaser.Math.Between(1.3, 2);
        if (Phaser.Math.Between(0, 10) > 5){
            velocity = 0 - velocity;
        }
        this.ball.setVelocity(velocity, 10);

        this.physics.add.collider(this.ball, this.platform);

        this.ball.setBounce(1);

        this.cursors = this.input.keyboard.createCursorKeys();

        //this.platform.setVelocity(-100, -90);
	}

	update() {
		//console.log('update');
        if (this.cursors.left.isDown) {
            this.platform.setVelocityX(-500);
        }
        else if (this.cursors.right.isDown) {
            this.platform.setVelocityX(500);
        }
        else{
            this.platform.setVelocityX(0);
        }

        if (this.ball.y > 600) {
            this.gameoverImage.visible = true;
            this.scene.pause();
        }
	}
}

export default Init;