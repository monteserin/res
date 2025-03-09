export const makeZone = (scene, x, y, width, height, color, hasPhysics) => {
  const zone = scene.add.zone(x, y, width, height);
  zone.setOrigin(0);
  zone.setInteractive();
  hasPhysics && scene.physics.add.existing(zone, true);

  const graphics = scene.add.graphics();
  graphics.lineStyle(2, color);
  graphics.strokeRect(x, y, width, height);
  return zone;
};
