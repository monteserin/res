<?php 
$titulo_curso="Java JSE ☕️☕️☕️";
$meta_description = 'Curso con videotutoriales y ejercicios descargables de este lenguaje de programación tan extendido en sectores como banca y seguros.';
$img_curso = 'curso-java.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
include $path."diapos_theme/head.php";

add_action( 'genesis_after_header', function(){
?>

<section id="amor" class="verIndice">
				<article id="inicio_del_documento" class="indice">

	<ol>
		<li><a href="#introduccion">Introducción</a></li>
		<li><a href="#que_es">¿Qué es?</a></li>

				<li><a href="#eclipse">Eclipse</a></li>

		<li><a href="#resolucion-problemas">Resolución de problemas</a></li>

		<li><a href="#clases">Clases</a></li>
		
<li><a href="#objetos">Objetos</a></li>

			<li><a href="#hola-mundo">Hola mundo</a></li>

			<li><a href="#comentarios">Comentarios</a></li>
			<li><a href="#variables">Variables</a></li>
			<li><a href="#constantes">Constantes</a></li>

			<li><a href="#operadores">Operadores</a></li>
<li><a href="#lectura-datos">Lectura de datos</a></li>

<li><a href="#" class="hasChildren">Estructuras de control</a>
<ol>
<li><a href="#if">Estructuras de control: if</a>
</li>
<li><a href="#switch">Switch</a>
</li>
<li><a href="#bucle-for">Estructura de control: bucle for</a>
</li>

<li><a href="#bucle-while">Estructura de control: bucle while</a>
</li>


</ol>

</li>	

			<li><a href="#metodos">Métodos</a>
</li>
<li><a href="#modificador-static">Modificador static</a>
						<li><a href="#arrays">Arrays</a></li>

			<li><a href="#ahorcado">Ejercicio – juego del ahorcado</a></li>
			<li><a href="#tres-en-raya">Ejercicio - tres en raya</a></li>

			<li><a href="#modificadores-acceso">Modificadores de acceso</a>
				
		</li>
		
			<li><a href="#constructores">Constructores</a>
					</li>
			
			<li><a href="#herencia">Herencia</a></li>
			
			<li><a href="#polimorfismo">Polimorfismo</a>
			</li>

			<li><a href="#sobrecarga-sobreescritura">Sobrecarga y sobreescritura</a>
			</li>


			
			
			<li><a href="#abstraccion">Abstracción</a></li>
			<li><a href="#interfaces">Interfaces</a></li>

			<li><a href="#clases-internas">Clases internas</a>
	</li>
			<li><a href="#garbage-collector">Garbage Collector</a></li>
			<li><a href="#string-performance">String performance</a></li>
						<li><a href="#encapsulamiento">Encapsulamiento</a></li>

			<li><a href="#contenedores">Contenedores</a>
			</li>
			<li><a href="#genericos">Genéricos</a>

			</li></li>
			<li><a href="#crud-sin-base-datos">Ejercicio alta, baja, modificación y consulta en un ArrayList</a></li>

						<li><a href="#juego-oca">Ejercicio – juego de la oca</a></li>

			<li><a href="#recorrer-map">Recorrer un map</a></li>

					<li><a href="#sobreescritura-equals">Sobreescritura del equals</a></li>

					<li><a href="#sobreescritura-hashcode">Sobreescritura del hashcode</a></li>

					<li><a href="#sobreescritura-compareto">Sobreescritura del compareTo</a></li>

			<li><a href="#excepciones">Excepciones</a>

			</li>
			<li><a href="#enumeraciones">Enumeraciones</a></li>
			<li><a href="#hilos">Hilos</a></li>

		</ol>
				</article>
		
</section>

<main class="curso">
<?= drawH1WithImg() ?>

<article>
	<div>
<h2 id="introduccion">Introducción al curso de Java</h2>
<p>Java es un lenguaje de programación que está ampliamente extendido en macroproyectos que agrupan a gran cantidad de desarrolladores durante gran cantidad de tiempo. Tuve la oportunidad de trabajar con Java desarrollando aplicaciones en los sectores de Banca y seguros.</p>

<p>Por tanto, es un lenguaje de programación con una amplia demanda, y a mi juicio, uno de los pocos que te permite iniciar tu carrera como desarrollador a pesar de no tener experiencia. Buscando en portales de empleo, es posible encontrar ofertas en las que no es requisito tener experiencia profesional previa. Esto es algo que rara vez ocurre con otros lenguajes de programación.</p>

<p>Además, es posible certificarte como desarrollador Java, con lo cual podrás suplir tu falta de experiencia ptogrdionsl con una o varias certificaciones. No todas las empresas le dan valor a estas certificaciones, pero me he encontrado casos en los que directamente, tenerla era un requisito fundamental para entrar en plantilla, así que si te lo puedes permitir, probablemente sea una buena decisión preparte para sacarla.</p>

</div>
</article>
		<article><div><h2 id="que_es">¿Qué es Java?</h2>

	
		<ul>
			<li>Lenguaje de programación orientado a objetos.</li>
			<li>Creado por la empresa Sun Microsystems, actualmente es propiedad de Oracle.</li>
			<li>Su base es el lenguaje C++.</li>
			<li>Diseñado para ser independiente de la plataforma de ejecución.</li>
		</ul>
		
<h4>Denominación</h4>

<div class="row">
	<div class="col-md-6">
	<p>Desde v1.2 hasta v1.5 se denominó “Java 2” y se dividió en:</p>
<ul><li>Java 2 Platform Standard Edition (J2SE) . Es la base para todas</li>
	<li>Java 2 Platform Enterprise Edition (J2EE).</li>
	<li>Java 2 Platform Mobile/Micro Edition (J2ME).</li>
	
</ul>
	
	</div>
	<div class="col-md-6">
	<p>A partir de la versión 5, quita el 2 de su nombre.</p>
<ul><li>Java Platform, Standard Edition, Java SE.</li>
	<li>Java Platform, Enterprise Edition, Java EE.</li>
	<li>Java Platform, Mobile Edition, Java ME.</li>
	</ul>
	

</div>
</div>


	</div>
		</article><article><div><h2 id="tipos_apps_java">Tipos de aplicaciones Java:</h3>

		<ul>
			<li><strong>Aplicación Standalone</strong> (escritorio)
				<ul>
					<li>Programa ejecutado en local mediante la JVM.</li>
					<li>No requiere navegador para su ejecución.</li>
				</ul>
			</li>
			<li><strong>Applet</strong>
				<ul>
					
<li>Integrados dentro de una página Web. </li>
<li>El applet y la Web se ejecutan de forma local. </li>
				</ul>

			</li>

			<li><strong>Servlet</strong>
<ul>
	<li>Programa ejecutado en servidor</li>
	<li>Responde a las peticiones realizadas en                  
la web.</li>
</ul>
			</li>
		</ul>
	

	</div>
		</article><article><div><h2 id="jvm">La máquina Virtual Java (JVM)</h3>
<ol>
	<li>El código fuente se escribe en un archivo de texto plano con extensión Java.</li>
	<li>El código es compilado a archivos .class que contienen bytecodes. En el caso de Eclipse, estos ficheros se almacenan en la carpeta <span class="black bold">bin</span> del proyecto.
	</li>
	<li>Al ejecutar, la aplicación es interpretada por la JVM, transformando los bytecodes en código nativo para el tipo de procesador.</li>
</ol>


<img src="img/JVM.svg" alt="Java virtual machine jvm">
<p>La Máquina Virtual Java es el intérprete Java, es decir, es el mecanismo que reconoce el bytecode. Es propia de cada máquina.</p>
<p>El bytecode es independiente de la plataforma y es la JVM la que lo transforma.</p>
	
<?= getRes("video_premium abierto",247397860) ?>


	
</div>
</article><article><div><h2 id="jdk">JDK (Java Development Kit)</h3>
<div class="row">
	<div class="col-md-6">
	
<p>Llamado SDK hasta la versión 5. Luego, JDK.</p>

<p>El JDK se compone de: </p>

<ul>
	<li>Compilador java (ejecutable <strong>javac</strong>), documentación, bibliotecas, herramientas y ejemplos para el desarrollo.</li>
	<li>JRE (Java Runtime Enviroment, la máquina virtual). Es lo único que necesitan los clientes para ejecutar sus aplicaciones Java.</li>
</ul>

	</div>
	<div class="col-md-6">
	

<div class="centraditos">

<a class="recurso" target="_blank" href="http://www.oracle.com/technetwork/java/javase/downloads/index.html">Descarga JDK</a>
<?= getRes("video_premium abierto",247398811) ?>

</div>

	</div>
</div>


</div>
	</article><article><div><h2 id="links">Links de interés</h3>
<div class="row">
	<div class="col-md-6 overflow-hidden">
	
	<h3>API de Java: </h3>
<a target="_blank" href="http://docs.oracle.com/javase/6/docs/api/">http://docs.oracle.com/javase/6/docs/api/</a></p>

<p>Descarga de la API de Java: <br>
<a target="_blank" href="http://www.oracle.com/technetwork/java/javase/downloads/index.html#docs">http://www.oracle.com/technetwork/java/javase/downloads/index.html#docs</a></p>

<p>Ejemplos de uso: <br>
<a target="_blank" href="http://www.programcreek.com/java-api-examples/?action=index">http://www.programcreek.com/java-api-examples/?action=index</a></p>
	</div>
	<div class="col-md-6">
	
<h4>
	Certificación: </h4>
<p>Consta de 77 preguntas tipo test. Debemos acertar un 65% de las respuestas correctas. La duración del examen es 2h 30′ y tiene un coste de 212€.</p>
	<ul>
		<li><a target="_blank" href="http://www.testking.com/">testking.com</a></li>
		<li><a target="_blank" href="http://www.test-king.com/">test-king.com</a></li>
	</ul>


<p><a target="_blank" href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=654&get_params=p_id:154" target="_blank">Buscador de centros homologados para certificarse</a></p>

<p><a target="_blank" href="http://enthuware.com/" target="_blank">Aplicación con preguntas similares a las de la certificación</a></p>

<?= getRes("video_premium abierto",247399313) ?>

	</div>
</div>





</div>
		</article><article><div><h2 id="eclipse">Eclipse</h2>


		<div class="row">
			<div class="col-md-6">

			<?= getRes("video_premium",247442201) ?>

<p>Es el editor de código más concretamente IDE (Integrated development Enviroment) que vamos a usar.</p>
<p><a href="http://www.eclipse.org/downloads/" target="_blank" class="recursos">Descarga</a></p>


			</div>
			<div class="col-md-6">
			<p class="font-weight-bold">Existen otros:</p>
	<p>De código libre:</p>
	<ul>
		<li><a href="https://netbeans.org/downloads/" target="_blank">Netbeans</a></li>
		<li><a href="http://www.bluej.org/" target="_blank">BlueJ</a></li>
		<li><a href="http://www.drjava.org/" target="_blank">Dr. Java</a></li>
		<li><a href="https://spring.io/tools" target="_blank">Spring Toolsuite</a></li>
		<li><a href="http://www.jgrasp.org/" target="_blank">jGRASP</a></li>
	</ul>
	<p>De código propietario</p>
	<ul>
		<li><a href="https://www.jetbrains.com/idea/" target="_blank">IntelliJIDEA</a></li>
		<li><a href="https://www.embarcadero.com/" target="_blank">Jbuilder</a></li>
	</ul>
			</div>
		</div>
	

</div>
		</article><article><div><h2 id="resolucion-problemas">Resolución de problemas</h2>

		<div class="row">
			<div class="col-md-6">
			<p>Precisaremos capacidad de abstracción.</p>
	<p><strong>Abstracción</strong>:Capacidad que permite representar las características esenciales (atributos y propiedades) de un objeto sin 
preocuparse de las restantes características (no esenciales).</p>
<?= getRes("video_premium abierto",247400246) ?>

			</div>
			<div class="col-md-6">
			<img src="img/abstracion.jpg" alt="Abstracción en programación" class="img-fluid">

			</div>
		</div>





<p>Ejemplo: Tenemos un grupo de gatitos que o están jugando o están durmiendo. Queremos pasar este situación al mundo de la programación.</p>
<ol>
	<li>Análisis del problema
		<ul>
			<li>Conocer los datos de entrada y salida</li>
			<li>Entender como se realiza la transformación</li>
			<li><img src="img/Blue-Cat.svg" alt="lindo gatito" style="max-width: 100px; width:100%"></li>
		</ul>
	</li>
	<li>Construcción del algoritmo
		<ul>
			<li>Se puede expresar mediante gráficos o pseudocódigo</li>
			<li><img src="img/gato.svg" alt="gato"></li>
		</ul>
	</li>
	<li>Codificación (programar)
		<ul>
			<li>Creamos el código fuente</li>
			<li><pre><span class="black bold">Gato.java</span><code>public class Gato{
	String nombre;
	int edad;

	public void jugar(){
		...
	}
	public void dormir(){
		...
	}
}</code></pre></li>
		</ul>
	</li>
	<li>Compilar
		<ul>
			<li>Traducimos el código fuente a código máquina, que será entendido por el ordenador.</li>
		</ul>
	</li>
</ol>




</div>
		</article><article><div><h2 id="clases">Clases</h2>

<div class="row">
	<div class="col-md-6">

	<p>Plantilla o molde a partir de la cual se construye un objeto. Una clase contiene:</p>
	<ul>
		<li><strong>atributos</strong>: propiedades de los objetos (edad, marca, altura, peso...)</li>
		<li><strong>métodos</strong>: acciones que pueden realizar los objetos (corrar, saltar, traducir, pensar...)</li>
	</ul>


	</div>
	<div class="col-md-6">
	<?= getRes("video_premium abierto",247441825) ?>


	</div>
</div>


<div class="row">
	<div class="col-md-6">

	<pre><code>public class Gato{
	String nombre;
	int edad;

	public void jugar(){
		...
	}
	public void dormir(){
		...
	}
}</code></pre>
	</div>
	<div class="col-md-6">
	<pre><code>&lt;modificador&gt; class &lt;NombreClase&gt;{
	<span class="green">// Declaración de atributos</span>
	&lt;modificador&gt; &lt;tipo&gt; &lt;atributo&gt;;
	<span class="green">// Declaración de métodos</span>
	&lt;modificador&gt; &lt;tipo&gt; &lt;método&gt; (&lt;args&gt;){
		... 
	}
}</code></pre>
	</div>
</div>
	

</div>
		</article><article><div><h2 id="objetos">Objetos</h2>

		<div class="row">
			<div class="col-md-6">
			<p>Se podría decir que un objeto (o instancia de una clase) es una clase con valores concretos.</p>

			<div style="display: flex;text-align: center;">
		<div>
			<p style="margin-bottom: 0"><strong>Clase</strong>:</p>
	<img src="img/gato.svg" alt="Clase Java Gato" style="max-width:200px">
		</div>
		<div>
			<p style="margin-bottom: 0"><strong>Objeto</strong>;</p>
	<img class="img-fluid" src="img/instanciaGato.svg" alt="Clase Java Gato"> 
		</div>
	</div>

			</div>
			<div class="col-md-6">

			

	<h3>Nomenclatura</h3>
	<ul>
		<li><span class="font-weight-bold">Paquetes</span>:	estoesunpaquete</li>
		<li><span class="font-weight-bold">Clases, interfaces y constructores</span>: EstoEsUnaClase</li>
		<li><span class="font-weight-bold">Métodos</span>: estoEsUnMetodo()</li>
		<li><span class="font-weight-bold">Variables</span>: estoEsUnaVariable</li>
		<li><span class="font-weight-bold">Constante</span>: ESTO_ES_UNA_CONSTANTE</li>
	</ul>

	<?= getRes("video_premium abierto",247401933) ?>
			</div>
		</div>


	







</div>
		</article><article><div><h2 id="hola-mundo">Hola Mundo</h2>

		<div class="row">
			<div class="col-md-6">


			<pre><code>
public <span class="red bold">class Programa</span> {
	<span class="green">// Este método es el punto de inicio de toda aplicación JSE</span>
	<span class=" bold">public static void main(String[] args) {</span>

		<span class="red bold">System</span>.<span class="purple bold">out.println</span>(<span class="brown bold">"Hola"</span>);
	
	}
}</code></pre>


			</div>
			<div class="col-md-6">

			<p><span class="bold">System.out.println();</span> <br>
Nos permite escribir trazas en la consola.
</p>

<p>El atajo para ejecutar una aplicación J2SE en eclipse es: <br>
<span class="fonw-wight-boldbold">alt + shift + x + j</span></p>

<p>En eclipse, escribiendo: </p>
<ul>
	<li><span class="i">sysout</span> y pulsando ctrl+espacio se nos escribe automáticamente la línea: System.out.println()</li>
<li><span class="i">main</span> y pulsando ctrl+espacio se nos escribe automáticamente el método public static void main.</li>
</ul>

			</div>
		</div>

		
	



</div>
	</article><article><div><h2 id="comentarios">Comentarios</h2>
<div class="row">
<div class="col-md-6">
<pre><code>public class B_comentarios {
	public static void main(String[] args) {
		<span class="green">//Esto es un comentario de una sola linea
		/*
		 * Y esto un comentario de varias lineas
		 * */</span>
		System.out.println(&quot;Hola Mundo2&quot;);
	}
}

Output:
Hola Mundo2</code></pre>
</div>
<div class="col-md-6">
<?= getRes("video_premium abierto",247402939) ?>

</div>
	
</div>
	


</div>
	</article><article><div><h2 id="variables">Variables</h3>

	<?= getRes("video_premium abierto",247401449) ?>
	<p>Una variable es un espacio de memoria cuya información puede variar durante la ejecución de la aplicación.</p>
	<p>En java las variables son altamente tipadas.</p>
	<div class="row">
		<div class="col-md-6">
		<pre><span class="font-weight-bold">Declaración:</span><code>int n;
int a,b,c;
&lt;tipo&gt; &lt;identificador&gt;; 
&lt;tipo&gt; &lt;identificador_1&gt;,  &lt;identificador_2&gt;...;</code></pre>
		</div>
		<div class="col-md-6"><pre><span class="font-weight-bold">Asignación:</span><code>numero = 42;
<span class="red font-weight-bold">&lt;variable&gt;</span> = <span class="orange bold">&lt;expresi&oacute;n&gt;;</span></code></pre>

<p><span class="red font-weight-bold">La parte izquierda será una variable</span></p>
<p><span class="orange font-weight-bold">La parte derecha puede ser un literal, una variable, una función o una combinación de todos.</span></p>

</div>
	</div>
	

	<pre><span class="font-weight-bold">Ejemplos:</span><code>public class Variables {
	public static void main(String[] args) {
		String cadena = &quot;Soy una cadena&quot;;
		int i = 5;
		int j = 3;
		System.out.println(cadena);
		System.out.println(i+&quot; + &quot;+j);
		System.out.println(i+j);
		System.out.println(&quot;&quot;+i+j);
	}
}

<span class="green">Output:
Soy una cadena
5 + 3
8
53</span></code></pre>


		<h3 id="variables">Tipos de Variables</h4>

		


<div class="row">
	<div class="col-md-5"><h4>Primitivas</h4>
<ul>
	<li>Sus valores se almacenan en el <span class="red">Stack</span>.</li>
	<li>int i = 1; Crea una variable en el stack que con el nombre i le pone en binario el valor 1.</li>
	<li>Sólo puedo acceder al valor de i utilizando el nombre de la variable.</li>
</ul></div>
	<div class="col-md-5"><h4>Referencias a objetos. </h4>
<ul>
	<li>Sus valores se almacenan en el <span class="red">Heap</span>.</li>
	<li>La variable contiene la dirección en memoria del objeto, y no el propio objeto. Por tanto, es posible modificar un objeto mediante diferentes variables.</li>
</ul>
</div>
	<div class="col-md-2"><?= getRes("video_premium abierto",247401449) ?></div>
</div>


	


	

	

	<p class="bold">Stack y Heap: son dos zonas de memoria diferentes en la JVM.</p>

<div class="row">
	<div class="col-md-6">
	<p>Ej: <br>
int i = 3; <br>
StringBuffer cadenaModificable = new StringBuffer("Pepe");</p>
<?= getRes("video_premium",248875342) ?>
	</div>
	<div class="col-md-6">
	<img class="img-fluid" src="img/stack-heap.svg" alt="tipos de variables">

	</div>
</div>


			

	<h4>
		Características de las variables primitivas
	</h4>

	<div class="row">
		<div class="col-lg-10">


<div class="table-responsive">
		<table border="1px">
		<tr>
			<th>TYPE</th>
			<th>CONTAINS</th>
			<th>DEFAULT</th>
			<th>SIZE</th>
			<th>RANGE</th>
		</tr>
		<tr>
			<th>boolean</th>
			<td>true or false</td>
			<td>false</td>
			<td>1 bit</td>
			<td>NA</td>
		</tr>
		<tr>
			<th>char</th>
			<td>Unicode character</td>
			<td>\u0000</td>
			<td>16 bits</td>
			<td>\u0000 to \uFFFF</td>
		</tr>
		<tr>
			<th>byte</th>
			<td>Signed integer</td>
			<td>0</td>
			<td>8 bits</td>
			<td>-128 to 127</td>
		</tr>
		<tr>
			<th>short</th>
			<td>Signed integer</td>
			<td>0</td>
			<td>16 bits</td>
			<td>-32768 to 32767</td>
		</tr>
		<tr>
			<th>int</th>
			<td>Signed integer</td>
			<td>0</td>
			<td>32 bits</td>
			<td>-2147483648 to 2147483647</td>
		</tr>
		<tr>
			<th>long</th>
			<td>Signed integer</td>
			<td>0</td>
			<td>64 bits</td>
			<td>-9223372036854775808 to 9223372036854775807</td>
		</tr>
		<tr>
			<th>float</th>
			<td>IEEE 754 floating point</td>
			<td>0.0</td>
			<td>32 bits</td>
			<td>±1.4E-45 to ±3.4028235E+38</td>
		</tr>
		<tr>
			<th>double</th>
			<td>IEEE 754 floating point</td>
			<td>0.0</td>
			<td>64 bits</td>
			<td>±4.9E-324 to ±1.7976931348623157E+308</td>
		</tr>
	</table>
</div>
		</div>
		<div class="col-lg-2">
		<?= getRes("video_premium",248875353) ?>

		</div>
	</div>


	<h4>
		Problema de conversión de tipos
	</h4>

	<?= getRes("video_premium",248875361) ?>


	<p>Al convertir la información de un tipo de dato a otro tipo de dato en el que no cabe dicha información, el valor almacenado se verá modificado.</p>


	<div class="row">
		<div class="col-md-6">

		<pre><code>int int_x = 32767;
int int_y = 32768;
int int_z = 32769;
<span class="green">// El rango de un dato de tipo short llega hasta 32767</span>

short short_x = (short) int_x;
short short_y = (short) int_y;
short short_z = (short) int_z;

System.out.println("1 - Conversión a short del int 32767: " + short_x);
System.out.println("2 - Conversión a short del int 32768: " + short_y);
System.out.println("2 - Conversión a short del int 32769: " + short_z);

byte byte_x = (byte) int_x;
byte byte_y = (byte) int_y;
byte byte_z = (byte) int_z;

System.out.println("3 - Conversión a byte del int 32767: " + byte_x);
System.out.println("4 - Conversión a byte del int 32768: " + byte_y);
System.out.println("5 - Conversión a byte del int 100: " + byte_z);</code></pre>
		</div>
		<div class="col-md-6">
		<p class="green"><span class="green bold">Output</span>: <br>
1 - Conversi&oacute;n a short de 32767: 32767 <br>
2 - Conversi&oacute;n a short de 32768: -32768 <br>
2 - Conversi&oacute;n a short de 32769: -32767 <br>
3 - Conversi&oacute;n a byte de 32767: -1 <br>
4 - Conversi&oacute;n a byte de 32768: 0 <br>
5 - Conversi&oacute;n a byte de 100: 1 </p>
	<p>El rango del tipo de dato short es: -32768 to 32767 <br>
El rango del tipo de dato byte es: -128 to 127</p>
		</div>
	</div>
	
	<h4>Casting</h4>
	<p>Una primitiva grande puede almacenar la información de una de menor tamaño.</p>
	<p>Una primitiva pequeña puede almacenar la información de una de mayor tamaño, pero habrá pérdida de información.</p>
	<p><span class="blue">El tipo de la variable apuntadora</span> tiene que ser el mismo o más genérico que <span class="red">el tipo de la variable a la que apunta</span>.</p>
	<p><span class="blue">Animal</span> animal = <span class="red">new Gato();</span></p>
	<img src="img/tipos_primitivas.svg" alt="tipos de primitivas">

	<h4>Ejercicios variables</h4>
		<ol>
		<li>
			
		<div class="row">
			<div class="col-md-6">
			<p>Declarar una variable 'i' de tipo int, una variable 'd' de tipo double y una variable 'c' de tipo char. Asignar un valor a cada una. Mostrar por pantalla el valor de cada variable utilizando tres llamadas a System.out.println(). Tener en cuenta que:</p>
			<ol>
				<li>Para dar valor a una variable de tipo double ponemos una "d" al final del valor.</li>
				<li>Para dar valor a una variable de tipo char, esta debe ir entre comillas simples.</li>
			</ol>

			</div>
			<div class="col-md-6">
			<div class="centraditos">
	<?= getRes("video_premium",248875375) ?>
	
	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/variables/ejerciciosvariables/DeclaracionVariables.java', 'Declarar variables') ?>


	</div>

			</div>
		</div>
		
		

		
</li>
		

<li>
	
<div class="row">
	<div class="col-md-6">
	<p>Intercambiar el contenido de dos variables</p>

	<pre><code>int a = 5;
int b = 7;
<span class="green">// aquí hay que poner código</span>
System.out.println(a); <span class="green">//Debería mostrar 7</span>
System.out.println(b); <span class="green">//Debería mostrar 5</span></code></pre>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
<?= getRes("video_premium",248889662) ?>
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/variables/ejerciciosvariables/IntercambiarValores.java', 'Intercambiar valores') ?>

</div>

	</div>
</div>

</li>
		</ol>

</div>
		</article><article><div><h2 id="constantes">Constantes</h2>

<div class="row">
	<div class="col-md-6">
	<p>Una constante es un espacio de memoria cuya información no puede variar durante la ejecución del programa.</p>
	<p>Van precedidas del modificador final.</p>
	<p>Si descomento la línea, obtendré un error.</p>
<pre><code>final double PI = 3.14;
System.out.println(PI);
<span class="green">//PI=5;</span></code></pre>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248875399) ?>
	</div>
</div>

	




</div>
	</article><article><div><h2 id="operadores">Operadores</h2>


</div>
	</article><article><div><h3 id="concatenacion">Operador de concatenación</h3>

<div class="row">
	<div class="col-md-6">
	<pre><code>System.out.println("amor " + "Juan");
System.out.println("amor " + nombre);</code></pre>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248889843) ?>
	</div>
</div>





	<h4><span class="text-dark">Ejercicio:</span> Saludo</h4>
<div class="row">
	<div class="col-md-6">
	<p>Que se muestre un mensaje que diga: “Buenas tardes Jose”, dónde Jose será el valor de una variable.</p>

	</div>
	<div class="col-md-6">
	<div class="centraditos">
<?= getRes("video_premium",248889856) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/operadores/EjercicioSaludo.java', 'Ver solución') ?>

</div>

	</div>
</div>


</div>
</article><article><div><h2 id="aritmeticos">Operadores aritméticos</h3>

<div class="row">
	<div class="col-md-6">

	<pre><code>System.out.println(7+2);
System.out.println(7-2);
System.out.println(7*2);
System.out.println(7/2);
System.out.println(7%2);</code></pre>

	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248889867) ?>
	</div>
