<?php 
$titulo_curso="🕹 Unity 3D";
$meta_description = 'Vamos a ver como programar videojuegos utilizando la herramienta más extendida para este fin.';
$img_curso = 'curso-unity-3d.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Curso de Unity3D",
  "description": "Curso de Unity para programar videojuegos con C#.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Monteserín",
    "sameAs": ["https://pablomonteserin.com/","https://www.facebook.com/pablomonteserincom/","https://www.linkedin.com/in/%E2%99%A5-pablo-monteser%C3%ADn-59079728/","https://www.youtube.com/user/PabloMonteserinTutor","https://twitter.com/monteserin1982"]
  }
}
</script>

<article><div>

<section id="amor" class="verIndice">
				<article id="inicio_del_documento" class="indice">
	<ol>
	<li><a href="#introduccion">Introducción</a>
</li>
<li><a href="#instalacion">Instalación</a></li>
		<li><a href="#interfaz">Interfaz</a></li>
	<li><a href="#conceptos-basicos">Conceptos básicos</a></li>
	<li><a href="#ejercicio-cubos">Ejercicio: cubos</a></li>
		<li><a href="#cambiar-color">Cambiar el color de algo</a></li>
		</li>
			<li><a href="#c">Introducción a C#</a></li>
<li><a href="#juego-2d">Conceptos para realización de juegos 2D</a></li>
								<li><a href="#acceder-componentes-desde-codigo">Acceder a componentes desde código</a>
								<li><a href="#uso-del-transform">Uso del transform</a>
								<li><a href="#ui">User Interface</a>
								<li><a href="#elije-tu-propia-aventura">Elije tu propia aventura</a>
					<li><a href="#acierta-imagen">Acierta imagen</a></li>
					<li><a href="#sprites">Sprites</a></li>
			<li><a href="#fall-down-game">Fall Down Game</a></li>
			<li><a href="#poner_imagen_de_fondo">Poner una imagen de fondo</a></li>
			<li><a href="#instanciar">Instanciar</a></li>
			<li><a href="#galeria-tiro">Galería de tiro</a></li>
			<li><a href="#corrutinas">Corrutinas</a></li>
			<li><a href="#flappy-bird">Flappy Bird</a></li>
		<li><a href="#pong">PONG</a>	
		<li><a href="#carreras">Carreras</a>	
			<li><a href="#panel-animator">Panel Animator</a>
			<li><a href="#plataformas">Plataformas</a></li>
			<li><a href="#coprota-sigue-a-prota">Plataformas</a></li>
			<li><a href="#puzzle-con-raycast">Puzzle con Raycast</a></li>
			<li><a href="#plataformas-con-raycast">Plataformas con RayCast</a></li>
			<li><a href="#memory">Memory (juego de las parejas)</a></li>
			<li><a href="#guardar-recuperar-informacion">Guardar y recuperar información almacenada</a></li>
			<!--li><a href="#arrrastrar-soltar">Arrastrar y soltar un objeto que tiene un texto 3D dentro</a></li>
			<!--li><a href="#ejercicio-animales">Ejercicio: animales</a>
			</li-->
		</li>
					<li><a href="#mascara">Máscara</a></li-->		
				<li><a href="#publicacion">Publicación</a></li>
		<li><a href="#first-person-shooter">Ejercicio: First Person Shooter</a></li>
		<li><a href="#photon">Multijugador con Photon</a></li>
		<!-- li><a href="#juego-coches">Ejercicio - Juego de coches</a></li>
			</li>
					<li><a href="#cambia-imagen">Cambia imagen con código</a></li>
					<li><a href="#animacion-scripting">Ejercicio: Animaciones con scripting</a></li-->
	</ol>
</article>			
</section>
	<main class="curso">
	<?= drawH1WithImg() ?>

	<article><div>
	<h2>Introducción</h2>
		<h3 id="introduccion">¿Qué es un motor de videojuegos?</h3>
		<div class="row">
			<div class="col-md-10">
			<p>Algunos ejemplos de motores de videojuegos son <a target="_blank" href="http://gamesalad.com/">gamesalad</a>, <a target="_blank" href="http://www.yoyogames.com/">gamemaker</a>, <a target="_blank" href="https://www.scirra.com/">construct</a> (no tiene versión para mac), <a href="http://www.stencyl.com/">Stencyl</a> (tiene versión nativa para Linux), <a target="_blank" href="https://www.unrealengine.com">Unreal Engine</a></p>
		<p>Nos permiten exportar para diversas plataformas: Nintendo, PlayStation, PC, Mac, web, Linux..., dependiendo del motor.</p>
			</div>
			<div class="col-md-2">
			<?= getRes("video_premium",227625296) ?>
			</div>
		</div>
		
		
		<h3 id="caracteristicas">Características</h3>

		<div class="row">
			<div class="col-md-10">
			<ol>
			<li>Soporta desarrollo de videojuegos en 2 y 3 dimensiones.</li>
			<li>Se programa utilizando C#.</li>
			<li><a target="_blank" href="https://madewith.unity.com/">Ejemplos de juegos hechos con Unity</a></li>
			<li>Pese a ser muy potente tiene una interfaz sencilla y un desarrollo mediante código bastante legible.</li>
			<li>Nos permite publicar el juego sin ningún tipo de coste</li>
		</ol>
		<p><a href="https://unity3d.com/es/legal/eula" target="_blank">Diferencias entre la versión personal y la PRO</a></p>
			</div>
			<div class="col-md-2">
			<?= getRes("video_premium",227625307) ?>
			</div>
		</div>
		
		
		

		</div></article>

		<article><div>
		<h2 id="instalacion">Instalación</h2>

		<div class="row">
			<div class="col-md-10">
			<p>Tiene dos versiones: Personal y Profesional. La versión Personal carece de ciertas funcionalidades de la Profesional. Muchas de estas son para trabajo en equipo.</p>
		<p>En linux: <a target="_blanks" href="https://forum.unity3d.com/threads/unity-on-linux-release-notes-and-known-issues.350256/#post-2803750">Descarga</a></p>
		<p>En windows y mac: <a target="_blank" href="https://store.unity.com/download?ref=personal">Enlace</a></p>
			</div>
			<div class="col-md-2">
			<?= getRes("video_premium",227625327) ?>
			</div>
		</div>
		
		
		<h3 id="nuevoProyecto">Nuevo proyecto</h3>
		<div class="row">
			<div class="col-md-10">
			<p>El nombre que le asignemos será el que utilice Unity 3D para almacenar en nuestro disco todos los ficheros de nuestro proyecto.</p>
		<p>Definimos si es un proyecto 3D o 2D. Esto se puede cambiar una vez iniciado el proyecto (menu edit -> Project settings -> Editor -> Mode: 2D).</p>
		<p>También podemos añadir assets (fotos, audios, etc) a nuestro proyecto, lo cual aumentará su peso. Esto lo podremos hacer durante la realización del proyecto.</p>
		<p>En <span class="i">itch.io</span> puedes descargar múltiples recursos para tus videojuegos.</p>
			</div>
			<div class="col-md-2">
			<div class="centraditos">
		<?= getRes("video_premium",227625330) ?>
		<?= getRes("recurso", "Ejercicios.zip", "Descargar todos los ejercicios de Unity") ?>
</div>
			</div>
		</div>
		
			
		<h4>Abrir código con monodevelop</h4>
		<ol>
			<li>Instalamos monodevelop. En Linux: <pre><code>sudo apt-get install monodevelop</code></pre></li>
			<li>Edit -> Preferences -> External Tools -> External Script Editor -> /usr/bin/monodevelop (en Linux)</li>
		</ol>

</div>
		</article>

		<article><div>
			<h2 id="interfaz">Interfaz</h2>
		<h3 id="barra_herramientas">Barra de herramientas horizontal superior</h3>
		<ul>
			<li><strong>Nubecita</strong>: Sólo para cuentas pro. Nos permite trabajar en la nube.</li>
			<li><strong>Último desplegable (layout)</strong>: Trabajaremos en el valor default.</li>
			<li><strong>Penúltimo desplegable (layers)</strong>: Esto controla que capas son visibles o invsibles. Si nos ponemos a mariposear y desactivamos el ojo de la capa default, no veremos nada.</li>
		</ul>
		<img src="imgs/desplegables-unity-3d.png" alt="desplegables unity 3d">
		<h3 id="paneles">Paneles</h3>
		<p>Se pueden redimensionar arrastrando desde los bordes de los paneles.</p>
		<p>Se pueden arrastrar y soltar. Puedo restaurar la distribución de paneles anterior, seleccionando un layout en el último desplegable de la barra de herramientas.</p>
		<p>Si hemos cerrado un panel, se puede volver a traer de vuelta a través del menú <strong>window</strong>.</p>
		<h4>Panel de jerarquía</h4>
		<p>Contiene un listado de todos los jerarquico de todos los elementos que participan en la escena del juego.</p>
		<h4>Panel de escena</h4>
		<p>Contiene una representación gráfica de todos los elementos de la escena</p>
		<h4>Panel de juego (game)</h4>
		<p>Nos muestra como se vería nuestro videojuego desde el punto de vista del jugador.</p>
		<p>En la configuración por defecto de Unity, o vemos el panel de escena o vemos el panel de juego. Es interesante ver ambos paneles a la vez. Para ello, arrastramos y soltamos el panel de juego a la derecha del panel de proyecto.</p>
		<h4>Panel inspector</h4>
		<p>Nos detalla todas las propiedades del objeto que hemos seleccionado.</p>
		<p>Si selecciono el candado de este panel, seguirán activas las propiedades del objeto seleccionado aunque seleccione otro objeto.</p>
		<h4>Panel de proyecto</h4>
		<p>Es el equivalente a un explorador de ficheros para visualizar los ficheros de nuestro proyecto. Me permite marcar ciertos objetos como favoritos.</p>
		<p>Haciendo click derecho en el panel puedo crear nuevas entidades.</p>
		<p>Manteniendo ctrl pulsado y moviendo la ruedita del ratón puedo aumentar o reducir el tamaño de los items.</p>
		<p>Un asset es cualquier tipo de arvhivo: video, audio, foto, etc.</p>
		<p>Un package es un conjunto de assets.</p>
		<p>Cuando importamos un asset, lo que ocurre internamente es que se crea una copia en la carpeta de assets.</p>
		<p>Botón derecho - import new asset: nos permite importar uno y sólo un fichero.</p>
		<p>Botón derecho -> Open containg folder: Abre la carpeta de assets utilizando el explorador de ficheros del sistema. Luego puedo pegar en esta carpeta los ficheros necesarios y aparecen en el panel de proyecto de Unity 3D.</p>
		<h4>Panel de consola</h4>
		<p>Nos muestra los errores de nuestros scripts.</p>
		<?= getRes("video_premium",227625336) ?>
			<h2 id="conceptos-basicos">Conceptos básicos</h2>
		<h3 id="escenas">Escenas</h3>
		<p>Son ficheros con extensión .unity</p>
		<p>Son los niveles del juego, las pantallas del menú, etc.</p>
		<p>Para guardar escenas crearemos una carpeta en el panel de proyecto y ahí será dónde las guardemos.</p>
		<h3 id="gameObject">Game Objects</h3>
		<p>Dentro de una escena hay "Game objects", que son los objetos que puedes ver en el panel de jerarquía. Puede ser una foto, un video, un script, etc.</p>
		<p>Podemos añadir Game Objects haciendo uso de su correspondiente menú.</p>

		<h3 id="componente">Componentes</h3>
		<p>Son las propiedades de un <strong>Game Object</strong>.</p>
		<p>Podemos ver los componentes de un Game Object en el panel inspector</p>
		<p>Un componente que tienen todos los Game Objects es el componente <strong>Transform</strong>.</p>
		<p>Desde el menú <strong>Components</strong> puedo añadir componentes a un Game Object.</p>
		
		<div class="row">
			<div class="col-md-10">
			<pre><code>float x = GetComponent&lt;Transform&gt; ().position.x;
...
transform.position = new Vector2 (pos_center,0);</code></pre>
			</div>
			<div class="col-md-2">
			<?= getRes("video_premium",227625346) ?>
			</div>
		</div>
		
		
		<h3 id="moviedonosen3D">Moviendonos en el espacio 3D</h3>
		<p><strong>Orbitar</strong>: alt + click + movimiento del ratón. Debes estar en vista <span class="i">3D</span>.</p>
		<p><strong>Desplazar en un eje</strong>: seleccionamos el objeto. Seleccionamos y arrastramos un eje.</p>
		<p>Si en el componente <strong>transform</strong> de un Game Object selecciono los tres puntitos y le doy a reset, el objeto se posicionará en el punto 0,0,0.</p>

		<img style="max-width:200px" src="./imgs/reset-unity-transform.png" alt="Reset unity transform"> <br> <br>
		<p><strong>Span view</strong>: pulso <strong>q</strong>, y a partir de ahí puedo desplazarme haciendo click con el ratón y moviéndolo.</p>
		<p><strong>Desplazar un eje, Rotar, escalar, escalar sólo en una dirección</strong>: Al seleccionar un Game Object, vemos que en la barra de herramientas horizontal superior hay varias posibilidades para seleccionar que operación de transformación queremos hacer. Teniendo seleccionado un Game Object puedo acceder a estas operaciones pulsando <strong>w</strong>, <strong>e</strong>, <strong>r</strong> y <strong>t</strong>, respectivamente.</p>
		<img src="imgs/herramientas-unity-3d.png" alt="herramientas unity 3d">
		<p><strong>zoom</strong>: ctrl + ruedita del ratón.</p>
		<p>La operaciones de transformación de un objeto se hacen a partir de su manejador, que estará siempre en el centro del objeto. Esto es algo que no podemos cambiar. Podemos ver el manejador de un objeto al hacer click sobre él.</p>
		<p><strong>Hacer zoom a un objeto</strong>: selecciono un objeto y pulso la f.</p>
		<p><strong>Duplicar</strong>: Selecciono un objeto - ctrl+c, ctrl + v.</p>
		<p>Puedo establecer jerarquías entre los Game Object arrastrando y soltando unos sobre otros dentro del panel de jerarquías.</p>
		<h3 id="camara">Cámara</h3>

		<div class="row">
			<div class="col-md-10">
			<p>Si la seleccionamos, podemos cambiar el degradado del cielo desde el panel inspector, accediendo al componente Camera → clear flags.</p>
		<p>Desde este componente también podremos cambiar la perspectiva. El valor 60 es más o menos lo que vemos nosotros con los ojos.</p>
		<p>Al final del inspector, en Target display, eliminamos GUI Layer (sólo sirve para mantener compatibilidad con antiguas versiones de Unity y consume recursos), y Flare Layer.</p>
			</div>
			<div class="col-md-2">
			<?= getRes("video_premium",227625351) ?>
			</div>
		</div>
		
		

		</div></article>

		<article><div>
		<h2 id="ejercicio-cubos">Ejercicio: cubos</h2>
		<p>Duplicando, escalando y desplazando cubos 3D realizar una mesa. Agrupar los Game Object en el panel de jerarquías, y luego duplicar varias veces la mesa creada y agrupada.</p>
		
		
		<div class="row">
			<div class="col-md-6"><img class="img-fluid" src="imgs/mesas.png" alt="mesas en unity3d"></div>
			<div class="col-md-6">
				<div class="centraditos">
				<?= getRes("video_premium",227625748) ?>
		
		<?= getRes("video_premium",227625752) ?>
				</div>
			
			</div>
		</div>

</div></article>

<article><div>
		<h2 id="cambiar-color">Cambiar el color de algo</h2>

		<h3>De un GameObjet</h3>

		<div class="row">
			<div class="col-md-10">
			<p>Debo crear un nuevo material en el panel de proyecto y arrastrarlo y soltarlo sobre el objeto.</p>
		<p>Si no quiero que el material se vea afectado por la luz, tras aplicar el material a un objeto, seleccionaré el correspondiente componente → Shader → Unlit → Color</p>
			</div>
			<div class="col-md-2">
			<?= getRes("video_premium",229977108) ?>
			</div>
		</div>
		
		

		<h3>De un Sprite Renderer</h3>
		<p>Botón derecho sobre el panel de proyecto → new → sprite → Asociamos el sprite al spriterenderer -> una vez asociado le podemos cambiar el color.</p></div></article>

		<article><div>
		<h2 id="c">Introducción a C#</h2>

		<ol>
			<li>Panel de proyecto → Click derecho → Create → Script de C#</li>
			<li>Panel de jerarquía → Click derecho → Crate → Empty llamado "EscenaManagement"</li>
			<li>Asociamos el script creado al empty creado</li>

		</ol>
<h4>Editor</h4>
<p>Si estamos usando windows, lo normal es usar el visual studio. Pero si usamos linux, podemos usar el mono develop. Para vincular el monodevelop a unity3d usaremos: Edit -> Preferences -> External Tools -> monodevelop</p>
			<h3>Hola Mundo</h3>
<div class="row">
	<div class="col-md-10">
	<pre><code>public class HolaMundo : MonoBehaviour {
	
	void Start () {
		Debug.Log ("Hola Mundo");
	}

	void Update () {
		Debug.Log ("Adios Mundo");
	}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229980569) ?>
	</div>
</div>

				
	
	<h3>Variables</h3>
	<h4>Declaración</h4>
	<div class="row">
		<div class="col-md-10">
		<pre><code>public class Variables : MonoBehaviour {

string textoInicio = "Hola Mundo!";

void Start () {
	Debug.Log (textoInicio);
}


void Update () {

}
}</code></pre>
		</div>
		<div class="col-md-2">
		<?= getRes("video_premium",229980823) ?>
		</div>
	</div>
	

<h4>Tipos de variables</h4>
<div class="row">
	<div class="col-md-10">
	<pre><code>public class TiposVariables : MonoBehaviour {
	public int numeroEntero = 1; // 1 2 3 4 5 6 7 8 ...
	public float numeroDecimal = 1.2f; //1.1f  1.2f  1.33f  ...
	public string texto = "El texto"; // "Van siempre entre comillas"
	public bool variableBooleana;


	<span class="green">// variables típicas de Unity</span>
	public GameObject cubos;
	public Transform miTransform;
	public MeshFilter meshFilter;
	public BoxCollider boxCollider;
	public MeshRenderer meshRender;

	void Start () {

	}

	void Update () {

	}
}</code></pre>
<p>Si arrastro este script a un GameObject, podré modificar las variables seleccionando el GameObject desde el panel Inspector.</p>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229980929) ?>
	</div>
</div>



<h3>Concatenaciones</h3>
<div class="row">
	<div class="col-md-10">
	<pre><code>public class Concatenaciones : MonoBehaviour {

string v1 = "Buenos días ";
string v2 = "Pablo";

void Start () {
	Debug.Log (v1 + v2);
}
}
</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229981094) ?>
	</div>
</div>



<h4>Operaciones aritméticas</h4>
<div class="row">
	<div class="col-md-10">
	<pre><code>public class OperacionesAritmeticas : MonoBehaviour {

int a = 6;
int b = 8;

void Start () {
	Debug.Log (a + b + "suma");
	Debug.Log (a - b + "resta");
	Debug.Log (a / b + "division");
	Debug.Log (a * b + "multiplicacion");
	Debug.Log (a % b + "resto");
	Debug.Log (++a + "incremento");
	Debug.Log (--a + "decremento");
}

}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229981107) ?>
	</div>
</div>


<h4>Condicionales</h4>
<div class="row">
	<div class="col-md-10">
	<pre><code>public class Condicionales : MonoBehaviour {

public int velocidadCoche = 0;

void Start () {

}

void Update () {
	if(velocidadCoche > 40){
		Debug.Log ("Vas muy rápido");	
	}else if(velocidadCoche < 38){
		Debug.Log ("Vas muy lento");
	}else{
		Debug.Log (velocidadCoche);
	}
	velocidadCoche++;
}

<span class="green">/*
a > b
a < b
a >= b
a <= b
a == b
a != b
a > b &amp;&amp; a > 3
a > b || a > 3
*/</span>
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229981500) ?>
	</div>
</div>


<h3>Arrays</h3>

<div class="row">
	<div class="col-md-10">
	<p>No es posible cambiar dinámicamente su tamaño.</p>
<pre><code>public class Arrays : MonoBehaviour {

	string [] letras = new string[]{"a", "b", "c", "d", "e"};

	void Start () {
		Debug.Log (letras [2]);
	}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229981117) ?>
	</div>
</div>


<h4>Obtener un nuevo array con una posición eliminada</h4>
<pre><code>public static class Tools{
	public static T[] GetNewArrayRemovingAt&lt;T&gt;(this T[] source, int index){
		T[] dest = new T[source.Length - 1];
		if (index &gt; 0)
			Array.Copy(source, 0, dest, 0, index);

		if (index &lt; source.Length - 1)
			Array.Copy(source, index + 1, dest, index, source.Length - index - 1);
		return dest;
	}
}</code></pre>
<pre><code>miArray = miArray.GetNewArrayRemovingAt(indice);</code></pre>
<h3>Listas</h3>
<p>Es posible cambiar dinámicamente su tamaño.</p>
<pre><span class="bold">Ejemplo de creación de una lista de enteros</span><code>List&lt;int&gt; numeros = new List&lt;int&gt;(new int[]{ 1,2,3});
</code></pre>
<pre><span class="bold">Eliminamos el segundo elemento de la lista</span><code>numeros.RemoveAt(2);</code></pre>
<h3>Bucle for</h3>
<div class="row">
	<div class="col-md-10">
	<pre><code>public class Bucles : MonoBehaviour {

public int [] numeros = new int[6]{0, 1, 2, 3, 4, 5};

void Start () {
	for (int i = 0; i < numeros.Length; i++) {
		Debug.Log (numeros[i]);
	} 
}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229981900) ?>
	</div>
</div>



<h3>Bucle foreach</h3>
<div class="row">
	<div class="col-md-10">
	<pre><code>public class BucleForeach : MonoBehaviour {

string[] animales = { "perro", "gato", "elefante" };

void Start () {
	foreach(string animal in animales){
		Debug.Log(animal);
	}	
}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229981150) ?>
	</div>
</div>



<h3>Bucle doWhile</h3>

<div class="row">
	<div class="col-md-10">
	<pre><code>public class BucleDoWhile : MonoBehaviour {

string[] animales = { "perro", "gato", "elefante" };

void Start () {
	int i = 0;
	do{
		Debug.Log(animales[i]);
		i++;
	}while(i < animales.Length );		
}	
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229981205) ?>
	</div>
</div>


<h3>Switch Case</h3>
<div class="row">
	<div class="col-md-10">
	<pre><code>public class SwitchCase : MonoBehaviour {
	int caso = 1;

	void Start () {
		switch(caso){
			case 0:
				Debug.Log("aaaaaaaaa");
			break;
			case 1:
				Debug.Log ("bbbbbbbbb");
			break;
			default:
			break;
		}
	}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229982254) ?>
	</div>
</div>


<h3>Funciones</h3>
<div class="row">
	<div class="col-md-10">
	<pre><code>public class Funciones : MonoBehaviour {

void Start () {
	saludar ();
}

void saludar(){
	Debug.Log ("hola");
}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229982483) ?>
	</div>
</div>



<h3>Función con parámetros</h3>

<div class="row">
	<div class="col-md-10">
	<pre><code>public class FuncionConParametros : MonoBehaviour {

void Start () {
	saludar ("Juan");
}

void saludar (string nombre) {
	Debug.Log ("hola " + nombre);
}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229982507) ?>
	</div>
</div>


<h3>Función con parámetros y return</h3>
<div class="row">
	<div class="col-md-10">
	<pre><code>public class FuncionConReturn : MonoBehaviour {

void Start () {
	string saludo = saludar ("Juan");
	Debug.Log (saludo);
}

string saludar (string nombre) {
	string txt = "hola " + nombre;
	return txt;
}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229982700) ?>
	</div>
</div>



<h3>Programación orientada a objetos</h3>

<div class="row">
	<div class="col-md-6">
	
	<pre><code>public class Carretera : MonoBehaviour {

Coche miCoche;

void Start(){
	crearCoche ();
}
void crearCoche(){
	miCoche = new Coche ();
	miCoche.marca = "Ford";
	miCoche.cantidadRuedas = 4;
	miCoche.encenderMotor ();
	Debug.Log ("La marca de mi coche es " + miCoche.marca);
	Debug.Log ("Mi coche tiene " + miCoche.cantidadRuedas + " ruedas");
	apagarCoches ();
}

void apagarCoches(){
	miCoche.apagarMotor ();
}
}</code></pre>
	
	</div>
	<div class="col-md-6">
	
	<pre><code>public class Coche{
	public string marca;
	public int cantidadRuedas;

	public void encenderMotor (){
		Debug.Log ("El motor está encendido");
	}
	public void apagarMotor(){
		Debug.Log ("El motor está apagado");
	}
}</code></pre>
	</div>
</div>


<p>Las clases que heredan de MonoBehaviour nos permiten sobrecargar el método update.</p>
<?= getRes("video_premium",229982510) ?>
</div></article>

<article><div>
<h2 id="juego-2d">Conceptos para realización de juegos 2D</h2>
<p>Para cambiar entre vista 3D y 2D: Edit -> Proyect Settings -> Editor -> Default behaviour mode</p>
<p>Las luces no tienen efecto sobre los sprites, pero sí sobre las texturas.</p>
<p>Para que los objetos 3D se vean con colores nítidos, igual que ocurre con los sprites: Window -> Rendering -> lighting Settings -> Scene -> Enviroment Lighting:</p>
<ul>
	<li>Source: color</li>
	<li>Ambient Color: blanco puro</li>
</ul>
<p>Para ubicar los objetos en 2D, procuraremos usar siempre z = 0.</p>
<p>Para modificar un sprite, usaremos habitualmente la tecla <strong>t</strong>, para entrar en el modo rect tool. Si mantenemos shift presionado, deformaremos el objeto proporcionalmente. Si mantenemos alt presionado, lo haremos desde el centro del objeto.</p>
<h3 id="inspector_sprites">Inspector de Sprites</h3>
<h4>Advanced</h4>
<p>Filter mode: Bilinear -> eso hace que los bordes del sprites sean nítidos, en lugar de emborronarse al juntarse con la escena.</p>
<h3 id="tamano_assets">Tamaño de los assets</h3>
<p>Unity proceará mucho mejor los assets cuyo tamaño corresponde a una potencia de de 2. En el siguiente ejemplo usamos un asset 2048x2048.</p>
<p>Al seleccionar un Asset en Unity, en el panel inspector, podremos ver un previo de la foto junto con su tamaño y la palabra NPOT, que significa que cumple la regla de que el asset tiene un tamaño que es potencia de 2.</p>
</div></article>

<article><div>
<h2 id="acceder-componentes-desde-codigo">Acceder a componentes desde código</h2>
<h3 id="acceder-componentes-propio-objeto">Acceder a componentes del propio objeto</h3>

