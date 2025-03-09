<?php 

/*$titulo_curso="PHP";
$meta_description = 'Usando PHP he modificado hasta el infinito el código fuente de mi página web. En este curso te enseño a dominar los fundamentos de este lenguaje.';
$img_curso = 'curso-php.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	global $dots;
*/
	?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Curso de PHP",
  "description": "Curso de introducción PHP con lo necesario para asentar las bases de este lenguaje y poder estudiar alguno de sus múltiples frameworks.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Monteserín",
    "sameAs": ["https://www.facebook.com/pablomonteserincom/","https://www.linkedin.com/in/%E2%99%A5-pablo-monteser%C3%ADn-59079728/","https://www.youtube.com/user/PabloMonteserinTutor","https://twitter.com/monteserin1982"]
  }
}
</script>

<section id="amor" class="verIndice">
		<article id="inicio_del_documento" class="indice">

<ol>
	<li><a href="#introduccion">Introducción</a></li>
	<li><a href="#comentarios">comentarios</a></li>
	<li><a href="#operadores">operadores</a></li>

	<li><a href="#variables">variables</a></li>
	<li><a href="#formularios">formularios</a></li>
	<li><a href="#estructuras-condicionales">Estructuras condicionales</a></li>

	<li><a href="#calculadora">Calculadora</a></li>
	<li><a href="#bucle-for">bucle for</a></li>

	<li><a href="#bucle-while">bucle while</a></li>


	<li><a href="#funciones">funciones</a></li>
	<li><a href="#mandar-mail">Mandar mail</a></li>
	<li><a href="#cadenas">Funciones para trabajo con cadenas</a></li>
	<li><a href="#ejercicios">Ejercicios</a></li>

	<li><a href="#lectura-escritura">Lectura / Escritura de ficheros</a></li>
	<li><a href="#redireccionamiento">Redireccionamiento</a></li>
	<li><a href="#variables-servidor">Variables del servidor</a></li>

	<li><a href="#include">Include</a></li>
	<li><a href="#plantillas">Plantillas</a></li>
	<li><a href="#phpmailer">PHPMailer</a></li>
	<li><a href="#ejercicio-imagenes">Ejercicio imágenes</a></li>

	<li><a href="#arrays">Arrays</a></li>
	<li><a href="#cookies">Cookies</a></li>

<li><a href="#composer-jwt">Composer con JWT</a></li>

</ol>
</article>
	</section>

<main class="curso">
<?php // drawH1WithImg() ?>

	<article><div><h2 id="introduccion">Introducción</h2>
	
		<h3>Lenguajes de guión (script)</h3>
		<p>Los lenguajes scripts son lenguajes que no necesitan ser compilados. En el caso de PHP, el servidor es capaz de interpretar el código fuente y ejecutarlo.</p>

		<p>Según las estadísticas de la página w3techs.com, el lenguaje de programación PHP es utilizado por casi el ochenta por ciento de las páginas web. ¿Merece la pena aprender a programar en PHP?. Todo parece apuntar a que sí.</p><p>PHP se utiliza los gestores de contenido más importantes. Wordpress, Joomla, Drupal, Prestashop... todos han sido construídos con este lenguaje de programación. Por tanto, si quieres aprender a modificarlos en profundidad, parece obvio que necesitarás dominar este lenguaje.</p>';
	$despues = '<h3>¿Qué vas a aprender con este curso de PHP?</h3><p>En este curso veremos los fundamentos de pogramación con PHP. Por tanto, si ya conocías otro lenguaje de programación, seguramente puedas completar el curso rápidamente. Si luego quisieras seguir profundizando, te recomiendo seguir con el curso de PHP y MySQL y estudiar algún framework. De entre las opciones que hay en el mercado, te recomiendo CodeIgniter, que es bastante sencillo. Además, lo que aprendas con CodeIgniter te servirá para serguir progresando hacia otros frameworks más complejos como Laravel o Symphony.</p><p>Con lo que aprendas en este curso tendrás de sobra para hacer pequeñas modificaciones en el código fuente de Wordpress y otros gestores de contenido. Yo personalmente, uso la plantilla Genesis, que está preparada para ser modificada cómodamente mediante pequeñas porciones de código, en lugar de mediante el uso de una herramienta visual. Esto mejora enormemente su velocidad de carga.</p>
	
	
		<h3>Instalar XAMPP (o Easy PHP)</h3>
		<?php // getRes("video_premium abierto",227617028) ?>
	
	
		<h3 id="phpinfo">phppinfo</h3>

<div class="row">
	<div class="col-md-10">
	
	<pre><code><span class="red bold">&lt;?php </span>
	phpinfo();
<span class="red bold">?&gt;</span></code></pre>
		<p>phpinfo(); es una función que devuelve información en formato de página html de nuestro servidor web.</p>

	
	
	</div>
	<div class="col-md-2">
	<?php // getRes("video_premium abierto",227617094) ?></div>
</div>

		

		<h3 id="echo">echo</h3>


		<div class="row">
			<div class="col-md-10"><pre><code><span class="red bold">&lt;?php</span>
	echo &quot;Hola mundo&quot;;
<span class="red bold">?&gt;</span></code></pre>

			</div>
			<div class="col-md-2">		<?php // getRes("video_premium abierto",227617106) ?></div>
		</div>


	

	
			<h3>Podemos mezclar html y php</h3>

			<div class="row">
				<div class="col-md-6">
				
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
	&lt;link type='text/css' rel='stylesheet' href='style.css'/&gt;
	&lt;title&gt;Get Started!&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;p&gt;<span class="font-weight-bold">&lt;?php echo &quot;My first line of PHP!&quot;; ?&gt;</span>&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div>
				<div class="col-md-6">
				<div class="centraditos">
				<?php // getRes("video_premium abierto",227617131) ?>
				<?php // getRes('ejemplo abierto','ex/php-html.php','' ) ?>
				</div>
				</div>
			</div>
										
		
			<h3><span class="text-dark">Ejercicio</span></h3>

<div class="row">
	<div class="col-md-4">
	<p>Pintar una capa roja en la pantalla. Todo el código fuente debe estar escrito dentro de los símbolos &lt;?php ?&gt;. Para ello el código html necesario debe ser ejecutado desde la instrucción echo.</p>
	</div>
	<div class="col-md-8">
	
<div class="centraditos">
<?php // getRes("video_premium abierto",227617577) ?>

			<?php // getRes('ejemplo abierto','ex/capa.php','Capa') ?>
			<?php // getRes("video_premium abierto",227617167) ?>


			</div>
		
		</div>
</div>

			


			</div></article><article><div><h2 id="comentarios">Comentarios</h2>


<div class="row">
	<div class="col-md-6">
	<pre><code>&lt;?php
	echo &quot;Hola mundo&quot;;
	<span class="green">//Esto es un comentario de una sola l&iacute;nea
	/*Y esto un comentario 
	de varias l&iacute;neas*/</span>
?&gt;</code></pre>

	</div>
	<div class="col-md-6">
	<div class="centraditos">
	
	<?php // getRes("video_premium abierto",227617111) ?>

				<?php // getRes('ejemplo abierto','ex/hola-mundo.php', 'Ver ejemplo') ?>
				
				</div>
	</div>
</div>
	
							

		


				</div></article><article><div><h2 id="operadores">Operadores</h2>
	
		
			<h3>Operador de concatenación</h3>


<div class="row">
	<div class="col-md-6">
	<pre><code>&lt;?php
	echo &quot;texto1 &quot;.&quot;texto2&quot;;
?&gt;</code></pre>

	</div>
	<div class="col-md-6">
	
	<div class="centraditos">
	
<?php // getRes("video_premium abierto",227617185) ?>

<?php // getRes('ejemplo abierto','ex/operadores-concatenacion.php','Operadores de concatenación') ?>

</div>
	</div>
</div>

			<h3>Operadores aritméticos</h3>


			<div class="row">
				<div class="col-md-6">
				<pre><code>&lt;?php
	echo (3+2).&quot;&lt;br/&gt;&quot;;
	echo (3-2).&quot;&lt;br/&gt;&quot;;
	echo (3*2).&quot;&lt;br/&gt;&quot;;
	echo (3/2).&quot;&lt;br/&gt;&quot;;
	echo 3%2;
?&gt;</code></pre>

				</div>
				<div class="col-md-6">
				<div class="centraditos">
				
				<?php // getRes("video_premium abierto",227617671) ?>
			<?php // getRes('ejemplo abierto','ex/operadores-matematicos.php','Operadores matemáticos') ?>
			
			</div>
				</div>
			</div>
			

			<h3>Operadores lógicos</h3>

			<div class="row">
				<div class="col-md-10">
				
<pre><code>&lt;?php
	echo 3&gt;2;
	echo &quot;&lt;br/&gt;&quot;;
	echo 3&lt;2;
	echo &quot;&lt;br/&gt;&quot;;
	echo 3&gt;=2;
	echo &quot;&lt;br/&gt;&quot;;
	echo 3&lt;=2;
	echo &quot;&lt;br/&gt;&quot;;
	echo 3==2;
	echo &quot;&lt;br/&gt;&quot;;
	echo 3!=2;
?&gt;</code></pre>
				</div>
				<div class="col-md-2">
				<?php // getRes("video_premium abierto",227617688) ?>

				</div>
			</div>


			<h3>Ejercicio</h3>

<div class="row">
	<div class="col-md-4">
	<p>Añadir los operadores lógicos necesarios para que las siguientes expresiones evaluen siempre a true (mostrarán 1).</p>
			<p>Añadir dos líneas más que evaluen a false.</p>

			<pre><code>&lt;?php
	echo 15  4;
	echo 13  122;
	echo 8*2 16;
?&gt;</code></pre>
	</div>
	<div class="col-md-8">
	
	<div class="centraditos">
	<?php // getRes("video_premium abierto",227617703) ?>

	<?php // getRes('ejemplo abierto','ex/ejercicio-operadores-logicos.php', 'Operadores lógicos') ?>

	<?php // getRes("video_premium abierto",227617718) ?>			

	</div>
	</div>
</div>

		

					</div></article><article><div><h2 id="variables">Variables</h2>

		<div class="row">
			<div class="col-md-10">

			<p>Son zonas de la memoria del ordenador identificadas por un nombre y capaces de almacenar información que puede variar durante la ejecución del programa.</p>
			
			</div>
			<div class="col-md-2">
			<?php // getRes("video_premium abierto",227617725) ?>
			</div>
		</div>
		

			<h3>Variables de texto</h3>

<div class="row">
	<div class="col-md-10">



	<pre><code>&lt;?php
	$texto=&quot;Soy una cadena&quot;;
	echo $texto;
	echo &quot;$texto&quot;;
	echo '$texto';
	echo &quot;Hola". $texto;
	echo &quot;Hola $texto&quot;;
	echo 'Hola $texto';

?&gt;</code></pre>
	</div>
	<div class="col-md-2">
	<?php // getRes('ejemplo abierto','ex/variables-text.php', 'Variables de texto') ?>
	</div>
</div>

		
			<h3>Ejercicio</h3>
			<div class="row">
				<div class="col-md-4">	<p>Que se muestre un mensaje que diga: "Buenas tardes Jose", dónde Jose será el valor de una variable llamada $nombre.</p>
				<pre><span class="bold">pista</span><code>$nombre=...
echo &quot;Buenas...
</code></pre>
			</div>
				<div class="col-md-8">
<div class="centraditos">
<?php // getRes("video_premium abierto",227617759) ?>
<?php // getRes('ejemplo abierto','ex/ejercicio-mensaje.php','Ejercicio mensaje') ?>
	<?php // getRes("video_premium abierto",227617764) ?>

</div>

				</div>
			</div>
			
			
			<h4>Variables numéricas</h4>

<div class="row">
	<div class="col-md-6">


	<pre><code>&lt;?php 
	$i = 5;
	$j = 3;

	echo $i.&quot; + &quot;.$j.&quot;=&lt;br/&gt;&quot;;
	echo &quot;$i + $j =&lt;br/&gt;&quot;;
	echo &quot;&lt;br/&gt;&quot;;
	echo $i.$j;
?&gt;</code></pre>
	</div>
	<div class="col-md-6">

	<div class="centraditos">
	<?php // getRes("video_premium",227617778) ?>
				<?php // getRes('ejemplo','ex/variables.php','Variables') ?>

	</div>
	</div>
</div>

			</div></article><article><div><h2>Constantes</h2>

		<div class="row">
			<div class="col-md-10">
<pre><code>&lt;?php 
	define(&quot;pi&quot;, 3.14);	

	echo pi;

	//La siguiente l&iacute;nea dar&iacute;a un warning
	define(&quot;pi&quot;, 5);

?&gt;</code></pre>
<p>Daría error</p>
</div>
			<div class="col-md-2">
			<?php // getRes("video_premium abierto",227618123) ?>
			</div>
		</div>

			
			

		

			</div></article><article><div><h2 id="formularios">Formularios</h2>

		
			<h3>Peticiones al servidor</h3>
			<p>GET: Hey servidor! Mira lo que te mando en la URL y haz algo, quieres?!</p>
			<p>POST: Hey servidor! Mira lo que te mando en mi cuerpecito y haz algo quieres?!</p>

			<h4>GET vs POST</h4>
			<ul>
				<li> GET es más rápido que POST.</li>
				<li> El número de caracteres que puedes enviar utilizando GET es limitado y depende del servidor.</li>
				<li>La información enviada por GET se puede visualizar en la URL, y por tanto no podríamos enviar información delicada (passwords, etc.)</li>
				<li>No es posible almacenar en favoritos la URL de una petición POST, ya que una petición POST no modifica la URL.</li>
			</ul>
			<?php // getRes("video_premium",227618137) ?>
			<h4>Enviar formulario</h4>