</div>



</div>
</article><article><div><h2 id="logicos">Operadores lógicos o booleanos</h3>
<div class="row">
	<div class="col-md-6">
	<pre><code>System.out.println(7>2);
System.out.println(7&lt;2);
System.out.println(7>=2);
System.out.println(7<=2);
System.out.println(7==2);
System.out.println(7!=2);</code></pre>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248889877) ?>
	</div>
</div>





</div>
	</article><article><div><h2 id="lectura-datos">Lectura de datos</h2>



<div class="row">
	<div class="col-md-6">
	<p class="font-weight-bold">Lectura del texto introducido por teclado.</p>
	<pre><code><span class="font-weight-bold">Scanner lector = new Scanner(System.in);</span>
System.out.println(&quot;Introduzca un texto, por favor: &quot;);
<span class="font-weight-bold">String variable = lector.next();</span>	
System.out.println(&quot;Lectura utilizando la clase Scanner: &quot; + variable);</code></pre>
	</div>
	<div class="col-md-6"><?= getRes("video_premium",248889884) ?>
</div>
</div>

<div class="row">
	<div class="col-md-6">

	<p>Según el tipo de datos que estemos usando, utilizaremos:</p>
<pre><code>lector.nextInt();
nextFloat();
<span class="green font-weight-bold">...</span></code></pre>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248889895) ?>

	</div>
</div>	



</div>
		</article><article><div><h2 id="ejercicios-operadores-aritmeticos"><span class="text-dark">Ejercicios:</span> con operadores aritméticos</h2>


	<ol>

		<li>
		<div class="row">
			<div class="col-md-6">
			<p>Escribir un programa que calcule el número de segundos que existen en un día. Como todo el mundo sabe, un día tiene 86400 segundos.</p>
			</div>
			<div class="col-md-6">
					
		
<div class="centraditos">
<?= getRes("video_premium",248889905) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/operadores/ejerciciosoperadoresaritmeticos/ContarSegundos.java', 'Segundos por día') ?>

</div>
			</div>
		</div>	
	
</li>
		<li>
		<div class="row">
			<div class="col-md-6">
			<p>Hacer un conversor de euros a dólares. El usuario introduce una cantidad de euros y obtiene su valor en dólares. Supondremos que un euro son dos dólares</p>
			</div>
			<div class="col-md-6">

			
<div class="centraditos">
<?= getRes("video_premium",248889916) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/operadores/ejerciciosoperadoresaritmeticos/ConversorEurosADolares.java', 'Conversor euros a dólares') ?>

</div>
			</div>
		</div>	

	
		</li>

		<li>
			
		<div class="row">
			<div class="col-md-6">
			<p>El IVA para ciertos artículos es del 21%. Realiza un programa que pida un precio y calcule su precio con IVA.</p>
			</div>
			<div class="col-md-6">

			<div class="centraditos">
<?= getRes("video_premium",248890428) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/operadores/ejerciciosoperadoresaritmeticos/IVA.java', 'Ver solución') ?>

</div>
			</div>
		</div>
		

</li>
		<li>
			
		<div class="row">
			<div class="col-md-6">
			<p>Leer un número entero por teclado y mostrar por pantalla el doble y el triple.</p>
			</div>
			<div class="col-md-6">
			<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/operadores/ejerciciosoperadoresaritmeticos/DobleTriple.java', 'Ver solución') ?>
			</div>
		</div>
	

		


		</li>


		<li>
		<div class="row">
			<div class="col-md-6">
			<p>Realiza un programa que recoja el ancho y el alto de un rectángulo y calcule el perímetro y el área.</p>
			</div>
			<div class="col-md-6">
			<div class="centraditos">
<?= getRes("video_premium",248890449) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/operadores/ejerciciosoperadoresaritmeticos/Rectangulo.java', 'Ver solución') ?>

</div>
			</div>
		</div>	
		
		
			
		</li>
		<li>Hacer un conversor de grados centígrados a grados Fahrenheit. Para ello deberé multiplicar por 9/5 y sumar 32. Como todo el mundo sabe, 20 grados centígrados son 68 grados Farenheit.
<div class="row">
<?= getRes("video_premium",248890471) ?>
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/operadores/ejerciciosoperadoresaritmeticos/ConversorGrados.java', 'Ver solución') ?>


</div>
		</li>
<li>
<div class="row">
	<div class="col-md-6">
		<p>Vamos a mandar al usuario la caja de sus sueños. Para ello, debemos solicitarle que introduzca su nombre, el material de la caja que quiere recibir, sus dimensiones, y algún comentario. Debemos concatenar esta información para obtener por consola el siguiente mensaje: <br><span class="font-weight-bold">"[nombre] ha pedido una caja de [material] con unas dimensiones [dimensiones]. [comentario].</span> <br>
Pablo ha pedido una caja de Madera con unas dimensiones diminutas. Que sea muy bonita</p>
	</div>
	<div class="col-md-6">
		
<div class="centraditos">
<?= getRes("video_premium",248890499) ?>
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/operadores/ejerciciosoperadoresaritmeticos/Caja.java', 'Ver solución') ?>

</div>
	</div>
</div>	



</li>

	</ol>

</div>
	</article><article><div><h2 id="if">Estructuras de control: if</h2>

	<div class="row">
		<div class="col-md-6">

		<pre><code>int dato1 = 3;
int dato2 = 5;
if(dato2 &gt; dato1){
	System.out.println(&quot;dato2 es mayor que dato1&quot;);
}</code></pre>
<span class="green">
Output: <br>
dato2 es mayor que dato1</span>
		</div>
		<div class="col-md-6">	<?= getRes("video_premium",248890531) ?>
</div>
	</div>
	
		<h4>If - else </h4>

<div class="row">
	<div class="col-md-6">
	
	<pre><code>int dato1 = 3;
int dato2 = 5;
if(dato1 &gt; dato2){
	System.out.println(&quot;dato1 es mayor que dato2&quot;);
}else{
	System.out.println(&quot;Va a ser que no&quot;);
}</code></pre>

<span class="green">Output: <br>
Va a ser que no </span>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248890544) ?>
	</div>
</div>

	
		<h5>If – else if</h5>

		<div class="row">
			<div class="col-md-6">
			<pre><code>int dato1 = 3;
int dato2 = 5;
if(dato1 &gt; dato2){
	System.out.println(&quot;dato1 es mayor que dato2&quot;);
}else if(dato2 == dato1){
	System.out.println(&quot;va a ser que no&quot;);
}else{
	System.out.println(&quot;&eacute;xito&quot;);
}</code></pre>
<span class="green">Output: <br>
&eacute;xito</span>
			</div>
			<div class="col-md-6"><?= getRes("video_premium",248890551) ?></div>
		</div>
				


	<h5>Ejercicios <span class="text-primary">if</span></h5>

