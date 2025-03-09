var config = {
  type: Phaser.AUTO,
  width: 1920,
  height: 1080,
  physics: {
    default: 'arcade',
    arcade: {
      gravity: { y: 300},
      debug: false
    }
  },

  scene: {
    preload: preload,
    create: create,
    update: update
  }
};

var game = new Phaser.Game(config);

var Score = 0;

var scoreText;
var objetiveText;
var gameOver = false;

function preload() {
  this.load.image('background', 'assets/game_background_3.png');
  this.load.image('ground', 'assets/platform.png');
  this.load.image('wood', 'assets/wood.png');
  this.load.image('bomb', 'assets/skull.png');
  this.load.spritesheet('character', 'assets/character.png', {frameWidth: 95.6, frameHeight: 56});
}

function create() {
  var background = this.add.image(0, 0, 'background').setOrigin(0);
  background.setScale(0.6);

  //Tiles

  platforms = this.physics.add.staticGroup();

  platforms.create(550, 1080, 'ground').setScale(7).refreshBody();
  platforms.create(1550, 700, 'ground').setScale(2);
  platforms.create(0, 700, 'ground').setScale(2);
  platforms.create(1050, 400, 'ground').setScale(1.5);

  //Player

  player = this.physics.add.sprite(100, 650, 'character').setScale(2);

  player.setCollideWorldBounds(true);

  player.setBounce(0.1);

  this.anims.create({
    key: 'left',
    frames: this.anims.generateFrameNumbers('character', {start: 0, end: 5}),
    frameRate: 10,
    repeat: -1
  });

  this.anims.create({
    key: 'idle',
    frames: [{key: 'character', frame: 6}],
    frameRate: 20
  });

  this.anims.create({
    key: 'right',
    frames: this.anims.generateFrameNumbers('character', {start: 7, end: 12}),
    frameRate: 10,
    repeat: -1
  });

  player.body.setGravityY(300);

  this.physics.add.collider(player, platforms);

  cursors = this.input.keyboard.createCursorKeys();

  //Wood

  woods = this.physics.add.group({
    key: 'wood',
    repeat: 1,
    setXY: {x:350, y: 0, stepX: 130}
  });

  woods.children.iterate(function(child) {
    child.setBounceY(Phaser.Math.FloatBetween(0.1, 0.3));
    child.setScale(0.3);
  });

  this.physics.add.collider(woods, platforms);

  this.physics.add.overlap(player, woods, collectWood, null, true);

  //Score

  scoreText = this.add.text(860, 1010, 'Score: 0', {fontSize: '42px', fill: '#fff'});

  //Objetive

  objetiveText = this.add.text(30, 1010, 'COLLECT THE WOODS', {fontSize: '42px', fill: '#fff'});

  //Skull bomb

  skulls = this.physics.add.group();

  this.physics.add.collider(skulls, platforms);

  this.physics.add.collider(player, skulls, hitSkull, null, this);
}

function update() {
  if(gameOver) {
    return
  }
  
  if(cursors.left.isDown){
    player.setVelocityX(-160);

    player.anims.play('left', true);
  } else if(cursors.right.isDown){
    player.setVelocityX(160);

    player.anims.play('right', true);
  } else {
    player.setVelocityX(0);

    player.anims.play('idle', true);
  }

  if(cursors.up.isDown && player.body.touching.down){
    player.setVelocityY(-620);
  }
}

function collectWood(player, wood){
  wood.disableBody(true, true);

  Score += 10;
  scoreText.setText('Score: ' + Score);

  if(woods.countActive(true) === 0){
    woods.children.iterate(function(child) {
      child.enableBody(true, child.x, 0, true, true);
    });

    var x = (player.x < 400) ? Phaser.Math.Between(400, 800) : Phaser.Math.Between(0, 400);

  var bomb = skulls.create(x, 16, 'bomb');

  bomb.setBounce(1);

  bomb.setCollideWorldBounds(true);

  bomb.setScale(0.4);

  bomb.setVelocity(Phaser.Math.Between(-200, 200), 20);
  }
}

function hitSkull(player, bomb){
  this.physics.pause();

  player.setTint(0xff0000);

  player.anims.play('idle');

  gameOver = true;
}
