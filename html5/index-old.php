<?php 
$titulo_curso="HTML5";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	global $path;
	global $hashtag;
	global $indice;
	$tiene_intro=true; // usamos esta variable en body_init.php
	$hashtag = useHashtag();
	$antes= '<p>Este <strong>curso de HTML5</strong> contiene todo el conocimiento que he ido adquiriendo durante mis años de trabajo como maquetador web. Cada vez que me encontraba con algúna forma mejor de hacer las cosas, la documentaba en este curso para poder utilizarla a partir de ese momento y para poder impartirla en mis cursos de páginas web.</p>';
	$despues='<p>Si quieres dedicarte al desarrollo de páginas web o buscas una forma sencilla de crear una aplicación móvil, HTML5 es sin duda la primera tecnología que debes aprender.</p><p>HTML5 es la tecnología más versátil que existe para mostrar y consultar información. Si abandonas el papel y el lápiz para tomar apuntes y te pasas al código HTML5, podrás incrustar vídeos, audios, interactividades de cualquier tipo, y reproducir tu documentación en tu ordenador, imprimirla en papel, verla en tu teléfono móvil, compartirla por whats app...
No sólo aprendemos tecnologías web para optar a un trabajo cualificado. Lo hacemos porque es estimulante y porque nos ayuda en nuestro día a día. De forma sencilla, utilizando sólo HTML5 podrás :</p><ul><li>Tener los apuntes de clase o la documentación específica que necesitas para tu trabajo accesible desde cualquier sitio y para cualquier persona, con exactamente el diseño que necesitas.</li>
<li>Hacer tu currículum online con el diseño que tú decidas y disponer de él mediante una dirección de Internet que podrás compartir en cualquier momento.</li>
<li>Subir a internet el guión de una obra de teatro que estás estudiando para poder consultarla en cualquier momento.</li>
<li>Intentar ganar dinero mediante comisiones en Amazón cuando alguién compre un producto a gracias a una información que ha consultado en una página que tú has hecho.</li>
<li>Dar el primer paso en esta apasionante aventura que es el desarrollo tecnológico.</li></ul>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Curso de HTML 5",
  "description": "Curso de HTML5, desde nivel básico a avanzado. Llevo más de 12 años impartiendo, mejorando y actualizando el contenido de este curso.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Monteserín",
    "sameAs": ["https://www.facebook.com/pablomonteserincom/","https://www.linkedin.com/in/%E2%99%A5-pablo-monteser%C3%ADn-59079728/","https://www.youtube.com/user/PabloMonteserinTutor","https://twitter.com/monteserin1982"]
  }
}
</script>
';

$indice ='<ol>  
	<li><a href="/res/html5/'.$hashtag.'introduccion">Introducción</a></li>
	<li><a href="/res/html5/'.$hashtag.'estructura">Estructura de una página web</a></li>
	<li><a href="/res/html5/'.$hashtag.'comentarios">Comentarios</a></li>
	<li><a href="/res/html5/'.$hashtag.'encabezados-parrafos">Encabezados y párrafos</a></li>

	<li><a href="/res/html5/'.$hashtag.'imagenes">Imágenes</a></li>

	<li><a href="/res/html5/'.$hashtag.'enlaces">Enlaces</a></li>

			<li><a href="/res/html5/'.$hashtag.'video-audio">Video y audio</a></li>

	<li><a href="/res/html5/'.$hashtag.'listas">Listas</a></li>
<li><a href="/res/html5/'.$hashtag.'ejercicio-resumen-fundamentos-html">Ejercicio resumen de fundamentos de HTML</a></li>

	<li><a href="/res/html5/'.$hashtag.'iframes">iframes</a></li>
	<li><a href="/res/html5/'.$hashtag.'paginas-consulta">Páginas de consulta</a></li>
	<li><a href="/res/html5/'.$hashtag.'tablas">Tablas</a></li>
	<li><a href="/res/html5/'.$hashtag.'estilos-en-linea">Estilos en línea</a></li>
		<li><a href="/res/html5/'.$hashtag.'unidades-medida">Unidades de medida</a></li>

		<li><a href="/res/html5/'.$hashtag.'capas">Capas</a></li>

	<li><a href="/res/html5/'.$hashtag.'newsletter">Hacer una NewsLetter con HTML</a></li>
	<li><a href="/res/html5/'.$hashtag.'favicon">favicon</a></li>
	<li><a href="/res/html5/'.$hashtag.'hojas-estilos">Hojas de estilos</a></li>
		<li><a href="/res/html5/'.$hashtag.'selectores-css">Selectores CSS</a></li>

	<li><a href="#" class="hasChildren">Algunos estilos de CSS3</a>
<ol>
	<li><a href="/res/html5/'.$hashtag.'motores-navegacion-css3">Motores de navegación</a></li>
	<li><a href="/res/html5/'.$hashtag.'text-shadow">text-shadow</a></li>
	<li><a href="/res/html5/'.$hashtag.'border-radius">border-radius, box-shadow</a></li>
	<li><a href="/res/html5/'.$hashtag.'border-image">border-image</a></li>
	<li><a href="/res/html5/'.$hashtag.'background-centrado">Ejercicio - background centrado</a></li>

	<li><a href="/res/html5/'.$hashtag.'background-size">background-size</a></li>
	<li><a href="/res/html5/'.$hashtag.'multiple-background">Multiple Background & size</a></li>
	<li><a href="/res/html5/'.$hashtag.'background-transparency">background con rgba</a></li>
	<li><a href="/res/html5/'.$hashtag.'gradientes">Gradientes</a></li>
		<li><a href="/res/html5/'.$hashtag.'fuentes">Fuentes</a></li>		<li><a href="/res/html5/'.$hashtag.'columns">columns</a></li>
		<li><a href="/res/html5/'.$hashtag.'transition">Animaciones con transition</a></li>
<li><a href="/res/html5/'.$hashtag.'text-overflow">text-overflow</a></li>
<li><a href="/res/html5/'.$hashtag.'transform">transform</a></li>


</ol>

	</li>
	<li><a href="/res/html5/'.$hashtag.'gimp">GIMP</a></li>
		<li><a href="/res/html5/'.$hashtag.'display">display:block, inline, inline-block</a></li>
	<li><a href="/res/html5/'.$hashtag.'margin-collapse">Margin Collapse</a></li>
	<li><a href="/res/html5/'.$hashtag.'padding-width">padding y width</a></li>
	<li><a href="/res/html5/'.$hashtag.'ejercicios-maquetacion">Ejercicios de maquetación vertical</a></li>

	<li><a href="/res/html5/'.$hashtag.'newsletter-responsive">Hacer una newsletter responsive sin media queries</a></li>
	<li><a href="/res/html5/'.$hashtag.'img-vs-background">img vs background</a></li>
	<li><a href="/res/html5/'.$hashtag.'flexbox">Flexbox</a></li>
	<li><a class="hasChildren" href="#">Algunos tips</a>
<ol>
<li><a href="/res/html5/'.$hashtag.'pintar-color-fondo-linea">Pintar el color de fondo de una línea</a></li>


<li><a href="/res/html5/'.$hashtag.'incrustar-imagen">Incrustar una imagen</a></li>

<li><a href="/res/html5/'.$hashtag.'sangria-francesa">Sangría francesa (hanging intent)</a></li>

<li><a href="/res/html5/'.$hashtag.'capitalizar-letra">Capitalizar una letra</a></li>

<li><a href="/res/html5/'.$hashtag.'borrar-outline">Eliminar el borde (outline) del elemento activo</a></li>


<li><a href="/res/html5/'.$hashtag.'content-editable">contenteditable</a></li>

<li><a class="hasChildren" href="/res/html5/'.$hashtag.'soporte-textos-japoneses-coreanos">Soporte para textos asiáticos</a></li>
	<li><a href="/res/html5/'.$hashtag.'wbr">wbr - Word Break</a></li>

	</ol>
	</li>
	<li><a href="/res/html5/'.$hashtag.'ejercicios">Ejercicios de HTML</a></li>
	<li>Break! - gran día de repaso</li>
	<li><a href="/res/html5/'.$hashtag.'links-interes">Links de interés</a></li>
	<li><a href="/res/html5/'.$hashtag.'position">position</a></li>
	<li><a href="/res/html5/'.$hashtag.'opacidades">Opacidades</a></li>
	<li><a href="/res/html5/'.$hashtag.'popup-css">Popups con CSS</a></li>
	<li><a href="/res/html5/'.$hashtag.'galeria-fotos">Ejercicio - Galería de fotos</a></li>
	<li><a href="/res/html5/'.$hashtag.'navigation-bar">Navigation Bar</a></li>
	<li><a href="/res/html5/'.$hashtag.'important">!important</a></li>
	<li><a href="/res/html5/'.$hashtag.'paginas-reales">Páginas reales</a></li>
	<li><a href="/res/html5/'.$hashtag.'grid-layout">Grid Layout</a></li>
	<li><a href="/res/html5/'.$hashtag.'selectores-avanzados">Selectores avanzados de CSS</a></li>
	<li><a href="/res/html5/'.$hashtag.'definicion">HTML5: definición y ejemplos</a></li>
	<li><a href="/res/html5/'.$hashtag.'html5-vs-html4">HTML5 vs HTML4</a></li>
	
	<li><a href="/res/html5/'.$hashtag.'divs-semanticos">divs semánticos</a></li>
	<li><a href="/res/html5/'.$hashtag.'svg">svg</a></li>	
	<li><a href="/res/html5/'.$hashtag.'formularios">Formularios</a></li>
	<li><a href="/res/html5/'.$hashtag.'animaciones-css3">Animaciones con CSS3</a>
	</li>
	<li><a href="/res/html5/'.$hashtag.'responsive">Responsive design</a></li>
<li><a href="/res/html5/'.$hashtag.'mas-ejercicios-html">Más ejercicios de html</a></li>
	<li><a href="/res/html5/'.$hashtag.'error404">Página de error 404</a></li>
	<li><a href="/res/html5/'.$hashtag.'buscador-google">Insertar el buscador de google</a></li>
	<li><a href="/res/html5/'.$hashtag.'dominio-alojamiento">Dominio y alojamiento</a></li>
		<li><a href="/res/html5/'.$hashtag.'ejercicio-proyecto">Ejercicio - Proyecto</a></li>
		<li><a href="/res/html5/'.$hashtag.'clientes-proveedores">Ejercicio - Clientes y proveedores</a></li>

</ol>';
include $path."diapos_theme/body_init.php";
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
if(muestra('introduccion')){ ?>
<main class="curso">
	<h1 id="introduccion">Introducción</h1>
	<h2 >¿Qué es?</h2>
	<p>Es la tecnología con la que estás escritas las páginas web. Los navegadores son capaces de leer este lenguaje e interpretarlo para mostrar sus contenidos.</p>

	<?= getRes("video_premium abierto",221233844) ?>





<article>
	<h3 id="herramientas">Herramientas de desarrollo</h3>

		<h4>Editores</h4>

		<div style="display: inline-block;vertical-align: top; width: 45%">
			<h5 style="margin-left:60px;">Software libre</h5>
			<ul >
				<li>
					<a target="_blank" href="https://code.visualstudio.com/">Visual Studio Code</a> Proyecto open source de Microsoft
				</li>

				<li>
					<a target="_blank" href="https://atom.io/">Atom</a>
				</li>
				<li>
					<a target="_blank" href="https://notepad-plus-plus.org/">Notepad ++</a>
				</li>
				<li>
					<a target="_blank" href="https://eclipse.org/downloads/">Eclipse</a>
				</li>
				<li>
					<a target="_blank" href="http://www.aptana.com/">Aptana</a>
				</li>

				<li>
					<a target="_blank" href="http://www.kompozer.net/">Kompozer</a>
				</li>
				<li>
					<a target="_blank" href="https://pablomonteserin.com/curso/gimp/">GIMP</a>

				</li>

				<li>
					<a target="_blank" href="https://pablomonteserin.com/curso/links/">Firefox</a>

				</li>
				<li>
					<a target="_blank" href="https://www.google.com/chrome/">Google Chrome</a> (no es open source, pero sí gratuito)
				</li>
			</ul>
		</div><div style="display: inline-block; vertical-align: top; width: 45%">
			<h5 style="margin-left:60px;">Software de pago</h5>
			<ul>
				<li>
					<a target="_blank" href="https://pablomonteserin.com/sublime-text-la-guia-definitiva/">Sublime Text </a> (no es software libre aunque se puede usar gratuitamente)

				</li>

				<li>
					<a target="_blank" href="https://panic.com/coda/">Coda </a>(no es software libre, aunque se puede usar gratuitamente)
				</li>
				<li>
					<a target="_blank" href="https://www.peterborgapps.com/smultron/">Smultron </a> (no es software libre, aunque se puede usar gratuitamente)
				</li>
				<li>
					<a target="_blank" href="http://www.adobe.com/products/dreamweaver.html">Dreamweaver</a>

				</li>

				<li>
					<a target="_blank" href="http://muse.adobe.com/">Muse</a>

				</li>
				<li>
					<a target="_blank" href="https://www.jetbrains.com/webstorm/">Web storm</a>
				</li>



			</ul>
		</div>



		<h4>Prototipado</h4>
		<ul><li><a target="_blank" href="http://pencil.evolus.vn/" >http://pencil.evolus.vn/</a> Herramienta de prototipado libre, gratuita y
			Multiplataforma.</li>
			
<li><a target="_blank" href="http://appcooker.com" >http://appcooker.com</a> Herramienta de prototipado. Ejecuta sólo en ipad.
	
</li>			

<li><a target="_blank" href="https://codiqa.com/" >https://codiqa.com/</a> Habrá que pagar para obtener el código fuente</li>

</ul>
				<?= getRes("video_premium",221233849) ?>




			</article>


			<article>
				<h3  id="algunos_terminos">Algunos términos</h3>
				<h4>Páginas estáticas</h4>
				<p>
					El cliente solicita una página que se encuentra en el servidor y el servidor envía al cliente la página tal cual la tiene alojada, sin hacerle ninguna modificación en función de la petición del cliente o de cualquier otro parámetro.
				</p>
				<h4>html</h4>
				<ul>
					<li>Es un lenguaje de etiquetado.</li>
					<li>No es case sensitive.</li>
					<li>html vs htm</li>
				</ul>
				<h4>HTML vs Dreamweaver</h4>
									<?= getRes("video_premium",221233874) ?>

				<a target="_blank" href="http://www.indeed.com/jobtrends/q-dreamweaver-q-html.html">
					<img class="responsive" src="img/indeed.svg" alt="Pantallazo de indeed.com"></a>


				</article>
				<article>
					<h3 id="las_mejores_webs">Las mejores webs</h3>
					<p><a target="_blank" href="http://webbyawards.com/winners">Enlace a premios a las mejores webs</a></p>
				</article>
				<article >
					<h3 id="webx0">La web x.0</h3>

					<ul>
						<li><strong>1.0</strong>: la web 1.0 tenía un carácter principalmente divulgativo y unidireccional. Las empresas publicaban documentos eran difíciles de actualizar.</li>
						<li><strong>2.0</strong>: también denominada "la red social". El usuario inexperto también es una fuente de contenido. Se hacen blogs, wikis, foros, y redes sociales. Es una web colaborativa.</li>
						<li><strong>3.0</strong>: es la web semántica, la web de la nube, la web de las aplicaciones y la web multidispositivo que hace que "todos estemos conectados". Los tablets, smartphones, coches inteligentes, televisiones, neveras forman parte activa de esta web. </li>
					</ul>
										<?= getRes("video_premium",221234955) ?>

				</article>
						

	<article >
					<h3 id="mi_primera_web">Mi primera página web</h3>
					<div class="row">
					<?= getRes('ejemplo','ex/hola-mundo.html','Hola mundo', 1) ?>
					<?= getRes("video_premium",221233891) ?>
</div>
				</article>

						<article>
					<h3 id="sugerencia">La sugerencia que marca la diferencia</h3>

					<p>Estás apunto de comenzar una aventura. Una aventura que es tan apasionante como bien se te vaya a dar <span class="tachado">(quizás por eso a mucha gente no le resulta apasionante...)</span>. Te propongo una cosa. De ahora en adelante, haz tus apuntes de HTML y de las materias que estén por venir escribiendo el código en una página web. Haz tus apuntes de HTML escribiendo HTML!. Y cada vez que aprendas algo nuevo, añadelo. No hay ninguna guía mejor que la que te haces tu mismo.</p>
					<p>El papel y el lápiz son tan bonitos... pero mientras que no podamos hacer páginas web con ellos, mi recomendación es que tomes notas sobre como hacer páginas web haciendo páginas web.</p>
					<p>Así que ya sabes, cuando aprendas a meter imágenes... mete alguna!. Cuando aprendas a poner subyarados, negritas y colores... remarca lo importante. Cuando aprendas a meter enlaces... haz tu propia colección de enlaces de interés. Y así, hasta que realmente tengas unas apuntes tan prácticos y bonitos como estos (aunque si te presto mi foto, serán igual de bonitos :)</p>
					<img src="img/computer2.gif" alt="gif animado ordenador">

										<?= getRes("video_premium",221235750) ?>
				</article>

</main>

<?php
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('estructura')){ ?>

			<main class="curso">
				<h1 id="estructura">Estructura de un documento</h1>
				<article >
					
					<?= getRes("video_premium",221245884) ?>

					<img src="img/estructura_joke.svg" alt="broma sobre cómo estructurar una página html" class="top">
					<img src="img/estructura.svg" alt="estructura de una página html" class="top">

<pre><code class="html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;title&gt;&lt;/title&gt;
	&lt;/head&gt;

	&lt;body&gt;

	&lt;/body&gt;
&lt;/html&gt;</code></pre>


					<div class="notas">
						<h4>Notas:</h4>
						<ul>
							<li>
								El doctype le dice al navegador que tipo de información va a contener la página web (HTML4, XHTML 1.0, HTML5).
							</li>
							<li>
								Todo lo que hemos estado haciendo hasta ahora, iría dentro del body.
							</li>
						</ul>

					</div>

					<h2>DOCTYPE</h2>
					<p>
						EL HTML 4.01 Strict no permite marcado de presentación con el argumento de que debería usar CSS en su lugar para eso. Así es como el DOCTYPE Strict luce:
					</p>
					<pre><code>&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;

&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;

&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Frameset//EN&quot; &quot;http://www.w3.org/TR/html4/frameset.dtd&quot;&gt;</code></pre>


					<h2>Metaetiquetas de codificación del texto</h2>
					<p>
						Las etiquetas meta contienen información relativa al documento web.
					</p>

					<pre><code><strong>Para HTML5:</strong>
&lt;meta charset=&quot;UTF-8&quot;&gt;

El atributo content=&quot;text/html define que clase de informaci&oacute;n contiene el documento web, caci&oacute;n se deber&iacute;a abrir.

<span class="black">La iso para Europa del Oeste (espa&ntilde;ol):</span>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=iso-8859-1&quot; /&gt;

<span class="black">La iso para Europa Central:</span>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=iso-8859-2&quot; /&gt;

<span class="black">Esperanto y Malt&eacute;s:</span>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=iso-8859-3&quot; /&gt;

<span class="black">Let&oacute;n, Lituano y Japon&eacute;s:</span>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=iso-8859-4&quot; /&gt;
						...

<span class="black">Para caracteres asi&aacute;ticos y de todo tipo:</span>
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /&gt;</code></pre>
					<h3>Otras metaetiquetas</h3>
					<pre><code>Indica al navegador el n&uacute;mero de segundos antes de que la p&aacute;gina sea actualizada.
&lt;meta http-equiv=&quot;refresh&quot; content=&quot;15&quot; /&gt;


Redirecciona a la p&aacute;gina indicada en la URL.
&lt;meta http-equiv='refresh' content='0; URL=http://www.google.es/'&gt;

Previene que la p&aacute;gina se cargue en un target.
&lt;meta http-equiv=&quot;window-target&quot; content=&quot;_top&quot; /&gt;</code></pre>


					<h2>Documento XHTML que valide por w3c</h2>
					<p>Básicamente es un documento html bien formado.</p>
					<ul>
						<li>
							Etiquetas en minúsculas (del XML).Como las etiquetas en XML distinguen entre mayúsculas y minúsculas (case-sensitive), la recomendación XHTML ha definido todos los nombres de etiqueta en minúsculas.
						</li>
						<li>Valores de atributos entre comillas dobles.</li>
						<li>
							Ningún texto puede estar directamente dentro del body, sin estar situado a su vez en otro elemento (por ejemplo, un párrafo). &lt;p&gt;hola mundo!&lt;/p&gt;.
						</li>
						<li>La etiqueta title, dentro del head, es obligatoria.</li>
						<li>
							Las metaetiquetas se cierran en sí mismas explícitamente:
							<br>
							&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html;charset=utf-8&quot;/&gt;
						</li>
					</ul>

							<p><a target="_blank" href="http://www.w3schools.com/" >http://www.w3schools.com/</a></p>
				</article>
			</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('comentarios')){ ?>
			<main class="curso">
									<h1 id="comentarios">Comentarios</h1>

				<article >
										<?= getRes("video_premium",221233884) ?>

					<pre><code>&lt;!-- bla bla bla --&gt;</code></pre>



				</article>

			</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('encabezados-parrafos')){ ?>
			<main class="curso"><h1 id="encabezados-parrafos">Encabezados y párrafos</h1>
				<article>
					
					

					<?= getRes("video_premium",221233899) ?>

					<pre><code>&lt;h1&gt;Etiquetas de encabezado&lt;/h1&gt;
&lt;h2&gt;Subtitulo&lt;/h2&gt;
&lt;h3&gt;Su sub titulo&lt;/h3&gt;
&lt;h4&gt;M&aacute;s peque&ntilde;o&lt;/h4&gt;
&lt;h5&gt;Mucho m&aacute;s peque&ntilde;o&lt;/h5&gt;
&lt;h6&gt;Diminuto&lt;/h6&gt;
&lt;p&gt;Y un p&aacute;rrafo&lt;/p&gt;
&lt;p&gt;Y finalmente un p&aacute;rrafo &lt;strong&gt;con textos en negrita&lt;/strong&gt;&lt;/p&gt;</code></pre>
					<?= getRes('ejemplo','ex/primeras-etiquetas.html','Ver ejemplo de primeras etiquetas',1) ?>

				</article>
</main>


				<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('imagenes')){ ?>
<main class="curso">
<h1 id="enlaces-imagenes">Enlaces e imágenes</h1>
				<article>
					<h2 id="insertar_img">Insertar una imagen</h2>
<div class="row">
					<?= getRes("video_premium",221235759) ?>

					<?= getRes('ejemplo','ex/insertar_imagen.html','Ver ejemplo de inserción de una imagen', 1) ?>
</div>
					<h3>Insertar una imagen</h3>
					<pre><code>&lt;img src=&quot;teatro.jpg&quot; width=&quot;300px&quot; height=&quot;300px&quot; /&gt;</code></pre>


					<h3>1 Servicio para insertar fotos</h3>
					<?= getRes("video_premium",221238126) ?>

					<ul>
						<li>
							<a  target="_blank" href="http://lorempixel.com/500/500">lorempixel.com</a>
						</li>
						<li>
							<a target="_blank" href="http://placehold.it/">Placehold IT</a>
						</li>
					</ul>



					<h3>URL Uniform Resource Locator)</h3>
										<p>Indica dónde están las cosas.</p>

