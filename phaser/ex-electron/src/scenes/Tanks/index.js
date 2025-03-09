import tank1Img from './assets/img/tank1.png';
import tank2Img from './assets/img/tank2.png';
import bulletImg from './assets/img/bullet.jpg';
import groundImg from './assets/img/ground.png';


let player1, player2, activePlayer, cursors, angleText, powerText;
let bullets, angle = 45, power = 500, canShoot = true;

class Tanks extends Phaser.Scene {

    constructor() {
        super('Tanks');
    }

    preload() {
        this.load.image('tank1', tank1Img);
        this.load.image('tank2', tank2Img);
        this.load.image('bullet', bulletImg);
        this.load.image('ground', groundImg);
    }
    create() {
        this.add.image(400, 575, 'ground');

        player1 = this.physics.add.sprite(100, 500, 'tank1');
        player2 = this.physics.add.sprite(700, 500, 'tank2');
        activePlayer = player1;

        bullets = this.physics.add.group({ allowGravity: true });
        this.physics.add.collider(player2, bullets, this.hitPlayer, null, this);

        cursors = this.input.keyboard.createCursorKeys();

        angleText = this.add.text(10, 10, `Ángulo: ${angle}`, { fontSize: '16px', fill: '#ff0000' });
        powerText = this.add.text(10, 30, `Potencia: ${power}`, { fontSize: '16px', fill: '#ff0000' });
    }

    update() {
        if (cursors.left.isDown) {
            angle -= 1;
        } else if (cursors.right.isDown) {
            angle += 1;
        }

        if (cursors.up.isDown) {
            power += 10;
        } else if (cursors.down.isDown) {
            power -= 10;
        }

        if (cursors.space.isDown && canShoot) {
            this.shootBullet();
        }

        angleText.setText(`Ángulo: ${angle}`);
        powerText.setText(`Potencia: ${power}`);
    }


    shootBullet() {
        canShoot = false;
        const bullet = bullets.create(activePlayer.x, activePlayer.y, 'bullet');
        this.physics.velocityFromAngle(angle - 90, power, bullet.body.velocity);
        setTimeout(() => {
            canShoot = true;
            activePlayer = activePlayer === player1 ? player2 : player1;
        }, 1000);
    }

    hitPlayer(player, bullet) {
        bullet.disableBody(true, true);
        // Aquí puedes agregar el código para manejar lo que sucede cuando un jugador es alcanzado, como reducir la vida o terminar el juego
    }
}

export default Tanks;