import back from './assets/img/back.jpg';
import { gameWidth, gameHeight } from "../../consts";
import face0 from './assets/img/face0.png';
import face1 from './assets/img/face1.png';
import face2 from './assets/img/face2.png';
import face3 from './assets/img/face3.png';
import face4 from './assets/img/face4.png';
import face5 from './assets/img/face5.png';
import face6 from './assets/img/face6.png';

class ChooseFaces extends Phaser.Scene {
    constructor() {
        super('ChooseFaces');
    }

    preload() {
        this.load.image('back', back);
        this.load.image('face0', face0);
        this.load.image('face1', face1);
        this.load.image('face2', face2);
        this.load.image('face3', face3);
        this.load.image('face4', face4);
        this.load.image('face5', face5);
        this.load.image('face6', face6);
    }

    create() {
        this.add.sprite(gameWidth / 2, gameHeight / 2, 'back');
        this.face0 = this.add.sprite(225, 425, 'face0').setScale(0.5, 0.5);
        this.face1 = this.add.sprite(480, 460, 'face1').setScale(0.5, 0.5);
        this.face2 = this.add.sprite(740, 425, 'face2').setScale(0.5, 0.5);

        this.face0.setInteractive().on('pointerdown', () => this.clickedFace(this.face0));
        this.face1.setInteractive().on('pointerdown', () => this.clickedFace(this.face1));
        this.face2.setInteractive().on('pointerdown', () => this.clickedFace(this.face2));
        this.spriteSolution = this.add.sprite(470, 190, 'face0');

        this.score = 0;
        this.scoreTXT = this.add.text(90, 120, this.score, {
            fontFamily: 'font1',
            fontSize: 60,
            color: '#00ff00',
            align: 'right'
        });
        this.scoreTXT.setOrigin(1, 0);
        this.add.text(105, 150, 'pts', {
            fontFamily: 'font1',
            fontSize: 24,
            color: '#00ff00'
        });



        this.timeLimit = 10;
        this.timing = this.timeLimit;
        this.timeTXT = this.add.text(835, 130, this.timing, {
            fontFamily: 'font1',
            fontSize: 64,
            color: '#00ff00',
        });
        this.timeTXT.rotation = 20 * Math.PI / 180;
        this.timer();



        this.newTurn();
    }

    timer() {
        --this.timing;
        this.timeTXT.setText(this.timing);
        if (this.timing === 0) {
            this.scene.start('Lose');
        } else {
            this.time.delayedCall(1000, this.timer, [], this);
        }
    }

    clickedFace(face) {
        if (face.texture.key === this.spriteSolution.texture.key) {
            ++this.score;
            this.scoreTXT.setText(this.score);
            this.timing = 10;
            this.newTurn();
        } else {
            this.scene.start('Lose');
        }
    }

    newTurn() {
        const numbers = [0, 1, 2, 3, 4, 5, 6];
        this.randomizeArray(numbers);

        this.face0.setTexture(`face${numbers[0]}`);
        this.face1.setTexture(`face${numbers[1]}`);
        this.face2.setTexture(`face${numbers[2]}`);

        const choosedFace = 'face' + numbers[Math.floor(Math.random() * 3)];
        this.spriteSolution.setTexture(choosedFace);
    }

    randomizeArray(array) {
        return array.sort(() => Math.floor(Math.random() * 3) - 1);
    }

    update() {
        console.log('update');
    }
}

export default ChooseFaces;