import Enemy from "./Enemy";

class CaterpillarEnemy extends Enemy {
  constructor(scene, x, y) {
    super(scene, x, y, "caterpillar");

    this.play("caterpillarWalk");
  }
}

export default CaterpillarEnemy;
