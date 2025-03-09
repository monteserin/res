import Enemy from "./Enemy";

export class CaterpillarEnemy extends Enemy {
  constructor(scene, x, y) {
    super(scene, x, y, "caterpillar");
    // this.scale = 3;

    this.play("enemy1walk");
  }
}
