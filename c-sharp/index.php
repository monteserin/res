<?php 
/*
$titulo_curso="Curso de c#";

//No he añadido el slash a la búsqueda de strpos porque el slash en windows y en linux son diferentes
$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
include $path."diapos_theme/head.php";

add_action( 'genesis_after_header', function(){
	global $titulo_curso;
	*/
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Curso de c#",
  "description": "Curso de c#.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Monteserín",
    "sameAs": ["https://pablomonteserin.com/","https://www.facebook.com/pablomonteserincom/","https://www.linkedin.com/in/%E2%99%A5-pablo-monteser%C3%ADn-59079728/","https://www.youtube.com/user/PabloMonteserinTutor","https://twitter.com/monteserin1982"]
  }
}
</script>

    <h2>Curso de <?= $titulo_curso?></h2>

<section id="amor" class="verIndice">
				<article id="inicio_del_documento" class="indice">
          <h3>Índice del curso de <?= $titulo_curso?></h3>
<ol>  
	<li><a href="#que_net">¿Qué es .NET?</a></li>
	<li><a href="#que_es_c">¿Qué es C#?</a></li>
	<li><a href="#clases">Clases</a></li>
	<li><a href="#objetos">Objetos</a></li>
	<li><a href="#hola-mundo">Hola Mundo</a></li>
	<li><a href="#comentarios">Comentarios</a></li>
	<li><a href="#variables">Variables</a></li>
	<li><a href="#constantes">Constantes</a></li>
	<li><a href="#operadores">Operadores</a></li>
	<li><a href="#lectura-datos">Lectura de datos</a></li>
	<li><a href="#ejercicios-operadores-aritmeticos">Ejercicios con operadores aritméticos</a></li>
	<li><a href="#if">If</a></li>
	<li><a href="#switch">Estructura de control: Switch</a></li>
	<li><a href="#bucle-for">Estructura de control: bucle for</a></li>
	<li><a href="#bucle-while">Estructura de control: bucle while</a></li>
	<li><a href="#bucle-while">Estructura de control: bucle while</a></li>
	<li><a href="#metodos">Métodos</a></li>
	<li><a href="#modificador-static">Modificador static</a></li>
	<li><a href="#arrays">Arrays</a></li>
	<li><a href="#ahorcado">Ahorcado</a></li>
	<li><a href="#tres-en-raya">Ejercicio - Tres en raya</a></li>
	<li><a href="#modificadores-acceso">Modificadores de acceso</a></li>
	<li><a href="#constructores">Constructores</a></li>
	<li><a href="#herencia">Herencia</a></li>
	<li><a href="#polimorfismo">Polimorfismo</a></li>
	<li><a href="#abstraccion">Abstracción</a></li>
	<li><a href="#interfaces">Interfaces</a></li>
	<li><a href="#clases-internas">Clases internas</a></li>
	<li><a href="#garbage-collector">Garbage Collector</a></li>
	<li><a href="#encapsulamiento">Encapsulamiento</a></li>
	<li><a href="#contenedores">Contenedores</a></li>
	<li><a href="#genericos">Genéricos</a></li>
	<li><a href="#crud_sin_base-datos">Ejercicio alta, baja, modificación y consulta en una Lista</a></li>
	<li><a href="#juego-oca">Ejercicio – juego de la oca</a></li>
	<li><a href="#recorrer-map">Recorrer un Map</a></li>
	<li><a href="#excepciones">Excepciones</a></li>
	<li><a href="#hilos">Hilos</a></li>
</ol>;
</article>
</section>

<main class="curso">

<h3 id="que_net">¿Qué es .NET?</h3>

