<?php 
$titulo_curso="SASS";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
add_action( 'genesis_after_header', function(){
	global $path;
	include $path."diapos_theme/body_init.php";
	echo "<h1>$titulo_curso</h1>";
?><section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#paraquesirve">¿Para qué sirve?</a></li>
		<li><a href="#caracteristicas">Características.</a></li>
		<li><a href="#instalacion">Instalación</a></li>
		<li><a href="#uso">Uso</a></li>
		<li><a href="#variables">Variables</a></li>
		<li><a href="#mixings">Mixings, o pedazos de código reutilizable</a></li>
		<li><a href="#herencia">Herencia</a></li>
		<li><a href="#nesting">Nesting</a></li>
		<li><a href="#ejercicio">Ejercicio</a></li>

		
			</ol>
</article>
</section>
<main class="curso">
<article>

<h2 id="paraquesirve">¿Para qué sirve?</h2>
<p>SASS (Syntactically Awesome Style Sheets) permite convertir el CSS en algo dinámico, añadiendo la posibilidad de definir variables y funciones. </p>

</article>

<article>
<h2 id="caracteristicas">Características</h2>
<p>SASS dispone de dos formatos diferentes para la sintaxis:</p>

<ul>
	<li><strong>.sass</strong>: 
		<ul>
			<li>Es más antiguo.</li>
			<li>No utiliza llaves ni punto y coma final
<pre><code>
body
background: #000
font-size: 62.5%	
</code></pre>

			</li>
		</ul>
	</li>
	<li><strong>.scss</strong>:
		<ul>
			<li>Es la versión 3 del preprocesador.</li>
			<li>Permite utilizar llaves e incorporar código clásico.</li>
		</ul>

	</li>
</ul>
<p>En el presente curso estudiaremos el código correspondiente a la extensión SCSS</p>

<p>En <a target="_blank" href="http://www.sassmeister.com/">este enlace</a> podemos ver la hoja de estilos resultante de ejecutar código SASS.</p>
</article>
<article>
	<h2 id="instalacion">Instalación</h2>
	<h3>En windows:</h3>
	<p>Primero habrá que instalar ruby. Podemos descargarlo desde <a target="_blank" href="http://rubyinstaller.org/downloads/">este enlace</a>.</p>
	<pre><code>npm install -g sass</code></pre>
	<h3>En Mac</h3>
<pre><code>sudo gem install compass</code></pre>

<h3>En linux</h3>
<pre><code>sudo apt-get -y install ruby &&
sudo su -c "gem install sass"</code></pre>

<p>También es posible utilizar sass mediante aplicaciones, en lugar de mediante la línea de comando.</p>
</article>
<article>
	<h2 id="uso">Uso</h2>
	<p>Es necesario que el fichero <span class="i">.scss</span> exista de antemano.</p>
	<p>No es necesario que el fichero <span class="i">.css</span> exista de antemano.</p>
	<pre><code>sass --watch filename.scss:filename.css</code></pre>
</article>
<article>
	<h2 id="variables">Variables</h2>
<pre><code>$brand: #F98355;
body{
	color:$brand;
}</code></pre>
</article>

<article>
	<h2 id="mixings">Mixings, o pedazos de código reutilizable</h2>
<pre><code>@mixin circle($width) {
  width: $width;
  height: $width;
  border-radius: 100%;
  background:black;
}

div{
  @include circle(100px);
}</code></pre>	
</article>

<article>
	<h2 id="herencia">Herencia</h2>
<pre><code>
.featured{
	background:#000;
	width:100px;
	height:100px;
	padding:10px;
}

div{
  @extend .featured;
  color:orange;
  font-family:sans-serif;
}</code></pre>
</article>
<article>
	<h2 id="nesting">Nesting</h2>

	<pre><code>div{
	a{
		&:hover{

		}
	}

}</code></pre>


	<p>El código anterior equivale a este:</p>
<pre><code>div{}
div a{}
div a:hover{}</code></pre>

</article>
<article>
	<h2 id="ejercicio">Ejercicio</h2>
	<p>utilizando las siguientes variables de SASS:</p>
	<pre><code>/* colores */
$backColor: #bbd1ff;
$sliderColor: orange;
$boxColor: rgba(0, 0, 0, 0.5);
$footer_color:pink;
$text_color:white;
$alternate_text_color:black;

/* distancias*/
$margin_top:40px;
$padding_box:20px;
$footer_padding:20px;</code></pre>

<div class="row">
<?= getRes('ejemplo','ex/sass-ej/index.html', 'Ver ejemplo') ?>

<?= getRes('recurso','ex/sass-ej-descargar.zip', 'Descargar recurso') ?>

</div>
</article>
</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>