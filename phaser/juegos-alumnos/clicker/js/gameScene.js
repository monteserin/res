class GameScene extends Phaser.Scene {
  preload() {
    this.load.image("background", "res/background2.jpg");
    this.load.image("cross", "res/CrossDefault.png");
    this.load.image("crossClicked", "res/CrossClicked.png");
    this.load.image("crossDisabled", "res/CrossDisabled.png");
    this.load.image("circle", "res/CircleDefault.png");
    this.load.image("circleClicked", "res/CircleClicked.png");
    this.load.image("circleDisabled", "res/CircleDisabled.png");

    this.load.audio('audioClick','res/click.wav');
  }
  create() {

    this.audioClick = this.sound.add('audioClick');

    var backgroundImage = this.add.image(0, 0, "background").setOrigin(0, 0);
    backgroundImage.setDisplaySize(
      this.sys.game.config.width,
      this.sys.game.config.height
    );

    this.crossClicker = new CrossClicker(this, 400, 600);
    this.crossPushed = this.add.image(400,600,'crossClicked');
    this.crossPushed.setVisible(false);
    this.crossDisabled = this.add.image(400,600,'crossDisabled');
    this.crossDisabled.setVisible(false);
    this.circleClicker = new CircleClicker(this, 1500, 600);
    this.circlePushed = this.add.image(1500, 600,'circleClicked');
    this.circlePushed.setVisible(false);
    this.circleDisabled = this.add.image(1500, 600,'circleDisabled');
    this.circleDisabled.setVisible(false);

    //Points implementation
    this.pointsX = 0;
    this.pointsO = 0;
    this.textPointsX = this.add.text(400,200,this.pointsX);
    this.textPointsX.setFontSize(125);
    this.textPointsX.setFill('#000');
    this.textPointsX.setOrigin(0.5);
    this.textPointsO = this.add.text(1500,1000,this.pointsO);
    this.textPointsO.setFontSize(125);
    this.textPointsO.setFill('#000');
    this.textPointsO.setOrigin(0.5);

    //Countdown implementation
    this.countdown = 60;
    this.textCountdown = this.add.text(960,600,this.countdown);
    this.textCountdown.setFontSize(200);
    this.textCountdown.setFill('#000');
    this.textCountdown.setOrigin(0.5);

    this.countdownTimer = this.time.addEvent({
      delay: 1000,
      callback: countdownTick,
      callbackScope: this,
      loop: true
    })

    //Logic executed every second
    function countdownTick() {
      this.countdown--;
    
      this.textCountdown.setText(this.countdown);
    
      if (this.countdown == 0) {
        //Displaying the fallen player
        if(this.pointsX > this.pointsO){
          this.circleDisabled.setVisible(true);
        } else if (this.pointsX < this.pointsO) {
          this.crossDisabled.setVisible(true);
        }
      } else if (this.countdown < 0) {
        //Displaying the winner
        this.countdownTimer.remove();
        if(this.pointsX > this.pointsO){
          alert("X is the winner!");
          this.scene.restart();
        } else if (this.pointsX < this.pointsO) {
          alert("O is the winner!");
          this.scene.restart();
        } else {
          alert("The game ended in a draw!");
          this.scene.restart();
        }
      }
    }

    //Clicks implementation
    this.events.on('CrossClicked', function() {
      this.audioClick.play();
      if(this.crossDisabled.visible == false){
        this.pointsX++;
        this.textPointsX.setText(this.pointsX);

        this.crossPushed.setVisible(true);
      }
    }, this);

    this.events.on('CrossReleased', function() {
      this.crossPushed.setVisible(false);
    }, this);

    this.events.on('CircleClicked', function() {
      this.audioClick.play();
      if(this.circleDisabled.visible == false){
        this.pointsO++;
        this.textPointsO.setText(this.pointsO);

        this.circlePushed.setVisible(true);
      }
    }, this);

    this.events.on('CircleReleased', function() {
      this.circlePushed.setVisible(false);
    }, this);

  }
  update() {

  }

}