<div class="row">
							<?= getRes("video_premium",221235772) ?>

						<?= getRes('ejemplo','ex/hipervinculo/index.html','Ver ejemplo de hipervínculo', 1) ?>


</div>
					<h2>Rutas absolutas y relativas:</h2>
					<img src="img/rutas.png" alt="Rutas absolutas y relativas">



					<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('enlaces')){ ?>
					<h1>Enlaces</h2>
					<pre><code>&lt;a href=&quot;https://pablomonteserin.com&quot;&gt;Hola Mundo&lt;/a&gt;</code></pre>
					
						<h2>Ejercicio</h2>
						<p>Crear un enlace que sea una imagen.</p>
<div class="row">
						<?= getRes("video_premium",221235777) ?>

						<?= getRes('ejemplo','ex/hipervinculo-con-img/index.html','Ver ejercicio de hipervínculo con imagen resuelto', 1) ?>

</div>

					</article>

</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('video-audio')){ ?>

<main class="curso">
				<h1 id="video-audio">Video y audio</h1>

		<article>



			<?= getRes("video_premium",222382586) ?>

			<pre><code>&lt;video src=&quot;leon.mp4&quot; controls=&quot;controls&quot; width=&quot;400&quot; height=&quot;300&quot; poster=&quot;leon.jpg&quot;  <span class="red">preload=&quot;preload&quot;</span>&gt;
	Tu navegador no soporta html5
&lt;/video&gt;</code></pre>

			<p>El atributo <span class="red">preload</span> hace que el recurso se vaya descargando al ingresar en la página</p>

			<?= getRes('ejemplo','ex/videos.html', 'Videos',1) ?>
			<p>No todos los navegadores son capaces de reproducir todos los formatos de video, por tanto, de momento será más correcto que la etiqueta video tenga varios source.</p>

			<pre><code>&lt;video  poster=&quot;leon.jpg&quot; <span class="red">controls autoplay loop</span>&gt;
	&lt;source src=&quot;leon.mp4&quot; type=&quot;video/mp4&quot;/&gt;
	&lt;source src=&quot;leon.ogg&quot; type=&quot;video/ogg&quot;/&gt;
	&lt;source src=&quot;leon.webm&quot; type=&quot;video/webm&quot;/&gt;

	Tu navegador no soporta html5
&lt;/video&gt;</code></pre>


			<h3>Notas:</h3>
			<ul>
				<li><span class="red bold">
					controls, preload, autoplay, loop son atributos booleanos. Si están presentes, se aplican, si no, no.
				</span></li>
			</ul>

			<h2>Ejercicio Video</h2>

			<p>Reproducir el video del león utilizando HTML5. Uno está cargado con el atributo src y el otro mediante la etiqueta source.</p>
			<div class="row">
			<?= getRes("video_premium",222382126) ?>
			<?= getRes("recurso","/res/html5/zip/leon.zip","leon.zip") ?>
</div>
<div class="row">
			<?= getRes("video_premium",222382132) ?>
			<?= getRes('ejemplo','ex/ejercicio-videos.html', 'Ejercicio videos',1) ?>

			


</div>


			<h2>Ejercicio Audio</h2>
			<p>Utilizando la etiqueta &lt;audio&gt; en lugar de la etiqueta &lt;video&gt; insertar un reproductor para los siguientes ficheros de audio:</p>
<div class="row">
			<?= getRes("video_premium",222383179) ?>
			<?= getRes("recurso","/res/html5/zip/hakuna.zip","Descargar recursos") ?>
</div>
			<div class="row">
			<?= getRes("video_premium",222383190) ?>

			<?= getRes('ejemplo','ex/audio.html', 'Ver ejemplo',1) ?>



</div>

		</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('listas')){ ?>

<main class="curso">
<h1 id="listas">Listas</h1>
					<article >
						
						<p>Suelen usarse para la barra de navegación</p>
						<div class="col_left">
							<pre><code>&lt;p&gt;Lista ordenada:&lt;/p&gt;
&lt;ol&gt;
	&lt;li&gt;Primero
	&lt;/li&gt;
	&lt;li&gt;Segundo
	&lt;/li&gt;
&lt;/ol&gt;

&lt;p&gt;Lista desordenada:&lt;/p&gt;
&lt;ul&gt;
	&lt;li&gt;Primero
	&lt;/li&gt;
	&lt;li&gt;Segundo
	&lt;/li&gt;
&lt;/ul&gt;</code></pre>
					</div>
					<div class="col_right">
						<div class="row">
											<?= getRes("video_premium",221235784) ?>

						<?= getRes('ejemplo','ex/lista-ordenada.html', 'Ver ejemplo de listas',1) ?>
</div>
					</div>




					<h2>Es muy importante tabular el código</h2>
					<img src="img/indent.svg" alt="broma sobre indentación de código">

					<h2>Ejercicio listas de enlaces</h2>
					<p>Hacer una lista de enlaces, donde cada enlace es una foto,</p>
					<div class="row">
<?= getRes("video_premium",221238711) ?>
						<?= getRes('ejemplo','ex/lista-enlaces/lista-enlaces.html', 'Lista de enlaces',1) ?>
						</div>
					<h3>Ejercicio listas</h3>
<?= getRes("video_premium",221238721) ?>
	<div class="row">				
		<?= getRes("video_premium",221238735) ?>
					<?= getRes('ejemplo','ex/listas.html', 'Listas', 1) ?>

		</div>
				</article>


			</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('ejercicio-resumen-fundamentos-html')){ ?>

			<main class="curso">
<h1 id="ejercicio-resumen-fundamentos-html">Ejercicio resumen de fundamentos de HTML</h1>

				<article >
<?= getRes("video_premium",221238761) ?>
<div class="row">
	<?= getRes("video_premium",221238769) ?>
	<?= getRes('ejemplo','ex/parrafos-y-headers.html','Ver ejercicio resumen resuelto', 1) ?>
	</div>
				</article>

</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('iframes')){ ?>

<main class="curso"><h1 id="iframes">iframes</h1>

				<article >
	
		<?= getRes("video_premium",221243363) ?>


					<pre><code>&lt;a href=&quot;https://pablomonteserin.com/&quot; target=&quot;nombreDelIframe&quot;&gt;Otra pagina&lt;/a&gt;

&lt;iframe src = &quot;http://csszengarden.com/&quot; width=&quot;500px&quot; height=&quot;500px&quot; name=&quot;nombreDelIframe&quot;&gt;
						&lt;/iframe&gt;</code></pre>

<?= getRes('ejemplo','ex/teoria-iframe.html', 'Teoría del iframe',1) ?>

					<div class="notas">
						<h2>Notas</h2>
						<ul>
							<li>
								El atributo <span class="bold">target</span> define dónde se va a cargar la información del enlace. En este caso, 
								debe coincidir con el valor del atributo name del iframe.
							</li>
							<li>
								Ojo! El iframe no se cierra en la propia etiqueta (&lt;iframe /&gt;).
							</li>

						</ul>
					</div>

					<h4>Razones por las que no debes utilizar frames:</h4>
										

					<ul>
						<li>Están desaconsejados por el W3C.</li>
						<li>
							El usuario debe entrar siempre por la página principal, donde se encuentra la declaración de marcos. Si accediese por otra página diferente se perdería elementos tales como la navegación (el uso más frecuente de los frames)
						</li>
						<li>
							Al no cambiar la URL en las diversas páginas, el usuario no podrá añadir a sus favoritos secciones de la página
						</li>
						<li>
							Los botones «anterior» y «siguiente» de los navegadores pueden no funcionar adecuadamente. Así mismo podemos dificultar el uso del Historial del Navegador.
						</li>
						<li>
							Si el usuario desea imprimir la página podemos obtener resultados no deseados.
						</li>
						<li>
							No podemos promocionar páginas interiores ya que necesitamos que los visitantes accedan por la página principal.
						</li>
						<li>«Esta página utiliza frames pero su navegador no lo soporta»</li>
					</ul>
<?= getRes("video_premium",221243371) ?>

					<h2>Atributo target</h2>

					<p>Determina dónde se va a cargar la información de un enlace. Por defecto no se pone y la web se cargará en la propia pestaña.</p>
										<?= getRes("video_premium",221243863) ?>

					<pre><p>target="_blank" cargará la información en una nueva pestaña.</p><code>&lt;a href=&quot;#&quot; target=&quot;_blank&quot;&gt;&lt;/a&gt;</code></pre>


					<h2>Ejercicio iframe</h2>
					<?= getRes("video_premium",221243386) ?>

<div class="row">

	

					<?= getRes("video_premium",221243392) ?>

									<?= getRes('ejemplo','ex/ejercicio-iframe.html', 'Ver ejercicio iframe', 1) ?>
</div>

				</article>
</main>
				<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('paginas-consulta')){ ?>
 	<main class="curso">
	<h1 id="paginas-consulta">Páginas de consulta</h1>
				<article >
				

					<ul>
					
						<li>
							<a target="_blank" href="http://stackoverflow.com/">http://stackoverflow.com/</a>
						</li>
						<li><a href="http://lenguajecss.com/" target="_blank">Chuleta CSS</a></li>
						<li>
	<a  target="_blank" href="http://lenguajehtml.com/">Chuleta HTML5</a>
</li>
						<li><a href="https://www.w3schools.com/">https://www.w3schools.com/</a></li>
						<li><a href="https://www.freecodecamp.org/">https://www.freecodecamp.org/</a></li>
					</ul>
										<?= getRes("video_premium",221244125) ?>

				</article>
</main>
				<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('tablas')){ ?>
 <main class="curso">
 		<h1 id="tablas">Tablas</h1>
				<article >
				
										<?= getRes("video_premium",221243402) ?>

					<div class="col_left">
						<pre><code>&lt;table border=&quot;1px&quot;&gt;
	&lt;tr&gt;
		&lt;td&gt;La celda&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;</code></pre>
					</div>
					<div class="col_right">
	<?= getRes('ejemplo','ex/celda.html', 'Una celda', 1) ?>

					
					</div>

				
						<ul>
							<li>
								La etiqueta td (d de data) no formatea por defecto su contenido.
							</li>
							<li>
								La etiqueta th (h de head), centra el contenido de la celda y lo pone en negrita. Es un atajo para poner encabezados.
							</li>
						</ul>
					<h2 id="ejercicio_tablas">Ejercicio tabla</h2>
					<?= getRes("video_premium",221243411) ?>

<div class="row">

					<?= getRes("video_premium",221244476) ?>

					<?= getRes('ejemplo','ex/ejercicio-tabla.html', 'Ver ejercicio tabla', 1) ?>
	
</div>


					<h2>Ejercicios colspan y rowspan</h2>
					<?= getRes("video_premium",221244489) ?>

<div class="row">
					<?= getRes("video_premium",221244499) ?>
					<?= getRes('ejemplo','ex/ejercicio_tabla-con-colspan-y-rowspan.html', 'Ver ejercicio tabla con colspan y rowspan', 1) ?>
</div>
					<p>Los siguientes atributos se añaden a la celda, no a la fila:</p>
					<ul>
						<li>colspan="2" : Une dos columnas en una sola.</li>

						<li>rowspan="2": Une dos filas en una sola</li>
					</ul>
					<h4 id="ejercicio_picasso">Ejercicio Picasso</h4>
<div class="row">
										<?= getRes("video_premium",221244512) ?>

					<?= getRes("recurso","/res/html5/zip/imgpicasso.zip","Descargar fotos del ejercicio 2") ?>
</div>
<div class="row">

					<?= getRes("video_premium",221245098) ?>

					<?= getRes('ejemplo','ex/imgpicasso/tabla.html', 'Ver ejercicio 2 resuelto',1) ?>


				</div>
				</article>
				
			</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('estilos-en-linea')){ ?>
 <main class="curso">
					<h1 id="estilos-en-linea">Estilos en línea</h1>

		
				<article >
					<?= getRes("video_premium",221244521) ?>

					<pre><code>&lt;img src=&quot;imagen.jpg&quot; width=&quot;30px&quot; height=&quot;30px&quot;&gt;</code></pre>
					vs
					<pre><code>&lt;img src=&quot;imagen.jpg&quot; style=&quot;width:30px; height:30px&quot;&gt;</code></pre>




					<h2 id="ejercicio_estilos">Ejercicio estilos en línea</h2>
					<p>Maquetar una celda negra con texto arial de tamaño 3em alineado a la derecha y escrito en azul. Con un ancho de 600px y un alto de 5em. Con un margen interior derecho de 50px.
					</p>
											<?= getRes("video_premium",221244527) ?>

					<pre><code>padding-right
height
background
color
text-align
font-size
font-family
width</code></pre>

<div class="row">
						<?= getRes("video_premium",221244531) ?>

									<?= getRes('ejemplo','ex/maquetar_celda.html', 'Maquetar celda', 1) ?>
						</div>

					
					




</article></main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('unidades-medida')){ ?>

<main class="curso"><h1 id="unidades-medida">Unidades de medida</h1>
<article>
					<ul>
						<li>Un em es una unidad de medida igual al font-size del elemento. El font-size por defecto de la etiqueta HTML son 16px. Así que en principio ese es el valor de 1 em.
						</li>
						<li>Un rem es una unidad de medida equivalente al font-size del elemento HTML (salvo que hayamos sobreescrito su valor)</li>
						<li>% es una unidad de medida relativa a la capa que contiene al elmento al que se la hemos asignado</li>


					</ul>

						<?= getRes("video_premium",221245768) ?>

					

				</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('capas')){ ?>

			<main class="curso">
									<h1 id="capas">Capas</h1>

				<article>

					<?= getRes("video_premium",221248340) ?>


					<pre><code>&lt;div style=&quot;background-color:red; width:300px; height:300px&quot;&gt;
&lt;/div&gt;</code></pre>

					<?= getRes('ejemplo','ex/una-capa-roja.html', 'Una capa roja',1) ?>

					<div style="overflow:hidden">
						<h2>Ejercicio</h2>
						<p>
							Crear una capa y asociarle una imagen de fondo utilizando una hoja de estilos externa al documento.
						</p>

												<?= getRes("video_premium",221248350) ?>
						<pre><code>background:url(ruta-de-la-imagen.jpg);</code></pre>

						<div class="row">

						<?= getRes("video_premium",221248354) ?>

						<?= getRes('ejemplo','ex/background-image/simple/index.html', 'background-image',2) ?>
					</div>
						
						


					</div>

					<h2>Ejercicio</h2>
					<p>
						A partir de la página anterior, modificando la hoja de estilos, lograr que la imagen asociada a la capa cambie al pasar el cursor por encima.
					</p>
					<p>Para ello usaremos:</p>
					<pre><code>div:hover{
...
}</code></pre>
						<?= getRes("video_premium",221248367) ?>

					<div class="row">
						<?= getRes("video_premium",221248376) ?>

						<?= getRes('ejemplo','ex/background-image/con-hover/index.html', 'Ver ejercicio background con hover resuelto',2) ?>
					</div>
					

</article>
</main>
					<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('gimp')){ ?>
<main class="curso">
							<h1 id="gimp">GIMP</h1>

					<article>
												<?= getRes("video_premium",221250331) ?>

						<h2>Recortar imágenes y opciones frecuentes</h2>
						<ul>
							<li>
								<span class="black">ctrl + o</span>
								→ Abrir una imagen.
							</li>
							<li>
								<span class="black">ctrl + s</span>
								→ Salvar una imágen
							</li>
							<li>
								<span class="black">ctrl + b</span>
								→ ver barra de herramientas
							</li>
							<li>
								<span class="black">f</span>
								→ free select tool
							</li>
							<li>
								<span class="black">Shift</span>
								→ añadir a la selección
							</li>
							<li>
								<span class="black">Ctrl</span>
								→ sustraer de la selección
							</li>
							<li>
								<span class="black">Shift + ctrl</span>
								→ coger la intersección de la selección
							</li>
							<li>
								<span class="black">shit + t</span>
								→ escalar
							</li>
							<li>
								<span class="black">shift + r</span>
								→ rotar
							</li>

							<li>
								<span class="black">Menú image</span>
								→ scale image
							</li>
							<li>
								<span class="black">Menú colors</span>
								→ bright/contrast
							</li>
							<li>
								<span class="black">Menú filters</span>
							</li>
						</ul>


						<h2>Ejercicio -Dibujar con GIMP</h2>
						<div class="col_left">
							<ul>
								<li>Crear un nuevo document: ctrl + n</li>
								<li>Crear una selección: r</li>
								<li>Pintar con la pluma: p</li>
								<li>Borrar: ctrl + shift + e</li>
								<li>Exportar imagen: ctrl + shift + e</li>
								<li>Ver capas: ctrl + l</li>
								<li>Mover capa: m</li>
								<li>Ver herramientas: ctrl + b</li>
							</ul>
						</div>
						<div class="col_right">

							<img src="img/casita.png" alt="imagen casita">
						</div>

						<?= getRes("video_premium",221250390) ?>

						<h2>Cómo hacer un degradado</h2>
						<p>
							Windows → Dockable Dialogs → Gradients (ctrl+g) → create new gradiente (si edito un gradiente del sistema  no podré modificarlo)
							(con ctrl pulsado me será fácil hacer un degradado perfectamente vertical).
						</p>

						<h2>Ejercicio - hacer un degradado para una página web, usando GIMP</h2>
						<?= getRes("video_premium",221250432) ?>

						<div class="row">
						<?= getRes("video_premium",221250444) ?>
						<?= getRes('ejemplo','ex/degradado/index.html', 'Ver ejercicio degradado resuelto', 1) ?>


</div>
						<h2>Ejercicio - background-repeat</h2>
						<p>Utilizando alguna de las fotografías de los recursos, hacer una libreta como del ejemplo</p>
							<?= getRes("recurso","/res/html5/zip/fzm-seamless.notebook.textures.zip","Degradados") ?>

						<div class="row">
						<?= getRes("video_premium",221250487) ?>
						<?= getRes('ejemplo','ex/degradado-img/index.html','Ver ejemplo degradado', 1) ?>

</div>

						<h2>Estilos para centrado de texto dentro de un botón</h2>

						<h3>Horizontalmente</h3>
						<p>text-align:center</p>

						<h4>Verticalmente, si se trata de una sola línea:</h4>
						<p>
							line-height: [le doy la altura de la capa a la que pertenece el texto].
						</p>

												<?= getRes("video_premium",221251871) ?>

						<h2>Ejercicio navbar</h2>

						<p>
							Crear una botonera  de 3 botones. Cada botón será un elemento de una lista. Crearemos un único fichero de dibujo con dos capas, una para cuando el botón está en reposo y otra para cuando pasamos el cursor por encima del botón. El texto no formará parte de la imagen, lo añadiremos con html.
						</p>
												<?= getRes("video_premium",221251883) ?>

												<div class="row">
						<?= getRes("video_premium",221254682) ?>

						<?= getRes('ejemplo','ex/navbar1/index.html', 'Navbar',2) ?>

</div>

					</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('newsletter')){ ?>

<main class="curso">
					<h1  id="newsletter">Hacer una newsletter con HTML</h1>

				<article>
					
<h2>Recomendaciones</h2>
						<ul>
							<li>
								Utiliza tablas para la maquetación global. Intenta evitar los divs.
							</li>
							<li>Supón un ancho de documento de 500-600px</li>
							<li>
								Escribe el CSS inline o en la cabecera, no en un documento externo.
							</li>
							<li>Utiliza una ruta externa para las imágenes, no las adjuntes.</li>
							<li>Evita Flash y Javascript.</li>
							<li>
								Newsletter maker:
								<a target="_blank" href="http://www.campaignmonitor.com/templates/">http://www.campaignmonitor.com/templates/</a>
							</li>
							<li>Los dispositivos ios convierten automáticamente ciertos textos (fechas y números de teléfono) en links. Para evitar que el navegador reconozca estos elementos como teléfonos o texto, podemos insertar un elemento de ancho zero entre medias:
								<pre><code>M&amp;#x200b;arch 30, 2013</code></pre>
							</li>
							<li>Un enlace interesante para probar nuestros mails: <a target="_blank" rel="nofollow" href="http://premailer.dialect.ca/">premailer</a></li>
						</ul>
					<?= getRes("video_premium",221245786) ?>

					<h2>Ejercicio newsletter</h2>
					<p>
						Descargar una plantilla de la página anterior y utilizarla para crear una newsletter con nuestros propios contenidos.
					</p>

					<h2>Ejercicio newsletter 2</h2>
					<div class="row">
					<?= getRes("video_premium",221245800) ?>

					<?= getRes('ejemplo','ex/newsletter.html','Ver ejercicio newsletter resuelto', 1) ?>

				</div>
					<p>
						Hacer la siguiente newsletter. Para ello propongo hacer dos tablas para la estructura global. Estas tablas pueden tener a su vez más tablas ensu interior. Una tabla será para el bloque pablomonteserín y otra para el bloque novedades y cursos.
					</p>


					<?= getRes("video_premium",221245812) ?>
					<h2 id="tbody">tbody, thead, tfoot</h2>
					<ul>
						<li>
							Usamos tbody cuando deseamos que una tabla tenga múltiples cuerpos.
						</li>
						<li>tbody debe usarse junto con thead y tfoot.</li>
					</ul>
					<?= getRes("video_premium",221245852) ?>



					
					<pre><code>&lt;table border=&quot;1&quot; &gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;Elementos&lt;/th&gt;&lt;th&gt;de&lt;/th&gt;&lt;th&gt;la&lt;/th&gt;&lt;th&gt;cabecera&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tfoot&gt;
		&lt;tr&gt;
			&lt;th&gt;Y&lt;/th&gt;&lt;th&gt;elementos&lt;/th&gt;&lt;th&gt;del&lt;/th&gt;&lt;th&gt;pie&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/tfoot&gt;

	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;1&lt;/td&gt;&lt;td&gt;bla bla&lt;/td&gt;&lt;td&gt;blep&lt;/td&gt;&lt;td&gt;blep&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;2&lt;/td&gt;&lt;td&gt;bla bla&lt;/td&gt;&lt;td&gt;bla&lt;/td&gt;&lt;td&gt;bla&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;3&lt;/td&gt;&lt;td&gt;bura bura&lt;/td&gt;&lt;td&gt;bla&lt;/td&gt;&lt;td&gt;bura bura&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;4&lt;/td&gt;&lt;td&gt;blep blep&lt;/td&gt;&lt;td&gt;Ok&lt;/td&gt;&lt;td&gt;Ok&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;5&lt;/td&gt;&lt;td&gt;blip blip&lt;/td&gt;&lt;td&gt;Ok&lt;/td&gt;&lt;td&gt;Ok&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;</code></pre>

<?= getRes('ejemplo','ex/teoria-tbody-thead-tfoot.html','Teoría del tbody, thead y tfoot',1) ?>
					<h3>Usando colgroup</h3>
					<pre><code>&lt;table border=&quot;1&quot; &gt;
	&lt;caption&gt;T&amp;iacute;tulo de la tabla&lt;/caption&gt;
		&lt;colgroup &gt;&lt;/colgroup&gt;
		&lt;colgroup&gt;&lt;/colgroup&gt;
		&lt;colgroup&gt;&lt;/colgroup&gt;
		&lt;colgroup style=&quot;background-color:green&quot;&gt;&lt;/colgroup&gt;

		&lt;thead&gt;
			&lt;tr&gt;
				&lt;th&gt;Elementos&lt;/th&gt;&lt;th&gt;de&lt;/th&gt;&lt;th&gt;la&lt;/th&gt;&lt;th&gt;cabecera&lt;/th&gt;
			&lt;/tr&gt;
		&lt;/thead&gt;

		&lt;tfoot&gt;
			&lt;tr&gt;
				&lt;th&gt;Y&lt;/th&gt;&lt;th&gt;elementos&lt;/th&gt;&lt;th&gt;del&lt;/th&gt;&lt;th&gt;pie&lt;/th&gt;
			&lt;/tr&gt;
		&lt;/tfoot&gt;

		&lt;tbody&gt;
			&lt;tr&gt;
				&lt;td&gt;1&lt;/td&gt;&lt;td&gt;bla bla&lt;/td&gt;
				&lt;td&gt;blep&lt;/td&gt;&lt;td&gt;blep&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;2&lt;/td&gt;&lt;td&gt;bla bla&lt;/td&gt;&lt;td&gt;bla&lt;/td&gt;&lt;td&gt;bla&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;3&lt;/td&gt;&lt;td&gt;bura bura&lt;/td&gt;&lt;td&gt;bla&lt;/td&gt;&lt;td&gt;bura bura&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/tbody&gt;

		&lt;tbody&gt;
			&lt;tr&gt;
				&lt;td&gt;4&lt;/td&gt;&lt;td&gt;blep blep&lt;/td&gt;&lt;td&gt;Ok&lt;/td&gt;&lt;td&gt;Ok&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;5&lt;/td&gt;&lt;td&gt;blip blip&lt;/td&gt;&lt;td&gt;Ok&lt;/td&gt;&lt;td&gt;Ok&lt;/td&gt;
		&lt;/tr&gt;
		&lt;/tbody&gt;
&lt;/table&gt;</code></pre>
<?= getRes("ejemplo", "ex/usando-col-group.html","Usando Col Group",1) ?>
					<h3>Usando rules="groups"</h3>
					<?= getRes("ejemplo", "ex/rules-groups.html","Usando rules groups", 1) ?>

					<h3>Ejercicio</h3>
					<?= getRes("video_premium",221247934) ?>

<div class="row">
<?= getRes("video_premium",221245868) ?>
					<?= getRes('ejemplo','ex/ejercicio_tbody.html', 'Ejercicio tbody',1) ?>
					</div>


				</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('favicon')){ ?>

<main class="curso">
						<h1 id="favicon">favicon</h1>

				<article>
										<?= getRes("video_premium",221248312) ?>

					<pre><code>&lt;link rel=&quot;shortcut icon&quot; href=&quot;https://pablomonteserin.com/miCara.png&quot; type=&quot;image/png&quot; /&gt;</code></pre>


					<ul>
						<li>
							A menudo, el cambio del favicon.ico de nuestra página tarda mucho en refrescar. Para evitarlo, podemos cambiar la url de carga del mismo, haciendo algo parecido a esto:
							<br>
							&lt;link rel=&quot;shortcut icon&quot; href=&quot;favicon.ico?v=2&quot; type=&quot;image/x-icon&quot;&gt;
						</li>
					</ul>
				</article>
			</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('selectores-css')){ ?>

<main class="curso">
	<h1 id="selectores-css">Selectores CSS</h1>

					<article >
						<ul>
							<li>
								<strong>Selector universal:</strong>
								<p>(Aplicar a TODOS los elementos de la página un margen cero)</p>
								<pre><code>&lt;div&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;			&#x2192; 	*{ margin: 0;padding:0 }</code></pre>
							</li>

							<li>
								<strong>Selector de etiqueta</strong>
								<p>
									(Aplicar a TODOS los div un fondo rojo y un borde sólido de 2px y color negro)
								</p>

								<pre><code>&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;			&#x2192; 	div { background: red; border: 2px solid black;}</code></pre>
							</li>
							<li>
								<strong>Selector de clase</strong>
								<p>
									(Aplicar a todos los elementos con una clase verde una fuente de color verde)
								</p>
								<pre><code>&lt;div class=&quot;verde&quot;&gt;&lt;/div&gt;		&#x2192;	.verde { color: green; }</code></pre>
							</li>
							<li>
								<strong>Selector de ID</strong>
								<p>
									Iguales que los anteriores pero para elementos marcados con el atributo id. Este se utiliza para marcar un elemento único.
								</p>
								(Aplicar al elemento slider un color de fondo azul)
								<pre><code>&lt;div id=&quot;slider&quot;&gt;&lt;/div&gt;			&#x2192; 	#slider { background: blue; }</code></pre>
							</li>
						</ul>


						<?= getRes("video_premium",221251895) ?>
					</article>
					<article>
						<h2 id="ejercicios_etiquetas_y_selectores">Ejercicios de etiquetas y selectores</h2>
						<h3 id="ejercicio_chistes">Ejercicio chistes</h3>
						<?= getRes("video_premium",221251887) ?>
						<pre><code>border: 1px solid black;</code></pre>

						<div class="row">
				<?= getRes("video_premium",221251915) ?>

						<?= getRes('ejemplo','ex/chistes/index.html', 'Ver ejercicio chistes',2) ?>
						</div>
										


				
						<h3>Cómo añadir un borde a un efecto hover sin que se sume al grosor</h3>
						<pre><code>a{
text-decoration: none;
	font-size: 3em;
	border-bottom:1px solid transparent;
}
a:hover{
	border-bottom: 1px solid black
}</code></pre>
				<?= getRes('ejemplo','ex/borde-en-hover.html', 'Ver ejemplo',1) ?>

				<h3 id="ejercicio_citas">Ejercicio citas</h3>
	<?= getRes("video_premium",221251980) ?>


	<p>Tener en cuenta que los párrafos están alineados usando márgenes.</p>
				<p>Estilos necesarios para resolver este ejercicio:</p>
				<pre><code>border-radius: 20px 0 0 20px;</code></pre>

<div class="row">
				<?= getRes("video_premium",222278030) ?>

				<?= getRes('ejemplo','ex/borders_y_margenes_con_porcentajes/index.html','Ver ejercicio citas resuelto',2) ?>

</div>
			


				


				<h3 id="ejercicio_comic_sans">Ejercicio Comic Sans</h3>
								<?= getRes("video_premium",222280894) ?>
				<p>A partir del código html de la página suministrada, introducir el código css necesario para que se visualice como se indica en el enlace.</p>
				<p>Notas:</p>
				<ul>
					<li>No cambiar la tipografías.</li>
					<li>Para cambiar el interlineado usaremos el estilo line-height</li>
					<li>Para los bordes de los textos, usaremos los estilos border-top y border-bottom</li>
					<li>Para alinear el texto a la derecha, usaremos text-align:right</li>
					<li>Todo el contenido estará dentro de una capa con width:1024px y margin:auto</li>
				</ul>

<div class="row">

				<?= getRes("video_premium",222281102) ?>

<?= getRes('recurso','ex/comisans-suministrado.zip', 'Descargar recurso') ?>

				<?= getRes('ejemplo','ex/comic-sans/index.html', 'Ver ejercicio Comic Sans', 2) ?>
</div>



			</article>
			<article >

				

				<h2 id="selector_descendente">Selector descendente</h2>
				<p>
					El siguiente selector se aplica a todos los párrafos que se encuentren dentro de un span un color igual a 10px:</p>
					<pre><code>p span { color: red; }</code></pre>

				
				<h2 id="selector_combinado">Selector combinado</h2>
				<p>
				El siguiente selector se aplica a todos los párrafos con clase amplio que estén dentro de otro de un div con clase verde, un margen de 40px:</p>

				<pre><code>div.verde p.amplio { margin: 40px; }</code></pre>
<?= getRes("video_premium",222283241) ?>
			
		</article>
		<article>
			<h2 id="classvsid">class vs id</h2>
			<p>
				Las clases y los identificadores son como los nombres comunes y los propios. Una clase se puede reutilizar para diversos elementos pero uno con id tiene que ser único (class="montes", id="Everest"). No puede haber más que un solo elemento con una determinada id en la misma página, de lo contrario el intérprete del navegador dará resultados imprevisibles.
			</p>
			</article>
			<article>	
				<h2  id="juego_online">
					Juego online para aprender a usar los selectores de CSS
				</h2>
				<a target="_blank" href="http://flukeout.github.io/">Acceder al juego</a>
			</article>
			<article >
				<h2 id="escribir_menos_codigo">¿Cómo escribir menos código?</h2>
				<?= getRes("video_premium",222283873) ?>

				<pre><strong>Cómo no hacerlo</strong><code>#content { 
	margin-top: 10px;
	margin-right: 12px;
	margin-bottom: 0;
	margin-left: 15px;
	background-color: #000;
	background-repeat: no-repeat; 
}</code></pre>

				<pre><strong>Cómo hacerlo</strong><code>#content{
	margin: 10px 12px 0 15px;
	background: #000 no-repeat; 
}</code></pre>

		</article>
