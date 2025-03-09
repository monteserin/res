export const loadZone = (scene, x, y, width, height, nextScene) => {
    const zone = scene.add.zone(x, y, width, height);
    zone.setOrigin(0);
    zone.setInteractive();
    zone.once('pointerdown', () => scene.scene.start(nextScene));

    // const graphics = scene.add.graphics();
    // graphics.lineStyle(2, 0xFF0000);
    // graphics.strokeRect(x, y, width, height);
}