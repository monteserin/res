import { gameHeight, gameWidth } from '../../../../consts';
import back from './assets/img/back.jpg';
import jsonLevel from './assets/map/map.json';
import tilesetPNG from './assets/map/tiles.png';
import DebugMapCamera from '../../utils/DebugMapCamera';
import Player from '../../characters/Player';
import AntEnemy from '../../characters/Ant';
import Enemy from '../../characters/Enemy';
import CaterpillarEnemy from '../../characters/Caterpillar';
import BeeEnemy from '../../characters/Bee';
import goal from './assets/img/goal.png';

class Platform extends Phaser.Scene {
    constructor() {
        super('Platform');
    }

    preload() {
        this.load.image('goal', goal);
        this.load.image('back', back);
        this.load.tilemapTiledJSON('jsonLevel', jsonLevel);
        this.load.image('tilesetPNG', tilesetPNG);
        Player.loadAssets(this);
        AntEnemy.loadAssets(this);
        Enemy.loadAssets(this);
        CaterpillarEnemy.loadAssets(this);
        BeeEnemy.loadAssets(this);
    }

    create() {
        // this.add.sprite(gameWidth / 2, gameHeight / 2, 'back');
        this.bg = this.add.tileSprite(gameWidth / 2, gameHeight / 2, gameWidth, gameHeight, 'back').setScrollFactor(0);
        const map = this.make.tilemap({ key: 'jsonLevel' });
        const tileset = map.addTilesetImage('nombreDelTilesetEnTiled', 'tilesetPNG');
        this.collisionLayer = map.createLayer('collisionLayer', tileset);

        // this.debugCamera = new DebugMapCamera(this);

        const playersFromTiled = this.findObjectsByClassInObjectsLayer('player', map);
        this.player = new Player(this, playersFromTiled[0].x, playersFromTiled[0].y);

        // Hacemos que los tiles que pertenecen a la collisionLayer sean colisionables    
        this.collisionLayer.setCollisionByExclusion([-1]);
        // Establecemos la colisión entre el jugador y la collisionLayer
        this.physics.add.collider(this.player, this.collisionLayer);
        map.createLayer('grassLayer', tileset).setDepth(100);
        map.createLayer('backgroundLayer', tileset);

        this.cameras.main.setSize(gameWidth, gameHeight);
        // this.cameras.main.startFollow(this.player);
        this.cameras.main.scrollY = 0;

        const antsFromTiled = this.findObjectsByClassInObjectsLayer('antEnemy', map);
        const ants = this.insertBadGuys(this, antsFromTiled, AntEnemy);

        this.physics.add.overlap(this.player, ants, this.player.checkEnemy, null, this.player);

        const caterpillarsFromTiled = this.findObjectsByClassInObjectsLayer('caterpillarEnemy', map);
        const caterpillars = this.insertBadGuys(this, caterpillarsFromTiled, CaterpillarEnemy);
        this.physics.add.overlap(this.player, caterpillars, this.player.checkEnemy, null, this.player);


        const beesFromTiled = this.findObjectsByClassInObjectsLayer('beeEnemy', map);
        const bees = this.insertBadGuys(this, beesFromTiled, BeeEnemy);

        const goalFromTiled = this.findObjectsByClassInObjectsLayer('goal', map)[0];
        this.putCheckPoint(goalFromTiled.x, goalFromTiled.y, 'goal');
        this.cameras.main.setBounds(0, 0, 3520, 640);

        this.physics.world.setBoundsCollision(false, false, false, true);
        this.physics.world.on('worldbounds', () => {
            this.scene.start('Lose');
        });
    }

    putCheckPoint(x, y, sprite) {
        const goal = this.physics.add.sprite(x, y, sprite);
        goal.body.immovable = true;
        goal.body.moves = false;
        goal.setSize(160, 160);
        this.physics.add.overlap(this.player, goal, this.playerReachGoal, null, this);
    }

    playerReachGoal() {
        this.scene.start('Win');
    }

    insertBadGuys(scene, arrayDeMalos, type) {
        const enemies = scene.physics.add.group({ classType: type, runChildUpdate: true, runChildCreate: true, gravityY: 100 }); // Cuando instanciamos un grupo, los parámetros de gravedad los ponemos en la creación del grupo en lugar de en el personaje individual
        for (let i = 0; i < arrayDeMalos.length; i++) {
            const malo = new type(scene, arrayDeMalos[i].x, arrayDeMalos[i].y);
            enemies.add(malo);
        }
        return enemies;
    }

    update(time, delta) {
        // this.debugCamera.update(time, delta);
        this.player.update();
        this.cameras.main.scrollX = this.player.x - 400;
        this.bg.tilePositionX = this.player.x;
    }

    findObjectsByClassInObjectsLayer(classParam, tilemap) {
        const result = [];
        tilemap.objects.forEach(function (element) {
            if (element.name === 'objectsLayer') {
                element.objects.forEach(function (element2) {
                    if (element2.type === classParam) {
                        element2.y -= tilemap.tileHeight;
                        result.push(element2);
                    }
                });
            }
        });
        return result;
    }
}

export default Platform;