<div class="row">
	<div class="col-md-6">

	<pre><span class="font-weight-bold">enviarFormulario.html</span><code>&lt;form method=&quot;post&quot; action=&quot;procesaFormulario.php&quot;&gt;
	Introduce tu nombre, porfa:
	&lt;input type=&quot;text&quot; name=&quot;<span class="red bold">nombre</span>&quot; /&gt;
	&lt;input type=&quot;submit&quot; /&gt;
&lt;/form&gt;</code></pre>
	</div>
	<div class="col-md-6"><pre><span class="font-weight-bold">procesaFormulario.php</span><code>&lt;?php
	$nombre = $_POST['<span class="red bold">nombre</span>'];
	echo $nombre;
?&gt;</code></pre>
</div>
</div>


	<div class="centraditos">

			<?php // getRes("video_premium",227618163) ?>
<?php // getRes('ejemplo','ex/enviar-formulario/enviar-formulario.html','Enviar un formulario') ?>				

			</div>

	<h4>Ejercicio – repetir el ejemplo de la diapositiva anterior utilizando un textarea</h4>


	<div class="row">
		<div class="col-md-5"><pre><code>&lt;textarea style=&quot;width:300px; height:100px&quot;&gt;&lt;/textarea&gt;</code></pre></div>
		<div class="col-md-7">
			<div class="centraditos">
		<?php // getRes("video_premium",227618763) ?>
		<?php // getRes('ejemplo','ex/ejercicio-textarea-a/enviar-formulario.html', 'Enviar un formulario con textarea') ?>
					<?php // getRes("video_premium",227618170) ?>
					</div>
		</div>
	</div>
			
	<p>El name identifica a cada elemento; el value es la información que contiene.</p>
	<p>Con $_POST recuperas el value del elemento cuyo name le estás pasando como parámetro.</p>

	<h4>Ejercicio: <span class="text-primary">enviar y recoger la información de una combo</span></h4>

<div class="row">
	<div class="col-md-4"><pre><code>&lt;select name=&quot;nombre&quot;&gt;
	&lt;option value=&quot;juan&quot;&gt;Juan
	&lt;/option&gt;
&lt;/select&gt;</code></pre>
</div>
	<div class="col-md-8">
<div class="centraditos">
	<?php // getRes("video_premium",227618185) ?>
	<?php // getRes('ejemplo','ex/ejercicio-combo/enviar-formulario.html', 'Enviar formulario con combo') ?>
	<?php // getRes("video_premium",227618198) ?>		
	</div>

	</div>
</div>

								<h4>Ejercicio</h4>

<div class="row">
	<div class="col-md-6">
	<p>Recuperar la información del textarea de una página y cargarla en un campo de texto de otra página distinta.</p>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
					<?php // getRes("video_premium",227618212) ?>
			<?php // getRes('ejemplo','ex/ejercicio-textarea/enviar-formulario.html', 'Enviar formulario') ?></div>
		
	</div>
</div>

			
		

			</div></article><article><div><h2 id="estructuras-condicionales">Estructuras condicionales</h2>
			
				<h3 id="if">if</h3>

<div class="centraditos">
	<div class="col-md-6">
	<pre><code>&lt;?php 
	$dato1 = 3;
	$dato2 = 5;

	if($dato2 &gt; $dato1){
		echo &quot;dato2 es mayor que dato1&quot;;
	}
?&gt;</code></pre>


	</div>
	<div class="col-md-6">
	<div class="centraditos">
		<?php // getRes("video_premium",227618212) ?>

			<?php // getRes('ejemplo','ex/estructuras-control/if/if.php','Estructura de control if') ?></div>

	</div>
</div>


			<h4>Ejercicio</h4>

			<div class="row">
				<div class="col-md-4">	<p>Modifica el símbolo en rojo para que se imprima el mensaje.</p>
				<pre><code>&lt;?php
	$dato1 = 10;
	$dato2 = 10;
	if($dato1 <span class="red bold">&gt;</span> $dato2){
		echo &quot;exito&quot;;
	}
?&gt;</code></pre>

			</div>
				<div class="col-md-8">
					<div class="centraditos">
					<?php // getRes("video_premium",227619362) ?>
							
		<?php // getRes('ejemplo','ex/estructuras-control/if/if-ejercicio.php','Ejercicio if') ?>
		<?php // getRes("video_premium",227619152) ?>

					</div>
				</div>
			</div>
		

		<h4>elseif</h4>

<div class="row">
	<div class="col-md-6">
	<pre><code>&lt;?php
	$dato1 = 3;
	$dato2 = 5;
	if($dato1 &gt; $dato2){
		echo &quot;dato1 es mayor que dato2&quot;;
	}elseif($dato1 &lt; $dato2){
		echo &quot;Va a ser que no...&quot;;
	}
?&gt;</code></pre>

	</div>
	<div class="col-md-6">
	<div class="centraditos">
<?php // getRes("video_premium",227619175) ?>
		<?php // getRes('ejemplo','ex/estructuras-control/if/2-if.php', 'elseif') ?>
				</div>


	</div>
</div>


<h3>
	else
</h3>

<div class="row">
	<div class="col-md-6">

	<pre><code>&lt;?php
	$dato1 = 3;
	$dato2 = 5;
	if($dato1 &gt; $dato2){
		echo &quot;dato1 es mayor que dato2&quot;;
	}else if($dato1 == $dato2){
		echo &quot;dato1 es igual que dato2&quot;;
	}else{
		echo &quot;dato1 es mayor que dato2&quot;;
	}
?&gt;</code></pre>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
<?php // getRes("video_premium",227619556) ?>
<?php // getRes('ejemplo','ex/estructuras-control/if/4-if.php','else') ?>

</div>

	</div>
</div>


<h4>Ejercicio</h4>
<div class="row">
	<div class="col-md-4">
	<p>Completar el if con una expresión que permita que se ejecute el código del else. Hacer que en el else se muestre un mensaje cualquiera.</p>
	<pre><code>&lt;?php
	if ( ){
		echo &quot;Esto no deber&iacute;a verse&quot;;
	}else{
		<span class="green">//poner aqu&iacute; c&oacute;digo</span>
	}
?&gt;
</code></pre>
	</div>
	<div class="col-md-8">
	<div class="row">
<?php // getRes("video_premium",227619247) ?>
<?php // getRes('ejemplo','ex/estructuras-control/if/if-ejercicio-2.php', 'Ejercicio if') ?>
<?php // getRes("video_premium",227619224) ?>



</div>
	</div>
</div>





<h4>Ejercicio</h4>

<div class="row">
	<div class="col-md-6">
	<p>Corrige los errores que hay en este código:</p>
	<pre><code>&lt;?php
	if {10 == 10}(
		echo &quot;You got a true!&quot;
	) else (
		echo &quot;You got a false!&quot;;
	)
?&gt;</code></pre>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
<?php // getRes("video_premium",227619271) ?>
<?php // getRes('ejemplo','ex/estructuras-control/if/if-ejercicio-2.php', 'Ejercicio if') ?>	
</div>

	</div>
</div>





<h4>Ejercicio</h4>

<div class="row">
	<div class="col-md-4">
	<p>Dada una variable que contiene la nota de un examen que va de 0 a 10...</p>
<ul>
	<li>Si es mayor que cinco mostrar el texto “Aprobado”.</li>
	<li>Si es igual a cinco, mostrar el texto ''Aprobado por los pelos”.</li>
	<li>Si es menor que cinco, mostrar el texto “Suspenso”.</li>
</ul>

	</div>
	<div class="col-md-8">
	<div class="centraditos">
<?php // getRes("video_premium",227619811) ?>


<?php // getRes('ejemplo','ex/estructuras-control/nota/nota.html','Ejercicio notas') ?>
<?php // getRes("video_premium",227620079) ?>

</div>


	</div>
</div>




	<h3 id="propiapagina">Procesar el formulario en la propia página</h3>

	<div class="row">
		<div class="col-md-6">
		<pre><code>&lt;?php
	if(isset($_POST['<span class="red bold">botonEnviar</span>'])){
		echo &quot;boton pulsado!!!&quot;;
	}
?&gt;
&lt;form method=&quot;post&quot; action=&quot;#&quot;&gt;
	&lt;input type=&quot;submit&quot; name=&quot;<span class="red bold">botonEnviar</span>&quot; value=&quot;enviar&quot;&gt;
&lt;/form&gt;</code></pre>

		</div>
		<div class="col-md-6">
		<div class="centraditos">
<?php // getRes("video_premium",227619873) ?>
<?php // getRes('ejemplo','ex/estructuras-control/if-formulario/formulario-if.php','Formulario if') ?>

</div>
		</div>
	</div>


<h4>Ejercicio</h4>

<div class="row">
	<div class="col-md-5">
	<p>Añadiendo líneas al siguiente código, controlar que si el botón no fue pulsado se muestre el mensaje "el botón no fue pulsado! ".
	Por tanto, éste debería ser el mensaje que apareciese al entrar por primera vez en la página.</p>

<pre><code>&lt;?php
	if(isset($_POST['<span class="bold red">botonEnviar</span>'])){
		echo &quot;bot&oacute;n pulsado!!!&quot;;
	}else{
		<span class="green">//A&ntilde;adir las l&iacute;neas aqu&iacute;</span>
	}
?&gt;
&lt;form method=&quot;post&quot; action=&quot;#&quot;&gt;
	&lt;input type=&quot;submit&quot; name=&quot;<span class="red bold">botonEnviar</span>&quot; value=&quot;enviar&quot;&gt;
&lt;/form&gt;
</code></pre>

	</div>
	<div class="col-md-7">
	<div class="centraditos">
<?php // getRes("video_premium",227619848) ?>


	
<?php // getRes('ejemplo','ex/estructuras-control/if-formulario/ejercicio_formulario-if.php','Ejercicio formulario if') ?>
<?php // getRes("video_premium",227619918) ?>


</div>
	</div>
</div>




<h4>Ejercicio</h4>

<div class="row">
	<div class="col-md-4">
	<p>
	Si he pulsado el botón de enviar, imprimir el value del campo de texto; si no, imprimir <br>
	"Botón no pulsado"
</p>

	</div>
	<div class="col-md-8">
<div class="centraditos">
<?php // getRes("video_premium",227619942) ?>
<?php // getRes('ejemplo','ex/estructuras-control/if-formulario/ejercicio.php','Ejercicio if') ?>
<?php // getRes("video_premium",227619960) ?>
</div>
</div>

	</div>





	<h3 id="mandarformulario">Mandar un formulario</h3>

	<div class="centraditos">
	<?php // getRes("video_premium",227620491) ?>

	<?php // getRes('ejemplo','ex/estructuras-control/ejercicio-formulario/ejercicio-formulario.html','Ejercicio formulario' ) ?>

		<?php // getRes("video_premium",227620527) ?></div>




	<h3 id="colores">Ejercicio colores</h3>	
	<p>El fichero html enviará la información a un fichero php que será el que cambie de color.</p>
	<p>
		Código que pinta una página de rojo: 
<pre><code>&lt;style&gt;body{background: red}&lt;/style&gt;</code></pre>
	</p>

<div class="row">			<?php // getRes("video_premium",227620737) ?>

	<?php // getRes('ejemplo','ex/estructuras-control/cambiar-body/en-dos-documentos/cambiar-body.html','Cambiar en dos documentos body') ?>

				<?php // getRes("video_premium",227620761) ?></div>


	<h3>Ejercicio</h3>
	<p>Juntar el php y el html en un único archivo.</p>
					<div class="centraditos">

					<?php // getRes("video_premium",227620855) ?>

							
							<?php // getRes('ejemplo','ex/estructuras-control/cambiar-body/cambiar-body.php','Cambiar body en un solo documento') ?>

							<?php // getRes("video_premium",227620878) ?>

						</div>


	<h3 id="recordar">Ejercicio</h3>
	<p>La combo debe recordar la opción seleccionada tras hacer submit.</p>
	<?php // getRes("video_premium",227620931) ?>
	<p>Pista!: <br>
		Una opción de una combo está seleccionada si tiene su atributo selected con el siguiente valor:
<pre><code>selected = &quot;selected&quot;</code></pre>
	</p>

							<div class="centraditos">
	

						<?php // getRes("video_premium",227620954) ?>
							
							<?php // getRes('ejemplo','ex/estructuras-control/cambiar-body/cambiar-body-if.php', 'Cambiar body con if') ?>
						</div>


		</div></article><article><div><h2 id="calculadora">Calculadora</h2>


	<h3>Ejercicio Calculadora con If</h3>
	<p>Hacer una calculadora que haga uso de los operadores aritméticos +, -, *, /, mande la información a un nuevo documento php y determine la operación a realizar por medio de una estructura de control else if.</p>
	<div class="centraditos">
							
	
	<?php // getRes("video_premium abierto",'FmmneI9LEjg') ?>


<?php // getRes('ejemplo','ex/estructuras-control/calculadora/calculadora-else-if/formulario.html','Formulario' ) ?>

<?php // getRes("video_premium",227622058) ?>

</div>

	<h4>Ejercicio Calculadora con Switch</h4>
	<p>Hacer una calculadora que haga uso de los operadores aritméticos +, -, *, /, mande la información a un nuevo documento php y determine la operación a realizar por medio de una estructura de control switch.</p>

	<div class="centraditos">
	<?php // getRes("video_premium",227622383) ?>

			<?php // getRes('ejemplo','ex/estructuras-control/calculadora/calculadora-switch/formulario.html','Formulario con switch') ?>

			<?php // getRes("video_premium",227622401) ?>

