class Building extends Phaser.Physics.Arcade.Sprite {
  constructor(scene, buildingInfo) {
    super(scene, buildingInfo.x, buildingInfo.y, "building");
    scene.add.existing(this);
    scene.physics.add.existing(this, true);

    this.setOrigin(0, 1);
    const buildingHeight =
      Math.floor(Math.random() * (buildingInfo.buildingHeight - 100)) + 200;
    const scaleX = buildingInfo.buildingWidth / this.width; // the desired width divided by the original width
    const scaleY = buildingHeight / this.height; // the desired height divided by the original height
    this.setScale(scaleX, scaleY);
    // this.body.setSize(buildingInfo.buildingWidth, buildingInfo.buildingHeight);
    // this.setSize(buildingInfo.buildingWidth, buildingInfo.buildingHeigh);
    this.body.setSize(this.displayWidth, this.displayHeight);

    this.body.setOffset(this.displayWidth / 2, -this.displayHeight + 100);

  }
}

export default Building;
