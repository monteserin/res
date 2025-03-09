import Enemy from "./Enemy";

class AntEnemy extends Enemy {
  constructor(scene, x, y) {
    super(scene, x, y, "ant");
    this.play("antWalk");
  }
}
export default AntEnemy;