</div>

	<h4>Ejercicio</h4>
	
	<div class="row">
		<div class="col-md-5">
		<p>Rehacer la calculadora usando la función eval.</p>
		
<pre><code>&lt;?php
	$signo = &quot;*&quot;;
	$a=3;
	$b=6;
	$resultado = <span class="red">eval(&quot;return &quot;.$a.$signo.$b.&quot; ;&quot;);</span>
	echo $resultado;
?&gt;</code></pre>
		</div>
		<div class="col-md-7">
		<div class="centraditos">
<?php // getRes("video_premium",227622414) ?>

	<?php // getRes('ejemplo','ex/estructuras-control/calculadora/calculadora-eval/formulario.html','Formulario con eval' ) ?>
	<?php // getRes("video_premium",227622425) ?>

			</div>

		</div>
	</div>
	
	






		</div></article><article><div><h2 id="bucle-for">bucle for</h2>

<div class="row">
	<div class="col-md-6">

	<pre><code>&lt;?php
	for($i=0; $i&lt;10; $i++)<span class="red bold">{</span>
		echo $i.&quot;&lt;br/&gt;&quot;;
	<span class="red bold">}</span>
?&gt;</code></pre>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
			<?php // getRes("video_premium",227622435) ?>

	<?php // getRes('ejemplo','ex/estructuras-control/bucles/bucle-for.php','bucle for') ?>
</div>

	</div>
</div>


	<h3>Ejercicio</h3>
	<p>Imprimir los números pares que hay dentro de los 100 primeros números naturales.</p>
					<?php // getRes("video_premium",227622452) ?>

	<p>Nota: No utilizar la estructura de control <span class="font-weight-bold">if</span> para resolver este ejercicio.</p>
<div class="centraditos">
<?php // getRes("video_premium",227622765) ?>
	<?php // getRes('ejemplo','ex/estructuras-control/bucles/ejercicio-bucle-for.php','Ejercicio bucle for' ) ?>
</div>
	<p>Ampliaciones</p>
	<ol>
		<li>El bucle irá desde 0 hasta un número introducido.</li>
		<li>El bucle irá desde un número introducido hasta otro número introducido.</li>
	</ol>
	<h3>Ejercicio</h3>
	<p>Imprimir los números pares que hay dentro de los 100 primeros números naturales</p>
	<p>Para ello tendremos un bucle for que en cada iteración irá evaluando si el bucle es par o impar. El operador “%” nos da el resto de dividir un número entre otro. <br>
		Ej: 7%3=1
	</p>

			<div class="centraditos">

			<?php // getRes("video_premium",227623113) ?>						
						<?php // getRes('ejemplo','ex/estructuras-control/bucles/ejercicio-bucle-for-2.php', 'ejercicio bucle for') ?>
						<?php // getRes("video_premium",227622782) ?>

					</div>
<ol>
		<li>El bucle irá desde 0 hasta un número introducido.</li>
		<li>El bucle irá desde un número introducido hasta otro número introducido.</li>
	</ol>
	<h4>Ejercicio</h4>

	<div class="row">
		<div class="col-md-4">
		<p>Imprimir los números del 1 al 20. </p>

<ul>
	<li>Para números divisibles por 3, imprimir “Fizz”.</li>	
	<li>Para números divisibles por 5, imprimir “Buzz”.</li>
	<li>Para números divisibles por 3 y 5, imprimir “FizzBuzz”.</li>
	<li>En cualquier otro caso, imprimir el número.</li>
</ul>
		</div>
		<div class="col-md-8">
			
<div class="centraditos">
<?php // getRes("video_premium",227622787) ?>

<?php // getRes('ejemplo','ex/estructuras-control/bucles/ejercicio-bucle-for-3.php','Ejercicio bucle for') ?>

<?php // getRes("video_premium",227622796) ?>

					</div>

		</div>
	</div>
	
	



	</div></article><article><div><h2 id="bucle-while">bucle while</h2>

	<div class="row">
		<div class="col-md-6">
		<pre><code>&lt;?php
	$i=1;
	while($i&lt;10){
		echo $i;
		$i++;
	}
?&gt;</code></pre>
		</div>
		<div class="col-md-6">
		<div class="centraditos">

<?php // getRes("video_premium",227622771) ?>
<?php // getRes('ejemplo','ex/estructuras-control/bucles/bucle-while.php','Ejercicio bucle while') ?>						

</div>
		</div>
	</div>


<h3>Ejercicio bucle while Calcular el factorial de 5</h3>
<p>El factorial de un número entero positivo se define como el producto de todos los números naturales anteriores o iguales a él. Se escribe n!, y se lee "n factorial". (Por definición el factorial de 0 es 1: 0!=1)</p>
<p>Por ejemplo, 5! = 5·4·3·2·1 = 120</p>

				<div class="centraditos">	
				<?php // getRes("video_premium",227622814) ?>
<?php // getRes('ejemplo','ex/estructuras-control/bucles/ejercicio-bucle-while.php','Ejercicio bucle while' ) ?>
<?php // getRes("video_premium",227622796) ?>

					</div>


		</div></article><article><div><h2 id="funciones">Funciones</h2>


	

	<div class="row">
		<div class="col-md-4">
		<p>Son bloques de código reutilizables.</p>
		<?php // getRes("video_premium",227623404) ?>
		</div>
		<div class="col-md-8">
		<img src="img/funcion.png" class="img-fluid" alt="¿qué es una función?">

		</div>
	</div>
	

	<h4>Función que no devuelve nada, sin parámetros</h4>

	<div class="row">
		<div class="col-md-6">
		<pre><code>&lt;?php
	function saludar(){
		echo &quot;Buenas tardes&quot;;
	}

	saludar();
?&gt;</code></pre>
		</div>
		<div class="col-md-6">
		<div class="centraditos">
<?php // getRes("video_premium",227623414) ?>
<?php // getRes('ejemplo','ex/funciones/funcion-sin-parametros-no-devuelve-nada.php','Función sin parámetros que no devuelve nada' ) ?>
</div>
		</div>
	</div>


<h3>Función que no devuelve nada, <span class="bold">con</span> parámetros</h3>

<div class="row">
	<div class="col-md-4">
	<pre><code>&lt;?php
	function saludar($nombre){
		echo &quot;Buenas tardes &quot;. $nombre;
	}

	saludar(&quot;Pablo&quot;);
?&gt;</code></pre>
	</div>
	<div class="col-md-8">
	<div class="centraditos">
<?php // getRes("video_premium",227624070) ?>
<?php // getRes('ejemplo','ex/funciones/sin-return.php','Función sin return' ) ?>
	</div>
	</div>
</div>


<h4>Ejercicio</h4>
<p>Crear una función llamada "hoyQuieroComer" que recibe un parámetro "comida".</p>
<p>Cuando llamemos a la función se mostrará un mensaje indicándonos lo que deseamos comer.</p>

<div class="centraditos">
<?php // getRes("video_premium",227623440) ?>

<?php // getRes('ejemplo','ex/funciones/ejercicio-funcion-con-parametros-no-devuelve-nada.php','Función con parámetros que no devuelve nada') ?>
<?php // getRes("video_premium",227624247) ?>

</div>

<h4>Ejercicio</h4>
<p>Crear una función que recibe un número y calcula su cubo.</p>
<div class="row">
<?php // getRes("video_premium",227623474) ?>

<?php // getRes('ejemplo','ex/funciones/ejercicio-cubo.php', 'Ejercicio cubo') ?>
<?php // getRes("video_premium",227623443) ?>

	</div>

<h4>Ejercicio</h4>
<p>Crea una función que recibe el ancho y el alto de un rectángulo y calcula su perímetro.</p>
<p>Cuando una función recibe varios parámetros, estos irán separados por coma. <br>Ejemplo: </p>
	<pre><code>calculaPerimetro($alto, $ancho);</code></pre>
<div class="centraditos">
	
<?php // getRes("video_premium",227623482) ?>

<?php // getRes('ejemplo','ex/funciones/ejercicio-perimetro-rectangulo.php', 'Ejercicio calcular perímetro rectángulo') ?>

	<?php // getRes("video_premium",227624426) ?></div>

<h3>Función que devuelve un valor</h3>
<pre><code>&lt;?php
	function saludar1(){
		$textoDevuelto = &quot;buenos dias&quot;;
		return $textoDevuelto;
	}
	function saludar2(){
	$textoDevuelto = &quot;buenas tardes&quot;;
}


echo saludar1();
echo saludar2();
?&gt;</code></pre>	
<p><span class="font-weight-bold">Pregunta:</span> <br>
	¿Por qué el primer echo funciona y el segundo imprime "none"?. 

</p><div class="centraditos">
<?php // getRes('ejemplo','ex/funciones/saludar-con-return.php','Saludar con return' ) ?>
	<?php // getRes("video_premium",227624449) ?></div>

<h4>Ejercicio</h4>
<p>Reescribir el ejercicio de la calculadora utilizando funciones para las operaciones aritméticas.</p>
<p>El formulario no se llamará a sí mismo, si no a un archivo php externo.</p>
<pre><code>function suma($operando1, $operando2){
	$solucion = $operando1 + $operando2;
	return $solucion;	
}</code></pre>
	<div class="centraditos">
	<?php // getRes("video_premium",227624466) ?>
		<?php // getRes('ejemplo','ex/funciones/calculadora-funciones/formulario.html','Formulario') ?>
		<?php // getRes("video_premium",227624456) ?>

	</div>

<h4>Ejercicio</h4>
<p>Reescribir el ejercicio de la calculadora utilizando una única función que reciba 3 parámetros (los dos operandos y la operación a realizar). Dentro de esta función estará el switch que determina la operación a realizar.</p>


<div class="row">
<?php // getRes("video_premium",227624475) ?>
<?php // getRes('ejemplo','ex/funciones/calculadora-una-sola-funcion/formulario.html','Calculadora con una sola función') ?>
<?php // getRes("video_premium",227624482) ?>

</div>




	
	<h3 id="viaje">Ejercicio viaje</h3>
	<p>Crea una función llamada coste_hotel que recibe como parámetro el número de noches. La función debe devolver cuanto es necesario pagar teniendo en cuenta que cada noche cuesta 140 euros.</p>
<pre><code>$num_noches = $_REQUEST['num_noches'];

$resultado1 = coste_hotel($num_noches);

$resultadoTotal = $resultado1 + ...
</code></pre>

<div class="centraditos">
<?php // getRes("video_premium",227624866) ?>

	<?php // getRes('ejemplo','ex/funciones/viaje/coste-hotel.php', 'Ejercicio coste hotel') ?>
	<?php // getRes("video_premium abierto", 'bYwbGC-o5uU') ?></div>

	<h4>Ejercicio</h4>
	<p>Continuando el ejercicio anterior, después de la función ya escrita añadiremos otra función llamada coste_avion. Esta función tiene como parámetro de entrada el nombre de una ciudad y devolverá un coste en función de dicho parámetro.</p>
	<p>Los costes por ciudad son los siguientes: <br>
		"Oviedo": 183 <br>
		"Tokyo": 220 <br>
		"Madrid": 222 <br>
		"Barcelona": 475</p><?php // getRes("video_premium",227624702) ?><div class="row">
	<?php // getRes("video_premium",227624711) ?>
		<?php // getRes('ejemplo','ex/funciones/viaje/coste-avion.php', 'Ejercicio coste avión') ?>
	</div>
		<h4>Ejercicio</h4>
		<p>Continuando con el ejercicio anterior, después de las dos funciones ya escritas añadiremos otra función llamada coste_alquiler_coche. Esta función tiene como parámetro de entrada el número de noches y devolverá un coste en función de dicho parámetro, teniendo los siguientes aspectos en cuenta:</p>
		<ul>
			<li>Cada día de alquiler cuesta 40 €.</li>
			<li>Si alquilas un coche por 3 días o más, obtienes un descuento de 20€ sobre el total.</li>
			<li>Si alquilas un coche por 7 días o más, obtienes un descuento de 50€ sobre el total (no acumulable con los 20€ de haber alquilado por más de 3 días).</li>
		</ul>
		<p>Calcular también el coste total de todo el viaje.</p>
		<div class="centraditos">
		<?php // getRes("video_premium",227624748) ?>

		<?php // getRes('ejemplo','ex/funciones/viaje/coste-alquiler-coche.php','Ejercicio coste alquiler coche') ?>
		<?php // getRes("video_premium",227624757) ?>

			</div>
	

			</div></article><article><div><h2 id="mandar-mail">Mandar mail</h2>

	
<pre><code><span class="green">// To send HTML mail, the Content-type header must be set</span>
$headers  = 'MIME-Version: 1.0' . &quot;\r\n&quot;;
$headers .= 'Content-type: text/html; charset=UTF-8' . &quot;\r\n&quot;;

<span class="green">// Additional headers</span>
$headers .= 'To: Mary &lt;mary@example.com&gt;, Kelly &lt;kelly@example.com&gt;' . &quot;\r\n&quot;;
$headers .= 'From: Birthday Reminder &lt;birthday@example.com&gt;' . &quot;\r\n&quot;;
$headers .= 'Cc: birthdayarchive@example.com' . &quot;\r\n&quot;;
$headers .= 'Bcc: birthdaycheck@example.com' . &quot;\r\n&quot;;

