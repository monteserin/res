<?php 
$titulo_curso="c#";

//No he añadido el slash a la búsqueda de strpos porque el slash en windows y en linux son diferentes
$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
include $path."diapos_theme/head.php";

add_action( 'genesis_after_header', function(){
	global $path;
	global $titulo_curso;
	$tiene_intro=true; // usamos esta variable en body_init.php
	$antes= '';
	$despues='';

		include $path."diapos_theme/body_init.php";

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
    <h1 class="container"><?= $titulo_curso?></h1>
<section id="amor" class="verIndice">
				<article id="inicio_del_documento" class="indice">
          <h3>Índice del curso de <?= $titulo_curso?></h3>
<ol>  
<li><a href="#que_net">What is .NET?</a></li>
	<li><a href="#que_es_c">What is C#?</a></li>
	<li><a href="#clases">Classes</a></li>
	<li><a href="#objetos">Objects</a></li>
	<li><a href="#hola-mundo">Hello World</a></li>
	<li><a href="#comentarios">Comments</a></li>
	<li><a href="#variables">Variables</a></li>
	<li><a href="#constantes">Constants</a></li>
	<li><a href="#operadores">Operators</a></li>
	<li><a href="#lectura-datos">Reading data</a></li>
	<li><a href="#ejercicios-operadores-aritmeticos">Ejercicios con operadores aritméticos</a></li>
	<li><a href="#if">Control structures: if</a></li>
	<li><a href="#switch">Control structure: Switch</a></li>
	<li><a href="#bucle-for">Control structure: for loop</a></li>
	<li><a href="#bucle-while">Control structure: while loop</a></li>
	<li><a href="#metodos">Métodos</a></li>
	<li><a href="#modificador-static">Static modifier</a></li>
	<li><a href="#arrays">Arrays</a></li>
	<li><a href="#ahorcado">Exercise - Hangman game</a></li>
	<li><a href="#tres-en-raya">Exercise - Tic Tac Toe</a></li>
	<li><a href="#modificadores-acceso">Access modifiers</a></li>
	<li><a href="#constructores">Constructors</a></li>
	<li><a href="#herencia">Inheritage</a></li>
	<li><a href="#polimorfismo">Polimorfismo</a></li>
	<li><a href="#abstraccion">Abstraction</a></li>
	<li><a href="#interfaces">Interfaces</a></li>
	<li><a href="#clases-internas">Inner Classes</a></li>
	<li><a href="#garbage-collector">Garbage Collector</a></li>
	<li><a href="#encapsulamiento">Encapsulation</a></li>
	<li><a href="#contenedores">Containers</a></li>
	<li><a href="#genericos">Generics</a></li>
	<li><a href="#crud_sin_base-datos">Exercise create, read, update and delete in a List</a></li>
	<li><a href="#juego-oca">Ejercicio – juego de la oca</a></li>
	<li><a href="#recorrer-map">Iterate a Map</a></li>
	<li><a href="#excepciones">Exceptions</a></li>
	<li><a href="#hilos">Threads</a></li></ol>;
</article>
</section>
<main class="curso">
<section>
<article>
<h3 id="que_net">What is .NET?</h3>
<p>It is a development platform for several languages ​​(c #, VB, C ++, Javascript ...) created by Microsoft. There is no own .NET language. The final result of programming in one language or another does not vary the functionality of the software, since the functionality of the application is given by the .NET platform, not the language you have used.</p>
<p>There are several implementations of .NET:</p>
<ul>
<li>.Net Framework (the original). It has specific modules such as WPF (windows presentation foundation), Windows Forms, or ASP.NET. It is appropriate for developing applications for windows with complex user interfaces or for web applications in IIS.</li>
<li>.Net Core (new version developed from scratch). It does not have all the modules of the original .Net Framework. While in the .Net Framework web applications can only be run in the IIS, in the .Net Core, they can be deployed on any server created for this implementation. It is appropriate for developing web applications that do not use the Windows server.</li>
<li>.Net Xamarin (mono project). Run applications for the Unity game engine. It is appropriate for developing mobile applications.
</li>
</ul>
<p>All these implementations share Compilers, languages. There are some specifications common to all implementations of .Net called
<span class="bold">.Net Standard</span> </p>
<ul>
<li>The .NET Virtual Machine: CLR (Common Language Runtime). Manages the execution of programs within the .NET platform. For it:
  <ul>
    <li>Manage the memory.</li>
    <li>Coordinate the threads of execution.</li>
    <li>Launch the applications.</li>
  </ul>
  The .NET applications are compiled into a common intermediate language, which will be the one that uses the CLR.</li>
<li>CTS (Common Type System) and CLS (Common Language Specification) are responsible for security in typing. For example, c # has data of type <span class = "bold"> int </span>, and VB.NET has data of type <span class = "bold"> Integer </span>. After compilation both types of data will use the same structure.</li>
</ul>
<img src="./img/cts.png" alt="cts">
  <h3 id="que_es_c">What is C#?</h3>
  <p>It is the most popular programming language to program in .Net. It is similar to Java.</p>
  <h3>Visual Studio installation</h3>
<p>Visual Studio is the programming environment for .NET applications.</p>
  <p><a href="https://visualstudio.microsoft.com/" target="_blank">Visual Studio download link</a>. The Community version is free and only requires registration.</p>
  <h3>Visual Studio</h3>
  <h4>New project</h4>
  <p>In order to create a project in which we use the console, we must have the following module installed:</p>
<img src="./img/net-desktop-development.png" alt=".net desktop development">
  <p>We will create Console Applications.</p>
  <img src="./img/console-app.png" alt="console app">
  <p>We create a small application with the following source code:</p>
<pre><code>namespace ConsoleApp{
  class Program{
    static void Main(string[] args){
      Console.WriteLine("Hello World!");
    }
  }
}</code></pre>
<h4>Rename Files</h4>
<p>We can do it directly from the visual interface</p>
<img src="./img/ficheros-proyecto-c-sharp.png" alt="ficheros proyecto c sharp">
<p>If you want to rename the project folder name, do so, and then open the file <span class = "bold">.sln </span> with a plain text editor to specify the new name.</p>
  <h4>Set several starting points for our application</h4>
<p>If you have several <span class = "bold"> static void main </span> in your application, you may have to restart Visual Studio for all entry points to be detected.</p>
  <p>Menú Project -> Properties... -> Application -> Startup object -> We select the class that has the <span class="bold">static void main</span> deseado.</p>
<h2 id="clases">Clases</h2>
	<p>Template or mold from which an object is constructed. A class contains:</p>
	<ul>
		<li><strong>attributes</strong>: properties of objects (age, brand, height, weight ...)</li>
		<li><strong>methods</strong>: actions that objects can perform (run, jump, translate, think ...)</li>
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
	<pre><code>class &lt;ClassName&gt;{
	<span class="green">// attribute declaration</span>
	&lt;type&gt; &lt;attribute&gt;;
	<span class="green">// methods declaration</span>
	&lt;type&gt; &lt;method&gt; (&lt;args&gt;){
		... 
	}
}</code></pre>
		<h2 id="objetos">Objects</h2>
	<p>You could say that an object (or instance of a class) is a class with concrete values.</p>
	<div style="display: flex;text-align: center;">
		<div>
			<p style="margin-bottom: 0"><strong>Class</strong>:</p>
	<img src="img/gato.svg" alt="Clase Java Gato" style="max-width:200px"">
		</div>
		<div>
			<p style="margin-bottom: 0"><strong>Object</strong>;</p>
	<img style="max-width:200px" src="img/instanciaGato.svg" alt="Clase Java Gato"> 
		</div>
	</div>
	<h3>Nomenclature</h3>
	<ul>
		<li><span class="black bold">Classes, interfaces, constructors and methods</span>: ThisIsAClass</li>
		<li><span class="black bold">Variables</span>: thisIsAVariable</li>
		<li><span class="black bold">Constants</span>: THIS_IS_A_CONSTANT</li>
	</ul>
		<h2 id="hola-mundo">Hello World</h2>
	<pre><code>namespace Exercises{
  class <span class="red bold">Program</span>{
    static void Main(string[] args){</span> <span class="green">// This method is the starting point of every application.</span>
      <span class="red bold">Console</span>.<span class="purple bold">WriteLine</span>("Hello World!");
    }
  }
}</code></pre>
<p><span class="bold">Console.WriteLine();</span> <br>
It allows us to write traces on the console.</p>
	<h2 id="comentarios">Comments</h2>
	<pre><code>namespace Exercises{
	class Comentarios{
		static void Main(string[] args){
			//This is a single line comment.
			/*
			* And this a multi-line comment
			* */
			Console.WriteLine("Hello World!");
		}
	}
}</code></pre>
	<h2 id="variables">Variables</h2>

	<p>A variable is a memory space whose information may vary during application execution.</p>
	<p>In java the variables are highly typed.</p>
	<pre><span class="black bold">Declaration:</span><code>int n;
int a,b,c;
&lt;tipo&gt; &lt;identificator&gt;; 
&lt;tipo&gt; &lt;identificator_1&gt;,  &lt;identificator_2&gt;...;</code></pre>
<pre><span class="black bold">Assignment:</span><code>number = 42;
<span class="red bold">&lt;variable&gt;</span> = <span class="orange bold">&lt;expresi&oacute;n&gt;;</span></code></pre>
<p><span class="red bold">The left part will be a variable</span></p>
<p><span class="orange bold">The right part can be a literal, a variable, a function or a combination of all.</span></p>
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
this is a string
5 + 3
8
53</span></code></pre>
		<h2 id="variables">Variables</h2>
	<h3>Characteristics of the variables</h3>
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
<span class="green">// The range of a short data reaches 32767</span>

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
	<p>A large primitive can store the information of a smaller one.</p>
	<p>A small primitive can store the information of a larger one, but there will be loss of information.</p>
	<p><span class="blue">The type of the pointing variable </span> must be the same or more generic than <span class = "red"> the type of the variable that it points to </span>.</p>
	<p><span class="blue">Animal</span> animal = <span class="red">new Cat();</span></p>
	<img src="img/tipos_primitivas.svg" alt="tipos de primitivas">
	<h4>Variables exercises</h4>
		<ol>
		<li>Declare a variable 'i' of type int, a variable 'd' of type double and a variable 'c' of type char. Assign a value to each. Display the value of each variable on the screen using three calls to Console.WriteLine (). Note that:
			<ol>
				<li>To give value to a variable of type double we put a "d" at the end of the value.</li>
				<li>To give value to a variable of type char, it must be enclosed in single quotes.</li>
			</ol>	
<?= getRes('ejemplo','./ex/variables/exercises/Ex1.cs', 'Variable declaration') ?></li>
		<li>Exchange the content of two variables
<?= getRes('ejemplo','./ex/variables/exercises/Ex2.cs', 'Intercambiar variables en Java') ?>
<pre><code>int a = 5;
int b = 7;
<span class="green">// here you have to put code</span>
Console.WriteLine(a); <span class="green">//It should show 7</span>
Console.WriteLine(b); <span class="green">//It should show 5</span></code></pre>
</li>
		</ol>
		<h2 id="constantes">Constants</h2>
	<p>A constant is a memory space whose information cannot vary during program execution.</p>
	<p>They are preceded by the final modifier.</p>
	<p>If I uncomment the line, I will get an error.</p>
<pre><code>const float PI = 3;
Console.WriteLine(PI);
<span class="green">//PI=5;</span></code></pre>
	<h2 id="operadores">Operators</h2>
	<h3 id="concatenacion">Concatenation operator</h3>
<pre><code>Console.WriteLine("Hello " + "Juan");
Console.WriteLine("Hello " + name);</code></pre>
	<h3>Greeting exercise</h3>
	<p>That a message is displayed that says: "Good morning Jose," where Jose will be the value of a variable.</p>
<?= getRes('ejemplo','./ex/variables/SalutationExercise.cs', 'Ver solución') ?>
<h3 id="aritmeticos">Arithmetic operators</h3>
<pre><code>Console.WriteLine(7-2);
Console.WriteLine(7*2);
Console.WriteLine(7/2);
Console.WriteLine(7%2);</code></pre>
<h3 id="logicos">Logic or Boolean operators</h3>
<pre><code>Console.WriteLine(7>2);
Console.WriteLine(7&lt;2);
Console.WriteLine(7>=2);
Console.WriteLine(7<=2);
Console.WriteLine(7==2);
Console.WriteLine(7!=2);</code></pre>
	<h2 id="lectura-datos">Data reading</h2>
	<p class="bold black">Reading the text entered by keyboard.</p>
	<pre><code>Console.WriteLine("Write anything, please: ");
string variable = Console.ReadLine();
Console.WriteLine("Writed value: " + variable);</code></pre>
<p>We can collect data of different types:</p>
<pre><code>Console.WriteLine("Write a number: ");
string number = Console.ReadLine();
int convertedNumber = 0;
int.TryParse(number.Trim(), out convertedNumber);
Console.WriteLine("Writed number: " + convertedNumber);</code></pre>
<p>If we would like to obtain the code corresponding to the key pressed:</p>
<pre><code>int keyCode = Console.Read();</code></pre>
		<h2 id="ejercicios-operadores-aritmeticos">Exercises with arithmetic operators</h2>
	<ol>
		<li>Write a program that calculates the number of seconds that exist in a day. As everyone knows, one day has 86400 seconds.
<?= getRes('ejemplo','./ex/operators/exercises/OperadoresEx1.cs','Segundos por día') ?></li>
		<li>Make a converter from euros to dollars. The user enters an amount of euros and obtains its value in dollars. We will assume that one euro is two dollars
<?= getRes('ejemplo','./ex/operators/exercises/OperadoresEx2ConversorEuros.cs','Conversor euros a dólares') ?></li>

		<li>VAT for certain items is 21%. Make a program that asks for a price and calculate its price with VAT.<?= getRes('ejemplo','./ex/operators/exercises/OperadoresEx3IVA.cs', '') ?></li>
		<li>Read an integer by keyboard and display double and triple on the screen.
	<?= getRes('ejemplo','./ex/operators/exercises/OperadoresEx4DobleTriple.cs', '') ?></li>
		<li>Make a program that collects the width and height of a rectangle and calculates the perimeter and area.<?= getRes('ejemplo','./ex/operators/exercises/OperadoresEx5Rectangulo.cs','') ?></li>
		<li>Make a converter from degrees Celsius to degrees Fahrenheit. For this I must multiply by 9/5 and add 32. As everyone knows, 20 degrees Celsius is 68 degrees Fahrenheit.<?= getRes('ejemplo','./ex/operators/exercises/OperadoresEx6Grados.cs','') ?>
		</li>
<li>We will send the user the box of their dreams. To do this, we must ask you to enter your name, the material of the box you want to receive, its dimensions, and any comments. We must concatenate this information to obtain the following message by console: <br> <span class = "black bold"> "[name] has requested a [material] box with dimensions [dimensions]. [Comment]. </ Span > <br>
<?= getRes('ejemplo','./ex/operators/exercises/OperadoresEx7PedidoCaja.cs','') ?></li>
	</ol>
	<h2 id="if">Control structures: if</h2>
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
	<h5>If exercises</h5>
	<ol>
	<li>Given a variable that contains the grade of an exam that goes from 0 to 10 ...
<ul>
	<li>If it is greater than five, show the text "Approved".</li>
	<li>If it is equal to five, show the text "Approved by the hairs"</li>
	<li>If it is less than five, display the text "Thriller."</li>
</ul>
<?= getRes('ejemplo','./ex/control-structures/if/exercises/IfConditionalEx1.cs','') ?>
	</li>
		<li>Declare an integer variable 'i' and assign it a value. Show a message indicating if the value of 'i' is positive or negative, if it is even or odd, if it is a multiple of 5, if it is a multiple of 10 and if it is greater than or less than 100. We will consider 0 as positive.
<?= getRes('ejemplo','./ex/control-structures/if/exercises/IfConditionalEx2.cs','evaluar i' ) ?>
		</li>
</ol>
</ol>
		<h3 id="if_especial">If special - ternary operator</h3>
<pre><code>int a = 5;
int b = 3;

if (a > b) { Console.WriteLine("a is bigger than bb"); }
else { Console.WriteLine("b is bigger than a"); }

string result = (a > b) ? "a is bigger than b" : "b is bigger than a";
Console.WriteLine(result);</code></pre>
<h4>Ternary operator exercises</h4>
<ol>
	<li>Declare a variable 'b' of integer type and assign it a value. Show a message indicating if the value of 'b' is positive or negative. We will consider 0 as positive. Use the conditional operator (?:) Within the <span class = "bold"> Console.WriteLine </span> to solve it.
		<?= getRes('ejemplo','./ex/control-structures/ejercicios-operador-ternario/OperadorTernarioEx1.cs', '') ?></li>
	<li>Declare an integer variable 'i' and assign it a value. It shows a message indicating if 'i' is even or odd. Use the conditional operator (?:) Within the <span class = "bold"> Console.WriteLine </span> to solve it.
		<?= getRes('ejemplo','./ex/control-structures/ejercicios-operador-ternario/OperadorTernarioEx2.cs','') ?></li>
</ol>
	<h3 id="ejercicio_calculadora">Calculator exercise</h3>
	<?= getRes('ejemplo','./ex/control-structures/CalculatorExercise.cs', '') ?>
	<p>Make a calculator that determines the operation to be performed through an if control structure.</p>
	<p>The calculator must make use of arithmetic operators <span class="bold">+</span>, <span class="bold">-</span>, <span class="bold">*</span> y <span class="bold">/</span>.</p>
		<h2 id="switch">Control structure: Switch</h2>
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
<p>Note:
To evaluate text strings (String) instead of letters (char), I will put these characters in double quotes instead of single ones.</p>
<p class="green">Output: <br>
Solution2</p>
	<h3>Exercise - Make a calculator with switch</h3>
		<?= getRes('ejemplo','./ex/control-structures/ExCalculadoraConSwitch.cs', '') ?>
	<p>Make a calculator that determines the operation to be performed through a switch control structure.</p>
	<p>The calculator must make use of arithmetic operators +, -, *, /  y</p>
		<h2 id="bucle-for">Control structure: for loop</h2>
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
	<h3>Exercises loop for</h3>
<ol>
	<li>
	<p>Print the even numbers within the first 100 natural numbers.</p>
	<p>Note: Do not use the if control structure to solve this exercise.</p>
	<?= getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx1.cs','') ?></li>
	<li><p>Print the even numbers within the first 100 natural numbers</p>
	<p>We will use the% operator to separate the odd pairs.</p>
	<p>Note: The operator “%” gives us the rest of dividing one number by another. <br>
Ej: 7%2=1</p>
<?= getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx2.cs','') ?>
	</li>
<li><p>Print the numbers from 1 to 20.</p>
<ul>
	<li>For numbers divisible by 3, print “Fizz”.</li>
	<li>For numbers divisible by 5, print “Buzz”.</li>
	<li>For numbers divisible by 3 and 5, print “FizzBuzz”.</li>
	<li>In any other case, print the number.</li>
</ul>
<div class="notas">
	<h4>Notas:</h4>
<pre><code>if(i&gt;5 &amp;&amp; i&lt;7) 		<span class="green">//Is i greater than 5 and less than 7?</span>
if(i==5 || i== 3) 	<span class="green">//Is i equal to 5 or equal to 3?</span></code></pre>
</div>
<?= getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx3.cs','') ?></li>
	<li>Show the multiplication table of the numbers from 1 to 9. We will use two nested loops.
	<?= getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx4TablaMultiplicar.cs','') ?></li>
<li><p>Guess the secret number. In each iteration of the for loop, the user will be asked what the secret number is (a number from 1 to 5). If after three attempts it has not been successful, the user loses. If he succeeds, he wins.</p>
<img src="img/numero-secreto.svg" class="img" alt="Diagrama de flujo de ejercicio de Javascript para adivinar un número secreto">
	<h5>Notes:</h5>
	<p>To break the repetition of a loop, we can use the break command;</p>
<?= getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx5NumeroSecreto.cs','') ?></li>
	<li><p>Calculate using a for loop, the nth power of a number. We must pick up the base and the exponent from the user. The 4th power will be:
 <br>
2 x 2 x 2 x 2 = 16</p>
<img src="img/enesima-potencia.svg" class="img" style="max-width: 600px" alt="Diagrama de flujo de ejercicio de Javas para calcular la cuarta potencia de un número">
<?= getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx6Potencia.cs','') ?></li>
<li><p>The factorial of a positive integer is defined as the product of all natural numbers before or equal to it. It is written n !, and reads "n factorial".
(By definition the factorial of 0 is 1: 0! = 1)

For example, 5! = 5 · 4 · 3 · 2 · 1 = 120</p>
<img src="img/factorial.svg" class="img" style="max-width: 700px" alt="Diagrama de flujo de ejercicio java">
<p><strong> Variations of the exercise for those who finish before </strong>: This exercise can be solved, in general, in four different ways, with a for loop, with a while loop, and multiplying the factorials from highest to lowest or from minor to major</p>
	<?= getRes('ejemplo','./ex/control-structures/loop-for/exercises/BucleForEx7Factorial.cs','') ?></li>
</ol>
<h2 id="bucle-while">Control structure: while loop</h2>
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
	<li><p>Repeat the secret number game, but now after playing the user will be asked if he wants to continue playing. If you do not want to continue playing the Boolean variable "I want to play" that evaluates the while loop it will be false, which ends the game.</p>	
<?= getRes('ejemplo','./ex/control-structures/bucle-while/exercises/BucleWhile1.cs','') ?></li>
	<li><p>The user must enter his name, in case he has entered information, he will be asked if the data is correct. If you answer yes, you will be told that you can continue with the test. If you answer no, we will return to the initial question.
If at the beginning of everything I had not written anything, a message with the word "error" will be displayed</p>
<p>To pick up an empty value ("") when the user presses the enter key without entering any value, we can use the method <span class="i">scanner.nextLine();</span></p>
<img src="img/entrada-nombre.svg" class="img" style="max-width: 700px" alt="Diagrama de flujo de ejercicio java">
<?= getRes('ejemplo','./ex/control-structures/bucle-while/exercises/BucleWhile2.cs','') ?></li>
	<li>Read numbers until the user enters a -1 and show how many were entered.<?= getRes('ejemplo','./ex/control-structures/bucle-while/exercises/BucleWhile3RecogidaNumeros.cs','') ?>
</li>
</ol>
	<h2 id="metodos">Métodos</h2>
	<p>They are functions applied to objects.</p>
	<p>A function is a subprogram that performs a specific task and returns a value</p>
	<h3 id="metodos_cadenas">Methods for working with chains</h3>
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
<h4>Exercise with text strings</h4>
<ol>
	<li>In the text "Regular Show is the best", count the number of times the letter "a" appears. We will use an "if" structure with substring and equals that will go inside a for loop.
	<?= getRes('ejemplo','./ex/methods/exercises/ACounter.cs','') ?></li>
</ol>
	<h3 id="metodo_no_devuelve_nada">Method that returns nothing (void), without parameters</h3>
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
	<h3 id="metodo_no_devuelve_nada_con_parametros">Method that returns nothing, with parameters</h3>
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
	<h4 id="ejerciciosFuncions">Exercises with functions</h4>
	<p>We will solve the following exercises defining a function with input parameters and that will always return a value that we will process in the main class,</p>
	<ol>
		<li>Create and call a method that receives a number and calculates its cube.<?= getRes('ejemplo','./ex/methods/exercises/Exercise1Cube.cs','') ?></li>
		<li>Create and call a method that receives speed in km / hour and displays it in meters / hour.<?= getRes('ejemplo','./ex/methods/exercises/Exercise2Velocity.cs','') ?></li>
		<li>Create and call a method that receives the width and height of a rectangle and calculates its perimeter. <br>
<strong> Perimeter: </strong> 2 * width + 2 * height <br>
When a function receives several parameters, they will be separated by a comma. Example:
<pre><code>calculatePerimeter(int height, int width);</code></pre>
<?= getRes('ejemplo','./ex/methods/exercises/Exercise3Rectangle.cs','') ?></li>
		<li>Create and call a method that receives the base and height of a triangle and calculates its area. <br>
			<strong>Triangle area</strong> = base*height/2<?= getRes('ejemplo','./ex/methods/exercises/Exercise4Triangle.cs','') ?><a class="ejemplo" href="ex/area-triangulo/Main.java"></a></li>
<li>Using these two functions:
				<ul>
					<li>calculaPerimetro(int radio); <br><strong>Circumference perimeter</strong> = 2*PI*Radio</strong></li>
					<li>calculaArea(int radio); <br><strong>Circumference area</strong> = PI*Radio<sup>2</sup></li>
				</ul>
				Read the value of the radius of a circle by keyboard and display its perimeter and area on the screen.
<?= getRes('ejemplo','./ex/methods/exercises/Exercise5Circunference.cs','') ?></li>
<li>Repeat the calculator exercise using functions for arithmetic operations. We must declare 4 functions with two input parameters each: addition (int a, int b), subtraction (int a, int b,), multiplication (int a, int b), division (int a, int b).
<?= getRes('ejemplo','./ex/methods/exercises/Exercise6Calculator.cs','') ?>			</li>
</ol>
<h3 id="metodo_devuelve_algo">Methods that return something</h3>
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
<h3>Return exercises</h3>
<p>Repeat the previous 6 exercises, but adding a return to the functions and using the value that they return.</p>
<h3 id="coste_hotel">Travel cost exercise</h3>
<?= getRes('ejemplo','./ex/methods/exercisesconreturn/TravelCost.cs','') ?>
<p>Throughout this exercise, we must program 3 functions:</p>
<ul>
	<li><strong>hotelPrice()</strong></li>
	<li><strong>airplanePrice()</strong>.</li>
	<li><strong>rentACarPrice()</strong>.</li>
</ul>
	<h5>Exercise - hotel cost<i class="fa fa-hand-peace-o" aria-hidden="true"></i></h5>
	<p>In addition to the public static void main that passed you lower, create a function called <strong> costHotel () </strong> that receives as a parameter the number of nights. The function must return how much it is necessary to pay taking into account that each night costs 140 euros.</p>
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
<h4>Exercise - Airplane cost <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h4>
	<p>The <strong> costAvion () </strong> function has the city name as input parameter. The cost will correspond to that indicated in the following table.</p>
	<p>The costs per city are as follows: <br>
"Oviedo": 15 <br>
"Tokyo": 700 <br>
"Madrid": 90 <br>
"Barcelona": 90</p>
<h4>Exercise - Car rental cost <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h4>
<p>The <strong> costRentACar() </strong> function has the number of nights as input parameter and will return a cost based on that parameter, taking into account the following aspects:
</p>
<ul>
	<li>Each rental day costs € 40.</li>
	<li>If you rent a car for 3 days or more, you get a € 20 discount on the total.</li>
	<li>If you rent a car for 7 days or more, you get a discount of € 50 on the total (not combinable with the € 20 of having rented for more than 3 days).</li>
</ul>
<h3 id="coleccion_ejercicios_metodos">Exercise Collection</h3>
<p><a href="preguntas-java.php" target="_blank">See collection of exercises.</a></p>
<p><a href="ex-competicion-java.zip">See the source code of the exercises.</a></p>
	<h2 id="modificador-static">Static modifier</h2>
	<h3 id="metodos_static">Statics methods</h3>
	<p>They do not require an instance to be invoked. </p>
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
<p>In <span class = "bold"> C # </span> it is not possible to call a static method from an instance. </p>
<p>Static methods cannot use the non-static characteristics of a class.</p>
<pre><code>class VariableAccess{
	string variable = "hello";
	static void Main(string[] args){
		//variable = "goodbye";
	}
}</code></pre>
	<h3>Exercise</h3>
	<p>Redo the calculator, but turning its four methods into static.</p>
	<?= getRes('ejemplo','./ex/methods/static/CalculatorWithStatics.cs','') ?>
	<h3 id="tipos_var_x_pos">Types of variables by position</h3>
	<pre><code>class VariablesSegunPosicion{
	String atributo;
	static void Main(string[] args){
		// Es necesario inicializar una variable local para poder usarla
		String variableLocal = null; 
		variableLocal.ToString();
	}
}</code></pre>
	<h3 id="variables_static">Static variables</h3>
	<p>They are preceded by the modifier <span class="black bold">static</span>.</p>
	<p>The static modifier allows access to variables and methods even if we do not have an instance of the object that contains them.</p>
	<p>Unlike with non-static variables, there will not be one for each instance of a class, but one for all instances of the class.</p>
<pre><code> class StaticVariable{
	static int staticVariable = 0;
	int notStaticVariable = 0;

	static void Main(string[] args){
		//We increase the static variable
		StaticVariable.staticVariable++;
		StaticVariable.staticVariable++;

		//We increase the non static variable
		StaticVariable variableStatic_1 = new StaticVariable();
		StaticVariable variableStatic_2 = new StaticVariable();

		variableStatic_1.notStaticVariable++;
		variableStatic_2.notStaticVariable++;

		//We show results

		Console.WriteLine("variableStatic: " + StaticVariable.staticVariable);
		Console.WriteLine("variableNoEstatica1: " + variableStatic_1.notStaticVariable);
		Console.WriteLine("variableNoEstatica2: " + variableStatic_2.notStaticVariable);
	}
}</code></pre>
		<h2 id="arrays">Arrays</h2>
	<p>An array is a collection of ordered data of the same type and fixed length. Once we allocate a size to the array, it will not be possible to modify it. There is another type of data called "collections" whose length I can modify.</p>
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
	<p class="red">When instantiating an array, its length must be defined.</p>
	<h3>Arrays exercises</h3>
	<ol>
		<li>Create an array with five person names and trace it with a for loop by displaying the text "I know someone called". Bearing in mind that the .length property of an array returns the number of elements it contains.
	<?= getRes('ejemplo','./ex/arrays/exercises/ArraysEx1.cs','') ?>
		</li>
		<li>Scroll through the following list with a loop printing twice each number:<br>
myList = {1,9,3,8,5,7}
<?= getRes('ejemplo','./ex/arrays/exercises/ArraysEx2.cs','') ?></li>
				<li>The user must enter a number corresponding to a certain month (a value between 1 and 12) and the application must show the name of the month corresponding to that number. <br> To solve the exercise we will use an array of strings where each of the positions of the array will be each month of the year.
				<?= getRes('ejemplo','./ex/arrays/exercises/ArraysEx3.cs','') ?></li>
</ol>


<h2 id="aleatorios">Random Numbers</h2>
	<h3>Generate random number within a range</h3>
	<pre><code>Math.floor(Math.random() * (MAX - MIN + 1)) + MIN;</code></pre>
	<p>As an example, if we want to generate a random number between 25 and 75, the sentence would be.</p>
	<pre><code>Math.floor(Math.random() * (75-25+1)) + 25;</code></pre>
	<h3 id="ej_num_aleatorio">Random Number Exercise</h3>
	<p>Get a random number between 5 and 7.</p>
	<?= getRes('ejemplo','./ex/randomNumbers/RandomBetween5And7.cs', 'Ver ejemplo') ?>

	<h3 id="ejercicio_letra_aleatoria">Random letter exercise</h3>
	<p>Get a random letter of your name.</p>
<p>Tendrás que usar los siguientes códigos:</p>
<pre><code>Math.floor(Math.random() * (MAX - MIN + 1)) + MIN;
name.Substring(int position, int position);
name.Length;</code></pre>
<p>Steps to solve the exercise:</p>
<ol>
	<li>We calculate a random number in a range between 0 and the number of letters in your name.</li>
	<li>We use that random number to get the letter of your name that occupies that position.</li>
	<li>We show the lyrics on the console.</li>
</ol>

<?= getRes('ejemplo','./ex/randomNumbers/RandomLetter.cs', 'Ver ejemplo') ?>


		<h2 id="ahorcado">Exercise - Hangman game</h2>

<div class="row">

<?= getRes('ejemplo','./ex/Ahorcado.cs', 'Player') ?>
	
</div>
	<p>Play the hangman game.
<ul>
	<li>When starting the program, it must choose a random word from 3. This will be the secret word that the user must guess.
</li>
	<li>the program will count the number of letters of the chosen word and create that number of letters (initially with underscores)
.</li>
	<li>The user must enter letter by letter until the secret word is guessed.</li>
	<li>If the user hits any of the letters of the word, their corresponding underscore will be replaced by the corresponding letter.
</li>
</ul>
	</p>
	<p>It will be useful to have an array of char in which we will keep each of the letters that the user is getting right.
</p>
	<div class="notas">
		<h4>Notas</h4>
		<p>To generate a random double type number between 0 and 1:<br>
Math.random()
		</p>
		<p>If I want to compare two arrays, I will not use the equals method, but the method <br>
		Arrays.equals(array1, array2)</p>
		<p>cadena.indexOf(“a“) returns the first position of the letter a in the string. In case of not finding a match, it will return -1.</p>
		<h5>String class methods:</h5>
		<p><span class="u">charAt(int index)</span> <br>
		Returns the value of the letter at the specified position.</p>
<p><span class="u">toCharArray()</span> <br>
Convert a text string into an array of letters.</p>
	</div>
	<img style="margin: auto; display: block" src="img/ahorcado.svg" alt="Diagrama de flujo del juego del ahorcado">
		<h2 id="tres-en-raya">Exercise - Tic Tac Toe</h2>
	<p>Make the game three in a row for two players.</p>
<ul>
	<li>The board will be an array of 9 positions. </li>
		<li>The <strong> showTablero (String [] board) method; </strong> will print the board, with the “X” and “O” tabs where they apply.</li>
	<li>The game will have a <strong> playPlayer (String tab, String [] board) </strong> method that will receive the player's identifier ("X" or "O") as input parameter and where the player will be asked for the number corresponding to the position where you want to move your chip ("X" or "O").</li>
	<li>After each roll, it will be checked if someone has won by calling the <strong> EvaluateWin (String [] board) </strong> method;</li>
	<li>The <strong> evaluateWin (String [] board) </strong> method by successive if all the chances of a player winning.</li>
	<li>We will use the java console to see the board.</li>
</ul>
	<?= getRes('ejemplo','./ex/arrays/TicTacTie.cs', 'Tic Tac Tow') ?>
	<h4 class="red">Ejercicio – Tic Tac Toe to just one player</h4>
<p>The playPlayer1 () method will look like this:</p>
<pre><code>
function playPlayer1(){
	board[getComputerMove()] = &quot;X&quot;;
}</code></pre>
<p>Therefore, we must create a getComputerMove () method that will create a copy of the board, move the tab over this copy and, depending on the result, decide where to move on the real board. To perform the movement:</p>
<ol>
	<li>We check if the machine can make a move and win the game. (we will use the evaluateWin method, created in the previous exercise).
</li>
	<li>We check if after moving, the human can make a move and win the game.</li>
	<li>Check if there is any free corner. If it is, the machine moves to the corner.</li>
	<li>Check if the center is free. If it is, the machine moves to the center.</li>
	<li>Move to any of the remaining boxes.</li>
</ol>
		<h2 id="modificadores-acceso">Access modifiers</h2>
	<p>They determine the accessibility of a class, its member variables and methods.</p>
	<h4>Pueden ser: </h4>
	<ul>
		<li><span class="black bold">private</span>
	<p>A private element is only accessible within the class in which it is declared.</p></li>
		
		<li><p>
			<span class="black bold">Protected <span class="red">(protect the children)</span></span> <br>It is less restrictive than default. <br>
A protected element is only accessible from classes belonging to the same package and from all subclasses of the class that contains it.</p>
<pre><span class="black bold">com.pablomonteserin.a.A.java</span><code>public class A{
	protected void metodoDeA() {
		System.out.println("hola");
	}
}</code></pre>
<pre><span class="black bold">com.pablomonteserin.b.B.java</span><code>public class B extends A{
	void metodoDeB() {
		B b = new B();
		b.metodoDeA();
	}
}</code></pre></li>
		<li><span class="black bold">public</span> <br>
		It is the "most generous" modifier. <br>
A public element can be accessed without restrictions.</li>



<li><span class="bold">protected internal</span><br>Access is limited to the current project or to the subclasses with the modifier.</li>

<li><span class="bold">private protected</span><br>Access is limited to the class itself or to the subclasses of the class with the modifier within the current project.</li>
	</ul>
	<table style="text-align: center" border="1px">
		<tr>
			<th>Modifier</th>
			<th>The class itself</th>
			<th>Same package</th>
			<th>Daughter class and same package</th>
			<th>Daughter class </th>
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
<h2 id="constructores">Constructors</h2>
<h3 id="constructor_vacio">Empty Constructor</h3>
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
	public MyClass(string name){
		Console.WriteLine("Hello " + name);
	}
}</code></pre>
<h3 id="para_que_sirve_un_constructor">What is a Constructor for?</h3>
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
	<p class="red">If I don't know what are the parameters that I have to put, I can put on the parenthesis of the parameters and press
 ctrl + space</p>
</article>
<article>
		<h2 id="herencia">Inheritage</h2>
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
<p>It is the mechanism by which one class derives from another, so that it extends its functionality.</p>
	<h3 id="constructores_herencia">Constructors and inheritance</h3>
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
Father is executed <br>
Son is executed</p>
<p>What will be seen on the screen when executing the following code?</p>
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
	<h3>Exercise</h3>
	<p>Develop an application that contains the following classes:</p>
<img src="img/diagrama1.svg" alt="Diagrama del ejercio">
<p>The constructor of the Person class must increase the variable numInstancias by one unit.</p>
	<p>Develop a class with the name Main, which contains a public <span class = "bold"> static void main (String args []) </span> method, which, when executed, creates two employee and two client instances and prints the Total person instances created.</p>
	<div class="row">
	<?= getRes('ejemplo','./ex/constructors/heritage/exercises/inheritance-exercises/MainClass.cs', 'Main Class') ?>
	<?= getRes('ejemplo','./ex/constructors/heritage/exercises/inheritance-exercises/Client.cs', 'Client') ?>
	<?= getRes('ejemplo','./ex/constructors/heritage/exercises/inheritance-exercises/Employee.cs', 'Employee') ?>
	<?= getRes('ejemplo','./ex/constructors/heritage/exercises/inheritance-exercises/Person.cs', 'Person') ?>
	</div>
	<h3>Exercise - animals</h3>
	<p>Implement the classes in the following diagram. </p>
	<p>The compareSound () method checks if the sound that was passed in the constructor is longer than the sound stored in the static variable "soundLongLong". If so, overwrite the value of the variable with the new value.</p>
	<p>Develop a class with the name Main, which contains a <span class = "bold"> static void main (String args []) </span> method, which when executed generates an instance of Cow, Dog and Cat passing them in the constructor the sound they must emit ("muuuuuu", "guauguau", "meow", for example). The "compareSound" method must be called from within the constructor of the Animal class.</p>
	<p>Then, print the value of the static variable soundMasLargo.</p>
	<img src="img/animal.svg" alt="Diagrama del ejercicio">
	<div class="row">
	<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-inheritance/MainClass.cs', 'Main Class') ?>
	<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-inheritance/Cat.cs', 'Cat') ?>
	<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-inheritance/Cow.cs', 'Cow') ?>
	<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-inheritance/Dog.cs', 'Dog') ?>
	<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-inheritance/Animal.cs', 'Animal') ?>
	</div>
		<h2 id="polimorfismo">Polimorfism</h2>
		<h2 id="sobrecarga-sobreescritura">Overload and overwrite</h2>
	<pre><code>class OverloadOverride{
	static void Main(string[] args){
		Son h = new Son();
		Son.Override("Be Welcome ", "Pablo");
		Son.Overload(3);
	}
}

class Father{
	public static void Override(string welcomeTxt, string nombre){
		Console.WriteLine(welcomeTxt + nombre);
	}
	public static void Overload(string byeByeTxt, string nombre){
		Console.WriteLine(byeByeTxt + nombre);
	}
}
  
class Son : Father{
	//El tipo devuelto no debe cambiar.
	//los parámetros de entrada no deben cambiar
	//La accesibilidad no será más restrictiva que la del método original.
	//Si el método original es static, el método que hace el override, tambień debe serlo.

	public static void Override(string welcomeTxt, string nombre){
		Console.WriteLine(welcomeTxt + "......" + nombre);
	}
	//El tipo de dato devuelto puede cambiar.
	//Los parámetros de entrada deben cambiar.
	//La accesibilidad puede ser más restrictiva que la del método original.
	public static int Overload(int byeByeCode){
		Console.WriteLine(byeByeCode);
		return 4;
	}
  }</code></pre>
	<h2 id="abstraccion">Abstraction</h2>
	<h3>Abstract methods</h3>
	<p>We have a "Thing" class that has a "bounce" method. The "Brick" and "Ball" classes inherit from "Thing."</p>
	<p>The Thing class has an abstract method called "bounce". It is abstract because depending on whether we instantiate a brick or a ball, the code will have to be overwritten so that it bounces in a certain way.</p>
	<p>An abstract method is one that has only one statement and no body. It is intended to be overwritten, then it is not possible to use the private modifier with an abstract method.</p>
	<div class="col_left">
		<img src="img/Basketball.svg" alt="pelota baloncesto">
	</div>
	<div class="col_right">
			<img src="img/brick.svg" alt="ladrillo">
	</div>
	<p>They are declared as follows (removing the keys from the body of the function and putting one; in its place):</p>
	<pre><code>public void botar();</code></pre>
<h3>Abstract classes</h3>
<ul>
	<li>If a class has at least one abstract method, that class must be abstract.</li>
	<li>A class that inherits from an abstract class must implement all of its abstract methods (it is not necessary to overwrite non-abstract methods).</li>
	<li>Abstract comes to mean "undefined."</li>
</ul>
<h3>Exercise - animals with abstract class</h3>
<p>Implement the classes in the following diagram. </p>
<p>The constructor of the Animal class will call the methods "set Sound ()" and "compare Sound ()"</p>
<p>The compareSound () method checks if the "sound" variable is longer than the sound stored in the static "soundLongLong" variable. If so, overwrite the value of the variable with the new value.</p>
<p>The method Set Sound () must be overwritten to assign the value of the sound you play to the sound variable.</p>
<p>Develop a class with the name Main, which contains a public static void main method (String args []), which when executed generates an instance of each animal class.</p>
<p>Then, print the value of the static variable soundMasLargo.</p>
<img src="img/Animal-abstract.svg" style="margin:auto; display: block" alt="diagrama del ejercicio">
<div class="row">
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-abstract-class/MainClass.cs', 'MainClass') ?>
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-abstract-class/Cat.cs', 'Cat') ?>
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-abstract-class/Dog.cs', 'Dog') ?>
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-abstract-class/Cow.cs', 'Cow') ?>
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-abstract-class/Animal.cs', 'Animal') ?></div>
<h2 id="interfaces">Interfaces</h2>
	<p>A <span class = "red bold"> interface </span> is an abstract class in which all methods will be abstract methods.</p>
	<p>A <span class = "blue bold"> class </span> that implements an interface must also implement all its methods. If we do not want this to happen, we can add the abstract modifier to the interface.</p>
	<p>A static variable defined within an interface will be implicitly defined as constant.</p>
	<p>An interface is intended to be overwritten, then it makes no sense to use private modifiers within an interface and they are not allowed.</p>
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
	<h3>Exercise - animals with interface</h3>
<p>Implement the classes in the following diagram. </p>
<p>The compareSound () method checks if the sound that was passed in the constructor is longer than the sound stored in the static variable "soundLongLong". If so, overwrite the value of the variable with the new value.</p>
<p>Develop a class with the name Main, which contains a public static void main method (String args []), which when executed generates an instance of each animal class and invokes its methods "compareSound".</p>
<p>Then, I will have to print on screen the longest sound made, stored in the static variable soundMasLargo.</p>
<img src="img/diagrama5.svg" alt="Diagrama ejercicio" style="width:100%">
<div class="row">
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/MainClass.cs', 'MainClass') ?>
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/Cat.cs', 'Cat') ?>
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/Dog.cs', 'Dog') ?>
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/Cow.cs', 'Cow') ?>
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/IAnimal.cs', 'IAnimal') ?>
<?= getRes('ejemplo','./ex/constructors/heritage/exercises/animal-interface/Animal.cs', 'Animal') ?>
</div>
<h2 id="clases-internas">Inner classes</h2>
	<p>They are those whose definition is within another. An internal class can overwrite <span class = "blue bold"> methods of the class that contains it </span>.</p>
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
property of the external class<br>
internal class property</p>
		<h2 id="garbage-collector">Garbage Collector</h2>
	<p>It is responsible for freeing memory allocated to objects that are no longer used.</p>
	<p>The <span class = "blue bold"> finalize () </span> method defines what will happen when an object is picked up by the garbage collector. It is not usually used, since we cannot determine when it will be executed.</p>
	<p><span class="red bold">System.gc()</span> it suggests to the Garbage Collector that it be executed, however this does not ensure that the memory occupied by the created objects is released.</p>
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
<p>When I know that I am going to stop using an object, I equal it to null so that I am eligible for the garbage collector.</p>
		<h2 id="encapsulamiento">Encapsulation</h2>
	<p>Encapsulation prevents external manipulation of some parts of objects. </p>
<ul>
	<li>Force the user to use a method to
Access the data.</li>
	<li>Makes the code easier to
keep</li></ul>
	<p>This improves the stability of the application, since the direct change of a variable can affect its correct functioning.</p>
	<p>This allows a more reusable code, since this is encapsulated in independent modules.</p>
	<p>For this I will declare the methods as public and the variables as private.</p>
<p>Example <br>
When placing an order, no more than 10 packages can come. Therefore, if less than 10 packages come, the number of packages in the warehouse is modified, but if more than 10 come, an error message will be displayed.
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
</article>
<article>
	<h2 id="contenedores">Containers</h2>
	<h4 id="recorrer_coleccion">Iterate a collection</h4>
<pre><code>ArrayList arrayList = new ArrayList();
arrayList.Add("cow");
arrayList.Add("dog");
arrayList.Add("elephant");

foreach(var item in arrayList){
	Console.WriteLine(item);
}</code></pre>
<h2 id="genericos">Generics</h2>
	<p>Los tipos genéricos se encuentran incluidos dentro de los caracteres &lt;&gt;.  Especifican el tipo de datos que va a almacenar, utilizar o devolver una clase o método.</p>
	<h3 id="en_colecciones">Generics in collections</h3>
	<pre><code>List &lt;string&gt; arrayList = new List&lt;string&gt;();
arrayList.Add(&quot;cow&quot;);
arrayList.Add(&quot;dog&quot;);
arrayList.Add(&quot;elephant&quot;);

foreach(var item in arrayList){
	Console.WriteLine(item);
}</code></pre>
<div class="notas">
	<h3>Notes</h3>
	<ul>
		<li>Type checking at runtime is not necessary, thereby reducing the use of code casting.</li>
<li>The code will be less ambiguous and easier to maintain.</li>
	</ul>
</div>
	<h3 id="en_clases">Generics in classes</h3>
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
<h2 id="crud_sin_base-datos">Exercise create, read, update and delete in a List</h2>
	<p>The application consists of 2 classes: Main and Student.</p>
	<p>The Student class will have two properties: name (string) and age (int).</p>
	<p>When starting the application from the Main we will be asked for the operation we want to do: </p>
<ul>
	<li><span class="black">Insert a new student </span>. This option asks us for the name and age of the student we want to insert.
</li>
	<li><span class="black">Delete a student </span>. This option asks us for the name of the student we wish to remove.</li>
	<li><span class="black">Modify the data of a student </span>. This option first asks us for the student's name in order to identify him and then his new name and age.</li>
	<li><span class = "black"> Show all stored students </span>. This option goes through the ArrayList of students and prints the names of each one.</li>
</ul>

<div class="row">
<?= getRes('ejemplo','./ex/containers/crud-student/MainClass.cs', 'MainClass') ?>
<?= getRes('ejemplo','./ex/containers/crud-student/Student.cs', 'Student') ?>
</div>
<h2 id="juego-oca">Exercise - goose game</h2>
	<p>Play the goose game. The game will consist of a Main class from which the game is run and a bean `` Player '' with the attributes name (String), box (int), shiftsRests (int).</p>
	<p>At the beginning of the application we will be asked to indicate the number of players. We will create the instances of the relevant players and enter them into an ArrayList of players. The players will roll the dice and advance squares until one reaches box 63. <br>
	Note that:</p>
<ul>
	<li>Positions 5, 9, 14, 18, 23, 27, 32, 36, 41, 45, 50, 54 and 59 correspond to geese. If the player falls into them, the text `` Goose goose goose and throw because it touches me '', the player will advance to the next box of the goose and will throw again.</li>
	<li>If the player falls in box 19, he will fall into the pension and may not roll the dice in the next two turns.</li>
	<li>If the player falls in box 3, he will fall into the pit and may not roll the dice in the next turn.</li>
	<li>If the player falls in box 52, he will fall in jail and may not roll the dice in the next three turns.</li>
	<li>Boxes 6 and 12 are bridges. If the player falls on them, the text `` From bridge to bridge and shot because the current takes me '' will be printed. In this case, if he fell in box 6 he will go to 12 and if he fell in 12 he will go to 6. In both cases, he will throw again.</li>
	<li>Boxes 26 and 53 are given. If the player falls on them, the text `` From dice to dice and throw because it has touched me '' will be printed. In this case, if it fell in box 26 it will go to 53 and if it fell in 53 it will go to 26. In both cases it will be thrown again.</li>
	<li>Box 58 is death, the player who falls in it loses (although in the original game what happened was that the player had to return to box 1).</li>
</ul>
<div class="row">
	<?= getRes('ejemplo','./ex/goosegame/GooseMain.cs', 'Main') ?>
	<?= getRes('ejemplo','./ex/goosegame/Player.cs', 'Player') ?>
	</div>
<h2 id="recorrer-map">Iterate a Map</h2>
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
<h2 id="excepciones">Exceptions</h2>
		<img src="img/excepciones.svg" alt="excepciones">
	<ul>
		<li><strong>At compile time </strong> (checked exceptions): Inherit from
java.lang.Exception. The compiler will force us to control them using a Try / Catch block or a throws.</li>
<li><strong> At runtime </strong> (unchecked exceptions): Inherit from
java.lang.RuntimeException. It is the only Exception that is not checked by the compiler. An error also occurs at runtime, although an error is not an exception.</li>
	</ul>
	<h3 id="excepcion_con_catch">Exceptión with a catch</h3>
<pre><code>int i = 2;
int j = 0;
Console.WriteLine("before");
try{
	Console.WriteLine("in the try");
	Console.WriteLine(i / j);
}catch (ArithmeticException e){
	Console.WriteLine("in catch");
	e.ToString();
}
Console.WriteLine("after");</code></pre>
<p class="green"><span class="bold">Output:</span> <br>
before <br> 
en el try <br>
in the catch <br>
after <br></p>
	<h3 id="excepcion_con_varios_catch">Exception with several catch</h3>
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
before<br>
in the try <br>
in catch2<br>
after </p>
	<p>The only catch that applies is the one that picks up the exception. After this, the program continues to run from the last Catch.</p>
	<p>For the code to compile, the most general error types (Throwable) must be below the most particular (ArithmeticException)</p>
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
			Console.WriteLine("exception processed");
		}
	}
}</code></pre>
	<p><span class="bold black">Consola</span>: <br>
