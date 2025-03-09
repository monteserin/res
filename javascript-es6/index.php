<?php
$titulo_curso = "Javascript";
$meta_description = 'Llevo más de 14 años dando clases de programación con Javascript. La selección de ejercicios resultante de este trabajo está disponible en este curso.';
$img_curso = 'curso-javascript.svg';

$root2 =  __DIR__;
$path = substr($root2, 0, strpos($root2, "curso")) . "/curso/";
include $path . "diapos_theme/head.php";

add_action('genesis_after_header', function () {
	global $dots;
?>
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Course",
			"name": "Curso de Javascript",
			"description": "Curso de Javascript, con videotutoriales de todo lo que necesitas para porder añadir tus propios códigos a una página web.",
			"provider": {
				"@type": "Person",
				"name": "Pablo Monteserín",
				"sameAs": ["https://www.facebook.com/pablomonteserincom/", "https://www.linkedin.com/in/%E2%99%A5-pablo-monteser%C3%ADn-59079728/", "https://www.youtube.com/user/PabloMonteserinTutor", "https://twitter.com/monteserin1982"]
			}
		}
	</script>
	<section id="amor" class="verIndice">
		<article id="inicio_del_documento" class="indice">
			<ol>
				<li class="parent"><a href="#introduccion">Introducción al Curso de Javascript</a></li>
				<li class="parent"><a href="#console-log">console.log</a></li>
				<li><a href="#comentarios">Comentarios</a></li>
				</li>
				<li class="parent"><a href="#variables">Variables</a></li>
				<li class="parent"><a href="#operadores">Operadores</a></li>
				<li><a href="#estructuras-control-condicionales">Estructuras condicionales</a>
				<li><a href="#bucle-for">Bucle for</a></li>
				<li><a href="#bucle-while">Bucle while</a></li>
				<li>Break! - Gran día de repaso</li>
				<li class="funciones parent"><a href="#funciones">funciones</a></li>
				<li class="funciones parent"><a href="#arrow-functions">Arrow functions</a></li>
				<li><a href="#metodos-cadenas">Métodos para trabajo con cadenas</a></li>
				<li><a href="#aleatorios">Números aleatorios</a></li>
				<li><a href="#locationhref">location.href</a></li>
				<li><a href="#coleccion-ejercicios">Colección de ejercicios</a></li>
				<li class="parent"><a href="#dom">DOM</a></li>
				<li><a href="#parallax">Efecto Parallax</a></li>
				<li><a href="#innerhtml">innerHTML</a></li>
				<li><a href="#propiedad-style">Propiedad style</a></li>
				<li><a href="#atributo">Cambiar atributo src</a></li>
				<li><a href="#clase">Añadir clase, borrar clase, alternar clase, evaluar si tiene una clase</a></li>
				<li><a href="#create-element">Create Element</a></li>
				<li><a href="#arrays">Arrays</a></li>
				<li><a href="#ejercicios-avanzados">Ejercicios avanzados</a></li>
				<li><a href="#localstorage">LocalStorage</a></li>
				<li><a href="#deconstruccion">Deconstrucción</a></li>
				<li><a href="#fetch">fetch</a></li>
				<li><a href="#import-export">Import, export</a></li>
				<li><a href="#modernizr">Modernizr</a></li>
			</ol>
		</article>
	</section>
	<main class="curso">
		<?= drawH1WithImg() ?>

		<article>
			<div>
				<h2 id="introduccion">Introducción al Curso de Javascript</h2>
				<p>JavaScript es seguramente el primer lenguaje de programación que deberías aprender.</p>
				<p>De hecho, teniendo en cuenta las posibilidades de este lenguaje y su grado implantación en el mercado, es seguro que siendo un experto única y exclusivamente en JavaScript (y en alguna de sus librerías más importantes, como React) podrás optar a un trabajo cualificado bien remunerado, o lo que es mejor, podrás crear cualquier solución tecnológica que desees.</p>
				<h3>¿Qué vas a aprender con este curso de JavaScript?</h3>
				<p>En este curso te enseño los fundamentos de este lenguaje de programación y cómo aplicarlos en el desarrollo de páginas web. Entre los ejercicios que hay en este curso, tenemos:</p>
				<ul>
					<li>Juegos de preguntas y respuestas.</li>
					<li>Varios tipos de sliders.</li>
					<li>Una aplicación para tomar notas.</li>
					<li>Un menú desplegable tipo hamburguesa.</li>
					<li>y en general, muchísimas cosas más.</li>
				</ul>
				<p>Después de dominar los conceptos explicados en este curso, podrás hacer con éxito infinidad de aplicaciones. En este enlace tienes <a href="https://pablomonteserin.com/proyectos-guays/" target="_blank">algunas propuestas y ejemplos de aplicaciones creadas con Javascript por algunos de mis alumnos</a>.</p>
				<h3 id="guion">Lenguajes de guión (script)</h3>
				<p>Los lenguajes scripts son lenguajes que no necesitan ser compilados. En el caso de Javascript, el navegador es capaz de interpretar el código fuente y ejecutarlo.</p>
				<h4 id="visual_studio_code">Visual Studio Code</h4>
				<p>Este es el editor de código que usaremos para programar.</p>
				<p>Consulta mi <a href="https://pablomonteserin.com/curso/visual-studio-code/" target="_blank">curso de visual studio code</a>.</p>
			</div>
		</article>
		<article>
			<div>
				<h2 id="console-log">Console.log</h2>
				
				<div class="row">
					<div class="col-md-10">
					<pre><code>&lt;script&gt;
	console.log("Hola");
&lt;/script&gt;</code></pre>
					</div>
					<div class="col-md-2">
					<div class="centraditos">
					<?= getRes("video_premium abierto", 329284671) ?>
					<?= getRes('ejemplo abierto', 'ex/console-log.html', 'Ver ejemplo', 3) ?>
				</div>
					</div>
				</div>
				
				
				
			</div>
		</article>
		<article>
			<div>
				<h2 id="comentarios">Comentarios</h2>

				<div class="row">
					<div class="col-md-10">
						<pre><code>&lt;script&gt;
	/*
		Comentario 
		multilínea
	*/

	//Comentario de una sola línea
&lt;/script&gt;</code></pre>
					</div>
					<div class="col-md-2">
						<?= getRes("video_premium abierto", 329284658) ?>

					</div>
				</div>

			</div>
		</article>
		<article>
			<div>
				<h2 id="variables">Variables</h2>
				<p>Son zonas de la memoria del ordenador identificadas por un nombre y capaces de almacenar información que no puede variar durante la ejecución del programa.</p>
				<h3 id="detexto">Variables de texto</h3>

				<div class="row">
					<div class="col-md-10">

						<pre><code>&lt;script&gt;
	let texto=&quot;Soy una cadena&quot;;
	console.log(texto);
&lt;/script&gt;</code></pre>
					</div>

					<div class="col-md-2">
						<?= getRes('ejemplo abierto', 'ex/variables-constantes/variables-1/index.html', 'Variables de texto', 5) ?>
					</div>

				</div>


				<div class="row">

					<div class="col-md-8">

						<pre><code>&lt;script&gt;
	let texto=&quot;Soy una cadena&quot;;

	console.log(&quot;texto&quot;);
	console.log(texto);
&lt;/script&gt;</code></pre>
					</div>
					<div class="col-md-4">
						<div class="centraditos">

							<?= getRes('ejemplo abierto', 'ex/variables-constantes/variables-2/index.html', 'Variables de texto 2', 5) ?>
							<?= getRes("video_premium abierto", 329284644) ?>
						</div>

					</div>

				</div>

				<h3 id="numericas">Variables numéricas</h3>

				<div class="row">
					<div class="col-md-10">
						<pre><code>&lt;script&gt;
	let i = 5;
	let j = 3;

	console.log(i+j);
	console.log(i, j);
&lt;/script&gt;</code></pre>
					</div>
					<div class="col-md-2"></div>
					<?= getRes('ejemplo abierto', 'ex/variables-constantes/variables-numericas/index.html', 'Variables numéricas', 5) ?>
				</div>



				<h4>Ejercicio: <span class="text-primary">Intercambiar el contenido de dos variables</span></h4>
				<div class="row">

					<div class="col-md-6">
						<pre><code>let a = 5;
let b = 7;
<span class="green">... aqui hay que poner codigo</span>
console.log(a); <span class="green">//Debería mostrar 7</span>
console.log(b); <span class="green">//Debería mostrar 5</span></code></pre>

					</div>
					<div class="col-md-6">
						<div class="centraditos">
							<?= getRes("video_premium", 329284632) ?>
							<?= getRes('ejemplo', 'ex/variables-constantes/intercambiar-variables/index.html', 'Intercambiar variables', 5) ?>
							<?= getRes("video_premium", 329284620) ?>
						</div>
					</div>
				</div>



				<h3 id="conversion">Conversión de tipos</h3>
				<div class="row">

					<div class="col-md-10">
						<pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
	let i = 5;
	let j = 3;

	console.log(&quot;&quot; + i + j);
&lt;/script&gt;</code></pre>
					</div>
					<div class="col-md-2">
						<?= getRes('ejemplo', 'ex/variables-constantes/conversion-tipos/index.html', 'Conversión de tipos', 5) ?>


					</div>
				</div>


			</div>
		</article>
		<article>
			<div>
				<h2 id="constantes">Constantes</h2>

				<div class="row">

					<div class="col-md-8">
						<pre><code>&lt;script&gt;
	const pi = 3.14159;	
	console.log(pi);
	
	<span class="green">//La siguiente l&iacute;nea da error</span>
	pi = 5;

&lt;/script&gt;</code></pre>
					</div>
					<div class="col-md-4">

						<div class="centraditos">
							<?= getRes("video_premium", 329284602) ?>

							<?= getRes('ejemplo', 'ex/variables-constantes/error-constantes.html', 'Ver error del ejemplo de constantes') ?>

						</div>
					</div>
				</div>


			</div>
		</article>
		<article>
			<div>
				<h2 id="operadores">Operadores</h2>
				<h3 id="concatenacion">Operador de concatenación</h3>


				<div class="row">

					<div class="col-md-8">

						<pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
	console.log(&quot;texto1 &quot; <span class="red bold">+</span> &quot;texto2 &quot; <span class="red bold">+</span> &quot;texto3&quot; );
&lt;/script&gt;</code></pre>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
						<?= getRes('ejemplo', 'ex/operadores/concatenacion/index.html', 'Operador de concatenación', 5); ?>
						<?= getRes("video_premium", 329284592) ?>
						</div>
					</div>
				</div>


				<h3 id="aritmeticos">Operadores aritméticos</h3>

				<div class="row">
					<div class="col-md-8">

						<pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
	console.log(&quot;adici&oacute;n &quot;, 7<span class="red bold">+</span>2);
	console.log(&quot;sustracci&oacute;n &quot;, 7<span class="red bold">-</span>2);
	console.log(&quot;multiplicaci&oacute;n &quot;, 7<span class="red bold">*</span>2);
	console.log(&quot;divisi&oacute;n &quot;, 7<span class="red bold">/</span>2);
	console.log(&quot;resto &quot;, 7<span class="red bold">%</span>2);
&lt;/script&gt;</code></pre>

					</div>
					<div class="col-md-4">
						<div class="centraditos">

							<?= getRes('ejemplo', 'ex/operadores/aritmeticos/index.html', 'Operadores aritméticos', 5) ?>
							<?= getRes("video_premium", 329296261) ?>
						</div>
					</div>
				</div>
				<h4>Ejercicios con operadores aritméticos</h4>
				<ol>
					<li>

						<div class="row">
							<div class="col-md-8">
								<p>Escribir un programa que calcule el número de segundos que existen en un día. Para ello debemos multiplicar los segundos de un minuto, por los minutos de una hora, por las horas de un día. Como todo el mundo sabe, un día tiene 86400 segundos.</p>
							</div>
							<div class="col-md-4">
								<div class="centraditos">

									<?= getRes("video_premium", 329296248) ?>
									<?= getRes('ejemplo', 'ex/operadores/ejercicios/segundos/index.html', 'Ver resuelto', 5) ?>
								</div>

							</div>

						</div>

					</li>
					<li>

						<div class="row">
							<div class="col-md-10">
								<p>Hacer un conversor de euros a dólares. Tendremos una variable llamada "euros" en la que el valor estará inicializado con valor 7. Debemos calcular ese valor en dólares. Supondremos que un euro son dos dólares</p>

							</div>
							<div class="col-md-2">
							<?= getRes("video_premium", 329296242) ?>
							</div>

						</div>


						
					</li>
					<li>
						
					<div class="row">
<div class="col-md-8">
<p>El IVA para ciertos artículos es del 21%. Realiza un programa que a partir de una variable precio inicializada con valor 100, calcule el precio con IVA. </p>
</div>
<div class="col-md-4">
<div class="centraditos">
<?= getRes("video_premium", 329296230) ?>
							<?= getRes('ejemplo', 'ex/operadores/ejercicios/iva/index.html', 'Ver resuelto', 5) ?>
</div>
</div>

					</div>
					
					</li>
					<li>
					<div class="row">
<div class="col-md-8"><p>Realiza un programa que a partir de los valores ancho=4 y alto=7, calcule el área de un rectángulo.</p></div>
<div class="col-md-4">
<div class="centraditos">
							<?= getRes("video_premium", 329296215) ?>
							<?= getRes('ejemplo', 'ex/operadores/ejercicios/area/index.html', 'Ver resuelto', 5) ?></div>

</div>

					</div>	
					 
					</li>
					<li>
						
					<div class="row">
<div class="col-md-8">
<p>Hacer un conversor de grados centígrados a grados Fahrenheit. Para ello deberé multiplicar por 9/5 y sumar 32. Como todo el mundo sabe, 20 grados centígrados son 68 grados Fahrenheit.
</p>
</div>
<div class="col-md-4">
<div class="centraditos">
							<?= getRes("video_premium", 329296202) ?>
							<?= getRes('ejemplo', 'ex/operadores/ejercicios/grados/index.html', 'Ver resuelto', 5) ?></div>
</div>


					</div>
						
					</li>
					<li>
						
					<div class="row">

<div class="col-md-8">
<p>Vamos a mandar al usuario la caja de sus sueños. Para ello, partiremos de los siguientes valores:
						<pre><code>let nombre = "Juan";
let material = "madera";
let dimensiones = "grande";
let comentario = "Que sea bonita, pero de una belleza estraña, indomita"</code></pre>
						y los concatenaremos para obtener por consola el siguiente mensaje:


						<br><span class="bold">"[nombre] ha pedido una caja de [material] con unas dimensiones [dimensiones]. [comentario].</span> <br>
						Pablo ha pedido una caja de Madera con unas dimensiones diminutas. Que sea muy bonita </p>

</div>
<div class="col-md-4">
<div class="centraditos">
								<?= getRes("video_premium", 329296191) ?>
								<?= getRes('ejemplo', 'ex/operadores/ejercicios/cajas.html', 'Ver resuelto') ?></div>

</div>

					</div>
							
					</li>
				</ol>
			</div>
		</article>
		<article>
			<div>
				<h2 id="estructuras-control-condicionales">Estructuras condicionales</h2>
				<h3 id="logicos">Operadores lógicos o booleanos</h3>

				<div class="row">

<div class="col-md-8">
<pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
	console.log(&quot;Mayor: &quot;, 7<span class="red bold">&gt;</span>2);
	console.log(&quot;Menor: &quot;, 7<span class="red bold">&lt;</span>2);
	console.log(&quot;Mayor o igual: &quot;, 7<span class="red bold">&gt;=</span>2);
	console.log(&quot;Menor o igual: &quot;, 7<span class="red bold">&lt;=</span>2);
	console.log(&quot;Igual: &quot;, 7<span class="red bold">==</span>2);
	console.log(&quot;Distinto: &quot;, 7<span class="red bold">!=</span>2);
&lt;/script&gt;
</code></pre>
</div>
<div class="col-md-4">

<div class="centraditos">
					<?= getRes("video_premium", 329304248) ?>
					<?= getRes('ejemplo', 'ex/operadores/logicos/index.html', 'Operadores lógicos o booleanos', 5) ?></div>
</div>

				</div>
				
				
				<h4 id="diferencia">Diferencia entre == y ===</h4>

				<div class="row">

				<div class="col-md-8">
				<p>El triple igual significa “son iguales sin conversión de tipos”.</p>
				<ul>
					<li>
						1=="1" <span class="green">// true, conversión automática del tipo de datos</span></li>
					<li>1==="1" <span class="green">// false, ya que son datos de diferente tipo</span></li>
					<li>0==false <span class="green">// true</span></li>
					<li>0===false <span class="green">// false, ya que son datos de diferente tipo</span></li>
				</ul>
				</div>
				<div class="col-md-4">				<?= getRes("video_premium", 329304229) ?>
</div>
				</div>
				
				<h4>Condicional if</h4>

				<div class="row">
<div class="col-md-8">
<pre><code>&lt;script&gt;
	const dato1 = 3;
	const dato2 = 5;
	
	if(dato2 &gt; dato1){
		console.log(&quot;dato2 es mayor que dato1&quot;);
	}
&lt;/script&gt;</code></pre>
</div>
<div class="col-md-4">
<div class="centraditos">
					<?= getRes("video_premium", 329304213) ?>
					<?= getRes('ejemplo', 'ex/if/if/index.html', 'If', 5) ?></div>
</div>

				</div>
				
				
				<h4>Ejercicio:<span class="text-primary"> operador booleano</span></h4>
<div class="row">
<div class="col-md-8">
<p>Modificar <span style="text-decoration:underline" class="bold">sólo</span> <span class="red bold">el operador booleano</span> para lograr que se imprima el mensaje.</p>
				<pre><code>&lt;script&gt;
	const dato1 = 10;
	const dato2 = 10;
	if(dato1 <span class="red bold">&gt;</span> dato2){console.log(&quot;exito&quot;);}
&lt;/script&gt;</code></pre>
</div>
<div class="col-md-4">
<div class="centraditos">
					<?= getRes("video_premium", 329304190) ?>
					<?= getRes('ejemplo', 'ex/if/ejercicio-if/index.html', 'Ejercicio if', 5) ?></div>
</div>

</div>


				
				
				<h4>else if</h4>
<div class="row">
<div class="col-md-8">
<pre><code>&lt;script&gt;
	const dato1 = 3;
	const dato2 = 5;
	
	if(dato1 &gt; dato2){
		console.log(&quot;dato1 es mayor que dato2&quot;);
	}else if(dato1&lt;dato2){
		console.log(&quot;dato1 es menor que dato 2&quot;);
	}	
&lt;/script&gt;</code></pre>
</div>
<div class="col-md-4">
<div class="centraditos">
					<?= getRes("video_premium", 329304175) ?>
					<?= getRes('ejemplo', 'ex/if/else-if/index.html', 'elseif', 5) ?></div>

</div>

</div>

<h4>else</h4>

<div class="row">
	<div class="col-md-8">
	<pre><code>&lt;script&gt;
	const dato1 = 3;
	const dato2 = 5;
	if(dato1 &gt; dato2){
		console.log(&quot;dato1 es mayor que dato2&quot;);
	}else if(dato1==dato2){
		console.log(&quot;dato1 es igual que dato2&quot;);
	} else{
		console.log(&quot;Va a ser que no...&quot;);
	}
&lt;/script&gt;</code></pre>

	</div>
	<div class="col-md-4">
	<div class="centraditos">
					<?= getRes("video_premium", 329304154) ?>
					<?= getRes('ejemplo', 'ex/if/else/index.html', 'elseif', 5) ?></div>
	</div>
</div>
				
				
				
				<h4>Ejercicios: <span class="text-primary"></span>if</h4>
				<ol>
					<li>

					<div class="row">
						<div class="col-md-8">
						<p>Corrige los errores que hay en este código:</p>
						<pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
if {10 == 10}(
    console.log(&quot;You got a true!&quot;)
) else (
    console.log(&quot;You got a false!&quot;)
)
&lt;script type=&quot;text/javascript&quot;&gt;</code></pre>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 329304127) ?>
							<?= getRes('ejemplo', 'ex/if/arreglar-codigo/index.html', 'Ver ejercicio resuelto', 5) ?>
						</div>
						</div>
					</div>	
						
						
					</li>
					<li>
					<div class="row">
						<div class="col-md-8">
						<p>Dada una constante que contiene la nota de un examen que va de 0 a 10...</p><ul>
							<li>Si es mayor que cinco mostrar el texto "Aprobado".</li>
							<li>Si es igual a cinco, mostrar el texto "Aprobado por los pelos"</li>
							<li>Si es menor que cinco, mostrar el texto "Suspenso".</li>
						</ul>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 329304104) ?>
							<?= getRes('ejemplo', 'ex/operadores/nota/index.html', 'Ver ejemplo', 5) ?></div>

						</div>
					</div>	
					
					
						
					</li>
					<li>
						
					<div class="row">