<ol>
	<li>

	<div class="row">
		<div class="col-md-6">
		<p>Dada una variable que contiene la nota de un examen que va de 0 a 10...</p>
<ul>
	<li>Si es mayor que cinco mostrar el texto "Aprobado".</li>
	<li>Si es igual a cinco, mostrar el texto "Aprobado por los pelos"</li>
	<li>Si es menor que cinco, mostrar el texto "Suspenso".</li>

</ul>
		</div>
		<div class="col-md-6">
		<div class="centraditos">
<?= getRes("video_premium",248890565) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/condicionalif/EjercicioNota.java', 'Ver solución') ?>

</div>

		</div>
	</div>

	</li>


<li>
<div class="row">
			<div class="col-md-6">
				<p>Declara una variable 'i' de tipo entero y asígnale un valor. Mostrar un mensaje indicando si el valor de 'i' es positivo o negativo, si es par o impar, si es múltiplo de 5, si es múltiplo de 10 y si es mayor o menor que 100. Consideraremos el 0 como positivo.</p>
			</div>
			<div class="col-md-6">
			<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/condicionalif/EjercicioEvaluarI.java', 'Ver solución') ?>
			</div>
		</div>

	</li>
		
</ol>
</div>
		</article><article><div><h2 id="if_especial">If especial – operador ternario</h3>
		

<div class="row">
	<div class="col-md-6">

	<pre><code>int a = 5;
int b = 3;

if(a&gt;b){System.out.println(&quot;a es mayor que b&quot;);}
else{System.out.println(&quot;b es mayor que a&quot;);}
		
String resultado = (a&gt;b)?&quot;a es mayor que b&quot;:&quot;b es mayor que a&quot;;
System.out.println(resultado);</code></pre>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248891181) ?>
	</div>
</div>




<h4><span class="text primary">Ejercicios:</span> operador ternario</h4>
<ol>
	<li>
		
	<div class="row">
		<div class="col-md-6">
		<p>Declare una variable 'b' de tipo entero y asignarle un valor. Mostrar un mensaje indicando si el valor de 'b' es positivo o negativo. Consideraremos el 0 como positivo. Utiliza el operador condicional (? : ) dentro del println para resolverlo.</p>
		</div>
		<div class="col-md-6">
			
<div class="centraditos">
<?= getRes("video_premium",248891193) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/condicionalif/EjercicioOperadorTernario.java', 'Ver solución') ?>

</div>
		</div>
	</div>
	
	
	</li>
	<li>
	<div class="row">
		<div class="col-md-6">
		<p>Declarar una variable 'i' de tipo entero y asignarle un valor. Muestra un mensaje indicando si 'i' es par o impar. Utiliza el operador condicional ( ? : ) dentro del println para resolverlo.</p>
		</div>
		<div class="col-md-6">
		<div class="centraditos">
<?= getRes("video_premium",248891206) ?>
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/condicionalif/ParOImparConTernario.java', 'Ver solución') ?>

</div>

		</div>
	</div>	
	


	</li>
		
		
</ol>

	<h3 id="comparar_cadenas">Comparar dos cadenas de texto</h4>
	<?= getRes("video_premium",248891227) ?>
<pre><code>String cadena1 = new String(&quot;Hola&quot;);
String cadena2 = new String(&quot;Hola&quot;);
String cadena3 = &quot;Adios&quot;;
String cadena4 = &quot;Adios&quot;;
if (cadena1.equals(cadena2)){
   System.out.println(&quot;Son iguales usando el equals&quot;);
}
if (cadena1==cadena2){
   System.out.println(&quot;Son iguales usando el ==&quot;);
}
if (cadena3==cadena4){
   System.out.println(&quot;Son iguales usando el = cuando la cadena es creada en un pool&quot;);
}</code></pre>
<p class="green">Output: <br>
Son iguales usando el equals <br>
Son iguales usando el = cuando la cadena es creada en un pool</p>

<p>Dado que para objetos se comparan las direcciones de memoria de los mismos, estas no serán iguales puesto que son objetos distintos que almacenan la información en direcciones de memoria distintas.</p>

</div>
	</article><article><div><h2 id="conversion">Cómo convertir una cadena en un entero</h3>
<div class="row">
	<div class="col-md-6">
	<pre><code>String cadena = &quot;3&quot;;
Integer numero = Integer.parseInt(cadena);
System.out.println(numero);</code></pre>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248891236) ?>
	</div>
</div>

		
	
</div>
	</article><article><div><h2 id="ejercicio_calculadora">Ejercicio: <span class="text-primary">calculadora</span></h3>

<div class="row">
	<div class="col-md-6">
	<p>Hacer una calculadora que determine la operación a realizar por medio de una estructura de control if.</p>
	<p>La calculadora debe hacer uso de los operadores aritméticos <span class="bold">+</span>, <span class="bold">-</span>, <span class="bold">*</span> y <span class="bold">/</span>.</p>

	</div>
	<div class="col-md-6">
	<div class="centraditos">
	<?= getRes("video_premium",248891248) ?>
	
	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/calculadora/EjercicioCalculadora.java', 'Ver solución') ?>

</div>

	</div>
</div>

	
			



</div>
		</article><article><div><h2 id="switch">Estructura de control: Switch</h2>


<div class="row">
	<div class="col-md-6">
	<p>A partir del JDK 7 puede recibir como parámetro un String, antes, no</p>
	
	<pre><code>char opcion = 'b';
switch(opcion){
	case 'a':
		System.out.println(&quot;Solucion1&quot;);
	break;
	case 'b':
		System.out.println(&quot;Solucion2&quot;);
	break;
	default:
		System.out.println(&quot;default&quot;);
}</code></pre>
<p>Nota:
Para evaluar cadenas de texto (String) en vez de letras (char), pondré estos caracteres entre comillas dobles en vez de simples.</p>
<p class="green">Output: <br>
Solucion2</p>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248891269) ?>
	</div>
</div>




	<h3><span class="text-dark">Ejercicio:</span> Hacer una calculadora con switch</h3>


<div class="row">
	<div class="col-md-6">
	<p>Hacer una calculadora que determine la operación a realizar por medio de una estructura de control switch.</p>
	<p>La calculadora debe hacer uso de los operadores aritméticos +, -, *, /  y</p>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
<?= getRes("video_premium",248891280) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/calculadora/EjercicioCalculadoraConSwitch.java', 'Ver solución') ?>

</div>

	</div>
</div>

	

</div>
		</article><article><div><h2 id="bucle-for">Estructura de control: bucle for</h2>

<div class="row">
	<div class="col-md-6">

	<pre><code>for(int i=0; i&lt;10;i++){
	System.out.println(i);
}</code></pre>	
<p class="green">0 <br>
1 <br>
2 <br>
3 <br>
4 <br>
5 <br>
6 <br>
7 <br>
8 <br>
9</p>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248891975) ?>
	</div>
</div>


	

	<h3><span class="text-dark">Ejercicios:</span> bucle for</h3>

<ol>
	<li>


	<div class="row">
		<div class="col-md-6">
		<p>Imprimir los números pares que hay dentro de los 100 primeros números naturales.</p>
	<p>Nota: No utilizar la estructura de control if para resolver este ejercicio.</p>
	</div>


		<div class="col-md-6">
		<div class="centraditos">
		<?= getRes("video_premium",248891988) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/ejerciciosbuclefor/NumerosPares1.java', 'Ver solución') ?>
		</div>
	</div>


	

	</div>
	</li>

	<li>
		
<div class="row">
	<div class="col-md-6">
	<p>Imprimir los números pares que hay dentro de los 100 primeros números naturales</p>
	<p>Utilizaremos el operador % para separar los pares de los impares.  El bucle avanzará de 1 en 1.</p>
	<p>Nota: El operador “%” nos da el resto de dividir un número entre otro. <br>
Ej: 7%2=1</p>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
<?= getRes("video_premium",248891998) ?>
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/ejerciciosbuclefor/NumerosPares2.java', 'Ver solución') ?>


</div>
	</div>
</div>

	


	</li>

	<li>
		
	
<div class="row">
	<div class="col-md-6">

	<p>Imprimir los números del 1 al 20.</p>
<ul>
	<li>Para números divisibles por 3, imprimir “Fizz”.</li>
	<li>Para números divisibles por 5, imprimir “Buzz”.</li>
	<li>Para números divisibles por 3 y 5, imprimir “FizzBuzz”.</li>
	<li>En cualquier otro caso, imprimir el número.</li>

</ul>
<div class="notas">
	<h4>Notas:</h4>
<pre><code>if(i&gt;5 &amp;&amp; i&lt;7) 		<span class="green">//¿i es mayor que 5 y menor que 7?</span>
if(i==5 || i== 3) 	<span class="green">//¿i es igual a 5 o igual a 3?</span></code></pre>
</div>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
<?= getRes("video_premium",248892000) ?>
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/ejerciciosbuclefor/FizzBuzz.java', 'Ver solución') ?>

</div>
	</div>
</div>



	</li>

	
	<li>
	<div class="row">
		<div class="col-md-6">
			<p>Mostrar la tabla de multiplicar de los números del 1 al 9. Usaremos dos bucles anidados.</p>
		</div>
		<div class="col-md-6">
		<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/ejerciciosbuclefor/TablaMultiplicar.java', 'Ver solución') ?>
		</div>
	</div>	
	

	

	</li>


	<li>

	<div class="row">
		<div class="col-md-6">

		<p>Adivinar el número secreto. En cada iteración del bucle for, se le preguntará al usuario cuál es el número secreto (un número del 1 al 5). Si al cabo de tres intentos no lo ha acertado, el usuario pierde. Si lo acierta, gana.</p>
<img class="img-fluid" src="img/numero-secreto.svg" class="img" alt="Diagrama de flujo de ejercicio de Javascript para adivinar un número secreto">





		</div>
		<div class="col-md-6">
		<div class="centraditos">
			<?= getRes("video_premium",248892028) ?>

			<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/ejerciciosbuclefor/AdivinaNumeroSecreto.java', 'Ver solución') ?>

</div>
<h5>Notas:</h5>
	<p>Para romper la repetición de un bucle, podemos utilizar el comando break;</p>
		</div>
	</div>

	</li>

	
	<li>
<div class="row">
	<div class="col-md-6">


	<p>Calcular utilizando un bucle for, la enésima potencia de un número. Debemos recoger del usuario la base y el exponente. La 4ª potencia será: <br>
2 x 2 x 2 x 2 = 16</p>
<img src="img/enesima-potencia.svg" class="img-fluid" alt="Diagrama de flujo de ejercicio de Javas para calcular la cuarta potencia de un número">
	</div>
	<div class="col-md-6">
		
<div class="centraditos">
		<?= getRes("video_premium",248892072) ?>

		<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/ejerciciosbuclefor/Potencia.java', 'Ver solución') ?>


	
</div>
	</div>
</div>


	</li>

	
	<li>


<div class="row">
	<div class="col-md-6">

	<p>El factorial de un número entero positivo se define como el producto de todos los números naturales anteriores o iguales a él. Se escribe n!, y se lee "n factorial". 
(Por definición el factorial de 0 es 1: 0!=1)
Por ejemplo, 5! = 5·4·3·2·1 = 120</p>

<img src="img/factorial.svg" class="img-fluid" alt="Diagrama de flujo de ejercicio java">


	</div>
	<div class="col-md-6">

	<div class="centraditos">
			<?= getRes("video_premium",248892645) ?>

			<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/ejerciciosbuclefor/Factorial.java', 'Ver solución') ?>

			<p><strong>Variaciones del ejercicio para los que terminen antes </strong>: Este ejercicio se puede resolver de varias formas  multiplicando los factoriales de mayor a menor o de menor a mayor. Cuando veamos el bucle while, también podremos utilizar esa estructura de control para resolver este ejercicio.</p>


</div>
	</div>
</div>

	</li>
</ol>







</div>
		</article><article><div><h2 id="bucle-while">Estructura de control: bucle while</h2>


		<div class="row">
			<div class="col-md-6">
			<pre><code>String quieroJugar = "si";
while(quieroJugar.equals("si")){
	<span class="green bold">...</span>
	System.out.println("¿Quieres seguir jugando?");
	quieroJugar = scanner.next();
}</code></pre>
<?= getRes("video_premium",254648233) ?>


			</div>
			<div class="col-md-6">
				
<pre><code>int i = 0;
while(i&lt;10){
	System.out.println(i);
	i++;
}</code></pre>
<p class="green">Output: <br>0 <br>
1 <br>
2 <br>
3 <br>
4 <br>
5 <br>
6 <br>
7 <br>
8 <br>
</div>9</p>
			</div>
		</div>


</article><article><div><h2 id="numeroSecretoConWhile">Ejercicios bucle while</h3>

<ol>
	<li>
	<div class="row">
		<div class="col-md-6">
		<p>Repetir el juego del número secreto, pero ahora después de jugar se le preguntará al usuario si desea seguir jugando. Si no desea seguir jugando la variable booleana "quieroJugar" que evalúa el bucle while valdrá false, con lo cual termina el juego.</p>	

		</div>
		<div class="col-md-6">
			

<div class="centraditos">
<?= getRes("video_premium",248892060) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/ejerciciosbuclewhile/NumeroSecreto.java', 'Ver solución') ?>



</div>
		</div>
	</div>

	</li>
	<li>


	<div class="row">
		<div class="col-md-6">

		<p>El usuario debe introducir su nombre, en el caso de que haya introducido información, se le preguntará si los datos son correctos. Si responde que sí, se le indicará que puede seguir con el exámen. Si responde que no, volveremos a la pregunta inicial.
En caso de que al principio de todo no hubiese escrito nada, se mostrará un mensaje con la palabra "error"</p>

<p>Para recoger un valor vacío ("") cuando el usuario pulsa la tecla enter sin introducirar ningún valor, podemos usar el método <span class="i">scanner.nextLine();</span></p>
<img src="img/entrada-nombre.svg" class="img-fluid"alt="Diagrama de flujo de ejercicio java">
	
		</div>
		<div class="col-md-6">
			
<div class="centraditos">
			<?= getRes("video_premium",248892588) ?>
			<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/ejerciciosbuclewhile/IntroduceTuNombre.java', 'Ver solución') ?>


</div>
		</div>
	</div>

	</li>

		<li>
			
	<div class="row">
		<div class="col-md-6">
		<p>Leer números hasta que el usuario introduzca un -1 y mostrar cuantos fueron introducidos.</p>
		</div>
		<div class="col-md-6">
		<div class="row">
	<?= getRes("video_premium",248892673) ?>

	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/estructurasdecontrol/ejerciciosbuclewhile/CuentaNumeros.java', 'Ver solución') ?>

</div>
		</div>
	</div>

		
</li>
</ol>


</div>
	</article><article><div><h2 id="metodos">Métodos</h2>


	<p>Son funciones aplicadas a objetos.</p>
	<p>Una función es un subprograma que realiza una tarea específica y devuelve un valor</p>
</div>
	</article><article><div><h2 id="metodos_cadenas">Métodos para trabajo con cadenas</h3>

<div class="row">
	<div class="col-md-6">
	<pre><code>String nombre = &quot;Rodolfo&quot;;
System.out.println(nombre.substring(0, 3));
System.out.println(nombre.indexOf('d'));
System.out.println(nombre.toUpperCase());
System.out.println(nombre.toLowerCase());
System.out.println(nombre.length());</code></pre>
<p class="green">Output: <br>
Rod <br>
2 <br>
RODOLFO <br>
rodolfo <br>
7</p>

	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248892707) ?>

	</div>
</div>

	

<h4>Ejercicio con cadenas de texto</h4>
<ol>
	<li>
		<div class="row">
			<div class="col-md-6">
			<p>En el texto "Dábale arroz a la zorra el Abad", contar el número de veces que aparece la letra "a". Usaremos una estructura "if" con substring e equals que irá dentro de un bucle for.</p>

			</div>
			<div class="col-md-6">
			<div class="centraditos">
	<?= getRes("video_premium",248893230) ?>

	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciossinreturn/ContadorA.java', 'Ver solución') ?>

	</div>

			</div>
		</div>
	
</li>
</ol>


</div>
	</article><article><div><h2 id="metodo_no_devuelve_nada">Método que no devuelve nada (void), sin parámetros</h3>
	
	<div class="row">
		<div class="col-md-6">
		<pre><code>public class MetodoNoDevuelveNada {

public void saludar(){
	System.out.println(&quot;Buenas tardes!&quot;);
}

public static void main(String[] args) {
	MetodoNoDevuelveNada metodoNoDevuelveNada;
	metodoNoDevuelveNada = new MetodoNoDevuelveNada();
	metodoNoDevuelveNada.saludar();
	
	<span class="green">//La siguiente l&iacute;nea dar&iacute;a error porque el m&eacute;todo no devuelve nada
	//String valorDevuelto = MetodoNoDevuelveNada.saludar();</span>
}
}</code></pre>
		</div>
		<div class="col-md-6">
		<?= getRes("video_premium",248893262) ?>
		</div>
	</div>
	
	

	
</div>
	</article><article><div><h2 id="metodo_no_devuelve_nada_con_parametros">Método que no devuelve nada, con parámetros</h3>

