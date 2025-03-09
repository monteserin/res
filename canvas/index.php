<?php 
/*$titulo_curso="Curso de Canvas nativo";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
include $path."diapos_theme/head.php";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
add_action( 'genesis_after_header', function(){
	global $path;
	include $path."diapos_theme/body_init.php";
	echo "<h1>$titulo_curso</h1>";
*/

?>
<section id="amor" class="verIndice">
				<article id="inicio_del_documento" class="indice">
<ol>
		<li><a href="#hola_mundo">Hola Mundo</a></li>
				<li><a href="#fill_stroke">fill, stroke</a></li>
		<li><a href="#save">save</a></li>

		<li><a href="#primitivas">Primitivas</a>

<ol>
	<li><a href="#rectangulo">Rectángulo</a></li>
	<li><a href="#arco">Arco</a></li>
	<li><a href="#ejercicio">Ejercicio</a></li>
	<li><a href="#pag_enlace">Hacer la página del enlace</a></li>
	<li><a href="#line">line</a></li>
	<li><a href="#text">text</a></li>
	<li><a href="#text_metrics">text- metrics</a></li>
	<li><a href="#image">image</a></li>
	<li><a href="#shadow">shadow</a></li>
	<li><a href="#gradient">gradient</a></li>
</ol>

		</li>
		<li><a href="#convertir">Convertir un svg a código del canvas de HTML5</a></li>
		<li><a href="#animaciones">Animaciones</a></li>
	<li><a href="#mejor_rendimiento">Mejor rendimiento con requestAnimationFrame</a></li>	
	<li><a href="#estructura_correcta">Estructura correcta del bucle infinito para hacer un videojuego</a></li>
	<li><a href="#ejercicio_2">Ejercicio</a></li>
	<li><a href="#ejercicio_3">Ejercicio</a></li>
	<li><a href="#ejercicio_4">Ejercicio</a></li>
	<li><a href="#ejercicio_5">Ejercicio</a></li>
	<li><a href="#gestionando_colisiones">Gestionando colisiones</a></li>
	<li><a href="#llegar_al_tesoro">Ejercicio - llegar al tesoro</a></li>
	<li><a href="#add_sprites">Ejercicio - Añadimos el uso de sprites</a></li>
	<li><a href="#double_buffer">double buffer animation</a></li>
			</ol>
