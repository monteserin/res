<?php 
/*

$titulo_curso="Stencyl";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
add_action( 'genesis_after_header', function(){
	global $path;
	include $path."diapos_theme/body_init.php";
	echo "<h1>$titulo_curso</h1>";

*/
	?><section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
		<ol>
		<li><a href="#quees">¿Qué es?</a></li>
		<li><a href="#instalacion">Instalación</a></li>
		<li><a href="#iniciar_aplicacion">Iniciar la aplicación</a></li>
		<li><a href="#interfaz">Interfaz</a></li>
		<li><a href="#glosario"></a></li>
		<li><a href="#primer_juego">Primer juego</a>
			<ol>
				<li><a href="#crear_escena">Crear una escena con un fondo</a></li>
				<li><a href="#tiles">Tiles</a></li>
				<li><a href="#insertar_tiles">Insertar tiles de uno en uno</a></li>
				<li><a href="#fisicas">Físicas</a></li>
			</ol>

		</li>
<li><a href="#actores">Ejercicio - Actores</a></li>
<li><a href="#colisiones">Colisiones</a></li>
<li><a href="#juego_plataformas">Juego de plataformas</a></li>
<li><a href="#definir_comportamiento_al_andar">Definir un comportamiento para andar</a></li>
<li><a href="#apunte_sobre_la_muerte">Apunte sobre la muerte</a></li>
<li><a href="#agregar_evento_aplastamiento">Agregar evento de aplastamiento</a></li>
<li><a href="#la_camara_sigue_al_actor">La cámara sigue al actor</a></li>
<li><a href="#tux_pierde_vidas">Problema: Tux pierde todas las vidas de golpe</a></li>
<li><a href="#asignar_movimiento_a_bala">Asignar movimiento a la bala</a></li>
<li><a href="#regiones">Regiones</a></li>
<li><a href="#cambio_nivel">Cambio de nivel</a></li>
<li><a href="#musica">Música</a></li>
<li><a href="#sacar_monedas">Sacar monedas</a></li>
<li><a href="#marcador_monedas">Textos – crear un marcador de monedas</a></li>
<li><a href="#ejercicio_cenital">Ejercicio Cenital</a></li>
<li><a href="#matar_patitos">Ejercicio - Matar patitos</a></li>
<li><a href="#pong">Ejercicio Pong</a></li>
<li><a href="#ejercicio_pistoleras">Ejercicio - pistoleras</a></li>
<li><a href="#ejercicio_borrachas">Ejercicio ovejas borrachas</a></li>
<li><a href="#ejercicio_darts">Ejercicio - darts</a></li>

		</ol>
	</article>
	</section>
	<main class="curso">
	<section>
	<article >
		<h2 id="quees">¿Qué es?</h2>
		<p>Stencyl es una plataforma de creación de videojuegos 2D. Permite crear videojuegos desde Linux, OS X y Windows para varias plataformas como iPhone, iPad, Android, Flash, Windows, Mac y Linux.</p>
		<p>Tiene tres versiones:</p>
		<ul>
			<li>Básica gratuita que permite exportar vía web con Adobe Flash Player.</li>
			<li>Pago básica que exporta también a ordenadores por un valor de $99 USD.</li>
			<li>Estudio, que permite publicar para iOS y Android por un valor de $199.</li>
		</ul>

		<h3>Juegos MSDOS</h3>
		<a target="_blank" href="https://archive.org/details/softwarelibrary_msdos_games">https://archive.org/details/softwarelibrary_msdos_games</a>
	</article>
	<article>
		<h2 id="instalacion">Instalación</h2>
		<a class="recurso" href="http://www.stencyl.com/download/">Descarga</a>
		<p>Tener en cuenta que en linux habrá que instalar unas cuantas
			librerías. El proceso de instalación de dichas librerías se detalla
			en el link junto al link de descarga para linux.</p>

								<?php // getRes('ejemplo','juegos.zip','Descargar todos los juegos') ?>

		</article>
		<article>
			<h2 id="iniciar_aplicacion">Iniciar la aplicación</h2>
			<p>Cuando lo hacemos nos sale la opción de loguearnos. Esto será necesario si somos usuarios de pago, en caso contrario, no hace falta.</p>
		</article>
		<article>
			<h2 id="interfaz">Interfaz</h2>
			<img src="res/interfaz.jpg" alt="interfaz stencyl">
			<p>Stencyl Forge: Permite descargar recursos de internet.</p>
			<p>Cuando entremos en un juego y querramos regresar a la interfaz de inicio, pulsaremos File -> Close Game</p>
			<p>Test Game : Arranca el juego</p>
		</article>
		<article>
			<h2 id="glosario">Glosario</h2>
			<p><span class="black bold">Actores:</span> Los personajes del juego (malos, buenos, etc. ) así como las entidades con las que podemos interactuar.
			</p>
			<p><span class="black bold">Escenas:</span> normalmente, los niveles del juego; aunque puede haber un nivel con varias escenas.
			</p>
		</article>
		<article>
			<h2 id="primer_juego">Primer juego</h2>
			<ol>
				<li>Pulsamos en el recuadro que se indica en el escritorio de la interfaz para crear un nuevo juego.</li>
				<li>Seleccionamos blank game.</li>
			</ol>
	
			<h3 id="crear_escena">Crear una escena con un fondo</h3>
			<ol>
				<li>Dashboard → Resources → Scenes → new</li>
				<li>Dashboard → Resources → Backgrounds → new → le pongo una imagen → Botón verde en la esquina superior derecha (Attach to scene).</li>
			</ol>
			<p>No es muy recomendable usar una imagen de fondo para un juego en el que la cámara sigue al personaje, porque a menudo son demasiado pesadas y serán difíciles de mover por nuestra aplicación. En su lugar, será mejor usar tiles, como veremos más adelante.</p>
			<p>Si usamos tiles, tener en cuenta que su tamaño debe coincidir con el tamaño de los tiles asociados a la escena que definimos al crearla, u ocurrirán cosas raras.</p>


			<h3 id="tiles">Tiles</h3>
			<p>Un tile es una porción gráfica.</p>
			<p>Un tileset es un conjunto de tiles.</p>
			<p>Por muchos tiles que tengamos en la librería del videojuego, stencyl sólo utilizará los que necesite.</p>
			<p>Resources → tileset → dejamos el tamaño más estándar (32). X Spacing, Y Spacing, da separación entre tiles. X Border, Y Border, coloca un borde alrededor de los tiles.
			</p>
			<a target="_blank" href="http://www.spriters-resource.com">http://www.spriters-resource.com</a> <br>
			<a target="_blank" href="http://opengameart.org">http://opengameart.org</a>
			<img src="res/super_mario_3.png" alt="sprite super mario" style="width:100%" >
			<h3 id="insertar_tiles">Insertar tiles de uno en uno</h3>
			<ol>
				<li>Omito la importanción de la imagen.</li>
				<li>Dibujo la rejilla de tiles.</li>
				<li>Selecciono la herramienta "Select tiles" en la barra de herramienta de tiles.</li>
				<li>Voy importando los tiles uno a uno.</li>
			</ol>
			<p>Los cuadrados amarillos que aparecen a la derecha son los áreas de colisiones, que puedo ir asignando a cada tile. Por defecto, para cada tile la colisión es de tipo square.</p>
			<p>En la parte inferior de la pantalla podemos importar frames para animar los tiles.</p>
			<h3>Ejercicio</h3>
			<p>Importar correctamente el siguiente fichero de tiles, e ir pintándolos en una nueva escena.</p>
	
			<h3 id="fisicas">Físicas</h3>
			<p>Dentro de la edición de la escena tenemos la pestaña físicas.</p>
			<h2 id="actores">Ejercicio - Actores</h2>
			<ol>
				<li>Dashboard → Actor types → new</li>
				<li>Creamos una animación.</li>
				<li>Añadimos las animaciones de andar hacia ambos lados y de estar parado hacia ambos lados. Deberemos definir el número de columnas y filas que contiene el sprite.</li>

			</ol>
			<p>Ahora puedo ir a la escena y tendré disponible el actor para ser insertado.</p>
			<p>Puedo recortar el área de colisión de Tux dentro de la pestaña “Collision”. Será necesario en este caso.</p>
											<?php // getRes('recurso','res/tux/Tux_Junior_v3.png','Descargar Tux') ?>

			
		</article>

		<article>
			<h2 id="colisiones">Colisiones</h2>
			<p><span class="black bold">Redefinir el área de colisiones.</span><br>
				Dentro del actor → pestaña colisiones. Desde el menú lateral podemos cambiar el ancho y el alto de este área. También podemos definir un área poligonal. Para borrar, seleccionamos el área de colisiones → supr.
			</p>

			<p><span class="black bold">Nota:</span>
				Tener cuidado a la hora de definir un área de colisiones para una animación de varios frames. Quizás el área sea apropiado para el primer frame pero no para los siguientes.
			</p>
		</article>

		<article>
			<h2 id="juego_plataformas">Juego de plataformas</h2>
			<?php // getRes('ejemplo','juegos/plataformas/index.html','Verlo funcionando') ?>
			
			<h3 id="definir_comportamiento_al_andar">Definir un comportamiento para andar</h3>
			<p>Entramos en un proyecto → Dashboard → LOGIC → Actor Behaviors</p>
			<p>Podremos crear comportamientos que serán intercambiables entre juegos.</p>
			<p>Podemos elegir entre:</p>
			<ul>
				<li>Design Mode (modo gráfico).</li>
				<li>Code Mode (escribiendo código fuente).</li>
			</ul>
			<ul>
				<li>Comportamientos de actor.</li>
				<li>Comportamientos de escena.</li>
			</ul>
			<ol>
				<li>Escogemos Design mode y comportamientos de actor.</li>
				<li>El nombre del comportamiento será caminar.</li>
				<li>+ Add Event → Basics → When updating</li>
				<li>Pestaña Palette → Botón Flow → Pestaña conditions → Conditionals → If</li>
				<li>Botón User Input → Pestaña Keyboard &amp; Mouse → Keyboard → Control is down</li>
				<li>Botón Actor → Pestaña Motion → Speed → set x-speed → le asignamos el atributo velocidad (valor 20) que debemos haber creado previamente.</li>
				<li>Botón Actor → Pestaña Draw → Pieza Switch animation to → Pieza as animation → copio y pego el nombre de la animación de tux corriendo.</li>
				<li>Attach Actor type.</li>
			</ol>
			<h3 id="ejercicio">Ejercicio</h3>
			<p>Añadir el "flow otherwise" en el que haré que el actor detenga su desplazamiento y se quede con el frame congelado. De momento tux seguirá teniendo la animación de desplazamiento aunque realmente no se mueva.</p>
			<h3>Ejercicio</h3>
			<p>Añadir el código para que Tux camine hacia la izquierda.</p>
			<h3>Crear un atributo local</h3>
			<p>Dentro del actor → pestaña events → pestaña attributes → add attribute</p>
			<p><span class="black bold">Tipo actor, actor group, actor type, scene</span>: vamos a intentar evitarlos porque consumen bastantes recursos. <br><span class="black bold">Effect</span>: vamos a intentar evitarlo porque sólo funciona en flash.</p>
			<p>Para obtener la velocidad negativa usaremos: Numbers &amp; test → negative</p>
			<h3>Ejercicio</h3>
			<p>Utilizar una variable para la velocidad en lugar de tenerla harcodeada.</p>
			<h3>Ejercicio</h3>
			<p>Hacer que Tux mire hacia el lado correcto cuando pare de moverse.</p>
			<p>Para ello crearemos un atributo numérico global llamado "orientation" que puede valer 1 o 0.</p>
			<p>Lo haremos numérico en lugar de booleano, por sí más adelante queremos el personaje tenga más de dos orientaciones (derecha, izquierda, arriba, abajo, diagonales, etc).</p>
			<p>Lo haremos global porque más adelante lo utilizaremos para disparar en la dirección correcta y querremos accederlo.</p>
			<p>Lo modificaré (attributes → setters) cuando el actor se esté desplazando y recuperaré (attributes → getters) cuando deje de hacerlo para dejar puesta la animación que me interesa.</p>
			<h3>Ejercicio</h3>
			<p>Crearemos un nuevo comportamiento llamado "saltar".</p>
			<p>Para ello utilizaremos el evento "was pressed".</p>
			<h3>Ejercicio</h3>
			<p>Haremos que Tux no salga volando para arriba si pulsamos muchas veces el botón de saltar.</p>
			<p>Para ello crearemos un atributo numérico que setearemos a 1 cuando saltemos y que volveremos a setear a 0 al cabo de un tiempo utilizando Flow → Time → do after.</p>
			<p>Sólo podremos saltar si dicho atributo vale 0.</p>
			<h3>Ejercicio - movimiento enemigo</h3>
			<p>Añadir un enemigo con un comportamiento que hará que se mueva aleatoriamente a cada segundo. Para ello usaremos:</p>
			<ol>
				<li><span class="red bold">When creating</span></li>
				<li>Flow → time → do every x seconds</li>
				<li>Numbers &amp; Text → random between 0 and 1</li>
			</ol>

			<?php // getRes('recurso','res/champi.zip','Descargar enemigo') ?>
			
			<h3 id="apunte_sobre_la_muerte">Apunte sobre la muerte</h3>
			<p>Cada actor debe matarse a sí mismo. Esta es la mejor práctica y ofrece el mejor rendimiento.</p>
			<p>Además cuando disparamos contra un actor, la lógica del daño que recibe este debe estar escrita en el actor, no en la bala. De lo contrario, el método "do after x seconds" no funcionará, por ejemplo.</p>
			<h3 id="agregar_evento_aplastamiento">Agregar evento de aplastamiento</h3>
			<ol>
				<li>Add event → Collisions → Actor of type.</li>
				<li>If.</li>
				<li>Collision → the top of actor 1.</li>
				<li>Cambiamos la animación a aplastado.</li>
			</ol>
			<p>Notas:</p>
			<ul>
				<li>Para que esto funcione correctamente es importante que en las físicas del prota hayamos establecido que no puede rotar.</li>
				<li>Después de la animación puedo llamar al comando kill para que desaparezca el malo.</li>
			</ul>
			<h3 id="la_camara_sigue_al_actor">La cámara sigue al actor</h3>
			<ol>
				<li>Dentro de los comportamientos del actor</li>
				<li>Scene → View → move camera to center actor</li>
			</ol>
			<h3>Atributos globales</h3>
			<p>Son aquellos accesibles por todas las entidades del juego.</p>
			<p>Creación de un atributo global: <br>
				Menú settings → Attributes → Nombre: vidas, Tipo: número, Valor: 4
			</p>
			<h3>Colisiones – Tux pierde una vida</h3>
			<ol>
				<li>En la pestaña evento del enemigo completamos el if con que ya teníamos con: otherwise (set vida to (vida – 1)), dónde vida es un atributo global.</li>
				<li>Añadimos un nuevo comportamiento a Tux: <br>Always(if (vida = 0){kill self})</li>
				<li>Qué error nos dá? Cómo solucionarlo?</li>
			</ol>
			<h3 id="tux_pierde_vidas">Problema: Tux pierde todas las vidas de golpe</h3>
			<p>Podemos solucionarlo dándole un tiempo de invencibilidad.</p>
			<p>Creamos un atributo global llamado invencible que vale 0.</p>
			<p>Cuando el prota colisiona con un enemigo lo ponemos a 1 y esperamos un segundo para volver a ponerlo a 0 (tiempo durante el que el prota será invencible).</p>

			<h3>Ejercicio</h3>
			<p>Añadir el enemigo de la tortuga.</p>
			<p>Cuando el prota la pise, esta debe quedar dentro de su caparazón.</p>
			<p>Crear una variable local para la tortuga que inicialmente valga 0. Cuando la tortuga está dentro del caparazón, la variable valdrá 1. Si la variable vale 1, la tortuga podrá morir.</p>
			<?php // getRes('recurso','res/tortuga.zip','Descargar tortuga') ?>
			
			<h3>Ejercicio – Tux dispara</h3>
			<p>Creamos un actor y le vinculamos el sprite de la bala.</p>
			<p>Creamos el comportamiento disparar. <br></p>
			<pre><code>always(if(pulso action 1){
scene → create actor type (posición x del actor, posición y del actor) at ...
<span class="green">Importante: si el objeto creado no se vé en la posición "front", probaremos con
"middle", y si no, finalmente probaremos con "back".</span>
})</code></pre>

						<?php // getRes('recurso','res/bullet.png','Descargar bala de calón') ?>

			
			<h3 id="asignar_movimiento_a_bala">Asignar movimiento a la bala</h3>
			<p>set x speed para el último actor creado</p>
			<h3>Hacer que el disparo no desplace a nuestro personaje</h3>
			<p>Para ello modificaremos el comportamiento disparar añadiendo unos pixeles a la posición de creación de la bala en función de la dirección a la que estamos apuntando y del tamaño del personaje.</p>

			<h3 id="regiones">Regiones</h3>
			<p>Las podemos utilizar para detonar ciertos eventos. Así, por ejemplo si un personaje pasa por ella podríamos hacer que apareciesen enemigos del techo, etc.</p>
			<p>Entramos en un escenario.</p>
			<ol>
				<li>Pestaña Scene → creamos una región.</li>
				<li>Pestaña Events → Add events → Actors → Enter or leaves a region → Specific Actor → marcamos la región creada.</li>
				<li>Esto detonará el evento: <br> Scene → Game Flow → Switch to scene (se recarga la escena)</li>
			</ol>
			<h3 id="cambio_nivel">Cambio de nivel</h3>
			<p>Creamos un nuevo nivel. Cuando tux llegue a una región situada al final del nivel, cambiaremos al siguiente.</p>
			<h3>Añadir nuevos controles de teclado</h3>
			<p>Settings → Controls</p>
			<h3>Pausar el juego</h3>
			<p>Todos los actores tienen que tener habilitado "Puede ser pausado" dentro de las físicas del actor.</p>
			<p>Creamos la pausa como un evento de la escena:</p>
			<pre><code>
