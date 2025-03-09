class Escena extends Phaser.Scene {

  preload() {
    this.load.image('fondo', '../img/fondo.jpg');
    this.load.spritesheet('player', '../img/player.png', { frameWidth: 180, frameHeight: 180 });
    this.load.tilemapTiledJSON('level1', '../img/map.json');
    this.load.image('gameTiles', '../img/tiles.png');
    this.load.image('flecha', '../img/flecha.png');

    this.load.spritesheet('explosion', '../img/crash.png', { frameWidth: 199, frameHeight: 200 });





  }

  create() {
    this.bg = this.add.tileSprite(480, 320, 960, 640, 'fondo').setScrollFactor(0);


    const map = this.add.tilemap('level1');
    const playersFromTiled = this.findObjectsByType('player', map);


    this.player = new Player(this, playersFromTiled[0].x, playersFromTiled[0].y);


    const tileset = map.addTilesetImage('tiles', 'gameTiles');


    this.collisionLayer = map.createStaticLayer('collisionLayer', tileset);
    // Hacemos que los tiles que pertenecen a la collisionLayer sean colisionables    
    this.collisionLayer.setCollisionByExclusion([-1]);
    // Establecemos la colisión entre el jugador y la collisionLayer
    this.physics.add.collider(this.player, this.collisionLayer);


    this.cursors = this.input.keyboard.createCursorKeys();


    this.animacionesDeLaEscena();
    this.controlesVisuales();
    this.cameras.main.setSize(960, 640);



    const metaFromTiled = this.findObjectsByType('meta', map)[0];
    this.meta = this.physics.add.sprite(metaFromTiled.x, metaFromTiled.y, 'meta');
    this.meta.body.immovable = true;
    this.meta.body.moves = false;

    this.meta.setSize(160, 160);
    this.physics.add.overlap(this.player, this.meta, this.playerAlcanzaMeta, null, this);

    this.physics.world.setBoundsCollision(false, false, false, true);
    this.physics.world.on('worldbounds', () => {
      this.scene.start('perderScene');
    });
  }

  playerAlcanzaMeta() {
    // this.scene.start('finScene');
  }

  playerGolpeadoPorAvispa() {
    this.player.estaAturdido = true;
    this.player.body.setVelocity(-100, -100);
    this.time.addEvent({ delay: 1000, callback: this.terminoElAturdimiento, callbackScope: this });
  }

  terminoElAturdimiento() {
    this.player.estaAturdido = false;
  }

  findObjectsByType(type, tilemap) {
    const result = [];
    tilemap.objects.forEach(function (element) {
      if (element.name === 'objectsLayer') {
        element.objects.forEach(function (element2) {
          if (element2.type === type) {
            element2.y -= tilemap.tileHeight;
            result.push(element2);
          }
        });
      }
    });
    return result;
  }


  update() {
    this.bg.tilePositionX = this.player.x;

    if (!this.player.estaAturdido) {
      if (this.player.estaVivo) {
        if (this.cursors.left.isDown || this.player.getData('direccionHorizontal') === Phaser.LEFT) {
          this.player.caminarALaIzquierda()
        } else if (this.cursors.right.isDown || this.player.getData('direccionHorizontal') === Phaser.RIGHT) {
          this.player.caminarALaDerecha();
        } else {
          this.player.reposo();
        }

        if (this.cursors.up.isDown || this.player.getData('estaSaltando') === Phaser.UP) {
          this.player.saltar();
        }

      }
      this.player.update();

    }

    this.cameras.main.scrollX = this.player.x - 400;
    this.cameras.main.scrollY = 0;
    this.cameras.main.setBounds(0, 0, 3520, 640);

  }

  animacionesDeLaEscena() {
    this.anims.create({
      key: 'walk',
      frames: this.anims.generateFrameNumbers('player', { start: 2, end: 5 }),
      frameRate: 10,
      repeat: -1,
    });
    this.anims.create({
      key: 'reposo',
      frames: this.anims.generateFrameNumbers('player', { start: 0, end: 1 }),
      frameRate: 4,
      repeat: -1,
    });

    this.anims.create({
      key: 'caer',
      frames: this.anims.generateFrameNumbers('player', { start: 6, end: 8 }),
      frameRate: 7,
      repeat: -1,
    });

  }


  controlesVisuales() {
    this.player.setData('direccionHorizontal', 0);
    this.player.setData('estaSaltando', false);

    const leftbtn = this.add.sprite(50, 560, 'flecha').setInteractive()
    leftbtn.setScrollFactor(0);
    leftbtn.setDepth(200);
    const rightbtn = this.add.sprite(140, 560, 'flecha').setInteractive();
    rightbtn.flipX = true;
    rightbtn.setScrollFactor(0);
    rightbtn.setDepth(200);

    const upbtn = this.add.sprite(850, 560, 'flecha').setInteractive();
    upbtn.rotation = Math.PI / 2;
    upbtn.setScrollFactor(0);
    upbtn.setDepth(200);

    leftbtn.on('pointerdown', function () {
      this.scene.player.setData('direccionHorizontal', Phaser.LEFT);
    });

    rightbtn.on('pointerdown', function () {
      this.scene.player.setData('direccionHorizontal', Phaser.RIGHT);
    });

    upbtn.on('pointerdown', function () {
      this.scene.player.setData('estaSaltando', Phaser.UP);
    });

    leftbtn.on('pointerup', function () {
      this.scene.player.setData('direccionHorizontal', Phaser.NONE);
    });

    rightbtn.on('pointerup', function () {
      this.scene.player.setData('direccionHorizontal', Phaser.NONE);
    });

    upbtn.on('pointerup', function () {
      this.scene.player.setData('estaSaltando', Phaser.NONE);
    });
  }
}