<div class="col-md-8">
<p>Declarar una constante 'i' de tipo entero y asígnale un valor. Mostrar un mensaje indicando si el valor de 'i' es positivo o negativo, si es par o impar, si es múltiplo de 5, si es múltiplo de 10 y si es mayor o menor que 100. Consideraremos el 0 como positivo.</p>
</div>
<div class="col-md-4">
<div class="centraditos">
							<?= getRes("video_premium", 329304083) ?>
							<?= getRes('ejemplo', 'ex/operadores/constante-i/index.html', 'Ver ejemplo', 5) ?></div>
</div>

					</div>
					
						
					</li>
					<li>

					<div class="row">
<div class="col-md-8">
<p>Hacer una calculadora que determine la operación a realizar por medio de una estructura de control if.</p>
						<p>La calculadora utilizará 3 constantes para hacer los cálculos.</p>
						<ul>
							<li>Una constante que almacenará el primer número. Por ejemplo:
								<pre><code>const n1 = 3;</code></pre>
							</li>
							<li>Una constante que almacenará el segundo número. Por ejemplo:
								<pre><code>const n2 = 7;</code></pre>
							</li>
							<li>Una constante de tipo texto que almacenará la operación a realizar. Esta constante podrá valer +, -, * o /, en función de la operación que deseamos realizar. Por ejemplo:
								<pre><code>const op = '+';</code></pre>
							</li>
						</ul>
						<p>Utilizaremos la estructura de control if para evaluar la constante que almacena la operación a realizar y en función de esa evaluación, hacer una suma, una resta, una multiplicación o una división. </p>
</div>
<div class="col-md-4">
<div class="centraditos">
							<?= getRes('ejemplo', 'ex/operadores/calculadora/index.html', 'Ver ejemplo', 5) ?>
							<?= getRes("video_premium", 329304062) ?>

						</div>
</div>

					</div>
						
						
				</ol>
				<!--h3 class="orange">Ejercicio</h4>
<a href="ex/challenge-Conditional-movement/solution - DONT LOOK UNTIL YOU TRY.html">Ejercicio resuelto</a> <br>
<a href="ex/challenge-Conditional-movement/challenge-Conditional-movement.zip">Descargar el zip y resolver el ejercicio siguiendo las instrucciones que hay en el código fuente.</a-->
				<h3>Operador ternario</h3>
				<pre><code>const a = 5;
const b = 3;

if(a>b){console.log("a es mayor que b");}
else{console.log("b es mayor que a");}

		
const resultado = (a>b)?"a es mayor que b":"b es mayor que a";
console.log(resultado);</code></pre>

				<h4>Ejercicios <span class="text-primary">operador ternario</span></h4>
				<ol>
					<li>Declare una variable numérica 'b' y asignale un valor. Mostrar una traza indicando si el valor de 'b' es positivo o negativo. Consideraremos el 0 como positivo. Utiliza el operador condicional (? : ) dentro del <span class="i">console.log</span> para resolverlo.
					</li>
					<li>Declarar una variable numérica 'i' y asignale un valor. Muestra un mensaje indicando si 'i' es par o impar. Utiliza el operador condicional ( ? : ) dentro del <span class="i">console.log</span> para resolverlo.
					</li>
				</ol>
				<h3 id="estructuras_control_switch">Estructura switch</h3>
				<pre><code>let opcion = 'opcion1';

switch(opcion) {
	case 'opcion1':
		console.log(&quot;Has escogido la opción 1&quot;);
	break;
	case 'opcion2':
		console.log(&quot;Has escogido la opción 2&quot;);
	break;
	case 'opcion3':
		console.log(&quot;Has escogido la opción 3&quot;);
	break;
	default:
		console.log(&quot;No has escogido ninguna de las opciones posibles&quot;);
}</code></pre>
				<h4>Ejercicio: <span class="primary">switch modificando el case</span></h4>


				<div class="row">
					<div class="col-md-8">
					<p>Inserta el código necesario para que esta estructura de control Switch funcione también con el amarillo.</p>
				<pre><code>const color = 'amarillo';
switch(color) {
	case 'rojo':
		console.log(&quot;Has escogido rojo&quot;);
	break;
	case 'azul':
		console.log(&quot;Has escogido azul&quot;);
	break;
	<span class="green">//Inserta tu c&oacute;digo aqu&iacute;</span>
	default:
		console.log(&quot;No has escogido ning&uacute;n color de la lista!&quot;);
}</code></pre>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 220366208) ?>
					<?= getRes('ejemplo', 'ex/switch/index.html', 'Ver switch.html', 4) ?>
				</div>
					</div>
				</div>
				
				
				<h4>Ejercicio: switch modificando el default</h4>

				<div class="row">
<div class="col-md-8">
<p>Añadir el caso por defecto (default):</p>
				<pre><code>let golosina = 'nubes';

switch(golosina) {
	case 'chicle':
		console.log(&quot;Has escogido un chicle&quot;);
	break;
	case 'gominola':
		console.log(&quot;Has escogido una gominola&quot;);
	break;
	case 'regaliz':
		console.log(&quot;Has escogido un regaliz&quot;);
	break;
		<span class="green">//Inserta tu c&oacute;digo aqu&iacute;</span>
}</code></pre>

</div>
<div class="col-md-4">
<div class="centraditos">
					<?= getRes("video_premium", 329303982) ?>
					<?= getRes('ejemplo', 'ex/switch-2/index.html', 'Ver solución ejercicio switch', 4) ?></div>
</div>

				</div>
				
				
			</div>
		</article>
		<article>
			<div>
				<h2 id="bucle-for">Bucle for</h2>

				<div class="row">
					<div class="col-md-6">
					<pre><code>for(
	estado inicial de la variable contadora;
	condicion que se ejecuta antes de cada repeticion;
	incremento o decremento de la variable contadora
){
	console.log(i);
}</code></pre>
					</div>
					<div class="col-md-6">
					<pre><code>&lt;script&gt;
	for(i=0; i&lt;10; i++){
		console.log(i);
	}
&lt;/script&gt;</code></pre>
					</div>
				</div>
				
				
				<p>Snippet para crear bucles for en Sublime Text: <span class="bold">for</span></p>

				<div class="row">
					<?= getRes("video_premium", 329527490) ?>
					<?= getRes('ejemplo', 'ex/bucle/bucle/index.html', 'bucle for', 5) ?></div>
				<h3>Ejercicios bucle for</h3>
				<ol>
					<li>
						<div class="row">
							<div class="col-md-8">
							<p>Imprimir los números pares que hay dentro de los 100 primeros números naturales. No utilizar la estructura de control if para resolver este ejercicio.</p>
							</div>
							<div class="col-md-4">
							<div class="centraditos">
							<?= getRes("video_premium", 329527522) ?>
							<?= getRes('ejemplo', 'ex/bucle/bucle-1/index.html', 'Ejercicio bucle for', 5) ?></div>
							</div>
						</div>
						
						
					</li>
					<li>

					<div class="row">
						<div class="col-md-8">
						<p>Imprimir los números pares que hay dentro de los 100 primeros números naturales</p>
						<p>El bucle avanzará de uno en uno; no de dos en dos como en el ejercicio anterior.</p>
						<p>Utilizaremos el operador % para separar los pares de los impares.</p>
						<p>Nota: El operador "%" nos da el resto de dividir un número entre otro. <br>
							Ej: 7%3=1</p>
						</div>
						<div class="col-md-4">
						<div class="centraditos">

<?= getRes('ejemplo', 'ex/bucle/ejercicio-bucle/index.html', 'Ejercicio bucle for 2', 5) ?>

<?= getRes("video_premium abierto", 'Rsdd3EwvmeY', 'Ver resolución') ?>
</div>
						</div>
					</div>
						
						
					</li>
					<li>

					<div class="row">
						<div class="col-md-8">
						<p>Ejercicio: fizzbuzz</p>
						<p>Imprimir los números del 1 al 20.</p>
						<ul>
							<li>Para números divisibles por 3, imprimir “Fizz”.</li>
							<li>Para números divisibles por 5, imprimir “Buzz”.</li>
							<li>Para números divisibles por 3 y 5, imprimir “FizzBuzz”.</li>
							<li>En cualquier otro caso, imprimir el número.</li>
						</ul>
						<div class="notas">
							<h5>Notas:</h5>
							<pre><code>if(i&gt;5 &amp;&amp; i&lt;7)
if(i==5 || i== 3)</code></pre>
						</div>
						</div>
						<div class="col-md-4"><div class="centraditos">
							<?= getRes("video_premium", 332675535) ?>
							<?= getRes('ejemplo', 'ex/bucle/fizz-buzz/index.html', 'Ejercicio fizz buzz', 5) ?></div></div>
					</div>
					
						
					</li>
					<li>
					<div class="row">
						<div class="col-md-8">
<p>Mostrar la tabla de multiplicar que va del 1 al 9. Usaremos dos bucles anidados.
</p>
						</div>
						<div class="col-md-4">

						<div class="centraditos">
							<?= getRes("video_premium", 329527750) ?>
							<?= getRes('ejemplo', 'ex/bucle/tabla-multiplicar-completa/index.html', 'Tabla de multiplicar completa', 5) ?></div>

						</div>
					</div>	
						
					</li>
					<li>

					<div class="row">
						<div class="col-md-8">
						<p id="enesimapotencia">Ejercicio - enésima potencia</p>
						<p>Calcular utilizando un bucle while, la cuarta potencia de tres. Debería dar 81.</p>
						<img src="img/enesima-potencia.svg" class="img-fluid" alt="Diagrama de flujo de ejercicio de Javascript para calcular la enésima potencia de un número">
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 329527665) ?>
							<?= getRes('ejemplo', 'ex/bucle/enesima-potencia/index.html', 'Ver ejercicio potencia resuelto', 5) ?></div>
						</div>
					</div>
						
						
					</li>
					<li>

					<div class="row">
						<div class="col-md-8">
						<p id="calculo_factorial">Calcular el factorial de 5 <i class="fa fa-hand-peace-o" aria-hidden="true"></i>.</p>
						<p>El factorial de un número entero positivo se define como el producto de todos los números naturales anteriores o iguales a él. Se escribe n!, y se lee "n factorial". (Por definición el factorial de 0 es 1: 0!=1)</p>
						<p>Por ejemplo, 5! = 5·4·3·2·1 = 120</p>
						<img src="img/factorial.svg" alt="Diagrama de flujo del cálculo de un factorial con Javascript" class="img-fluid">
						<p><strong>Variaciones del ejercicio para los que terminen antes </strong>: Este ejercicio se puede resolver, en general, de cuatro formas diferentes, con un bucle for, con un bucle while, y multiplicando los factoriales de mayor a menor o de menor a mayor.</p>
	
					</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 329527689) ?>
							<?= getRes('ejemplo', 'ex/bucle/factorial/index.html', 'Ver ejercicio resuelto', 5) ?></div>
						</div>
					</div>
						
					
					</li>
				</ol>
			</div>
		</article>
		<article>
			<div>
				<h2 id="bucle-while">Bucle While</h2>

				<div class="row">
					<div class="col-md-10"><pre><code>let valor = 0;
