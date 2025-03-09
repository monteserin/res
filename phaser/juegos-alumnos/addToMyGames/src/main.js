import 'phaser';
import Init from './scenes/Init';
import { gameWidth, gameHeight } from './consts';

const config = {
	type: Phaser.AUTO,
	width: gameWidth,
	height: gameHeight,
	scene: Init,
	scale: {
		mode: Phaser.Scale.FIT
	}, 
  physics: {
		default: 'arcade',
		arcade: {
			debug: true,
			gravity: {
				y: 300,
			},
		},
	},
};

new Phaser.Game(config);