always(if(key is pressed){
	Scene → Game Flow → Pause Game
})</code></pre>
			<h3>Oscurecer la escena en la pausa</h3>
<pre><code>Basics → When drawing
if(Scene → Game Flow → game is paused){
	Drawing → Styles 	→ set color to
						→ set opacity to
			→ Drawing → draw rect (fill)
}</code></pre>
<h3>Ejercicio</h3>
<p>Si vuelvo a pulsar el botón de pause el juego debe reanudarse.</p>
<p>Para ello utilizaré el método Scene → Game Flow → game is paused.</p>

<h3 id="musica">Música</h3>
<p>Utilizaremos única y exclusivamente ficheros mp3 a 44.1 Khz y 16 bits (el mismo formato con otras calidades podría dar problemas).</p>
<p>Para importar, en el editor de bloques: <br>
Sounds and images → Play sound</p>
<h3>
	Ejercicio: </h3>
<p>Poner sonido a la bala en el juego de la vista cenital.</p>

<?php // getRes('recurso','res/shot.mp3','Descargar audio') ?>

<h3 id="sacar_monedas">Sacar monedas</h3>
<p>Creamos dos nuevos actores, coin_box y coin.</p>
<p>Añadimos eventos a la coin_box: <br>
Add event → Collisions → Actor Type
</p>
<p>Cuando el actor colisione con la coin_box por abajo, debemos crear el nuevo
actor moneda.</p>
<p>Evitaremos que la coin_box sea afectada por la gravedad en físicas →
general del actor.</p>
<p>La detección de colisiones es muy sensible. Implementar la lógica necesaria
para que una vez que sale una moneda ya no salgan más.</p>
<p>Finalmente hacer que la moneda salga perfectamente vertical hacia arriba y
desaparezca al cabo de un segundo.</p>
<h3 id="marcador_monedas">Textos – crear un marcador de monedas</h3>
<p>Creamos una fuente: Dashboard → Fonts → Create new font</p>
<p>En el escenario:</p>
<pre><code>When Drawing 
				→ Drawing 	→ set current font to
				→ Drawing	→ draw text (x2 veces para concatenar)</code></pre>