</main>
			<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('hojas-estilos')){ ?>

			<main class="curso">
					<h1 id="hojas-estilos">Hojas de estilos</h1>

				<article >
					<?= getRes("video_premium",221248317) ?>

					<p>
						<a target="_blank" href="http://www.csszengarden.com/">http://www.csszengarden.com/</a>
					</p>
					<p>
						<a target="_blank" href="http://www.cssplay.co.uk/">http://www.cssplay.co.uk/</a>
					</p>
					<h2>Cargar una hoja de estilos externa</h2>
					<?= getRes("video_premium",221248330) ?>

					<pre><code>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;estilos.css&quot;/&gt;</code></pre>


					<div class="notas">
						<h3>Notas:</h3>
						<ul>
							<li>
								El atributo opcional type se usa para especificar un tipo de medio (text/css para una hoja de estilo en cascada) permitiendo a los navegadores omitir los tipos de hoja de estilo que no soportan.
							</li>
							<li>
								rel=”stylesheet” indica que es la hoja de estilos preferente.
							</li>
							<li>
								rel=”alternate stylesheet” indica que podemos cambiar esta hoja de estilos desde el navegador.
							</li>
							<li>
								Es necesario declarar al menos una hoja de estilos preferente.
							</li>

						</ul>
					</div>

					<h2>Reglas CSS</h2>
					<p>
						<span class="red">h1</span>
						{
							<span class="blue">color</span>
							:
							<span class="orange">#990000</span>
						}
					</p>
					<p>
						Declaración:
						<br>
						<span class="red">selector</span>
						{
							<span class="blue">propiedad</span>
							:
							<span class="orange">valor</span>
						}
					</p>
					<p>
						El selector indica a qué hay que aplicarle la regla y la declaración especifica qué es lo que hay que hacerle.
					</p>
					<p>
						Selectores:
						<a target="_blank" href="http://www.w3.org/TR/selectors/">http://www.w3.org/TR/selectors/</a>
					</p>
				</article>
			</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('motores-navegacion-css3')){ ?>

<main class="curso">
	<h1 id="motores-navegacion-css3">Motores de navegación</h1>
	<article>


	<p>(motor de renderizado, web browser engine, layout engine o rendering engine)</p>
	<p>Es un software que a partir de etiquetas (html, xml, …) e información de formato (css, xsl... ) muestra información formateada en la pantalla.</p>
	<ul><li>
		<span class="black bold">WebKit</span> (<a href="http://www.webkit.org/">http://www.webkit.org/</a>), usado en  Safari, Google Chrome, Epiphany, Opera desde la versión 15 ...)

	</li>
	<li>
		<span class="black bold">Gecko</span> (Mozilla Firefox)</li>
		<li><span class="bold black">Trident</span> (IE)</li>
	</ul>
		<?= getRes("video_premium",222386178) ?>

</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('text-shadow')){ ?>

<main class="curso">
	<h1 id="text_shadow">text-shadow</h1>

<article>	
		<?= getRes("video_premium",222385896) ?>


	<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	h1{
		<span class="green">/*text-shadow: desplazamiento x, desplazamiento y, desenfoque, color*/</span>
		text-shadow: 20px 5px 5px red
	}
&lt;/style&gt;


&lt;h1&gt;Hola Mundo!&lt;/h1&gt;</code></pre>
	<?= getRes('ejemplo','ex/text-shadow/index.html', 'text-shadow',2) ?>

<h4>Notas:</h4>
<p>Nota:
	Será posible añadir múltiples sombreados: <br>	
text-shadow: 20px 5px 5px red, 30px 15px 10px blue, 6px 5px 2px green</p>
</article>

<article>

<h2>Link de interés</h2>
	<span class="black bold">-prefix-free</span> <br>
	<a target="_blank" href="http://leaverou.github.com/prefixfree/">http://leaverou.github.com/prefixfree/</a> <br>

	<pre><span class="black bold">Carga de la librería:</span><code>&lt;script src=&quot;prefixfree.min.js&quot;&gt;&lt;/script&gt;</code></pre>
		<pre><span class="black bold">Nuestro CSS</span><code>text-shadow: 1em; <span class="red">/* Para cuando se cumplan los estandares. */</span>
-moz-text-shadow: 1em; <span class="green">/* Mozilla */</span> 
-ms-text-shadow: 1em; <span class="green">/* Internet Explorer 8 (No soportado) */</span>  
-webkit-text-shadow: 1em; <span class="green">/* WebKit y Safari */</span></code></pre>

		<p>Únicamente hemos de añadir un fichero JS a la carga de nuestra aplicación web.</p>

		<div class="notas">
			<h3>Notas:</h3>
			<p>No funciona para estilos en línea ni para hojas de estilo alojadas en diferentes dominios, ni para páginas locales (esto último en chrome y opera).</p>
		</div>
</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('border-radius')){ ?>

<main class="curso">
		<h1 id="border_radius">border-radius, box-shadow</h1>

<article>
		<?= getRes("video_premium",222386457) ?>



		

		<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	div{
		background:red;
		width:500px;
		height:500px;
		border-radius:0px 50px 100px 150px;
		-moz-border-radius: 0px 50px 100px 150px;
		-webkit-border-radius: 0px 50px 100px 150px;

		box-shadow: 10px 50px 100px green, inset 10px 50px 100px blue;
		-moz-box-shadow: 10px 50px 100px green, inset 10px 50px 100px blue;
		-webkit-box-shadow: 10px 50px 100px green, inset 10px 50px 100px blue;	
	}
&lt;/style&gt;
&lt;div&gt;&lt;/div&gt;</code></pre>
<?= getRes('ejemplo','ex/border-radius-border-box/index.html', 'border-radius, box-shadow',2) ?>
	<div class="notas">
		<h4>Notas:</h4>
		<p>
		border-radius:100% hace una capa ciruclar</p>

		<p>Enlaces de interés: 	</p>

			<ul>
				<li><a target="_blank" href="http://border-radius.com/">http://border-radius.com/</a></li>

				<li><a target="_blank" href="http://leaverou.github.io/corner-shape/">http://leaverou.github.io/corner-shape/</a><span>(es necesaria una librería de Javascript para que funcione)</span></li>

				<li><a target="_blank" href="http://css3gen.com/box-shadow/">Generar un sombreado con la posibilidad cambiar su orientación.</a></li>
			</ul>


		</div>

</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('border-image')){ ?>

<main class="curso">

	
	<h1 id="border-image">border-image</h1>





	<img src="https://pablomonteserin.com/res/html5/ex/img/mundo.svg" alt="border-image en html">
	
	<div class="row"><?= getRes('ejemplo','ex/border-image/border-image/index.html','Ver ejemplo border-image',2) ?>
		<?= getRes("video_premium",222385933) ?>
</div>	

	<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	div{
		border-width: 35px;
		padding: 20px;
		-webkit-border-image:url(mundo.svg); 
		border-image:url(mundo.svg);
		border-style:solid
	}
&lt;/style&gt;

&lt;div&gt;
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
&lt;/div&gt;</code></pre>



<h2>border-image II</h2>

<img src="https://pablomonteserin.com/res/html5/ex/border-image/border-image-2/border.png" alt="border-image con HTML">


<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	div{
		border-width: 35px;
		padding: 20px;
		border-style:solid 
	}
	#stretch{
		-webkit-border-image:url(border.png) 30 30 stretch;
		border-image:url(border.png) 30 30 stretch;
	}
	#round{
		-webkit-border-image:url(border.png) 30 30 round;
		border-image:url(border.png) 30 30 round;
	}
&lt;/style&gt;

&lt;div id=&quot;stretch&quot;&gt;
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
&lt;/div&gt;
&lt;div id=&quot;round&quot;&gt;
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
&lt;/div&gt;</code></pre>
<?= getRes('ejemplo','ex/border-image/border-image-2/index.html', 'Ver ejemplo border-image II',2) ?>
</article>

<article>
<h2 id="hacer_triangulitos">Hacer triangulitos</h2>
<a target="_blank" href="http://apps.eky.hk/css-triangle-generator/">Ir a generador de triángulos</a>

</article>

</main>




