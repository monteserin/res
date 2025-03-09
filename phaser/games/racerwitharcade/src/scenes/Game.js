import { Scene } from 'phaser';
import { findObjectsByClassInObjectsLayer } from '../utils';

export class Game extends Scene {
    constructor() {
        super('Game');
    }

    create() {
        const map = this.make.tilemap({ key: 'jsonLevel' });
        const tileset = map.addTilesetImage('nombreDelTilesetEnTiled', 'tilesetPNG');
        this.collisionLayer = map.createLayer('collisionLayer', tileset, 0, 0);
        this.collisionLayer.setCollisionByExclusion([-1]);

        this.roadLayer = map.createLayer('roadLayer', tileset, 0, 0);

        const playerCoordinates = [
            { x: 280, y: 500, leftbtn: { x: 30, y: 540, rotacion: 45 }, rightbtn: { x: 90, y: 600, rotacion: 45 } },
            { x: 360, y: 500, leftbtn: { x: 870, y: 30, rotacion: 45 }, rightbtn: { x: 930, y: 90, rotacion: 45 } },
            { x: 300, y: 550, leftbtn: { x: 30, y: 90, rotacion: -45 }, rightbtn: { x: 90, y: 30, rotacion: -45 } },
            { x: 380, y: 550, leftbtn: { x: 870, y: 600, rotacion: -45 }, rightbtn: { x: 930, y: 540, rotacion: -45 } }
        ];
        this.players = [];
        this.amountOfPlayers = 4;
        this.createPlayers(playerCoordinates);
        this.cursors = this.input.keyboard.createCursorKeys();
        this.drawGoal(map, this.playersGroup);
        this.showScore();
        this.createMarkers();
    }

    createPlayers(playerCoordinates) {
        this.playersGroup = this.physics.add.group();

        for (let i = 0; i < this.amountOfPlayers; i++) {


            //Creamos el jugador. Lo almacenamos en un array de jugadores porque nos será más fácil en adelante aplicar funcionalidades a todos los jugadores
            this.players[i] = this.playersGroup.create(playerCoordinates[i].x, playerCoordinates[i].y, `player${i}`);
            this.players[i].number = i;
            this.players[i].score = 0
            this.players[i].setData('nextMarker', 0);
            //Creamos la animación del jugador
            this.anims.create({
                key: `volar${i}`,
                frames: this.anims.generateFrameNumbers(`player${i}`, { start: 0, end: 1 }),
                frameRate: 10,
                repeat: -1,
            });

            //Vinculamos la animación al jugador creado y comenzamos su reproducción.
            //El primer parámetro de la función volar es el nombre de la animación, y el segundo, si la animación se va a ejecutar indefinidamente
            this.players[i].play(`volar${i}`);
            this.players[i].speed = 0;


        }

        this.physics.add.collider(this.playersGroup, this.playersGroup);
        this.physics.add.collider(this.playersGroup, this.collisionLayer);
    }

    update() {
        for (let i = 0; i < this.amountOfPlayers; i++) {
            const player = this.players[i];
            if (player.speed <= 200) {
                player.speed += 7;
            }
            player.body.setAcceleration(
                player.speed * Math.cos(Phaser.Math.DegToRad(player.angle - 180)),
                player.speed * Math.sin(Phaser.Math.DegToRad(player.angle - 180))
            );
            if (this.cursors.left.isDown) player.rotation -= 0.05;
            else if (this.cursors.right.isDown) player.rotation += 0.05;
        }

    }



    drawGoal(map, players) {
        const goalIN = findObjectsByClassInObjectsLayer('goal', map)[0];
        console.log('33333333', goalIN)
        const goalObjIN = this.add.zone(goalIN.x, goalIN.y + 32, goalIN.width, goalIN.height).setOrigin(0, 0);
        this.physics.world.enable(goalObjIN);
        this.physics.add.overlap(players, goalObjIN, this.enterInArea, null, this);
    }

    enterInArea(objectZone1, collisionedPlayer) {
        const nextMarker = collisionedPlayer.getData('nextMarker');
        console.log('111111111111', nextMarker, this.markers.getChildren().length)
        if (nextMarker === this.markers.getChildren().length) {
            collisionedPlayer.score++;
            if (collisionedPlayer.score === 3) {
                alert('3 vueltas completadas!');
            }
            this['score' + collisionedPlayer.number].setText(collisionedPlayer.score);
            collisionedPlayer.setData('nextMarker', 0);
        }
    }

    createMarkers() {
        this.markers = this.physics.add.staticGroup();
        this.markers.create(128, 460, '__DEFAULT').setSize(128, 8).setData('id', 0).setData('direction', Phaser.UP);
        this.markers.create(128, 200, '__DEFAULT').setSize(128, 8).setData('id', 1).setData('direction', Phaser.UP);
        this.markers.create(800, 94, '__DEFAULT').setSize(8, 64).setData('id', 2).setData('direction', Phaser.RIGHT);
        this.markers.create(900, 360, '__DEFAULT').setSize(96, 8).setData('id', 3).setData('direction', Phaser.DOWN);
        this.markers.create(416, 32 * 14, '__DEFAULT').setSize(8, 96).setData('id', 4).setData('direction', Phaser.LEFT);


        this.physics.add.overlap(this.playersGroup, this.markers, this.hitMarker, null, this);
    }
    hitMarker(player, marker) {
        let id = marker.getData('id');
        let nextMarker = player.getData('nextMarker');
        /*Si la id del marker coincide con el siguiente marker que debe atravesar el usuario...*/
        if (id === nextMarker) {
            player.setData('nextMarker', id + 1);
        }
    }

    showScore() {
        this.add.text(200, 275, 'P1:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });
        this.add.text(280, 275, 'P2:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });
        this.add.text(200, 315, 'P3:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });
        this.add.text(280, 315, 'P4:', { fontFamily: 'font1', fontSize: 24, color: '#00ff00' });
        this.score0 = this.add.text(240, 275, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
        this.score1 = this.add.text(320, 275, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
        this.score2 = this.add.text(240, 315, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
        this.score3 = this.add.text(320, 315, '0', { fontFamily: 'font1', fontSize: 24, color: '#ffffff' });
    }
}
