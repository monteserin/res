class CrossClicker extends Phaser.Physics.Arcade.Sprite {
  constructor(escena, x, y) {
    super(escena, x, y, "cross");

    this.escena = escena;
    this.escena.add.existing(this);
    this.escena.physics.add.existing(this);

    //Set up in order to click this element
    this.setInteractive();
    this.on('pointerdown', function() {
      this.escena.events.emit('CrossClicked');
    });
    this.on('pointerup', function() {
      this.escena.events.emit('CrossReleased');
    });
  }

  update() {

  }
}