<p>Es una plataforma de desarrollo para varios lenguajes (c#, VB, C++, Javascript...) creada por Microsoft. No existe un lenguaje .NET propio. El resultado final de programar en un lenguaje u otro no varia la funcionalidad del software, ya que la funcionalidad de la aplicación viene dada de la plataforma .NET, no del lenguaje que hayas usado.</p>

<p>Existen varias implementaciones de .NET:</p>
<ul>
<li>.Net Framework (la original). Tiene módulos específicos como WPF(windows presentation foundation), Windows Forms, o ASP.NET. Es apropiada para desarrollar aplicaciones para windows con interfaces de usuario complejas o para aplicaciones web en el IIS.</li>
<li>.Net Core (nueva versión desarrollada desde cero). No tiene todos los módulos del .Net Framework original. Mientras que en el .Net Framework las aplicaciones web sólo se pueden ejecutar en el IIS, en el .Net Core, podrán desplegarse en cualquier servidor creado para esta implementación. Es apropiado para desarrolloar aplicaciones web que no usen el servidor de Windows.</li>
<li>.Net Xamarin (proyecto mono). Permite ejecutar aplicaciones para el motor de juegos de Unity. Es apropiado para desarrollar aplicaciones para móviles.</li>

</ul>

<p>Todas estas implementaciones comparten Compiladores, lenguajes. Hay unas especificaciones comunes a todas las implementaciones de .Net llamada <span class="bold">.Net Standard</span> </p>

<ul>
<li>La máquina Virtual de .NET: CLR (Common Language Runtime). Gestiona la ejecución de programas dentro de la plataforma .NET. Para ello:
  <ul>
    <li>Gestiona la memoria.</li>
    <li>Coordina los hilos de ejecución.</li>
    <li>Lanza las aplicaciones.</li>
  </ul>
 Las aplicaciones de .NET se compilan a un lenguaje intermedio común, que será el que utilice el CLR.</li>

<li>CTS (Common Type System) y CLS (Common Language Specification) se encargan de la seguridad en el tipado. Por ejemplo, c# tiene un dato de tipo <span class="bold">int</span>, y VB.NET tiene un dato de tipo <span class="bold">Integer</span>. Tras la compilación ambos tipos de dato usarán la misma estructura.</li>
</ul>
<img src="./img/cts.png" alt="cts">
  <h3 id="que_es_c">¿Qué es C#?</h3>
  <p>Es el lenguaje de programación más popular para programar en .Net. Es parecido a Java.</p>
  <h3>Instalación de Visual Studio</h3>
<p>Visual Studio es el entorno de programación para aplicaciones .NET.</p>
  <p><a href="https://visualstudio.microsoft.com/" target="_blank">Enlace de descarga de Visual Studio</a>. La versión Community es gratuita y sólo requiere registrarnos.</p>
  <h3>Visual Studio</h3>
  <h4>Nuevo proyecto</h4>
  <p>Para poder crear un proyecto en el que usemos la consola, debemos tener instalado el siguiente módulo:</p>
<img src="./img/net-desktop-development.png" alt=".net desktop development">
  <p>Crearemos Aplicaciones de Consola.</p>
  <img src="./img/console-app.png" alt="console app">
  <p>Se nos crea una pequeña aplicación con el siguiente código fuente:</p>
<pre><code>namespace ConsoleApp{
  class Program{
    static void Main(string[] args){
      Console.WriteLine("Hello World!");
    }
  }
}</code></pre>
<h4>Renombrar ficheros</h4>
<p>Podemos hacerlo directamente desde la interfaz visual</p>
<img src="./img/ficheros-proyecto-c-sharp.png" alt="ficheros proyecto c sharp">
<p>Si lo que quieres es renombrar el nombre de la carpeta del proyecto, hazlo, y luego abre el fichero <span class="bold">.sln</span> con un editor de texto plano para especificar el nuevo nombre.</p>
  <h4>Establecer varios puntos de arranque para nuestra aplicación</h4>
<p>Si tienes varios <span class="bold">static void main</span> en tu aplicación, es probable que tengas que reiniciar Visual Studio para que todos los puntos de entrada sean detectados.</p>
  <p>Menú Project -> Properties... -> Application -> Startup object -> Seleccionamos la clase que tiene el <span class="bold">static void main</span> deseado.</p>
<h2 id="clases">Clases</h2>
	<p>Plantilla o molde a partir de la cual se construye un objeto. Una clase contiene:</p>
	<ul>
		<li><strong>atributos</strong>: propiedades de los objetos (edad, marca, altura, peso...)</li>
		<li><strong>métodos</strong>: acciones que pueden realizar los objetos (corrar, saltar, traducir, pensar...)</li>
	</ul>
<pre><code>using System;

class Cat{
	string nombre;
	int edad;

	public void jugar(){
		//...
	}
	public void dormir(){
		//...
	}
}</code></pre>
	<pre><code>class &lt;NombreClase&gt;{
	<span class="green">// Declaración de atributos</span>
	&lt;tipo&gt; &lt;atributo&gt;;
	<span class="green">// Declaración de métodos</span>
	&lt;tipo&gt; &lt;método&gt; (&lt;args&gt;){
		... 
	}
}</code></pre>
		<h2 id="objetos">Objetos</h2>
	<p>Se podría decir que un objeto (o instancia de una clase) es una clase con valores concretos.</p>
	<div style="display: flex;text-align: center;">
		<div>
			<p style="margin-bottom: 0"><strong>Clase</strong>:</p>
	<img src="img/gato.svg" alt="Clase Java Gato" style="max-width:200px"">
		</div>
		<div>
			<p style="margin-bottom: 0"><strong>Objeto</strong>;</p>
	<img style="max-width:200px" src="img/instanciaGato.svg" alt="Clase Java Gato"> 
		</div>
	</div>
	<h3>Nomenclatura</h3>
	<ul>
		<li><span class="black bold">Clases, interfaces, constructores y métodos</span>: EstoEsUnaClase</li>
		<li><span class="black bold">Variables</span>: estoEsUnaVariable</li>
		<li><span class="black bold">Constante</span>: ESTO_ES_UNA_CONSTANTE</li>
	</ul>
		<h2 id="hola-mundo">Hola Mundo</h2>
	<pre><code>namespace Exercises{
  class <span class="red bold">Program</span>{
    static void Main(string[] args){</span> <span class="green">// Este método es el punto de inicio de toda aplicación</span>
      <span class="red bold">Console</span>.<span class="purple bold">WriteLine</span>("Hello World!");
    }
  }
}</code></pre>
	<p><span class="bold">Console.WriteLine();</span> <br>
Nos permite escribir trazas en la consola.
</p>
	<h2 id="comentarios">Comentarios</h2>
	<pre><code>namespace Exercises{
	class Comentarios{
		static void Main(string[] args){
			//Esto es un comentario de una sola linea
			/*
			* Y esto un comentario de varias lineas
			* */
			Console.WriteLine("Hello World!");
		}
	}
}</code></pre>
	<h2 id="variables">Variables</h2>

	<p>Una variable es un espacio de memoria cuya información puede variar durante la ejecución de la aplicación.</p>
	<p>En java las variables son altamente tipadas.</p>
	<pre><span class="black bold">Declaración:</span><code>int n;
int a,b,c;
&lt;tipo&gt; &lt;identificador&gt;; 
&lt;tipo&gt; &lt;identificador_1&gt;,  &lt;identificador_2&gt;...;</code></pre>
<pre><span class="black bold">Asignación:</span><code>numero = 42;
<span class="red bold">&lt;variable&gt;</span> = <span class="orange bold">&lt;expresi&oacute;n&gt;;</span></code></pre>
<p><span class="red bold">La parte izquierda será una variable</span></p>
<p><span class="orange bold">La parte derecha puede ser un literal, una variable, una función o una combinación de todos.</span></p>
	<pre><span class="black bold">Ejemplos:</span><code>namespace Exercises{
	class Variables{
		static void Main(string[] args){
			string myString = "this is a string";
			int i = 5;
			int j = 3;
			Console.WriteLine(myString);
			Console.WriteLine(i + " + " + j);
			Console.WriteLine(i + j);
			Console.WriteLine("" + i + j);
		}
	}
}
<span class="green">Output:
Soy una cadena
5 + 3
8
53</span></code></pre>
		<h3 id="variables">Variables</h3>
<h4>Características de las variables</h4>
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
	<h4>Problema de conversión de tipos</h4>
	<p>Al convertir la información de un tipo de dato a otro tipo de dato en el que no cabe dicha información, el valor almacenado se verá modificado.</p>
	<pre><code>int int_x = 32767;
int int_y = 32768;
int int_z = 32769;
<span class="green">// El rango de un dato de tipo short llega hasta 32767</span>

short short_x = (short) int_x;
short short_y = (short) int_y;
short short_z = (short) int_z;

Console.WriteLine("1 - Conversión a short del int 32767: " + short_x);
Console.WriteLine("2 - Conversión a short del int 32768: " + short_y);
Console.WriteLine("2 - Conversión a short del int 32769: " + short_z);

byte byte_x = (byte) int_x;
byte byte_y = (byte) int_y;
byte byte_z = (byte) int_z;

Console.WriteLine("3 - Conversión a byte del int 32767: " + byte_x);
Console.WriteLine("4 - Conversión a byte del int 32768: " + byte_y);
Console.WriteLine("5 - Conversión a byte del int 100: " + byte_z);</code></pre>
		<p class="green"><span class="green bold">Output</span>: <br>
1 - Conversi&oacute;n a short de 32767: 32767 <br>
2 - Conversi&oacute;n a short de 32768: -32768 <br>
2 - Conversi&oacute;n a short de 32769: -32767 <br>
3 - Conversi&oacute;n a byte de 32767: -1 <br>
4 - Conversi&oacute;n a byte de 32768: 0 <br>
5 - Conversi&oacute;n a byte de 100: 1 </p>
	<p>El rango del tipo de dato short es: -32768 to 32767 <br>
El rango del tipo de dato byte es: -128 to 127</p>
	<h4>Casting</h4>
	<p>Una primitiva grande puede almacenar la información de una de menor tamaño.</p>
	<p>Una primitiva pequeña puede almacenar la información de una de mayor tamaño, pero habrá pérdida de información.</p>
	<p><span class="blue">El tipo de la variable apuntadora</span> tiene que ser el mismo o más genérico que <span class="red">el tipo de la variable a la que apunta</span>.</p>
	<p><span class="blue">Animal</span> animal = <span class="red">new Gato();</span></p>
	<img src="img/tipos_primitivas.svg" alt="tipos de primitivas">
	<h4>Ejercicios variables</h4>
		<ol>
		<li>Declarar una variable 'i' de tipo int, una variable 'd' de tipo double y una variable 'c' de tipo char. Asignar un valor a cada una. Mostrar por pantalla el valor de cada variable utilizando tres llamadas a Console.WriteLine(). Tener en cuenta que:
			<ol>
				<li>Para dar valor a una variable de tipo double ponemos una "d" al final del valor.</li>
				<li>Para dar valor a una variable de tipo char, esta debe ir entre comillas simples.</li>
			</ol>
<?php // getRes('ejemplo','./ex/variables/exercises/Ex1.cs', 'Declarar variables') ?>
</li>
<li>Intercambiar el contenido de dos variables
<?php // getRes('ejemplo','./ex/variables/exercises/Ex2.cs', 'Intercambiar variables en Java') ?>
<pre><code>int a = 5;
int b = 7;
<span class="green">// aquí hay que poner código</span>
Console.WriteLine(a); <span class="green">//Debería mostrar 7</span>
Console.WriteLine(b); <span class="green">//Debería mostrar 5</span></code></pre>
</li></ol>
		<h2 id="constantes">Constantes</h2>


	<p>Una constante es un espacio de memoria cuya información no puede variar durante la ejecución del programa.</p>
	<p>Van precedidas del modificador final.</p>
	<p>Si descomento la línea, obtendré un error.</p>
<pre><code>const float PI = 3;
Console.WriteLine(PI);
<span class="green">//PI=5;</span></code></pre>


	<h2 id="operadores">Operadores</h2>



	<h3 id="concatenacion">Operador de concatenación</h3>
<pre><code>Console.WriteLine("Hello " + "Juan");
Console.WriteLine("Hello " + name);</code></pre>


	<h3>Ejercicio Saludo</h3>
	<p>Que se muestre un mensaje que diga: “Buenas tardes Jose”, dónde Jose será el valor de una variable.</p>
<div class="row">
<?php // getRes('ejemplo','./ex/variables/SalutationExercise.cs', 'Ver solución') ?>

</div>

<h3 id="aritmeticos">Operadores aritméticos</h3>
<pre><code>Console.WriteLine(7-2);
Console.WriteLine(7*2);
Console.WriteLine(7/2);
Console.WriteLine(7%2);</code></pre>

<h3 id="logicos">Operadores lógicos o booleanos</h3>
<pre><code>Console.WriteLine(7>2);
Console.WriteLine(7&lt;2);
Console.WriteLine(7>=2);
Console.WriteLine(7<=2);
Console.WriteLine(7==2);
Console.WriteLine(7!=2);</code></pre>
	<h2 id="lectura-datos">Lectura de datos</h2>
	<p class="bold black">Lectura del texto introducido por teclado.</p>
	<pre><code>Console.WriteLine("Write anything, please: ");
string variable = Console.ReadLine();
Console.WriteLine("Writed value: " + variable);</code></pre>
<p>Podemos recoger datos de distinto tipo:</p>
<pre><code>Console.WriteLine("Write a number: ");
string number = Console.ReadLine();
int convertedNumber = 0;
int.TryParse(number.Trim(), out convertedNumber);
Console.WriteLine("Writed number: " + convertedNumber);</code></pre>
<p>Si quisieramos obtener el código correspondiente a la tecla pulsada:</p>
<pre><code>int keyCode = Console.Read();</code></pre>
		<h2 id="ejercicios-operadores-aritmeticos">Ejercicios con operadores aritméticos</h2>
	<ol>
		<li>Escribir un programa que calcule el número de segundos que existen en un día. Como todo el mundo sabe, un día tiene 86400 segundos.
<?php // getRes('ejemplo','./ex/operators/exercises/OperadoresEx1.cs','Segundos por día') ?></li>
		<li>Hacer un conversor de euros a dólares. El usuario introduce una cantidad de euros y obtiene su valor en dólares. Supondremos que un euro son dos dólares
<?php // getRes('ejemplo','./ex/operators/exercises/OperadoresEx2ConversorEuros.cs','Conversor euros a dólares') ?>
		</li>
		<li>El IVA para ciertos artículos es del 21%. Realiza un programa que pida un precio y calcule su precio con IVA.
<?php // getRes('ejemplo','./ex/operators/exercises/OperadoresEx3IVA.cs', '') ?></li>
		<li>Leer un número entero por teclado y mostrar por pantalla el doble y el triple.
	<?php // getRes('ejemplo','./ex/operators/exercises/OperadoresEx4DobleTriple.cs', '') ?>
</li>
		<li>Realiza un programa que recoja el ancho y el alto de un rectángulo y calcule el perímetro y el área.
			<?php // getRes('ejemplo','./ex/operators/exercises/OperadoresEx5Rectangulo.cs','') ?>
		</li>
		<li>Hacer un conversor de grados centígrados a grados Fahrenheit. Para ello deberé multiplicar por 9/5 y sumar 32. Como todo el mundo sabe, 20 grados centígrados son 68 grados Farenheit.
<?php // getRes('ejemplo','./ex/operators/exercises/OperadoresEx6Grados.cs','') ?>
		</li>
<li>Vamos a mandar al usuario la caja de sus sueños. Para ello, debemos solicitarle que introduzca su nombre, el material de la caja que quiere recibir, sus dimensiones, y algún comentario. Debemos concatenar esta información para obtener por consola el siguiente mensaje: <br><span class="black bold">"[nombre] ha pedido una caja de [material] con unas dimensiones [dimensiones]. [comentario].</span> <br>
Pablo ha pedido una caja de Madera con unas dimensiones diminutas. Que sea muy bonita
<?php // getRes('ejemplo','./ex/operators/exercises/OperadoresEx7PedidoCaja.cs','') ?>
</li>
	</ol>
	<h2 id="if">Estructuras de control: if</h2>	
	<pre><code>int n1 = 3;
int n2 = 5;
if (n2 &gt n1){
	Console.WriteLine("n2 is bigger than n1");
}</code></pre>
<span class="green">
Output: <br>
n2 is bigger than n1</span>
		<h4>If - else </h4>
<pre><code> int n1 = 3;
int n2 = 5;
if (n1 &gt; n2){
	Console.WriteLine("n1 is bigger than n2");
}else{
	Console.WriteLine("ni is not bigger than n2");
}</code></pre>

<span class="green">Output: <br>
Va a ser que no </span>
		<h5>If – else if</h5>
<pre><code>int n1 = 3;
int n2 = 5;
if ( n1 &gt; n2){
	Console.WriteLine(&quot;n1 is bigger than n2&quot;);
}else if (n2 == n2){
	Console.WriteLine(&quot;va a ser que no&quot;);
}else{
	Console.WriteLine(&quot;&eacute;xito&quot;);
}</code></pre>
<span class="green">Output: <br>
&eacute;xito</span>
	<h5>Ejercicios if</h5>
	<ol>
	<li>Dada una variable que contiene la nota de un examen que va de 0 a 10...
<ul>
	<li>Si es mayor que cinco mostrar el texto "Aprobado".</li>
	<li>Si es igual a cinco, mostrar el texto "Aprobado por los pelos"</li>
	<li>Si es menor que cinco, mostrar el texto "Suspenso".</li>
</ul>
<?php // getRes('ejemplo','./ex/control-structures/if/exercises/IfConditionalEx1.cs','') ?>
	</li>
		<li>Declara una variable 'i' de tipo entero y asígnale un valor. Mostrar un mensaje indicando si el valor de 'i' es positivo o negativo, si es par o impar, si es múltiplo de 5, si es múltiplo de 10 y si es mayor o menor que 100. Consideraremos el 0 como positivo.
<?php // getRes('ejemplo','./ex/control-structures/if/exercises/IfConditionalEx2.cs','evaluar i' ) ?>
		</li>
</ol>
</ol>
		<h3 id="if_especial">If especial – operador ternario</h3>
<pre><code>int a = 5;
int b = 3;

if (a > b) { Console.WriteLine("a is bigger than bb"); }
else { Console.WriteLine("b is bigger than a"); }

string result = (a > b) ? "a is bigger than b" : "b is bigger than a";
Console.WriteLine(result);</code></pre>
<h4>Ejercicios operador ternario</h4>
<ol>
	<li>Declare una variable 'b' de tipo entero y asignarle un valor. Mostrar un mensaje indicando si el valor de 'b' es positivo o negativo. Consideraremos el 0 como positivo. Utiliza el operador condicional (? : ) dentro del <span class="bold">Console.WriteLine</span> para resolverlo.
<div class="row">
		<?php // getRes('ejemplo','./ex/control-structures/ejercicios-operador-ternario/OperadorTernarioEx1.cs', '') ?>
</div>
	</li>
	<li>Declarar una variable 'i' de tipo entero y asignarle un valor. Muestra un mensaje indicando si 'i' es par o impar. Utiliza el operador condicional ( ? : ) dentro del <span class="bold">Console.WriteLine</span> para resolverlo.
		<?php // getRes('ejemplo','./ex/control-structures/ejercicios-operador-ternario/OperadorTernarioEx2.cs','') ?>
	</li>
</ol>
	<h3 id="ejercicio_calculadora">Ejercicio calculadora</h3>	
	<?php // getRes('ejemplo','./ex/control-structures/CalculatorExercise.cs', '') ?>
	<p>Hacer una calculadora que determine la operación a realizar por medio de una estructura de control if.</p>
	<p>La calculadora debe hacer uso de los operadores aritméticos <span class="bold">+</span>, <span class="bold">-</span>, <span class="bold">*</span> y <span class="bold">/</span>.</p>
		<h2 id="switch">Estructura de control: Switch</h2>
	<pre><code>char option = 'b';
switch (option){
	case 'a':
		Console.WriteLine("Solution1");
		break;
	case 'b':
		Console.WriteLine("Solution2");
		break;
	default:
		Console.WriteLine("default");
		break;
}</code></pre>
<p>Nota:
Para evaluar cadenas de texto (String) en vez de letras (char), pondré estos caracteres entre comillas dobles en vez de simples.</p>
<p class="green">Output: <br>
Solucion2</p>
	<h3>Ejercicio – Hacer una calculadora con switch</h3>
		<?php // getRes('ejemplo','./ex/control-structures/ExCalculadoraConSwitch.cs', '') ?>
	<p>Hacer una calculadora que determine la operación a realizar por medio de una estructura de control switch.</p>
	<p>La calculadora debe hacer uso de los operadores aritméticos +, -, *, /  y</p>
		<h2 id="bucle-for">Estructura de control: bucle for</h2>
<pre><code>for(int i=0; i&lt;10;i++){
	Console.WriteLine(i);
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
	<h3>Ejercicios bucle for</h3>
<ol>
	<li>
	<p>Imprimir los números pares que hay dentro de los 100 primeros números naturales.</p>
	<p>Nota: No utilizar la estructura de control if para resolver este ejercicio.</p>
	<?php // getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx1.cs','') ?></li>
	<li><p>Imprimir los números pares que hay dentro de los 100 primeros números naturales</p>
	<p>Utilizaremos el operador % para separar los pares de los impares.</p>
	<p>Nota: El operador “%” nos da el resto de dividir un número entre otro. <br>
Ej: 7%2=1</p>
<?php // getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx2.cs','') ?>
	</li>
	<li>
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
<?php // getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx3.cs','') ?>
	</li>
	<li>Mostrar la tabla de multiplicar de los números del 1 al 9. Usaremos dos bucles anidados.
	<?php // getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx4TablaMultiplicar.cs','') ?>
	</li>
	<li>
<p>Adivinar el número secreto. En cada iteración del bucle for, se le preguntará al usuario cuál es el número secreto (un número del 1 al 5). Si al cabo de tres intentos no lo ha acertado, el usuario pierde. Si lo acierta, gana.</p>
<img src="img/numero-secreto.svg" class="img" alt="Diagrama de flujo de ejercicio de Javascript para adivinar un número secreto">
<h5>Notas:</h5>
	<p>Para romper la repetición de un bucle, podemos utilizar el comando break;</p>
<?php // getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx5NumeroSecreto.cs','') ?>
	</li>
	<li>
<p>Calcular utilizando un bucle for, la enésima potencia de un número. Debemos recoger del usuario la base y el exponente. La 4ª potencia será: <br>
2 x 2 x 2 x 2 = 16</p>
<img src="img/enesima-potencia.svg" class="img" style="max-width: 600px" alt="Diagrama de flujo de ejercicio de Javas para calcular la cuarta potencia de un número">
<?php // getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx6Potencia.cs','') ?>
		</li>
	<li>
<p>El factorial de un número entero positivo se define como el producto de todos los números naturales anteriores o iguales a él. Se escribe n!, y se lee "n factorial". 
(Por definición el factorial de 0 es 1: 0!=1)
Por ejemplo, 5! = 5·4·3·2·1 = 120</p>
<img src="img/factorial.svg" class="img" style="max-width: 700px" alt="Diagrama de flujo de ejercicio java">
<p><strong>Variaciones del ejercicio para los que terminen antes </strong>: Este ejercicio se puede resolver, en general, de cuatro formas diferentes, con un bucle for, con un bucle while, y multiplicando los factoriales de mayor a menor o de menor a mayor.</p>
	<?php // getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx7Factorial.cs','') ?>
	</li>
</ol>
<h2 id="bucle-while">Estructura de control: bucle while</h2>
<pre><code> string iWantToPlay = "si";
while (iWantToPlay == "si"){
	//...
	Console.WriteLine("do you want to keep playing?");
	iWantToPlay = Console.ReadLine();
}</code></pre>

<pre><code>int i = 0;
while (i < 10){
	Console.WriteLine(i);
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
9</p>
<h3 id="numeroSecretoConWhile">Ejercicios bucles</h3>

<ol>
	<li><p>Repetir el juego del número secreto, pero ahora después de jugar se le preguntará al usuario si desea seguir jugando. Si no desea seguir jugando la variable booleana "quieroJugar" que evalúa el bucle while valdrá false, con lo cual termina el juego.</p>	
<?php // getRes('ejemplo','./ex/control-structures/bucle-while/exercises/BucleWhile1.cs','') ?>
	</li>
	<li>
<p>El usuario debe introducir su nombre, en el caso de que haya introducido información, se le preguntará si los datos son correctos. Si responde que sí, se le indicará que puede seguir con el exámen. Si responde que no, volveremos a la pregunta inicial.
En caso de que al principio de todo no hubiese escrito nada, se mostrará un mensaje con la palabra "error"</p>
<p>Para recoger un valor vacío ("") cuando el usuario pulsa la tecla enter sin introducirar ningún valor, podemos usar el método <span class="i">scanner.nextLine();</span></p>
<img src="img/entrada-nombre.svg" class="img" style="max-width: 700px" alt="Diagrama de flujo de ejercicio java">
<?php // getRes('ejemplo','./ex/control-structures/bucle-while/exercises/BucleWhile2.cs','') ?>
	</li>
	<li>Leer números hasta que el usuario introduzca un -1 y mostrar cuantos fueron introducidos.
<?php // getRes('ejemplo','./ex/control-structures/bucle-while/exercises/BucleWhile3RecogidaNumeros.cs','') ?>
</li>
</ol>
	<h2 id="metodos">Métodos</h2>
	<p>Son funciones aplicadas a objetos.</p>
	<p>Una función es un subprograma que realiza una tarea específica y devuelve un valor</p>
	<h3 id="metodos_cadenas">Métodos para trabajo con cadenas</h3>
	<pre><code>string nombre = "Rodolfo";
Console.WriteLine(nombre.Substring(0, 3));
Console.WriteLine(nombre.IndexOf('d'));
Console.WriteLine(nombre.ToUpper());
Console.WriteLine(nombre.ToLower());
Console.WriteLine(nombre.Length);</code></pre>
<p class="green">Output: <br>
Rod <br>
2 <br>
RODOLFO <br>
rodolfo <br>
7</p>
<h4>Ejercicio con cadenas de texto</h4>
<ol>
	<li>En el texto "Dábale arroz a la zorra el Abad", contar el número de veces que aparece la letra "a". Usaremos una estructura "if" con substring e equals que irá dentro de un bucle for.
	<?php // getRes('ejemplo','./ex/methods/WithStrings.cs','') ?>
</li>
</ol>
	<h3 id="metodo_no_devuelve_nada">Método que no devuelve nada (void), sin parámetros</h3>
	<pre><code>class WithoutReturn{
	public void Greet(){
		Console.WriteLine("Good Afternoon!");
	}

	static void Main(string[] args){
		WithoutReturn withoutReturn;
		withoutReturn = new WithoutReturn();
		withoutReturn.Greet();
	}
}</code></pre>
	<h3 id="metodo_no_devuelve_nada_con_parametros">Método que no devuelve nada, con parámetros</h3>
	<pre><code> class WithoutReturnWithParameter{
	public void Greet(string name){
		Console.WriteLine("Good afternoon " + name + "!");
	}
	
	static void Main(string[] args){
		WithoutReturnWithParameter withoutReturnWithParameter;
		withoutReturnWithParameter = new WithoutReturnWithParameter();
		withoutReturnWithParameter.Greet("Pablo");
	}
}</code></pre>
	<h4 id="ejerciciosFuncions">Ejercicios con funciones</h4>
	<p>Resolveremos los siguientes ejercicios definiendo una función con parámetros de entrada y que siempre devolverá un valor que procesaremos en la clase main,</p>
	<ol>
		<li>Crear y llamar a un método que recibe un número y calcula su cubo. 
	<?php // getRes('ejemplo','./ex/methods/exercises/Exercise1Cube.cs','') ?>		</li>
		<li>Crear y llamar a un método que recibe la velocidad en Km/hora y la muestre en metros/hora.
<?php // getRes('ejemplo','./ex/methods/exercises/Exercise2Velocity.cs','') ?>			</li>
		<li>Crear y llamar a un método que recibe el ancho y el alto de un rectángulo y calcula su perímetro. <br>
<strong>Perímetro: </strong> 2*ancho + 2*alto <br>
Cuando una función recibe varios parámetros, estos irán separados por coma. Ejemplo: 
<pre><code>calculaPerimetro(int alto, int ancho);</code></pre>
<?php // getRes('ejemplo','./ex/methods/exercises/Exercise3Rectangle.cs','') ?>
</li>
		<li>Crear y llamar a un método que recibe la base y la altura de un triángulo y calcula su área. <br>
			<strong>Area triángulo </strong> = base*altura/2
<?php // getRes('ejemplo','./ex/methods/exercises/Exercise4Triangle.cs','') ?><a class="ejemplo" href="ex/area-triangulo/Main.java"></a></li>
<li>Utilizando estas dos funciones:
				<ul>
					<li>calculaPerimetro(int radio); <br><strong>Perímetro de la circunferencia</strong> = 2*PI*Radio</strong></li>
					<li>calculaArea(int radio); <br><strong>Area de la circunferencia</strong> = PI*Radio<sup>2</sup></li>
				</ul>
			Leer por teclado el valor del radio de una circunferencia y mostrar por pantalla su perímetro y area.
			<?php // getRes('ejemplo','./ex/methods/exercises/Exercise5Circunference.cs','') ?>
		</li>
		<li>Repetir el ejercicio de la calculadora utilizando funciones para las operaciones aritméticas. Debemos declarar 4 funciones con dos parámetros de entrada cada una: suma(int a, int b), resta(int a, int b,), multiplicacion(int a, int b), division(int a, int b).
<?php // getRes('ejemplo','./ex/methods/exercises/Exercise6Calculator.cs','') ?>			
		</li>
	</ol>
<h3 id="metodo_devuelve_algo">Métodos que devuelven algo</h3>
	<pre><code>class WithReturn{
	public string Greet(string parameter){
		string salutation = "Buenas tardes " + parameter;
		return salutation;
	}
	
	static void Main(string[] args){
		WithReturn withReturn;
		withReturn = new WithReturn();
		withReturn.Greet("John");
	}
}</code></pre>
<h3>Ejercicios return</h3>
<p>Repetir los 6 ejercicios anteriores, pero añadiendo un return a las funciones y utilizando el valor que estas devuelven.</p>
<h3 id="coste_hotel">Ejercicio coste viaje</h3>
<?php // getRes('ejemplo','./ex/methods/exercisesconreturn/TravelCost.cs','') ?>
<p>A lo largo de este ejercicio, deberemos programar 3 funciones:</p>
<ul>
	<li><strong>costeHotel()</strong></li>
	<li><strong>costeAvion()</strong>.</li>
	<li><strong>costeAlquilerCoche()</strong>.</li>
</ul>
	<h5>Ejercicio - coste hotel <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h5>
	<p>Además del public static void main que te paso más bajo, crea una función llamada <strong>costeHotel()</strong> que recibe como parámetro el número de noches. La función debe devolver cuanto es necesario pagar teniendo en cuenta que cada noche cuesta 140 euros.</p>
	<pre><code> static void Main(string[] args){
	TravelCost travelCost = new TravelCost();
	int nights = 0;
	Console.WriteLine("Introduzca el número de noches");
	int.TryParse(Console.ReadLine(), out nights);
	Console.WriteLine("Introduzca el nombre del destino");
	string target = Console.ReadLine();

	int r1 = travelCost.HotelPrice(nights);
	int r2 = travelCost.AirPlanePrice(target);
	int r3 = travelCost.RentCatPrice(nights);

	int totalPrice = r1 + r2 + r3;
	Console.WriteLine("Resultado: " + totalPrice);
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
<h3 id="coleccion_ejercicios_metodos">Colección de ejercicios</h3>
<p><a href="preguntas-java.php" target="_blank">Ver colección de ejercicios.</a></p>
<p><a href="ex-competicion-java.zip">Ver el código fuente de los ejercicios.</a></p>
	<h2 id="modificador-static">Modificador static</h2>
	<h3 id="metodos_static">Métodos static</h3>
	<p>No precisan de una instancia para ser invocados. </p>
<pre><code>class Methods{
	static void Main(string[] args){
		ClassWithStaticMethod.Greet();
	}
}

class ClassWithStaticMethod{
	public static void Greet(){
		Console.WriteLine("Good morning!");
	}
}</code></pre>
<p>En <span class="bold">C#</span> no es posible llamar a un método estático desde una instancia. </p>
	<p>Los métodos static no pueden usar las características no static de una clase.</p>
<pre><code>class VariableAccess{
	string variable = "hello";
	static void Main(string[] args){
		//variable = "goodbye";
	}
}</code></pre>
	<h3>Ejercicio</h3>
	<p>Rehacer la calculadora, pero convirtiendo sus cuatro métodos en static.</p>
	<?php // getRes('ejemplo','./ex/methods/static/CalculatorWithStatics.cs','') ?>
	<h3 id="tipos_var_x_pos">Tipos de variables por su posición</h3>
	<pre><code>class VariablesSegunPosicion{
	String atributo;
	static void Main(string[] args){
		// Es necesario inicializar una variable local para poder usarla
		String variableLocal = null; 
		variableLocal.ToString();
	}
}</code></pre>
	<h3 id="variables_static">Variables static</h3>
	<p>Van precedidas del modificador <span class="black bold">static</span>.</p>
	<p>El modificador static permite acceder a las variables y métodos aunque no tengamos una instancia del objeto que los contiene.</p>
	<p>Al contrario que con las variables no static, no habrá una por cada instancia de una clase, sino una para todas las instancias de la clase.</p>
<pre><code> class StaticVariable{
	static int staticVariable = 0;
	int notStaticVariable = 0;

	static void Main(string[] args){
		//Incrementamos la variable estática
		StaticVariable.staticVariable++;
		StaticVariable.staticVariable++;

		//Incrementamos la variable no estática
		StaticVariable variableStatic_1 = new StaticVariable();
		StaticVariable variableStatic_2 = new StaticVariable();

		variableStatic_1.notStaticVariable++;
		variableStatic_2.notStaticVariable++;

		//Mostramos resultados

		Console.WriteLine("variableStatic: " + StaticVariable.staticVariable);
		Console.WriteLine("variableNoEstatica1: " + variableStatic_1.notStaticVariable);
		Console.WriteLine("variableNoEstatica2: " + variableStatic_2.notStaticVariable);
	}
}</code></pre>
		<h2 id="arrays">Arrays</h2>
	<p>Un array es una colección de datos ordenados del mismo tipo y de longitud fija. Una vez que adjudicamos un tamaño al array, no será posible modificarlo. Hay otro tipo de datos llamado "colecciones" cuya longitud si podré modificar.</p>
	<pre><code>class ArraysFample{
	static void Main(string[] args){
		string[] dias1 = { "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" };
		string[] dias2 = new string[7];
		dias2[0] = "Monday";
		dias2[1] = "Tuesday";
		dias2[2] = "Wednesday";
		dias2[3] = "Thursday";
		dias2[4] = "Friday";
		dias2[5] = "Saturday";
		dias2[6] = "Sunday";

		Console.WriteLine(dias1[5]);
		Console.WriteLine(dias2[3]);
	}
}</code></pre>
	<p class="red">Al instanciar un array debe quedar definida la longitud del mismo.</p>
	<h3>Ejercicios arrays</h3>
	<ol>
		<li>Crea un array con cinco nombres de persona y recórrelo con un bucle for mostrando el texto "Conozco a alguien llamado ". Tener en cuenta que la propiedad .length de un array me devuelve el número de elmentos que contiene.
	<?php // getRes('ejemplo','./ex/arrays/exercises/ArraysEx1.cs','') ?></li>
		<li>Recorrer la siguiente lista con un bucle imprimiendo el doble de cada número: <br>
myList = {1,9,3,8,5,7}
<?php // getRes('ejemplo','./ex/arrays/exercises/ArraysEx2.cs','') ?>
		</li>
				<li>El usuario debe introducir un número correspondiente a cierto mes (un valor entre 1 y 12) y la aplicación debe mostrar el nombre del mes correspondiente a dicho número.<br> Para resolver el ejercicio utilizaremos un array de strings dónde cada una de las posiciones del array será cada uno de los meses del año.
				<?php // getRes('ejemplo','./ex/arrays/exercises/ArraysEx3.cs','') ?>
			</li>
</ol>


<h2 id="aleatorios">Números aleatorios</h2>
<?php // getRes("video_premium",329528327) ?>
	<h3>Generar número aleatorio dentro de un rango</h3>
	<pre><code>Math.floor(Math.random() * (MAX - MIN + 1)) + MIN;</code></pre>
	<p>Como ejemplo, si deseamos generar un número aleatorio entre 25 y 75, la sentencia sería</p>
	<pre><code>Math.floor(Math.random() * (75-25+1)) + 25;</code></pre>
	<h3 id="ej_num_aleatorio">Ejercicio número aleatorio</h3>
	<p>Obtener un número aleatorio entre 5 y 7.</p>
	<?php // getRes('ejemplo','./ex/randomNumbers/RandomBetween5And7.cs', 'Ver ejemplo') ?>

	<h3 id="ejercicio_letra_aleatoria">Ejercicio letra aleatoria</h3>
	<p>Obtener una letra aleatoria de tu nombre.</p>
<p>Tendrás que usar los siguientes códigos:</p>
<pre><code>Math.floor(Math.random() * (MAX - MIN + 1)) + MIN;
name.Substring(int position, int position);
name.Length;</code></pre>


<p>Pasos para resolver el ejercicio:</p>
<ol>
	<li>Calculamos un número aleatorio en un rango comprendido entre 0 y el número de letras de tu nombre.</li>
	<li>Utilizamos ese número aleatorio para obtener la letra de tu nombre que ocupa esa posición.</li>
	<li>Mostramos la letra en la consola.</li>
</ol>

<?php // getRes('ejemplo','./ex/randomNumbers/RandomLetter.cs', 'Ver ejemplo') ?>

		<h2 id="ahorcado">Ejercicio – juego del ahorcado</h2>
<?php // getRes('ejemplo','./ex/Ahorcado.cs', 'Player') ?>
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
		<p>cadena.indexOf(“a“) devuelve la primera posición de la letra a en la cadena. En caso de no encontrar coincidencia, nos devolverá -1.</p>
		<h5>Métodos de la clase String:</h5>
		<p><span class="u">charAt(int index)</span> <br>
Devuelve el valor de la letra en la posición especificada.</p>
<p><span class="u">toCharArray()</span> <br>
Convierte una cadena de texto en un array de letras.</p>
	<img style="margin: auto; display: block" src="img/ahorcado.svg" alt="Diagrama de flujo del juego del ahorcado">
		<h2 id="tres-en-raya">Ejercicio - Tres en raya</h2>
	<p>Hacer el juego del tres en raya para dos jugadores. </p>
<ul>
	<li>El tablero será un array de 9 posiciones. </li>
		<li>El método <strong>showTablero(String [] tablero);</strong> imprimirá el tablero, con las fichas “X” y “O” dónde correspondan.</li>
	<li>El juego tendrá un método <strong>juegaPlayer(String ficha, String [] tablero)</strong> que recibirá como parámetro de entrada el identificador del jugador ("X" o "O") y dónde se le solicitará al jugador el número correspondiente a la posición dónde quiere mover su ficha ("X" o "O").</li>
	<li>Después de cada tirada, se comprobará si alguien ha ganado, llamando al método <strong>evaluateWin(String [] tablero)</strong>;</li>
	<li>El método <strong>evaluateWin(String [] tablero)</strong> mediante sucesivos if todas las posibilidades de que un jugador gane.</li>
	<li>Utilizaremos la consola de java para ver el tablero.</li>
</ul>
	<?php // getRes('ejemplo','./ex/arrays/TicTacTie.cs', 'Tic Tac Tow') ?>
	<h4 class="red">Ejercicio – tictactoe solo jugador</h4>
<p>El método juegaPlayer1() quedará así:</p>
<pre><code>
function juegaPlayer1(){
	board[getComputerMove()] = &quot;X&quot;;
}</code></pre>
<p>Por tanto, debemos crear un método getComputerMove() que creará una copia del tablero, moverá la ficha sobre esta copia y en función del resultado decidirá dónde mover en el tablero real. Para realizar el movimiento: </p>
<ol>
	<li>Comprobamos si la máquina puede hacer un movimiento y ganar la partida. (utilizaremos el método evaluateWin, creado en el ejercicio anterior).</li>
	<li>Comprobamos si tras mover, el humano puede hacer un movimiento y ganar la partida.</li>
	<li>Comprueba si hay alguna esquina libre. Si lo está, la máquina mueve a la esquina.</li>
	<li>Comprueba si el centro está libre. Si lo está, la máquina mueve al centro</li>
	<li>Mueve a cualquiera de las casillas restantes.</li>
</ol>
		<h2 id="modificadores-acceso">Modificadores de acceso</h2>
	<p>Determinan la accesibilidad de una clase, sus variables miembro y métodos.</p>
	<h4>Pueden ser: </h4>
	<ul>
		<li><span class="bold">private</span>
	<p>Las clases no pueden ser private.</p>
	<p>Un elemento private sólo es accesible dentro de la propia clase en que es declarada.</p>
		</li>
		<li><p>
			<span class="bold">Protected <span class="red">(proteje a los hijos)</span></span> <br>

			Es menos restrictivo que default. <br>
			Un elemento protected sólo es accesible desde subclases de la clase que la que tiene el modificador.</p>
<pre><span class="bold">com.pablomonteserin.a.A.java</span><code>public class A{
	protected void metodoDeA() {
		System.out.println("hola");
	}
}</code></pre>
<pre><span class="bold">com.pablomonteserin.b.B.java</span><code>public class B extends A{
	void metodoDeB() {
		B b = new B();
		b.metodoDeA();
	}
}</code></pre></li>

<li><span class="bold">internal</span><br>Sólo podremos acceder al elemento cuando estemos dentro de su mismo proyecto.</li>

		<li><span class="black bold">public</span> <br>
		Es el modifier "mas generoso". <br>
		Un elemento public puede accederse sin restricciones.</li>


		<li><span class="bold">protected internal</span><br>El acceso está limitado al proyecto actual o a las subclases clase con el modificador.</li>

		<li><span class="bold">private protected</span><br> El acceso está limitado a la propia clase o a las subclases de la clase con el modificador que hay dentro del proyecto actual.</li>
	</ul>
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
<h2 id="constructores">Constructores</h2>
<h3 id="constructor_vacio">Constructor vacío</h3>
<pre><code> class EmptyConstructor{
	static void Main(string[] args){
		MyClass myClass = new MyClass();
	}
}

class MyClass{
	public MyClass(){
		Console.WriteLine("Hello!!!");
	}
}</code></pre>
<p class="green"><span class="green bold">Output</span>: <br>
Hola!!!</p>
	<h3 id="constructor_con_param">Constructor con parámetros</h3>
	<pre><code>class ConstructorWithParameter{
	static void Main(string[] args){
		new MyClass("Juan");
	}
}

class MyClass{
	public MyClass(string nombre){
		Console.WriteLine("Hello " + nombre);
	}
}</code></pre>
<h3 id="para_que_sirve_un_constructor">¿Para qué sirve un constructor?</h3>
<pre><code>class UsingConstructor{
	static void Main(string[] args){
		new MyClass("Juan");
	}
}

class MyClass{
	string name;
	public MyClass(string name){
		this.name = name;
	}
}</code></pre>
	<p class="red">Si no sé cuales son los parámetros que tengo que poner, puedo ponerme sobre el paréntesis de los parámetros y pulsar ctrl + space</p>
		<h2 id="herencia">Herencia</h2>
	<pre><code>class Inheritance{
	static void Main(string[] args){
		Son s = new Son();
		s.Greet();
	}
}

class Father{
	public void Greet(){
		Console.WriteLine("Hola");
	}
}

class Son : Father{}</code></pre>
<p>Es el mecanismo mediante el cual una clase deriva de otra, de manera que extiende su funcionalidad.</p>
	<h3 id="constructores_herencia">Constructores y herencia</h3>
	<pre><code>class ConstructorsAndInheritage{
	static void Main(string[] args){
		Son s = new Son(); 
	}
}

class Father{
	public Father(){
		Console.WriteLine("Father is executed");
	}
}

class Son : Father{
	public Son(){
		Console.WriteLine("Son is executed");
	}
}</code></pre>
	<p class="green"><span class="bold">Output</span>: <br>
Se ejecuta el padre <br>
Se ejecuta el hijo</p>
<p>¿Qué se verá por pantalla al ejecutar el siguiente código?</p>
<pre><code>class WhatWillHappen{
	static void Main(string[] args){
		Son h = new Son("Hello!");
		h.ShowMessage(); 
	}
}

class Father{
	string message;
	public Father(string message){
		this.message = message;
	}
	public void ShowMessage(){
		Console.WriteLine(message);
	}
}

class Son : Father{
	public Son(string message):base(message){ }
}</code></pre>
	<h3>Ejercicio</h3>
	<p>Desarrolle una aplicación que contenga las siguientes clases:</p>
<img src="img/diagrama1.svg" alt="Diagrama del ejercio">
<p>El constructor de la clase Persona debe incrementar en una unidad la variable numInstancias.</p>
	<p>Desarrolle una clase con el nombre Main, que contenga un método public <span class="bold">static void main(String args[])</span>, que al ejecutarse cree dos instancias de empleado y dos de cliente e imprima el total de instancias de persona creadas.</p>
	<div class="row">
	<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/inheritance-exercises/MainClass.cs', 'Main Class') ?>
	<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/inheritance-exercises/Client.cs', 'Client') ?>
	<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/inheritance-exercises/Employee.cs', 'Employee') ?>
	<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/inheritance-exercises/Person.cs', 'Person') ?>
	</div>
	<h3>Ejercicio - animales</h3>
	<p>Implemente las clases del siguiente diagrama. </p>
	<p>El método compareSound() comprueba si el sonido que fue pasado en el constructor es más largo que el sonido almacenado en la variable static "sonidoMasLargo". Si es así, sobrescribe el valor de la variable con el nuevo valor.</p>
	<p>Desarrolle una clase con el nombre Main, que contenga un método <span class="bold">static void main(String args[])</span>, que al ejecutarse genere una instancia de Vaca, Perro y Gato pasándoles en el constructor el sonido que deben emitir ("muuuuuu", "guauguau", "miau", por ejemplo). El método "compararSonido" debe ser llamado desde dentro del constructor de la clase Animal.</p>
	<p>Luego, imprimir el valor de la variable estática sonidoMasLargo.</p>
	<img src="img/animal.svg" alt="Diagrama del ejercicio">
	<div class="row">
	<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-inheritance/MainClass.cs', 'Main Class') ?>
	<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-inheritance/Cat.cs', 'Cat') ?>
	<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-inheritance/Cow.cs', 'Cow') ?>
	<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-inheritance/Dog.cs', 'Dog') ?>
	<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-inheritance/Animal.cs', 'Animal') ?>
	</div>
		<h2 id="polimorfismo">Polimorfismo</h2>
		<h2 id="sobrecarga-sobreescritura">Sobrecarga y sobreescritura</h2>
	<pre><code>class SobrecargaSobreescritura{
	static void Main(string[] args){
		Hijo4 h = new Hijo4();
		Hijo4.sobreEscritura("Se bienvenido ", "Pablo");
		Hijo4.sobreCarga(3);
	}
}
class Padre4{
	public static void sobreEscritura(String txtBienvenida, String nombre){
		Console.WriteLine(txtBienvenida + nombre);
	}
	public static void sobreCarga(String txtDespedida, String nombre){
		Console.WriteLine(txtDespedida + nombre);
	}
}

class Hijo4 : Padre4{
	//El tipo devuelto no debe cambiar.
	//los parámetros de entrada no deben cambiar
	//La accesibilidad no será más restrictiva que la del método original.
	//Si el método original es static, el método que hace el override, tambień debe serlo.
	public static void sobreEscritura(String txtBienvenida, String nombre){
		Console.WriteLine(txtBienvenida + "......" + nombre);
	}
	//El tipo de dato devuelto puede cambiar.
	//Los parámetros de entrada deben cambiar.
	//La accesibilidad puede ser más restrictiva que la del método original.
	//El número de checked expections arrojadas debe ser el mismo.
	public static int sobreCarga(int codigoDespedida){
		Console.WriteLine(codigoDespedida);
		return 4;
	}
}</code></pre>
	<h2 id="abstraccion">Abstracción</h2>
	<h3>Métodos abstractos</h3>
	<p>Tenemos una clase "Cosa" que tiene un método "botar". Las clases  "Ladrillo" y "Pelota" heredan de "Cosa".</p>
	<p>La clase Cosa tiene un método abstracto llamado "botar". Es abstracto porque dependiendo de si instanciamos un ladrillo o una pelota habrá que sobrescribir el código para que bote de una forma determinada.</p>
	<p>Un método abstracto es aquel que sólo tiene una declaración y no dispone de cuerpo. Está pensado para ser sobrescrito, luego no es posible utilizar el modificador private con un método abstracto.</p>
	<div class="col_left">
		<img src="img/Basketball.svg" alt="pelota baloncesto">
	</div>
	<div class="col_right">
			<img src="img/brick.svg" alt="ladrillo">
	</div>
	<p>Se declaran de la siguiente forma (quitando las llaves del cuerpo de la función y poneindo un ; en su lugar):</p>
	<pre><code>public void botar();</code></pre>
<h3>Clases abstractas</h3>
<ul>
	<li>Si una clase tiene al menos un método abstracto, dicha clase debe ser abstracta.</li>
	<li>Una clase que herede de una clase abstracta debe implementar todos sus métodos abstractos (no es necesario sobrescribir los métodos no abstractos).</li>
	<li>Abstracto viene a significar "sin definir".</li>
</ul>
<h3>Ejercicio – animales con clase abstracta</h3>
<p>Implemente las clases del siguiente diagrama. </p>
<p>El constructor de la clase Animal llamará a los métodos "establecerSonido()" y "compararSonido()"</p>
<p>El método compararSonido() comprueba si la variable "sonido" es más larga que el sonido almacenado en la variable static "sonidoMasLargo". Si es así, sobrescribe el valor de la variable con el nuevo valor.</p>
<p>El método establecerSonido() debe ser sobreescrito para asignar el valor del sonido que toque a la variable sonido.</p>
<p>Desarrolle una clase con el nombre Main, que contenga un método public static void main(String args[]), que al ejecutarse genere una instancia de cada clase de animal.</p>
<p>Luego, imprimir el valor de la variable estática sonidoMasLargo.</p>
<img src="img/Animal-abstract.svg" style="margin:auto; display: block" alt="diagrama del ejercicio">
<div class="row">
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-abstract-class/MainClass.cs', 'MainClass') ?>
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-abstract-class/Cat.cs', 'Cat') ?>
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-abstract-class/Dog.cs', 'Dog') ?>
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-abstract-class/Cow.cs', 'Cow') ?>
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-abstract-class/Animal.cs', 'Animal') ?>
</div>
<h2 id="interfaces">Interfaces</h2>
	<p>Una <span class="red bold">interface</span> es una clase abstracta en la que todos los métodos serán métodos abstractos.</p>
	<p>Una <span class="blue bold">clase</span> que implemente una interface también deberá implementar todos sus métodos. Si no deseamos que esto ocurra, podemos añadir a la interface el modificador abstract.</p>
	<p>Una variable estática definida dentro de una interfaz será implícitamente definida como constante.</p>
	<p>Una interfaz está pensada para ser sobrescrita, luego no tiene sentido utilizar modificadores privados dentro de una interfaz y no están permitidos.</p>
	<pre><code>interface Instrument{
	void play();//automáticamente público
}

class Clase : Instrument{
	static void Main(String[] args){
		Clase c = new Clase();
		c.play();
	}
  
	public void play(){
		Console.WriteLine("Jugar al baloncesto");
	}
}</code></pre>
	<h3>Ejercicio – animales con interfaz</h3>
<p>Implemente las clases del siguiente diagrama. </p>
<p>El método compararSonido() comprueba si el sonido que fue pasado en el constructor es más largo que el sonido almacenado en la variable static "sonidoMasLargo". Si es así, sobrescribe el valor de la variable con el nuevo valor.</p>
<p>Desarrolle una clase con el nombre Main, que contenga un método public static void main(String args[]), que al ejecutarse genere una instancia de cada clase de animal e invoque a sus métodos “compararSonido”. </p>
<p>Luego, deberé imprimir en pantalla el sonido más largo realizado, almacenado en la variable estática sonidoMasLargo.</p>
	
<img src="img/diagrama5.svg" alt="Diagrama ejercicio" style="width:100%">	
<div class="row">
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/MainClass.cs', 'MainClass') ?>
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/Cat.cs', 'Cat') ?>
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/Dog.cs', 'Dog') ?>
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/Cow.cs', 'Cow') ?>
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/IAnimal.cs', 'IAnimal') ?>
<?php // getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/Animal.cs', 'Animal') ?>
</div>
<h2 id="clases-internas">Clases internas</h2>
	<p>Son aquellas cuya definición está dentro de otra. Una clase interna puede sobrescribir <span class="blue bold">métodos de la clase que la contiene</span>.</p>
<pre><code>class OuterClass{
	private string extProp = "external class property";
	public class InnerClass{
		private string intProp = "inner class property";
		public void ShowProp(){
			Console.WriteLine(intProp);
		}
	}
	public void ShowProp(){
		Console.WriteLine(extProp);
	}
}

class MainClass{
	static void Main(String[] args){
		OuterClass outerClass = new OuterClass();
		outerClass.ShowProp();

		OuterClass.InnerClass innerClass =  new OuterClass.InnerClass();
		innerClass.ShowProp();
	}
}</code></pre>
<p class="green">Output: <br>
propiedad de la clase externa <br>
propiedad de la clase interna</p>
		<h2 id="garbage-collector">Garbage Collector</h2>
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
		<h2 id="encapsulamiento">Encapsulamiento (POCO)</h2>
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
<pre><code>class Encapsulation{
	static void Main(string[] args){
		Warehouse warehouse = new Warehouse();
		warehouse.numBoxes = 12;
		Console.WriteLine(warehouse.numBoxes);
	}
}

class Warehouse{
	private int _numBoxes;

	public int numBoxes{
		get { return _numBoxes; }
		set{ 
			if (numBoxes > 10){
				Console.WriteLine("Deliveries of more than 10 units are not allowed");
			}else{
				_numBoxes = value;
			}
		}
	}
}</code></pre>
<h3>POCO (Plain Old CLR (Common Language Runtime) Object)</h3>
<pre><code>class POCOExample{
	static void Main(string[] args){
		POCO1 poco1 = new POCO1();
		poco1.name = "Juan";
		Console.WriteLine(poco1.name);

		POCO2 poco2 = new POCO2();
		poco2.name = "Paco";
		Console.WriteLine(poco2.name);
	}
}

class POCO1{
	public string name { get; set; }
	public int age { get; set; }
}

class POCO2{
	private string _name;
	private int _age;
	public string name{
		get { return _name; }
		set { _name = value; }
	}

	public int age{
		get { return _age; }
		set { _age = value; }
	}
}</code></pre>
	<h2 id="contenedores">Contenedores</h2>
	<h3 id="recorrer_coleccion">Recorrer una colección - Iterator</h3>
<pre><code>ArrayList arrayList = new ArrayList();
arrayList.Add("cow");
arrayList.Add("dog");
arrayList.Add("elephant");

foreach(var item in arrayList){
	Console.WriteLine(item);
}</code></pre>
<h2 id="genericos">Genéricos</h2>
	<p>Los tipos genéricos se encuentran incluidos dentro de los caracteres &lt;&gt;. Especifican el tipo de datos que va a almacenar, utilizar o devolver una clase o método.</p>
	<h3 id="en_colecciones">Genéricos en colecciones</h3>
	<pre><code>List &lt;string&gt; arrayList = new List&lt;string&gt;();
arrayList.Add(&quot;cow&quot;);
arrayList.Add(&quot;dog&quot;);
arrayList.Add(&quot;elephant&quot;);

foreach(var item in arrayList){
	Console.WriteLine(item);
}</code></pre>
<div class="notas">
	<h3>Notas</h3>
	<ul>
		<li>No es necesaria la comprobación de tipos en tiempo de ejecución con lo cual reduce el uso de casting en el código.</li>
		<li>El código será menos ambiguo y más fácil de mantener.</li>
	</ul>
</p>
</div>
<h3 id="en_clases">Genéricos en clases</h3>
	<pre><code>class GenericClass{
	static void Main(string[] args){
		Calculator&lt;double&gt; c = new Calculator&lt;double&gt;();
		double r = c.Sum(2.0 , 2.0);
		Console.WriteLine(r);
	}
}

class Calculator&lt;T&gt; { 
	public T Sum&lt;T&gt;(T n1, T n2){
		dynamic a = n1;
		dynamic b = n2;
		return a + b;
	}
}</code></pre>
<h2 id="crud_sin_base-datos">Ejercicio alta, baja, modificación y consulta en una Lista</h2>
	<p>La aplicación consta de 2 clases: Main y Alumno.</p>
	<p>La clase Alumno tendrá dos propiedades: nombre (string) y edad (int).</p>
	<p>Al arrancar la aplicación desde el Main se nos preguntará por la operación que deseamos hacer: </p>
<ul>
	<li><span class="black">Insertar un nuevo alumno</span>. Esta opción nos solicita el nombre y la edad del alumno que queremos insertar.</li>
	<li><span class="black">Eliminar un alumno</span>. Esta opción nos solicita el nombre del alumno que deseamos eliminar.</li>
	<li><span class="black">Modificar los datos de un alumno</span>. Esta opción nos solicita primero el nombre de alumno para poder identificarlo y luego su nuevo nombre y edad.</li>
	<li><span class="black">Mostrar todos los alumnos almacenados</span>. Esta opción recorre el ArrayList de alumnos e imprime los nombres de cada uno.</li>
</ul>
<div class="row">
<?php // getRes('ejemplo','./ex/containers/crud-student/MainClass.cs', 'MainClass') ?>
<?php // getRes('ejemplo','./ex/containers/crud-student/Student.cs', 'Student') ?>
</div>
<h2 id="juego-oca">Ejercicio – juego de la oca</h2>
	<p>Hacer el juego de la oca. El juego constará de una clase Main desde la que se ejecuta el juego y un bean ''Jugador'' con los atributos nombre(String), casilla(int), turnosRestantes(int).</p>
	<p>Al comenzar la aplicación se nos solicitará indicar el número de jugadores. Crearemos las instancias de los jugadores pertinentes y los introduciremos en un ArrayList de jugadores. Los jugadores irán tirando el dado y avanzando casillas hasta que alguno llegue a la casilla 63. <br>
Tener en cuenta que:</p>
<ul>
	<li>las posiciones 5, 9, 14, 18, 23, 27, 32, 36, 41, 45, 50, 54 y 59 corresponde a las ocas. Si el jugador cae en ellas se imprimirá el texto ''De oca a oca y tiro porque me toca'', el jugador avanzará hasta la siguiente casilla de la oca y volverá a tirar.</li>
	<li>si el jugador cae en la casilla 19, caerá en la pensión y no podrá tirar el dado en los dos siguientes turnos.</li>
	<li>si el jugador cae en la casilla 3, caerá en el pozo y no podrá tirar el dado en el siguiente turno.</li>
	<li>si el jugador cae en la casilla 52, caerá en la cárcel y no podrá tirar el dado en los tres siguientes turnos.</li>
	<li>las casillas 6 y 12 son puentes. Si el jugador cae en ellas se imprimirá el texto ''De puente a puente y tiro porque me lleva la corriente''. En este caso, si cayó en la casilla 6 irá a la 12 y si cayó en la 12 irá a la 6. En ambos casos, volverá a tirar.</li>
	<li>las casillas 26 y 53 son dados. Si el jugador cae en ellas se imprimirá el texto ''De dado a dado y tiro porque me ha tocado''. En este caso, si cayó en la casilla 26 irá a la 53 y si cayó en la 53 irá a la 26. En ambos casos se volverá a tirar.</li>
	<li>la casilla 58 es la muerte, el jugador que cae en ella pierde.(aunque en el juego original lo que ocurría era que el jugador debía regresar a la casilla 1).</li>
</ul>
<div class="row">
	<?php // getRes('ejemplo','./ex/goosegame/GooseMain.cs', 'Main') ?>
	<?php // getRes('ejemplo','./ex/goosegame/Player.cs', 'Player') ?>
	</div>
<h2 id="recorrer-map">Recorrer un Map</h2>
	<pre><code>Person p1 = new Person();
p1.name = "Juan";
p1.age = 15;
p1.dni = "47362783W";
Person p2 = new Person();
p2.name = "Raquel";
p2.age = 45;
p2.dni = "47364758W";
Person p3 = new Person();
p3.name = "Oscar";
p3.age = 48;
p3.dni = "84824738W";

HashSet &lt;Person&gt; personas = new HashSet&lt;Person&gt;();

personas.Add(p1);
personas.Add(p2);
personas.Add(p3);

foreach(var item in personas){
	Console.WriteLine(item.name + " - " + item.age);
}</code></pre>
<h2 id="excepciones">Excepciones</h2>
		<img src="img/excepciones.svg" alt="excepciones">
	<ul>
		<li><strong>En tiempo de compilación</strong> (checked exceptions): Heredan de
java.lang.Exception. El compilador nos obligará a controlarlas mediante un bloque Try/Catch o un throws.</li>
<li><strong>En tiempo de ejecución</strong> (unchecked exceptions): Heredan de
java.lang.RuntimeException. Es la única Exception que no es comprobada por el compilador. Un error también se produce en tiempo de ejecución, aunque un error no es una excepción.</li>
	</ul>
	<h3 id="excepcion_con_catch">Excepción con un catch</h3>
<pre><code>int i = 2;
int j = 0;
Console.WriteLine("before");
try{
	Console.WriteLine(i / j);
}catch (ArithmeticException e){
	Console.WriteLine("in catch");
	e.ToString();
}
Console.WriteLine("after");</code></pre>
<p class="green"><span class="bold">Output:</span> <br>
antes <br> 
en el try <br>
en el catch <br>
java.lang.ArithmeticException <br>
despues <br></p>
	<h3 id="excepcion_con_varios_catch">Excepción con varios catch</h3>
<pre><code>int i = 2;
int j = 0;
Console.WriteLine("before");
try{
	Console.WriteLine("in the try");
	Console.WriteLine(i / j);
}catch (ArithmeticException e){
	Console.WriteLine("in catch2");
	e.ToString();
}catch (Exception e){
	Console.WriteLine("in catch3");
	e.ToString();
}
      
Console.WriteLine("after");</code></pre>
	<p class="green"><span class="bold">Output</span> <br>
antes <br>
en el try <br>
en catch2 <br>
java.lang.ArithmeticException <br>
despues 
</p>
	<p>El único catch que se aplica es el que recoge la excepción. Después de este, el programa continua ejecutándose a partir del último Catch.</p>
	<p>Para que el código compile, los tipos de Error más generales(Throwable) deben estar por debajo de los más particulares(ArithmeticException)</p>
	<h3 id="throw">Throw</h3>
	<pre><code>class ExceptionWithThrow{
	static void Main(string[] args){
		ExceptionWithThrow exceptionWithThrow = new ExceptionWithThrow();
		try{
			exceptionWithThrow.ThrowExcepcion();
		}catch (Exception e){
			Console.WriteLine("exception throwed and processed");
		}
		exceptionWithThrow.processException();
	}

	public void ThrowExcepcion() {
		throw new Exception();
	}

	public void processException(){
		try{
			throw new Exception();
		}catch (Exception e){
			Console.WriteLine("exception processes");
		}
	}
}</code></pre>
	<p><span class="bold black">Consola</span>: <br>
excepción lanzada y procesada <br>
excepción procesada</p>
<h3 id="finally">Finally</h3>
<p>El finally se ejecuta siempre, se trate la excepción o no se trate la excepción. La única forma de evitar que se ejecute el finally es ejecutando un System.exit(), que mata la máquina virtual.</p>
<p>Se utiliza siempre en conjunción con un try-catch. No puede haber nada después del catch y antes del finally.</p>
<pre><code>static void Main(string[] args){
	int i = 2;
	int j = 0;
	Console.WriteLine("before");
	try{
		Console.WriteLine(i / j);
	}catch (ArithmeticException e){
		Console.WriteLine("in catch2");
		e.ToString();
	}catch (Exception e){
		Console.WriteLine("in catch3");
	}finally{
		Console.WriteLine("in finally");
	}
	Console.WriteLine("after");
}</code></pre>
<p class="green"><span class="bold">Output</span>: <br>
antes <br>
en catch2 <br>
java.lang.ArithmeticException <br>
en finally	<br>
despues</p>
	<h3>Ejercicio excepciones</h3>
		<p>Implementar una clase Main que llame al método getPrecioConIva() <span class="black bold">de la clase Servicios</span> e imprima el valor que devuelve.</p>
	<p>Implementar una clase Servicios con un método llamado getPrecioConIva() que recibirá un número y devolverá dicho número multiplicado por 1.16. Si el precio es mayor que 100 arrojará una PrecioDemasiadoAltoException que será capturada en el Main.</p>
	<p>Implementar una clase PrecioDemasiadoAltoException y sobreescribir su método printStackTrace() para que imprima el texto "El precio es demasiado alto".</p>
<h3>Delegados</h3>
<p>Es un tipo que representa una referencia a un método</p>
<p>Usos:</p>
<h4>Asignar el método que se va a ejecutar cuando suceda cierto evento. Un evento es un mensaje que envía un objeto cuando sucede una acción</h4>
<pre><span class="bold">MyDelegate.java</span><code> public delegate void ShowValue(string uuuuu);
class MyDelegate{
	//El evento myEvent llamará al método delegado ShowValue
	public event ShowValue myEvent;

	public void IterateValues(){
		for(int i = 0; i < 10; i++){
			//Detonamos el evento myEvent que llamará al método delegado (PrintValue, que viene a sustituir a ShowValue)
			myEvent(i.ToString());
		}
	}
}</code></pre>
<pre><span class="bold">MainClass.java</span><code>class MainClass{
	static void Main(){
		MyDelegate myDelegate = new MyDelegate();
		//Cada vez que ejecute la función PrintValue, se detonará el evento myEvent
		myDelegate.myEvent += PrintValue;
		myDelegate.IterateValues();
	}

	private static void PrintValue(string value){
		Console.WriteLine(value);
	}
}</code></pre>
<h4>Definir métodos anónimos</h4>
<p>Estos métodos serán los parámetros de entrada de otros métodos. Por ejemplo, el método Find necesita un método anónimo.</p>
<pre><code>Person p1 = new Person();
p1.name = "Paco";
p1.age = 18;
Person p2 = new Person();
p2.name = "Juan";
p2.age = 38;
Person p3 = new Person();
p3.name = "Raquel";
p3.age = 55;
List&lt;Person&gt; persons = new List&lt;Person&gt;();

persons.Add(p1);
persons.Add(p2);
persons.Add(p3);
Person selectedPerson = persons.Find(delegate (Person p) { return p.age == 38; });
Console.WriteLine(selectedPerson.name);</code></pre>
<h5>También podíamos haber usado una expresión Lambda</h5>
<pre><code>Person selectedPerson = persons.Find( p =>  p.age == 38);</code></pre>
	<h3>Linq</h3>
	<p>Language Integrated Query. Permite integrar consultas similares a las SQL en el lenguaje C#, para muchos tipos de información (XML, colecciones, y entidades de bases de datos). </p>
	<p>Una instrucción Linq debe comenzar con una instrucción <span class="bold">from</span> y debe terminar con una instrucción <span class="bold">select</span> o <span class="bold">group</span>:</p>
	<pre><code>var query = from p in Items where p.Estado = 0 select p;</code></pre>
	<pre><code>var query = from p in persons where p.age == 38 select p;
Person selectedPerson = query.ToList()[0];
Console.WriteLine(selectedPerson.name);</code></pre>
<h2 id="hilos">Hilos</h2>
	<p>Para usarlos puedo extender thread o implementar Runnable</p>
<h3>Dos ejemplos de hilos en la vida real</h3>
<p>Cuando se venden las entradas del concierto de Madonna. En poco segundos todas las entradas quedan agotadas debido a la gran demanda. El proceso que materializa la compra de la entrada no debe ser realizado por varios usuarios a la vez, ya que se corre el riesgo de que se vendan más entradas de las que realmente hay disponibles. Esa parte del código habrá que sincronizarla.</p>
<p>Varias personas entran en un supermercado en el que sólo hay un dependiente. Aunque cada cliente deambula por el supermercado a su aire, mirando productos, escogiendo los que tienen menos conservantes, etc. a la hora de pagar los clientes deben ponerse en cola e ir siendo atendidos por el vendedor de uno a uno. Esta sería la parte sincronizada de un algoritmo que representase lo que ocurre en el supermercado.</p>
	<h4>Ejemplo de aplicación sin usar hilos</h4>
	<p>Aunque creamos 3 "pseudohilos", realmente no lo son, y el código de un hilo no se ejecutará hasta que no haya concluído el "pseudohilo" anterior.</p>
	<pre><span class="bold">WithoutThreads.java</span><code>class WithoutThreads{
	static void Main(string[] args){
		FalseThread t1 = new FalseThread();
		FalseThread t2 = new FalseThread();
		FalseThread t3 = new FalseThread();

		t1.Start();
		t2.Start();
		t3.Start();
	}
}</code></pre>
<pre><span class="bold">Hilo.java</span><code>class FalseThread{
	static double variable1 = 100;
	public void Start(){
		variable1 -= 10;
		System.Threading.Thread.Sleep(new TimeSpan(0, 0, 1));
		Console.WriteLine("Variable1:" + variable1);
	}
}</code></pre>
<p class="green">Output:  <br>
Variable1:90.0 <br>
Variable1:80.0 <br>
Variable1:70.0 <br>
</p>
	<h3>Usar Thread</h3>
	<pre><code>class WithThreadClass{
	static double variable1 = 100;

	static void Main(string[] args){
		Thread t1 = new Thread(AsyncMethod);
		Thread t2 = new Thread(AsyncMethod);
		Thread t3 = new Thread(AsyncMethod);

		t1.Start();
		t2.Start();
		t3.Start();
	}

	static void AsyncMethod(){
		variable1 -= 10;
		System.Threading.Thread.Sleep(new TimeSpan(0, 0, 1));
		Console.WriteLine("Variable1:" + variable1);
	}
}</code></pre>
</main>
<?php 
// });
// include $path."/diapos_theme/footer.php";
?>