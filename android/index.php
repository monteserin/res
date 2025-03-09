<?php 
$titulo_curso="📱 Curso Android";
$meta_description = 'Utilizando Java podrás crear aplicaciones móviles en Android que podrás subir a la play store';
$img_curso = 'curso-android.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	global $dots;

?>
<section id="amor" class="verIndice">
				<article id="inicio_del_documento" class="indice">
	<ol>
	
	<li><a href="#que_es">¿Qué es?</a></li>
		<li><a href="#instalacion">Guía de instalación</a></li>
		<li><a href="#opciones_desarrollo">Activar opciones de desarrollo</a></li>
		<li><a href="#desde_movil">Ejecutar aplicaciones desde el móvil</a></li>
		<li><a href="#configuracionAndroidStudio">Configuración de Android Studio</a></li>
		<li><a href="#gradle">Gradle</a></li>
	</li>
<li><a href="#" class="hasChildren">Layouts</a>
<ol>
		<li><a href="#primer_proyecto">Primer proyecto</a></li>
		<li><a href="#activity">Activity</a></li>
		<li><a href="#layout">Hola mundo - layout</a></li>
		<li><a href="#unidades_medida">Unidades de medida</a></li>
		<li><a href="#ejercicio_layout">Ejercicio Layout</a></li>
		<li><a href="#ui">Crear una interfaz de usuario por código</a></li>
		<li><a href="#tipos_layout">Tipos de layout</a></li>
		<li><a href="#landscape">Ejercicio - landscape</a></li>
		<li><a href="#strings">Ejercicio – strings.xml e internacionalizacion</a></li>
		<li><a href="#contenido_scrollable">Contenido Scrollable</a></li>
		<li><a href="#manifest">AndroidManifest.xml</a></li>
		<li><a href="#resources">Resources</a></li>
		<li><a href="#images">Imágenes</a></li>
		<li><a href="#bg_repeat">Background repeat</a></li>
		<li><a href="#trazas">Consola de trazas</a></li>
		<li><a href="#estilos_ej">Ejercicios estilos</a></li>
		<li><a href="#onclick">OnClick</a></li>
		<li><a href="#new_activity">Añadir un nuevo Activity</a></li>
		<li><a href="#pasar_info">Pasar información de una activity a otra</a></li>
		<li><a href="#menus">Menus</a></li>
		<li><a href="#problema_orientacion">Problema al cambiar la orientación de la pantalla</a></li>
</ol>
</li>
<li><a href="#" class="hasChildren">Animaciones</a>
<ol>
		<li><a href="#convertir_imagen">Convertir una imagen en otra</a></li>
			<li><a href="#tween_animation">Animación con clase Tween</a></li>
			<li><a href="#animation_set">Set de animaciones</a></li>
			<li><a href="#fin_anima">Detectar el fin de una animación</a></li>
			<li><a href="#frame_by_frame">Animación FrameByFrame</a></li>
			</ol>
			</li>
<li><a href="#" class="hasChildren">ItemList </a>
<ol>
		<li><a href="#que_es">¿Qué es una lista?</a></li>
		<li><a href="#content_provider">Content Provider</a></li>
		<li><a href="#recycler_view">Usando RecyclerView</a></li>
		<li><a href="#ejercicio_plantas">Ejercicio - plantas</a></li>
			</ol>
</li>
<li><a href="#" class="hasChildren">Almacenar info</a>
<ol><li><a href="#preferencias">Preferencias</a></li>
			<li><a href="#guardar_preferencias">Guardar preferencias</a></li>
			<li><a href="#xml_preferencias">XML de preferencias</a></li>
			<li><a href="#fragmento">Fragmento</a></li>
			<li><a href="#ejercicio_preferencias">Ejercicio preferencias</a></li>

			<li><a href="#sqllite">SQLite</a></li>
			<li><a href="#sqlite_read">SQLite read</a></li>
<li><a href="#sqlite_precarga">SQLite - precarga de la base de datos</a></li>
<li><a href="#reinstalar_bd">Instalar la base de datos con cada actualización de la app</a></li>
<li><a href="#spinner_onchange">OnChange de un spinner</a></li>
<li><a href="#ejercicio">Ejercicio</a></li></ol>
</li>
<li><a href="#multimedia" class="hasChildren">Multimedia</a>
<ol>
			<li><a href="#cargarSonido">Audio</a></li>
			<li><a href="#cargarVideo">Video</a></li>
			<li><a href="#hacerStreaming">Hacer Streaming</a></li>
			<li><a href="#usarCamara">Usar cámara fotos</a></li>
			</ol>
</li>

<li><a href="#navigation_drawer">Navigation Drawer</a></li>


<li><a href="#dialogs" class="hasChildren">Dialogs</a>
<ol>
		<li><a href="#alert_dialog">Alert dialog</a></li>
			<li><a href="#simple_progress_dialog">Simple Progress Dialog</a></li>
<li><a href="#ejercicio_personal_dialog">Ejercicio - Personal dialog</a></li>
<li><a href="#toast">Toast - notificaciones instantáneas</a></li></ol></li>

<li><a href="#notification" class="hasChildren">Notificationes</a> 

<ol>
<li><a href="#notification">Notification</a></li>
<li><a href="#notificacionActivity">Notificación abre un Activity</a></li>

</ol>
</li>

<li><a href="#servicios" class="hasChildren">Servicios</a>
<ol>
	<li><a href="#temporizadores">Temporizadores</a></li>
	<li><a href="#ejercicioYogaConNotificaciones">Ejercicio yoga con notificaciones</a></li>
	<li><a href="#broadcast_receiver">Broadcaster Receiver</a></li>
<li><a href="#solicitar_servicio_wifi">Solicitar el servicio de wifi y comprobar su estado</a></li>
</ol>
</li>
<li><a href="#asyntask" class="hasChildren">AsynTask
<ol>
	<li><a href="#porGET">Petición GET con AsynTask</a></li>
						<li><a href="#search_upc">Ejercicio search UPC</a></li>
</ol>
</a>
</li>
<li><a href="#maps" class="hasChildren">Mapas</a>
<ol>
		<li><a href="#recomendacion">Recomendación</a></li>
		<li><a href="#teoria_geolocalizacion">Teoría geolocalización</a></li>
		<li><a href="#location_manager">Location Manager</a></li>
		<li><a href="#add_map">Añadir un mapa</a></li>
		<li><a href="#centrar_mapa">Centrar mapa en la posición del usuario y seguirlo</a></li>
		<li><a href="#add_marker">Pintar marker</a></li>
		<li><a href="#ubicacion">Obtener la ubicación de cierto lugar</a></li>
		<li><a href="#rutas">Rutas</a></li>	
		<li><a href="#servicios">Servicios</a></li>
			</ol>
</li>
<li><a href="#login">Login</a>
<ol>
	<li><a href="#login_con_google">Login con google</a></li>
	<li><a href="#login_con_fb">Login con facebook</a></li>
</ol>
</li>
		<li><a href="#draw">Dibujar</a></li>
<li><a href="#publicar" class="hasChildren">Publicar</a>
<ol>
		<li><a href="#publicar">Publicar la aplicación en Google Play</a></li>
		<li><a href="#certificado">Certificado de aplicaciones</a></li>
		<li><a href="#error">Error típico – conflicto con el nombre del paquete repetido</a></li>
		<li><a href="#eliminar_app">Eliminar app</a></li>
		<li><a href="#debugar">Publicar y debugar una aplicación en el móvil</a></li>
		<li><a href="#desinstalar">Desinstalar una aplicación del teléfono móvil desde consola</a></li>
			</ol>
</li>
</ol>
				</article>
</section>
<main class="curso">
<?= drawH1WithImg() ?>

	<article><div>
<h2 id="que_es">¿Qué es?</h2>
<div class="row">
	<div class="col-md-6">
	<p>Es un S.O. basado en linux y escrito en Java.</p>
	
	<h3><a target="_blank" href="http://en.wikipedia.org/wiki/Android_version_history">Versiones de Android</a></h3>
	

</div>
	<div class="col-md-6">
	<h3 id="api">Android API</h3>

	<ul>

	<li><a target="_blank" href="http://developer.android.com/index.html">Develop → Reference</a></li>
	<li><a target="_blank" href="http://developer.android.com/reference/packages.html">packages</a></li>
	</ul>

<h3>Todos los ejercicios de este curso</h3>
	<p>Descargar la aplicación con todos los ejercicios en <a href="ejercicios-android-studio.zip">este enlace</a>.</p>
	</div>
</div>
</div></article>

	
	<article><div>
	<h2 id="instalacion">Guía de instalación</h2>
	<ol>
		<li><a href="http://www.oracle.com/technetwork/java/javase/downloads/index.html">Instalación del JDK</a></li>
		<li><a href="http://developer.android.com/sdk/index.html">Instalación de Android Studio:</a></li>
	</ol>
	</div></article>
	<article><div>
	<h2 id="opciones_desarrollo">Activar opciones de desarrollo</h2>
	<p>Ajustes → Acerca del teléfono → Pulsamos 7 veces sobre el número de compilación.</p>
	<h3>Problema con la versión de Gradle</h3>
	<p><strong>The version of Gradle you are using (Gradle installation '...') does not support ... Support for this is available in Gradle ... and all later versions.</strong></p>
	<p>Habrá que instalar la última versión de Gradle: <a href="https://gradle.org/install">gradle.org</a>.</p>
	
	</div></article>
	<article><div>
	<h2 id="desde_movil">Ejecutar aplicaciones desde el móvil</h2>
	<p>Esto será mucho más rápido y veraz que ejecutar desde el emulador.</p>	
	<h3>Conectar teléfono Android a Ubuntu</h3>
<pre><code>sudo gedit /etc/udev/rules.d/70-android.rules</code></pre>
<pre><code>SUBSYSTEM=="usb", ATTRS{idVendor}=="0bb4", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0e79", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0502", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0b05", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="413c", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0489", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="091e", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="18d1", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0bb4", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="12d1", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="24e3", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="2116", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0482", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="17ef", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="1004", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="22b8", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0409", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="2080", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0955", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="2257", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="10a9", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="1d4d", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0471", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="04da", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="05c6", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="1f53", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="04e8", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="04dd", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0fce", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="0930", MODE="0666"
SUBSYSTEM=="usb", ATTRS{idVendor}=="19d2", MODE="0666"</code></pre></div></article>
<article><div>
	<h2 id="configuracionAndroidStudio">Configuración de Android Studio</h2>
	<p>Navegar en el explorador de ficheros a la ubicacion del fichero activo: En el panel "Android", en la columna izuierda -> Engranaje (opciones) -> Autoscroll From Source</p>
	</div></article>
<article><div>
	<h2 id="gradle">Gradle</h2>
<pre><code>apply plugin: 'com.android.application' <span class="green">//Esto nos indica que estamos haciendo una aplicación Android</span>

android {
<span class="green">//Los siguientes dos valores van a la par, el primero es la versión de android que estamos usando y el segundo nos indica dentro de esa versión, en que revisión del código estamos</span>
    compileSdkVersion 26 
    buildToolsVersion '26.0.2'
    defaultConfig {
<span class="green">//Este parámetro es un valor único dentro de la PlayStore. Suele coincidir con el package name (el primer paquete creado en la app)</span>
        applicationId "com.example.elamorhallegado.dansu"
        minSdkVersion 19 <span class="green">//Cuanto mayor es, con menos dispositivos será compatible nuestra app</span>
        targetSdkVersion 26

        versionCode 1 <span class="green">//es un numero entero que indica la versión de mi app</span>
        versionName "1.0" <span class="green">//puede ser una palabra que indica la versión de mi app</span>
        testInstrumentationRunner "android.support.test.runner.AndroidJUnitRunner"
    }
    buildTypes {
        release {
            minifyEnabled false <span class="green">// decidimos si queremos ofuscar nuestro código para evitar que alguien lo pueda decompilar. Es un embrollo para depurar</span>
            <span class="green">...</span>
        }
    }
}
dependencies {
    <span class="green">...</span>
}</code></pre>	
<h3>Error típico</h3>
<p style="font-style: italic">All libraries must use the exact same version specification (mixing versions can lead to runtime crashes). Found versions 8.3.0, 11.4.2. Examples include com.google.android.gms:play-services-auth:8.3.0 and com.google.android.gms:play-services-base:11.4.2</p>
<p>Esto significa que debo actualizar las versiones de las librerías que son 8.3.0 a la versión 11.4.2, que es más actual. Además debo incluir una librería que falta, y que se cita en el error: com.google.android.gms:play-services-base:11.4.2</p>
<p>Las versiones siempre serán 3 cifras:   11.6.0</p>
</div>
</article>
<article>
	<div>
<h2>Layouts</h2>


	<h3 id="primer_proyecto">Primer proyecto</h3>
	<p>File → new → Android → Android Proyect →
Create new proyect in Workspace → Lo llamamos a_hola_mundo</p>
<p>Esto crea un proyecto Android con un Activity que será el punto de inicio de la aplicación.</p>
<p><span class="bold">Error típico: An SDK Target must be specified</span> → Para solventarlo → window → preferences → Android </p>
	<h3 id="activity">Activity</h3>
	<p>Es una clase java. Presenta su propia interfaz de usuario (ventana).</p>
	<p>Es cada una de las pantallas que componen una aplicación.</p>
	<p>Uno de los activities es el que lanza la aplicación (lanzador)</p>
	<h3>Hola Mundo - Activity</h3>
	<p>Este es el código del Activity que se genera por defecto al crear nuestro proyecto.</p>
	<pre><code>public class A_holaMundoActivity extends Activity{
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
    }
}</code></pre>
	<p>R (resources) es una clase java (ruta gen/R.java) que contiene constantes que apuntan a la ubicación de los recursos utilizados en nuestra aplicación.</p>
	<p>R.layout.main contiene la ubicación del XML que contiene la apariencia de nuestra activity. Está accesible desde res/layout/main.xml. En eclipse, será posible modificar dicha ubicación mediante un editor gráfico o mediante código.</p>
	<h2 id="layout">Hola Mundo - Layout</h2>
	<p>Por defecto, la propiedad <span class="red bold">android:text</span> del main.xml apunta a una variable hello, definida en res/values/string.xml que contiene su valor. También podría haber puesto directamente el texto “Hola Mundo”, en vez de una constante.</p>
	<p>
<pre><code><span class="b bold">main.xml</span>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:orientation=&quot;vertical&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    &gt;
&lt;TextView  
    android:layout_width=&quot;match_parent&quot; 
    android:layout_height=&quot;wrap_content&quot; 
	<span class="red bold">android:text=&quot;@string/<span class="bold orange">hello</span>&quot;</span>

    /&gt;
&lt;/LinearLayout&gt;

<span class="bold">string.xml</span>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;resources&gt;
    &lt;string name=&quot;<span class="bold orange">hello</span>&quot;&gt;Hello World, A_holaMundoActivity!&lt;/string&gt;
    &lt;string name=&quot;app_name&quot;&gt;A_holaMundo&lt;/string&gt;
&lt;/resources&gt;</code></pre>		
	<h3 id="unidades_medida">Unidades de medida</h3>
	<ul>
		<li><span class="bold">sp</span>: scale-independent pixels. Es similar a la unidad dp, pero su tamaño variará dependiendo de las preferencias del usuario y de la densidad de la pantalla. Lo utilizarás para los tamaños de textos.</li>
		<li><span class="bold">dp</span>: density-independent pixels. Lo utilizarás para todo lo demás. Un dip es lo mismo que un dp, habitualmente utilizamos el término dp, porque se parece más al término sp. Estas unidades son relativas a una pantalla de 160 dpi(dots per inch); luego un dp equivale a un px en este tipo de pantalla.</li>
		<li><span class="bold">px</span>: pixel</li>
		<li><span class="bold">in</span>: inches (pulgadas). Basadas en el tamaño físico de la pantalla.</li>
		<li><span class="bold">mm</span>: milímetros. Basados en el tamaño físico de la pantalla.</li>
		<li><span class="bold">pt</span>: points. 1/72 de una pulgada.</li>
	</ul>
	<h3 id="ejercicio_layout">Ejercicio Layout</h3>
	<p>Hacer una aplicación con un activity que llame a un layout llamado nuevo_layout.xml que tenga dos cuadros de texto.</p>
	<p>En el primero se muestra el texto “Hola Mundo”. Dicho texto será una variable definida en strings.xml. Se mostrará en un tamaño superior al normal.</p>
	<p>En el segundo se muestra el texto “Adios Mundo”. Dicho texto estará escrito directamente en la propiedad android:text. Se mostrará en rojo y en negrita.</p>
	<p>Probar a introducir otros componentes, modificar sus propiedades y ver el efecto que esto tiene</p>
	<div class="notas">
		<h4>Notas:</h4>
		<ul>
			<li>Para crear un nuevo layout: botón derecha sobre la carpeta <strong>res/layout</strong> en el panel de estructura de proyecto → new → Layout Resource File </li>
		</ul>
	</div>
	<h3 id="ui">Crear una interfaz de usuario por código</h3>

<div class="row">
	<div class="col-md-6"><pre><code>public class InterfazUSuarioActivity extends AppCompatActivity {
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        TextView texto = <span class="red">new TextView(this);</span>
        texto.setText("Hola Mundo");
        setContentView(texto);
    }
}</code></pre></div>
	<div class="col-md-6">
			
	<p>Al instanciar un objeto de la clase TextView le pasamos como parámetro el Activity que se va a encargar de gestionarlo.</p>
	<p>La clase Activity es una subclase de Context.</p>
		<p>El contexto es una variable que almacena el estado del teléfono (brillo, conectividad, batería...). Un  activity y un servicio heredan de Context. Por tanto, también son contextos.</p>
	<p>Como la clase <span class="i">InterfazUSuarioActivity</span> es una subclase de Activity, también es de tipo context. Por ello, puedes pasar this como contexto del TextView.</p>
	</div>
</div>
</div>
</article>

<article>
<div>

	<h2 id="tipos_layout">Tipos de layout</h2>
	<ul>
		<li><a href="#constraint_layout" class="bold">Constraint (restricción) Layout</a>
		<br><span class="bold">Nota</span>: Si tenemos algún elemento con su alto o ancho ocupando toda la pantalla o unas dimensiones demasiado grandes, los elementos desaparecerán por la derecha o el fondo de la pantalla.</li>
<li><a href="#linear_layout" class="bold">Linear Layout</a></li>
<li><span class="bold">RelativeLayout</span>: Los elementos se posicionan en función de los que tienen al lado. Ha sido sustituído por el Constraint Layout</li>
<li><a  href="#framelayout"><span class="bold">FrameLayout</span></a><br>
Los elementos se superponen unos con otros. No es un layout típico.
</li>
<li><a href="#tablelayout"><span class="bold">TableLayout</span></a><br>
	Coloca los elementos siguiendo una distribución de tabla
</li>
<li><span class="bold">AbsoluteLayout</span> <br>
Deprecated
</li>
	</ul>
<h4 id="constraint_layout">Constraint Layout</h4>
<div class="row">
	<div class="col-md-6">
<p>Alineas cada vista en función de las que tienen al lado o de la que la envuelve.</p>
<p>Cada vista tiene al menos dos restricciones: horizontal y vertical. Estas restricción está conectada con el layout padre o una línea de guía invisible.</p>
<p>Generalmente, tenderemos a realizar este layout con las herramientas de la interfaz visual de android studio.</p>
<p>Añadiremos las restricciones (constraints) arrastrando y soltando a partir de los puntos azules ubicados en los cuatro puntos cardinales.</p>
</div>
<div class="col-md-6">
<img src="img/constraint-layout.png" alt="Constraint layout">
</div>
</div>
	<h4 id="linear_layout">Linear Layout (el más frecuente)</h4>
	<div class="row">
		<div class="col-md-6">
		<p>Los elementos se irán apilando horizontal o verticalmente en función del parámetro <span class="i">orientation</span></p>
<pre><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout
  xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
  android:orientation=&quot;vertical&quot;
  android:layout_width=&quot;match_parent&quot;
  android:layout_height=&quot;match_parent&quot;&gt;
	&lt;AnalogClock 
		android:layout_width=&quot;wrap_content&quot;
		android:layout_height=&quot;wrap_content&quot; /&gt;
	&lt;CheckBox
		android:layout_width=&quot;wrap_content&quot;
		android:layout_height=&quot;wrap_content&quot;
		android:text=&quot;un checkbox&quot; /&gt;
	&lt;Button
		android:layout_width=&quot;wrap_content&quot;
		android:layout_height=&quot;wrap_content&quot; 
		android:text=&quot;un bot&oacute;n&quot; /&gt;
	&lt;TextView
		android:layout_width=&quot;wrap_content&quot;
		android:layout_height=&quot;wrap_content&quot;
		android:text=&quot;un TextView&quot; /&gt;
&lt;/LinearLayout&gt;</code></pre>
</div>
<div class="col-md-6">
<img src="img/layout1.svg" alt="primer layout">
</div>
</div>
	<h4 id="tablelayout">Table Layout</h4>
<p>Se utiliza la etiqueta TableRow cada vez que queremos insertar una nueva línea. <br>
Utilizaré el atributo android:stretchColumns="*" para que las celdas ajusten su tamaño hasta alcanzar los límites de la pantalla.</p>
<div class="row">
	<div class="col-md-6">
<pre><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;TableLayout
  xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
  android:orientation=&quot;vertical&quot;
  android:layout_width=&quot;match_parent&quot;
  android:layout_height=&quot;match_parent&quot;&gt;
&lt;TableRow&gt;
	&lt;AnalogClock 
	android:layout_width=&quot;wrap_content&quot;
	android:layout_height=&quot;wrap_content&quot; /&gt;
	&lt;CheckBox
	android:layout_width=&quot;wrap_content&quot;
	android:layout_height=&quot;wrap_content&quot;
	android:text=&quot;un checkbox&quot; /&gt;
&lt;/TableRow&gt;
&lt;TableRow&gt;
	&lt;Button
	android:layout_width=&quot;wrap_content&quot;
	android:layout_height=&quot;wrap_content&quot; 
	android:text=&quot;un bot&oacute;n&quot; /&gt;
	&lt;TextView
	android:layout_width=&quot;wrap_content&quot;
	android:layout_height=&quot;wrap_content&quot;
	android:text=&quot;un TextView&quot; /&gt;
&lt;/TableRow&gt;
&lt;/TableLayout&gt;</code></pre>
</div>
<div class="col-md-6">
<img src="img/layout2.svg" alt="ejemplo table layout">
</div></div>
	<h3 id="gridlayout">GridLayout</h3>
	<div class="row">
	<div class="col-md-6">
	<pre><code>&lt;GridLayout
  xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
  android:layout_width=&quot;match_parent&quot;
  android:layout_height=&quot;match_parent&quot;
      android:columnCount=&quot;2&quot;&gt;