<div class="row">
	<div class="col-md-6">

	<pre><code>public class Main {

public void saludar(String nombre){
	System.out.println(&quot;Buenas tardes &quot; + nombre + &quot;!&quot;);
}
public static void main(String[] args) {
	Main main = new Main();
	main.saludar(&quot;Juan&quot;);
	<span class="green">//La siguiente l&iacute;nea dar&iacute;a error porque el m&eacute;todo no devuelve nada
	//String valorDevuelto = b_metodoNoDevuelveNada.saludar(&quot;Juan&quot;);</span>
}
}</code></pre>
	</div>
	<div class="col-md-6"><?= getRes("video_premium",254667576) ?></div>
</div>

	

	<h3 id="ejerciciosFuncions">Ejercicios con métodos</h4>
	<p>Resolveremos los siguientes ejercicios definiendo una función con parámetros de entrada y que siempre devolverá un valor que procesaremos en la clase main,</p>
	<ol>
		<li>Crear y llamar a un método que recibe un número y calcula su cubo. 

<div class="row">
			<?= getRes("video_premium",248893607) ?>


			<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciossinreturn/CalcularCubo.java', 'Ver solución') ?>


			</div>
</li>
		<li>Crear y llamar a un método que recibe la velocidad en Km/hora y la muestre en metros/hora.

<div class="row">
<?= getRes("video_premium",248894021) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciossinreturn/Velocidad.java', 'Ver solución') ?>

</div>
		</li>
		<li>
			<div class="row">
				<div class="col-md-6">
				<p>Crear y llamar a un método que recibe el ancho y el alto de un rectángulo y calcula su perímetro. <br>
<strong>Perímetro: </strong> 2*ancho + 2*alto <br>
Cuando una función recibe varios parámetros, estos irán separados por coma. Ejemplo: </p>
	
<pre><code>calculaPerimetro(int alto, int ancho);</code></pre>
				</div>
				<div class="col-md-6">
				<div class="centraditos">
<?= getRes("video_premium",248894039) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciossinreturn/CalculaPerimetro.java', 'Ver solución') ?>

</div>

				</div>
			</div>
		
	


</li>
		<li>
			
		<div class="row">
			<div class="col-md-6">
			<p>Crear y llamar a un método que recibe la base y la altura de un triángulo y calcula su área. <br>
			<strong>Area triángulo </strong> = base*altura/2</p>
			</div>
			<div class="col-md-6">
				
<div class="centraditos">
<?= getRes("video_premium",248893706) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciossinreturn/AreaTriangulo.java', 'Ver solución') ?>



</div>
			</div>
		</div>
	

		</li>

		<li>
		<div class="row">
			<div class="col-md-6">
			<p> Utilizando estas dos funciones:</p>
				<ul>
					<li>calculaPerimetro(int radio); <br><strong>Perímetro de la circunferencia</strong> = 2*PI*Radio</strong></li>
					<li>calculaArea(int radio); <br><strong>Area de la circunferencia</strong> = PI*Radio<sup>2</sup></li>
				</ul>
			<p>Leer por teclado el valor del radio de una circunferencia y mostrar por pantalla su perímetro y area.</p>
			</div>
			<div class="col-md-6">
			<div class="centraditos">
<?= getRes("video_premium",248893654) ?>
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciossinreturn/Circunferencia.java', 'Ver solución') ?>

</div>
			</div>
		</div>	
		
		

		</li>

		<li>
		<div class="row">
			<div class="col-md-6">
			<p>Repetir el ejercicio de la calculadora utilizando funciones para las operaciones aritméticas. Debemos declarar 4 funciones con dos parámetros de entrada cada una: suma(int a, int b), resta(int a, int b,), multiplicacion(int a, int b), division(int a, int b).</p>
			</div>
			<div class="col-md-6">
			<div class="centraditos">
<?= getRes("video_premium",254669113) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciossinreturn/Calculadora.java', 'Ver solución') ?>

</div>
			</div>
		</div>	
		



		</li>
</div>	</ol>
</article><article><div><h2 id="metodo_devuelve_algo">Métodos que devuelven algo</h3>

<pre><span class="bold">Nativos de Java</span><code>int valor = lector.nextInt();

<span class="green">//Esta línea da error porque no podemos almacenar en una variable lo que devuelve el método println, ya que no devuelve nada</span>	
String valor2 = <span style="border-bottom: 1px solid red">System.out.println("hola");</span></code></pre>
<div class="row">
	<div class="col-md-6">
	<pre><span class="bold">Desarrollados por nosotros</span><code>public class Main {
	public String saludar(String parametroEntrada){
		String respuesta = &quot;Buenas tardes &quot; + parametroEntrada;
		<span class="red">return respuesta;</span>
	}
	public static void main(String[] args) {
		Main main = new Main();
		String valorDevuelto = main.saludar(&quot;Juan&quot;);
		System.out.println(valorDevuelto);
	}
}</code></pre></div>
	<div class="col-md-6">
		<?= getRes("video_premium",268238168) ?>
	</div>
</div>



<h3><span class="text-dark">Ejercicios:</span> return</h3>
<p>Repetir los 6 ejercicios anteriores, pero añadiendo un return a las funciones y utilizando el valor que estas devuelven.</p>

<div class="row">
	<div class="col-md-6">

	<div class="centraditos">
	<?= getRes("video_premium",248894593) ?>
	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciosconreturn/CalcularCubo.java', 'Calcula cubo con return') ?>

	</div>
	</div>
	<div class="col-md-6">
		<div class="centraditos">
		<?= getRes("video_premium",248894617) ?>
		<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciosconreturn/Velocidad.java', 'Calcula velocidad con return') ?>

		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-6">
		<div class="centraditos">
		<?= getRes("video_premium",248894625) ?><?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciosconreturn/CalculaPerimetro.java', 'Calcula perímetro con return') ?>

		</div>


	</div>
	<div class="col-md-6">
	<div class="centraditos">
	

	<?= getRes("video_premium",248894634) ?>
	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciosconreturn/AreaTriangulo.java', 'Area triágnulo con return') ?>
	
	</div>
	</div>
</div>



<div class="centraditos">



<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciosconreturn/Calculadora.java', 'Ver Calculadora con Return') ?>



</div>

</div>	
</article><article><div><h2 id="coste_hotel">Ejercicio coste viaje</h3>
<div class="row">
	<div class="col-md-6">
		
<p>A lo largo de este ejercicio, deberemos programar 3 funciones:</p>
<ul>
	<li><strong>costeHotel()</strong></li>
	<li><strong>costeAvion()</strong>.</li>
	<li><strong>costeAlquilerCoche()</strong>.</li>
</ul>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
<?= getRes("video_premium",248894647) ?>

<?= getRes('ejemplo','./jse-workspace/fundamentos/src/com/pablomonteserin/metodos/ejerciciosconreturn/CosteViaje.java','') ?>
</div>

	</div>
</div>

	<h5>Ejercicio - coste hotel <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h5>

	<p>Además del public static void main que te paso más bajo, crea una función llamada <strong>costeHotel()</strong> que recibe como parámetro el número de noches. La función debe devolver cuanto es necesario pagar teniendo en cuenta que cada noche cuesta 140 euros.</p>

	<pre><code>public static void main (String [] args){
	Scanner scanner = new Scanner(System.in);
	System.out.println("Introduzca el numero de noches: ");
	int numNoches = scanner.nextInt();
	System.out.println("Introduzca el destino: ");
	String destino = scanner.next();
		
	CosteViaje costeViaje = new CosteViaje();
	int resultado1 = costeViaje.costeHotel(numNoches);
	int resultado2 = costeViaje.costeAvion(destino);
	int resultado3 = costeViaje.costeAlquilerCoche(numNoches);

	int sumaCostes = resultado1 + resultado2 + resultado3;
	System.out.println("Coste total: " + sumaCostes);
}</code></pre>



	
	<h4>Ejercicio – Coste avión <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h4>
	<p>La función <strong>costeAvion()</strong> tiene como parámetro de entrada el nombre de la ciudad. El coste corresponderá al indicado en la siguiente tabla.</p>
	<p>Los costes por ciudad son los siguientes: <br>
"Oviedo": 15 <br>
"Tokyo": 700 <br>
"Madrid": 90 <br>
"Barcelona": 90</p>


<h4>Ejercicio – Coste alquiler coche <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h4>
<p>La función <strong>costeAlquilerCoche()</strong> tiene como parámetro de entrada el número de noches y devolverá un coste en función de dicho parámetro, teniendo los siguientes aspectos en cuenta:</p>
<ul>
	<li>Cada día de alquiler cuesta 40 €.</li>
	<li>Si alquilas un coche por 3 días o más, obtienes un descuento de 20€ sobre el total.</li>
	<li>Si alquilas un coche por 7 días o más, obtienes un descuento de 50€ sobre el total (no acumulable con los 20€ de haber alquilado por más de 3 días).</li>
</ul>

	



</div>
</article><article><div><h2 id="coleccion_ejercicios_metodos">Colección de ejercicios</h3>

<p><a href="preguntas-java.php" target="_blank">Ver colección de ejercicios.</a></p>

<p><a href="ex-competicion-java.zip">Ver el código fuente de los ejercicios.</a></p>


	<h3 id="paso_param">Paso de parámetros</h4>


<div class="row">
	<div class="col-md-6">
	<ul>
		<li>Por referencia: cuando paso la dirección del dato.</li>
		<li>
			Por valor: cuando paso el dato.
		</li>
	</ul>
	<p>En Java se pasa siempre por valor, pero:</p>
<ul>
	<li>cuando paso un objeto, paso una dirección de memoria.</li>
	<li>cuando paso una primitiva, paso directamente su valor.</li>
</ul>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248894688) ?>
	</div>
</div>

	
	
	
	<pre><code>
public class PasoParametros {
    <span class="red">public static void modificaLetra(char letraParam) {
        letraParam = 'A';
    }</span>
    <span class="blue">public static void modificaStringBuffer(StringBuffer stringBufferParam) {
        stringBufferParam.append(&quot;C&quot;);
    }</span>
    <span class="green">public static void modificaLetras(char[] letrasParam) {
        letrasParam[0] = 'A';
    }</span>
    <span class="purple">public static void modificaPalabras(String[] palabrasParam) {
        palabrasParam[0] = &quot;B&quot;;
    }</span>
    <span class="orange">public static void modificaString(String stringParam) {
        stringParam = &quot;B&quot;;
    }</span>
    public static void main(String[] args) {
        <span class="red">char letra = 'a';</span>
        <span class="blue">StringBuffer stringBuffer = new StringBuffer(&quot;c&quot;);</span>
        <span class="green">char[] letras = {'a'};</span>
        <span class="purple">String[]palabras = {&quot;b&quot;};</span>
        <span class="orange">String string = &quot;b&quot;;</span>

        <span class="red">modificaLetra(letra);</span>
        <span class="blue">modificaStringBuffer(stringBuffer);</span>
        <span class="green">modificaLetras(letras);</span>
        <span class="purple">modificaPalabras(palabras);</span>
        <span class="orange">modificaString(string);</span>

        <span class="red">System.out.println(&quot;La nueva letra vale: &quot; + letra);</span>
        <span class="blue">System.out.println(&quot;El nuevo stringBuffer vale: &quot; + stringBuffer);</span>
        <span class="green">System.out.println(&quot;El nuevo letras vale: &quot; + letras[0]);</span>
        <span class="purple">System.out.println(&quot;El nuevo palabras vale: &quot; + palabras[0]);</span>
       
        <span class="orange">System.out.println(&quot;El nuevo String vale: &quot; + string);</span>
    }
}</code></pre>
<p><span class="green bold">Output</span>: <br>
La nueva letra vale: a <br>
El nuevo stringBuffer vale: cC <br>
El nuevo letras vale: A <br>
El nuevo palabras vale: B <br>
El nuevo String vale: b</p>
<img src="img/diagrama.svg" alt="diagrama ejercicio Java">
<img src="img/diagrama2.svg" alt="diagrama ejercicio Java">

</div>
	</article><article><div><h2 id="modificador-static">Modificador static</h2>


	<h3 id="metodos_static">Métodos static</h3>

<div class="row">
	<div class="col-md-6">

	<p>No precisan de una instancia para ser invocados. </p>
<pre><code>public class MetodosStatic {
	public static void main(String[] args) {
		ClaseConMetodoStatic.saludar("Pepe");
	}
}

class ClaseConMetodoStatic{
	public static void saludar(String nombre){
		System.out.println("Hola " + nombre);
	}
}</code></pre>

	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248894721) ?>

	</div>
</div>


<div class="row">
	<div class="col-md-6">
<p>
Si llamo a un método static desde una instancia, me da un warning, pero compila. </p>

<pre><code>public class H_notaMetodosStatic {
	public static void saludar(String nombre){
		System.out.println(&quot;Hola &quot; + nombre);
	}
	public static void main(String[] args) {
		G_metodosStatic g_metodosStatic = new G_metodosStatic();
		g_metodosStatic.saludar(&quot;Pepe&quot;);
	}
}</code></pre>	
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248895928) ?></div>
</div>	


	
<p>Los métodos static no pueden usar las características no static de una clase.</p>
<pre><code>public class I_notaMetodosStaticII {

	String variableNoEstatica = null;
	public static void saludar(String nombre){
		<span class="red">variableNoEstatica = &quot;Rodolfo&quot;;</span>
	}
}</code></pre>


	<h3><span class="text dark">Ejercicio: </span>calculadora con métodos static</h3>
	<p>Rehacer la calculadora, pero convirtiendo sus cuatro métodos en static.</p>


<div class="row">		
<?= getRes("video_premium",248895931) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin//metodos/metodoestatico/CalculadoraConStatic.java', 'Ver Calculadora con Return') ?>


		
		</div>
</div>
	</article><article><div><h2 id="tipos_var_x_pos">Tipos de variables por su posición</h3>
	<?= getRes("video_premium",248895940) ?>
	<pre><code>public class VariablesSegunPosicion {
	<span class="green">/*
	* ATRIBUTOS
	* 
	* - Se crean al hacer una instancia de la clase.
	* - Se destruyen cuando el garbage colector destruye dicha instancia. 
	* - Si no las inicializo, se inicializan solas, ya sea con el valor 0 o null seg&uacute;n el caso.
	* 
	*/</span>
	
	String variableMiembro;
	
	public void metodo(){
		<span class="green">/*
		*VARIABLES LOCALES
		* 
		* - Se crean cuando se lee su l&iacute;nea en el m&eacute;todo. 
		* - Se destruyen cuando termina de leerse dicha variable.
		* - Debo inicializarlas para poder usarlas.
		*
		*/	
		</span>
		String variableAutomatica=null;

		<span class="green">/*
		*VARIABLES DE CLASE
		* 
		* - Usan el modificador static. 
		* - Su valor es compartido por todas las instancias de la clase
		* 
		*/	
		</span>
		String variableAutomatica=null;


	}
}</code></pre>
</div>
	</article><article><div><h2 id="variables_static">Variables static</h3>

<div class="row">
	<div class="col-md-6">
	<p>Van precedidas del modificador <span class="black bold">static</span>.</p>
	<p>El modificador static permite acceder a las variables y métodos aunque no tengamos una instancia del objeto que los contiene.</p>
	<p>Al contrario que con las variables no static, no habrá una por cada instancia de una clase, sino una para todas las instancias de la clase.</p>
	<?= getRes("video_premium",248896484) ?>

	</div>
	<div class="col-md-6">
	
<pre><code>public class VariableStatic {
	static int variableEstatica = 0;
	int variableNoEstatica = 0;
	public static void main(String [] args){
		<span class="green">//Incrementamos la variable estática</span>
		VariableStatic.variableEstatica++;
		VariableStatic.variableEstatica++;

		<span class="green">//Incrementamos la variable no estática</span>
		VariableStatic  variableStatic_1 = new VariableStatic();
		VariableStatic  variableStatic_2 = new VariableStatic();

		variableStatic_1.variableNoEstatica++;
		variableStatic_2.variableNoEstatica++;

		<span class="green">//Mostramos resultados</span>
		
		System.out.println(VariableStatic.variableEstatica);
		System.out.println(variableStatic_1.variableNoEstatica);
		System.out.println(variableStatic_2.variableNoEstatica);
		
	}
}</code></pre>
</div>
</div>




</div>
		</article><article><div><h2 id="arrays">Arrays</h2>

<div class="row">
	<div class="col-md-6">
	<p>Un array es una colección de datos ordenados del mismo tipo y de longitud fija. Una vez que adjudicamos un tamaño al array, no será posible modificarlo. Hay otro tipo de datos llamado "colecciones" cuya longitud si podré modificar.</p>

	</div>
	<div class="col-md-6">	<?= getRes("video_premium",248895951) ?>