</article>
</section>
<main class="curso">
<section>
<article>
<h2 id="hola_mundo">Hola Mundo</h2>
<pre><code>&lt;canvas id=&quot;canvas&quot; width=&quot;400px&quot; height=&quot;400px&quot; style=&quot;border:2px solid black&quot; /&gt;
&lt;script&gt;
	var c = document.getElementById(&quot;canvas&quot;);
	var ctx = c.getContext(&quot;2d&quot;);

	ctx.font = &quot;40px Arial&quot;;
	ctx.fillText(&#x201c;Hola mundo&#x201d;, 50, 50);
&lt;/script&gt;</code></pre>

	<?php // getRes('ejemplo','ex/hola-mundo.html','Hola Mundo') ?>

</article>
<article>
	<h2 id="fill_stroke">fill, stroke</h2>
<pre><code><span class="gren">//Rectángulo sin borde</span>
ctx.fillStyle = "red";
ctx.fillRect(10, 10, 50, 50);

<span class="gren">//Rectángulo azul (sólo borde)</span>
ctx.lineWidth = 5;
ctx.strokeStyle = "rgba(0, 0, 255, 1)";
ctx.strokeRect(70, 70, 140, 140);
			
<span class="gren">//Borra la pantalla entera</span>
<span class="gren">//ctx.clearRect(0,0,400,400);</span></code></pre>

	<?php // getRes('ejemplo','ex/fill-stroke.html','fill stroke') ?>


</article>
<article>
	<h2 id="save">save</h2>
<pre><code><span class="green">//Rect&aacute;ngulo sin borde</span>
ctx.fillStyle = &quot;red&quot;;
ctx.fillRect(10, 10, 50, 50);
ctx.save();
			
ctx.fillStyle = &quot;blue&quot;;
ctx.fillRect(60, 60, 150, 150);

<span class="green">//Pinto un cuadrado rojo. Si comento la siguiente l&iacute;nea el rect&aacute;ngulo se pinta en azul</span>
ctx.restore();
ctx.fillRect(160, 160, 250, 250);</code></pre>
	<?php // getRes('ejemplo','ex/context-save.html','Salvar contexto') ?>

</article>

<article>
<h2 id="primitivas">Primitivas</h2>
	<h3 id="rectangulo">Rectángulo</h3>
<pre><code><span class="green">//Rectángulo con borde</span>
ctx.rect(40, 100, 100, 200);
ctx.fillStyle = "#8ED6FF";
ctx.fill();
ctx.lineWidth = 5;
ctx.strokeStyle = "black";
ctx.stroke();</code></pre>
	<?php // getRes('ejemplo','ex/rect.html','Dibujar rectángulo') ?>



<h3 id="arco">Arco</h3>
<pre><code>ctx.fillStyle = "green";
<span class="green">//arc(cx, cy, radio, inicioArco (rad), finArco(rad), sentido horario)</span>
ctx.arc(180, 120, 60, 1* Math.PI, Math.PI * 2, true);
ctx.fill();</code></pre>

	<?php // getRes('ejemplo','ex/arc.html','Dibujar arco') ?>


<h3 id="ejercicio">Ejercicio</h3>
<p>Hacer un mini paint.</p>
<pre><code>document.onmousedown = ratonPulsado;
document.onmouseup = ratonLevantado;

function ratonLevantado(){
	document.onmousemove = null;
}
function ratonPulsado(){
	document.onmousemove = ratonSeMueve;
}
	
function ratonSeMueve(event) {
	var x = event.clientX;
	var y = event.clientY;
	ctx.beginPath();
	...
	ctx.closePath();
}</code></pre>
	<?php // getRes('ejemplo','ex/ejercicio-paint.html','Ejercicio paint') ?>


<h3 id="pag_enlace">Hacer la página del enlace</h3>
<p>Recursos</p>
<ul>
	<li><a href="ex/ejercicio-ojo/images/monstruo.png">monstruo</a></li>
	<li><a href="ex/ejercicio-ojo/images/cornea.png">cornea</a></li>
</ul>
<pre><code>&lt;div style=&quot;background:url(images/monstruo.png); width:1024px; height:768px;position:absolute; z-index: 10&quot;&gt;&lt;/div&gt;
&lt;div style=&quot;background:url(images/cornea.png);margin-left:470px; margin-top:130px;width:182px; height:192px; position:absolute; z-index: 3&quot;&gt;&lt;/div&gt;
&lt;canvas id=&quot;canvas&quot; width=&quot;400px&quot; height=&quot;400px&quot; style=&quot;position:absolute;z-index:6;  margin-left:350px; border: solid black 2px&quot;&gt;&lt;/canvas&gt;</code></pre>

	<?php // getRes('ejemplo','ex/ejercicio-ojo/index.html','Ejercicio ojo') ?>


<h3 id="line">line</h3>
<pre><code>ctx.moveTo(50, 50);
ctx.lineTo(150, 150);
ctx.lineTo(150, 250);
ctx.lineWidth = 10;
ctx.strokeStyle = &quot;#ff0000&quot;;
ctx.lineCap = &quot;round&quot;; //tres valores: butt, round, or square
ctx.stroke();</code></pre>

	<?php // getRes('ejemplo','ex/line.html','Dibujar línea') ?>



<h3 id="text">text</h3>
<pre><code>ctx.font = "40pt Calibri";
ctx.fillStyle = "#0000ff"; // text color
ctx.fillText("Hello World!", 50, 100);   
ctx.lineWidth = 3;
ctx.strokeStyle = "green";
<span class="green">//start, end, left, center, or right. left es el valor por defecto
//left equivale a start
//right equivale a end</span>
ctx.textAlign = "center";
ctx.textBaseline = "middle";
ctx.strokeText("Hello World!", 50, 100);</code></pre>
	<?php // getRes('ejemplo','ex/text.html','Dibujar texto') ?>


<h3 id="text_metrics">text, metrics</h3>
<pre><code>var text = "Hello World!";
ctx.font = "30pt Calibri";
ctx.textAlign = "start";
ctx.fillStyle = "blue";
ctx.fillText(text, 50, 50);
<span class="green">// get text metrics</span>
var metrics = ctx.measureText(text);
var width = metrics.width;
alert(width);</code></pre>

	<?php // getRes('ejemplo','ex/text-metrics.html','Medir texto') ?>

<h3 id="image">image</h3>
<pre><code>var imageObj = new Image();
imageObj.src = "logo.png";

imageObj.onload = function() {
	<span class="green">//VARIAS FORMAS DE INSERCION:
			
	//Poner la imagen:
	//(objetoImagen, posicion x, posicion y)</span>
	ctx.drawImage(imageObj, 0, 0);
				
	<span class="green">//Poner la imagen redimensionando:
	//(objetoImagen, posicion x, posicion y, ancho, alto)</span>
	ctx.drawImage(imageObj, 300, 0, 50, 50);
				
	<span class="green">//Poner la imagen redimensionando y recortando:
	//ctx.drawImage(imageObj, sourceX, sourceY, sourceWidth, sourceHeight, destX, destY, 			destWidth, destHeight);</span>
	ctx.drawImage(imageObj, 100, 100, 180, 180,200,200, 200,200) 
};</code></pre>

	<?php // getRes('ejemplo','ex/image.html','Imágen') ?>


	</article>
	<article>
<h3 id="shadow">shadow</h3>
<pre><code>ctx.shadowColor = "#000000";
ctx.shadowOffsetX = 10;
ctx.shadowOffsetY = 10;
ctx.shadowBlur = 10;
						
ctx.fillStyle = "rgba(0,0,255,1)";
ctx.fillRect(20,20,200,100);</code></pre>

	<?php // getRes('ejemplo','ex/shadow.html','Sombra') ?>

</article>

<article>
	<h3 id="gradient">gradient</h3>
<pre><code>var c = document.getElementById("canvas");
var ctx = c.getContext("2d");
<span class="green">//coordenadas del punto inicial y final del degradado</span>
var grd = ctx.createLinearGradient(0, 0, 400, 400);
grd.addColorStop(0, "pink");
grd.addColorStop(0.5, "red");
grd.addColorStop(1, "blue");
ctx.fillStyle = grd;
ctx.fillRect(0,0,400,400);</code></pre>

	<?php // getRes('ejemplo','ex/gradient.html','Gradiente') ?>

</article>
<article>
	<h2 id="convertir">Convertir un svg a código del canvas de HTML5</h2>
<a class="recurso" target="_blank" href="http://www.professorcloud.com/svg-to-canvas/">http://www.professorcloud.com/svg-to-canvas/</a>	
<pre><code>window.onload = draw(ctx);

function draw(ctx) {
ctx.save();
...</code></pre>
<a class="recurso" href="ex/elmo.png">Descargar SVG para probar</a>

	<?php // getRes('ejemplo','ex/svg-to-html-canvas.html','SVG a canvas') ?>

</article>

<article>
<h2 id="animaciones">Animaciones</h2>
	<h3>Simple Animation con setInterval</h3>
		<?php // getRes('ejemplo','ex/simple-animation.html','Animación simple') ?>


<h3 id="mejor_rendimiento">Mejor rendimiento con requestAnimationFrame</h3>
<pre><code>var c = document.getElementById("canvas");
var ctx = c.getContext("2d");
var posX = 100;

requestAnimationFrame(pintaCuadrado)
function pintaCuadrado(){
	console.log("aaaaaa");
	ctx.save();
	ctx.clearRect(0,0,ctx.canvas.width,ctx.canvas.height);
	ctx.restore();	
	posX = posX + 5;
	ctx.beginPath();
	ctx.rect(posX,0,200,200);
	ctx.fill();
	ctx.closePath();
	requestAnimationFrame(pintaCuadrado)
}</code></pre>

		<?php // getRes('ejemplo','ex/requestanimationframe.html','Ver ejemplo requestAnimationFrame') ?>


<h3 id="estructura_correcta">Estructura correcta del bucle infinito para hacer un videojuego</h3>
<pre><code>var c = document.getElementById("canvas");
var ctx = c.getContext("2d");

var x = 10;
var y = 10;
var w = 20;
var h = 30;
var speed = 2;

var update = function(){
	x +=speed;
}
var draw = function(){
	ctx.clearRect(0,0,300,300);
	ctx.fillStyle = "rgb(200, 0, 100)";
	ctx.fillRect(x, y, w, h);
}
var step = function(){
	update();
	draw();
	window.requestAnimationFrame(step);
};

step();</code></pre>

		<?php // getRes('ejemplo','ex/estructura-juego.html','Ver ejemplo') ?>


<h3 id="ejercicio_2">Ejercicio</h3>
<p>Siguiendo la estructura propuesta en el ejemplo anterior, dibujar un rectángulo que cuando llegue al final de la pantalla dé media vuelta.</p>
<a class="ejercicio" href="ex/cangrejo-1.html">Ver ejemplo resuelto.</a>
<h3 id="ejercicio_3">Ejercicio</h3>
<p>Utilizar el siguiente array de enemigos en lugar de uno solo.</p>
<pre><code>var enemies = [
	{
    	x: 100, //x coordinate
    	y: 100, //y coordinate
    	speedY: 1, //speed in Y
    	w: 40, //width
    	h: 40 //heght
    },
    {
        x: 260,
        y: 100,
        speedY: 2,
        w: 40,
        h: 40
    },
    {
        x: 380,
        y: 100,
        speedY: 3,
        w: 40,
        h: 40
    },
    {
        x: 450,
        y: 100,
        speedY: 7,
        w: 40,
        h: 40
    }
];</code></pre>

		<?php // getRes('ejemplo','ex/cangrejo-2.html','Ver ejemplo resuelto') ?>


<h3 id="ejercicio_4">Ejercicio</h3>
<p>Utilizando el siguiente código, dibujar un jugador en escena, de tal forma que cuando mantengamos pulsado el ratón sobre el canvas, el jugador avance, y si dejamos de pulsar, el jugador se quede quieto</p>
<pre><code>canvas.addEventListener('mousedown', function(){
  player.isMoving = true;
});
canvas.addEventListener('mouseup', function(){
  player.isMoving = false;
});</code></pre>

<h3 id="ejercicio_5">Ejercicio</h3>
<p>Retocar el código anterior utilizando el siguiente código para que responda correctamente a los eventos del móvil</p>
<pre><code>canvas.addEventListener('mousedown', movePlayer);
canvas.addEventListener('mouseup', stopPlayer);

canvas.addEventListener('touchstart', movePlayer);
canvas.addEventListener('touchend', stopPlayer);</code></pre>

<h3 id="gestionando_colisiones">Gestionando colisiones</h3>
<p>Implementar el siguiente código para gestionar colisiones</p>
<pre><code>var checkCollision = function(rect1, rect2){
	var closeOnWidth = Math.abs(rect1.x -rect2.x)&lt;=Math.max(rect1.w, rect2.w);
	var closeOnHeight = Math.abs(rect1.y - rect2.y)&lt;=Math.max(rect1.h, rect2.h);
	return closeOnHeight &amp;&amp; closeOnWidth;
}
...

if(checkCollision(player, enemies[i])){
	gameLive = false;
	alert("Game Over");
}</code></pre>
		<?php // getRes('ejemplo','ex/cangrejo-5.html','Ver ejercicio resuelto') ?>
<h3 id="llegar_al_tesoro">Ejercicio - llegar al tesoro</h3>
<p>Añadir un nuevo objeto: el tesoto. Cuando el juagor colisiones contra él, habrá ganado la partida.</p>
		<?php // getRes('ejemplo','ex/cangrejo-colision-con-tesoro-6.html','Ver ejercicio resuelto') ?>

<h3 id="add_sprites">Ejercicio - Añadimos el uso de sprites</h3>
<p>Habrá que utilizar el siguiente código:</p>
<pre><code>var sprites = {};
...
var load = function(){
  sprites.player = new Image();
  sprites.player.src = "images/hero.png";

  sprites.background = new Image();
  sprites.background.src = "images/floor.png";

  sprites.enemy = new Image();
  sprites.enemy.src = "images/enemy.png";

  sprites.tesoro = new Image();
  sprites.tesoro.src = "images/chest.png";

}
...
var draw = function(){
	ctx.clearRect(0,0,400,400);
	
    ctx.fillRect(player.x, player.y, player.w, player.h);
    ctx.fillRect(tesoro.x, tesoro.y, tesoro.w, tesoro.h);

    ctx.drawImage(sprites.background, 0, 0);
    ctx.drawImage(sprites.player, player.x, player.y);

    enemies.forEach(function(element, index){
    	ctx.drawImage(sprites.enemy, element.x, element.y);
    });
    ctx.drawImage(sprites.tesoro, tesoro.x, tesoro.y);
}
...
load();
step();</code></pre>

		<?php // getRes('ejemplo','ex/cangrejo-sprites-7.html','Ver ejercicio resuelto') ?>

<h3 id="double_buffer">double buffer animation</h3>

		<?php // getRes('ejemplo','ex/doble-buffer-animation.html','Doble buffer') ?>

</article>
</section>
</main>
<?php 
// });
// include $path."/diapos_theme/footer.php";
?>