class Player extends Phaser.Physics.Arcade.Sprite {
  constructor(scene, x, y) {
    super(scene, x, y, 'player');
    scene.physics.systems.displayList.add(this);
    scene.physics.systems.updateList.add(this);
    scene.physics.world.enableBody(this, 0);
    this.setSize(90, 180, true);
    this.scaleX = 0.5;

    this.estaVivo = true;
    this.on('animationcomplete', this.animationComplete, this);
    this.setCollideWorldBounds(true);
    this.body.onWorldBounds = true;

  }

  animationComplete(animation, frame, sprite) {
    if (animation.key === 'explosionAnim') {
      this.disableBody(true, true);
      this.scene.scene.start('perderScene');
    }
  }

  checkEnemy(player, enemigo) {
    //  El jugador está cayendo?
    if (this.body.velocity.y > 0) {
      enemigo.morir();
    } else {
      this.morir();
    }
  }

  morir() {
    this.estaVivo = false;
    this.disableBody();
    this.play('explosionAnim', true);
  }

  saltar() {
    if (this.enElSuelo) {
      this.body.setVelocityY(-250);
      this.play('caer', true);
    }
  }

  update() {
    this.enElSuelo = this.body.onFloor();
  }

  caminarALaIzquierda() {
    this.body.setVelocityX(-250);
    this.flipX = true;
    if (this.enElSuelo) this.play('walk', true);
  }

  caminarALaDerecha() {
    this.body.setVelocityX(250);
    this.flipX = false;
    if (this.enElSuelo) this.play('walk', true);
  }

  reposo() {
    this.body.setVelocityX(0);
    if (this.enElSuelo) this.play('reposo', true);

  }
}


const config = {
  type: Phaser.AUTO,
  width: 960,
  height: 640,
  scene: [Escena],
  scale: {
    mode: Phaser.Scale.FIT
  },
  physics: {
    default: 'arcade',
    arcade: {
      gravity: {
        y: 300,
      },
    },
  }
};

new Phaser.Game(config);