while(valor&lt;4){
	console.log(valor);
	valor++;
}</code></pre></div>
					<div class="col-md-2">				<?= getRes("video_premium", 329527641) ?>
</div>
				</div>	
				
				<h3>Ejercicios bucle while</h3>
				<ol>
					<li>
						<p>Repetir el juego del número secreto, pero ahora después de jugar se le preguntará al usuario si desea seguir jugando. Si no desea seguir jugando la variable booleana "quieroJugar" que evalúa el bucle while valdrá false, con lo cual termina el juego.</p>
					</li>
					<li>
						<p>El usuario debe introducir su nombre, en el caso de que haya introducido información, se le preguntará si los datos son correctos. Si responde que sí, se le indicará que puede seguir con el exámen. Si responde que no, volveremos a la pregunta inicial.
							En caso de que al principio de todo no hubiese escrito nada, se mostrará un mensaje con la palabra "error"</p>
						<p>Para recoger un valor vacío ("") cuando el usuario pulsa la tecla enter sin introducirar ningún valor, podemos usar el método <span class="i">scanner.nextLine();</span></p>
						<img src="img/entrada-nombre.svg" class="img-fluid" alt="Diagrama de flujo de ejercicio java">
					</li>
					<li>Leer números hasta que el usuario introduzca un -1 y mostrar cuantos fueron introducidos.
					</li>
				</ol>
			</div>
		</article>
		<article>
			<div>
				<h2 id="funciones">Funciones</h2>

				<div class="row">
<div class="col-md-6">
<p>Son bloques de código reutilizables.</p>
<img class="img-fluid" src="img/funcion.png" alt="¿qué es una función?">

</div>
<div class="col-md-6">				<?= getRes("video_premium", 329527780) ?>
</div>

				</div>
			
				<h3 id="nodevuelvenada">Función que no devuelve nada, sin parámetros</h3>

				<div class="row">
<div class="col-md-8">
<pre><code>&lt;script&gt;
	function saludar(){
		console.log(&quot;Buenas tardes!&quot;);
	}

	saludar();
&lt;/script&gt;</code></pre>
</div>
<div class="col-md-4">
<div class="centraditos">
					<?= getRes("video_premium", 329527810) ?>


					<?= getRes('ejemplo', 'ex/1-funcion-no-devuelve-nada-sin-parametros/index.html', 'Ver ejemplo', 4) ?>
				</div>
</div>

				</div>
				
				<h3 id="conparametros">Función que no devuelve nada, con parámetros</h3>

				<div class="row">

				<div class="col-md-8">
				<pre><code>&lt;script&gt;

function saludar(nombre){
	console.log(&quot;Buenas tardes &quot; + nombre);
}

saludar(&quot;Pablo&quot;);

&lt;/script&gt;</code></pre>
				</div>
				<div class="col-md-4">
				<div class="centraditos">
					<?= getRes("video_premium", 329527831) ?>
					<?= getRes('ejemplo', 'ex/1-funcion-no-devuelve-nada-con-parametros/index.html', 'Verlo funcionando', 4) ?></div>
				</div>
				</div>
				
				
				<h3><span class="text-dark">Ejercicios:</span> funciones</h3>
				<p>Resolveremos los siguientes ejercicios definiendo una función con parámetros de entrada</p>
				<ol>
					<li>
					<p>Ejercicio "hoyQuieroComer"</p>
					<div class="row">
					
						<div class="col-md-8">
						
						<p>Crear una función llamada "hoyQuieroComer" que recibe un parámetro “comida” curyo valor será "garbanzos".</p>
						<p>Cuando llamemos a la función se mostrará un log indicándonos lo que deseamos comer.</p>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 329527847) ?>
							<?= getRes('ejemplo', 'ex/funcion-javascript/index.html', 'Ver ejercicio resuelto', 4) ?>
						</div>
						</div>
					</div>
						
					
					</li>
					<li>
					<div class="row">
						<div class="col-md-8">
						<p>Crear y llamar a una función que recibe un número y calcula su cubo.</p>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 329527873) ?>
							<?= getRes('ejemplo', 'ex/funcion-cubo/index.html', 'Ver ejercicio resuelto', 5) ?>
						</div>
						</div>
					</div>	
					
						
					</li>
					<li>Crear y llamar a una función que recibe la velocidad en Km/hora y la muestra en metros/hora.</li>
					<li>

					<div class="row">
						<div class="col-md-8">
						<p>Crea y llama a una función que recibe el ancho y el alto de un rectángulo y calcula su area.</p>
						<p>Cuando una función recibe varios parámetros, estos irán separados por coma. </p>
						<pre><code>calculaArea(alto, ancho);</code></pre>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 329527893) ?>
							<?= getRes('ejemplo', 'ex/funcion-calcula-perimetro/index.html', 'Ver ejercicio funcionando', 4) ?>
						</div>
						</div>
					</div>
						
						
					</li>
					<li>
					<div class="row">
						<div class="col-md-8">
						<p>Crear y llamar a una función que recibe la base y la altura de un triángulo y calcula su área. <br><strong>Area triángulo </strong> = base*altura/2</p>
						</div>
						<div class="col-md-4">
						<?= getRes("video_premium", 332676625) ?>

						</div>
					</div>	
					
						
					</li>
					<li>
					<div class="row">
						<div class="col-md-8">
							<p>Utilizando estas dos funciones:</p>
							<ul>
							<li>calculaPerimetro(radio); <strong>Perímetro de la circunferencia</strong> = 2*Math.PI*Radio</strong></li>
							<li>calculaArea(radio); <strong>Area de la circunferencia</strong> = Math.PI*Radio<sup>2</sup></li>
						</ul>
						<p>Asignar a una variable radio el valor 3 y mostrar por pantalla su perímetro y area.</p>
						</div>
						<div class="col-md-4">
						<?= getRes("video_premium", 329527936) ?>
						</div>
					</div>	
					
					
						
						
						
					</li>
				</ol>
				<h3 id="devuelvealgo">Función que <span class="red">devuelve un valor</span></h3>

<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">Función que no devuelve nada</span><code>function noDevuelveNada(a, b){
	const resultado = a + b;
	console.log(resultado);
}

noDevuelveNada(2,3);</code></pre>
	</div>
	<div class="col-md-6">
	<pre><span class="bold">Función que devuelve algo</span><code>function devuelveValor(a,b){
	const resultado = a + b;
	return resultado;
}

const valorDevuelto = devuelveValor(2,3);
console.log(valorDevuelto);</code></pre>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">Otro ejemplo de funciones con y sin return</span><code>&lt;script&gt;
	const v1 = parseInt("3");
	const v2 = console.log("Esto no devuelve nada");
	console.log(v1);
	console.log(v2);
&lt;/script&gt;</code></pre>
	</div>
	<div class="col-md-6"><?= getRes("video_premium", 329527964) ?></div>
</div>

				
				
				

				
			</div>
		</article>
		<article>
			<div>
				<h2 id="arrow-functions">Arrow Functions</h2>
				<h3>¿Por qué es necesario declarar una arrow function antes de usarla?</h3>

<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">Declaración de una función:</span><code>a();
function a(){}</code></pre>
	</div>
	<div class="col-md-6">
	<pre><span class="bold">Expresión de una función (función como valor)</span><code>const prueba = function {
	console.log('hola');
}
prueba();</code></pre>
	</div>
</div>

				

				
				<p>En la primera fase de carga del código Javascript (hoising), las funciones se almacenan en memoria con todo su código, pero laas variables y constantes se almacenan con valor <span class="i">undefined</span>.</p>
				<p>En la fase de ejecución es dónde se asignan los valores a las variables y constantes. Por tanto, si utilizamos una variable o constante antes de haberle asignado un valor en esta fase, dará error, puesto que tendrá un valor de <span class="i">undefined</span>.</p>
				<p>Son una nueva manera de expresar las funciones de siempre, de un modo resumido y con algunas características nuevas.</p>
				<pre><code>nombre de la función = parámetros => cuerpo o valor devuelto</code></pre>
				<p>A continuación de la flecha ponemos lo que devuelve la función.</p>
				<h3>Sin parámetros</h3>
				<div class="row">
					<div class="col-md-8">
					<pre><code>const devolver1 = () => {
	console.log('Hola'); 
}

const devolver2 = _ => {
	console.log('Adios'); 
}

devolver1(); <span class="green">// Hola</span>
devolver2(); <span class="green">// Adios</span></code></pre>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 329527993) ?>
					<?= getRes('ejemplo', 'ex/arrow-functions/sin-parametros/index.html', 'Ver ejemplo', 5) ?></div>
					</div>
				</div>
				
				
				<h3>Con un parámetro</h3>
				<div class="row">
					<div class="col-md-8">
					<pre><code>const multiplicar1 = param => {
	const resultado = param * 2;
	console.log(resultado)
}

const multiplicar2 = (param) => {
	const resultado = param * 2;
	console.log(resultado)
}


multiplicar1(4);  <span class="green">// 8</span>
multiplicar2(4);  <span class="green">// 8</span></code></pre>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 331635307) ?>
					<?= getRes('ejemplo', 'ex/arrow-functions/con-un-parametro/index.html', 'Ver ejemplo', 5) ?></div>
					</div>
				</div>
				
				
				<h3>Múltiples parámetros</h3>
				<div class="row">
					<div class="col-md-8">
					<pre><code>const multiplicar = (x, y) => {
	const resultado = x * y;
	console.log(resultado);
}

multiplicar(2, 3);  <span class="green">// 6</span></code></pre>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 331635581) ?>
					<?= getRes('ejemplo', 'ex/arrow-functions/multiples-parametros/index.html', 'Ver ejemplo', 5) ?></div>
					</div>
				</div>
				
				
				<h3>Sólo con return</h3>

				<div class="row">
					<div class="col-md-8">
					<pre><code>const multiplicar = (x, y) =>  x * y;

const valor = multiplicar(2, 3);

console.log(valor); <span class="green">// 6</span></code></pre>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 331635807) ?>
					<?= getRes('ejemplo', 'ex/arrow-functions/sin-cuerpo/index.html', 'Ver ejemplo', 5) ?></div>
					</div>
				</div>
				
				
				<h3><span class="bold">Ejercicios:</span> funciones</h3>
				<p>Resolveremos los siguientes ejercicios definiendo una función con parámetros de entrada</p>
				<ol>
					<li>
					<div class="row">
						<div class="col-md-8">
						<p>Crear y llamar a una función que recibe un número y calcula su cubo. </p>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 329528144) ?>
							<?= getRes('ejemplo', 'ex/arrow-functions/calcular-cubos/index.html', 'Ver ejercicio resuelto', 5) ?>
						</div>
						</div>
					</div>	
					
						
					</li>
					<li>
					<div class="row">
						<div class="col-md-8">
						<p>Crear y llamar a una función que recibe la velocidad en Km/hora y la muestra en metros/hora.</p>
						</div>
						<div class="col-md-4">
						<div class="row">
							<?= getRes("video_premium", 329528174) ?>
							<?= getRes('ejemplo', 'ex/arrow-functions/metros-x-hora/index.html', 'Ver ejemplo', 5) ?></div>
						</div>
					</div>	
					
					
						
					</li>
					<li>
						<div class="row">
							<div class="col-md-8">
							<p>Crea y llamar a una función que recibe el ancho y el alto de un rectángulo y calcula su superficie.</p>
						<p>Cuando una función recibe varios parámetros, estos irán separados por coma. </p>
						<pre><code>calculaSuperficie(alto, ancho);</code></pre>
							</div>
							<div class="col-md-4">
							<div class="centraditos">
							<?= getRes("video_premium", 329528195) ?>
							<?= getRes('ejemplo', 'ex/arrow-functions/calcula-superficie/index.html', 'Ver ejercicio funcionando', 5) ?></div>
							</div>
						</div>
						
						
					</li>
					<li>
					<div class="row">
						<div class="col-md-8">
						<p>Crear y llamar a una función que recibe la base y la altura de un triángulo y calcula su área. <br>
						<strong>Area triángulo </strong> = base*altura/2</p>
						</div>
						<div class="col-md-4">
						<div class="row">
							<?= getRes("video_premium", 329528228) ?>
							<?= getRes('ejemplo', 'ex/arrow-functions/calcula-superficie-triangulo/index.html', 'Ver ejemplo', 5) ?></div>
						</div>
					</div>	
					
					
						
					</li>
					<li>
					<div class="row">
						<div class="col-md-9">
						<p>Utilizando estas dos funciones:</p>
						<ul>
							<li>calculaPerimetro(int radio); <strong>Perímetro de la circunferencia</strong> = 2*Math.PI*Radio</strong></li>
							<li>calculaArea(int radio); <strong>Area de la circunferencia</strong> = Math.PI*Radio<sup>2</sup></li>
						</ul>
						<p>Leer el valor del radio de una circunferencia y mostrar por pantalla su perímetro y area.</p>
						</div>
						<div class="col-md-3">
						<?= getRes('ejemplo', 'ex/arrow-functions/circulo/index.html', 'Ver ejemplo', 5) ?>

						</div>
					</div>	
					
						
					</li>
				</ol>
			</div>
		</article>
		<article>
			<div>
				<h2 id="metodos-cadenas">Métodos para trabajo con cadenas</h2>

<div class="row">
	<div class="col-md-8">
	<pre><code>&lt;script&gt;
	const nombre = &quot;Ram&oacute;n&quot;;
	console.log(&quot;Las dos primeras letras son: &quot;+nombre.substring(0,2));
	console.log(&quot;Las letras que van desde la tercera hasta la &uacute;ltima posici&oacute;n son: &quot;+nombre.substring(2));
	console.log(&quot;La palabra tiene &quot;+nombre.length + &quot; letras&quot;);
	console.log(&quot;La palabra pasada a may&uacute;sculas es: &quot;+nombre.toUpperCase());
	console.log(&quot;La palabra pasada a min&uacute;sculas es: &quot;+nombre.toLowerCase());
	console.log(&quot;La posici&oacute;n de la &uacute;ltima 'm' de la palabra pasada es: &quot;+nombre.lastIndexOf(&quot;m&quot;));
&lt;/script&gt;</code></pre>
	</div>
	<div class="col-md-4">
	<div class="centraditos">
					<?= getRes("video_premium", 329528260) ?>
					<?= getRes('ejemplo', 'ex/manipulacion-cadenas/index.html', 'Métodos cadena', 5) ?></div>
	</div>