if(mail(&quot;pablomonteserin@pablomonteserin.com&quot;, &quot;mail de mi p&aacute;gina web&quot;, $msg, $headers)){
}</code></pre>

<?php // getRes("video_premium abierto",'Smkw2vBizIY' ) ?>
	<a href="https://pablomonteserin.com/mandar-un-mail-con-html-y-php/">Ver video de la resolución.</a>
	<div class="notas">
		<p>Para mandar un correo es necesario que la página HTML del formulario de envío, la página PHP que lo procesa, el servidor PHP que procesa el mail y el servidor de correo que lo recibe utilicen la misma codificación.</p>

		<p>Para comprobar que el mail se envía si no tenemos cuenta de correo, podemos usar <a target="_blank" rel="nofollow" href="http://mailinator.com/">mailinator</a></p>
	</div>

	<h3>Subir un fichero al servidor</h3>
	<pre><code>&lt;form action=&quot;form.php&quot; method=&quot;post&quot;  enctype=&quot;multipart/form-data&quot;&gt;
	&lt;input type=&quot;file&quot; name=&quot;foto&quot;&gt;
&lt;/form&gt;</code></pre>

<pre><span class="bold">form.php</span><code>if(isset($_FILES['foto'])){
	$errors= array();
	$file_name = $_FILES['foto']['name'];
	$file_size = $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];
	$file_type = $_FILES['foto']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['foto']['name'])));
   
	$url = dirname(__FILE__)."/uploads/".$file_name;
   
	$extensions= array("jpeg","jpg","png","pdf","zip", "rar");
   
	if(in_array($file_ext,$expensions)=== false){
		$errors[]="Estensión no permitida.";
	}
   
	if($file_size > 10485760) {
		$errors[]='File size must be excately 10 MB';
	}

	if (empty($errors)==true) {
		if(move_uploaded_file($file_tmp,$url)){
			echo "subida con exito";
			chmod($url, 0777);
		}else{
			echo "problema en la subida";
		}
	}
}</code></pre>

<h4>Mandar un mail con con ficheros adjuntos</h4>
<p>Usaremos la librería <a href="https://github.com/PHPMailer/PHPMailer">PHPMailer</a>.</p>

<p>Subiremos los ficheros al servidor y luego los adjuntaremos al mail.</p>
<pre><span class="bold">form.php</span><code>$mail = new PHPMailer(true);

try {
	//Server settings
	$mail->SMTPDebug = 2;                                       	// Enable verbose debug output
	$mail->isSMTP();                                            	// Set mailer to use SMTP
	$mail->Host       = 'smtp.server.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth   = true;                                   	// Enable SMTP authentication
	$mail->Username   = 'mail@examle.com';                     	// SMTP username
	$mail->Password   = "*********";                                // SMTP password
	$mail->SMTPSecure = 'ssl';                                  	// Enable TLS encryption, `ssl` also accepted
	$mail->Port       = 465;                                    	// TCP port to connect to
   
	//Recipients
	$mail->setFrom('contact@sonowat.com', 'Contacto Sonowat');
	$mail->addAddress('paramonty@gmail.com');     			// Add a recipient
	// $mail->addAddress('ellen@example.com');               	// Name is optional
	$mail->addReplyTo($email, 'Information');
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('bcc@example.com');
	$mail->addAttachment($url);         				// Add attachments
   
	// Content
	$mail->isHTML(true);                                  		// Set email format to HTML
	$mail->Subject = 'Contacto desde www.sonowat.com';
	$mail->Body    = $msg;						// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	$mail->send();
	echo 'Message has been sent';
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}</code></pre>


<h4>Añadir el Captcha de google al formulario</h4>

<p>Necesitamos dos claves que obtendremos en <a href="https://www.google.com/recaptcha/intro/v3.html" target="_blank">esta página de google</a>.</p>


<pre><span class="bold">pagina.html</span><code>&lt;script src='https://www.google.com/recaptcha/api.js?render=CLAVE-SITIO-WEB'&gt;&lt;/script&gt;
&lt;script&gt;
grecaptcha.ready(function() {
grecaptcha.execute('CLAVE-SITIO-WEB', {action: 'comentario'})
.then(function(token) {
var recaptchaResponse = document.getElementById('recaptchaResponse');
recaptchaResponse.value = token;
});
});
&lt;/script&gt;</code></pre>

<pre><span class="bold">form.php</span><code>$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
$recaptcha_secret = 'CLAVE-SECRETA'; 
$recaptcha_response = $_POST['recaptcha_response']; 
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
$recaptcha = json_decode($recaptcha); 
// Miramos si se considera humano o robot: 
if($recaptcha->score >= 0.6){
	echo 'Hay un 60% de probabilidad de que seas un humano';
	if(move_uploaded_file($file_tmp,$url)){
		echo "subida con exito";
		chmod($url, 0777);
		echo "Success";
	}else{
		echo "problema en la subida";
	}  
}else{
	echo 'Estás por debajo del 60% de probabilidad de que seas humano, mejor no me fío.';
}</code></pre>


		</div></article><article><div><h2 id="cadenas">Funciones para trabajo con cadenas</h2>


<pre><code>&lt;?php

	$nombre = &quot;Ram&oacute;n&quot;;

	echo &quot;Las dos primeras letras son: &quot;.substr($nombre, 0, 2);

	echo &quot;&lt;br/&gt;La palabra tiene &quot;.strlen($nombre) .&quot; letras.&quot;;

	echo &quot;&lt;br/&gt;La palabra pasada a may&uacute;sculas es: &quot;.strtoupper($nombre);

	echo &quot;&lt;br/&gt;La palabra pasada a min&uacute;sculas es: &quot;.strtolower($nombre);

	echo strtr(strtoupper($nombre),&quot;&agrave;&egrave;&igrave;&ograve;&ugrave;&aacute;&eacute;&iacute;&oacute;&uacute;&ccedil;&ntilde;&auml;&euml;&iuml;&ouml;&uuml;&quot;,&quot;&Agrave;&Egrave;&Igrave;&Ograve;&Ugrave;&Aacute;&Eacute;&Iacute;&Oacute;&Uacute;&Ccedil;&Ntilde;&Auml;&Euml;&Iuml;&Ouml;&Uuml;&quot;);

?&gt;
</code></pre><div class="row">
	<?php // getRes("video_premium",227624792) ?>
	<?php // getRes('ejemplo','ex/funciones/con-cadenas/funciones-texto.php','Funciones con texto') ?>

			</div>

	
		<h3><span class="text-dark">Ejercicios:</span> substring</h3>
		<h4>Wonderful</h4>
		<p>Utilizando el método substr imprimir las letras que van desde la posición 4 a la 7 de la cadena "won<span class="red bold">derf</span>ul day", es decir "derf".</p>

		<div class="centraditos">

		<?php // getRes("video_premium",227624812) ?>


		<?php // getRes('ejemplo','ex/funciones/con-cadenas/wonderful.php','Wonderful' ) ?>
		<?php // getRes("video_premium",227624818) ?>
		
			</div>

	<h4>lastIndexOf con PHP</h4>
			<?php // getRes("video_premium",227624798) ?>

<pre><code>$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pos_ultima_barra = strrpos($url, "/");</code></pre>

	

	</div></article><article><div><h2 id="ejercicios">Ejercicios</h2>
	
		<h3>Ejercicio</h3>

		<p>En una urbanización respetuosa con el medio ambiente, en el sótano de cada casa hay un depósito de recogida de las aguas pluviales para aprovecharlas para regar.</p>
		<p>El depósito tiene un volumen que depende del modelo de vivienda y el usuario tiene que tener consciencia del volumen de agua que contiene, no sea que con el agua que recoja en una lluvia desborde y empantane el garaje del chalé.</p>
		<p>Se considera que el depósito, después de la lluvia puede estar en uno de los 4 potenciales estados:</p>
		<ul>
			<li>SEGURO, si contiene menos del 80% de su capacidad nominal</li>
			<li>ALERTA, si contiene entre el 80 y 90 % de su capacidad nominal</li>
			<li>PELIGRO, si contiene entre el 90 y el 100% de su capacidad nominal</li>
			<li>DAÑOS EXTREMOS, si llega a contener más del 100% de la capacidad nominal</li>
		</ul>


		<p>Nos encomiendan crear un programa que reciba como datos la previsión de lluvia (en litros/m2) y que tan pleno está el depósito (en porcentaje) y nos informe de:</p>
		<ul>
			<li>La cantidad de agua que hay al depósito antes de llover</li>
			<li>La cantidad total de litros que caerán al tejado</li>
			<li>La cantidad de litros totales que podría haber al depósito después de llover</li>
			<li>El estado en que quedará el depósito. En el supuesto de que quede en estado seguro se indicará que se está en zona segura. En cualquier de los otros estados se indicará el estado y qué es la cantidad de agua a desaiguar previamente para quedar en estado seguro.</li>
		</ul>


		<p>Ejemplo: El depósito tiene una capacidad nominal de 12000 litros, el tejado de la casa una superficie de 125 m2, se prevé una lluvia de 15 litros/m2 y el depósito está al 75% de su capacidad nominal el resultado sería:</p>
		<p>DANGER</p>


		<p>Porque el depósito contiene inicialmente 9000 litros (el 75% de 12000) <br>
			Lloverá sobre el tejado 1875 litros ( 125 m2 15 l/m2) <br>
			La cantidad total de agua para el depósito será 10875 litros (9000 + 1875) <br>
			Lo cual trae a un estado de Peligro (por encima de 10800 litros, el 90% de 12000) <br>
			Y se tendrá que desaiguar 1275 litros para quedar en situación segura (9600 litros, el 80% de 12000).
		</p>

		<p>
			El llamamiento tendrá la forma <strong>lluvia.php?rain=15&amp;filled=75</strong> </p>
			<?php // getRes('ejemplo','ex/lluvia.php?rain=15&filled=75', 'Ver ejercicio resuelto') ?>
		

		<ul>
			<li>rain : es un número que indica la lluvia prevista en litros por metro cuadrado</li>
			<li>filled : indica qué tan pleno está el depósito (en porcentaje) .</li>
		</ul>

			<?php // getRes("video_premium",228078144) ?>
	
	
		<h3>Ejercicio</h3>
		<p>Vamos a simular el desplazamiento de un objeto esférico dentro de un tablero cuadriculado con movimientos rectilíneos y rebotando al llegar a cualquier margen.</p>
		<p>El desplazamiento de la bola siguiendo un determinado itinerario</p>
		<img src="img/bolas/bola-1.png" alt="ejercicio php que usa bolasbola">
		<p>
			se tiene que mostrar como una secuencia de imágenes con las posiciones consecutivas de la bola
		</p>

		<img src="img/bolas/fotos.png" alt="ejercicio php">


		<h5>Tarea:</h5>

		<p>A partir de las coordenadas iniciales (initx, inity) de la bola y de la velocidad inicial (xspeed, yspeed), mostrar la secuencia de imágenes desde la posición inicial hasta que se vuelve a repetir esta posición inicial.</p>
		<p>El llamamiento en el programa tiene que ser del tipo </p>			<?php // getRes('ejemplo','ex/bolas/index.php?initx=2&inity=3&xspeed=1&yspeed=1', 'index.php?initx=2&inity=3&xspeed=1&yspeed=1') ?>



			<h5>Indicaciones:</h5>
			<ul>
				<li>El tablero tiene unas dimensiones de 6x5 casillas. Cada casilla viene determinada por sus coordenadas (x, y) según la imagen. La coordenada <span class="bold">x</span> corresponde a las posiciones horizontales y la coordenada <span class="bold">y</span> a las verticales. <img src="img/bolas/bola-3.png" alt="bola"></li>
				<li>Se facilitan las 30 imágenes correspondientes a todas las posibles posiciones de la bola. El nombre de cada fichero corresponde a las coordenadas xy de donde se encuentra la esfera.<?php // getRes("recurso","ex/bolas/bolas.zip","Descargar") ?>.</li>
				<li>Los ficheros de imagen se tienen que ubicar en la misma carpeta donde esté el fichero php y no se pueden cambiar de nombre.</li>
				<li>La bola tendrá la velocidad inicial <span class="bold">xspeed</span>, <span class="bold">yspeed</span>. <span class="bold">xspeed</span> corresponde a la velocidad horizontal (el sentido positivo es hacia la derecha). <span class="bold">yspeed</span> corresponde a la velocidad vertical (el sentido positivo es hacia abajo). <img src="img/bolas/bola-4.png" alt="bolas"></li>
				<li>Tanto las velocidades vertical como horizontal pueden tener sólo tres valores, -1, 0 y 1. <br>
					Ejemplos:
					<ol>
						<li>Si la bola está en la posición 3,3 y xspeed tiene el valor 1 y yspeed tiene el valor-1, se desplazará a la derecha y pasará a la posicón 4,2. </li>
						<li>Si xspeed tiene el valor 0 la bola se desplaza sólo verticalmente</li>
						<li>Si yspeed tiene el valor 0 la bola se desplaza sólo horizontalmente</li>
					</ol>
				</li>
				<li>Cuando en su desplazamiento la bola llega a uno de los lados (laterales, superior o inferior), rebota, de forma que se modifica su movimiento<ol>
						<li>Si xspeed tiene el valor 1 y choca al lado derecho, xspeed pasa a valer -1</li>
						<li>Si xspeed tiene el valor -1 y choca al lado izquierdo, xspeed pasa a valer 1</li>
						<li>Si yspeed tiene el valor 1 y choca al lado inferior, yspeed pasa a valer -1</li>
						<li>Si yspeed tiene el valor -1 y choca al lado superior, yspeed pasa a valer 1</li>
						<li>Evidentemente, si choca contra un rincón, cambian de sentido las dos velocidades</li>
					</ol>
				</li>
			