</div>
</div>


	<pre><code>public class H_Arrays {
	public static void main(String[] args) {
		String [] dias1 = <span class="red">{&quot;lunes&quot;, &quot;martes&quot;, &quot;miercoles&quot;, &quot;jueves&quot;, &quot;viernes&quot;, &quot;sabado&quot;, &quot;domingo&quot;};</span>
		String [] dias2 = <span class="red">new String[7];</span>
		dias2[0]=&quot;lunes&quot;;
		dias2[1]=&quot;martes&quot;;
		dias2[2]=&quot;miercoles&quot;;
		dias2[3]=&quot;jueves&quot;;
		dias2[4]=&quot;viernes&quot;;
		dias2[5]=&quot;s&aacute;bado&quot;;
		dias2[6]=&quot;domingo&quot;;

		System.out.println(dias1[5]);
		System.out.println(dias2[3]);		
	}
}</code></pre>
	<p class="red">Al instanciar un array debe quedar definida la longitud del mismo.</p>


	<h3>Ejercicios arrays</h3>
	<ol>

		<li>
		<div class="row">
			<div class="col-md-6">
			<p>Crea un array con cinco nombres de persona y recórrelo con un bucle for mostrando el texto "Conozco a alguien llamado ". Tener en cuenta que la propiedad .length de un array me devuelve el número de elmentos que contiene.</p>

			</div>
			<div class="col-md-6">
<div class="centraditos">
<?= getRes("video_premium",248895962) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/arrays/EjercicioRecorrer.java', 'Ejercicio recorrer array') ?>


</div></div>
		</div>	
		

		</li>
		<li>
			<div class="row">
				<div class="col-md-6">
				<p>Recorrer la siguiente lista con un bucle imprimiendo el doble de cada número: <br>
myList = {1,9,3,8,5,7}</p>
				</div>
				<div class="col-md-6">
				<div class="centraditos">
<?= getRes("video_premium",248896738) ?>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/arrays/DuplicarValorArray.java', 'Ejercicio duplicar número') ?>

</div>

				</div>
			</div>
		
	

		</li>
	
				<li>
					
<div class="row">
	<div class="col-md-6">
	<p>El usuario debe introducir un número correspondiente a cierto mes (un valor entre 1 y 12) y la aplicación debe mostrar el nombre del mes correspondiente a dicho número.<br> Para resolver el ejercicio utilizaremos un array de strings dónde cada una de las posiciones del array será cada uno de los meses del año.</p>
	</div>
	<div class="col-md-6">
	<div class="centraditos">
				<?= getRes("video_premium",248895979) ?>
				<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/arrays/ObtenerMes.java', 'Ejercicio mes seleccionado') ?>

				</div>

	</div>
</div>

				
			</li>

</div></ol>
</article><article><div><h2 id="aleatorios">Números aleatorios</h2>
<?= getRes("video_premium",329528327) ?>
	<h3>Generar número aleatorio dentro de un rango</h3>
	<pre><code>Math.floor(Math.random() * (MAX - MIN + 1)) + MIN;</code></pre>
	<p>Como ejemplo, si deseamos generar un número aleatorio entre 25 y 75, la sentencia sería</p>
	<pre><code>Math.floor(Math.random() * (75-25+1)) + 25;</code></pre>
	<h3 id="ej_num_aleatorio">Ejercicio número aleatorio</h3>
	<p>Obtener un número aleatorio entre 5 y 7.</p>
	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/aleatorio/ObtenerNumeroEntre5y7.java', 'Ver ejemplo') ?>


	<h3 id="ejercicio_letra_aleatoria">Ejercicio letra aleatoria</h3>

<div class="row">
	<div class="col-md-5">


	<p>Obtener una letra aleatoria de tu nombre.</p>
<p>Tendrás que usar los siguientes códigos:</p>
<pre><code>Math.floor(Math.random() * (MAX - MIN + 1)) + MIN;
nombre.chatAt(int posicion);
nombre.length();</code></pre>
	</div>
	<div class="col-md-5">
<p>Pasos para resolver el ejercicio:</p>
<ol>
	<li>Calculamos un número aleatorio en un rango comprendido entre 0 y el número de letras de tu nombre.</li>
	<li>Utilizamos ese número aleatorio para obtener la letra de tu nombre que ocupa esa posición.</li>
	<li>Mostramos la letra en la consola.</li>
</ol></div>

<div class="col-md-2">
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/aleatorio/ObtenerLetraAleatoriaEnNombre.java', 'Ver ejemplo') ?>

</div>
</div>



</div>
		</article><article><div><h2 id="ahorcado">Ejercicio – juego del ahorcado</h2>

<div class="row">
	<div class="col-md-6">

	<p>Realizar el juego del ahorcado.
<ul>
	<li>Al iniciar el programa, este deberá escoger una palabra al azar entre 3. Esta será la palabra secreta que el usuario deberá adivinar.</li>
	<li>el programa contará la cantidad de letras de la palabra escogida y creará ese número de letras (inicialmente con guiones bajos).</li>
	<li>El usuario deberá ir introduciendo letra a letra  hasta adivinar la palabra secreta.</li>
	<li>Si el usuario acierta alguna de las letras de la palabra, su correspondiente guión bajo será sustituido por la letra correspondiente.</li>
</ul>
	</p>
	<p>Será útil tener un array de char en el que iremos guardando cada una de las letras que el usuario vaya acertando.</p>
	<div class="notas">
		<h4>Notas</h4>
		<p>Para generar un número aleatorio de tipo double entre 0 y 1: <br>
Math.random()
		</p>
		<p>Si quiero comparar dos arrays, no utilizaré el método equals, sino el método <br>

		Arrays.equals(array1, array2)</p>
		<p>cadena.indexOf("a") devuelve la primera posición de la letra a en la cadena. En caso de no encontrar coincidencia, nos devolverá -1.</p>


		<h5>Métodos de la clase String:</h5>
		<p><span class="u">charAt(int index)</span> <br>
Devuelve el valor de la letra en la posición especificada.</p>

<p><span class="u">toCharArray()</span> <br>
Convierte una cadena de texto en un array de letras.</p>
	</div>
	</div>
	<div class="col-md-6">
		
<div class="centraditos">
	<?= getRes("video_premium abierto", 'ZRtZ-GxMALk') ?>

	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/lecturadatos/ahorcado/Main.java', 'Ejercicio mes seleccionado') ?>

	
</div>

<img class="img-fluid" src="img/ahorcado.svg" alt="Diagrama de flujo del juego del ahorcado">
	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/lecturadatos/ahorcado/Main.java', 'Ejercicio mes seleccionado') ?>

	</div>
</div>



	

</div>
		</article><article><div><h2 id="tres-en-raya">Ejercicio - Tres en raya</h2>
<div class="row">
	<div class="col-lg-6">
	<p>Hacer el juego del tres en raya para dos jugadores. 
<ul>
	<li>El tablero será un array de 9 posiciones. </li>
		<li>El método <strong>showTablero(String [] tablero);</strong> imprimirá el tablero, con las fichas “X” y “O” dónde correspondan.</li>

	<li>El juego tendrá un método <strong>juegaPlayer(String ficha, String [] tablero)</strong> que recibirá como parámetro de entrada el identificador del jugador ("X" o "O") y dónde se le solicitará al jugador el número correspondiente a la posición dónde quiere mover su ficha ("X" o "O").</li>
	<li>Después de cada tirada, se comprobará si alguien ha ganado, llamando al método <strong>evaluateWin(String [] tablero)</strong>;</li>
	<li>El método <strong>evaluateWin(String [] tablero)</strong> mediante sucesivos if todas las posibilidades de que un jugador gane.</li>
	<li>Utilizaremos la consola de java para ver el tablero.</li>
</ul>
	</p>
	</div>
	<div class="col-lg-6">

	<div class="centraditos">
	<?= getRes("video_premium",248897357) ?>

	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/arrays/TresEnRaya.java', 'Tres en raya') ?>
	</div>
	</div>
</div>



	<h3><span class="text-dark">Ejercicio:</span> tictactoe solo jugador</h4>
<p>El método juegaPlayer1() quedará así:
<pre><code>
function juegaPlayer1(){
	board[getComputerMove()] = &quot;X&quot;;
}</code></pre>
<p>Por tanto, debemos crear un método getComputerMove() que creará una copia del tablero, moverá la ficha sobre esta copia y en función del resultado decidirá dónde mover en el tablero real. Para realizar el movimiento: 
<ol>
	<li>Comprobamos si la máquina puede hacer un movimiento y ganar la partida. (utilizaremos el método evaluateWin, creado en el ejercicio anterior).</li>
	<li>Comprobamos si tras mover, el humano puede hacer un movimiento y ganar la partida.</li>
	<li>Comprueba si hay alguna esquina libre. Si lo está, la máquina mueve a la esquina.</li>
	<li>Comprueba si el centro está libre. Si lo está, la máquina mueve al centro</li>
	<li>Mueve a cualquiera de las casillas restantes.</li>
</ol>

<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/arrays/TresEnRaya.java', 'Ejercicio mes seleccionado') ?>


</div>
		</article><article><div><h2 id="modificadores-acceso">Modificadores de acceso</h2>


		<?= getRes("video_premium",248897122) ?>

	<p>Determinan la accesibilidad de una clase, sus variables miembro y métodos.</p>
	<h4>Pueden ser: </h4>
	<ul>
		<li><span class="font-weight-bold">private</span>
	<p>Un elemento private sólo es accesible dentro de la propia clase en que es declarada.</p>
		</li>

		<li><span class="font-weight-bold"><span class="red">de</span>fault (<span class="red">package</span>, o friendly)</span>
		<p>Es el modo de acceso  cuando no hay modifier. <br>
Se puede aplicar a una clase o a sus datos y metodos.
Un elemento default sólo es accesible desde clases pertenecientes al mismo package.
		</p>
		

		</li>
		<li><p>
			<span class="font-weight-bold">Protected <span class="red">(proteje a los hijos)</span></span> <br>

			Es menos restrictivo que default <br>
			Un elemento protected sólo es accesible desde clases pertenecientes al  mismo package y desde las subclases de la clase que tiene el modificador.
		</p>

<div class="row">
	<div class="col-md-6">

	<pre><span class="font-weight-bold">com.pablomonteserin.a.A.java</span><code>public class A{
	protected void metodoDeA() {
		System.out.println("hola");
	}
}</code></pre>
	</div>
	<div class="col-md-6">
		
<pre><span class="font-weight-bold">com.pablomonteserin.b.B.java</span><code>public class B extends A{
	void metodoDeB() {
		B b = new B();
		b.metodoDeA();
	}
}</code></pre>
	</div>
</div>



	</li>
		<li><span class="font-weight-bold">public</span> <br>
		Es el modifier "mas generoso" <br>
		Un elemento public puede accederse sin restricciones.

		</li>
	</ul>

<div class="table-responsive">
	<table style="text-align: center" border="1px">
		<tr>
			<th>Modificador</th>
			<th>La propia clase</th>
			<th>Mismo paquete</th>
			<th>Clase hija <br> mismo paquete</th>
			<th>Clase hija <br> (dif. paquete)</th>
			<th>Desde cualquier clase</th>
		</tr>
		<tr>
			<th>public</th>
			<td>X</td>
			<td>X</td>
			<td>X</td>
			<td>X</td>
		</tr>
		<tr>
			<th>protected</th>
			<td>X</td>
			<td>X</td>
			<td>X</td>
			<td></td>
		</tr>
		<tr>
			<th>sin modificador (package)</th>
			<td>X</td>
			<td>X</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<th>private</th>
			<td>X</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>

</div>


</div>
</article><article><div><h2 id="constructores">Constructores</h2>

<?= getRes("video_premium",248897155) ?>

<h3 id="constructor_vacio">Constructor vacío</h3>

<div class="row">
	<div class="col-md-6">


	<p>Generar constructor automáticamente: <br>
Btn dch → Source → Generate Constructor using Fields</p>

<pre><code>public class Main {
	public static void main(String[] args) {
		new MiClase();
	}
}
class MiClase{
	public MiClase(){
		System.out.println(&quot;Hola!!!&quot;);
	}
}</code></pre>
	</div>
	<div class="col-md-6"><?= getRes("video_premium",248897179) ?></div>
</div>

<p class="green"><span class="green bold">Output</span>: <br>
Hola!!!</p>



<h3 id="constructor_con_param">Constructor con parámetros</h3>

<div class="row">
	<div class="col-md-6">
	<pre><code>public class Main {
	public static void main(String[] args) {
		new Persona(&quot;Pepe&quot;);
		<span class="green">//La siguiente l&iacute;nea genera un error en tiempo de compilaci&oacute;n
		//	new Persona();</span>
	}
}

class Persona{
	public Persona(String nombre){
		System.out.println(&quot;Hola&quot; + nombre);
	}
}</code></pre>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248897715) ?>
	</div>
</div>


	<h3 id="para_que_sirve_un_constructor">¿Para qué sirve un constructor?</h3>

<div class="row">
	<div class="col-md-6">
	<pre><code>public class Main {
	public static void main(String[] args) {
		new Persona(&quot;Pepe&quot;);
	}
}

class Persona{
	String nombre;
	public Persona(String nombre){
		this.nombre = nombre;
	}
}</code></pre>
	<p class="red">Si no sé cuales son los parámetros que tengo que poner, puedo ponerme sobre el paréntesis de los parámetros y pulsar ctrl + space</p>


	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248897727) ?>

	</div>
</div>

</div>
		</article><article><div><h2 id="herencia">Herencia</h2>


<div class="row">
	<div class="col-md-6">

	<pre><code>public class Main{
	public static void main(String[] args) {
		Hijo h = new Hijo();
		h.saludar();
	}
}

class Padre{
	public void saludar(){
		System.out.println("Hola");
	}
}

class Hijo extends Padre{
	
}</code></pre>
<p>Es el mecanismo mediante el cual una clase deriva de otra, de manera que extiende su funcionalidad.</p>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248897741) ?>
	</div>
</div>

	



</div>
	</article><article><div><h2 id="constructores_herencia">Constructores y herencia</h3>

<div class="row">
	<div class="col-md-6">

	<pre><code>public class Main{
	public static void main(String[] args) {
		new Hijo();
	}
}

class Hijo extends Padre{
	public Hijo() {
		System.out.println("Se ejecuta el hijo");
	}
}

class Padre{
	public Padre(){
		System.out.println(&quot;Se ejecuta el padre&quot;);
	}	
}</code></pre>
	<p class="green"><span class="bold">Output</span>: <br>
Se ejecuta el padre <br>
Se ejecuta el hijo</p>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248898057) ?>
	</div>
</div>

	

	
<p class="font-weight-bold">¿Qué se verá por pantalla al ejecutar el siguiente código?</p>

<div class="row">
	<div class="col-md-6">

	<pre><code>public class Main{
	public static void main(String[] args) {
		Hijo a = new Hijo("hola");
		a.mostrarMensaje();
	}
}

class Hijo extends Padre{
	Hijo(String mensaje){
		super(mensaje);
	}
}

class Padre{
	String mensaje;
	public Padre(String mensaje){

	}	

	void mostrarMensaje(){
		System.out.println(mensaje);
	}
}</code></pre>
	</div>
	<div class="col-md-6"><?= getRes("video_premium",248898480) ?>
</div>
</div>

<div class="row">
	<div class="col-md-6">
	<p>Todas las clases que heredan, tienen un constructor que comienza por el método super();. Si yo no escribo este método, el compilador de java lo escribe automáticamente llamando al constructor vacío del padre. Esto puede dar problemas de compilación si el padre no tiene un constructor vacío.</p>
	
<pre><code>public class MainConError{
	public static void main(String[] args) {
		new Hijo();
	}
}

class Hijo() extends Padre{
	public Hijo(){
		System.out.println(&quot;Se ejecuta el hijo&quot;);
	}
}

class Padre{
	public Padre(String parametro){
		System.out.println(&quot;Se ejecuta el padre&quot;);
	}	
}</code></pre>


	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248898079) ?>
	</div>
</div>

	

	<h3><span class="text-dark">Ejercicio:</span> herencia</h3>
	
	<div class="row">
		<div class="col-md-6">
		<p>Desarrolle una aplicación que contenga las siguientes clases:</p>
		<img class="img-fluid" src="img/diagrama1.svg" alt="Diagrama del ejercio">
		</div>
		<div class="col-md-6">
		<?= getRes("video_premium",248898093) ?>
		</div>
	</div>
	
	



	

<p>El constructor de la clase Persona debe incrementar en una unidad la variable numInstancias.</p>
	<p>Desarrolle una clase con el nombre Main, que contenga un método public static void main(String args[]), que al ejecutarse cree dos instancias de empleado y dos de cliente e imprima el total de instancias de persona creadas.</p>


	<h3><span class="text-dark">Ejercicio:</span> animales</h3>

<div class="row">
	<div class="col-md-6">
	<p>Implemente las clases del siguiente diagrama. </p>

	<img class="img-fluid" src="img/animal.svg" alt="Diagrama del ejercicio">
	</div>
	<div class="col-md-6">
	<p>El método compararSonido() comprueba si el sonido que fue pasado en el constructor es más largo que el sonido almacenado en la variable static "sonidoMasLargo". Si es así, sobrescribe el valor de la variable con el nuevo valor.</p>
	<p>Desarrolle una clase con el nombre Main, que contenga un método public static void main(String args[]), que al ejecutarse genere una instancia de Vaca, Perro y Gato pasándoles en el constructor el sonido que deben emitir ("muuuuuu", "guauguau", "miau", por ejemplo). El método "compararSonido" debe ser llamado desde dentro del constructor de la clase Animal.</p>
	<p>Luego, imprimir el valor de la variable estática sonidoMasLargo.</p>
	<?= getRes("video_premium",248898128) ?>
	
	</div>