</div>

				
				

				<h5>Ejercicio: <span class="text-primary">cadenas</span></h5>

				<div class="row">
					<div class="col-md-8">
					<p>Utilizando el método substring imprimir las letras que van desde la posición 3 a la 7 de la cadena "won<span class="red">derf</span>ul day", es decir “derf”.</p>

					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 329528298) ?>
					<?= getRes('ejemplo', 'ex/wonderful/index.html', 'Ver ejercicio resuelto', 5) ?></div>
					</div>
				</div>
				
			</div>
		</article>
		<article>
			<div>
				<h2 id="aleatorios">Números aleatorios</h2>
				<?= getRes("video_premium", 329528327) ?>
				<h3>Generar número aleatorio dentro de un rango</h3>
				<pre><code>Math.floor(Math.random() * (MAX - MIN + 1)) + MIN;</code></pre>
				<p>Como ejemplo, si deseamos generar un número aleatorio entre 25 y 75, la sentencia sería</p>
				<pre><code>Math.floor(Math.random() * (75-25+1)) + 25;</code></pre>
				<h3 id="ej_num_aleatorio">Ejercicio número aleatorio</h3>
				<p>Obtener un número aleatorio entre 5 y 7.</p>
				<div class="row">
					<?= getRes("video_premium", 329528355) ?>
					<?= getRes('ejemplo', 'ex/aleatorio/numero-aleatorio/index.html', 'Ver ejemplo', 5) ?></div>
				<h3 id="ejercicio_letra_aleatoria">Ejercicio letra aleatoria</h3>
				<p>Obtener una letra aleatoria de tu nombre.</p>
				<p>Tendrás que usar los siguientes códigos:</p>
				<pre><code>Math.floor(Math.random() * (MAX - MIN + 1)) + MIN;
nombre.substring();
nombre.length;</code></pre>
				<p>Pasos para resolver el ejercicio:</p>
				
				<div class="row">
					<div class="col-md-8">
					<ol>
					<li>Calculamos un número aleatorio en un rango comprendido entre 0 y el número de letras de tu nombre.</li>
					<li>Utilizamos ese número aleatorio para obtener la letra de tu nombre que ocupa esa posición.</li>
					<li>Mostramos la letra en la consola.</li>
				</ol>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 329528373) ?>
					<?= getRes('ejemplo', 'ex/aleatorio/letra-aleatoria/index.html', 'Ver ejercicio resuelto', 5) ?></div>
					</div>
				</div>
				
				
				
			</div>
		</article>
		<article>
			<div>
				<h2 id="locationhref">location.href</h2>

				<div class="row">
					<div class="col-md-9">
					<p>Nos permite:</p>
				<ul>
					<li>Recuperar el valor de la url en la que estoy (cuando está a la derecha del igual).</li>
					<li>Redireccionar a otra página (cuando está a la izquierda del igual).</li>
				</ul>
					</div>
					<div class="col-md-3">
					<?= getRes("video_premium", 329528407) ?>
					</div>
				</div>
				
				
				<h3><span class="text-dark">Ejercicio:</span> location.href</h3>
<div class="row">
	<div class="col-md-6">
	<p>Obtener el nombre de la página actual.</p>
				<p>Pista: <br>
					<span class="red">location.href</span> nos devuelve la url completa de la página en la que estoy.</p>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
					<?= getRes("video_premium", 329528427) ?>
					<?= getRes('ejemplo', 'ex/location-href/index.html', 'Ver ejercicio resuelto', 5) ?>
				</div>
	</div>
</div>
				
				
			</div>
		</article>
		<article>
			<div>
				<h2>Callback</h2>
				<pre><code>const callback = () =&gt;{
	console.log('Llamada al callback');
}

const empezarTodo = (a, b, myCallback) =&gt; {
	console.log(a,b);
	callback();
}

empezarTodo(3,4);</code></pre>

			</div>
		</article>
		<article>
			<div>
				<h2 id="coleccion-ejercicios">Colección de ejercicios</h2>
				<p><a href="ex/preguntas-js.php">Acceder a la colección de ejercicios</a></p>
			</div>
		</article>
		<article>
			<div>
				<h2 id="dom">DOM</h2>
				<p>Gracias al DOM, Javascript puede acceder y modificar todos los elementos de un documento HTML. Para ello, el navegador crea una representación interna de la página, un árbol de nodos.</p>
				<img src="img/pic_htmltree.gif" alt="arbol de nodos">
				<h3>querySelector I</h3>
				<div class="row">
					<div class="col-md-8">
					<pre><code>&lt;form&gt;
	Escribe tu nombre, por favor:
	&lt;input type=&quot;text&quot; id=&quot;campoNombre&quot;&gt;
	&lt;input type=&quot;button&quot; id=&quot;btn&quot; value=&quot;Enviar formulario&quot;&gt;
&lt;/form&gt;

&lt;script&gt;
	const saludar = _ =&gt;{
		console.log(document.querySelector('#campoNombre').value);
	}

	document.querySelector('#btn').addEventListener('click', saludar);
&lt;/script&gt;</code></pre>

					</div> 
					<div class="col-md-4"> 
					<div class="centraditos"><?= getRes("video_premium", 408764482) ?>
					<?= getRes('ejemplo', 'ex/query-selector/paso-1.html', 'Ver ejemplo') ?></div>
					</div>
				</div>
				
				
				<h3>querySelector II</h3>
<div class="row">
	<div class="col-md-8">
	<pre><code>&lt;form&gt;
	Escribe tu nombre, por favor:
	&lt;input type=&quot;text&quot; id=&quot;campoNombre&quot;&gt;
	&lt;input type=&quot;button&quot; id=&quot;btn&quot; value=&quot;Enviar formulario&quot;&gt;
&lt;/form&gt;

&lt;script&gt;
	const saludar = _ =&gt;{
		const info = document.querySelector('#campoNombre').value;
		console.log(info);
	}

	document.querySelector('#btn').addEventListener('click', saludar);
&lt;/script&gt;</code></pre>
	</div>
	<div class="col-md-4">
	<div class="centraditos">
					<?= getRes("video_premium", 329665981) ?>
					<?= getRes('ejemplo', 'ex/query-selector/paso-2.html', 'Ver ejemplo resuelto') ?></div>
	</div>
</div>

				

				
				<h3>querySelector III</h3>

				<div class="row">
					<div class="col-md-8">
					<pre><code>&lt;form&gt;
	Escribe tu nombre, por favor:
    &lt;input type=&quot;text&quot; id=&quot;campoNombre&quot;&gt;
    &lt;input type=&quot;button&quot; id=&quot;btn&quot; value=&quot;Enviar formulario&quot;&gt;
    &lt;input type=&quot;text&quot; id=&quot;campoNombre2&quot;&gt;
&lt;/form&gt;

&lt;script&gt;
	const saludar = _ =&gt;{
		const info = document.querySelector('#campoNombre').value;
		document.querySelector('#campoNombre2').value = info;
	}

	document.querySelector('#btn').addEventListener('click', saludar);
&lt;/script&gt;</code></pre>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 329665958) ?>
					<?= getRes('ejemplo', 'ex/recuperar-un-valor-name-3/index.html', 'Ver ejemplo', 4) ?></div>
					</div>
				</div>
				
				
				<h3>querySelector IV</h3>

				<div class="row">
					<div class="col-md-8">
					<pre><code>&lt;form&gt;
	Escribe tu nombre, por favor:
	&lt;input type=&quot;text&quot; id=&quot;campoNombre&quot;&gt;
	&lt;input type=&quot;button&quot; id=&quot;btn&quot; value=&quot;Enviar formulario&quot;&gt;
	&lt;input type=&quot;text&quot; id=&quot;campoNombre2&quot;&gt;
&lt;/form&gt;

&lt;script&gt;
	const saludar = _ =&gt;{
		document.querySelector('#campoNombre2').value = document.querySelector('#campoNombre').value;
	}

	document.querySelector('#btn').addEventListener('click', saludar);
&lt;/script&gt;</code></pre>

					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 329665942) ?>
					<?= getRes('ejemplo', 'ex/recuperar-un-valor-name-4/index.html', 'Ver ejemplo resuelto', 4) ?></div>
					</div>
				</div>
				
				
				<h3 id="mecanicaResolucion">Mecánica de resolución ejercicios</h3>
				<div class="row">
					<div class="col-md-10">
					<ol>
					<li>
						Escribe el código HTML.
					</li>
					<li>Al pulsar sobre el botón debes llamar a una función que muestre un log: console.log("llega").</li>
					<li>Ahora el <span class="i">console.log</span> mostrará el value de los datos de entrada en lugar del texto "llega".</li>
					<li>Procesa la información.</li>
					<li>Muestra el resultado.</li>
				</ol>
					</div>
					<div class="col-md-2"><?= getRes("video_premium", 329665923) ?></div>
				</div>
				
				
				<h3 id="ejercicios_DOM"><span class="text-dark">Ejercicios:</span> DOM</h3>
				<ol>
					<li>

						<div class="row">
							<div class="col-md-8">
							<p>Hacer un formulario que convierte de euros a dólares. Supondremos que un euro son dos dólares</p>
							</div>
							<div class="col-md-4">
							<div class="centraditos">
							<?= getRes("video_premium", 329665908) ?>
							<?= getRes('ejemplo', 'ex/ejercicios-dom/ejercicio-1/index.html', 'Ejercicio 1', 4) ?></div>
							</div>
						</div>
						
						
					</li>
					<li>
						<div class="row">
							<div class="col-md-8">
							<p>Hacer un formulario que convierta de grados centígrados a grados Fahrenheit. Para ello deberé multiplicar por 9/5 y sumar 32.</p>
							<p>Es posible ampliar este ejercicio añadiendo un segundo botón, de tal forma que cuando lo pulsemos, recojamos los grados Fahrenheit introducidos, calculemos los correspondientes grados centígrados y los pintemos en la caja de texto correspondiente.</p>
							</div>
							<div class="col-md-4">
							<div class="centraditos">
							<?= getRes("video_premium", 329665887) ?>
							<?= getRes('ejemplo', 'ex/ejercicios-dom/grados.html', 'Ver ejercicio resuelto', 4) ?></div>
							</div>
						</div>
						
						
						
					</li>
					<li>

					<div class="row">
						<div class="col-md-8">
						<p>Hacer un formulario para solicitar el envío de una caja de cartón. En el formulario podremos especificar las características de la caja.</p>
						</div>
						<div class="col-md-4"><div class="centraditos">
							<?= getRes("video_premium", 329665864) ?>
							<?= getRes('ejemplo', 'ex/ejercicios-dom/caja.html', 'Formulario caja', 4) ?></div></div>
					</div>
						
						
						<p>Para acceder al valor marcado de un conjunto de radio buttons:</p>
						<pre><code>&lt;input type=&quot;radio&quot; name=&quot;boton&quot; class=&quot;botoncito&quot; value=&quot;amor1&quot;&gt;
&lt;input type=&quot;radio&quot; name=&quot;boton&quot; class=&quot;botoncito&quot; value=&quot;amor2&quot;&gt;
&lt;input type=&quot;radio&quot; name=&quot;boton&quot; class=&quot;botoncito&quot; value=&quot;amor3&quot;&gt;
&lt;input type=&quot;button&quot; id=&quot;btn&quot;&gt;

&lt;script&gt;
	const calcula = _ =&gt;{
		//const valor = document.querySelector('.botoncito:checked').value;
		const valor = document.querySelector('[name=boton]:checked').value;
		console.log(valor)
	}

	document.querySelector('#btn').addEventListener('click', calcula);
&lt;/script&gt;</code></pre>
					</li>
					<li>
						<div class="row">
							<div class="col-md-10">
							<p>A través de un formulario, el usuario debe introducir un número secreto que estará entre 0 y 5. <br>
						El usuario tendrá tres intentos para acertar el número, si no lo logra, habrá perdido el juego. <br>
						Debemos indicar en un cuadro de texto si el usuario gana, falla el número o pierde.</p>
							</div>
							<div class="col-md-2"><?= getRes('ejemplo', 'ex/numero-secreto/index.html', 'Ver ejemplo', 4) ?></div>
						</div>
						
						
					</li>
				</ol>
				<h3 id="ejercicios_DOM_funciones"><span class="text-dark">Ejercicios:</span> DOM con funciones</h3>
				<ol>
					<li id="calculadora">
						<div class="row">
							<div class="col-md-6">
							<p>Realizar la calculadora utilizando funciones para las operaciones aritméticas.</p>
							</div>
							<div class="col-md-6">
							<?= getRes('ejemplo', 'ex/ejercicios-dom/con-funciones/calculadora.html', 'Ejercicio calculadora con funciones', 4) ?>
							</div>
						</div>
						
						
					</li>
					<li>

					
						<p> Ejercicio coste viaje
						<p>Realizaremos el siguiente ejercicio en grupos de tres personas. La propuesta para la distribución de tareas será la siguiente (puede variar según grupo):</p>
						<ul>
							<li>alumno 1 - Función <strong>calcular_coste()</strong> y función <strong>coste_hotel()</strong></li>
							<li>alumno 2 - Función <strong>coste_avion()</strong>.</li>
							<li>alumno 3 - Función <strong>coste_alquiler_coche()</strong>.</li>
						</ul>
						<p>Podeis compartir el código que hagais entre vosotros usando <a href="https://codeshare.io/" target="_blank">https://codeshare.io/</a></p>
						<div style="display: flex;padding: 10px">
							<div style="border: 1px solid black;">
								<h5 style="margin-top:10px; text-align: center;">calcular_coste()</h5>
								<ul>
									<li>Es la única que se conecta con el HTMl. Para recuperar datos y pintar los resultados.</li>
									<li>No tiene return.</li>
									<li>La activamos al hacer click.</li>
								</ul>
							</div>
							<div style="border: 1px solid black;">
								<h5 style="margin-top:10px; text-align: center;">coste_hotel(), coste_avion(), coste_alquiler()</h5>
								<ul>
									<li>No tienen contacto con el HTML.</li>
									<li>Tienen parámetros de entrada.</li>
									<li>Tienen return.</li>
								</ul>
							</div>
						</div>
						<p class="black">Ejercicio - coste hotel <i class="fa fa-hand-peace-o" aria-hidden="true"></i></p>
						<p>Además de la función calcular_coste() que te paso más bajo, crea una función llamada <strong>coste_hotel()</strong> que recibe como parámetro el número de noches. La función debe devolver cuanto es necesario pagar teniendo en cuenta que cada noche cuesta 140 euros.</p>
					
					<div class="row">
						<div class="col-md-10">
						<pre><code>calcular_coste = _ =>{
	const num_noches = document.querySelector("#num_noches").value;

	const resultado1 = coste_hotel(num_noches);

	document.querySelector("#result").value = resultado1;
}</code></pre>
						</div>
						<div class="col-md-2">
						<?= getRes('ejemplo', 'ex/ejercicios-dom/coste-viaje/coste-hotel.html', 'Coste hotel', 1) ?>
						</div>
					</div>
						
						
						<p class="bold">Ejercicio – Coste avión <i class="fa fa-hand-peace-o" aria-hidden="true"></i></p>
						<p>La función <strong>coste_avion()</strong> tiene como parámetro de entrada el nombre de una ciudad y el número de noches. El coste corresponderá al indicado en la siguiente tabla, pero para una estancia de más de tres noches la agencia de viaje nos hará un descuento del 10%.</p>

						<div class="row">
							<div class="col-md-10">
							<p>Los costes por ciudad son los siguientes: <br>
							"Oviedo": 15 <br>
							"Tokyo": 700 <br>
							"Madrid": 90 <br>
							"Barcelona": 90</p>
							</div>
							<div class="col-md-2">
							<?= getRes('ejemplo', 'ex/ejercicios-dom/coste-viaje/coste-avion.html', 'Coste avión', 1) ?>
							</div>
						</div>
						
						
						<p class="bold">Ejercicio – Coste alquiler coche <i class="fa fa-hand-peace-o" aria-hidden="true"></i></p>
						<p>La función <strong>coste_alquiler_coche()</strong> tiene como parámetro de entrada el número de noches y devolverá un coste en función de dicho parámetro, teniendo los siguientes aspectos en cuenta:</p>
						
						<div class="row">
							<div class="col-md-10">
							<ul>
							<li>Cada día de alquiler cuesta 40 €.</li>
							<li>Si alquilas un coche por 3 días o más, obtienes un descuento de 20€ sobre el total.</li>
							<li>Si alquilas un coche por 7 días o más, obtienes un descuento de 50€ sobre el total (no acumulable con los 20€ de haber alquilado por más de 3 días).</li>
						</ul>
							</div>
							<div class="col-md-2">
							<?= getRes('ejemplo', 'ex/ejercicios-dom/coste-viaje/coste-alquiler-coche.html', 'Coste alquiler coche', 1) ?>
							</div>
						</div>
						
						
					</li>
				</ol>
			</div>
		</article>
		<article>
			<div>
				<h2 id="parallax">Efecto parallax</h2>
				<div class="row">
					<div class="col-md-10">
					<pre><code><span class="blue">&lt;style type=&quot;text/css&quot;&gt;