exception throwed and processed<br>
exception processed</p>
<h3 id="finally">Finally</h3>
<p>The finally is always executed, whether the exception is treated or the exception is not treated. The only way to prevent the finally from running is by running a System.exit (), which kills the virtual machine.</p>
<p>It is always used in conjunction with a try-catch. There can be nothing after the catch and before finally.</p>
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
before <br>
in catch2 <br>
in finally	<br>
after</p>
	<h3>Exception exercise</h3>
		<p>Implement a Main class that calls the getPriceConIva () <span class = "black bold"> method of the Services class </span> and print the return value.</p>
	<p>Implement a Services class with a method called getPrecioConIva () that will receive a number and return that number multiplied by 1.16. If the price is greater than 100 it will throw a Price Too High Exception that will be captured in the Main.</p>
	<p>Implement a Price Too High Exception class and overwrite its printStackTrace () method to print the text "Price is too high."</p>
<h3>Delegates</h3>
<p>It is a type that represents a reference to a method</p>
<p>Uses:</p>
<h4>Assign the method to be executed when a certain event occurs. An event is a message that an object sends when an action happens</h4>
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
<h4>Define anonymous methods</h4>
<p>These methods will be the input parameters of other methods. For example, the Find method needs an anonymous method.</p>
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
<h5>We could also have used a Lambda expression</h5>
<pre><code>Person selectedPerson = persons.Find( p =>  p.age == 38);</code></pre>
	<h3>Linq</h3>
	<p>Language Integrated Query. It allows integrating queries similar to SQL in the C # language, for many types of information (XML, collections, and database entities).</p>
	<p>A Linq instruction must start with a <span class = "bold"> from </span> instruction and must end with a <span class = "bold"> select </span> or <span class = "bold"> group instruction </span>:</p>
	<pre><code>var query = from p in Items where p.Estado = 0 select p;</code></pre>
	<pre><code>var query = from p in persons where p.age == 38 select p;
Person selectedPerson = query.ToList()[0];
Console.WriteLine(selectedPerson.name);</code></pre>
<h2 id="hilos">Threads</h2>
	<p>To use them I can extend thread or implement Runnable</p>
<h3>Two examples of threads in real life</h3>
<p>When Madonna concert tickets are sold. In a few seconds all tickets are sold out due to high demand. The process that materializes the purchase of the ticket should not be carried out by several users at the same time, since there is a risk that more tickets will be sold than are actually available. That part of the code will have to be synchronized.</p>
<p>Several people enter a supermarket where there is only one dependent. Although each customer roams the supermarket at their own pace, looking at products, choosing the ones that have less preservatives, etc. When paying customers must queue and be served by the seller one by one. This would be the synchronized part of an algorithm that represents what happens in the supermarket.</p>
	<h4>Application example without using threads</h4>
	<p>Although we create 3 "pseudo-threads", they really are not, and the code of a thread will not be executed until the previous "pseudo-thread" has been completed.</p>
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
<pre><span class="bold">FalseThred.java</span><code>class FalseThread{
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
	<h3>Use Thread</h3>
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
});
include $path."/diapos_theme/footer.php";
?>