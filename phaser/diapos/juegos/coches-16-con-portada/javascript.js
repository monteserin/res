class EscenaPortada extends Phaser.Scene {

	constructor() {
		super({key: 'EscenaPortada'});
	}

	preload() {
		resize();
		window.addEventListener('resize', resize);
		this.load.image('portada', 'img/portada.jpg');
		this.load.image('2jugadores', 'img/2.png');
		this.load.image('3jugadores', 'img/3.png');
		this.load.image('4jugadores', 'img/4.png');
        this.load.audio('musica', 'img/Loyalty_Freak_Music_-_13_-_Ghost_Surf_Rock.mp3');
	}

	create() {
		this.input.addPointer();
		this.input.addPointer();
		this.input.addPointer();
		this.input.addPointer();
		this.input.addPointer();

        const musica = this.sound.add('musica');
        musica.play({
            volume:1
        });
		
		this.add.sprite(480, 320, 'portada');
		const opcion2Jugadores = this.add.sprite(280, 540, '2jugadores').setInteractive();
		const opcion3Jugadores = this.add.sprite(480, 540, '3jugadores').setInteractive();
		const opcion4Jugadores = this.add.sprite(680, 540, '4jugadores').setInteractive();

		opcion2Jugadores.on('pointerdown', () => this.opcionJugador(2));
		opcion3Jugadores.on('pointerdown', () => this.opcionJugador(3));
		opcion4Jugadores.on('pointerdown', () => this.opcionJugador(4));
	}

	opcionJugador(nJugadores) {
		this.scene.start('EscenaJuego', {nJugadores});
	}
}

class Escena extends Phaser.Scene {
	constructor() {
		super({key: 'EscenaJuego'});
	}

	init(data) {
		this.n_jugadores = data.nJugadores;
	}

	preload() {
		resize();

		this.load.image('fondo', 'img/fuentesTexturePacker/background.jpg');
		this.load.image('ladoizquierdo', 'img/fuentesTexturePacker/ladoizquierdo.png');
		this.load.image('ladoderecho', 'img/fuentesTexturePacker/ladoderecho.png');
		this.load.image('centro', 'img/fuentesTexturePacker/centro.png');
		this.load.image('luna', 'img/fuentesTexturePacker/luna.png');
		this.load.image('saturno', 'img/fuentesTexturePacker/saturno.png');
		this.load.image('astronauta', 'img/fuentesTexturePacker/astronauta.png');
		this.load.image('estrella', 'img/fuentesTexturePacker/estrella.png');

		this.load.spritesheet('player0', 'img/player0.png', {frameWidth: 64, frameHeight: 32});
		this.load.spritesheet('player1', 'img/player1.png', {frameWidth: 64, frameHeight: 32});
		this.load.spritesheet('player2', 'img/player2.png', {frameWidth: 64, frameHeight: 32});
		this.load.spritesheet('player3', 'img/player3.png', {frameWidth: 64, frameHeight: 32});
		this.load.image('leftbtn', 'img/flecha.png');
		this.load.json('muros', 'img/muros.json');
	}

