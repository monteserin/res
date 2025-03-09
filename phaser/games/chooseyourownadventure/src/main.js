import { Boot } from "./scenes/Boot";
import { Game } from "./scenes/Game";
import { Spaceship } from "./scenes/Spaceship";
import { Home } from "./scenes/Home";
import { Monster } from "./scenes/Monster";
//  Find out more information about the Game Config at:
//  https://newdocs.phaser.io/docs/3.70.0/Phaser.Types.Core.GameConfig
const config = {
  type: Phaser.AUTO,
  width: 960,
  height: 640,
  parent: "game-container",
  backgroundColor: "#028af8",
  scale: {
    mode: Phaser.Scale.FIT,
    autoCenter: Phaser.Scale.CENTER_BOTH,
  },
  scene: [Boot, Game, Spaceship, Home, Monster],
};

export default new Phaser.Game(config);
