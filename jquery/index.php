<?php 
$titulo_curso="jQuery";
$meta_description = 'He usado jQuery profesionalmente durante sus años dorados. Aprende a programar utilizando esta librería gracias a este fantástico curso con videotutoriales';

$img_curso = 'curso-jquery.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
?>

<section id="amor" class="verIndice">
		<article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#introduccion">Introducción</a></li>

		<li><a href="#metodo-val">Método val()</a></li>
		<li><a href="#eventos">Eventos</a></li>
		<li><a href="#efectos">Efectos</a>
		</li>
		<li><a href="#ejercicios-css">Ejercicios CSS</a>
		</li>

				<li><a href="#slider">Slider</a>
		</li>

		<li><a href="#attr">Método attr</a>
		</li>

		<li><a href="#add-remove-has-class">addClass / removeClass / hasClass / toggleClass</a>
		</li>

		<li>
			<a href="#accesos">Accesos al hijo, al padre y al hermano</a>
		</li>
		<li><a href="#bucle">Bucle</a>
			</li>

				<li><a href="#filtro">Hacer un filtro</a></li>
	
		<li><a href="#menus">Menús</a>
			
		</li>

		<li><a href="#metodo-text-html">text() y html()</a></li>

<li><a href="#detectar-cuando-pulso-fuera">Detectar cuando pulso fuera de cierta capa</a></li>

		<li><a href="#dom">DOM</a>

		</li>
		<li><a href="#plugins">Plugins</a>

		</li>
		<li><a href="#validacion-formularios-sin-plugin">Validación de formularios sin plugin</a></li>

		<li><a href="#buenas-practicas">Buenas prácticas con jQuery</a></li>


	</ol>
		</article></section>

	<main class="curso">
	<?= drawH1WithImg() ?>


<article><div><h2 id="introduccion">Introducción</h2>
<p>Aunque con la llegada de ECMA Script 6 pienso que el uso de jQuery cada vez está menos justificado, esta librería de Javascript sigue estando ampliamente extendida y de hecho es la más usada del mercado.</p>
<p>Durante mucho tiempo, he utilizado esta librería para programar con Javascript. Por su sencillez, la he utilizado incluso mucho más que el propio Javascript nativo. Sin embargo, salvo que necesites aprender jQuery porque es una tecnología que te requieren usar en un proyecto, pienso que no se justifica su aprendizaje.  Este curso que tienes ante tí está muy trabajado, con gran cantidad de ejercicios y videotutoriales, pero todo lo que tienes aquí lo tienes en el curso de Javascript con ECMA Script 6, el cual te recomiendo por encima de este.</p>
<article><div>

<h3 id="para_que_sirve">¿Para qué sirve?</h3>

			


			<div class="row">
				<div class="col-md-6">
				<p>Implementa funciones complejas: "drag and drop", "auto completar", "animaciones", "máscaras"...</p>
<p>La librería se asegura de mantener la compatibilidad entre navegadores.</p>
<?= getRes("video_premium abierto", 223106129) ?>
				</div>
				<div class="col-md-6">
				<a target="_blank" href="http://www.commitstrip.com/en/2015/09/16/how-to-choose-the-right-javascript-framework/"><img src="img/javascript-frameworks.jpg" alt="chistea de lo que ha pasado en la historia con los diferentes frameworks de Javascript"></a></div>
			</div>

	</div></article>
<article><div>
<h3 id="instalacion">Instalación</h3>

<div class="row">
	<div class="col-md-7"><p><a target="_blank" href="http://jquery.com/">http://jquery.com/</a>: sitio oficial de la librería.</p>
<p>Ahí puedes descargar el archivo para tus proyectos.</p>
<p>En cada página que lo requiera, habrá que agregar: <br>
<pre><code>&lt;script type=&quot;text/javascript&quot; src=&quot;jquery.js&quot;&gt;&lt;/script&gt;</code></pre>

</p>
<p><a target="_blank" href="https://developers.google.com/speed/libraries/">Enlace para cargar la librería a partir de los repositorios de google.</a></p>

</div>
	<div class="col-md-5"><?= getRes("video_premium abierto", 223106136) ?></div>
</div>

			


</div></article>


<article><div>
<h3 id="inicializar">Ejemplo básico</h3>

<?= getRes("video_premium abierto", 223106143) ?>

	<h4>Llamada a función I</h4>

	<div class="row">
		<div class="col-md-10">
			
	<pre><code>&lt;script type=&quot;text/javascript&quot; src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
	<span class="blue">$(document)</span>.ready(<span class="red">inicializar</span>);

	function <span class="red">inicializar</span>(){
		alert(&quot;hola&quot;);
	}
&lt;/script&gt;
	</code></pre>

	<p><span class="blue">$(document)</span> espera a que el código de la página esté cargado, si quiero esperar a que además las imágenes de la página estén cargadas usaré <span class="blue">$(window)</span> en su lugar.</p>


		</div>
		<div class="col-md-2"><?= getRes('ejemplo abierto','ex/1/index.html','Llamada a función 1',4) ?></div>
	</div>
	

<h4>Llamada a función II</h4>

<div class="row">
	<div class="col-md-10">

	<pre><code>&lt;script type=&quot;text/javascript&quot; src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
	$(document).ready(<span class="red">inicializar</span>);

	function <span class="red">inicializar</span>(){
		$("#boton").on('click', <span class="blue">botonPulsado</span>);
	}

	function <span class="blue">botonPulsado</span>(){
		alert(&quot;Boton pulsado&quot;);
	}
&lt;/script&gt;

&lt;input type=&quot;button&quot; id=&quot;boton&quot;/&gt;</code></pre>
	</div>
	<div class="col-md-2"><?= getRes('ejemplo abierto','ex/llamada-a-funcion-2/index.html','Llamada a una función',4) ?>
</div>
</div>




<h4>Llamada a función III</h4>

<div class="row">
	<div class="col-md-10">

	<pre><code>&lt;script&gt;
	$(document).ready(<span class="red">inicializar</span>);

	function <span class="red">inicializar</span>(){
		$(&quot;#boton&quot;).on('click', function(){
			alert(&quot;Boton pulsado&quot;);
		});
	}
&lt;/script&gt;

&lt;input type=&quot;button&quot; id=&quot;boton&quot;/&gt;</code></pre>

	</div>
	<div class="col-md-2">
	<?= getRes('ejemplo abierto','ex/llamada-funcion-3/index.html','Llamada a función 3', 4) ?>
	</div>
</div>






<h4>Llamada a función IV</h4>
<div class="row">
	<div class="col-md-10">
<pre><code>&lt;script&gt;
	$(<span class="red">inicializar</span>);

	function <span class="red">inicializar</span>(){
		$(&quot;#boton&quot;).on('click', function(){
			alert(&quot;Boton pulsado&quot;);
		});
	}
&lt;/script&gt;

&lt;input type=&quot;button&quot; id=&quot;boton&quot;/&gt;
</code></pre></div>
	<div class="col-md-2"><?= getRes('ejemplo abierto','ex/llamada-funcion-4/index.html','Llamada a función 4',4) ?></div>
</div>



<h4>Acerca de la función click</h4>
<p>A veces esta función se llama dos veces en lugar de una. Esto suele ocurrir cuando genero la página dinámicamente y el evento click se añade varias veces. Para prevenirlo:</p>
<pre><code>$(&quot;.button&quot;).off('click').on('click', function(){
	alert('has hecho click');
});</code></pre>

<p>Es como si una persona tuviese muchas orejas y cada vez que alguien le da los buenos días, saludase una vez por cada oreja que tiene. Si sólo queremos que salude una vez, deberíamos dejarla con sólo una oreja.</p>
</div></article>

	</div></article><article><div><h2 id="metodo-val">Método val()</h2>
<article><div>

<div class="row">
	<div class="col-md-10"><pre><code>$("#txt").val("value cambiado");

alert($("#txt").val());</code></pre>
</div>
	<div class="col-md-2"><?= getRes("video_premium abierto", 223106160) ?></div>
