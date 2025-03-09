import background from './assets/img/background.jpg';
import ladoizquierdo from './assets/img/ladoizquierdo.png';
import ladoDerecho from './assets/img/ladoderecho.png';
import centro from './assets/img/centro.png';
import luna from './assets/img/luna.png';
import saturno from './assets/img/saturno.png';
import astronauta from './assets/img/astronauta.png';
import estrella from './assets/img/estrella.png';
import player0 from './assets/img/player0.png';
import player1 from './assets/img/player1.png';
import player2 from './assets/img/player2.png';
import player3 from './assets/img/player3.png';
import flecha from './assets/img/flecha.png';
import muros from './assets/muros.json';

class RacerWithMatter extends Phaser.Scene {
    constructor() {
        super({
            key: 'RacerWithMatter',
            physics: {
                default: 'matter',
                matter: {
                    enableSleeping: true
                }
            }
        });
    }

    init(data) {
        this.n_jugadores = data.nJugadores;
    }

    preload() {
        this.load.image('fondo', background);
        this.load.image('ladoizquierdo', ladoizquierdo);
        this.load.image('ladoderecho', ladoDerecho);
        this.load.image('centro', centro);
        this.load.image('luna', luna);
        this.load.image('saturno', saturno);
        this.load.image('astronauta', astronauta);
        this.load.image('estrella', estrella);

        this.load.spritesheet('player0', player0, { frameWidth: 64, frameHeight: 32 });
        this.load.spritesheet('player1', player1, { frameWidth: 64, frameHeight: 32 });
        this.load.spritesheet('player2', player2, { frameWidth: 64, frameHeight: 32 });
        this.load.spritesheet('player3', player3, { frameWidth: 64, frameHeight: 32 });
        this.load.image('flecha', flecha);
        this.load.json('muros', muros);
    }

