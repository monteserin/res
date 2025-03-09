<?php 
$titulo_curso="Phaser";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
?>

<section id="amor" class="verIndice">
		<article id="inicio_del_documento" class="indice">
<ol>  
<li><a href="#que-es">¿Qué es Phaser?</a></li>
					<li><a href="#estructura-html">Estructura HTML</a></li>

<li><a href="#estructura-javascript">Estructura Javascript</a></li>


<li><a href="#publicacion">Publicación</a></li>

<li><a href="#elige-tu-propia-aventura">Elige tu propia Aventura</a></li>


<li><a href="#acierta-imagen">Acierta Imagen</a>


			<li><a href="#fall-down-game">Fall down</a></li>
			<li><a href="#galeria-tiro">Galería de tiro</a></li>

		<li><a href="#flappy-bird">Flappy Bird</a>
			
		</li>

		<li><a href="#carreras">Carreras</a>
		</li>

				<li><a href="#plataformas">Plataformas</a></li>
				<li><a href="#carreras-con-arcade-y-tiles">Carreras con arcade y tiles</a></li>

	</ol>
</article></section>

<main class="curso">

<article><div>	
		<h2 id="que-es">¿Qué es phaser?</h2>


	<p>Es una librería de Javascript que permite desarrollar videojuegos en este lenguaje de forma muy rápida.</p>

	<p>Algunos enlaces de interés</p>
	<ul>
		<li><a href="https://labs.phaser.io/index.html" target="_blank">Ejemplos resueltos</a></li>
			<li><a href="https://phaser.io/tutorials/getting-started-phaser3" target="_blank">Primeros pasos con Phaser 3</a></li>
			<li><a href="https://phaser.io/phaser3/api" target="_blank">Phaser 3 API</a></li>
			<li><a href="https://phaser.io/tutorials/making-your-first-phaser-3-game" target="_blank">Tu primer juego con Phaser 3</a></li>
			<li><a href="https://github.com/phaser-discord/community/blob/master/FAQ.md" target="_blank">FAQ</a></li>
			<li><a href="https://itch.io/game-assets" target="_blank">Descarga de sprites I</a></li>
			<li><a href="https://openclipart.org/" target="_blank">Descarga de sprites II</a></li>
	</ul></div></article>
	<article><div>
		<h2 id="estructura-html">Estructura HTML</h2>

	<p>Nuestro código Javascript estará dentro de un documento HTML similar al siguiente:</p>

	<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
	&lt;meta charset=&quot;UTF-8&quot;&gt;
	&lt;title&gt;El t&iacute;tulo del juego&lt;/title&gt;
	&lt;meta name=&quot;viewport&quot; content=&quot;user-scalable=no,  initial-scale=1,  maximum-scale=1,  width=device-width&quot; /&gt;
	&lt;style&gt;
		html, body {
			margin: 0 auto;
			padding: 0;
			background: black;
		}
	&lt;/style&gt;

	&lt;script src=&quot;phaser.js&quot;&gt;&lt;/script&gt;
	&lt;script src=&quot;javascript.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
	

	
<?= getRes('ejemplo','ex/pasos-comunes/1-estructura-js/index.html','Estructura básica',4) ?>
</div></article>

<article><div>
	<h2 id="estructura-javascript">Estructura Javascript</h2>
	<pre><code>class Escena extends Phaser.Scene {

	preload() {
		console.log('preload');
	}

	create() {
		console.log('create');
	}

	update() {
		console.log('update');
	}
}

const config = {
	type: Phaser.AUTO,
	width: 960,
	height: 640,
	scene: Escena,
	scale: {
		mode: Phaser.Scale.FIT
	}
};

new Phaser.Game(config);</code></pre>
<p>Para descargarte una plantilla para tus proyectos de React en la que esté todo bien preparado, puedes acceder a mi repositorio de github:</p>

<pre><code>git clone https://github.com/monteserin/phaser-template.git</code></pre>

o

<pre><code>npx degit monteserin/phaser-template</code></pre>
</div></article>
<article><div>
		<h2 id="elige-tu-propia-aventura">Elige tu propia aventura</h2>


<div class="row">
	<div class="col-md-6"><p>Demo Jugable</p>
	<iframe class="monteserin_iframe" src="./ex/elige-tu-propia-aventura/index.html"></iframe>

	</div>
	<div class="col-md-6">
	<div class="centraditos">	
	<?= getRes('ejemplo','ex/elige-tu-propia-aventura/index.html', 'Ver juego terminado',4) ?>
		<?= getRes('recurso','ex/elige-tu-propia-aventura/img.zip','Descargar recursos') ?></div>
		</div>
	
	</div>
	
	
	<h3>Cargamos el fondo</h3>
	
<pre><code>class Escena extends Phaser.Scene {
	preload() {
		this.load.image('fondo', 'img/espacio.jpg');
	};

	create() {
		this.add.sprite(480, 320, 'fondo');
	};
}</code></pre>


	<h3>Area de la puerta pulsada</h3>

<pre><span class="font-weight-bold">Dentro del método create:</span> <code>const opcionNave = this.add.zone(140, 10, 450, 410);
opcionNave.setOrigin(0);
opcionNave.setInteractive();
opcionNave.once('pointerdown', () => this.opcionPulsada('nave'));
this.add.graphics().lineStyle(2, 0xff0000).strokeRectShape(opcionNave);
...
opcionPulsada(opcion) {
	alert(opcion);
}</code></pre>

<h3>Evalúa opción</h3>
<pre><code>opcionPulsada(opcion) {
	if (opcion === 'nave') {
		alert('nave');
	} else {
		alert('tierra');
	}
}</code></pre>
<h3>Con cambio de escena</h3>
<div class="row">
	<div class="col-md-6"><pre><code>opcionPulsada(opcion) {
	if (opcion === 'nave') {
		this.scene.start('naveScene');
	} else {
		this.scene.start('homeScene');
	}
}</code></pre></div>
	<div class="col-md-6"><pre><code>class EscenaNave extends Phaser.Scene {

constructor() {
	super({key: 'naveScene'});
}
...
}</code></pre></div>
	
</div>

	<h3>Escena nave</h3>



</div></article>

<article><div>

	<h2 id="publicacion">Publicación</h2>



<p>Para lograr un óptimo resultado, utilizaremos la siguiente metaetiquta y el siguiente código CSS:</p>
<pre><code>&lt;meta name=&quot;viewport&quot; content=&quot;user-scalable=no,  initial-scale=1,  maximum-scale=1,  width=device-width&quot; /&gt;
&lt;style&gt;
        body{
            background: brown

        }
        canvas{
            display:block;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
	}
&lt;/style&gt;</code></pre>

<h3>Apache cordova</h3>
<p>A la hora de compilar la aplicación con Apache Cordova o Phonegap Build es altamente recomendable incluir en la raíz de nuestro código (a la misma altura que el index.html), un fichero llamado config.xml con el siguiente código por defecto:</p>
<pre><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot; ?&gt;
	&lt;widget xmlns   = &quot;http://www.w3.org/ns/widgets&quot;
		xmlns:gap   = &quot;http://phonegap.com/ns/1.0&quot;
		id          = &quot;com.phonegap.example&quot;
		versionCode = &quot;1&quot;
		version     = &quot;1.0.0&quot; &gt;
	&lt;name&gt;PhoneGap Example App&lt;/name&gt;
	&lt;description&gt;
		An example for phonegap build app which wont show up in the playstore.
	&lt;/description&gt;
	&lt;author href=&quot;https://pablomonteserin.com/&quot; email=&quot;pablomonteserin@pablomonteserin.com&quot;&gt;
		Pablo Monteser&iacute;n
	&lt;/author&gt;
	&lt;preference name=&quot;Orientation&quot; value=&quot;landscape&quot; /&gt;
	&lt;preference name=&quot;Fullscreen&quot; value=&quot;true&quot; /&gt;
&lt;/widget&gt;</code></pre>
<p>En este fichero, podemos:</p>


<pre>Poner la aplicación a pantalla completa:<code> &lt;preference name=&quot;Fullscreen&quot; value=&quot;true&quot; /&gt; </code></pre>

<pre>Forzar la pantalla a horizontal o vertical<code>&lt;preference name=&quot;Orientation&quot; value=&quot;landscape&quot; /&gt;</code></pre>
<pre><code>&lt;preference name=&quot;Orientation&quot; value=&quot;portrait&quot; /&gt;</code></pre>
</div></article>

<article><div>
		<h2 id="acierta_imagen">Acierta imagen</h2>
<div class="row">
	<div class="col-md-6">	<iframe class="monteserin_iframe" src="./ex/acierta-imagen/index.html" ></iframe>
</div>
	<div class="col-md-6"><div class="centraditos">
	<?= getRes('ejemplo','ex/acierta-imagen/index.html', 'Ver ejemplo',4) ?>
	<?= getRes('recurso','ex/acierta-imagen/img.zip','Descargar recursos') ?></div></div>
</div>



<h3>Carga fondo</h3>

<pre><code>preload() {
	this.load.image('fondo', './img/fondo.jpg');
}

create() {
	this.add.sprite(480, 320, 'fondo');
}</code></pre>