</div>


		
	
	

</div>
		</article><article><div><h2 id="polimorfismo">Polimorfismo</h2>

<div class="row">
	<div class="col-md-6">
	<p>Es la capacidad de un objeto de adoptar diferentes formas.</p>
	<p>Una variable referencia es polimórfica cuando su tipo de declaración no coincide con el tipo del objeto al que referencia.</p>
	<p>En Java, esto se consigue gracias a la herencia y las interfaces.</p>
	<pre><code>Figura f1 = new Figura(&quot;Estandar&quot;, &quot;Rojo&quot;);

Figura f2 = new Circulo(&quot;Verde&quot;, 5.0);</code></pre>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248898782) ?>
	</div>
</div>


		
	

</div>
		</article><article><div><h2 id="sobrecarga-sobreescritura">Sobrecarga y sobreescritura</h2>

<div class="row">
	<div class="col-md-8">
	<pre><code>public class Main{
	public static void main(String[] args) {
		Hijo.sobreEscritura("Se bienvenido ", "Pablo");
		Hijo.sobreCarga( 3 );
	}
}
class Papa{
	public static void sobreEscritura(String txtBienvenida, String nombre){
		System.out.println(txtBienvenida + nombre);
	}
	public static void sobreCarga(String txtDespedida, String nombre){
		System.out.println(txtDespedida + nombre);
	}
}
class Hijo extends Papa {
	<span class="green">//El tipo devuelto no debe cambiar.
	//los parámetros de entrada no deben cambiar
	//La accesibilidad no será más restrictiva que la del método original.
	//Si el método original es static, el método que hace el override, tambień debe serlo.</span>
	public static void <span class="blue">sobreEscritura</span>(String txtBienvenida, String nombre){
		System.out.println(txtBienvenida + "......" + nombre);
	}
	<span class="green">//El tipo de dato devuelto puede cambiar.
	//Los parámetros de entrada deben cambiar.
	//La accesibilidad puede ser más restrictiva que la del método original.
	//El número de checked expections arrojadas debe ser el mismo.</span>
	protected static int <span class="red">sobreCarga</span>(int codigoDespedida){
		System.out.println(codigoDespedida);
		return 4;
	}
	
}</code></pre>

	</div>
	<div class="col-md-4">
	<?= getRes("video_premium",268145607) ?>
	</div>
</div>


	
	
</div>
	</article><article><div><h2 id="abstraccion">Abstracción</h2>


	<h3>Métodos abstractos</h3>

<div class="row">
	<div class="col-md-6">
		
	<p>Tenemos una clase "Cosa" que tiene un método "botar". Las clases  "Ladrillo" y "Pelota" heredan de "Cosa".</p>
	<p>La clase Cosa tiene un método abstracto llamado "botar". Es abstracto porque dependiendo de si instanciamos un ladrillo o una pelota habrá que sobrescribir el código para que bote de una forma determinada.</p>
	<p>Un método abstracto es aquel que sólo tiene una declaración y no dispone de cuerpo. Está pensado para ser sobrescrito, luego no es posible utilizar el modificador private con un método abstracto.</p>

	
	<p>Se declaran de la siguiente forma (quitando las llaves del cuerpo de la función y poneindo un ; en su lugar):</p>
	<pre><code>public void botar();</code></pre>


	</div>
	<div class="col-md-6">

<div class="row">
	<div class="col-6">
	<img class="img-fluid" src="img/Basketball.svg" alt="pelota baloncesto">
	</div>
	<div class="col-6">
	<img class="img-fkuid" src="img/brick.svg" alt="ladrillo">
	</div>
</div>
<?= getRes("video_premium",248899023) ?>

	</div>
</div>



<h3>Clases abstractas</h3>


<div class="row">
	<div class="col-md-6">

	<ul>
	<li>Si una clase tiene al menos un método abstracto, dicha clase debe ser abstracta.</li>
	<li>Una clase que herede de una clase abstracta debe implementar todos sus métodos abstractos (no es necesario sobrescribir los métodos no abstractos,)</li>
	<li>Abstracto viene a significar "sin definir".</li>
</ul>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248899223) ?>
	</div>
</div>
	


<h3>
	Ejercicio – animales con clase abstracta
</h3>

<div class="row">
	<div class="col-md-6">
	<p>Implemente las clases del siguiente diagrama. </p>
	<img src="img/Animal-abstract.svg" class="img-fluid" alt="diagrama del ejercicio">

	</div>
	<div class="col-md-6">
	<p>El constructor de la clase Animal llamará a los métodos "establecerSonido()" y "compararSonido()"</p>
<p>El método compararSonido() comprueba si la variable "sonido" es más larga que el sonido almacenado en la variable static "sonidoMasLargo". Si es así, sobrescribe el valor de la variable con el nuevo valor.</p>
<p>El método establecerSonido() debe ser sobreescrito para asignar el valor del sonido que toque a la variable sonido.</p>
<p>Desarrolle una clase con el nombre Main, que contenga un método public static void main(String args[]), que al ejecutarse genere una instancia de cada clase de animal.</p>
<p>Luego, imprimir el valor de la variable estática sonidoMasLargo.</p>
	</div>
</div>

<?= getRes("video_premium",248899230) ?>


</div>
</article><article><div><h2 id="interfaces">Interfaces</h2>

<div class="row">
	<div class="col-md-6">
	<p>Una <span class="red bold">interface</span> es una clase abstracta en la que todos los métodos serán métodos abstractos.</p>
	<p>Una <span class="blue bold">clase</span> que implemente una interface también deberá implementar todos sus métodos. Si no deseamos que esto ocurra, podemos añadir a la interface el modificador abstract.</p>
	<p>Una variable estática definida dentro de una interfaz será implícitamente definida como constante.</p>
	<p>Una interfaz está pensada para ser sobrescrita, luego no tiene sentido utilizar modificadores privados dentro de una interfaz y no están permitidos.</p>
	<?= getRes("video_premium",248899267) ?>
	</div>
	<div class="col-md-6">
		
	<pre><code>interface <span class="red bold">Instrument</span>{
	void play();<span class="green">//automáticamente público</span>
}

public class Clase implements <span class="red bold">Instrument</span>{
	public static void main(String[] args) {
		Clase c = new Clase();
		c.play();
	}
	public void play() {
		System.out.println("Jugar al baloncesto");
	}
}</code></pre>

	</div>
</div>

	


	<h3>Ejercicio – animales con interfaz</h3>

<div class="row">
	<div class="col-md-6">
	<p>Implemente las clases del siguiente diagrama. </p>

	<img src="img/diagrama5.svg" alt="Diagrama ejercicio" class="img-fluid">
	</div>
	<div class="col-md-6">
	<p>El método compararSonido() comprueba si el sonido que fue pasado en el constructor es más largo que el sonido almacenado en la variable static "sonidoMasLargo". Si es así, sobrescribe el valor de la variable con el nuevo valor.</p>
<p>Desarrolle una clase con el nombre Main, que contenga un método public static void main(String args[]), que al ejecutarse genere una instancia de cada clase de animal e invoque a sus métodos “compararSonido”. </p>
<p>Luego, deberé imprimir en pantalla el sonido más largo realizado, almacenado en la variable estática sonidoMasLargo.</p>
	

<?= getRes("video_premium",248899276) ?>



	</div>
</div>


	

</div>
</article><article><div><h2 id="clases-internas">Clases internas</h2>


<div class="row">
	<div class="col-md-10">
	<p>Son aquellas cuya definición está dentro de otra. Una clase interna puede sobrescribir <span class="blue bold">métodos de la clase que la contiene</span>.</p>
<pre><code>public class ClaseExterna {
	<span class="orange">private String nombreExt = "Juan";</span>
	<span class="red">class ClaseInterna{
		private String nombreInt = "Pepe";
		public void <span class="blue">mostrarNombre</span>(){
			System.out.println(nombreInt);
			System.out.println(nombreExt);
		}
	}</span>
	public void <span class="blue">mostrarNombre</span>(){
		System.out.println("Juan");
	}
	public static void main(String[] args) {
		<span class="green">//Puedo acceder a los variables miembro privadas de la clase interna, pero no de la externa</span>
		ClaseExterna claseExterna = new ClaseExterna();
		ClaseInterna claseInterna = claseExterna.new ClaseInterna();
		<span class="green">//Puedo acceder a los metodos de la clase externa</span>
		claseInterna.mostrarNombre();
	}
}</code></pre>
<p class="green">Output: <br>
Pepe <br>
Juan</p>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",248899306) ?>
	</div>
</div>


	


</div>
	</article><article><div><h2 id="clase_interna_anonima">Clase interna anónima (anonimous inner class)</h3>

<div class="row">
	<div class="col-md-6">

	<p>Se sobrescribe <span class="orange">uno o varios métodos</span> de la <span class="blue">clase que se está instanciando</span> en una sola operación.</p>
	<pre><code>public class C_claseInternaAnonima {
	public static void main(String args[]){
		<span class="red">Comida2 comida = new Comida2() {
			<span class="orange">public void comer() {
				System.out.println(&quot;M&eacute;todo \&quot;comer\&quot; de la clase Comida2 sobrescrito&quot;);
			}</span>
		};</span>
		comida.comer();
	}
}
<span class="blue">class Comida2 {
	<span class="orange">public void comer() {
		System.out.println(&quot;Comiendo&quot;);
	}</span>
}</span></code></pre>

	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248899315) ?>
	</div>
</div>

		

</div>
		</article><article><div><h2 id="garbage-collector">Garbage Collector</h2>

		<div class="row">
			<div class="col-md-10">
			<p>Se encarga de liberar memoria asignada a objetos que ya no se utilizan. </p>
	<p>El método <span class="blue bold">finalize()</span> define que va a ocurrir cuando un objeto sea recogido por el garbage collector. No suele utilizarse, ya que no podemos determinar cuando se va a ejecutar.</p>
	<p><span class="red bold">System.gc()</span> sugiere al Garbage Collector que se ejecute, sin embargo esto no asegura que se libere la memoria ocupada por los objetos creados.</p>
	<pre><code>public class J_finalize  {
	<span class="blue bold">protected void finalize() {</span>
		System.out.println(&quot;Removed&quot;);
	}
	public static void main(String[] args) {
		J_finalize finalizeObject = new J_finalize();
		finalizeObject = null;
		<span class="red bold">System.gc();</span>
	   }
 }</code></pre>
<p>Cuando se que voy a dejar de utilizar un objeto lo igualo a null para que sea elegible por el recolector de basura.</p>
			</div>
			<div class="col-md-2">
			<?= getRes("video_premium",248899331) ?>
			</div>
		</div>

			


</div>
	</article><article><div><h2 id="string-performance">String Performance</h2>