</div>
	

<h3>Ejercicio val()</h3>
<p>Crear una página con un &lt;input type="text"&gt; y dos botones. Al pulsar sobre un botón se modificará el value del cuadro de texto. Al pulsar sobre el otro botón, se mostrará un mensaje de alerta con el value del cuadro de texto</p>

<div class="centraditos">
<?= getRes("video_premium abierto", 223106428) ?>

<?= getRes('ejemplo abierto','ex/metodo-val/index.html','Ver ejercicio de uso del método val',4 ) ?>

<?= getRes("video_premium abierto", 223106156) ?>

</div>
</div></article>

		</div></article><article><div><h2 id="eventos">Eventos</h2>

<article><div>
	<p class="red bold">Para realizar los siguientes ejercicios de eventos, dibujar en pantalla un cuadro de texto (un &lt;input type="text" &gt;).</p>
	<?= getRes("video_premium", 223106172) ?>
	

	<h3>Ejercicio</h3>

<div class="row">
	<div class="col-md-10">
	<p>Para ejecutar una función  cuando el elemento toma el foco: </p>

<pre><code>$(&quot;#elemento&quot;).on('focus', fn);</code></pre>

<p>
	Para lanzar una función cuando el elemento pierde el foco:</p>
	<pre><code>$(&quot;#elemento&quot;).on('blur', fn);</code></pre>

	</div>
	<div class="col-md-2">
	<?= getRes('ejemplo','ex/focus-blur/index.html', 'focus blur',4) ?>
	</div>
</div>

	


	

	<h3>Ejercicio</h3>

<div class="row">
	<div class="col-md-10"><pre><code>$(&quot;#elemento&quot;).on('dblclick', fn);</code></pre></div>
	<div class="col-md-2"><?= getRes('ejemplo','ex/dblclick/index.html', 'Doble click',4) ?></div>
</div>

	

	

	

	<h3>Mouse up, Mouse down</h3>

<div class="row">
	<div class="col-md-10"><pre><code>$(&quot;#buscar&quot;).on('mousedown', fn);

$(&quot;#buscar&quot;).on('mouseup', fn);</code></pre></div>
	<div class="col-md-2"><?= getRes('ejemplo','ex/mouseup-mousedown/index.html','mouseUp, mouseDown',4 ) ?></div>
</div>

	
	

	

	<h3>Ejercicio</h3>

<div class="row">
	<div class="col-md-4">

	
	<pre><code>$(&quot;#elemento&quot;).mouseover(fn)

$(&quot;#elemento&quot;).mouseout(fn)</code></pre>


	</div>
	<div class="col-md-8">
		
<div class="centraditos">
<?= getRes("video_premium", 223106171) ?>

	<?= getRes('ejemplo','ex/mouseover-mouseout/index.html','mouseOver, mouseOut',4) ?>
	
	<?= getRes("video_premium", 223106677) ?>

		
</div>
	</div>
</div>
	<h3>Objeto evento</h3>

<div class="row">
	<div class="col-md-10">
					
	<p>Es creado automáticamente por javascript cuando tiene lugar un evento. </p>
	<p>Tiene varias propiedades: type(tipo de evento producido), keyCode(código Unicode) del botón pulsado, button(que botón del ratón fue pulsado)... </p>
	<p>No todos lo eventos disponen de todas las propiedades del objeto event.</p>
	</div>
	<div class="col-md-2"><?= getRes("video_premium", 223106172) ?></div>
</div>

	


	

	<h3>mousemove</h3>

<div class="row">
	<div class="col-md-6">
	<pre><code>&lt;script type=&quot;text/javascript&quot; src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
	$(document).ready(function(){
		$(document).mousemove(function(event){
			$(&quot;#cory&quot;).text(&quot;coordenada y=&quot;+event.pageY);
		});
		$(document).click(function(e){
			$(&quot;#corx&quot;).text(&quot;coordenada x=&quot;+e.pageX);
		})
	});
&lt;/script&gt;

&lt;p id=&quot;corx&quot;&gt;&lt;/p&gt;
&lt;p id=&quot;cory&quot;&gt;&lt;/p&gt;</code></pre>
	</div>
	<div class="col-md-6">
		<div class="centraditos">
		<?= getRes("video_premium", 223106690) ?>
		<?= getRes('ejemplo','ex/move/index.html','move',4) ?>
		</div>
	</div>
</div>

		
	




	</div></article><article><div><h2 id="efectos">Efectos</h2>


	<div class="row">
		<div class="col-md-10">
		<p class="red">Para realizar los siguientes ejercicios de efectos, dibujar en pantalla una capa roja y dos botones (los botones no deben estar dentro de la capa).</p>
		</div>
		<div class="col-md-2">
		<?= getRes("video_premium", 223106694) ?>
		</div>
	</div>
				
	
	
	<h3>show / hide</h3>

	<div class="row">
		<div class="col-md-6">	<p>Cuando haga click sobre uno de los botones, la capa roja deberá ocultarse. Cuando haga click sobre el otro, deberá mostrarse.</p>
</div>
		<div class="col-md-6">	<pre><code>$(&quot;#capaRoja&quot;).hide(&quot;slow&quot;);

$(&quot;#capaRoja&quot;).show(&quot;fast&quot;);</code></pre>
</div>
	</div>
<div class="notas">
	<p>"show" muestra el objeto con una animación que dura tantos milisegundos como le indicamos:
	show([cantidad de milisegundos])</p>

<p>"show" muestra el objeto con una animación que dura tantos milisegundos como le indicamos
y ejecuta al final la función que le pasamos como segundo parámetro:
show([cantidad de milisegundos],[función])</p>
</div>
<?= getRes('ejemplo','ex/1-show-hide/index.html', 'show y hide',4) ?>


<h3 id="fadeInfadeOut"fadeTo>fadeIn / fadeOut</h3>

<div class="row">
	<div class="col-md-10">
	<pre><code>$(&quot;#capaRoja&quot;).fadeOut(&quot;slow&quot;);

$(&quot;#capaRoja&quot;).fadeIn(&quot;slow&quot;);</code></pre>
	</div>
	<div class="col-md-2">
		
<?= getRes('ejemplo','ex/2-fadein-fadeout/index.html','fadeIn, fadeOut',4) ?>

	</div>
</div>



<h3 id="fadeTo">fadeTo</h3>

<div class="row">
	<div class="col-md-10"><pre><code>$(&quot;#descripcion&quot;).fadeTo(&quot;slow&quot;,0.5);

$(&quot;#descripcion&quot;).fadeTo(&quot;slow&quot;,1);	</code></pre></div>
	<div class="col-md-2"><?= getRes('ejemplo','ex/3-fadeto/index.html', 'fadeTo',4) ?></div>
</div>






<h3 id="toggle">toggle</h3>

<div class="row">
	<div class="col-md-10"><pre><code>$(&quot;#capaRoja&quot;).toggle(&quot;slow&quot;);</code></pre></div>
	<div class="col-md-2"><?= getRes('ejemplo','ex/4-toggle/index.html','toggle',4) ?></div>
</div>





<h3 id="animate">Animate</h3>

<div class="row">
	<div class="col-md-10"><pre><code>$(&quot;#capaRoja&quot;).animate({height:&quot;800px&quot;},500);

$(&quot;#capaRoja&quot;).animate({height:&quot;800px&quot;,width:&quot;800px&quot;},500);</code></pre>
</div>
	<div class="col-md-2"><?= getRes('ejemplo','ex/17-animate/index.html','animate',4) ?></div>
</div>




</div></article><article><div><h2 id="ejercicios-css">Ejercicios CSS</h2>

	<h3>Ejercicio</h3>
	

<div class="row">
	<div class="col-md-6">	<pre><code>Cambio del estilo de un elemento:		
$(&quot;#elemento&quot;).css(&quot;color&quot;,&quot;#ff0000&quot;);

Para aplicar varios modificadores a un &uacute;nico elemento:
$(&quot;div&quot;).css(&quot;background&quot;, &quot;blue&quot;).css(&quot;width&quot;,&quot;200px&quot;).css(&quot;height&quot;, &quot;400px&quot;);
$(&quot;div&quot;).css({&quot;background&quot; : &quot;blue&quot;, &quot;width&quot; : &quot;200px&quot; });</code></pre>

</div>
	<div class="col-md-6">
	<div class="centraditos">
					

					<?= getRes("video_premium", 223107744) ?>
											
					<?= getRes('ejemplo','ex/ejercicio-elementos-seleccionados/index.html', 'Ejercicio elementos seleccionados',4) ?>
					<?= getRes("video_premium", 223106699) ?>
					
					
										</div>
	</div>
</div>


	<h3>Ejercicio</h3>
					

	<div class="centraditos">
	<?= getRes("video_premium", 223108016) ?>
	<?= getRes('ejemplo','ex/elementos-seleccionados-usando-css/index.html','Elementos seleccionados usando CSS',4) ?>
	<?= getRes("video_premium", 223106708) ?>


</div>
	<p>Nota: un elemento "span" es una capa (div) alineada con el texto.</p>

	</div></article><article><div><h2 id="slider">Slider</h2>
<article><div>

<div class="centraditos">
						<?= getRes("video_premium", 223108139) ?>
<?= getRes("recurso","ex/tuxes.zip","Descargar recursos") ?>



						<?= getRes("video_premium", 223108174) ?>
	<?= getRes('ejemplo','ex/sara/inicio/index.html', 'Slider 1', 3) ?>

</div>
<h3>Ejercicio, con un solo botón <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h3>
						

<div class="centraditos">
<?= getRes("video_premium", 223108147) ?>

<?= getRes('ejemplo','ex/sara/un-solo-boton/index.html', 'Slider 2',3) ?>
<?= getRes("video_premium", 223108155) ?>

</div>
<h3>Ejercicio, con efecto <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h3>
<div class="centraditos">
<?= getRes("video_premium", 223108172) ?>
		
						<?= getRes('ejemplo','ex/sara/con-efecto/index.html','Slider 3',3) ?>
						<?= getRes("video_premium", 223108182) ?>

												</div>
<pre>Pista: <code>$(&quot;.capa:nth-child(&quot;+elemento+&quot;)&quot;).css(&quot;opacity&quot;, 1).css(&quot;transform&quot;,&quot;scale(1)&quot;);</code></pre>

<h3>Ejercicio, sin definir número de elementos <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h3>
<div class="row">
<?= getRes("video_premium", 223108207) ?>

<?= getRes('ejemplo','ex/sara/sin-definir-numero-de-elementos/index.html','Slider 4',3) ?>

<?= getRes("video_premium", 223108211) ?>

</div>
<pre>Pista:<code>var numero_elementos = $("#layers .capa").length;</code></pre>


<h3>Slider que avanza automáticamente <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h3>
<pre>Pista <code>setInterval(avanza, 1000);</code></pre>

<div class="centraditos">
<?= getRes("video_premium", 223108647) ?>

<?= getRes('ejemplo','ex/sara/movimiento-automatico/index.html', 'Slider 5',3) ?>
<?= getRes("video_premium", 223108650) ?>

</div>



<h3>Con cambio de dirección <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h3>

<div class="row">
	<div class="col-md-6">
	<div class="centraditos">
<?= getRes("video_premium", 223108656) ?>

<?= getRes('ejemplo','ex/sara/direccion-contraria/index.html', 'Slider 6',3) ?>


</div>
	</div>
	<div class="col-md-6">
	<pre>Pista<code>if(contador>=n-1|| contador &lt;1){
	signo = signo*(-1);
}</code></pre>
	</div>
</div>


	</div></article><article><div><h2 id="attr">Método attr</h2>

<?= getRes("video_premium", 223108660) ?>
<p>Añadir un atributo</p>
	<pre><code>$(&quot;#elemento&quot;).attr(&quot;href&quot;,&quot;https://pablomonteserin.com/&quot;)</code></pre>
	
	<div class="row">
		<div class="col-md-6">
		<p>Eliminar un atributo:</p>


<pre><code>$(&quot;#elemento&quot;).removeAttr(&quot;href&quot;);</code></pre>

		</div>
		<div class="col-md-6">
<p>Recuperar el valor de un atributo:</p>
<pre><code>var valor = $(&quot;#elemento&quot;).attr(&quot;href&quot;);</code></pre></div>
	</div>
	

	
<h3 id="ejercicioattr">Ejercicio attr()</h3>

<div class="centraditos">
<?= getRes("video_premium", 223109831) ?>

<?= getRes('ejemplo','ex/metodo-attr/index.html', 'Método attr',3) ?>
<?= getRes("video_premium", 223108674) ?>


</div>
<h3 id="ejercicioattrconcontador">Ejercicio attr con contador</h3>
<p>Cada vez que hacemos click sobre el botón la imagen cambia, así hasta el infinito.</p>

<div class="centraditos">
<?= getRes("video_premium", 223108687) ?>

<?= getRes('ejemplo','ex/metodo-attr-con-estados/index.html', 'Método attr con estados',4) ?>
<?= getRes("video_premium", 223108693) ?>


</div>
<h3 id="ejercicioimagenaleatoria">Ejercicio imágen aleatoria</h3>
<p>Al pulsar el botón, cambiar la imágen por una aleatoria.</p>

<div class="centraditos">
<?= getRes("video_premium", 223109994) ?>

<?= getRes('ejemplo','ex/imagen-aleatoria/index.html', 'Ver ejercicio imagen aleatoria',4) ?>
<?= getRes("video_premium", 223110164) ?>

</div>
<h3>$(this)</h3>

<div class="centraditos">
<?= getRes("video_premium", 223110037) ?>

	<?= getRes('ejemplo','ex/seleccion-elementos-por-tipo-elementos/index.html', 'Selección de elementos por tipo',4) ?>
	</div>
<h3 id="ejercicioimagensecreta">Ejercicio imagen secreta <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h3>
<p>Una imagen es escogida aleatoriamente. Esta imagen aparecerá inicialmente en pantalla. Hay otras tres imágenes pulsables. El juego consiste en pulsar una imagen y evaluar si esa es la imágen que se vé inicialmente</p>
<p>Este ejercicio se puede descomponer en tres fases:</p>
<ol>
	<li>La imagen que queremos descubrir no es es aletoria.</li>
	<li>La imagen que queremos descubrir es aleatoria, pero no usaremos arrays. Para ello, los nombres de las fotografías serán 0.jpg, 1.jpg y 2.jpg, etc.</li>
	<li>La imagen que queremos decubrir será aleatoria y usaremos arrays. No es posible calcular una palabra (un nombre de fotografía) aleatoria. Cuando queremos generar un número aleatorio usamos Math.random. Si queremos generar una palabra aleatoria, usaremos Math.random como indice de un array.</li>
</ol>
<div class="centraditos">
<?= getRes("video_premium", 223114258) ?>

<?= getRes("recurso","ex/tuxes.zip","Descargar recursos") ?>



<?= getRes("video_premium", 223110004) ?>

<?= getRes('ejemplo','ex/juego-jquery/index.html', 'Juego imágenes jQuery',3) ?>

</div>

		</div></article><article><div><h2 id="add-remove-has-class">addClass / removeClass / hasClass / toggleClass</h2>

<div class="row">
	<div class="col-md-6">
	<p>Asociar una clase</p>
<pre><code>$("#elemento").addClass("clase");</code></pre>
	</div>
	<div class="col-md-6">
	<p>Desasociar clase </p>
	<pre><code>$("#elemento").removeClass("clase");</code></pre>

	</div>
</div>

<div class="row">
	<div class="col-md-6">
	<p>Cambiar clase, si está, quitarlo, si no está, ponerlo</p>
<pre><code>$("#elemento").toggleClass("clase");</code></pre>

	</div>
	<div class="col-md-6">
	<p>¿Tiene clase?</p>
<pre><code>if($("#elemento").hasClass("clase")){alert("exito")}</code></pre>

	</div>
</div>




<?= getRes('ejemplo','ex/metodos-addclass/index.html','Métodos addClass',4) ?>

<h3 id="animatecss">Ejercicio - animate.css</h3>
<p>Usando addClass, hacer que al pulsar un botón este coja los estilos necesarios y suministrados por la librería <a target="_blank" href="https://daneden.github.io/animate.css/">animate.css</a> para que se produzca la animación correspondiente</p>
<p>Para que funcione, habrá que añadir el class <span class="black bold">animated</span> y el class correspondiente a la animación que queremos emplear y que podemos consultar en <a target="_blank" href="https://daneden.github.io/animate.css/">animate.css</a>.</p>

<div class="centraditos">
<?= getRes("video_premium", 223121411) ?>

<?= getRes('ejemplo','ex/animate-css/index.html','Ver ejercicio animate.css resuelto' ,3) ?>
<?= getRes("video_premium", 223121530) ?>

</div>
<p>Si queremos que pasado un tiempo se elimine el class, usaremos la función timeOut</p>
<pre><code>setTimeout( function(){
	$(&quot;#rojo&quot;).removeClass('animated bounce');
}, 2000);</code></pre>

<p>Si queremos que el class se elimine cuando la animación ha concluído, usaremos:</p>
<pre><code>$("#rojo").one("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){ 
	$("#rojo").removeClass("animated bounce");
});</code></pre>
<h4 id="ejerciciohamburguer">Ejercicio menú hamburguer</h4>

<pre><code>if($("#elemento").hasClass("clase")){...}</code></pre>
<div class="row">
<?= getRes("video_premium", 223110048) ?>

<?= getRes('ejemplo','ex/hamburguer/index.html', 'Hamburguer',3) ?>
<?= getRes("video_premium", 223122132) ?>

</div>

	</div></article><article><div><h2 id="accesos">Accesos al hijo, al padre y al hermano</h2>


<h3 id="closest">closest();</h3>
<?= getRes("video_premium", 223122485) ?>

<ul>
	<li>closest() devuelve la primera coincidencia envolviendo al elemento indicado (en este caso $(this)). </li>
	<li>parent() devuelve el elemento inmediatamente por encima, sólo si este coincide con el selector especificado.</li>
	<li>parents() devuelve todas las coincidencias por encima del elemento indicado.</li>
</ul>

<pre><code>&lt;script type=&quot;text/javascript&quot; src=&quot;jquery-1.8.2.min.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
$(document).ready(function(){
	$(&quot;#boton&quot;).click(function(){
		alert($(this).closest(&quot;div&quot;).attr(&quot;id&quot;));
	});
	$(&quot;#boton1&quot;).click(function(){
		alert($(this).parent(&quot;#capaIntermedia&quot;).attr(&quot;id&quot;));
	});
	$(&quot;#boton2&quot;).click(function(){
		alert($(this).parents(&quot;div&quot;).eq(2).attr(&quot;id&quot;));
	});
});
&lt;/script&gt;
&lt;div id=&quot;wrapper&quot;&gt;
	&lt;div id=&quot;capaIntermedia&quot;&gt;
		&lt;div id=&quot;capaMasInterna&quot;&gt;
			&lt;input type=&quot;button&quot; id=&quot;boton&quot;/&gt;
			&lt;input type=&quot;button&quot; id=&quot;boton1&quot;/&gt;
			&lt;input type=&quot;button&quot; id=&quot;boton2&quot;/&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
<?= getRes('ejemplo','ex/closest/index.html','Closest',3) ?>



	<h3 id="find">find</h3>

	<div class="row">
		<div class="col-md-10">
			
	<p>Busca el input type="radio" y cambia su propiedad checked a true.</p>
	<pre><code>$(this).find('input:radio').prop('checked', true);</code></pre>

		</div>
		<div class="col-md-2"><?= getRes("video_premium", 223122146) ?></div>
	</div>
	


<h3 id="ejerciciosfilas">Ejercicio filas</h3>
<p>Al pulsar sobre una fila, esta se colorea y se marca el radio button correspondiente a la fila pulsada.</p>




<div class="centraditos">
<?= getRes("video_premium", 223122141) ?>

<?= getRes('ejemplo','ex/rows-radio/index.html','Filas con radios',4) ?>
<?= getRes("video_premium", 223122681) ?>


</div>
<h3 id="siblings">siblings()</h3>
<p>Al contrario que closest(), que devuelve el elemento situado por encima, siblings() devuelve el elemento ubicado al lado.</p>
<pre><code>$(this).siblings("input").val()</code></pre>




<h3 id="mezclarclosest">Mezclar closest() con siblings()</h3>
	<?= getRes("video_premium", 223122159) ?>
	<p>La siguiente línea me devolverá el value de la select situada al lado del span que está envolviendo al elemento con el que acabo de interactuar.</p>
<pre><code>$(this).closest(&quot;span&quot;).siblings(&quot;select&quot;).val();</code></pre>
<?= getRes('ejemplo','ex/sibilings/index.html', 'Siblings',4) ?>


	</div></article><article><div><h2 id="bucle">Bucle</h2>


	<div class="row">
		<div class="col-md-10">
		<pre><code>var $filas = $(&quot;table tr&quot;);
$filas.each(function() {
	alert($(this).html());
});</code></pre>
		</div>
		<div class="col-md-2"><?= getRes("video_premium", 223122161) ?></div>
	</div>
		
	


<h3 id="tipo_test">Ejercicio tipo test con bucle</h3>

<div class="centraditos">
<?= getRes("video_premium", 223122171) ?>

		<?= getRes('ejemplo','ex/cuestionario/index.html','Ver cuestionario resuelto',4 ) ?>
		<?= getRes("video_premium", 223123266) ?>


</div>
<p>Para recorrer todos los radios que estan marcados usaremos:</p>
<pre><code>$("input[type=radio]:checked")</code></pre>



<h3 id="presupuesto">Ejercicio presupuesto <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h3>

<div class="centraditos">
<?= getRes('ejemplo','ex/formulario-foreach/index.html', 'Formulario foreach',4) ?>

<?= getRes("video_premium abierto", 'jlwPHQyzbn0'. 'Ver video') ?>

</div>

<h3 id="carta_recomendacion">Ejercicio carta de recomendacion <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h3>
<div class="row">
<?= getRes("video_premium", 223123305) ?>

								<?= getRes('ejemplo','ex/formulario-foreach-diferentes-cartas-presentacion/index.html','Verlo funcionando') ?>
								<?= getRes("video_premium", 223123323) ?>

								</div>
<p>A continuación te facilito los textos que puedes usar. No hace falta que los uses todos; con tres de cada categoría, sirve</p>
<h4>Motivo</h4>
<ul>
	<li>Cuento con varios años de experiencia muy sólida como profesional por lo cual me creo capacitad@ para asumir las responsabilidades del puesto que ustedes anuncian. </li>
	<li>En relación al anuncio publicado donde solicitaban un profesional para su empresa, les presento mi candidatura. </li>
	<li>El pasado día del mes corriente, se publicó una oferta de trabajo en la que se hacía constar que necesitaban cubrir un puesto de trabajo. </li>
	<li>En respuesta a su anuncio aparecido en el periódico , me es grato manifestarle mi interés por el puesto .</li>
	<li>Me dirijo a ustedes con el fin de ofrecerles mis servicios profesionales.</li>
	<li>En relación al anuncio de referencia tengo el gusto de enviarle mi currículo ya que, como verá en el mismo, creo reunir todos los requisitos para el puesto de trabajo que quieren cubrir. </li>
	<li>Me pongo en contacto con ustedes para manifestarles mi interés por el puesto de trabajo que solicitaban. </li>
	<li>Me dirijo a ustedes para hacerles constar mi interés por desarrollar mi futuro profesional en su empresa. </li>
	<li>Sería de mi agrado poderme integrar en aquella actividad que me permita continuar con lo ya aprendido.</li>
</ul>
<h4>Medallas</h4>
<ul>
	<li>Como he reseñado en el historial adjunto, aunque solo cuento años de experiencia, confío en mi afán de de superación para llegar a poseer un dominio completo de la profesión. Creo contar con las aptitudes necesarias para poder aportar beneficios muy positivos a su organización.</li>
	<li>Debido a mis cualidades personales y mi experiencia, me considero capacitado para desempeñar ese trabajo. </li>
	<li>Me adapto con facilidad al trabajo en equipo y baso mi actuación `profesional en una relación duradera y de confianza con la empresa. </li>
	<li>El puesto que ustedes ofrecen coincide plenamente con mis objetivos profesionales y constituye para mi un reto profesional, qué trataré de llevar a cabo con todo entusiasmo, para mutuo beneficio.</li>
	<li>Considero que mis características de formación y experiencia puedan corresponder con las de su anuncio y me complazco en enviarles mi CV para su consideración. </li>
	<li>Por mi formación y por mi entusiasmo en desarrollar al máximo mi carrera profesional, espero ser un firme candidato para cubrir el puesto que se ofrece. </li>
	<li>Mis aspiraciones profesionales se dirigen profesionalmente hacia sectores donde mi formación y experiencia podrían consolidarse. Tengo plena disponibilidad para cambios de residencia y viajes. </li>
	<li>Tanto el interés por ampliar mi carrera profesional, como mi capacidad de trabajo y responsabilidad, pueden resultar de utilidad para una empresa consolidada como la suya. </li>

</ul>

<h4>Objetivo</h4>
<ul>
	<li>Agradecería la oportunidad de poder presentarme ante ustedes para contestar cualquier pregunta y ampliar lo resumido en mi historial.</li>
	<li>Les agradecería me dejasen formar parte del proceso de selección. </li>
	<li>Por todo ello espero que tenga en cuenta mi candidatura ante cualquier necesidad futura se ponga en contacto conmigo. </li>
	<li>Desearía formar parte del proceso de selección, y quedo a su disposición para mantener una entrevista personal si lo estiman oportuno. </li>
	<li>Espero se pongan en contacto conmigo para poderles ampliar mi datos en una entrevista personal. </li>
	<li>Por todo ello, creo reunir los requisitos que mencionan para el futuro ocupante del puesto, deseando poder formar parte del proceso de selección. </li>
	<li>Esperando comentar con usted en una próxima entrevista mi historial profesional, aprovecho la ocasión para saludarle atentamente. </li>
</ul>

<h4>Despedida</h4>
<ul>
	<li>Un cordial saludo.</li>
	<li>En espera de sus noticias y sin otro particular.</li>
	<li>Aprovecho la ocasión para agradecerle el interés que ha manifestado por mi candidatura. Atentamente.</li>
	<li>Muy atentamente.</li>
	<li>Atentamente.</li>
	<li>A la espera de recibir noticias suyas, les saluda atentamente.</li>
	<li>Agradeciéndoles la atención restada , se despide atentamente.</li>
</ul>

	</div></article><article><div><h2 id="filtro">Hacer un filtro</h2>

<p>Al pulsar sobre un enlace, las capas de colores inferiores deben filtrarse en función del enlace pulsado. Para ello, recorreremos todas las capas, añadiendo o eliminando el class "oculta" en el caso de que el href (con #) del enlace coincida con alguno de los class de la capa</p>
							


<div class="row">
	<div class="col-md-6">
	<p>Utilizaremos el siguiente código CSS:</p>
<pre><code>.oculta{
	overflow:hidden;
	animation: ocultar 0.5s;
	animation-fill-mode: forwards
}

@keyframes ocultar{
	to{
		width: 0;
		height: 0;
		margin: 0;
		border:0;
	}
}</code></pre>
	</div>
	<div class="col-md-6">
<div class="centraditos">
<?= getRes("video_premium", 223123329) ?>
<?= getRes('ejemplo','ex/filtro/index.html','Ver ejercicio filtro' ,3) ?>
<?= getRes("video_premium", 223123338) ?>


</div></div>
</div>


	</div></article><article><div><h2 id="menus">Menús</h2>

<h3 id="menu_desaparece">Menú que desaparece al hacer scroll down</h3>


<div class="row">
	<div class="col-md-6">
	<pre><code>var $mywindow = $(window);
var mypos = $mywindow.scrollTop();
$mywindow.scroll(function() {
	if($mywindow.scrollTop() > mypos){
		$('.site-header').fadeOut();
	}else{
		$('.site-header').fadeIn();
	}
	mypos = $mywindow.scrollTop();
});</code></pre>

	</div>
	<div class="col-md-6">
	<div class="centraditos">
	<?= getRes("video_premium", 223123371) ?>

<?= getRes('ejemplo','ex/menu-opacity/index.html', 'Ver ejercicio de menú que desaparece resuelto',3) ?>
</div>
	</div>
</div>

	<h3 id="menu_solapa_arriba">Ejercicio - Menú que se solapa arriba</h3>


	<div class="row">
		<div class="col-md-7"><pre><code>$(window).scroll(function(){

});

var scrollTop = $(window).scrollTop();

distanciaInicial = $('.nav').offset().top;

<span class="green">//Si scrollTop es mayor que la distancia inicial añado un class para pegar el menú arriba</span></code></pre></div>
		<div class="col-md-5">
			

<div class="centraditos">
<?= getRes("video_premium", 223123384) ?>

<?= getRes('ejemplo','ex/menu-collapse/index.html', 'Ver ejercicio resuelto',3) ?>
<?= getRes("video_premium", 223123994) ?>

	</div>


		</div>
	</div>


	</div></article><article><div><h2 id="metodo-text-html">text() y html()</h2>


<p>Para devolver el texto contenido en el cuerpo de un elemento:</p>
<pre><code>alert($(&quot;#elemento&quot;).text());</code></pre>


<p>Para escribir una cadena de texto en el cuerpo de un elemento:</p>
<pre><code>$(&quot;#elemento&quot;).text(&quot;cadena&quot;);</code></pre>

<div class="centraditos">
<?= getRes("video_premium", 223124004) ?>

<?= getRes('ejemplo','ex/metodos-text/index.html','Métodos text' ,4) ?>

</div>
<h3 id="ejercicio-metodo-html">Ejercicio método HTML</h3>
<p>Crear una capa cuyo id será "wrapper".Tendré dos botones que harán las siguientes acciones:</p>
<ol>
	<li>Pintar una capa roja dentro de wrapper.</li>
	<li> Mostrar un alert con el código fuente que hay dentro de wrapper.</li>
</ol>

<p>Para escribir código HTML dentro de un elemento: <br>
<pre><code>$(&quot;#elemento&quot;).html(&quot;&lt;p&gt;bla bla bla&lt;/p&gt;&quot;);</code></pre>
</p>

<p>Para devolver el código HTML contenido en un elemento: </p>

<pre><code>$("#elemento").html();</code></pre>




<div class="centraditos">
<?= getRes("video_premium", 223124007) ?>

	<?= getRes('ejemplo','ex/metodos-text/index.html','Métodos HTML' ,3) ?>
	<?= getRes("video_premium", 223124012) ?>

</div>
		</div></article><article><div><h2 id="detectar-cuando-pulso-fuera">Detectar cuando pulso fuera de cierta capa</h2>


<pre><code>  window.addEventListener('click', function(e){   
      if (document.getElementById('amor').contains(e.target)){
      } else{
        amor.classList.remove('desplegado');
    }</code></pre>
	<div class="centraditos">
		<?= getRes("video_premium", 223124017) ?>
		<?= getRes('ejemplo','ex/pulso-fuera/index.html', 'Pulso fuera',3) ?>
</div>

		</div></article><article><div><h2 id="dom">DOM</h2>

		<div class="centraditos">
			<?= getRes("video_premium", 223124020) ?>
			<?= getRes('ejemplo','ex/dom-usando-capas/index.html','DOM usando capas' ,4) ?>

			</div>
	<p>Document Object Model</p>
<pre><code>&lt;meta http-equiv=&quot;content-type&quot; content=&quot;text/html; charset=iso-8859-1&quot;&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;jquery.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
$(document).ready(inicializarEventos);
function inicializarEventos(){
  $(&quot;#eliminarElementos&quot;).click(function(){
	$(&quot;div&quot;).empty();
  })
  $(&quot;#pintarCuadradoVerde&quot;).click(function(){
  	$(&quot;div&quot;).html(&quot;&lt;span id='rqr' style='float:left; background-color:green; width:50px; height:30px'&gt;&lt;/span&gt;&quot;);
  });
  $(&quot;#anadirElementoAlFinal&quot;).click(function(){
	$(&quot;div&quot;).append(&quot;&lt;span style=' float:left; background-color:blue'&gt;texto al final&lt;/span&gt;&quot;);
  });
  $(&quot;#anadirElementoAlPrincipio&quot;).click(function(){
	$(&quot;div&quot;).prepend(&quot;&lt;span style='float:left; background-color:green'&gt;texto al pricipio&lt;/span&gt;&quot;);  
  });
  /*Mediante el m&eacute;todo eq (equal) indicamos la posici&oacute;n del elemento que vamos a borrar*/

  $(&quot;#eliminarUltimoElemento&quot;).click(function(){
	$(&quot;span&quot;).eq( $(&quot;span&quot;).length-1 ).remove();  
  });
  $(&quot;#eliminarPrimerElemento&quot;).click(function(){
  	$(&quot;span&quot;).eq(0).remove();
  });
}
&lt;/script&gt;

&lt;h2&gt;M&eacute;todos para manipular nodos del DOM con jQuery.&lt;/h2&gt;
&lt;div style=&quot;background-color:red; width:400px; height:200px&quot;&gt;
&lt;/div&gt;
&lt;input type=&quot;button&quot; id=&quot;eliminarElementos&quot; value=&quot;Eliminar elementos de la lista&quot;&gt;&lt;br/&gt;
&lt;input type=&quot;button&quot; id=&quot;pintarCuadradoVerde&quot; value=&quot;Pintar cuadrado verde&quot;&gt;&lt;br/&gt;
&lt;input type=&quot;button&quot; id=&quot;anadirElementoAlFinal&quot; value=&quot;A&ntilde;adir un elemento al final&quot;&gt;&lt;br/&gt;
&lt;input type=&quot;button&quot; id=&quot;anadirElementoAlPrincipio&quot; value=&quot;A&ntilde;adir un elemento al principio&quot;&gt;&lt;br/&gt;
&lt;input type=&quot;button&quot; id=&quot;eliminarUltimoElemento&quot; value=&quot;Eliminar el &uacute;ltimo elemento.&quot;&gt;&lt;br/&gt;
&lt;input type=&quot;button&quot; id=&quot;eliminarPrimerElemento&quot; value=&quot;Eliminar el primer elemento.&quot;&gt;</code></pre>


	</div></article><article><div><h2 id="plugins">Plugins</h2>


<h3 id="monteserinGallery">Monteserín Gallery</h3>
<p>Descargar <a target="_blank" href="https://pablomonteserin.com/curso/cosines/monteserin-gallery/js/monteserinGallery.js">monteserinGallery.js</a> y atendiendo a la documentación del enlace, reproducirlo con nuestras propias fotos. </p>
<p><a  target="_blank" href="https://pablomonteserin.com/monteserin-gallery/ ">Ver monteserin gallery </a> </p>
	

<h3 id="kwicks">
	Kwicks
</h3>
<p><a target="_blank" href="http://www.jeremymartin.name/projects.php?project=kwicks">Enlce a kwicks</a></p>
<p><span class="font-weight-bold">Ejercicio</span>: implementar el plugin kwicks para que muestre tres pestañas con la siguiente apariencia:</p>

<?= getRes('ejemplo','ex/kwicks/index.html','kwicks',3) ?>


<h3 id="lightbox">LightBox 2</h3>
<p><a  target="_blank" href="http://www.lokeshdhakar.com/projects/lightbox2">Plugin lightbox</a></p>
<p>Descargar este plugin y echarlo a andar siguiendo su documentación.</p>

<h4>Notas:</h4>
<p>- Para que la fotografía no se vea a pantalla completa cuando pulsemos sobre su link es necesario que el documento tenga un doctype. Además, la librería de javascript debe cargarse justo antes del cierre del body.</p>
<pre><code>&lt;!DOCTYPE html&gt; </code></pre>
<p>- La carga de jQuery y del plugin, debe estar justo antes del cierre del body.</p>
<?= getRes('ejemplo','ex/lightbox/lightbox.html','lightbox') ?>



<h3 id="photoinfo">Photo Info</h3>
	<?= getRes('ejemplo','ex/photo_info/index.html', 'jQuery photo info',3) ?>



<h3 id="otrosPlugins">Otros plugin jQuery</h3>

<ul>
<li><a  target="_blank" href="http://nnattawat.github.io/slideReveal/">Slide reveal</a>, hace aparecer un panel a un lado de la pantalla</li>
<li><a  target="_blank" href="https://github.com/rochestb/jQuery.YoutubeBackground">jQuery.youtubebackground</a></li>
	<li><a  target="_blank" href="http://tympanus.net/codrops/2013/04/19/responsive-multi-level-menu/">Menú responsive</a></li>
	<li><a  target="_blank" href="http://www.outsharked.com/imagemapster/">Mapa de imágenes</a></li>
	<li><a  target="_blank" href="https://css-tricks.com/snippets/jquery/smooth-scrolling/">Autoscroll</a></li>
	<li><a  target="_blank" href="http://www.turnjs.com/">Maquetación tipo revista</a></li>
	<li><a  target="_blank" href="http://prinzhorn.github.io/skrollr/">Skrollr Parallax</a>
<ul>
	<li><a href="ex/scrollr/index.html">Demo de scrollr.</a></li>
	<li><a href="ex/scrollr.zip">Descarga de scrollr</a></li>
	<li><a href="ex/scrollr/anchor-position-guide.pdf">Documentación de Scrollr .</a></li>
</ul>
		<br> Para determinar el momento en el que irán apareciendo las cosas, lo más fácil es tomar como referencia el límite superior de la página usando el atributo: data--100-top="estilo" (A 100 px de arriba hago cosas)</li>
	<li><a  target="_blank" href="http://www.jacklmoore.com/colorbox/">Color Box</a>: Para redimensionarlo podemos usar este código: <br>
	<pre><code>jQuery(&quot;.inline&quot;).colorbox({maxWidth:'25%', maxHeight:'25%'});</code></pre>
</li>
	<li><a  target="_blank" href="http://navnav.co/">NavNav</a></li>
	<li><a target="_blank" href="https://woocommerce.com/flexslider/">Flex slider</a></li>
	<li><a  target="_blank" href="http://nicinabox.com/superslides">SuperSlides (full screen slider)</a></li>

	
<li><a target="_blank" href="https://github.com/rendro/easy-pie-chart">Animated Pie Chart</a></li>
	
<li><a  target="_blank" href="http://jjcosgrove.github.io/jquery-aniview/">Aniview</a> Permite detonar animaciones cuando un elemento está a la vista. Para ello, deberemos cargar, además, la hoja de estilos de <a target="_blank" href="https://daneden.github.io/animate.css/">animate.css</a> y usar el siguiente código para inicializar:
<pre><code>$(function(){
	var options = {
		animateThreshold: 100
	};              
	$('.aniview').AniView(options);	
})</code></pre>
<p>Las animaciones que usaremos en el atributo data-av-animation="slideInRight", serán las de <a href="https://daneden.github.io/animate.css/" target="_blank">animate.css</a>.</p>
</li>
	<li><a href="http://www.idangero.us/sliders/swiper/">Swipe slider</a>: <br>

La documentación de este plugin está en este enlace: <br>
<a  target="_blank" href="http://www.idangero.us/sliders/swiper/">idangero</a> <br>
Aquí se indica que para cambiar el ancho y el alto del slider accedamos al estilo: <br>
<span class="red">.swiper-container, .swiper-slide </span> <br>
<br>
<p><span class="font-weight-bold">Nota importante: <br></span>Si en un mismo proyecto tenemos varios sliders, deberemos identificarlos de forma diferente al aplicar el script: </p>
<pre><code>var mySwiper1 = new Swiper('#page1 .swiper-container',{
		<span class="green">//Your options here:</span>
		mode:'horizontal',
		loop: true
		<span class="green">//etc..</span>
	});  
var mySwiper2 = new Swiper('#page2 .swiper-container',{
		<span class="green">//Your options here:</span>
		mode:'horizontal',
		loop: true
		<span class="green">//etc..</span>
	});</code></pre>

	</li>
</ul>


<a target="_blank" href="http://loading.io/">Imágenes vectoriales de precarga</a></div>

<h3 id="validacion-con-plugin">Validación con plugin</h3>
<a  target="_blank" href="http://jqueryvalidation.org/">http://jqueryvalidation.org</a>
<br><br>
<pre><code>&lt;script&gt;
  $(document).ready(function(){
    $(&quot;#myform&quot;).validate();
  });
&lt;/script&gt;

class=&quot;required number email url&quot;
minlength=&quot;5&quot; 
maxlength=&quot;5&quot;
equalTo=&quot;#idPassword&quot;</code></pre>


<h4>Ejercicio</h4>
<p class="red bold">Nota: el plugin requiere que todos los elementos tengan un name.</p>
<p>Todos los campos son requeridos.</p>
<p>Los campos edad y código postal deben contener valores numéricos.</p>
<p>No podremos poner más de 5 dígitos en código postal.</p>
<p>Los campos password deben visualizarse como asteriscos y para que todo valide correctamente la segunda ve que introducimos el password debemos poner el mismo valor que la primera vez.</p>
<p>El campo página web debe contener una URL.</p>
<p>Campo correo electrónico debe contener una dirección mail.</p>
<?= getRes('ejemplo','ex/validacion-sin-rules/index.html','Validation sin rules',4) ?>


<h4>Utilizando rules </h4>
<pre><code>$(document).ready(function(){
	$(&quot;#myform&quot;).validate({
  	rules: { 	
    		fieldNombre:{//los name de los elementos
    			required:true
    		},
		&#x2026;
	},
	messages: {
  		fieldNombre: &quot;Por favor, inserte su nombre&quot;,
  		fieldEdad: {
			required: &quot;Por favor, inserte la edad&quot;,
			number: &quot;S&oacute;lo puedes introducir n&uacute;meros&quot;
		},
		...
	},
	submitHandler: function(){
    		alert(&quot;rqr&quot;);
    }
	});
});

rules
required:true,
number:true,
minlength:3,
maxlength:5,
min:300,
max:600
email:true
url:true
equalTo: "#password"</code></pre>



<h4>Ejercicio</h4>
<p class="red bold">Nota: el plugin requiere que todos los elementos tengan un name.</p>
<p>Todos los campos son requeridos.</p>
<p>Los campos edad y código postal deben contener valores numéricos.</p>
<p>No podremos poner más de 5 dígitos en código postal.</p>
<p>Los campos password deben visualizarse como asteriscos y para que todo valide correctamente la segunda ve que introducimos el password debemos poner el mismo valor que la primera vez.</p>
<p>El campo página web debe contener una URL.</p>
<p>Campo correo electrónico debe contener una dirección mail.</p>

<?= getRes('ejemplo','ex/validacion-con-rules/index.html', 'Validation con rules',4) ?>
</div></article>

<article><div>
<h2 id="validacion-formularios-sin-plugin">Validación de formularios sin plugin</h2>
	<h3>Validar si hay algo escrito</h3>
	<pre><code>if($(".required").val() == "")</code></pre>
	<?= getRes('ejemplo','ex/1-validar-si-hay-algo-escrito/index.html','Validar si hay algo escrito',4) ?>
	
	<h3>Validar si hay algo escrito II</h3>

	<pre><code>if($.trim($(&quot;.required&quot;).val()) == &quot;&quot;)</code></pre>
<?= getRes('ejemplo','ex/2-validar-si-hay-algo-escrito-trim/index.html','Validar si hay algo escrito con trim',4) ?>

	
<h3>Validar si es un número</h3>

<pre><code>if(isNaN($(&quot;.required&quot;).val()))</code></pre>
<?= getRes('ejemplo','ex/3-validar-si-es-un-numero/index.html','Validar si es un número',4) ?>

<h3>Validar mail I</h3>


<div class="row">
	<div class="col-md-10">
<p>Validar que hemos escrito un único carácter y que es una letra o un número.</p>
<p><span class="font-weight-bold">/^</span> y <span class="font-weight-bold">$/</span> delimitan el principio y el final de la cadena.</p>
<p><span class="font-weight-bold">\w</span> representa un único carácter, que puede ser una letra o un número.</p>

<pre><code>if(/^\w$/.test(valor))</code></pre>
</div>
	<div class="col-md-2">
	<?= getRes('ejemplo','ex/1-validar-mail/index.html', 'Validar mail',4) ?>
	</div>
</div>

	



	
	<h3>Validar mail II</h3>

<div class="row">
	<div class="col-md-10">
	<p>Validar que hemos escrito una cadena de caracteres que pueden ser letras o números.</p>
	<p><span class="font-weight-bold">\w+</span> representa una cadena de caracteres, que pueden ser una letra o un número.</p>
	<pre><code>if(/^\w+$/.test(valor))</code></pre>

	</div>
	<div class="col-md-2">
	<?= getRes('ejemplo','ex/2-validar-mail/index.html', 'Validar mail 2',4) ?>
	</div>
</div>


			




	<h3>
Validar mail III	
	</h3>
	<p>Validar que hemos escrito una cadena de caracteres que pueden ser letras o números seguida de un punto o un guión</p>
	<p><span class="font-weight-bold">[\.-]</span> representa un punto o un guión.</p>
	<pre><code>if (/^\w+[\.-]$/.test(valor)){</code></pre>
	<?= getRes('ejemplo','ex/3-validar-mail/index.html', 'Validar mail 3',4) ?>

	

	<h3>Validar mail IV</h3>
	<p>Validar que hemos escrito una cadena de caracteres que pueden ser letras o números seguida de un punto o un guión, seguidos de más letras o números.</p>
<pre><code>if (/^\w+[\.-]\w+$/.test(valor)){</code></pre>
<?= getRes('ejemplo','ex/4-validar-mail/index.html','Validar mail 4',4) ?>


<h3>Validar mail V</h3>

<p>Validar que hemos escrito una cadena de caracteres que pueden ser letras o números.</p>
<p>Luego puede haber escrita una sucesión de punto o guión seguidos de más letras o números, tantas veces como sea necesario</p>
<pre><code>if (/^\w+([\.-]\w+)*$/.test(valor)){</code></pre>
<?= getRes('ejemplo','ex/5-validar-mail/index.html','Validar mail 5',4) ?>


<h3>Validar mail VI</h3>

<div class="row">
	<div class="col-md-10"><p>Validar que se cumplen todas las condiciones anteriores y que después hay escrita una Arroba.</p>
<pre><code>if (/^\w+([\.-]\w+)*@$/.test(valor)){</code></pre></div>
	<div class="col-md-2"><?= getRes('ejemplo','ex/6-validar-mail/index.html','Validar mail 6',4) ?>
</div>
</div>


<h3>Validar mail VII - Ejercicio</h3>

<div class="row">
	<div class="col-md-10">
	<p>Construir la validación para el dominio, teniendo en cuenta que deberá empezar por letras o números y luego puede tener un punto o un guión y más letras, luego tiene una arroba y luego texto seguido de una o varias sucesiones de un punto o guión y Texto.</p>
	</div>
	<div class="col-md-2"><?= getRes('ejemplo','ex/7-ejercicio-dominio/index.html', 'validar mail 7',4) ?></div>
</div>



<h3>Validar fechas I</h3>

<div class="row">
	<div class="col-md-10"><p>Guardamos cada parte que compone la fecha en una variable diferente.</p>
<pre><code>function validarFecha() {
	var cadena = $(&quot;#fecha&quot;).val();
	var dia = cadena.substring(0, cadena.indexOf(&quot;/&quot;));
	var mes = cadena.substring(cadena.indexOf(&quot;/&quot;) + 1, cadena.lastIndexOf(&quot;/&quot;));
	var anio = cadena.substring(cadena.lastIndexOf(&quot;/&quot;) + 1, cadena.length);
}</code></pre></div>
	<div class="col-md-2">
	<?= getRes('ejemplo','ex/1-validar-fechas/index.html','Validar fechas 1',4) ?>
	</div>
</div>




<h3>Validar fechas II</h3>

<div class="row">
	<div class="col-md-10"><p>Comprobamos que los días, meses y años tomen valores posibles.</p>
<pre><code>function validarFecha() {
	var cadena = $(&quot;.required&quot;).val();
	var dia = cadena.substring(0, cadena.indexOf(&quot;/&quot;));
	var mes = cadena.substring(cadena.indexOf(&quot;/&quot;) + 1, cadena.lastIndexOf(&quot;/&quot;));
	var anio = cadena.substring(cadena.lastIndexOf(&quot;/&quot;) + 1, cadena.length);

	if(isNaN(anio) || anio.length != 4 || parseFloat(anio) &lt; 1900)
		alert(&quot;valor del a&ntilde;o incorrecto&quot;);
	if(isNaN(mes) || parseFloat(mes) &lt; 1 || parseFloat(mes) &gt; 12)
		alert(&quot;valor del mes incorrecto&quot;);
	if(isNaN(dia) || parseFloat(dia) &lt; 1 || parseFloat(dia) &gt; 31)
		alert(&quot;valor del d&iacute;a incorrecto&quot;);
}</code></pre>

</div>
	<div class="col-md-2"><?= getRes('ejemplo','ex/2-validar-fechas/index.html', 'Validar fechas 2',4) ?></div>
</div>


<h3>Validar fechas III</h3>
<p>A los condicionales que ya teníamos añadir otro que evalúe si los meses 4, 6, 8 y 11 no tienen más de 30 días y otro que evalúe que el mes 2 no tenga más de 29 días.</p>
<?= getRes('ejemplo','ex/3-ejercicio-validar-fechas/index.html','Validar fechas 3',4) ?>



<h3>Validar un formulario entero</h3>

<div class="row">
	<div class="col-md-10">
	<p>Cuando el cuadro de texto pierda el foco, llamaremos a las siguientes funciones, según el caso:</p>
<pre><code>contieneValor();
soloNumeros();
cincoNumeros();
validarFecha();
validarMail();</code></pre>

	</div>
	<div class="col-md-2">
	<?= getRes('ejemplo','ex/6-ejercicio-validar-formulario-sin-repaso-final/index.html', 'Validar formulario',4) ?>
	</div>
</div>



<h3>Validar al enviar</h3>

<div class="row">
	<div class="col-md-6">
	<pre><code>function validacionFinal() {
	var formularioValido = true;
	var objetosValidacion = $(&quot;.required&quot;);
	objetosValidacion.push($(&quot;.numero&quot;));
	objetosValidacion.push($(&quot;.fiveDigits&quot;));
	objetosValidacion.push($(&quot;.fecha&quot;));
	objetosValidacion.push($(&quot;.mail&quot;));
	objetosValidacion.each(function(i) {
		if($(this).attr(&quot;valido&quot;) != &quot;true&quot;) {
			formularioValido = false;
			return false;
		}
	});
	if(formularioValido == false) {
		alert(&quot;Revise el formulario, hay datos incorrectos&quot;);
	} else {
		alert(&quot;Eviando formulario...&quot;)
	}
}</code></pre>
	</div>
	<div class="col-md-6">
		
	<pre><code>function contieneValor() {
	if($(this).val() == &quot;&quot;) {
		pintarError($(this), &quot;El campo debe contener un valor.&quot;);
	} else {
		limpiar($(this));
	}
}
function pintarError(elemento, msg) {
	elemento.css(&quot;background&quot;, &quot;salmon&quot;);
	elemento.next().html(msg);
	elemento.attr(&quot;valido&quot;, &quot;false&quot;);
}
function limpiar(elemento) {
	elemento.css(&quot;background&quot;, &quot;PaleGreen&quot;);
	elemento.next().html(&quot;&quot;);
	elemento.attr(&quot;valido&quot;, &quot;true&quot;);
}</code></pre>
	</div>
</div>

	

<?= getRes('ejemplo','ex/7-ejercicio-validar-formulario-con-repaso-final/index.html', 'Validar formulario con repaso final',4) ?>


		</div></article><article><div><h2 id="buenas-practicas">Buenas prácticas con jQuery</h2>

	<h3>Refrescar el DOM sólo cuando sea necesario</h3>
	<pre><code>$('body').append('&lt;ul id=&#x201d;list&#x201d; &gt;&lt;/ul&gt;');
for(var i = 1; i&lt;100; i++){
	//cien llamadas al m&eacute;todo append
	$('#list').append('&lt;li&gt;' + i + '&lt;/li&gt;');
}

&#x2192; 

var list = '&lt;ul id=&#x201d;list&#x201d;&gt;';
for(var i = 1; i&lt;100; i++){
	list += '&lt;li&gt;' + i + '&lt;/li&gt;';
}
list += '&lt;/ul&gt;';
//una sola llamada al m&eacute;todo append
$('body').append(list);</code></pre>

	<h4>Evitar acceso repetido a objetos jQuery</h4>

	<pre><code>$(&#x201c;#main_menu&#x201d;).css(&#x201c;background&#x201d;,&#x201d;red&#x201d;);
$(&#x201c;#main_menu&#x201d;).css(&#x201c;color&#x201d;,&#x201d;blue&#x201d;);
$(&#x201c;#main_menu&#x201d;).css(&#x201c;width&#x201d;,&#x201d;200px&#x201d;);
$(&#x201c;#main_menu&#x201d;).css(&#x201c;height&#x201d;,&#x201d;300px&#x201d;);
&#x2192;
$main_menu = $(&#x201c;#main_menu&#x201d;);
$main_menu.css(&#x201c;background&#x201d;,&#x201d;red&#x201d;);
$main_menu.css(&#x201c;color&#x201d;,&#x201d;blue&#x201d;);
$main_menu.css(&#x201c;width&#x201d;,&#x201d;200px&#x201d;);
$main_menu.css(&#x201c;height&#x201d;,&#x201d;300px&#x201d;);</code></pre>

	</div></article><article><div><h2 id="crear-plugin">Cómo crear un plugin de jQuery con parámetros</h2>	


	<div class="row">
		<div class="col-md-6">
		<pre><span class="bold">index.html</span><code>&lt;script type=&quot;text/javascript&quot; src=&quot;jquery-1.8.2.min.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;<span class="red">plugin.js</span>&quot;&gt;&lt;/script&gt;

&lt;script type=&quot;text/javascript&quot;&gt;
$(document).ready(function(){
	$(&quot;#elemento&quot;).newMethod({
		<span class="blue">saludo</span>:&quot;Juan&quot;
	});
})
&lt;/script&gt;</code></pre>
		</div>
		<div class="col-md-6">
		<pre><span class="bold">plugin.js</span><code>jQuery.fn.newMethod = function(event){
	alert(&quot;hola &quot; + event.<span class="blue">saludo</span>);
	alert($(this).attr(&#x201c;id&#x201d;));
}</code></pre>
		</div>
	</div>
	


</div></article>
</main>
<?php 

});
include $path."/diapos_theme/footer.php";
?>