<h3>Carga caras</h3>
<pre><code>preload() {
	this.load.image('fondo', './img/fondo.jpg');
	this.load.image('caraIMG0', './img/cara0.png');
	this.load.image('caraIMG1', './img/cara1.png');
	this.load.image('caraIMG2', './img/cara2.png');
}

create(){
	this.cara0 = this.add.sprite(225, 425, 'caraIMG0').setScale(0.5, 0.5);
	this.cara1 = this.add.sprite(480, 460, 'caraIMG1').setScale(0.5, 0.5);
	this.cara2 = this.add.sprite(740, 425, 'caraIMG2').setScale(0.5, 0.5);
}</code></pre>

<h3>Cara pulsada</h3>
<pre><span class="font-weight-bold">Dentro del método create</span><code>this.cara0.setInteractive();
this.cara0.on('pointerdown', () => this.caraPulsada(this.cara0));</code></pre></div>
	<div class="col-md-10"><pre><code>caraPulsada(cara) {
	alert(cara.texture.key);
}</code></pre>

<h3>Caras aleatorias</h3>
<pre class="javascript"><span class="font-weight-bold">En el método create</span><code>cargarImagenes(){
	let numeros = [0, 1, 2, 3, 4, 5, 6];
	this.randomizeArray(numeros);
	
	this.cara0.setTexture(`caraIMG${numeros[0]}`);
	this.cara1.setTexture(`caraIMG${numeros[1]}`);
	this.cara2.setTexture(`caraIMG${numeros[2]}`);
}

randomizeArray(array) {
	return array.sort(() => Math.floor(Math.random() * 3) -1);
}</code></pre>



<h3>Imagen solución random</h3>

<pre><code>...
this.spriteSolucion = this.add.sprite(470, 190, 'caraIMG0');
...	
const caraEscogida = this[`cara${Math.floor(Math.random() * 3)}`];
this.spriteSolucion.setTexture(caraEscogida.texture.key);</code></pre>

<h3>Evalúa solución</h3>

<pre><code>caraPulsada(cara) {
	if (cara.texture.key === this.spriteSolucion.texture.key) {
		alert('exito');
	} else {
		alert('fracaso');
	}
}</code></pre>
<h3>Marcador</h3>

<h4>Para cargar una tipografía externa en nuestro proyecto:</h4>
<pre><code>&lt;style&gt;
    @font-face {
        font-family: font1;
        src: url('./img/redkost-comic.otf');
        font-weight:400;
        font-weight:normal;
    }
&lt;/style&gt;
&lt;div style=&quot;font-family:font1;position: absolute;left: -1000px;visibility: hidden;&quot;&gt;.&lt;/div&gt;</code></pre>


<p>Debemos cargar dos textos para el marcador, uno dinámico que aumenta cuando el usuario acierta:</p>
<pre><code>create() {
	this.marcador = 0;
	this.marcadorTXT = this.add.text(90, 120, this.marcador, {
	    fontFamily: 'font1',
	    fontSize: 60,
	    color: '#00ff00',
	    align: 'right'
	});
	this.marcadorTXT.setOrigin(1, 0);
	this.cargarImagenes();
}</code></pre>
<p>El siguiente código establece el nuevo marcador cada vez que el usuario acierta</p>
<pre><code>++this.marcador;
this.marcadorTXT.setText(this.marcador);</code></pre>

<p>Y otro que tendrá la palabra pts:</p>
<pre><code class="javascript">this.add.text(105, 150, 'pts', {
    fontFamily: 'font1',
    fontSize: 24,
    color: '#00ff00'
});</code></pre>


<h3>Temporizador</h3>
<pre><code>this.topeDeTiempo = 10;
this.tiempo = this.topeDeTiempo;
this.tiempoTXT = this.add.text(835, 130, this.tiempo, {
    fontFamily: 'font1',
    fontSize: 64,
    color: '#00ff00',
});
this.tiempoTXT.rotation = 20*Math.PI/180;
this.temporizador();</code></pre>

<pre><code>temporizador() {
    --this.tiempo;
    this.tiempoTXT.setText(this.tiempo)
    if (this.tiempo === 0) {
        alert('Se acabó el tiempo')
    } else {
        this.time.delayedCall( 1000, this.temporizador, [], this);
    }
}</code></pre>
<h3>Escena de perder</h3>
<pre><code>class PerderEscena extends Phaser.Scene {
    constructor() {
        super('perderScene');
    }
    preload() {
        this.load.image('fin', './img/perder-juego.jpg');
    }
    create() {
        this.add.image(480, 320, 'fin');
        this.input.on('pointerdown', () => this.volverAJugar())
    }
    volverAJugar() {
        this.scene.start('Escena');
    }
}</code></pre>

</div></article>
<article><div>
		<h2 id="fall-down-game">Fall down</h2>


		<div class="row">
			<div class="col-md-6"><iframe class="monteserin_iframe" src="./ex/fall-down-game/index.html"></iframe></div>
			<div class="col-md-6"><div class="centraditos">
	
	<?= getRes('ejemplo','ex/fall-down-game/index.html', 'Ver ejemplo',4) ?>
	<?= getRes('recurso','ex/fall-down-game/img.zip','Descargar recursos') ?>
</div>
</div>
		</div>




	<h3>Cargar fondo</h3>
<p>Defimos la estructura de ficheros de nuestra aplicación y cargamos la imagen de fondo de la primera escena.</p>
	<h3>Físicas</h3>

	<pre><code>create() {
	...
	this.physics.add.image(50, 100, 'misil0');
}</code></pre>

<pre><code class="javascript">const config = {
	type: Phaser.AUTO,
	width: 960,
	height: 640,
	scene: Escena,
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
};</code></pre>
<h3>Poner nuevos misiles cada cierto tiempo</h3>

<pre><code>lanzarMisil() {
	const misil = this.physics.add.sprite(50, 100, 'misil0');
	misil.setVelocity(0, 200);
	this.time.delayedCall(1000, this.lanzarMisil, [], this);
}</code></pre>

<h3>Detectar pulsación</h3>
<pre><code>misil.setInteractive();
misil.on('pointerdown', () => this.misilPulsado(misil));</code></pre>

<pre><code>misilPulsado(m) {
	m.destroy();
}</code></pre>




<h3>Misiles variados</h3>
<pre><code>const aleatorio = Math.floor(Math.random() * 2);
const misil = this.physics.add.sprite(50, 100, `misil${aleatorio}`).setInteractive();</code></pre>

<h3>Diferentes posiciones</h3>

<pre><code>lanzarMisil() {
	...
	const posicionMisil = Math.floor(Math.random() * config.width-50);
	const misil = this.physics.add.sprite(posicionMisil, 100, 'misil' + aleatorio);
	...
}</code></pre>


<h3>Perder</h3>

<pre><code>this.physics.world.on('worldbounds', () => {
	alert('fin del juego');
});</code></pre>

<pre><code>misil.setCollideWorldBounds(true); 
misil.body.onWorldBounds = true;</code></pre>
<h3>Escena de fin de juego</h3>
<p>Creamos la escena a la que iremos cuando perdamos.</p>

<h3>Cohetes explotan</h3>
<pre><code>preload() {
	...
	this.load.spritesheet('explosion', 'img/crash.png', {
		frameWidth: 199,
		frameHeight: 200
	});
}

create() {
	...
	this.anims.create({
		key: 'explosionAnim',
		frames: this.anims.generateFrameNumbers('explosion', {start: 0, end: 4}),
		frameRate: 7
	});
	this.lanzarMisil();
}

misilPulsado(m) {
	m.play("explosionAnim");
	m.setCollideWorldBounds(false); 
}</code></pre>

<h3>Cohetes explotan y desaparecen</h3>
<pre><code>misil.on('animationcomplete', this.animationComplete, this);
...
animationComplete(animation, frame, sprite) {
	if (animation.key === 'explosionAnim') {
		sprite.disableBody(true, true);
		sprite.destroy();
	}
}</code></pre>

<h3>Poner vidas en pantalla</h3>

<pre><span class="font-weight-bold">Método preload:</span><code>this.load.spritesheet('vida', 'img/vida.png', {
	frameWidth: 50,
	frameHeight: 50
});</code></pre>
<pre><span class="font-weight-bold">Método create:</span><code>this.vida1 = this.add.sprite(50, 30, 'vida');
this.vida2 = this.add.sprite(100, 30, 'vida');
this.vida3 = this.add.sprite(150, 30, 'vida');</code></pre>


<h3>Gestionar vidas</h3>
<pre><span class="font-weight-bold">Método create:</span><code>this.contadorVidas = 3;

this.anims.create({
	key: 'sinVida',
	frames: this.anims.generateFrameNumbers('vida', {start: 1, end: 2}),
	frameRate: 1
});

this.physics.world.on('worldbounds', (target) => {
	target.enable = false;
	target.gameObject.play("explosionAnim");

	--this.contadorVidas;
	if (this.contadorVidas == 2) {
		this.vida3.play("sinVida");
	}else if (this.contadorVidas == 1) {
		this.vida2.play("sinVida");
	}else if (this.contadorVidas == 0) {
		this.vida1.play("sinVida");
		this.scene.start('perderScene');
	}
});</code></pre>
</div></article>