&lt;AnalogClock 
android:layout_width=&quot;wrap_content&quot;
android:layout_height=&quot;wrap_content&quot; /&gt;
&lt;CheckBox
android:layout_width=&quot;wrap_content&quot;
android:layout_height=&quot;wrap_content&quot;
android:text=&quot;@string/un_checkbox&quot; /&gt;
&lt;Button
android:layout_width=&quot;wrap_content&quot;
android:layout_height=&quot;wrap_content&quot; 
android:text=&quot;@string/un_boton&quot; /&gt;
&lt;TextView
android:layout_width=&quot;wrap_content&quot;
android:layout_height=&quot;wrap_content&quot;
android:text=&quot;@string/un_textview&quot; /&gt;
&lt;/GridLayout&gt;</code></pre>
	</div>
	<div class="col-md-6">
		<img src="img/layout3.svg" alt="layout grid layout">
	</div>
	</div>
	<h4 id="framelayout">Frame Layout <span style="0.5em">
(posiciona todos los elementos usando todo el contenedor, sin distribuirlos espacialmente)</span></h4>
<div class="row">
	<div class="col-md-6">
<pre><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
<span class="bold">&lt;FrameLayout</span>
  xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
  android:orientation=&quot;vertical&quot;
  android:layout_width=&quot;match_parent&quot;
  android:layout_height=&quot;match_parent&quot;&gt;
&lt;AnalogClock 
android:layout_width=&quot;wrap_content&quot;
android:layout_height=&quot;wrap_content&quot; /&gt;
&lt;CheckBox
android:layout_width=&quot;wrap_content&quot;
android:layout_height=&quot;wrap_content&quot;
android:text=&quot;un checkbox&quot; /&gt;
&lt;Button
android:layout_width=&quot;wrap_content&quot;
android:layout_height=&quot;wrap_content&quot; 
android:text=&quot;un bot&oacute;n&quot; /&gt;
&lt;TextView
android:layout_width=&quot;wrap_content&quot;
android:layout_height=&quot;wrap_content&quot;
android:text=&quot;un TextView&quot; /&gt;
<span class="bold">&lt;/FrameLayout&gt;</span></code></pre>
</div>

<div class="col-md-6">
<img src="img/frame-layout.png" alt="frame layout">
</div>
</div>
	<h4>Ejercicio Linear Layout</h4>
	<p>Utilizaremos un <span class="red bold">Linear Layout</span> y setearemos su propiedad <span class="red bold">gravity</span>.</p>
	<p>El fichero res/strings.xml ha de tener el siguiente contenido:</p>
	<div class="row">
		<div class="col-md-6">
<pre><code>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;resources&gt;
	&lt;string name=&quot;app_name&quot;&gt;Ejercicio Layout&lt;/string&gt;
	&lt;string name=&quot;pablomonteserin&quot;&gt;Pablo Monteser&iacute;n&lt;/string&gt;
	&lt;string name=&quot;menu1&quot;&gt;Acerca de m&iacute;&lt;/string&gt;
	&lt;string name=&quot;menu2&quot;&gt;Galer&iacute;a de videos&lt;/string&gt;
	&lt;string name=&quot;menu3&quot;&gt;Galer&iacute;a de fotos&lt;/string&gt;
	&lt;string name=&quot;menu4&quot;&gt;Contacto&lt;/string&gt;
&lt;/resources&gt;</code></pre>
</div>
<div class="col-md-6">
	<img src="img/ejercicio-layout.svg" alt="ejercicio layout">
	</div>
</div>
	<h3 id="landscape"><span class="text-dark">Ejercicio:</span> TableLayout</h3>
	<div class="row">
		<div class="col-md-6">
	<p>Android permite diseñar una vista diferente para la configuración horizontal y vertical.</p>
	<p>A partir del ejercicio anterior, <span class="red bold">crea la carpeta</span> res/layout-land y crea en ella una vista con el mismo nombre que la que está en la carpeta layout.</p>
	<p>Para ver la carpeta land recién creada: panel Project → Packages.</p>
	<p>Habrá que usar un <span class="bold">TableLayout dentro de un LinearLayout</span>. Para que los elementos del TableLayout ocupen todo el ancho de la celda, utilizar el siguiente atributo: <span class="bold">android:stretchColumns="*"</span>.</p>
	<p>Todos los elementos visuales del layout (los layouts, los Buttons y el TextView) deben tener un layout_width y un layout_height.</p>
	</div>
	<div class="col-md-6">
	<img src="img/ejercicio-layout-2.svg" alt="ejercicio layout 2">
	</div></div>
	<h3 id="strings"><span class="text-dark">Ejercicio:</span> strings.xml e internacionalizacion</h3>
	<p>Android utiliza una lista de sufijos para expresar recursos alternativos. Estos sufijos pueden hacer referencia a la orientación del dispositivo, al lenguaje, la región, la densidad de pixeles, la resolución, etc.</p>
	<p>Crea el siguiente fichero en el que traducirás todas las cadenas al inglés: <br>
<strong>res/values-en/strings.xml</strong>
	</p>
	<p>Para cambiar el idioma en el dispositivo: <br>
Ajustes → Idioma y texto → Seleccionar idioma
	</p>
	<h3 id="contenido_scrollable">Contenido scrollable</h3>
	<p>Bastará con envolver el Layout dentro de nuestro activity_main.xml por un ScrollView. El ScrollView sólo puede tener un hijo.</p>
	<h3><span class="text-dark">Ejercicio:</span> Constraint Layout</h3>
<img src="img/ejercicio-constraint-layout.png" alt="ejercicio constraint layout">
	<h3 id="manifest">AndroidManifest.xml</h3>
	<p>Describe las funcionalidades y los permisos que serán necesarios, etc. de la aplicación. <br>
	Para editarlo recurriremos a las vistas xml y no a las vistas gráficas que nos da eclipse. <br>
	Las siguientes líneas estarán contenidas en el nodo del activity que se lanzará en primer lugar al arrancar la aplicación: </p>
<pre><code>&lt;intent-filter&gt;
	&lt;action android:name=&quot;android.intent.action.MAIN&quot; /&gt;
      &lt;category android:name=&quot;android.intent.category.LAUNCHER&quot; /&gt;
&lt;/intent-filter&gt;</code></pre>
	<p>Cuando en la consola de trazas obtengo un "Class Not Found Exception": <br>
o el nombre de la clase o el nombre del paquete están mal en el manifest. Lo ideal es que en el manifest la definición del paquete coincida con el paquete raíz de todos los activities.</p>
	<p><span class="bold">Si tenemos el siguiente error en las trazas:</span> <br>
android.content.ActivityNotFoundException: Unable to find explicit activity class...; have you declared this activity in your AndroidManifest.xml?</p>
<p>Falto declarar la segunda activity. Ponemos la siguiente línea en el AndroidManifest.xml</p>
<pre><code>&lt;activity android:name=&quot;.Second&quot; /&gt;</code></pre>
	<h3 id="resources">R</h3>
	<p>Todos los recursos (xml, drawable, etc.) se empaquetan en un archivo R que es una especie de índice de recursos.</p>
	<p>android:id="@+id/item2"</p>
	<p>La arroba significa que nos estamos refiriendo al archivo de recursos R. <br>
El + significa que estamos añadiendo un nuevo recurso.</p>
	<p>Cada vez q realizo un cambio en la estructura de mi proyecto (carpetas, documentos xml, atributos de dichos documentos, etc) android lo comprueba. Si el cambio arrojase un error es probable que dicho error apareciese reflejado en la pestaña Console</p>
<h3 id="images">Imágenes</h3>
	<h4>Tamaños de imágenes y layouts en función de la pantalla dónde serán reproducidos</h4>
<pre><code>res/drawable-mdpi/my_icon.png 		<span class="green">//bitmap for medium density</span>
res/drawable-hdpi/my_icon.png 		<span class="green">//bitmap for high density</span>
res/drawable-xhdpi/my_icon.png 		<span class="green">//bitmap for extra high density</span>

res/layout/my_layout.xml 			<span class="green">//layout for normal screen size (“default”)</span>
res/layout-small/my_layout.xml 		<span class="green">//layout for small screen size</span>
res/layout-large/my_layout.xml 		<span class="green">//layout for large screen size</span>
res/layout-xlarge/my_layout.xml 		<span class="green">//layout for extra large screen size</span>
res/layout-xlarge-land/my_layout.xml 	<span class="green">//layout for extra large in landscape orientation</span></code></pre>
<p>Ponemos los recursos en estas carpetas y será el sistema el que decida cuál utilizar.</p>


	<h4>Ejercicio: <span class="text-dark">Cargar una imagen</span></h4>
	<p>Debemos copiar la imagen en la carpeta drawable-hdpi.</p>
	<p><span class="bold">Cargar la imagen en un ImageView:</span> <br>
Introducimos un objeto de tipo ImageView en el xml y lo vinculamos a la imagen guardada en drawable.</p>
<p><span class="bold">Cargar la imagen en un ImageButton:</span> 
<br>Introducimos un elemento de tipo ImageButton en el xml y lo vinculamos a la imagen guardada en drawable.</p>
<p><span class="bold">Cambiar dinámicamente la foto del ImageView anterior:</span></p>
<pre><code>ImageView iv = findViewById(R.id.imageView1);
iv.<span class="red">setImageResource</span>(R.drawable.cara);</code></pre>
<h3>Cargar imagen con esquinas redondeadas</h3>
<div class="row">
	<div class="col-md-9">
<pre><code>ImageView iv = findViewById(R.id.miFoto);

Bitmap batmapBitmap = BitmapFactory.decodeResource(getResources(), R.drawable.aperturaabductores);
RoundedBitmapDrawable circularBitmapDrawable = RoundedBitmapDrawableFactory.create(getResources(), batmapBitmap);

// option 1 h/t [Chris Banes](https://chris.banes.me/)
circularBitmapDrawable.setCornerRadius(batmapBitmap.getWidth());

// option 2 h/t @csorgod in the comments
circularBitmapDrawable.setCircular(true);


iv.setImageDrawable(circularBitmapDrawable);</code></pre></div>
<div class="col-md-3">
<img src="./img/esquinas-redondeadas.png" alt="Esquinas redondeadas">
</div></div>
	<h3 id="bg_repeat">Background repeat</h3>
<p>Por defecto una imagen se deformará para ocupar las dimensiones del ImageView, en el caso de que la imagen sea mas pequeña. Si lo que queremos es que la imagen se repita:</p>
<pre><span class="bold">activity_main.xml</span><code>&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
android:background=&quot;@drawable/<span class="blue bold">background_repeat</span>&quot;
...</code></pre>
<pre><span class="bold"><span class="blue">background_repeat</span>.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;bitmap xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot; 
   android:src=&quot;@drawable/icon&quot;
   android:tileMode=&quot;repeat&quot;
    /&gt;</code></pre>
	<h3 id="trazas">Consola de trazas</h3>
	<pre><span class="bold">Poner nuestras propias trazas:</span><code>Log.d("total", cadenaTexto);</code></pre>
	<p>Si quiero mostrar por las trazas un número:</p>
<pre><code>Log.d("total", ""+numeroRegistros);</code></pre>
	<p><span class="bold">Para ver las trazas:</span> <br>
Window → show view → other →  logcat, devices (debo seleccionar el dispositivo del que quiero ver las trazas)</p>
<p><span class="bold">
	AndroidManifest.xml → Debbuggable: true
</span></p>
<h3 id="estilos_ej">Ejercicios: <span class="text-primary">estilos</span></h3>
	<h4>Ejercicio - Cambiar dinámicamente el color o la imagen de fondo de un layout</h4>
<pre><code>LinearLayout milayout= findViewById(R.id.miLayout); 
milayout.setBackgroundColor(Color.rgb(151, 19, 19)); 
</code></pre>
<h4>Ejercicio - Poner un degradado a un layout</h4>

<div class="row">
	<div class="col-md-6">
<pre><span class="bold">res/drawable/<span class="red bold">degradado</span>.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;shape
  xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;&gt;
	&lt;gradient android:startColor=&quot;#FFFFFF&quot;
	android:endColor=&quot;#0000FF&quot;
	android:angle=&quot;270&quot;/&gt;    
&lt;/shape&gt;</code></pre></div>
	<div class="col-md-6">
	<pre><span class="bold">En el .java</span><code>
View mlayout = findViewById(R.id.main_layout);
mlayout.setBackgroundResource(R.drawable.<span class="red bold">degradado</span>);</code></pre>
	</div>
</div>

<h3><span class="text-dark">Ejercicio:</span> Maquetar un botón</h3>
<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">res/drawable/<span class="red bold">rect</span>.xml</span><code>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;shape xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
	android:shape=&quot;rectangle&quot;&gt;
	&lt;gradient
		android:startColor=&quot;#FFFF0000&quot;
		android:endColor=&quot;#80FF00FF&quot;
		android:angle=&quot;45&quot;/&gt;
	&lt;!--  Este es el padding para colocar el texto --&gt;
	&lt;padding
		android:left=&quot;7dp&quot;
		android:top=&quot;7dp&quot;
		android:right=&quot;7dp&quot;
		android:bottom=&quot;7dp&quot; /&gt;		
	&lt;corners android:radius=&quot;10dp&quot; /&gt;
&lt;/shape&gt;</code></pre>
	</div>
	<div class="col-md-6">
		
<pre><strong>main.xml</strong><code>&lt;Button android:text=&quot;Button&quot;
 android:id=&quot;@+id/button1&quot;
 android:layout_width=&quot;wrap_content&quot;
 android:layout_height=&quot;wrap_content&quot;
 android:background=&quot;@drawable/rect&quot; /&gt;
&lt;Button android:text=&quot;Button&quot;
 android:id=&quot;@+id/button1&quot;
 android:layout_width=&quot;wrap_content&quot;
 android:layout_height=&quot;wrap_content&quot; 
 <span class="red">android:background=&quot;@drawable/rect&quot;</span> /&gt;</code></pre>
	</div>
</div>
	
	<h4>Ejercicio; <span class="text-primary">usar colores predefinidos</span></h4>
<div class="row">
	<div class="col-md-6">

	<pre><span class="bold">res/layout/main.xml</span><code>&lt;TextView  
    android:layout_width=&quot;fill_parent&quot; 
    android:layout_height=&quot;wrap_content&quot; 
    android:text=&quot;@string/hello&quot;
    android:textSize=&quot;30dp&quot;
    android:textColor=&quot;@<span class="blue bold">color</span/>/<span class="red bold">red</span>&quot;
    /&gt;</code></pre>
	</div>
	<div class="col-md-6">
		
<pre><span class="bold">res/values/colors.xml</span> (o loquesea.xml)<code>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;resources&gt;
	&lt;<span class="blue">color</span> name=&quot;<span class="bold red">red</span>&quot;&gt;#ff0000&lt;/color&gt;
	&lt;color name=&quot;green&quot;&gt;#00ff00&lt;/color&gt;
	&lt;color name=&quot;blue&quot;&gt;#0000ff&lt;/color&gt;
&lt;/resources&gt;</code></pre>
	</div>
</div>

	<h4>Ejercicio: <span class="text-primary">Cargar las propiedades de un elemento desde un xml</span></h4>
<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">res/layout/main.xml</span><code>&lt;TextView  
    android:layout_width=&quot;fill_parent&quot; 
    android:layout_height=&quot;wrap_content&quot; 
    android:text=&quot;@string/hello&quot; 
    style=&quot;@<span class="red bold">style</span>/<span class="blue bold">code</span>&quot;/&gt;</code></pre>
	</div>
	<div class="col-md-6">
		
	<p>Creamos el xml: <br>
New → Android XML file → what type of resource would you like to create? → Values	</p>

<pre><span class="bold">res/values/styles.xml</span> (o loquesea.xml)<code>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;resources&gt;
	&lt;<span class="red">style</span> name=&quot;<span class="bold blue">code</span>&quot; parent=&quot;@android:style/TextAppearance&quot;&gt;
		&lt;item name=&quot;android:textSize&quot;&gt;40sp&lt;/item&gt;
		&lt;item name=&quot;android:typeface&quot;&gt;monospace&lt;/item&gt;
		&lt;item name=&quot;android:textColor&quot;&gt;#0000FF&lt;/item&gt;
	&lt;/style&gt;    
&lt;/resources&gt;</code></pre>
	</div>
</div>

	<h4>Ejercicio: <span class="text-primary">Crear un estilo que sobrescriba el anterior</span></h4>

<div class="row">
	<div class="col-md-6">

	<pre><span class="bold">res/layout/loquesea.xml</span><code>&lt;TextView 
    android:text=&quot;TextView&quot; 
    android:id=&quot;@+id/textView1&quot; 
    style=&quot;@<span class="red bold">style</span>/<span class="blue bold">code</span>.<span class="red bold">red</span>&quot; 
    android:layout_width=&quot;wrap_content&quot; 
    android:layout_height=&quot;wrap_content&quot;&gt;&lt;/TextView&gt;</code></pre>
	</div>
	<div class="col-md-6">

	<pre><span class="bold">res/values/styles.xml</span> (o loquesea.xml)<code>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;resources&gt;
	&lt;<span class="red">style</span> name=&quot;<span class="bold blue">code</span>&quot; parent=&quot;@android:style/TextAppearance&quot;&gt;
			&lt;item name=&quot;android:textSize&quot;&gt;40sp&lt;/item&gt;
			&lt;item name=&quot;android:typeface&quot;&gt;monospace&lt;/item&gt;
			&lt;item name=&quot;android:textColor&quot;&gt;#0000FF&lt;/item&gt;
	&lt;/style&gt;
	<span class="purple">&lt;style name=&quot;<span class="bold blue">code</span>.<span class="red">red</span>&quot;&gt;
		&lt;item name=&quot;android:textColor&quot;&gt;#FF0000&lt;/item&gt;
	&lt;/style&gt;</span>    
&lt;/resources&gt;</code></pre>
	</div>
</div>

<h4>Ejercicio <span class="text-primary">Cargar un theme de los que vienen por defecto en android</span></h4>

<div class="row">
	<div class="col-md-6">

	<p>Para aplicar un theme a toda la aplicación añado la línea en rojo en el  AndroidManifest.xml:</p>
	<pre><code>&lt;application android:icon=&quot;@drawable/icon&quot; android:label=&quot;@string/app_name&quot;
<span class="red">android:theme=&quot;@style/Base.Theme.AppCompat.Light&quot;&gt;</span></code></pre>
	</div>
	<div class="col-md-6">
		
<p>Para aplicarlo a un activity en concreto: </p>
<pre><code>&lt;activity android:name=&quot;.AcercaDe&quot;
	android:label=&quot;@string/app_name&quot;
	<span class="red">android:theme="@style/Base.Theme.AppCompat.Light"</span>/&gt;</code></pre>
	</div>
</div>

	<p>Lo que no hacemos es aplicar el tema en el xml del layout.</p>
	<p>No todos los temas son compatibles con todos los activities.</p>
	<h3>Ejercicio: <span class="text-primary">Cargar mi propio theme</span></h3>
	<p>New → Android XML file → what type of resource would you like to create? → Values</p>	
<pre><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;resources&gt;
    &lt;style parent=&quot;@android:style/Theme.Dialog&quot; name=&quot;<span class="red">myTheme</span>&quot;&gt;
    	&lt;item name=&quot;android:textColor&quot;&gt;#FF0000&lt;/item&gt;
    &lt;/style&gt;
&lt;/resources&gt;</code></pre>
<p>Cargamos el theme creado por nosotros utilizando el código pintado de rojo en el AndroidManifest.xml:</p>
<pre><code>
&lt;application android:icon=&quot;@drawable/icon&quot; android:label=&quot;@string/app_name&quot;
<span class="red">android:theme=&quot;@style/myTheme&quot;</span>&gt;</code></pre>
	<h4>Ejercicio : <span class="text-primary">theme.dialog</span></h4>
	<p>Crear un theme que herede de Theme.Dialog y hacer que toda la aplicación lo implemente. </p>
	<p>El tema tendrá los siguientes estilos:</p>
<pre><code>android:textColor="#00FF00"
android:typeface="monospace"</code></pre>
	<h3>Iconos</h3>
	<p><a target="_blank" href="http://developer.android.com/guide/practices/ui_guidelines/icon_design.html">Recomendaciones sobre cómo hacer los iconos en Android</a></p>

	<h3>Fragments</h3>

<div class="row">
	<div class="col-lg-6">
	<p>Es una porción de la interfaz de usuario que puede añadirse o eliminarse forma independiente al resto de elementos de la actividad. </p>
	<p>Esto nos permite dividir la interfaz en varias porciones con el fin de diseñar diversas configuraciones de pantalla.</p>
	<p>Todo fragment debe tener asociado, además del layout, su propia clase java, que debe extender de la clase Fragment. </p>
	<p><strong>onCreateView()</strong>, es el “equivalente” al onCreate() de las actividades, y dentro de él es donde normalmente asignaremos un layout determinado al fragment. En este caso tendremos que “inflarlo” (convertir el XML en la estructura de objetos java equivalente) mediante el método inflate() pasándole como parámetro el ID del layout correspondiente, en nuestro caso fragment_listado.</p>
	</div>
	<div class="col-lg-6">
	<pre><span class="bold">activity_contiene_fragment.xml</span><code>&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:orientation=&quot;vertical&quot;
    tools:context=&quot;com.pablomonteserin.layouts.fragments.RecipienteFragment&quot;&gt;

	&lt;fragment class=&quot;com.pablomonteserin.layouts.fragments.<span class="red bold">BlankFragment</span>&quot;
        android:id=&quot;@+id/FrgListado&quot;
        android:layout_weight=&quot;40&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;60dp&quot; /&gt;

&lt;/LinearLayout&gt;</code></pre>
	</div>
</div>

	
	


<div class="row">
	<div class="col-lg-6">
	<pre><span class="red bold">BlankFragment</span><code>public class <span class="red bold">BlankFragment</span> extends Fragment {
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        return inflater.inflate(R.layout.<span class="bold blue">layout_del_fragment</span>, container, false);
    }
    @Override
    public void onActivityCreated(Bundle state) {
        super.onActivityCreated(state);
        TextView tv = getView().findViewById(R.id.elTextViewDelFragment);
        tv.setText("Esto es un fragment");
    }
}</code></pre>
	</div>
	<div class="col-lg-6">
		
	
<pre><span class="bold">layout_del_fragment.xml</span><code>&lt;FrameLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;com.pablomonteserin.layouts.fragments.BlankFragment&quot;&gt;

    &lt;!-- TODO: Update blank fragment layout --&gt;
    &lt;TextView
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        android:text=&quot;@string/hello_blank_fragment&quot;
        android:id=&quot;@+id/elTextViewDelFragment&quot;/&gt;

&lt;/FrameLayout&gt;</code></pre>
	</div>
</div>


<h3>Tabs</h3>