	create() {
		this.add.sprite(480, 320, 'fondo');
		this.coordenadasPlayers = [
		{x: 280, y: 500, leftbtn: {x: 50, y: 540, rotacion: 45}, rightbtn: {x: 150, y: 590, rotacion: 45}},
		{x: 360, y: 500, leftbtn: {x: 810, y: 50, rotacion: 45}, rightbtn: {x: 910, y: 90, rotacion: 45}},
		{x: 300, y: 550, leftbtn: {x: 50, y: 90, rotacion: -45}, rightbtn: {x: 150, y: 50, rotacion: -45}},
		{x: 380, y: 550, leftbtn: {x: 810, y: 590, rotacion: -45}, rightbtn: {x: 910, y: 540, rotacion: -45}}
		];

		this.players = [];
		this.cursors = this.input.keyboard.createCursorKeys();

		/* muros matter*/
		const muros = this.cache.json.get('muros');

		const ladoizquierda = this.matter.add.sprite(0, 0, 'ladoizquierdo', null, {shape: muros.ladoizquierdo});
		const ladoderecha = this.matter.add.sprite(0, 0, 'ladoderecho', null, {shape: muros.ladoderecho});
		const centro = this.matter.add.sprite(0, 0, 'centro', null, {shape: muros.centro});
		const luna = this.matter.add.sprite(0, 0, 'luna', null, {shape: muros.luna});
		const astronauta = this.matter.add.sprite(0, 0, 'astronauta', null, {shape: muros.astronauta});
        //  const estrella = this.matter.add.sprite(0, 0, 'estrella', null, {shape: muros.estrella});
        const saturno = this.matter.add.sprite(0, 0, 'saturno', null, {shape: muros.saturno});

        luna.setBounce(1.5);

        const coordenadasLadoIzquierda = this.getCoordenadasSinTenerEnCuentaLaMasa(ladoizquierda, 0, 0);
        const coordenadasLadoDerecha = this.getCoordenadasSinTenerEnCuentaLaMasa(ladoderecha, 479, 0);
        const coordenadasCentro = this.getCoordenadasSinTenerEnCuentaLaMasa(centro, 210, 155);
        const coordenadasLuna = this.getCoordenadasSinTenerEnCuentaLaMasa(luna, 100, 100);
        const coordenadasAstronauta = this.getCoordenadasSinTenerEnCuentaLaMasa(astronauta, 685, 210);
        const coordenadasSaturno = this.getCoordenadasSinTenerEnCuentaLaMasa(saturno, 665, 110);

        ladoizquierda.setPosition(coordenadasLadoIzquierda.x, coordenadasLadoIzquierda.y);
        ladoderecha.setPosition(coordenadasLadoDerecha.x, coordenadasLadoDerecha.y);
        centro.setPosition(coordenadasCentro.x, coordenadasCentro.y);
        luna.setPosition(coordenadasLuna.x, coordenadasLuna.y);
        astronauta.setPosition(coordenadasAstronauta.x, coordenadasAstronauta.y);
        saturno.setPosition(coordenadasSaturno.x, coordenadasSaturno.y);

        this.creaPlayers();

        const objeto = this.matter.add.rectangle(175, 500, 135, 30, {
        	isSensor: true,
        	marker: 1,
        	angle: -0.25 * Math.PI
        });
        this.matter.add.rectangle(450, 150, 30, 60, {isSensor: true, marker: 2});
        this.matter.add.rectangle(760, 400, 90, 30, {isSensor: true, marker: 3});
        this.matter.add.rectangle(500, 505, 30, 70, {isSensor: true, marker: 4});

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
                				this[`marcadorCoche${playerIndex}`].text = `${playerSprite.getData('marcador')}`;
                				if (playerSprite.data.values.marcador === 3) {
                					alert(`gano el player  ${playerKey}`);
                					this.scene.start('finScene');

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
    	this.add.text(400, 275, 'P1:', {fontFamily: 'font1', fontSize: 24, color: '#00ff00'});
    	this.add.text(480, 275, 'P2:', {fontFamily: 'font1', fontSize: 24, color: '#00ff00'});
    	this.add.text(400, 315, 'P3:', {fontFamily: 'font1', fontSize: 24, color: '#00ff00'});
    	this.add.text(480, 315, 'P4:', {fontFamily: 'font1', fontSize: 24, color: '#00ff00'});

    	this.marcadorCoche0 = this.add.text(440, 275, '0', {fontFamily: 'font1', fontSize: 24, color: '#ffffff'});
    	this.marcadorCoche1 = this.add.text(520, 275, '0', {fontFamily: 'font1', fontSize: 24, color: '#ffffff'});
    	this.marcadorCoche2 = this.add.text(440, 315, '0', {fontFamily: 'font1', fontSize: 24, color: '#ffffff'});
    	this.marcadorCoche3 = this.add.text(520, 315, '0', {fontFamily: 'font1', fontSize: 24, color: '#ffffff'});
    }

    getCoordenadasSinTenerEnCuentaLaMasa(obj, xDondeLoPuseInicialmente, yDondeLoPuseInicialmente) {
//  Si posicionas la forma en la el punto (0,0), por defecto será posicionado en función de su centro de gravedad. Lo siguiente son las coordenadas del centro de la pieza, tanto horizontal como verticalmente.
const xDondeEstaAhora = (obj.body.bounds.max.x - obj.body.bounds.min.x) / 2;
const yDondeEstaAhora = (obj.body.bounds.max.y - obj.body.bounds.min.y) / 2;
const xOffset = -(xDondeEstaAhora - obj.centerOfMass.x) + xDondeEstaAhora;
const yOffset = -(yDondeEstaAhora - obj.centerOfMass.y) + yDondeEstaAhora;
        //  Then apply them to the position we want the shape to appear at
        return {x: xDondeLoPuseInicialmente + xOffset, y: yDondeLoPuseInicialmente + yOffset};
    }

    controlesVisuales(n) {
    	this.players[n].setData('direccionHorizontal', 0);

    	const leftbtn = this.add.sprite(this.coordenadasPlayers[n].leftbtn.x, this.coordenadasPlayers[n].leftbtn.y, 'leftbtn').setInteractive().setDepth(100);
    	leftbtn.angle = this.coordenadasPlayers[n].leftbtn.rotacion;

    	const rightbtn = this.add.sprite(this.coordenadasPlayers[n].rightbtn.x, this.coordenadasPlayers[n].rightbtn.y, 'leftbtn').setInteractive().setDepth(100);
    	rightbtn.angle = this.coordenadasPlayers[n].rightbtn.rotacion;


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
    			frames: this.anims.generateFrameNumbers(`player${i}`, {start: 0, end: 1}),
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

class FinEscena extends Phaser.Scene {
	constructor() {
		super('finScene');
	}

	preload() {
		this.load.image('fin', '../img/fin-bueno.jpg');
		this.input.on('pointerdown', () => this.volverAJugar())
	}

	create() {
		this.add.image(480, 320, 'fin');
	}

	volverAJugar() {
        this.scene.start('EscenaPortada');
	}
}

function resize() {
	const canvas = document.querySelector("canvas");
	const windowWidth = window.innerWidth;
	const windowHeight = window.innerHeight;
  
	const windowRatio = windowWidth / windowHeight;
	const gameRatio = config.width / config.height;
	if (windowRatio < gameRatio) {
	  canvas.style.width = `${windowWidth}px`;
	  canvas.style.height = `${windowWidth / gameRatio}px`;
	} else {
	  canvas.style.width = `${windowHeight * gameRatio}px`;
	  canvas.style.height = `${windowHeight}px`;
	}
  }
  

const config = {
	type: Phaser.AUTO,
	width: 959,
	height: 640,
	scene: [EscenaPortada, Escena, FinEscena],
	physics: {
		default: 'matter',
		matter: {
			gravity: {
				y: 0,
			},
		},
	},
};

new Phaser.Game(config);

window.addEventListener( 'keyup', (e) => {
    var keyCode = e.keyCode;
    if(keyCode == 13){
       location.href = '../11-victoria/index.html';
	}
	if(keyCode == 8){
        location.href = '../pong-20-limitar-area-juego/index.html'
     }
});