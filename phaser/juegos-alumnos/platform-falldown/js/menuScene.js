class MenuScene extends Phaser.Scene {
    constructor() {
        super('MenuScene');
    }

    preload() {
        this.load.image('backgroundMenu','res/backgroundForest.png');
        this.load.audio('audioLoop','res/loop.mp3');
    }

    create() {
        
        this.audioLoop = this.sound.add('audioLoop');
        this.audioLoop.play({
        volume: 1,
        loop: true
        })

        this.background = this.add.image(0,0,'backgroundMenu').setOrigin(0,0);
        this.background.setScale(2,1.5);

        this.text = this.add.text(625,1100,'Pulsa Espacio para continuar');
        this.text.setFontSize(40);
        this.text.setFill('#000');
        this.text.setPadding(20,20,20,20);
        this.text.setBackgroundColor('#fff');

        this.cursores = this.input.keyboard.createCursorKeys();
        this.outMenu = false;
    }

    update() {
        if (this.cursores.space.isDown) {
            if (this.outMenu == false) {
                this.outMenu = true;
                this.audioLoop.stop();
                this.scene.add('GameScene', new GameScene(), true);
            }
        }
    }
}