<article><div>


	<h2>Galería de tiro</h2>

	<div class="row">
		<div class="col-md-6"><iframe class="monteserin_iframe" src="./ex/galeria-tiro/index.html"></iframe></div>
		<div class="col-md-6">	<div class="centraditos">
			<?= getRes('recurso','ex/galeria-tiro/img.zip', 'Descargar recurso',4) ?>
		<?= getRes('ejemplo','ex/galeria-tiro/index.html', 'Ver ejemplo') ?>
	</div>
</div>
	</div>
	
	
		<h3>Cargar fondo</h3>
		<p>Cargamos la imagen de fondo del juego.</p>

		<h3>Cargar sprites</h3>
<pre><code>preload() {
	...
	this.load.spritesheet('oruga', 'img/oruga.png', {
		frameWidth: 96,
		frameHeight: 192
	});
	this.load.spritesheet('hormiga', 'img/hormiga.png', {
		frameWidth: 192, frameHeight: 96
	});
	this.load.spritesheet('avispa', 'img/avispa.png', {
		frameWidth: 128,
		frameHeight: 128
	});
};</code></pre>
		
		
		<h3>Carga animaciones</h3>

<pre><code>animacionesDeLaEscena() {
	this.anims.create({
		key: 'hormigaLeft',
		frames: this.anims.generateFrameNumbers('hormiga', {start: 0, end: 3}),
		frameRate: 7,
		repeat: -1,
	});
	this.anims.create({
		key: 'orugaLeft',
		frames: this.anims.generateFrameNumbers('oruga', {start: 0, end: 3}),
		frameRate: 7,
		repeat: -1,
    });
    this.anims.create({
		key: 'avispaLeft',
		frames: this.anims.generateFrameNumbers('avispa', {start: 0, end: 2}),
		frameRate: 10,
		repeat: -1,
    });
}</code></pre>
		

		<h3>Encapsular creación sprite</h3>
		<pre><code>createSprite(){
	const nombreSprite = 'oruga';
	const obj = this.add.sprite(100,100, nombreSprite);
	if(nombreSprite == 'oruga' ){
		obj.play('orugaLeft');
	}else if(nombreSprite == 'hormiga'){
		obj.play('hormigaLeft');
	}else{
		obj.play('avispaLeft');
	}
}</code></pre>

		<h3>Asignar desplazamiento</h3>
<pre><code>createSprite(){
	const obj = this.physics.add.sprite(1000,100, nombreSprite);
	...
	obj.setVelocity(-200,0)
}
			
const config = {
  type: Phaser.AUTO,
  width: 960,
  height: 640,
  scene: Escena,
  physics: {
    default: 'arcade'
  },
};</code></pre>
		

		<h3>Varios sprites</h3>
		<pre><code>this.time.delayedCall(1000, () => {
      this.createSprite('oruga')
}, [], this);</code></pre>
		
		

		<h3>Carga en posiciones aleatorias</h3>
<pre><code>createSprite(){
	const y = Math.floor(Math.random()*config.height);
	const x = Math.random()>0.5?960:0;
	const sentidoVelocidad = x == 0?1:-1;

	const obj = this.physics.add.sprite(x,y, nombreSprite);
	...
	obj.setVelocity(sentidoVelocidad*200,0);
}</code></pre>
		
		

		<h3>Las orugas deben mirar en la dirección del desplazamiento</h3>
<pre><code>createSprite(){
	...
    if(sentidoVelocidad==1){
      obj.flipX = true;
	}
}</code></pre>

		<h3>Bichos aleatorios</h3>
		<pre><code>createSprite(){
	...
	const bichos = ['oruga', 'hormiga', 'avispa'];
	const random = Math.floor(Math.random()*bichos.length);
	const nombreSprite = bichos[random];
	...
}</code></pre>
		<h3>Detectar pulsación</h3>

<pre><code>createSprite(){
	const obj = this.physics.add.sprite(x,y, nombreSprite).setInteractive();
	...
	obj.on('pointerdown', () => this.bichoPulsado());
	...
}

bichoPulsado(){
	alert('bicho pulsado');
}</code></pre>

		<h3>Explosión</h3>

<pre><code>preload(){
	...
	this.load.spritesheet('explosion', 'img/crash.png', {
	frameWidth: 199,
	frameHeight: 200
});

create(){
	...
	obj.on('pointerdown', () => this.bichoPulsado(obj));
	...
}

bichoPulsado(bicho){
	bicho.disableBody();
	bicho.play("explosionAnim");
	}
}

animacionesDeLaEscena() {
	...
    this.anims.create({
      key: 'explosionAnim',
      frames: this.anims.generateFrameNumbers('explosion', {start: 0, end: 4}),
      frameRate: 7
    });
}</code></pre>
</div></article>


<article><div>
		<h2 id="flappy-bird">Flappy Bird</h2>

		<div class="row">
			<div class="col-md-6"><iframe class="monteserin_iframe" src="./ex/flappy-bird/index.html"></iframe></div>
			<div class="col-md-6"><div class="centraditos">
<?= getRes('ejemplo','ex/flappy-bird/index.html', 'Ver ejemplo',4) ?>
		<?= getRes('recurso','ex/flappy-bird/img.zip','Descargar recurso') ?>

</div></div>
		</div>



<h3>Heroe con físicas y animación</h3>
<pre><code>class Escena extends Phaser.Scene {
preload() {
	this.load.spritesheet('heroe', 'img/heroe.png', {frameWidth: 50, frameHeight: 50});
}

create() {
	this.player = this.physics.add.sprite(50, 100, 'heroe');

	this.anims.create({
		key: 'volar',
		frames: this.anims.generateFrameNumbers('heroe', {start: 0, end: 2}),
		frameRate: 10,
		repeat: -1,
	});
	this.player.play('volar');
	}
}

...
physics: {
	default: 'arcade',
	arcade: {
		debug: true,
		gravity: {
			y: 300,
		},
	},
},</code></pre>

<h3>Saltar con space</h3>

<pre><code>this.input.keyboard.on('keydown', function (event) {
	if (event.keyCode === 32) {
		this.scene.saltar();
	}
});

saltar() {
	this.player.setVelocityY(-200);
}</code></pre>




<h3>Saltar con click en la pantalla</h3>

<pre><code>this.input.on('pointerdown', () => this.saltar());</code></pre>

<h3>Animación al saltar</h3>
<pre><code>this.anims.create({
	key: 'saltar',
	frames: this.anims.generateFrameNumbers('heroe', {start: 2, end: 2}),
	frameRate: 7,
	repeat: 1,
});

saltar() {
	this.player.setVelocityY(-200);
	this.player.play('saltar');
}</code></pre>

<h3>Seguir volando</h3>

<pre><span class="font-weight-bold">En el métdodo create():</span><code>this.player.on('animationcomplete', this.animationComplete, this);</code></pre>
<pre><code>animationComplete(animation, frame, sprite) {
	if (animation.key === 'saltar') {
		this.player.play('volar');
	}
}</code></pre>



<h3>Las tuberías</h3>
<pre><code>nuevaColumna() {
	//Una columna es un grupo de cubos
	const columna = this.physics.add.group();
	//Cada columna tendrá un hueco (zona en la que no hay cubos) por dónde pasará el super heroe
	const hueco = Math.floor(Math.random() * 5) + 1;
	for (let i = 0; i < 8; i++) {
    	//El hueco estará compuesto por dos posiciones en las que no hay cubos, por eso ponemos hueco +1
		if (i !== hueco && i !== hueco + 1 && i !== hueco - 1) {
			const cubo = columna.create(960, i * 100, 'pipe');
			cubo.body.allowGravity = false;
		}
	}
	columna.setVelocityX(-200);
	//Detectaremos cuando las columnas salen de la pantalla...
	columna.checkWorldBounds = true;
	//... y con la siguiente línea las eliminaremos
	columna.outOfBoundsKill = true;
	//Cada 1000 milisegundos llamaremos de nuevo a esta función para que genere una nueva columna
	this.time.delayedCall(1000, this.nuevaColumna, [], this);
}</code></pre>

<h3>Colisión con tuberías</h3>
<pre><span class="font-weight-bold">Última línea del método nueva columna:</span><code>this.physics.add.overlap(this.player, columna, this.hitColumna, null, this);</code></pre>


<pre><code>hitColumna() {
	alert('game over');
}</code></pre>

<h3>Poner tapas a las tuberías</h3>

<pre><code>if (i == hueco - 2) {
	cubo = columna.create(960, i * 100, 'pipeArriba');
} else if (i == hueco + 2) {
	cubo = columna.create(960, i * 100, 'pipeAbajo');
} else {
	cubo = columna.create(960, i * 100, 'pipe');
}</code></pre>
<h3>Imagen de tuberías aleatoria</h3>

<pre><code>const aleatorio = Math.floor(Math.random() * 2);
for (let i = 0; i < 8; i++) {
	//El agujero son cuatro casillas
	if (i !== hueco && i !== hueco + 1 && i !== hueco - 1) {
		let cubo;
		if (i == hueco - 2) {
			cubo = columna.create(960, i * 100, `pipeArriba${aleatorio}`);
		} else if (i == hueco + 2) {
			cubo = columna.create(960, i * 100, `pipeAbajo${aleatorio}`);
		} else {
			cubo = columna.create(960, i * 100, `pipe${aleatorio}`);
		}
		cubo.body.allowGravity = false;
	}
}</code></pre>

