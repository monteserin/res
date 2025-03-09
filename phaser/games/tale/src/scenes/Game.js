import { Scene } from "phaser";
import story from "../data/scenes";

export class Game extends Scene {
  constructor() {
    super("Game");
  }

  create() {
    this.add.image(0, 0, "scene-1-background").setOrigin(0);
    this.add
      .text(512, 384, story[0].content, {
        fontFamily: "Arial Black",
        fontSize: 38,
        color: "#ffffff",
        stroke: "#000000",
        strokeThickness: 8,
        align: "center",
      })
      .setOrigin(0.5);
  }
}