<h3>Convertir mario en un run and jump</h3>
<p>En una nueva capa oculta colocamos un punto que avanza a velocidad constante y que será el que sigue la cámara.</p>
<p>Daremos velocidad a ese punto en el when created.</p>
		</article>
<article>
	<h2 id="ejercicio_cenital">Ejercicio Centital</h2>
	<ol>
		<li>Crear un juego nuevo.</li>
		<li>Crear una escena.</li>
		<li>Rellenarla con los siguientes tiles (vista cenital).</li>
		<li>Crear un actor.</li>
		<li>En su pestaña físicas, especificaremos deshabilitar colisiones continuas.</li>
		<li>Crearle 4 animaciones a partir de estos recursos.</li>
		<li>Le creamos el comportamiento de caminar.</li>
		<li>El protagonista puede disparar.</li>
	</ol>

<div class="row">
	<?php // getRes('recurso','res/cenital.zip','Descargar prota') ?>
	<?php // getRes('ejemplo','juegos/cenital/index.html','Verlo funcionando') ?>

</div>
	
</article>

<article>
	<h2 id="matar_patitos">Ejercicio - Matar patitos</h2>
	<p>Hacer el juego de matar los patitos</p>
	<div class="row">
			<?php // getRes('recurso','res/patitos_media.zip','Descargar recursos') ?>
	<?php // getRes('ejemplo','juegos/patitos/index.html','Verlo funcionando') ?>
		
	</div>
	
