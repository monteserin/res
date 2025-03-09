import 'phaser';
import { gameWidth, gameHeight } from './consts';
import Start from './scenes/Start';
import ChooseFaces from './scenes/ChooseFaces';
import Lose from './scenes/Lose';
import RacerWithArcade from './scenes/RacerWithArcade';
import RacerWithMatter from './scenes/RacerWithMatter/scenes/Game';
import RacerWithMatterMenu from './scenes/RacerWithMatter/scenes/Menu';
import Pong from './scenes/Pong';
import Platform from './scenes/Platform/scenes/Platform';
import ShootingGallery from './scenes/ShootingGallery';
import FlappyBird from './scenes/FlappyBird';
import FallDown from './scenes/FallDown';
import Init from './scenes/ChooseYourOwnAdventure/scenes/Init';
import Spaceship from './scenes/ChooseYourOwnAdventure/scenes/Spaceship';
import Monster from './scenes/ChooseYourOwnAdventure/scenes/Monster';
import Home from './scenes/ChooseYourOwnAdventure/scenes/Home';
// import MultiplayerRoom from './scenes/MultiplayerRoom';
import Karate from './scenes/Karate';
import Tanks from './scenes/Tanks';
import Win from './scenes/Win';
import OpWolf from './scenes/OpWolf';


const config = {
    type: Phaser.AUTO,
    width: gameWidth,
    height: gameHeight,
    parent: `gameParent`,
    scene: [OpWolf, Start, Karate, ChooseFaces, RacerWithArcade, RacerWithMatter, RacerWithMatterMenu, Lose, Pong, Platform, ShootingGallery, FlappyBird, FallDown, Init, Spaceship, Monster, Home, Tanks, /*MultiplayerRoom,*/ Win],
    scale: {
        mode: Phaser.Scale.FIT,
        autoCenter: Phaser.Scale.CENTER_BOTH
    },
    dom: {
        createContainer: true
    },
    physics: {
        default: 'arcade',
        // arcade: {
        //     debug: true
        // }
    },


};

new Phaser.Game(config);

