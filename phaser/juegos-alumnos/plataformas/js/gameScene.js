class GameScene extends Phaser.Scene {
  preload() {
    this.load.image('background','res/backgroundEmpty.png');
    this.load.image('diamond','res/diamondGrey.png');
    this.load.image('diamondRed','res/diamondRed.png');
    this.load.image('diamondGreen','res/diamondGreen.png');
    this.load.image('diamondYellow','res/diamondYellow.png');
    this.load.image('bomb','res/bomb.png');
    this.load.image('heartEmpty','res/heartEmpty.png');
    this.load.image('heartFull','res/heartFull.png');
    this.load.image('flare','res/flare.png');
    this.load.image('bullet','res/bullet.png');

    this.load.tilemapTiledJSON('map','res/map.json');
    this.load.image('tiles','res/platformerPack_industrial_tilesheet.png');

    this.load.image('player','res/stand1.png');
    this.load.atlas('sprites_player','res/sprites_player.png','res/sprites_player_atlas.json');

    this.load.image('fly','res/volar1.png');
    this.load.atlas('sprites_fly','res/sprites_fly.png','res/sprites_fly_atlas.json');

    this.load.audio('audioLoop','res/loop.mp3');
    this.load.audio('audioExplosion','res/explosion.wav');
    this.load.audio('audioJump','res/jump.wav');
    this.load.audio('audioShot','res/shot.wav');
    this.load.audio('audioDeath','res/flyDeath.wav');
    this.load.audio('audioPop','res/pop.mp3');
  }

  create() {

    //Music
    this.audioLoop = this.sound.add('audioLoop');
    this.audioLoop.play({
      volume: 1,
      loop: true
    })

    this.audioExplosion = this.sound.add('audioExplosion');
    this.audioJump = this.sound.add('audioJump');
    this.audioShot = this.sound.add('audioShot');
    this.audioDeath = this.sound.add('audioDeath');
    this.audioPop = this.sound.add('audioPop');

    this.timeBullet = 0;
    this.cursores = this.input.keyboard.createCursorKeys();

    //Background and Start Scene
    this.fondo = this.add.image(0, 0, 'background').setOrigin(0, 0);
    this.fondo.setScale(2,1.5);

    //Platform tiles
    this.mapa = this.make.tilemap({
      key: 'map'
    })

    this.hojaTiles = this.mapa.addTilesetImage('tiles', 'tiles', 64, 64, 1, 2);
    this.plataformas = this.mapa.createLayer('Platforms', this.hojaTiles, 0, 0);
    this.decorations = this.mapa.createLayer('Decorations', this.hojaTiles, 0, 0);

    //Player
    this.player = new Jugador(this, 200, 1050);
    this.lives = 3;

    this.createLives();

    this.plataformas.setCollisionByExclusion(-1,true);
    this.physics.add.collider(this.player, this.plataformas);
    this.physics.world.setBounds(0, 0, 1920, 1280);
    this.player.setCollideWorldBounds(true);

    //Collectables
    this.diamondDict = {
      "1":"DiamondsRed",
      "2":"DiamondsGreen",
      "3":"DiamondsYellow"
    }

    if (this.mapa.getObjectLayer("DiamondsRed")!= null) {
      this.objetos = this.mapa.getObjectLayer("DiamondsRed")['objects'];
      for (var i = 0; i < this.objetos.length; i++){
        this.diamond = new DiamondRed(this, this.objetos[i].x, this.objetos[i].y);
        this.diamond.setScale(1.5);
      
        this.physics.add.collider(this.diamond, this.plataformas);
        this.physics.add.collider(this.diamond, this.player, this.colliderDiamondPlayer, null, this);
      }
    }

    this.time.addEvent({
      delay: 10000,
      callback: this.addDiamonds,
      callbackScope: this,
      loop: true
    });

    //Scores
    this.scoreImage = this.add.image(40, 40, 'diamond');
    this.scoreImage.setScale(2);
    this.scoreImage.setRotation(0.5);

    this.points = 0;
    this.scoreText = this.add.text(90, 20, this.points);
    this.scoreText.setFontSize(50);
    this.scoreText.setFill('#000');

    //Enemy - Bomb
    this.time.addEvent({
      delay: 2000,
      callback: this.launchBomb,
      callbackScope: this,
      loop: true
    });

    //Enemy - Fly
    this.flies = [];

    this.time.addEvent({
      delay: 5000,
      callback: this.spawnFly,
      callbackScope: this,
      loop: true
    });

    //Particles
    this.particles = this.add.particles('flare');
    
    this.particles.createEmitter({
      x: 0,
      y: 0,
      lifespan: 1000,
      speed: { min: 200, max: 400 }, 
      angle: { min: 0, max: 360 },
      gravityY: 300,
      scale: { start: 1, end: 0 },
      quantity: 15,
      blendMode: 'ADD',
      on: false
    });
    
  }

  update() {

    //Player
    this.player.update();
    
    //Enemy - Fly
    for (var i = 0; i < this.flies.length; i++) {
      var fly = this.flies[i];
      fly.update();
    }

    //Particles
    if (this.particles.active && this.particles.lifespanElapsed >= this.particles.lifespan) {
      this.particles.stop();
    }

    //Bullets
    if(this.cursores.shift.isDown && this.timeBullet <= 0) {
      this.timeBullet = 10;
      this.bullet = new Bullet (this, this.player.body.x + this.player.body.width/2, this.player.body.y + this.player.body.height/2);
      this.audioShot.play();
      if(this.player.flipX) {
        this.bullet.setVelocityX(-600);
        this.bullet.setFlipX(true);
      } else {
        this.bullet.setVelocityX(600);
      }

      for (var i = 0; i < this.flies.length; i++) {
        this.physics.add.collider(this.bullet, this.flies[i], this.colliderBulletFly, null, this);
      }
    
    }
    this.timeBullet = this.timeBullet-1;

  }

  //Collider action between a diamond and the player
  colliderDiamondPlayer(diamond) {
    this.audioPop.play();
    diamond.destroy(true);
    this.points++;
    this.scoreText.text = this.points;
    if(this.points%6 == 0){
      this.addDiamonds();
    }
  }

  //Adding diamonds to the scene
  addDiamonds(){
    var random = Math.floor(Math.random() * 3) + 1;

    if (this.points%6 == 0 && this.points != 0){
      if (this.mapa.getObjectLayer(this.diamondDict[random.toString()])!= null){
        this.objetos = this.mapa.getObjectLayer(this.diamondDict[random.toString()])['objects'];
        for (var i = 0; i < this.objetos.length; i++){
          if(this.diamondDict[random.toString()] == "DiamondsRed"){
            this.diamond = new DiamondRed(this, this.objetos[i].x, this.objetos[i].y);
          } else if (this.diamondDict[random.toString()] == "DiamondsGreen") {
            this.diamond = new DiamondGreen(this, this.objetos[i].x, this.objetos[i].y);
          } else {
            this.diamond = new DiamondYellow(this, this.objetos[i].x, this.objetos[i].y);
          }
          this.diamond.setScale(1.5);
          
          this.physics.add.collider(this.diamond, this.plataformas);
          this.physics.add.collider(this.diamond, this.player, this.colliderDiamondPlayer, null, this);
        }
      }
    }
    
  }

  //Launch new bombs
  launchBomb() {
    var n_bombs = 2;
    
    for (var i = 1; i <= n_bombs; i++) {
      var minX = 50;
      var maxX = 1870;
      var randomX = Math.floor(Math.random() * (maxX - minX + 1)) + minX;
      var minY = -1000;
      var maxY = -100;
      var randomY = Math.floor(Math.random() * (maxY - minY + 1)) + minY;
      this.bomb = new Bomb(this,randomX,randomY);
      this.bomb.setScale(1.5);
      this.bomb.setGravity(0,-700);

      this.physics.add.collider(this.bomb, this.player, this.colliderBombPlayer, null, this);
    }
    
  }

  //Collider action between a bomb and the player
  colliderBombPlayer(bomb, player) {
    this.audioExplosion.play();
    this.particles.emitParticleAt(bomb.x, bomb.y);
    bomb.destroy(true);
    this.lives--;
    this.updateLives();
    this.cameras.main.shake(500,0.001);
  }

  //Adding the hearts at the beginning
  createLives() {
    this.heartFull1 = new HeartFull(this, 1875, 50);
    this.heartFull1.setScale(2);
    this.heartFull2 = new HeartFull(this, 1810, 50);
    this.heartFull2.setScale(2);
    this.heartFull3 = new HeartFull(this, 1745, 50);
    this.heartFull3.setScale(2);

    this.heartEmpty1 = new HeartEmpty(this, 1875, 50);
    this.heartEmpty1.setScale(2);
    this.heartEmpty1.setVisible(false);
    this.heartEmpty2 = new HeartEmpty(this, 1810, 50);
    this.heartEmpty2.setScale(2);
    this.heartEmpty2.setVisible(false);
    this.heartEmpty3 = new HeartEmpty(this, 1745, 50);
    this.heartEmpty3.setScale(2);
    this.heartEmpty3.setVisible(false);
  }

  //Update life status
  updateLives() {

    if (this.lives > 0) {
      this.heartEmpty1.setVisible(false);
      this.heartFull1.setVisible(true);
      if (this.lives > 1) {
        this.heartEmpty2.setVisible(false);
        this.heartFull2.setVisible(true);
        if (this.lives > 2) {
          this.heartEmpty3.setVisible(false);
          this.heartFull3.setVisible(true);
        } else {
          this.heartEmpty3.setVisible(true);
          this.heartFull3.setVisible(false);
        }
      } else {
        this.heartEmpty2.setVisible(true);
        this.heartFull2.setVisible(false);
        this.heartEmpty3.setVisible(true);
        this.heartFull3.setVisible(false);
      }
    } else {
      this.heartEmpty1.setVisible(true);
      this.heartFull1.setVisible(false);
      this.heartEmpty2.setVisible(true);
      this.heartFull2.setVisible(false);
      this.heartEmpty3.setVisible(true);
      this.heartFull3.setVisible(false);
      this.audioLoop.stop();
      this.scene.remove(this);
      this.scene.start('MenuScene');
    }

  }

  //Spawn fly action
  spawnFly() {
    if(this.flies.length < 10) {
      var positionsX = [-100,2020];
      var positionsY = [150,600,1050];
      var posX = positionsX[Phaser.Math.Between(0,1)];
      var posY = positionsY[Phaser.Math.Between(0,2)];
      this.fly = new Fly(this, posX, posY);
      if(posX < 0) {
        this.fly.body.setVelocityX(350);
      } else {
        this.fly.body.setVelocityX(-350);
      }
      this.flies.push(this.fly);
      this.physics.add.collider(this.fly, this.player, this.colliderFlyPlayer, null, this);
    }
  }

  //Collider action between a fly and the player
  colliderFlyPlayer() {
    if(this.fly.body != null){
      this.fly.body.setImmovable(true);
    } 
  }

  //Collider action between a bullet and a fly
  colliderBulletFly(bullet, fly) {
    this.audioDeath.play();
    this.particles.emitParticleAt(fly.x, fly.y);
    bullet.destroy(true);
    this.flies.splice(this.flies.indexOf(fly),1);
    fly.destroy(true);
  }

}