<div class="row">
	<div class="col-md-10">
	<pre><code>public class Codigo : MonoBehaviour{
	private Transform tr;

	void Start(){
		//GetComponent es un m&eacute;todo del objeto impl&iacute;cito gameObject
		tr = GetComponent&lt;Transform&gt;();

		// Es posible acceder directamente al componente transform de un objeto de la siguiente forma:
		tr = transform;

		Debug.Log(tr.position.x);
	}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes('recurso','ex/acceder-a-componentes-1.zip', 'Descargar ejemplo acceso a componentes') ?>
	</div>
</div>


<h3>Acceder a componentes de otro objeto</h3>
<pre><code>public class Codigo : MonoBehaviour
{
    private Transform tr;

    void Start()
    {
        GameObject go = GameObject.Find("Cube");
        Transform tr = go.transform;
        Debug.Log(tr.position.x);
    }
}</code></pre>
<p>El método <span class="bold">Find</span> sólo accede al primer nivel de hijos de un elemento. Si queremos acceder recursivamente a los sucesivos niveles de hijos de un lemento podemos usar una función recursiva.</p>
<pre><code>public static Transform RecursiveFindChild(this Transform padre, string nombreABuscar){

        for (int i = 0; i &lt; padre.childCount; i++){
			if (padre.GetChild(i).name == nombreABuscar){
                return padre.GetChild(i);
            }else if (padre.childCount &gt; 0){
                Transform hijoEncontrado = RecursiveFindChildAux(padre.GetChild(i), nombreABuscar);

                if (hijoEncontrado != null){
                    return hijoEncontrado;
                }
            }
        }
        Debug.LogError(&quot;No se encuentra este objeto como hijo: &quot; + nombreABuscar);
        return null;
    }

    static Transform RecursiveFindChildAux(this Transform padre, string nombreABuscar){

        for (int i = 0; i &lt; padre.childCount; i++){
            if (padre.GetChild(i).name == nombreABuscar){
                return padre.GetChild(i);
            }else if (padre.childCount &gt; 0){
                Transform hijoEncontrado = RecursiveFindChildAux(padre.GetChild(i), nombreABuscar);

                if (hijoEncontrado != null){
                    return hijoEncontrado;
                }
            }
        }
        return null;
    }</code></pre>

<pre><span class="bold">Ejemplo de uso</span><code>objeto.transform.RecursiveFindChild("numero")</code></pre>
<?= getRes('recurso','ex/acceder-a-componentes-2.zip', 'Descargar ejemplo acceso a componentes 2') ?>
</div></article>

<article><div>
<h2 id="uso-del-transform">Uso del transform</h2>
<div class="row">
	<div class="col-md-10">
	<pre><code>void Update () {
	miTransform.Translate (Vector3.right * velocidad * Time.deltaTime);
	miTransform.Rotate (Vector3.up * velocidadRotacion * Time.deltaTime);
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("recurso","proyectos/Uso de transform.zip","Descargar ejemplo de uso de transform") ?>
	</div>
</div>



</div></article>

<article><div>
<h2 id="ui">User Interface</h2>


<div class="row">
	<div class="col-md-10">
	<ol>
		<li>Creamos un nuevo proyecto 2D.</li>
		<li>Panel jerarquía -> botón derecho -> UI -> Button. Cada vez que añadimos un UI a escena estará anidado bajo un único GameObject Canvas principal.</li>
	</ol>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229977981) ?>
	</div>
</div>

	
	<h3 id="componentesCanvas">Componentes del canvas</h3>
	<h4>Canvas</h4>
		<p>En el panel de jerarquías definiremos que elementos de la UI se verán por encima (lo que esté más arriba se verá por encima).</p>
			<h4 id="rectTransform">Rect Transform</h4>
		<p>Es un componente de todos los objetos UI.</p>
		<p>El punto de anclaje de un rect transform (una cruceta compuesta de cuatro aspas independientes) determina respecto a qué puntos va a estar ubicado.</p>
		<p>Puedo separar las aspas del punto de anclaje para definir el tamaño porcentual de la pieza respecto del canvas.</p>
		<p>Pulsando en el icono cuadrado que se muestra en el panel de jerarquías puedo reubicar automáticamente los puntos de anclaje.</p>
	<p>Propiedad <strong>Render Mode</strong>:
		<ul>
			<li><strong>Screen Space - Overlay</strong>: hace que el canvas se adapte a todo el tamaño de la pantalla.</li>
			<li><strong>Screen Space - Camera</strong>: hace que el canvas se adapte a una cámara concreta. De esta forma, podremos usar varios canvas</li>
			<li><span class="bold">World Space</span>. Me permite integrar el canvas en el entorno de la escena (el mundo que estamos creando).</li>
		</ul>
		<h4>Canvas Scaller</h4>
		<p>Propiedad UI <strong>Scale Mode</strong>, que define como se van a comportar los componentes que hay dentro del canvas:</p>
		<ul>
			<li><strong>Constant Pixel Size</strong>: los componentes tendrán un tamaño fijo.</li>
			<li><strong>Match Width or Height</strong>: los componentes se deformarán con la pantalla, en función de su ancho o alto. </li>
		</ul>
		<h4>Captura de eventos</h4>
		<p>Al añadir un canvas a la pantalla, se crea un GameObject en la jerarquía llamado EventSystem, que es el que captura los eventos.</p>
		<h3 id="ejercicio_botones">Ejercicios Canvas</h3>
		<ol>
			<li><h4>Botones</h4>		<p>Poner cuatro botones en pantalla, ocupando cada uno un cuarto de la misma. Simplemente crearemos un botón, lo modificaremos para que ocupe un cuarto de la pantalla y lo duplicaremos hasta obtener los cuatro botones.</p>
		<p>Tener en cuenta que si queremos lograr el efecto <span class="i">snap</span> en un elemento de canvas, debemos modificarlo arrastrando sus esquinas, en lugar de simplemente desplazarlo.</p>
		<p>El botón será verde al pasar el cursor por encima y rojo al ser pulsado.</p>

		<div class="row">
			<div class="col-md-10">
			<img class="img-fluid" src="imgs/botones-user-interface-unity3d.png" alt="botones en la user interface de unity3d">
			</div>
			<div class="col-md-2">
			<?= getRes("recurso","ex/botones.zip","Descargar ejercicio botones") ?>
			</div>
		</div>
		
		
</li>
<li>	<h4 id="uipaneles">Ejercicio: UI Paneles</h4>
		
<div class="row">
	<div class="col-md-10">
	<p>Los paneles sirven para definir grupos de Game Objects. Es posible definir el tamaño de lo que contienen desde el propio panel.</p>
		<ol>
			<li>Crear un panel con cuatro botones dentro y probar a asignarle diferentes tipos de layouts. Un layout es un componente:
				<ul>
					<li>Horizontal Layout</li>
					<li>Vertical Layout</li>
					<li>Grid Layout</li>
				</ul>
			. Ajustar las opciones del layout para que los botones ocupen el 100% del mismo.</li>
			<li>Tras haber realizado el paso anterior, probar a añadir más botones el layout y ver que pasa.</li>
		</ol>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",229978130) ?>
	</div>
</div>

		<div class="row">
			<div class="col-md-8">
			<img class="img-fluid" src="imgs/layouts.png" alt="hacer layouts con la user interface de unity">
			</div>
			<div class="col-md-4">
			<div class="centraditos">
		<?= getRes("recurso","proyectos/Paneles.zip","Ver ejemplo de paneles") ?>
		<?= getRes("video_premium",229977179) ?>
</div>
			</div>
		</div>
		
</li>
<li><h4 id="ejercicio_piano">Ejercicio - Hacer un piano</h4>
		
	
	<div class="row">
		<div class="col-md-10">
		<ol>
			<li>Creamos un nuevo proyecto 2D.</li>
			<li>Creamos una carpeta "sounds", e importamos en ella los sonidos del piano.</li>
			<li>Creo un panel con layout horizontal. Podemos eliminarle el componente Image (no tendrá una imagen de fondo).</li>
			<li>Añado a este panel un botón al que le elimino el texto.</li>
			<li>Añado al botón un componente de tipo <strong>audio source</strong>, que vinculo con el sonido DO.</li>
			<li>Modificando el componente <strong>button</strong> del botón, hacer que al pulsar sobre él se reproduzca el sonido ( play() ) de su audioSource.</li>
			<li>Duplico 6 teclas más dentro del panel (re, mi, fa, sol, la, si) y les asigno a todas su correspondiente audio source.</li>
			<li>Añadimos un nuevo panel para los tonos sostenidos. Podemos eliminarle el componente Image (no tendrá una imagen de fondo). </li>
			<li>Añadimos los botones para los sostenidos a este último panel. Tendrán color negro. Ajustamos su posición y tamaño manualmente.</li>
		</ol>
		</div>
		<div class="col-md-2">
			<div class="centraditos">
			<?= getRes("recurso","sounds/piano.zip","sonidos del piano") ?>
			<?= getRes("video_premium",229978301) ?>
			</div>
		</div>
	</div>

<div class="row">
	<div class="col-md-8">
	<img class="img-fluid" src="imgs/piano-con-unity3d.png" alt="piano con unity3d">
	</div>
	<div class="col-md-4">
	<div class="centraditos">
		<?= getRes('recurso','ex/piano.zip', 'Descargar ejercicio Piano') ?>
		<?= getRes("video_premium",229978314) ?>
		</div>
	</div>
</div>



</li>
<li><h4>Vincular un Input de texto a un GameObject y recuperar su valor.</h4>
<div class="row">
	<div class="col-md-4">
	<img class="img-fluid" src="imgs/recoger-valor-UI.png" alt="recoger valor de la UI con Unity 3D">
	</div>
	<div class="col-md-2">
	<?= getRes('recurso','ex/recoger-valor-ui.zip', 'Descargar ejercicio UI') ?>
	</div>
</div>


<ol>
	<li>Ubicamos en pantalla un <span class="i">UI -> Input Field</span>, un <span class="i">UI -> Button</span> y un <span class="i">UI -> Text</span>.</li>
	<li>Vamos a trabajar usando el tamaño de la cámara para el canvas. Para ello:
			<ol>
				<li>Seleccionamos el canvas en el panel de jerarquía.</li>
				<li>Componente Canvas -> Render mode: Screen World Space</li>
				<li>Vamos a ajustar el canvas a la escena. Para ello:
					<ol>
						<li>Lo desplazamos: <span class="i">x:0, y:0, z:0</span>.</li>
						<li>Lo escalamos (es importante no cambiar su width y height o se verá pixelado). <span class="i">x:0.4, y:0.4, z:0.4</span>.</li>
</li>
					</ol>
			</ol>
	</li>


	<li>Creamos un <span class="i">GameObject</span> de tipo <span class="i">Empty</span> y le vinculamos el siguiente código: <pre><code>using UnityEngine;
using UnityEngine.UI; // Si estás programando elementos del camvas, no te olvides de importar esta librería

public class GameController : MonoBehaviour
{
    public void mostrarValor()
    {
        string valor = GameObject.Find("TextoDelInput").GetComponent<Text>().text;
        GameObject.Find("Resultado").GetComponent<Text>().text = valor;
    }

}</code></pre></li>

<li>Seleccionamos el Button -> Componente Button -> On Click -> Seleccionamos en la pestaña escena que se despliega al pulsar el circulito el empty con el <span class="i">script</span> asociado -> Seleccionamos la función <span class="i">mostrarValor()</span>.</li>
</ol>
</li>
<li><h4>Acierta número secreto</h4>

<div class="row">
	<div class="col-md-4">
	<img src="imgs/acierta-numero-secreto-con-unity3d.png" alt="acierta número secreto con unity 3d">
	</div>
	<div class="col-md-2">
	<?= getRes('recurso','ex/acierta-numero-secreto.zip', 'Descargar ejercicio acierta número secreto') ?>
	</div>
</div>



<p>Debemos genarar un número secreto cuando se inicialice el juego. Para ello, declararemos una variable global <span class="i">n</span> y la inicializaremos dentro del método <span class="i">Start()</span>:</p>
<pre><code>void Start(){
	n = Random.Range(1, 3);
	Debug.Log(n);
}</code></pre>
<p>Debemos comparar el valor introducido por el usuario con el almacenado en la variable n. Como el número introducido por el usuario será de tipo texto, y <span class="i">n</span> es de tipo numérico, pasaremos el valor de <span class="i">n</span> a texto en la comparación:</p>
<pre><code>if( ""+n == valor)</code></pre>
</li>
<li><h4 id="puzzle-canvas">Hacer un puzzle usando el Canvas de Unity 3D</h4>

	<h5>Creamos la interfaz</h5>
	<ol>
		<li>Creamos un canvas. Es fundamental que tenga el componente <span class="i">Graphic Raycaster</span> asociado.</li>
		<li>Definimos la propiedad <span>Render mode</span> de su componente <span class="i">Canvas</span> con valor <span class="i">Screen Space - Overlay</span>.</li>
		<li>Añadimos un panel al canvas.</li>
		<li>Le añadimos un <span class="i">layout group</span> de tipo <span class="i">grid</span>. Una vez ordenados los objetos que contendrá, habría que desactivarlo. De lo contrario, cuando arrastremos un objeto, volverá a la posición inicial.</li>
		<li>Añadimos 8 imágenes de la UI al panel.</li>
	</ol>

	<div class="row">
		<div class="col-md-10">
		<img class="img-fluid" src="imgs/puzzle-con-canvas/puzzle-con-canvas.png" alt="puzzle con canvas">
		</div>
		<div class="col-md-2">
		<?= getRes('recurso','ex/puzle-con-canvas.zip', 'Descargar puzzle con canvas') ?>
		</div>
	</div>


<div class="row">
	<div class="col-md-6">
	<h5 id="arrastrarPiezas">Arrastrar piezas</h5>
	<pre><span class="bold">Pieza.cs</span><code><span class="red bold">using UnityEngine.EventSystems;</span>
public class Pieza : MonoBehaviour<span class="red bold">,IDragHandler</span>{
	public void OnDrag(PointerEventData eventData){
		transform.position = Input.mousePosition;
	}
}</code></pre>	
	</div>
	<div class="col-md-6">
	<h5 id="laPiezaRegresa">Cuando suelto la pieza, esta vuelve a su posición original</h5>
<pre><span class="bold">Pieza.cs</span><code><span class="red bold">using UnityEngine.EventSystems;</span>

public class Pieza : MonoBehaviour, <span class="red bold">IDragHandler, IEndDragHandler</span>{
	Vector3 startPosition;

	public void OnDrag(PointerEventData eventData){
		transform.position = Input.mousePosition;
	}

	public void OnEndDrag(PointerEventData eventData){
		Debug.Log ("Termina");
		transform.position = startPosition;
	}
}</code></pre>
	</div>
</div>
	


<h5>OnBeginDrag</h5>
<p>Aunque para resolver este ejercicio no sea necesario, tener en cuenta que también podemos detonar un evento mientras estamos arrastrando la pieza:</p>
<pre><code>public class Pieza : MonoBehaviour, <span class="red bold">IBeginDragHandler</span>{

public void OnBeginDrag(PointerEventData eventData){
	Debug.Log ("Empieza");
	startPosition = transform.position;
}</code></pre>
<h3 id="desordenarPiezas">Desordenar piezas</h3>
<p>Si el panel dónde están las piezas tiene un horizontal o un vertical layout, habrá que desactivarlo para poder desordenar las piezas.</p>
<pre><span class="bold">Pieza.cs</span><code>transform.position = new Vector2(Random.Range(0, Screen.width), Random.Range(0, Screen.height));</code></pre>
<h3 id="encajarPiezas">Encajar piezas</h3>
<p>Habrá que desmarcar la check Raycast Target del componente Image para poder clickar de los paneles para poder clickar sobre los botones que están debajo.</p>
<pre><code>public void OnEndDrag(PointerEventData eventData){
	Debug.Log ("suelta" + Vector3.Distance (transform.position, posIni) );
	if (Vector3.Distance (transform.position, posIni) <= margenError) {
		...
	}	
}</code></pre></li>
		</ol>
</div></article>

<article><div>
	<h2 id="elije-tu-propia-aventura">Elije tu propia aventura</h2>
		<p>Haremos click sobre zonas de la pantalla que nos llevarán al éxito o a la muerte.</p>

		<div class="row">
			<div class="col-md-6">
			<img class="img-fluid" src="imgs/flujo-juego-elige-tu-propia-aventura.png" alt="flujo juego elige tu propia aventura">
			</div>
			<div class="col-md-6">
			<div class="centraditos">
	<?= getRes('recurso','recursos/recursos-elije-tu-propia-aventura.zip', 'Descargar recurso') ?>
<?= getRes('recurso','ex/elije-tu-propia-aventura.zip', 'Descargar juego') ?>
</div>
			</div>
		</div>


<h4>Ajustar la imagen de fondo a la pantalla</h4>
<ol>
	<li>Creamos un nuevo Proyecto 2D. La cámara tendrá proyección Ortográfica.</li>
<li>Definimos la relación de aspecto correcta: Pestaña Game -> Desplegable de relación de aspecto -> 3:2</li>
	<li>Definimos un size para la main camera, de tal forma que abarque correctamente las dimensiones de la foto que vamos a insertar: Main Camera -> Size: 3.2</li>
	<li>Insertamos la foto arrastrándola y soltándola sobre la pantalla. No usaremos canvas.</li>
</ol>
<h4 id="detectar-pulsacion">Detectar la pulsación sobre un objeto</h4>
<ol>
	<li>Añadimos un GameObject de un cubo a la escena. Es imprescindible que para detectar la pulsación dicho GameObject tenga un BoxCollider.</li>
	<li>Vinculamos el siguiente script al GameObject:
<pre><code>using UnityEngine;

public class Nave : MonoBehaviour
{
    void OnMouseDown()
    {
        Debug.Log("Nave pulsada");
    }
}</code></pre>
	</li>
<li>Si no queremos que se vea el GameObject añadido, podemos eliminarle su componente <span class="bold">Mesh Renderer</span>.</li>
</ol>
<h4 id="cambiar-escena">Cambiar de escena</h4>
<pre><code>using UnityEngine.SceneManagement;
SceneManager.LoadScene ("Muerte");</code></pre>
<p>Para que funcione, las escenas deben haber sido añadidas en 'File -> Build Settings -> Scenes in Build'</p>
</div></article>

<article><div>
<h2 id="sprites">Sprites</h2>
		<?= getRes("video_premium",229978353) ?>
		<h3 id="spritesmultiples">Sprites múltiples</h3>
		<p>Para optimizar el rendimiento de la aplicación, en lugar de cargar una foto por cada imagen, es recomendable cargar una foto que contenga todas las imágenes necesarias. </p>
		<p>Todas las fotos que sean introducidas en el panel de proyecto en modo 2D son interpretadas como sprites. Si son introducidas en modo 3D son interpretadas como texturas. Una flechita al lado de la foto indica que es un sprite.</p>
		<p>Si quiero usar sprites en un entorno 3D: selecciono la imagen -> Texture Type -> Sprite (2D and UI)</p>
		<p>Añadir a escena un con su correspondiente animación.</p>
		<a target="_blank" href="imgs/tux-spritesheet.png" alt="tux spritesheet">Descargar sprite Tux</a>
		<ol>
			<li>Seleccionaremos el sprite en el panel de proyecto.</li>
			<li>Seleccionaremos <strong>Sprite Mode</strong> =  <strong>multiple</strong> en el panel inspector.</li>
			<li>Pulsaremos el botón de <strong>apply</strong> en el panel inspector.</li>
			<li>Pulsaremos el botón de <strong>Sprite Editor</strong> en el panel inspector. A partir de aquí tenemos dos opciones: 
				<ul>
					<li>Hacer rectángulos manualmente de los sprites que quiero seleccionar</li>
					<li>Hacer un recortado <strong>automático</strong>, que en el caso de fotografías con transparencia se adaptará a los límites de la foto.</li>
				</ul></li>
				<li>A partir de este momento, podré arrastrar desde el panel de proyecto cada uno de los sprites recortados que he realizado, a la escena.</li>
			</ol>
			<p>Cuando seleccionamos varios sprites y los añadimos a la escena, Unity interpreta que estos sprites forman una animación.</p>
			<h3 id="superposicionSprites">Ejercicio: superposición de sprites</h3>

			<div class="row">
				<div class="col-md-8">
				<p>Añadir al ejercicio anterior un segundo sprite e invertir el orden de visualización: el sprite que estaba por encima debe ubicarse por debajo.</p>

				</div>
				<div class="col-md-4">
					<div class="centraditos">
					<?= getRes("video_premium",229978703) ?>
					<?= getRes("recurso","imgs/droid-spritesheet.png","Descargar sprite") ?>
					</div>
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-md-10">
				<p>Para gestionar esto iremos a: Panel inspector -> <strong>Sprite Renderer</strong>:</p>
			<ul>
				<li><strong>Sorting Layer</strong>: nos permite vincular un objeto a una capa. Los objetos vinculados a las capas que están por encima, se verán también por encima.</li>
				<li><strong>Order in Layer</strong>: Nos permite definir la ubicación del objeto dentro de una capa. Los objetos con números mayores se verán por encima dentro de dicha capaNos permite determinar que sprite se mostrará por encima.</li>
			</ul>
				</div>
				<div class="col-md-2">
				<?= getRes("video_premium",229978354) ?>
				</div>
			</div>


			
			<h3>Cargar un sprite dinámicamente a partir de su nombre</h3>
			<p>Lo mejor es crear dentro de la carpeta Assets una carpeta llamada <span class="black bold">Resources</span> (con R mayúscula). Ruta es una variable de tipo texto.</p>
			<pre><code>paneles [i].GetComponent&lt;Image&gt; ().sprite = Resources.Load&lt;Sprite&gt;(ruta-sin-poner-la-carpeta-Resources-y-sin-ponerle-la-extension-a-la-foto);</code></pre>
			</div></article>

			<article><div>
		<h2 id="acierta-imagen">Acierta imagen</h2>
	<p>Dadas 3 imágenes alineadas horizontalmente en un panel inferior y una imagen superior centrada, si pulsamos en una imagen del panel que coincide con la superior, se disparará una traza.</p>
	<div class="row">
		<div class="col-md-10">
		<img class="img-fluid" src="imgs/acierta-imagen/acierta-imagen.png" alt="imagen del juego acierta imagen">
		</div>
		<div class="col-md-2">
		<div class="centraditos">
<?= getRes('recurso','recursos/recursos-acierta-imagen.zip', 'Descargar recursos del juego') ?>
<?= getRes('recurso','ex/acierta-imagen.zip', 'Descargar el juego') ?>
</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
		<h3>Cargamos la imagen de fondo</h3>
<img class="img-fluid" src="imgs/acierta-imagen/fondo.jpg" alt="imagen de fondo del juego acierta imagen">
		</div>
		<div class="col-md-6">
		<h3>Cargamos tres imágenes abajo y una posible solución arriba</h3>
<img class="img-fluid" src="imgs/acierta-imagen/imagen-coincide-unity.png" alt="unity 3d la imagen coincide">
		</div>
	</div>

		

<h3>Detectar pulsación sobre las imágenes de abajo</h3>
<p>Volvemos a repetir los <a href="#detectar-pulsacion">pasos para escuchar la pulsación sobre un objeto en escena</a>.</p>
<h3>Comprobar si el sprite pulsado coincide con el sprite solución</h3>
<pre><code>public void OnMouseDown(){
	Sprite caraPulsada = GetComponent&lt;SpriteRenderer&gt;().sprite;
	Sprite caraSolucion = GameObject.Find(&quot;caraSUP&quot;).GetComponent&lt;SpriteRenderer&gt;().sprite;
	if(caraPulsada == caraSolucion){
		Debug.Log(&quot;coinciden&quot;);
	} else	{
		Debug.Log(&quot;no coinciden&quot;);
	}
}</code></pre>
<h3>Generar sprites aleatorios arriba y abajo</h3>
<pre><code>public class GameController : MonoBehaviour{
	public Sprite[] caras; 

	void Start(){
		nuevaPartida();
	}

	void NuevaPartida(){
		int c1 = Random.Range(0, 6);
		GameObject.Find(&quot;cara1&quot;).GetComponent&lt;SpriteRenderer&gt;().sprite = caras[p1];

		...

		//De momento la im&aacute;gen superior coincidir&aacute; con la primera de las de abajo
		GameObject.Find(&quot;caraSUP&quot;).GetComponent&lt;SpriteRenderer&gt;().sprite = caras[p1];
	}
}</code></pre>
<h3>La solución ya no es siempre el primero, es aleatoria</h3>
<pre><code>
void NuevaPartida(){
	...
	int[] carasPosibles = new int[3] { c1, c2, c3 };
	GameObject.Find(&quot;caraSUP&quot;).GetComponent&lt;SpriteRenderer&gt;().sprite = caras[carasPosibles[Random.Range(0, 3)]];
}
</code></pre>
<h3>Las posibles soluciones no deben estar repetidas</h3>
<pre><code>while(c2 == c1) c2 = Random.Range (0, 6);
while(c3 == c1 || c3 == c2) c3 = Random.Range (0, 6);</code></pre>
<h3>Muestra un marcador</h3>

<div class="row">
	<div class="col-md-6">
	<p>Utilizaremos un objeto 3D que nos permitirá no recurrir al canvas.</p>
<p>Insertaremos dos objetos, uno para la palabra fija <span class="italic">pts</span> y otra para el marcador en si misma.</p>

	</div>
	<div class="col-md-6">
	<img class="img-fluid" src="imgs/acierta-imagen/marcador.png" alt="marcador con unity">
	</div>
</div>


<h4>TextMeshPro</h4>

<div class="row">
	<div class="col-md-4">
	<p>Esta entidad nos permite introducir texto en pantalla.</p>
<p>3D Object -> TextMesh Pro - Text</p>

<p>En el siguiente pantallazo...</p>

	</div>
	<div class="col-md-8">
	<img class="img-fluid" src="./imgs/textmeshpro.png" alt="Textmeshpro">
	</div>
</div>

<ul>
	<li>El cuadrado verde es el boxcollider del TextMeshPro.</li>
	<li>El cuadrado con vértices azules delimita los límites del area de margen que puedes cambiar en el propio componente en <span class="bold">Extra Settings -> Margins</span></li>
	<li>El cuadrado amarillo es el area del texto.</li>
</ul>

<p>A veces el icono [T] del TextMeshPro molesta un poco en pantalla. Para desactivarlo, podemos ir a Desplegable Gizmos -> TextMeshPro -> Pulsamos sobre la foto del icono [T].</p>

<h3>Cargar una tipografía</h3>

<p>Menú window -> TextMeshPro -> Font Asset Creator -> Arrastramos y soltamos la fuente en Source Font File -> Generate Font Atlas -> save -> El fichero creado es el que puedo arrastar y soltar en el inspector para poder usarlo.</p>
<p>Cuando dentro del inspector, editmos el material de la fuente, realmente estaremos editando el material de todos los casos en los que se esté usando esta fuente.</p>
<h3>Llamar a una función de una clase desde otra clase</h3>
<pre><code>GameController gc;

void Start(){
	gc = GameObject.Find(&quot;GameController&quot;).GetComponent&lt;GameController&gt;();
}
</code></pre>
<h3>Aumentar marcador cada vez que acertamos</h3>
<p>Definiremos una nueva variable privada que incrementaremos cada vez que el jugador acierte.</p>
<pre><span class="bold">GameController.cs</span><code>public int marcador;</code></pre>
<pre><span class="bold">CaraAbajo.cs</span><code>GameController gc;
void Start(){
	gc = GameObject.Find(&quot;GameController&quot;).GetComponent&lt;GameController&gt;();
}

void OnMouseDown(){
	...
	gc.marcador++;
	GameObject.Find(&quot;marcador&quot;).GetComponent &lt;TextMeshPro&gt; ().text = &quot;&quot; + gc.marcador;</code></pre>
<h3>Volver a cargar las imágenes en cada turno</h3>
<p>Haremos esto para volver a pintar imágenes cada vez que acertamos.</p>
<p>Para volver a pintar las imágenes en pantalla cuando acertemos, debemos llamar desde la clase <span class="italic">CaraAbajo</span> a la clase <span class="italic">GameController</span>.</p>

<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">CaraAbajo.cs</span><code>
...

gc.nuevaPartida();</code></pre>
	</div>
	<div class="col-md-6">
	<pre><span class="bold">GameController.cs</span><code><span class="bold">public void</span> nuevaPartida(){
	...
}</code></pre>
	</div>
</div>


<h3>Temporizador</h3>
<p>El siguiente código se encarga de llamar a una función recursivamente cada segundo:</p>
<pre><code>void temporizador(){
	Debug.Log("Llamada al código");
	Invoke("temporizador", 1.0f);
}</code></pre>
<p>Utilizando el código anterior, decrementa el contador de tiempo.</p>
<h3>Perder el juego</h3>
<p>Añadir la programación necesaria para que si se agota el tiempo o el usuario no escoge la solución correcta, <a href="#cambiar-escena">se lance una nueva escena</a> indicando que el jugador ha perdido.</p></div></article>

<article><div>
	<h2 id="fall-down-game">Fall Down Game</h2>
	
	<h3>Ponemos el fondo de pantalla</h3>

	<div class="row">
		<div class="col-md-10">
		<img class="img-fluid" src="imgs/fall-down-game/fondo.jpg" alt="fall down game con unity 3D">
		</div>
		<div class="col-md-2">
		<div class="centraditos">
<?= getRes('recurso','recursos/recursos-fall-down-game.zip', 'Descargar recurso') ?>
<?= getRes('recurso','ex/fall-down-game.zip', 'Descargar juego') ?>
</div>
		</div>
	</div>

	<h3>Un misil cae por gravedad</h3>
	<ol>
		<li>Añadimos el sprite de un misil a la pantalla.</li>
		<li>Le añadimos al misil un componente de tipo RigidBody 2D.</li>
	</ol>
<h4>Tipos de RigidBody</h4>
<ul>
	<li><span class="bold">Dynamic</span>: El cuerpo es afectado por las fuerzas que interactúan con él.</li>
	<li><span class="bold">Kinematic</span>: El cuerpo no es afectado por las fuerzas que interactúan con él.</li>
	<li><span class="bold">Static</span>: Ideal para plataformas estáticas.</li>
</ul>
	<h3>Detectamos la pulsación sobre el misil</h3>
<p>Recuerda como lo hiciste en el juego de <span class="i">Elige tu propia aventura</span>:</p>
<pre><code>using UnityEngine;

public class Nave : MonoBehaviour
{
    void OnMouseDown()
    {
        Debug.Log("Nave pulsada");
    }
}</code></pre>
	<h3>Animación de explotar</h3>
<h4>Panel animation</h4>
			<p>Muestra las animaciones vinculadas con el objeto activo.</p>
			<p>Puedo asignar una animación a un objeto, arrastrando la animación sobre el objeto en el panel de jerarquía o sobre el inspector.</p>
			<p>Puedo reutilizar animaciones de desplazamiento, rotación, escala y, para varios objetos. Pero las animaciones consistentes en sprites animados serán solo para un único objeto. De lo contrario, si a un pingüino le pongo una aimación de sprites de un perro andando, el pingüino se convertirá en perro.</p>
			<p>Si no queremos que una animación se repita indefinidamente (comportamiento por defecto), seleccionaremos la animación en el panel de proyecto y desmarcaremos la check "loop" en el panel inspector.</p>
			<h5 id="ejercicioAnimar">Animar frame a frame</h5>
			<p>Pasos para hacer una animación.</p>
			<ol>
				<li>Debemos preparar un sprite dando los siguientes pasos en su panel inspector:
					<ol>
						<li>Texture Type: Sprite (2D and UI)</li>
						<li>Sprite Mode: Multiple</li>
						<li>Sprite Editor
							<ol>
								<li>SI -> Slice
										<ul>
											<li>Type: Automatic</li>
											<li>Slice</li>
										</ul>
								</li>
							</ol>
						</li>
					</ol>
				</li>
								<li>Seleccionamos en el panel de jerarquía el Sprite sobre el que queremos crear la animación -> Panel animation -> create new clip.
<ul>
	<li>Creamos la animación <span class="italic">reposo</span>. Esta animación tiene una única que imágen que es el sprite del misil</li>
	<li>Creamos la animación <span class="italic">explosión</span>. Esta animación tiene varios sprites, correspondientes a los estados de la explosión. 
<ul>
	<li>Habrá que ir añadiendo cada uno de estos sprites de uno en uno a la línea de tiempo del panel animation.</li>
	<li>También podemos seleccionar todos los sprites de la animación (<span class="bold">manteniendo shift pulsado mientras seleccionamos</span>) y arrastrarlos de una sola vez a la línea de tiempo.</li>
</ul>
	 </li>
</ul>
								</li>

			</ol>
			<p>Por defecto Unity reproduce las animaciones en bucle. Para evitar esto, selecciono la animación creada en el panel de proyecto y desmarco la check <strong>Loop Time</strong>.</p>
			<h4 id="panel-animator">Panel Animator</h4>
			<p>Este panel gestiona la vinculación entre las animaciones y los objetos.</p>
			<p>Si un objeto tiene errores en su panel animator, no se reproducirán las animaciones asociadas a él.</p>
			<p>Es posible unir las animaciones vinculadas a un objeto mediante flechas. A estas uniones las llamaremos transiciones.</p>
			<h5>Estado Entry</h5>
			<ul>
				<li><strong>Entry</strong> es el punto de partida de la animación.</li>
				<li>En muchos casos, el estado Entry va vinculado a un estado creado por nosotros llamado <strong>idle</strong>, que corresponde a una animación del objeto en reposo.</li> <li>Obligatoriamente, el estado <strong>Entry</strong> debe estar unido con algún otro estado.</li>
				<li>Cuando una animación llega al <strong>exit</strong>, regresa al estado <strong>Entry</strong>.</li>
			</ul>
<h5>Detonar la animación mediante código:</h5>
<pre><code>GetComponent&lt;Animator&gt;().Play(&quot;explosion&quot;);</code></pre>
<img src="imgs/panel-animator.png" alt="panel animator unity 3d">
<h3>Detener la caída por gravedad del objeto</h3>
<pre><code>GetComponent&lt;Rigidbody2D&gt;().simulated = false;</code></pre>
<h3>Destruir objeto cuando la animación ha terminado</h3>
<pre><code>public AnimationClip animationClip;
...
float duracionExplosion = animationClip.length;
Destroy(this.gameObject, duracionExplosion);</code></pre>

<h3>Generar un misil cada segundo</h3>
<p>Usaremos un código similar al tel temporizado del juego <span class="i">Acierta Imagen</span>.¿Recuerdas?</p>
<pre><code>void temporizador(){
	Debug.Log("Llamada al código");
	Invoke("temporizador", 1.0f);
}</code></pre>
</div></article>

<article><div>
<h2 id="poner_imagen_de_fondo">Poner una imagen de fondo</h2>
<p>Podemos hacerlo de varias formas:</p>
<ul>

<h3>Como imagen del canvas</span> (forma recomendada porque podremos controlar cómodamente el grado de repetición de la imágen de fondo)</h3>
<div class="row">

<div class="col-lg-9">

	<ol>
		<li>Botón derecho sobre el panel de jerarquía -> UI -> Image.</li>
		<li>Arrastro las esquinas para que ocupen todo el canvas.</li>
		<li>En el inspector: 
			<ul>
			<li>Seleccionamos el canvas que envuelve a la imagen: <ul>
					<li>Render mode: Screen Space - Camera</li>
					<li>Plane distance: ponemos un número suficientemente alto como para que el resto de objetos se situen por encima.</li>

					<li>Order in layer: -1</li>
					<li>Canvas Scaler ⟶ UI Scale Mode ⟶ Scale With Screen Size</li>

				</ul></li>
				<li>Seleccionamos la imagen recién añadida: Image type tiled.
					<ul>
					<li>Modificamos el rect transform de la imagen para anclarlo a las cuatro esquinas del canvas.</li>

					</ul>

				</li>
				
			</ul>	
		 </li>
</ol>

</div>

<div class="col-lg-3">

<img src="./imgs/redimensionar-canvas.png" alt="Redimensionar canvas en Unity 3D">
</div>
</div>


<h3>Como Objeto de imagen</span>: Arrastro la imagen. Se inserta como gameobject con un componente SpriteRenderer. Accedemos a su inspector:</h3>
<ol>

  <ul>
		<li>Draw Mode: Tiled.</li>
		<li>Cambio los parámetros del Size (la escala no).</li>
	</ul> 


	
</ul>
</div></article>
<article><div>
<h2 id="instanciar">Instanciar</h2>
<h3>Instanciar un GameObject y añadirle propiedades dinámicamente</h3>
<p>El siguiente ejemplo instancia una imagen en pantalla ubicada dentro de la carpeta <span class="bold">Resources</span>.</p>
<pre><code>public class SpriteGenerator : MonoBehaviour{
    public SpriteGenerator(int n){
        this.n = n;
        GameObject objetoContenedor = new GameObject("Nuevo objeto");
        SpriteRenderer spr = objetoContenedor.AddComponent<SpriteRenderer>();
        spr.sprite = Resources.Load<Sprite>("pieces/gafas");

    }
}</code></pre>
<h3>Instanciar un prefab</h3>
<h4>¿Qué es un prefab?</h4>
<p>Un prefab es un GameObject que puede agrupar a su vez varios GameObjects, Scripts, assets, etc y que está empaquetado y prepararado para ser reusado.</p>
<p>Técnicamente, un <span class="i">prefab</span> debe ser un único objeto, por lo que si quisieramos que el <span class="i">prefab</span> constase de varios objetos, deberíamos agruparlos en un <span class="i">empty</span>.</p>
<p>Para crear el prefab, lo arrastraremos del panel de jerarquía, donde lo hemos estado elaborando, hasta el panel de proyecto.</p>
		<p>Si tengo varias instancias de un prefab y modifico una de ellas, pulsando el botón apply en el panel inspector, estas modificaciones se aplicarán al resto de prefabs. Si no pulso aplicar, la modificación será únicamente para ese prefab.</p>
<p>Crearemos un prefab arrastrando el objeto deseado desde el <span class="italic">panel de jerarquía</span> hasta el <span class="italic">panel de proyecto</span>.</p>

<h4>Dos formas de instanciar un prefab</h4>
<ul>
<li>Crear una propiedad pública de tipo GameObject en un script vinculado a un objeto y arrastrar el prefab desde el panel de proyecto al panel de jerarquí en el que se encuentra dicha propiedad.
GameObject nuevoMisil = Instantiate(prefabMisil, new Vector2(2,2), Quaternion.identity);</code></pre></li>
<li>Almacenar el prefab en la carpeta Resources y utilizar su nombre para instanciarlo:
<pre><code>GameObject word1 = Instantiate(Resources.Load("RandomWord"), new Vector2(0.1f, 0.1f), Quaternion.identity) as GameObject;</code></pre>
</li>
</ul>


<h4>Coordenadas en jerarquías</h4>
<p>Cuando tenemos una jerarquía (al hacer un prefab, por ejemplo) en la que hay un padre no visual (un empty, por ejemplo) y uno o varios hijos que si se ven (un cubo, por ejemplo), intentamos siempre ubicar al padre el centro de los hijos.</p>
<ul>
	<li>Si sólo hay un hijo, este estará en sus coordenadas 0,0,0.</li>
	<li>Si hay varios hijos, deberían orbitar alrededor del punto 0,0,0 del padre.</li>
</ul>

<div class="row">
	<div class="col-md-4">
	<img class="w-100" src="./imgs/alinear-objetos-1.png" alt="Alinear objetos">
	</div>
	<div class="col-md-4">
	<img class="w-100" src="./imgs/alinear-objetos-2.png" alt="Alinear objetos">
	</div>
	<div class="col-md-4">
	<img class="w-100" src="./imgs/alinear-objetos-3.png" alt="Alinear objetos">
	</div>
</div>

<h4>Instanciar un misil en una posición horizontal aleatoria</h4>
<pre><code>int pos = Random.Range(-4, 4);
GameObject nuevoMisil = Instantiate(prefabMisil, new Vector2(pos,4), Quaternion.identity);</code></pre>
<h4 id="detectar-colisiones">Detectar colisiones</h4>
<p>El jugador perderá cuando un misil desaparezca por la parte inferior de la pantalla.</p>
<p>Para detectar esto:</p>
<ol>
	<li>Ponemos un cubo en la parte inferior de la pantalla y lo estiramos para que ocupe toda su longitud.</li>
	<li>Asignamos <span class="italic">Box Collider 2D al cubo</span>, en lugar del <span class="italic">Box Collider</span> que tenía. Para detectar la colisión entre dos entidades, estas deben tener el mismo tipo de Box Collider.</li>
	<li>En el componente <span class="italic">Box Collider 2D</span> del GameObject <span class="italic">AreaInferior</span>, activamos la check isTrigger.</li>
	<li>Vinculamos el siguiente <span class="italic">Script</span> al cubo inferior: 
<div class="row">
	<div class="col-md-8">
	<img src="imgs/fall-down-game/unity-colision.png" alt="">
	</div>
	<div class="col-md-4">
	<pre><code>public class AreaInferior : MonoBehaviour{
	void OnTriggerEnter2D(Collider2D col){
		Debug.Log("colision");
	}
}</code></pre>

	</div>
</div>
</li>
</ol>

<h5>Diferencia entre marcar o no marcar la check isTrigger de un BoxCollider.</h5>
<ul>
	<li>Cuando la check está marcada, los objetos que colisionan se superponen durante la colisión, pasando uno por encima de otro. El código que usamos para gestionar estas colisiones es similar a este: <pre><code>void OnTriggerEnter2D(Collider2D col){
}</code></pre></li>
	<li>Cuando la check no está marcada, los objetos que colisionan impactan entre sí. <pre><code>void OnCollisionEnter2D(Collision2D col){
}</code></pre></li>
</ul>
<h4>Perder vidas</h4>
<p>Cada vez que se produzca la colisión anterior, el usuario perderá una vida.</p>
<pre><code>public class AreaInferior : MonoBehaviour
{
    private int marcador = 3;
    public Sprite corazonNegro;
    void OnCollisionEnter2D(Collision2D col)
    {
        marcador--;

        if(marcador == 2)
        {
            <span class="blue bold">GameObject.Find(&quot;vida3&quot;).GetComponent&lt;SpriteRenderer&gt;().sprite = corazonNegro;</span></code></pre>
<img src="imgs/corazon-negro.png" alt="corazon negro">
            <h4>Perder el juego</h4>
            <p>Si el marcador de vidas llegase a cero, el jugador habrá perdido la partida y lanzaremos la escena correspondiente.</p>
<p>Te recuerdo el código para cambiar de escena que ya vimos en el juego de <span class="i">Elige tu propia aventura</span>.</p>
<pre><code>using UnityEngine.SceneManagement;
SceneManager.LoadScene ("Muerte");</code></pre>
</div></article>

<article><div>
	<h2 id="galeria-tiro">Ejercicio: Galería de tiro</h2>
<h3>Primer paso - todo lo que ya vimos</h3>
<div class="row">
	<div class="col-md-8">
	<ol>
	<li>Colocamos el fondo y los enemigos con sus correspondientes animaciones en escena.</li>
	<li>Cuando pulsemos sobre cualquiera de los enemigos, debe mostrarse una traza.</li>
	<li>Finalmente, cambiaremos la traza por una animación de explosión.</li>
</ol>
	</div>
	<div class="col-md-4">
	<img class="img-fluid" src="imgs/galeria-tiro/enemigos-con-animaciones.png" alt="enemigos con animaciones">
	</div>
</div>


	<h3 id="un_animal_se_mueve">Un único animal se mueve</h3>
	<p>Vector.Lerp hace una traslación desde un punto inicial hasta otro final. Cuando el t vale 0, el objeto estará en PosIni, cuando t vale 1, el objeto estará en PosFin y cuando t tiene cualquier valor intermedio entre 0 y 1, el objeto estará en algún punto intermedio proporcional</p>
	<pre><code>posicion = Vector2.Lerp(PosIni, PosFin, Tiempo/1)</code></pre>			
	<pre><code>public class GameController : MonoBehaviour {
	public GameObject[] personajes; 
	Vector2 posIni;
	Vector2 posFin;
	float t = 0;

	void Start(){
		posIni = new Vector2(personajes[0].transform.position.x,personajes[0].transform.position.y );
		posFin = new Vector2 (posIni.x + 35 , posIni.y);
	}

	void Update () {
		t += 0.1f * Time.deltaTime;
		personajes[0].transform.position = Vector2.Lerp (posIni, posFin, t);
		if (personajes[0].transform.position.x >= posFin.x) {
			personajes[0].transform.position = posIni;
			t = 0;
		}
	}
}</code></pre>
<h3 id="detectando_pulsacion">Detectando pulsación</h3>
<div class="row">
	<div class="col-lg-6">
	<p>Debemos hacer el objeto tenga un <strong>box collider</strong>.</p>
<p>Cuando un <strong>box collider</strong> va a tener movimiento, deberíamos añadirle un <strong>RigidBody</strong>. Esto evitará el recalculamiento del box collider cada vez que el objeto se desplace. La opción de <strong>Kinematic</strong> hará que las fuerzas no afecten al objeto.</p>
	</div>
	<div class="col-lg-6">
	<pre><code>void comprobarPulsacion(){
	Ray rayo = Camera.main.ScreenPointToRay (Input.mousePosition);
	RaycastHit hit;
	if (Physics.Raycast (rayo, out hit)) {
		if (hit.collider.gameObject == personajes[0].gameObject) {
			Debug.Log ("muerte");
		}
	}
}</code></pre>
	</div>
</div>



<h3 id="animacionmuerte">Animación de muerte</h3>
<pre><code>hit.collider.gameObject.GetComponent<Animator> ().SetBool ("vivo",false);</code></pre>
	<h3 id="varios_animales">Varios animales se mueven</h3>
	<p>Hacer que sean varios animales los que se mueven ahora horizontalmente.</p>
	<p>Si el número de animales es fijo, utilizaremos un array para añadirlos a pantalla. En este caso, si queremos evaluar cuando hemos pulsado sobre un animal, deberemos recorrelos todos con un bucle for.</p>
	<p>Modificaremos la llamada a Vector2.Lerp para que las mascotas no comiencen superpuestas.</p>
	<pre><code>personajes[i].transform.position = Vector2.Lerp (posIni + Vector2.left * i*5, posFin + Vector2.left * i*5, t);</code></pre>
	<h3 id="contadormuertes">Contador de muertes</h3>
<div class="row">
	<div class="col-md-4">
	<pre><code>public class MascotaManagement : MonoBehaviour {
	<span class="green">...</span>
	void OnMouseDown(){
		<span class="red">escena.incrementarMuertes ();</span>
		anim.Play ("muerte");
	}</code></pre>
	</div>
	<div class="col-md-8">
	<pre><code>public class EscenaManagement : MonoBehaviour {
	<span class="green">...</span>
	public void <span class="red">incrementarMuertes()</span>{
		this.contadorMuertes = this.contadorMuertes + 1;
		GameObject.Find ("<span class="orange">Texto</span>").GetComponent&lt;Text&gt; ().text = ""+this.contadorMuertes;
	}</code></pre>
	</div>
</div>


<div class="row">
	<div class="col-md-10">
	<p>El GameObject <span class="orange">"Texto"</span> será un elemento UI que hay en escena. Tener en cuenta que si el texto que tiene dentro no cabe, no se verá. Para que si el texto no cabe, se vea, deberemos poner las propiedades <strong>Horizontal Overflow</strong>, y <strong>Vertical Overflow</strong> con valor <strong>Overflow</strong>.</p>
	</div>
	<div class="col-md-2">
	<?= getRes("recurso","proyectos/Galeria-de-tiro-5.zip","Descargar ejercicio") ?>
	</div>
</div>

	
	


</div></article>

<article><div>

<h2 id="corrutinas">Corrutinas</h2>
<div class="row">
	<div class="col-md-6">
	<p>Son códigos que se ejecutan a lo largo de un espacio de tiempo. Utilizan la clase IEnumerator. En este ejemplo, el script irá asociado a la cámara.</p>
	<?= getRes("recurso","proyectos/Corrutinas.zip","Descargar ejemplo") ?>
	</div>
	<div class="col-md-6">
	<pre><code>public class Corrutinas : MonoBehaviour {

public GameObject[] cubos;

void Start () {
	cubos = GameObject.FindGameObjectsWithTag ("Player");
	StartCoroutine (ApagarCubos());
}

IEnumerator ApagarCubos(){
	yield return new WaitForSeconds (2.0f);
	Debug.Log ("Empieza corrutina");
	cubos [0].SetActive (false);


	yield return new WaitForSeconds (2.0f);
	Debug.Log ("Empieza corrutina");
	cubos [1].SetActive (false);

	yield return new WaitForSeconds (2.0f);
	Debug.Log ("Empieza corrutina");
	cubos [2].SetActive (false);
}
}</code></pre>
	</div>
</div>






<h3>Carga asíncrona de una escena</h3>
<pre><code>AsyncOperation asyncOperation;

void Start () {
	StartCoroutine(cargarEscenaAsincronamente());
}

IEnumerator cargarEscenaAsincronamente(){
	asyncOperation = SceneManager.LoadSceneAsync("Escena2", LoadSceneMode.Single);
	asyncOperation.allowSceneActivation = false;
	while (!(asyncOperation.progress > 0.89f)){
		Debug.Log("Progress: " + asyncOperation.progress);
		yield return null;
	}
	Debug.Log("llega el amor");
	yield break;
}

public void irAEscena2(){
	asyncOperation.allowSceneActivation = true;
}</code></pre>
<h3>Ejercicio</h3>
<p>Carga ambas escenas asíncronamente</p>

</div></article>

<article><div>
	<h2 id="flappy-bird">Flappy Bird</h2>


	<div class="row">
		<div class="col-md-10">
		<img class="img-fluid" src="imgs/flappy-bird/flappy-bird.png" alt="flappy bird">
		</div>
		<div class="col-md-2">
		<div class="centraditos">
		<?= getRes('recurso','recursos/recursos-flappy-bird.zip', 'Descargar recursos') ?>
	<?= getRes('recurso','ex/flappy-bird.zip', 'Descargar juego') ?></div>
		</div>
	</div>
	

<h3>Ponemos la imagen de fondo</h3>
<img src="imgs/flappy-bird/espacio.jpg" alt="imagen fondo flappy bird con unity">
	<h3 id="ponemosAlPajaro">Ponemos el heroe en pantalla</h3>
<p>Debe caer por gravedad y tener una animación.</p>
	<h3>Cuando pulsamos la tecla espacio, el pájaro sube para arriba</h3>
	<pre><code>Rigidbody2D heroeRB;
private int potenciaSalto = 3;
void Start(){
	heroeRB = GameObject.Find(&quot;heroe&quot;).GetComponent&lt;Rigidbody2D&gt;();
}

void Update(){
	if (Input.GetKeyDown(KeyCode.Space)){
		heroeRB.velocity = Vector2.zero; //Si pulsamos el bot&oacute;n de saltar justo cuando estamos cayendo, podr&iacute;a ser que se restasen las velocidad 
		heroeRB.AddForce(Vector2.up * potenciaSalto, ForceMode2D.Impulse);
	}
}</code></pre>
	<h3 id="transform">Una tubería se mueve horizontalmente</h3>

<div class="row">
	<div class="col-md-6">
	<img class="img-fluid" src="imgs/flappy-bird/flappy-bird-unity.png" alt="flappy bird con unity">
	</div>
	<div class="col-md-6">
	<p>Creamos un prefab (varios objetos que arrastramos simultaneamente al panel de proyecto) con dos tuberías enfrentadas cuyo origen estará en el punto 0.</p>
<pre><code>public class Tuberia : MonoBehaviour{
    void Update(){
        this.transform.Translate(-2 * Time.deltaTime, 0, 0);
    }
}</code></pre>
	</div>
</div>


	
<h3>Crear varias tuberías</h3>
	<p>Hacemos una corrutina para ir insertando las tuberías. Las corrutinas se lanzan con <span class="italic">StartCoroutine</span>.</p>
	
	<div class="row">
		<div class="col-md-10">
		<pre><code>public class GameController : MonoBehaviour{
    public GameObject tuberiaPrefab;
    void Start(){
        StartCoroutine(generarTuberias());
    }

    IEnumerator generarTuberias(){
        while (true){
            GameObject tuberiaNueva = Instantiate(tuberiaPrefab, new Vector2(10, 0), Quaternion.identity);
            tuberiaNueva.name = "tuberia";
            yield return new WaitForSeconds(3.0f);
        }
    }
}</code></pre>
		</div>
		<div class="col-md-2">
		<?= getRes("video_premium",229986748) ?>
		</div>
	</div>

	

<h3>Tuberías en posiciones aleatorias</h3>
<pre><code>int posicionY = Random.Range(-3,3);
GameObject tuberiaNueva = Instantiate(tuberiaPrefab, new Vector2(10, posicionY), Quaternion.identity);</code></pre>
<h3>Perder al colisionar contra una tubería</h3>
<div class="doscol">
<ol>
	<li>Crearemos un objeto empty dentro de la tubería.</li>
	<li>Asociamos un <span class="italic">BoxCollider2D</span> al <span class="italic">empty</span>.</li>
	<li>Entre las propiedades del componente <span class="italic">BoxCollider2D</span>, le damos a <span class="italic">Edit Collider</span>, para ajustar el area de colisión del <span class="italic">empty</span> al del grupo de tuberías superior.</li>
	<li>Repetimos para el grupo de tuberías inferior.</li>
	<li>Asociamos al heroe un <span class="italic">BoxCollider2D</span> con <span class="italic">Body Type</span> <span class="italic">Dynamic</span> y la check isTrigger marcada.</li>
	<li>Asociamos el código necesario al heroe para detectar la colisión y cambiar de escena.</li>
</ol>
<img src="imgs/colisiones-tuberias-flappy-bird.png" alt="colisiones con tuberías en unity">
</div> 
<h3>Perder al salir por los límites de la pantalla</h3>
<p>Simplemente añadimos dos cubos con su correspondiente <span class="italic">BoxCollider2D</span> a la parte superior e inferior de la pantalla.</p>
<h3>Destruir tuberías</h3>
<pre><strong>prefabTubería</strong><code>if (transform.position.x < -10) {
	Destroy (this.gameObject);
}</code></pre>
</div></article>

<article><div>
	<h2 id="pong">PONG</h2>
	
	<h3>Ponemos el fondo en pantalla</h3>

	<div class="row">
		<div class="col-md-10">
		<img clas="img-fluid" src="imgs/pong/fondo.jpg" alt="fondo PONG">
		</div>
		<div class="col-md-2">
		<div class="centraditos">
	<?= getRes('recurso','recursos/recursos-pong.zip', 'Descargar recursos') ?>
<?= getRes('recurso','ex/pong.zip', 'Descargar juego') ?>
</div>
		</div>
	</div>

<h3>Ponemos la pelota en pantalla</h3>
<img src="imgs/pong/pong-con-pelota.png" alt="pelota pong con Unity">
<h3>Añadimos el script de movimiento a la pelota</h3>
<pre><code>public class Pelota : MonoBehaviour
{
    int speedX;
    int speedY;
    float speed;

    void Start()
    {
        speed = Random.Range(5, 10);
        //La siguiente l&iacute;nea nos da un valor aleatorio que puede ser 0 o 1;
        speedX = Random.Range(0, 2);
        if (speedX == 0) speedX = -1;

        speedY = Random.Range(0, 2);
        if (speedY == 0) speedY = -1;

        //Para pasar la velocidad usamos un vector3 porque le pasamos 3 par&aacute;metros: x, y, z
        GetComponent&lt;Rigidbody2D&gt;().velocity = new Vector2(speedX * speed, speedY * speed);
    }
}</code></pre>
<h3>Hacemos que la pelota rebote contra los límites superior e inferior de la pantalla</h3>
<ol>
	<li>Colocamos dos cubos estirados en la parte superior e inferior de la pantalla.</li>
	<li>Asignamos un <span class="italic">BoxCollider2D</span> a los cubos.</li>
	<li>Asginamos un <span class="italic">BoxCollider2D</span> a la pelota, con <span class="italic">Body Type: Dynamic</span> y <span class="i">Gravity Scale:0</span>.</li>
	<li>En el panel de proyecto, creamos un nuevo <span class="italic">Physics Material 2D</span>. A este material le asignamos estos valores:  <ul>
		<li>Friction: 0</li>
		<li>Bounciness: 1</li>
	</ul></li>
</ol>
<h3>Poniendo en pantalla las palas.</h3>
<p>Las palas deberían de tener un area colisionable, de tal forma que la pelota rebote contra ellas.</p>
<p>Esto ya lo deberías saber hacer tú :D.</p>
<h3>Moviendo las palas</h3>

<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">Detectar la pulsación de las teclas:</span><code>void Update() {
	if (Input.GetKey(KeyCode.A)){
		...
	}if (Input.GetKey(KeyCode.D)){	
		...
	}
}</code></pre>
	</div>
	<div class="col-md-6">
	<p>En lugar de declarar un <span class="i">GameObject</span> y acceder a su propiedad <span class="i">transform</span> (lo cual es equivalente a hacer un <span class="i">GetComponent&lt;Transform&gt;()</span> y por tanto, consume recursos) declararemos un objeto de tipo <span class="i">Transform</span> en su lugar.</p>
<pre><span class="bold">Desplazar al player:</span><code>public Transform pala1;
...
pala1.Translate(0, 2 * Time.deltaTime, 0);</code></pre>
	</div>
</div>



<h3>Limitando el movimiento de las palas</h3>
<pre><code>float limiteSuperior, limiteInferior;

void Start(){
    limiteInferior = Camera.main.ViewportToWorldPoint(new Vector3(0, 0, 0))[1]+pala1.GetComponent&lt;BoxCollider2D&gt;().size.y/2;
    limiteSuperior = Camera.main.ViewportToWorldPoint(new Vector3(0, 1, 0))[1]-pala1.GetComponent&lt;BoxCollider2D&gt;().size.y / 2;
}

if (Input.GetKey(KeyCode.Q) && pala1.transform.position.y < limiteSuperior)
</code></pre>
	<h3>Mejoras adicionales</h3>
	<ul>
		<li>Añadir un marcador que se incrementa cuando la pelota sale por uno de los lados de la pantalla.</li>
		<li>Meter la escena de perder el juego.</li>
	</ul>
	</div></article>

	<article><div>
	<h2 id="carreras">Carreras</h2>

<h3>Ponemos la imágen de fondo</h3>

<div class="row">
	<div class="col-md-10">
	<img class="img-fluid" src="imgs/carreras/background.jpg" alt="Fondo juego carreras con Unity">	
	</div>
	<div class="col-md-2">
	<div class="centraditos">
<?= getRes('recurso','recursos/recursos-carreras.zip', 'Descargar recursos') ?>
<?= getRes('recurso','ex/coches.zip', 'Descargar juego') ?>
</div>
	</div>
</div>


<h3>Ponemos un player en pantalla</h3>
<p>Lo pondremos con su correspondiente animación.</p>
<img src="imgs/carreras/juego-carreras-unity.png" alt="Juego carreras con Unity 3D">
<h3>El jugador avanza hacia delante</h3>
<p>No queremos el el <span class="italic">player</span> caiga por gravedad, así que, para su componente <span class="i">RigidBody2D</span>:</p>
<ul>
	<li>Cambiamos la propiedad <span class="i">Gravity Scale</span> a 0.</li>
	<li>Definimos la propiedad <span class="i">Constraints -> Freeze Rotation: 0.</span></li>
</ul>
<pre><code>void Update(){
	rb.velocity = transform.right * speed;
}</code></pre>
<h3 id="girar-jugador">Girar al jugador con el teclado</h3>
<p><span class="italic">Time.deltaTime</span> ejecuta el cambio especificado en el tiempo concreto de un segundo.</p>
<p><span class="italic">transform.Rotate</span> gira el objeto los grados especificados, mientras que <span class="italic">transform.rotation</span> establece el valor del transform sin tener en cuenta su rotación anterior.</p>

<div class="row">
	<div class="col-md-6">
	<pre><code>void Update() {
	if (Input.GetKey(KeyCode.A)){
		transform.Rotate(0,0,90 * Time.deltaTime);
	}if (Input.GetKey(KeyCode.D)){	
		transform.Rotate(0, 0, -90 * Time.deltaTime);
	}
	rb.velocity = transform.right * speed;
}</code></pre>
	</div>
	<div class="col-md-6">
	<p>No queremos que en el siguiente paso el decorado dote de un impulso giratorio al prota, por lo que tenemos dos opciones:</p>
<ul>
	<li>Aumentar mucho el <span class="italic">Angular Drag</span></li>
	<li>Marcar la check de <span class="italic">Freeze Rotation</span>.</li>
</ul>
	</div>
</div>




<h3>Colisión con decorado</h3>
<p>Puesto que el decorado de este juego tiene formas muy irregulares, le asignaremos un <span class="italic">Polygon Collider 2D</span>, que automáticamente detectará las zonas transparentes del sprite para definir el area colisionable.</p>
<h3>Añadimos cuatro jugadores</h3>

<p>Consideraciones:</p>
<ul>
	<li>Duplicamos el <span class="italic">Game Object</span> del jugador que ya está insertado para obtener los <span class="italic">Game Object</span> de los otros tres jugadores. Debemos definir una nueva animation y un nuevo animator por cada jugador.</li>
	<li>Al hacer la animación tener en cuenta que <span class="font-weight-bold">las animaciones cíclicas, deben empezar y terminar por el mismo frame.</span></li>
	<li>Para poder añadir una animación a un objeto, es necesario que el objeto esté seleccionado en el <span class="italic">panel de jerarquía.</span></li>
	<li>Finalmente, el código asociado a cada player, quedaría así:
<pre><code>public class Player : MonoBehaviour{
    float speed = -2;
    private Rigidbody2D rb;

    public KeyCode keycodeLeft;
    public KeyCode keycodeRight;
    private Animator animator;

	void Start(){
        rb = GetComponent&lt;Rigidbody2D&gt;();
        animator = GetComponent&lt;Animator&gt;();
    }

    void Update() {
        if (Input.GetKey(keycodeLeft)){
            Debug.Log(&quot;gira&quot;);
            transform.Rotate(0,0,90 * Time.deltaTime);
        }
        if (Input.GetKey(keycodeRight)){
            transform.Rotate(0, 0, -90 * Time.deltaTime);
        }
        rb.velocity = transform.right * speed;
    }
}</code></pre>
	</li>
</ul>
<h3>Colocar marcador</h3>
<p>Para cada jugador añadimos dos objetos de tipo <span class="italic">TextMeshPro</span>. Uno que identificará al jugador y otro para su marcador.  Tener en cuenta que serán objetos de tipo 3D.</p>
<p>Para evitar que el marcador se posicione detrás de alguno de los objetos de decorado ya situados en escena, en este caso no podremos cambiar su <span class="italic">Order in Layer</span> puesto que es un objeto de tipo 3D. Lo que debemos hacer es asegurarnos que el <span class="italic">Order in Layer</span> del resto de los objetos sea negativo, ya que el <span class="italic">Order in Layer</span> de un objeto 3D es cero.</p>
<img src="imgs/carreras/carreras-con-marcador-unity.png" alt="">
<h3>Detectar paso por la línea de meta</h3>
<p>Debemos detectar la colisión entre cualquiera de los jugadores y un <span class="italic">empty</span> con un <span class="italic">BoxCollider2D</span>. Para evitar la detección de la colisión entre los jugadores y cualquier objeto del decorado, etiquetaremos a la meta como <span class="italic">Finish</span> y en el código que gestiona la colisión evaluaremos esa etiqueta:</p>
<div class="row">
	<div class="col-md-6">
	<img class="img-fluid" src="imgs/carreras/etiquetado-unity-3d.png" alt="etiquetado unity 3d">
	</div>
	<div class="col-md-6">
	<pre><code>void OnTriggerEnter2D(Collider2D col){
	if(col.gameObject.tag == "Finish"){
		Debug.Log("ha pasado un player");
	}
}</code></pre>
	</div>
</div>




<h3>Evitar trampas</h3>

<div class="row">
	<div class="col-md-6">
	<img class="img-fluid" src="imgs/carreras/markers.png" alt="markers en juego carreras de Unity 3d">
	</div>
	<div class="col-md-6">
	<pre><code>void OnTriggerEnter2D(Collider2D col){
	if (col.gameObject.name == "marker1" && marker == 0){
		marker++;
	}else if (col.gameObject.name == "marker2" && marker == 1){
		marker++;
	}else if (col.gameObject.name == "marker3" && marker == 2){
		marker++;
	}else if (col.gameObject.name == "marker4" && marker == 3){
		marker++;
	}else if (col.gameObject.tag == "Finish" && marker == 4){
		marker = 0;
		Debug.Log("Un player ha dado una vuelta");
	}
}</code></pre>
	</div>
</div>

<p>Podría darse el caso de que un jugador atravesase varias veces seguidas la línea de meta sin completar la vuelta. Para evitar esto, colocaremos en pantalla varios <span class="italic">	BoxCollider2D</span> el el check <span class="italic">isTrigger</span> activado. La idea es que el jugador debe pasar por cada uno de estos <span class="italic">BoxCollider2D</span> antes de pasar por la línea de meta.</p>


<h3>Aumentar el contador de vueltas</h3>
<pre><code>public TextMeshPro marcadorAsociado;
...
marcadorAsociado.text = ""+marcadorVueltas;
</code></pre>
<h3>Terminar la partida al llegar a las dos vueltas</h3>
			<h3 id="condicionesAnimator">Condiciones del panel animator</h3>
			<p>Es posible crear parámetros (panel animator -> pestaña parameters)  y vincularlos a  las transiciones que unen:</p>
			<ol>
				<li>'Any state' y una animación</li>
				<li>Dos animaciones</li>
			</ol>
			<p>Lo que no hacemos es vincularlo a una transición entre 'Entry' y cualquier otro estado o animación.</p>
			<p>Para que una animación deje de ejecutarse, debemos definir una transición de salida a otra animación. En este caso, la animación de salida será 'idle' (el cubo en su posición inicial);</p>
			<p>De esta forma, las animaciones se ejecutrarán sólo si se cumplen ciertas condiciones (que podemos definir en el inspector al seleccionar una transición).</p>
			<img src="imgs/unity3d-panel-animator.jpg" alt="unity3d panel animator">
			<p>Tener en cuenta:</p>
			<ol>
				<li>si en el listado de condiciones que aparece en el panel inspector al seleccionar una transición, tenemos una condición asociada a un hueco vacío (en el lugar en el que debería aparecer el parámetro), las otras condiciones no funcionarán.</li>
				<li>si la check '<strong>Can transition to self</strong>' de settings que se muestra en el inspector cuando tenemos una transición seleccionada está desmarcada, evitaremos que la animación se ejecute de nuevo hasta que no haya salido de ese estado.</li>
			</ol>
			<h3 id="animacionSinScript">Ejercicio: Animación sin Scripting</h3>
			
			<div class="row">
				<div class="col-md-2">
				<?= getRes("video_premium",229979695) ?>
				</div>
				<div class="col-md-10">
				<p>Crear tres animaciones vinculadas a un cubo.</p>
			<ul>
				<li>idle: será la animación por defecto. Es una animación sin fotogramas clave.</li>
				<li>horizontal: es una animación con dos fotogramas clave. El cubo se moverá horizontalmente.</li>
				<li>vertical: es una animación con dos fotogramas clave. El cubo de moverá verticalmente.</li>
			</ul>
			
				</div>
			</div>
			
			<img src="imgs/ejercicio-panel-animator.jpg" alt="ejercicio panel animator en unity 3d">
			
			<div class="row">
				<div class="col-md-2">
				<p>Luego, en el panel animator, añadir parámetros y finalmente establecer condiciones en las transiciones para que estas se ejecuten sólo para valores concretos de los parámetros.</p>
				</div>
				<div class="col-md-10">
				<?= getRes("video_premium",229980396) ?>
				</div>
			</div>
			
			
			
			</div></article>

			<article><div>
		<h2 id="plataformas">Plataformas</h2>




<h3>Ponemos la imagen de fondo</h3>

<div class="row">
	<div class="col-md-10">
	<img class="img-fluid" src="imgs/plataformas/fondo-infinito.jpg" alt="imagen de fondo juego con Unity 3D">
	</div>
	<div class="col-md-2">
	<div class="centraditos">
<?= getRes('recurso','recursos/recursos-plataformas.zip', 'Descargar recursos') ?>
<?= getRes('recurso','ex/plataformas.zip', 'Descargar juego') ?>
</div>
	</div>
</div>


<h3>Ponemos al prota en pantalla</h3>
<div class="row">
	<div class="col-md-2">
	<ul>
	<li>Debe tener la animación de respirar.</li>
	<li>Debe caer por gravedad</li>
</ul>

	</div>
	<div class="col-md-10">
	<img class="img-fluid" src="imgs/plataformas/player-juego-plataformas-unity-3d.png" alt="player juego plataformas">
	</div>
</div>


<h3>Tilemap Editor</h3>
<p>Crear un nuevo tilemap</p>
<ol>
	<li>Botón derecho sobre el panel de jerarquía -> 2D Object -> Tilemap</li>
	<li>Menú Window -> 2D -> Tile Palette</li>
	<li>New Palette -> Seleccionamos los tiles independientes -> Se creará una nueva paleta con los tiles seleccionados.</li>
</ol>
<p>Insertar tiles en la escena</p>
<ol>
	<li>
		
	<div class="row">
		<div class="col-md-6">
			<p>
			Habrá que ajustar el <span class="italic">grid size</span> del grid para que se corresponda con el de los tiles que estamos añadiendo en pantalla. Por ejemplo, si el tamaño de los tiles que estamos insertando es de 32x32px, el grid size será X:0.32 e Y:0.32.
			</p>
		</div>
		<div class="col-md-6">
		<img class="img-fluid" src="imgs/unity-3d-cell-size.png" alt="unity3d cell size">
		</div>
	</div>
	
	 </li>
	<li>
		
	<div class="row">
		<div class="col-md-6">
			<p>El punto origen del tile debería ser su centro, así que nos aseguramos de que tenemos los valores para el <span class="i">anchor</span> con 0.5. </p>
		</div>
		<div class="col-md-6">
		<img class="img-fluid" src="imgs/unity-3d-anchor.png" alt="unity 3d tile anchor">
		</div>
	</div>
	</li>
	<li>Deberemos tener seleccionada la herramienta de pintar. <img style="display: block"src="imgs/plataformas/pintar-tiles.png" alt="pintar tiles en unity"></li>
	<li>Si quiero desplazar tiles dentro del <span class="i">tile palette</span>, debo:
<ol>
	<li>Tener la opción de <span class="i">edit</span> seleccionada</li>
	<li>Seleccionar el tile con la herramienta de selección.</li>
	<li>Desplazar el tile con la herramienta de desplazar</li>
</ol></li></ol>
<img src="imgs/desplegables-unity-3d.png" alt="desplazar tiles en unity 3d">
<p>Insertar tiles colisionables</p>
<ol>
	<li>Seleccionamos el grid y le añadimos un nuevo <span class="i">tilemap</span> que contendrá los tiles que sean colisionables.</li>
	<li>A este nuevo tilemap le añadimos el componente <span class="i">Tilemap Collider 2D</span>.</li>
	<li>Los tiles que añadamos a la escena y que provengan de este tilemap, tendrán colisión.</li>
	<li>Recuerda que para que la colisión funcione, el player tenga un <span class="i">Box Collider 2D</span>.</li>
</ol>


<h3 id="desplazamientoHorizontal">Desplazamiento horizontal</h3>
<p>Para gestionar el movimiento del personaje podemos:</p>
<ul>
	<li>Usar fuerzas (como en este ejemplo, usando el RigidBody).</li>
	<li>No usar fuerzas (utilizando transform.position para gestionar el desplazamiento). Para este caso es una solución peor, ya que cuando el jugador colisione contra una pared, lo que va a ocurrir es que se va a introducir dentro ligeramente. Es como si fuese un balón de playa que se introduce dentro del agua y luego es expulsado. Esto no ocurre cuando usamos fuerzas.</li>
</ul>
  o no </p>
	<ul>
		<li>El protagonista tendrá el componente <strong>Capsule Collider 2D</strong>. Usaremos un <span class="i">Capsule Collider</span> en lugar de un <span class="i">Box Collider</span> porque en este juego en el que estamos utilizando tiles, a veces el box colider colisiona contra una esquina saliente de un tile, impidiendo el desplazamiento del personaje. Esto es un error de unity, ya que realmente los tiles estarían todos a la misma altura.</li>
		<li>El protagonista tendrá, además, el componente Rigidbody2D.</li>
		<li>Es posible controlar las teclas asociadas al Input <span class="i">Horizontal</span> en Edit -> Project Settings -> Input -> Axes -> Horizontal</li>
		<li>Si intentamos usar las flechas de dirección para mover al personaje, es probable que tengamos problemas. Tenemos dos opciones:
			<ul>
				<li>Usar las teclas <span class="i">a</span> y <span class="i">d</span>.</li>
				<li>Jugar con la pantalla de juego maximizada (shift + space).</li>
			</ul>
		</li>
	</ul>
	<pre><code>private int walkspeed = 3;
private float horInput;
private Vector2 movement;
private Rigidbody2D rb;

<span class="green">//Esto se ejecuta más veces por segundo. Lo usaremos para evaluar las físicas</span>
void FixedUpdate(){
	this.horInput = Input.GetAxis ("Horizontal");
	<span class="green">//Recogemos la velocidad actual del rigid body, para que no se resetee el valor de y cuando asignemos la velocity</span>
	this.movement = this.rb.velocity;
	this.movement.x = horInput * walkspeed;
	this.rb.velocity = this.movement;
}</code></pre>
<h4>Diferencia entre el <span class="i">FixedUpdate</span> y <span class="i">Update</span></h4>
<p>El <span class="i">FixedUpdate</span> se utiliza para que en ordenadores con distinta potencia, las fuerzas se apliquen el mismo número de veces por segundo. Por tanto, lo usaremos cuando haya una fuerza constante que se está ejecutando. En este caso, la fuerza que hace que el protagonista se desplace.</p>
<p>El método <span class="i">Update</span> lo usaremos para escuchar, por ejemplo, eventos que se producen de forma puntual e inmediata, como un salto o disparar una bala.</p>
<h3 id="saltoPlataformas">Salto (se puede saltar muchas veces)</h3>
<div class="row">
	<div class="col-md-2">
	<?= getRes("video_premium",229989726) ?>
	</div>
	<div class="col-md-10">
	<pre><code>private bool jumpInput;

void Update(){
	jumpInput = Input.GetButtonDown("Jump");
}

void FixedUpdate(){
	if (jumpInput){
		movement.y = jumpImpulse;
	}</code></pre>
	</div>
</div>



<p>En <strong>Rigid Body -> Constraints</strong> pondremos restricciones para la rotación para que el jugador no pueda caer de cabeza.</p>
<h3>Se puede saltar sólo cuando estamos en contacto con el suelo</h3>
<p>Debemos asignar un tag al tilemap.</p>
<pre><code>private bool grounded;

	<span class="green">...</span>
	if (this.jumpInput &amp;&amp; grounded) {
	<span class="green">...</span>
	
void OnCollisionEnter2D(Collision2D col ){
	if (col.gameObject.tag == "suelo") {
		grounded = true;
	}
}

<span class="green">//Ponemos el grounded a false en este método en lugar de cuando saltamos, para que el salto deje de funcionar si caemos por un precipicio (en este caso perdemos el contacto con el suelo aunque no hemos saltado)</span>
void OnCollisionExit2D(Collision2D col){
	if (col.gameObject.tag == "suelo") {
		grounded = false;
	}
}</code></pre>
<h3>Añadir animación de andar</h3>
<p>En este caso, gestionaremos la activación de las distintas animaciones utilizando parámetros desde el panel animator.</p>
<img src="imgs/plataformas/animator-plataformas-unity3d.png" alt="unity 3d animator plataformas
">
<p>Para que las transiciones entre una animación y otra se produzcan de manera instantánea cuando el usuario pulse las teclas de movimiento, deben seleccionar dichas transiciones en el panel animator y cambiar algunos de sus parámetros en el panel inspector:</p>
<img src="imgs/plataformas/transiciones-unity-3d.png" alt="transiciones instantáneas unity 3d">

<div class="row">
	<div class="col-md-6">
	<p>En lugar de llamar a <span class="i">SetBool</span> constantemente, lo haremos sólo cuando sea necesario, es decir cuando haya un cambio entre estar corriendo y dejar de correr. Hacemos esto porque el método <span class="i">SetBool</span> es costoso a nivel de rendimiento.</p>
	</div>
	<div class="col-md-6">
	<pre><code>// Si el jugador no estaba corriendo y se pone a correr
// y si el jugador estaba corriendo y deja de correr
// cambio la animación de correr
if((horInput != 0.0f && !corriendo) ||(horInput == 0 && corriendo)){
	corriendo = !corriendo;
	anim.SetBool("corriendo", corriendo);
}
if (jumpInput > 0 && grounded){
	anim.SetBool("saltando", true);
	movement.y = jumpImpulse;
}</code></pre>
	</div>
</div>



<h3>Hacer que el prota encare la dirección correcta</h3>
<pre><code>if (horInput < 0) this.facing = true;
else if(horInput > 0) this.facing = false;
this.spr.flipX = facing;</code></pre>
<h3>Añadir un enemigo que está quieto</h3>
<h3>Enemigo que camina</h3>
<pre><strong>enemigo</strong><code>void Update () {
	transform.Translate (direccion*velocidad * Vector2.right * Time.deltaTime, 0);
}</code></pre>
<h3>El enemigo cambia de dirección</h3>

<div class="row">
	<div class="col-md-10">
	<pre><code>void Start(){
	spr = GetComponent&lt;SpriteRenderer&gt;();
	boxCol = GetComponent&lt;BoxCollider2D&gt;();
	float margenRayo = 0.2f;
	distanciaRayo = boxCol.size.x / 2 + margenRayo;
}

void Update(){
	<span class="green">...</span>
	Vector2 puntoOrigenHaciaAbajo = new Vector2 (this.transform.position.x  + direccion * distanciaRayo, this.transform.position.y);
	RaycastHit2D hitAbajo= Physics2D.Raycast(puntoOrigenHaciaAbajo, Vector2.down,2f);
	Debug.DrawRay (puntoOrigenHaciaAbajo, Vector2.down, Color.red);

	if(hitAbajo.collider == null){
		spr.flipX = (direccion == 1) ? false : true; 
		direccion = direccion * -1;
	}
}</code></pre>
	</div>
	<div class="col-md-2">
	<img class="img-fluid" src="imgs/rayo-enemigo-unity3d.png" alt="rayo enemigo">
	</div>
</div>



<h3>Colisión contra el enemigo</h3>
<p>El siguiente código hace que cuando impactemos contra un enemigo salgamos despedidos en dirección contraria.</p>
<pre><span class="bold">Player.cs</span><code>void OnCollisionEnter2D(Collision2D col){
	<span class="green">...</span>
	if (col.gameObject.tag == "enemigo") {
		controlesActivos = false;
		CancelInvoke ("Rehabilitar"); //Cancelamos todas las invocaciones del método rehabilitar que pudiesemos tener de antes.
		Invoke ("Rehabilitar", 0.5f);
		float direccionEmpuje = Mathf.Sign (this.gameObject.transform.position.x - col.gameObject.transform.position.x);
		Debug.Log ("Direccion empuje = " + direccionEmpuje);
		rb.velocity = new Vector2(direccionEmpuje*10f, 10f);;
		Debug.Log (rb.velocity);
	}
}
void Rehabilitar(){
	controlesActivos = true;
}

<span class="green">//Sólo podremos movernos si no estamos volando tras colisionar con un enemigo</span>
if (controlesActivos == true ) {
	movement.x = horInput * walkspeed;

	if (jumpInput && grounded ) {
		movement.y = jumpImpulse;
	}
	rb.velocity = this.movement;
}</code></pre>
<h3>Balas</h3>
<pre><span class="bold">Bala.cs</span><code>void Start(){
	...
	// transform.right tiene en cuenta la rotación local del objeto
	rb.AddForce(transform.right * velocidadInicial, ForceMode2D.Impulse);
}</code></pre>
<pre><span class="bold">Player.cs</span><code>void Update(){
	...
	fire1 = Input.GetButtonDown("Fire1"); // Por defecto <span class="i">Fire1</span> es left ctrl
	...
}

void Disparar(){
	Instantiate (balaPrefab, transform.position, balaPrefab.transform.rotation) as GameObject;
}</code></pre>
<p>Marcaremos la check <span class="i">is Trigger</span> del box collider para que las balas no empujen al player que las está disparando.</p>
<h3>La bala se mueve en la dirección correcta</h3>
<p>Utilizaremos un código similar a este para el protagonista:</p>
<pre><span class="bold">Player.cs</span><code>void Disparar(){
	Quaternion rotacion = facing ? Quaternion.Euler(new Vector3(0, 180, 0)) : Quaternion.Euler(new Vector3(0, 0, 0));
	Instantiate(balaPrefab, transform.position, rotacion);
}</code></pre>
<h3>Plataforma móvil I</h3>

<div class="row">
	<div class="col-md-6">
	<p>Utilizaremos un empty con dos hijos: la plataforma que voy a mover y el punto de destino. A la plataforma que queremos mover le asociaremos el siguiente script. La propiead target será el destino del movimiento, que irá cambiando según lo alcancemos.</p>
	</div>
	<div class="col-md-6">
	<img class="img-fluid" src="imgs/plataformas/plataforma-movil-con-unity-3d.png" alt="plataforma móvil con unity 3d">
	</div>
</div>



<pre><span class="bold">PlataformaDinamica</span><code>public class PlataformaDinamica : MonoBehaviour {
	public Transform target;
	public float speed;
	private Vector3 start,end;

	void Start () {
		if (target != null){
			start=transform.position;
			end=target.position;
		}	
	}

	void FixedUpdate(){
		if (target != null){
			float fixedSpeed = speed * Time.deltaTime;
			transform.position=Vector3.MoveTowards(transform.position, target.position, fixedSpeed);
		}
<span class="green">//comprobamos si la posicion final es igual al ppio, target position vale end y si no, vale start</span>
		if (transform.position == target.position){
			target.position= (target.position ==start) ? end: start; <span class="green">//cambiamos la posicion del target</span>
		}	
	}
}</code></pre>
<p>Si queremos ver dibujada en pantalla la línea de la trayectoria, podemos vincular al objeto, además, la siguiente clase</p>
<pre><span class="bold">DrawSceneLine.cs</span><code>public class DrawSceneLine : MonoBehaviour {

	public Transform from; //origen del desplazamiento
	public Transform to;//final del desplazamiento

	void OnDrawGizmosSelected(){

		if (from != null && to != null){
			Gizmos.color=Color.cyan;
			Gizmos.DrawLine(from.position,to.position);
			Gizmos.DrawSphere(from.position, 0.15f);
			Gizmos.DrawSphere(to.position, 0.15f);
		}
	}
}</code></pre>
<h3>Plataforma móvil II - sin colisión cuando entramos desde abajo</h3>
<ol>
	<li>En el <span class="i">Box Collider</span> de la plataforma, marcamos la check <span class="i">Used By Efector</span></li>
	<li>Añadimos a la plataforma el componente <span class="i">Platform Effector 2D</span>. Definimos un surface arc de menos de 180º.</li>
</ol>

<h3>Plataforma móvil III - Evitar que la plataforma "escupa" al prota</h3>
<p>Cuando el player entre en la plataforma desde abajo, no habrá colisión. Cuando entre desde arriba, haremos al player hijo de la plataforma.</p>
<pre><span class="font-weight-bold">PlataformaMovil.cs</span><code>void OnCollisionEnter2D(Collision2D col){
	if (col.transform.tag == "Player"){
		if (col.transform.position.y > transform.position.y){
			col.transform.parent = transform;
		}
	}
}

void OnCollisionExit2D(Collision2D col) {
	if(col.gameObject.tag == "Player"){
		col.transform.parent = null;
	}
}</code></pre>
<h3>Evitar que el Player se quede enganchado al ir contra una plataforma</h3>
<div class="row">
	<div class="col-md-3">
	<img class="img-fluid" src="imgs/plataformas/unity-3d-el-player-se-queda-enganchado.png" alt="Evitar que el player se quede enganchado al ir en la dirección de una plataforma">
	</div>
	<div class="col-md-9">
	<pre><span class="bold">Player.cs</span><code>LayerMask capasAfectadasPorElRayo;

void FixedUpdate(){
	...
	if ((this.horInput < 0 && !PuedeMoverseIzquierda())
	|| (this.horInput > 0 && !PuedeMoverseDerecha())){
		this.movement.x = 0;
	}
	...
}


bool PuedeMoverseIzquierda(){
	int cantidadRayos = 10;
	//Usamos el skinWidth para que el rayo que sale de los pies y el rayo
	//que sale de la cabeza no choquen contra el suelo ni el techo
	float skinWidth = 0.1f;
	float distanciaEntreRayosDetectores = (cc.size.y - skinWidth*2) / cantidadRayos;
	float coordenadaYDelRayo = transform.position.y - (cc.size.y / 2) + skinWidth;

	for (int i = 0; i <= cantidadRayos; i++){
		Vector3 puntoOrigenRayo = new Vector3(transform.position.x - cc.size.x / 2, coordenadaYDelRayo, 0);
		RaycastHit2D hit = Physics2D.Raycast(puntoOrigenRayo, Vector2.left, longitudRayo, capasAfectadasPorElRayo);
		Debug.DrawRay(puntoOrigenRayo, Vector2.left, Color.red);
		if (hit){
			return false;
		}
		coordenadaYDelRayo += distanciaEntreRayosDetectores;
	}
	return true;
}

// Faltaría programar el método <span class="i">PuedeMoverseDerecha();</span></code></pre>
	</div>
</div>




<p>No queremos que los rayos colisionen con el propio personaje, así que definimos una <span class="i">layermask</span> en la que no incluímos al Player.</p>
<img src="imgs/plataformas/unity3d-layer-mask.png" alt="layer mask con unity 3d">
<h3>Barra de vida</h3>
<pre><span class="bold">ControlPlayer</span><code>public BarraVita barraVita;
barraVita.actualizarVidas (vidas, maximoVidas);</code></pre>

<div class="row">
	<div class="col-md-6">
	<p>BarraVita será el script asociado a un objeto image del canvas al que habremos asociado como sprite un punto blanco. Seleccionaremos en su componente Image:</p>
<ul>
	<li>Image Type: Filled</li>
	<li>Fill Method: Horizontal</li>
</ul>
	</div>
	<div class="col-md-6">
	<pre><span class="bold">BarraVita.cs</span><code>public class BarraVita : MonoBehaviour {
	private Image barraVida;

	void Start () {
		barraVida = this.GetComponent&lt;Image&gt; ();
	}

	public void actualizarVidas(int vidas, int maximoVida){
		barraVida.fillAmount = vidas*1.0f / maximoVida;
	}
}</code></pre>
	</div>
</div>


</div>
			</article>

<article><div>
<h2 id="coprota-sigue-a-prota">Coprota sigue a prota</h2>
<div class="row">
	<div class="col-md-10">
	<img class="img-fluid" src="./imgs/coprota-sigue-a-prota.png" alt="Coprota sigue a prota">
	</div>
	<div class="col-md-2">
	<?= getRes('recurso','./ex/coprota-sigue-a-prota.zip', 'Descargar recurso') ?>
	</div>
</div>


<pre><code>public class CoProta : MonoBehaviour {

	private Transform destino;
	private Player playerCodigo;
	void Start () {
		GameObject player = GameObject.Find(&quot;Player&quot;);
		playerCodigo = player.GetComponent&lt;Player&gt;();
		destino = player.transform.Find(&quot;DestinoCoprota&quot;);
	}

	void Update(){
		//Cambiar destino del coprota dependiendo de tu direccion
		destino.localPosition = new Vector3(Mathf.Abs(destino.localPosition.x) * playerCodigo.facing * -1, destino.localPosition.y, destino.localPosition.z);
	}

	void FixedUpdate(){
		//El tercer par&aacute;metro del Lerp indica el porcentaje de la ruta que hace en cadda frame
		transform.position = Vector2.Lerp(transform.position, destino.position, 0.1f);
	}
}</code></pre>

</div></article>

<article><div>
	<h2 id="puzzle-con-raycast">Puzzle con RayCast</h2>


	<h3 id="seleccionarUnaPieza">Seleccionar una pieza (lanzar un rayo 2D y 3D)</h3>
	
	<div class="row">
		<div class="col-md-10">	<p>Para que funcionen los rayos, cada pieza debe tener un <span class="i">BoxCollider</span> y un <span class="i">RigidBody</span>.</p>
	<pre><code>GameObject pieza;

void Update(){
	if(Input.GetMouseButtonDown(0)){
		seleccionarPieza ();
	}
}

void seleccionarPieza(){
	//Si estamos trabajando con <span class="bold">Colliders 2D</span>
	//RaycastHit2D hit = Physics2D.Raycast(Camera.main.ScreenToWorldPoint(Input.mousePosition), Vector2.zero);
	//if (hit)

	//Si estamos trabajando con <span class="bold">Colliders 3D</span>
	Ray rayo = Camera.main.ScreenPointToRay (Input.mousePosition);
	RaycastHit hit;
	if (Physics.Raycast (rayo, out hit)) {
		if (hit.collider.gameObject.tag == "piezapuzzle") {
			<span class="red bold">distanciaRayo = hit.distance;</span> <span class="green">//distanciaRayo será un valor que utilizaremos más adelante</span>
			pieza = hit.collider.gameObject;
			Debug.Log (pieza);
		}	
	}
	
}</code></pre></div>
		<div class="col-md-2">
		<div class="centraditos">
<?= getRes('recurso','ex/puzzle-con-raycast.zip', 'Descargar juego puzzle con raycast') ?>
<?= getRes("recurso","imgs/piezas.zip","Descargar piezas") ?>
</div>
		</div>
	</div>
	

<h3 id="moverPieza">Mover pieza con RayCast</h3>
<pre><code>void seleccionarPieza(){
	<span class="green">...</span>
	estaPulsado=true;
	<span class="green">...</span>
}	

void Update(){
	if(estaPulsado){
		moverPieza ();
	}	
}

void moverPieza(){
	Ray rayo = Camera.main.ScreenPointToRay (Input.mousePosition);
	Vector3 limiteRayo = rayo.GetPoint (<span class="red bold">distanciaRayo</span>);
	limiteRayo = new Vector3 (limiteRayo.x, limiteRayo.y, 0);
	pieza.transform.position = limiteRayo;
}</code></pre>
<h4>Explicación del método mover pieza.</h4>

<div class="row">
	<div class="col-md-6">
	<p>Un rayo es infinito. Nos interesa mover la pieza al punto correcto de profundidad; por eso utilizamos la variable longitudRayo.</p>
<p><span class="red">limiteRayo</span> será el segmento que va desde la <span class="purple">cámara</span>, hasta <span class="blue">el punto en que colisionamos con el bounding box de la pieza</span>. Sin embargo, si la pieza tiene profundidad z=0, <span style="color:#904A00">la bounding box tendrá</span> una profundidad diferente y cada vez que llamemos a moverPieza() cambiaremos su ubicación, porque<span class="green"> el origen de coordenadas de la pieza</span> no coincide con el punto de impacteato, y la pieza se desplazará.</p>
	</div>
	<div class="col-md-6">
	<img class="img-fluid" src="imgs/bounding-box.svg" alt="Unity 3D bounding box">
	</div>
</div>



<h3>Poner las piezas que se están moviendo por delante</h3>
<pre><code>    void seleccionarPieza(){
	...
	if (hit){
		ultimaFichaOrden++;
		pieza.transform.GetChild(0).GetComponent&lt;SpriteRenderer&gt;().sortingOrder = ultimaFichaOrden;
		pieza.transform.GetChild(1).GetComponent&lt;TextMeshPro&gt;().sortingOrder = ultimaFichaOrden;</code></pre>

<h3 id="arrastrarYSoltar">Arrastrar y soltar</h3>
<pre><code><span class="green">...</span>
	if (Input.GetMouseButtonUp (0)) {
		soltarPieza ();
	}
<span class="green">...</span>
void soltarPieza(){
	if (estaPulsado) {
		estaPulsado = false;
		pieza = null;
	}
}</code></pre>
<h3 id="comprobarSiHeDejadoPieza">Comprobar si he dejado la pieza sobre un area de la pantalla</h3>
<h4 id="evaluar-distancia">Evaluar la distancia entre una ficha y otra en el momento de soltarla</h4>
<pre><code>public List&lt;GameObject&gt; fichasMoviles;
public List&lt;GameObject&gt; fichasSolucion;
public void ComprobarDrop(){
	bool acierto = false; ;
	for (int i = 0; i &lt; fichasSolucion.Count; i++){
		if (Vector2.Distance(pieza.transform.position, fichasSolucion[i].transform.position) &lt; 1){
			if (pieza.name == fichasSolucion[i].name){
				fichasSolucion[i].transform.GetChild(1).GetComponent&lt;TextMeshPro&gt;().text = pieza.name;
				Destroy(pieza.gameObject); //ficha seleccionada y ficha solucion son gameObjects
				fichasSolucion.RemoveAt(i);
				contadorSolucionesCorrectas++;
				if (contadorSolucionesCorrectas == 10){
					Debug.Log(&quot;Ganaste&quot;);
				}
				acierto = true;
				break;
			}   
		}   
	}
	if (!acierto){
		colocarPiezaEnPosicionesIniciales();
	}
}</code></pre>
<h4>Comparar la posición poniendo el código en la pieza en lugar de en el gamecontroller</h4>
<p>Para que funcionen los métodos <strong>OnTriggerEnter</strong> y <strong>OnTriggerExit</strong> debe estar marcada la check <strong>Is Trigger</strong> del componente <strong>Box Collider</strong>.</p>
<p>También debemos asignar un <strong>Rigid Body</strong> a los objetos que van a moverse.</p>
<pre><strong>Pieza</strong><code>public class Pieza : MonoBehaviour {
	
	public bool estaTocando;

	void OnTriggerEnter(Collider col){
		if (name=="piezaRosa" &amp;&amp; col.GetComponent&lt;Collider&gt;().gameObject.name == "rosita") {
			estaTocando = true;
		}	

		if ( name=="piezaMorada" &amp;&amp; col.GetComponent&lt;Collider&gt;().gameObject.name == "morado") {
			estaTocando = true;
		}
	}

	void OnTriggerExit(Collider col){
		if (name=="piezaRosa" &amp;&amp; col.gameObject.name == "rosita" ) {
			estaTocando = false;
		}
		if (name=="piezaMorada" &amp;&amp; col.gameObject.name == "morado") {
			estaTocando = false;
		}
	}
}</code></pre>
<pre><strong>ControlEscena</strong><code>void comprobarCubos(){
	if (pieza.GetComponent&lt;Pieza&gt; ().estaTocando == true) {
		Debug.Log ("toca");
		Destroy (pieza);
	}
}</code></pre>
<h3 id="destroyConTransicion">Destroy con transición</h3>
<pre><code>pieza.GetComponent&lt;Animator&gt; ().enabled = true;
Destroy (pieza, 1.0f);</code></pre>
<h3 id="encajarPiezas">Encajar piezas</h3>
<pre><code>public float margenError = 2;
public Vector3 [] posicionesFinales;

void Start(){
	<span class="green">...</span>
	posicionesFinales = new Vector3[piezas.Length];
	for (int i = 0; i < piezas.Length ; i++) {
		posicionesFinales [i] = piezas [i].transform.position;
	}
}
void soltarPieza(){
	if (estaPulsado) {
		estaPulsado = false;
		<strong>colocar ();</strong>
		pieza = null;
	}
}

void colocar(){
	int <span class="red bold">numAux</span> = 0;
	for (int i = 0; i < piezas.Length; i++) {
		if (piezas [i].gameObject == pieza) {
			Debug.Log ("coinciden");
			numAux = i;
			break;
		}
	}
	if (Vector3.Distance (piezas [numAux].position, posicionesFinales [numAux]) <= margenError) {
		Debug.Log ("encaja "+ numAux);			
		piezas[<span class="red bold">numAux</span>].position= posicionesFinales [numAux];
	}	
}</code></pre>
<h3 id="desordenarPiezas">Desordenar piezas</h3>
<pre><code>void desordenar(){
	for (int i = 0; i < piezas.Length; i++) {
		piezas [i].transform.position = new Vector3 (Random.Range(-5,5), Random.Range(-2,2), 0);
	}
}</code></pre>
<h3 id="desordenarPiezasAlCaboDeUnTiempo">Desordenar piezas al cabo de un tiempo</h3>
<pre><code>Invoke("desordenar", 2.0f);</code></pre>
<!-- article>
	<h3>Ordenar números</h3>
	<h4>Distribución de elementos 2D sin usar Canvas</h4>
	<p>Llamaremos tres veces al método <strong>distribuirHorizontalmente</strong> para establecer 3 filas de objetos.</p>
	<pre><code>void Start () {
	float altoPantalla = Camera.main.orthographicSize * 2;
	float anchoPantalla = altoPantalla * Screen.width / Screen.height ;
	float separacionEntrePiezasBTN = anchoPantalla / (botonesSUP.Length +1);
	float escalaBTN = separacionEntrePiezasBTN * 0.1f;

	distribuirHorizontalmente (botonesSUP,anchoPantalla, separacionEntrePiezasBTN,escalaBTN, 0);
}

void distribuirHorizontalmente(SpriteRenderer[] botones, float anchoPantalla, float separacionEntrePiezas, float escala,int nFila){
	for (int i=0; i < botones.Length; i++) {
		botones[i].transform.position = new Vector3(separacionEntrePiezas + separacionEntrePiezas*i- anchoPantalla/2, separacionEntrePiezas*nFila ,0);
		botones [i].gameObject.transform.localScale = Vector3.one *escala;
	}
}</code></pre>	
<h4>Arrastrar y soltar</h4>
<p>Al igual que en el puzzle, programaremos los métodos <strong>seleccionarPieza</strong>, <strong>moverPieza</strong>, <strong>soltarPieza</strong> y <strong>comprobarCubos</strong>.</p>
<p>El método <strong>moverPieza</strong> tendrá una variable llamada contadorProfundidad que irá disminuyendo cada vez que llamemos al método para que la pieza se valla acercando a la cámara y siempre aparezca por delante.</p>
<p>Al igual que en el juego del puzzle, asignamos un <strong>Sphere Body</strong> con la check de la propiedad <strong>Is Trigger</strong> marcada a todos los objetos que van a colisionar y un <strong>Rigid Body</strong> a los que van a moverse.</p>
<h4>Colisiones con las bolas de abajo</h4>
<p>Creamos un nuevo script <strong>Pieza.cs</strong> y lo asociamos a las piezas de arriba. Este escript debe asignar diez números aleatorios entre 1 50 a las piezas de arriba y estos mismos números a las piezas de abajo, pero en este último caso, ordenados y no visibles.</p>
<p>"valor" será una propiedad pública de un script llamado "Sol", asociado a las piezas de abajo.</p>
<pre><strong>EscenaManagement.cs</strong><code>void Start () {
	<span class="green">//Creamos los números aleatorios que iran en las piezas de arriba</span>
	for (int i = 0; i < 10; i++) {
		nAleatorios [i] = UnityEngine.Random.Range (0, 51);
	}
	<span class="green">//Creamos y asignamos los números aleatorios a las piezas de abajo</span>
	nAleatoriosOrdenados = nAleatorios;
	Array.Sort (nAleatoriosOrdenados);

	for (int i = 0; i < botonesSOL.Length; i++) {
		botonesSOL[i].GetComponent&lt;Sol&gt; ().valor = nAleatoriosOrdenados [i];		
	}
<span class="green">...</span></code></pre>
<pre><strong>Pieza.cs</strong><code>void OnTriggerEnter(Collider col){
	<span class="green">//Si colisiono con un objeto etiquetado como "sol"...</span>
	if ( col.GetComponent<Collider>().gameObject.tag == "sol") {
		estaTocando = true;
		<span class="green">//... obtengo el valor del propio objeto ...</span>
		string txtBtnArriba = gameObject.transform.GetChild(0).GetComponent&lt;TextMesh&gt; ().text;
		num = IntParseFast (txtBtnArriba);
		<span class="green">//... y del objeto con el que colisiono ...</span>
		int  valueBtnAbajo = col.transform.GetComponent&lt;Sol&gt; ().valor;
		col.transform.GetComponent&lt;SpriteRenderer&gt;().color=Color.red;
		esCorrecto = false;
		<span class="green">//..los comparo</span>
		if (num == valueBtnAbajo) {
			esCorrecto = true;
		}
	}
}</code></pre>
<h4>Si hay colisión con la pieza correcta, se pinta el número en la ficha</h4>
<p>Como en <strong>EscenaManagement</strong> sólo estamos accediendo a las piezas de arriba y necesitamos modificar las de abajo, a las piezas de arriba les asignamos un objeto público que almacenará la pieza contra la que hubo colisión, de tal forma que podamos acceder a ella desde EscenaManagement.</p>
<pre><code><span class="green">...</span>
public GameObject goSOL;
<span class="green">...</span>
goSOL = col.gameObject;
<span class="green">...</span>
goSOL.transform.GetChild (0).GetComponent&lt;TextMesh&gt; ().text = "" + pieza.GetComponent&lt;Pieza&gt; ().num;</code></pre>


</main>

<main class="curso">
	<h2 id="arrastrar-soltar">Arrastrar y soltar un objeto que tiene un texto 3D dentro</h2>


<pre><code>public class Ficha : MonoBehaviour{
	private bool enDrag = false;
	private SpriteRenderer spriteRenderer;
	private Juego4Numeros gc;
	private Renderer texto;

	void Start(){
		gc = GameObject.Find(&quot;GameController&quot;).GetComponent&lt;Juego4Numeros&gt;();
		//texto es nuestro texto 3D. Aunque no podemos establecer su <span class="i">sortingOrder</span> desde el inspector de propiedades, podremos hacerlo mediante código
		texto = this.transform.GetChild(0).GetComponent&lt;Renderer&gt;();
		spriteRenderer = GetComponent&lt;SpriteRenderer&gt;();
	}

	void OnMouseDown(){
		enDrag = true;
		gc.ordenGlobalDeLasCapas++;
		//Si queremos que cada vez soltemos la pieza, esta se coloque sobre el resto, necesitaremos una variable global para almacenar el orden de la capa que está más por encima
		texto.sortingOrder = gc.ordenGlobalDeLasCapas;
		spriteRenderer.sortingOrder = gc.ordenGlobalDeLasCapas;
	}

	void Update(){
		if (enDrag){
			Vector3 posRaton = Input.mousePosition;
			transform.position = (Vector2)Camera.main.ScreenToWorldPoint(posRaton);
		}
		if (Input.GetMouseButtonUp(0) && enDrag){
			enDrag = false;
		}
	}
}</code></pre>

</main-->
</div></article>

<article><div>
<h2>Juego de seguir el trazado</h2>
<p>Hacer un juego en el que el usuario debe arrastrar una bolita por el camino fijado.</p>
</div></article>

<article><div>
	<h2 id="juego-arrastrar-soltar">Juego arrastrar y soltar</h2>
<div class="row">
	<div class="col-md-6">
	<img class="img-fluid" src="./imgs/juego-seguir-trazado.png" alt="Juego de seguir trazado">
	</div>
	<div class="col-md-6">
	<p>Para hacer la comparación de si el valor de la mariquita coincide con el valor de la hoja, lo más fácil será modificar dinámicamente el <span class="italic">name</span> de cada una de las mariquitas y de cada una de las hojas, asignándoles el valor solución. Luego, compararemos los name de ambos objetos.</p>
<p>Haremos un único area de colisión para cada número y cuando el usuario salga de él, mostraremos un popup.</p>
<p>El objeto <span class="italic">TextMeshPro</span> que almacena la solución de las hojas, es hijo de un dibujo de circunferencia que a su vez es hijo de una hoja. Para acceder al objeto padre desde el objeto hijo, usaremos el siguiente código:</p>
<pre><code>objetoHijo.transform.parent.parent</code></pre>
	</div>
</div>



</div></article>

<article><div>
<h2>Dibujar líneas con el mouse</h2>
<ol>
<li>Configuración global:
<ol>
<li>Usaremos una vista ortográfica para la cámara. (<span class="i">	Seleccionamos la cámara -> Projection -> Orthographic</span>)</li>
<li>Usaremos un fondo plano (<span class="i">Seleccionamos la cámara -> Clear flags -> Solid color</span>)</li>
</ol>
</li>
<li>Creando el pincel:
<ol>
<li>Create Empty. Lo llamaremos ball</li>
<li>Dentro de este empty creamos un <span class="i">2D Object -> Sprite</span>. Le asignamos la imagen del pincel: <br>
<img src="./imgs/pincel.png" alt="Pincel unity 3d">
</li>	
<li>Asociamos un <span class="i">Rigid Body 2D</span> al objeto Ball.</li>
<li>Dentro del componente <span class="">Rigid Body 2D</span> cambiamos la propiedad <span class="i">Body Type</span> a <span class="">static</span> para que la pelota no caiga por gravedad.</li>
<li>Añadimos un <span>Circle Collider 2D</span> al objeto Ball y lo ajustamos al tamaño del pincel.</li>
<li>Convertimos el objeto <span class="i">Ball</span> en un <span class="i">Prefab</span>.</li>
</ol>
</li>
<li>Creamos la línea
<ol>
<li>Creamos un nuevo empty que llamaremos <span class="i">Line</span>.</li>
<li>Añadimos un componente de tipo <span class="i">Line Renderer</span> a esta línea.</li>
<li>Creamos un nuevo material y lo vinculamos al objeto.<span class="i">Line</span>.</li>
<li>Dentro del componente <span class="i">Line Renderer</span> del objeto <span class="i">Line</span>:
<ol>
<li>Asignaremos un <span class="i">Width</span> de <span class="i">0.15</span>.</li>
<li>Asignamos un <span class="i">Edge Collider 2D</span> a la línea.</li>
<li>Salvamos la línea como Prefab.</li>
</ol>
</ol>
</li>
<li>Creamos un nuevo Script llamado <span class="i">DrawLine</span></li>
<pre><code>public class DrawLine : MonoBehaviour {
	public GameObject linePrefab;
	private GameObject currentLine;
	private LineRenderer lineRenderer;
	private EdgeCollider2D edgeCollider;
	private List&lt;Vector2&gt; fingerPositions = new  List&lt;Vector2&gt;();

	void Update () {
		if (Input.GetMouseButtonDown(0)){
			CreateLine();
		}
		if (Input.GetMouseButton(0)){
			Vector2 tempFingerPos = Camera.main.ScreenToWorldPoint(Input.mousePosition);
			if (Vector2.Distance(tempFingerPos, fingerPositions[fingerPositions.Count - 1]) &gt; .1f){
				UpdateLine(tempFingerPos);
			}
		}
	}

	void CreateLine(){
		currentLine = Instantiate(linePrefab, Vector3.zero, Quaternion.identity);
		lineRenderer = currentLine.GetComponent&lt;LineRenderer&gt;();
		edgeCollider = currentLine.GetComponent&lt;EdgeCollider2D&gt;();
		fingerPositions.Clear();
		// Como lineRenderer es una línea, necesitamos añadir dos puntos a fingerPositions para poder dibujarla sin errores
		fingerPositions.Add(Camera.main.ScreenToWorldPoint(Input.mousePosition));
		fingerPositions.Add(Camera.main.ScreenToWorldPoint(Input.mousePosition));
		// Dibujamos una línea compuesta de dos puntos
		lineRenderer.SetPosition(0, fingerPositions[0]);
		lineRenderer.SetPosition(1, fingerPositions[1]);
		edgeCollider.points = fingerPositions.ToArray();
	}

	void UpdateLine(Vector2 newFingerPos){
		fingerPositions.Add(newFingerPos);
		lineRenderer.positionCount++;
		// Convertimos el List de posiciones por las que ha ido pasando el dedo en la línea que vamos a ver
		lineRenderer.SetPosition(lineRenderer.positionCount - 1, newFingerPos);
		// Convertimos el List de posiciones por las que ha ido pasando el dedo en los puntos del edge collider
		edgeCollider.points = fingerPositions.ToArray();
	}
}</code></pre>
<li>Creamos un <span class="i">Empty</span> llamado <span class="i">GameController</span> y le vinculamos el código anterior.</li>
<li>Luego, en el panel inspector, iremos asociando las propiedades que hemos hecho públicas. Sólo con rellenar la primera propiedad ( <span class="i">Line Prefab</span> ya podremos dibujar).</li>
</ol>
<?= getRes('recurso','./ex/dibujar-lineas-con-raton.zip', 'Descargar programa') ?>

</div></article>

<article><div>
	<h2 id="plataformas-con-raycast">Plataformas con RayCast</h2>
	<div class="row">
		<div class="col-md-10">
		<p>Creamos un nuevo proyecto 2D.</p>
<p>Cuando terminemos...</p>
<ul>
	<li>La entidad player tendrá asociadas las clases <span class="">Player</span>, <span class="bold">PlayerInput</span>, <span class="bold">Controller2D (cuya propiedad Collision Mask será obstacle)</span> y pertenecerá al layer <span class="bold">player</span></li>
	<li>La entidad MainCamera tendrá asociada la clase <span class="bold">CameraFollow</span>.</li>
	<li>Las plataformas y el suelo tendrán asociadas el Layer <span class="bold">obstacle</span>.</li>
	<li>Debemos asegurarnos de que la check <span class="bold">Edit -> Project Settings -> Physics2D -> Auto Sync Transforms está marcada.</span></li>
</ul>
		</div>
		<div class="col-md-2">
		<?= getRes('recurso','./ex/plataformas-con-raycast.zip', 'Descargar código completo') ?>
		</div>
	</div>


	<h3>Configurando el proyecto</h3>
	<p>En Edit -> Project Settings -> Physics 2D ...</p>
	<ul class="bold red">
		<li>Desmarcamos la check <span class="i">Reuse Collision Callbacks</span></li>
		<li>Marcamos la check <span class="i">Auto Sync Transforms</span></li>
	</ul>
	<img src="imgs/configuracion-rayos.png" alt="Configuración rayos en Unity">
	<h3>El cubo cae por gravedad</h3>


			<p>Vincularemos un cubo a la clase <span class="i">Player</span>. Esta clase, implementará a su vez el componente <span class="i">Controller2D</span>, que es el que se ocupa de la mayoría de la lógica.</p>

			<div class="row">
				<div class="col-md-6">
				<pre><span class="bold">Player.cs</span><code>[RequireComponent (typeof (Controller2D))]
public class Player : MonoBehaviour{
	float gravity = -20;
	Vector3 velocity;
	Controller2D controller;

	void Start(){
		controller = GetComponent&lt;Controller2D&gt;();
	}

	void Update(){
		CalculateVelocity();	
		controller.Move(velocity*Time.deltaTime);
	}
	void CalculateVelocity() {
		velocity.y += gravity * Time.deltaTime;
	}
}</code></pre>
				</div>
				<div class="col-md-6">
				<pre><span class="bold">Controller2D.cs</span><code>public void Move(Vector3 velocity){
	transform.Translate(velocity);
}</code></pre>
				</div>
			</div>
	

		<h3>El cubo con los rayos</h3>
		<p>A partir de la ubicación del cubo, el método <span class="i">VerticalCollisions</span> se encarga de lanzar unos rayos (<strong>raycast</strong>) verticales hacia abajo. Para ello necesitaremos el punto de origen (<span class="i">raycastOrigin</span>) y la dirección de cada uno de esos rayos.</p>
		<p>Estos rayos nos devolverán más adelante cuál es el objeto con el que están colisionando.</p>
	<p class="bold">No olvides que es necesario estar usando un <span class="i">BoxCollider2D</span></p>	
<pre><span class="bold">Controller2D.cs</span><code>public class Controller2D : RaycastController{
	public void Move(Vector3 velocity){
		UpdateRaycastOrigins();
		VerticalCollisions();
		<span class="gris">transform.Translate(velocity);</span>
	}

	public void VerticalCollisions(){
		for (int i = 0; i &lt; verticalRayCount; i++){
			Vector2 rayOrigin = raycastOrigins.bottomLeft;
			rayOrigin += Vector2.right * verticalRaySpacing * i;
			Debug.DrawRay(rayOrigin, Vector2.up * -2, Color.red);
		}
	}
}
</code></pre>
<pre><span class="bold">RaycastController.cs</span><code>using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class RaycastController : MonoBehaviour{
	const float dstBetweenRays = 0.25f;
	[HideInInspector]
	public int verticalRayCount = 4; // lanzaremos 4 rayos hacia abajo. Esto se podr&aacute; cambiar desde el inspector
	[HideInInspector]
	public float verticalRaySpacing = 1;
	public BoxCollider2D collider;
	// raycastOrigins es una estructura que contiene las coordenadas de cada una de las cuatro esquinas del cubo
	public RaycastOrigins raycastOrigins;

	public virtual void Start(){
		collider = GetComponent&lt;BoxCollider2D&gt;();
		CalculateRaySpacing();
	}
    
	public void UpdateRaycastOrigins(){
		Bounds bounds = collider.bounds;
		raycastOrigins.<span class="blue">bottomLeft</span> = new Vector2(bounds.min.x, bounds.min.y);
		raycastOrigins.<span class="blue">bottomRight</span> = new Vector2(bounds.max.x, bounds.min.y);
		raycastOrigins.<span class="blue">topLeft</span> = new Vector2(bounds.min.x, bounds.max.y);
		raycastOrigins.<span class="blue">topRight</span> = new Vector2(bounds.max.x, bounds.max.y);
	}

	public void CalculateRaySpacing(){
		Bounds bounds = collider.bounds;
		float boundsWidth = bounds.size.x;
		verticalRayCount = Mathf.RoundToInt(boundsWidth / dstBetweenRays);
		verticalRaySpacing = bounds.size.x / (verticalRayCount - 1);
	}

	public struct RaycastOrigins{
		public Vector2 <span class="blue"> topLeft, topRight, bottomLeft, bottomRight</span>;
	}
}</code></pre>
		<h3>Skin Width</h3>
		<p>Con el objetivo de que cuando el <span class="i">player</span> esté descansando sobre el suelo y por tanto no haya separación con él podamos seguir lanzando un rayo vericalmente hacia abajo, vamos a aplicar una pequeña seaparación de los rayos respecto a los límites del cubo para que estos no salgan desde sus límites, sino desde un poco más adentro.</p>

<div class="row">
	<div class="col-md-8">
	<img class="img-fluid" src="imgs/plataformas-con-raycast/el-cubo-con-los-rayos.png" alt="cubo con rayos en unity 3d">
	</div>
	<div class="col-md-4">
	<pre><span class="bold">RaycastController.cs</span><code>public const float skinWidth = .015f;
...
<span class="gris">void UpdateRaycastOrigins(){
	Bounds bounds = collider.bounds;</span>
	bounds.Expand(skinWidth * -2);
	...
<span class="gris">void CalculateRaySpacing(){
	Bounds bounds = collider.bounds;</span>
	bounds.Expand(skinWidth * -2);
	...</code></pre>
		
	</div>
</div>

<h3>Detección de colisión</h3>


<div class="row">
	<div class="col-md-9">
	<pre><span class="bold">Controller2D.cs</span><code>public LayerMask collisionMask;

public void Move(Vector3 velocity){
	<span class="gris">UpdateRaycastOrigins();</span>
	VerticalCollisions(ref velocity);
	<span class="gris">transform.Translate(velocity);</span>
}

void VerticalCollisions(ref Vector3 velocity){
	float directionY = Mathf.Sign(velocity.y);
	float rayLength = Mathf.Abs(velocity.y) + skinWidth;
	<span class="gris">for (int i = 0; i < verticalRayCount; i++){
		...</span>
		RaycastHit2D hit = Physics2D.Raycast(rayOrigin, Vector2.up * directionY, rayLength, collisionMask);
		if (hit){
			velocity.y = (hit.distance - skinWidth) * directionY;
			rayLength = hit.distance;
		}
	}
}</code></pre>				
	</div>
	<div class="col-md-3">
	<p>A los objetos con los que deseamos colisionar debemos asignarles el <span class="i">layer</span> <span class="i">Obstacle</span>.</p>
    <p>Debemos asignar al collisionMask del player que colisione con los objetos de la <span class="i">layer</span> <span class="i">Obstacle</span>.</p>
    <img class="img-fluid" src="imgs/plataformas-con-raycast/unity-3d-obstacle.png" alt="uso de layers">

	</div>
	
</div>
		
		
	<h3>Movimiento horizontal</h3>
<p>Moveremos al player con las teclas <span class="i">a</span> y <span class="i">d</span>. Si usamos las flechas del teclado para mover al player podemos tener conflictos ya que las flechas tienen funciones dentro de Unity.</p>

<p>No te olvides de vincular la nueva clase PlayerInput.cs que vamos a crear al Player)</p>
<pre><span class="bold" style="overflow:auto">PlayerInput.cs</span><code>[RequireComponent(typeof(Player))]
public class PlayerInput : MonoBehaviour{
	Player player;
	void Start(){
		player = GetComponent&lt;Player&gt;();
	}
	void Update(){
		Vector2 directionalInput = new Vector2(Input.GetAxisRaw(&quot;Horizontal&quot;), Input.GetAxisRaw(&quot;Vertical&quot;));
		player.SetDirectionalInput(directionalInput);
	}
}</code></pre>
<pre><span class="bold">Player.cs</span><code>float moveSpeed = 6;
Vector2 directionalInput;

void CalculateVelocity(){
	velocity.x = directionalInput.x * moveSpeed;
	...
}

public void SetDirectionalInput(Vector2 input){
	directionalInput = input;
}</code></pre>
<h3>Lanzamos los rayos un poco adelante en la dirección en la que el player se está moviendo</h3>
<p>Vamos a lanzar el rayo en la posición en la que estaremos un momento después. Esto nos permitirá anticipar las colisiones en la dirección del movimiento. Primero evaluaremos si habrá colisión y después ejecutaremos el movimiento.</p>
<pre><span class="bold">Controller2D.cs</span><code>void VerticalCollisions(ref Vector3 velocity){
	...
	<span class="tachado">rayOrigin += Vector2.right * verticalRaySpacing * i;</span>
	rayOrigin += Vector2.right * (verticalRaySpacing * i + velocity.x);
	...
}</code></pre>
	<h3>Colisión horizontal</h3>
	<pre><span class="bold">RaycastController.cs</span><code>[HideInInspector]
public int horizontalRayCount = 4;
[HideInInspector]
public float horizontalRaySpacing;

...
void CalculateRaySpacing(){
	...
	horizontalRayCount = Mathf.Clamp(horizontalRayCount, 2, int.MaxValue);
	horizontalRaySpacing = bounds.size.y / (horizontalRayCount - 1);
}</code></pre>
<pre><span class="bold">Controller2D.cs</span><code>public void Move(Vector3 velocity){
	<span class="gris">UpdateRaycastOrigins();</span>
	HorizontalCollisions(ref velocity);
	<span class="gris">VerticalCollisions(ref velocity);
	transform.Translate(velocity);</span>
}
void HorizontalCollisions(ref Vector3 velocity){
	float directionX = Mathf.Sign(velocity.x);
	float rayLength = Mathf.Abs(velocity.x) + skinWidth;
	for (int i = 0; i < horizontalRayCount; i++){
		Vector2 rayOrigin = (directionX == -1) ? raycastOrigins.bottomLeft : raycastOrigins.bottomRight;
		rayOrigin += Vector2.up * horizontalRaySpacing * i;
		RaycastHit2D hit = Physics2D.Raycast(rayOrigin, Vector2.right * directionX, rayLength, collisionMask);
		Debug.DrawRay(rayOrigin , Vector2.right * directionX * rayLength, Color.blue);
		if (hit){
			velocity.x = (hit.distance - skinWidth) * directionX;
			rayLength = hit.distance;
		}
	}
}</code></pre>
	<h3>Gestionar colisiones sólo cuando el player se mueva</h3>
	<pre><span class="bold">Controller2D.cs</span><code><span class="gris">public void Move(Vector3 velocity){
	UpdateRaycastOrigins();</span>
	<span class="tachado">HorizontalCollisions(ref velocity);</span>
	<span class="tachado">VerticalCollisions(ref velocity);</span>
	if (velocity.x != 0) {
		HorizontalCollisions(ref velocity);
	}

	if(velocity.y != 0){
		VerticalCollisions(ref velocity);
	}
	transform.Translate(velocity);
}</code></pre>
	<h3>No acumular gravedad mientras estamos en una plataforma</h3>
	<p>Antes de ejecutar este paso, veremos que si despues de caer sobre la plataforma salimos de la misma, el player bajará muy bruscamente hacia abajo. Para evitarlo, dejaremos de acumular velocidad cuando el <span class="i">Player</span> esté sobre una plataforma.</p>
	<p>Después de ejecutar este paso, el <span class="i">player</span> caerá muy lentamente. Para corregir esto, ejecutaremos el paso siguiente.</p>
<pre><span class="bold">Controler2D.cs</span><code>public CollisionInfo collisions;

void VerticalCollisions(ref Vector3 velocity){
	...
		<span class="gris">if (hit){
			velocity.y = (hit.distance - skinWidth) * directionY;
			rayLength = hit.distance;</span>
			collisions.below = directionY == -1; // Si está llendo hacia arriba, y colisiona, <span class="i">below</span> valdrá true
			collisions.above = directionY == 1; // Si está llendo hacia abajo, y colisiona, <span class="i">above</span> valdrá true
		}
	}
}

void HorizontalCollisions(ref Vector3 velocity){
	...
		<span class="gris">if (hit){
			velocity.x = (hit.distance - skinWidth) * directionX;
			rayLength = hit.distance;</span>
			collisions.left = directionX == -1; // Si está llendo hacia la izquierda, y colisiona, <span class="i">left</span> valdrá true
			collisions.right = directionX == 1; // Si está llendo hacia la derecha, y colisiona, <span class="i">right</span> valdrá true
		}
	}
}

public struct CollisionInfo{
	public bool above, below;
	public bool left, right;
}</code></pre>
<pre><span class="bold">Player.cs</span><code>void Update(){
	<span class="gris">CalculateVelocity();
	controller.Move(velocity * Time.deltaTime);</span>

	if (controller.collisions.above || controller.collisions.below){
		velocity.y = 0;
	}
}</code></pre>
		<h3>Resetear collisionInfo</h3>


		<div class="row">
			<div class="col-md-6">
			<p>Si no volvemos a poner a <span class="i">false</span> las variables <span class="i">above</span>, <span class="i">below</span>, <span class="i">left</span> y <span class="i">right</span>, continuarán indefinidamente valiendo true después de una colisión y por tanto la <span class="i">velocity.y</span> del cubo se mantendrá a 0.</p>
			</div>
			<div class="col-md-6">
			<pre><span class="bold">Controller2D.cs</span><code>public void Move(Vector3 velocity){
	<span class="gris">UpdateRaycastOrigins();</span>
	collisions.Reset();
	...
}

public struct CollisionInfo{
	...

	public void Reset(){
		above = below = false;
		left = right = false;
	}
}</code></pre>
			</div>
		</div>

	
<h3>Saltar</h3>

<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">Player.cs</span><code>float jumpVelocity = 8;
public void OnJumpInputDown(){
	if (controller.collisions.below){
	velocity.y = jumpVelocity;
	}
}</code></pre>
	</div>
	<div class="col-md-6">
	<pre><span class="bold">PlayerInput.cs</span><code>Update(){
	...
	if (Input.GetKeyDown(KeyCode.Space)){
		player.OnJumpInputDown();
	}
}</code></pre>
	</div>
</div>

	

	
<h3>Transformar <span class="i">jumpHeight</span> y <span class="i">timeToJumpApex</span> en <span class="i">gravity</span> y <span class="i">velocity</span></h3>
	<p><span class="i">jumpHeight</span> y <span class="i">timeToJumpApex</span> serán unidades más útiles para trabajar.</p>
	<pre><span class="bold">Player.cs</span><code>public float jumpHeight = 4;
public float timeToJumpApex = .4f;

void Start(){
	<span class="gris">controller = GetComponent&lt;Controller2D&gt;();</span>

	gravity = -(2 * jumpHeight) / Mathf.Pow(timeToJumpApex, 2);
	jumpVelocity = Mathf.Abs(gravity) * timeToJumpApex;
}</code></pre>



	<h3>Deceleración progresiva en los cambios de dirección</h3>
	<pre><span class="bold">Player.cs</span><code>float velocityXSmoothing;
float accelerationTimeAirborne = .2f;
float accelerationTimeGrounded = .1f;


void CalculateVelocity(){
	float targetVelocityX = directionalInput.x * moveSpeed;
	velocity.x = Mathf.SmoothDamp(velocity.x, targetVelocityX, ref velocityXSmoothing, (controller.collisions.below)?accelerationTimeGrounded: accelerationTimeAirborne);
	<span class="tachado">velocity.x = directionalInput.x * moveSpeed;</span>
	<span class="gris">velocity.y += gravity * Time.deltaTime;</span>
}</code></pre>
	<h3>Subiendo cuestas</h3>
	<p>Con el código que tenemos hasta ahora, el <span class="i">player</span> subirá las cuestas muy lentamente. Vamos a adaptar nuestro código para que la subida se realice a la misma velocidad que cuando el <span class="i">player</span> avanza horizontalmente.</p>
	<pre><span class="bold">Controller2D.cs</span><code>float maxClimbAngle = 80;

void HorizontalCollisions(ref Vector3 velocity){
	...
		<span class="gris">if (hit){</span>
			float slopeAngle = Vector2.Angle(hit.normal, Vector2.up);
			if(i == 0 && slopeAngle <= maxClimbAngle){
				ClimbSlope(ref velocity, slopeAngle);
			}
			...
	<span class="gris">	}
	}
}</span>

void ClimbSlope(ref Vector3 velocity, float slopeAngle){
	float moveDistance = Mathf.Abs(velocity.x);
	velocity.y = Mathf.Sin(slopeAngle * Mathf.Deg2Rad) * moveDistance;
	velocity.x = Mathf.Cos(slopeAngle * Mathf.Deg2Rad) * moveDistance * Mathf.Sign(velocity.x); 
}</code></pre>
<h4>Corregir la imposibilidad de saltar mientras subimos una cuesta</h4>
	<p>El siguiente código nos permitirá saltar en una cuesta, pero sólo cuando estamos subiendo.</p>
	<pre><code>void ClimbSlope(ref Vector3 velocity, float slopeAngle){
	float moveDistance = Mathf.Abs(velocity.x);
	float climbVelocityY = Mathf.Sin(slopeAngle * Mathf.Deg2Rad) * moveDistance;
	if(velocity.y <= climbVelocityY){
		velocity.y = climbVelocityY;
		velocity.x = Mathf.Cos(slopeAngle * Mathf.Deg2Rad) * moveDistance * Mathf.Sign(velocity.x);
		collisions.below = true;
	}
}</code></pre>
<h4>Optimizamos el código para que la gestión de la colisión con la rampa sólo se ejecute cuando sea necesario</h4>

<div class="row">
	<div class="col-md-5"><p>Ahora mismo, cuando el player choca de frente contra el inicio de una rampa, puede pasar que se quede trabado y no la suba. Esto se solucionará en los dos siguientes pasos (<span class="i">corrección del tembleque al colisionar de frente cuando estamos subiendo una rampa</span> y <span class="i">corrección del tembleque al colisionar por arriba</span>.)</p></div>
	<div class="col-md-7"><pre><span class="bold">Controller2D.cs</span><code>void HorizontalCollisions(ref Vector3 velocity){
	...
	if (hit){
		<span class="gris">...</span>
		if(!collisions.climbingSlope || slopeAngle > maxClimbAngle){
			<span class="gris">velocity.x = (hit.distance - skinWidth) * directionX;
			rayLength = hit.distance;

			collisions.left = directionX == -1;
			collisions.right = directionX == 1;</span>
		}
	}
}

void ClimbSlope(ref Vector3 velocity, float slopeAngle){
	<span class="gris">...
	if(velocity.y <= climbVelocityY){
		...</span>
		collisions.climbingSlope = true;
		collisions.slopeAngle = slopeAngle;
	}
}

public struct CollisionInfo{
	<span class="gris">public bool above, below;
	public bool left, right;</span>
	public bool climbingSlope;
	public float slopeAngle, slopeAngleOld;
	public void Reset(){
		<span class="gris">above = below = false;
		left = right = false;</span>
		climbingSlope = false;
		slopeAngleOld = slopeAngle;
	}
}</code></pre></div>
</div>


	
<h4>Corrección del tembleque al colisionar de frente cuando estamos subiendo una rampa</h4>
	<p>Esto ocurre sólo cuando el alto de la pared contra la que colisionamos no abarca toda la altura del player.</p>
	
	<div class="row">
		<div class="col-md-4">
		<img class="img-fluid" src="imgs/plataformas-con-raycast/colision-tembleque-colision-de-frente.png" alt="colisión del tembleque al colisionar de frente">
		</div>
		<div class="col-md-8">
		<pre><code>void HorizontalCollisions(ref Vector3 velocity){
	...
	<span class="gris">if (!collisions.climbingSlope || slopeAngle > maxClimbAngle) {
		velocity.x = (hit.distance - skinWidth) * directionX;
		rayLength = hit.distance;</span>

		if (collisions.climbingSlope){
			velocity.y = Mathf.Tan(collisions.slopeAngle * Mathf.Deg2Rad) * Mathf.Abs(velocity.x);
		}
		<span class="gris">collisions.left = directionX == -1;
		collisions.right = directionX == 1;</span>
	}
	...
}</code></pre>
		</div>
	</div>
	
	
	
<h4>Corrección del tembleque al colisionar por arriba</h4>
<div class="row">
	<div class="col-md-2">
	<img class="img-fluid" src="imgs/plataformas-con-raycast/problema-subida.png" alt="problema al colisionar contra un techo">
	</div>
	<div class="col-md-10">
	<pre><span class="bold">Controller2D.cs</span><code>void VerticalCollisions(ref Vector3 velocity){
	<span class="gris">...
	for (int i = 0; i < verticalRayCount; i++){</span>
		<span class="tachado">Vector2 rayOrigin =  raycastOrigins.bottomLeft;</span>
		Vector2 rayOrigin = (directionY == -1) ? raycastOrigins.bottomLeft : raycastOrigins.topLeft;
		<span class="gris">//Si el player está bajando, el rayo saladrá desde su parte inferior, pero si está subiendo, saldrá desde la superior</span>
		...

		<span class="gris">if (hit){
			velocity.y = (hit.distance - skinWidth) * directionY;
			rayLength = hit.distance;</span>

			if (collisions.climbingSlope){
				velocity.x = velocity.y / Mathf.Tan(collisions.slopeAngle * Mathf.Deg2Rad) * Mathf.Sign(velocity.x);
			}

			<span class="gris">collisions.below = directionY == -1;
			collisions.above = directionY == 1;</span>
		}
	}
}</code></pre>
	</div>
</div>	


	
<h3>Bajando cuestas</h3>
	<p>Cuando la cuesta sea bastante pronunciada, hasta ahora, el cubo estaba bajando dando saltitos. Para corregirlo, utilizaremos el siguiente código.</p>
	<pre><span class="bold">Controller2D.cs</span><code>float maxDescendAngle = 80;

public void Move(Vector3 velocity){
	<span class="gris">UpdateRaycastOrigins();
	collisions.Reset();</span>
	if(velocity.y < 0){
		DescendSlope(ref velocity);
	}
	...

void DescendSlope(ref Vector3 velocity){
	float directionX = Mathf.Sign(velocity.x);
	Vector2 rayOrigin = (directionX == -1) ? raycastOrigins.bottomRight : raycastOrigins.bottomLeft;
	RaycastHit2D hit = Physics2D.Raycast(rayOrigin, -Vector2.up, Mathf.Infinity, collisionMask);
	if (hit){
		float slopeAngle = Vector2.Angle(hit.normal, Vector2.up);
		if(slopeAngle != 0 && slopeAngle <= maxDescendAngle){
			if(Mathf.Sign(hit.normal.x) == directionX){
				if(hit.distance - skinWidth <= Mathf.Tan(slopeAngle * Mathf.Deg2Rad) * Mathf.Abs(velocity.x)){
					float moveDistance = Mathf.Abs(velocity.x);
					float descendVelocityY = Mathf.Sin(slopeAngle * Mathf.Deg2Rad) * moveDistance;
					velocity.x = Mathf.Cos(slopeAngle * Mathf.Deg2Rad) * moveDistance * Mathf.Sign(velocity.x);
					velocity.y -= descendVelocityY;
					collisions.slopeAngle = slopeAngle;
					collisions.descendingSlope = true;
					collisions.below = true;
				}
			}
		}
	}
}

public struct CollisionInfo{
	...
	public bool descendingSlope;
	...
	public void Reset(){
		...
		descendingSlope = false;
		slopeAngle = 0;
	}
}</code></pre>
<h4>Corrección de la pequeña parada que hace el player al converger dos rampas de subida y bajada</h4>
	
<div class="row">
	<div class="col-md-6">
	<p>Esto no ocurre en todos los casos, pero sí en algunos.</p>
	<img src="imgs/plataformas-con-raycast/rampa-subida-bajada.png" alt="rampa de subida y bajada">
	</div>
	<div class="col-md-6">
	<pre><span class="bold">Controller2D.cs</span><code>public void Move(Vector3 velocity) {
	<span class="gris">UpdateRaycastOrigins();
	collisions.Reset();</span>
	collisions.velocityOld = velocity;
	...
}

void HorizontalCollisions(ref Vector3 velocity){
	...
	<span class="gris">if (i == 0 && slopeAngle <= maxClimbAngle) {</span>
		if (collisions.descendingSlope){
			collisions.descendingSlope = false;
			velocity = collisions.velocityOld;
		}
		<span class="gris">ClimbSlope(ref velocity, slopeAngle);</span>
	}
	...
}</span>

public struct CollisionInfo{
	public Vector3 velocityOld;
	...
}</code></pre>
	</div>
</div>




<h3>Plataformas móviles</h3>
		
<div class="row">
	<div class="col-md-6">
	<ul>
		<li>Cuando la plataforma se mueve en horizontal, el <span class="i">Player</span> se quedará quieto mientras la plataforma avanza. Este será un problema que arreglemos en el siguiente paso.</li>
		<li>La plataforma se moverá en una única dirección hasta salir por los límites de la pantalla.</li>

	</ul>

	</div>
	<div class="col-md-6">
	<pre><span class="bold">PlatformController.cs</span><code>public class PlatformController : RaycastController{
	public Vector3 move;

	public override void Start(){
		base.Start();
	}

	void Update(){
		UpdateRaycastOrigins();
		Vector3 velocity = move * Time.deltaTime;
		transform.Translate(velocity);
    }
}</code></pre>
	</div>
</div>


<p>Habrá que darle valor al Vector3 en el inspector.</p>
<h4>Mover correctamente al player sobre la plataforma</h4>
<ul>
	<li>De momento sólo estamos controlando el movimiento del player sobre la plataforma cuando esta se mueve verticalmente.</li>
	<li>Debes asegurarte de que la plataforma tiene rayos suficientes como para colisionar contra el <span class="i">Player</span>.</li>
	<li>El valor de la propiedad <span class="i">passengerMask</span> será <span class="i">player</span>. Para que funcione, asignaremos el <span class="i">layer</span> <span class="i">player</span> al objeto <span class="i">Player</span>.</li>
</ul>
<pre><span class="bold">PlatformController.cs</span><code>public LayerMask passengerMask;
void Update(){
	...
	MovePassengers(velocity);
}


void MovePassengers(Vector3 velocity){
	HashSet&lt;Transform&gt; movedPassengers = new HashSet&lt;Transform&gt;();
	float directionX = Mathf.Sign(velocity.x);
	float directionY = Mathf.Sign(velocity.y);

	if (velocity.y != 0){
		float rayLength = Mathf.Abs(velocity.y) + skinWidth;
		for (int i = 0; i &lt; verticalRayCount; i++){
			//Si el player est&aacute; bajando, el rayo saladr&aacute; desde su parte inferior, pero si est&aacute; subiendo, saldr&aacute; desde la superior
			Vector2 rayOrigin = (directionY == -1) ? raycastOrigins.bottomLeft : raycastOrigins.topLeft;
			rayOrigin += Vector2.right * (verticalRaySpacing * i);
			RaycastHit2D hit = Physics2D.Raycast(rayOrigin, Vector2.up * directionY, rayLength, passengerMask);
			Debug.DrawRay(rayOrigin, Vector2.up * directionY, Color.blue); 

			if (hit){
				if (!movedPassengers.Contains(hit.transform)){
					movedPassengers.Add(hit.transform);
					float pushX = (directionY == 1) ? velocity.x : 0;
					float pushY = velocity.y - (hit.distance - skinWidth) * directionY;
					hit.transform.Translate(new Vector3(pushX, pushY));
				}
			}
		}
	}
}</code></pre>
<h4>Gestionar movimiento del player cuando la plataforma se mueve horizontalmente</h4>
	<p>Cuando implementemos el siguiente código, todavía tendremos errores, ya que la plataforma resbalará por debajo del player. Esto será algo que corregiremos en el siguiente paso.</p>
<pre><span class="bold">PlatformController.cs</span><code>void MovePassengers(Vector3 velocity){
	...	
	if (velocity.x != 0) {
		float rayLength = Mathf.Abs (velocity.x) + skinWidth;
			
		for (int i = 0; i < horizontalRayCount; i ++) {
			Vector2 rayOrigin = (directionX == -1)?raycastOrigins.bottomLeft:raycastOrigins.bottomRight;
			rayOrigin += Vector2.up * (horizontalRaySpacing * i);
			RaycastHit2D hit = Physics2D.Raycast(rayOrigin, Vector2.right * directionX, rayLength, passengerMask);

			if (hit) {
				if (!movedPassengers.Contains(hit.transform)) {
					movedPassengers.Add(hit.transform);
					float pushX = velocity.x - (hit.distance - skinWidth) * directionX;
					float pushY = -skinWidth;
						
					hit.transform.Translate(new Vector3(pushX,pushY));
				}
			}
		}
	}
}</code></pre>
<h4>Corregir errores del movimiento horizontal y hacia abajo de la plataforma</h4>
	<pre><span class="bold">PlatformController.cs</span><code>void MovePassengers(Vector3 velocity){
	...
	// Si el pasajero está encima de una plataforma que se mueve hacia abajo u horizontalmente
	if (directionY == -1 || velocity.y == 0 && velocity.x != 0){
		float rayLength = skinWidth * 2;
		for (int i = 0; i < verticalRayCount; i++){
			//Si el player está bajando, el rayo saladrá desde su parte inferior, pero si está subiendo, saldrá desde la superior
			Vector2 rayOrigin = raycastOrigins.topLeft + Vector2.right * (verticalRaySpacing * i);
			RaycastHit2D hit = Physics2D.Raycast(rayOrigin, Vector2.up, rayLength, passengerMask);
			if (hit){
				if (!movedPassengers.Contains(hit.transform)){
					movedPassengers.Add(hit.transform);
					float pushX = velocity.x;
					float pushY = velocity.y;
					hit.transform.Translate(new Vector3(pushX, pushY));
				}
			}
		}
	}
}</code></pre>
<h4>Gestionar la colisión de la plataforma con paredes</h4>
	<p>Renombramos la función <span class="i">MovePassengers</span> como <span class="i">CalculatePassengerMovement</span> y creamos la función <span class="i">MovePassenger</span>.</p>
<pre><span class="bold">PlatformController.cs</span><code>List&lt;PassengerMovement&gt; passengerMovement;

void Update(){
	<span class="gris">UpdateRaycastOrigins();
	Vector3 velocity = move * Time.deltaTime;</span>
		
	CalculatePassengerMovement(velocity);
	<span class="tachado">MovePassengers(velocity);</span>
	MovePassengers(true);
	<span class="gris">transform.Translate(velocity);</span>
	MovePassengers(false);
}

void MovePassengers(bool beforeMovePlatform){
	foreach(PassengerMovement passenger in passengerMovement){
		if(passenger.moveBeforePlatform == beforeMovePlatform){
			passenger.transform.GetComponent&lt;Controller2D&gt;().Move(passenger.velocity);
		}
	}
}

void CalculatePassengerMovement(Vector3 velocity){
	passengerMovement = new List&lt;PassengerMovement&gt;();
	<span class="gris">...
	if(velocity.y != 0){
		...
		if (!movedPassengers.Contains(hit.transform)){
			...</span>
			<span class="tachado">hit.transform.Translate(new Vector3(pushX, pushY));</span></span>
			passengerMovement.Add(new PassengerMovement(hit.transform, new Vector3(pushX, pushY), directionY==1, true));
		<span class="gris">}
	...
				}
	if (velocity.x != 0){
		...
		if (!movedPassengers.Contains(hit.transform)){
			...
			<span class="tachado">hit.transform.Translate(new Vector3(pushX, pushY));</span></span>
			passengerMovement.Add(new PassengerMovement(hit.transform, new Vector3(pushX, pushY), false, true));
		<span class="gris">}
		...
	}	
	if(directionY == -1 || velocity.y == 0 && velocity.x != 0){
		...
		if (!movedPassengers.Contains(hit.transform)){
			...</span>
			<span class="tachado">hit.transform.Translate(new Vector3(pushX, pushY));</span>
			passengerMovement.Add(new PassengerMovement(hit.transform, new Vector3(pushX, pushY), true, false));
		}
		...
	}
}

struct PassengerMovement {
	public Transform transform;
	public Vector3 velocity;
	public bool standingOnPlatform;
	public bool moveBeforePlatform;

	public PassengerMovement(Transform _transform, Vector3 _velocity, bool _standingOnPlatform, bool _moveBeforePlatform) {
		transform = _transform;
		velocity = _velocity;
		standingOnPlatform = _standingOnPlatform;
		moveBeforePlatform = _moveBeforePlatform;
	}
}</code></pre>	
<!--pre><span class="bold">Controller2D.cs</span><code><span class="tachado">public void Move(Vector3 velocity){</span>
public void Move(Vector3 velocity, bool standingOnPlatform = false){
	...
	if (standingOnPlatform){
		collisions.below = true;
	}
}
</code></pre-->
<h4>Reducir el número de llamadas al método GetComponent</h4>
	<p>Añadimos a un diccionario el componente <span class="i">Controller2D</span> del player, para en lo sucesivo no tener que llamar al método <span class="i">GetComponent</span>.</p>
	<pre><span class="bold">PlatformController.cs</span><code>Dictionary&lt;Transform, Controller2D&gt; passengerDictionary = new Dictionary&lt;Transform, Controller2D&gt;();
<span class="gris">void MovePassengers(bool beforeMovePlatform){
	foreach(PassengerMovement passenger in passengerMovement){</span>
		if (!passengerDictionary.ContainsKey(passenger.transform)){
			passengerDictionary.Add(passenger.transform, passenger.transform.GetComponent&lt;Controller2D&gt;());
		}

		<span class="gris">if(passenger.moveBeforePlatform == beforeMovePlatform){</span>
			<span class="tachado">passenger.transform.GetComponent&lt;Controller2D&gt;().Move(passenger.velocity);</span>
			passengerDictionary[passenger.transform].Move(passenger.velocity);
		<span class="gris">}</span>
	<span class="gris">}
}</span></code></pre>
<h4>Corregir algunos problemas del player sobre la plataforma</h4>
<ul>
	<li>A veces el player no puede saltar cuando la plataforma se desplaza verticalmente</li>
	<li>Cuando la plataforma aterriza sobre el <span class="i">player</span> este se desplaza horizontalmente.</li>
</ul>
<pre><span class="bold">PlatformController.cs</span><code><span class="gris">void MovePassengers(bool beforeMovePlatform){
	foreach(PassengerMovement passenger in passengerMovement){
		...
		if (passenger.moveBeforePlatform == beforeMovePlatform){</span>
			<span class="tachado">passengerDictionary[passenger.transform].Move(passenger.velocity);</span>
			passengerDictionary[passenger.transform].Move(passenger.velocity,passenger.standingOnPlatform);
		<span class="gris">}
	}</span></code></pre>
<p>Actualizamos el método <span class="i">move</span> con el siguiente código:</p>
<pre><span class="bold">Controller2D.cs</span><code><span class="gris">public void Move(Vector3 velocity</span>, bool standingOnPlatform = false <span class="gris">){
	...</span>
	if( standingOnPlatform){
		collisions.below = true;
	}
}</code></pre>
<h4>Solucionar que cuando la plataforma desciende superponiéndose sobre el player mientras este se mueve horizontalmente, el player deja de responder correctamente a los controles horizontales de movimiento</h4>


<div class="row">
	<div class="col-md-6">
	<p>Cuando el cubo se superpone sobre la plataforma, su distancia a la misma será cero. En estos casos, queremos que igualmente, la plataforma se pueda mover correctamente horizontalmente, por eso hacemos un <span class="i">continue</span>, para no tener en cuenta ese rayo.</p>
	<p>Si el cubo lanza sus rayos contra una pared, el rayo sí que será tenido en cuenta, ya que su distancia no será cero, por tener un skinwidth de separación.</p>
	</div>
	<div class="col-md-6">
	<pre><span class="bold">Controller2D.cs</span><code>void HorizontalCollisions(ref Vector3 velocity){
	...
	<span class="gris">if (hit){</span>
		if(hit.distance == 0){
			continue;
		}
		...</code></pre>
	</div>
</div>


	
<h4>Definiendo waypoints para las plataformas</h4>
	<p>Una vez añadido el código, en el panel inspector definiremos los puntos entre los que se moverán las plataformas.</p>
	<p>De momento sólo definiremos los puntos. La plataforma no se moverá entre ellos.</p>
	<pre><span class="bold">PlatformController.cs</span><code>public Vector3[] localWaypoints;

void OnDrawGizmos(){
	if(localWaypoints != null){
		Gizmos.color = Color.red;
		float size = .3f;

		for (int i = 0; i&lt;localWaypoints.Length; i++) {
			Vector3 globalWaypointsPos = localWaypoints[i] + transform.position;
			Gizmos.DrawLine(globalWaypointsPos - Vector3.up * size, globalWaypointsPos + Vector3.up * size);
			Gizmos.DrawLine(globalWaypointsPos - Vector3.left * size, globalWaypointsPos + Vector3.left * size);
		}
	}
}</code></pre>
<p>Definimos dos wayPonts; uno con coordenadas (0,0,0) y otro en el lugar al que queremos que se mueva la plataforma.</p>
<h4>Evitar que la posición de destino del gizmo cambie</h4>
	<p class="red bold">Para probar este punto tendremos que definir valores en el inspector para:</p>
<ul class="red bold">
	<li>Local Waypoints (al menos dos puntos)</li>
	<li>speed</li>
</ul>
	<pre><span class="bold">PlatformController.cs</span><code>Vector3[] globalWaypoints;
public float speed;
int fromWaypointIndex;
float percentBetweenWaypoints;

<span class="gris">public override void Start(){
	base.Start();</span>
	globalWaypoints = new Vector3[localWaypoints.Length];
	for (int i =0; i < localWaypoints.Length; i++) {
		globalWaypoints[i] = localWaypoints[i] + transform.position;
	}
<span class="gris">}</span>

<span class="gris">void OnDrawGizmos(){
	...
	for (int i = 0; i&lt;localWaypoints.Length; i++) {</span>
		<span class="tachado">Vector3 globalWaypointsPos = localWaypoints[i] + transform.position;</span>
		Vector3 globalWaypointsPos = (Application.isPlaying) ? globalWaypoints[i] : localWaypoints[i] + transform.position;
		...


void Update(){
	...
	<span class="tachado">Vector3 velocity = move * Time.deltaTime;</span>
	<span class="bold">Vector3 velocity = CalculatePlatformMovement();</span> //Si no pones esta línea la plataforma no se moverá y no dará error
	...
}
Vector3 CalculatePlatformMovement(){
	int toWaypointIndex = fromWaypointIndex + 1;
	float distanceBetweenWaypoints = Vector3.Distance(globalWaypoints[fromWaypointIndex], globalWaypoints[toWaypointIndex]);
	percentBetweenWaypoints += Time.deltaTime * speed/distanceBetweenWaypoints;
	Vector3 newPos = Vector3.Lerp(globalWaypoints[fromWaypointIndex], globalWaypoints[toWaypointIndex], percentBetweenWaypoints);

	if(percentBetweenWaypoints >= 1){
		percentBetweenWaypoints = 0;
		fromWaypointIndex++;
		if(fromWaypointIndex >= globalWaypoints.Length - 1){
			fromWaypointIndex = 0;
			System.Array.Reverse(globalWaypoints);
		}
	}
	return newPos - transform.position;
}</code></pre>
<h4>La plataforma se mueve cíclicamente</h4>
	
<div class="row">
	<div class="col-md-6">
	<p>Vamos a poder seleccionar si la plataforma volverá a su posición inicial recorriendo el camino inverso o llendo directamente desde el punto final al inicial.</p>
	<p>Fíjate que tendremos que asignar una speed a la plataforma.</p>
	</div>
	<div class="col-md-6">
	<pre><span class="bold">PlatformController.cs</span><code>public bool cyclic;
<span class="gris">Vector3 CalculatePlatformMovement(){</span>
	<span class="tachado">int toWaypointIndex = fromWaypointIndex + 1;</span>
	fromWaypointIndex %= globalWaypoints.Length;
	int toWaypointIndex = (fromWaypointIndex + 1) % globalWaypoints.Length;
	...
	<span class="gris">if(percentBetweenWaypoints >= 1){
		percentBetweenWaypoints = 0;
		fromWaypointIndex++;</span>
		if(!cyclic){
			<span class="gris">if(fromWaypointIndex >= globalWaypoints.Length - 1){
				fromWaypointIndex = 0;
				System.Array.Reverse(globalWaypoints);
			}</span>
		}
	<span class="gris">}</span>

</code></pre>
	</div>
</div>


	
<h4>waitTime</h4>
<p><span class="bold">waitTime</span> será el tiempo que la plataforma se detiene en una posición concreta.</p>
	<pre><span class="bold">PlatformController.cs</span><code>public float waitTime;
float nextMoveTime;

<span class="gris">Vector3 CalculatePlatformMovement(){</span>
	if(Time.time < nextMoveTime){
		return Vector3.zero;
	}
	<span class="gris">...</span>
	<span class="gris">if(percentBetweenWaypoints >= 1){
		...</span>
		nextMoveTime = Time.time + waitTime;
	<span class="gris">}</span>
}</code></pre>
<h4>Aceleración del movimiento</h4>
	<pre><span class="bold">PlatformController.cs</span><code>[Range(0,2)]
public float easeAmount;

float Ease(float x){
	float a = easeAmount +1;
	return Mathf.Pow(x,a) / (Mathf.Pow(x,a) + Mathf.Pow(1-x, a));
}

Vector3 CalculatePlatformMovement(){
	<span class="gris">fromWaypointIndex %= globalWaypoints.Length;
	int toWaypointIndex = (fromWaypointIndex + 1) % globalWaypoints.Length;
	float distanceBetweenWaypoints = Vector3.Distance(globalWaypoints[fromWaypointIndex], globalWaypoints[toWaypointIndex]);</span>
	<span class="gris">percentBetweenWaypoints += Time.deltaTime * speed / distanceBetweenWaypoints;</span>
	<span class="tachado">Vector3 newPos = Vector3.Lerp(globalWaypoints[fromWaypointIndex], globalWaypoints[toWaypointIndex], percentBetweenWaypoints);</span>

	percentBetweenWaypoints = Mathf.Clamp01(percentBetweenWaypoints);
	float easedPercentBetweenWaypoints = Ease(percentBetweenWaypoints);  
	Vector3 newPos = Vector3.Lerp(globalWaypoints[fromWaypointIndex], globalWaypoints[toWaypointIndex], easedPercentBetweenWaypoints);</code></pre>
<h3>Wall jumping</h3>
<h4>Caer derrapando contra una pared vertical</h4>
	<pre><span class="bold">Player.cs</span><code>bool wallSliding;
public float wallSlideSpeedMax = 3;

void Update(){
	<span class="gris">...</span>
	HandleWallSliding();
}

void HandleWallSliding(){
	wallSliding = false;
	if ((controller.collisions.left || controller.collisions.right) && !controller.collisions.below && velocity.y < 0){
		wallSliding = true;
		if (velocity.y < -wallSlideSpeedMax){
			velocity.y = -wallSlideSpeedMax;
		}
	}
}</code></pre>
<h4>Solucionar que las colisiones sólo son detectadas si nos movemos contra la pared</h4>
	<pre><span class="bold">Controller2D.cs</span><code>public override void Start(){
	base.Start();
	collisions.faceDir = 1;
}

<span class="gris">public void Move(Vector3 velocity,</span> bool standingOnPlatform = false <span class="gris">){</span>
	...
	if (velocity.x != 0){</span>
		<span class="tachado">HorizontalCollisions(ref velocity);</span>
		collisions.faceDir = (int)Mathf.Sign(velocity.x);
	}
	...	
	HorizontalCollisions(ref velocity);
	
public struct CollisionInfo{
	public float faceDir;
	...					
}

void HorizontalCollisions(ref Vector3 velocity){
	<span class="tachado">float directionX = Mathf.Sign(velocity.x);</span>
	float directionX = collisions.faceDir;
	<span class="gris">float rayLength = Mathf.Abs(velocity.x) + skinWidth;</span>
	if (Mathf.Abs(velocity.x) < skinWidth){
		rayLength = 2 * skinWidth;
	}
	...
}</code></pre>
<h4>Llegados a este punto es indispensable que no te hayas olvidado de dar este paso:</h4>
	<p>En Edit -> Project Settings -> Physics 2D ...</p>
	<ul class="bold red">
		<li>Desmarcamos la check <span class="i">Reuse Collision Callbacks</span></li>
		<li>Marcamos la check <span class="i">Auto Sync Transforms</span></li>
	</ul>
	<img src="imgs/configuracion-rayos.png" alt="Configuración rayos en Unity">
<h4>Añadimos la posibilidad de saltar mientras nos apoyamos contra la pared</h4>

<div class="row">
	<div class="col-md-6">
	<p>Tendremos que dar valores a las variables de salto en el inspector:</p>
<ul>
	<li>Wall Jump Off(fuerza de salto cuando estamos apoyados en una pared y no tocamos las teclas de dirección): <span class="bold">X: 7.5, Y:16</span></li>
	<li>Wall Jump Climb (fuerza de salto cuando estamos apoyados en una pared y tocamos la tecla para ir en la dirección de la pared): <span class="bold">X: 8.5, Y: 7</span></li>
	<li>Wall Leap (fuerza de salto cuando estamos apoyados en una pared y tocamos la tecla para ir en la dirección contraria de la pared): <span class="bold">X:18, Y: 17</span></li>
</ul>
	</div>
	<div class="col-md-6">
	<pre><span class="bold">Player.cs</span><code>int wallDirX;

float maxJumpVelocity = 20;
float minJumpVelocity = 10;

public Vector2 wallJumpOff;
public Vector2 wallJumpClimb;
public Vector2 wallLeap;

<span class="tachado">public void OnJumpInputDown(){
	if (controller.collisions.below){
		velocity.y = jumpVelocity;
	}
}</span>

public void OnJumpInputDown(){
	if (wallSliding){
		if (wallDirX == directionalInput.x){
			velocity.x = -wallDirX * wallJumpClimb.x;
			velocity.y = wallJumpClimb.y;
		}else if (directionalInput.x == 0){
			velocity.x = -wallDirX * wallJumpOff.x;
			velocity.y = wallJumpOff.y;
		}else{
			velocity.x = -wallDirX * wallLeap.x;
			velocity.y = wallLeap.y;
		}
	}
	if (controller.collisions.below){
		velocity.y = maxJumpVelocity;
	}
}

void HandleWallSliding(){
	wallDirX = (controller.collisions.left) ? -1 : 1;
	<span class="gris">...</span>
}</code></pre>
	</div>
</div>



<h3>Salto a varias alturas</h3>

<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">Player.cs</span><code><span class="tachado">public float jumpHeight;</span>
public float maxJumpHeight = 4;
public float minJumpHeight = 1;
<span class="tachado">float jumpVelocity;</span>

void Start(){
	...
	<span class="tachado">gravity = -(2 * jumpHeight) / Mathf.Pow(timeToJumpApex, 2);</span>
	<span class="tachado">jumpVelocity = Mathf.Abs(gravity) * timeToJumpApex;</span>
	<span class="tachado">gravity = -(2 * jumpHeight) / Mathf.Pow (timeToJumpApex, 2);</span>
	gravity = -(2 * maxJumpHeight) / Mathf.Pow(timeToJumpApex, 2);

	maxJumpVelocity = Mathf.Abs(gravity) * timeToJumpApex;
	minJumpVelocity = Mathf.Sqrt(2 * Mathf.Abs(gravity) * minJumpHeight);
}

public void OnJumpInputUp() {
	if (velocity.y > minJumpVelocity) {
		velocity.y = minJumpVelocity;
	}
}</code></pre>
	</div>
	<div class="col-md-6">
	<pre><span class="bold">PlayerInput.cs</span><code><span class="gris">void Update(){
	...</span>
	if (Input.GetKeyUp (KeyCode.Space)) {
		player.OnJumpInputUp ();
	}
}</code></pre>
	</div>
</div>
	

<h3>Saltar a una plataforma desde abajo</h3>
	<p>Creamos una plataforma con el tag <span class="i">Through</span> y el layer <spain class="i">Obstacle</spain>.</p>
	<pre><span class="bold">Controller2D.cs</span><code><span class="gris">void VerticalCollisions(ref Vector3 velocity){
	if (hit){</span>
		if (hit.collider.tag == "Through"){
			if (directionY == 1){
				continue;
			}
		}
	...</code></pre>
<h4>Corregir el problema de que si no llegamos a la parte superior de la plataforma, igualmente subimos sobre ella</h4>
<pre><span class="bold">Controller2D.cs</span><code><span class="gris">if (directionY == 1 || </span>hit.distance == 0)</code></pre>
<h3>Caer de la plataforma al pulsar <span class="i">abajo</span></h3>
	<p>Será necesario que la plataforma esté etiquetada como "Through".</p>
	
	<div class="row">
		<div class="col-md-6">
		<pre><span class="bold">Controller2D.cs</span><code>public Vector2 playerInput;

public void Move (Vector3 velocity, bool standingOnPlatform){
	Move(velocity, Vector2.zero, standingOnPlatform);
}

public void Move(Vector3 velocity, Vector2 input, bool standingOnPlatform = false){
	<span class="gris">UpdateRaycastOrigins();
	collisions.Reset();
	collisions.velocityOld = velocity;</span>
	playerInput = input;
	...
}

void VerticalCollisions(ref Vector3 velocity){aaaa
	...
	<span class="gris">if (hit){
		if (hit.collider.tag == "Through"){
			if (directionY == 1 || hit.distance == 0){
				continue;
			}</span>
			if (playerInput.y == -1){
				continue;
			}
</code></pre>
		</div>
		<div class="col-md-6">
		<pre><span class="bold">Player.cs</span><code>void Update(){
	...
	<span class="tachado">//controller.Move(velocity * Time.deltaTime);</span>
	controller.Move(velocity * Time.deltaTime, <span class="bold">directionalInput</span>);
	<span class="i">...
}</span></code></pre>
		</div>
	</div>
	


<h3>La cámara</h3>
	<h4>La focus area sigue al player</h4>
	<p>El siguiente script estará vinculado a la cámara del juego. A su propiedad target le daremos le asignaremos al player.</p>
	<p>Cuando probemos nuestro código, deberemos definir un tamaño para la focus area.</p>
	<pre><code>public class CameraFollow : MonoBehaviour{
	public Controller2D target;
	public Vector2 focusAreaSize;

	FocusArea focusArea;

	void Start(){
		focusArea = new FocusArea(target.collider.bounds, focusAreaSize);
	}

	void LateUpdate(){
		focusArea.Update(target.collider.bounds);
	}

	void OnDrawGizmos(){
		Gizmos.color = new Color(1, 0, 0, .5f);
		Gizmos.DrawCube(focusArea.centre, focusAreaSize);
	}
    
	struct FocusArea{
		public Vector2 centre;
		public Vector2 velocity;

		float left, right;
		float top, bottom;

		public FocusArea(Bounds targetBounds, Vector2 size){
			left = targetBounds.center.x - size.x / 2;
			right = targetBounds.center.x + size.x / 2;
			bottom = targetBounds.min.y;
			top = targetBounds.min.y + size.y;

			velocity = Vector2.zero;
			centre = new Vector2((left + right) / 2, (top + bottom) /2); 
		}

		public void Update(Bounds targetBounds){
			float shiftX = 0;
			if(targetBounds.min.x < left){
				shiftX = targetBounds.min.x - left;
			}else if (targetBounds.max.x > right){
				shiftX = targetBounds.max.x - right;
			}
			left += shiftX;
			right += shiftX;

			float shiftY = 0;
			if(targetBounds.min.y < bottom){
				shiftY = targetBounds.min.y - bottom;
			}else if (targetBounds.max.y > top){
				shiftY = targetBounds.max.y - top;
			}
			top += shiftY;
			bottom += shiftY;
			centre = new Vector2((left + right) / 2, (top + bottom) / 2);
			velocity = new Vector2(shiftX, shiftY);
		}
	}
}</code></pre>
<h4>Mejorar el efecto de la cámara</h4>
<p>Vamos a hacer que el <span class="i">player</span> no siempre esté en el centro de la cámara.</p>
<pre><span class="bold">RaycastController.cs</span><code>public virtual void Awake(){
	collider = GetComponent&lt;BoxCollider2D&gt;();
}

<span class="gris">public virtual void Start(){
	<span class="tachado">collider = GetComponent&lt;BoxCollider2D&gt;();</span></span>
	CalculateRaySpacing();
<span class="gris">}</span></code></pre>
<h4>Algunas mejoras</h4>
	<pre><span class="bold">CameraFollow.cs</span><code>public float verticalOffset;

void LateUpdate(){
	...
	Vector2 focusPosition = focusArea.centre + Vector2.up;
	transform.position = (Vector3)focusPosition + Vector3.forward * -10;
}</code></pre>
<h4>Mover la cámara a ambos lados del player</h4>
	<pre><span class="bold">CameraFollow.cs</span><code>float currentLookAheadX;
float targetLookAheadX;
float lookAheadDstX;
float lookAheadDirX;
float lookSmothTimeX;
float smoothLookVelocityX;

<span class="gris">void LateUpdate(){
	focusArea.Update(target.collider.bounds);
	Vector2 focusPosition = focusArea.centre + Vector2.up;</span>

	if(focusArea.velocity.x != 0){
		lookAheadDirX = Mathf.Sign(focusArea.velocity.x);
	}
	targetLookAheadX = lookAheadDirX * lookAheadDstX;
	currentLookAheadX = Mathf.SmoothDamp(currentLookAheadX, targetLookAheadX, ref smoothLookVelocityX, lookSmothTimeX);
	focusPosition += Vector2.right * currentLookAheadX;

	<span class="gris">transform.position = (Vector3)focusPosition + Vector3.forward * -10;
}</span></code></pre>
<h4>Mejorar el posicionamiento de la focus area</h4>
	<p>Realmente, sólo queremos cambiar la posición de la focus area si el jugador mira y camina en cierta dirección, no sólo si camina en esa dirección.</p>
	<pre><span class="bold">CameraFollow.cs</span><code>public float lookSmoothTimeX;
bool lookAheadStopped;
float smoothVelocityY;
public float verticalSmoothTime;

void LateUpdate(){
	focusArea.Update (target.collider.bounds);
	Vector2 focusPosition = focusArea.centre + Vector2.up * verticalOffset;
	if(focusArea.velocity.x != 0){ 
		lookAheadDirX = Mathf.Sign(focusArea.velocity.x);
		if(Mathf.Sign(target.playerInput.x) == Mathf.Sign(focusArea.velocity.x) && target.playerInput.x !=0){
			lookAheadStopped = false;
			targetLookAheadX = lookAheadDirX * lookAheadDstX;
		}else{
			if (!lookAheadStopped){
				lookAheadStopped = true;
				targetLookAheadX = currentLookAheadX + (lookAheadDirX * lookAheadDstX - currentLookAheadX) / 4f;
			}
		}
	}
	currentLookAheadX = Mathf.SmoothDamp(currentLookAheadX, targetLookAheadX, ref smoothLookVelocityX, lookSmoothTimeX);

	focusPosition.y = Mathf.SmoothDamp(transform.position.y, focusPosition.y, ref smoothVelocityY, verticalSmoothTime);   
	focusPosition += Vector2.right * currentLookAheadX;
}</code></pre>
<h4>Mover realmente la cámara</h4>

<div class="row">
	<div class="col-md-10">
	<pre><code>void LateUpdate(){
	transform.position = (Vector3)focusPosition + Vector3.forward * -10;
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes('recurso','./ex/plataformas-con-raycast.zip', 'Descargar código completo') ?>
	</div>
</div>



<h3>Gestionar las animaciones del personaje</h3>

<div class="row">
	<div class="col-md-6">
	<p>Vamos a sustituir el cubo por las correspondientes animaciones. Para ello, definiremos el método <span class="bold">ApplyAnimations</span> dentro de una nueva clase <span class="bold">Anims</span> que se encargará de activar los correspondientes parámetros del animator.</p>
<p>Llamaremos al método <span class="bold">ApplyAnimations</span> al final del método <span class="bold">Update</span> de la clase player.</p>
	</div>
	<div class="col-md-6">
	<pre><code>public class PlayerAnims : MonoBehaviour{
	Player player;
	SpriteRenderer spr;
	bool flipped = false;
	void Start(){
		player = GetComponent<Player>();
		spr = GetComponent<SpriteRenderer>();
	}

	void Update(){
		FlipSprite();
	}

	void FlipSprite(){
		if(flipped && player.velocity.x > 0) {
			flipped = false;
			spr.flipX = false;
		}else if(!flipped && player.velocity.x < 0){
			flipped = true;
			spr.flipX = true;
		}
	}
}</code></pre>
	</div>
</div>



</div></article>

<article><div>
	<h2>Soporte para Oculus Quest</h2>
	<p>Debemos usar como mínimo la versión 2018.4 para arriba</p>
	<h3>Configuración inicial</h3>

<div class="row">
	<div class="col-md-6">
	<h4>Instalar el oculus plugin</h4>
	<ol>
	<li>Unity menu -> Window -> Asset Store</li>
	<li>Escribimos "Oculus integration" en el buscador.</li>
	<li>Instalamos el primer resultado (un plugin gratuito hecho por Oculus).</li>
</ol>
	</div>
	<div class="col-md-6">
	<h4>Instalar los driver de oculus</h4>
<ol>
	<li>Descargamos <a href="https://developer.oculus.com/downloads/package/oculus-adb-drivers/" target="_blank">los drivers de Oculus</a>.</li>
	<li>Descomprimimos el zip -> pulsamos con el botón derecho sobre el fichero android_winusb -> instalar como administrador.</li>
</ol>
	</div>
</div>



<h4>Desbloquear el developer mode en las quest</h4>
	<ol>
		<li>Antes de nada, tendremos que <a href="https://dashboard.oculus.com/organizations/create/" target="_blank">crear una organización en la página de Oculus</a>.</li>
		<li>En la oculus App del móvil -> settings</li>
		<li>Pulsamos en el icono de mis oculus quest para hacer el pairing.</li>
		<li>En el menú contextual pulsamos sobre -> other settings -> Developer mode -> lo activamos</li>	
	</ol>
		<h4>Build Settings</h4>
	<ol>
		<li>File -> Build Settings
				<ol>
					<li>Platform: Android -> Switch Platform</li>
	<li>Texture Compression: ASTC</li>
	<li>Player Settings 
			<ol>
				<li>XR Settings -> Virtual Reallity Supported -> Marcamos la check -> Virtual reality SDKs -> le damos a la cruceta para añadir oculus</li>
	<li>Other Settings -> Minimum API Level ->Seleccionamos la mínima versión del SDK (23 es la recomendada): </li>
			</ol>
		</li>
				</ol>
		</li>
	</ol>
	<h4>Ejecutar en las oculus</h4>
	<ol>
		<li>Para que el ordenador detecte las oculus...
			<ul>
				<li>Nescesitamos conectarlas con un cable que no sólo sirva para cargar, si que también permita la transferencia de datos.</li>
				<li>Tendremos que arrancar la aplicción de Unity. Una vez abierta, es posible que tengamos que ejecutar File -> build settings y hacer Switch Platform a Android.</li>
				<li>Ejecutamos el siguiente comando (suponiendo que tenemos adb instalado):
<pre><code>adb install -r \ruta-apk\prueba.apk</code></pre>
				</li>
			</ul>
		</li>
	</ol>
	<h3>Añadir personaje</h3>
<ol>
<li>Edit → Project Settings... → XR Plugin Management → Install XR Plugin Management → Check en Oculus</li>
</ol>


	<ol>
		<li>Eliminamos la MainCamera (o si no, cuando añadamos el siguiente objeto, tendremos dos cámaras).</li>
		<li>Añadimos a la escena el ovrPlayerController.</li>
		<li>Añadimos un suelo para que el player no se caiga infinitamente</li>
		<li>Probamos la app -> Podemos girar la cabeza y movernos con el joistick</li>
		<li>Mejoramos el rastreo de la cabeza. Al objeto <span class="bold">OVRPlayerController</span> le añadimos el componente <span class="bold">CharacterCameraConstraint</span>. A este componente le asociamos la propiedad <span class="bold">CameraRig</span> con el valor de <span class="bold">OVRCameraRig</span> del OVRPlayerController. También le marcamos la check <span class="bold">autoheight</span>.</li>
	</ol>
	<h3>Añadir mandos</h3>
	<ol>
		<li>Añadimos los siguientes prefabs al objeto <span class="bold">TrackingSpace</span> del OVRPlayerController
			<ul>
				<li>LocalAvatar</li>
				<li>AvatarGrabberLeft</li>
				<li>AvatarGrabberRight</li>
			</ul>
		</li>
		<li>Para que las manos funcionen es necesario introducir la APP Id (que podemos encontrar en <a href="https://dashboard.oculus.com/" target="_blank">https://dashboard.oculus.com/</a>). Si no hubiesemos creado una organización y una app tendríamos que crearlas. Introduciremos la APP ID en:
				<ul>
					<li>Oculus > Avatars > Edit Settings</li>
					<li>Oculus > Platoform > Edit Settings</li>
				</ul>
		</li>
	</ol>
<?php ///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
/*
}if(muestra('ejercicio-animales')){ ?>
<main class="curso">
		<h2 id="ejercicio-animales">Ejercicio: animales</h2>


	<h3 id="sin_animacion">Sin animación</h3>
	<img style="margin:auto; display: block" src="imgs/animales.jpg" alt="animales en unity3d">
	<p>Integrar el siguiente código para que al pulsar el botón de derecha o izquierda, los elementos se desplacen a derecha o izquierda:</p>
	<pre><code>private float pos_center = 0;
private float pos_right = 12f;
private float pos_left = -12f;
private float posicion_objeto;
public GameObject[] personajes;
private float t = 0f;
GameObject personajeSaliente;
GameObject personajeEntrante;
int i=1;

public void right(){
	Debug.Log ("derecha");
	personajeSaliente = personajes [i];
	Debug.Log ("Personaje saliente: " + personajeSaliente.name);
	i--;
	if(i < 0) i = personajes.Length-1;
	personajeEntrante = personajes [i];

	personajeEntrante.transform.position = new Vector2 (pos_center,0);
	personajeSaliente.transform.position = new Vector2 (pos_right,0);
}</code></pre>
<h3 id="con_animacion">Con animación de traslación</h3>
<pre><code>private float t = 0f;

void Update (){
	Debug.Log ("Right pulsado: " + right_pulsado + ", Left pulsado: " + left_pulsado);
	t += 0.5f * Time.deltaTime;
	if (right_pulsado) {
		personajeSaliente.transform.position = new Vector2 (Mathf.Lerp(pos_center, pos_right, t), 0);
		personajeEntrante.transform.position = new Vector2 (Mathf.Lerp(pos_left, pos_center, t), 0);
	}<span class="green">...</span></code></pre>

<?= getRes("recurso","proyectos/animales-con-animacion.zip","Descargar juego") ?>

<h3 id="con_cambio_de_sentido">Con cambio de sentido</h3>
<p>Para cambiar la orientación (derecha o izquierda) de un sprite puedo aplicar el siguiente código:</p>
<pre><code>gameObject.transform.localScale = new Vector2(-1, 1);</code></pre>
<p>Teniendo esto encuenta, hacer que cuando pulso el botón de ir hacia la derecha, el personaje mire hacia la derecha y si pulso el botón de ir hacia la izquierda, el personaje mire hacia la izquierda.</p>
<p><?= getRes("recurso","proyectos/animales-con-cambio-sentido.zip","") ?></p>


<h3 id="con_animacion_sprites">Con animación de los sprites</h3>
<p>Desde el panel Animation crearemos tres animaciones, una por animal. Todas las animaciones tendrán el mismo nombre "andar". Para que no haya conflictos, las guardaremos junto con los sprite asociado en una carpeta diferente. Para crear una animación a partir de un sprites, basta con arrastrar los fotogramas deseados para hacer la animación desde el panel <strong>project</strong> al panel <strong>Animation</strong></p>

<p>Además, dentro de cada respectiva carpeta, guardaremos una animación (llamada "idle") compuesta de un único sprite y correspondiente al animal en reposo.</p>

<p>Al código fuente que ya teníamos debemos añadir este código:</p>
<pre><code><span class="green">#Establecemos una animación por defecto para todos los animales</span>
foreach(GameObject go in personajes){
	go.GetComponent&lt;Animator&gt;().Play("idle");
}

if (right_pulsado) {
	animPersonajeEntrante = personajeEntrante.GetComponent&lt;Animator&gt;();
	animPersonajeEntrante.Play ("andar");
	animPersonajeSaliente = personajeEntrante.GetComponent&lt;Animator&gt;();
	animPersonajeSaliente.Play ("andar");
<span class="greeen">...</span></code></pre>
<?= getRes("recurso","proyectos/animales-con-animacion-2.zip","") ?>

<h3 id="llega_al_final">Cuando el animal llega al final, que se pare</h3>
<p>Debemos añadir y completar el siguiente código:</p>
<pre><code>if (animPersonajeEntrante.transform.position.x == pos_center) {
	...
}</code></pre>

<?= getRes("recurso","proyectos/animales-con-animacion-3.zip","") ?>

<h3 id="haciendo_flip">Haciendo un flip</h3>
<p>Para girar el animal en la dirección en la que va a andar, será necesario hacer un flip. Es posible hacerlo con el siguiente código:</p>
<pre><code>animPersonajeEntrante.gameObject.transform.localScale = new Vector2 (-1, 1);</code></pre>
<?= getRes("recurso","proyectos/animales-con-animacion-4.zip","") ?>

<p>Integrar dicho código en nuestra aplicación.</p>

</main>

<?php 
*/
?>
<h3>Ubicar un panel con código</h3>

<div class="row">
	<div class="col-md-6">
	<p>Para ubicar un panel no usaremos <strong>Transform</strong> sino <strong>RectTransform</strong>.</p>
	<p>En lugar de deginir dónde estará la capa, definiremos su esquina superior derecha y su esquina inferior izquierda:</p>
	</div>
	<div class="col-md-6">
	<pre><code><span class="green">//Defino las coordenadas de las esquina superior derecha de la capa</span>
panel.GetComponent&lt;RectTransform&gt; ().offsetMax = new Vector2 (-70,-70);
<span class="green">// y de la esquina inferior izquierda</span>
panel.GetComponent&lt;RectTransform&gt; ().offsetMin = new Vector2 (70,70);</code></pre>
	</div>
</div>


	

</div></article>

<article><div>
<h2 id="mascara">Máscara en Unity 3D</h2>
		
<div class="row">
	<div class="col-md-5">
	<h3 id="sinCodigo">Sin código</h3>
		<p>Añadimos a un panel un componente de máscara. Cuando el componente de máscara esté activo, sólo se verá la parte de sus hijos que estén ubicados dentro.</p>
	</div>
	<div class="col-md-7">
	<h3 id="conAnimacion">Con animación</h3>
		<p>La siguiente corrutina hace que la máscara se despliegue</p>
		<pre><code>public RectTransform panel;

	IEnumerator Desplegar(){
	float t = 0;

	while (t <= 1) {
		t += 0.1f;
		panel.offsetMin = new Vector2 (panel.offsetMin.x, Mathf.Lerp(306, 0, t));
		yield return new WaitForSeconds (0.05f);
	}
	yield return null;
}</code></pre>
	</div>
</div>


		
<h3 id="ejercicioMascara">Ejercicio</h3>
	<p>Escribir una corrutina para que la máscara se repliegue.</p>
	<h3 id="swipePanel">Swipe panel</h3>
		<h4 id="swipePanelSinCodigo">Sin código</h4>
		<p>Debo crear la siguiente jerarquía de paneles:</p>
		<ul>
			<li><span class="font-weight-bold">Viewport</span> (Con el componente Scroll Rect asociado, tendrá el ancho de la pantalla) <ul>
				<li><span class="font-weight-bold">Content</span> (tendrá el ancho de todos los paneles que contiene)<ul>
					<li>panel1</li>
					<li>panel2</li>
				</ul></li>
			</ul></li>
		</ul>
		
		<div class="row">
			<div class="col-md-6">
			<h4 id="conAjuste">Con ajuste repentino al inicio</h4>
		<pre><code>public ScrollRect scrollRect;

void Start () {
	scrollRect.horizontalNormalizedPosition = 1;	
}</code></pre>
			</div>
			<div class="col-md-6">
			<h4 id="conAjuste2">Con ajuste repentino al moverme</h4>
		<pre><code>void Update(){
	if(Input.GetMouseButtonUp(0)){
		snap ();
	}
}

void snap(){
	float valorActual = scrollRect.horizontalNormalizedPosition;
	valorActual = Mathf.Round (valorActual);
	scrollRect.horizontalNormalizedPosition = valorActual;
}</code></pre>
			</div>
		</div>		


<h4 id="conAjuste3">Con Ajuste animado</h4>
	<p>Para que al soltar el panel este no tiemble, a la propiedad <span class="font-weight-bold">Movement Type</span> del componente <span class="font-weight-bold">Scroll Rect</span> el valor <span class="font-weight-bold">Clamped</span>, en lugar de Elastic.</p>
	<pre><code>void Update(){
	if(Input.GetMouseButtonDown(0)){
		<span class="green">//Si vuelvo a pulsar, cancelo la corrutina anterior para que no se me amontonen corrutinas/*</span>
		StopCoroutine ("Transicion");
	} else if(Input.GetMouseButtonUp(0)){
		snap ();
	}
}

void snap(){
	float valorFinal = scrollRect.horizontalNormalizedPosition;
	Debug.Log ("Valor final: " + valorFinal);
	int cantidadPosiciones = 3;

	valorFinal = Mathf.Round (valorFinal * (cantidadPosiciones-1)) / (cantidadPosiciones-1);
	StartCoroutine ("Transicion", valorFinal);
}

IEnumerator Transicion(float valorFinal){
	float valorInicial = scrollRect.horizontalNormalizedPosition;

	float incremento = (valorFinal > valorInicial) ? 0.01f : -0.01f;

	float direccion = valorInicial - valorFinal;

	while (true){
		valorInicial += incremento;
		if (Mathf.Sign(direccion) != Mathf.Sign(valorInicial - valorFinal)) break;
		scrollRect.horizontalNormalizedPosition = valorInicial;
		yield return new WaitForSeconds(0.05f);
	}
<span class="green">//Los últimos pixeles, los ajustamos a la fuerza</span>
scrollRect.horizontalNormalizedPosition = valorFinal;
}</code></pre>

</div></article>

<article><div>
<h2 id="memory">Memory (juego de las parejas)</h2>
<?= getRes('recurso','ex/memory.zip', 'Descargar juego de las parejas') ?>
		
<div class="row">
	<div class="col-md-5">
	<h3 id="ubicarObjetos">Ubicar objetos en el canvas</h3>
		<p>Creo la siguiente jerarquía de objetos dentro del camvas:</p>
		<ul>
			<li><span class="font-weight-bold">Panel</span> (con el componente vertical layout group)<ul>
				<li><span class="font-weight-bold">panel1</span> (con el componente horizontal layout group)
					<ul>
						<li>carta1</li>
						<li>carta2</li>
						<li>carta3</li>
						<li>carta4</li>
						<li>carta5</li>
					</ul>
				</li>
				<li><span class="font-weight-bold">panel2</span> (con el componente horizontal layout group)
					<ul>
						<li>carta1</li>
						<li>carta2</li>
						<li>carta3</li>
						<li>carta4</li>
						<li>carta5</li>
					</ul></li>
				</ul></li>
			</ul>
	</div>
	<div class="col-md-7">
	<h3 id="voltearCartas">Voltear cartas</h3>
	<pre><span class="bold">GameController.cs</span><code>public class GameController : MonoBehaviour {
	public Sprite[] cardFace;
	public Sprite cardBack;
	public GameObject[]cards;

	void Start(){
	for (int id = 0; id < 2; id++) {
	for (int i = 0; i &lt;cardFace.Length; i++) {
	bool test = false;
	int choice = 0;

	while (!test) {
		choice = Random.Range (0, cards.Length);
		<span class="green">//Voy buscando hasta encontrar una carta no inicializada
		//Si todas las cartas fueron ya inicializadas, obtendré un bucle infinito</span>
		test = !(cards [choice].GetComponent&lt;Card&gt; ().initialized);
	}
	cards [choice].GetComponent&lt;Card&gt; ().cardFace = cardFace[i];
	cards [choice].GetComponent&lt;Card&gt; ().initialized = true;
	}
}</code></pre>
<pre><span class="bold">Card.cs</span><code>using UnityEngine;
using UnityEngine.UI;

public class Card : MonoBehaviour{
	public bool initialized = false;

	public Image cardBack;
	public Sprite cardFace;
	GameController gc;
	void Start(){
		gc = GameObject.Find(&quot;GameController&quot;).GetComponent&lt;GameController&gt;();
		cardBack = GetComponent&lt;Image&gt;();
		cardBack.sprite = gc.cardBack;
		GetComponent&lt;Button&gt;().onClick.AddListener(flipCard);
	}

	public void flipCard(){
		GetComponent&lt;Image&gt;().sprite = cardFace;
	}   
}</code></pre>
	</div>
</div>


			
<h3 id="llamarAlGameManager">La carta llama al GameController</h3>
<h4 id="destaparDosCartas">Destapo dos cartas</h4>
<pre><span class="bold">GameController.cs</span><code>private Card primeraCarta;
private Card segundaCarta;

public void evaluarCartas(Card4 carta){
	if (primeraCarta == null) {
		carta.GetComponent&lt;Image&gt; ().sprite = carta.cardFace;
		primeraCarta = carta;
	} else if (segundaCarta == null) {
		carta.GetComponent&lt;Image&gt; ().sprite = carta.cardFace;	
		segundaCarta = carta;
		if (primeraCarta.GetComponent&lt;Image&gt; ().sprite == segundaCarta.GetComponent&lt;Image&gt; ().sprite) {
			Debug.Log ("exito");
			primeraCarta = null;
			segundaCarta = null;
		} else {
			StartCoroutine (dejaCartasComoAlPrincipio());	
		}
	}
}

IEnumerator dejaCartasComoAlPrincipio(){
	yield return new WaitForSeconds (1f);
	primeraCarta.GetComponent&lt;Image&gt; ().sprite = cardBack;
	segundaCarta.GetComponent&lt;Image&gt; ().sprite = cardBack;
	primeraCarta = null;
	segundaCarta = null;
}</code></pre>

<pre><span class="bold">Card.cs</span><code> private void flipCard(){
	<span class="green">// this.GetComponent&lt;Image&gt;().sprite = _cardFace;</span>
	gc.evaluarCartas(this);
}</code></pre>
<h4>Añadir la detección de cuando se ha ganado la partida</h4>
</div></article>

<article><div>
<h2 id="guardar-recuperar-informacion">Guardar y recuperar información almacenada</h2>

<div class="row">
	<div class="col-md-6">
	<pre><code>PlayerPrefs.SetInt("valorNumerico", 3);</code></pre>
<pre><code>int v = PlayerPrefs.GetInt("valorNumerico");</code></pre>
	</div>
	<div class="col-md-6">
	<?= getRes('recurso','./ex/playerprefs.zip', 'Descargar recurso') ?>
	</div>
</div>


</div></article>

<article><div>
<h2 id="publicacion">Publicación</h2>
	<p>File -> Build Settings</p>
	<p>Pulsando en el botón <strong>Player Settings</strong> podré definir algunas propiedades de la exportación.</p>

	<h3>Player settings</h3>
	<h4>Publicación para Desktop</h4>
	<p>Display Resolution Dialog: Disabled. Mejor ponerlo en disabled, no vaya a ser que el usuario seleccione una resolución que nosotros no habíamos contemplado.</p>
	<h4>Publicación para web</h4>
<p>Debemos asegurarnos de que la proporción de la pantalla de publicación coincide con el tamaño que le hemos asignado al juego.</p>
<img src="./imgs/unity-publicacion-web.png" alt="Unity publicación web">
<p>Esta proporción también se puede cambiar fuera de unity, modificando el código html del fichero creado:</p>
<pre><code>&lt;div id=&quot;gameContainer&quot; style=&quot;width: 640px; height: 360px&quot;&gt;&lt;/div&gt;</code></pre>
	<h3>Ejecutar la aplicación directamente en nuestro dispositivo Android</h3>
	<p>Habrá que activar el modo depuración USB. Para ello, habrá que activar las <strong>opciones de desarrollo </strong> (en información del teléfono, haremos click sietes veces sobre el número de compilación).</p>
	<p>Finalmente le daremos a <strong>build and run</strong> teniendo el teléfono móvil conectado por USB.</p>
	<h3>Errores al compilar</h3>
	<ul>
		<li><pre><code>    Couldn't open /opt/Unity/Editor/Data/UnityExtensions/Unity/VR/Android/AudioPluginOculusSpatializer.so, error:
			/opt/Unity/Editor/Data/UnityExtensions/Unity/VR/Android/AudioPluginOculusSpatializer.so: wrong ELF class: ELFCLASS32
		</code></pre>
		Este error me dió en linux al compilar para Android. Se soluciona ejecutando le siguiente comando en la terminal:
		<pre><code>cd /opt/Unity/Editor/Data/UnityExtensions/Unity/VR/Android/ && sudo mv AudioPluginOculusSpatializer.so AudioPluginOculusSpatializer.ignore
		</code></pre>
	</li>
	<li>Encontrar el SDK de Android. Lo instalaremos junto al Android Studio descargándolo de <a href="https://developer.android.com/studio/index.html" target="_blank">este link</a>. En el caso de linux, se instala en la carpera /root/Android/Sdk, a la que tendremos que dar permisos 777 para poder seleccionar.</li>
</ul>
<h4>Otros Errores</h4>
<ol>
	<li>Si al abrir un proyecto de Unity nos dá el siguiente error: 'it looks like another unity instance is running with this project open. Multiple Unity instances cant open the same project.' Podemos intentar solucionar el problema de dos formas:
		<ol>
			<li>Borrar el fichero Temp/UnityLockFile dentro de la carpeta de nuestro proyecto.</li>
			<li>Dubplicar el proyecto utilizando otro nombre.</li>
		</ol>
	</li>
	<li>Si Unity se queda colgado al tratar de abrir un proyecto, podemos tratar a borrar la carpeta <strong>Library</strong> de dicho proyecto.</li>
</ol>
</div></article>

<article><div>
<h2 id="first-person-shooter">Ejercicio: First Person Shooter</h2>
		<p>Crear la siguiente escena con su correspondiente FPSController</p>
<div class="row">
	<div class="col-md-10"><img src="imgs/ejercicio-2.png" alt="ejercicio unity 3d"></div>
	<div class="col-md-2"><?= getRes("video_premium",229977122) ?></div>
</div>

		
		
		<p>Importamos los assets necesarios: Window -> Asset store -> Standard Assets -> importamos:</p>
		<ul>
			<li>Characters -> FirstPersonCharacter. Este asset tiene las siguientes dependencias: 			<ul>
				<li><strong>CrossPlatformInput</strong></li>
				<li><strong>Utility</strong></li>

			</ul>
		</li>
	</ul>
	<p>Además, podemos descargar una casita: </p>
	<ul>
		<li>Prototyping -> Models -> HousePrototype16x16x24</li>
	</ul>
	<p>Todos los elementos que se muestran en escena son cubos deformados, menos las casas que las hemos insertado desde los assets importados.</p>
</ol>
<p><strong>snapping</strong>: lo haremos si mantenemos pulsado <strong>v</strong> desde antes de la selección de uno de los vértices de un objeto y su posterior desplazamiento.</p>
<p>Para controlar la distancia a partir de la cual las sombras se proyectan: edit -> proyect settings -> Quality -> Shadows -> Shadow Distance</p>
<div class="centraditos">
<?= getRes("video_premium",229977774) ?>
<?= getRes("video_premium",229977123) ?>
</div>
<h4>FPSController</h4>
<p>Este es un objeto complejo que tiene asociados los controles del ratón y el teclado, posibilidad de correr, saltar, etc. tal como ocurre en un First Person Shooter.</p>
<p>Al caminar, el FPSController emite los sonidos de los pasos que se dan, se pueden deshabilitar poniendo a 0 la propiedad Footstep Sounds-Size del FPSController en el panel inspector.</p>
<p>Para deshabilitar el movimiento de la cabeza al andar, desmarco la check de la propiedad <strong>Use Head Bob</strong>.</p>
<p>Para habilitar la visualización del cursor durante el juego, desmarco la check <strong>Mouse Look - Lock Cursor</strong></p>
<hr>
<p>Al ejecutar, obtenemos este error: <strong>There are 2 audio listeners in the scene. Please ensure there is always exactly one audio listener in the scene.</strong>. Se debe a  que hay dos cámaras, la del FPSController, y la Main Camera. Deshabilitamos la Main Camera pulsando sobre la check que está al lado de su nombre.</p>
</div></article>

<article><div>
	<h2>Importar personaje 3D a la escena</h2>
	<ol>
		<li>Assets Store -> Descargamos Junk Chan -> Lo importamos todo.</li>
		<li>Vamos a la carpeta Models -> arrastramos y soltamos el modelo de JunkChan.</li>
		<li>Creamos una entidad <span class="i">Animator</span>.</li>
		<li>Al desplegar el modelo pulsando en su flechita salen todas sus animaciones. Arrastramos al animator las animaciones <span class="i">idle</span>, <span class="i">walk</span>, <span class="i">Sword_Slash</span>.</li>
	</ol>
</div></article>

<article><div>
	<h2 id="photon">Multijugador con Photon</h2>
<p>Vamos a utilizar los servidores de Photon para hacer un juego multijugador. Estos servidores tienen instalada una aplicación llamada <span class="bold">PhotonServer</span>. Nosotros también podríamos instalar <span class="bold">PhotonServer</span> en nuestro propio servidor, pero utilizando los servidores de Photon nos ahorramos este paso. Los servidores de Photon reciben el nombre de <span class="bold">Photon Cloud</span></p>
<p>PUN (Photon Unity NetWorking) es un framework que tiene scripts que nos facilitan programar videojuegos multiplayer. PUN es:</p>
<ul>
<li>gratuito hasta los 20 UCC (Usuarios Conectados Simultáneamente). Si sobrepasas el límite, los nuevos usuarios no se podrán conectar. </li>
<li>Hay un límite de 500 mensajes por Room (partida).</li>
</ul>
<h3>Conexión y Join una Room</h3>
<ol>
<li>Registramos una cuenta en 	<a href="https://www.photonengine.com/">https://www.photonengine.com/</a></li>
<li>Tras loguearnos creamos una nueva aplicación cuyo <span class="bol">Photon Type</span> será Photon PUN.</li>
<li>Copiamos el App ID de la aplicación.</li><li>
Vamos a Unity 3D e instalamos <span class="bold">Photon Networking 2 Free</span>. Al termino de la instalación nos pide un código. Pegamos el código de antes.</li>
<li>Creamos un <span class="bold">Empty</span> al que vinculamos el siguiente código:
<ol>
	<li>Cuando pulsamos el botón de <span class="bold">Connect</span>, llamamos a la función <span class="bold">Connect()</span></li>
	<li>Cuando nos hemos conectado, se ejecuta automáticamente el método <span class="bold">OnConnectedToMaster()</span>. Este método habilitará el botón <span class="bold">Join Random</span></li>
	<li>Cuando pulsamos el botón de <span class="bold">Join Random</span>, llamamos a la función <span class="bold">JoinRandom()</span></li>
	<li>Cuando nos hemos unido a una room, se ejecuta automáticamente el método <span class="bold">OnJoinedRoom()()</span>. Dentro del <span class="bold">FixedUpdate</span>, evaluamos constantemente si nos hemos unido a una Room.Este método habilitará el botón <span class="bold">Join Random</span></li>
</ol>
<pre><code>using System.Collections;
using System.Collections.Generic;
using Photon.Pun;
using Photon.Realtime;
using UnityEngine;
using UnityEngine.UI;
namespace Photon.Pun.Demo.PunBasics{
	public class AutoLobby : MonoBehaviourPunCallbacks{
		public Text Log;
		public Text PlayerCount;
		public int playersCount;

		public byte maxPlayersPerRoom = 4;
		public byte minPlayersPerRoom = 2;
		private string roomName = &quot;amor&quot;;
		public Button buttonJoinRoom;
		public Button buttonLoadArena;
		public Text nombre;

		void Start(){
			// La IP del servidor al que se conectar&aacute; el player ser&aacute; almacenada en las PlayerPrefs.
			// Debemos resetear las PlayerPrefs para evitar ciertos problemas de conexi&oacute;n
			PlayerPrefs.DeleteAll();
			ConnectToPhoton();
		}

		void Awake(){
			// La siguiente l&iacute;nea nos permite sincronizar la escena para todos los players de la room
			PhotonNetwork.AutomaticallySyncScene = true;
		}

		void ConnectToPhoton(){
			Log.text = &quot;Connecting...&quot;;
			PhotonNetwork.GameVersion = &quot;&quot;+1; //1
			if (PhotonNetwork.ConnectUsingSettings()){
				Log.text += &quot;\n Connected to server&quot;;
			}else{
				Log.text += &quot;\n Falling Connecting to Server&quot;;
			}
		}

		// Photon Methods
		public override void OnConnected(){
			base.OnConnected();
			Log.text += &quot;\nConnected to Photon!&quot;;

			buttonJoinRoom.interactable = true;
			buttonLoadArena.interactable = false;
		}

		public void JoinRoom(){
			Log.text += &quot;\nJoinRoom() method&quot;;

			if (PhotonNetwork.IsConnected){
				PhotonNetwork.LocalPlayer.NickName = nombre.GetComponent&lt;Text&gt;().text; //1
				Log.text += &quot;\nPhotonNetwork.IsConnected! | Trying to Create/Join Room &quot;;
				RoomOptions roomOptions = new RoomOptions(); //2
				TypedLobby typedLobby = new TypedLobby(roomName, LobbyType.Default); //3
				PhotonNetwork.JoinOrCreateRoom(roomName, roomOptions, typedLobby); //4

				Log.text +=&quot;\nFin JoinRoom(): &quot; + PhotonNetwork.LocalPlayer.NickName;
			}
		}

		public override void OnJoinedRoom(){
			if (PhotonNetwork.IsMasterClient){
				buttonJoinRoom.interactable = false;
				buttonLoadArena.interactable = true;
				Log.text += &quot;\nYour are Lobby Leader&quot;;
			}else{
				Log.text += &quot;\nConnected to Lobby&quot;;
			}
		}

		public void LoadArena(){
			if (PhotonNetwork.CurrentRoom.PlayerCount &gt; 1){
				PhotonNetwork.LoadLevel(&quot;juego&quot;);
			}else{
				Log.text += &quot;\nMinimum 2 Players required to Load Arena!&quot;;
			}
		}

		void Update(){
			if (PhotonNetwork.InRoom){
				playersCount = PhotonNetwork.CurrentRoom.PlayerCount;
				PlayerCount.text = playersCount + &quot;/&quot; + maxPlayersPerRoom;
			}
		}
        
		public override void OnJoinRandomFailed(short returnCode, string message){
			Log.text += &quot;\nNo Rooms to Join, creating one...&quot;;
			if (PhotonNetwork.CreateRoom(null, new Photon.Realtime.RoomOptions() { MaxPlayers = maxPlayersPerRoom })){
				Log.text += &quot;\n Room Created&quot;;
			}else{
				Log.text += &quot;\nFail Creating Room&quot;;
			}
		}
	}
}</code></pre>
</li>
</ol>
<img src="./imgs/multijugador-con-photon.png" alt="multijugador con photon">
<h3>Cargamos la escena de juego</h3>
<ol>
<li><pre><span class="bold">AutoLobby.cs</span><code>...

private void LoadMap(){
	PhotonNetwork.LoadLevel("juego");
}</code></pre></li>
<li><pre><span class="bold">GameController.cs</span><code>using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using Photon.Pun;
using UnityEngine.UI;
namespace Photon.Pun.Demo.PunBasics{ 
	public class GameController : MonoBehaviourPunCallbacks{
		private GameObject player1;
		private GameObject player2;
		public Transform player1Position;
		public Transform player2Position;

		void Start(){
			if (PlayerManager.LocalPlayerInstance == null){
				if (PhotonNetwork.IsMasterClient){
					player1 = PhotonNetwork.Instantiate("PlayerMonteserin", player1Position.transform.position, player1Position.transform.rotation, 0);
				}else{
					player2 = PhotonNetwork.Instantiate("PlayerMonteserin", player2Position.transform.position, player2Position.transform.rotation, 0);
				}
			}
		}
	}
}</code></pre></li>
<li><p>Creamos un Prefab de nuestro player.</p>
<p>Importaremos <span class="bold">Joystick Pack</span> de la Asset Store de Unity. En la ruta <span class="bold">Joystick Pack/Prefabs</span> usaremos el Prefab <span class="bold">Floating Joystick</span> que debemos añadir a un canvas.</p>
<img src="imgs/joystick-pack.png" alt="joystick pack">
	<p>Utilizaremos el siguiente código para gestionar su movimiento. El prefab del Player tendrá un cubo de tal forma que cuando lo pulsemos subirá para arriba: </p>
<pre><span class="bold">PlayerController.cs</span><code>using System.Collections;
using System.Collections.Generic;
using Photon.Pun;
using UnityEngine;

public class PlayerController : Photon.Pun.MonoBehaviourPun{
    public bool isMovingUp, isMovingDown = false;
    Rigidbody rb;
    private Vector2 movement;

    public Joystick joystick;
    PhotonView photonView;

    void Start(){
        photonView = gameObject.GetComponent&lt;PhotonView&gt;();
        rb = GetComponent&lt;Rigidbody&gt;();
        joystick = GameObject.Find(&quot;Canvas&quot;).transform.Find(&quot;Floating Joystick&quot;).GetComponent&lt;FloatingJoystick&gt;();
    }

    void FixedUpdate(){
        if (photonView.IsMine){
            this.movement = this.rb.velocity;
            if (joystick.Horizontal &gt; 0)this.movement.x = 2;
            else if (joystick.Horizontal &lt; 0) this.movement.x = -2;
            else this.movement.x = 0;

            if (joystick.Vertical &gt; 0) this.movement.y = 2;
            else if (joystick.Vertical &lt; 0) this.movement.y = -2;
            else this.movement.y = 0;
            rb.velocity = movement;
        }
    }
}</code></pre></li>
<li>Añadimos al GameObject del Prefab los siguientes scripts:
<ul style="overflow:auto">
<li><span class="bold">PhotonView</span> ubicado en <span class="bold">/Assets/Photon/PhotonUnityNetworking/Code/</span></li>
<li><span class="bold">PhotonTransformView</span> ubicado en <span class="bold">/Assets/Photon/PhotonUnityNetworking/Code/</span></li>
</ul>
</li>
<li>Arrastramos el componente PhotonTransformView al campo <span class="bold">Observed Components</span><span class="bold">TransformView</span>.</li>
<li>Debemos asegurarnos de que el <span class="bold">TransformView</span> tiene la opción <span class="bold">Observe option</span> con el valor <span class="bold">Unreliable On Change</span>.
<img src="imgs/photon-unreliable-on-change.png" alt="Photon unreliable on change">
</li>
<li>En este momento, si compilamos el juego y lo ejecutamos dos veces, veremos que al mover el personaje en una de las dos instancias de juego, este se mueve en la otra instancia de juego. Es mejor que probemos el juego en dispositivos independientes. Arrancando dos instancias del juego en el mismo dispositivo, la sincronización era bastante mala.</li>
</ol>

<div class="row">
	<div class="col-md-10">
	<img class="img-fluid" src="./imgs/photon2.png" alt="photon2">
	</div>
	<div class="col-md-2">
	<?= getRes('recurso','./ex/2-jugadores.zip', 'Descargar recurso') ?>
	</div>
</div>


<h3 id="composicion">Ejercicio: composición 2D</h3>
			<h4 id="ubicarElementos">Ubicar elementos 2D en capas</h4>
			<?= getRes("video_premium",229978985) ?>
			<ol>
				<li>Importar los assets del enlace. <br><?= getRes("recurso","imgs/2DGameAssets.zip","assets") ?> Guardar assets1.png y assets2.png en una carpeta llamada sprites.</li>
				<li>Convertir el sprite mode del <strong>Assets1</strong> a múltple y salvar los sprites que contiene, cada uno con su propio nombre. Para hacer los recortes usaremos el modo automático. Guardar las ruedas en un único sprite.</li>
				<li>Hacer lo mismo con con <strong>Assets2</strong></li>
				<li>Añadimos un sprite a escena y seleccionándolo, desde su componente <strong>sprite renderer</strong>, podremos crear tres sorting layers: BG, INTERMEDIO y FRONT.</li>
				<li>Añado los elementos a escena, de atrás alante, en este orden de superposición:
					<ol>
						<li>BG: nubes, nube1, nube2,ciudad (la foto con un pedazo de noria), ciudad (la foto con los edificios).</li>
						<li>INTERMEDIO: torre1 (pegada ala izquierda) y torre2 (pegada a la derecha, es una copia de torre1 rotada 180º en el eje x, para que sea simétrica).  Autobús (agrupado a las ruedas), coche (agrupado a las ruedas).</li>
						<li>FRONT: paseo.</li>
					</ol>
				</li>
			</ol>


			<div class="row">
				<div class="col-md-6">
				<img class="img-fluid" src="imgs/paseo.png" alt="paseo para unity3d">
				</div>
				<div class="col-md-6">
				<?= getRes("video_premium",229978361) ?>
				</div>
			</div>
	
			
			<h4 id="addSonido">Añadir sonido</h4>
			
			<div class="row">
				<div class="col-md-8">
				<ol>
				<li>En el panel de jerarquía creamos dos emptys: sonidos y música. Les añadimos el componente <strong>Audio Source</strong> y lo vinculamos con el sonido correspondiente</li>
				<li>Para que funcionen los sonidos, la main camera debe tener un <strong>Audio Listener</strong>; podemos borrar el GUI layer, y el flare layer ya que no los necesitamos.</li>
			</ol>
				</div>
				<div class="col-md-4">
				<div class="centraditos">
						<?= getRes("video_premium",229979372) ?>

			<?= getRes("video_premium",229979623) ?>
			</div>
				</div>
			</div>
			


<h3>Recuperar un array de objetos del mismo tipo</h3>


<div class="row">
	<div class="col-md-10">
	<pre><code>public class GetArrayObjetos : MonoBehaviour {

public MiCubo [] misCubos;

void Start () {
	misCubos = Object.FindObjectsOfType (typeof(MiCubo))as MiCubo[];
	Debug.Log (misCubos.Length);
}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("recurso","proyectos/Array Objetos.zip","Descargar ejemplo") ?>
	</div>
</div>



<h3>Jerarquías: recuperar hijos</h3>

<div class="row">
	<div class="col-md-10">
	<pre><code>public class Jerarquias : MonoBehaviour {
	public Transform miTransform;
	void Start () {
		miTransform = GetComponent&lt;Transform&gt; ();

		for (int i = 0; i < miTransform.childCount; i++) {
			Transform hijoTransform = miTransform.GetChild (i);
			Debug.Log (hijoTransform.gameObject.name);
		}
	}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("recurso","proyectos/Acceso a los hijos.zip","Descargar ejemplo") ?>
	</div>
</div>



<h3 id="detectarQueSuelto">Detectar cuando suelto algo encima de otro objeto</h3>
<pre><code>public class Slot : MonoBehaviour , <span class="blue bold">IDropHandler</span>{
	public void <span class="bold blue">OnDrop</span>(PointerEventData eventData){
		Debug.Log ("suelta");
		//eventData.pointerDrag es el objeto que hemos soltado sobre este objeto
		Debug.Log (eventData.pointerDrag.name);
	}
}</code></pre>
<p>Este evento detecta la colisión entre el ratón y el objeto B sobre el que he soltado una pieza A. Sin embargo, si la pieza A está entre el ratón y la pieza B, dicha colisión no será detectada. Para evitarlo, puedo añadir al botón A un componente de tipo <&lt;Canvas Group&gt; desactivarlo cuando lo comience a arrastrar.</p>
<pre><code>public class ObjetoA : MonoBehaviour, IDragHandler , IBeginDragHandler, IEndDragHandler, IPointerDownHandler{

	public void OnBeginDrag(PointerEventData eventData){
		GetComponent&lt;CanvasGroup&gt; ().blocksRaycasts = false;
	}

	public void OnEndDrag(PointerEventData eventData){
		GetComponent&lt;CanvasGroup&gt; ().blocksRaycasts = true;
	}
}</code></pre>
</div>
</article>

</main>

<?php ///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
/*
}if(muestra('juego-coches')){ ?>

<main class="curso">


	<h2 id="juego-coches">Ejercicio - Juego de coches</h2>
	<h3>Preparando el escenario</h3>
	<ol>
		<li>Creamos un nuevo proyecto 2D.</li>
		<li>Importamos <?= getRes("recurso","imgs/juego-coches.zip","los recursos") ?></li>
		<li>Hacemos multiple el sprite de calles. Lo recortamos usando cell size, usando un tamaño de 1024x576px. El coche y el autobús los recorto manualmente. Pongo nombres a los sprites: calle recta, calle recta left, calle curva... aplico los cambios. <br>Hago lo mismo con el sprite UI.</li>
		<li>Selecciono como plataforma de publicación: Android. Tamaño 1280x800</li>
		<li>Introduzco y estiro el sprite de carretera recta hasta ocupar la totalidad de la cámara.</li>
		<li>Coloco el coche sobre la calle.</li>
		<li>Duplico la calle hasta tener cuatro carreteras seguidas.</li>
		<li>Creamos un objeto UI de texto, con el texto "00:00". Lo ponemos en la esquina superior izquierda y lo llamamos tiempo. Lo duplicamos y lo ponemos en la esquina superior derecha y lo llamamos distancia.</li>
		<li>En el panel de jerarquías tendré un Empty calle del que cuelgan las cuatro calles rectas.</li>
	</ol>
	<h3>Vinculando al contenedor de calles</h3>
	<ol>
		<li>En el panel de jerarquías creo un Emtpty llamado motor de carreteras y le asocio el siguiente script:
			<pre><code>void Start () {
	<span class="green">//Esto es un empty al que iremos añadiendo dinámicamente las calles</span>
	contenedorCallesGO = GameObject.Find ("ContenedorCalles");
	mCamGO = GameObject.Find("Main Camera");
	mCamCOMP = mCamGO.GetComponent&lt;Camera&gt;();

	velocidad = 20;
	BuscoCalles ();
}

void BuscoCalles(){
	<span class="green">//Accedemos a todos GO etiquetados como "CallesArray" ,y los hacemos hijos de "ContenedorCalles con otro nombre"</span>
	contenedorCallesArray = GameObject.FindGameObjectsWithTag ("CallesArray");
	for(int i = 0; i&lt;contenedorCallesArray.Length; i++){
		contenedorCallesArray[i].gameObject.transform.parent = contenedorCallesGO.transform;
		contenedorCallesArray[i].gameObject.SetActive(false);
		contenedorCallesArray[i].gameObject.name = "CalleOFF_" + i;
	}
}</code></pre>
El resultado será que cuando arranque el juego, el empty taggeado como "CallesArray" se vinculará renombrado como calleOFF_0 al empty "ContenedorCalles". <br>
<img src="imgs/carreteras1.jpg" alt="carreteras para unity3d"> -> <img src="imgs/carreteras2.jpg" alt="carreteras para unity3d">
</li>
</ol>
<ol>	

	<h3>Crear calles</h3>
	<p>
	Recorremos todo lo que hay en contenedorCallesArray (todos los grupos de calles taggeados como "Calle"). El siguiente código coloca un grupo de calle en pantalla, aunque en una posición incorrecta.</p>
	<pre><code>void BuscoCalles(){
	<span class="green">...</span>
	CrearCalles ();
}

void CrearCalles(){		
	<span class="green">//De entre todos los GO etiquetados como "CallesArray", escogemos uno aleatoriamente y creamos un nuevo GO a partir de él.</span>
	numeroSelectorCalles = Random.Range (0, contenedorCallesArray.Length);
	GameObject Calle = Instantiate (contenedorCallesArray [numeroSelectorCalles]);
	Calle.SetActive (true);
	contadorCalles++;
	Calle.name = "Calles" + contadorCalles;
	<span class="green">//"gameObject" hace referencia al objeto al que he añadido el script, en este caso "MotorCarreteras"
	// por tanto, añado el CallesArray al "MotorCarreteras"</span>
	Calle.transform.parent = gameObject.transform;
}

</code></pre>
<h3>Colocar calles</h3>

<p>Ubico las calles creadas a continuación de las que ya había en pantalla: </p><pre><code>void PosicionCalles(){
	calleAnterior = GameObject.Find ("Calles"+(contadorCalles-1));
	calleNueva = GameObject.Find ("Calles" + contadorCalles);
	<span class="green">//Mido la altura de todos los hijos de "calleAnterior" para colocar "calleNueva" a continuación</span>
	MidoCalle ();
	<span class="green">//Coloco la nueva calle al final de la calle anterior</span>
	calleNueva.transform.position = new Vector3 (calleAnterior.transform.position.x, calleAnterior.transform.position.y + tamañoCalle, 0);
	salioDePantalla = false;
}

void MidoCalle(){
	for(int i = 0;  i&lt;calleAnterior.transform.childCount; i++){
		if (calleAnterior.transform.GetChild (i).gameObject.GetComponent&lt;Pieza&gt;() != null) {
			float tamañoPieza = calleAnterior.transform.GetChild(i).gameObject.GetComponent&lt;SpriteRenderer&gt;().bounds.size.y;
			tamañoCalle = tamañoCalle + tamañoPieza;
		}
	}
}</code></pre>

<h3>Update</h3>
<p>Según va avanzando el tiempo y moviéndose la carretera, voy ubicando más carreteras en pantalla: <pre><code>void Update () {
	transform.Translate (Vector3.down * velocidad * Time.deltaTime);
	if (calleAnterior.transform.position.y + tamañoCalle < medidaLimitePantalla.y &amp;&amp; salioDePantalla == false){
		salioDePantalla = true;
		DestruyoCalles();
	}
}

void MedirPantalla(){
	medidaLimitePantalla = new Vector3(0,mCamCOMP.ScreenToWorldPoint(new Vector3(0,0,0)).y - 0.5f,0);
}

void DestruyoCalles(){
	Destroy(calleAnterior);
	tamañoCalle = 0;
	calleAnterior = null;
	CrearCalles();
}</code></pre>

<h3>Cronómetro</h3>
<pre><code>void Start () {
	motorCarreteraScript = GameObject.Find ("MotorCarreteras").GetComponent&lt;MotorCarreteras&gt;();

	txtTiempo = GameObject.Find ("tiempo").GetComponent&lt;Text&gt;();
	txtDistancia = GameObject.Find ("distancia").GetComponent&lt;Text&gt;();

	txtTiempo.text = "2:00";
	txtDistancia.text = "0";

	tiempo = 120;
}

void Update () {
	CalculoTiempoDistancia ();
}

void CalculoTiempoDistancia(){
	distancia += Time.deltaTime * motorCarreteraScript.velocidad;
	txtDistancia.text = ((int)distancia).ToString ();
	tiempo -= Time.deltaTime;
	int minutos = (int)tiempo/60;
	int segundos = (int)tiempo%60;
	txtTiempo.text = minutos.ToString() + ":" +segundos.ToString().PadLeft(2, '0');
}</code></pre>
<h3>Ejercicio: el juego debe pararse</h3>
<p>Añadir el código necsesario para que cuando el juego supere los cinco segundos, se detenga.</p>
<h3>Ejercicio: contador previo</h3>
<p>Crearemos un nuevo empty "CuentaAtras" al que añadiremos un componente de tipo "Sprite Renderer" asociaremos, una vez completado, el siguiente script: "CuentaAtras"</p>
<pre><code>public class CuentaAtras : MonoBehaviour {
	public Sprite[] numeros;
	public SpriteRenderer contadorNumerosCOMP;

	void Start () {
	contadorNumerosCOMP = gameObject.GetComponent&lt;SpriteRenderer&gt; ();
	StartCoroutine (Contando());
}

IEnumerator Contando(){
	contadorNumerosCOMP.sprite = numeros [0];
	yield return new WaitForSeconds (1);

	contadorNumerosCOMP.sprite = numeros [1];
	yield return new WaitForSeconds (1);

	contadorNumerosCOMP.sprite = numeros [2];
	yield return new WaitForSeconds (2);

	gameObject.SetActive (false);
}</code></pre>

<h3>Ejercicio: incio del juego</h3>
<p>Ahora mismo, el coche comienza a andar (o más bien, la carretera comienza a moverse) desde el principio del juego. Añadir el código necesario para que el coche comience a moverse tras la cuenta atrás.</p>

<p><span class="ver_pista">Pulsa aquí para ver la pista.</span><span class="pista">Crearemos una variable booleana pública en el Game Object "MotorCarreteras". En este GameObject, ejecutaremos el código que hay dentro del update sólo si esta variable boolena es true. Haremos true esta variable booleana tras terminar la cuenta atrás.</span></p>

<h3>Ejercicio: Añadir sonidos a la corrutina</h3>
<p>Añadir a la corrutina anterior el código para que en cada paso ejecute un sonido asociado al GameObject del coche.</p>
<pre><code>cocheGO.GetComponent&lt;AudioSource&gt; ().Play ();</code></pre>
<p>Para cargar el sonido, usaremos el siguiente código:</p>
<pre><code>cocheGO = GameObject.Find ("Coche");</code></pre>

<h4>Controlador Coche</h4>
<p>Añadir el siguiente código que controla el movimiento horizontal del coche.</p>
<pre><code>public class ControladorCoche : MonoBehaviour {
	public float velocidad;
	void Start () {
		velocidad = 25;
	}

	void Update () {
		transform.Translate (Vector2.right * Input.GetAxis("Horizontal")*velocidad*Time.deltaTime);
	}
}</code></pre>
<p>Ahora, añadir el siguiente código al método update que hará girar al coche.</p>
<pre><code>float giroEnZ = 0;
giroEnZ = -Input.GetAxis ("Horizontal") * anguloDeGiro;
<span class="green">//El siguiente método transforma un valor dado en ángulos</span>
gameObject.transform.rotation = Quaternion.Euler (0,0,giroEnZ);</code></pre>
<p>Como comprobarás, este código tiene un problema. Al girar el coche, este se desplaza hacia abajo. Esto ocurre porque al girar el coche, cambia la orientación de su eje x. Su eje x era inicialmente paralelo a la base de la pantalla, pero al girar el coche se vuelve oblicuo y por eso el coche baja.</p>
<p>La solución consiste en asignar el movimiento horizontal a un empty que será padre del coche y el movimiento de giro se lo asignaremos al coche.</p>

<h4>Estableciendo lo límtes de desplazamiento del coche</h4>
<p>Creamos dos emptys: <strong>limite_izquierdo</strong> y <strong>limite_derecho</strong>. A cada uno le asociamos un <strong>Box Collider 2D</strong>. Debe ser un "Box Collider <strong>2D</strong>" porque si es 3D es posible que los bloques no colisionen.</p>
<p>Al coche le asociaremos también un componente <strong>Box Collider 2D</strong>.</p>
<p>Para que ocurra la colisión entre el coche y los límites, uno de los dos debe tener el componente <strong>Rigid Body 2D</strong>. Una vez asociado, le quitaremos a este componente la propiedad de la <strong>gravedad</strong>.</p>


	<h3>Sonido</h3>
	<p>Crearemos un empty al que le asociaremos un AudioSource y el siguiente Script que cargará la música del juego.</p>
	<pre><code>public class Audio : MonoBehaviour {
	public AudioClip[] fxs;
	AudioSource audioS;
	void Start () {
		audioS = GetComponent&lt;AudioSource&gt; ();
		FXMusic ();
	}

	public void FXMusic(){
		audioS.clip = fxs [0];
		audioS.Play ();
	}
}</code></pre>



	<h3>Colisionar con camiones</h3>
	<p>Creamos objeto llamado "Camión" que tengo asociado un script con el código de más abajo. Este objeto también tendrá un componente de tipo "Box Collider 2D" y debe ser jerárquicamente hijo de una carretera. </p>

	<p>Para poder lanzar las funciones OnTriggerEnter, OnTriggerExit, OnTriggerStay cuando dos objetos colisiones, ambos objetos deben tener asociado un componente Collider y uno de ellos (normalmente, el que no es el protagonista) debe tener marcada la check Trigger.</p>
	<pre><code>public class Camion : MonoBehaviour {

	void OnTriggerEnter2D(Collider2D other){
		if (other.GetComponent&lt;ControladorCoche&gt; () != null) {
			Destroy (this.gameObject);
		}	
	}
}</code></pre>

<h4>Restar 30 segundos</h4>
<p>Utilizando el método "FindObjectOfType" acceder al cronómetro y restarte 30 segundos cuando haya una colisión.</p>
<pre><code>void Start(){
	GameObject crono = GameObject.FindObjectOfType&lt;Cronometro&gt;().gameObject;
	cronoScript = crono.GetComponent&lt;Cronometro&gt; ();
}

void OnTriggerEnter2D(Collider2D other){
	if (other.GetComponent&lt;ControladorCoche&gt; () != null) {
		cronoScript.tiempo -= 20;
		Destroy (this.gameObject);
	}	
}</code></pre>


<h4>Game Over</h4>
<p>Añadir el siguiente código al "Motor de Carreteras" para que cuando se acabe el tiempo, el coche se detenga.</p>
<pre><code>if(cronometro.tiempo&lt;0){
	juegoIniciado = false;
}</code></pre>

<h4>Tiempo y distancia a 0</h4>
<p>Añadir el código necesario para que cuando el tiempo se acabe, los contadores de tiempo y distancia se pongan a cero.</p>
<p>Si coincide que el tiempo se ha acabado porque el usuario ha colisionado con un camión, es posible que el tiempo tome valores negativos, en cuyo caso, deberemos poner el tiempo a cero. Esto lo podemos gestionar con un script dentro del camión.</p>




<h4>Mostrar Game Over</h4>

<p>Añadimos un panel al canvas, y añadimos un texto "Game Over" al panel. Dicho panel será inactivo por defecto. Esto es algo que preferiblemente controlaremos mediante código, en lugar de desmarcando la correspondiente check en el inspector de componentes.</p>

<p>Dentro del método Update del MotorCarreteras podemos controlar que si el tiempo es menor que cero, el juego se pare y aparezca el panel.</p>

<h4>Mostrar distancia recorrida</h4>
<p>El panel anterior incluirá además un cuadro de texto que mostrará la distancia recorrida.</p>


<h4>Escena de inicio</h4>
<p>File -> Build Settings -> Añadimos ambas escenas</p>
<p>Creamos una nueva escena que tendrá un canvas con dos textos: el nombre del juego y "Juega Ahora". Crearemos un empty llamado "ManagerEscena" que tendrá el siguiente código. Añadiremos un "EventTrigger" al texto "Juega ahora" para que lance el método irAEscena1().</p>
<pre><code>using UnityEngine.SceneManagement;
	public class ManagerEscena : MonoBehaviour {
		public void irAEscena1(){
			SceneManager.LoadScene (1);
	}
}</code></pre>

<h4>Transición entre escenas</h4>
<p>Valemos a hacer una transición animada entre escenas. Para ellos, eliminamos el objeto ManagerEscena, ya que vamos a hacer la transición de otra forma.</p>

<p>Añadimos al canvas un componente image, que ocupará toda la pantalla. El texto "Juega ahora" quedará detrás de esta imagen. Para que no sea la imagen la que absorva los eventos, cuando pulsemos sobre el texto, le desmarcaremos a la imagen la check <strong>Raycast Target</strong>. Cuando esta check está desactivada, el componente que la tiene no será tenido en cuenta en la detección de eventos, sino lo que hay debajo.</p>

<p>El componente de imagen tendrá el siguiente código asociado:</p>
<pre><code>public class Fundido : MonoBehaviour {

	public Image fundido;
	public string[] escenas;

	void Start () {
		fundido.CrossFadeAlpha (0,0.5f,false);
	}

	public void FadeOut(int s){
		fundido.CrossFadeAlpha (1,0.5f,false);
		StartCoroutine (CambioEscena(escenas [s]));
	}

	IEnumerator CambioEscena(string escena){
		yield return new WaitForSeconds (1);
		SceneManager.LoadScene (escena);
	}
}</code></pre>
<p>Al texto "juega ahora" le añadimos un componente de tipo "Event Trigger", de tal forma que al hacer click sobre él, se dispare la función "FadeOut" que cargará la escena 1.</p>




	<h3>Mechanism</h3>
	<ol>
		<li>Creamos un nuevo proyecto 3D.</li>
		<li>Coloco un cubo en pantalla</li>
		<li>Hago accesible el panel de animación (window -> animation)</li>
		<li>
			Hago accesible el panel animator.
		</li>
		<li>Selecciono el cubo en el panel de escena</li>
		<li>Creo una nueva animación en el panel Animation.</li>
		<li>Le doy al botón de grabar y defino los estados inicial y final del cubo</li>
	</ol>
	<p>Puedo desplegar una animación en el panel Animation para ver las animaciones que la componen (posición en los 3 ejes, rotación, escala, etc.)</p>
	<p>Haciendo doble click sobre una animación en el panel de proyecto, podré definir si quiero que la animaci��n se ejecute cíclicamente (Check loop time) o si quiero que cuando haya terminado vuelva a su estado inicial mediante una animación (check loop pose).</p>



	<h3>Añadir eventos a una animación</h3>
	<p>En el panel Animation tengo un botón "add Event" que me permite lanzar funciones de un script asociadas al objeto que estoy animando.</p>
	<p class="bold">Si en el momento de insertar el evento tenemos pulsado el botón de grabación, el evento se comportará como un fotograma clave.</p>



	<h3>Curvas de animación</h3>
	<p>Puedo acceder a ellas pulsando en el botón "Curves" del panel de animación.</p>
	<p>Los tres colores que definen la curva corresponden a los tres ejes coordenados.</p>



	<h3>Usando modelos en mecanism</h3>

	<ol>
		<li>Abrimos el panel Asset Store</li>
		<li>Importamos <strong>Raw Mocap Data for Mecanism</strong>. Al hacerlo, marcamos sólo la check Animations.</li>
		<li>Importamos <strong>Adam Character Pack: Adam, guard</strong>. De este paquete sólo importaremos: <ul>

			<li>Adam - Textures: <ul>
				<li>Adam_Arms_a.tif</li>
				<li>Adam_Arms_n.tif</li>
				<li>Adam_Arms_o.tif</li>
				<li>Adam_Arms_so.tif</li>
			</ul></li>
			<li>
				Adam - Materials: Crowd_LOD0_1.mat
			</li>
			<li>Adam: Crowd_LOd1.FBX</li>
			<li>

			</li>
		</ul></li>
	</ol>



	<h3>Poner publicidad (para aplicaciones móviles)</h3>
	<ol>
	<li>Pasos en unityads:
		<ol>
			<li>Nos logueamos en <a target="_blank" href="https://unityads.unity3d.com/admin">https://unityads.unity3d.com/admin</a> con la misma cuenta que utilizamos en unity.</li>
		<li>Tenemos dos opciones:
			<ul>
				<li>Ganar pasta</li>
				<li>Ganar pasta e invertirla directamente en publicidad (así que realmente no ganamos pasta)</li>
			</ul>

		</li>
		<li>Creamos un nuevo proyecto. Ojo! Debemos tener en cuenta las siguientes cosas:
			<ul>
				<li>Creamos un nuevo proyecto de pruebas que comience por z para que en la ordenación alfabética nos lo ponga abajo del todo.</li>
				<li>Los proyectos no se pueden borrar ni cambiarles el nombre.</li>
				<li>Si añadimos una tienda al proyecto (Apple Store o Google play) luego no podremos eliminarla (aunque sí que podremos añadir nuevas tiendas).</li>
				<li>Para vincular el proyecto de publicidad a nuestro videojuego utilizaremos el nombre de paquete de un videojuego que ya esté publicado en Google Play o marcaremos la check the "este proyecto todavía no está publicado". Una vez publicada la aplicación, no es posible cambiar el nombre del paquete.</li>
				<li>Decido si marcar la check de que el videojuego está dirigido a menores de 13 para que no salgan anuncios con sexo o violencia.</li>
			</ul>
		  </li>
		</ol>
	</li>

	<li>Pasos en la aplicación de escritorio de Unity 3D:
<ol>
		<li>Vamos al menú servicios y seleccionamos un perfil.</li>
		<li>Ojo! no debemos darle a "create" porque esto ya lo hemos hecho desde la web.</li>
		<li>Pulsamos sobre el enlace "ya tengo una ID de proyecto".</li>
		<li>Selecciono mi identificador y el proyecto publicitario que cree al principio.</li>
		<li>Accedemos a los servicios de Unity:
				<ul>
					<li><span class="black bold">Collaborate</span>: Para desarrollar un proyecto entre varias personas de forma online y simultánea.</li>
					<li><span class="black bold">In-App Purchasing</span>: Para integrar compras dentro de la aplicación. El pago lo realiza Unity desde finlandia.</li>
					<li><span class="black bold">Ads</span>: para poner anuncios.</li>
					<li><span class="black bold">Multiplayer</span>: facilita la integración de múltiples jugadores online.</li>
					<li><span class="black bold">Analytics</span>: Permite ver las estadísticas de uso del juego (tiempo de sesión, descargas, forma de uso, etc.)</li>


				</ul>
			
		</li>
		<li>Activamos <span class="black bold">Analytics</span> y <span class="black bold">Ads</span>.</li>
</ol>
	</li>
	</ol>

</main>
<?php 



<?php ///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

}if(muestra('cambia-imagen')){ ?>


<main class="curso">


	<h2 id="cambia-imagen">Cambia imagen con código</h2>
	<h3 id="ejemploCambiaImage">Ejemplo</h3>
	<p>Tenemos un botón y una imagen que carga un sprite. Al pulsar el botón, debe cambiar el sprite que carga la imagen</p>
	<?= getRes("video_premium",229983166) ?>

	<pre><code>public class ControlEscenaCambiaImagen1 : MonoBehaviour {
	public Image imagen;
	public Sprite sprite2;

	public void botonPulsado(){
		imagen.sprite = sprite2;
	}
}</code></pre>
<?= getRes("video_premium",229983383) ?>

<h3 id="ejercicioCambiaImage">Ejercicio</h3>
<?= getRes("video_premium",229983409) ?>

<p>Cada vez que pulemos en el botón, la imagen debe ir cambiando.</p>
<?= getRes("video_premium",229983678) ?>



</main>






	<h3 id="uibutton">UI Button</h3>

	<p>Para vincular un método a un botón, dicho método debe ser público.</p>
	<pre>using UnityEngine.UI; <span class="green">// para usar cualquier clase del canvas, habrá que añadir esta librería</span></pre>


	<h4 id="componenteImage">Componente Image (script)</h4>
	<p><strong>Preserve Aspect</strong>: si  marcamos esta check, la imagen no perderá sus proporciones al cambiar el tamaño del canvas.</p>
	<p><strong>Image Type</strong>: </p>
	<ul>
		<li><strong>Tiled</strong>: la imagen se repite hasta ocupar la totalidad de la capa.</li>
		<li><strong>Filled</strong>: la imagen se deforma para ocupar la totalidad de la capa.</li>
		<li><strong>Simple</strong>: la imagen no se deforma.</li>
	</ul>
	<p><strong>Raycast target</strong>: si desactivamos esta opción el componente de la UI no reaccionará a los eventos del ratón.</p>

	<p><strong>color</strong>: permite añadir una capa de color al elemento.</p>

	<h4 id="componenteButton">Componente Button (script)</h4>
	<p>Esta propiedad es sólo para los componentes UI Button.</p>
	<p>Los componentes UI Button vienen con un componente de texto adjuntado que podemos ver desde el inspector de jerarquía.</p>
	<p><strong>Normal Color, Highlighted Color, Pressed Color</strong>, son los colores del botón para cada uno de sus diferentes estados.</p>

	<p><strong>Transition</strong></p>
	<ul>
		<li>Color Tint: permite cambiar de colores para los diferentes estados del botón.</li>
		<li>Sprite Swap: permite cambiar de imagenes en lugar de colores para los diferentes estados.</li>
	</ul>
	<p><strong>On Click()</strong></p>
	<p>Selecciono un componente: el texto del button -> Selecciono una función: GameObject: SetActive -> desmarco la check -> ahora cuando pulse sobre el botón, desaparecerá el texto.</p>

</main>

<?php ///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

}if(muestra('animacion-scripting')){ ?>


<main class="curso">
	<h2 id="animacion-scripting">Ejercicio: Animaciones con scripting</h2>
	<?= getRes("video_premium",229982935) ?>

	<p>En el ejercicio anterior, vimos como detonar una animación sin usar nada de programación. Ahora veremos como hacer lo mismo con código.</p>
	<p>Podemos activar animaciones mediante uso de script y parámetros de la animación.</p>
	<p>Creamos una pantalla con dos botones: botón A y botón B:</p>
	<ul>
		<li>Cuando pulsamos en botón A, botón A se pondrá a dar vueltas y se reducirá a la mitad de tamaño.</li>
		<li>Cuando pulsamos en botón B, botón A se pintará de color rojo.</li>
	</ul>
	<p>En ambos casos utilizaremos animaciones cuyas transiciones controlaremos en el panel animator y manipularemos con códigos similares a este:</p>
	<pre><code>GetComponent&lt;Animator&gt; ().SetBool ("andando", true);</code></pre>

	<?= getRes("video_premium",229983023) ?>
</main>
*/
});
include $path."/diapos_theme/footer.php";
?>