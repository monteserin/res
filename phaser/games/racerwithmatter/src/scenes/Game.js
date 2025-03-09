import { Scene } from 'phaser';

export class Game extends Scene {
    constructor() {
        super('Game');
    }
    init(data) {
        this.amountOfPlayers = data.amountOfPlayers;
    }

    create() {
        this.cursors = this.input.keyboard.createCursorKeys();
        this.add.sprite(0, 0, 'background').setOrigin(0, 0);
        this.playersCoordinates = [
            { x: 280, y: 500, leftbtn: { x: 30, y: 540, rotation: 45 }, rightbtn: { x: 90, y: 600, rotation: 45 } },
            { x: 360, y: 500, leftbtn: { x: 870, y: 30, rotation: 45 }, rightbtn: { x: 930, y: 90, rotation: 45 } },
            { x: 300, y: 550, leftbtn: { x: 30, y: 90, rotation: -45 }, rightbtn: { x: 90, y: 30, rotation: -45 } },
            { x: 380, y: 550, leftbtn: { x: 870, y: 600, rotation: -45 }, rightbtn: { x: 930, y: 540, rotation: -45 } }
        ];
        this.players = [];
        this.createPlayers();


        const matter = this.cache.json.get('matter');

        const leftside = this.matter.add.sprite(181, 303, 'leftside', null, { shape: matter.leftside });
        const rightside = this.matter.add.sprite(797, 314.5, 'rightside', null, { shape: matter.rightside });
        const center = this.matter.add.sprite(472, 344, 'center', null, { shape: matter.center });
        const moon = this.matter.add.sprite(170, 160, 'moon', null, { shape: matter.moon });
        const astronaut = this.matter.add.sprite(717, 240, 'astronaut', null, { shape: matter.astronaut });
        const saturn = this.matter.add.sprite(740, 150, 'saturn', null, { shape: matter.saturn });

        leftside.setStatic(true);
        rightside.setStatic(true);
        center.setStatic(true);
        saturn.setStatic(true);

        moon.setBounce(1.5);


        this.matter.add.rectangle(175, 500, 135, 30, {
            isSensor: true,
            marker: 1,
            angle: -0.25 * Math.PI
        });


        this.matter.add.rectangle(450, 150, 30, 60, { isSensor: true, marker: 2 });
        this.matter.add.rectangle(760, 400, 90, 30, { isSensor: true, marker: 3 });
        this.matter.add.rectangle(500, 505, 30, 70, { isSensor: true, marker: 4 });

        //collisionstart detecta la colisión entre cualquier forma y cualquier forma
        this.matter.world.on('collisionstart', (event) => {
            // console.log('11111111111111')
            //  La variable pairs almacena todos los objetos que están colisionando
            var pairs = event.pairs;

            for (var i = 0; i < pairs.length; i++) {
                // console.log('2222222222222')
                var bodyA = pairs[i].bodyA;
                var bodyB = pairs[i].bodyB;

                //  Estamos detectando la colisión entre objetos de cualquier tipo. Por tanto, también estamos detectando la colisión entre jugadores y objetos de diversa índole que no interesan. El siguiente condicional filtra para sólo tener en cuenta las colisiones donde uno de los elementos colisionados tiene la propiedad isSensor con valor True
                if (pairs[i].isSensor) {

                    let zone;
                    let playerBody;
                    if (bodyA.isSensor) {
                        zone = bodyA;
                        playerBody = bodyB;
                    } else if (bodyB.isSensor) {
                        zone = bodyB;
                        playerBody = bodyA;
                    }

                    const playerSprite = playerBody.gameObject;


                    ////////////////////////////

                    if (playerSprite.getData('marker') === zone.marker) {
                        if (zone.marker === 4) {
                            playerSprite.setData('marker', 1);
                        } else {
                            if (zone.marker === 1) {
                                const playerKey = playerSprite.texture.key;
                                const playerIndex = playerKey.substr(-1);

                                const score = playerSprite.getData('score') + 1;
                                playerSprite.setData('score', score);
                                console.log('33333333333', score, `score${playerIndex}`, playerSprite.getData(score));

                                this[`score${playerIndex}`].text = `${playerSprite.getData('score')}`;

                                if (score === 2) {
                                    this.scene.start('Win');
                                }
                            }
                            console.log('Increase marker. Esto ocurrirá cuando demos una vuelta completa')
                            playerSprite.setData('marker', zone.marker + 1);

                        }
                    }

                }
            }
        });

        this.showScore();
    }

    showScore() {
        this.add.text(400, 275, 'P1:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });
        this.add.text(480, 275, 'P2:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });
        this.add.text(400, 315, 'P3:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });
        this.add.text(480, 315, 'P4:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });

        this.score0 = this.add.text(440, 275, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
        this.score1 = this.add.text(520, 275, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
        this.score2 = this.add.text(440, 315, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
        this.score3 = this.add.text(520, 315, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
    }


    createPlayers() {
        for (let i = 0; i < this.amountOfPlayers; i++) {
            //Creamos el jugador. Lo almacenamos en un array de jugadores porque nos será más fácil en adelante aplicar funcionalidades a todos los jugadores
            this.players[i] = this.matter.add.sprite(this.playersCoordinates[i].x, this.playersCoordinates[i].y, `player${i}`);
            this.players[i].setData('marker', 2)
            this.players[i].setData('score', 0);

            //Creamos la animación del jugador
            this.anims.create({
                key: `fly${i}`,
                frames: this.anims.generateFrameNumbers(`player${i}`, { start: 0, end: 1 }),
                frameRate: 10,
                repeat: -1,
            });
            //Vinculamos la animación al jugador creado y comenzamos su reproducción.
            //El primer parámetro de la función volar es el nombre de la animación, y el segundo, si la animación se va a ejecutar indefinidamente
            this.players[i].play(`fly${i}`, true);

            this.visualControls(i);

            this.players[i].setData('score', 0);
            this.players[i].setData('marker', 2)

        }
    }

    visualControls(n) {
        this.players[n].setData('horizontalDirection', 0);

        const leftbtn = this.add.sprite(this.playersCoordinates[n].leftbtn.x, this.playersCoordinates[n].leftbtn.y, 'arrow').setInteractive();
        leftbtn.angle = this.playersCoordinates[n].leftbtn.rotation;

        const rightbtn = this.add.sprite(this.playersCoordinates[n].rightbtn.x, this.playersCoordinates[n].rightbtn.y, 'arrow').setInteractive();
        rightbtn.angle = this.playersCoordinates[n].rightbtn.rotation;
        rightbtn.flipX = true;

        rightbtn.on('pointerdown', function () {
            this.scene.players[n].setData('horizontalDirection', 1);
        });

        leftbtn.on('pointerdown', function () {
            this.scene.players[n].setData('horizontalDirection', -1);
        });

        rightbtn.on('pointerup', function () {
            this.scene.players[n].setData('horizontalDirection', 0);
        });

        leftbtn.on('pointerup', function () {
            this.scene.players[n].setData('horizontalDirection', 0);
        });
    }

    update() {
        for (let i = 0; i < this.amountOfPlayers; i++) {
            this.players[i].thrust(-0.001);
            if (this.cursors.left.isDown || this.players[i].getData('horizontalDirection') === -1)
                this.players[i].setAngularVelocity(-0.065);
            else if (this.cursors.right.isDown || this.players[i].getData('horizontalDirection') === 1)
                this.players[i].setAngularVelocity(0.065);
        }
    }
}