    create() {
        this.add.sprite(480, 320, 'fondo');
        this.coordenadasPlayers = [
            { x: 280, y: 500, leftbtn: { x: 30, y: 540, rotacion: 45 }, rightbtn: { x: 90, y: 600 } },
            { x: 360, y: 500, leftbtn: { x: 870, y: 30, rotacion: 45 }, rightbtn: { x: 930, y: 90 } },
            { x: 300, y: 550, leftbtn: { x: 30, y: 90, rotacion: -45 }, rightbtn: { x: 90, y: 30 } },
            { x: 380, y: 550, leftbtn: { x: 870, y: 600, rotacion: -45 }, rightbtn: { x: 930, y: 540 } }
        ];

        this.players = [];
        this.cursors = this.input.keyboard.createCursorKeys();

        /* muros matter*/
        const muros = this.cache.json.get('muros');


        const ladoizquierda = this.matter.add.sprite(
            181,
            303,
            "ladoizquierdo",
            null,
            { shape: muros.ladoizquierdo }
        );
        const ladoderecha = this.matter.add.sprite(
            797,
            314.5,
            "ladoderecho",
            null,
            { shape: muros.ladoderecho }
        );
        const centro = this.matter.add.sprite(472, 344, "centro", null, {
            shape: muros.centro,
        });
        const luna = this.matter.add.sprite(170, 160, "luna", null, {
            shape: muros.luna,
        });
        const astronauta = this.matter.add.sprite(717, 240, "astronauta", null, {
            shape: muros.astronauta,
        });
        const saturno = this.matter.add.sprite(740, 150, "saturno", null, {
            shape: muros.saturno,
        });

        luna.setBounce(1.5);


        this.creaPlayers();

        this.matter.add.rectangle(175, 500, 135, 30, {
            isSensor: true,
            marker: 1,
            angle: -Math.PI / 4
        });
        this.matter.add.rectangle(450, 150, 30, 60, { isSensor: true, marker: 2 });
        this.matter.add.rectangle(760, 400, 90, 30, { isSensor: true, marker: 3 });
        this.matter.add.rectangle(500, 505, 30, 70, { isSensor: true, marker: 4 });

        //collisionstart detecta la colisión any shape vs. any shape
        this.matter.world.on('collisionstart', (event) => {
            //  Loop through all of the collision pairs
            var pairs = event.pairs;

            for (var i = 0; i < pairs.length; i++) {
                var bodyA = pairs[i].bodyA;
                var bodyB = pairs[i].bodyB;

                //  We only want sensor collisions
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
                    const playerKey = playerSprite.texture.key;
                    const playerIndex = playerKey.substr(-1);

                    if (playerSprite.getData('marker') === zone.marker) {
                        if (zone.marker === 4) {
                            playerSprite.setData('marker', 1);
                        } else {
                            if (zone.marker === 1) {
                                playerSprite.data.values.marcador++;
                                this[`marcadorCoche${playerIndex}`].text = playerSprite.getData('marcador');
                                if (playerSprite.getData('marcador') === 2) {
                                    alert(`gano el player  ${playerKey}`);
                                    this.scene.start('ganarScene');
                                }
                            }
                            playerSprite.data.values.marker++;
                        }
                    }
                }
            }
        });
        this.pintarMarcador();

    }

    update() {
        for (let i = 0; i < this.n_jugadores; i++) {
            this.players[i].thrust(-0.003);

            if (this.cursors.left.isDown || this.players[i].getData('direccionHorizontal') === -1)
                this.players[i].setAngularVelocity(-0.065);

            else if (this.cursors.right.isDown || this.players[i].getData('direccionHorizontal') === 1)
                this.players[i].setAngularVelocity(0.065);
        }
    }

    pintarMarcador() {
        this.add.text(400, 275, 'P1:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });
        this.add.text(480, 275, 'P2:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });
        this.add.text(400, 315, 'P3:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });
        this.add.text(480, 315, 'P4:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });

        this.marcadorCoche0 = this.add.text(440, 275, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
        this.marcadorCoche1 = this.add.text(520, 275, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
        this.marcadorCoche2 = this.add.text(440, 315, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
        this.marcadorCoche3 = this.add.text(520, 315, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
    }

    controlesVisuales(n) {
        this.players[n].setData('direccionHorizontal', 0);

        const leftbtn = this.add.sprite(this.coordenadasPlayers[n].leftbtn.x, this.coordenadasPlayers[n].leftbtn.y, 'flecha').setInteractive();
        leftbtn.angle = this.coordenadasPlayers[n].leftbtn.rotacion;

        const rightbtn = this.add.sprite(this.coordenadasPlayers[n].rightbtn.x, this.coordenadasPlayers[n].rightbtn.y, 'flecha').setInteractive();
        rightbtn.angle = this.coordenadasPlayers[n].leftbtn.rotacion;
        rightbtn.flipX = true;

        rightbtn.on('pointerdown', function () {
            this.scene.players[n].setData('direccionHorizontal', 1);
        });

        leftbtn.on('pointerdown', function () {
            this.scene.players[n].setData('direccionHorizontal', -1);
        });

        rightbtn.on('pointerup', function () {
            this.scene.players[n].setData('direccionHorizontal', 0);
        });

        leftbtn.on('pointerup', function () {
            this.scene.players[n].setData('direccionHorizontal', 0);
        });
    }

    creaPlayers() {
        for (let i = 0; i < this.n_jugadores; i++) {
            this.players[i] = this.matter.add.sprite(this.coordenadasPlayers[i].x, this.coordenadasPlayers[i].y, `player${i}`);

            this.anims.create({
                key: `volar${i}`,
                frames: this.anims.generateFrameNumbers(`player${i}`, { start: 0, end: 1 }),
                frameRate: 10,
                repeat: -1,
            });
            this.players[i].play(`volar${i}`, true);
            this.players[i].setFrictionAir(0.08);
            this.players[i].setData('marcador', 0);
            this.players[i].setData('marker', 2);
            this.controlesVisuales(i);
        }
    }
}


export default RacerWithMatter;