<div class="row">
	<div class="col-md-9">

	<pre><span class="bold">layout_tabs.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:orientation=&quot;vertical&quot;
    android:layout_height=&quot;match_parent&quot;
    android:layout_width=&quot;match_parent&quot;&gt;

    &lt;TabHost android:id=&quot;@android:id/tabhost&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;&gt;

        &lt;LinearLayout
            android:orientation=&quot;vertical&quot;
            android:layout_width=&quot;match_parent&quot;
            android:layout_height=&quot;match_parent&quot; &gt;

            &lt;TabWidget android:layout_width=&quot;match_parent&quot;
                android:layout_height=&quot;wrap_content&quot;
                android:id=&quot;@android:id/tabs&quot; /&gt;

            &lt;FrameLayout android:layout_width=&quot;match_parent&quot;
                android:layout_height=&quot;match_parent&quot;
                android:id=&quot;@android:id/tabcontent&quot; &gt;

                &lt;LinearLayout android:id=&quot;@+id/tab1&quot;
                    android:orientation=&quot;vertical&quot;
                    android:layout_width=&quot;match_parent&quot;
                    android:layout_height=&quot;match_parent&quot; &gt;

                    &lt;TextView android:id=&quot;@+id/textView1&quot;
                        android:text=&quot;Contenido Tab 1&quot;
                        android:layout_width=&quot;wrap_content&quot;
                        android:layout_height=&quot;wrap_content&quot; /&gt;
                &lt;/LinearLayout&gt;

                &lt;LinearLayout android:id=&quot;@+id/tab2&quot;
                    android:orientation=&quot;vertical&quot;
                    android:layout_width=&quot;match_parent&quot;
                    android:layout_height=&quot;match_parent&quot; &gt;

                    &lt;TextView android:id=&quot;@+id/textView2&quot;
                        android:text=&quot;Contenido Tab 2&quot;
                        android:layout_width=&quot;wrap_content&quot;
                        android:layout_height=&quot;wrap_content&quot; /&gt;
                &lt;/LinearLayout&gt;
            &lt;/FrameLayout&gt;
        &lt;/LinearLayout&gt;
    &lt;/TabHost&gt;
&lt;/LinearLayout&gt;</code></pre>
	</div>
	<div class="col-md-3">
	<img class="img-fluid" src="img//android-tabs.png" alt="Android tabs">

	</div>
</div>

<pre><span class="bold">TabsActivity</span><code>public class TabsActivity extends AppCompatActivity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.layout_tabs);

		Resources res = getResources();

		TabHost tabs=findViewById(android.R.id.tabhost);
		tabs.setup();

		TabHost.TabSpec spec=tabs.newTabSpec("mitab1");

		// Añado dos pestañas a mi sistema de pestañas. La primera ...
		spec.setContent(R.id.tab1);
		spec.setIndicator("", ContextCompat.getDrawable(this,android.R.drawable.ic_btn_speak_now));
		tabs.addTab(spec);

		//... y la segunda
		spec=tabs.newTabSpec("mitab2");
		spec.setContent(R.id.tab2);
		spec.setIndicator("mi casa es tu casa",ContextCompat.getDrawable(this, android.R.drawable.ic_dialog_email));
		tabs.addTab(spec);

		tabs.setCurrentTab(0);
    }
}</code></pre>

	<h3 id="onclick">OnClick</h3>

<div class="row">
	<div class="col-md-6">

	<pre><span class="bold">main.xml</span><code>
&#x2026;
&lt;Button android:text=&quot;Button&quot;
 android:id=&quot;@+id/button1&quot;
 android:layout_width=&quot;wrap_content&quot;
 android:layout_height=&quot;wrap_content&quot;
 <span class="bold">android:onClick=&quot;btnPulsado&quot;</span>/&gt;
...</code></pre>	
	</div>
	<div class="col-md-6">
		
<pre><span class="bold">MainActivity.java</span><code>public void btnPulsado(View v){
	TextView tv = findViewById(R.id.textView1);
	tv.setText(&quot;bot&oacute;n pulsado&quot;);
}</code></pre>
	</div>
</div>

	<h4>Clase <span class="red bold">OnClickListener</span></h4>
	<p>Con esto conseguiremos tener solamente una única clase que gestione todos los eventos de click.</p>
<pre><code>public class Main extends AppCompatActivity{
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);
        
		Button b = findViewById(R.id.button1);
		b.setOnClickListener(new View.OnClickListener(){

			@Override
			public void onClick(View v) {
				Log.d("traza", "llega");
			}
		});
	}
}</code></pre>
	<h3 id="new_activity">Añadir un nuevo Activity</h3>
	<p>Botón derecho sobre el paquete → new → Activity → Empty Activity</p>
	<p>Esto crea una clase Activity con su método onCreate y su correspondiente referencia en el AndroidManifest.xml.</p>
	<h4>¿Para qué sirve un Intent?</h4>
	<p>Para invocar componentes (un Activity, código ejecutándose en segundo plano, et.)</p>
	<h3>Crear un botón en la primera activity para que cuando pulsemos sobre él vayamos a la segunda</h3>

<div class="row">
	<div class="col-md-6">
	<pre><code><span class="bold purple">startActivity(new Intent(this, SecondActivity.class));</span></code></pre>
<p>Activity que hace la llamada. Si sólo ponemos this, se pensará que estamos haciendo referencia a la clase OnClickListener, en lugar de a la clase Main</p>
	</div>
	<div class="col-md-6">
		
<p>Hay que registrar el Activity en el AndroidManifest.xml</p>
<pre><code>&lt;activity android:name=&quot;.AcercaDe&quot; 
	android:label=&quot;@string/app_name&quot;&gt;
&lt;/activity&gt;</code></pre>
	</div>
</div>

	
	<h3 id="pasar_info">Pasar información de una activity a otra</h3>

<div class="row">
	<div class="col-md-6">

	<p>En el editor visual de layouts de Android, un componente <span class="bold">Plain Text</span> corresponde realmente a un <span class="bold">EditText</span> en el código fuente.</p>
	<pre><code><span class="bold">Main.java</span>
	public final static String TEXTO = "texto";

	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);
	}

	public void pasarInfo(View view) {
		final EditText et = findViewById(R.id.editText1);
		<span class="bold">Intent intent = new Intent(this, SecondActivity.class);</span>
		<span class="red">intent.putExtra(TEXTO, et.getText().toString());</span>
		<span class="bold">startActivity(intent);</span>
	}</code></pre>
	</div>
	<div class="col-md-6">


	<pre><span class="bold">SecondActivity.java</span><code>public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.second);
		TextView tv = findViewById(R.id.textView1);
		tv.setText(getIntent().getExtras().getString(Main.TEXTO));
	}</code></pre>
	</div>
</div>


<h3 id="menus">Menus</h3>
	<h4>Ejercicio: <span class="text-primary">Crear un menú</span></h4>
	<p>Un menú contextual es lanzado al pulsar la tecla menú del teléfono.</p>
<pre><code><span class="bold">res/menu/menu.xml</span>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;menu xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;&gt;
	&lt;item android:id=&quot;@+id/item1&quot; android:title=&quot;Option 1&quot; android:icon=&quot;@android:drawable/ic_menu_compass&quot; /&gt;
	&lt;item android:id=&quot;@+id/item2&quot; android:title=&quot;Option 2&quot; android:icon=&quot;@android:drawable/ic_menu_call&quot; /&gt;    
&lt;/menu&gt;</code></pre>


<div class="row">
	<div class="col-md-6">

	<pre><code><span class="bold">MenuActivity.java</span>
public class MenuActivity extends Activity {
	...
	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		MenuInflater inflater = getMenuInflater();
		inflater.inflate(R.menu.menu, menu);
		return true;
	}</code></pre>
	</div>
	<div class="col-md-6">
		
<p>Al ejecutar la aplicación pulsamos el botón de menú para ver los menús.</p>
<img class="img-fluid" src="img/menu.svg" alt="menu android">
	</div>
</div>





	<h4>Ejercicio: <span class="text-primary">Detectar la pulsación de un menú</span></h4>

	<div class="row">
		<div class="col-md-6">
		<p>Añadimos el siguiente código al java anterior:</p>
<pre><code>
public boolean onOptionsItemSelected(MenuItem item){
	if(item.getItemId() == R.id.item1){
    	Log.d(&quot;opcion&quot;, &quot;opcion 1 pulsada&quot;);
    }
	return super.onOptionsItemSelected(item);
}</code></pre>

		</div>
		<div class="col-md-6">
		<p>También se podía haber hecho con el método onclick, procesando la información de la siguiente forma:</p>
<pre><code>public void menuPulsado(MenuItem menu){
	...
}</code></pre>

		</div>
	</div>
	<h3 id="problema_orientacion">Problema al cambiar la orientación de la pantalla</h3>
	<p>Al cambiar la orientación se destruyen los componentes visuales y se vuelven a crear, llamando al onCreate.</p>
	<p>Podemos solventar los problemas que esto pueda acarrear modificando el nodo &lt;activity&gt; correspondiente del AndroidManifest.xml:</p>
<p>- Para limitar el giro de la aplicación: <br>
android:screenOrientation="portrait"</p>	

<p>- Para que no se destruya el activity: <br>
 android:configChanges="keyboard | keyboardHidden | orientation | screenSize | smallestScreenSize"
</p>

</div></article>
<article><div>
<h3 id="convertir_imagen"><span class="text-dark">Ejercicio:</span>  Al pulsar sobre un botón, convertir una imagen en otra</h3>

<div class="row">
	<div class="col-md-6">

	<p>Asignaremos el xml de la animación al imageview usando el atributo src del layout.</p>
<pre><span class="bold">MainActivity.java</span><code><span class="bold">ImageView iv = findViewById(R.id.imageView1);
TransitionDrawable td = (TransitionDrawable) iv.getDrawable();
td.startTransition(1000);</span></code></pre>
	</div>
	<div class="col-md-6">
		
<pre><span class="bold">res/drawable/transition.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;transition
  xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;&gt;
    &lt;item android:drawable=&quot;@drawable/steve1&quot;&gt;&lt;/item&gt;
    &lt;item android:drawable=&quot;@drawable/steve2&quot;&gt;&lt;/item&gt;
&lt;/transition&gt;</code></pre>
<p class="red bold">En el layout, el ImageView deberá tener el siguiente atributo:
android:src="@drawable/transition"</p>
	</div>
</div>

	<h3 id="tween_animation">Ejercicio</h3>


<div class="row">
	<div class="col-md-6">
	<p>Al pulsar sobre un botón, animarlo utilizando la clase Tween, que se encargará de deformarlo.</p>
	<pre><span class="bold">MainActivity.java</span><code><span class="green">&#x2026;</span>
Animation anim = AnimationUtils.loadAnimation(this, R.anim.animation);
Button b = findViewById(R.id.button1);
b.startAnimation(anim);

// iv.reverseTransition(1000); // hace la animación en dirección contraria
<span class="green">&#x2026;</span></code></pre>


	</div>
	<div class="col-md-6">
		
<pre><span class="bold">res/anim/animation.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;set xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;&gt;
    &lt;scale
        android:fromXScale=&quot;0.5&quot;
        android:toXScale=&quot;2.0&quot;
        android:fromYScale=&quot;0.5&quot;
        android:toYScale=&quot;2.0&quot;
        android:pivotX=&quot;50%&quot;
        android:pivotY=&quot;50%&quot;
        android:duration=&quot;4000&quot;
        &gt;
    &lt;/scale&gt;
&lt;/set&gt;</code></pre>
	</div>
</div>

	<h3 id="animation_set"><span class="text-dark">Ejercicio:</span> set de animaciones</h3>
<pre><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;set xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;&gt;
	&lt;scale xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
	 	android:fromXScale=&quot;0.5&quot;
	 	android:toXScale=&quot;2.0&quot;
	 	android:fromYScale=&quot;0.5&quot;
	 	android:toYScale=&quot;2.0&quot;
	 	android:pivotX=&quot;50%&quot;
	 	android:pivotY=&quot;50%&quot;
	 	android:duration=&quot;4000&quot; /&gt;
	&lt;rotate android:fromDegrees=&quot;0&quot;
		android:toDegrees=&quot;180&quot;
		android:pivotX=&quot;50%&quot;
		android:pivotY=&quot;50%&quot;
		android:duration=&quot;20000&quot;
		android:startOffset=&quot;2000&quot; /&gt;
&lt;/set&gt;</code></pre>
	<h3 id="fin_anima">Detectar el fin de una animación</h3>
	<p>El activity debe implementar la interfaz AnimationListener.</p>
<pre><code>...
questionsPanel_anim.setAnimationListener(this);
questionsPanel.startAnimation(questionsPanel_anim);	
...


public void onAnimationEnd(Animation arg0) {
		if(arg0==questionsPanel_anim){
			pintarPreguntasYRespuestas();
		}
}</code></pre>
	<h3 id="frame_by_frame">Animación FrameByFrame</h3>

<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">MainActivity.java</span><code>&#x2026;
ImageView iv = findViewById(R.id.imageView1);
iv.setBackgrounResource(R.drawable.animation);
AnimationDrawable animation = (AnimationDrawable) iv.getBackground();
animation.start();
</code></pre>
	</div>
	<div class="col-md-6"><pre><span class="bold">res/layout/activity_main.xml</span><code>&lt;ImageView
    android:background=&quot;@drawable/<span class="bold red">animation</span>&quot;
    ...
/&gt;</code></pre></div>
</div>

	
<div class="row">
	<div class="col-md-6">

	<pre><span class="bold">res/drawable/<span class="bold red">animation.xml</span></span><code>&lt;animation-list xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;&gt;
&lt;item android:drawable=&quot;@drawable/animation_00031&quot; android:duration=&quot;30&quot; /&gt;
&lt;item android:drawable=&quot;@drawable/animation_00032&quot; android:duration=&quot;30&quot; /&gt;
&lt;item android:drawable=&quot;@drawable/animation_00033&quot; android:duration=&quot;30&quot; /&gt;
&#x2026;</code></pre>
	</div>
	<div class="col-md-6"><?= getRes('recurso','ex/animation_000.zip', 'Descargar imagenes de la animación') ?>
</div>
</div>

</div></article>
<article><div>
<h2>ItemList</h2>	
<h3 id="que_es">Qué es una Lista</h3>

<div class="row">
	<div class="col-md-10">
	<p>Una lista en el contexto de Activity es la interfaz gráfica que nos permite navegar por una serie de datos.</p>

	</div>
	<div class="col-md-2">
	<img class="img-fluid" src="img/lista.svg" alt="lista android">

	</div>
</div>

<h2 id="recycler_view">Usando RecyclerView</h2>
	<pre><code>RecyclerView rv =  findViewById(R.id.miLista);
String [] paises = getResources().getStringArray(R.array.countries);
MyAdapter myAdapter = new MyAdapter(this, paises);
rv.setLayoutManager(new LinearLayoutManager(this));
rv.setHasFixedSize(true);
rv.setAdapter(myAdapter);</code></pre>


<div class="row">
	<div class="col-lg-7">
	<pre><span class="bold">MyAdapter.java</span><code>public class MyAdapter extends RecyclerView.Adapter&lt;MyAdapter.ViewHolderPais&gt; {

//El ViewHolder es la fila. En el constructor del ViewHolderPlanta accedemos a los objetos
//de la fila mediante código Java
public static class ViewHolderPais extends RecyclerView.ViewHolder {
	TextView tv;
	private View.OnClickListener onItemClickListener;

	public ViewHolderPais(@NonNull View itemView) {
		super(itemView);
		tv = itemView.findViewById(R.id.tv);
	}
}

private String[] paises;
private Context context;

public MyAdapter(@NonNull Context context, String [] paises) {
	this.paises = paises;
	this.context = context;
}

//En el constructor del ViewHolder inflamos el xml
@NonNull
@Override
public ViewHolderPais onCreateViewHolder(@NonNull ViewGroup parent, int position) {
	LayoutInflater layoutInflater = LayoutInflater.from(parent.getContext());
	View row = layoutInflater.inflate(R.layout.simple_row_list,parent,false);
	ViewHolderPais viewHolder = new ViewHolderPais(row);
	viewHolder.itemView.getTag();
	return viewHolder;
}

@Override
public void onBindViewHolder(ViewHolderPais viewHolder, int position) {
	final String pais = paises[position];
	viewHolder.tv.setText(pais);
}

@Override
public int getItemCount() {
	return paises.length;
}
}</code></pre>
	</div>
	<div class="col-lg-5">
		
<pre><span class="bold">res/values/countries.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;resources&gt;
	&lt;string-array name=&quot;countries&quot;&gt;
		&lt;item name=&quot;usa&quot;&gt;United States&lt;/item&gt;
		&lt;item name=&quot;brazil&quot;&gt;Brazil&lt;/item&gt;
		&lt;item name=&quot;russia&quot;&gt;Russia&lt;/item&gt;
		&lt;item name=&quot;egypt&quot;&gt;Egypt&lt;/item&gt;
		&lt;item name=&quot;japan&quot;&gt;Japan&lt;/item&gt;
	&lt;/string-array&gt;
&lt;/resources&gt;</code></pre>
	</div>
</div>

	<h2 id="content_provider">Content Provider</h2>
	<p>Nos permiten acceder a la información de otras aplicaciones incluida en un dispositivo, por ejemplo, a la agenda telefónica.</p>
	<p>En un content provider los datos pueden estar almacenados:</p>
<ul>
	<li>en una base de datos.</li>
	<li>en archivos.</li>
	<li>en una red.</li>
</ul>
	<h3>Cómo acceder a los contactos</h3>
	<p>Para leer los contactos, primero habrá que añadir uno: <br>
Símbolo del teléfono → botón de menú → Add contact.</p>
	<p>Añadimos el permiso justo antes del cierre del Manifest: <br>
&lt;uses-permission android:name = &quot;android.permission.READ_CONTACTS&quot; /&gt;</p>
	<h3 id="contactos">Obtener los teléfonos</h3>
<pre><span class="bold">Para recuperar los contactos:</span><code>private ArrayList<Contacto> getContactos(){
	ContentResolver cr = getContentResolver();
	Cursor contactos = cr.query(ContactsContract.Contacts.CONTENT_URI, null, null, null, null);
	String phoneNo = "";
	ArrayList<Contacto> listaContactos = new ArrayList<Contacto>();
	int n = contactos.getCount();

	if (contactos.getCount() > 0) {
		while (contactos.moveToNext()) {
			String id = contactos.getString(contactos.getColumnIndex(ContactsContract.Contacts._ID));
			String name = contactos.getString(contactos.getColumnIndex(ContactsContract.Contacts.DISPLAY_NAME));
			if (Integer.parseInt(contactos.getString(contactos.getColumnIndex(ContactsContract.Contacts.HAS_PHONE_NUMBER))) > 0) {
				Cursor pCur = cr.query(ContactsContract.CommonDataKinds.Phone.CONTENT_URI,null,
				ContactsContract.CommonDataKinds.Phone.CONTACT_ID+ " = ?", new String[] { id }, null);
				while (pCur.moveToNext()) {
					phoneNo = pCur.getString(pCur.getColumnIndex(ContactsContract.CommonDataKinds.Phone.NUMBER));
					listaContactos.add(new Contacto(name, phoneNo));
				}
				pCur.close();
			}
		}
	}
	return listaContactos;
}</code></pre>
<pre><span class="bold">Para solicitar los permisos de acceso a los contactos:</span><code>if (android.os.Build.VERSION.SDK_INT >= Build.VERSION_CODES.M){
	if (ContextCompat.checkSelfPermission(this, Manifest.permission.READ_CONTACTS) != PackageManager.PERMISSION_GRANTED) {
		ActivityCompat.requestPermissions(this,new String[]{Manifest.permission.READ_CONTACTS}, MY_PERMISSIONS_REQUEST_READ_CONTACTS);
	}else{
		contactosList = getContactos();
	}
}else{
	contactosList = getContactos();
}

...

@Override
public void onRequestPermissionsResult(int requestCode, String permissions[], int[] grantResults) {
	switch (requestCode) {
		case MY_PERMISSIONS_REQUEST_READ_CONTACTS: {
			// If request is cancelled, the result arrays are empty.
			if (grantResults.length > 0 && grantResults[0] == PackageManager.PERMISSION_GRANTED) {
				contactosList = getContactos();
			} else {
				// permission denied, boo! Disable the
				// functionality that depends on this permission.
			}
			return;
		}
		// other 'case' lines to check for other
		// permissions this app might request
	}
}</code></pre>
	<h3><span class="text-dark">Ejercicio:</span> Recuperar contactos</h3>
	<p>Recuperar los contactos del teléfono y mostrarlos en un RecyclerView</p>

	<h2>CardView</h2>
	<pre><code>implementation 'androidx.cardview:cardview:1.0.0'</code></pre>
	<pre><code>&lt;androidx.cardview.widget.CardView
	...
	android:layout_margin=&quot;4dp&quot;

	app:cardCornerRadius=&quot;60dp&quot;
	app:cardElevation=&quot;40dp&quot;
	app:cardMaxElevation=&quot;60dp&quot;
&gt;</code></pre>

<h3><span class="text-dark">Ejercicio:</span> Cardview</h3>
<p>Utilizar un <span class="bold">CardView</span> para maquetar cada una de las filas del contenido cargado con un <span class="bold">RecyclerAdapter</span>.</p>
</div></article>
<article><div>
<h2>Almacenar info</h2>
<h3 id="preferencias">Preferencias</h3>
<p>Las usamos para guardar pequeñas cantidades de información.</p>
<p>Suelen ser datos que una aplicación debe guardar para personalizar la experiencia del usuario, por ejemplo información personal, opciones de presentación, etc. </p>
<p>La información es almacenada en forma clave-valor en ficheros xml, en el dispositivo móvil: </p>

<pre><code>/data/data/paquetejava/shared_prefs/nombre_coleccion.xml</code></pre>

	<h4>Ver las preferencias del emulador</h4>
	<p>Para acceder a las shared preferences del dispositivo: View → Tools Windows →   → Device File Explorer</p>
	<p>/data/data/com.pablomonteserin/shared_prefs/ <br>
com.pablomonteserin_preferences.xml</p>
	<h4 id="guardar_preferencias">Guardar preferencias</h4>
	<pre><code>
public class Almacenamiento_Pref_Activity extends Activity {
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);

		SharedPreferences <span class="red bold">sp</span> = PreferenceManager.getDefaultSharedPreferences(this);
		String <span class="bold">txt</span> = <span class="red bold">sp</span>.getString(&quot;<span class="blue">texto</span>&quot;, &quot;valor por defecto&quot;);
		Toast.makeText(getApplicationContext(), <span class="bold">txt</span>, Toast.LENGTH_LONG).show();
	}
	
	<span class="green">//El siguiente c&oacute;digo se ejecuta cuando la aplicaci&oacute;n est&aacute; a punto de terminar</span>
	@Override 
	protected void onPause() {
		super.onPause();
		EditText et = findViewById(R.id.editText);
		SharedPreferences sp = PreferenceManager.getDefaultSharedPreferences(this);
		SharedPreferences.Editor sharedPreferencesEditor = sp.edit();
		sharedPreferencesEditor.putString(&quot;texto&quot;, et.getText().toString());
		sharedPreferencesEditor.commit();
	}</code></pre>
	<p>Si pulso el botón de retroceso volveré al menú principal, pero la información introducida estará disponible la próxima vez que ejecute la aplicación.</p>
	<h4 id="xml_preferencias">XML de preferencias</h4>
	<pre><span class="bold">res/xml/preferences.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;PreferenceScreen xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;&gt;
    &lt;CheckBoxPreference android:key=&quot;primero&quot; android:title=&quot;Opci&oacute;n 1&quot; android:summary=&quot;Descripci&oacute;n opci&oacute;n 1&quot; /&gt;
    &lt;CheckBoxPreference android:key=&quot;segundo&quot; android:title=&quot;Opci&oacute;n 2&quot; android:summary=&quot;Descripci&oacute;n opci&oacute;n 2&quot; /&gt;