<div class="row">
	<div class="col-md-10">


	<p>Los Strings no se pueden modificar, luego cualquier operación que se haga sobre un String creará uno nuevo.</p>
	<p>Por tanto, trabajar con Strings tiene un costo considerable de Performance. Para modificar cadenas de texto usaremos StringBuffer, o a partir de la versión 4.0 de java: StringBuilder.</p>
	<p>No se deben concatenar Strings dentro de un bucle. Esto tendría un gran gasto de Performance.</p>

	<h4>Diferencia performance entre String, StringBuffer y StringBuilder</h4>
	<pre><code>public class StringPerformance {

	public static void main(String[] args) {
		String s1 = &quot;hola&quot;;
		StringBuffer s2 = new StringBuffer(&quot;hola&quot;);
		StringBuilder s3 = new StringBuilder(&quot;hola&quot;);
		
		long empieza = System.currentTimeMillis();
		for(int i = 0; i&lt;10000; i++){
			s1 += &quot;hola&quot;;
		}
		long final1 = System.currentTimeMillis()-empieza;
		empieza = System.currentTimeMillis();
		for(int i = 0; i &lt; 10000; i++){
			s2.append(&quot;hola&quot;);
		}
		long final2 = System.currentTimeMillis()-empieza;
		empieza = System.currentTimeMillis();
		for(int i = 0; i &lt;10000; i++){
			s3.append(&quot;hola&quot;);
		}
		
		long final3 = System.currentTimeMillis() - empieza;
		
		System.out.println("Usando la clase String: " + final1); <span class="green">// output: 220</span>
		System.out.println("Usando la clase StringBuffer: " + final2); <span class="green">// output: 1</span>
		System.out.println("Usando la clase StringBuilder: " + final3); <span class="green">// output: 0</span>
	}
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",248899346) ?>

	</div>
</div>


</div>
		</article><article><div><h2 id="encapsulamiento">Encapsulamiento</h2>
<div class="row">
		<div class="col-lg-6">
		<p>La encapsulación impide la manipulación externa de algunas partes de los objetos. </p>

<ul>
	<li>Fuerza al usuario a utilizar un método para 
		acceder a los datos.</li>
	<li>Hace que el código sea más fácil de 
		mantener</li></ul>
	<p>Esto mejora la estabilidad de la aplicación, ya que el cambio directo de una variable puede afectar al correcto funcionamiento de la misma.</p>
	<p>Esto permite un código más reutilizable, ya que este se encuentra encapsulado en módulos independientes.</p>
	<p>Para ello declararé los métodos como public y las variables como private.</p>
<p>Ejemplo <br>
Al hacer un pedido, no pueden venir más de 10 paquetes. Por tanto si vienen menos de 10 paquetes el número de paquetes en el almacén se modifica, pero pero si vienen  más de 10 saltaría un mensaje de error.
</p>
<?= getRes("video_premium",248901760) ?>

		</div>
		<div class="col-lg-6">
			
<pre><code>public class E_encapsulamiento {
	public static void main(String[] args){
		Almacen almacen = new Almacen();
		almacen.setNumCajasAlmacen(12);
		System.out.println(almacen.getNumCajasAlmacen());
	}	
}
class Almacen{	
	private int numCajasAlmacen;

	public int getNumCajasAlmacen() {
		return numCajasAlmacen;
	}
	public void setNumCajasAlmacen(int numCajasAlmacen) {
		if(numCajasAlmacen&gt;10){
			System.out.println(&quot;No se admiten entregas de m&aacute;s de 10 unidades&quot;);
		}else{
			this.numCajasAlmacen = numCajasAlmacen;
		}
	}
}</code></pre>
<p>Generar automáticamente los get y set: <br>
Btn dch → source → Generate Getters and Setters  <br>
Alt + shift + s → Generate Getters and Setters </p>

		</div>

		</div>

<h3>POJO (Plain Old Java Object)</h3>

<div class="row">
	<div class="col-md-6">
	<ul>
	<li>Debe tener al menos un constructor sin argumentos</li>
	<li>Los atributos de la clase deben ser privados</li>
	<li>Dichos atributos deben ser accesibles mediante métodos get y set</li>
	<li>Debe ser serializable</li>
</ul>
<h4>Bean</h4>
<p>Es un POJO que además implementa la interfaz serializable.</p>


	</div>
	<div class="col-md-6">
		
<pre><code>public class Alumno implements Serializable {
	private String nombre;
	private int edad;

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public int getEdad() {
		return edad;
	}

	public void setEdad(int edad) {
		this.edad = edad;
	}

}</code></pre>
	</div>
</div>


</div>
	</article><article><div><h2 id="contenedores">Contenedores</h2>
<div class="row">
	<div class="col-md-10">
	<img class="img-fluid" src="img/contenedores.svg" alt="contenedores">

	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",248903048) ?>
	</div>
</div>

	


	<h3 id="recorrer_coleccion">Recorrer una colección - Iterator</h4>
<pre><code>ArrayList arrayList = new ArrayList();
arrayList.add(&quot;vaca&quot;);
arrayList.add(&quot;perro&quot;);
arrayList.add(&quot;elefante&quot;);

Iterator it = arrayList.iterator();
while(it.hasNext()){
	String cadena =(String) it.next();
	System.out.println(cadena);
}</code></pre>

</div>
</article><article><div><h2 id="genericos">Genéricos</h2>

<div class="row">
	<div class="col-md-10">
	<p>Fueron introducidos en Java 5.0.</p>
	<p>Los tipos genéricos se encuentran incluidos dentro de los caracteres &lt;&gt;. Especifican el tipo de datos que va a almacenar, utilizar o devolver una clase o método.</p></div>
	<div class="col-md-2">
	<?= getRes("video_premium",248901772) ?>
	</div>
</div>

</div>

	</article><article><div><h2 id="en_colecciones">Genéricos en colecciones</h3>

	<div class="row">
		<div class="col-md-4">

		<pre><code>ArrayList &lt;String&gt;arrayList = new ArrayList&lt;String&gt;();
arrayList.add(&quot;vaca&quot;);
arrayList.add(&quot;perro&quot;);
arrayList.add(&quot;elefante&quot;);
Iterator&lt;String&gt; it = arrayList.iterator();
while(it.hasNext()){
	String cadena =it.next();
	System.out.println(cadena);
}</code></pre>
		</div>
		<div class="col-md-8">
		<div class="notas mt-0">
	<h3>Notas</h3>
	<ul>
		<li>
			No es necesaria la comprobación de tipos en tiempo de ejecución con lo cual reduce el uso de casting en el código.
		</li>

		<li>
			El código será menos ambiguo y más fácil de mantener.
		</li>
	</ul>
</p>
</div>

		</div>
	</div>

</div>
	</article><article><div><h2 id="en_clases">Genéricos en clases</h3>

<div class="row">
	<div class="col-lg-8">
	<pre><code>public class Generics1 {
	public static void main(String[] args) {
	Calculadora<Integer> calculadora = new Calculadora<Integer>();
		calculadora.sumar(4, 5);
	}
}

// El tipo de dato generico E (valdria cualquier nombre de clase inexistente)
// podra ser sustituido dentro de la clase por una clase de
// cualquier tipo, que sera definido al declarar e instanciar la clase
class Calculadora<T> {
	public double sumar(T n1, T n2) {
		if (n1 instanceof Number && n2 instanceof Number) {
			return (Double.parseDouble(n1.toString()) +  Double.parseDouble(n2.toString()));
		}	 
		return 0;
	}

	// Un metodo estatico no puede acceder a un tipo de dato generico
	// Cuando declaro un objeto de la clase calculadora defino el tipo de dato
	// que va a sustituir al generico. Sin embargo un
	// metodo estatico es cargado en memoria antes de declarar la clase que lo
	// contiene y por tanto no sabemos que tipo de dato va a
	// sustituir al generico, ya que este tipo de dato es definido al hacer la
	// declaracion
	//public static void sumar2(E e, E e2) {}
}</code></pre>
	</div>
	<div class="col-lg-4">
		
<p><span class="red">Un método estático no puede acceder a un tipo de dato genérico. Cuando declaro un objeto de la clase calculadora defino el tipo de dato que va a sustituir al genérico. Sin embargo un método estático es cargado en memoria antes de declarar la clase que lo contiene y por tanto no sabemos que tipo de dato va a sustituir al genérico, ya que este tipo de dato es definido al hacer la declaración</span></p>
<p class="green">El tipo de dato genérico E (valdría cualquier nombre de clase inexistente) podrá ser sustituido dentro de la clase por una clase de cualquier tipo, que será definido al declarar e instanciar la clase</p>
<?= getRes("video_premium",248905416) ?>
	</div>
</div>

	
	
</div>
	</article><article><div><h2 id="caso_concreto">Caso concreto</h3>
<div class="row">
	<div class="col-md-10">
	<p>Si para usar genéricos en una clase usamos una <span class="red">palabra reservada</span>, los <span class="blue">objetos declarados con esa palabra reservada</span> no serán lo que corresponda, sino que serán de tipo Object</p>
<pre><code>class Generics&lt;<span class="red">String</span>&gt; {
	String <span class="blue">valor</span>=(String) "elefante";
}</code></pre>
	</div>
	<div class="col-md-2"><?= getRes("video_premium",248905704) ?></div>
</div>

		

	

</div>
</article><article><div><h2 id="crud-sin-base-datos">Ejercicio alta, baja, modificación y consulta en un ArrayList</h2>

	<?= getRes("video_premium",254577500) ?>
	<p>La aplicación consta de 2 clases: Main y Alumno.</p>
	<p>La clase Alumno tendrá dos propiedades: nombre (String) y edad (int).</p>
	<p>Al arrancar la aplicación desde el Main se nos preguntará por la operación que deseamos hacer: 	</p>

<ul>
	<li><span class="font-weight-bold">Insertar un nuevo alumno</span>. Esta opción nos solicita el nombre y la edad del alumno que queremos insertar.</li>
	<li><span class="font-weight-bold">Eliminar un alumno</span>. Esta opción nos solicita el nombre del alumno que deseamos eliminar. Para borrar el alumno, recorreremos los alumnos buscando el que cumple la condición deseada utilizando el iterator y cuando lo encontremos, llamaremos a: 
<pre><code>it.remove();</code></pre>
</li>
	<li><span class="font-weight-bold">Modificar los datos de un alumno</span>. Esta opción nos solicita primero el nombre de alumno para poder identificarlo y luego su nuevo nombre y edad.</li>
	<li><span class="font-weight-bold">Mostrar todos los alumnos almacenados</span>. Esta opción recorre el ArrayList de alumnos e imprime los nombres de cada uno.</li>
</ul>
<div class="centraditos">
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/crudalumno/Main.java') ?>
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/crudalumno/Alumno.java') ?>
</div>


</div>
</article><article><div><h2 id="juego-oca">Ejercicio – juego de la oca</h2>

	<?= getRes("video_premium",248901832) ?>

	<p>Hacer el juego de la oca. El juego constará de una clase Main desde la que se ejecuta el juego y un bean ''Jugador'' con los atributos nombre(String), casilla(int), turnosRestantes(int).</p>
	<p>Al comenzar la aplicación se nos solicitará indicar el número de jugadores. Crearemos las instancias de los jugadores pertinentes y los introduciremos en un ArrayList de jugadores. Los jugadores irán tirando el dado y avanzando casillas hasta que alguno llegue a la casilla 63. <br>
Tener en cuenta que:	</p>

<ul>
	<li>las posiciones 5, 9, 14, 18, 23, 27, 32, 36, 41, 45, 50, 54 y 59 corresponden a las ocas. Si el jugador cae en ellas se imprimirá el texto ''De oca a oca y tiro porque me toca'', el jugador avanzará hasta la siguiente casilla de la oca y volverá a tirar. Para programar esto, una buena idea sería tener un HashMap en el que la clave sería la casilla en la que ha caído el jugador y el valor sería la casilla de destino. Luego, llamando al método hashmap.containsKey(posicion) evaluaremos si el jugador ha caído en una casilla con oca, y si es así, recuperaremos la correspondiente casilla de destino.</li>
	<li>si el jugador cae en la casilla 19, caerá en la pensión y no podrá tirar el dado en los dos siguientes turnos.</li>
	<li>si el jugador cae en la casilla 3, caerá en el pozo y no podrá tirar el dado en el siguiente turno.</li>
	<li>si el jugador cae en la casilla 52, caerá en la cárcel y no podrá tirar el dado en los tres siguientes turnos.</li>
	<li>las casillas 6 y 12 son puentes. Si el jugador cae en ellas se imprimirá el texto ''De puente a puente y tiro porque me lleva la corriente''. En este caso, si cayó en la casilla 6 irá a la 12 y si cayó en la 12 irá a la 6. En ambos casos, volverá a tirar.</li>
	<li>las casillas 26 y 53 son dados. Si el jugador cae en ellas se imprimirá el texto ''De dado a dado y tiro porque me ha tocado''. En este caso, si cayó en la casilla 26 irá a la 53 y si cayó en la 53 irá a la 26. En ambos casos se volverá a tirar.</li>
	<li>la casilla 58 es la muerte, el jugador que cae en ella pierde.(aunque en el juego original lo que ocurría era que el jugador debía regresar a la casilla 1).</li>
</ul>

<div class="row">
<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/lecturadatos/oca/Main.java', "Main.java") ?>

	<?= getRes('ejemplo','jse-workspace/fundamentos/src/com/pablomonteserin/lecturadatos/oca/Jugador.java', 'Jugador.java') ?>
	</div>
  
</div>
</article><article><div><h2 id="recorrer-map">Recorrer un Map</h2>

	<h3>Transformar un Map en una Collection</h3>

	<div class="row">
		<div class="col-md-10">

		<pre><code>Persona persona1 = new Persona(&quot;75367834E&quot;, &quot;Nombre1&quot;);
Persona persona2 = new Persona(&quot;68274736E&quot;, &quot;Nombre2&quot;);
Persona persona3 = new Persona(&quot;90497589E&quot;, &quot;Nombre3&quot;);
		
Map&lt;String, Persona&gt;; map = new HashMap&lt;String, Persona&gt;();
map.put(persona1.getDni(), persona1);
map.put(persona2.getDni(), persona2);
map.put(persona3.getDni(), persona3);
		
Collection &lt;Persona&gt; collection = <span class="red bold">map.values();</span>
Iterator &lt;Persona&gr; it = collection.iterator();
while(it.hasNext()){
	System.out.println(it.next().getNombre());
}</code></pre>
		</div>
		<div class="col-md-2">
		<?= getRes("video_premium",248901860) ?>
		</div>
	</div>


<h4>Recuperar un map a partir de las claves</h4>

<div class="row">
	<div class="col-md-10">

	<p>El método <span class="i">keySet()</span> devuelve un set de claves. Luego, recuperaré los valores del map utilizando las claves que acabo de almacenar en el Set.</p>
	<pre><code>Persona p1 = new Persona(&quot;11111111E&quot;, &quot;Nombre1&quot;);
Persona p2 = new Persona(&quot;22222222E&quot;, &quot;Nombre2&quot;);
Persona p3 = new Persona(&quot;33333333E&quot;, &quot;Nombre3&quot;);
		
Map&lt;String, Persona&gr; map = new HashMap();
map.put(p1.getDni(), persona1);
map.put(p2.getDni(), persona2);
map.put(p3.getDni(), persona3);
		
Set &lt;String&gr;claves = map.keySet();
		
Iterator &lt;String&gr; it = claves.iterator();
while(it.hasNext()){
	String clave =  it.next();
	Persona persona = map.get(clave);
	System.out.println(persona.getNombre());
}</code></pre>
	</div>
	<div class="col-md-2"><?= getRes("video_premium",248901869) ?></div>
</div>
	


	<h4>Recorrer un Map (2 formas)</h4>

<div class="row">
	<div class="col-md-6">
	<pre><code><span class="green">//Para cada elemento key del conjunto map.keySet()</span>
for (String key : map.keySet()){
	System.out.println(key + &quot;=&gt; &quot; + map.get(key).getNombre());
}</code></pre>
	</div>
	<div class="col-md-6">
		
<pre><code><span class="green">//1 Entry es un key-value pair</span>
for(Map.Entry&lt;String, Persona&gt;entry:map.entrySet()){
	String key = entry.getKey();
	Persona3 value = entry.getValue();
	System.out.println(key + &quot;=&gt; &quot; + value.getNombre());
	}
}</code></pre>
	</div>
</div>

	

</div>
</article><article><div><h2 id="sobreescritura-equals">Sobreescritura del equals</h2>
	
<div class="row">
	<div class="col-md-6">

	
	<pre><span class="font-weight-bold">Sobreescritura del equals</span><code>class Punto2D{
	private int x;
	private int y;
	private String nombre;
		
	public Punto2D(int x, int y, String nombre) {
		super();
		this.x = x;
		this.y = y;
		this.nombre=nombre;
	}
	@Override
	public boolean equals(Object o) {	
		if (!(o instanceof Punto2D)) return false;
		Punto2D punto = (Punto2D) o;
		return (x == punto.x) && (y == punto.y);
	}
}</code></pre>
	</div>
	<div class="col-md-6">
	<?= getRes("video_premium",248903682) ?>
	</div>
</div>



<h3>Ejercicio</h3>

<div class="row">
	<div class="col-md-6">
	<p>Hacer una clase llamada Deposito que tiene un nombre, un largo, un ancho y un alto.</p>
	<p>Hacer un método equals (y su correspondiente) que devolverá true cuando dos depósitos tengan el mismo volumen (largo*ancho*alto).</p>
	</div>
	<div class="col-md-6">
	<div class="centraditos">

<?= getRes('ejemplo','./jse-workspace/fundamentos/src/com/pablomonteserin/comparaciondepositossoloequals/Main.java', 'Main.java') ?>

<?= getRes('ejemplo','./jse-workspace/fundamentos/src/com/pablomonteserin/comparaciondepositossoloequals/Deposito.java', 'Deposito.java') ?>

</div>
	</div>
</div>



	</div>
</article><article><div><h2 id="sobreescritura-hashcode">Sobreescritura del hashcode</h2>
	
<div class="row">
	<div class="col-md-10">
		
	<p>Este método sirve para comparar objetos dentro de una estructura de tipo Hash (HashMap, HashSet, etc.). Su reescritura no es indispensable, pero sí recomendable.</p>
	
	<p>El método hashCode() devuelve un dato de tipo int que identifica al objeto. Dicho entero debería estar en función de valores que determinen cuando un objeto es igual o distinto de otro, en el caso de una finca largo y ancho. </p>
	<p>Es más rápido que el método equals. Cuando comparamos dos objetos...</p>
<ol>
	<li>Si no tienen el mismo hashcode, son diferentes.</li>
	<li>Si tienen el mismo hashcode, se llamará al método equals.</li>
</ol>

<pre><span class="black bold">Sobreescritura del hashcode (JDK 7)</span><code>public int hashCode() {
        return Objects.hash(x, y);
}</code></pre>
	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",248903691) ?>
	</div>
</div>




</div>
</article><article><div><h2 id="sobreescritura-compareto">Sobreescritura del compareTo</h2>
<div class="row">
	<div class="col-md-10">
		

<p>El método compareTo determina si un objeto es mayor, menor o igual a otro. Devuelve 0 si son iguales, 1 (o un entero positivo cualquiera) si el primero es mayor q el segundo y -1 (o un número negativo cualquiera) si el segundo es mayor que el primero </p>

<pre><span class="font-weight-bold">Finca.java</span><code>
public class Finca <span class="font-weight-bold">implements Comparable&lt;Finca&gt;</span>{
	...
	public int compareTo(Finca otherFinca){
		double productoThis = this.getAncho()*this.getLargo();
		double productoOther = otherFinca.getAncho()*otherFinca.getLargo();
		
		int valorDevuelto = 0;
		if(productoThis &gt; productoOther)valorDevuelto=1;
		if(productoThis &lt; productoOther)valorDevuelto=-1;
		if(productoThis == productoOther)valorDevuelto=0;
		return valorDevuelto;	
	}</code></pre>
	
<pre><span class="font-weight-bold">Main.java</span><code>
Collections.sort(lista); <span class="green bold">//Para que esto funcione es necesario implementar la interfaz comparable</span>

Iterator&lt;Finca&gt; it = lista.iterator();
while(it.hasNext()){
	Finca c = it.next();
	System.out.println(c.getNombre());
}</code></pre>
	<div class="Notas">
		<h5>Notas</h5>
<ul>
	<li>Todos los objetos tienen el método equals(), pero no todos tienen el método compareTo().</li>
	<li> Si sobreescribo el compareTo, debería sobreescribir el equals. Si sobreescribo el equals, debo sobreescribir el hashcode.</li>
</ul>
</div>

	</div>
	<div class="col-md-2">
	<?= getRes("video_premium",248903700) ?>
	</div>
</div>


	

	<h3 id="ejercicio_equals_y_compareTo">Ejercicio – equals y compareTo</h4>

	<div class="row">
		<div class="col-md-10">

		<ol>
		<li>Hacer una clase llamada Deposito que tiene un nombre, un largo, un ancho y un alto.</li>
		<li>Dentro de la clase Depósito, definir un método equals (y su correspondiente método hashcode) que devolverá true cuando dos depósitos tengan el mismo volumen (largo*ancho*alto).</li>
		<li>Crear 5 depósitos.</li>
		<li>Añadirlos a una lista.</li>
		<li>Ordenar la lista.</li>
		<li>Recorrerla con un iterator.</li>
		<li>Comprobar que los depósitos están ordenados por su volumen. Para ello tendremos que haber sobreescrito el método compareTo</li>
	</ol>
		</div>
		<div class="col-md-2">
		<?= getRes("video_premium",248903702) ?>
		</div>
	</div>
	


	
</div>
</article><article><div><h2 id="excepciones">Excepciones</h2>
	

<div class="row">
	<div class="col-md-6">
	<ul>
		<li><strong>En tiempo de compilación</strong> (checked exceptions): Heredan de
java.lang.Exception. El compilador nos obligará a controlarlas mediante un bloque Try/Catch o un throws.</li>
<li><strong>En tiempo de ejecución</strong> (unchecked exceptions): Heredan de
java.lang.RuntimeException. Es la única Exception que no es comprobada por el compilador. Un error también se produce en tiempo de ejecución, aunque un error no es una excepción.</li>
	</ul>
	<?= getRes("video_premium",248904290) ?>

	</div>
	<div class="col-md-6">
	<img class="img-fluid" src="img/excepciones.svg" alt="excepciones">

	</div>
</div>


	
</div>
	</article><article><div><h2 id="excepcion_con_catch">Excepción con un catch</h3>

<div class="row">
	<div class="col-md-10">

	<pre><code>int i = 2;
int j = 0;
System.out.println("antes");
try{
	System.out.println(i/j);
}catch (ArithmeticException e){
	System.out.println("en catch");
	e.printStackTrace();
}
System.out.println("despues");</code></pre>
<p class="green"><span class="bold">Output:</span> <br>
antes <br> 
en el try <br>
en el catch <br>
java.lang.ArithmeticException <br>
despues <br></p>
	</div>
	<div class="col-md-2">	<?= getRes("video_premium",248903716) ?>
</div>
</div>

</div>
	</article><article><div><h2 id="excepcion_con_varios_catch">Excepción con varios catch</h3>


	<div class="row">
		<div class="col-md-6">