body{margin:0; background: url(pera.png) fixed;}
.pinas_and_oranges{ position: fixed; width: 100%; height: 1800px; }
.contentLayer{ position: absolute; width: 100%; height: 500px; }
#pinas{ background: url(pina.png) 100px 200px; }
#oranges{ background: url(orange.png) 50px 200px; }
#whiteLayer{top:500px; background: white }
#greenLayer{ top:2500px; background: green}
&lt;/style&gt;</span>
<span class="pink">&lt;script type=&quot;text/javascript&quot;&gt;
function parallax(){
	pinas.style.top = -(window.pageYOffset/5)+&quot;px&quot;;
	oranges.style.top = -(window.pageYOffset/2)+&quot;px&quot;;
}
function start(){
	pinas = document.querySelector(&quot;#pinas&quot;);
	oranges = document.querySelector(&quot;#oranges&quot;);
}
window.addEventListener(&quot;scroll&quot;, parallax);
window.addEventListener(&quot;load&quot;, start);
&lt;/script&gt;</span>
&lt;div id=&quot;pinas&quot; class=&quot;pinas_and_oranges&quot;&gt;&lt;/div&gt;
&lt;div id=&quot;oranges&quot; class=&quot;pinas_and_oranges&quot;&gt;&lt;/div&gt;
&lt;div id=&quot;whiteLayer&quot; class=&quot;contentLayer&quot;&gt;&lt;/div&gt;
&lt;div id=&quot;greenLayer&quot; class=&quot;contentLayer&quot;&gt;&lt;/div&gt;</code></pre>
					</div>
					<div class="col-md-2">
					<div class="centraditos">
					<?= getRes("video_premium", 329665828) ?>
					<?= getRes('ejemplo', 'ex/parallax/index.html', 'Ver ejemplo', 3) ?></div>
					</div>
				</div>
				
				
				<div id="break_repaso" style="background: #FFDDDD; border-radius: 30px; padding: 30px">
					<h3>Break! Gran día de repaso</h3>
					<p>Repasaremos los últimos ejercicios:</p>
					<ol>
						<li><a href="#juego_num_secreto_aleatorio">El juego del número secreto y aleatorio. Cuando terminemos la partida, nos debe preguntar si queremos volver a jugar.</a></li>
						<li><a href="#calculo_factorial">Calcular el factorial de un número.</a></li>
						<li><a href="#gradoscentigrados">Calcular grados centígrados.</a></li>
						<li><a href="#ejercicioCaja">Ejercicio del formulario para mandar cajas.</a></li>
					</ol>
				</div>
			</div>
		</article>
		<article>
			<div>
				<h2 id="innerhtml">innerHTML</h2>

				<div class="row">
					<div class="col-md-8">
					<pre><code>&lt;div id=&quot;pp&quot; style=&quot;background-color:yellow; width:200px; height:200px&quot;&gt;
	&lt;input type=&quot;button&quot; /&gt;
&lt;/div&gt;

&lt;script&gt;
	const anadeHTML = _ =>{
		document.querySelector(&quot;#pp&quot;).innerHTML=&quot;&lt;h1&gt;Casa&lt;/h1&gt;&quot;;
	}
	document.querySelector('#pp').addEventListener('click', anadeHTML)
&lt;/script&gt;</code></pre>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 331747242) ?>
					<?= getRes('ejemplo', 'ex/innerhtml/index.html', 'innerHTML', 4) ?></div>
					</div>
				</div>
				
				
				<h3><span class="text-dark">Ejercicios:</span> innerHTML</h3>
				<ol>
					<li>
						<div class="row">
							<div class="col-md-8">
							<p class="font-weight-bold">Ejercicio: <span class="text-primary">mouseover</span></p>
						<p>Dadas dos capas, al hacer "mouseover" sobre la capa de arriba, que aparezca en la capa de abajo el texto "Has hecho mouse over sobre la capa 1"</p>
							</div>
							<div class="col-md-4">
							<div class="centraditos">
							<?= getRes("video_premium", 331747225) ?>
							<?= getRes('ejemplo', 'ex/ejercicio-innerhtml/index.html', 'Ejercicio innerHTML', 4) ?></div>
							</div>
						</div>
						
						
					</li>
					<li>
						<p class="font-weight-bold">Ejercicio: <span class="text-primary">mapa <i class="fa fa-hand-peace-o" aria-hidden="true"></i></span</p>
						<p>Teniendo en cuenta que con el siguiente código html puedo pintar una moneda sobre en mapa en cierta posición:</p>
						<pre><code>&lt;div style=&quot;width:725px; height:483px; background: url(Bluemap.jpg); margin:auto; overflow:hidden; position:relative&quot;&gt;
	&lt;img src=&quot;goldCoin.png&quot; style=&quot;width:50px;position:absolute; margin-left:577px; margin-top:75px&quot;&gt;
&lt;/div&gt;</code></pre>
						<p>Pintar 10 monedas en coordenadas aleatorias sobre la superficie de un mapa.</p>
						<p>Para ello, tendremos un bucle que en cada iteración irá acumulando el código fuente de imágenes con posiciones aleatorias. Finalmente pintaremos el código fuente generado dentro de un div usando el método innerHTML</p>
						<input type="button" onclick="verPista(1)" value="Ver pista">
						<pre id="pista1" class="pista"><code>&lt;style&gt;
#capa{
	background: pink;
	width:600px;
	height: 400px;
	position: relative;
}
&lt;/style&gt;

&lt;div id=&quot;capa&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	let texto = &quot;&quot;;
	
	for(var i=0; i&lt;100; i++){
		let y = Math.random()*400;
		let x = Math.random()*600;
		texto = texto + '&lt;p style=&quot;position:absolute; top: '+y+'px; left: '+x+'&quot;&gt;Monteser&iacute;n Forever&lt;/p&gt;'
	}

	document.querySelector(&quot;#capa&quot;).innerHTML = texto

&lt;/script&gt;</code></pre>
						<div class="row">
							<?= getRes("recurso", "zip/img.zip", "Descargar recursos") ?>
							<?= getRes("video_premium", 331747204) ?>
							<?= getRes('ejemplo', 'ex/mapa/index.html', 'Mapa', 4) ?>
						</div>
					</li>
				</ol>
			</div>
		</article>
		<article>
			<div>
				<h2 id="propiedad-style">Propiedad style</h2>
				<div class="row">
					<div class="col-md-10">
					<pre><span class="bold">Cambio del estilo de un elemento:</span><code>	
obj.style.color = '#ff0000';</code></pre>
					</div>
					<div class="col-md-2"><?= getRes("video_premium", 331747190) ?></div>
				</div>
				
				
				<h3><span class="text-dark">Ejercicios:</span> style</h3>
				<ol>
					<li>
					<p class="font-weight-bold">Ejercicio: <span class="text-primary">cuestionario</span></p>
					<div class="row">
						
						<div class="col-md-8">
						
						<p>Nota: un elemento "span" es una capa (div) alineada con el texto.</p>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 331747165) ?>
							<?= getRes('ejemplo', 'ex/cuestionario/index.html', 'Ver ejemplo', 4) ?></div>
						</div>
					</div>
					
					
					</li>
					<li>
					<p class="font-weight-bold">Ejercicio: <span class="text-primary">cambiar color body</span></p>
					<div class="row">
					
						<div class="col-md-8">
						<p>Cuando seleccionemos un valor en el combo desplegable, el color del body debe cambiar.</p>
						</div>
						<div class="col-md-4">
						<div class="row">
							<?= getRes("video_premium", 331747136) ?>
							<?= getRes('ejemplo', 'ex/ejercicios-dom/cambiar-color-body/index.html', 'Ejercicio cambiar body', 4) ?></div>
						</div>
					</div>
						
						
					</li>
					<li>
					<p class="font-weight-bold">Ejercicio <span class="text-primary"> Lightbox</span></p>
					<div class="row">
						<div class="col-md-8">
						
						<p>Usaremos los siguientes estilos:
						</p>
						<pre><code>
#black_overlay{
	display: none;
	position: fixed;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background-color:rgba(0,0,0,0.7);
}
<span class="green">/*La capa lightbox estará dentro de la capa black_overlay*/</span>
#lightbox{
	margin: 100px auto 0 auto;
	width: 50%;
	height: 50%;
	padding: 16px;
	border: 16px solid orange;
	background-color: white;
	overflow: auto;
}

Usaremos:
document.querySelector('#black_overlay').style.display=&quot;block&quot;
</code></pre>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 331747117) ?>
							<?= getRes('ejemplo', 'ex/lightbox/index.html', 'lightbox', 3) ?></div>
						</div>
					</div>
						
						
					</li>
					<p>Detectar cuando pulsamos fuera</p>
					<pre><code>window.addEventListener('click', function(e){ 
	const lightbox = document.querySelector('#lightbox'); 
	const black_overlay = document.querySelector('#black_overlay');
	if (!lightbox.contains(e.target)){
		hide();
	}
});</code></pre>
					<p>Será necesario detener la propagación del evento o la capa se ocultará después de hacerse visible:</p>
					<pre><code>const show = e => {
	e.stopPropagation();
	document.querySelector('#black_overlay').style.display = 'block'
}</code></pre>
					<div class="centraditos">
						<?= getRes("video_premium", 331747100) ?>
						<?= getRes('ejemplo', 'ex/lightbox-pulsando-fuera/index.html', 'Ver ejercicio', 3) ?></div>
					<li>
						<p class="font-weight-bold">Ejercicio: <span class="text-primary">Slider</span></p>
						<div class="centraditos">
							<?= getRes("recurso", "zip/tuxes.zip", "Descargar recursos") ?>
							<?= getRes("video_premium", 331747083) ?>
							<?= getRes('ejemplo', 'ex/slider/un-solo-boton/index.html', 'Ver ejemplo', 3) ?>
						</div>
					</li>
				</ol>
			</div>
		</article>
		<article>
			<div>
				<h2 id="atributo">Cambiar atributo src</h2>
				
				<div class="row">
					<div class="col-md-8">
					<pre><code>&lt;script&gt;
	const cambiarImagen = _ =>{
		document.querySelector('#imagen').src=&quot;pablomonteserinHOVER.gif&quot;;
	}
	document.querySelector('#imagen').addEventListener('click', cambiarImagen);
&lt;/script&gt;

&lt;img src=&quot;pablomonteserin.gif&quot;  id=&quot;imagen&quot; width=&quot;500px&quot; &gt;</code></pre>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 331747064) ?>
					<?= getRes('ejemplo', 'ex/cambiar-src/index.html', 'Cambiar src a imagen', 4) ?></div>
					</div>
				</div>
				
				
				
				<h3>Cambiar la imágen indefinidamente</h3>
				<p>Tendremos dos posibles aproximaciones diferentes:</p>

				<div class="row">
					<div class="col-md-6">
					<pre><code>i++
if(i%2!=0)obj.src = '...';
else obj.src = '...';</code></pre>
					</div>
					<div class="col-md-6">

					<pre><code>foto1= !foto1;
