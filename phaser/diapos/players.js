class Serpiente extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y) {
        super(scene, x, y, 'serpiente');
        scene.physics.systems.displayList.add(this);
        scene.physics.systems.updateList.add(this);
        scene.physics.world.enableBody(this, 0);
        this.flipX = true;
    }
    caminarALaDerecha(){
        this.body.setVelocityX(250);
    }
    parar(){
        this.body.setVelocityX(0);
    }
}

class Oruguita extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y) {
        super(scene, x, y, 'oruga');
        scene.physics.systems.displayList.add(this);
        scene.physics.systems.updateList.add(this);
        scene.physics.world.enableBody(this, 0);
        this.flipX = true;
    }

    caminarALaDerecha() {
        this.body.setVelocityX(250);
        this.flipX = true;
        this.play('orugaLeft', true);
    }
    caminarALaIzquierda() {
        this.body.setVelocityX(-250);
        this.flipX = true;
        this.play('orugaLeft', true);
    }
    parar(){
        this.body.setVelocityX(0);
    }
}
class Player extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y) {
        super(scene, x, y, 'player');
        scene.physics.systems.displayList.add(this);
        scene.physics.systems.updateList.add(this);
        scene.physics.world.enableBody(this, 0);
        this.enElSuelo = true;
        this.estaAturdido = false;
        this.estaVivo = true;
        this.setSize(90, 180, true);
        this.on('animationcomplete', this.animationComplete, this);
        this.setCollideWorldBounds(true);
        this.body.onWorldBounds = true;
    }

    caminarALaIzquierda() {
        this.body.setVelocityX(-250);
        this.flipX = true;
        if (this.enElSuelo) this.play('andar', true);
    }

    caminarALaDerecha() {
        console.log(1111111111)
        this.body.setVelocityX(250);
        this.flipX = false;
        if (this.enElSuelo) this.play('andar', true);
    }

    reposo() {
        this.body.setVelocityX(0);
        if (this.enElSuelo) this.play('reposo', true);
    }

    saltar() {
        if (this.enElSuelo && !this.estaAturdido) {
            this.body.setVelocityY(-250);
            this.play('caer', true);
        }
    }

    update() {
        this.enElSuelo = this.body.onFloor();
    }

    checkEnemy(player, enemigo) {
        //  El jugador está cayendo?
        if (this.body.velocity.y > 0) {
            enemigo.morir();
        } else {
            this.morir();
        }
    }

    morir() {
        this.estaVivo = false;
        this.disableBody();
        this.play('explosionAnim', true);
    }

    playerGolpeadoPorAvispa() {
        this.estaAturdido = true;
        this.body.setVelocity(-150, -150);
        this.scene.time.addEvent({ delay: 1000, callback: this.terminoElAturdimiento, callbackScope: this });
    }

    terminoElAturdimiento() {
        this.estaAturdido = false;
    }

    aturdido() {
        this.play('caer');
    }

    animationComplete(animation, frame, sprite) {
        if (animation.key === 'explosionAnim') {
            this.disableBody(true, true);
            this.scene.scene.start('perderScene');
        }
    }
}

class Avispita extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y) {
        super(scene, x, y, 'avispa');
        scene.physics.systems.displayList.add(this);
        scene.physics.systems.updateList.add(this);

        this.flipX = true;
        this.play('avispaLeft', true);
        this.pathVector = new Phaser.Math.Vector2();
        this.pathIndex = 0;
        this.pathSpeed = 0.01;

        this.flyPath = new Phaser.Curves.Ellipse(x, y, 100, 100);
        this.flyPath.getPoint(0, this.pathVector);
        this.setPosition(this.flyPath.x, this.flyPath.y); 
        this.patrolCircle = new Phaser.Geom.Circle(0, 0, 256);

    }
    update(playerXPosition) {
        this.pathIndex = Phaser.Math.Wrap(this.pathIndex + this.pathSpeed, 0, 1);

        this.flyPath.getPoint(this.pathIndex, this.pathVector);

        this.setPosition(playerXPosition, this.pathVector.y);
    }
}