<h3>Escena fin de juego</h3>

<p>Definimos la escena que se cargará cuando el jugador pierda.</p>


<h3>Volver a jugar</h3>
<p>Cuando llegamos a la escena de perder, si el jugador pulsa sobre la pantalla, volveremos a la escena inicial de juego.</p>

<h3>Fondo animado</h3>
<pre><code>create() {
	this.bg = this.add.tileSprite(480, 320, 960, 640, 'fondo').setScrollFactor(0);
	...
}

update(time){
	this.bg.tilePositionX = time*0.1;
}</code></pre>

<h3>Detectar cuando el player sale de la pantalla</h3>
<pre><code>this.player.setCollideWorldBounds(true);
this.player.body.onWorldBounds = true;</code></pre>

</div></article>


<article><div>

<h2>Pong</h2>

<div class="row">
	<div class="col-md-6"><iframe class="monteserin_iframe" src="./ex/pong/index.html"></iframe></div>
	<div class="col-md-6"></div>
</div>

</div></article>

<article><div>

		<h2 id="carreras">Carreras</h2>

		<div class="row">
			<div class="col-md-6"><iframe class="monteserin_iframe" src="./ex/carreras/con-matter-sin-tiled/index.html"></iframe></div>
			<div class="col-md-6"><div class="centraditos">
	<?= getRes('recurso','ex/carreras/con-matter-sin-tiled/img.zip', 'Descargar recursos') ?>
	<?= getRes('ejemplo','ex/carreras/con-matter-sin-tiled/index.html', 'Ver juego terminado',4) ?>

</div></div>
		</div>



<h3 id="carga-background">Carga background</h3>
<p>Cargamos la imagen de fondo del juego.</p>


<h3 id="sprite-animado">Sprite animado</h3>

<pre><span class="font-weight-bold">Dentro del método preload()</span><code>this.load.spritesheet('player0', '/curso/assets/phaser/carreras/player0.png', {frameWidth: 64, frameHeight: 32});</code></pre>

<pre><span class="font-weight-bold">Dentro del método create()</span><code>this.player1 = this.add.sprite(400, 500, 'player0');

this.anims.create({
	key: 'volar',
	frames: this.anims.generateFrameNumbers('player0', {start: 0, end: 1}),
	frameRate: 10,
	repeat: -1,
});
this.player0.play('volar', true);</code></pre>

<h3 id="carga-coches-con-funcion">Carga coches con función</h3>


<pre><code>create() {
	this.add.sprite(480, 320, 'fondo');
	this.coordenadasPlayers = [
		{x: 280, y: 500},
		{x: 360, y: 500},
		{x: 300, y: 550},
		{x: 380, y: 550},
	];
	this.players = [];
	this.n_jugadores = 4;
	this.creaPlayers();
}

creaPlayers() {
	for (let i = 0; i < this.n_jugadores; i++) {
		//Creamos el jugador. Lo almacenamos en un array de jugadores porque nos será más fácil en adelante aplicar funcionalidades a todos los jugadores
		this.players[i] = this.add.sprite(this.coordenadasPlayers[i].x, this.coordenadasPlayers[i].y, `player${i}`);
		//Creamos la animación del jugador
		this.anims.create({
			key: `volar${i}`,
			frames: this.anims.generateFrameNumbers(`player${i}`, {start: 0, end: 1}),
			frameRate: 10,
			repeat: -1,
		});
		//Vinculamos la animación al jugador creado y comenzamos su reproducción.
		//El primer parámetro de la función volar es el nombre de la animación, y el segundo, si la animación se va a ejecutar indefinidamente
		this.players[i].play(`volar${i}`, true);
	}
}</code></pre>


<h3 id="mover-coche-hacia-delante">Mover coche hacia delante</h3>
<pre><code>creaPlayers(){
	...	
	this.players[i] = this.matter.add.sprite(this.coordenadasPlayers[i].x, this.coordenadasPlayers[i].y, `player${i}`);
	...	
}


update() {
	for (let i = 0; i < this.n_jugadores; i++) {
		this.players[i].thrust(-0.001);
	}
}

const config = {
	type: Phaser.AUTO,
	width: 960,
	height: 640,
	scene: Escena,
	physics: {
		default: 'matter',
		matter: {
			gravity: {
				y: 0,
			},
		},
	},
};</code></pre>


<h3 id="rotar">Rotar</h3>

<pre><code>create(){
	...
	this.cursors = this.input.keyboard.createCursorKeys();
}
update() {
	for (let i = 0; i < this.n_jugadores; i++) {
		this.players[i].thrust(-0.003);
		if (this.cursors.left.isDown)
			this.players[i].setAngularVelocity(-0.065);
		else if (this.cursors.right.isDown)
			this.players[i].setAngularVelocity(0.065);
		}
	}
}</code></pre>

<h3 id="controles-visuales">Controles visuales</h3>

<pre><code>create(){
	this.coordenadasPlayers = [
		{x: 280, y: 500, leftbtn: {x: 30, y: 540, rotacion :45}, rightbtn: {x: 90, y: 600, rotacion :45}},
		{x: 360, y: 500, leftbtn: {x: 870, y: 30, rotacion :45}, rightbtn: {x: 930, y: 90, rotacion :45}},
		{x: 300, y: 550, leftbtn: {x: 30, y: 90, rotacion :-45}, rightbtn: {x: 90, y: 30, rotacion :-45}},
		{x: 380, y: 550, leftbtn: {x: 870, y: 600, rotacion :-45}, rightbtn: {x: 930, y: 540, rotacion :-45}}
	];
    ...
}


creaPlayers() {
	for (let i = 0; i < this.n_jugadores; i++) {
		//Código del bucle que no pongo porque ocupa mucho
		this.controlesVisuales(i);
	}
}

controlesVisuales(n) {
	this.players[n].setData('direccionHorizontal', 0);

	const leftbtn = this.add.sprite(this.coordenadasPlayers[n].leftbtn.x, this.coordenadasPlayers[n].leftbtn.y, 'leftbtn').setInteractive();
	const rightbtn = this.add.sprite(this.coordenadasPlayers[n].rightbtn.x, this.coordenadasPlayers[n].rightbtn.y, 'leftbtn').setInteractive();

	rightbtn.flipX = true;

	rightbtn.on('pointerdown', function() {
		this.scene.players[n].setData('direccionHorizontal', 1);
	});

	leftbtn.on('pointerdown', function() {
		this.scene.players[n].setData('direccionHorizontal', -1);
	});

	rightbtn.on('pointerup', function() {
		this.scene.players[n].setData('direccionHorizontal',  0);
	});

	leftbtn.on('pointerup', function() {
		this.scene.players[n].setData('direccionHorizontal', 0);
	});
}

update() {
	for (let i = 0; i < this.n_jugadores; i++) {
    	this.players[i].thrust(-0.003);
		if (this.cursors.left.isDown || this.players[i].getData('direccionHorizontal') === -1)
			this.players[i].setAngularVelocity(-0.065);
		else if (this.cursors.right.isDown || this.players[i].getData('direccionHorizontal') === 1)
			this.players[i].setAngularVelocity(0.065);
	}
}</code></pre>


<h3 id="physics-editor">Physics Editor</h3>
<pre><span class="font-weight-bold">En el método preload()</span><code>this.load.image('ladoizquierdo', '/curso/assets/phaser/carreras/fuentesTexturePacker/ladoizquierdo.png');
this.load.image('ladoderecho', '/curso/assets/phaser/carreras/fuentesTexturePacker/ladoderecho.png');
this.load.image('centro', '/curso/assets/phaser/carreras/fuentesTexturePacker/centro.png');
this.load.image('luna', '/curso/assets/phaser/carreras/fuentesTexturePacker/luna.png');
this.load.image('saturno', '/curso/assets/phaser/carreras/fuentesTexturePacker/saturno.png');
this.load.image('astronauta', '/curso/assets/phaser/carreras/fuentesTexturePacker/astronauta.png');
this.load.json('muros', '/curso/assets/phaser/carreras/muros.json');</code></pre>

<pre><span class="font-weight-bold">En el método create()</span><code>const ladoizquierda = this.matter.add.sprite(0, 0, 'ladoizquierdo', null, {shape: muros.ladoizquierdo});
const ladoderecha = this.matter.add.sprite(0, 0, 'ladoderecho', null, {shape: muros.ladoderecho});
const centro = this.matter.add.sprite(0, 0, 'centro', null, {shape: muros.centro});
const luna = this.matter.add.sprite(0, 0, 'luna', null, {shape: muros.luna});
const astronauta = this.matter.add.sprite(0, 0, 'astronauta', null, {shape: muros.astronauta});
//  const estrella = this.matter.add.sprite(0, 0, 'estrella', null, {shape: muros.estrella});
const saturno = this.matter.add.sprite(0, 0, 'saturno', null, {shape: muros.saturno});

luna.setBounce(1.5);

