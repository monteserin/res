import ant from './assets/img/ant.png';
import Enemy from '../Enemy';

class AntEnemy extends Enemy {
    constructor(scene, x, y) {
        super(scene, x, y, 'ant');

        this.anims.create({
            key: 'antWalk',
            frames: this.anims.generateFrameNumbers('ant', { start: 0, end: 3 }),
            frameRate: 7,
            repeat: -1,
        });
        this.play('antWalk');
    }

    static loadAssets(scene) {
        scene.load.spritesheet('ant', ant, { frameWidth: 192, frameHeight: 96 });
    }

}
export default AntEnemy;