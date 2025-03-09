import caterpillar from './assets/img/caterpillar.png';
import Enemy from '../Enemy';

class CaterpillarEnemy extends Enemy {
    constructor(scene, x, y) {
        super(scene, x, y, 'caterpillar');

        this.anims.create({
            key: 'caterpillarWalk',
            frames: this.anims.generateFrameNumbers('caterpillar', { start: 0, end: 3 }),
            frameRate: 7,
            repeat: -1,
        });
        this.play('caterpillarWalk');
    }

    static loadAssets(scene) {
        scene.load.spritesheet('caterpillar', caterpillar, { frameWidth: 96, frameHeight: 192 });
    }
}

export default CaterpillarEnemy;