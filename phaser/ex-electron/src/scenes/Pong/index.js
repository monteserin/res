import { gameHeight, gameWidth } from '../../consts';
import back from './assets/img/back.jpg';
import ball from './assets/img/ball.png';
import hand1 from './assets/img/hand1.png';
import hand2 from './assets/img/hand2.png';
import arrow from './assets/img/arrow.png';

class Pong extends Phaser.Scene {
    constructor() {
        super('Pong');
    }
    preload() {
        this.load.image('back', back);
        this.load.spritesheet('ball', ball, { frameWidth: 100, frameHeight: 100 });
        this.load.image('hand1', hand1);
        this.load.image('hand2', hand2);
        this.load.image('arrow', arrow);
    }

    create() {
        this.add.sprite(gameWidth / 2, gameHeight / 2, 'back');


        this.hand1 = this.physics.add.sprite(70, 320, 'hand1');
        this.hand1.body.immovable = true;
        this.cursors = this.input.keyboard.createCursorKeys();

        this.visualControls({ x: 50, y: 50 }, { x: 50, y: 590 }, this.hand1);


        this.hand2 = this.physics.add.sprite(882, 320, 'hand2');
        this.visualControls({ x: 910, y: 50 }, { x: 910, y: 590 }, this.hand2);
        this.hand2.body.immovable = true;
        this.cursors2 = this.input.keyboard.addKeys({ up: 'W', left: 'A', down: 'S', right: 'D' });
        this.input.addPointer();
        this.input.addPointer();
        this.input.addPointer();
        this.physics.world.setBoundsCollision(false, false, true, true);
        this.hand1.setSize(60, 250);
        this.hand2.setSize(60, 250);
        this.showScore();


        this.ball = this.physics.add.sprite(gameWidth / 2, gameHeight / 2, 'ball');
        this.ball.setBounce(1);
        this.ball.setCollideWorldBounds(true);

        this.anims.create({
            key: 'shine',
            frames: this.anims.generateFrameNumbers('ball', { start: 0, end: 3 }),
            frameRate: 10,
            repeat: -1
        });
        this.ball.play('shine');
        this.speed = 500;
        this.placeBall();

        this.physics.add.collider(this.ball, this.hand2);
        this.physics.add.collider(this.ball, this.hand1);

        this.hand1.setCollideWorldBounds(true);
        this.hand2.setCollideWorldBounds(true);

    }

    visualControls(btn1, btn2, player) {
        const upbtn = this.add.sprite(btn1.x, btn1.y, 'arrow').setInteractive();
        const downbtn = this.add.sprite(btn2.x, btn2.y, 'arrow').setInteractive();
        downbtn.flipY = true;

        player.setData('verticalDirection', 0);
        downbtn.on('pointerdown', () => {
            player.setData('verticalDirection', -1);
        });
        upbtn.on('pointerdown', () => {
            player.setData('verticalDirection', 1);
        });
        downbtn.on('pointerup', () => {
            player.setData('verticalDirection', 0);
        });
        upbtn.on('pointerup', () => {
            player.setData('verticalDirection', 0);
        });
    }

    placeBall() {
        this.ball.x = gameWidth / 2;
        this.ball.y = gameHeight / 2;
        let initialAngle = Math.random() * (Math.PI / 4 * 3 - Math.PI / 4) + Math.PI / 4;
        const leftOrRight = Math.floor(Math.random() * 2);
        if (leftOrRight === 1) initialAngle = initialAngle + Math.PI;
        const vx = Math.sin(initialAngle) * this.speed;
        const vy = Math.cos(initialAngle) * this.speed;
        this.ball.body.velocity.x = vx;
        this.ball.body.velocity.y = vy;

    }
    update() {
        console.log('update');
        this.ball.rotation += 0.1;

        if (this.cursors.up.isDown || this.hand1.getData('verticalDirection') === 1) {
            this.hand1.y = this.hand1.y - 5;
        } else if (this.cursors.down.isDown || this.hand1.getData('verticalDirection') === -1) {
            this.hand1.y = this.hand1.y + 5;
        }


        if (this.cursors2.up.isDown || this.hand2.getData('verticalDirection') === 1) {
            this.hand2.y = this.hand2.y - 5;
        } else if (this.cursors2.down.isDown ||
            this.hand2.getData('verticalDirection') === -1) {
            this.hand2.y = this.hand2.y + 5;
        }


        if (this.ball.x < 0) {
            this.hand1Score.setText(parseInt(this.hand1Score.text) + 1);
            this.placeBall();
        } else if (this.ball.x > gameWidth) {
            this.hand2Score.setText(parseInt(this.hand1Score.text) + 1);
            this.placeBall();
        }
    }


    showScore() {
        this.hand1Score = this.add.text(395, 75, '0', { fontFamily: 'font1', fontSize: 80, color: '#ffffff', align: 'right' }).setOrigin(1, 0);
        this.hand2Score = this.add.text(520, 75, '0', { fontFamily: 'font1', fontSize: 80, color: '#ffffff' });
    }
}



export default Pong;