<?php 
$titulo_curso="Processing";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	global $path;
	include $path."diapos_theme/body_init.php";
?>

<section id="amor" class="verIndice">

				<article id="inicio_del_documento" class="indice">

<ol>
    <li><a href="#que_es">¿Qué es?</a></li>
	<li><a href="#links_interes">Links de interés</a></li>
	<li><a href="#processing_js">Processing JS</a></li>
	<li><a href="#mi_primer_programa">Mi primer programa</a></li>
	<li><a href="#pintar">Pintar figuras</a></li>
	<li><a href="#variables_estructura">Variables y estructura</a></li>
	<li><a href="#modo_dinamico">Modo dinámico</a></li>
	<li><a href="#mouse">mouseX, mouseY</a></li>
	<li><a href="#random">función Random</a></li>
	<li><a href="#estructuras_conrol">Estructuras de control</a></li>
	<li><a href="#pelota_que_cae">Pelota que cae</a></li>
	<li><a href="#bucle">Bucle</a></li>
	<li><a href="#carga_fuentes">Carga de fuentes</a></li>
	<li><a href="#imagenes">Imágenes</a></li>
	<li><a href="#sonido">Sonido</a></li>
	<li><a href="#ejercicio_imagen_sonido">Ejercicio imagen y sonido</a></li>
	</ol>
</article>
</section>
<main class="curso">
<section>
<article>
<h2>¿Qué es?</h2>
<ul>
	<li>Es un lenguaje de creación audiovisual.</li>
	<li>El código de processing es Java. Por tanto, es multiplataforma.</li>
	<li>Nos permite hacer animaciones con pequeñas cantidades de código.</li>
	<li>Tiene una curva de aprendizaje poco pronunciada.</li>
	
</ul>
</article>

<article>
	<h2 id="#links_interes">Links de interés</h2>
	<ul>
		<li><a target="_blank"  href="http://processing.org/examples/">Ejemplos sencillos</a></li>
	<li><a target="_blank"  href="http://processing.org/exhibition/"> Ejemplos complejos</a></li>
	<li>Para aprender paso a paso <a target="_blank"  href="http://funprogramming.org/">Fun Programming</a></li>
	<li><a target="_blank"  href="http://processing.org/reference/">La API con todas las primitivas.</a></li>
	</ul>
</article>

<article>
	<h2 id="processing_js">Processing JS</h2>
	<p>Permite cargar el código fuente de processing (Java) como si fuese Javascript, para pintar en el canvas de HTML5.</p>
	<p><a href="http://processingjs.org/">Página oficial</a></p>
	<p>Ejemplos de dos juegos con proccessingjs:</p>
	<ul>
		<li><a href="http://www.monocubed.com/2010/07/27/galactic-inbox/">Galactic inbox</a></li>
		<li><a href="http://mylifeaquatic.herokuapp.com/">My Life aquatic</a></li>
	</ul>
</article>

<article>
	<h2 id="mi_primer_programa">Mi primer programa</h2>
	<p><span class="red">El canvas debe estar inmediatamente después</span> <span class="blue">del script de processing</span>.</p>
	<pre>
		<code>
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;&lt;/title&gt;
	&lt;script type=&quot;text/javascript&quot; src=&quot;processing-1.4.1.min.js&quot;&gt;
	&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
	<span class="blue">&lt;script type=&quot;application/processing&quot;&gt;
		<span class="bold">rect(10,10,50,50);</span>
	&lt;/script&gt;</span>
	<span class="red">&lt;canvas&gt;&lt;/canvas&gt;</span>
&lt;/body&gt;
&lt;/html&gt;
		</code>
	</pre>
	<a href="ex/plantilla.zip">Descargar plantilla processing.</a>
<p><a href="processing_cheat_sheet_spanish.pdf">Chuleta processing.</a></p>

	<h3>Cambiar propiedades del lienzo</h3>
	<pre>
		<code>
size(500, 500);
background(255);
		</code>
	</pre>
	<a href="ex/cambiar-lienzo.html">Ver ejemplo cambiar propiedades del lienzo.</a>
</article>
<article>
	<h2 id="pintar_figuras">Pintar figuras</h2>
	<h3>Dibujar formas geométricas</h3>
<pre><code>rect(50,50,75,100);
ellipse(200,200,70,57);
line(90,150,500,500);</code></pre>
<a href="ex/formas-geometricas.html">Ver ejemplo formas geométricas</a>
<h3>Pintar</h3>
<pre>
	<code>
<span class="red bold">stroke(255,0,0);</span>
rect(50,50,75,100);
<span class="green">//Probar a descomentar la siguiente línea:</span>
<span class="green">//noStroke();</span>
<span class="red bold">strokeWeight(10);</span>
<span class="red bold">fill(0,255,0);</span>
ellipse(200,200,70,57);
<span class="red bold">stroke(117);</span>
line(90,150,500,500);
	</code>
</pre>

<h3>Ejercicio</h3>
<ol>
	<li>Utilizando la función rect(x1, y1, ancho, alto) dibujar un rectángulo.</li>