<?php // getRes("video_premium",228078212) ?>
			

		

						
							<h4 id="ejercicio_largo">Ejercicio</h4>
							<p>Leer todo el enunciado antes de comenzar a programar.</p>
							<p>Le pasaremos a la URL dos números enteros positivos y el programa los listará en orden creciente junto con los números intermedios.</p>
							<p>Todos los números mostrados deben cumplir las siguientes condiciones:
								<ul>
									<li>Si un número es divisible por 4, en la siguiente línea escribiremos una línea integrada por tantos números consecutivos como indique la parte de las unidades, comenzando por el número en cuestión. Además se añadirá un último número que será la suma de todos los números componentes de la lista. <br>
										Por ejemplo, si el número es 44, se sumarán 4 números: 44, 45, 46, 47, 182
									</li>
									<li> Si el número es divisible por 5, en la siguiente línea escribiremos una lista integrada por tantos números anteriores como indique la parte de las unidades, comenzando por el número en cuestión. Además se añadirá un último número que será el producto de los anteriores. <br>
										Por ejemplo, si el número es 45, se multiplicarán 5 números: 45, 44, 43, 42, 41, 146611080
									</li>
									<li>Si el número es divisible por 4 y por 5  tendrá ambos comportamientos.</li>


								</ul>

								<p>Para resolver el ejercicio crearemos: <br>
									<ul>
										<li>una función llamada divisible() que recibirá dos parámetros numéricos y devolverá true si el primer número es divisible por el segundo y false en caso contrario.</li>
										<li>una función  llamada suma() que recibirá un parámetro numérico n, obtendrá su última cifra e imprimirá una cadena de números consecutivos ordenados de menor a mayor y separados por un espacio en blanco. El primer número será n. Una vez terminada la lista se añadirá el texto: "suma = " seguido de la suma de todos los números anteriores.</li>
										<li>una función  llamada producto() que recibirá un parámetro numérico n, obtendrá su última cifra e imprimirá una cadena de números consecutivos mayor a menor y separados por un espacio en blanco. El primer número será n. Una vez terminada la lista se añadirá el texto: "producto = " seguido del producto de todos los números anteriores.</li>
									</ul>
								</p>
								Si lo ves conveniente, puedes crear más funciones para resolver el ejercicio.
							</p>
							<div class="centraditos">
<?php // getRes("video_premium",228078240) ?>
							<?php // getRes('ejemplo','ex/funciones/lista-numeros.php?n1=30&n2=42','lista-numeros.php?n1=30&amo;n2=42' ) ?>
</div>
						

						
							<h3 id="naleatorios">Números aleatorios</h3>
							<h4>Obtener un número aleatorio: rand</h4>
							<p>Devuelve un número aleatorio que va de 7 a 15</p>
							<pre><code>$var = rand(7, 15);</code></pre>
<div class="centraditos">
							<?php // getRes("video_premium",228078318) ?>
							<?php // getRes('ejemplo','ex/funciones/random.php','Ejemplo random' ) ?>
						</div>	
							<h4>Ejercicio</h4>
							<p>Utilizando las funciones  strlen(), substr() y rand(), obtener una letra aleatoria de tu nombre.</p>

							<div class="row">
							<?php // getRes("video_premium",228079468) ?>

							<?php // getRes('ejemplo','ex/funciones/letra-aleatoria.php','Letra aleatoria') ?>
							<?php // getRes("video_premium",228079476) ?>
</div>
							<h4>Ejercicio mapa</h4>
							<p>Teniendo en cuenta que con el siguiente código html puedo pintar una moneda sobre en mapa en cierta posición:</p>
<pre><code>&lt;div style=&quot;width:725px; height:483px; background: url(Bluemap.jpg); margin:auto; overflow:hidden; position:relative&quot;&gt;
	&lt;img src=&quot;goldCoin.png&quot; style=&quot;width:50px;position:absolute; margin-left:577px; margin-top:75px&quot;&gt;
&lt;/div&gt;</code></pre>
							<p>Pintar 10 monedas en coordenadas aleatorias sobre la superficie de un mapa.</p>
							<img src="ex/funciones/mapa/Bluemap.jpg" alt="mapa del tesoro">
							<img src="ex/funciones/mapa/goldCoin.png" alt="moneda de oro">
							<div class="centraditos">
							<?php // getRes("video_premium",228079494) ?>

							<?php // getRes('ejemplo','ex/funciones/mapa/mapa.php', 'Ver ejercicio resuelto') ?>
<?php // getRes("video_premium",228079500) ?></div>
						
						
							<h3 id="maquinaTragaperras">Ejercicio máquina tragaperras</h3>
							<p>El programa recibe por la url un parámetro que será un número entero llamado capital.</p>
							<p>El juego implica una cantidad variable de partidas. El juego terminará cuando el jugador se quede sin dinero o supere el doble de la cantidad inicial de su capital.</p>
							<p>Al iniciar el juego se mostrará el capital inicial.</p>
							<p>En cada tirada se mostrará el número de jugada, las tres figuras obtenidas, la ganancia de la tirada y el capital total después de haber pagado/cobrado la apuesta.</p>
							<p>La apuesta siempre será 0.5 veces el capital actual.</p>
							<p>La tabla de premios será la siguiente: <br>
								<ul>
									<li>Tres sietes										-> 100 veces la apuesta</li>
									<li>Tres figuras iguales (a excepción del siete)			-> 6 veces la apuesta</li>
									<li>Dos sietes										-> 4 veces la apuesta</li>
									<li>Dos figuras iguales (a excepción del siete)			-> 2 veces la apuesta</li>
								</ul>
							</p>
<div class="centraditos">
							
<?php // getRes("recurso","ex/funciones/maquina-tragaperras/maquina_tragaperras.zip","Descargar las fotos") ?>

								<?php // getRes('ejemplo','ex/funciones/maquina-tragaperras/maquina-tragaperras.php?capital=300', 'Ejercicio máquina tragaperras') ?>
								<?php // getRes("video_premium",228079510) ?>


							</div>
						

	</div></article><article><div><h2 id="lectura-escritura">Lectura / Escritura de ficheros</h2>

						
							<h3>fopen</h3>
<pre><code>$fp = fopen($file, &quot;r+&quot;);</code></pre>

							<table>
								<tr>
									<td>r</td>
									<td>Abre el archivo para lectura. Coloca el puntero al principio del archivo.</td>
								</tr>
								<tr>
									<td>r+</td>
									<td>Abre el archivo para lectura y escritura. Coloca el puntero al principio del archivo.</td>
								</tr>
							</table>

							<h3>Fopen – append (añadir)</h3>
<pre><code>$fp = fopen($file, &quot;a+&quot;);</code></pre>

							<table><tr>
								<td>a</td>
								<td>Abre el archivo para escritura. Coloca el puntero al final del archivo. Si el fichero no existe lo crea</td>
							</tr>
							<tr>
								<td>a+</td>
								<td>Abre el archivo para lectura y escritura. Coloca el puntero al final del archivo. Si el fichero no existe, lo crea</td>
							</tr>
						</table>
						<div class="notas">
							<p>Nota: Si el archivo es abierto en uno de estos modos, cualquier información que sea escrita siempre será añadida al final del archivo.</p>
						</div>
							<?php // getRes("video_premium",228079526) ?>

						<h3>Escribir en disco (I)</h3>

<div class="row">
	<div class="col-md-10">

	<pre><code>&lt;?php
	$file = &quot;1-escribirEnDisco.txt&quot;;
	<span class="green">/*Creamos un puntero a partir del cual vamos a escribir*/</span>	
	$fp = fopen($file, &quot;r+&quot;);

	<span class="green">/*El documento de texto en el que escribo deber&iacute;a estar en la misma codificaci&oacute;n que el presente php*/</span>
	fputs($fp, &quot;fputs es m&aacute;s r&aacute;pida que fwrite&quot;);
	fwrite($fp, &quot;fputs es m&aacute;s r&aacute;pida que fwrite&quot;);
	<span class="green">/*cerrar el archivo*/</span>
	fclose($fp);
?&gt;</code></pre>
	</div>
	<div class="col-md-2">
	<?php // getRes("video_premium",228079536) ?>
	</div>
</div>

							
						<h3>Escribir en disco (II) Ejemplo de un libro de visitas</h3>

<div class="row">
	<div class="col-md-10">
	<pre><code>&lt;?php
	$file = &quot;2-libroVisitasNombre.txt&quot;;
	if(isset($_POST['enviar'])){
		$nombre = $_POST['nombre'];
		<span class="green">/*Creamos un puntero a partir del cual vamos a escribir*/</span>
		$fp = fopen($file, &quot;r+&quot;);
		$old = fgets($fp);
		<span class="green">/*Llevamos el cursor al principio del texto*/</span>
		rewind($fp);
		<span class="green">/*Escribir la nueva entrada antes que las antiguas en el archivo*/</span>
		fputs($fp, $nombre.&quot; \n &quot;.$old);
		fclose($fp);
	}
	readfile($file);
?&gt;</code></pre>


	</div>
	<div class="col-md-2">
	<?php // getRes("video_premium",228079551) ?>
	</div>
</div>

						
		
					<h3>Ejercicio – Hacer un libro de visitas</h3>

<div class="row">
	<div class="col-md-7"><p>Para escribir la fecha: $dateOfEntry = date("j-n-y")</p>
					<p>Para leer todo el archivo de texto, incluso después de cerrar el archivo: readfile($file);</p></div>
	<div class="col-md-5">
	<div class="centraditos">
		<?php // getRes("video_premium",228080234) ?>

		<?php // getRes("video_premium",228080895) ?></div>

	</div>
</div>

					
					
					<h3>Ejercicio contador</h3>
					<p>Hacer un contador.</p>
							

					<div class="centraditos">
					<?php // getRes("video_premium",228080259) ?>
					<?php // getRes('ejemplo','ex/escribir-disco/contador/ejercicio-contador.php','Ejercicio contador' ) ?>
					<?php // getRes("video_premium",228080272) ?>
</div>
					<h3>Ejercicio contador con imágenes</h3>
					<p>Haciendo uso de las funciones de cadena substr y strlen, hacer un contador que imprima una fotografía para cada uno de los dígitos.</p>
<div class="centraditos">
<?php // getRes("video_premium",228080286) ?>

					<?php // getRes("recurso","ex/escribir-disco/contador-imagenes/numerosGoticos.zip","Descargar fotografías") ?>

					<?php // getRes("video_premium",228081475) ?>
	<?php // getRes('ejemplo','ex/escribir-disco/contador-imagenes/ejercicio-contador-imagenes.php','Ejercicio contador con imagenes' ) ?>
				</div>

				
		</div></article><article><div><h2 id="redireccionamiento">Redireccionamiento</h3>


	<pre><code>header("Location: https://pablomonteserin.com")</code></pre>
<p>Una vez que hayamos impreso por pantalla algún caracter (espacio en blanco, letra, etc.) no será posible ejecutar los métodos header.</p>
<p>Para poder ejecutarlos podemos introducirlos en el buffer. Para ello, ejecutaremos el siguiente método antes de cualquier espacio en blanco o letra:</p>
<pre><code>ob_start();</code></pre>
<p>Y el siguiente método después de los headers:</p>
<pre><code>ob_end_flush();</code></pre>
<?php // getRes("video_premium",228080290) ?>


				</div></article><article><div><h2 id="variables-servidor">Variables del servidor</h2>
			
				
	<div class="row">
		<div class="col-md-7">
		<pre><code>&lt;?php
	echo &quot;Servidor al que se conecta es: &quot;.$_SERVER['SERVER_NAME'].&quot;&lt;br/&gt;&quot;;
	<span class="brown">echo &quot;Navegador y SO: &quot;.$_SERVER['HTTP_USER_AGENT'].&quot;&lt;br/&gt;&quot;;</span>
	echo &quot;Lenguaje del navegador (no del SO): &quot;.$_SERVER['HTTP_ACCEPT_LANGUAGE'].&quot;&lt;br/&gt;&quot;;
	<span class="brown">echo &quot;Puerto por el que el cliente se conecta a internet: &quot;.$_SERVER['SERVER_PORT'].&quot;&lt;br/&gt;&quot;;</span>
	echo &quot;Direcci&oacute;n IP (LAN) del usuario: &quot;.$_SERVER['REMOTE_ADDR'].&quot;&lt;br/&gt;&quot;;
	<span class="brown">echo &quot;Ubicaci&oacute;n del fichero actual: &quot;.$_SERVER['PHP_SELF'].&quot;&lt;br/&gt;&quot;;</span>
?&gt;</code></pre>
		</div>
		<div class="col-md-5">
		<div class="centraditos">
<?php // getRes("video_premium",228080303) ?>

					<?php // getRes('ejemplo','ex/informacion-cliente.php','Información cliente' ) ?>
</div>
		</div>
	</div>			




				
						</div></article><article><div><h2 id="include">include</h2>

				
					<p>Permite incluir el código de otros ficheros en nuestra página web.</p>
					<p>La diferencia entre require() e include() es que en caso de no encontrar el fichero a incluir include() produce un Warning mientras que require() produce un Error Fatal.</p>
					<p>La función require_once() se comporta de manera similar a require(), con la única diferencia que si el código ha sido ya incluido, no se volverá a incluir.</p>

					<div class="row">
						<div class="col-md-10">
						<pre><code>&lt;?php 
	include &quot;1-hola.html&quot;;
	<span class="green">//No es posible incluir una direcci&oacute;n web</span>
	include &quot;http://csszengarden.com/&quot;;
