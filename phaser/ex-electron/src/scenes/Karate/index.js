import { gameWidth, gameHeight } from '../../consts';
import back from './assets/img/back.jpg';
import karateka0 from './assets/img/missile0.png';
import karateka1 from './assets/img/missile1.png';
import karateka2 from './assets/img/missile1.png';
import player from './assets/img/player.png';

class Karate extends Phaser.Scene {
    constructor() {
        super('Karate');
    }
    preload() {
        this.load.image('back', back);
        this.load.image('karateka0', karateka0);
        this.load.image('karateka1', karateka1);
        this.load.image('karateka2', karateka2);
        this.load.spritesheet('player', player, { frameWidth: 180, frameHeight: 180 });

    }
    create() {
        this.add.image(gameWidth / 2, gameHeight / 2, 'back');
        this.player = this.physics.add.sprite(100, 100, 'player');


        this.anims.create({
            key: 'playerHitted',
            frames: this.anims.generateFrameNumbers('player', { start: 2, end: 7 }),
            frameRate: 7,
        });

        const tooLateHitMomentZoneY = 200;
        this.rightHitMomentZone = this.add.zone(0, 0, gameWidth / 2, 300).setOrigin(0, 0);
        this.physics.add.existing(this.rightHitMomentZone, true);

        this.tooLateHitMomentZone = this.add.zone(0, 0, gameWidth / 2, 200).setOrigin(0, 0);
        this.physics.add.existing(this.tooLateHitMomentZone, true);

        this.safeZone = this.add.zone(0, gameHeight - 30, gameWidth / 2, 30).setOrigin(0, 0);
        this.physics.add.existing(this.safeZone, true);



        this.btn1 = this.add.zone(0, 0, gameWidth / 3, gameHeight).setOrigin(0, 0).setInteractive();
        this.btn2 = this.add.zone(gameWidth / 3, 0, gameWidth / 3, gameHeight).setOrigin(0, 0).setInteractive();
        this.btn3 = this.add.zone(2 * gameWidth / 3, 0, gameWidth / 3, gameHeight).setOrigin(0, 0).setInteractive();

        // this.btn1.on('pointerdown', () => this.btn1IsClicked = true);
        // this.btn2.on('pointerdown', () => this.btn2IsClicked = true);
        // this.btn3.on('pointerdown', () => this.btn3IsClicked = true);
        // this.btn1.on('pointerup', () => this.btn1IsClicked = false);
        // this.btn2.on('pointerup', () => this.btn2IsClicked = false);
        // this.btn3.on('pointerup', () => this.btn3IsClicked = false);

        this.launchKarateka();
    }

    launchKarateka() {
        const randomSprite = Math.floor(Math.random() * 2);
        const karatekaPosition = randomSprite === 0 ? 100 : randomSprite == 1 ? 300 : 600;
        const karateka = this.physics.add.sprite(karatekaPosition, 600, `karateka${randomSprite}`);


        karateka.setVelocity(0, -500);
        karateka.setCollideWorldBounds(true);
        karateka.body.onWorldBounds = true;

        // this.physics.add.overlap(karateka, this.rightHitMomentZone, () => {
        //     this.rightHitMoment = true;
        //     //this.currentKarateka = karateka;
        // });

        // this.physics.add.overlap(karateka, this.safeZone, () => {
        //     this.rightHitMoment = false;
        // });

        this.physics.add.overlap(karateka, this.tooLateHitMomentZone, () => {
            this.rightHitMoment = false;
            karateka.destroy();
        });


        this.time.delayedCall(2000, this.launchKarateka, [], this);


        this.btn1.on('pointerdown', () => {
            if (this.physics.overlap(karateka, this.rightHitMomentZone)) {
                console.log('1111111111111111')
            }
        });
    }

    playerHitted(player, enemy) {
        player.play('playerHitted');
        enemy.destroy()
    }

    update() {
        // if (this.rightHitMoment && this.btn1IsClicked) {
        //     alert('exito')
        //     //this.currentKarateka.destroy();
        // }
    }

}

export default Karate;