<li>Utilizando la función ellipse(centrox, centroy, ancho, alto) dibujar una elipse.</li>

<li>Utilizando la función triangle(x1, y1, x2, y2, x3, y3) dibujar un triángulo.</li>

<li>Utilizando la función fill(R, G,B) pintar el relleno del rectángulo.</li>

<li>Utilizando la función stroke(R , G, B) pintar el borde del rectángulo.</li>

<li>Lograr que ambas figuas tengan diferente color de relleno y borde.</li>

<li>Darle transparencia al color de relleno de las primitivas, pasando cuatro parámetros en lugar de 3 (R, G, B, A). Tener en cuenta que el valor del canal alfa va de 0 a 255.</li>
</ol>
<p>Notas:</p>
<p>R, G, B son los valores del rojo, verde y azul respectivamente. Dichos valores van de 0 a 255.</p>
<a href="ex/">Ver ejercicio resuelto</a>

<h3>Dibujar una cara</h3>
<a href="ex/dibujo-cara.html">Ver ejercicio dibujo cara.</a>

</article>

<article>
<h2 id="variables_estructura">Variables y estructura</h2>
	<h3>Declaración de variables numéricas</h3>
	<pre><code>int <span class="red">circleX</span> = 0;

size(500,500);

ellipse(<span class="red">circleX</span>,100,50,50);</code></pre>
	<a href="ex/variables-numericas.html">Ver ejemplo de variables numéricas.</a>
</article>

<article>
	<h2 id="modo_dinamico">Modo dinámico</h2>
	<p>Utilizaremos las funciones setup() y draw().</p>
	<p>Todo lo que esté dentro del método draw() se ejecutará en cada fotograma de la película.</p>

<pre><code>
void setup(){
	size(500, 500);
	frameRate(15); <span class="green">//por defecto, 60</span>
	background(255);
}

void draw(){
	line(0, 0, mouseX, mouseY);
}</code></pre>	
<p>Nota:</p>
<p>Si defino una función setup deberé definir también una función draw, o de lo contrario, obtendré el siguiente error:</p>
<p>It looks like you're mixing “active” and “static” modes.</p>

	<h3>Declaración de variables en estructura</h3>
<pre><code>int circleX = 0;

void setup() {
  size(500,500);
}

void draw() {
  ellipse(circleX,100,50,50);
}</code></pre>
<pre><code>int circleX = 0;
void setup() {
  size(500,500);
}

void draw() {
	<span class="green">//para borrar la pantalla</span>
	<span class="green">//background(255);</span>
 	ellipse(circleX,100,50,50);
 	circleX = circleX + 1;
}</code></pre>
<a href="ex/uso-de-variables.html">Ver ejemplo de uso de variables.</a>
</article>

<article>
<h2 id="mouse">mouseX, mouseY</h2>
<p>Teniendo en cuenta que las variables mouseX y mouseY almacenan automáticamente y en cada instante la posición del ratón, hacer el ejercicio propuesto.</p>
<a href="ex/mouse-X-mouse-Y.html">Ver ejemplo mouseX, mouseY.</a>
<h3>Ejercicio línea</h3>
<a href="ex/ejercicio-linea.html">Ver ejemplo línea.</a>

	<h3>mousePressed</h3>
	<p>Teniendo en cuenta que la función...</p>
	<pre><code>void mousePressed() {
	...
}</code></pre>
	<p>...se llama automáticamente cada vez que hacemos click, hacer el ejercicio propuesto.</p>
</article>
<article>
<h2 id="random">función random</h2>
<p>Genera un número aleatorio entre 0 y 100.</p>
<pre><code>line(random(500),     random(500),     random(500),     random(500));</code></pre>
<a href="ex/random.html">Ver ejemplo random.</a>
<h3>Ejercicio – líneas centradas</h3>
<a href="ex/random-lineas-centradas.html">Ver ejemplo ejercicio líneas centradas.</a>
<h3>Ejercicio</h3>
<p>En cada paso de frame, cambiar el color de fondo de la pantalla.</p>
<p>Usar   frameRate(4); para que el cambio de color no sea muy rápido.</p>
<a href="ex/cambio-fondo.html">Ver ejercicio cambiar fondo.</a>
<h3>Ejercicio líneas oblicuas</h3>
<a href="ex/lineas-oblicuas.html">Ver ejercicio líneas oblicuas</a>
<h3>Ejercicio líneas verticales</h3>
<a href="ex/lineas-verticales.html">Ver ejercicio líneas verticales.</a>

<h3>Random de elipses</h3>
Nota:
En el siguiente método:
<pre><code>fill(r,g,b,<span class="red">a</span>);</code></pre> 
<span class="red">El último parámetro es la opacidad.</span>
<a href="ex/random-elipses.html">Ver ejercicio random elipses</a>
</article>
<article>
	<h2 id="estrucutras_control">Estructuras de control</h2>
	<pre><code>if(mouseX > 200){
 		background(255, 0, 0);
 }else{
 		background(0,255, 0);
 }</code></pre>
	<a href="ex/estrucutras-control.html">Ver ejemplo estructuras de control</a>