?&gt;</code></pre>
						</div>
						<div class="col-md-2"><?php // getRes("video_premium",228081772) ?></div>
					</div>


				
				
					<h4>con fpdf</h4>

					<div class="row">
						<div class="col-md-7">
						<div><a target="_blank" href="http://www.fpdf.org/">Página de fpdf</a></div>
<pre><code>&lt;?php
	require 'fpdf/fpdf.php';
	$pdf = new FPDF();
	$pdf-&gt;AddPage();
	$pdf-&gt;SetFont('Arial','B',16);
	$pdf-&gt;Cell(40,10,'Hello World!');
	$pdf-&gt;Cell(100,100,utf8_decode('Adeu M&oacute;n'));
	$pdf-&gt;Multicell(0,10,&quot;This is a multi-line text string\nNew line\nNew line&quot;);
	$pdf-&gt;Output();
?&gt;</code></pre>

						</div>
						<div class="col-md-5">
						<div class="centraditos">
<?php // getRes("video_premium",228081781) ?>
					<?php // getRes('ejemplo','ex/fpdf/index.php', 'Ver solución') ?>

</div>

						</div>
					</div>
				

					</div></article><article><div><h2 id="plantillas">Plantillas</h2>

				
					<h3>Ejercicio</h3>
					<p>Hacer dos páginas web cuyas secciones cabecera y botonera sean cargadas con dos includes respectivamente.</p>

					<div class="centraditos">
					
					<?php // getRes("video_premium",228081794) ?>

						<?php // getRes('ejemplo','ex/include/2/contenido1.php','Plantilla') ?>
						<?php // getRes("video_premium",228081807) ?>

					</div>
					<h3>Ejercicio: Plantilla con Index</h3>
					<p>Ahora los links de la botonera enlazarán con la propia página, pasándole un parámetro que será recogido y usado en un include para que cargue el contenido correspondiente.</p>
					<p>Para realizar este ejercicio necesitaremos 3 páginas: <br>	
						<ul>
							<li>contenido1.php</li>
							<li>contenido2.php</li>
							<li>index.php</li>
						</ul>
					</p>	

					<div class="notas">
						Nota: <br>
						Si quisiera evaluar si un fichero existe antes de cargarlo podría usar el método file_exists()
					</div>

					<div class="centraditos">
					<?php // getRes("video_premium",228081813) ?>

			<?php // getRes('ejemplo','ex/include/3/index.php','Include') ?>
			<?php // getRes("video_premium",228081829) ?>

					</div>
				

				
					<h3 id="plantillasconidiomas">Idiomas </h3>
					<?php // getRes("video_premium",228081862) ?>

					<h4>Perdiendo la página en la que estoy al pulsar en el botón de idioma</h4>
					<?php // getRes("video_premium",228081875) ?>

<div class="row">
	<div class="col-md-6"><pre><code>&lt;?php 
	$lang = &quot;es&quot;;
	if(isset($_REQUEST[&quot;lang&quot;])){
		$lang = $_REQUEST[&quot;lang&quot;];
	}
	include &quot;langs/&quot;.$lang.&quot;.php&quot;;

	$p = &quot;contenido1&quot;;
	if(isset($_REQUEST['p'])){
		$p = $_REQUEST['p'];
	}
?&gt;
...
&lt;?php include $p.&quot;.php&quot;; ?&gt;
&#x2026;

&lt;a href=&quot;index.php?p=contenido1&quot;&gt;Contenido 1&lt;/a&gt;&lt;br&gt;
&lt;a href=&quot;index.php?p=contenido2&quot;&gt;Contenido 2&lt;/a&gt;
&#x2026;
&lt;a href=&quot;index.php?lang=es&quot;&gt;ES&lt;/a&gt; | &lt;a href=&quot;index.php?lang=en&quot;&gt;EN&lt;/a&gt;
</code></pre></div>
	<div class="col-md-6">

	<div class="centraditos">

			
					<?php // getRes("video_premium",228082638) ?>
	<?php // getRes('ejemplo','ex/idiomas-paso-a-paso/1-idiomas-redireccionando-a-pag-nicio/index.php', 'Idiomas perdiendo la página en la que estoy en cada cambio de idioma') ?>					

					</div>
	</div>
</div>

					

					

			<h4>Manteniendo la página en la que estoy</h4>
			
<pre><code>&lt;a href=&quot;index.php?<span class="red bold">p=&lt;?=$p ?&gt;</span>&amp;lang=es&quot;&gt;ES&lt;/a&gt; | 
&lt;a href=&quot;index.php?<span class="red bold">p=&lt;?=$p ?&gt;</span>&amp;lang=en&quot;&gt;EN&lt;/a&gt;</code></pre><div class="centraditos">
				
<?php // getRes("video_premium",228082667) ?>
			<?php // getRes('ejemplo','ex/idiomas-paso-a-paso/idiomas-manteniendo-current-pag/index.php','Idiomas manteniendo página actual') ?>

			<?php // getRes("video_premium",228082678) ?>
					</div>
			<h4>Recordando el idioma seleccionado en la sesión</h4>
									<?php // getRes("video_premium",228082690) ?>

<div class="row">
	<div class="col-md-6">
		
<pre><code>&lt;?php
	session_start();
	if(isset($_REQUEST[&quot;lang&quot;])){
		$_SESSION[&quot;lang&quot;] = $_REQUEST[&quot;lang&quot;];
	}else if(!isset($_SESSION[&quot;lang&quot;])){
		$_SESSION[&quot;lang&quot;] = &quot;es&quot;;	
	}
	include &quot;langs/&quot;.$_SESSION[&quot;lang&quot;].&quot;.php&quot;;</code></pre>

	</div>
	<div class="col-md-6">
	<div class="centraditos">
	<?php // getRes("video_premium",228082696) ?>
	<?php // getRes('ejemplo','ex/idiomas-paso-a-paso/SESSION/index.php','Idiomas con SESSION' ) ?>
						</div>

	</div>
</div>

	<h4>Detección del idioma del navegador</h4>
	<?php // getRes("video_premium",228082705) ?>


	<div class="row">
		<div class="col-md-6">
		<pre><code>&lt;?php
	session_start();
	if(isset($_REQUEST[&quot;lang&quot;])){
		$_SESSION[&quot;lang&quot;] = $_REQUEST[&quot;lang&quot;];
	}else if(!isset($_SESSION[&quot;lang&quot;])){
		$_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}
	if(!in_array($_SESSION['lang'], array(&quot;es&quot;, &quot;en&quot;))){
		$_SESSION['lang']=&quot;en&quot;;
	}
	include &quot;langs/&quot;.$_SESSION[&quot;lang&quot;].&quot;.php&quot;;
</code>
		</div>
		<div class="col-md-6">
		<div class="centraditos">
	<?php // getRes("video_premium",228082723) ?>
	<?php // getRes('ejemplo','ex/idiomas-paso-a-paso/deteccion-idiomas/index.php','Detección de idiomas' ) ?>

</div>
		</div>
	</div>

</pre>
	

		</div></article><article><div><h2 id="phpmailer">phpmailer</h2>


	<p>Es un script de php que nos permitirá mayor control sobre el envío de correos.</p>
	<p>Descarga: <a target="_blank" href="https://github.com/PHPMailer/PHPMailer">https://github.com/PHPMailer/PHPMailer</a></p>

	<p>Para usarlo con una cuenta de gmail:
<pre><code>require(&quot;PHPMailer-master/PHPMailerAutoload.php&quot;);
$mail = new PHPMailer();
$mail-&gt;CharSet = 'utf-8';
$mail-&gt;Host = &quot;smtp.googlemail.com&quot;;
$mail-&gt;From = &quot;pablomonteserin@pablomonteserin.com&quot;;
$mail-&gt;IsSMTP();
$mail-&gt;SMTPAuth = true;
$mail-&gt;Username = &quot;usuario@gmail.com&quot;;
$mail-&gt;Password = &quot;password&quot;;
$mail-&gt;SMTPSecure = &quot;tls&quot;;
$mail-&gt;Port = 587;
$mail-&gt;AddAddress(&quot;mailDestinatario@example.com&quot;);
$mail-&gt;AddAddress(&quot;paramonty@gmail.com&quot;);
$mail-&gt;SMTPDebug  = 1;   <span class="green">//Muestra las trazas del mail, 0 para ocultarla</span>
$mail-&gt;isHTML(true);                                  <span class="green">// Set email format to HTML</span>
$mail-&gt;Subject = 'Here is the subject';
$mail-&gt;Body    = 'This is the HTML message body &lt;b&gt;in bold!&lt;/b&gt;';
$mail-&gt;AltBody = 'This is the body in plain text for non-HTML mail clients';

<span class="green">/*if ($archivoName != &quot;&quot;) {
	$mail-&gt;AddAttachment($archivoTemp, $archivoName);
}*/</span>
if(!$mail-&gt;send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail-&gt;ErrorInfo;
} else {
	echo 'Message has been sent';
}</code></pre>
</p>
<div class="notas">
	<p>Debemos probar esta librería en el servidor remoto, ya que en localhost a menudo nos hace falta una librería para poder enviar los mails.</p>
	<p>Si todo va bien, nos llegará un mail a nuestra cuenta de google informándonos de que han intentado acceder a nuestra cuenta. Si pulsamos en el enlace que se nos ofrece, podremos permitir el acceso a la cuenta de google desde localhost.</p>
</div>


	<h3>
		Ejercicio
	</h3>
	<p>Utilizando la plantilla adjunta (o un diseño propio), hacer una web con idiomas y por la que navegaremos redireccionando siempre a index.php y cargando con include los contenidos según sea oportuno.</p>
	<p>La web estará compuesta de dos páginas; una  con información y otra que nos permitirá mandar un mail al pulsar el botón de envío.</p>


	<div class="centraditos">
	<?php // getRes("recurso","ex/plantilla.zip","Descargar plantilla") ?>


	<?php // getRes('ejemplo','ex/pag-lang/solucion/index.php', 'Ejercicio solución') ?>
	</div>

	</div></article><article><div><h2 id="ejercicio-imagenes">Ejercicio imágenes</h2>

	<h3>Ejercicio</h3>
	<p>
Disponemos de una serie de imágenes
</p>
<img src="ex/bolas-4/fotos.png" alt="ejercicio bolas con PHP">
<p>
y de unas secuencias que se inician con una cifra, se continúan con letras y finalizan con un punto como por ejemplo:
</p>
<pre><code>"8artfeubjhdttshgdyeggukjnfuigJHQWEUYEÑLJFHggvvvabc."</code></pre>
<p>y con ellas queremos dibujar unos tableros siguiendo las siguientes normas:</p>
<ul>
	<li>La cifra inicial corresponderá a la anchura del tablero en casillas</li>
	<li>El resto de los caracteres (salvo el punto final) se interpretará como información para poner las casillas de la siguiente manera:
<ul>
	<li>Si un carácter no está dentro del conjunto {'B', 'b', 'G', 'g', 'R', 'r', 'Y', 'y' } indicará que se tiene que poner una celda gris.</li>
	<li>Si un carácter está dentro del conjunto {'B', 'b', 'G', 'g', 'R', 'r', 'Y', 'y' } y el siguiente no, estará codificando por una celda que contiene una bola del color codificado.</li>
	<li>Si un carácter está dentro del conjunto {'B', 'b', 'G', 'g', 'R', 'r', 'Y', 'y' } y el siguiente también y corresponden a diferentes colores, entre los dos codifican la celda con bola bicolor de los dos colores (y en el mismo orden que aparecen en la secuencia).
</li>
	<li>Si un carácter está dentro del conjunto {'B', 'b', 'G', 'g', 'R', 'r', 'Y', 'y' } y el siguiente es el mismo color, se tratarán los dos caracteres de forma independiente.</li>
</ul>
	</li>
</ul>

<p><span class="bold">Tarea:</span> Crear un programa que sea capaz de mostrar en pantalla los tableros siguiendo dichas normas a partir de la secuencia que se leerá de un archivo de datos que lo carga a la variable $cadena. </p>

<img src="ex/bolas-4/foto-bolas.png" alt="ejercicio bolas con PHP">


<h4>
Indicaciones preceptivas
</h4>
<ul>

<li>
La llamada a la función será del tipo: <br> <?php // getRes('ejemplo','ex/bolas-4/index.php?filename=data40','index.php?filename=data40' ) ?>
</li>
<li>
Se creará la function <span class="bold">putImg</span> que recibirá el código de una celda y pondrá en pantalla la imagen que le corresponde. Siempre que se tenga que poner una imagen en pantalla se hará con un llamamiento a esta function.
</li>
<li>Se creará la function <span class="bold">isImgCode</span> que recibirá como parámetro un carácter y devolverá true en caso de que corresponda al código de una imagen y false de lo contrario.</li>
<li>Se facilitan los ficheros de imagen en formato png necesarios para el desarrollo del ejercicio. <?php // getRes("recurso","ex/bolas-4/fotos.zip","Descargar") ?></li>
<li>Se facilitan archivos de texto de prueba con nombres data40, data41, ..., data43. Los archivos, que son archivos de texto, se tendrán que ubicar en la misma carpeta que el fichero php. <?php // getRes("recurso","ex/bolas-4/bolas-4.zip","Descargar") ?></li>
<li>PHP facilita la función strlen($cadena) que devuelve la longitud en caracteres de la cadena de texto $cadena</li>
<li>
PHP facilita las funciones strtoupper y strtolower que reciben una cadena y la devuelven sustituyendo minúsculas por mayúsculas o bien mayúsculas por minúsculas. Puede ser útil para simplificar el código del programa.
</li>