<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('background-centrado')){ ?>




<main class="curso">

<h2 id="background-centrado">Ejercicio - Background Centrado</h2>

<article>

	<pre><code>body{
	background:url(back.jpg) green no-repeat <span class="black bold">center</span> top
}</code></pre>

<br>
<img src="https://pablomonteserin.com/res/html5/ex/back-centrado/back.jpg" alt="imagen background para centrar">
<div class="row">
<?= getRes("video_premium",222327776) ?>

<?= getRes('ejemplo','ex/back-centrado/index.html','Ver ejemplo background centrado', 1) ?>
</div>
</article>




						<h3>
							Repetir el ejercicio anterior, pero para un enlace en vez de para una capa.
						</h3>
												<?= getRes("video_premium",221250292) ?>

				
						<p>
							Es imprescindible que el enlace tenga el estilo display:block, o display:inline-block o float:left. Esto ocurre porque un enlace por defecto tiene el estilo display:inline, que hace que no coja los valores para el ancho y el alto.
						</p>

		<div class="row">
						<?= getRes("video_premium",221250309) ?>

						<?= getRes('ejemplo','ex/background-image/con-hover-link/index.html','Background image con hover', 2) ?>
					</div>


					</article>
					</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('background-size')){ ?>

<main class="curso">
	<h1 id="background-size">background-size</h1>

<article>

<?= getRes("video_premium",222385959) ?>
<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	div{
		width:500px;
		height:500px;
		padding:200px;
		background:url(mundo.svg);
		background-size:100% 100%;
		<span class="green">/*Otra forma de escribirlo:
			background: url(../mundo.svg) 0 0 / 100% 100%;
		*/</span>
	}
&lt;/style&gt;
&lt;div&gt;&lt;/div&gt;</code></pre>
<img src="https://pablomonteserin.com/res/html5/ex/img/mundo.svg" alt="imagen mundo">

<?= getRes('ejemplo','ex/background/background-size/index.html','Ver ejercicio background-size',2) ?>

</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('multiple-background')){ ?>
 	<main class="curso">

<h1 id="multiple-background">multiple background &amp; size</h1>

<article>

<?= getRes("video_premium",222385996) ?>
<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	div{
	width:500px;
	height:500px;
	background:url(mundo.svg), url(tijeras.svg);
	background-size:100% 100%, auto auto;
}
&lt;/style&gt;
&lt;div&gt;&lt;/div&gt;</code></pre>
<?= getRes('ejemplo','ex/background/background-multiple-img-2/index.html','Ver ejercicio de background',2) ?>


</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('background-transparency')){ ?>
 	<main class="curso">


<h1 id="background-transparency">background con rgba</h1>

<article>

<?= getRes("video_premium",222386913) ?>
<pre><code>&lt;style type=&quot;text/css&quot;&gt;
body{
	background:url(mundo.svg)
}
div{
	width:500px; height:500px; background-color:rgba(0, 0, 255, 0.7); 
}
&lt;/style&gt;
&lt;body&gt;
	&lt;div&gt;texto del div&lt;/div&gt;
&lt;/body&gt;</code></pre>


<?= getRes('ejemplo','ex/background/background-transparency/index.html', 'Ver ejercicio de background con transparencia',2) ?>

</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('gradientes')){ ?>

<main class="curso">
<h1 id="gradientes">Gradientes</h1>

<article>

<?= getRes("video_premium",222387021) ?>
<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	html{
	height:100%;
	background: -moz-linear-gradient(top, #000000 0%, #ffffff 100%);
}
&lt;/style&gt;</code></pre>
<div class="row">
<a class="recurso" target="_blank" href="http://www.colorzilla.com/gradient-editor/">Enlace de interés: http://www.colorzilla.com/gradient-editor/</a>
<?= getRes('ejemplo','ex/background/gradient/index.html','Ejercicio de uso de gradientes',2) ?>
</div>

</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('fuentes')){ ?>

<main class="curso">
	<h1 id="fuentes">Fuentes</h1>

<article>

<?= getRes("video_premium",222387174) ?>

<pre><code>&lt;style type=&quot;text/css&quot;&gt;
@font-face{
	font-family: <span class="pink">miFuente</span>;
	src:url(fuente.ttf)		
}
h1{font-family:<span class="pink">miFuente</span>}
&lt;/style&gt;

&lt;h1&gt;Hola Mundo!&lt;/h1&gt;</code></pre>

<div class="row">
<?= getRes("recurso","/res/html5/ex/carga-fuente/fuente.ttf","Descarga la fuente que usaremos") ?>
<?= getRes('ejemplo','ex/carga-fuente/index.html','Ver ejercicio de carga de fuente',2) ?>
</div>

<p>Aunque será posible obtener fuentes en las siguientes páginas:</p>
<ul>
	<li><a target="_blank" href="http://www.dafont.com/es/">http://www.dafont.com/es/</a></li>
	<li><a target="_blank" href="http://www.fontsquirrel.com/">http://www.fontsquirrel.com/</a></li>
	<li><a target="_blank" href="http://openfontlibrary.org/">http://openfontlibrary.org/</a></li>
	<li><a target="_blank" href="http://www.1001freefonts.com/">http://www.1001freefonts.com/</a></li>
	<li><a target="_blank" href="http://www.google.com/webfonts">http://www.google.com/webfonts</a></li>
	<li><a target="_blank" href="http://www.fontpalace.com/">http://www.fontpalace.com/</a></li>
<!-- li><a target="_blank" href="http://www.socicon.com/">http://www.socicon.com/</a>
<pre><code>
&lt;link href=&quot;https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css&quot; rel=&quot;stylesheet&quot;&gt;

&lt;span class=&quot;socicon socicon-twitter&quot;&gt;&lt;/span&gt; 	
</code></pre>

</li-->
<li><a target="_blank" href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a></li>

</ul>



</article>

<article>
<h2>Ejercicio fuentes</h2>
<p>Hacer funcionar la tipografía de <a href="http://fontawesome.io/" target="_blank">font awesome</a>.</p>
</article>

</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('columns')){ ?>

<main class="curso">
	<h1 id="columns">columns</h1>

<article>


	<?= getRes("video_premium",222387311) ?>

	<pre><code>&lt;style&gt;
	.articulo{
		column-count: 4;
		-moz-column-count: 4;
		-webkit-column-count:4;
		<span class="green">/*espaciado entre columnas*/</span>
		column-gap:150px;
		-moz-column-gap:150px;
		-webkit-column-gap: 150px;
		<span class="green">/*lineas separadoras*/</span>
		column-rule:4px solid black;
		-moz-column-rule:4px solid black;
		-webkit-column-rule:1px solid grey
	}
&lt;/style&gt;
&lt;div class=&quot;articulo&quot;&gt;
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.
&lt;/div&gt;</code></pre>

	<?= getRes('ejemplo','ex/columnas/index.html', 'columnas',2) ?>

</article>
</main>



<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('transform')){ ?>


<main class="curso">

<article>
	<h2 id="transform">Transform</h2>


	<?= getRes("video_premium",223098175) ?>


	<h3>transform:translateX</h3>
	<?= getRes('ejemplo','ex/animations/transform-translate-x/index.html','Transform, translateX',2) ?>

	<pre><code>div{	
	background-color: pink;  
	width:300px; 	
	height:300px;
	transition:transform 2s;
}
div:hover{
	<span class="green">/*transform: function()*/</span>
	<span class="red bold">transform:translateX(100px);</span>
}</code></pre>
<h3>transform:translateY</h3>
<p>Repetir el ejercicio anterior, pero que el rectángulo se mueva ahora en el eje Y.</p>
<?= getRes('ejemplo','ex/animations/transform-translate-y/index.html', 'transform: translateY',2) ?>


<h3>Es posible mover la capa en los ejes X e Y simultáneamente utilizando:</h3>
<pre><code>transform:translate(100px, 200px);</code></pre>

<?= getRes('ejemplo','ex/animations/transform-translate/index.html', 'transform: translate',2) ?>


<h3>transform:rotate</h3>

<p>Repetir el ejercicio anterior, pero rotando el rectángulo.</p>
<pre><code>transform:rotate(720deg);</code></pre>
<?= getRes('ejemplo','ex/animations/transform-rotate/index.html','transform:rotate', 2) ?>

<p>Para concatenar efectos utilizo el espacio en blanco. <br>Ejemplo:</p>
<pre><code>transform:translate(100px, 200px) rotate(400deg);</code></pre>
<h3>transform:skewX</h3>
<p>Repetir el ejercicio anterior, pero sesgando en el eje X el rectángulo.</p>
<pre><code>transform:skewX(-25deg);</code></pre>
<?= getRes('ejemplo','ex/animations/transform-skew/index.html', 'transform: skewX',2) ?>

<h3>transform:scale</h3>
<pre><code>transform:scale(5);
transform:scale(0.5, 4);</code></pre>

<?= getRes('ejemplo','ex/animations/transform-scale/index.html','transform:scale',2) ?>
<h3>perspective</h3>
<pre><code>&lt;style&gt;
	#div1 {
		position: relative;
		height: 150px;
		width: 150px;
		border: 1px solid black;
		perspective: 150px;
	}
	#div2 {
		width: 100%;
		height: 100%;
		position: absolute;
		background-color: red;
		transition:1s;
	}
	#div2:hover{
	transform: rotateX(45deg);
	}
&lt;/style&gt;


&lt;div id=&quot;div1&quot;&gt;
&lt;div id=&quot;div2&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
<?= getRes('ejemplo','ex/animations/perspective/index.html', 'perspective',2) ?>
</article>
</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('transition')){ ?>

<main class="curso">
	<h1 id="animaciones_con_transition">Animaciones con Transition</h1>
	<?= getRes("video_premium",222387754) ?>

<article >


	<h2>transition I - Sin animación</h2>
	<?= getRes('ejemplo','ex/animations/without/index.html', 'Sin animación',2) ?>


	<h2>transition II - Con animación</h2>
	<?= getRes('ejemplo','ex/animations/with-transition/index.html', 'Con transición',2) ?>


	<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	div{	background-color: pink;width:300px; height:300px; <span class="black bold">transition: 3s</span>;}
	div:hover{background-color: black;}
&lt;/style&gt;</code></pre>

	<h2>transition II - Con animación 2</h2>
	<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	div{
		background-color: pink;width:300px; height:300px; <span class="red bold">transition: 3s;</span>
	}
	div:hover{
		background-color: black;<span class="blue bold">transition: 0.5s;</span>
	}
&lt;/style&gt;</code></pre>
	<?= getRes('ejemplo','ex/animations/with-transition-2/index.html','Con transición 2',2) ?>

<div class="notas">
	<h2>Notas:</h2>
	<p><span class="blue">El segundo transition define la duración de la animación cuando hago hover, es decir, a la ida</span>, y <span class="red">el primero cuando quito el cursor de encima del elemento, es decir a la vuelta.</span></p>
	<p>Lo normal es utilizar sólo el primer transition y que por tanto la animación a la ida y a la vuelta duren lo mismo.</p>
</div> 

<h2>Ejercicio - animar fuentes</h2>
<?= getRes("video_premium",222387340) ?>
<div class="row">
<?= getRes("video_premium",223096615) ?>
<?= getRes('ejemplo','ex/animations/animar-fuentes/index.html', 'Animar fuentes',2) ?>
</div>
<div class="row">
<?= getRes("video_premium",223096626) ?>
<?= getRes('ejemplo','ex/navbar/index.html', 'navbar',1) ?>
</div>


<h2>transition III - CSS descompuesto</h2>
<?= getRes("video_premium",223096638) ?>
<pre><code>div{
	background-color: pink;width:300px; height:300px;
	transition-property: width;
	transition-duration: 1s;
	<span class="green">/*Los tipos de aceleraci&oacute;n aceptados son: ease, linear, ease-in, ease-out, ease-in-out*/</span>
	transition-timing-function: linear;
}
</code></pre>
<?= getRes('ejemplo','ex/animations/transition-descompuesta/index.html', 'Transición descompuesta',2) ?>


<div class="notas">
	<h4>Notas:</h4>
	<p>Aceleraciones: linear, ease, ease-in, ease-out,
		ease-in-out, cubic-bezier(0.42,0,0.58,1). <br>	
		Para configurar aceleraciones bezier:<a target="_blank" href="http://matthewlein.com/ceaser/">http://matthewlein.com/ceaser/</a></p>
	</div>

	<h2>Ejercicio</h2>
	<p>Tener en cuenta que si deseo animar varios estilos, los separaré con comas: <br>
	</p>
	<pre><code>transition:width 2s, height 2s;</code></pre>
<div class="row">
	<?= getRes("video_premium",223096645) ?>




<div class="row">
	<?= getRes("video_premium",223096622) ?></div>
	<?= getRes('ejemplo','ex/animations/transformacion/index.html','Transformación',2) ?>
</div>
	
	<h2>Ejercicio width</h2>
	<p>Hacer el ejercicio del enlace</p>
	<?= getRes('ejemplo','ex/vertical-nav/index.html', 'Ejercicio width',2) ?>


	<h2>transition V - target</h2>
	<p>Cuando <span class="blue">en el href de un enlace en lugar de poner una url pongo la id de un elemento</span>, esa id sustituirá a <span class="green">:target</span> en la hoja de estilos. No funciona con el class.</p>

	<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	.container{	
		background: pink;
		width:300px; 
		height:300px;
		-webkit-transition:all 2s;
	}
	div:target{
		height:600px;
	}
&lt;/style&gt;

&lt;a href=&quot;#left&quot;&gt;link&lt;/a&gt;
&lt;div id=&quot;left&quot; class=&quot;container&quot;&gt;
&lt;/div&gt;</code></pre>
	<?= getRes('ejemplo','ex/animations/using-target/index.html','usando el atributo target',2) ?>

</article>

</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('text-overflow')){ ?>

<main class="curso">
	<h1 id="text-overflow">text-overflow</h1>

<article>
<?= getRes("video_premium",222387323) ?>

<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	div{
		width:300px; 
		height:1em;
		overflow: hidden; /*Recorta la capa para ajustara a sus dimensiones*/
		white-space: nowrap;/*si el texto no cabe en el ancho de la capa el comportamiento normal es saltar a la siguiente l&iacute;nea. Este estilo evita el salto de l&iacute;nea*/
		text-overflow: ellipsis;/*tras haber hecho los pasos anteriores, a&ntilde;ade unos puntos al final del texto para indicar que el texto continua*/
}
	div:hover{
		overflow: visible;
		white-space:normal;
	}
&lt;/style&gt;
&lt;div&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
&lt;/div&gt;</code></pre>
<?= getRes('ejemplo','ex/text-overflow/index.html', 'text-overflow',2) ?>


<p>Luego, utilizando javascript, podré hacer que el texto se descolapse y colapse con un click.</p>
</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('display')){ ?>

<main class="curso">
		<h1 id="display">display:block, inline, inline-block</h1>

	<article>

		<p> <strong>display:block</strong>
			→ el elemento coge el ancho, el alto especificados y se coloca verticalmente a continuación del anterior. Si tiene contenido y no especificamos ancho ni alto, el ancho será el 100% de la capa que lo contiene y el alto será lo que ocupe el contenido.
		</p>

		<p>
			<strong>display:inline</strong>
			→ el elemento no coje el ancho ni el alto y se coloca horizontalmente a continuación del anterior.
		</p>
		<p>
			<strong>display:inline-block</strong>
			→ el elemento coge el ancho y el alto y se coloca horizontalmente a continuación del anterior.
		</p>

		<div class="row">
				<?= getRes("video_premium",222316777) ?>



		<?= getRes('ejemplo','ex/display.html', 'Ver ejemplo de uso de display') ?>

</div>
		<h2 id="separacion_entre_capas">
			display:inline-block → separación entre capas
		</h2>
		<p>
			Para evitar el espacio en blanco que hay entre las capas podemos:
		</p>
		<ul>
			<li>
				poner las capas una a continuación de la otra, sin saltos de línea ni espacios en blanco.
			</li>
			<li>comentar los saltos de línea
				<pre><code>&lt;div&gt;&lt;/div&gt;&lt;!--
--&gt;&lt;div&gt;&lt;/div&gt;</code></pre>
			</li>
			<li>Ajustar la maquetación de las capas
				<pre><code>&lt;div&gt;&lt;/div
&gt;&lt;div&gt;&lt;/div&gt;</code></pre>
			</li>
			<li>trabajar los font-size de 0px para eliminar esta separación (para mi gusto, la peor opción).</li>
		</ul>

		<h2 id="float_left">float:left</h2>
		<p>
			<strong>Elementos con display:block y float:left</strong>
			se irán posicionando horizontalmente.
		</p>

		<ul>
			<li>
				Es necesario indicar este estilo tanto a la capa sobre la que me apoyo como a la capa que se apoya.
			</li>
			<li>
				Este posicionamiento hace que la capa contenedora de los div con float no crezca según estos van creciendo. Para solucionarlo, puedo poner overflow:auto u overflow:hidden a la capa contenedora.
			</li>

			<li>
				El estilo clear:right hace que cuando usas float no quepan elementos a la derecha. El estilo clear:both hace que no quepan a ambos lados.
			</li>
		</ul>
		<pre><code>.iceburg{
	position:fixed
}
.titanic{
	float:none
}</code></pre>

	<h2 id="ejemplo_variosposicionamientos">Ejemplo de varios posicionamientos</h2>
	<?= getRes('ejemplo','ex/varios-posicionamientos.html', 'Varios posicionamientos') ?>

</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('margin-collapse')){ ?>

 <main class="curso">
 				<h1 id="margin-collapse">Margin Collapse</h1>

		<article>
						<?= getRes('ejemplo','ex/margin-collapse.html', 'Ver ejercicio Margin Collapse', 1) ?>

			




			<h2>Ejercicio dejavu</h2>
						<?= getRes("video_premium",222283158) ?>


			<p>La etiqueta time se usa para marcar fechas y horas en un formato que entiendan los ordenadores. Dicha fecha puede ser el contenido de la etiqueta o puede ir en el atributo datetime con lo cual el contenido puede ser cualquier cosa.</p>


			<div class="row">
			<?= getRes("video_premium",222282526) ?>

			<?= getRes('ejemplo','ex/dejavu/index.html', 'Ver ejercicio Dejavu', 2) ?>
</div>

		</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('padding-width')){ ?>
<main class="curso">
			<h1 id="padding-width">padding y width</h1>

		<article>
			
			<p>
				Cuando añadimos un padding a una capa con un width definido expresamente, ambas medidas se sumarán y probablemente haya que restar lo que hemos añadido de padding al width para que la maquetación nos quede correcta.
			</p>
			<p>
				Sin embargo, si la capa no tiene un width asignado expresamente, el display:block hará que el ancho de la capa sea el ancho de la capa que la contiene, y esta medida no aumentará al añadir el padding.
			</p>
			<p>
				Por otra parte, utilizando el estilo
				<span class="black bold">box-sizing: border-box;</span>
				ya no será necesario sustraer el padding del width o del height según corresponda.
			</p>

			<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	div	{
		width: 300px;
		padding: 40px
	}
	.box1{
		background: green
	}	
	.box2{
		background: red;
		box-sizing:border-box;
	}

&lt;/style&gt;

&lt;div class=&quot;box1&quot;&gt;
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco 
&lt;/div&gt;

&lt;div class=&quot;box2&quot;&gt;
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore 
&lt;/div&gt;</code></pre>

<div class="row">
			<?= getRes("video_premium",222320019) ?>

			<?= getRes('ejemplo','ex/box-sizing.html','Ver ejemplo de box-sizing', 1) ?>
</div>

</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('ejercicios-maquetacion')){ ?>

<main class="curso">
		<h1 id="ejercicios-maquetacion">Ejercicios de maquetación vertical</h1>

	<article>

		<h2>Ejercicio una columna</h2>

							<?= getRes("video_premium",222316736) ?>

		<img src="https://pablomonteserin.com/res/html5/ex/una-columna/img/cabecera.gif" alt="imagen ejercicio html, logo">
		<img src="https://pablomonteserin.com/res/html5/ex/una-columna/img/bot.gif" alt="imagen ejercicio HTML, footer">
		<br><br>

		<div class="row">
		<?= getRes("video_premium",222319561) ?>
		<?= getRes('ejemplo','ex/una-columna/index.html', 'Ver ejercicio una sola columna resuelto', 2) ?>

		</div>





		<h2>Ejercicio teatro</h2>
		<?= getRes("video_premium",222316745) ?>

		
		<p>
			Nota: para que la capa interior de texto tome el márgen superior necesario deberemos asignarle un estilo margin-top. Esto hará que la capa contenedora baje. Podremos arreglar estos dándole el estilo overflow-hidden a la capa contenedora o el estilo float a la capa contenida.
		</p>
		<p>
			También podemos usar padding-top en lugar de margin-top en la capa contenedora.
		</p>
		<p>
			Para que aparezcan barras de desplazamiento cuando el contenido de una capa no quepa dentro, usaremos: overflow:auto.
		</p>
		<img src="https://pablomonteserin.com/res/html5/ex/teatro/teatro.jpg" alt="teatro">
		<br><br>

<div class="row">
		<?= getRes("video_premium",222319700) ?>

		<?= getRes('ejemplo','ex/teatro/index.html', 'Ver ejercicio del teatro', 2) ?>
	</div>

		<h2>Ejercicio dummies</h2>
				<?= getRes("video_premium",222316754) ?>
		<img src="https://pablomonteserin.com/res/html5/ex/dummies/banner.jpg" alt="banner">

		<div class="row">
		<?= getRes("video_premium",222316764) ?>

		<?= getRes('ejemplo','ex/dummies/index.html', 'Ver ejercicio resuelto', 2) ?>

		
</div>

	</article>
</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('newsletter-responsive')){ ?>

<main class="curso">
	<h1 id="newsletter-responsive">Hacer una newsletter responsive sin media queries</h1>

<article >
		<?= getRes("video_premium",222320028) ?>

	<pre><code>&lt;table style=&quot;text-align:center; margin:auto&quot;&gt;
	&lt;tr&gt;
		&lt;td&gt;
			&lt;table class=&quot;column&quot; style=&quot;display: inline-block; max-width: 300px; width: 100%;&quot;&gt;
				&lt;tr&gt;
					&lt;td&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam maiores blanditiis vitae, esse incidunt officia, assumenda illo! Ratione et laudantium architecto repellendus obcaecati possimus. Quod voluptatibus porro, officiis eius voluptates.&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/table&gt;
			&lt;table class=&quot;column&quot; style=&quot;display: inline-block; max-width: 300px; width: 100%;&quot;&gt;
				&lt;tr&gt;
					&lt;td&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt inventore harum dicta minus culpa recusandae consequuntur optio voluptas distinctio ratione! Accusantium, officiis. Ducimus, itaque sint vitae consequuntur est nihil possimus.&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/table&gt;
		&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;</code></pre>



	<?= getRes('ejemplo','ex/responsive-sin-media-queries.html', 'Ver newsletter responsive sin media queries',1) ?>

	<h2>Ejercicio - Hacer la siguiente newsletter responsive</h2>
		<div class="row">
		<?= getRes('recurso','/res/html5/zip/fotos.zip', 'Ver ejercicio resuelto') ?>
		<?= getRes('ejemplo','ex/newsletter/index.html', 'Imagenes newsletter') ?>
</div>

		

	
	<p>Para que las imágenes se vean, habrá que subirlas a google drive, y hacerlas públicas mediante <a target="_blank" href="https://sites.google.com/site/gdocs2direct/">este enlace</a>.</p>
</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('img-vs-background')){ ?>

<main class="curso">
		<h1 id="img-vs-background">img vs background</h1>
<article>
	<strong>Usa la etiqueta img si...</strong>
	<ul>
		<li>Piensas que la gente puede imprimir tu página y quieres que la imágen sea incluída por defecto.</li>
		<li>La imágen (con atributo alt) tiene importancia semántica</li>

	</ul>
	<strong>Usa el css background-image si...</strong>
	<ul>
		<li>La imagen no forma parte del contenido.</li>
		<li>No quieres que las imágenes sean incluídas al imprimir</li>
		<li>Quieres mejorar la velocidad de carga usando css sprites.</li>
	</ul>
	<h2 id="ejercicio_3_columnas">Ejercicio 3 columnas</h2>
	<?= getRes("video_premium",222316749) ?>


	<img src="https://pablomonteserin.com/res/html5/ex/3-col/bg.jpg" alt="background para ejercicio html"> <br> <br>

<div class="row">
	<?= getRes("video_premium",222316786) ?>

	<?= getRes('ejemplo','ex/3-col/index.html', 'Ejercicio 3 columnas',2) ?>
</div>



	<h2 id="ejercicio_alumnos">Ejercicio anuncios en columnas</h2>
	<?= getRes('ejemplo','ex/anuncios-en-columnas/index.html', 'Ver ejercicio anuncios en columnas', 2) ?>

</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('flexbox')){ ?>

<main class="curso">
			<h1 id="flexbox">Flexbox</h1>

	<article>

		<?= getRes("video_premium",223105883) ?>

		<p> Usando <strong>display:flex</strong> o <strong>display:inline-flex</strong> en una capa, la convertimos en un contenedor flexible. En el primer caso, la capa se comporta con respecto a otros elementos de la página como si tuviese <strong>display:block</strong>, en el segundo, como si tuviese <strong>display:inline-block</strong></p>


		<p><a href="https://pablomonteserin.com/tutorial-introductorio-de-flexbox/">Ver videotutorial introductorio de Flexbox</a></p>
		<h2 id="flexdirection">flex-direction</h2>
		<p>Especifica como se sitúan los elementos flexibles dentro del contenedor.</p>
			<div class="row">

					<?= getRes('ejemplo','ex/flexbox/flex-direction.html', 'Ver ejemplo de flex-direction') ?>


				</div>


		<h2 id="alinearcontenidoabajo">Alinear contenido abajo</h2>
		<p>La siguiente maquetación es muy típica cuando estamos haciendo páginas webs.</p>
		<pre><code>&lt;style&gt;
.fila{
	<span class="bold">display: flex;</span>
	width: 600px;
	justify-content: space-between;
}
.col{
	<span class="bold">display: flex;
	position: relative;
	flex-direction: column;</span>
	text-align: justify;
	width: 45%
}
.col a{
	<span class="bold">margin-top: auto;</span>
	display: block;
	text-align: center;
	width: 100%
}
&lt;/style&gt;
&lt;div class=&quot;fila&quot;&gt;
	&lt;div class=&quot;col&quot;&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores esse, obcaecati quisquam, aperiam reprehenderit!&lt;/p&gt;
		&lt;a href=&quot;#&quot;&gt;Enlace&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class=&quot;col&quot;&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, odio est cum similique velit, animi cupiditate tempore cul&lt;/p&gt;
		&lt;a href=&quot;#&quot;&gt;Enlace&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
<?= getRes('ejemplo','ex/flexbox/alineado-abajo/index.html', 'Alinear contenido abajo') ?>

<h2 id="flexwrap">flex-wrap</h2>

<ul>
	<li><strong>wrap</strong>: Los elementos de la capa se distribuirán en una o varias filas en función de su tamaño.</li>
	<li><strong>nowrap</strong>: Los elementos de la capa estarán sí o sí en una sola fila.</li>
</ul>

<?= getRes('ejemplo','ex/flexbox/flex-wrap.html', 'Ver ejemplo de flex-wrap') ?>


<h2 id="flexflow">flex-flow</h2>
<pre><code>flex-flow:<span class="red bold">row</span> <span class="blue bold">wrap</span>;</code></pre>
<p>O lo que es lo mismo:</p>
<pre><code>flex-direction: <span class="red bold">row</span>;
flex-wrap: <span class="blue bold">wrap</span></code></pre>

<?= getRes('ejemplo','ex/flexbox/flex-flow.html', 'Ver ejemplo flex-flow') ?>

 
	<h2 id="ejercicio_3_columnas_con_flex">Ejercicio 3 columnas con flex</h2>
	<img src="https://pablomonteserin.com/res/html5/ex/3-col/bg.jpg" alt="background para ejercicio html"> <br> <br>



	<?= getRes('ejemplo','ex/flexbox/3-col/index.html', 'Ejercicio 3 columnas con flex',2) ?>






	<h2 id="ejercicio_alumnos_con_flex">Ejercicio anuncios en columnas con flex</h2>
	<?= getRes('ejemplo','ex/flexbox/anuncios-en-columnas/index.html','Ver ejercicio anuncios en columnas') ?>



	<h2 id="order">order</h2>

	<p>Podemos establecer el orden en el que aparecen los componentes de una caja flexible. Por defecto aparecerán tal y como aparecen en el código HTML (equivale a order: 0)</p>
	<?= getRes('ejemplo','ex/flexbox/order.html','Ver ejemplo de uso de order') ?>



	<h2 id="align_items">align-items</h2>
	<pre><code>#wrapper{
	display: flex;
	align-items: flex-start | flex-end | center | baseline | stretch;
}</code></pre>
	<img src="img/align-items.svg" alt="alinear elementos  verticalmente con display:flex">
	<?= getRes('ejemplo','ex/flexbox/align-items.html', 'Ejemplo') ?>
	<h2>Align self</h2>
	<pre><code>#wrapper{
	display: flex;
	align-self: flex-start | flex-end | center | baseline | stretch;
}</code></pre>

	<img src="img/align-self.svg" alt="alinear un único elemento verticalmente con display flex">
	<?= getRes('ejemplo','ex/flexbox/align-self.html', 'Ejemplo') ?>

	<h2 id="justifycontent">justify-content</h2>
	<pre><code>#wrapper{
	display: flex;
	justify-content: flex-start | flex-end | center | space-between | space-around | space-evenly;
}</code></pre>
	<img src="img/justify-content.svg" alt="justificación de elementos con display flex">
	<?= getRes('ejemplo','ex/flexbox/justify-content.html', 'Ejemplo') ?>
	
	<h2>flex:resumen</h2>
	<p><a href="http://the-echoplex.net/flexyboxes/" target="_blank">Flexy Boxes</a></p>
	<p><a href="https://flexboxfroggy.com/" target="_blank">Flexbox Froggy</a></p>
	<?= getRes('ejemplo','ex/flexbox/flexbox-resumen.html', 'Ejemplo') ?>