if(!foto1)obj.src = '...';
else obj.src = '...';</code></pre>
					</div>
				</div>
				
				
				<div class="centraditos">
					<?= getRes('recurso', 'zip/cambia-imagenes-indefinidamente.zip', 'Descargar recurso') ?>
					<?= getRes("video_premium", 331747042) ?>
					<?= getRes('ejemplo', 'ex/cambiar-src-indefinidamente/index.html', 'Ver ejemplo', 4) ?></div>
				<h3>Ejemplo drag and drop</h3>
				<div class="centraditos">
					<?= getRes('ejemplo', 'ex/drag-and-drop/index.html', 'Ver ejemplo drag and drop', 3) ?>
					<?= getRes("video_premium", 331747022) ?>
				</div>
			</div>
		</article>
		<article>
			<div>
				<h2 id="clase">Añadir clase, borrar clase, alternar clase, evaluar si tiene una clase</h2>

				<div class="row">
					<div class="col-md-6">
					<pre><span class="bold">Añadir clase</span><code>obj.classList.add('nombreClase');</code></pre>
					</div>
					<div class="col-md-6">
					<pre><span class="bold">Eliminar clase</span><code>obj.classList.remove('nombreClase');</code></pre>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
					<pre><span class="bold">Cambiar clase</span><code>obj.classList.toggle('nombreClase');</code></pre>
					</div>
					<div class="col-md-6"><pre><span class="bold">Evaluar si tiene una clase</span><code>if (obj.classList.contains('thatClass')) {
    // do some stuff
}</code></pre></div>
				</div>
				
				
				
				<?= getRes("video_premium", 331746995) ?>
				<h3>Ejercicio - animate.css</h3>
				<p>Usando addClass, hacer que al pulsar un botón este coja los estilos necesarios y suministrados por la librería <a target="_blank" href="https://daneden.github.io/animate.css/">animate.css</a> para que se produzca la animación correspondiente</p>
				<p>Para que funcione, habrá que añadir el class <span class="black bold">animated</span> y el class correspondiente a la animación que queremos emplear y que podemos consultar en <a target="_blank" href="https://daneden.github.io/animate.css/">animate.css</a>.</p>

				<div class="row">
					<div class="col-md-6">
					<p>Si queremos que pasado un tiempo se elimine el class, usaremos la función timeOut</p>
				<pre><code>const eliminaClases = _ => {
	const obj = document.querySelector(&quot;#rojo&quot;);
	obj.classList.remove('animated','bounce'); 
}
setTimeout(eliminaClases, 2000);</code></pre>

					</div>
					<div class="col-md-6">
					<p>Si queremos que el class se elimine cuando la animación ha concluído, usaremos:</p>
				<pre><code>obj.addEventListener('animationend', () => {
	obj.classList.remove('animated','bounce');
});</code></pre>

					</div>
				</div>
				
				
				<div class="centraditos">
					<?= getRes("video_premium", 331746977) ?>
					<?= getRes('ejemplo', 'ex/animate-css/index.html', 'Ver ejemplo', 4) ?></div>
				<h3>Ejercicio menú hamburguer</h3>
				<div class="centraditos">
					<?= getRes("video_premium", 331746955) ?>
					<?= getRes('ejemplo', 'ex/menu-hamburguer/index.html', 'Ver ejercicio', 3) ?></div>
				<h3>Ejercicio menú hamburguer pulsando en fondo</h3>
				<div class="centraditos">
					<?= getRes("video_premium", 331746938) ?>
					<?= getRes('ejemplo', 'ex/menu-hamburguer-pulsando-fuera/index.html', 'Ver ejercicio', 3) ?></div>
				<h3>Ejercicio precarga</h3>

				<p>Mostrar un icono durante la precarga de la página.</p>
				<p>Utilizaremos el siguiente class para hacer la capa <span class="i">container</span> invisible durante el periodo de precarga:</p>
				
				<div class="row">
					<div class="col-md-4">
					<pre><code>.container.invisible{
	opacity: 0;
	height: 0;
	overflow: hidden;
}</code></pre>
					</div>
					<div class="col-md-8">
					<div class="centraditos">
					<?= getRes('recurso', '/curso/javascript-es6/zip/precarga-js.zip', 'Descargar recurso') ?>
					<?= getRes("video_premium", 331746916) ?>
					<?= getRes('recurso', 'ex/precarga/img.jpg', 'Enlace a la imagen del contenido') ?>
					<?= getRes('ejemplo', 'ex/precarga/index.html', 'Ver ejercicio', 3) ?>
				</div>
					</div>
				</div>
				
				
			</div>
		</article>
		<article>
			<div>
				<h2 id="create-element">Create element</h2>

				<div class="row">
					<div class="col-md-10">

					<pre><code>const div_rojo = document.createElement('div');
div_rojo.setAttribute('id', 'div_rojo_id');
div_rojo.setAttribute('style', 'background:red; width:300px; height:300px');
div_rojo.classList.add('amor');
div_rojo.innerHTML = 'Contenido';
document.querySelector('#div_rojo_wrapper').appendChild(div_rojo);</code></pre>
					</div>
					<div class="col-md-2">
					<?= getRes("video_premium", 331746897) ?>
					</div>
				</div>
				
				
				<h3>Ejercicio createElement</h3>
				<p>A partir de la siguiente página, añadir el código javascript necesario para que inicialmente se reproduzca el video con sonido y la palabra '<span class="i">mute</span>'. Al pulsar sobre el slider, este debe ponerse en silencio y la palabra debe cambiar a '<span class="i">unmute</span>'.</p>
				<p>Pasos a seguir:</p>
				<ol>
					<li>Añadimos el texto 'mute' al slider.</li>
					<li>Quitamos y ponemos sonido al pulsar sobre el slider.</li>
					<li>Cuando pulsemos sobre el slider, su texto debe cambiar entre mute/unmute.</li>
				</ol>
				<p>Para activar/silenciar un video:</p>

<div class="row">
	<div class="col-md-4">
	<pre><code>const video=document.querySelector('#mi_video');

if(video.muted){
	video.muted = false;
} else {
    video.muted = true;
}</code></pre>
	</div>
	<div class="col-md-8">
	<div class="centraditos">
					<?= getRes('ejemplo', 'ex/create-element/propuesto/index.html', 'Ver ejercicio propuesto', 1) ?>
					<?= getRes('recurso', 'ex/create-element/propuesto.zip', 'Descargar recurso') ?>
					<?= getRes("video_premium", 331746870) ?>
					<?= getRes('ejemplo', 'ex/create-element/resuelto/index.html', 'Ver ejercicio resuelto', 4) ?>
				</div>
	</div>
</div>

				
				
			</div>
		</article>
		<article>
			<div>
				<h2 id="arrays">Arrays</h2>
				<?= getRes("video_premium", 220406155) ?>
				<h3>Declaración</h3>
				
				<div class="row">
					<div class="col-md-8">
					<pre><code>&lt;script&gt;
const days = [&quot;domingo&quot;, &quot;lunes&quot;, &quot;martes&quot;, &quot;miercoles&quot;, &quot;jueves&quot;, &quot;viernes&quot;, &quot;sabado&quot;];
const dayNumber = new Date().getDay();
console.log(&quot;Hoy es &quot; + days[dayNumber]);
&lt;/script&gt;</code></pre>
					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 331746859) ?>
					<?= getRes('ejemplo', 'ex/arrays/declaracion/index.html', 'Arrays', 4) ?></div>
					</div>
				</div>
				
				
				
				<h3>Añadir y quitar elementos de un array</h3>

				<div class="row">
					<div class="col-md-8">
					<pre><code>var datos = ['pera', 'manzana', 'naranja'];
console.log(datos);
datos.<span class="font-weight-bold">push('fresa')</span>; <span class="font-weight-bold">//Añade elemento al final</span>
console.log(datos);
datos.<span class="font-weight-bold">pop()</span>; <span class="fontweight-bold">//Elimina el último elemento</span>
console.log(datos)
datos.<span class="font-weight-bold">splice(1,2)</span> <span class="font-weight-bold">//Elimina un rango de elementos</span>
console.log(datos);	</code></pre>

					</div>
					<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium", 331746842) ?>
					<?= getRes('ejemplo', 'ex/arrays/poner-quitar/index.html', 'Ver ejemplo', 4) ?></div>
					</div>
				</div>
				
				
				<h4>En javascript no existen los arrays asociativos</h4>

				<div class="row">
					<div class="col-md-10">
					<pre><code>let arrayAsociativo = [];
arrayAsociativo[&quot;one&quot;] = &quot;uno&quot;;
arrayAsociativo[&quot;two&quot;] = &quot;dos&quot;;
arrayAsociativo[&quot;three&quot;] = &quot;tres&quot;;

console.log(arrayAsociativo[&quot;two&quot;]);
console.log(arrayAsociativo.length);</code></pre>

					</div>
					<div class="col-md-2">
					<?= getRes('ejemplo', 'ex/arrays/arrays-asociativos/index.html', 'Los arrays asociativos no existen en Javascript') ?>
					</div>
				</div>
				

				<div class="row">
					<div class="col-md-10">

					<p>Si cambiamos la palabra "Array" por el nombre utilizado para designar a cualquier otro objeto, el código continúa funcionando. Esto es así porque realmente estamos definiendo las propiedades de un objeto. (En javascript foo["bar"] es lo mismo que foo.bar).</p>
					</div>
					<div class="col-md-2">
					<?= getRes("video_premium", 331746828) ?>
					</div>
				</div>
				
				
				
				<h3>Recorrer los elementos del array</h3>
				<h4>Con forEach</h4>

<div class="row">
	<div class="col-md-8">
	<pre><code>const days = ["domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado"];

days.forEach(value => {
	console.log("Hoy es " + value);	
})</code></pre>
	</div>
	<div class="col-md-4">
	<div class="centraditos">
					<?= getRes("video_premium", 331746816) ?>
					<?= getRes('ejemplo', 'ex/arrays/recorrer-elementos-array-ecma-script-6/index.html', 'Recorrer elementos de un array - ECMAScript6', 3) ?></div>
	</div>
</div>

				
<div class="row">
	<div class="col-md-8">
	<pre><code>const days = ["domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado"];

days.forEach( (value, key) => {
	console.log(key + ": Hoy es " + value);	
})</code></pre>
	</div>
	<div class="col-md-4">
	<div class="centraditos">
					<?= getRes("video_premium", 331746796) ?>
					<?= getRes('ejemplo', 'ex/arrays/recorrer-elementos-array-ecma-script-6-con-indice/index.html', 'Recorrer elementos de un array - ECMAScript6 usando key', 3) ?></div>
	</div>
</div>
				
				
				
				<h4>Con map</h4>

				<div class="row">
					<div class="col-md-10">
					<pre><code>const days = [1, 2, 3];

const nuevoArray = days.map(value => value * 2);

console.log(nuevoArray);</code></pre>
					</div>
					<div class="col-md-2">
					<?= getRes('ejemplo', 'ex/arrays/map/index.html', 'Recorrer elementos de un array - ECMAScript6 usando map', 3) ?>
					</div>
				</div>
				
				


				<h4>Recorrer elementos de HTML con map</h4>
				<div class="row">
					<div class="col-md-6">
					<p>Con el método <span class="bold">map</span> podremos recorrer arrays. Sin embargo, las etiquetas HTML de una página web no son un array, sino un <span class="bold">nodelist</span>, por lo que habrá que hacer la siguiente conversión:</p>

					</div>
					<div class="col-md-6">
					<pre><code>const elements = document.querySelectorAll('div');

Array.from(elements).map(obj => {
    console.log(obj.innerHTML)
});</code></pre>
					</div>
				</div>
				
				

				<h3><span class="text-dark">Ejercicios:</span> Arrays</h3>
				<ol>
					<li>
					<div class="row">
						<div class="col-md-8">
						<p>Crea un array con cinco nombres de persona y recórrelo mostrando el texto "Conozco a alguien llamado ".</p>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 331746788) ?>
							<?= getRes('ejemplo', 'ex/arrays/ejercicios-array/conozco-a-alguien-llamado/index.html', 'Ejercicio array', 4) ?></div>
						</div>
					</div>	
					
						
					</li>
					<li>

					<div class="row">
						<div class="col-md-8">
						<p>Recorrer la siguiente lista con un bucle imprimiendo el doble de cada número:</p>
						<pre><code>my_list = [1,9,3,8,5,7]</code></pre>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 331746777) ?>
							<?= getRes('ejemplo', 'ex/arrays/ejercicios-array/doble/index.html', 'Ejercicio array 2', 4) ?></div>
						</div>
					</div>
						
						
					</li>
					<li>
					<div class="row">
						<div class="col-md-8">
						<p>Contar el número de elementos positivos, negativos y que valgan cero en un array de 10 enteros. Los valores habrán sido harcodeados en un array.</p>

						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 331746766) ?>
							<?= getRes('ejemplo', 'ex/arrays/ejercicios-array/contar-numeros/index.html', 'Ejercicio array 3', 4) ?></div>
						</div>
					</div>	
					
						
					</li>
					<li>
						<div class="row">
							<div class="col-md-8">
							<p>Leer 10 enteros harcodeados en un array y mostrar la media de los valores negativos y la de los positivos.</p>
							</div>
							<div class="col-md-4">
							<div class="centraditos">
							<?= getRes("video_premium", 331746756) ?>
							<?= getRes('ejemplo', 'ex/arrays/ejercicios-array/media/index.html', 'Ejercicio array 4', 4) ?></div>
							</div>
						</div>
					
						
					</li>
				</ol>
				<h4>Recorrer el DOM con forEach</h4>

				<div class="row">
					<div class="col-md-10">
					<pre><code>document.querySelectorAll('.resaltado').forEach((obj, i) => {
	obj.style.backgroundColor = 'red';
});</code></pre>
					</div>
					<div class="col-md-2">
					<?= getRes("video_premium", 331746492) ?>
					</div>
				</div>
				
				
				<h5>Ejercicios: <span class="text-primary">forEach con DOM</span></h5>
				<ol>
					<li>

					<div class="row">
						<div class="col-md-6">
						<p>Marcar todas las respuestas correctas con el mismo class y mostrarlas en color rojo cuando pulsemos el botón de ver soluciones</p>

						</div>
						<div class="col-md-6">
						<div class="centraditos">
							<?= getRes('recurso', 'zip/tuxes.zip', 'Descargar recurso') ?>
							<?= getRes("video_premium", 331746743) ?>
							<?= getRes('ejemplo', 'ex/cuestionario-con-array/index.html', 'Ver ejercicio', 3) ?>
						</div>
						</div>
					</div>
						
						
					</li>
					<li>

					<div class="row">
						<div class="col-md-6">
						<p>Entender el método closest</p>
						<pre><code>&lt;div&gt;
	&lt;button&gt;Pulsar&lt;/button&gt;
&lt;/div&gt;</code></pre>
						<pre><code>obj.closest('div').style.background = 'red';</code></pre>
						</div>
						<div class="col-md-6">
						<div class="centraditos"><?= getRes('ejemplo', 'ex/closest/index.html', 'Ver ejemplo con un botón') ?>
								<?= getRes("video_premium", 331746720) ?>
								<?= getRes('ejemplo', 'ex/closest-array/index.html', 'Ver ejemplo con muchos botones', 3) ?></div>
						</div>
					</div>
						
					</li>
					<li>
						<h6>Ejercicio: <span class="text-primary">cuestionario</span></h6>
						<div class="centraditos">
							<?= getRes("video_premium", 331746698) ?>
							<?= getRes('ejemplo', 'ex/cuestionario-bucle/index.html', 'Ver ejemplo', 3) ?></div>
					</li>
					<li>
						<h6>Ejercicio: <span class="text-primary">presupuesto</span></h6>
						<div class="centraditos">
							<?= getRes("video_premium", 331746677) ?>
							<?= getRes('ejemplo', 'ex/arrays/presupuesto/index.html', 'Ver ejemplo', 4) ?></div>
					</li>
					<li>
						<h6>Ejercicio: <span class="text-primary">carta de presentación</span></h6>
						<div class="centraditos">
							<?= getRes("video_premium", 331746650) ?>
							<?= getRes('ejemplo', 'ex/arrays/carta-presentacion/index.html', 'Ver ejemplo', 3) ?></div>
						<p>A continuación te facilito los textos que puedes usar. No hace falta que los uses todos; con tres de cada categoría, sirve</p>
						<p class="font-weight-bold">Motivo</p>
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
						<p class="font-weight-bold">Medallas</p>
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
						<p>Objetivo:</p>
						<ul>
							<li>Agradecería la oportunidad de poder presentarme ante ustedes para contestar cualquier pregunta y ampliar lo resumido en mi historial.</li>
							<li>Les agradecería me dejasen formar parte del proceso de selección. </li>
							<li>Por todo ello espero que tenga en cuenta mi candidatura ante cualquier necesidad futura se ponga en contacto conmigo. </li>
							<li>Desearía formar parte del proceso de selección, y quedo a su disposición para mantener una entrevista personal si lo estiman oportuno. </li>
							<li>Espero se pongan en contacto conmigo para poderles ampliar mi datos en una entrevista personal. </li>
							<li>Por todo ello, creo reunir los requisitos que mencionan para el futuro ocupante del puesto, deseando poder formar parte del proceso de selección. </li>
							<li>Esperando comentar con usted en una próxima entrevista mi historial profesional, aprovecho la ocasión para saludarle atentamente. </li>
						</ul>
						<p class="font-weight-bold">Despedida</p>
						<ul>
							<li>Un cordial saludo.</li>
							<li>En espera de sus noticias y sin otro particular.</li>
							<li>Aprovecho la ocasión para agradecerle el interés que ha manifestado por mi candidatura. Atentamente.</li>
							<li>Muy atentamente.</li>
							<li>Atentamente.</li>
							<li>A la espera de recibir noticias suyas, les saluda atentamente.</li>
							<li>Agradeciéndoles la atención restada , se despide atentamente.</li>
						</ul>
					</li>
					<li>
					<h6>Ejercicio: <span class="text-primary">filas</span></h6>
					<div class="row">
						<div class="col-md-8">
						
						<p>Al pulsar sobre una fila, esta se colorea y se marca el radio button correspondiente a la fila pulsada.
						</p>
						</div>
						<div class="col-md-2">

						<div class="centraditos">
							<?= getRes("video_premium", 331746628) ?>
							<?= getRes('ejemplo', 'ex/arrays/filas/index.html', 'Ver ejemplo', 3) ?></div>

						</div>
					</div>
						
						
					</li>
					<li>
						<h6>Ejercicio <span class="text-primary">slider I</span></h6>
						
						<div class="row">
							<div class="col-md-6">
							<pre><code>document.querySelector(".capa" + contador).style.transform = "scale(1)";
// El valor de contador estará entre 0 y 2</code></pre>	
							</div>
							<div class="col-md-6">
							<div class="centraditos">
							<?= getRes("recurso", "zip/tuxes.zip", "Descargar recursos") ?>
							<?= getRes("video_premium", 331771051) ?>
							<?= getRes('ejemplo', 'ex/slider/slider-previo/index.html', 'Ver ejemplo', 3) ?>
						</div>
							</div>
						</div>
						
						
						
						
					</li>
					<li>
					<h6>Ejercicio: <span class="text-primary">slider II</span></p>
					<div class="row">
						<div class="col-md-8">
						
						<p>Realizar el mismo ejercicio, pero utilizando como selector para acceder a las capas</p>
						<pre><code>document.querySelector(".capa:nth-child("+elemento+")").style.transform = "scale(1)";