</article>
<article>
	<h2 id="pelota_que_cae">Pelota que cae</h2>
	<a href="ex/pelota-que-cae.html">Ver ejemplo de pelota que cae</a>

	<h3>Ejercicio</h3>
	<p>Cuando la pelota llegue al final de la pantalla, debe pararse</p>
	<a href="ex/pelota-que-cae-se-para.html">Ver ejemplo pelota que se para.</a>
	<h3>Ejercicio</h3>
	<p>Cuando la pelota pase por la mitad de la pantalla, aumentará su tamaño.</p>
	<a href="ex/pelota-que-cae-se-para-y-aumenta.html">Ver ejemplo pelota que cae y aumenta.</a>

	<h3>Ejercicio</h3>
	<p>Hacer una pelota que cae y rebota para arriba.</p>
	<p>Pista:</p>
<pre><code>if(y>=height){
	incremento*=(-1);
}</code></pre>
<a href="ex/pelota-rebota.html">Ver ejemplo pelota que rebota.</a>

<h3 class="orange">Ejercicio pelota que rebota en varias direcciones</h3>
<a href="ex/pelota-varias-direcciones.html">Ver ejercicio de pelota que rebota en varias direcciones.</a>
<h3 class="orange">Ejercicio dos pelotas</h3>
<a href="ex/pelotas-varias-direcciones.html">Ver ejercicio de pelotas en varias direcciones</a>
</article>

<article>
	<h2 id="bucle">Bucle</h2>
<pre><code>void setup() {
	size(500,500);
	background(255);
}

void draw() {
	for(int i=0; i&lt;width; i++){
		point(i,i);
	}
}</code></pre>
<a href="ex/bucle-for.html">Ver ejemplo bucle for</a>

	<h3>bucle for - II</h3>
<pre><code>...
stroke(random(255));
point(i,i);</code></pre>
<a href="ex/bucle-for-2.html">Ver ejemplo bucle for 2</a>

	<h3>bucle for - III</h3>
	<p>Para que el navegador renderice correctamente la animación, el tamaño del lienzo debería ser de 100x100.</p>
<pre><code>for(int i=0; i&lt;width; i++){
      for(int j=0; j&lt;height;j++){
        stroke(random(255));
        point(i,j);
      }
}</code></pre>
<a href="ex/bucle-for-3.html">Ver ejemplo bucle for 3</a>	
<h3 class="orange">Ejercicio</h3>
<p>Utilizando el bucle for, pintar bolitas en la pantalla. Ahora los bucles avanzarán de 50 en 50 y pintaré elipses en lugar de puntos.</p>
<a href="ex/bucle-for-4.html">Ver ejemplo bucle 4</a>
<h3>Ejercicio</h3>
<p>Teniendo en cuenta que la función dist:</p>
<pre><code>
distancia = dist(x1, y2 , x2, y2);</code></pre>
<p>Nos devuelve al distancia entre dos puntos, puedo utlizarla para calcular la distancia entre cualquier punto y el centro del lienzo. Multiplicando esta distancia por un coeficiente reductor podré hacer que las bolitas más alejadas del centro sean más grandes.</p>
<a href="ex/bucle-5.html">Ver ejercicio bucle 5</a>
</article>

<article>
	<h2 id="carga_fuentes">Carga de fuentes</h2>
	<p>Esto no aplica a processing js, sólo a processing</p>
	<p>tools -> create font -> filename -> defino un nombre de fuente que se salvará en la carpeta de trabajo</p>
<pre><code>void setup(){
	background(0);
	size(900,200);
	miFuente=loadFont("miFuente.vlw");
	textAlign(CENTER, CENTER);
	textFont(miFuente, 75);
	text("texto escrito", width/2, height/2);
}

void draw(){
}</code></pre>	
</article>
<article>
	<h2 id="imagenes">Imágenes</h2>
	<h3>Cargar una imágen</h3>
	<pre><code>PImage img;
img = loadImage("tux.png");
image(img, 0, 0);</code></pre>
	<a href="ex/imgs/imagen-1.html">Ver ejemplo de carga de una imágen.</a>
</article>
<article>
	<h2 id="sonido">Sonido (no funciona en processing.js)</h2>
<p>Será necesario importar una libréría. Para importar una librería en el editor de processing: Sketch -> Import Library -> Add Library...</p>
	<pre><code>
import ddf.minim.*;
Minim minim;
AudioPlayer s1;
void setup(){
	minim = new Minim(this);
	s1 = minim.loadFile("original.wav");
}
void mousePressed(){
   s1.play();
}</code></pre>
</article>
<article>
	<h2 id="ejercicio_imagen_sonido">Ejercicio imagen y sonido</h2>
	<p>Realizar el ejercicio del enlace.</p>
	<a href="ex/ejercicio-imagen-y-sonido/index.html">Ver ejercicio</a>
</article>
</section>
</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>