const coordenadasLadoIzquierda = this.getCoordenadasSinTenerEnCuentaLaMasa(ladoizquierda, 0, 0);
const coordenadasLadoDerecha = this.getCoordenadasSinTenerEnCuentaLaMasa(ladoderecha, 479, 0);
const coordenadasCentro = this.getCoordenadasSinTenerEnCuentaLaMasa(centro, 210, 155);
const coordenadasLuna = this.getCoordenadasSinTenerEnCuentaLaMasa(luna, 100, 100);
const coordenadasAstronauta = this.getCoordenadasSinTenerEnCuentaLaMasa(astronauta, 685, 210);
const coordenadasSaturno = this.getCoordenadasSinTenerEnCuentaLaMasa(saturno, 665, 110);

ladoizquierda.setPosition(coordenadasLadoIzquierda.x, coordenadasLadoIzquierda.y);
ladoderecha.setPosition(coordenadasLadoDerecha.x, coordenadasLadoDerecha.y);
centro.setPosition(coordenadasCentro.x, coordenadasCentro.y);
luna.setPosition(coordenadasLuna.x, coordenadasLuna.y);
astronauta.setPosition(coordenadasAstronauta.x, coordenadasAstronauta.y);
saturno.setPosition(coordenadasSaturno.x, coordenadasSaturno.y);</code></pre>

<h3 id="luna-rebota">La luna rebota</h3>
<pre><code>luna.setBounce(1.5);</code></pre>





<h3 id="detectar-vueltas">Detectar vueltas</h3>

<pre><span class="font-weight-bold">Método create()</span><code>const objeto = this.matter.add.rectangle(175, 500, 135, 30, {
	isSensor: true,
	marker: 1,
	angle: -0.25 * Math.PI
	});

	//collisionstart detecta la colisión entre cualquier forma y cualquier forma
	this.matter.world.on('collisionstart', function (event) {
	//  La variable pairs almacena todos los objetos que están colisionando
	var pairs = event.pairs;

	for (var i = 0; i < pairs.length; i++) {
		var bodyA = pairs[i].bodyA;
		var bodyB = pairs[i].bodyB;

		//  Estamos detectando la colisión entre objetos de cualquier tipo. Por tanto, también estamos detectando la colisión entre jugadores y objetos de diversa índole que no interesan. El siguiente condicional filtra para sólo tener en cuenta las colisiones donde uno de los elementos colisionados tiene la propiedad isSensor con valor True
		if (pairs[i].isSensor) {
			alert('colision');
		}
	}
});</code></pre>

<h3 id="poner-marcador">Poner marcador</h3>

<pre><code>pintarMarcador() {
	this.add.text(400, 275, 'P1:', {fontFamily: 'font1', fontSize: 24, color: '#00ff00'});
	this.add.text(480, 275, 'P2:', {fontFamily: 'font1', fontSize: 24, color: '#00ff00'});
	this.add.text(400, 315, 'P3:', {fontFamily: 'font1', fontSize: 24, color: '#00ff00'});
	this.add.text(480, 315, 'P4:', {fontFamily: 'font1', fontSize: 24, color: '#00ff00'});

	this.marcadorCoche0 = this.add.text(440, 275, '0', {fontFamily: 'font1', fontSize: 24, color: '#ffffff'});
	this.marcadorCoche1 = this.add.text(520, 275, '0', {fontFamily: 'font1', fontSize: 24, color: '#ffffff'});
	this.marcadorCoche2 = this.add.text(440, 315, '0', {fontFamily: 'font1', fontSize: 24, color: '#ffffff'});
	this.marcadorCoche3 = this.add.text(520, 315, '0', {fontFamily: 'font1', fontSize: 24, color: '#ffffff'});
}</code></pre>

<h3 id="aumentar-marcador">Aumentar marcador</h3>
<pre><code>for (var i = 0; i < pairs.length; i++) {
	// En las dos siguientes líneas estamos haciendo una deconstrucción de una propiedad en Javascript. Este en lugar de este código podíamos haber hecho también: const bodyA = pairs[i].bodyA
	const {bodyA} = pairs[i];
	const {bodyB} = pairs[i];

	if (pairs[i].isSensor) {
		// Cuando se produce la colisión que nos interesa detectar, uno de los elementos que colisionan será el area que colocamos en el paso anterior y el otro será el jugador. El jugador no tiene la propiedad isSensor a true, por tanto, utilizaremos esa propiedad para evaluar quien es quien. De esta forma, la variable zone almacenará  el area, mientras que la variable playerBody almacenará el jugador.

		let zone;
		let playerBody;
		if (bodyA.isSensor) {
			zone = bodyA;
			playerBody = bodyB;
		} else if (bodyB.isSensor) {
			zone = bodyB;
			playerBody = bodyA;
		}
		const playerSprite = playerBody.gameObject;
		const playerKey = playerSprite.texture.key;
		const playerIndex = playerKey.substr(-1);
		playerSprite.data.values.marcador++;
		this[`marcadorCoche${playerIndex}`].text = `${playerSprite.getData('marcador')}`;
	}
}</code></pre>




<h3 id="evitar-trampas">Evitar trampas</h3>

<pre><code>this.matter.add.rectangle(450, 150, 30, 60, {isSensor: true, <strong>marker: 2</strong>});
this.matter.add.rectangle(760, 400, 90, 30, {isSensor: true, <strong>marker: 3</strong>});
this.matter.add.rectangle(500, 505, 30, 70, {isSensor: true, <srtong>marker: 4</srtong>});

...

if (playerSprite.getData('marker') === zone.marker) {
	if (zone.marker === 4) {
		playerSprite.setData('marker', 1);
	} else {
	if (zone.marker === 1) {
		playerSprite.data.values.marcador++;
		this[`marcadorCoche${playerIndex}`].text = `${playerSprite.getData('marcador')}`;
	}
	playerSprite.data.values.marker++;
	}
}</code></pre>

<h3 id="alguien-gana">Alguien gana el juego</h3>
<pre><code>if (playerSprite.getData('marcador') === 4) {
	alert("Ganó " + playerKey)
}else{
	this[`marcadorCoche${playerIndex}`].text = `P${playerIndex}: ${playerSprite.data.values.marcador}`;
}</code></pre>


<h3 id="con-portada">Con portada</h3>

<pre><code>class EscenaPortada extends Phaser.Scene {
	constructor() {
		super({key: 'EscenaPortada'});
	}
	preload() {
		this.load.image('portada', '/curso/assets/phaser/carreras/portada/portada.jpg');
		this.load.image('2jugadores', '/curso/assets/phaser/carreras/portada/2.png');
		this.load.image('3jugadores', '/curso/assets/phaser/carreras/portada/3.png');
		this.load.image('4jugadores', '/curso/assets/phaser/carreras/portada/4.png');
	}
	create() {
		this.add.sprite(480, 320, 'portada');
		const opcion2Jugadores = this.add.sprite(280, 320, '2jugadores').setInteractive();
		const opcion3Jugadores = this.add.sprite(480, 320, '3jugadores').setInteractive();
		const opcion4Jugadores = this.add.sprite(680, 320, '4jugadores').setInteractive();
		opcion2Jugadores.on('pointerdown', () => this.opcionJugador(2));
		opcion3Jugadores.on('pointerdown', () => this.opcionJugador(3));
		opcion4Jugadores.on('pointerdown', () => this.opcionJugador(4));
	}
	opcionJugador(nJugadores) {
		this.scene.start('EscenaJuego', {nJugadores});
	}
}</code></pre>

<pre><code>class Escena extends Phaser.Scene {
	constructor() {
		super({key: 'EscenaJuego'});
	}
	init(data){
		this.n_jugadores = data.nJugadores;
	}</code></pre>



<h3 id="cargar-musica">Cargar música</h3>
<pre><code>this.load.audio('musica', '/curso/assets/phaser/carreras/Loyalty_Freak_Music_-_13_-_Ghost_Surf_Rock.mp3');</code></pre>


<pre><code>const musica = this.sound.add('musica');
musica.play({
  volume: 1
})</code></pre>

<h3 id="escena-final">Escena final</h3>
<p>Definimos la escena final que se cargará cuando un usuario gane.</p>

<h3 id="controles-triangulo">Cambio controles con triángulo</h3>

	<h2 id="plataformas">Plataformas</h2>
<div class="row">
	<div class="col-md-6"><iframe class="monteserin_iframe" src="./ex/plataformas/index.html"></iframe></div>
	<div class="col-md-6"><div class="centraditos">
		<?= getRes('ejemplo','ex/plataformas/index.html', 'Ver ejemplo') ?>

		<?= getRes('recurso','/curso/assets/phaser/plataformas/plataformas.zip','Descargar recursos') ?>

</div>
</div>
</div>



<h3>Carga de estructura y fondo</h3>
<p>Definimos la estructura global del juego y cargamos la imagen de fondo.</p>

<h3>Cargar prota con el JSON de Tiled</h3>
<pre><code>class Escena extends Phaser.Scene {
  preload() {
    this.load.image('jungla', '/curso/assets/phaser/plataformas/background.jpg');
    this.load.spritesheet('dude', '/curso/assets/phaser/plataformas/dude.png', {frameWidth: 128, frameHeight: 128});
    this.load.tilemapTiledJSON('level1', '/curso/assets/phaser/plataformas/map.json');
  }
  create() {
    this.add.sprite(480, 320, 'jungla');
    const map = this.add.tilemap('level1');
    const playersFromTiled = this.findObjectsByType('player', map);
    this.player = this.physics.add.sprite(playersFromTiled[0].x, playersFromTiled[0].y, 'dude');
  }
  findObjectsByType(type, tilemap) {
    const result = [];
    tilemap.objects.forEach(function (element) {
      if (element.name === 'objectsLayer') {
        element.objects.forEach(function (element2) {
          if (element2.type === type) {
            element2.y -= tilemap.tileHeight;
            result.push(element2);
          }
        });
      }
    });
    return result;
  }
}</code></pre>

<?= getRes('ejemplo','ex/plataformas/3-prota/index.html','Ver ejemplo',4) ?>
<h3>Instanciar al protagonista utilizando clases en lugar de llamar al método add.sprite</h3>

<pre><code>this.player = new Player(this, playersFromTiled[0].x, playersFromTiled[0].y);</code></pre>
<pre><code>class Player extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, x, y) {
        super(scene, x, y, 'dude');
        scene.physics.systems.displayList.add(this);
        scene.physics.systems.updateList.add(this);
        scene.physics.world.enableBody(this, 0);
    }
}</code></pre>