<h2>Cambiar el tamaño de las columnas con flex</h2>

<pre><code>&lt;style&gt;
	.container{
		display: flex;
	}

	.rosa{
		background: pink;
		flex-basis: 100px
	}

	.naranja{
		background: orange;
	}
&lt;/style&gt;

&lt;div class=&quot;container&quot;&gt;
	&lt;div class=&quot;col rosa&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cupiditate magnam veniam architecto cum eligendi distinctio, voluptates, ipsa inventore autem et possimus eius suscipit esse deleniti hic porro repellat dolore.&lt;/div&gt;
	&lt;div class=&quot;col naranja&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, ducimus? Iusto quisquam, nam expedita animi? Sint delectus temporibus impedit praesentium ratione, officiis harum accusamus dolor, error doloribus iste quisquam animi!&lt;/div&gt;
&lt;/div&gt;</code></pre>

<?= getRes('ejemplo','ex/flexbox/flex-basis.html', 'Ver ejemplo') ?>
<h3>flex: abreviatura de flex-grow, flex-shrink, flex-basis</h3>
	<p>Nos permite establecer cómo crece o decrece un elemento flexible dentro del contenedor en relación a los demás. </p>

	<pre><code>&lt;style&gt;
	.container{
		display: flex;
	}

	.rosa{
		background: pink;
		flex: 1
	}
	.naranja{
		background: orange;
		flex: 3
	}
&lt;/style&gt;

&lt;div class=&quot;container&quot;&gt;
	&lt;div class=&quot;col rosa&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cupiditate magnam veniam architecto cum eligendi distinctio, voluptates, ipsa inventore autem et possimus eius suscipit esse deleniti hic porro repellat dolore.&lt;/div&gt;
	&lt;div class=&quot;col naranja&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, ducimus? Iusto quisquam, nam expedita animi? Sint delectus temporibus impedit praesentium ratione, officiis harum accusamus dolor, error doloribus iste quisquam animi!&lt;/div&gt;
&lt;/div&gt;
</code></pre>
<?= getRes('ejemplo','ex/flexbox/cambiar-size.html', 'Ver ejemplo') ?>



	<p>Esta propiedad se puede volver más compleja, porque puede tener tres parámetros: flex-grow, flex-shrink y flex-basis.</p>


	<h3>Ejemplo </h3>
	<p>Supongamos que tenemos un contenedor al que llamaremos "wrapper" que tiene 300px de ancho.</p>
	<pre><code>#wrapper { display: flex;}</code></pre>
	<p>este contenedor tiene en su interior dos elementos, col1 y col2, que no tienen un ancho especificado. Vamos a establecer los siguientes valores para ambos de la propiedad flex: flex-grow, flex-shrink, flex-basis:</p>

	<pre><code>.col1 { flex: <span class="red bold">3</span> <span class="green bold">1</span> <span class="blue bold">100px</span>;}
.col2 { flex: <span class="red bold">1</span> <span class="green bold">2</span> <span class="blue bold">100px</span>;}</code></pre>
		<p>Como hemos establecido un flex-basis para cada elemento de 100px, nos quedarán aún 100px libres sin ocupar (300px del contenedor menos 100px del elemento col y menos 100px del elemento col2). ¿Como se reparte ese espacio disponible entre los elementos col1 y col2? En función del <span class="red bold">flex-grow</span>: 3 partes para el elemento B (75px) y una parte para el elemento C (25px). Es decir, de inicio el elemento B ocupará 100px+75px = 175px de los 300px disponibles que mide el elemento A, y el elemento C ocupará 100px+25px=125px de los 300px disponibles del elemento A.</p>

		<p>Ahora bien, supongamos que el elemento contenedor A mide 170px y no 300px. Eso quiere decir que habrá espacio negativo, porque los elementos B y C tienen un flex-basis de 100px cada uno, es decir, 200px, que es 30px mayor que los 170px del contenedor. En este caso el ratio que se usa es el <span class="green bold">flex-shrink</span>, que recordemos que era 1 para el elemento B y 2 para el elemento C. Esos 30px se restarán del ancho de los elementos B y C en función de dicho ratio: al elemento B se le quitarán 10px y al elemento C se le quitarán 20px.</p>
		<ul>
			<li><span class="red bold">flex-grow</span>: Especifica el factor de crecimiento, es decir, cuanto crecerá el elemento en relación a los demás cuando hay espacio disponible del contenedor a ocupar. Por defecto es ‘0’, que es el valor que dimos en el ejemplo anterior a los tres elementos.</li>
			<li><span class="green bold">flex-shrink</span>: Determina el factor de reducción, es decir, cuanto decrecerá el elemento en relación a los demás cuando hay espacio negativo en el contenedor (el contenedor es más pequeño de los anchos combinados de los elementos que hay en su interior). Por defecto es ‘1’.</li>
			<li><span class="blue bold">flex-basis</span>: Toma el mismo valor que la propiedad ‘width’ y establece el tamaño inicial del elemento antes de distribuir el espacio libre de acuerdo con los ratios de flex-grow o flex-shrink. Cuando se omite, su valor es ‘main-size’ (anteriormente, ‘auto’).</li>
		</ul>

	<?= getRes('ejemplo','ex/flexbox/flex.html', 'Ejemplo de uso de flex') ?>



	</article>