</ul>

<h4>Consejos</h4>
<ul>
	<li>El programa tiene que hacer un recorrido por la cadena buscando en cada posición si se trata de un carácter del conjunto {'B', 'b', 'G', 'g', 'R', 'r', 'Y', 'y' }. En el supuesto de que lo sea, no se tiene que poner inmediatamente la imagen, antes se tiene que comprobar si este carácter, junto con el siguiente, codifican por una bola de dos colores.</li>
	<li>Tened presente que cuando ponéis una bola de dos colores, las dos letras de la cadena, ya han sido tratadas y la segunda no tiene que trata</li>
</ul>

<?php // getRes("video_premium",228078298) ?>


	</div></article><article><div><h2 id="arrays">Arrays</h2>


<pre><code>&lt;?php 
	<span class="red">$day[0]=&quot;domingo&quot;;
	$day[1]=&quot;lunes&quot;;
	$day[2]=&quot;martes&quot;;
	$day[3]=&quot;miercoles&quot;;
	$day[4]=&quot;jueves&quot;;
	$day[5]=&quot;viernes&quot;;
	$day[6]=&quot;sabado&quot;;</span>

	<span class="green">//La funcion date, en conjunto con el modificador &quot;w&quot;, devuelve el numero de d&iacute;a que es hoy</span>
	$dayNumber=date(&quot;w&quot;);

	echo &quot;Hoy es &quot;. $day[$dayNumber];
?&gt;</code></pre>

<div class="row">
	<div class="col-md-9"><pre><code>&lt;?php 
	$day = array(&quot;domingo&quot;, &quot;lunes&quot;, &quot;martes&quot;, &quot;miercoles&quot;, &quot;jueves&quot;, &quot;viernes&quot;, &quot;sabado&quot;);

	$dayNumber=date(&quot;w&quot;);

	echo &quot;Hoy es &quot;.$day[$dayNumber];
?&gt;</code></pre></div>
	<div class="col-md-3"><?php // getRes("video_premium",228082737) ?></div>
</div>

	

		<h4>Ejercicio</h3>
		<p>Dado el siguiente código:</p>
<pre><code>$languages = array(&quot;HTML/CSS&quot;, &quot;JavaScript&quot;, &quot;PHP&quot;, &quot;Python&quot;, &quot;Ruby&quot;);
print_r($languages);</code></pre>
		<p>Modifica el item PHP del array y vuelve a usar print_r() para ver su contenido.</p>
		<div class="centraditos">
	<?php // getRes("video_premium",228083351) ?>
	<?php // getRes("video_premium",221233844) ?></div>
		<h3>Eliminar un elemento de un array</h3>

<div class="row">
	<div class="col-md-9">
	<pre><code>&lt;?php
	$array = array(&quot;red&quot;, &quot;blue&quot;, &quot;green&quot;);
	<span class="green">//El siguiente m&eacute;todo borra el elemento &#x201c;green&#x201d;</span>
	unset($array[2]);
?&gt;</code></pre>
	</div>
	<div class="col-md-3"><?php // getRes("video_premium",228083312) ?></div>
</div>


	
		<h3>
			Ejercicio
		</h3>

<div class="row">
	<div class="col-md-9">
	<p>Borrar Python del array y luego volver a ejecutar print_r() para comprobar que ya no se encuentra en el array.</p>
<pre><code>&lt;?php
	$languages = array(&quot;HTML/CSS&quot;,&quot;JavaScript&quot;, &quot;PHP&quot;, &quot;Python&quot;, &quot;Ruby&quot;);
	print_r($languages);
?&gt;</code></pre>
	</div>
	<div class="col-md-3">
	<?php // getRes("video_premium",228083338) ?>
	</div>
</div>

		

	
		<h3>Convertir un array en texto y un texto en array</h3>


		<div class="row">
			<div class="col-md-6">


			<pre><span class="font-weight-bold">Array a texto:</span><code>$array = array("afsdf", "asdf", "asdf", "asdf");
$txt = join(", ", $array);</code></pre>
			</div>
			<div class="col-md-6">
			<pre><span class="font-weight-bold">Texto a Array:</p><code>$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza)</code></pre>
			</div>
		</div>

			

			
			
	<?php // getRes("video_premium",228083356) ?>

				<h3>Arrays asociativos</h3>
<pre><code>&lt;?php 
	$capital['DE'] = &quot;Berlin&quot;;
	$capital['DK'] = &quot;Copenhague&quot;;
	$capital['ES'] = &quot;Madrid&quot;;

	echo $capital['ES'];
?&gt;</code></pre>

<div class="row">
	<div class="col-md-10"><pre><code>&lt;?php 
	$capital =array(&quot;DE&quot;=&gt;&quot;Berl&iacute;n&quot;, &quot;DK&quot; =&gt;&quot;Copenhage&quot;, &quot;ES&quot; =&gt;&quot;Madrid&quot;);

	echo $capital['ES'];
?&gt;</code></pre>
</div>
	<div class="col-md-2"><?php // getRes("video_premium",228083375) ?></div>
</div>

	
				<h4>Recorrer y contar elementos del array</h4>

<div class="row">
	<div class="col-md-10">
	<pre><code>&lt;?php 

$capital['JP'] = &quot;Tokyo&quot;;
$capital['DK'] = &quot;Copenhague&quot;;
$capital['ES'] = &quot;Madrid&quot;;

foreach($capital as $value){ 		//foreach($capital as $index=&gt;$value){
	echo $value.&quot;&lt;br/&gt;&quot;;		
}

$elementosArray = count($capital);
echo &quot;El array tiene &quot;. $elementosArray.&quot; elementos&quot;;

?&gt;</code></pre>
	</div>
	<div class="col-md-2">
	<?php // getRes("video_premium",228083383) ?>
	</div>
</div>



	
			<h4>Ejercicio</h4>
			<p>Crea un array con cinco nombres de persona y recórrelo mostrando el texto "Conozco a alguien llamado".</p>
	

<div class="row">
<?php // getRes("video_premium",221233844) ?>
			<?php // getRes('ejemplo','ex/arrays/ejercicios/conozco-alguien-llamado.php','Conozco a alguien llamado...') ?>
			<?php // getRes("video_premium",228084285) ?>

	</div>
			<h4>Ejercicio</h4>
			<p>Recorrer la siguiente lista con un bucle imprimiendo el doble de cada número: </p>

				<pre><code>$my_list = array(1,9,3,8,5,7);</code></pre>
				
<div class="row">
	
					<?php // getRes("video_premium",228084297) ?>
	<?php // getRes('ejemplo','ex/arrays/ejercicios/por2.php','Por 2' ) ?>
	<?php // getRes("video_premium",228084304) ?>

</div>
			
					
						<h3>Ejercicio</h3>
						<p>En estadística, la media aritmética de una colección de datos (muestra) se calcula:</p>

							<img src="ex/numeros/formula.png" alt="formula">
							<p>
								Es decir, sumando cada uno de los valores y dividiendo por la totalidad de valores existentes.
							</p>
							<p>En las siguientes muestras:</p>

							<table>
								<tr>
									<td>Muestra 1: </td>
									<td>5</td>
									<td>5</td>
									<td>5</td>
									<td>5</td>
									<td>5</td>
								</tr>
								<tr>
									<td>Muestra 2: </td>
									<td>1</td>
									<td>1</td>
									<td>5</td>
									<td>9</td>
									<td>9</td>
								</tr>
							</table>

							<p>Ambas tienen una media de 5 pero, en cambio, son dos muestras bastantes diferentes. Por este motivo es interesante observar la desviación respeto la media que tiene cada valor</p>

							<table>
								<tr>
									<td>Media</td>
									<td colspan="4">5</td>
								</tr>
								<tr>
									<td>Muestra 1</td>
									<td>5</td>
									<td>5</td>
									<td>5</td>
									<td>5</td>
									<td>5</td>
								</tr>
								<tr>
									<td>Desviaciones M1</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Muestra 2</td>
									<td>1</td>
									<td>1</td>
									<td>5</td>
									<td>9</td>
									<td>9</td>
								</tr>
								<tr>
									<td>Desviaciones M2</td>
									<td>-4</td>
									<td>-4</td>
									<td>0</td>
									<td>4</td>
									<td>4</td>
								</tr>
							</table>

							<p>Con la media y las desviaciones ya tenemos una información más exacta de cómo es cada muestra, pero parece que no hemos ganado demasiado porque si la muestra tenía n valores ahora tenemos 1 media y n valores de desviaciones.</p>
							<p>
Si se quieren resumir las desviaciones de la muestra a un solo valor y hacemos la media de las desviaciones nos encontramos que las desviaciones negativas compensan las positivas y en la segunda muestra del ejemplo resulta que el cómputo (-4-4+0+4+4)/5 da cero igual que la media de la muestra 1 en que no había desviación.</p>
<p>La relevancia de la desviación es independiente de su signo, por ello, calculamos su cuadrado.</p>



							<table>
								<tr>
									<td>Mediana</td>
									<td colspan="4">5</td>
								</tr>
								<tr>
									<td>Muestra 1</td>
									<td>5</td>
									<td>5</td>
									<td>5</td>
									<td>5</td>
									<td>5</td>
								</tr>
								<tr>
									<td>Desviaciones M1</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Muestra 2</td>
									<td>1</td>
									<td>1</td>
									<td>5</td>
									<td>9</td>
									<td>9</td>
								</tr>
								<tr>
									<td>Desviaciones M2</td>
									<td>16</td>
									<td>16</td>
									<td>0</td>
									<td>16</td>
									<td>16</td>
								</tr>
							</table>

<p>Y si calculamos la media de los cuadrados, los resultados son bien diferentes.  En el caso de la muestra 1 es cero y en el de la muestra 2 es 12.8. Este último cómputo que hemos hecho es la varianza de la muestra:</p>

<img src="ex/numeros/formula-2.png" alt="fórmula">
<p>
La raíz cuadrada de esta varianza es lo que se denomina desviación típica de la muestra y que vendría a ser la media de las desviaciones tomadas en valor absoluto.
</p>
<p><span class="bold">Tarea</span>: Calcular la media, las desviaciones de la media, las desviaciones al cuadrado, la varianza y la desviación típica de un conjunto de números que se leerán desde un fichero cuyo nombre se pasará como parámetro.</p>


<p>El ejercicio consistirá en la creación de una serie de módulos en php que desarrollen, cada uno, un determinado trabajo según el detalle que se hará a continuación.</p>

<ul>
	<li>
		<p>Módulo getData </p>
		<p>Este módulo no tiene que recibir ningún parámetro.
El llamamiento en el programa tendrá que ser del tipo: </p>
<?php // getRes('ejemplo','ex/numeros/index.php?filename=data10','index.php?filename=data10') ?>
<p>el fichero de datos consta de una única instrucción de php en que la variable $cadena recibe como valor una cadena de texto integrada por una serie de números que están separados por un espacio en blanco, como por ejemplo</p>

<p>$cadena = "0 1 2 3 4 5 6 7 8 9";</p>
<p>el fichero de datos consta de una única instrucción de php en que la variable $cadena recibe como valor una cadena de texto integrada por una serie de números que están separados por un espacio en blanco.
</p>


	</li>

	<li><p>
Módulo <span class="bold">round2</span>
	</p>
<p>
Recibe como parámetro un número y lo devuelve con un máximo de 2 decimales.
</p>
	</li>
	<li>Módulo <span class="bold">showNumbers</span> <br>

Este módulo recibe como parámetro una array de números y una cadena de texto. En una primera hilera mostrará la cadena de texto a modo de título y en una segunda muestra los números separados por espacios. Por ejemplo, al llamamiento showNumbers($data, "Original data") si el array $data es | 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 |, mostrará <br><img src="ex/numeros/mostrara.png" alt="ejercicio php">
	</li>
	<li>Módulo <span class="bold">tableAverage</span> <br>
Este módulo recibirá una mesa de números y devolverá su media.
	</li>
	<li>Mòdul <span class="bold">createDeviationTable</span> <br>
Este módulo tiene que recibir un array de números y su media y creará un nuevo array, de la misma longitud y llenará sus posiciones con las desviaciones a la media correspondientes a los valores del array entrado. <br>
createDeviationTable($in, $average) devolvería el array $out.

<table>
	<tr>
		<td>$in</td>
		<td>1</td>
		<td>1</td>
		<td>5</td>
		<td>9</td>
		<td>9</td>
	</tr>
	<tr>
		<td>$out</td>
		<td>-4</td>
		<td>-4</td>
		<td>0</td>
		<td>4</td>
		<td>4</td>
	</tr>
</table>
	</li>
	<li>
		Módulo <span class="bold">createVarianceTable</span> <br>

		Este módulo tiene que recibir un array de números y su media y creará una nueve array, de la misma longitud y llenará sus posiciones con el cuadrado de las desviaciones a la media correspondientes a los valores del array entrada.
createVarianceTable($in, $media) devolvería la array $out.

<table>
	<tr>
		<td>$in</td>
		<td>1</td>
		<td>1</td>
		<td>5</td>
		<td>9</td>
		<td>9</td>
	</tr>
	<tr>
		<td>$out</td>
		<td>16</td>
		<td>16</td>
		<td>0</td>
		<td>16</td>
		<td>16</td>
	</tr>
