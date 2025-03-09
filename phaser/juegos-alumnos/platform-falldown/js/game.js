var config = {
  type: Phaser.AUTO,
  scale: {
    mode: Phaser.Scale.FIT,
    parent: "game-container",
    autoCenter: Phaser.Scale.CENTER_BOTH,
    width: 1920,
    height: 1280
  },
  scene: MenuScene,
  physics: {
    default: 'arcade',
    arcade: {
      gravity: {
        y:1000
      }
    }
  }
};

var game = new Phaser.Game(config);