// El valor de elemento estará entre 1 y 3</code></pre>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 331746587) ?>
							<?= getRes('ejemplo', 'ex/slider/slider-previo-2/index.html', 'Ver ejemplo', 3) ?></div>
						</div>
					</div>
						
						
					</li>
					<li>

					<h6>Ejercicio <span class="text-primary">slider III</span></h6>
					<div class="row">
						<div class="col-md-8">
						
						<p>Quitaremos opacidad y escalaremos a cero todas las slides del slider y luego daremos opacidad 1 y haremos grande la que corresponda.</p>
						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 331746570) ?>
							<?= getRes('ejemplo', 'ex/slider/con-efecto/index.html', 'Ver ejercicio', 3) ?></div>
							</div>
					</div>
						
						
					</li>
					<li>
					<h6>Ejercicio: <span class="text-primary">slider IV - sin definir número de elementos</span></h6>
					<div class="row">
						<div class="col-md-8">
						
						<p>Ahora el contador irá desde cero hasta el número total de elementos que hay dentro del slider. De esta forma, si dentro del slider ponemos más capas, el código debería seguir funcionando. Recuerda que puedes obtener la longitud de un array accediendo a su propiedad <span class="i">.length</span></p>
						</div>
						<div class="col-md-4"><div class="centraditos">
							<?= getRes("video_premium", 331746549) ?>
							<?= getRes('ejemplo', 'ex/slider/sin-definir-numero-de-elementos/index.html', 'Ver ejercicio', 3) ?> </div></div>
					</div>
						
						
					</li>
					<li>
					<h6>Ejercicio: <span class="text-primary">slider V - avanza automáticamente</span></h6>
					<div class="row">
						<div class="col-md-8">
						
						<pre><span class="bold">Pista:</span><code>setInterval(avanza, 1000);</code></pre>

						</div>
						<div class="col-md-4">

						<div class="centraditos">
							<?= getRes("video_premium", 331746532) ?>
							<?= getRes('ejemplo', 'ex/slider/movimiento-automatico/index.html', 'Ver ejercicio', 3) ?></div>
						</div>
					</div>
						
						
					</li>
					<li>
					<h6>Ejercicio: <span class="text-primary">slider VI- con cambio de dirección</span></h6>
					<div class="row">
						<div class="col-md-8">
						
						<pre><span class="font-weight-bold">Pista:</span><code>let contador = 0;
if(contador&gt;=n-1|| contador &lt;1){
	signo = signo*(-1);
}
contador = contador + signo;</code></pre> 

						</div>
						<div class="col-md-4">
						<div class="centraditos">
							<?= getRes("video_premium", 331746570) ?>
							<?= getRes('ejemplo', 'ex/slider/direccion-contraria/index.html', 'Ver ejercicio', 3) ?> </div>

						</div>
					</div>
						

					
					</li>
					<li>
					<h6>Ejercicio: <span class="text-primary">hacer un filtro</span></h6>
					<div class="row">
						<div class="col-md-10">
						
						<p>Al pulsar sobre un enlace, las capas de colores inferiores deben filtrarse en función del enlace pulsado. Para ello, recorreremos todas las capas, añadiendo o eliminando el class "oculta" en el caso de que el href (con #) del enlace coincida con alguno de los class de la capa</p>
						</div>
						<div class="col-md-2">
						<?= getRes('ejemplo', 'ex/filtro/index.html', 'Ver ejemplo', 3) ?>
						</div>
					</div>
						
						
					</li>
				</ol>
				<h4>Recorrer un array de objetos</h4>

				<div class="row">
					<div class="col-md-6">
					<pre><code>const data = [
	{
		"titulo": "La Aventura",
		"autor": "Paco"
	},
	{
		"titulo":"Las cosas",
		"autor": "Pac"
	}
]</code></pre>
					</div>
					<div class="col-md-6">
					<pre><code>data.forEach( obj => {
	console.log(obj.autor);
});</code></pre>
					</div>
				</div>

				
				<h4>Ejercicio recorrer un array de objetos</h4>

				<div class="row">
					<div class="col-md-6">

					<p>Hacer una lista HTML donde se muestren los nombres de los usuarios</p>
				<pre><code>const usuarios = [
	{
		"name" : "Paco",
		"isActive" : false
	},
	{
		"name" : "Laura",
		"isActive" : false
	},
	{
		"name" : "Raquel",
		"isActive" : false
	},
	{
		"name" : "Juan",
		"isActive" : true
	},
	{
		"name" : "Alberto",
		"isActive" : false
	},
	{
		"name" : "Rodolfo",
		"isActive" : true
	},
];</code></pre>
					</div>
					<div class="col-md-6">
					<?= getRes('ejemplo', 'ex/arrays/ejercicio-array-objetos/index.html', 'Ver ejemplo') ?>
					</div>
				</div>
			
			
<div class="row">
	<div class="col-md-6">
	<h4>find</h4>
				<p>Permite el elemento de un array que cumple cierta condición</p>
				<pre><code>const escenas = [
	{
		"id": 1,
		"titulo": "beso inicial"
	},
	{
		"id": 2,
		"titulo": "beso final"
	}
]

	const escena = escenas.find( obj => obj.id == 2)
	
	console.log(escena);</code></pre>

	</div>
	<div class="col-md-6">

	<h5>Ejercicio find</h5>
				<ol>
					<li>Utilizando el método <span class="i">find</span>, busca el usuario cuyo nombre es <span class="i">Juan</span> y muestra su edad.
						<pre><code>const usuarios = [
	{
		"name" : "Paco",
		"isActive" : false,
		"edad": 18
	},
	{
		"name" : "Laura",
		"isActive" : false,
		"edad": 21
	},
	{
		"name" : "Raquel",
		"isActive" : false,
		"edad": 15
	},
	{
		"name" : "Juan",
		"isActive" : true,
		"edad": 17
	},
	{
		"name" : "Alberto",
		"isActive" : false,
		"edad": 50
	},
	{
		"name" : "Rodolfo",
		"isActive" : true,
		"edad":7
	},
];</code></pre>

						<?= getRes('ejemplo', 'ex/arrays/find-ex/index.html', 'Ver ejercicio resuelto') ?>
	</div>
</div>

			
			
					</li>
				</ol>
				<h4>filter</h4>

<div class="row">
	<div class="col-md-10">
	<p>Permite obtener los elementos de un array cumplen cierta condición.</p>
				<p>El método filter recibe como parámetro de entrada una función que devuelve true si queremos añadir al array resultante el objeto que estamos evaluando, y false si no lo queremos añadir.</p>
				<p>El siguiente código evalúa cada elemento de un array de números y comprueba si son iguales al valor almacenado en n_introducido. La constante <span class="italic">result</span> es un nuevo array compuesto por los elementos que cumplen la condición.</p>
				<pre><code>const result = numeros.filter(num => num < n_introducido);</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes('ejemplo', 'ex/arrays/filter/index.html', 'Ver ejemplo') ?>
	</div>
</div>

				
				
				<h5>Ejercicios filter</h5>
				<ol>
					<li>Recorre el array anterior para obtener un nuevo array con los usuarios activos.
						<?= getRes('ejemplo', 'ex/arrays/filter-ex/index.html', 'Ver ejercicio resuelto') ?>
					</li>
					<li>Recorre el array anterior para obtener un array con los usuarios mayores de 18 años.
						<?= getRes('ejemplo', 'ex/arrays/filter-ex-2/index.html', 'Ver ejercicio resuelto') ?>
					</li>
				</ol>
				<h4>Reduce</h4>
				<p>El método <span class="i">reduce</span> permite acumular valores en una variable.</p>
				<h5>Convertir un array en una cadena</h5>
				<div class="row">
					<div class="col-md-10">
					<pre><code>const valores = [{titulo:"t1"},{titulo:"t2"},{titulo:"t3"},{titulo:"t4"}];

let val = valores.reduce(
    // En cada iteración devolvemos el valor que estamos acumulando
    (valorAcumulado, obj) => valorAcumulado + obj.titulo, 
    " valor inicial ");
    
console.log(val);</code></pre>
					</div>
					<div class="col-md-2">
					<?= getRes('ejemplo', 'ex/arrays/reduce/index.html', 'Convertir un array en cadena', 4) ?>
					</div>
				</div>
			
			
				<h5>Acumular valores en un nuevo array</h5>
				<pre><code>const valores = [{precio: 1},{precio: 2},{precio: 3},{precio: 4}];
const arrayAcumulado = [];

let val = valores.reduce(
	// En cada iteración devolvemos el array con los valores que estamos acumulando
	(arrayAcumulado, obj) => [...arrayAcumulado,obj.precio*2], 
[]);</code></pre>
				<h5>Ejercicio filter y reduce</h5>

				<div class="row">
					<div class="col-md-6">
					<p>Partimos de un objeto <span class="i">seresVivos</span> con dos propiedades: <span class="i">humanos</span> y <span class="i">tortugas</span>. También tenemos un array de objetos llamado <span class="i">seleccion</span>, donde cada objeto hace referencia a una de las propiedades del objeto <span class="i">seresVivos</span></p>
				<p>Aplicando el método <span class="i">reduce</span> sobre el objeto <span class="i">selección</span> vamos a recorrerlo para ir acumulando en un nuevo array los objetos del array <span class="i">seresVivos</span> que tengan más de 18 años, siempre y cuando tengan su propiedad <span class="i">selected</span> a <span class="i">true</span> en el objeto <span class="i">seleccion</span>.</p>

				
				<pre><span class="bold">pista</span><code>const result = seleccion.reduce((todosLosAnimales, raza) => {
	if(/*el objeto raza tiene el valor selected a true*/){
		const animal = seresVivos[raza.name].filter(/* Devolvemos los animales con más de 18 años*/);
		return [...todosLosAnimales, animal];
	}else{
		return [...todosLosAnimales];
	}
	}, []
)</code></pre>
				<?= getRes('ejemplo', 'ex/arrays/filter-reduce/index.html', 'Ver ejercicio resuelto', 4) ?>
					</div>
					<div class="col-md-6">
					<pre><code>const seresVivos = {
"humanos":[
{
	"name" : "Paco",
	"edad": 18
},
{
	"name" : "Laura",
	"edad": 21
},
{
	"name" : "Rodolfo",
	"edad":7
}
]
,
"tortugas":[
{
	"name" : "Rafael",
	"edad": 19
},
{
	"name" : "Donatello",
	"edad": 16
},
{
	"name" : "Leonardo",
	"edad": 17
}
]
};


const seleccion = [
{
	"name": "humanos",
	"selected": false
},
{
	"name": "tortugas",
	"selected": true
}
];</code></pre>
					</div>
				</div>
				
			

				<h4>Convertir un objeto en un array de arrays</h4>
				<pre><code>const arrayDeArrays = Object.entries(obj);</code></pre>
				<?= getRes('ejemplo', 'ex/entries/index.html', 'Convertir objeto en array de arrays', 4) ?>
			</div>
		</article>
		<article>
			<div>
				<h2 id="ejercicios-avanzados">Ejercicios avanzados</h2>
				<ol>
					<li>
						<h3><span class="text-dark">Ejercicio:</span> tres en raya - dos jugadores</h3>
						<p>Hacer el juego del tres en raya para dos jugadores. </p>
						<?= getRes('ejemplo', 'ex/tres-en-raya/index.html', 'Ver solución', 3) ?>
					</li>
					<li>
						<h3><span class="text-dark">Ejercicio:</span> Tres en raya -
							un solo jugador <i class="fa fa-hand-spock-o" aria-hidden="true"></i></h3>
						<p>El método juegaPlayer1() quedará así:</p>
						<pre><code>function juegaPlayer1(){
	board[getComputerMove()] = "X";
}</code></pre>
						<p>Por tanto, debemos crear un método getComputerMove() que creará una copia del tablero, moverá la ficha sobre esta copia y en función del resultado decidirá dónde mover en el tablero real. Para realizar el movimiento: </p>
						
						<div class="row">
							<div class="col-md-10">
							<ol>
							<li>Comprobamos si la máquina puede hacer un movimiento y ganar la partida. (utilizaremos el método evaluateWin, creado en el ejercicio anterior).</li>
							<li>Comprobamos si tras mover, el humano puede hacer un movimiento y ganar la partida.</li>
							<li>Comprueba si hay alguna esquina libre. Si lo está, la máquina mueve a la esquina.</li>
							<li>Comprueba si el centro está libre. Si lo está, la máquina mueve al centro.</li>
							<li>Mueve a cualquiera de las casillas restantes.</li>
						</ol>
							</div>
							<div class="col-md-2">
							<?= getRes('ejemplo', 'ex/tictactoe-1-player/index.html', 'Ver solución', 3) ?>
							</div>
						</div>
						
						
						
					</li>
					<li>
						<h3><span class="text-dark">Ejercicio:</span>Ahorcado</h3>
						<div class="row">
							<div class="col-md-6">
							<p>Realizar el juego del ahorcado.</p>
						<ul>
							<li>Al iniciar el programa, este deberá escoger una palabra al azar entre 4. Esta será la palabra secreta que el usuario deberá adivinar.</li>
							<li>Utilizando el código
								<pre><code>var palabraConGuiones = secretWord.replace(/./g, "_ ");</code></pre>
								el programa creará una nueva palabra con tantos guiones bajos como letras tenga la palabra secreta.</li>
							<li>El usuario deberá ir introduciendo letra a letra hasta adivinar la palabra secreta.</li>
							<li>Javascript trabaja las palabras como arrays de letras.</li>
							<li>Después de recoger la letra introducida por el usuario, iremos comparando con las letras que tiene la palabra secreta utilizando un bucle for. En caso de coincidencia utilizaremos la siguiente función no nativa para hacer el remplazo (debe estar definida al principio del script): <br>
								<pre><code>String.prototype.replaceAt=function(index, character) {
	return this.substr(0, index) + character + this.substr(index+character.length);
}

Uso: 	palabraConGuiones = palabraConGuiones.replaceAt(i*2, letra);</code></pre>
							</li>
							<li>Finalmente utilizaremos <span class="cold bold">if(currentWord.indexOf("_")==-1)</span> para comprobar si el usuario ganó.</li>
						</ul>
							</div>
							<div class="col-md-6">
							<img class="img-fluid" src="img/ahorcado.svg" alt="diagrama de flujo del juego del ahorcado">
							</div>
						</div>
						
						
						<img src="ex/ahorcado/hangman-game_pm.png" alt="imagen de juego del ahorcado">
						<?= getRes('ejemplo', 'ex/ahorcado/index.html', 'Ahorcado', 4) ?>
						<input type="button" onclick="verPista(2)" value="Ver pista">
						<pre id="pista2" class="pista"><code>
<p class="black bold">El siguiente código busca una letra dentro de una palabra y muestra un mensaje de alerta cada vez que la encuentra</p>
&lt;script type=&quot;text/javascript&quot;&gt;
	let palabra = &quot;elefante&quot;;
	let letra = &quot;e&quot;;
	for(let i=0; i&lt;palabra.length; i++){
		if(palabra[i] == letra){
			alert(&quot;Hay una a en la posici&oacute;n &quot; + i)
		}
	}
&lt;/script&gt;</code></pre>
					</li>
					<li>
						<h4>Ejercicio: <span class="text-primary">Juego palabras</span></h4>
						
						
						<div class="row">
							<div class="col-md-10">
							<ol>
							<li>Se escoge una frase aleatoriamente entre un array de frases.</li>
							<li>Desordenamos la frase. Para simplificar el proceso, tendremos otro array donde las frases desordenadas se almacenan en el mismo órden que en el primer array.</li>
							<li>Envolvemos las palabras del array en <span class="i">spans</span> independientes a los que asociamos el class <span class="i">button</span> para detectar la pulsación sobre ellos.</li>
							<li>Cuando pulsamos sobre uno de estos <span class="i">buttons</span>, pasamos la palabra pulsada a la fila inferior</li>
							<li>Cuando pulsamos el botón de corrección, evaluamos si la frase de arriba coincide con la frase de abajo.</li>
						</ol>
							</div>
							<div class="col-md-2">
							<?= getRes('ejemplo', 'ex/juego-palabras/index.html', 'Ver ejemplo', 1) ?>
							</div>
						</div>
						
						
					</li>
				</ol>
			</div>
		</article>
		<article>
			<div>
				<h2 id="localstorage">localStorage</h2>
				<h3>localStorage vs Cookies:</h3>
				
				<div class="row">
					<div class="col-md-8">
					<ul>
					<li>En ambos casos la información es almacenada en el cliente, es decir, en el navegador, pero accedemos y manipulamos la información de las cookies desde el servidor y accedemos y manipulamos la información del localStorage desde el cliente.</li>
					<li>Podemos almacenar hasta 4 Kb por cookie, mientras que en el caso de localStorage podemos almacenar hasta 4MB por dominio.</li>
				</ul>
					</div>
					<div class="col-md-4">
					<pre><code>localStorage.setItem("<span class="color">clave</span>", valor);
var variable = localStorage.getItem("<span class="color">clave</span>");</code></pre>
					</div>
				</div>
				
				
				<h4>Consideraciones:</h4>
				<p>localStore sólo almacena texto, si quisiera almacenar un array, tendría que seguir el siguiente proceso:</p>
				<pre><code>localStorage.setItem(JSON.stringify(names));
var storedNames = localStorage.getItem(JSON.parse(localStorage["names"]));</code></pre>
				<h4>Ejercicio</h4>
				<p>Al pulsar el botón de "Salvar cambios" deben almacenarse los cambios. Al cerrar y regresar al navegador, los cambios deben estar ahí.</p>
				<?= getRes('ejemplo', 'ex/localstorage/local-storage/index.html', 'localstorage', 4) ?>
				<h4>Ejercicio</h4>
				<p>Crear un botón para eliminar el contenido almacenado en el ejercicio anterior.</p>
				<pre><code>localStorage.clear();
location.reload();</code></pre>

<div class="row">
	<div class="col-md-10">
	
	<div class="output">
					<div id="lista2">
						<ul contentEditable="true">
							<li>item 1</li>
							<li>item 2</li>
							<li>item 3</li>
							<li>item 4</li>
						</ul>
					</div>
				</div>

	</div>
	<div class="col-md-2">
	<?= getRes('ejemplo', 'ex/localstorage/local-storage-2/index.html', 'Ver ejercicio localstorage resuelto', 4) ?>
	</div>
</div>
				
				
				<h4>Ejercicio</h4>
				<p>Al seleccionar una imagen, esta debe aparecer en la página siguiente.</p>
				<?= getRes('ejemplo', 'ex/localstorage/local-storage-3/index.html', 'storage image', 4) ?>
			</div>
		</article>
		<article>
			<div>
				<h2 id="deconstruccion">Deconstrucción</h2>
				<p>Nos permite almacenar los valores de una entidad compleja (un array o un objeto) en variables independientes.</p>


				<div class="row">
					<div class="col-md-6">
					<h4>Deconstrucción de array</h4>
				<pre><code>let arr = [1, 2, 3];
let [a, b, c] = arr;
console.log(a); <span class="green">// 1</span>
console.log(b); <span class="green">// 2</span>
console.log(c); <span class="green">// 3</span></code></pre>
					</div>
					<div class="col-md-6">
					<h4>Deconstrucción de un objeto</h4>
				<pre><code>let obj = {a: 1, b: 2, c: 2};
let {a, b, c } = obj;
console.log(a); <span class="green">// 1</span>
console.log(b); <span class="green">// 2</span>
console.log(c); <span class="green">// 3</span></code></pre>
					</div>
				</div>
				
				
				<h4>Importar un objeto y deconstruirlo</h4>
				<pre><span class="bold">funciones.js</span><code>export const saltar = () => console.log('saltar');

export const correr = () => console.log('correr');</code></pre>
				<pre><code>import { saltar, correr } from funciones;</code></pre>
				<h4>Importar todos los exports de un módulo</h4>
				<pre><code>// En el siguiente caso, misFunciones será un objeto normal, cuyas propiedades serán los exports del módulo importado
import * as misFunciones from 'funciones';

// Para poder usarlos, tendré dos opciones: 

const { saltar, correr } = misFunciones;
// o usar misFunciones.saltar y misFunciones.correr</code></pre>
				<h3>Rest operator/ spread operator <span class="green">(...)</span></h3>

				<div class="row">
					<div class="col-md-6">
					<h4>Rest operator</h4>
				<pre><code>function doMath(operator, <span class="red bold">...</span>numbers) {
	console.log(operator);
	console.log(numbers);
}
 
doMath('add', 1, 2, 3);</code></pre>
					</div>
					<div class="col-md-6">
					<h4>Spread operator</h4>
				<pre><code>const a = [1,2,3];

const b = [<span class="red bold">...</span>a, 4,5,6]; <span class="green">// [1, 2, 3, 4, 5, 6]</span></code></pre>
</div>
				</div>
				
				
			</div>
		</article>
		<article>
			<div>
				<h2 id="fetch">fetch</h2>
				<p>Las peticiones fetch permiten hacer peticiones a un servidor cuyos resultados serán gestionados mediante promesas.</p>
				<h3>Ejemplos de uso de fetch</h3>
				<h4>Petición GET sin parámetros a una API externa</h4>
				<pre><code>fetch('https://swapi.co/api/people/1/')
.then(res => res.json())
.then(callback);

function callback(data){
	console.log(data)
}</code></pre>
				<h4>Petición GET sin parámetros a un fichero local</h4>
				<pre><code>fetch('biblioteca.json')
.then(res => res.json())
.then(callback);

function callback(data){
	console.log(data.titulo)
}</code></pre>
				<p>En un documento JSON correcto, los nombres de las propiedades deben ir entre comillas dobles.</p>
				<pre><span class="bold">biblioteca.json</span><code>[
	{
		"titulo": "La Aventura",
		"autor": "Paco"
	},
	{
		"titulo":"Las cosas",
		"autor": "Pac"
	}
]</code></pre>
				<h4>Petición POST con parámetros</h4>
				<pre><code>fetch('http://localhost:13289/escenas/recuperar_escenas_obra', {
    method:'POST',
	headers: {
		"Content-Type": "application/json",
         },
    body:JSON.stringify({id:1})})
    .then(res => res.json())
    .then(escenas => {
      console.log(escenas);
    });</code></pre>
				<h4>Ejercicio Fetch</h4>

				<div class="row">
					<div class="col-md-6">
					<p>Haz la siguiente petición:</p>
				<pre><code>https://swapi.co/api/people/</code></pre>
				<p>y recorre el resultado pata mostrar una lista con los datos recuperados</p>
					</div>
					<div class="col-md-6">
					<?= getRes('ejemplo', 'ex/arrays/ejercicio-fetch/index.html', 'Ver ejemplo') ?>
					</div>
				</div>
				
				
				<h3>Codigo para simplificar las peticiones</h3>
				<pre><code>const API_URL = 'http://localhost:13289';

const fetchData = (url, options = {}) => {
  return fetch(API_URL + url, {
    headers: {
      'Content-Type': 'application/json'
    },
    ...options,
  }).then(res => res.json())
};

export const getJson = (url, params) => {
  const urlParams = params && Object.entries(params)
    .reduce((acc, [name, value]) => `${acc}${name}=${value}&` , '?')
    .slice(0, -1);
 return fetchData(url + urlParams);
};

export const postJson = (url, params) => {
  return fetchData(url, {
    method: 'POST',
    body:JSON.stringify(params)
  });
};</code></pre>
				<pre><span class="font-weight-bold">Para usarlo:</span><code>import {getJson, postJson} from "../http";
  const escenas2 = getJson('/escenas/recuperar_escenas_obra', {id: 1, amor: 'mucho'})
};</code></pre>
				<h4>Promise</h4>
				<p>Las promesas nos permiten gestionar código asincrónico. Las promesas de Javascript nativo, son similares a las promesas de jquery.</p>
				<pre><code>$.get('url.php', callback);</code></pre>
				<p>Antes de tener disponibles las promesas nativas para gestionar estas peticiones asíncronas, teníamos que usar este código:</p>
				<pre><code>function get(url, callback) {
	var req = new XMLHttpRequest();
	req.open('GET', url);

	req.onload = function() {
		if (req.status === 200) {
			callback(req.response);
		}
	};

	req.send();
}