</table>

	</li>
</ul>


<h5>
Indicaciones preceptivas
</h5>
<ol>
	<li>
No se puede hacer uso de variables globales
</li>
<li>
En PHP existe la function count($arg) que recibe como argumento un array y devuelve la cantidad de elementos que tiene el array $arg.  <br>
Por ejemplo si la mesa es (89, 7, 3, 4, 5, 9) devolvería un 6.
</li>
<li>Queda especialmente prohibido hacer uso de las funciones de arrays de php salvo count.</li>

<li><?php // getRes("recurso","ex/numeros/data.zip","Se facilitan los 5 ficheros de datos, de data10 a data14" ) ?></li>
</ol>
<?php // getRes("video_premium",228078223) ?>


	<h3>Ejercicio</h3>
	<p>
Disponemos de una secuencia de números positivos cada uno de ellos separado del siguiente por un espacio y que finaliza con un cero
</p>
<p><span class="bold">Tarea:</span> 
Se pide un programa que sea capaz de leer un fichero que contenga una cadena de números y escriba en pantalla, a uno por línea, los números primos que forman parte de la secuencia, hasta que se encuentre un cero.
</p>
<h5>
Indicaciones preceptivas
</h5>
<ul>
	<li>La llamada al programa será del tipo: <br> <?php // getRes('ejemplo','ex/numeros-2/index.php?filename=data30', 'index.php?filename=data30') ?>  por lo cual se tendrá que emplear la instrucción $filename=$_GET["filename"]; para cargar el nombre del fichero que incorpora la instrucción que asigna valor a la variable $cadena. </li>
	<li>
Los ficheros de datos constan de una única instrucción de php en que la variable $cadena recibe como valor una cadena de texto integrada por series de números enteros y positivos que están separados por un espacio y finaliza en un 0
 <br>

Por ejemplo el fichero data30 tiene el siguiente contenido

<pre><code>&lt;?php
 $cadena = "1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 0";
?&gt;</code></pre>

	</li>
	
</ul>
<?php // getRes("recurso","ex/numeros-2/numeros-2.zip", "Descargar ficheros") ?>
<h5>
	
Otras indicaciones

</h5>
<ul>
	<li>
Un número primo es aquel diferente a 1 y que sólo es divisible por 1 y por sí mismo.
</li>
	<li>
Puede resultar útil construir una función que permita saber si un número es primo o no.
</li>
</ul>
<?php // getRes("video_premium",228078257) ?>




	<h3>Ejercicio</h3>
	<p>El tesorero de un partido político ha encontrado una manera de codificar las cuentas de la caja B a partir de códigos de colores en que cada color de una bola corresponde a una cifra de un número según la traducción</p>
	
	<div class="table-responsive">
	<table>
		<tr>
			<td>Codi</td>
			<td><img src="ex/bolas-5/B.png" alt="ejercicio php - bola azul"></td>
			<td><img src="ex/bolas-5/R.png" alt="ejercicio php - bola roja"></td>
			<td><img src="ex/bolas-5/G.png" alt="ejercicio php - bola verde"></td>
			<td><img src="ex/bolas-5/Y.png" alt="ejercicio php - bola amarilla"></td>
			<td><img src="ex/bolas-5/BG.png" alt="ejercicio php - bola azul y verde"></td>
			<td><img src="ex/bolas-5/RG.png" alt="ejercicio php - bola roja y verde"></td>
			<td><img src="ex/bolas-5/GY.png" alt="ejercicio php - bola verde y amarilla"></td>
			<td><img src="ex/bolas-5/GB.png" alt="ejercicio php - bola verde y azul"></td>
			<td><img src="ex/bolas-5/BY.png" alt="ejercicio php - bola azul y amarilla"></td>
			<td><img src="ex/bolas-5/YR.png" alt="ejercicio php - bola amarilla y roja"></td>
			<td></td>
		</tr>
		<tr>
			<td>valor</td>
			<td>0</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>6</td>
			<td>7</td>
			<td>8</td>
			<td>9</td>
			<td>Separador</td>
		</tr>
		<tr>
			<td>Nombre fichero</td>
			<td>B</td>
			<td>R</td>
			<td>G</td>
			<td>Y</td>
			<td>BG</td>
			<td>RG</td>
			<td>GY</td>
			<td>GB</td>
			<td>BY</td>
			<td>YR</td>
			<td>E</td>
		</tr>
	</table>
	</div>
	<p>La secuencia que crea está formada por los nombres de los ficheros que codifican los colores y es del tipo</p>
	<p>{c11 c12 ... c1n E c21 c22 ... c2n E c31 c32 ... c3n E ... E cm1 cm2 ... cmn .} on</p>
	<ul>
		<li>
cij : nombre del fichero de color correspondiente a la cifra j de la cantidad y.
</li>
		<li>
E es el carácter que indica que se ha acabado las cifras de un número
</li>
<li>. es el carácter '.' que indica el fin de la secuencia
<img src="ex/bolas-5/foto.png" alt="imagen de como debería quedar el ejercicio de las bolas de PHP">
</li>
<li>Esta imagen muestra la codificación de colores y los valores asociados a la secuencia {R G BY Y B B B @E YR RG B B @E RG RG RG RG .}
hemos marcado los separadores con color azul para #ver que la secuencia contiene tres números</li>
	</ul>
	<p><span class="bold">Tarea: </span> Crear un programa que reciba un fichero con la secuencia correspondiente a una serie de cantidades y muestre en pantalla, a una línea por cantidad:</p>
	<ul>
		<li>la codificación en bolas de colores</li>
		<li>la palabra Value y el valor de la cantidad codificada</li>
	</ul>
	<p>Al acabar de mostrar las cantidades, en la línea siguiente, se mostrará el total.
Optativamente, se puede mostrar debajo, el código de color correspondiente al total. <br>
Por ejemplo:</p>
<img src="ex/bolas-5/foto-2.png" alt="ejemplo de como quedaría el ejercicio de las bolas con PHP resuelto">
<h5>Indicaciones preceptivas</h5>
<ul>
	<li>El llamamiento en el programa será del tipo: <br> <?php // getRes('ejemplo','ex/bolas-5/index.php?filename=data50', 'index.php?filename=data50') ?></li>
<li>Las instrucciones para cargar el fichero de datos y crear la lista $data a partir de la variable $cadena ya forman parte del programa principal de la plantilla .</li>
<li>Con los ficheros del enunciado, se facilitan 10 ficheros de imagen que corresponden a cada cifra y que también se usan al ejercicio 4. <?php // getRes("recurso","ex/bolas-5/ficheros.zip","") ?></li>
<li>
<div class="table-responsive">
<table>
		<tr>
			<td><img src="ex/bolas-5/B.png" alt=""></td>
			<td><img src="ex/bolas-5/R.png" alt=""></td>
			<td><img src="ex/bolas-5/G.png" alt=""></td>
			<td><img src="ex/bolas-5/Y.png" alt=""></td>
			<td><img src="ex/bolas-5/BG.png" alt=""></td>
			<td><img src="ex/bolas-5/RG.png" alt=""></td>
			<td><img src="ex/bolas-5/GY.png" alt=""></td>
			<td><img src="ex/bolas-5/GB.png" alt=""></td>
			<td><img src="ex/bolas-5/BY.png" alt=""></td>
			<td><img src="ex/bolas-5/YR.png" alt=""></td>
		</tr>
		<tr>
			<td>B.png</td>
			<td>R.png</td>
			<td>G.png</td>
			<td>Y.png</td>
			<td>BG.png</td>
			<td>RG.png</td>
			<td>GY.png</td>
			<td>GB.png</td>
			<td>BY.png</td>
			<td>YR.png</td>
		</tr>
	</table>
</div>
</li>


<li>Se tiene que crear la function <span class="bold">putImg</span> que, a partir del nombre del código mostrará una celda de color a la pantalla.</li>
<li>Se tiene que crear la function <span class="bold">colorToValue</span> que recibe un texto correspondiente al al código de una cifra y devuelve la cifra que le corresponde según el array mostrado al principio.
Por ejemplo, si recibe "BY" devolvería un 8.</li>
<li>
No se pueden emplear variables globales.
</li>
</ul>


<h4>Consejos</h4>
<p>Este problema se tiene que considerar como un problema de trabajo con una secuencia (que nombraremos externa) en que cada elemento es también una secuencia (interna).</p>
<p>Partiendo del ejemplo {R G BY Y B B B E YR RG B B E RG RG RG RG .}, la secuencia externa tiene tres elementos que están limitados por la letra 'E' o bien '.'. Así los elementos de la secuencia externa son:</p>
<ul>
	<li>R G BY Y B B B</li>
	<li>YR RG B B</li>
	<li>RG RG RG RG</li>
</ul>
<p>
Cada uno de ellos es una secuencia interna
</p>
<p>El tratamiento de esta secuencia de secuencias se hace directamente a partir del uso de array_shift sobre la lista $data y los elementos que podemos obtener pueden ser:</p>
<ul>
	<li>El '.' implica el fin de una secuencia interna (un número) y de la secuencia externa (acabamos la secuencia de números).</li>
	<li>La 'E' que indica el fin de un número</li>
	<li>Cualquier otro código, corresponderá a una bola</li>
</ul>


<p>Así, para tratar la secuencia de secuencias, tendremos que trabajar con dos bucles, uno de grande (externo) que contendrá uno más pequeño (interno).</p>
<p>
El bucle grande, evidentemente, se tendrá que ejecutar hasta que no se coja de la secuencia lo '.', que indica el final de la secuencia total.</p>
<p>
El bucle interno se tendrá que ejecutar hasta que se encuentre una 'E' o un '.' que indica el final de una secuencia interna (un número).</p>

<ul>
	<li>Tenéis que tener en cuenta, que cuando se lee una 'E', para poder entrar al bucle interno, tendréis que recoger otro elemento de la lista.</li>
	<li>Para calcular un número cuando recibimos las cifras por orden desde la de más valor a la de menos valor el mecanismo iterativo no es complejo, a pesar de que no es directo.
<br>

Por ejemplo: recibimos las cifras 4, 8, 2 y queremos obtener el 482.

<ul>
	<li>numero := 0</li>
	<li>numero := numero * 10 + 4		→ 0 * 10 + 4 → 0 + 4	→ 4 </li>
	<li>numero := numero * 10 + 8		→ 4 * 10 + 8 → 40 + 8 → 48</li>
	<li>numero := numero * 10 +2		→ 48 * 10 + 2 → 480 + 2 → 482</li>
</ul>
	</li>


</ul>
			

				</div></article><article><div><h2 id="cookies">Cookies</h2>

			
				<p>Son archivos de texto almacenados en el ordenador del cliente y que contienen información que será utilizada por la página web para cuando el cliente se vuelva a conectar.</p>
				<p>Gracias a ellas un sitio web puede almacenar información acerca de tu perfil.</p>
<pre><code>&lt;?php
	$nombre = &quot;Juan&quot;;
	setcookie(&quot;nombre&quot;, $nombre, time()+3600);
	echo $_COOKIE['nombre'];
?&gt;</code></pre>

				<p>El array  $_COOKIE contiene las cookies en el momento de hacer la petición, por ello, no podrás ver los valores que acabas de almacenar en la petición actual.</p>
				<p>Para ver las cookies almacenadas por cierto dominio → 
					pulsamos en el ícono justo a la izquierda de la URL → More information → Security → 
					View cookies</p>
<div class="centraditos">
					<?php // getRes('ejemplo','ex/cookies/cookies.php', 'Cookies') ?>
	<?php // getRes("video_premium",228084321) ?></div>
					<h4>Ejercicio Cookies</h4>
					<p>Añadir al ejercicio de detección de idiomas el uso de Cookies, para que el idioma seleccionado quede almacenado una vez cerrado el navegador.</p>
					<p>Nota: el primer if, nos quedará así: <br>
<pre><code>if(isset($_REQUEST[&quot;lang&quot;])){
	$_SESSION[&quot;lang&quot;] = $_REQUEST[&quot;lang&quot;];
	setcookie(&quot;lang&quot;, $_REQUEST[&quot;lang&quot;], time()+3600);
}</code></pre>
			
<div class="row">
	<div class="col-md-2"><?php // getRes('ejemplo','ex/idiomas-paso-a-paso/con-cookies/index.php','Con cookies') ?></div>
	<div class="col-md-2"><img class="img-fluid" src="img/cookies.svg" alt="broma política de cookies"></div>
</div>

				
			
			
				
			
	
	</div></article><article><div><h2 id="composer-jwt">Composer con jwt</h2>

<div class="row">
	<div class="col-md-10">
<pre><code>&lt;?php
//Cargamos los m&oacute;dulos de Composer
require __DIR__ . '/vendor/autoload.php';
// A continuaci&oacute;n, ya podremos usar Composer
use \Firebase\JWT\JWT;

$token = array (
  'sub' =&gt; '1234567890',
  'name' =&gt; 'John Doe',
  'admin' =&gt; true,
  'jti' =&gt; '79f6c158-7c50-4943-b2dd-e6817f3ee274',
  'iat' =&gt; 1571252215,
  'exp' =&gt; 1571255815,
);

$jwt = JWT::encode($token, &quot;secret&quot;);
echo $jwt;
?&gt;</code></pre></div>
	<div class="col-md-2">
	<?php // getRes('recurso','ex/php-jwt.zip', 'Descargar recurso') ?>
	</div>
</div>



</div></article>
</main>

<?php 

// });
// include $path."/diapos_theme/footer.php";
?>