</article>
<article>
	<h2 id="pong">Ejercicio Pong</h2>
	<img src="res/pong.png" alt="recurso para ejercicio pong">
	<p>Definiremos un único comportamiento para ambos ladrillos. Para ello definiremos dos globales
globales de tipo action, que configuraremos con las teclas correctos para cada ladrillo.</p>
<p>Para que la pelota rebote con los límites de la pantalla, podemos colocar unos tiles, y en la sección físicas → material de la pelota definiremos friction=0, bouciness=1.</p>
<p>Para que la pelota rebote contra el ladrillo puedo setearle physics → General → normal. Sin
embargo, esto hará que los ladrillos se superpongan sobre los tiles. Para evitarlo, dar a los ladrillos un peso exagerado hará que colisiones con los tiles y que la pelota no los pueda desplazar. También es aconsejable indicar que la pelota tenga su peso mínimo, es decir 0.01 Kg.</p>

	<div class="row">
			<?php // getRes('recurso','res/brickx100.png','Descargar ladrillo') ?>
	<?php // getRes('ejemplo','juegos/pong/index.html','Verlo funcionando') ?>
		
	</div>

</article>
<article>
	<h2 id="ejercicio_pistoleras">Ejercicio - pistoleras</h2>


		<div class="row">
			<?php // getRes('recurso','res/cowboy_120_height.png','Descargar foto pistolero') ?>
	<?php // getRes('ejemplo','juegos/pistoleros/index.html','Verlo funcionando') ?>
		
	</div>
</article>
<article>
	<h2 id="ejercicio_borrachas">Ejercicio – ovejas borrachas</h2>


			<div class="row">
			<?php // getRes('recurso','res/drinking.zip','Descargar oveja') ?>
	<?php // getRes('ejemplo','juegos/drinking/index.html','Verlo funcionando') ?>
		
	</div>
</article>
<article>
	<h2 id="ejercicio_darts">Ejercicio - darts</h2>
	<p>A partir del código del método Updated, completar el código para el método Drawing, para completar correctamente el juego de la diana.</p>
	<?php // getRes('ejemplo','juegos/darts/index.html','Verlo funcionando') ?>


	<img src="res/darts-foto.png" alt="foto dardos para stencyl" > <br>
	<img src="res/darts.png" alt="dardos para ejercicio en stencyl"> 
</article>
	</section>
	</main>
<?php 
// });
// include $path."/diapos_theme/footer.php";
?>