&lt;/PreferenceScreen&gt;</code></pre>


<div class="row">
	<div class="col-md-6">
	<pre><code>public class Preference_activity <span class="bold">extends PreferenceActivity</span> {
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
       	// setContentView(R.layout.preferencias_layout);
        <span class="bold">addPreferencesFromResource(R.xml.preferencias_layout);</span></code></pre>
	</div>
	<div class="col-md-6">
	<img class="img-fluid" src="img/xml-preferencias.svg" alt="xml de preferencias">

	</div>
</div>




	<h2 id="fragmento">¿Qué es un fragmento?</h2>
	<p>Es una parte de una actividad, que tiene su propio ciclo de vida, recibe sus propios eventos de entrada, y que se puede añadir o quitar dinámicamente.</p>
	<h3>Preferencias con Fragment</h3>
<pre><code>public class MainActivity extends AppCompatActivity {
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		getFragmentManager().beginTransaction()
				.replace(android.R.id.content, new <span class="red bold">PreferenciasFragment</span>()).commit();
	}</pre></code>
	<pre><code>public static class <span class="red bold">PreferenciasFragment</span> extends PreferenceFragment {
		@Override
		public void onCreate(Bundle savedInstanceState) {
			super.onCreate(savedInstanceState);

			<span class="green">// Make sure default values are applied. In a real app, you would
			// want this in a shared function that is used to retrieve the
			// SharedPreferences wherever they are needed.</span>
			PreferenceManager.setDefaultValues(getActivity(), <span class="blue bold">R.xml.preferences</span>, false);
			<span class="green">// Load the preferences from an XML resource</span>
			addPreferencesFromResource(R.xml.preferences);
		}
	}
}</code></pre>
<pre><span class="bold">res/xml/preferences.xml</span><code>Nos sigue sirviendo el xml de la diapositiva anterior.</code></pre>
<pre><span class="bold">build.gradle</span><code>dependencies {
	implementation "androidx.preference:preference:1.0.0-alpha3"
</code></pre>
<h3 id="ejercicio_preferencias"><span class="text-dark">Ejercicio:</span> recuperar las preferencias marcadas en la diapositiva anterior en dos textview en un nuevo Activity</h3>
<pre><code>SharedPreferences sp = PreferenceManager.getDefaultSharedPreferences(this);
<span class="green">//Dónde "primero" el atributo "key" del elemento &lt;CheckBoxPreference&gt; en el XML.</span>
tv.setText(""+sp.getBoolean("primero", false));</code></pre>
	<h3 id="sqllite">SQLite</h3>
<p>Ejecutaremos una vez el siguiente código para que la base de datos aparezca en el file explorer (data → data → nombreDelPaquete → databases)</p>
<pre><code>public void onCreate(Bundle savedInstanceState) {
	super.onCreate(savedInstanceState);
	setContentView(R.layout.main);
        
	<span class="green">//La siguiente línea busca la base de datos. Si la encuentra la abre. si no, la crea</span>
	SQLiteDatabase db = openOrCreateDatabase("nombre_base_datos", MODE_PRIVATE, null);
	db.close();
}</code></pre>
<div class="notas">
<ul>
	<li>Para editar un fichero del file explorer (por ejemplo el archivo correspondiente a la base de datos sqlite) debo pulsar el icono correspondiente dentro del panel file explorer (View → Tools Windows →   → Device File Explorer). Tendré que acceder a data -> nombre del paquete de la aplicación:
</li>
<li>Pull para sacar el fichero seleccionado.
</li>
<li>Push para introducir el fichero seleccionado.</li>
</ul>
</div>
	<h4>Para crear y manipular nuestra base de datos cómodamente usaremos <a href="https://sqlitebrowser.org/" target="_blank">https://sqlitebrowser.org/</a>. </h4>
<p>Instalación en ubuntu:</p>
<pre><code> sudo apt-get install sqlitebrowser</code></pre>
<p>Usaremos el correspondiente fichero de la base de datos que tiene en su interior ceros y unos, no el que se puede exportar y que tiene código xml.</p>
	<h4 id="sqlite_read">Sqlite - operaciones</h4>
<pre><code><span class="green">//La siguiente l&iacute;nea busca la base de datos. Si la encuentra la abre. si no, la crea</span>
SQLiteDatabase db = openOrCreateDatabase(&quot;nombre_base_datos&quot;, MODE_PRIVATE, null);
Cursor c = db.rawQuery(&quot;SELECT * FROM MyTable&quot;, null);
c.<span class="span red"> moveToFirst()</span>;
Log.d(&quot;LEE&quot;, c.getString(c.getColumnIndex(&quot;campo1&quot;)));
c.close();
db.close();</code></pre>
<p class="green">Después de hacer una consulta, si quiero leer los resultados de la misma debo llevar el cursor al punto a partir del cual quiero leer. De lo contrario no funcionará.</p>
<h4>Operaciones con parámetros</h4>



<div class="row">
	<div class="col-md-6">
	<pre><span class="font-weight-bold">INSERT</span><code>
ContentValues nuevoRegistro = new ContentValues();
nuevoRegistro.put(&quot;nombre_campo1&quot;, &quot;6&quot;);
nuevoRegistro.put(&quot;nombre_campo2&quot;,&quot;Pepe&quot;);
db.insert(&quot;Usuarios&quot;, null, nuevoRegistro);</code></pre>
	</div>
	<div class="col-md-6">
		
<pre><span class="font-weight-bold">UPDATE</span><code>
ContentValues valores = new ContentValues();
valores.put(&quot;nombre&quot;,&quot;usunuevo&quot;);
db.update(&quot;Usuarios&quot;, valores, &quot;codigo=6&quot;, null);</code></pre>
	</div>
</div>


<div class="row">
	<div class="col-md-6">
<pre><span class="font-weight-bold">DELETE</span><code>db.delete(&quot;Usuarios&quot;, &quot;codigo=6&quot;, null);
db.<span class="bold">execSQL</span>(&quot;DELETE FROM invitado WHERE nombre=' pp'&quot;);</code></pre></div>
	<div class="col-md-6">
		
<pre><span class="font-weight-bold">CONSULTA</span><code>
Cursor c = db.rawQuery("SELECT * FROM MyTable", null);
<span class="green">//Para recorrer un cursor:</span>
while(c.moveToNext()){
	<span class="green">//No debemos hacer el c.moveToFirst(); o nos saltaremos el primer registro.</span>
	Log.d(&quot;LEE&quot;, c.getString(c.getColumnIndex(&quot;campo1&quot;)));
	<span class="green">...</span></code></pre>
	</div>
</div>



	<h3 id="sqlite_precarga">SQLite – precarga base de datos</h3>
	<pre><code>public class <span class="red bold">MyApp</span> extends Application {
	@Override
	public void onCreate() {
		super.onCreate();
		File file = this.<span class="orange">getDatabasePath</span>(&quot;nombre_base_datos&quot;);
		<span class="bold">if (!file.exists()) {</span>
			file.<span class="orange">getParentFile</span>().mkdirs();<span class="green">// Esto crea todas las carpetas para que la ruta a la bd exista. </span>
			Log.d(&quot;paso1&quot;, &quot;copiamos la base de datos si no exist&iacute;a antes&quot;);
			OutputStream os = null;
			InputStream is = null;
			try {
				is = this.getResources().openRawResource(<span class="bold">R.raw.nombre_base_datos</span>);
				os = new FileOutputStream(file);
				byte[] buffer = new byte[1024];
				int length;
				while ((length = is.read(buffer)) &gt; 0) {
					os.write(buffer, 0, length);
				}
				os.flush();
			} catch (Throwable t) {//e.printStackTrace();
			} finally {
				try {
					if (os != null)
						os.close();
				} catch (IOException e) {//e.printStackTrace();
				}
				if (is != null) {
					try {
						is.close();
					} catch (IOException e) {//e.printStackTrace();
}}}}}}<span class="green"> //cierre de llaves..	</span></code></pre>
	<p>Para cargarlo desde el manifest debemos modificar el nodo <span class="purple bold">application</span> y añadir el atributo: <span class="bold blue">android:name</span>:</p>
<pre><code>&lt<span class="bold purple">application</span>
android:icon=&quot;@drawable/icon&quot;
android:label=&quot;@string/app_name&quot;
<span class="bold blue">android:name</span>=&quot;.<span class="green bold">MyApp</span>&quot;
android:debuggable=&quot;false&quot;&gt;</code></pre>
	<h3 id="reinstalar_bd">Instalar la base de datos con cada actualización de la app</h3>
	<pre><code>public class MyApp extends Application {
	private boolean <span class="bold red">hayActualizacion</span>;
	@Override
	public void onCreate() {
		super.onCreate();
		SharedPreferences prefs = PreferenceManager.getDefaultSharedPreferences(this);
    		int <span class="purple bold">version</span> = prefs.getInt(&quot;version&quot;, -1);
		try {
			PackageInfo pInfo = getPackageManager().getPackageInfo(getPackageName(), 0);
			int <span class="bold">posible_nueva_version = pInfo.versionCode;</span>
			if(<span class="purple bold">version</span>&lt;<span class="blue">posible_nueva_version</span>){
				<span class="bold red">hayActualizacion = true;</span>
				SharedPreferences.Editor editor = prefs.edit();
				editor.putInt(&quot;version&quot;, posible_nueva_version);
				editor.commit();
			}else{
				hayActualizacion = false;
			}	
		} catch (NameNotFoundException e1) {
			e1.printStackTrace();
		}
		if(<span class="red bold">hayActualizacion</span>){
			<span class="green">...	</span></code></pre>
	<h3>Cargar un listview y un spinner con datos</h3>
	<p>Para cargar un listView con los datos de una <span class="red bold">lista (objeto de tipo List)</span>:</p>
<pre><code>
listView.setAdapter(new <span class="bold blue">ArrayAdapter</span>(this,<span class="green">android.R.layout.simple_list_item_1</span>,<span class="bold red">lista</span>));</code></pre>
<p>Para cargar un spinner, sería un código similar:</p>
<pre><code>spinner.setAdapter(new ArrayAdapter&lt;String&gt;(this,android.R.layout.simple_spinner_item,lista));</code></pre>
	<h4 id="spinner_onchange">OnChange de un spinner</h4>
	<pre><code>Spinner sp = findViewById(R.id.spinner1);
		
sp.setOnItemSelectedListener(<span class="bold">new AdapterView.OnItemSelectedListener()</span> {
@Override
	public void onItemSelected(AdapterView&lt;?&gt; arg0, View arg1, int arg2, long arg3) {
		recalcular ();
	
	@Override
	public void onNothingSelected(AdapterView&lt;?&gt; arg0) {
		<span class="green">// TODO Auto-generated method stub</span>
	}
	<span class="green">// add some code here</span>
});</code></pre>
	<h3 id="ejercicio">Ejercicio CRUD</h3>

<div class="row">
	<div class="col-md-9">
	<p>Hacer el alta, baja, modificación y consulta de una entidad. Para mostrar los datos usaremos un listview. Para borrar o modificar, usaremos un spinner.</p>	
	</div>
	<div class="col-md-3">
	<img class="img-fluid" src="./img/android-crud.png" alt="Android Crud con SQLite">
	</div>
</div>



	<h3 id="ejercicio_plantas"><span class="text-dark">Ejercicio:</span> plantas</h3>
	<p>Usaremos un <span class="i">RecyclerView</span> para que escuche cuando hacemos click sobre alguna de sus filas.</p>
<pre><code>public void onBindViewHolder(ViewHolderPlanta viewHolder, int position) {
	viewHolder.itemView.setOnClickListener(new View.OnClickListener() {
		@Override
		public void onClick(View v) {
			...
		}
	});
}</code></pre>
	<pre><code>startActivity(new Intent(this,InfoActivity.class).putExtra(PLANTA,plantas.get(position)));</code></pre>
	<p>Para recoger un Pojo, este debe implementar la interfaz serializable y debemos usar:</p>
	<pre><code>Planta planta = (Planta) getIntent().getExtras().getSerializable(MisPlantasActivity.PLANTA);</code></pre>
	
	<div class="row">
		<div class="col-md-10"><img class="img-fluid" src="img/ejercicio-plantas.svg" alt="ejercicio plantas"></div>
		<div class="col-md-2"><?= getRes('recurso','./ex/plantas.zip', 'Descargar imagenes') ?></div>
		
	</div>
	
	
	
	
	<h3><span class="text dark">Ejercicio:</span> plantas II</h3>

	<div class="row">
		<div class="col-md-4"><p>Añadir un ToggleButton al segundo activity. Al pulsarlo, la planta correspondiente en el activity principal se mostrará pintada de verde. Para ello cambiaremos un campo llamado “is_checked” definido en la base de datos.</p></div>
		<div class="col-md-8"><img class="img-fluid" src="img/ejercicio-plantas-2.svg" alt="Ejercicio plantas 2"></div></div>
	</div>

</article>

<article><div>
	<h2 id="multimedia">Multimedia</h2>
	<h3>Cargar una imagen con la librería picasso</h3>
	<pre><code>&lt;manifest&gt;
	&lt;uses-permission android:name=&quot;android.permission.INTERNET&quot; /&gt;
&lt;/manifest&gt;</code></pre>


<pre><code>dependencies 
	implementation 'com.squareup.picasso:picasso:2.71828'
}</code></pre>

<pre><code>String imageUri = "https://i.imgur.com/tGbaZCY.jpg";
ImageView ivBasicImage = (ImageView) findViewById(R.id.ivBasicImage);
Picasso.get().load(imageUri).into(ivBasicImage);</code></pre>
		<h3 id="cargarSonido">Cargar un sonido</h3>
		<pre><code>MediaPlayer mp = MediaPlayer.create(Audio.this, R.raw.hakunamatata);</code></pre>
		<h3 id="cargarVideo">Cargar un video</h3>
		<pre><code>getWindow().setFormat(PixelFormat.TRANSLUCENT);
        VideoView videoHolder = new VideoView(this);
        //if you want the controls to appear
        videoHolder.setMediaController(new MediaController(this));
        Uri video = Uri.parse("android.resource://" + getPackageName() + "/"
                + R.raw.leon);
        videoHolder.setVideoURI(video);
        setContentView(videoHolder);
        videoHolder.start();</code></pre>
		<a href="./ex/leon.mp4">Enlace a leon.mp4</a>
		<h2 id="hacerStreaming">Hacer streaming de un video</h2>
		<p>Habrá que dar permisos de conexión a internet en el:</p>
		<pre><span class="bold">AndroidManifest.xml</span><code>&lt;uses-permission android:name=&quot;android.permission.INTERNET&quot;/&gt;</code></pre>
		<pre><code>String stringUrl = "https://pablomonteserin.com/curso/html5/ex/HakunaMatataItMeansNoWorries.mp3";
try {
	final MediaPlayer mediaPlayer = new MediaPlayer();
	mediaPlayer.setAudioStreamType(AudioManager.STREAM_MUSIC);
	mediaPlayer.setDataSource(stringUrl);
	mediaPlayer.prepareAsync();
	mediaPlayer.setOnPreparedListener(new MediaPlayer.OnPreparedListener() {
		@Override
		public void onPrepared(MediaPlayer mp) {
			mediaPlayer.start();
		}
	});
} catch (Exception e) {
	e.printStackTrace();
}</code></pre>
		<h2 id="usarCamara">Usar cámara de fotos</h2>
<pre><code>public void sacaFoto(View v){
	Intent intent = new Intent(android.provider.MediaStore.ACTION_IMAGE_CAPTURE);
	startActivityForResult(intent,0);
}

protected void onActivityResult(int requestCode, int resultCode, Intent data){
	super.onActivityResult(requestCode, resultCode, data);
	Bitmap bm = (Bitmap) data.getExtras().get("data");
	iv.setImageBitmap(bm);
}</code></pre>


</div></article>

<article><div>


<h2 id="navigation_drawer">Navigation Drawer</h2>
<div class="row">

<div class="col-md-6">
<img class="img-fluid" src="./img/navigation-drawer-toolbar.jpeg" alt="Navigation Drawer toolbar">	
</div>
<div class="col-md-6">
<img class="img-fluid" src="./img/navigation-drawer.jpeg" alt="Navigation Drawer">
</div>


	
</div>

<p>Para que el código funcione, debemos importar las siguientes librerías en gradle:</p>
<pre><code>implementation 'androidx.navigation:navigation-fragment:2.1.0'
implementation 'androidx.navigation:navigation-ui:2.1.0'</code></pre>


<pre><code>public class MyNavigationDrawer extends AppCompatActivity {

private AppBarConfiguration mAppBarConfiguration;

@Override
protected void onCreate(Bundle savedInstanceState) {
	super.onCreate(savedInstanceState);
	setContentView(R.layout.activity_main_navigation_drawer);
	//toolbar es la barra horizontal superior en la que se encuentra la hamburguesa con el menú de navegación
	Toolbar toolbar = findViewById(R.id.toolbar);
	setSupportActionBar(toolbar);

	// drawer es el layout del activity que contiene el Navigation Drawer y los activities con los que está vinculado
	DrawerLayout drawer = findViewById(R.id.drawer_layout);

	// navigationView es el menú Navigation Drawer
	NavigationView navigationView = findViewById(R.id.nav_view);

	// Debo pasar la id de cada menú al objeto de configuración del navigation drawer
	mAppBarConfiguration = new AppBarConfiguration.Builder(
			R.id.nav_home, R.id.nav_gallery, R.id.nav_slideshow,
			R.id.nav_tools, R.id.nav_share, R.id.nav_send)
			.setDrawerLayout(drawer)
			.build();

	//nav_host_fragment es la id del fragmento que alamcenará los activities de contenido
	NavController navController = Navigation.findNavController(this, R.id.nav_host_fragment);

	//vinculo el navController con su configuración
	NavigationUI.setupActionBarWithNavController(this, navController, mAppBarConfiguration);

	NavigationUI.setupWithNavController(navigationView, navController);
}

@Override
public boolean onSupportNavigateUp() {
	NavController navController = Navigation.findNavController(this, R.id.nav_host_fragment);
	return NavigationUI.navigateUp(navController, mAppBarConfiguration)
			|| super.onSupportNavigateUp();
}
}</code></pre>
<p>Cargamos un activity que tendrá un layout que cargará dos componentes:</p>
<ul>
	<li>El layout en el que se cargarán los fragments.</li>
	<li>El menú de navegación.</li>
</ul>
<pre><span class="bold">activity_main_navigation_drawer.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;androidx.drawerlayout.widget.DrawerLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
	xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
	xmlns:tools=&quot;http://schemas.android.com/tools&quot;
	android:id=&quot;@+id/drawer_layout&quot;
	android:layout_width=&quot;match_parent&quot;
	android:layout_height=&quot;match_parent&quot;
	android:fitsSystemWindows=&quot;true&quot;
	tools:openDrawer=&quot;start&quot;&gt;

	&lt;!-- En este componente cargaremos el contenido --&gt;
	&lt;include
		layout=&quot;@layout/app_bar_main&quot;
		android:layout_width=&quot;match_parent&quot;
		android:layout_height=&quot;match_parent&quot; /&gt;

	&lt;!-- Este componente es el menú de navegación --&gt;
	&lt;com.google.android.material.navigation.NavigationView
		android:id=&quot;@+id/nav_view&quot;
		android:layout_width=&quot;wrap_content&quot;
		android:layout_height=&quot;match_parent&quot;
		android:layout_gravity=&quot;start&quot;
		android:fitsSystemWindows=&quot;true&quot;
		app:headerLayout=&quot;@layout/nav_header_main&quot;
		app:menu=&quot;@menu/activity_main_drawer&quot; /&gt;

&lt;/androidx.drawerlayout.widget.DrawerLayout&gt;</code></pre>


<p>Este es el xml del documento en el que se cargarán los datos:</p>
<pre><span class="bold">res/layouts/app_bar_main.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;androidx.coordinatorlayout.widget.CoordinatorLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
	xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
	xmlns:tools=&quot;http://schemas.android.com/tools&quot;
	android:layout_width=&quot;match_parent&quot;
	android:layout_height=&quot;match_parent&quot;
	tools:context=&quot;.MainActivity&quot;&gt;

	&lt;com.google.android.material.appbar.AppBarLayout
		android:layout_width=&quot;match_parent&quot;
		android:layout_height=&quot;wrap_content&quot;
		android:theme=&quot;@style/AppTheme.AppBarOverlay&quot;&gt;

		&lt;androidx.appcompat.widget.Toolbar
			android:id=&quot;@+id/toolbar&quot;
			android:layout_width=&quot;match_parent&quot;
			android:layout_height=&quot;?attr/actionBarSize&quot;
			android:background=&quot;?attr/colorPrimary&quot;
			app:popupTheme=&quot;@style/AppTheme.PopupOverlay&quot; /&gt;

	&lt;/com.google.android.material.appbar.AppBarLayout&gt;

	&lt;include layout=&quot;@layout/content_main&quot; /&gt;

&lt;/androidx.coordinatorlayout.widget.CoordinatorLayout&gt;</code></pre>
<p>Este xml carga otro xml que es el que finalmente cargará los contenidos.</p>
<pre><span class="bold">res/layouts/content_main.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    app:layout_behavior=&quot;@string/appbar_scrolling_view_behavior&quot;
    tools:showIn=&quot;@layout/app_bar_main&quot;&gt;

    &lt;fragment
        android:id=&quot;@+id/nav_host_fragment&quot;
        android:name=&quot;androidx.navigation.fragment.NavHostFragment&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        app:defaultNavHost=&quot;true&quot;
        app:layout_constraintLeft_toLeftOf=&quot;parent&quot;
        app:layout_constraintRight_toRightOf=&quot;parent&quot;
        app:layout_constraintTop_toTopOf=&quot;parent&quot;
        app:navGraph=&quot;@navigation/mobile_navigation&quot; /&gt;
&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;</code></pre>
<p>Finalmente, el xml de los contenidos:</p>
<pre><span class="bold">navigation/mobile_navigation.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;navigation xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:id=&quot;@+id/mobile_navigation&quot;
    app:startDestination=&quot;@+id/nav_home&quot;&gt;

    &lt;fragment
        android:id=&quot;@+id/nav_home&quot;
        android:name=&quot;com.pablomonteserin.layouts.minavigationdrawer.ui.home.HomeFragment&quot;
        android:label=&quot;@string/menu_home&quot;
        tools:layout=&quot;@layout/fragment_home&quot; /&gt;

    &lt;fragment
        android:id=&quot;@+id/nav_gallery&quot;
        android:name=&quot;com.pablomonteserin.layouts.minavigationdrawer.ui.gallery.GalleryFragment&quot;
        android:label=&quot;@string/menu_gallery&quot;
        tools:layout=&quot;@layout/fragment_gallery&quot; /&gt;

    &lt;fragment
        android:id=&quot;@+id/nav_slideshow&quot;
        android:name=&quot;com.pablomonteserin.layouts.minavigationdrawer.ui.slideshow.SlideshowFragment&quot;
        android:label=&quot;@string/menu_slideshow&quot;
        tools:layout=&quot;@layout/fragment_slideshow&quot; /&gt;

    &lt;fragment
        android:id=&quot;@+id/nav_tools&quot;
        android:name=&quot;com.pablomonteserin.layouts.minavigationdrawer.ui.tools.ToolsFragment&quot;
        android:label=&quot;@string/menu_tools&quot;
        tools:layout=&quot;@layout/fragment_tools&quot; /&gt;

    &lt;fragment
        android:id=&quot;@+id/nav_share&quot;
        android:name=&quot;com.pablomonteserin.layouts.minavigationdrawer.ui.share.ShareFragment&quot;
        android:label=&quot;@string/menu_share&quot;
        tools:layout=&quot;@layout/fragment_share&quot; /&gt;

    &lt;fragment
        android:id=&quot;@+id/nav_send&quot;
        android:name=&quot;com.pablomonteserin.layouts.minavigationdrawer.ui.send.SendFragment&quot;
        android:label=&quot;@string/menu_send&quot;
        tools:layout=&quot;@layout/fragment_send&quot; /&gt;
&lt;/navigation&gt;</code></pre>


<pre><span class="bold">HomeFragment.java</span><code>public class HomeFragment extends Fragment {
	public View onCreateView(@NonNull LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
	View root = inflater.inflate(R.layout.fragment_home, container, false);
	final TextView textView = root.findViewById(R.id.text_home);
	return root;
}
}</code></pre>
<p>Y el menú de navegación:</p>
<pre><span class="bold">activity_main_drawer.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;menu xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    tools:showIn=&quot;navigation_view&quot;&gt;

    &lt;group android:checkableBehavior=&quot;single&quot;&gt;
        &lt;item
            android:id=&quot;@+id/nav_home&quot;
            android:icon=&quot;@drawable/ic_menu_camera&quot;
            android:title=&quot;@string/menu_home&quot; /&gt;
        &lt;item
            android:id=&quot;@+id/nav_gallery&quot;
            android:icon=&quot;@drawable/ic_menu_gallery&quot;
            android:title=&quot;@string/menu_gallery&quot; /&gt;
        &lt;item
            android:id=&quot;@+id/nav_slideshow&quot;
            android:icon=&quot;@drawable/ic_menu_slideshow&quot;
            android:title=&quot;@string/menu_slideshow&quot; /&gt;
        &lt;item
            android:id=&quot;@+id/nav_tools&quot;
            android:icon=&quot;@drawable/ic_menu_manage&quot;
            android:title=&quot;@string/menu_tools&quot; /&gt;
    &lt;/group&gt;

    &lt;item android:title=&quot;Communicate&quot;&gt;
        &lt;menu&gt;
            &lt;item
                android:id=&quot;@+id/nav_share&quot;
                android:icon=&quot;@drawable/ic_menu_share&quot;
                android:title=&quot;@string/menu_share&quot; /&gt;
            &lt;item
                android:id=&quot;@+id/nav_send&quot;
                android:icon=&quot;@drawable/ic_menu_send&quot;
                android:title=&quot;@string/menu_send&quot; /&gt;
        &lt;/menu&gt;
    &lt;/item&gt;

&lt;/menu&gt;</code></pre>


<pre><span class="bold">res/values/style.xml</span><code>&lt;resources&gt;
	&lt;style name=&quot;AppTheme.NoActionBar&quot;&gt;
		&lt;item name=&quot;windowActionBar&quot;&gt;false&lt;/item&gt;
		&lt;item name=&quot;windowNoTitle&quot;&gt;true&lt;/item&gt;
	&lt;/style&gt;
	&lt;style name=&quot;AppTheme.AppBarOverlay&quot; parent=&quot;ThemeOverlay.AppCompat.Dark.ActionBar&quot; /&gt;
	&lt;style name=&quot;AppTheme.PopupOverlay&quot; parent=&quot;ThemeOverlay.AppCompat.Light&quot; /&gt;
&lt;/resources&gt;</code></pre>



</div></article>

<article><div>

	<h2 id="dialogs">Dialogs</h2>
<h3 id="alert_dialog">Alert dialog</h3>

<div class="row">
	<div class="col-md-9">
	<pre><code>AlertDialog.Builder builder = new AlertDialog.Builder(Main.this);
builder.setMessage(&quot;Are you sure you want to exit?&quot;);
<span class="green">//setCancelable determina si el cuadro de di&aacute;logo ser&aacute; cancelable utilizando la tecla de retroceso (BACK key)</span>
builder.setCancelable(false);
builder.setPositiveButton(&quot;Yes&quot;, new DialogInterface.OnClickListener() {
	public void onClick(DialogInterface dialog, int which) {
		Main.this.finish();
	}
});
builder.setNegativeButton(&quot;No&quot;, new DialogInterface.OnClickListener() {
	public void onClick(DialogInterface dialog, int which) {
		dialog.cancel();
	}
});
AlertDialog alert = builder.create();
alert.show();</code></pre>	
	</div>
	<div class="col-md-3">
	<img class="img-fluid" src="img/alertas.svg" alt="pantallazo de un Activity con Java">

	</div>
</div>

	<h3 id="simple_progress_dialog">ProgressBar Dialog</h3>

<div class="row">
	<div class="col-lg-5">
		
<pre><span class="bold">layout.xml</span><code>&lt;ProgressBar
	android:layout_width=&quot;match_parent&quot;
	android:layout_height=&quot;wrap_content&quot;
	android:id=&quot;@+id/progressBar&quot;
	style=&quot;?android:attr/progressBarStyleHorizontal&quot;/&gt;

&lt;ProgressBar
	android:layout_width=&quot;match_parent&quot;
	android:layout_height=&quot;wrap_content&quot;/&gt;</code></pre>
	</div>
	<div class="col-lg-5">
	<pre><code> ProgressBar pb = (ProgressBar) findViewById(R.id.progressBar);
pb.setIndeterminate(false);
pb.setProgress(50);</code></pre>

	</div>
	<div class="col-lg-2">
	<img class="img-fluid" src="img/progressbar.jpg" alt="progress bar en android">
	</div>
</div>
		

<h4>Ejercicio: <span class="text-primary">Progress Bar</span></h4>
<p>La barra de progreso que inicialmente estaba a cero debe ir aumentando progresivamente según hacemos click.</p>
	
<h4 id="ejercicio_personal_dialog">Ejercicio: <span class="text-primary">Personal dialog</span></h4>
	<p>Cuando haga click sobre un botón, deberá aparecer un cuadro de diálogo personalizado.</p>
<pre><code>Dialog d = new Dialog(PersonalDialog.this);
<span class="bold">d.setContentView(R.layout.personal_dialog);</span>
d.setTitle(&quot;This is important&quot;);
d.show();</code></pre>
<p>Creamos un layout llamado personal_dialog.xml para el dialog.</p>
	<h3 id="toast"><span class="text-dark">Ejercicio:</span>Toast - notificaciones instantáneas</h3>
	<p>Ejercicio: al pulsar el botón se muestra el mensaje emergente</p>
	<pre><code>Toast.makeText(this, &quot;El texto emergente&quot;,Toast.LENGTH_SHORT).show();</code></pre>
</div></article>

<article><div>


	<h2 id="notification">Notificaciones</h2>
	<h3>Básica</h3>
	<p>El código para programar notifiaciones ha cambiado a partir de Android 8.</p>
	<pre><code>@TargetApi(Build.VERSION_CODES.JELLY_BEAN)
public void lanzarNotificacion(View v){
	NotificationUtils mNotificationUtils;
	if (android.os.Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
		<span class="green">// only for Oreo(8) and newer versions</span>
		mNotificationUtils = new NotificationUtils(this, true);
	}else{
		mNotificationUtils = new NotificationUtils(this, false);
	}
	Notification.Builder nb = mNotificationUtils.getChannelNotification("Titulo", "Mensaje", R.raw.hakunamatata);
	mNotificationUtils.getManager().notify(101, nb.build());
}</code></pre>
	<pre><code>public class NotificationUtils extends ContextWrapper {

    private NotificationManager mManager;
    private boolean isAndroid8;
    public static final String ANDROID_CHANNEL_ID = "com.pablomonteserin.ANDROID";
    public static final String ANDROID_CHANNEL_NAME = "ANDROID CHANNEL";

    public NotificationUtils(Context base, boolean isAndroid8) {
        super(base);
        this.isAndroid8 = isAndroid8;
        if(isAndroid8){
           createChannels();
        }
    }

    @TargetApi(26)
    public void createChannels() {
        <span class="green">// create android channel</span>
        NotificationChannel androidChannel = new NotificationChannel(ANDROID_CHANNEL_ID,
                ANDROID_CHANNEL_NAME, NotificationManager.IMPORTANCE_DEFAULT);
        <span class="green">// Sets whether notifications posted to this channel should display notification lights</span>
        androidChannel.enableLights(true);
        <span class="green">// Sets whether notification posted to this channel should vibrate.</span>
        androidChannel.enableVibration(true);
        <span class="green">// Sets the notification light color for notifications posted to this channel</span>
        androidChannel.setLightColor(Color.GREEN);
        <span class="green">// Sets whether notifications posted to this channel appear on the lockscreen or not</span>
		<span class="green">// androidChannel.setLockscreenVisibility(Notification.VISIBILITY_PRIVATE);</span>
        androidChannel.setLockscreenVisibility(Notification.VISIBILITY_PUBLIC);

        getManager().createNotificationChannel(androidChannel);
    }

    public NotificationManager getManager() {
        if (mManager == null) {
            mManager = (NotificationManager) getSystemService(Context.NOTIFICATION_SERVICE);
        }
        return mManager;
    }

    public Notification.Builder getChannelNotification(String title, String body,int sound) {
        Notification.Builder builder;

        if(isAndroid8){
            builder  = new Notification.Builder(getApplicationContext(), ANDROID_CHANNEL_ID);
        }else{
            builder = new Notification.Builder(getApplicationContext());
        }
        builder .setContentTitle(title)
                .setContentText(body)
                .setSmallIcon(android.R.drawable.stat_notify_more)
                .setAutoCancel(true);
        return builder;
    }
}</code></pre>
	<img src="img/notificacion.svg" alt="notificacion">
	<h3><span class="text-dark">Ejercicio:</span> notificaciones</h3>
	<p>Hacer que la notificación muestre una imagen</p>
	<pre><code><span class="green bold">...</span>
Bitmap aperturaabductoresBitmap = BitmapFactory.decodeResource(getResources(),
                            R.drawable.aperturaabductores);
<span class="green bold">...</span>
nb.setStyle(new Notification.BigPictureStyle().bigPicture(bitmap));</code></pre>
	<h3 id="notificacionActivity">Notificación que abre un activity</h3>
	<h4>PendingIntent</h4>
	<p>Es un envoltorio de un Intent que puede necesitar ciertos permisos para ser ejecutado. Si la aplicación dónde se está ejecutando ya tiene esos permisos, envolviendo el Intent con un PendingIntent, podremos hacer uso de dichos permisos.</p>
	<pre><code>Intent notificationIntent = new Intent(this, NotificacionesActivityAbierto.class);

PendingIntent pendingIntent = PendingIntent.getActivity(this, 0, notificationIntent, 0);
<span class="green">...</span>
.setContentIntent(pendingIntent);</code></pre>

<h3 id="temporizadores">Temporizadores</h3>
	<p>Son aquellas clases que nos permiten programar tareas que se ejecutarán al cabo de un tiempo.</p>
	<p>Recogemos 3 grandes tipos:</p>
	<ul>
		<li><strong>CounterTimeDown</strong>: nos permite ejecutar un evento cada cierto tiempo (siempre que la aplicación esté abierta, si la app está en segundo plano, dará problemas).
<pre><code>CountDownTimer timer = new CountDownTimer(3000, 1000) {
	private int counter;

	public void onTick(long millisUnistilFinished) {
		Log.d("traza", "Se ejecuta el timer");
	}
}.start();</code></pre>	

<pre><span class="bold">Para cancelarlo:</span><code>if(isMyServiceRunning(		Servicio.class)){
	CountDownTimerServiceMovil.timer.cancel();
}

private boolean isMyServiceRunning(Class&lt;?&gt; serviceClass) {
	ActivityManager manager = (ActivityManager) getSystemService(Context.ACTIVITY_SERVICE);
	for (ActivityManager.RunningServiceInfo service : manager.getRunningServices(Integer.MAX_VALUE)) {
		if (serviceClass.getName().equals(service.service.getClassName())) {
			return true;
		}
	}
    return false;
}</code></pre>		
		</li>
		<!-- li><strong>AlarmManager</strong>: para ejecutar un evento en un momento concreto. Si la invocamos desde un servicio, podremos usarla aunque la applicación no esté abierta.
<pre><span class="bold">Ejemplo de uso de AlarmManager</span><code>Intent myIntent = new Intent(this, AlarmReceiver.class);
PendingIntent pendingIntent = PendingIntent.getBroadcast(this,id, myIntent, 0);

AlarmManager alarmManager = (AlarmManager)getSystemService(Context.ALARM_SERVICE);
alarmManager.set(AlarmManager.RTC_WAKEUP, System.currentTimeMillis() + delay, pendingIntent);
<span class="green">//alarmManager.setRepeating(AlarmManager.RTC_WAKEUP, System.currentTimeMillis(), delay,pendingIntent);</span></code></pre>
<pre><span class="bold">AlarmReceiver.java</span><code>public class AlarmReceiver extends BroadcastReceiver {
    @Override
    public void onReceive(Context context, Intent intent) {
        Log.d("alarma: ", "MEHH");
        Toast.makeText(context, "ALARM!! ALARM!!", Toast.LENGTH_SHORT).show();
    }
}</code></pre>
		</li>
		<li><strong>JobScheduler</strong>: para ejecutar un evento aproximadamente en cierto momento. Supuestamente es evento se producirá más o menos pronto. Si queremos atenernos a un calendario, el AlarmManager será más apropiado. Consume menos recursos que el Alarm Manager, pero a cambio debemos especificar un rango de tiempo en el que se ejecutará cada evento. Si la invocamos desde un servicio, podremos usarla aunque la applicación no esté abierta. <pre><code>public class Util {
    public static void scheduleJob(Context context,int time) {
        ComponentName serviceComponent = new ComponentName(context, <span class="red bold">MovilJobService</span>.class);
        JobInfo.Builder builder = new JobInfo.Builder(0, serviceComponent);
        builder.setMinimumLatency(time * 1000); // wait at least
        builder.setOverrideDeadline(time*1000+5000); // maximum delay
        <span class="green">//builder.setRequiredNetworkType(JobInfo.NETWORK_TYPE_UNMETERED); // require unmetered network
        //builder.setRequiresDeviceIdle(true); // device should be idle
        //builder.setRequiresCharging(false); // we don't care if the device is charging or not</span>
        JobScheduler jobScheduler = context.getSystemService(JobScheduler.class);
        jobScheduler.schedule(builder.build());
    }
}</code></pre><pre><code>public class <span class="red bold">MovilJobService</span> extends JobService {
    private static final String TAG = "SyncService";

    @Override
    public boolean onStartJob(JobParameters params) {
}</code></pre>
		</li-->
	</ul>
	</div></article>

	<article><div>
	<h2 id="servicios">Servicios</h2>
	<p>	Son códigos que se ejecutan en segundo plano, aunque la aplicación no esté abierta.</p>
	<h3>Usar CounterTimer como Servicio</h3>
<pre><span class="bold">Main.java</span><code>startService(new Intent(this, CountDownTimerService.class));</code></pre>
<pre><span class="bold">CountDownTimerService.java</span><code>public class CountDownTimerService extends Service {
	public static CountDownTimer timer;
	@Nullable
	@Override
	public IBinder onBind(Intent intent) {
		return null;
	}
    
	@Override
	public void onCreate() {
		super.onCreate();
		timer = new CountDownTimer(30000, 2000) {//90000
			private int counter;
			public void onTick(long millisUntilFinished) {
				Log.d("traza", "CounterTimer as service");
			}
			public void onFinish() {}
		}.start();
	}
}</code></pre>
<pre><span class="bold">AndroidManifest.xml</span><code>&lt;service android:name=&quot;com.pablomonteserin.notifications_and_services.mycountertimerdown_as_service.CountDownTimerService&quot;/&gt;</code></pre>
	<h3 id="ejercicioYogaConNotificaciones"><span class="text-dark">Ejercicio:</span> yoga con notificaciones</h3>
	<p>Hacer una aplicación que cada 10 segundos nos vaya indicando un cambio de postura de yoga. Estos avisos serán hechos utilizando notificaciones en las que se oirá el sonido de la postura de yoga y se verá su fotografía. Además, al ir al activity de la aplicación, veremos la misma imagen que se mostraba en la notificación. Las notificaciones se ejecutarán aunque el móvil esté con la pantalla apagada o no estemos el el Activity de la aplicación.</p>
	<p>Para ejecutar las notificaciones utilizaremos un servicio:</p>
	<pre><span class="bold">CountDownTimerService</span><code>public class CountDownTimerService extends Service {
	NotificationManager mNotificationManager;
	public static CountDownTimer timer;

	@Nullable
	@Override
	public IBinder onBind(Intent intent) {
		return null;
	}

	@Override
	public void onCreate() {
	super.onCreate();
		mNotificationManager = (NotificationManager) getSystemService(Context.NOTIFICATION_SERVICE);
		final Service service = this;
		timer = new CountDownTimer(30000, 10000) {
			private int counter;
			public void onTick(long millisUntilFinished) {
			<span class="green bold">...</span></code></pre>

<p>Cuando pulsemos un botón con el texto "terminar servicio" en el MainActivity, dejarán de mostrarse notifiaciones. Además, para poder modificar la imagen del Activity principal, haremos declararemos la variable vinculada a su ImageView pública y estática:</p>
<pre><span class="bold">MainActivity.java</span><code>public class MainActivity extends AppCompatActivity {
	public static ImageView iv;
	public static Activity contexto;
	<span class="green bold">...</span>
	public void cerrarServicio(View v){
		CountDownTimerService.timer.cancel();
		stopService(new Intent(this, CountDownTimerService.class));
	}</code></pre>
	<p>Habrá que registrar el servicio en el AndroidManifest.xml</p>
	<pre><code>&lt;service android:name=&quot;com.pablomonteserin.notifications.ejercicio_yoga.CountDownTimerService&quot;/&gt;<br/></code></pre>
	<p><a href="ex/yoga_res.zip">Descargar recursos</a></p>

	<!-- h4 id="broadcaster_receiver">Broadcaster Receiver</h4>
	<p>No tiene sentido tener un servicio funcionando si no tienes un Broadcast Receiver preparado para gestionarlo.</p>
	<p>Nos permiten enviar información a un Activity desde un servicio.</p>
	<pre><span class="bold">Servicio.java</span><code>Intent bc_intent = new Intent();
bc_intent.setAction("actualizar_foto");
bc_intent.putExtra("idDeLaFoto",R.drawable.torsion);
sendBroadcast(bc_intent);</code></pre>
	<pre><span class="bold">Activity.java</span><code><span class="green">//Es necesario registrar un escuchador del broadcaster</span>public void onResume(){
	super.onResume();
	IntentFilter intentFilter = new IntentFilter();
	intentFilter.addAction("actualizar_foto");
	registerReceiver(mMessageReceiver, intentFilter);
}
<span class="green">//Cuando el usuario cierre el Activity, dejaremos de escuchar el BroadcastReceiver</span>
public  void onPause(){
	super.onPause();
	unregisterReceiver(mMessageReceiver);
}
private BroadcastReceiver mMessageReceiver = new BroadcastReceiver() {
	@Override
	public void onReceive(Context context, Intent intent) {
		ImageView iv = findViewById(R.id.imagen);
		iv.setImageResource(intent.getExtras().getInt("idDeLaFoto"));
	}
};</code></pre-->
	<h3 id="solicitar_servicio_wifi">Solicitar el servicio de wifi y comprobar su estado</h3>
	<pre><code>
public class Main extends Activity {
    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
        
        ConnectivityManager cm = (ConnectivityManager)getSystemService(Context.CONNECTIVITY_SERVICE);
        TextView tv =  findViewById(R.id.textView1);
        boolean wifi = cm.getNetworkInfo(ConnectivityManager.TYPE_WIFI).isConnectedOrConnecting();
        if(wifi)tv.setText("El wifi está activo");
        else tv.setText("El wifi no está activo");
    }
}</code></pre>
	<p><span class="bold">Habrá que añadir un permiso al AndroidManifest.xml que debe estar a la misma altura que el nodo <span class="bold">manifest</span>:</span>:</p>
	<pre><code>&lt;uses-permission android:name=&quot;android.permission.ACCESS_NETWORK_STATE&quot; /&gt;
&lt;uses-permission android:name=&quot;android.permission.INTERNET&quot; /&gt;</code></pre>
<h2 id="broadcast_receiver">Broadcast Receiver</h2>
<p>Sirve para eventos del sistema ( batería baja, enchufar cargador, enchufar auriculares, etc. ) puedan conectarse con la aplicación.</p>


<ol>
	<li>botón derecho en el explorador de proyecto -> New -> Other -> Broadcast Receiver
		<ul>
			<li>Exporter: permite que otras aplicaciones se comuniquen con la nuestra. Con esto, podríamos conseguir, por ejemplo, que los datos se compartan cuando nos logueamos en una aplicación y querramos acceder a otra (obviamente, las dos firmadas por el mismo desarrollador).</li>
			<li>Enable: permite que el sistema se conecte con nuesta aplicación cuando lo necesite.</li>
		</ul>
	</li>

	<li>


	<div class="row">
		<div class="col-md-6">
		<pre><span class="bold">Main.java</span><code>public class Main extends AppCompatActivity {
    private MyReceiver receiver = new MyReceiver();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        IntentFilter filter = new IntentFilter();
        filter.addAction(Intent.ACTION_POWER_CONNECTED);
        filter.addAction(Intent.ACTION_POWER_DISCONNECTED);
        this.registerReceiver(receiver, filter);
    }

    @Override
    protected void onDestroy() {
        this.unregisterReceiver(receiver);
        super.onDestroy();
    }
}</code></pre>
		</div>
		<div class="col-md-6">
			
<pre><span class="bold">MyReceiver.java</span><code>public class MyReceiver extends BroadcastReceiver {

@Override
public void onReceive(Context context, Intent intent) {
	String message = "";
	String intentAction = intent.getAction();
	if (intentAction!=null) {
		switch (intentAction) {
			case Intent.ACTION_POWER_CONNECTED:
				message = "Conectado al cargador";
				break;
			case Intent.ACTION_POWER_DISCONNECTED:
				message = "Desconectado del cargador";
				break;
		}
	}
	Toast.makeText(context, message, Toast.LENGTH_LONG).show();
}
}</code></pre>
		</div>
	</div>
	

	</li>
</ol>

<h2>Notificaciones push</h2>
<ol>


<li>El código de nuestra clase en Android sería el siguiente. Con este código obtendremos un deviceToken que habrá que pegar a nuestro código PHP. En condiciones normales, este token serán almacenado en la base de datos en el servidor:<pre><code>FirebaseInstanceId.getInstance().getInstanceId().addOnCompleteListener(new OnCompleteListener&lt;InstanceIdResult&gt;() {
	@Override
	public void onComplete(@NonNull Task&lt;InstanceIdResult&gt; task) {
		if(!task.isSuccessful()){
			Log.w("TOKEN", "error al obtener el token");
			return;
		} else {
			Log.w("TOKEN", task.getResult().getToken());
		}
	}
});</code></pre></li>

<pre>build.gradle (module)<code>dependencies {
...
implementation 'com.google.android.gms:play-services-auth:17.0.0'
implementation 'com.google.android.gms:play-services-base:17.1.0'

implementation 'com.google.firebase:firebase-auth:19.2.0'
implementation 'com.google.firebase:firebase-messaging:20.1.0'

}
apply plugin: 'com.google.gms.google-services'</code></pre>




<ol>
<li>Debemos crear un proyecto en <a href="https://firebase.google.com/" target="_blank">firebase</a>. Para ello, podemos loguearnos en el android studio en firebase y crear un nuevo proyecto.</p>
<img src="./img/android-studio-login.png" alt="Android Studio Login"></li>

<li>Get started by adding Firebase to your app -> Android -> Nos pide los siguientes datos:

	<ul>
		<li>Android package name -> Lo obtengo en el build.gradle (del módulo) -> ApplicationId</li>
		<li>Descargamos el fichero json. En el pantallazo se nos indica donde colocarlo.</li>
<li>Añadimos los códigos que nos da en el <span class="bold">build.gradle (del proyecto)</span> y en el <span class="bold">buid.gradle (del módulo)</span></li>

	</ul>


</li>
</ol>

</li>

<li>La siguiente clase tiene dos métodos importantes:
	<ul>
		<li><span class="bold">onMessageReceived</span>: gestiona la recepción de las notificaciones push de Firebase.</li>
		<li><span class="bold">showNotification</span>: muestra una notificación en el móvil.</li>
	</ul>
	
<pre><code>public class MyNotificationService extends FirebaseMessagingService {

    @Override
    public void onMessageReceived(@NonNull RemoteMessage remoteMessage) {

        RemoteMessage.Notification notification = remoteMessage.getNotification();
        if(notification!=null){
            String message = notification.getBody();
            showNotification(message);
        }
    }

    @Override
    public void onNewToken(@NonNull String token) {
    }

    private void showNotification(String message){
        Intent intent = new Intent(this, MainActivity.class);
        intent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
        PendingIntent pendingIntent = PendingIntent.getActivity(this, 0, intent, PendingIntent.FLAG_ONE_SHOT);
        String channelID = "channel";
        Uri defaultSoundUri = RingtoneManager.getDefaultUri(RingtoneManager.TYPE_NOTIFICATION);
        NotificationCompat.Builder builder = new NotificationCompat.Builder(this, channelID)
                .setSmallIcon(R.drawable.android1)
                .setContentTitle(getString(R.string.app_name))
                .setContentText(message)
                .setAutoCancel(true)
                .setSound(defaultSoundUri)
                .setContentIntent(pendingIntent);

        NotificationManager notificationManager =
                (NotificationManager) getSystemService(Context.NOTIFICATION_SERVICE);

        // Since android Oreo notification channel is needed.
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
            NotificationChannel channel = new NotificationChannel(channelID,
                    "Channel human readable title",
                    NotificationManager.IMPORTANCE_DEFAULT);
            notificationManager.createNotificationChannel(channel);
        }

        notificationManager.notify(0 /* ID of notification */, builder.build());

    }
}</code></pre></li>
	
<li>Con esto, ya podríamos probar nuestra aplicación en firebase llendo a <a href="https://console.firebase.google.com/" target="_blank">firebase</a> -> Grow -> Cloud Messaging -> Escribimos los datos del mensaje -> Send test message -> Escribimos el token del móvil al que mandamos el mensaje.</li>
	
<li>Desarrollamos un código php para enviar las peticiones a firebase y que este se las envíe al móvil. Para poder ejecutar el comando <span class="bo">composer</span> en la consola, previamnete necesitamos tenerlo instalado. Podemos descargarlo desde <a href="https://getcomposer.org/download/" target="_blank">la página de composer</a>.<br>Instalamos las librerías de composer en un proyecto de nuestro servidor <pre><code>composer require kreait/firebase-php ^4.35.
</code></pre>

<pre>notificaciones.php<code>require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Factory;

$factory = (new Factory())->withServiceAccount('firebase-adminsdk.json');
$messaging = $factory->createMessaging();
$deviceToken = "fEC_mu5UsYk:APA91bFl1xyOWhPcqqEeZg8wj0Pm3_zHwTv8dxh5n7dHG_jXK1Liuxe4lFT8vLSCGnWR3JSKmfvv_HWVMRkj1AhlMlwUhgSkWDE2KONWZLxTmdDpi1cT9UoySQpIPZzjAAezgEkq3e4C";

$body = "this is body";
$title = "this is title";
$message = CloudMessage::fromArray([
	'token' => $deviceToken,
	'notification' => array("body"=>$body, "title"=>$title) // optional  
]);
var_dump($messaging->send($message));</code></pre></li>

</ol>
</div></article>

<article><div>

		<h2 id="asyntask">AsynTask</h2>
		<p>Tendremos que tener los siguientes dos permisos configurados:</p>
<pre><code></code></pre>
		<h3 id="porGET">Petición GET con AsynTask</h3>
		<pre><code>new <span class="bold red">MiAsyncTask()</span>.execute(&quot;<span class="purple bold">https://pablomonteserin.com/curso/php/res/leer-valor.php</span>&quot;);
<span class="purple bold">//El primer par&aacute;metro es lo que recibe doInBackground</span>
<span class="blue bold">//El segundo par&aacute;metro es lo que recibe un m&eacute;todo que no estamos utilizando</span>
<span class="pink bold">//El tercer par&aacute;metro es lo que devuelve doInBackground (una cookie es un String)</span>

private class <span class="red bold">MiAsyncTask</span> extends AsyncTask&lt;String, Integer, String&gt; {
	<span class="green">//doInBackground es un m&eacute;todo que se ejecuta en el background. 
	//Aqu&iacute; realizamos operaciones pesadas que pueden durar mucho tiempo dando lugar a una excepci&oacute;n
	//doInBackground no debe tocar nada de la interfaz visual. Estas operaciones ser&aacute;n hechas en onPostExecute</span>
	protected String doInBackground(String... urls) {
		URL url = new URL(urls[0]);
		URLConnection urlConnection = url.openConnection();
		BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(urlConnection.getInputStream()));
		String line;
		while ((line = bufferedReader.readLine()) != null){
			content.append(line + "\n");
		}
		bufferedReader.close();
		return <span class="red bold">content.toString()</span>;
	}

	<span class="green">//El m&eacute;todo onPostExecute debe recibir lo que devuelve el doInBackground (en este caso, un String)</span>
	<span class="bold">protected void onPostExecute(String <span class="red bold">txt</span>) {</span>
	}
}</code></pre>	
		<h3 id="search_upc"><span class="dark">Ejercicio:</span> petición GET con AsynTask</h3>
	<p>El código UPC que escribimos se lo mandaremos a la
<a target="_blank" href="https://pablomonteserin.com/curso/php/res/miupcsearch.php?upc_code=1234">url</a>
	</p>
<p>Para probar podremos utilizar el código: <br>
upcCode=1234</p>
	<p>Usaremos el permiso:</p>
	<pre><code>&lt;uses-permission android:name=&quot;android.permission.INTERNET&quot; /&gt;</code></pre>
<h3>Petición POST con AsyncTask</h3>
<pre><code>public class AsynTaskPorPOST extends AppCompatActivity {

@Override
protected void onCreate(Bundle savedInstanceState) {
	super.onCreate(savedInstanceState);
	setContentView(R.layout.asyntask_post);
}

public void hacerPeticion(View v){
	new MiAsyncTask().execute(&quot;https://pablomonteserin.com/curso/php/res/peticion-post-android.php&quot;,&quot;option=3&quot;);
}

private class MiAsyncTask extends AsyncTask&lt;String, Integer, String&gt; {

	protected String doInBackground(String... params) {
		StringBuilder content = new StringBuilder();

		try
		{
			URL url = new URL(params[0]);

			HttpURLConnection connection = (HttpURLConnection) url.openConnection();

			connection.setRequestMethod(&quot;POST&quot;);
			connection.setRequestProperty(&quot;Content-Type&quot;, &quot;application/x-www-form-urlencoded&quot;);
			connection.setRequestProperty(&quot;Accept&quot;, &quot;*/*&quot;);

			connection.setDoOutput(true);
			BufferedWriter writer = new BufferedWriter(new OutputStreamWriter(connection.getOutputStream()));
			writer.write(params[1]);
			writer.close();
			connection.connect();

			BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(connection.getInputStream()));
			String line;
			while ((line = bufferedReader.readLine()) != null)
			{
				content.append(line + &quot;\n&quot;);
			}
			bufferedReader.close();
		}
		catch(Exception e)
		{
			e.printStackTrace();
		}
		return content.toString();
	}
	protected void onPostExecute(String txt) {
//El m&eacute;todo onPostExecute debe recibir lo que devuelve el doInBackground (en este caso, un String)
		Toast.makeText(AsynTaskPorPOST.this, txt,Toast.LENGTH_SHORT).show();
	}
}
}</code></pre>
<h3>Procesar un JSON</h3>
<p>Si quiero acceder a elementos de un array, usaré, JSONArray, y si quiero acceder a propiedades de un objeto, usaré JSONObject</p>
<pre><code>JSONObject jObject = jObject = new JSONObject(respuesta);
JSONArray jArray = jObject.getJSONArray(&quot;results&quot;);
ArrayList&lt;String&gt; lista = new ArrayList&lt;String&gt;();
for (int i=0;i&lt;jArray.length();i++) {
	String valor = jArray.get(i).toString();
	JSONObject jObject2 = new JSONObject(valor);
	lista.add(jObject2.getString(&quot;name&quot;));
}</code></pre>
<h3>Petición GET con Retrofit</h3>
<p>Debemos importar las librerías de Retrofit</p>
<pre><span class="bold">build.gradle (module)</span><code><span class="green">// Retrofit</span>
api 'com.squareup.retrofit2:retrofit:2.3.0'
api 'com.squareup.retrofit2:converter-gson:2.3.0'</code></pre>
<pre><code>public class GetRequest extends AppCompatActivity{
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_get_request);
	}

	public void hacerPeticion(View v){
		Retrofit builder = new Retrofit.Builder()
			.baseUrl(&quot;https://swapi.co/api/&quot;)
			.addConverterFactory(GsonConverterFactory.create())
			.build();

		PabloAPI api = builder.create(PabloAPI.class);
		api.peticionGET().enqueue(new Callback&lt;ResponseBody&gt;() {
		
		@Override
		public void onResponse(Call&lt;ResponseBody&gt; call, Response&lt;ResponseBody&gt; response) {
			try {
				String respuesta = response.body().string();
				Log.d(&quot;RESPUESTA&quot;, respuesta);
				Toast.makeText(getBaseContext(), respuesta, Toast.LENGTH_LONG).show();
				// Procesamos el resultado de la petición...
			} catch (IOException e) {
				e.printStackTrace();
			}
		}

		@Override
		public void onFailure(Call&lt;ResponseBody&gt; call, Throwable t) {
			Toast.makeText(GetRequestSimplificada.this, &quot;Error&quot;, Toast.LENGTH_SHORT).show();
		}
	});
}
}</code></pre>
<pre><code>public interface PabloAPI {
	@GET(&quot;people/&quot;)
	Call&lt;ResponseBody&gt; peticionGET();
}</code></pre>
	<h3>Petición POST con Retrofit</h3>
<p>El código es muy parecido al de la petición GET, pero cambiando el fichero API:</p>
	<pre><span class="bold">PabloMonteserinAPI.java</span><code>public interface PabloMonteserinAPI {
	//Las cabeceras deben estar en consonancia con el tipo de dato que vamos a recuperar u obtendremos un error 406
	//  @Headers({&quot;Accept: application/json&quot;})
	@Headers({&quot;Accept: text/html&quot;})
	@FormUrlEncoded
	@POST(&quot;curso/php/res/peticion-post-android-2.php/&quot;)
	Call&lt;ResponseBody&gt; peticionPOST(@Field(&quot;nombre&quot;) String nombre, @Field(&quot;apellidos&quot;) String apellidos);
}</code></pre>
<pre><code>@Headers({&quot;Accept: text/html&quot;})
@POST(&quot;users/login&quot;)
Call&lt;ResponseBody&gt; login(@Body User user);</code></pre>
<pre><code>//api.peticionPOST(&quot;Pablo&quot;, &quot;Monteserr&iacute;n&quot;).enqueue(new Callback&lt;ResponseBody&gt;() {
	...</code></pre>
	<h3>Subida de una imagen de la galería al servidor con Retrofit</h3>
<p>Nesitaremos los siguientes permisos en el manifest:</p>
<pre><code>&lt;uses-permission android:name=&quot;android.permission.INTERNET&quot; /&gt;
&lt;uses-permission android:name=&quot;android.permission.READ_EXTERNAL_STORAGE&quot;/&gt;
&lt;uses-permission android:name=&quot;android.permission.WRITE_EXTERNAL_STORAGE&quot;/&gt;</code></pre>
<pre><span class="bold">SubidaImagen.java</span><code>public class SubirImagen extends AppCompatActivity {

	private boolean isAndroid6;
	private final int MY_PERMISSIONS_REQUEST_CAMARA = 1;

	TextView image_name_tv;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_subir_imagen);
		image_name_tv = findViewById(R.id.nombreFoto);

		if (android.os.Build.VERSION.SDK_INT >= Build.VERSION_CODES.M) {
			isAndroid6 = true;
			askPermissionsIfneeded();
		}
	}
	private void askPermissionsIfneeded(){
		if (ContextCompat.checkSelfPermission(this, Manifest.permission.READ_EXTERNAL_STORAGE) != PackageManager.PERMISSION_GRANTED) {
			ActivityCompat.requestPermissions(this, new String[]{Manifest.permission.READ_EXTERNAL_STORAGE}, MY_PERMISSIONS_REQUEST_CAMARA);
		}
	}

	@Override
	public void onRequestPermissionsResult(int requestCode,
                                           String permissions[], int[] grantResults) {
		switch (requestCode) {
			case MY_PERMISSIONS_REQUEST_CAMARA: {
			<span class="green">// If request is cancelled, the result arrays are empty.</span>	
				if (grantResults.length > 0 && grantResults[0] == PackageManager.PERMISSION_GRANTED) {
					<span class="green">// permission was granted, yay! Do the
					// contacts-related task you need to do.</span>
				}else {
					<span class="green">// permission denied, boo! Disable the
					// functionality that depends on this permission.</span>
				}
				return;
			}
            <span class="green">// other 'case' lines to check for other
            	// permissions this app might request</span>
		}
	}

    public void sacarFoto(View v){
        Intent photoPickerIntent = new Intent(Intent.ACTION_PICK);
        photoPickerIntent.setType("image/*");
        startActivityForResult(photoPickerIntent, 1);

        <span class="green">/*Intent takePictureIntent = new Intent(MediaStore.ACTION_IMAGE_CAPTURE);
        	if (takePictureIntent.resolveActivity(getPackageManager()) != null) {
        	    startActivityForResult(takePictureIntent, 1);
        	}*/</span>
    }

    @Override
    public void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
        if (requestCode == 1)
            if (resultCode == Activity.RESULT_OK) {
                Uri selectedImage = data.getData();

                String filePath = getPath(selectedImage);
                String file_extn = filePath.substring(filePath.lastIndexOf(".") + 1);
                image_name_tv.setText(filePath);

                if (file_extn.equals("img") || file_extn.equals("jpg") || file_extn.equals("jpeg") || file_extn.equals("gif") || file_extn.equals("png")) {
                    File file = new File(filePath);
                    RequestBody requestFile =
                            RequestBody.create(
                                    MediaType.parse(getContentResolver().getType(selectedImage)),
                                    file
                            );
                    MultipartBody.Part body =
                            MultipartBody.Part.createFormData("sampleFile", file.getName(), requestFile);
                    String descriptionString = "hello, this is description speaking";
                    RequestBody description =
                            RequestBody.create(
                                    okhttp3.MultipartBody.FORM, descriptionString);
                    RetrofitService retrofitService = RetrofitService.getInstance();
                    PabloAPI api = retrofitService.getApiProxyServer();
                    api.uploadFile(description,body).enqueue(new Callback&lt;ResponseBody&gt;() {
                        @Override
                        public void onResponse(Call&lt;ResponseBody&gt; call, Response&lt;ResponseBody&gt; response) {
                            Toast.makeText(SubirImagen.this, "Imagen subida", Toast.LENGTH_SHORT).show();
                        }

                        @Override
                        public void onFailure(Call&lt;ResponseBody&gt; call, Throwable t) {
                            Toast.makeText(SubirImagen.this, "Error", Toast.LENGTH_SHORT).show();
                        }
                    });

                } else {
                    <span class="green">//NOT IN REQUIRED FORMAT</span>
                }
            }
    }

    public String getPath(Uri uri) {
        String[] filePathColumn = { MediaStore.Images.Media.DATA };
        Cursor cursor = getContentResolver().query(uri,filePathColumn, null, null, null);
        cursor.moveToFirst();
        int columnIndex = cursor.getColumnIndex(filePathColumn[0]);
        String picturePath = cursor.getString(columnIndex);
        cursor.close();
        return picturePath;
    }
}
</code></pre>
<pre><span class="bold">PabloAPI</span><code>public interface PabloAPI {
    @Multipart
    @POST("subida/upload")
    Call&lt;ResponseBody&gt; uploadFile(@Part("description") RequestBody description, @Part MultipartBody.Part file);
}</code></pre>
<pre><code>public class RetrofitService {
	private static RetrofitService INSTANCE = null;
	private static final String BASE_URL = "http://pablomonteserin.com:19139";
	private PabloAPI apiService;

	<span class="green">// Private constructor suppresses</span>    
	private RetrofitService(){
		Retrofit builder = new Retrofit.Builder()
			.baseUrl(BASE_URL)
			.addConverterFactory(GsonConverterFactory.create())
			.build();

		apiService = builder.create(PabloAPI.class);
	}

	<span class="green">// creador sincronizado para protegerse de posibles problemas  multi-hilo
	// otra prueba para evitar instanciación múltiple</span>
	private synchronized static void createInstance() {
		if (INSTANCE == null) {
			INSTANCE = new RetrofitService();
		}
	}

	public static RetrofitService getInstance() {
		if (INSTANCE == null) createInstance();
		return INSTANCE;
	}

	public PabloAPI getApiProxyServer(){
		return apiService;
	}
}</code></pre>
<pre><span class="bold">Servidor nodejs con Express</span><code>router.post('/upload', function(req, res) {
  console.log(req.files);
  console.log("amor");
  if (!req.files)
    return res.status(400).send('No files were uploaded.');
  // The name of the input field (i.e. "sampleFile") is used to retrieve the uploaded file
  let sampleFile = req.files.sampleFile;
 
  // Use the mv() method to place the file somewhere on your server
  sampleFile.mv('/usr/home/pablomonteserin/termine/public/subida/filename.jpg', function(err) {
    var path = require("path");
      console.log("./ = %s", path.resolve("./"));
      console.log("__dirname = %s", path.resolve(__dirname));

    if (err){
      console.log("adasda")
      return res.status(500).send(err);
    }
    res.send('File uploaded!');
  });
});

router.get('/', function(req, res){
	res.write(`&lt;html&gt;
	&lt;body&gt;
	&lt;form ref='uploadForm' 
		id='uploadForm' 
		action='http://pablomonteserin.com:19139/subida/upload' 
		method='post' 
		encType=&quot;multipart/form-data&quot;&gt;
		&lt;input type=&quot;file&quot; name=&quot;sampleFile&quot; /&gt;
		&lt;input type='submit' value='Upload!' /&gt;
		&lt;/form&gt;     
		&lt;/body&gt;
	&lt;/html&gt;`);
  	res.end();
});</code></pre>
<pre><span class="bold">app.js</span><code>const fileUpload = require('express-fileupload');
app.use(fileUpload());
</code></pre>
<h2>Subida de un fichero al servidor</h2>
<pre><code>public void subirFichero(View v){
	File file = new File(this.getCacheDir(), &quot;datos.txt&quot;);
	copyFiletoExternalStorage(R.raw.datos, file.getAbsolutePath());
	String mediaType = MimeTypeMap.getSingleton().getMimeTypeFromExtension(&quot;txt&quot;);
	RequestBody requestFile =
	RequestBody.create(MediaType.parse(mediaType), file);
	MultipartBody.Part body = MultipartBody.Part.createFormData(&quot;nameDelObjeto&quot;, file.getName(), requestFile);
	RetrofitService retrofitService = RetrofitService.getInstance();
	PabloAPI api = retrofitService.getApiProxyServer();
	api.uploadFile(body).enqueue(new Callback&lt;ResponseBody&gt;() {
		@Override
		public void onResponse(Call&lt;ResponseBody&gt; call, Response&lt;ResponseBody&gt; response) {
			Toast.makeText(MainActivity.this, &quot;Imagen subida&quot;, Toast.LENGTH_SHORT).show();
		}

		@Override
		public void onFailure(Call&lt;ResponseBody&gt; call, Throwable t) {
			Toast.makeText(MainActivity.this, &quot;Error:&quot;, Toast.LENGTH_LONG).show();
		}
	});
}

private void copyFiletoExternalStorage(int resourceId, String pathCacheDir){
	try{
		InputStream in = getResources().openRawResource(resourceId);
		FileOutputStream out = null;
		out = new FileOutputStream(pathCacheDir);
		byte[] buff = new byte[1024];
		int read = 0;
		try {
			while ((read = in.read(buff)) > 0) {
				out.write(buff, 0, read);
			}
		} finally {
			in.close();
			out.close();
		}
	} catch (FileNotFoundException e) {
		e.printStackTrace();
	} catch (IOException e) {
		e.printStackTrace();
	}
}</code></pre>
<pre><code>&lt;?php
	header(&quot;Access-Control-Allow-Origin: *&quot;);
	header(&quot;Access-Control-Allow-Methods: GET, POST, OPTIONS&quot;);	

	$errors= array();
	$file_name = $_FILES['nameDelObjeto']['name'];
	$file_tmp = $_FILES['nameDelObjeto']['tmp_name'];
   
	$url = dirname(__FILE__).&quot;/&quot;.$file_name;

	if (empty($errors)==true) {
		if(move_uploaded_file($file_tmp,$url)){
			echo &quot;subida con exito&quot;;
			chmod($url, 0777);
		}else{
			echo &quot;problema en la subida&quot;;
		}
	}
?&gt;</code></pre>
</div></article>

<article><div>
<h2 id="maps">Mapas</h2>
<h3 id="recomendacion">Recomendación</h3>
<p>No probar ejercicios que impliquen geolocalización en el emulador. Unos funcionan, otros no, otros funcionan mal, etc.</p>
	<h3 id="teoria_geolocalizacion">Geolocalización</h3>
	<p>La podemos obtener por 3 medios: 
<ul>
	<li><span class="bold">GPS</span>: (el más preciso y lento (puede tardar incluso más de un minuto)). 2 metros de error.</li>
	<li><span class="bold">Red móvil</span>: El móvil detecta 3 antenas, hace un triángulo (el método se llama triangulación) y detecta la posición (con un margen de error de 20, 50 m...) depende de la distancia con las antenas. En ciudad hay menos error que en el campo. Tarda unos segundos</li>
	<li><span class="bold">Wi-Fi</span>: Funciona si estoy conectado a una red WI-FI. El móvil detecta el SSID (nombre de la red) de la wi-fi y accede a una base de datos donde tiene registrada su ubicación.</li>
</ul>
	</p>
	<p class="notas">
		La geolocalizacion del emulador no funciona correctamente pq no tiene ni gps, ni red movil ni han integrado la geolocalización por wi-fi. <br>
Para falsear la geolocalización del emulador: window-> show view -> other -> emulator control <br>
Habrá que asegurarse de tener el device seleccionado en el momento de pulsar el botón de send.</p>
<pre>Habrá que añadir los siguientes permisos:<code>&lt;!--Localizaci&oacute;n usando la red WI-FI: --&gt;
&lt;uses-permission android:name=&quot;android.permission.ACCESS_COARSE_LOCATION&quot; /&gt;
&lt;!--Localizaci&oacute;n usando el GPS --&gt;
&lt;uses-permission android:name=&quot;android.permission.ACCESS_FINE_LOCATION&quot; /&gt;</code></pre>
	<h3 id="location_manager">Location Manager</h3>
<p>Vamos a mostrar las coordenadas en un TextView</p>
<p>Tendremos que solicitar permisos al usuario de forma similar a como lo hicimos cuando queríamos <a href="#contactos">acceder a los contactos</a>.</p>
<pre><code>private static final int MY_PERMISSIONS_CODE = 999;

private TextView coordenadas;

private LocationManager locationManager;
private LocationListener listener = new LocationListener() {
	public void onLocationChanged(Location location) {
		coordenadas.setText(&quot;Latitud: &quot; + location.getLatitude() + &quot;Longitud: &quot; + location.getLongitude());
	}

	@Override public void onStatusChanged(String provider, int status, Bundle extras) {}
	@Override public void onProviderEnabled(String provider) {}
	@Override public void onProviderDisabled(String provider) {}
};

@Override
protected void onCreate(Bundle savedInstanceState) {
	super.onCreate(savedInstanceState);
	setContentView(R.layout.mapas_locationmanager);
	coordenadas = findViewById(R.id.coordenadas);
	locationManager = (LocationManager) getSystemService(Context.LOCATION_SERVICE);
	checkPermisions();
}

@Override
public void onRequestPermissionsResult(int requestCode, String permissions[], int[] grantResults) {
	switch (requestCode) {
		case MY_PERMISSIONS_CODE: {
			if (grantResults.length&gt;0 &amp;&amp; grantResults[0]==PackageManager.PERMISSION_GRANTED) {
				requestLocation();
			} else {
				// permission denied, boo! Disable the  functionality that depends on this permission.
			}
		}
	}
}

public void onResume() {
	super.onResume();
	requestLocation();
}

public void onPause() {
	super.onPause();
	locationManager.removeUpdates(listener);
}

private void checkPermisions() {
	if (android.os.Build.VERSION.SDK_INT &gt;= Build.VERSION_CODES.M) {
		if (ContextCompat.checkSelfPermission(this, Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED ||
				ContextCompat.checkSelfPermission(this, Manifest.permission.ACCESS_COARSE_LOCATION) != PackageManager.PERMISSION_GRANTED) {
			ActivityCompat.requestPermissions(this,
					new String[]{
							Manifest.permission.ACCESS_FINE_LOCATION,
							Manifest.permission.ACCESS_COARSE_LOCATION,
							Manifest.permission.INTERNET,
					},
					MY_PERMISSIONS_CODE);
		} else {
			requestLocation();
		}
	} else {
		requestLocation();
	}
}

@SuppressLint(&quot;MissingPermission&quot;)
private void requestLocation() {
	locationManager.requestLocationUpdates(LocationManager.GPS_PROVIDER, 500, 0, listener);
	locationManager.requestLocationUpdates(LocationManager.NETWORK_PROVIDER, 500, 0, listener);
}</code></pre>

<h3 id="add_map">Añadir un mapa</h3>
	<h4>¿Qué es un fragmento?</h4>
	<p>Es una parte de una Activity, que tiene su propio ciclo de vida, recibe sus propios eventos de entrada, y que se puede añadir o quitar dinámicamente.</p>
			<h4>Paso 1: Cargar las librerías</h4>
		<ol>
		<li><span class="bold">Obtener una Map API Key (modo debug)</span>: <a href="https://cloud.google.com/console">https://cloud.google.com/console</a>  → Seleccionamos en la barra horizontal superior el proyecto actual y se abrirá un panel que nos permitirá crear un nuevo proyecto → Create Project → APIs → go to the api's overview → enable API → 
Maps SDK for Android → Enable → Credentials → Credenciales en APIs y servicios → Create Credentials → Clave de API → anotamos la API key.</li>
			<li>Vista Android → Gradle Scripts → build.gradle (de módulo) → en dependencias añado lo siguiente:
			<pre><code>implementation 'com.google.android.gms:play-services-auth:17.0.0'
implementation 'com.google.android.gms:play-services-base:17.1.0'
implementation 'com.google.android.gms:play-services-maps:17.0.0'</code></pre></li>
    <li>Además, en el layout habrá que añadir el siguiente código que representará el mapa:
<pre><code>&lt;fragment xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
        android:id=&quot;@+id/map&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;
        class=&quot;com.google.android.gms.maps.SupportMapFragment&quot;/&gt;</code></pre>
    </li>
		</ol>
		
		<h4>Paso 2: modificar el AndroidManifest.xml</h4>
<pre><code>	<span class="bold">&lt;meta-data
            android:name=&quot;com.google.android.maps.v2.API_KEY&quot;
            android:value=&quot;AIzaSyDKH-mnui5hMmO3wnTdrmXy4V5IVs6KTR8&quot; /&gt;
        &lt;meta-data
            android:name=&quot;com.google.android.gms.version&quot;
            android:value=&quot;@integer/google_play_services_version&quot; /&gt;</span>
    &lt;/application&gt;
&lt;/manifest&gt;</code></pre>

		<h4>Paso 3: Añadir el mapa en el código Java</h4>
		<pre><code>public class MainActivity extends AppCompatActivity implements OnMapReadyCallback {
	protected void onCreate(Bundle savedInstanceState) {
	super.onCreate(savedInstanceState);
	setContentView(R.layout.activity_main);

	SupportMapFragment mapFragment  = (SupportMapFragment)getSupportFragmentManager().findFragmentById(R.id.map);
	mapFragment.getMapAsync(this);
}</code></pre>
		<h4 id="centrar_mapa">Centrar mapa en la posición del usuario y seguirlo</h4>
<pre><code>@SuppressLint(&quot;MissingPermission&quot;)
private void requestLocation() {
	Location currentLocation = null;
	for(String provider: locationManager.getAllProviders()){
		Location aux = locationManager.getLastKnownLocation(provider);
		if(aux!=null){
			Log.d(&quot;traza&quot;, &quot;best Provider &quot; + provider);
			currentLocation = aux;
			break;
		}
	}
	if (currentLocation!=null) {
		updateMapaWith(new LatLng(currentLocation.getLatitude(), currentLocation.getLongitude()));
	}
	Log.d(&quot;traza&quot;, &quot;last location &quot; + currentLocation);
	locationManager.requestLocationUpdates(LocationManager.GPS_PROVIDER, 500, 0, listener);
	locationManager.requestLocationUpdates(LocationManager.NETWORK_PROVIDER, 500, 0, listener);
}

private void updateMapaWith(LatLng latLng){
	if (googleMap != null) {
		CameraPosition camPos = new CameraPosition.Builder()
		.target(latLng)   //Centramos el mapa en Madrid
		.zoom(19)          //Establecemos el zoom en 19
		.bearing(45)       //Establecemos la orientaci&oacute;n con el noreste arriba
		.tilt(70)          //Bajamos el punto de vista de la c&aacute;mara 70 grados
		.build();

		CameraUpdate camUpd = CameraUpdateFactory.newCameraPosition(camPos);
		googleMap.animateCamera(camUpd);
	}
}</code></pre>

<h4 id="add_marker">Añadir un marcador</h4>
<pre><code>googleMap.addMarker(new MarkerOptions()
	.position(new LatLng(41.431725, 2.192188))
	.snippet("Tadel Formació")
	.title("Centre de formació")
	.icon(BitmapDescriptorFactory.fromResource(R.drawable.escudo)));</code></pre>

	<h3>Ejercicio Sqlite</h3>
	<p>Hacer una aplicación que utilizando una base de datos SqlLite situe en pantalla 3 puntos, identificados por el logo suministrado. Al pulsar sobre el logo, iremos a una pantalla dónde se mostrará información del enclave pulsado.</p>
	<p>Recursos:</p>
	<ul>
		<li><a href="ex/escudo.png">Logo.</a></li>
		<li><a href="ex/lugares">Base de datos.</a></li>
	</ul>
<p>Utilizaremos el HashMap tabla para que al hacer click en un marker podamos obtener su id y a continuación pasársela al siguiente activity:</p>
<span class="red bold">monumentos</span> es un HashMap de objetos Monumento.
<pre><code>@Override
public boolean onMarkerClick(Marker arg0) {
	int idMonumento = tabla.get(arg0);			
	startActivity(new Intent(this,LugarActivity.class).putExtra(MONUMENTO, <span class="red bold">monumentos</span>.get(idMonumento)));
	return true;
}</code></pre>
<pre>Para recibir el monumento:<code>Monumento monumento = (Monumento) getIntent().getExtras().getSerializable(GeolocalizacionCapasActivity.<span class="purple">MONUMENTO</span>);</code></pre>
	<h3 id="ubicacion">Obtener la ubicación de cierto lugar</h3>
	<pre><code>String direccion = &quot;Camino de Rubin 2, Gij&oacute;n&quot;;

Geocoder geocoder = new Geocoder(this);  
List&lt;Address&gt; addresses;
addresses = geocoder.getFromLocationName(direccion, 1);
if(addresses.size() &gt; 0) {
	double latitude= addresses.get(0).getLatitude();
	double longitude= addresses.get(0).getLongitude();
	tv.setText(&quot;Latitud=&quot;+latitude+&quot; Longitud=&quot;+longitude);
}</code></pre>
<h3 id="rutas">Rutas</h3>
<p>Debemos activar la <span class="bold">Directions API</span> en la sección <span class="bold">API's overview</span> de la <a href="https://console.cloud.google.com/apis" target="_blank">Google Developer Console</a>.</p>
<p><a href="https://console.cloud.google.com/billing" target="_blank">También debemos activar la facturación para esta cuenta</a>. Ojo con todo lo que ello conlleva.</p>
<pre><span class="bold">MainActivity.java</span><code>public class MainActivity extends AppCompatActivity implements OnMapReadyCallback, TaskLoadedCallback {

    private GoogleMap mMap;
    private MarkerOptions place1, place2;
    Button getDirection;
    private Polyline currentPolyline;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_rutas);
        //27.658143,85.3199503
        //27.667491,85.3208583
        place1 = new MarkerOptions().position(new LatLng(22.3039, 70.8022)).title(&quot;Location 1&quot;);
        place2 = new MarkerOptions().position(new LatLng(23.0225, 72.5714)).title(&quot;Location 2&quot;);

        new FetchURL(MainActivity.this).execute(getUrl(place1.getPosition(), place2.getPosition(), &quot;driving&quot;), &quot;driving&quot;);

        SupportMapFragment miMapa = (SupportMapFragment) getSupportFragmentManager().findFragmentById(R.id.map);

        miMapa.getMapAsync(this);
    }

    @Override
    public void onMapReady(GoogleMap googleMap) {
        mMap = googleMap;
        Log.d(&quot;mylog&quot;, &quot;Added Markers&quot;);
        mMap.addMarker(place1);
        mMap.addMarker(place2);

        CameraPosition googlePlex = CameraPosition.builder()
                .target(new LatLng(22.7739,71.6673))
                .zoom(7)
                .bearing(0)
                .tilt(45)
                .build();

        mMap.animateCamera(CameraUpdateFactory.newCameraPosition(googlePlex), 5000, null);
    }

    private String getUrl(LatLng origin, LatLng dest, String directionMode) {
        // Origin of route
        String str_origin = &quot;origin=&quot; + origin.latitude + &quot;,&quot; + origin.longitude;
        // Destination of route
        String str_dest = &quot;destination=&quot; + dest.latitude + &quot;,&quot; + dest.longitude;
        // Mode
        String mode = &quot;mode=&quot; + directionMode;
        // Building the parameters to the web service
        String parameters = str_origin + &quot;&amp;&quot; + str_dest + &quot;&amp;&quot; + mode;
        // Output format
        String output = &quot;json&quot;;
        // Building the url to the web service
        String url = &quot;https://maps.googleapis.com/maps/api/directions/&quot; + output + &quot;?&quot; + parameters + &quot;&amp;key=AIzaSyBKJ43pjK3x1GQjnO0zaYUwDJHdy5LiooU&quot;;
        return url;
    }

    @Override
    public void onTaskDone(Object... values) {
        if (currentPolyline != null)
            currentPolyline.remove();
        currentPolyline = mMap.addPolyline((PolylineOptions) values[0]);
    }
}</code></pre>

<pre><span class="bold">TaskLoadedCallback.java</span><code>public interface TaskLoadedCallback {
    void onTaskDone(Object... values);
}</code></pre>

<pre><span class="bold">FetchURL.java</span><code>public class FetchURL extends AsyncTask&lt;String, Void, String&gt; {
    Context mContext;
    String directionMode = &quot;driving&quot;;

    public FetchURL(Context mContext) {
        this.mContext = mContext;
    }

    @Override
    protected String doInBackground(String... strings) {
        // For storing data from web service
        String data = &quot;&quot;;
        directionMode = strings[1];
        try {
            // Fetching the data from web service
            data = downloadUrl(strings[0]);
            Log.d(&quot;mylog&quot;, &quot;Background task data &quot; + data.toString());
        } catch (Exception e) {
            Log.d(&quot;Background Task&quot;, e.toString());
        }
        return data;
    }

    @Override
    protected void onPostExecute(String s) {
        super.onPostExecute(s);
        PointsParser parserTask = new PointsParser(mContext, directionMode);
        // Invokes the thread for parsing the JSON data
        parserTask.execute(s);
    }

    private String downloadUrl(String strUrl) throws IOException {
        String data = &quot;&quot;;
        InputStream iStream = null;
        HttpURLConnection urlConnection = null;
        try {
            URL url = new URL(strUrl);
            // Creating an http connection to communicate with url
            urlConnection = (HttpURLConnection) url.openConnection();
            // Connecting to url
            urlConnection.connect();
            // Reading data from url
            iStream = urlConnection.getInputStream();
            BufferedReader br = new BufferedReader(new InputStreamReader(iStream));
            StringBuffer sb = new StringBuffer();
            String line = &quot;&quot;;
            while ((line = br.readLine()) != null) {
                sb.append(line);
            }
            data = sb.toString();
            Log.d(&quot;mylog&quot;, &quot;Downloaded URL: &quot; + data.toString());
            br.close();
        } catch (Exception e) {
            Log.d(&quot;mylog&quot;, &quot;Exception downloading URL: &quot; + e.toString());
        } finally {
            iStream.close();
            urlConnection.disconnect();
        }
        return data;
    }
}</code></pre>
<pre><span class="bold">DataParser.java</span><code>public class DataParser {
    public List&lt;List&lt;HashMap&lt;String, String&gt;&gt;&gt; parse(JSONObject jObject) {

        List&lt;List&lt;HashMap&lt;String, String&gt;&gt;&gt; routes = new ArrayList&lt;&gt;();
        JSONArray jRoutes;
        JSONArray jLegs;
        JSONArray jSteps;
        try {
            jRoutes = jObject.getJSONArray(&quot;routes&quot;);
            /** Traversing all routes */
            for (int i = 0; i &lt; jRoutes.length(); i++) {
                jLegs = ((JSONObject) jRoutes.get(i)).getJSONArray(&quot;legs&quot;);
                List path = new ArrayList&lt;&gt;();
                /** Traversing all legs */
                for (int j = 0; j &lt; jLegs.length(); j++) {
                    jSteps = ((JSONObject) jLegs.get(j)).getJSONArray(&quot;steps&quot;);

                    /** Traversing all steps */
                    for (int k = 0; k &lt; jSteps.length(); k++) {
                        String polyline = &quot;&quot;;
                        polyline = (String) ((JSONObject) ((JSONObject) jSteps.get(k)).get(&quot;polyline&quot;)).get(&quot;points&quot;);
                        List&lt;LatLng&gt; list = decodePoly(polyline);

                        /** Traversing all points */
                        for (int l = 0; l &lt; list.size(); l++) {
                            HashMap&lt;String, String&gt; hm = new HashMap&lt;&gt;();
                            hm.put(&quot;lat&quot;, Double.toString((list.get(l)).latitude));
                            hm.put(&quot;lng&quot;, Double.toString((list.get(l)).longitude));
                            path.add(hm);
                        }
                    }
                    routes.add(path);
                }
            }

        } catch (JSONException e) {
            e.printStackTrace();
        } catch (Exception e) {
        }
        return routes;
    }


    /**
     * Method to decode polyline points
     * Courtesy : https://jeffreysambells.com/2010/05/27/decoding-polylines-from-google-maps-direction-api-with-java
     */
    private List&lt;LatLng&gt; decodePoly(String encoded) {

        List&lt;LatLng&gt; poly = new ArrayList&lt;&gt;();
        int index = 0, len = encoded.length();
        int lat = 0, lng = 0;

        while (index &lt; len) {
            int b, shift = 0, result = 0;
            do {
                b = encoded.charAt(index++) - 63;
                result |= (b &amp; 0x1f) &lt;&lt; shift;
                shift += 5;
            } while (b &gt;= 0x20);
            int dlat = ((result &amp; 1) != 0 ? ~(result &gt;&gt; 1) : (result &gt;&gt; 1));
            lat += dlat;

            shift = 0;
            result = 0;
            do {
                b = encoded.charAt(index++) - 63;
                result |= (b &amp; 0x1f) &lt;&lt; shift;
                shift += 5;
            } while (b &gt;= 0x20);
            int dlng = ((result &amp; 1) != 0 ? ~(result &gt;&gt; 1) : (result &gt;&gt; 1));
            lng += dlng;

            LatLng p = new LatLng((((double) lat / 1E5)),
                    (((double) lng / 1E5)));
            poly.add(p);
        }

        return poly;
    }
}</code></pre>
<pre><span class="bold">PointsParser.java</span><code>package com.pablomonteserin.mapas.rutas2;

import android.content.Context;
import android.graphics.Color;
import android.os.AsyncTask;
import android.util.Log;

import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.PolylineOptions;

import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;



public class PointsParser extends AsyncTask&lt;String, Integer, List&lt;List&lt;HashMap&lt;String, String&gt;&gt;&gt;&gt; {
    TaskLoadedCallback taskCallback;
    String directionMode = &quot;driving&quot;;

    public PointsParser(Context mContext, String directionMode) {
        this.taskCallback = (TaskLoadedCallback) mContext;
        this.directionMode = directionMode;
    }

    // Parsing the data in non-ui thread
    @Override
    protected List&lt;List&lt;HashMap&lt;String, String&gt;&gt;&gt; doInBackground(String... jsonData) {

        JSONObject jObject;
        List&lt;List&lt;HashMap&lt;String, String&gt;&gt;&gt; routes = null;

        try {
            jObject = new JSONObject(jsonData[0]);
            Log.d(&quot;mylog&quot;, jsonData[0].toString());
            DataParser parser = new DataParser();
            Log.d(&quot;mylog&quot;, parser.toString());

            // Starts parsing data
            routes = parser.parse(jObject);
            Log.d(&quot;mylog&quot;, &quot;Executing routes&quot;);
            Log.d(&quot;mylog&quot;, routes.toString());

        } catch (Exception e) {
            Log.d(&quot;mylog&quot;, e.toString());
            e.printStackTrace();
        }
        return routes;
    }

    // Executes in UI thread, after the parsing process
    @Override
    protected void onPostExecute(List&lt;List&lt;HashMap&lt;String, String&gt;&gt;&gt; result) {
        ArrayList&lt;LatLng&gt; points;
        PolylineOptions lineOptions = null;
        // Traversing through all the routes
        for (int i = 0; i &lt; result.size(); i++) {
            points = new ArrayList&lt;&gt;();
            lineOptions = new PolylineOptions();
            // Fetching i-th route
            List&lt;HashMap&lt;String, String&gt;&gt; path = result.get(i);
            // Fetching all the points in i-th route
            for (int j = 0; j &lt; path.size(); j++) {
                HashMap&lt;String, String&gt; point = path.get(j);
                double lat = Double.parseDouble(point.get(&quot;lat&quot;));
                double lng = Double.parseDouble(point.get(&quot;lng&quot;));
                LatLng position = new LatLng(lat, lng);
                points.add(position);
            }
            // Adding all the points in the route to LineOptions
            lineOptions.addAll(points);
            if (directionMode.equalsIgnoreCase(&quot;walking&quot;)) {
                lineOptions.width(3);
                lineOptions.color(Color.MAGENTA);
            } else {
                lineOptions.width(3);
                lineOptions.color(Color.RED);
            }
            Log.d(&quot;mylog&quot;, &quot;onPostExecute lineoptions decoded&quot;);
        }

        // Drawing polyline in the Google Map for the i-th route
        if (lineOptions != null) {
            //mMap.addPolyline(lineOptions);
            taskCallback.onTaskDone(lineOptions);

        } else {
            Log.d(&quot;mylog&quot;, &quot;without Polylines drawn&quot;);
        }
    }
}</code></pre>

</div></article>

<article><div>


	<h2 id="login">Login</h2>
	
		<h3 id="login_con_google">Login con Google</h3>
		<h4>Instalación</h4>
		<ol>
			<li>Tendremos que loguearnos en la <a target="_blank" href="https://console.firebase.google.com/">consola de Firebase</a></li>
			<li>Crear nuevo proyecto</li>
				<li>google-services.json
					<ol>
						<li>Engranaje de settings -> Project Settings -> Download google-services.json</li>
						<li>En Android Studio cambiamos el modo de visualización del proyecto a Proyecto.</li>
			<li>Arrastramos el fichero creado (google-services.json) sobre la carpeta APP.</li>
		</ol>
			<li>Pegamos en el build.gradle del módulo y proyecto las líneas que nos indica el asistente de configuración.</li>
			<li>Abrimos el fichero Build.gradle del módulo y copiamos el valor del applicationID. Nos vamos a la página de firebase y lo pegamos en: Engranaje de settings -> Project Settings -> Package Name.</li>
			
				</li>
			<li>Habrá que añadir los siguientes repositorios:
				<pre><span class="bold">build.gradle (project)</span><code>allprojects {
    repositories {
        maven { url 'https://maven.google.com'  }
    }
}</code></pre>
</li>
<li>
	<pre><span class="bold">build.gradle</span><code>dependencies {
	implementation 'com.google.android.gms:play-services-auth:17.0.0'
	implementation 'com.google.android.gms:play-services-base:17.1.0'
	implementation 'com.google.android.gms:play-services-maps:17.0.0'
...</code></pre>
</li>
<li>Para poder recuperar datos del usuario como la contraseña, debemos ejecutar el siguiente código en nuestro ordenador: <pre><code>$ keytool -genkey -v -keystore my-key.keystore -alias alias_name -keyalg RSA -keysize 2048 -validity 10000</code></pre> y copiar el codigo SHA que genera en Consola de Firebase -> tuerquita de configuración -> Configuración del proyecto -> huella digital del certificado</li>	
		</ol>
		<h4>Configuración</h4>
<pre><span class="bold">layout.xml</span><code>&lt;com.google.android.gms.common.SignInButton
	android:id=&quot;@+id/sign_in_button&quot;
	android:layout_width=&quot;wrap_content&quot;
	android:layout_height=&quot;wrap_content&quot;
/&gt;</code></pre>
<pre><span class="bold">Login.java</span><code>public class MainActivity extends AppCompatActivity implements GoogleApiClient.OnConnectionFailedListener{ 
	private GoogleApiClient googleApiClient;
	private SignInButton signInButton;
	private int SIGN_IN_CODE;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.login_google);

		GoogleSignInOptions gso = new GoogleSignInOptions.Builder(GoogleSignInOptions.DEFAULT_SIGN_IN)
			.requestEmail() <span class="green bold">//Esta línea es opcional, por si quiero el mail del usuario</span>
			.build();

		googleApiClient = new GoogleApiClient.Builder(this)
			.enableAutoManage(this, this)
			.addApi(Auth.GOOGLE_SIGN_IN_API)
			.build();

		signInButton = (SignInButton) findViewById(R.id.sign_in_button);
		signInButton.setOnClickListener(new View.OnClickListener(){
			<span class="green bold">@Override</span>
			public void onClick(View view) {
				Intent intent = Auth.GoogleSignInApi.getSignInIntent(googleApiClient);
				startActivityForResult(intent,SIGN_IN_CODE);
			}
		});
	}

	<span class="green bold">@Override</span>
	public void onConnectionFailed(@NonNull ConnectionResult connectionResult) {}

	<span class="green bold">@Override</span>
	protected void onActivityResult(int requestCode, int resultCode, Intent data) {
		super.onActivityResult(requestCode, resultCode, data);
		if(requestCode == SIGN_IN_CODE){
			GoogleSignInResult result = Auth.GoogleSignInApi.getSignInResultFromIntent(data);
			manejaResultado(result);
		}
	}

	private void manejaResultado( GoogleSignInResult result ){
		if(result.isSuccess()){
			Toast.makeText(this, "Exito en el Login",Toast.LENGTH_SHORT).show();
		}else{
			Toast.makeText(this, "Error en el Login",Toast.LENGTH_SHORT).show();
		}
	}</code></pre>
    <h3>Recuperar los datos del usuario logueado con google</h3>
    <pre><span class="bold">SecondActivity.java</span><code>@Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login_google_second_activity);

        photoimageView1 = findViewById(R.id.photoImageView1);
        nombreTextView = findViewById(R.id.nombre);
        emailTextView = findViewById(R.id.email);
        id = findViewById(R.id.texto);

        GoogleSignInOptions gso = new GoogleSignInOptions.Builder(GoogleSignInOptions.DEFAULT_SIGN_IN)
                .requestEmail()
                .build();

        googleApiClient = new GoogleApiClient.Builder(this)
                .enableAutoManage(this, this)
                .addApi(Auth.GOOGLE_SIGN_IN_API, gso)
                .build();
    }

    public void desloguearse(View v){

    }

    @Override
    protected void onStart() {
        super.onStart();

        OptionalPendingResult&lt;GoogleSignInResult&gt; opr = Auth.GoogleSignInApi.silentSignIn(googleApiClient);
        if(opr.isDone()){
            GoogleSignInResult result = opr.get();
            manejarResult(result);
        }else {
            opr.setResultCallback(new ResultCallback&lt;GoogleSignInResult&gt;() {

                @Override
                public void onResult(@NonNull GoogleSignInResult googleSignInResult) {
                    manejarResult(googleSignInResult);
                }
            });
        }
    }
    private void manejarResult(GoogleSignInResult result){
        if(result.isSuccess()){
            GoogleSignInAccount account = result.getSignInAccount();
            nombreTextView.setText(account.getDisplayName());
            emailTextView.setText(account.getEmail());
            id.setText(account.getId());
        }else{
            startActivity(new Intent(this, SecondActivity.class));
        }
    }</code></pre>
	<h3 id="login_con_fb">Login con Facebook</h3>
	<ol>
		<li>Iniciamos sesión en <a href="https://developers.facebook.com/" target="_blank">developers.facebook.com</a>. La documentación global está en <a target="_blank" href="https://developers.facebook.com/docs/facebook-login/android/?locale=es_ES">este enlace</a>.</li>
		<li>Mis aplicaciones -> Agregar una aplicación</li>
		<li>Panel -> Elegir plataforma -> Android -> Añadimos al build.gradle la dependencia que se nos indica <pre><code>compile 'com.facebook.android:facebook-android-sdk:[4,5)'</code></pre></li>
		<li>Pegamos Añadimos el facebook id a nuestra aplicación: <pre><span class="bold">res/values/strings.xml</span><code>&lt;string name=&quot;facebook_app_id&quot;&gt;1508558065902615&lt;/string&gt;</code></pre></li>
		<li>Modificamos el AndroidManifest.xml: <pre><code>&lt;meta-data android:name=&quot;com.facebook.sdk.ApplicationId&quot; android:value=&quot;@string/facebook_app_id&quot;/&gt;</code></pre></li>
		<li>Introducimos en la página web los datos que se nos solicitan y que podemos recuperar de nuestra aplicación Android.</li>
		<li>Seguimos las instrucciones que se nos indican apra generar un Key Hash.</li>
	</ol>
	<p>Creamos una clase que hereda de Application y que tendrá la siguiente línea en el onCreate:</p>
	<pre><code>AppEventLogger.activateApp(this)</code></pre>
	</div></article>

	<article><div>
	<h2 id="draw">Dibujar</h2>
<h3 id="dibujar">Ejercicio - Dibujar un círculo</h3>
<pre><span class="bold">res/layout/main.xml</span><code><span class="green">...</span>
&lt;com.pablomonteserin.Vista android:layout_width=&quot;match_parent&quot; android:layout_height=&quot;match_parent&quot; /&gt;
<span class="green">...</span></code></pre>
<pre><span class="bold">com.pablomonteserin.Vista.java</span><code>public class Vista extends View{
	Paint pincel;
	int color;
	<span class="green">public Vista(Context context){
		super(context);
		<span class="red">iniciar();</span>
	}
	public Vista(Context context, AttributeSet attrs, int defStyle) {
		super(context, attrs, defStyle);
		<span class="red">iniciar();</span>
	}
	public Vista(Context context, AttributeSet attrs) {
		super(context, attrs);
		<span class="red">iniciar();</span>
	}</span>

	private void <span class="red">iniciar</span>(){
		pincel = new Paint();
		<span class="green">//Hay varias formas de definir los colores	
		//color = Color.argb(127, 0, 255, 0);
		//color = 0x7F00FF00;</span>
		color = Color.BLUE;
		pincel.setColor(color);
		pincel.setStrokeWidth(8);
		pincel.setStyle(Paint.Style.STROKE);
	}
	protected void onDraw(Canvas canvas){
		super.onDraw(canvas);
		canvas.drawCircle(150, 150, 100, pincel);
	}
}</code></pre>
<p>La clase vista debe tener tres constructores: <br>
El primero es para crear la vista desde código. Los otros dos son para inflar la vista llamándola desde un fichero xml.</p>
	<p>Hay que procurar no hacer ninguna instancia e incluso tener el mínimo código posible dentro del método onDraw(), ya que será llamado varias veces por segundo y relentizaría la aplicación.</p>
	<h3>Ejercicio - Dibujar  un Path (trazo)</h3>
	<p><span class="red bold">trazo</span> y <span class="red bold">pincel</span> son dos objetos de las clases Path y Paint respectivamente.</p>


	<div class="row">
		<div class="col-md-6">
		<pre><code>protected void onDraw(Canvas canvas){
	super.onDraw(canvas);
	<span class="red bold">trazo</span>.<span class="bold">addCircle(150, 150, 100, Path.Direction.CCW);</span>
	<span class="red">pincel</span>.setColor(Color.BLUE);
	pincel.setStrokeWidth(8);	
	pincel.setStyle(Paint.Style.STROKE);
	<span class="bold">canvas.drawPath(trazo, pincel);</span>
	pincel.setStrokeWidth(1);
	pincel.setStyle(Paint.Style.FILL);
	pincel.setTextSize(20);
	pincel.setTypeface(Typeface.SANS_SERIF);
	<span class="bold">canvas.drawTextOnPath(&quot;Pablo Monteser&iacute;n&quot;, trazo, 10, 40, pincel);</span>
}</code></pre>
		</div>
		<div class="col-md-6">
		<img class="img-fluid" src="img/circulo.svg" alt="pantallazo resultado circulo">
		</div>
	</div>
	

	<h3>Ejercicio - Dibujar siguiendo un path II</h3>

<div class="row">
	<div class="col-md-6">

	<p><span class="red bold">trazo</span> y <span class="blue bold">pincel</span> son dos objetos de las clases Path y Paint respectivamente. Sin embargo, no deben ser instanciados dentro del método onDraw(), ya que este es llamado varias veces por segundo y ralentizaría la aplicación.
</p>
<pre><code>protected void onDraw(Canvas canvas){
	super.onDraw(canvas);
	<span class="bold">trazo.moveTo(50, 100);
	<span class="red bold">strazo</span>.cubicTo(60, 70, 150, 90, 200, 110);
	<span class="red bold">strazo</span>.lineTo(300, 200);</span>
	canvas.drawColor(Color.YELLOW);
	<span class="blue bold">pincel</span>.setColor(Color.BLUE);
	<span class="blue bold">pincel</span>.setStrokeWidth(8);
	<span class="blue bold">pincel</span>.setStyle(Style.STROKE);
	<span class="bold">canvas.drawPath(trazo, pincel);</span>
	<span class="blue bold">pincel</span>.setStrokeWidth(1);
	<span class="blue bold">pincel</span>.setStyle(Style.FILL);
	<span class="blue bold">pincel</span>.setTextSize(20);
	<span class="blue bold">pincel</span>.setTypeface(Typeface.SANS_SERIF);
	<span class="bold">canvas.drawTextOnPath(&quot;Pablo Monteser&iacute;n&quot;, <span class="red bold">trazo</span>, 10, 40, <span class="blue bold">pincel</span>);</span>
}</code></pre>
	</div>
	<div class="col-md-6">
	<img class="img-fluid" src="img/trazo.svg" alt="resultado final trazo">
	</div>
</div>



	<h3><span class="text-dark">Ejercicio:</span> Dibujar un rectángulo</h3>
<pre><code>protected void onDraw(Canvas canvas) {
	super.onDraw(canvas);
	pincel.setColor(Color.BLUE);
	pincel.setStrokeWidth(8);
	pincel.setStyle(Paint.Style.STROKE);
	canvas.drawRect(0, 0, 200, 300, pincel);
}</code></pre>
	<h3><span class="text-dark">Ejercicio:</span> Dibujar un rectángulo con relleno</h3>
<pre><code>protected void onDraw(Canvas canvas) {
	super.onDraw(canvas);
	pincel.setColor(Color.BLUE);
	pincel.setStrokeWidth(8);
	pincel.setStyle(Paint.Style.STROKE);
	canvas.drawRect(10, 10, 200, 50, pincel);
	pincel.setColor(Color.RED);
	pincel.setStyle(Paint.Style.FILL);
	canvas.drawRect(12,12,198,48, pincel);
}</code></pre>
<h3>Recuperar atributos del xml</h3>
<pre><code>private void iniciar(Context context, AttributeSet attrs){
	pincel = new Paint();
	TypedArray attributes = context.obtainStyledAttributes(attrs, R.styleable.Monteserin_circle);
	int color = attributes.getColor(R.styleable.<span class="blue bold">Monteserin_circle_monteserin_color</span>, Color.GREEN);
	pincel.setColor(color);
}</code></pre>
<pre><span class="bold">res/values/attrs.xml</span><code>&lt;resources&gt;
    &lt;declare-styleable name=&quot;<span class="blue bold">Monteserin_circle</span>&quot;&gt;
        &lt;attr name=&quot;<span class="bold blue">monteserin_color</span>&quot; format=&quot;color&quot; /&gt;
    &lt;/declare-styleable&gt;
&lt;/resources&gt;</code></pre>
<h3>Definir el tamaño del Canvas</h3>

<div class="row">
	<div class="col-md-6">

	<p>Por defecto, el tamaño de una vista si no definimos otra cosa, será todo el alto de la pantalla. Por tanto, si ponemos dos elementos seguidos, el segundo no se verá porque el primero ocupará toda la pantalla.</p>
<p>La solución es definir una altura específica al escribir el código en el xml, o sobreescribir el siguiente método en el archivo de la vista:</p>
	</div>
	<div class="col-md-6">
		
<pre><code> protected void onMeasure(int widthMeasureSpec, int heightMeasureSpec) {

<span class="green">//Estos valores definirán el tamaño de la vista</span>
int desiredWidth = 100;
int desiredHeight = 50;

int widthMode = MeasureSpec.getMode(widthMeasureSpec);
int widthSize = MeasureSpec.getSize(widthMeasureSpec);
int heightMode = MeasureSpec.getMode(heightMeasureSpec);
int heightSize = MeasureSpec.getSize(heightMeasureSpec);

int width;
int height;

<span class="green">//Measure Width</span>
if (widthMode == MeasureSpec.EXACTLY) {
	<span class="green">//Must be this size</span>
	width = widthSize;
} else if (widthMode == MeasureSpec.AT_MOST) {
	<span class="green">//Can't be bigger than...</span>
	width = Math.min(desiredWidth, widthSize);
} else {
	<span class="green">//Be whatever you want</span>
	width = desiredWidth;
}

<span class="green">//Measure Height</span>
if (heightMode == MeasureSpec.EXACTLY) {
	<span class="green">//Must be this size</span>
	height = heightSize;
} else if (heightMode == MeasureSpec.AT_MOST) {
	<span class="green">//Can't be bigger than...</span>
	height = Math.min(desiredHeight, heightSize);
} else {
	<span class="green">//Be whatever you want</span>
	height = desiredHeight;
}

<span class="green">//MUST CALL THIS</span>
setMeasuredDimension(width, height);
}</code></pre>
	</div>
</div>


	<h3><span class="text-dark">Ejercicio:</span> Repintar con OnTouchEvent</h3>
<p>Al pulsar sobre un rectángulo, este deberá repintarse en una posición diferente.</p>
<pre><code>@Override
public boolean onTouchEvent(MotionEvent event) {
	<span class="red bold">x</span><span class="bold"> = event.getX();</span>
	<span class="red bold">y</span><span class="bold"> = event.getY();</span>
	<span class="green">//Fuerzo el repintado</span>
	this.invalidate();
	return super.onTouchEvent(event);
}</code></pre>

<h3>El relleno del rectángulo crece con un click del ratón</h3>
	<pre>
		<code>
protected void onDraw(Canvas canvas) {
		super.onDraw(canvas);
		pincel.setColor(Color.BLUE);
		pincel.setStrokeWidth(8);
		pincel.setStyle(Style.STROKE);
		canvas.drawRect(10, 10, getWidth(), 50, pincel);
		pincel.setColor(Color.RED);
		pincel.setStyle(Style.FILL);
		canvas.drawRect(12,12,getWidth()*this.width-3,48, pincel);
	}

	public void aumentarWidth(){
		if(this.width&lt;1){
			this.width = (float) (this.width+0.1);
			<span class="purple">this.postInvalidate();</span>
		}
	}</code></pre>
	<p class="purple">Este método fuerza a volver a llamar al método onDraw para que el dibujo se repinte. Si no lo llamamos, el repintado no estará asegurado.</p>
	


	

	<h3>Hacer un juego sencillo</h3>

<div class="row">
	<div class="col-md-6">

	<p>Se trata de un juego en el que un monstruo (una clase que hereda de ImageView) va cambiando de posición en la pantalla y cada vez que pulsamos sobre él aumenta un marcador. </p>
	</div>
	<div class="col-md-6">
	<p>Para realizar una tarea cada x tiempo utilizaremos:</p>
<pre><code>private Handler handler;
<span class="green">...</span>
handler = new Handler();
handler.postDelayed(runnable, 1000);

<span class="red green">...</span>
private Runnable runnable = new Runnable() {
	@Override
	public void run() {
		setRandomPosition(iv);
		handler.postDelayed(this, 1000);
	}
};

public void setRandomPosition(ImageView a1){
	int x = random.nextInt(width);
	int y = random.nextInt(height);
	a1.setX(x);
	a1.setY(y);
}</code></pre>
	
	</div>
</div>



	
<h4>Detectar cuando se ha cargado la vista para recuperar tamaños y posiciones</h4>
	<pre><code>@Override
public void onWindowFocusChanged(boolean hasFocus) {
	super.onWindowFocusChanged(hasFocus);
	final View content = getWindow().findViewById(Window.ID_ANDROID_CONTENT);

	view_width = content.getWidth()-a1.getWidth();
	view_height = content.getHeight()-a1.getHeight()-getStatusBarHeight();
}

public int getStatusBarHeight(){
        Rect rectangle= new Rect();
        Window window= getWindow();
        window.getDecorView().getWindowVisibleDisplayFrame(rectangle);
        int statusBarHeight = rectangle.top;
        int contentViewTop = window.findViewById(Window.ID_ANDROID_CONTENT).getTop();
        int titleBarHeight= contentViewTop - statusBarHeight;
        return statusBarHeight+titleBarHeight;
}</code></pre>
</div></article>
<article><div>
<h2>Publicar</h2>	
	<h3 id="publicar">Publicar la aplicación en Google Play</h3>
	<ol>
		<li>Eliminamos todas las llamadas a las trazas (Log). Si no lo hacemos, la aplicación funciona pero el usuario de la misma tendría acceso a las trazas mediante logCat.</li>
		<li>Android Manifest → Pestaña Application → Debuggable: false</li>
		<li>Android Manifest → Pestaña Manifest → Aumentamos “Version code” y “Version Name”, según proceda.</li>
		<li>Android Manifest → Pestaña AndroidManifest.xml → Cambiamos el nodo &lt;uses-sdk android:minSdkVersion=&quot;8&quot; /&gt; (Buscar infor para saber en función de q)</li>
		<li>AndroidManifest.xml → Pestaña Manifest → Exporting → Use the Export Wizard → Next → Create New keyStore
Location: ruta en mi equipo dónde almacenaré el certificado. <br>

Las siguientes veces que quiera subir mi aplicación al AndroidMarket.xml utilizaré el keyStore que se me va a proporcionar. Por tanto, es importante no extraviarlo.
→ Next → El password requerido ahora será el mismo que el de la pantalla anterior. Validity: 25 years (por ejemplo).  → Next → Indico la ruta dónde se guardará el fichero .apk del programa. → Finish → El archivo de certificado y el .apk de la aplicación son salvados en las rutas indicadas.</li>
<li>Hago las fotos (resolución 72 pixeles/inch): <br>
<ul>
	<li>feature.png (1024x500) foto que estará en la androidMarket web.</li>
	<li>promo.png (la misma foto que feature.png, pero con resolución 180x120) foto que estará en la androidMarket en un dispositivo de telefonía móvil.</li>
	<li>icon.png (512x512). El icono de la aplicación y que sustituirá al icon.png que por defecto coloca Android. <br>
También habrá que salvar el icono de android en las carpetas drawable-hdpi(72x72), drawable-mdpi(48x48), drawable-ldpi(36x36)</li>
</ul>
<li>Hago un par de pantallazos de la aplicación funcionando:
Arranco el emulador → voy a la pantalla de la que quiero sacar el pantallazo → voy a eclipse → window → show view → devices → selecciono el emulador → icono de screen capture</li>
<li>Vamos a <a href="https://market.android.com/publish/">https://market.android.com/publish/</a> y seguimos los pasos indicados.</li>
<li>Cuando lleguemos a una página con dos pestañas (Product details y APK files), debemos entrar en APK files para activar nuestro .apk  subido.</li>
</ol>
</li>
	<h3 id="certificado">Certificado de aplicaciones</h3>
	<p>Toda aplicación de Android, para poder ser desplegada debe ir firmada con un certificado.</p>
	<p>El SDK de Android crea su propio certificado de debug, que será diferente para cada ordenador.</p>
	<p>Por tanto si trato de instalar dos aplicaciones desde el mismo ordenador y estas tienen los mismos nombre de paquetes, para android estaré reinstalando la aplicación primera, en vez de instalando una nueva.</p>
	<p>Por otro lado, si los certificados son diferentes pero los paquetes son iguales, obtendré un error al desplegar la aplicación.</p>
	<h3 id="error">Error típico – conflicto con el nombre del paquete repetido</h3>
	<p>Podemos cambiar el nombre del paquete en el AndroidManifest.xml de nuestro proyecto.</p>
	<h3 id="eliminar_app">Eliminar una aplicación del Android Market</h3>
	<p>No es posible. Sólo es posible:</p>
<ul>
	<li>Despublicarla (en cuyo caso mantendríamos un conflicto con los nombres de los paquetes en caso de tenerlo con la aplicación que hemos despublicado).</li>
	<li>Actualizarla con otra aplicación totalmente diferente. Los nombres de paquetes no deben coincidir.</li>
</ul>
	<h3 id="debugar">Ejecutar y debugar una aplicación en el móvil</h3>
	<ol>
		<li>En el móvil: Ajustes → Aplicaciones → Desarrollo → Marco Depuración de USB.</li>
		<li>Debemos tener la pestaña Devices activa (menu Window → Preferences → Show View → Other → Devices). Seleccionamos el device correspondiente a nuestro teléfono móvil (que debe estar conectado al ordenador).</li>
	</ol>
<p class="notas">
	No puedo instalar dos aplicaciones que utilicen los mismos nombre de paquetes.  <br>
Para poder hacerlo debo desinstalar la que ya tengo instalada, o cambiar el nombre del paquete. 
</p>
	<h3 id="desinstalar">Desinstalar una aplicación del teléfono móvil desde consola</h3>
	<p>Habrá que hacerlo cuando hayamos instalado la aplicación y queramos volver a instalarla sobrescribiendo la vieja aplicación.</p>
	<pre><code>
/android-sdk-linux_x86/platform-tools$ <span class="bold">./adb uninstall com.pablomonteserin</span></code></pre>
</div></article>
</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>