</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('pintar-color-fondo-linea')){ ?>

 <main class="curso">
	<h1 id="pintar-color-fondo-linea">Pintar el color de fondo de una línea</h1>

<article>
	<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	p {
		display: inline;
		background: pink;
		font-size: 1em;
		line-height: 1.5em;
	}
&lt;/style&gt;
&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur.
&lt;/p&gt;
</code></pre>
<div class="row">
	<?= getRes("video_premium",222320049) ?>

			<?= getRes('ejemplo','ex/pintar-color-fondo-linea.html', 'Pintar color de fondo de una línea', 1) ?>
</div>
	</article>
	</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('incrustar-imagen')){ ?>

 <main class="curso">

<h1>Incrustar una imagen</h1>
<article>
<p>Si usamos el inspector de código observaremos que el párrafo se superpone sobre la imágen, pero el texto la envuelve. Esto ocurre porque mientras que la capa tiene display:block, el texto tiene display:inline.</p>
<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	img{float: left; margin: 20px}
&lt;/style&gt;

&lt;img  src=&quot;http://lorempixel.com/200/200&quot;/&gt;
&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</code></pre>

<div class="row">
<?= getRes("video_premium",222320056) ?>

	<?= getRes('ejemplo','ex/incrustar-foto-en-texto.html', 'Incrustar foto en texto', 1) ?>
</div>



<h2>Ejercicio Incrustar una imagen en texto  florencia</h2>
<div class="row">
<?= getRes("video_premium",222320093) ?>

<?= getRes("video_premium",222320066) ?>
</div>

<p>Estilos nuevos necesarios:</p>
<pre><code>text-transform: uppercase;
letter-spacing: 50px;</code></pre><div class="row">
	<?= getRes('recurso','/res/html5/zip/florencia.zip', 'Descargar recurso') ?>
	<?= getRes('ejemplo','ex/florencia/index.html', 'Ver ejercicio Florencia resuelto',2) ?></div>

</article>

</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('sangria-francesa')){ ?>

 <main class="curso">


<h1 id="sangria-francesa">Sangría francesa (hanging intent)</h1>
<article>
<div class="row">
<?= getRes("video_premium",222320101) ?>

<?= getRes('ejemplo','ex/sangria-francesa.html', 'Ver ejemplo funcionando',1) ?>
</div>
<pre><code>.hangingindent {
	padding-left: 22px ;
	text-indent: -22px ;
}</code></pre>
</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('capitalizar-letra')){ ?>

 <main class="curso">
<h1 id="capitalizar-letra">Capitalizar una letra</h1>
<article>
<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	<span class="red bold">p</span>:first-of-type:first-letter{
	font-size: 3em
}
&lt;/style&gt;

&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex.&lt;/p&gt;

&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris.&lt;/p&gt;</code></pre>




<p>No confundir :first-of-type con :first-child. :first-child no se aplica si el primer elemento del grupo no es <span class="red bold">el indicado por el selector</span>.</p>
<?= getRes('ejemplo','ex/capitalizar-letra.html', 'Capitalizar letra',1) ?>


<h2>Ejercicio Oscar Wilde</h2>
<p>Poniendo el estilo <span class="black bold">float:left</span> a la letra capitalizada, la podremos incrustar en el texto.</p>

<?= getRes("video_premium",222325171) ?>



<div class="row">
<?= getRes("video_premium",222325178) ?>
<?= getRes('ejemplo','ex/citas-oscar-wilde/index.html', 'Ejercicio citas Oscar Wilde',2) ?>
</div>

<h2>Justificado y centrado de la última línea</h2>
<pre><code>text-align: justify;
text-align-last: center;</code></pre>
</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('borrar-outline')){ ?>

<main class="curso">
	<h1>Eliminar el borde (outline) del elemento activo</h1>

	<p>No es muy recomendable borrarlo por razones de usabilidad. A pesar de ello, muchos clientes insisten en querer borrarlo.</p>
<pre><code>body:not(.keyboardUser) *:focus {
	outline: none;
}</code></pre></main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('content-editable')){ ?>

<main class="curso">
			<h1 id="content-editable">contenteditable</h1>

	
		<article>

			<?= getRes("video_premium",222376789) ?>

			<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot; /&gt;
		&lt;title&gt;a_paginaSencilla&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;header&gt;
			&lt;h1&gt;T&iacute;tulo de la p&aacute;gina&lt;/h1&gt;
		&lt;/header&gt;
		<span class="red">&lt;main contenteditable=&quot;true&quot;&gt;
			&lt;p&gt;
				Contenido de la p&aacute;gina
			&lt;/p&gt;
			&lt;article&gt;
				&lt;h2&gt;Titulo del art&iacute;culo&lt;/h2&gt;
				&lt;p&gt;Contenido del art&iacute;culo&lt;/p&gt;
			&lt;/article&gt;
			&lt;aside&gt;
				Contenido tangencial
			&lt;/aside&gt;
		&lt;/main&gt;</span>
		&lt;footer&gt;
			&lt;h5&gt;Pie de la p&aacute;gina&lt;/h5&gt;
		&lt;/footer&gt;
	&lt;/body&gt;
&lt;/html&gt;</code></pre>

			<?= getRes('ejemplo','ex/content-editable.html','Content editable',1) ?>
</article></main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('soporte-textos-japoneses-coreanos')){ ?>

<main class="curso">
				<h1 id="soporte-textos-asiaticos">Soporte para textos japoneses y coreanos</h1>

<article>

			<?= getRes("video_premium",221233844) ?>
<pre><code>&lt;ruby&gt;私&lt;rt&gt;わたし&lt;/rt&gt;&lt;/ruby&gt;
の&lt;ruby&gt;名前は&lt;rt&gt;なまえ&lt;/rt&gt;&lt;/ruby&gt;は
			
パブロ  です :D</code></pre>

			<?= getRes('ejemplo','ex/textos-asiaticos.html', 'Textos asiáticos',1) ?>

			



			<h2>Ejercicio</h2>
			<?= getRes("video_premium",222382104) ?>

			<div class="row">

			<?= getRes("video_premium",222382115) ?>
						<?= getRes('ejemplo','ex/caracteres-asiaticos.html', 'Caracteres asiáticos',1) ?>

</div>
		</article>
	</main>

	<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('wbr')){ ?>

<main class="curso">
	<h1 id="wbr">wbr - Word Break</h1>

<article>
	<p>En caso de que la palabra no quepa, indica por dónde será cortada.</p>

	<?= getRes("video_premium",223104354) ?>
	<pre><code>&lt;p&gt;
	Palabrasuperlarga&lt;wbr/&gt;enlaquevoyadecidirpordondequieroquesecorte&lt;wbr/&gt;encasodenocaberenlacapaquelacontiene
&lt;/p&gt;</code></pre>

	<?= getRes('ejemplo','ex/wbr-teoria.html', 'Teoría wbr',1) ?>


	<h2>Ejercicio</h2>
	<p>Hacer una página web con 3 columnas que contengan, repetida muchas veces la frase: <br>
		Un murcié<span class="red bold">-</span>lagosuper<span class="red bold">-</span>califragilístico<span class="red bold">-</span>espialidoso
	</p>
	<p>Los guiones rojos indican los puntos en los que introduciremos un word break.</p>
	<?= getRes('ejemplo','ex/wbr.html', 'wbr',1) ?>
</article>


</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('ejercicios')){ ?>
<main class="curso">

	<h1 id="ejercicios">Ejercicios de HTML</h1>


<article>
	<h2>Ejercicio página sencilla</h2>
		<?= getRes("video_premium",222325221) ?>

	<img src="https://pablomonteserin.com/res/html5/ex/pagina-sencilla/logo.png" alt="logo para ejercicio HTML">


<div class="row">
	<?= getRes("video_premium",222326648) ?>
	<?= getRes('ejemplo','ex/pagina-sencilla/index.html', 'Ver solución del ejercicio',2) ?>
</div>


	<h2>Ejercicio Ventana</h2>
		<?= getRes("video_premium",222325236) ?>


	<p>
		Habitualmente, es conveniente agrupar la información en bloques que formen columnas en vez de en bloques que formen filas. Por tanto, lo apropiado en este ejercicio es que los tres elementos centrales (barra horizontal amarilla, rectángulo azul y barra horizontal morada) estén contenidos dentro de una capa llamada columna central y que a su vez toda la ventana esté contenida dentro de una capa llamada ventana
	</p>
	<p>
		Consejo: <br>
		No apoyes nunca una capa sobre varias capas. Siempre apoyaremos una capa sobre una capa.
	</p>

	<div class="row">
<?= getRes("video_premium",222325245) ?>
	<?= getRes('ejemplo','ex/ventana-float-left/index.html', 'Ver solución ejercicio ventana',2) ?>

</div>
	
	<h2>Ejercicio panteón</h2>
		<?= getRes("video_premium",222325256) ?>

	<img src="https://pablomonteserin.com/res/html5/ex/ejercicio-tres-columnas/panteon.jpg" alt="imagen pateón para ejercicio HTML"> <br><br>
	<div class="row">
	<?= getRes("video_premium",222326877) ?>
	<?= getRes('ejemplo','ex/ejercicio-tres-columnas/index.html', 'Ver ejercicio panteón resuelto',2) ?>
	
</div>
</article>
</main>
	
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('links-interes')){ ?>

<main class="curso">	<h1 id="links-interes">Links de interés</h1>

<article>
	<?= getRes("video_premium",222326909) ?>


	<h2>Plantillas</h2>
	<ul>
<!-- li>
	<a  target="_blank" href="http://www.themesvault.com">http://www.themesvault.com</a>
</li-->
<li>
	<a  target="_blank" href="http://templated.co/">http://templated.co/</a>
</li>
<li><a  target="_blank" href="http://html5up.net/">http://html5up.net/</a></li>
<li>
	<a  target="_blank" href="http://tympanus.net/codrops/">http://tympanus.net/codrops/</a>
</li>
<li>
	<a  target="_blank" href="http://jxnblk.com/colorable/demos/text/">http://jxnblk.com/colorable/demos/text/</a>
</li>
<li>
	<a  target="_blank" href="http://html5boilerplate.com/">http://html5boilerplate.com/</a>
</li>
<li>
	<a  target="_blank" href="http://www.initializr.com/">http://www.initializr.com/</a>
</li>

<li><a target="_blank" href="http://www.testmycss.com/">http://www.testmycss.com/</a></li>
</ul>
<h2>Páginas de sonidos</h2>
<ul>
	<li>
		<a  target="_blank" href="http://www.freesound.org/">http://www.freesound.org/</a>
	</li>
	<li>
		<a  target="_blank" href="http://www.sounddogs.com/">http://www.sounddogs.com/</a>
	</li>
	<li>
		<a  target="_blank" href="http://www.soundsnap.com/">http://www.soundsnap.com/</a>
	</li>
	<li>
		<a  target="_blank" href="http://www.jamendo.com/">http://www.jamendo.com/</a>
	</li>
	<li>
		<a  target="_blank" href="http://www.gritandoensilencio.net/">http://www.gritandoensilencio.net/</a>
	</li>
</ul>
<h2>Cross Browsing</h2>
<ul>
	<li>
		<a  target="_blank" href="http://www.browserstack.com">http://www.browserstack.com</a>
	</li>
	<li>
		<a  target="_blank" href="http://quirktools.com/screenfly/">http://quirktools.com/screenfly/</a>
	</li>
	<li>
		<a href="https://www.responsinator.com/">https://www.responsinator.com/</a>
	</li>
</ul>
<h2>Compartir</h2>
<ul>
	<li><a  target="_blank" href="http://www.sharelinkgenerator.com/">http://www.sharelinkgenerator.com/</a></li>
</ul>
</article>

</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('position')){ ?>

<main class="curso">
	<h1 id="position">position</h1>

<article>

	<?= getRes("video_premium",222326945) ?>

	<ul>
		<li>
			<span class="red bold">static</span>
			: (por defecto) no obedece a los estilos top, left, bottom, right.
		</li>
		<li>
			<span class="red bold">relative</span>
			:	permite posicionar un elemento respecto de la posición dónde debería ir. Será posible utilizar los estilos top, left, bottom y right.
			<?= getRes('ejemplo','ex/position/relative/index.html','Ver ejemplo de uso de relative',2) ?>

		</li>
		<li>
			<span class="red bold">absolute</span>
			: permite la superposición.

					<?= getRes('ejemplo','ex/position/absolute/index.html','Ver ejemplo de uso de fixed',2) ?>

		</li>
		<li>
			<span class="red bold">fixed</span>
			: permite la superposición. Además, por mucho scroll que hagamos, el elemento no se desplazará.
									<?= getRes('ejemplo','ex/position/fixed/index.html','Ver ejemplo de uso de fixed',2) ?>

		</li>
		<li>
			<span class="red bold">inherit</span>
			: el elemento hereda sus estilos de la capa que lo envuelve.
		</li>
		<li>
			<span class="red bold">sticky</span>
			: Es similar al <span class="i">fixed</span>, pero con la diferencia de que al aplicar el estilo, el elemento no cae fuera de la línea de flotación. Además, podemos separar el elemento del límite superior de la pantalla y cuando hagamos scroll el elemento queda fijado (ver ejemplo). 

			<div class="row">
	<?= getRes("video_premium",268147364) ?>
						<?= getRes('ejemplo','ex/position/sticky/index.html','Ver ejemplo de uso de sticky',2) ?>

						</div>

		</li>
	</ul>

	<h2>Hacer una capa con un height:100%</h2>
	<pre><code>&lt;style&gt;
	.capa1{
		background: pink;
		height: 100vh;
	}
&lt;/style&gt;

&lt;div class=&quot;capa1&quot;&gt;&lt;/div&gt;</code></pre>
<?= getRes('ejemplo','ex/height-100x100/index.html', 'Ver ejemplo de height 100x100',2) ?>

<h2>Ejercicio position absolute</h2>
<?= getRes("video_premium",222326961) ?>


<p>Tener en cuenta que al redimensionar verticalmente la pantalla, cambia el tamaño de las capas. Para esto, las capas deben tener una altura en porcentajes.</p>
<p>Las cinco capas que se superponen entre sí al hacer hover tendrán "position:absolute". Además, deberán estar dentro de una capa con "position:relative" para que al aplicarles los estilos "top,left,bottom y right" no se posicionen respecto de los límites de la pantalla, sino respecto de los límites de la capa que las envuelve.</p>
<p>La altura de la capa que contiene las cinco capas con "position:absolute" será del 50% de la pantalla.</p>

<div class="row">
<?= getRes("video_premium",222326961) ?>
<?= getRes('ejemplo','ex/murphy/index.html', 'Ver ejercicio position absolute',2) ?>
</div>

</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('opacidades')){ ?>

<main class="curso">
		<h1 id="opacidades">Opacidades</h1>

<article>

	<pre><code>&lt;body style=&quot;background-image:url('back.jpg')&quot;&gt;
	&lt;div style=&quot;background-color:red; width:300px; height:300px; <span class="red bold">opacity:0.5</span>; filter: alpha(opacity=50);&quot;&gt;
		&lt;p style=&quot;color:white&quot;&gt;Las rosas son rosas, el cielo es azul!!
		&lt;/p&gt;
	&lt;/div&gt;
&lt;/body&gt;</code></pre>

<div class="row">
		<?= getRes("video_premium",222326972) ?>

	<?= getRes('ejemplo','ex/opacidad/index.html', 'Opacidades',1) ?>
</div>


</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('popup-css')){ ?>
	<main class="curso">
	<h1 id="popup-css">Popups con CSS</h1>

<article>


	<pre><code>&lt;style&gt;
	a .capaFlotante{
		position:absolute;
		margin-left:20px;
		margin-top:20px;
		display: none;
		color:black;
	}
	a:hover .capaFlotante{
		display: block
	}
&lt;/style&gt;

&lt;a href=&quot;#&quot;&gt;
&lt;span&gt;Enlace&lt;/span&gt;
&lt;span class=&quot;capaFlotante&quot;&gt;Capa flotante&lt;/span&gt;
&lt;/a&gt;</code></pre>
<div class="row">
<?= getRes("video_premium",222326980) ?>

		<?= getRes('ejemplo','ex/pop-up-con-css/index.html', 'Pop up con css',2) ?>
</div>
<h2>Ejercicio</h2>
<div class="row">
<?= getRes("video_premium",222350059) ?>
<?= getRes('ejemplo','ex/popup/index.html', 'Popup', 2) ?>
</div>

<p>Al hacer hover sobre el enlace aparece la fotografía.</p>

<?= getRes("video_premium",222350454) ?>

</article>

</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('galeria-fotos')){ ?>

<main class="curso">
		<h1 id="galeria-fotos">Ejercicio - Galería de fotos</h1>

<article>
	<?= getRes("video_premium",222350069) ?>


	<p>Utilizando el siguiente código HTML, realizar el efecto descrito en el enlace:</p>
	<pre><code>&lt;div class=&quot;negro&quot;&gt;
	&lt;img class=&quot;cosas&quot; src=&quot;http://lorempixel.com/300/300&quot;&gt;
	&lt;p&gt;Foto de elefante&lt;/p&gt;
&lt;/div&gt;</code></pre>
	<p>Este ejercicio se puede resolver en dos fases:</p>
	<ol>
		<li>Sin texto</li>
		<li>Que un texto se haga visible al hacer hover.</li>
	</ol>
<div class="row">
	<?= getRes('ejemplo','ex/galeria/index.html', 'Galería 1', 2) ?>

	<?= getRes("video_premium",222350613) ?>
</div>
</article>

</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('navigation-bar')){ ?>

<main class="curso">
		<h1 id="navigationbar">Navigation Bar</h1>

<article>
	<?= getRes("video_premium",222350090) ?>

	<h2>Navigation Bar I - lista de enlaces</h2>
	<p>Hacemos una lista de enlaces y los maquetamos ligeramente.</p>
	<?= getRes('ejemplo','ex/navbar-pasos/1-styling-menu/index.html','Ver ejemplo de como maquetar el submenu', 2) ?>
	<pre><code>.menu{
	width: 300px;
	padding-left: 0;
	list-style:none;
}
	
.menu li a{
	color:black;
	background:pink;
	border:solid black 6px;
	border-radius: 10px;
	padding:15px;
	display:block
	...

.menu li a:hover{
	...</code></pre>





<h2>Navigation Bar II – content</h2>
<?= getRes('ejemplo','ex/navbar-pasos/2-content/index.html', 'After y content', 2) ?>
<pre><code>li.hasChildren a:after{
	color:purple;
	content:" o";
}</code></pre>
<h2>Navigation Bar III – iconos</h2>
<p>
	Uso de iconos. Si cargo una fuente en la que todo son iconos, y pongo la letra correspondiente al icono que me interesa, mostraré el icono.
</p>
<pre><code>@font-face{
	font-family: flechita;
	src:url(Arrows_tfb.ttf);
}</code></pre>

<div class="row">
	<?= getRes("recurso","ex/navbar-pasos/Arrows_tfb.ttf","Descargar fuente") ?>

	<?= getRes('ejemplo','ex/navbar-pasos/3-flechita/index.html', 'Uso de iconos',2) ?>
</div>



<h2>Navigation Bar IV - botonera horizontal</h2>
<p>Volver la botonera horizontal:</p>
<pre><code>ul li{
	display: inline-block;
...</code></pre>
<p>También lo podíamos haber hecho utilizando:</p>
<pre><code>ul li{
	float:left; <span class="green">/*Necesario para mostrar los botones en horizontal*/</span>
…</code></pre>
<p>Pero recomiendo la primera forma que nos facilitará la tarea cuando queramos hacer una botonera cuyos enlaces emerjan del centro.</p>
<?= getRes('ejemplo','ex/navbar-pasos/4-horizontal/index.html', 'Horizontal',2) ?>

<h2>Navigation Bar V - submenús</h2>
<pre><code>&lt;li class=&quot;hasChildren&quot;&gt;&lt;a href=&quot;#&quot; title=&quot;las fotos de mis viajes&quot;&gt;fotos&lt;/a&gt;
	&lt;ul&gt;
		&lt;li&gt;&lt;a href=&quot;#&quot;&gt;submenu 1&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=&quot;#&quot;&gt;submenu 2&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=&quot;#&quot;&gt;submenu 3&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/li&gt;</code></pre>

<pre><code>li.hasChildren li{
	display:block;
}
li.hasChildren ul{
	margin:0;
	padding: 0;
	position:absolute;
}</code></pre>
<?= getRes('ejemplo','ex/navbar-pasos/5-submenus/index.html','Ver ejemplo de cómo maquetar el submenú',2) ?>

<div class="notas">
	<h3>Notas:</h3>
	<p>Para que los submenus no tengan el icono, habrá que modificar es estilo de este enlace:</p>
	<pre><code>li.hasChildren > a:after</code></pre>
</div>

<h2>Navigation Bar VI - aparecen submenús</h2>
<pre><code>li.hasChildren ul{
	...
	opacity: 0;
	overflow: hidden;
	max-height: 0
}

li.hasChildren:hover ul{
	opacity: 1;
	max-height: 800px
}</code></pre>

<?= getRes('ejemplo','ex/navbar-pasos/6-controlando-aparicion/index.html', 'Ver ejemplo de cómo hago para que aparezca el submenú',2) ?>


<h2>Navigation Bar VII - añadiendo animación</h2>

<pre><code>transition: 1s</code></pre>
<?= getRes('ejemplo','ex/navbar-pasos/7-transition/index.html', 'Ver ejercicio resuelto',2) ?>

<h2>Navigation Bar XIV - logrando el estado persistente del botón que encabeza el submenú.</h2>
<pre><code>li:hover > a{
	<span class="green">...</span></code></pre>
<?= getRes('ejemplo','ex/navbar-pasos/8-persistir-menu/index.html','Ver ejemplo de cómo persistir el estado del menú',2) ?>

	<h3>Ejercicio</h3>
	<p>Hacer que en lugar de ser una botonera horizontal, sea una botonera vertical.</p>

</article>

<article>
	<h2 id="ej_navbar">Ejercicio - hacer la siguiente botonera</h2>
<div class="row">
<?= getRes("video_premium",223096820) ?>
<?= getRes('recurso','/res/html5/zip/recursos-navbar.zip', 'Descargar recurso') ?>
</div>

</article>
<article>
	<h2>Indice numerado</h2>
	<?= getRes("video_premium",222353765) ?>

	<pre><code>ol.indice, ol.indice ol{
	counter-reset: item;
}

.indice li::before {
	content: counters(item, ".") " ";
	counter-increment: item;
}
.indice li{
	list-style: none
}</code></pre>

<?= getRes('ejemplo','ex/indice-numerado/index.html', 'Ver ejemplo de índice numerado',2) ?>

</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('important')){ ?>

<main class="curso">
		<h1 id="important">!important</h1>

<article>
	<p>En CSS, el estilo más reestrictivo es el que manda. Si queremos que un class pese más que una id, o que el selector "ul" pese más que el selector "ul.menu", o sobreescribir un estilo puesto en línea con un estilo usado en una hoja de estilos, podemos usar el modificador <strong>!important</strong></p>
	<img src="img/important.jpg" alt="important">
<pre><code>div{
	width: 200px;
	height: 200px;
	<span class="black bold">background: blue !important</span>
}</code></pre>
	<?= getRes("video_premium",222353984) ?>
</article>

</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('paginas-reales')){ ?>

<main class="curso">
		<h1 id="paginas-reales">Páginas reales</h1>

<article>

	<h2>Ejercicio VUIT</h2>
	<?= getRes('ejemplo','ex/pagina-catalana/index.html', 'Página catalana',2) ?>

<div class="row">

	<?= getRes("video_premium",222355675) ?>

	<?= getRes('recurso','/res/html5/zip/imatges.zip', 'Descargar imágenes') ?>

</div>
	<h2>Ejercicio Grassy</h2>

<div class="row">
	<?= getRes("recurso","/res/html5/zip/grassy.zip","Descargar recursos") ?>

	<a class="enlace_a_video" href="https://pablomonteserin.com/maquetando-una-web-grassy-green/">Ver video de resolución del ejercicio</a>
	<?= getRes('ejemplo','ex/grassy-grass/index.html', 'Ver ejercicio Grassy resuelto',2) ?>

	</div>
	<h2>Parallax</h2>
	<p>Utilizando background-attachment:fixed podemos hacer que aunque las capas se desplacen, su imagen de fondo permanezca fija</p>
<div class="row">

	<?= getRes("video_premium",222358419) ?>
	<?= getRes('ejemplo','ex/parallax/index.html', 'Efecto parallax',2) ?>

</div>
	<h2>Selector :not(selector)</h2>

	<pre><code>&lt;style&gt;
	input:not([type=checkbox]){
		width: 570px;
		display: block;
		border-radius: 15px;
	}
&lt;/style&gt;

&lt;input type=&quot;text&quot; /&gt;&lt;br&gt;
&lt;input type=&quot;text&quot; /&gt;
&lt;br&gt;
&lt;input type=&quot;checkbox&quot; &gt;
&lt;input type=&quot;checkbox&quot; &gt;</code></pre>

	<div class="row">
	<?= getRes("video_premium",222360985) ?>
	<?= getRes('ejemplo','ex/not-selector/index.html', 'Not selector',2) ?>
</div>

<h2>Ejercicio Autopista</h2>

<p>
	Para hacer funcionar el ejemplo de la imagen de la cabecera, aplicaremos la a una capa a la que le daremos una altura. A dicha capa le asignaremos los estilos:</p>


	<pre><code>background-attachment: fixed;
background-size:cover</code></pre>
<?= getRes("recurso","zip/autopista.zip", "Descargar imágenes ejercicio autopista") ?>

<div class="row">
<?= getRes("video_premium",222362350) ?>

<?= getRes('ejemplo','ex/autopista/index.html', 'Autopista', 2) ?>

</div>

</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('grid-layout')){ ?>

<main class="curso">
	<h1 id="grid-layout">Grid Layout</h1>
<p>Cuando queremos controlar los anchos de las columnas de nuestra regilla, <span class="i">display:grid</span> suele ser una solución más cómoda que <span class="i">display:flex</span>.</p>
	<article>
	<div class="row">
	<?= getRes('ejemplo','ex/grid-layout/display-grid.html', 'Grid Layout') ?>
	<?= getRes('ejemplo','ex/grid-layout/display-grid-aplicado.html', 'Grid Layout aplicado') ?>
</div>
<h2>Ejercicio Grid Layout</h2>
<p>Utilizando el estilos display:grid, realiza la maquetación del enlace.</p>
<img src="ex/grid-layout/html5.svg" alt="html 5 logo" style="width: 100px">
<?= getRes('ejemplo','ex/grid-layout/ejercicio-grid.html', 'Ver ejemplo') ?>

<h2>Ejercicio Grid Layout 2</h2>
<p>Resolver este ejercicio modificando sólo el código CSS del ejercicio propuesto. No modificaremos su código HTML.</p>
<div class="row">
<?= getRes('ejemplo','ex/grid-layout/display-grid-propuesto.html', 'Ver ejercicio propuesto',1) ?>
<?= getRes('ejemplo','ex/grid-layout/display-grid-resuelto.html', 'Ver ejercicio resuelto',1) ?>
</div>
<h2>Grid Game</h2>
<p><a href="https://cssgridgarden.com/" target="_blank">cssgridgarden.com</a></p>
	</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('selectores-avanzados')){ ?>

<main class="curso">
	<h1 id="selectores-avanzados">Selectores avanzados de CSS</h1>
	<article>
		
		<?= getRes("video_premium",222371916) ?>

		<h2>Selector + y selector ~</h2>
		<?= getRes('ejemplo','ex/selector-plus/index.html', 'Selector plus',2) ?>
		<pre><code>&lt;style&gt;
input + span{
	background: purple;
	color: white
} 
<span class="green">/*alt gr + 4 para dibujar s&iacute;mbolo*/</span>
input ~ div{
		background: green;
		color: white
	} 
&lt;/style&gt;

&lt;div&gt;
	&lt;input type=&quot;text&quot;&gt;&lt;span&gt;span con color de fondo&lt;/span&gt;&lt;span&gt;span con color de fondo&lt;/span&gt;

	&lt;br&gt;

	&lt;input type=&quot;text&quot;&gt;
	&lt;div&gt;div al mismo nivel&lt;/div&gt;
	&lt;div&gt;div al mismo nivel&lt;/div&gt;
&lt;/div&gt;

&lt;div&gt;
	&lt;span&gt;span sin color de fondo&lt;/span&gt;
&lt;/div&gt;</code></pre>

<h2>Ocultar/Mostrar información sin Javascript</h2>

<div class="row">
<?= getRes("video_premium",222374808) ?>

<?= getRes('ejemplo','ex/oculto/index.html','Cambiar color en el click con Javascript') ?>
</div>
<pre><code>&lt;style&gt;
	input{
		display: none;
	}
	input:checked + .texto{
		background: red
	}
&lt;/style&gt;
&lt;label for=&quot;pulsable&quot;&gt;pulsable&lt;/label&gt;
&lt;input id=&quot;pulsable&quot; type=&quot;checkbox&quot;&gt;
&lt;span class=&quot;texto&quot;&gt;amor&lt;/span&gt;</code></pre>
<h2>Ejercicio spoiler</h2>
<?= getRes("video_premium",222367642) ?>
<p>Al pulsar sobre un texto debe hacerse visiblee un texto contiguo. Al volver a pulsar, debe volver a hacerse invisible</p>
<?= getRes("ejemplo","ex/spoiler/index.html","Spoiler",2) ?>


<h2>Ejercicio - Checkboxes personalizados</h2>
<p>Utilizando el estilo background-position para desplazar la imagen de fondo del label, crear un checkbox personalizado.</p>
<?= getRes("video_premium",222367609) ?>

<div class="row">


<?= getRes("video_premium",222367772) ?>
<?= getRes('ejemplo','ex/checkbox-personalizado/index.html', 'Checkbox personalizado',2) ?>

</div>
<img src="./img/check_radio_sheet.png" alt="radio check personalizada en html">

<h2>Ejercicio</h2>
<p>Utilizando los selectores :first-child, :last-child, :nth-child(n) y utilizando el siguiente código html, realizar la maquetación indicada a continuación</p>
<?= getRes("video_premium",222376615) ?>

<pre><code>&lt;div id=&quot;ventana&quot;&gt;
	&lt;div&gt;&lt;/div
	&gt;&lt;div&gt;
	&lt;div&gt;&lt;/div
	&gt;&lt;div&gt;&lt;/div
	&gt;&lt;div&gt;&lt;/div&gt;
	&lt;/div
	&gt;&lt;div&gt;&lt;/div&gt;		
&lt;/div&gt;</code></pre>

<div class="row">

<?= getRes("video_premium",222378660) ?>
<?= getRes('ejemplo','ex/child-selector/index.html', 'Child selector',2) ?>

</div>
<h2>Capa cuya altura se redimensiona automáticamente en función de su anchura</h2>

<pre><code>&lt;style&gt;
	.square {
		width: 50%;
		background: blue
	}

	.square:after {
		content: &quot;&quot;;
		display: block;
		padding-bottom: 100%;
	}	
&lt;/style&gt;

&lt;div class='square'&gt;
	&lt;div class='square-content'&gt;
	&lt;div&gt;
&lt;/div&gt;</code></pre>
</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('definicion')){ ?>

<main class="curso">
	
		<h1 id="definicion">HTML5: definición y ejemplos</h1>

	<article>
		<p>HTML5 es un compendio de nuevas tecnologías(<a target="_blank" href="http://www.w3.org/html/logo/">http://www.w3.org/html/logo/</a>), entre las que tenemos:</p>
		<ul>
			<li>Nuevas etiquetas.</li>
			<li>Almacenamiento offline.</li>
			<li>Integración los sensores de los dispositivos que lo utilicen (geolocalización, etc).</li>
			<li>Posibilidad de conectividad entre dispositivos (chat, etc.).</li>
			<li>Reproducción de multimedia sin recurrir a plugins de terceros.</li>
			<li>Gráficos 3D y efectos visuales.</li>
			<li>Multitarea.</li>
			<li>CSS3. No forma parte de la especificación de HTML5, pero se está haciendo la mismo tiempo.</li>
		</ul>

		<h2>Links de interés</h2>
		<h3>Algunos ejemplos</h3>
		<ul>
			<li><a target="_blank" href="http://sharkle.com/">Procastrinador randomático</a></li>
			<li><a target="_blank" href="http://slither.io/">slither.io</a></li>
			<li><a target="_blank" href="http://end3r.com/games/frontinvaders/">http://end3r.com/games/frontinvaders/</a> (mueves con las teclas del cursor y disparas con z)</li>
			<li><a target="_blank" href="http://playbiolab.com/">http://playbiolab.com/</a></li>
			<li><a target="_blank" href="http://canvasrider.com/tracks/356176">http://canvasrider.com/tracks/356176</a></li>
			<!-- li><a target="_blank" href="http://www.currantcat.com/convergence/">http://www.currantcat.com/convergence/</a></li-->
			<li><a target="_blank" href="http://www.cuttherope.ie/">http://www.cuttherope.ie/</a> (para jugar, pulsar sobre give it a try, en la parte inferior de la pantalla).</li>
			<li><a target="_blank" href="http://www.zamolski.com/agot/">http://www.zamolski.com/agot/</a></li>
			<li><a target="_blank" href="http://luxahoy.com/">http://luxahoy.com/</a></li>
			<li><a target="_blank" href="http://www.thewildernessdowntown.com/">http://www.thewildernessdowntown.com/</a></li>
		</ul>
		<h4>Soporte de HTML5</h4>
		<p>Para evaluar en que medida tu navegador a la especificación html5: <a target="_blank" href="http://html5test.com/">http://html5test.com/</a></p>
		<p>No todos los navegadores implementan todas todas las nuevas características de html5. Es posible consultar el estado de implementación en que se encuentran en el siguiente enlace: <a target="_blank" href="http://caniuse.com/">http://caniuse.com/</a>	</p>
		<?= getRes("video_premium",222381609) ?>

	</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('html5-vs-html4')){ ?>
<main class="curso">
	<h1 id="html5-vs-html4">HTML5 vs HTML4</h1>
	<article>
		
		<?= getRes("video_premium",222376755) ?>
		<h2>DOCTYPE simplificado</h2>
		<p><strong>HTML4</strong>: <br>
			<pre><code>&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;</code></pre>
			(Con sus versiones strict, transient, frameset)
		</p>

		<p><strong>HTML5</strong>: <br>
			<pre><code>&lt;!DOCTYPE HTML&gt;</code></pre>(Simplemente indica que el documento es un fichero html)
		</p>

		<h2>Codificación de caracteres</h2>
		<p><strong>HTML4</strong>:
			<pre><code>&lt;meta http-equiv=&quot;content-type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;</code></pre>
		</p>

		<p><strong>HTML5</strong>:
			<pre><code>&lt;meta charset=&quot;UTF-8&quot; /&gt; </code></pre>
		</p>



		<h2>Etiquetas obsoletas</h2>
		<h3>Presentación</h3>
		<p>basefont, big, center, font, s, strike, tt, u</p>

		<h3>Accesibilidad</h3>
		<p>frame, frameset, noframes</p>

		<h3>Otras etiquetas</h3>
		<p>acronym, applet, isindex, dir</p>

		<h3>Atributos obsoletos</h3>
		<ul>
			<li>body -> background</li>
			<li>a, link -> rev, charset</li>
			<li>img -> hspace, vspace, longdesc, name</li>
			<li>html -> version</li>
			<li>body, table, tr, th, td -> bgcolor</li>
			<li>table -> valign, border, cellpadding, cellspacing</li>
			<li>td, th -> height, width</li>
			<li>th -> abbr</li>
			<li>td -> scope</li>
			<li>Para todos -> align</li>
		</ul>

	</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('divs-semanticos')){ ?>

	<main class="curso">
		<h1 id="divs-semanticos">divs semánticos</h1>

		<article>
		<?= getRes("video_premium",222376731) ?>

		<p>Un div nos sirve para organizar la información a nivel de diseño de la página. Podemos usar div's indistintamente para cualquier parte de la página.</p>
		<p>header, footer, main, nav, aside son los div con un valor semántico añadido. La propia etiqueta nos indica que tipo de información contiene, esto no ocurría con los div.</p>
		<p>Ventajas: <br>
			<ul>
				<li>Facilitan a los motores de búsqueda la indexación de la página.</li>
				<li>Mejora la accesibilidad para personas con deficiencias visuales.</li>
				<li>Hace más fácil al programador entender la página.</li>
			</ul>
		</p>


		<p>Los siguientes elementos contienen información de la sección a la que pertenecen. Pueden usarse dentro de cualquier elemento flotante, exceptuando sí mismos, el otro elemento y el elemento address.
			<p>
				<span class="red bold">&lt;header&gt;</span>
			</p>
			<ul>
				<li>Contiene una introducción a un contenido.</li>
				<li>Habitualmente contiene:
					<ul>
						<li>Una o varias etiquetas de encabezado (&lt;h1&gt; - &lt;h6&gt;)</li>
						<li>Un logo o ícono.</li>
						<li>Información del autor.</li>
					</ul>
				</li>
				<li>Puedes tener varios </li>
			</ul>


			<span class="green bold">&lt;footer&gt;</span></p>
			<ul>
				<li>Contiene información sobre el elemento que lo envuelve. Típicamente:
					<ul>
						<li>Información de CopyRight</li>
						<li>Información del autor.</li>
						<li>Información de contacto.</li>
						<li>Sitemap.</li>
						<li>Enlace de regresar a la parte superior de la página.</li>
						<li>Documentos relacionados.</li>
					</ul>
				</li>

			</ul>

			<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot; /&gt;
		&lt;title&gt;a_paginaSencilla&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		<span class="red">&lt;header&gt;
			&lt;h1&gt;T&iacute;tulo de la p&aacute;gina&lt;/h1&gt;
		&lt;/header&gt;</span>
		&lt;p&gt;
			Contenido de la p&aacute;gina
		&lt;/p&gt;
		<span class="green">&lt;footer&gt;
			&lt;h5&gt;Pie de la p&aacute;gina&lt;/h5&gt;
		&lt;/footer&gt;</span>
	&lt;/body&gt;
&lt;/html&gt;</code></pre>


			<p><span class="purple bold">&lt;main&gt; </span>. Define secciones dentro de la web, como un encabezado, o un pie, etc.</p>

			<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot; /&gt;
		&lt;title&gt;a_paginaSencilla&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;header&gt;
			&lt;h1&gt;T&iacute;tulo de la p&aacute;gina&lt;/h1&gt;
		&lt;/header&gt;
		<span class="purple">&lt;main&gt;
			&lt;p&gt;
				Contenido de la p&aacute;gina
			&lt;/p&gt;
			&lt;/main&gt;</span>
		&lt;footer&gt;
			&lt;h5&gt;Pie de la p&aacute;gina&lt;/h5&gt;
		&lt;/footer&gt;
	&lt;/body&gt;
&lt;/html&gt;</code></pre>



			<p><span class="orangeBack bold">&lt;article&gt;</span></p>
			<ul>
				<li>Un artículo contiene una unidad de información que tiene sentido por sí misma. Ejemplos:	
						<ul>
							<li>Una entrada de un blog.</li>
							<li>Una noticia.</li>
							<li>Un comentario.</li>
							<li>Un comentario en un foro.</li>
						</ul>
				</li>
			</ul>
			<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot; /&gt;
		&lt;title&gt;a_paginaSencilla&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;header&gt;
			&lt;h1&gt;T&iacute;tulo de la p&aacute;gina&lt;/h1&gt;
		&lt;/header&gt;
		&lt;main&gt;
			&lt;p&gt;
				Contenido de la p&aacute;gina fuera de los art&iacute;culos
			&lt;/p&gt;
			<span class="orangeBack">&lt;article&gt;
				&lt;h2&gt;Titulo del art&iacute;culo&lt;/h2&gt;
				&lt;p&gt;Contenido del art&iacute;culo&lt;/p&gt;
			&lt;/article&gt;</span>
		&lt;/main&gt;
		&lt;footer&gt;
			&lt;h5&gt;Pie de la p&aacute;gina&lt;/h5&gt;
		&lt;/footer&gt;
	&lt;/body&gt;
&lt;/html&gt;</code></pre>



			<p><span class="brown bold">&lt;aside&gt;</span> – contenido tangencial</p>
			<p>Se usa para poner notas, trucos, una explicación, una leyenda, etc.relacionados con un contenido principal.</p>
			<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot; /&gt;
		&lt;title&gt;a_paginaSencilla&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;header&gt;
			&lt;h1&gt;T&iacute;tulo de la p&aacute;gina&lt;/h1&gt;
		&lt;/header&gt;
		&lt;main&gt;
			&lt;p&gt;
				Contenido de la p&aacute;gina
			&lt;/p&gt;
			&lt;article&gt;
				&lt;h2&gt;Titulo del art&iacute;culo&lt;/h2&gt;
				&lt;p&gt;Contenido del art&iacute;culo&lt;/p&gt;
			&lt;/article&gt;
			<span class="brown">&lt;aside&gt;
				Contenido tangencial
			&lt;/aside&gt;</span>
		&lt;/main&gt;
		&lt;footer&gt;
			&lt;h5&gt;Pie de la p&aacute;gina&lt;/h5&gt;
		&lt;/footer&gt;
	&lt;/body&gt;
&lt;/html&gt;</code></pre>



			<p><span class="red bold">&lt;nav&gt;</span> – almacena los menús de navegación. Habitualmente están en el header de la página.</p>
			<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot; /&gt;
		&lt;title&gt;P&aacute;gina sencilla&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;header&gt;
			&lt;h1&gt;T&iacute;tulo de la p&aacute;gina&lt;/h1&gt;
			<span class="red">&lt;nav&gt;
				&lt;ul&gt;
					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Enlace 1&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Enlace 2&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Enlace 3&lt;/a&gt;&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt;</span>
		&lt;/header&gt;
		&lt;p&gt;
			Contenido de la p&aacute;gina
		&lt;/p&gt;
		&lt;footer&gt;
			&lt;h5&gt;Pie de la p&aacute;gina&lt;/h5&gt;
		&lt;/footer&gt;
	&lt;/body&gt;
&lt;/html&gt;</code></pre>

			<p><span class="red bold">&lt;main&gt;</span></p>
			<ul>
				<li>Especifica el contenido principal del documento.</li>
				<li>El contenido de la etiqueta <span class="italic">main</span> no debe estar repetido en ningún otro sitio como <span class="i">sidebars</span>, <span class="i">footers</span>, etc.</li>
				<li>Sólo puede haber una etiqueta <span class="i">main</span> por página. </li>
				<li>Esta etiqueta no debe estar anidada dentro de ninguna etiqueta <span class="i">&lt;article&gt;</span>, <span class="i">&lt;aside&gt;</span>, <span class="i">&lt;footer&gt;</span>, <span class="i">&lt;header&gt;</span> y <span class="i">&lt;nav&gt;</span>.</li>
			</ul>

		</article>

</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('svg')){ ?>

<main class="curso">
				<h1 id="svg">svg</h1>

		<article>
			<?= getRes("video_premium",222382186) ?>
			<pre><code>&lt;svg id=&quot;circulo&quot; width=&quot;400&quot; height=&quot;400&quot;&gt;
	&lt;circle  cx=&quot;200&quot; cy=&quot;200&quot; r=&quot;100&quot; fill=&quot;blue&quot;/&gt;
	&lt;rect width=&quot;100&quot; height=&quot;100&quot; fill=&quot;green&quot;/&gt;
	&lt;line x1=&quot;100&quot; y1=&quot;100&quot; x2=&quot;200&quot; y2=&quot;200&quot; style=&quot;stroke:black; stroke-width:4&quot;/&gt;
	&lt;ellipse cx=&quot;200&quot; cy=&quot;200&quot; rx=&quot;200&quot; ry=&quot;50&quot; fill=&quot;pink&quot; /&gt;
&lt;/svg&gt;</code></pre>

			<?= getRes('ejemplo','ex/svg.html','SVG',1) ?>

		</article>
</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('formularios')){ ?>

<main class="curso">
	<h1 id="formularios">Formularios</h1>

	<article>
		<?= getRes("video_premium",222358495) ?>
<pre><code>&lt;style&gt;
	label{
		display: inline-block;
		width: 120px;
	}
&lt;/style&gt;

&lt;form&gt;
	&lt;label for=&quot;<span class="red">nombre</span>&quot;&gt;Nombre&lt;/label&gt;
	&lt;input type=&quot;text&quot; id=&quot;<span class="red">nombre</span>&quot; /&gt;&lt;br&gt;&lt;br&gt;
&lt;/form&gt;</code></pre>

<p>
	Cuando un label está asociado a un input mediante los atributos for e id respectivamente, al pulsar sobre el label, el cursor se posicionará en el input.
</p>
	<?= getRes('ejemplo','ex/teoria-formulario/index.html', 'Teoría formularios') ?>
	
<h2>Ejercicio</h2>

<?= getRes("video_premium",222358893) ?>


<p>Para resolver este ejercicio, utilizaremos las siguientes etiquetas:</p>
<pre><code>&lt;textarea&gt;&lt;/textarea&gt;
&lt;input type=&quot;checkbox&quot;&gt;
&lt;input type=&quot;submit&quot;&gt;</code></pre>

<div class="row">
<?= getRes("video_premium",222358920) ?>
<?= getRes('ejemplo','ex/formulario/index.html', 'Formulario') ?>
</div>

</article>
<article >
	<h2>Fieldset</h2>
		<?= getRes("video_premium",222359051) ?>

	<p>Dan problemas en el crossbrowsing.</p>
	<pre><code>&lt;fieldset&gt;
	&lt;legend&gt;Cabecera del fieldset&lt;/legend&gt;
	Lorem...
&lt;/fieldset&gt;</code></pre>

	<h3>Ejercicio</h3>
		<?= getRes("video_premium",222367356) ?>

	<p>
		Para realizar este ejercicio, no poner padding a los fieldset, debido a problemas de cross browsing  con IE.
	</p>


	<pre><code>fieldset{
	…
	padding:0px; <span class="green">/*no poner padding a los fieldset por problemas de compatibilidad con IE*/</span>
	border: solid black 1px;<span class="green">/*Habrá que especificar explícitamente el borde del fieldset para que haya compatibilidad con IE*/</span>
}</code></pre>
<div class="row">
	<?= getRes("video_premium",222367381) ?>
			<?= getRes('ejemplo','ex/formulario-con-fieldsets/index.html', 'Formulario 2',2) ?>

</div>
</article>

		<article >
			
			<p>Si nuestro navegador no reconoce los nuevos &lt;input&gt; de html5, mostrará un &lt;input type=&quot;text&quot; /&gt; en su lugar.</p>
			<h3>Nuevos atributos</h3>
			<?= getRes("video_premium",222384696) ?>
	<pre><code>&lt;form&gt;
	El atributo autocomplete almacena los resultados en la cach&eacute; para el futuro
	autocomplete&lt;input type=&quot;text&quot; <span class="black bold">autocomplete=&quot;on&quot;</span>/&gt;
	&lt;br/&gt;&lt;br/&gt;
	El atributo autofocus coloca el foco por defecto en el input que lo invoca
	&lt;br/&gt;autofocus&lt;input type=&quot;text&quot; <span class="bold black">autofocus</span> /&gt;
	&lt;br/&gt;
	&lt;br/&gt;placeholder&lt;input type=&quot;text&quot; <span class="bold black">placeholder=&quot;pista acerca del contenido&quot;</span>/&gt;
	&lt;br/&gt;
	&lt;br/&gt;pattern&lt;input type=&quot;text&quot; title=&quot;debes introducir 5 d&iacute;gitos num&eacute;ricos&quot; <span class="black bold">pattern=&quot;^[0-9]{5}$&quot;</span>/&gt;
	&lt;input type=&quot;submit&quot; /&gt;
	&lt;br/&gt;&lt;br/&gt;
	El atributo formnovalidate permite enviar los datos del formulario aunque estos no hayan sido 	validados. Podemos utilizar este atributo junto con el bot&oacute;n de submit o con el tag del formulario(&amp;lt;form&amp;gt;)
	&lt;input type=&quot;submit&quot; value=&quot;envio sin validaci&oacute;n&quot; <span class="black bold">formnovalidate=&quot;formnovalidate&quot;</span>/&gt;
&lt;/form&gt;</code></pre>

			<?= getRes('ejemplo','ex/formularios/nuevos-atributos.html', 'Nuevos Atributos',1) ?>
		
			<h2>Nuevos inputs</h2>

			<?= getRes("video_premium",222384979) ?>

			<div class="output">

				<h3>search</h3>En el futuro este campo implementará funcionalidades como recordar anteriores búsquedas, resaltado de la palabra buscada según se va escribiendo<br/>
				<input type="search" />
				<pre><code>&lt;input type=&quot;search&quot; /&gt;</code></pre>

				<h3>number</h3>Validación numérica, en plataformas móviles, optimiza el teclado para escribir números. Atributos: min, max, step (admite decimales usando el punto)<br/>
				<input type="number" value="-6"/>

				<pre><code>&lt;input type=&quot;number&quot; value=&quot;-6&quot;/&gt;</code></pre>
				<h3>range</h3>Validación numérica, en plataformas móviles, optimiza el teclado para escribir números. Atributos: min, max, step (admite decimales usando el punto)<br/>
				<input type="range" max="10" min="0" value="7" step="2" />
				<pre><code>&lt;input type=&quot;range&quot; max=&quot;10&quot; min=&quot;0&quot; value=&quot;7&quot; step=&quot;2&quot; /&gt;</code></pre>
				<h3>tel</h3>Optimiza el teclado para escribir teléfonos<br/>
				<input type="tel"/>
				<pre><code>&lt;input type=&quot;tel&quot;/&gt;</code></pre>
				<h3>url</h3>Validación de url, en plataformas móviles, optimiza el teclado para escribir url's<br/>
				<input type="url"/>
				<pre><code>&lt;input type=&quot;url&quot;/&gt;</code></pre>
				<h3>email</h3>Validación de mail, en plataformas móviles, optimiza el teclado para escribir mails<br/> 
				<input type="email"/>
				<pre><code>&lt;input type=&quot;email&quot;/&gt;</code></pre>
				<h3>Color</h3>
				<input type="color"/>
				<pre><code>&lt;input type=&quot;color&quot;/&gt;</code></pre>
				<h3>Fechas y horas:</h3>
				<h4>time</h4>Puede ser inicializado, acepta los atributos min, max y step<br/>
				<input type="time" value="10:20"/>
				<pre><code>&lt;input type=&quot;time&quot; value=&quot;10:20&quot;/&gt;</code></pre>
				<h4>date</h4>Puede ser inicializado, acepta los atributos min, max y step<br/>
				<input type="date" value="1982-07-24"/>
				<pre><code>&lt;input type=&quot;date&quot; value=&quot;1982-07-24&quot;/&gt;</code></pre>
				<h4>datetime</h4>Es una combinación de date y time. Se diferencia de datetime-local en que muestra la hora local<br/>
				<input type="datetime" value="2011-12-22T01:30Z"/>
				<pre><code>&lt;input type=&quot;datetime&quot; value=&quot;2011-12-22T01:30Z&quot;/&gt;</code></pre>
				<h4>datetime-local</h4>
				<input type="datetime-local" value="2011-12-22T01:30"/>
				<pre><code>&lt;input type=&quot;datetime-local&quot; value=&quot;2011-12-22T01:30&quot;/&gt;</code></pre>
				<h4>week</h4>
				<input type="week" value="1982-W17"/>
				<pre><code>&lt;input type=&quot;week&quot; value=&quot;1982-W17&quot;/&gt;</code></pre>
				<h4>month</h4>
				<input type="month" value="1982-07"/>
				<pre><code>&lt;input type=&quot;month&quot; value=&quot;1982-07&quot;/&gt;</code></pre>

				<h4>datalist</h4>
<input list="browsers">

<datalist id="browsers">
  <option value="Internet Explorer">
  <option value="Firefox">
  <option value="Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist>
				<pre><code>&lt;input list=&quot;browsers&quot;&gt;

&lt;datalist id=&quot;browsers&quot;&gt;
  &lt;option value=&quot;Internet Explorer&quot;&gt;
  &lt;option value=&quot;Firefox&quot;&gt;
  &lt;option value=&quot;Chrome&quot;&gt;
  &lt;option value=&quot;Opera&quot;&gt;
  &lt;option value=&quot;Safari&quot;&gt;
&lt;/datalist&gt;</code></pre>

			</div>

			<h2>required, valid, invalid</h2>
<div class="row">
			<?= getRes("video_premium",222384724) ?>

			<?= getRes('ejemplo','ex/formularios/required-valid-invalid/index.html','Ejemplo required, valid, invalid',2) ?>
			</div>
			<pre><code>&lt;style&gt;
	input[required] {
		border: solid 4px blue;
	}
	input:valid{
		background:green;
	}
	input:invalid{
		background:red;
	}
	label{
		width:150px;
		display:inline-block
	}
&lt;/style&gt;
&lt;form&gt;
	&lt;label for=&quot;nombre&quot;&gt;Nombre:&lt;/label&gt;
	&lt;input type=&quot;text&quot; id=&quot;nombre&quot; required=&quot;required&quot; /&gt;&lt;br&gt;&lt;br&gt;
	&lt;label for=&quot;mail&quot;&gt;Email:&lt;/label&gt;	
	&lt;input type=&quot;email&quot; id=&quot;mail&quot; required=&quot;required&quot;/&gt;
&lt;/form&gt;</code></pre>

<h3>Ejercicio</h3>
<ul>
	<li>
		Campos requeridos deben tener borde negro.		
	</li>
	<li>Los campos válidos deben tener fondo verde.</li>
	<li>Los campos inválidos deben tener fondo rojo.</li>
	<li>La edad mínima debe ser de 0 años y la máxima de 100 años. Para ello usaremos los atributos "min" y "max".</li>
	<li>La página debe cargarse con el foco en el campo nombre.</li>
	<li>El código postal tendrá el siguiente patrón: "^[0-9]{5}$".</li>
</ul>
<div class="row">
<?= getRes("video_premium",222385435) ?>

<?= getRes('ejemplo','ex/formularios/ejercicio-formulario/index.html','Ejercicio formulario',2) ?> </div>
<div class="row">
<?= getRes("video_premium",222384735) ?>


<?= getRes("video_premium",222384815) ?></div>
<h3>Ejercicio ampliado</h3>
<div class="row">

<?= getRes("video_premium",222384827) ?>
<?= getRes('ejemplo','ex/formularios/ejercicio-formulario-2/index.html', 'Ejercicio formulario 2 (Ejercicio ampliado)',2) ?>

</div>
<img src="ex/formularios/success.png" alt="exito en envío de formulario">
<h2>Maquetando los placeholder</h2>

<?= getRes("video_premium",222385701) ?>

<pre><code>::-webkit-input-placeholder { /* Chrome/Opera/Safari */
	color: pink;
}
::-moz-placeholder { /* Firefox 19+ */
color: pink;
}
:-ms-input-placeholder { /* IE 10+ */
color: pink;
}
:-moz-placeholder { /* Firefox 18- */
color: pink;
}	</code></pre>
<p>o si queremos filtrar por class:</p>
<pre><code>.gris::-webkit-input-placeholder { /* Chrome */
	color: #CECECE;
}
.gris:-ms-input-placeholder { /* IE 10+ */
color:  #CECECE;
}
.gris::-moz-placeholder { /* Firefox 19+ */
color:  #CECECE;
opacity: 1;
}
.gris:-moz-placeholder { /* Firefox 4 - 18 */
color:  #CECECE;
opacity: 1;
}</code></pre>
<h2>progress, meter</h2>

<p>La etiqueta progress es apropiada para mostrar el grado de completitud de una tarea determinada (un formulario, por ejemplo). Meter es más apropiado para mostrar medidas no relacionadas con una tarea, como espacio en disco o uso de memoria</p>

<div class="row">
<?= getRes("video_premium",222384846) ?>
<?= getRes('ejemplo','ex/formularios/progress.html', 'Progress',1) ?>
</div>

<pre><code>&lt;progress value=&quot;50.0&quot; max=&quot;100.0&quot;&gt;50%&lt;/progress&gt;</code></pre>


<p><?= getRes('ejemplo','ex/formularios/meter.html', 'meter',1) ?></p>
<pre><code>&lt;meter value=&quot;30.0&quot; min=&quot;0.0&quot; max=&quot;100.0&quot; low=&quot;20.0&quot; high=&quot;80.0&quot; optimum=&quot;40.0&quot;&gt;300MB megas de un 1GB&lt;/meter&gt;</code></pre>



<h2>output</h2>
<pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
	function calculation() {
	var o = document.getElementById(&quot;result&quot;);
	var num1 = document.getElementById(&quot;num1&quot;);
	var num2 = document.getElementById(&quot;num2&quot;);

	o.value = parseFloat(num1.value) + parseFloat(num2.value);
}
&lt;/script&gt;
&lt;input type=&quot;number&quot; id=&quot;num1&quot;/&gt;
&lt;input type=&quot;number&quot; id=&quot;num2&quot; /&gt;
&lt;p&gt;Resultado: &lt;output name=&quot;result&quot; id=&quot;result&quot;&gt;&lt;/output&gt;&lt;/p&gt;
&lt;p&gt;&lt;button onclick=&quot;calculation()&quot;&gt;Calcular&lt;/button&gt;&lt;/p&gt;</code></pre>
<?= getRes('ejemplo','ex/formularios/output/index.html', 'output',4) ?>

</article>

</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('animaciones-css3')){ ?>

<main class="curso">
	<h1 id="animaciones-css3">Animaciones con CSS3</h1>


<article>
	<h2 id="keyframes">Keyframes</h2>
	<?= getRes("video_premium",223098183) ?>
		<pre><code>div.box1{
	width:300px;
	height:300px;
	background: red;
}
div.box1:hover{
	animation:move 2s;
}
@keyframes move{
	from{transform:rotate(0deg);}
	to{transform:rotate(45deg);}
}</code></pre>


	<?= getRes('ejemplo','ex/animations/keyframes/keyframes-1/index.html', 'keyframes',2) ?>


<h4>Descompuesto</h4>
<div class="row">
<?= getRes("video_premium",223098187) ?>
<pre><code>animation-name:move;
animation-duration:2s;
animation-timing-function:ease-in;
animation-iteration-count:2; /* infinite para infinitas repeticiones */</code></pre>
</div>

<h4>Alternate</h4>
<p>Debe tener al menos un animation-iteration-count de 2.</p>

<?= getRes('ejemplo','ex/animations/keyframes/alternate/index.html', 'Ver ejemplo') ?>
<h4>Alternate Reverse</h4>
<p>Debe tener al menos un animation-iteration-count de 2.</p>

<?= getRes('ejemplo','ex/animations/keyframes/alternate-reverse/index.html','alternate-reverse',2) ?>



<h4>Persistir estado final</h4>

<?= getRes("video_premium",223098190) ?>
<pre><code>animation-fill-mode: forwards</code></pre>

<?= getRes('ejemplo','ex/animations/keyframes/persistir-estado/index.html', 'Persistir el estado tras la animacion',2) ?>



<h4>Ejercicio KeyFrames - barra de habilidad</h4>
<?= getRes("video_premium",223098196) ?>
<p>Nota: Para realizar este ejercicio usaremos keyframes, pero no usaremos el estilo transform.</p>
<div class="row">




<?= getRes("video_premium",223098203) ?>
<?= getRes('ejemplo','ex/animations/keyframes/barrita-habilidad/index.html', 'este ejemplo', 2) ?>

</div>


<h4>Ejercicio KeyFrames 2 - barra de habilidad con corazones</h4>
<div class="row">
<?= getRes("video_premium",223104136) ?>
<?= getRes("recurso","/res/html5/ex/animations/keyframes/barrita-corazones/corazon-mask.png","Fotografía del enlace") ?>
</div>

<div class="row">

<?= getRes("video_premium",223104185) ?>
<?= getRes('ejemplo','ex/animations/keyframes/barrita-corazones/index.html','Barra de habilidad con corazones',2) ?>


</div>


<h4>animation-direction</h4>



<h5>alternate</h5>
<?= getRes('ejemplo','ex/animations/keyframes/alternate/index.html', 'alternate',2) ?>

<pre><code>animation-direction: reverse; <span class="green">alternate;</span></code></pre>


<h5>alternate-reverse</h5>

<pre><code>animation-direction: reverse; <span class="green">alternate-reverse;</span></code></pre>


<div class="row">

<?= getRes("video_premium",223104273) ?>
<?= getRes('ejemplo','ex/animations/keyframes/reverse/index.html', 'reverse', 2) ?>
</div>


<h4>Delay</h4>

<?= getRes("video_premium",223104313) ?>

<pre><code>animation-delay:2s;</code></pre>

<?= getRes('ejemplo','ex/animations/keyframes/animation-delay/index.html','animation delay',2) ?>

<h4>step by step</h4>
<?= getRes("video_premium",223104333) ?>

<pre><code>@keyframes move6{
	0%{transform:translateX(0px);}
	30%{transform: skew(200deg, 200deg);}
	60%{transform: scale(2,2);}
	100%{transform:rotate(1300deg);}
}</code></pre>
<?= getRes('ejemplo','ex/animations/keyframes/step-by-step/index.html', 'animación paso a paso',2) ?>


<h4>pause and play</h4>
<?= getRes("video_premium",223105511) ?>
<pre><code>div{
	background: red;
	width:400px;
	height:400px;
	animation:changeBackground 0.3s ease-in 1s infinite alternate;
	animation-play-state:paused;
}
div:hover{
	animation-play-state:running;	
}</code></pre>

<?= getRes('ejemplo','ex/animations/keyframes/pause-play/index.html','pause y play',2) ?>



<h3>animation-step</h3>

<?= getRes('ejemplo','ex/animations/keyframes/animation-step/index.html','animation-step',2) ?>


<h3 id="coleccion">Colección de animaciones</h3>
<?= getRes('ejemplo','ex/animations/keyframes/transform/index.html', 'transform',2) ?>


<h4 id="links_interes_animaciones">Links de interés Animaciones y CSS3</h4>

<ul>
	<li><a target="_blank"  href="http://daneden.github.io/animate.css/">Animate.css (para que funcione bien, mejor descargar la librería para usarla)</a>	
	</li>
	<li><a target="_blank"  href="http://www.minimamente.com/example/magic_animations/">Magic</a></li>
	<li><a target="_blank"  href="http://leaverou.github.com/animatable/">Animatable</a></li>
	<li><a target="_blank"  href="http://cssanimate.com/">Css Animate</a></li>
</ul>


<ul>
	<li>Lea Verou: <a target="_blank"  href="http://lea.verou.me/projects/">http://lea.verou.me/projects/</a></li>
	<li>Codepen: <a target="_blank"  href="http://codepen.io/pen/">http://codepen.io/pen/</a></li>
	<li>CSS3Maker: <a target="_blank"  href="http://www.css3maker.com">http://www.css3maker.com</a></li>
</ul>
</article>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('responsive')){ ?>
<main class="curso">
	<h1 id="responsive">Responsive Design</h1>

<article>

	<?= getRes("video_premium",223104381) ?>
	<p>Consiste en diseñar tu contenido de forma que responda correctamente independientemente del entorno en que se vaya a mostrar.</p>
	<h3>Media Queries</h3>
	<pre><code>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; media=&quot;all&quot; href=&quot;styles.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; media=&quot;screen&quot; href=&quot;sans-serif.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; media=&quot;print&quot; href=&quot;serif.css&quot;&gt;

		--------------------------------------------------------------------------------------------------------------------------------------------------------

&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;css/largeLayout.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; media=&quot;only screen and (min-width:501px) and (max-width:800px)&quot; href=&quot;css/mediumLayout.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; media=&quot;only screen and (min-width:50px) and (max-width:500px)&quot; href=&quot;css/smallLayout.css&quot;&gt;</code></pre>
	<p class="red">Ojo!
	Tener en cuenta que si utilizo estilos en la cabecera o estilos en línea en la página web sobreescribirán los de las hojas de estilos usados en las media queries.</p>

	<h3>Media Queries dentro de una hoja de estilos</h3>
	<pre><code>@media screen and (max-width:480px) {
		#col_left {
		width: 100px;
	}
}</code></pre>

<h2>Ejercicio media queries - Mobile First</h2>
<div class="row">
<?= getRes('ejemplo','ex/ejercicio-responsive-mobile-first/ejercicio-responsive-mobile-first-propuesto/index.html', 'Ver ejercicio propuesto',2) ?>

<?= getRes('recurso','/res/html5/zip/ejercicio-responsive-mobile-first-propuesto.zip', 'Descargar ejercicio resuelto') ?>

<?= getRes('ejemplo','ex/ejercicio-responsive-mobile-first/ejercicio-responsive-mobile-first-resuelto/index.html', 'Ver ejercicio resuelto',2) ?>
</div>
<h2>Ejercicio media queries - Desktop First</h2>
<p>Utilizando los recursos del zip 'Ejercicio propuesto', hacer el ejercicio  'Página responsive' utilizando media queries dentro de la hoja de estilos.</p>
<?= getRes("recurso","/res/html5/zip/1.zip","Ejercicio propuesto") ?>

<div class="row">

<?= getRes("video_premium",223105857) ?>

<?= getRes('ejemplo','ex/ejercicio-responsive/index.html', 'Página responsive', 2) ?>

</div>

<h2>Ejercicio impresora - hacer una página responsive</h2>
<div class="row">
<?= getRes('ejemplo','ex/hacer-responsive/fotocopiadorabcn.com-original/index.html','Ver página original') ?>
<?= getRes("recurso","/res/html5/zip/fotocopiadorabcn.com-original.zip","Descargar página original") ?>
</div>
<?= getRes('ejemplo','ex/hacer-responsive/fotocopiadorabcn.com/index.html', 'Ver como debería quedar') ?>


<h3>Enlace de interés</h3>
<a class="recurso" target="_blank" href="http://bradfrost.github.io/this-is-responsive/patterns.html">http://bradfrost.github.io/this-is-responsive/patterns.html</a>

<h2>Mostrar un mensaje cuando el dispositivo tiene orientación portrait</h2>
<pre><code>#warning-message {display:none}
@media only screen and (orientation:portrait){
	#wrapper {display:none}
	#warning-message {display:block;background-image:url(../img/portada_vert_cast.jpg);background-size:100% 100%;width:100%;height:70%;padding:54% 0 0 1%}
	#warning-message span {display:block;background-color:#000;padding:5% 5%;opacity:0.6;color:#FFF;font-size:2.8em;text-align:center;border-radius:20px;width:87%}
}
@media only screen and (orientation:landscape){
	#warning-message {display:none}
}</code></pre>
<?= getRes('ejemplo','ex/portrait/index.html', 'Portrait',2) ?>
</article>
</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
 }if(muestra('mas-ejercicios-html')){ ?>

<main class="curso">
<h1>Más ejercicios de html</h1>
<article>
	<h2>Colección de ejercicios de HTML</h2>
	<p>Cada nueva página debe estar en un fichero independiente, salvo que del enunciado que el objetivo era añadir matices al ejercicio anterior.</p>
	<p>Habrá una hora y media de tiempo para tratar de hacer el máximo posible.</p>
	<?= getRes('ejemplo','ex/mini-ejercicios.html', 'Ir a colección') ?>
</article>



<article>
	<h2>Ejercicios</h2>
	<h3 id="barrio-sesamo">Ejercicio - barrio sésamo</h3>
	<div class="row">
	<?= getRes('ejemplo','ex/barrio-sesamo/index.html', 'Ver ejercicio Barrio Sésamo resuelto',2) ?>
	<?= getRes("recurso","/res/html5/zip/barrio-sesamo.zip","Descargar recursos") ?></div>
<h3>Ejercicio para los que terminen antes - superteatro</h3>
<div class="row">
<?= getRes("recurso","/res/html5/zip/super-teatro.zip","Descargar recursos") ?>
<?= getRes('ejemplo','ex/super-teatro/index.html', 'Ver SuperTeatro',2) ?>
</div>
	<h3 id="ejercicio_cv">Ejercicio - maqueta tu curriculum</h3>
	<ul>
		<li><a target="_blank" href="ex/cv/enric-abad/index.html">Ver ejemplo de Enric Abad</a> - <a target="_blank"  href="https://es.linkedin.com/in/rlumeras">LinkedIn de Enric</a> 
		</li>
		<li><a target="_blank" href="ex/cv/fidel/index.html">Ver ejemplo de Fidel</a> 
		</li>

		<li><a  target="_blank" href="ex/cv/giselle/index.html">Ver ejemplo de Giselle</a> - <a  target="_blank" href="https://www.linkedin.com/in/giselle-vitali-66262912a/">LinkedIn de Giselle</a></li>


		<li><a target="_blank" href="ex/cv/sergio-campos/index.html">Ver ejemplo de Sergio Campos</a></li>
		<li><a target="_blank" href="ex/cv/anthoni/curriculum.html">Ver ejemplo de Anthony</a></li>
	</ul>

	<h3>Maquetar una landing</h3>

	<?= getRes("recurso","/res/html5/zip/monteserin-snippets.zip","Descargar snippets de sublime text") ?>

	<p>Para cargarlos en nuestro editor, pulsaremos el menú de Sublime Text: <strong>Preference -> Browse Packages</strong> y descomprimiremos los ficheros en la carpeta User.</p>
	<div class="row">
	<?= getRes("recurso","/res/html5/zip/img-landing.zip","Descargar recursos") ?>
	
	<a target="_blank" class="ejemplo" href="https://pablomonteserin.com/cursos-online/">Ver ejercicio resuelto</a>
	</div>
</article>

</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('error404')){ ?>

<main class="curso">
		<h1 id="error404">Página de error 404</h1>

<article>
	<p>
		Creamos un fichero .htacces.txt con el siguiente código y lo copiamos en la raíz de nuestro dominio:
	</p>
	<pre><code>ErrorDocument 404 http://www.dominio/error404.html</code></pre>

	<pre><code>ErrorDocument 404 &quot;&lt;h1&gt;Page not found&lt;/h1&gt;&quot;</code></pre>

	<pre><code>ErrorDocument 404 /404.html</code></pre>


	<p>
		Al copiarlo al servidor lo renombraremos a:
		.htaccess
	</p>
	<p>
		Además, crearemos la siguiente página web que ubicaremos también en la raíz de nuestro dominio:
		<span class="red">error404.html</span>
	</p>
</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('buscador-google')){ ?>

<main class="curso">
	<h1 id="buscador-google">Insertar el buscador de google</h1>

<article>
<div class="row">
		<?= getRes("video_premium",222376640) ?>

	<a class="recurso" target="_blank" href="https://www.google.com/cse">https://www.google.com/cse</a>
</div>
	<p>Después habrá que añadir sitios a Sites to search y darle al botón de getCode.</p>
</article>

<article>
	<h2>Ejercicio</h2>
	<p>
		Coger el menú de esta dirección:
		<a target="_blank" href="http://www.cssplay.co.uk/menus/dd_valid.html">http://www.cssplay.co.uk/menus/dd_valid.html</a>
		y aislarlo del resto.
	</p>

</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('dominio-alojamiento')){ ?>

<main class="curso">
		<h1 id="dominio-alojamiento">Dominio y alojamiento</h1>

<article>
	<?= getRes("video_premium",222376629) ?>

	<p>
		Un dominio no es más que un nombre único que identifica a un sitio web en Internet.
	</p>
	<p>
		La dirección IP es como el número de la seguridad social o el número de teléfono que nos identifica en Internet. Pero, como puedes comprobar, este número ni es fácil de recordar ni nos da información sobre el sitio web al que corresponde. Aquí es donde entra lo que hoy conocemos como dominio, en este caso este número corresponde al dominio intermonoxfam.org.
	</p>
	<p>
		El sistema de nombres de dominio, se creó para facilitar la manera de localizar maquinas en la web y por lo tanto para nombrar y encontrar sitios web alojados en esas máquinas. En realidad, un dominio es un nombre que apunta hacia una máquina que esta conectada a Internet, identificada mediante una dirección IP y en la cual están guardados unos archivos que conforman una página web.
	</p>

	<h2>Alojamientos gratuitos</h2>
	<?= getRes("video_premium",222376667) ?>
	<ul>
		<li>
			<a target="_blank" href="http://www.000webhost.com/">http://www.000webhost.com/</a> (No soporta SMTP)
		</li>
		<li>
			<a target="_blank" href="http://www.freewebhostingarea.com/">http://www.freewebhostingarea.com/</a> (No soporta SMTP, ni nos da cuentas de correo)
		</li>
		<li>
			<a target="_blank" href="http://www.hostinger.es/">http://miarroba.com/</a> (Me da cuentas de correo, pero no un puerto smtp a través del que poder configurar el servicio).
		</li>
	</ul>

	<a target="_blank" href="https://pablomonteserin.com/comparativa-hostings/">Ver video con comparativa de varios servicios de alojamiento.</a>
</article>
</main>
<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('ejercicio-proyecto')){ ?>

<main class="curso">
		<h1 id="ejercicio-proyecto">Ejercicio - Proyecto</h1>

	<article>
	<p>
		Hacer una página web de temática libre que cuente con los siguientes elementos:
	</p>
	<ul>
		<li>Una botonera hecha a partir de una lista.</li>
		<li>Una galería de fotos.</li>
		<li>Una sección de links favoritos.</li>
	</ul>
	<p>
		En la raíz del proyecto tendremos el fichero index.html, y las carpetas css e images.
	</p>
</article>

</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('clientes-proveedores')){ ?>

<main class="curso">
		<h1 id="clientes-proveedores">Clientes y proveedores</h1>

	<article>
	<p>
		Todos vamos a ser clientes y proveedores.
	</p>

	<p class="bold">Responsabilidades del Cliente</p>
	<ul>
		<li>Debe escoger la temática de la página web.</li>
		<li>Debe decidir la estructura de la información (quienes somos, contacto, página de servicios...)</li>
		<li>Debe suministrar todos los recursos de la página (fotos y texto).</li>
		<li>Debe decidir si acepta o no el presupuesto.</li>
		
	</ul>

	<p class="bold">Responsabilidades del Proveedor</p>
	<ul>
		<li>Debe realizar la página web a partir de los recursos (fotos y texto) y la estructura de la información suministrada por el cliente.</li>
		<li>Debe negociar el presupuesto. El presupuesto no puede oscilar más de 150€ de lo que él va a recibir como proveedor de otro cliente. Si el cliente no aceptase el presupuesto, debe escoger que cambios haría en la web para ofrecer una página con un presupuesto más competitivo. Si el cliente no aceptase el presupuesto, no vale simplemente bajarlo. Eso sería una bajada de pantalones.</li>
	</ul>

	<p>Los presupuestos se negocian en secreto. El proveedor no debe saber cuanto va a percibir su cliente por hacer la otra web. El presupuesto debe ir en función del tiempo y la valía de la página que va a hacer, no del dinero que tiene el cliente.</p>


<p class="bold">Descarga de presupuestos</p>

<ul>
	<li><?= getRes('recurso','ex/clientes-proveedores/briefing-converted.pdf', 'Descargar presupuesto') ?></li>

	<li><?= getRes('recurso','ex/clientes-proveedores/Propuesta.pdf', 'Descargar presupuesto') ?></li>
</ul>

</article>

</main>
<?php 
}
});
include $path."/diapos_theme/footer.php";
?>