get('url.php', callback)</code></pre>
				<p>El equivalente con promesas nativas de Javascript, sería esto:</p>
				<pre><code>fetch('url.php').then(callback);</code></pre>
				<h4>Crear una promesa (ejecutar una función de forma asincrónica)</h4>
				<p>En Javascript todo el código es sincrónico. Las funciones asincrónicas se ejecutas después de las asincrónicas (no entre medias).</p>
				<p>Definimos una función sincrónica</p>
				<pre><code>const add = (num1, num2) => num1 + num2;</code></pre>
				<pre><code>const makeSumPromise = () => new Promise((resolve) => {
	resolve(add(3,2))
});</code></pre>
				<p>num contendrá el valor que devuelve el resolve</p>
				<pre><code>makeSumPromise.then(num => )</code></pre>
				<h4>La función fetch devuelve una promesa</h4>
				<pre><code>let promesa = fetch('url.php');
promesa.then(...)</code></pre>
				<h4>Promise.race</h4>
				<p>Este método nos permite evaluar varios códigos (request, timeoutPromise, ...) creados a partir de la API de de Promise. El que termine de ejecutarse antes es el que se guardará como valor de retorno de la promise.</p>
				<p>En el siguiente ejemplo, hago una carrera entre dos promises. Si la promise request tarda más que la promise timeoutPromise, el valor devuelto será el que devuelva un timeout.</p>
				<pre><code>Promise.race([
	<span class="red bold">request</span>, // 1s
	<span class="blue bold">timeoutPromise</span>, // 0.5s

]).then((res) => {
	clearTimeout(timeoutId);
	return res;
});


const <span class="red bold">request</span> = fetch(path); <span class="green">//El método fetch devuelve una promesa</span>

const <span class="blue bold">timeoutPromise</span> = createRequestTimeout(setTimeoutReference);

let timeoutId;

const setTimeoutReference = (timeout) => { timeoutId = timeout; };

const createRequestTimeout = setTimeoutReference => new Promise((resolve, reject) => {
	setTimeoutReference(setTimeout(() => {
		reject(createHttpError({
			statusCode: 504,
			statusMessage: 'Request timeout error',
		}));
	}, 10000));
});</code></pre>
			</div>
		</article>
		<article>
			<div>
				<h2 id="import-export">Import, export</h2>
				<h3>Con variables</h3>


				<div class="row">
					<div class="col-md-6">
					<pre><span class="bold">test.html</span><code>&lt;script src=&quot;main.js&quot; type=&quot;module&quot;&gt;&lt;/script&gt;</code></pre>
				<pre><span class="bold">main.js</span><code>import Test, { x, y, z} from './variables.js';

console.log("Test: " + Test)
console.log("x: " + x)</code></pre>
					</div>
					<div class="col-md-6">
					
						
				<pre><span class="bold">variables.js</span><code>export const x = 1;
export const y = 2;
export const z = 3;

const Test = 5;

export default Test;</code></pre>
</div>
				</div>
			
				<?= getRes('ejemplo', 'ex/test-export/test.html', 'Ver ejemplo variables') ?>
				<h3>Con funciones</h3>

				<div class="row">
					<div class="col-md-6">
					<pre><span class="bold">main.js</span><code>import Sumar, { sumar} from './funciones.js';

console.log("Sumar: " + Sumar(3, 4))
console.log("sumar: " + sumar(3, 4))</code></pre>
					</div>
					<div class="col-md-6"><pre><span class="bold">funciones.js</span><code>export const sumar = (a,b) => a + b;

export default  (a,b) =>  a * b; // Cuando exportamos de esta forma nunca ponemos el nombre de la función

/* El código anterior también se podía haber hecho de la siguiente forma:
export default  App;
const App (a,b) =>  a * b;
*/
</code></pre></div>
				</div>
				
				
				<?= getRes('ejemplo', 'ex/test-export-2/test.html', 'Ver ejemplo funciones') ?>
			</div>
		</article>
		<article>
			<div>
				<h2 id="modernizr">modernizr</h2>

<div class="row">
	<div class="col-md-6">
	<p><a target="_blank" href="http://www.modernizr.com/">Modernizr</a> es un paquete de detección de las capacidades de un navegador relativas a HTML5 y CSS3. </p>
				<p>1) Desarrollo (Development) <br>
					Es un script completo, con todas las funcionalidades básicas de Modernizr, sin comprimir y con comentarios. Ideal para la fase de desarrollo de nuestro proyecto. Luego sería recomendable descargar un paquete idóneo para producción.</p>

				<p>2) Producción (Production) <br>
					Para hacer esta descarga se ofrece una página donde podemos seleccionar las funcionalidades de detección que queremos incluir, porque estemos utilizándolas en nuestro proyecto.</p>
				<p>Se recomienda cargar el script en el head.</p>
				<?= getRes("video_premium", 222385875) ?>

	</div>
	<div class="col-md-6">
	<h3>Ejemplo</h3>
				<pre><code>&lt;script src=&quot;modernizr.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
	if(Modernizr.boxshadow) {
		alert(&quot;SI sombra caja&quot;);
	} else {
		alert(&quot;NO sombra caja&quot;);
	}

	if(Modernizr.canvas) {
		alert(&quot;SI canvas&quot;);
	} else {
		alert(&quot;NO canvas&quot;);
	}
&lt;/script&gt;
</code></pre>
				<?= getRes('ejemplo', 'ex/modernizr/index.html', 'Ver ejemplo de uso de modernizr', 4) ?>
	</div>
</div>

				
			
				<h3>Polyfill</h3>
				<p>Un polyfill o polyfiller, es una pieza de código (o plugin) que proporciona la tecnología que se espera que el navegador proporcione de forma nativa.</p>
				<h4>Ejemplo autofocus</h4>
<div class="row">
	<div class="col-md-10">
	<pre><code>&lt;script src=&quot;modernizr.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js&quot;&gt;&lt;/script&gt;


&lt;script type=&quot;text/javascript&quot;&gt;
	$(document).ready(function() {
		if (!Modernizr.input.autofocus) {
		$(&quot;input[autofocus]&quot;).focus(); 
	}
});
&lt;/script&gt;
&lt;input type=&quot;text&quot; /&gt;

&lt;input type=&quot;text&quot; autofocus=&quot;autofocus&quot;/&gt;

&lt;input type=&quot;text&quot; /&gt;

&lt;input type=&quot;text&quot; /&gt;</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes('ejemplo', 'ex/modernizr-autofocus/index.html', 'Ver ejemplo modernizr autofocus', 4) ?>
	</div>
</div>

				
				
			</div>
		</article>
	<?php
});
include $path . "/diapos_theme/footer.php";
	?>