<h3 id="backgroundLayer">Cargar la backgroundLayer</h3>

<pre><code>preload() {
    this.load.image('gameTiles', '/curso/assets/phaser/plataformas/tiles.png');
    this.load.tilemapTiledJSON('level1', '/curso/assets/phaser/plataformas/map.json');
     ...</code></pre>




<h3 id="collisionLayer">Cargar la collisionLayer</h3>

<pre><code>this.collisionLayer = map.createStaticLayer('collisionLayer', tileset);
this.collisionLayer.setCollisionByExclusion([-1]);</code></pre>


<h3 id="hierbaLayer">Cargar hierbaLayer</h3>
<pre><code>map.createStaticLayer('hierbaLayer', tileset).setDepth(100);</code></pre>




<h3>Ajustando la boundingbox del player</h3>

<pre><code>this.setSize(90, 180, true);</code></pre>



<h3>El jugador se mueve</h3>
<pre><span class="font-weight-bold">Dentro del método create</span><code>this.cursors = this.input.keyboard.createCursorKeys();</code></pre>


<pre><span class="font-weight-bold">Dentro de la clase Player</span><code>caminarALaIzquierda(){
        this.body.setVelocityX(-250)
    }

    caminarALaDerecha(){
        this.body.setVelocityX(250)
    }

    reposo(){
        this.body.setVelocityX(0)
    }</code></pre>

<h3>Animación del jugador</h3>

<p>Definimos la función que cargará las animaciones y que será llamada dentro del método create de la Escena:</p>
<pre><code>animacionesDeLaEscena() {
    this.anims.create({
        key: 'protaLeft',
        frames: this.anims.generateFrameNumbers('dude', {start: 2, end: 5}),
        frameRate: 10,
        repeat: -1,
    });
    this.anims.create({
        key: 'reposo',
        frames: this.anims.generateFrameNumbers('dude', {start: 0, end: 1}),
        frameRate: 4,
        repeat: -1,
    });
}</code></pre>

<pre><code>caminarALaIzquierda(){
	this.body.setVelocityX(-250);
	this.flipX = true;
	this.play('protaLeft', true);
}

caminarALaDerecha(){
	this.body.setVelocityX(250);
	this.flipX = false;
	this.play('protaLeft', true);
}

reposo() {
	this.body.setVelocityX(0);
	if (this.enElSuelo)this.play('reposo', true);
}</code></pre>


<h3>Saltar</h3>

<div class="row">
	<div class="col-md-6"><p>Añadimos el método saltar a la clase Player. El jugador sólo debe poder saltar si está tocando el suelo:</p>
<pre><code>saltar(){
	if(this.enElSuelo){
		this.body.setVelocityY(-250);
	}
}</code></pre>
</div>
	<div class="col-md-6"><p>En el método update del player alimentamos la variable enElSuelo:</p>
<pre><code>update(){
	this.enElSuelo = this.body.onFloor();
}</code></pre>
</div>
</div>

<p>El método update del player no se llama automáticamente, debemos llamarlo desde el método update de la escena:</p>
<pre><code>update() {
	...
	this.player.update();
}</code></pre>



<h3 id="caer">Caer</h3>

<div class="row">
	<div class="col-md-6"><pre><span class="font-weight-bold">Completamos la función de saltar:</span><code>saltar(){
    if(this.enElSuelo){
        this.body.setVelocityY(-250);
        this.play('caer', true);
    }
}</code></pre>
</div>
	<div class="col-md-6"><pre><span class="font-weight-bold">Completamos la función animacionesDeLaEscena</span><code>caminarALaIzquierda(){
    this.body.setVelocityX(-250);
    this.flipX = true;
    <span class="font-weight-bold">if(this.enElSuelo)t</span>his.play('protaLeft', true);
}
caminarALaDerecha(){
    this.body.setVelocityX(250);
    this.flipX = false;
    <span class="font-weight-bold">if(this.enElSuelo)t</span>his.play('protaLeft', true);
}
reposo() {
    this.body.setVelocityX(0);
    <span class="font-weight-bold">if (this.enElSuelo)</span>this.play('reposo', true);
}</code></pre>
</div>
</div>




<h3 id="controlesVisuales">Controles visuales</h3>
<p>Habrá que llamar al siguiente método desde el create de la escena.</p>
<pre><code>controlesVisuales() {
	this.player.setData('direccionHorizontal', 0);
	this.player.setData('estaSaltando', false);

	const leftbtn = this.add.sprite(50, 560, 'flecha').setInteractive()
	const rightbtn = this.add.sprite(140, 560, 'flecha').setInteractive();
	rightbtn.flipX = true;
	const upbtn = this.add.sprite(850, 560, 'flecha').setInteractive();
	upbtn.rotation = Math.PI/2;

	leftbtn.on('pointerdown', function() {
		this.scene.player.setData('direccionHorizontal', Phaser.LEFT);
	});

	rightbtn.on('pointerdown', function() {
		this.scene.player.setData('direccionHorizontal', Phaser.RIGHT);
	});

	upbtn.on('pointerdown', function() {
		this.scene.player.setData('estaSaltando', Phaser.UP);
	});

	leftbtn.on('pointerup', function() {
		this.scene.player.setData('direccionHorizontal', Phaser.NONE);
	});

	rightbtn.on('pointerup', function() {
		this.scene.player.setData('direccionHorizontal', Phaser.NONE);
	});

	upbtn.on('pointerup', function() {
		this.scene.player.setData('estaSaltando', Phaser.NONE);
	});
}</code></pre>

<p>Habrá que actualizar el código del método update</p>
<pre><code>update() {
	if (this.cursors.left.isDown || this.player.getData('direccionHorizontal') === Phaser.LEFT) {
		this.player.caminarALaIzquierda();
	} else if (this.cursors.right.isDown || this.player.getData('direccionHorizontal') === Phaser.RIGHT) {
		this.player.caminarALaDerecha();
	} else {
		this.player.reposo();
	}
	if (this.cursors.up.isDown || this.player.getData('estaSaltando') === Phaser.UP) {
		this.player.saltar();
	}
	this.player.update();
}</code></pre>

<h3>La cámara sigue al prota</h3>
<pre><span class="font-weight-bold">Dentro del método create:</span><code>this.cameras.main.setSize(960, 640);
this.cameras.main.startFollow(this.player);</code></pre>


<h3>La cámara sigue al prota horizontalmente</h3>

<pre><span class="font-weight-bold">Dentro del método create</span><code>this.cameras.main.setSize(960, 640);</code></pre>

<pre><span class="font-weight-bold">Dentro del método update de la Escena</span><code>this.cameras.main.scrollX = this.player.x - 400;
this.cameras.main.scrollY = 0;</code></pre>


<h3>El fondo se repite</h3>
<pre><span class="font-weight-bold">Sustituímos la línea que carga el fondo</span><code>this.bg = this.add.tileSprite(480, 320, 960, 640, 'jungla').setScrollFactor(0);</code></pre>
<p>En el método update, desplazamos el fondo acorde con la posición del jugador</p>
<pre><code><span style="text-decoration:line-through;">this.add.sprite(480, 320, 'jungla');</span>
this.bg.tilePositionX = this.player.x;</code></pre>

<h3>Añadir un enemigo</h3>

<pre><span class="font-weight-bold">En el método update:</span><code>const hormigasFromTiled = this.findObjectsByType('hormigaEnemy', map);

for (let i = 0; i < hormigasFromTiled.length; i++) {
  const malo = this.physics.add.sprite(hormigasFromTiled[i].x, hormigasFromTiled[i].y, 'hormiga');
  this.physics.add.collider(malo, this.collisionLayer);
}</code></pre>


<h3>Enemigo con clase</h3>

<pre><span class="font-weight-bold">Dentro del método create:</span><code>const hormigasFromTiled = this.physics.add.group({classType: 'hormiga', runChildUpdate: true});
for (let i = 0; i < hormigasFromTiled.length; i++) {
	const malo = new HormigaEnemy(hormigasFromTiled[i].x, hormigasFromTiled[i].y, this);
	enemies.add(malo);
}</code></pre>

<pre><code>class OrugaEnemy extends Phaser.Physics.Arcade.Sprite {
  constructor(x, y, scene) {
    super(scene, x, y, 'oruga', 3);
    scene.physics.add.collider(this, scene.collisionLayer);
    scene.add.existing(this);
  }
}</code></pre>

<h3>Enemigo con animación</h3>

<pre><span class="font-weight-bold">La animación que utilizaremos</span><code>scene.anims.create({
  key: 'hormigaLeft',
  frames: scene.anims.generateFrameNumbers('oruga', {start: 0, end: 3}),
  frameRate: 10,
  repeat: -1,
});</code></pre>
<pre><span class="font-weight-bold">En el constructor del enemigo</span><code>this.play('hormigaLeft');</code></pre>


<h3>Enemigo se mueve</h3>
<pre><code>constructor(x, y, scene) {
    ...
    this.velocidad = 100;
    this.direccion = 1;
}

update() {
  this.body.setVelocityX(this.direccion * this.velocidad);
}</code></pre>

<h3>Enemigo inteligente</h3>

<pre><code>class HormigaEnemy extends Phaser.Physics.Arcade.Sprite {

constructor(x, y, scene) {
	...

	this.velocidad = 100;
	this.direccion = 1;
}

update(){
	this.body.setVelocityX(this.direccion * this.velocidad);
	const nextX = Math.floor(this.x / 32) + this.direccion;
	let nextY = this.y + this.height / 2;
	nextY = Math.round(nextY / 32);
	const nextTile = this.scene.collisionLayer.hasTileAt(nextX, nextY);
	if (!nextTile && this.body.blocked.down) {
		this.direccion *= -1;
	}
	if (this.direccion > 0) {
		this.flipX = true;
	} else {
		this.flipX = false;
	}
}
}</code></pre>
<h3>Enemigo muere</h3>

<pre><span class="font-weight-bold">Método en el constructor de la escena:</span><code>this.physics.add.overlap(this.player, hormigas, this.player.checkEnemy, null, this.player);</code></pre>


<pre><span class="font-weight-bold">Método de la clase Player:</span><code>checkEnemy(player, enemigo) {
	//  El jugador está cayendo?
	if (this.body.velocity.y > 0) {
		enemigo.morir();
	} else {
		this.die();
	}
}</code></pre>

<pre><span class="font-weight-bold">Método del enemigo</span><code>morir() {
	this.disableBody(true, true);
}</code></pre>

<h3>Enemigo explota</h3>

<pre><code>this.anims.create({
	key: 'explosionAnim',
	frames: this.anims.generateFrameNumbers('explosion', {start: 0, end: 4}),
	frameRate: 7
});</code></pre>

<pre><code>morir() {
		this.disableBody();
		this.play('explosionAnim');
	}

	animationComplete(animation, frame, sprite) {
		if (animation.key === 'explosionAnim') {
		this.disableBody(true, true);
	}
}</code></pre>


<h3>Prota explota</h3>
<p>Utilizaremos la variable estaVivo para detener todas las demás animaciones cuando el Player es colisionado.</p>
<pre><code>morir() {
		this.estaVivo = false;
		this.disableBody();
		this.play('explosionAnim', true);
	}

	animationComplete(animation, frame, sprite) {
	if (animation.key === 'explosionAnim') {
		this.disableBody(true, true);
	}
}</code></pre>


<pre><code>update() {
	this.bg.tilePositionX = this.player.x;

	this.cameras.main.scrollX = this.player.x - 400;
	this.cameras.main.scrollY = 0;

	if (this.player.estaVivo) {
		if (this.cursors.left.isDown || this.player.getData('direccionHorizontal') === Phaser.LEFT) {
			this.player.caminarALaIzquierda();
		} else if (this.cursors.right.isDown || this.player.getData('direccionHorizontal') === Phaser.RIGHT) {
			this.player.caminarALaDerecha();
		} else {
			this.player.reposo();
		}

		if (this.cursors.up.isDown || this.player.getData('estaSaltando') === Phaser.UP) {
			this.player.saltar();
		}

		this.player.update();
	}
}</code></pre>

<h3>Método para la inserción de enemigos</h3>
<p>Debemos sustituir el código que teníamos para la insercción de los enemigos por este:</p>
<pre><code>insertarMalos(arrayDeMalos, type, scene) {
    const enemies = scene.physics.add.group({classType: type, runChildUpdate: true, runChildCreate: true});
    for (let i = 0; i < arrayDeMalos.length; i++) {
        const malo = new type(arrayDeMalos[i].x, arrayDeMalos[i].y, scene);
        enemies.add(malo);
    }
    return enemies;
}</code></pre>


<p>Para llamar a este método, usaremos:</p>
<pre><code>this.insertarMalos(malos, HormigaEnemy, this);</code></pre>

<h3>Enemigo con Herencia</h3>

<pre><code>class Enemy extends Phaser.Physics.Arcade.Sprite{
    constructor(scene, x, y, sprite ) {
        super(scene, x, y, sprite);
        scene.physics.add.collider(this, scene.collisionLayer);
        scene.add.existing(this);
        this.velocidad = 100;
        this.direccion = 1;
    }
    update(){
        this.body.setVelocityX(this.direccion * this.velocidad);
        const nextX = Math.floor(this.x / 32) + this.direccion;
        let nextY = this.y + this.height / 2;
        nextY = Math.round(nextY / 32);
        const nextTile = this.scene.collisionLayer.hasTileAt(nextX, nextY);
        if (!nextTile && this.body.blocked.down) {
            this.direccion *= -1;
        }
        if (this.direccion > 0) {
            this.flipX = true;
        } else {
            this.flipX = false;
        }
    }
    morir() {
        this.disableBody();
        this.play('explosionAnim');
    }
    animationComplete(animation, frame, sprite) {
        if (animation.key === 'explosionAnim') {
            this.disableBody(true, true);
        }
    }
}</code></pre>

<h3>Insertar Oruga</h3>
<pre><code>class OrugaEnemy extends Enemy {

constructor(x, y, scene) {
	super(scene, x, y, 'oruga');
	scene.add.existing(this);
	this.play('orugaLeft');
}
}</code></pre>

<h3>Insertar Avispa dando vueltas</h3>

<pre><code>class AvispaEnemy extends Phaser.Physics.Arcade.Sprite {
	constructor(x, y, scene) {
		super(scene, x, y, 'avispa');
		scene.physics.add.collider(this, this.scene.collisionLayer);
		scene.add.existing(this);
		scene.anims.create({
			key: 'avispaLeft',
			frames: scene.anims.generateFrameNumbers('avispa', {start: 0, end: 2}),
			frameRate: 10,
			repeat: -1,
		});
		this.play('avispaLeft', true);
		this.flyPath = new Phaser.Curves.Ellipse(x, y, 100, 100);
		/*this.pathIndex es el grado de completitud de dicha trayetoria. 0 será el punto inicial de la trayectoria circular y 1 el punto final.*/
		this.pathIndex = 0;
		this.pathSpeed = 0.005;
		this.pathVector = new Phaser.Math.Vector2();
		/*    • La función getPoint recibe dos parámetros:
        ◦ El primero es el grado de completitud de la trayectoria (el path).
        ◦ El segundo es la variable (this.pathVector) en la que vamos a almacenar las coordenadas correspondientes a ese grado de completitud de la trayectoria.
        */
		this.flyPath.getPoint(0, this.pathVector);
		this.setPosition(this.pathVector.x, this.pathVector.y);
		/*this.path es variable que almacenará las diferentes trayectorias de la avispa (inicialmente dando vueltas, luego en línea recta hacia el player para atacarle y en línea recta hasta su posición original)*/
		this.path = this.flyPath;
	}
	update() {
		/*Incrementamos pathIndex, que es el coeficiente que indica el grado de completitud de la trayectoria.*/
		this.pathIndex = Phaser.Math.Wrap(this.pathIndex + this.pathSpeed, 0, 1);
		/*Alimentamos la variable pathVector, que estará en función del grado de completitud de la trayectoria.*/
		this.flyPath.getPoint(this.pathIndex, this.pathVector);
		/*Modificamos la posición de la avispa en función de las coordenadas x e y del vector.*/
		this.setPosition(this.pathVector.x, this.pathVector.y);
	}
}</code></pre>



<h3>Añadir el estado VOLANDO a la Avispa</h3>
<p>Añadiremos los estados después de la clase Avispa.</p>
<pre><code>class AvispaEnemy extends Phaser.Physics.Arcade.Sprite {
  ...
}
AvispaEnemy.VOLANDO = 0;</code></pre>

<p>La avispa sólo volará en círculos en el estado volando, así que cambiamos un poco el código del update de la Avispa. De momento, el método checkPlayer se encargará de ejecutar este vuelo circular de la avispa:</p>

<pre><code>update() {
  if (this.state === AvispaEnemy.VOLANDO) {
    this.checkPlayer();
  }
}

checkPlayer (){
  this.pathIndex = Phaser.Math.Wrap(this.pathIndex + this.pathSpeed, 0, 1);
  this.flyPath.getPoint(this.pathIndex, this.pathVector);
  this.setPosition(this.pathVector.x, this.pathVector.y);
}
</code></pre>


<h3>Avispa detecta a Player</h3>
<pre><span class="font-weight-black">Dentro del método checkPlayer</span><code>//  Actualizamos la posición del círculo que patrulla la avispa para ver si el player se mete dentro
this.patrolCircle.x = this.x;
this.patrolCircle.y = this.y;

// El jugador ha entrado dentro del area de patrulla de la avispa?
const player = this.scene.player;
if (this.patrolCircle.contains(player.x, player.y)) {
	alert('perseguir')
}</code></pre>
<?= getRes('ejemplo','ex/plataformas/30-avispa-detecta-player/index.html','Ver ejemplo',4) ?>


<h3>Avispa persigue a Player</h3>
<pre><span class="font-weight-bold">Actualizamos el método checkPlayer():</span><code>if (this.patrolCircle.contains(player.x, player.y)) {
	this.attackPath.p0.set(this.x, this.y);
	this.attackPath.p1.set(player.x, player.y);
	this.path = this.attackPath;
	this.pathIndex = 0;
	this.attackTime = 0;
	this.state = AvispaEnemy.PERSIGUIENDO;
}</code></pre>

<pre><code>update(time, delta) {
	if (this.state === AvispaEnemy.VOLANDO) {
		this.checkPlayer();
	} else if (this.state === AvispaEnemy.PERSIGUIENDO) {
		this.persiguePlayer(delta);
	}
}</code></pre>


<pre><code>persiguePlayer(delta) {
	this.attackTime += delta;
	var player = this.scene.player;
	this.attackPath.p1.set(player.x, player.y);
	this.pathIndex += this.pathSpeed * 2;
	this.path.getPoint(this.pathIndex, this.pathVector);
	this.setPosition(this.pathVector.x, this.pathVector.y);
	if (this.scene.physics.overlap(this, player) && this.state === AvispaEnemy.PERSIGUIENDO) {
		alert('ataca');
	}
}</code></pre>
<pre><code>AvispaEnemy.VOLANDO = 0;
AvispaEnemy.PERSIGUIENDO = 1;</code></pre>


<h3>Avispa ataca a Player</h3>
<pre><code>this.anims.create({
  key: 'avispaAttack',
  frames: scene.anims.generateFrameNumbers('avispa', { frames: [ 3, 4, 5, 4, 3 ] }),
  frameRate: 10
});</code></pre>
<p>En vez de un alert, cuando la avispa colisione contra el Player, detonaremos la animación de ataque </p>
<pre><code>if (this.scene.physics.overlap(this, player) && this.state === AvispaEnemy.PERSIGUIENDO) {
	this.state = AvispaEnemy.ATACANDO;
	this.play('avispaAttack', true);
}</code></pre>
<p>Ahora mismo, debajo de la clase Avispa tendremos tres constantes:</p>
<pre><code>AvispaEnemy.VOLANDO = 0;
AvispaEnemy.PERSIGUIENDO = 1;
AvispaEnemy.ATACANDO = 2;</code></pre>



<h3>Avispa vuelve a casa</h3>
<pre><code><span class="pink">this.startPlace = new Phaser.Math.Vector2(this.pathVector.x, this.pathVector.y);</span>
this.on('animationcomplete', this.attackComplete, this);</code></pre>

<pre><code>attackComplete(animation) {
  if (this.state === AvispaEnemy.ATACANDO && animation.key === 'avispaAttack') {
    this.returnHome();
  }
}</code></pre>

<pre><code>returnHome() {
	this.attackPath.p0.set(this.x, this.y);
	this.attackPath.p1.set(<span class="pink">this.startPlace.x, this.startPlace.y</span>);
	this.pathIndex = 0;
	this.path.getPoint(this.pathIndex, this.pathVector);
	this.setPosition(this.pathVector.x, this.pathVector.y);
	this.state = AvispaEnemy.VOLVIENDO;
	this.play('avispaLeft', true);
}</code></pre>

<h3>Avispa continua volando</h3>

<pre><code>else if (this.state === AvispaEnemy.VOLVIENDO) {
  this.pathIndex += this.pathSpeed * 2;
  this.path.getPoint(this.pathIndex, this.pathVector);
  this.setPosition(this.pathVector.x, this.pathVector.y);
  if (this.pathIndex >= 1){
    this.continuaVolando();
  }
}</code></pre>

<pre><code>continuaVolando () {
  this.state = AvispaEnemy.VOLANDO;
  this.path = this.flyPath;
  this.pathIndex = 0;
}</code></pre>

<pre><code>AvispaEnemy.VOLANDO = 0;
AvispaEnemy.PERSIGUIENDO = 1;
AvispaEnemy.ATACANDO = 2;
AvispaEnemy.VOLVIENDO = 3;</code></pre>


<h3>La avispa siempre mira al protagonista</h3>

<pre><code>if(this.x < this.scene.player.x){
	this.flipX = true;
}else{
	this.flipX = false;
}</code></pre>

<h3>El heroe recibe daño</h3>
<pre><span class="black bold">Dentro de la función persiguePlayer</span><code>if (this.scene.physics.overlap(this, player) && this.state === AvispaEnemy.PERSIGUIENDO){
	this.state = AvispaEnemy.ATACANDO;
	this.play('avispaAttack', true);
	this.scene.playerGolpeadoPorAvispa();
}</code></pre>

<pre><code>playerGolpeadoPorAvispa(){
    alert('golpeado')
}</code></pre>

<h3>El prota sale despedido por los aires</h3>

<pre><code>  playerGolpeado(){
	this.player.estaAturdido = true;
	this.player.body.setVelocity(-150,-150);
}</code></pre>


<pre><code>update() {
	if(!this.player.estaSiendoGolpeado){
		//aquí dentro vendría todo el código que ya teníamos de la función update
	}
}</code></pre>

<h3>Reactivar los controles del jugador</h3>
<pre><code>playerGolpeadoPorAvispa() {
	this.estaAturdido = true;
	this.body.setVelocity(-150, -150);
	this.scene.time.addEvent({delay: 1000, callback: this.terminoElAturdimiento, callbackScope: this});
}</code></pre>

<pre><code>terminoElAturdimiento() {
	this.estaAturdido = false;
}</code></pre>

<h3>Añadir meta</h3>

<pre><span class="font-weight-bold">En el preload()</span><code>this.load.image('meta', '/curso/assets/phaser/plataformas/meta.png');</code></pre>

<pre><span class="font-weight-bold">En el create()</span><code>this.meta = this.physics.add.sprite(metaFromTiled.x, metaFromTiled.y, 'meta');
this.meta.body.immovable = true;
this.meta.body.moves = false;</code></pre>

<h3>Fin del juego</h3>

<pre><code>this.physics.add.overlap(this.player, this.meta, this.playerAlcanzaMeta, null, this);</code></pre>

<pre><code>playerAlcanzaMeta(){
    this.scene.start('finScene');
}</code></pre>

<h3>Limitando la cámara</h3>

<pre><code>this.cameras.main.setBounds(0, 0, 3520, 640);</code></pre>



<h3>Escena de perder tras explotar</h3>
<pre><code>class PerderEscena extends Phaser.Scene {
    constructor() {
        super({key: 'perderScene'});
    }
    preload() {
        this.load.image('fin', '/curso/assets/phaser/fin-de-juego.jpg');
    }
    create() {
        this.add.image(480, 320, 'fin');
    }
}</code></pre>

<pre><code>scene: [Escena, FinEscena, PerderEscena],</code></pre>

<pre><code>animationComplete(animation, frame, sprite) {
    if (animation.key === 'explosionAnim') {
        this.disableBody(true, true);
        this.scene.scene.start('perderScene');
    }
}</code></pre>

<h3>Escena de perder tras caer por precicipio</h3>

<pre><code>this.physics.world.setBoundsCollision(false, false, false, true);
this.physics.world.on('worldbounds', () => {
    this.scene.start('perderScene');
});</code></pre>


<pre><code>this.setCollideWorldBounds(true);
this.body.onWorldBounds = true;</code></pre>

</div></article>

<article><div>
		<h2 id="carreras-con-arcade-y-tiles">Carreras con arcade y tiles</h2>

		<div class="row">
			<div class="col-md-6"><iframe class="monteserin_iframe" src="./ex/carreras/con-arcade-con-tiled/index.html"></iframe>
</div>
			<div class="col-md-6">		<div class="centraditos">
	<?= getRes('recurso','ex/carreras/con-arcade-con-tiled/img.zip', 'Descargar recursos') ?>
	<?= getRes('ejemplo','ex/carreras/con-arcade-con-tiled/index.html', 'Ver juego terminado') ?>
</div>
</div>
		</div>
	<h3>Carga Background</h3>

	<h3>Sprite animado</h3>


	<h3>Carga coches con función</h3>

	<h3>Mover coches hacia delante</h3>

	<h3>Rotar</h3>
	<h3>Controles visuales</h3>

	<h3>Físicas</h3>

	<h3>Marcadores</h3>

	<h3>Detectar vueltas</h3>

	<h3>Detectar trampas</h3>
</main>		

<?php 
});
include $path."/diapos_theme/footer.php";
?>