		<pre><code>int i = 2;
int j = 0;
System.out.println("antes");
try{
	System.out.println("en el try");
	System.out.println(i/j);
}catch (ArithmeticException e){
	System.out.println("en catch1");
	e.printStackTrace();
}catch(Exception e){
	System.out.println("en catch2");
	e.printStackTrace();
}catch(Throwable t){
	System.out.println("en catch3");
	t.printStackTrace();
}
System.out.println("despues");</code></pre>
	<p class="green"><span class="bold">Output</span> <br>
antes <br>
en el try <br>
en catch1 <br>
java.lang.ArithmeticException <br>
despues 
</p>
		</div>
		<div class="col-md-6">
	<p>El único catch que se aplica es el que recoge la excepción. Después de este, el programa continua ejecutándose a partir del último Catch.</p>
	<p>Para que el código compile, los tipos de Error más generales(Throwable) deben estar por debajo de los más particulares(ArithmeticException)</p>
	<?= getRes("video_premium",248903731) ?>

		</div>
	</div>
	
</div>
	</article><article><div><h2 id="throw">Throw</h3>


	<div class="row">
		<div class="col-md-10">
		<pre><code>public class ArrojarExcepcion {
	public static void main(String[] args) {
		ArrojarExcepcion arrojarExcepcion = new ArrojarExcepcion();
			try {
			arrojarExcepcion.lanzarExcepcion();
		} catch (Exception e) {
			System.out.println("excepciÃ³n lanzada y procesada");
		}
		arrojarExcepcion.procesarExceptionInSitu();
	}
	public void lanzarExcepcion() throws Exception{
		throw new Exception();
	}
	public void procesarExceptionInSitu(){
		try {
			throw new Exception();
		} catch (Exception e) {
			System.out.println("excepciÃ³n procesada");
		}
	}
}</code></pre>
	<p><span class="font-weight-black">Consola</span>: <br>
excepción lanzada y procesada <br>
excepción procesada</p>
		</div>
		<div class="col-md-2">
		<?= getRes("video_premium",248904531) ?>
		</div>
	</div>
			


</div>
</article><article><div><h2 id="finally">Finally</h3>


<div class="row">
	<div class="col-md-6">
	<p>El finally se ejecuta siempre, se trate la excepción o no se trate la excepción. La única forma de evitar que se ejecute el finally es ejecutando un System.exit(), que mata la máquina virtual.</p>
<p>Se utiliza siempre en conjunción con un try-catch. No puede haber nada después del catch y antes del finally.</p>
<?= getRes("video_premium",248904546) ?>

	</div>
	<div class="col-md-6">
		
<pre><code>public static void main(String[] args) {
	int i = 2;
	int j = 0;
	System.out.println("antes");
	try{
		System.out.println(i/j);
	}catch (ArithmeticException e){
		System.out.println("en catch1");
		e.printStackTrace();
	}catch(Exception e){
		System.out.println("en catch2");
	}catch(Throwable t){
		System.out.println("en catch3");
	}finally{
		System.out.println("en finally");
	}
	System.out.println("despues");
}</code></pre>
<p class="green"><span class="bold">Output</span>: <br>
antes <br>
en catch1 <br>
java.lang.ArithmeticException <br>
en finally	<br>
despues</p>
	</div>
</div>
</div>
	</article><article><div><h2 id="crear_excepcion">Crear una excepción</h3>

	<div class="row">
		<div class="col-md-6">
		<img class="img-fluid" src="img/asistente.svg" alt="Asistente para crear excepciones en Java">
		</div>
		<div class="col-md-6">
		<?= getRes("video_premium",248905027) ?>

		</div>
	</div>

	

</div>
	</article><article><div><h2 id="serializable">Implementar Serializable</h3>
	<p>Serializar es el proceso de convertir el objeto a bytes, para poder enviarlo a través de red, y después reconstruirlo al otra lado de la red.</p>
	<p>Para que un objeto sea serializable basta con que implemente la interfaz Serializable.</p>
	<div class="notas">
		<h4>Notas</h4>
		<p>
La clase Exception implementa la interfaz Serializable.</p>
	</div>

	<h4>serialVersionUID</h4>
	<p>Es posible que cuando envío un objeto serializado a un lado y a otro de la red tenga diferentes versiones del mismo. Si sucede esto, la reconstrucción de la clase en el lado que recibe es imposible.</p>
	<p>Para comparar las versiones de las clases utilizamos el atributo<span class="font-weight-bold">private static final long serialVersionUID</span>. <br>
Este nos indica el número de versión de la clase. Debemos ir actualizándolo con las modificaciones de la clase que vayamos haciendo.
</p>

<p>Si las versiones de dos clases que implementan Serializable no coinciden, obtendremos una InvalidClassException al deserializar.</p>



	<h3><span class="text-dark">Ejercicio:</span> excepciones</h3>

	<div class="row">
		<div class="col-md-10">
			

		<p>Implementar una clase Main que llame un método getPrecioConIva() e imprima el valor que devuelve.</p>
	<p>Este método getPrecioConIva() que recibirá un número y devolverá dicho número multiplicado por 1.16. Si el precio es mayor que 100 arrojará una PrecioDemasiadoAltoException que será capturada en el Main.</p>
	<p>Implementar una clase PrecioDemasiadoAltoException y sobreescribir su método printStackTrace() para que imprima el texto "El precio es demasiado alto".</p>



		</div>
		<div class="col-md-2"><?= getRes("video_premium",248905196) ?></div>
	</div>
	


	
	<h3><span class="text-dark">Ejercicio: </span> comparar fechas</h3>

	<div class="row">
		<div class="col-md-8">
	<p>Implementar una clase Persona, con los siguientes campos: <br>
String dni <br>
String nombre <br>
Date fechaNacimiento</p>
<p>Se considerará que dos instancias de Persona son iguales si tienen el mismo dni.</p></div>
		<div class="col-md-4">
		<?= getRes("video_premium",248904590) ?>

		</div>
	</div>

<p>
	Implementar una clase Servicios con los siguientes métodos:
	<ul>
		<li><span class="font-weight-bold">getPersonaMayor</span>: Recibe un mapa de personas personas y devuelve la persona mayor. Arroja una SinDatosException si el mapa está vacío (isEmpty()). <br> Para comparar las fechas de los objetos de la clase Date:</li>
		<li> El método getTime() me devuelve los milisegundos de la fecha.</li>
		<li>Los métodos after() y before() me devuelven true o false dependiendo de que fecha fue anterior.</li>
		<li><span class="font-weight-bold">getPrimerNombre</span>: Recibe un mapa igual al anterior y devuelve la persona con el primer nombre en orden alfabético. Arroja una SinDatosException si el mapa está vacío. Desde este método llamaremos al método compareTo().</li>
	</ul>
</p>
<p>Implementar una clase Main con un método public static void main que crea dos objetos y realiza entre ellos las comparaciones antes indicadas. También debe indicarnos si dichas personas son iguales.</p>

<pre><span>Para convertir una fecha en un objeto de tipo Date: </span><code>
SimpleDateFormat formatter = new SimpleDateFormat("dd-<span class="red">MM</span>-yyyy");
Date fecha = formatter.parse(stringFecha)</code></pre>


<p class="red">Esto es MM mayúscula, las minúsculas son para minutos</p>



</div>
		</article><article><div><h2 id="enumeraciones">Enumeraciones</h2>

		<div class="row">
			<div class="col-md-10">	<p class="green">Los tipos enumerados sirven para restringir la selección de valores a algunos previamente definidos</p>
	<pre><code>enum instrumentos{
   GUITARRA, TROMPETA, BATERIA, BAJO
};
public class Enumerations {
   public static void main (String... args){
      instrumentos in = instrumentos.BATERIA;
      System.out.println(in);
   }
}</code></pre>

<p class="green">Output: <br>
BATERIA</p>
</div>
			<div class="col-md-2"><?= getRes("video_premium",248905711) ?></div>
		</div>

			

	<h3>Declarar constructores, métodos y variables dentro de un tipo enumerado:</h3>

<div class="row">
	<div class="col-md-10">
		

	<pre><code>enum TamanoCafe{
	CHICO(5), MEDIANO(8), GRANDE(10);
	private int onzas;
	<span class="green">//No se puede invocar al constructor directamente, 
	//este se invoca una vez que se crea el tipo enumerado 
	//y es definido por los argumentos utilizados para crearlo.</span>
	TamanoCafe(int onzas){
		this.onzas = onzas;
	}
	public int getOnzas(){
		return this.onzas;
	}
}
public class Cafe {
	public static void main(String... args){
		TamanoCafe tc;
		tc = TamanoCafe.CHICO;
		System.out.println("Tamaño de café: "+TamanoCafe.CHICO);
		System.out.println("Onzas 1(c1): "+TamanoCafe.CHICO.getOnzas());
	}
}</code></pre>
	</div>
	<div class="col-md-2"><?= getRes("video_premium",248905711) ?></div>
</div>

	

</div>
</article><article><div><h2 id="hilos">Hilos</h2>

<div class="row">
	<div class="col-md-10">

	<p>Para usarlos puedo extender thread o implementar Runnable</p>
<h3>Dos ejemplos de hilos en la vida real</h3>
<p>Cuando se venden las entradas del concierto de Madonna. En poco segundos todas las entradas quedan agotadas debido a la gran demanda. El proceso que materializa la compra de la entrada no debe ser realizado por varios usuarios a la vez, ya que se corre el riesgo de que se vendan más entradas de las que realmente hay disponibles. Esa parte del código habrá que sincronizarla.</p>

<p>Varias personas entran en un supermercado en el que sólo hay un dependiente. Aunque cada cliente deambula por el supermercado a su aire, mirando productos, escogiendo los que tienen menos conservantes, etc. a la hora de pagar los clientes deben ponerse en cola e ir siendo atendidos por el vendedor de uno a uno. Esta sería la parte sincronizada de un algoritmo que representase lo que ocurre en el supermercado.</p>
	</div>
	<div class="col-md-2"><?= getRes("video_premium",248906042) ?></div>
</div>

	

	<h4>Ejemplo de aplicación sin usar hilos</h4>
	<p>Aunque creamos 3 "pseudohilos", realmente no lo son, y el código de un hilo no se ejecutará hasta que no haya concluído el "pseudohilo" anterior.</p>

<div class="row">
	<div class="col-md-6">

	<pre><span class="bold">Main.java</span><code>public class Main {
	public static void main(String args[]){
		HiloFalso hilo1 = new HiloFalso();
		HiloFalso hilo2 = new HiloFalso();
		HiloFalso hilo3 = new HiloFalso();
		hilo1.run();
		hilo2.run();
		hilo3.run();	
	}
}</code></pre>
	</div>
	<div class="col-md-6">
		

<pre><span class="font-weight-bold">Hilo.java</span><code>class HiloFalso{
	static double variable1 = 100;
	public void run() {
		variable1-=10;	
		Thread.sleep(500);		
		System.out.println(&quot;Variable1:&quot; + variable1);
	}
}</code></pre>
	</div>
</div>

<p class="green">Output:  <br>
Variable1:90.0 <br>
Variable1:80.0 <br>
Variable1:70.0 <br>
</p>

	<h3>Extender Thread</h3>


	<div class="row">
		<div class="col-md-4">
			
	<p>Cuando en una instancia que herede de thread llamo al método start estoy invocando el método run de la clase en un nuevo hilo.</p>
	<p>Si llamase el método run directamente, estaría ejecutando su código pero sin crear un nuevo hilo.</p>
		</div>
		<div class="col-md-8">
			
	<pre><span class="font-weight-bold">Método Main para las siguientes implementaciones de hilos:</span><code>public static void main(String args[]){
	Hilo hilo1 = new Hilo();
	Hilo hilo2 = new Hilo();
	Hilo hilo3 = new Hilo();
		
	hilo1.start();
	hilo2.start();
	hilo3.start();
		
}</code></pre>
<p>
Puedo asignar prioridad a los hilos usando: <br>
Hilo1.setPriority((Thread.MAX_PRIORITY - Thread.NORM_PRIORITY) / 2);</p>
		</div>
	</div>
	
	<h3>Sin sincronización</h3>


	<div class="row">
		<div class="col-md-6">
		<pre><code>class Hilo extends Thread{
	static double variable1 = 100;
	public void run() {
		try {
			variable1-=10;
			Thread.sleep(500);
			System.out.println(&quot;Variable1:&quot; + variable1 );
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
	}
}</code></pre>
		</div>
		<div class="col-md-6">
			
<p>Ponemos los hilos a dormir para asegurarnos de que en algún momento todos los hilos están ejecutando simultáneamente el método run().</p>

<p class="green">Output: <br>
Variable1:70.0 <br>
Variable1:70.0 <br>
Variable1:70.0 </p>

		</div>
	</div>

	<h4>Modificador synchronized</h4>
	<p>Sólo permite que un hilo pase por cierto código de cada vez.</p>
	<p>Cuando un objeto está sincronizado, se dice que dicho objeto es un monitor y tiene una variable lock.</p>
	<p>El lock tiene el id de un hilo.</p>

	<h3>Con sincronización</h3>


	<div class="row">
		<div class="col-md-10">

		<pre><code>class Hilo extends Thread{
	static Object mutex = new Object();
	static double variable = 100;
	public void run() {
		<span class="green">//El par&aacute;metro del siguiente m&eacute;todo es un objeto (un Object, un String, un Integer...) no nulo sobre el cual se va a sincronizar.EL objeto mutex ser&iacute;a una especie de guardia de tr&aacute;fico que decide quien pasa y quien no</span>
		synchronized(mutex){ 
			try {
				variable-=10;			<span class="green">//90 80 70</span>
				Thread.sleep(500);
				System.out.println(&quot;Variable1:&quot; + variable);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}
	}
}</code></pre>	
<p class="green">Output: <br>
Variable1:90.0 <br>
Variable1:80.0 <br>
Variable1:70.0 
</p>

		</div>
		<div class="col-md-2"><?= getRes("video_premium",248906052) ?>
</div>
	</div>

	<h3>Implementar Runnable</h3>
<div class="row">
	<div class="col-md-10">

	<p>Me creo una instancia de la clase Thread, pasándole como parámetro un objeto de una clase que implementa la interfaz Runnable.</p>
	<pre><span class="black bold">M&eacute;todo Main de las siguientes implementaciones de hilos:</span><code>
public class Main {

	public static void main(String args[]){
		Thread hilo1 = new Thread(new Hilo());
		Thread hilo2 = new Thread(new Hilo());
		Thread hilo3 = new Thread(new Hilo());
		
		hilo1.start();
		hilo2.start();
		hilo3.start();		
	}
}</code></pre>
	<div class="notas">
	<p>Nota: <br>
¿Por qué existe la interfaz Runnable? <br>
Porque en Java sólo es posible heredar de una clase y por tanto a veces no será posible hereder de la clase Thread.</p>
</div>

	</div>
	<div class="col-md-10">
	<?= getRes("video_premium",248906062) ?>
	</div>
</div>

	
	<h3>Sin sincronización</h3>

	<div class="row">
		<div class="col-md-6">
		<pre><code>class Hilo implements Runnable{
	static double variable = 100;
	public void run() {
		try {
			variable-=10;			<span class="green">//70 70 70</span>
			Thread.sleep(500);
			System.out.println(&quot;Variable1:&quot; + variable);
		} catch (InterruptedException e) {
			e.printStackTrace();
		}
	}
}</code></pre>
		</div>
		<div class="col-md-6">
			
<p class="green">Output: <br>
Variable1:70.0  <br>
Variable1:70.0  <br>
Variable1:70.0 </p>

		</div>
	</div>
	
<h3>Con sincronización</h3>

<div class="row">
	<div class="col-md-10">
<pre><code>class Hilo implements Runnable{
	
	static Object mutex = new Object();
	static double variable = 100;
	public void run() {
		synchronized(mutex){ <span class="green">//Aqu&iacute; viene un objeto (un Object, un String, un Integer...) no nulo 	sobre el cual se va a sincronizar. Es posible usar cualquier objeto porque los m&eacute;todos que hacen de sem&aacute;foro pertenecen a la clase Object.
		//EL objeto mutex ser&iacute;a una especie de guardia de tr&aacute;fico que decide quien pasa y quien no</span>
			try {
				variable-=10;		<span class="green">//90 80	70</span>
				Thread.sleep(500);
				System.out.println(&quot;Variable1:&quot; + variable);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}
	}
}</code></pre></div>
	<div class="col-md-2">
		
<p class="green">Output: <br>
Variable1:90.0 <br>
Variable1:80.0  <br>
Variable1:70.0 
</p>

	</div>
</div>


<h3><span class="text-dark">Ejercicio: </span>hilos</h3>

<div class="row">
	<div class="col-md-6">

	<p>Tenemos una aplicación a la que se conectan de manera concurrente 2 personas (2 hilos). Cada una de estas personas debe realizar 3 operaciones. Suponemos que cada una de estas operaciones tardará 10 milisegundos en realizarse. Representaremos las 10 tareas que realizará cada una de estas personas con el siguiente código:</p>

<pre><code>for (int i = 0; i < 3; i++) {
System.out.println("operacion " + i);
	Thread.sleep(10);
}</code></pre>
	</div>
	<div class="col-md-6">

	<p>Si no sincronizamos este código veremos el código de cada una de estas dos personas se entremezclará, dando lugar a unas trazas como estas:</p>
<pre><code>operacion 0
operacion 0
operacion 1
operacion 1
operacion 2
operacion 2</code></pre>

<p>Queremos sincronizar el código para que las operaciones de cada persona no se entremezclen</p>
	</div>
</div>
</div>
</article>
</main>
<?php 
 
});
include $path."/diapos_theme/footer.php";
?>