<?php 
$titulo_curso="☕️ JSP y JSTL";
$meta_description = 'Veremos como mezclar código HTML y Java en una página web utilizando las etiquetas standard.';
$img_curso = 'curso-servlets.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	global $dots;
?>

<section id="amor" class="verIndice">
		<article id="inicio_del_documento" class="indice">
<ol>
		<li><a href="#jsp">JSP (java server pages)</a></li>
			<li><a href="#donde-esta">Dónde está el .java y el .class generados por el jsp...?</a></li>
			<li><a href="#error-al-cargar-jre">Error al cargar el JRE</a></li>
			<li><a href="#scriplet">Scriplet</a></li>
			<li><a href="#el">EL</a></li>

			<li><a href="#jstl">JSTL – (Java Server Page Standard Tag Library)</a></li>

			<li><a href="#clases-objetos">Uso de clases y objetos</a></li>
			<li><a href="#estructura-control-if">Estructura de control IF</a></li>

<li><a href="#mandar-formulario">Mandar formulario</a></li>

		<li><a href="#bucle-for">Estructura de control: bucle for</a></li>

	<li><a href="#asignar-valor">Asignar valor a variables con JSTL</a></li>
		<li><a href="#session">Session</a></li>


	<li><a href="#inclusion">Inclusión</a></li>
			</ol>
			<div></article>
	</section>


<main class="curso">
<?= drawH1WithImg() ?>

	<article><div><h2 id="jsp">JSP (java server pages)</h2>

<div class="row">
	<div class="col-md-10"><p>Permiten meter código java en un fichero html en vez de código html en un fichero java.</p>
<p>Cuando ponemos código java en un fichero html, dicho fichero pasa a tener extensión jsp.</p>
<p>Los .jsp generan .java (servlets). Los servlets compilados son .class.</p>
<p>Es el contenedor de aplicaciones (tomcat, etc) el que convertirá los jsp en servlets.</p>
<p>El servidor leerá el archivo jsp. Luego, va a buscar el jsp compilado (el .class), si no lo encuentra, lo compila. <br>
Traducción: pasar de jsp a java. <br>
Compilación: pasar de java a .class
</p></div>
	<div class="col-md-2"><?= getRes("recurso","/curso/assets/zip/jee-workspace.zip","Descargar Workspace") ?></div>
</div>




	<div></article><article><div><h2 id="donde-esta">Dónde está el .java y el .class generados por el jsp...?</h2>

	<p>Si tenemos el Servidor configurado de la siguiente forma en Eclipse...</p>
	<img style="width:100%" src="img/pantallazo.svg" alt="configuración eclipse para web">
<p>Para poder modificar estas opciones no puede haber ningún proyecto desplegado en el servidor.</p>
<p>Almacenaremos los archivos <span class="font-weight-bold">jsp</span> en la carpeta <span class="font-weight-bold">WebContent</span> (eclipse) o <span class="font-weight-bold">web</span> (netbeans).</p>
	<div></article><article><div><h2 id="error-al-cargar-jre">Error al cargar el JRE</h2>
<img style="width:100%" src="img/pantallazo2.svg" alt="pantallazo eclipse">
	<p>Proyecto -> Properties -> Java Build Path -> Libraries -> Add Library -> JRE</p>

<div></article><article><div>
	<h2 id="scriplet">Scriplet</h2>
	<h3>Hola mundo con Scriptlet</h3>
<pre><code>&lt;%= request.getAttribute(&quot;nombre&quot;) %&gt;</code></pre>

<h3>Comentarios</h3>
<pre><code>&lt;h1&gt;P&aacute;gina con comentarios&lt;/h1&gt;
&lt;%
<span class="green">//Esto es un comentario de una sola l&iacute;nea
/*
* y esto un comentario de varias l&iacute;neas
*/</span>
%&gt;</code></pre>
	

	<h3>Variables en Scriplet</h3>
<pre><code>&lt;h1&gt;JSP Scriplet&lt;/h1&gt;
&lt;%
	String texto = &quot;Soy una cadena&quot;;
	int i = 5;
	int j = 3;
%&gt;
&lt;%=texto %&gt;&lt;br/&gt;
&lt;%=i %&gt;+&lt;%=j %&gt;=&lt;br/&gt;
&lt;%=i+j %&gt;&lt;br/&gt;
&lt;%=i+&quot;&quot;+j %&gt;</code></pre>

	<h3>El contenedor transforma un JSP en un servlet</h3>
<pre><code><strong>JSP</strong>			<strong>Servlet</strong>

			public class basicCounter_jsp extends SomeSpecialHttpServlet{
				public void _jspService(HttpServletRequest request,
				HttpServletResponse response) 
				throws java.io.IOException, ServletException{
					PrintWriter out = response.getWriter();
					response.setContenType(&quot;text/html&quot;);
&lt;html&gt;&lt;body&gt;		-&gt;  		out.println(&quot;&lt;html&gt;&lt;body&gt;&quot;);
&lt;% int count=0; %&gt; 	-&gt; 		int count = 0;  
This page count is now:	-&gt; 		out.write(&quot;This page count is now:&quot;);
&lt;%= ++ count %&gt;		-&gt; 		out.print(++count);
&lt;/body&gt;&lt;/html&gt;		-&gt; 		out.write(&quot;&lt;/body&gt;&lt;/html&gt;&quot;);</code></pre>
<p>Todo el código de un scriplet cae dentro del método service.</p>
<p>Por tanto, las variables declaradas en un scriplet son locales.</p>

	<h3>Declaración de variables y métodos miembro</h3>
	<p>Todo lo que vaya precedido de una admiración irá declarado directamente dentro de la clase, por tanto usaré el signo de exclamación para declarar variables miembro y métodos</p>
<pre><code>&lt;html&gt;							
&lt;body&gt;					public class basicCounter_jsp extends SomeSpecialHttpServlet{
&lt;%! int doubleCount(){				int doubleCount(){		
	count = count*2;			count = count*2;
	return count;				return count;
}					}
%&gt;
&lt;%! int count=1; %&gt;				int count=1;
					public void _jspService(HttpServletRequest request,
						HttpServletResponse response throws java.io.IOException){
						PrintWriter out = response.getWriter();
						response.setContentType(&quot;text/html&quot;);
						out.write(&quot;&lt;html&gt;&lt;body&gt;&quot;);
The page count is now:				out.write(&quot;The page count is now:&quot;);
&lt;%= doubleCount() %&gt;				out.print(doubleCount());
&lt;/body&gt;						out.write(&quot;&lt;/body&gt;&lt;/html&gt;&quot;);
&lt;/html&gt;</code></pre>

	<h3>Objetos implícitos</h3>
	<pre>JspWriter 		-&gt; out
HttpServletRequest 	-&gt; request
HttpServletResponse	-&gt; response
HttpSession 		-&gt; session
ServletContext 		-&gt; application
ServletConfig		-&gt; config
Throwable		-&gt; exception</pre>

	<h3>JSP API</h3>
	<pre>jspInit();	-&gt; ejecutado al cargar el jsp

jspDestroy();   -&gt; ejecutado tras cargar el jsp

_jspService(); 	-&gt; desde aqu&iacute; se llama al c&oacute;digo del jsp.</pre>

	<h4>Desventajas de los scriplets</h4>
	<ul>
		<li>Son difíciles de comprender por alguien que no sea programador java.
</li>
<li>Es necesario hacer el Casting de objetos y esto ocasiona que tengamos que importar más Clases en los JSP. En el siguiente ejemplo habrá que importar la clase Libro.
<pre><code>&lt;% Libro libro = (Libro)request.getAttribute(&quot;libro&quot;); %&gt;
&lt;%=libro.getTitulo()%&gt;&lt;br/&gt;</code></pre></li>
	</ul>

	<div></article><article><div><h2 id="el">EL</h2>
	<article><div>
	<h3>Características: </h3>
<ul>
	<li>Simplifican el uso de expresiones en JSPs. </li>
	<li>Permite la ejecución de expresiones fuera de los elementos de scripting de JSP</li>
	<li>Fue introducida con JSTL 1.0 como un mecanismo alternativo al uso de expresiones en Java para asignar valores a atributos</li>
	<li>EL es mucho más tolerante con las variables null y realiza conversiones automáticas de datos
Se puede habilitar o deshabilitar el uso de expresiones EL: <br>
<pre><code>&lt;%@ page isELIgnored=&quot;false&quot; %&gt;</code></pre>
</li>
</ul>

	<pre><code>${nombre}</code></pre>
<div></article>
<article><div>
	<h3>Definir constantes en el web.xml</h3>


	<div class="row">
		<div class="col-md-6"><pre><code>&lt;servlet&gt;
	&lt;description&gt;&lt;/description&gt;
	&lt;display-name&gt;D_sumador&lt;/display-name&gt;
	&lt;servlet-name&gt;D_sumador&lt;/servlet-name&gt;
	&lt;servlet-class&gt;com.pablomonteserin.jsp.servlets.D_sumador&lt;/servlet-class&gt;
	&lt;init-param&gt;
	&lt;param-name&gt;<span class="red bold">valor</span>&lt;/param-name&gt;
		&lt;param-value&gt;
			5
		&lt;/param-value&gt;
	&lt;/init-param&gt;
&lt;/servlet&gt;</code></pre></div>
		<div class="col-md-6"><p>Para recuperar dicho valor desde el servlet:</p>
<pre><code>ServletConfig conf=getServletConfig();
int valor = Integer.parseInt(conf.getInitParameter("valor"));</code></pre></div>
	</div>


<div></article>
<article><div>
	<h3>Ciclo de una petición con JSP</h3>
<pre><span class="bold">index.jsp</span><code>&lt;form action=&quot;/ciclo/Controlador&quot;&gt;
	&lt;input type=&quot;text&quot; name=&quot;<span class="bold red">nombre</span>&quot;&gt;

	&lt;input type=&quot;submit&quot; value=&quot;Como soy?&quot;&gt;
&lt;/form&gt;

<span class="bold blue">${resultado}</span></code></pre>

<pre><span class="bold">Controlador.java</span><code>@WebServlet("/Controlador")
public class Controlador extends HttpServlet {

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		<span class="green">//Recojo los parámetros que me vienen del jsp</span>
		String nombre = request.getParameter("<span class="bold red">nombre</span>");

		<span class="green">//Genero un resultado</span>
		String resultado = "Hola " + nombre;
		
		<span class="green">//Ponemos en el objeto request los datos que vamos a enviar al jsp</span>
		request.setAttribute("<span class="bold blue">resultado</span>", resultado);
		
		<span class="green">//Redireccion a index.jsp</span>
		request.getRequestDispatcher("index.jsp").forward(request,  response);
	}
}</code></pre>

		

	
	<div></article><article><div><h2 id="jstl">JSTL – (Java Server Page Standard Tag Library)</h2>
<p>Son un conjunto de etiquetas (tags) standard que encapsulan funcionalidades de uso común para muchas aplicaciones con JSPs.</p>
<span class="font-weight-bold">Ventajas de JSTL frente a scriptlet:</span>
<ul>
	<li>Debido a que las etiquetas JSTL son XML, se integran uniformemente con las etiquetas HTML y serán fáciles de usar por alguien que conozca html.</li>
	<li>Las etiquetas JSTL están específicamente preparadas para realizar las tareas que van a tener lugar en la lógica de la presentación.</li>
	<li>EL es usado extensamente en la librería JSTL.</li>
</ul>

<span class="font-weight-bold">Desventajas:</span>
<ul>
	<li>Agregar mayor sobrecarga al servidor.  El código Java embebido en los scriptlets es básicamente copiado en el servlet resultante. En cambio, las etiquetas JSTL, causan un poco más de código en el servlet. En la mayoría de casos esta cantidad no es mensurable pero debe ser considerado.</li>
	<li>Los scriptlets son más potentes que las etiquetas JSTL. Si desea hacer todo en un script JSP pues es muy probable que insertará todo el código Java en él. </li>
</ul>


	<h3>Cargar JSTL</h3>
	<ol>
		<li>Dejamos los archivos jstl.jar y standard.jar en la carpeta lib de nuestro proyecto. <a href="ex/jstl.zip">Descargar librerías</a>.</li>
		<li>Incluimos las siguientes etiquetas en la cabecera de nuestro jsp: <br>
<pre><code>&lt;%@ taglib prefix=&quot;c&quot; uri=&quot;http://java.sun.com/jsp/jstl/core&quot; %&gt;
&lt;%@ taglib prefix=&quot;x&quot; uri=&quot;http://java.sun.com/jsp/jstl/xml&quot; %&gt;
&lt;%@ taglib prefix=&quot;fmt&quot; uri=&quot;http://java.sun.com/jsp/jstl/fmt&quot; %&gt;
&lt;%@ taglib prefix=&quot;sql&quot; uri=&quot;http://java.sun.com/jsp/jstl/sql&quot; %&gt;</code></pre>
La dirección http no es buscada en internet, sino en los tld (tag library descriptor) que contienen los jar. El texto concreto de esta url carece de importancia, mientras coincida con la url que posee el tld.
		</li>

		<li>
			<pre><code>&lt;c:out value=&quot;Hola Mundo JSTL!&quot;&gt;&lt;/c:out&gt;
&lt;c:out value=&quot;${param.nombre}&quot; /&gt;</code></pre>
		</li>
	</ol>
	<div class="notas">
		<p><span class="font-weight-bold">Nota:</span>
Para trabajar con jstl y con custom tags no hará falta modificar el web.xml. La etiqueta taglib quedó obsoleta en los servlets 2.4.</p>
	</div>
<div></article>
<article><div>
<h3>getAttribute() vs getParameter()</h3>
	<pre><span class="bold">getParameter() devuelve una cadena de texto:</span><code>request.getParameter("nombre");</span> <br>
${param.nombre} <span class="green">// normalmente no usaremos este código en la vista</span></code></pre>


<pre><span class="bold">setAttribute() envía un objeto:</span><code>request.setAttribute("nombreAtributo", valorAtributo); <span class="green">// guarda un objeto en el request. </span></code></pre>

<pre><code>&lt;%=request.getAttribute("nombreAtributo");%&gt; <span class="green">// devuelve un objeto</span>${nombreAtributo}
&ltc:out value="${nombreAtributo}" /&gt"</code></pre>
 <div></article>
<article><div>

	<h3 id="ejs">Ejercicio saludo</h3>
	<p>El usuario debe introducir su nombre en un cuadro de texto. Dicho nombre será enviado a un Servlet que generará el mensaje "Buenas tardes [nombre]". Dicho mensaje llegará de nuevo al jsp, dónde lo mostraremos</p>
	<p>Utilizar scriplet, JSTL y EL para recuperar la información.</p>

<pre><span class="bold">Directiva para cargar JSTL:</span><code>&lt;%@ taglib prefix=&quot;c&quot; uri=&quot;http://java.sun.com/jsp/jstl/core&quot; %&gt;</code></pre>
	<div class="notas">
		<p><span class="black bold">Notas:</span>
El atributo default de la etiqueta &lt;c:out/&gt; contiene la información que se imprimirá en caso de que la variable nos venga nulo.
		</p>

	</div>

<div></article><article><div><h2 id="clases-objetos">Uso de clases y objetos</h2>
	<h3>Instanciar </h3>
<p>Instanciar una clase desde un JSP utilizando scriplet.</p>

<div class="row">
	<div class="col-md-6"><pre><code>&lt;h1&gt;Con scriplets JSP&lt;/h1&gt;
&lt;%= new com.pablomonteserin.model.StringExtendido() %&gt;</code></pre></div>
	<div class="col-md-6"><pre><code>&lt;%@page import=&quot;com.pablomonteserin.model.StringExtendido&quot;%&gt;
&lt;%= new StringExtendido() %&gt;</code></pre></div>
</div>




	<h4>Ejercicio: <span class="text-primary">Instanciar</span></h4>
	<p>Imprimir utilizando scriptlet (<%= %>) una instancia de la clase Date.</p>
	<p>Tener en cuenta que la clase Date pertenece al paquete java.util</p>

	
	<h4>Ejemplo – Recuperar un Bean Libro que tiene un metodo getTitulo();</h4>
	
<pre><span class="font-weight-bold">servlet.java</span> <code>
Libro libro = new Libro("978-84-415-2988-5", "Java 7", 15.8); 
request.setAttribute(&quot;libro&quot;, libro); 
request.getRequestDispatcher(&quot;index.jsp&quot;).forward(request, response);</code></pre>



<pre><span class="font-weight-bold">index.jsp (scriplet) </span><code>
&lt;% Libro libro = (Libro)request.getAttribute(&quot;libro&quot;); %&gt;
&lt;%=libro.getTitulo()%&gt;</code></pre>



<pre><span class="font-weight-bold">index.jsp (EL)</span><code>
${requestScope.libro.titulo}</code></pre>

<pre><span class="font-weight-bold">index.jsp (JSTL)</span><code>
&lt;c:out value=&quot;${requestScope.libro.titulo}&quot;&gt;&lt;/c:out&gt;
</code></pre>
<p>Obsérvese que utilizando Scriplet es necesario hacer un casteo para recuperar la información y usando EL y JSTL, no.</p>

	<h4>Ejercicio Instanciar II</h4>
	<p>La aplicación consta de un servlet, un bean Persona(dni, nombre y dirección) y un fichero jsp.</p>
	<p>El flujo de la aplicación comienza en el jsp. Introduciremos los datos pertinentes y al pulsar el botón de envío, los enviaremos al controlador. En el controlador  Aquí instanciaremos e inicializaremos un bean Persona.</p>
	<p>Luego, utilizando el método 
<pre><code>request.getRequestDispatcher("rutaHastaElJSP").forward(request, response);</code></pre>
iremos al jsp.
</p>

<p>Aquí mostraremos las propiedades del bean utilizando scriptlet, EL y JSTL.</p>

	<h4>Ejercicio</h4>

<div class="row">
	<div class="col-md-10">	<p>Hacer un formulario html con dos campos (nombre y edad) de tal forma que al pulsar se muestre un texto con el siguiente formato.</p>
	<p>El señor <span class="font-weight-bold u">nombre</span> tiene <span class="font-weight-bold u">dni</span>años.</p>
	<p>Al pulsar el botón de submit enviaremos la información al servlet, que recogerá los parámetros, creará un bean a partir de ellos y pondrá dicho bean en el request.</p>
	<p>Luego, iremos a un nuevo jsp utilizando </p>
<pre><code>request.getRequestDispatcher(&quot;rutaHastaElJSP&quot;).forward(request, response);</code></pre>

</div>
	<div class="col-md-2"><?= getRes('recurso','zip/proyecto-persona.zip', 'Descargar ejemplo') ?></div>
</div>



		<div></article><article><div><h2 id="estructura-control-if">Estructura de control IF</h2>

		<div class="row">
<div class="col-md-6">
<pre><code>&lt;%@ taglib prefix=&quot;c&quot; uri=&quot;http://java.sun.com/jsp/jstl/core&quot; %&gt;

&lt;h1&gt;Scriptlet JSP&lt;/h1&gt;
&lt;%
	int dato1 = 3;
	int dato2 = 5;
	if(dato2 &gt; dato1){
		out.println(&quot;dato2 es mayor que dato1&quot;);
	}else{
		out.println(&quot;dato2 es mayor que dato1&quot;);		
	}
%&gt;

&lt;h1&gt;EL&lt;/h1&gt;
${5 gt 3}- 1 -${5 &gt; 3} - 2 - ${5 lt 3} - 3 -${5 &lt; 3} - 4 -${5 eq 1}	


&lt;h1&gt;JSTL&lt;/h1&gt;
&lt;c:if test=&quot;${5&gt;3}&quot;&gt;
5 es mayor que 3!
&lt;/c:if&gt;</code></pre>
</div>

<dic class="col-md-6">
<img src="img/output.svg" alt="solución ejercicio">

</dic>

		</div>
	

	<h3>Procesar el formulario en la propia página</h3>
<pre><code>&lt;%
	if(request.getParameter(&quot;botonEnvio&quot;)!=null){
		out.println(&quot;boton Pulsado&quot;);
	}
%&gt;

&lt;form method=&quot;post&quot; action=&quot;#&quot;&gt;
	&lt;input type=&quot;submit&quot; name=&quot;botonEnvio&quot; value=&quot;botonEnvio&quot;&gt;&lt;/input&gt;
&lt;/form&gt;</code></pre>

	<h4>Ejercicio</h4>
	<p>Repetir el ejemplo de la diapositiva anterior usando JSTL</p>

	<h4>else</h4>
<pre><code>&lt;%@ taglib prefix=&quot;c&quot; uri=&quot;http://java.sun.com/jsp/jstl/core&quot; %&gt;

&lt;h1&gt;Scriptlet JSP&lt;/h1&gt;
&lt;%
	int dato1 = 3;
	int dato2 = 5;
	if(dato2 &gt; dato1){
		out.println(&quot;dato2 es mayor que dato1&quot;);
	}else{
		out.println(&quot;dato2 es mayor que dato1&quot;);		
	}
%&gt;


&lt;h1&gt;JSTL&lt;/h1&gt;

 &lt;c:choose&gt;
        &lt;c:when test='${5 &gt; 3}'&gt;
			5 es mayor que 3!
        &lt;/c:when&gt;
        &lt;c:otherwise&gt;
			5 no es mayor q 3.
        &lt;/c:otherwise&gt;
&lt;/c:choose&gt;
</code></pre>

<h4>Ejercicio</h4>

<div class="row">
	<div class="col-md-6"><p> Añadiendo un scriplet al siguiente código, controlar que si el botón no fue pulsado se
muestre el mensaje <br>
"El botón no fue pulsado!"
</p>
</div>
	<div class="col-md-6">
<pre><code>&lt;%
	if(request.getParameter(&quot;botonEnvio&quot;)!=null){
		out.println(&quot;boton pulsado&quot;);
	}//A&ntilde;adir l&iacute;neas aqu&iacute;
%&gt;

&lt;form method=&quot;post&quot; action=&quot;#&quot;&gt;
	&lt;input type=&quot;submit&quot; name=&quot;botonEnvio&quot; value=&quot;botonEnvio&quot;&gt;&lt;/input&gt;
&lt;/form&gt;</code></pre></div>
</div>


	<h4>Ejercicio – repetir el ejercicio de la diapositiva anterior usando JSTL</h4>

<h4>Ejercicio</h4>

<div class="row">
	<div class="col-md-4"><p>Si he pulsado el botón de enviar, imprimir el value del campo de texto; si no, imprimir "Botón no pulsado". Utilizar un scriplet.</p></div>
	<div class="col-md-8"><img class="img-fluid" src="img/pantallazo3.svg" alt="pantallazo resolución final"></div>
</div>




	<h4>Ejercicio</h4>
	<p>Repetir el ejercicio de la diapositiva anterior usando JSTL.</p>

<div></article><article><div><h2 id="mandar-formulario">Mandar formulario</h2>
	<h3><span class="text-dark">Ejercicio:</span> Mandar un formulario.</h3>
<div class="row">
	<div class="col-md-6">	<p>Resolver utilizando scriplet, EL y JSTL</p>
	<p>Desde una página HTML mandaremos datos a un Servlet. En el Servlet introduciremos la información en un pojo de pedido y finalmente iremos a una página llamada salida.jsp donde mostraremos un mensaje con el pedido realizado.</p></div>
	<div class="col-md-6">	<img class="img-fluid" src="img/pantallazo4.svg" alt="pantallazo resolución final"></div>
</div>




	<h3><span class="text-dark">Ejercicio:</span> Repetir con JSTL</h3>
	<p>Repetir el ejercicio de la diapositiva anterior utilizando JSTL.</p>

	<h3><span class="text-dark">Ejercicio:</span> Cambiar color body utilizar scriplet</h3>
	<img src="img/pantallazo5.svg" alt="ver pantallazo">

	<h3>Ejercicio</h3>
	<p>Repetir el ejercicio anterior utilizando JSTL.</p>


	<h3>Ejercicio</h3>
	<p>La combo debe recordar la opción seleccionada tras hacer submit.</p>
	<p>Pista!: <br>
Una opción de una combo está seleccionada si tiene su atributo <br>
selected con el siguiente valor: <br>
selected = "selected"</p>

	<h3>Ejercicio</h3>
	<p>Hacer una calculadora que haga uso de los
operadores aritméticos +, -, *, /. Al pulsar el botón de envío realizará la operación seleccionada.</p>

<img src="img/pantallazo6.svg" alt="ver solución">

	<h3>Ejercicio</h3>
	<p>Repetir el ejercicio anterior usando JSTL.</p>

	<div></article><article><div><h2 id="bucle-for">Estructura de control: bucle for</h2>
<pre><code>&lt;%
	for(int i=0; i&lt;10; i++){
		out.print(i);
	}
%&gt;</code></pre>

	<h3><span class="text-dark">Ejercicio:</span> imprimir los números pares que hay dentro de los 1000 primeros números naturales
</h3>
<pre><code>Nota: El operador &#x201c;%&#x201d; nos da el resto de dividir un n&uacute;mero entre otro. <br>
Ej: 7%2=1</code></pre>

	<h3>Bucle con JSTL</h3>
<pre><code>&lt;c:forEach begin=&quot;0&quot; step=&quot;1&quot; end=&quot;10&quot; var=&quot;variable&quot;&gt;
	&lt;c:out value=&quot;${variable}&quot;&gt;&lt;/c:out&gt;
&lt;/c:forEach&gt;</code></pre>

	<h3>Recorrer una collection</h3>
<pre><code>&lt;c:forEach var=&quot;libro&quot; items=&quot;${libros}&quot;&gt;
	&lt;c:out value=&quot;${libro.titulo}&quot;&gt;&lt;/c:out&gt;
&lt;/c:forEach&gt;</code></pre>

	<h3>Recorrer una collection con contador</h3>
	<pre><code>&lt;ul&gt;
	&lt;c:forEach var=&quot;persona&quot; items=&quot;${requestScope.collection}&quot;
		varStatus=&quot;status&quot;&gt;
		&lt;li&gt;item &lt;c:out value=&quot;${status.<span class="red bold">count</span>}&quot; /&gt; - 
				 &lt;c:out value=&quot;${status.<span class="green bold">index</span>}&quot; /&gt; 
			&lt;c:if test=&quot;${status.first}&quot;&gt;(this is the first item!)&lt;/c:if&gt; 
			&lt;c:if test=&quot;${status.last}&quot;&gt;(this is the last item!)&lt;/c:if&gt;
		&lt;/li&gt;
	&lt;/c:forEach&gt;
&lt;/ul&gt;</code></pre>
<div class="output">
	<span class="font-weight-black">Salida:</span> <br>
	<ul>
		<li>item 1 - 0 (this is the first item!)</li>
		<li>item 2 - 1</li>
		<li>item 3 - 2</li>
		<li>item 4 - 3 (this is the last item!)</li>
	</ul>  
</div>


	<h3><span class="text-dark">Ejercicio:</span> recorrer una collection de personas y maquetar el resultado de la siguiente forma.
La carga de información de la colección la haremos mediante un Servlet; sin usar base de datos.</h3>

<div class="row">
	<div class="col-md-4"><img src="img/pantallazo7.svg" alt="pantallazo ejercicio resuelto"></div>
	<div class="col-md-2"><?= getRes('recurso','zip/ver-listado.rar', 'Descargar recurso') ?></div>
</div>



	<div></article><article><div><h2 id="asignar-valor">Asignar valor a variables con JSTL</h2>
<pre><code>&lt;c:set var=&quot;nombreVariable&quot; value=&quot;valor&quot;/&gt;
&lt;c:out value=&quot;${nombreVariable}&quot; /&gt;
${nombreVariable}</code></pre>

	<div></article><article><div><h2 id="session">Session</h2>
	<article><div>
	<p>Hola Servidor! Esta es mi primera petición. Te paso el parámetro nombre con el value Juan</p>
	<p>Ok, pero no voy a recordarte. Lo mejor será que te dé un <span class="red">identificador de sesión</span>. Debes pasármelo cada vez que me hagas una petición. Así sabré que eres tú.</p>

<p>Hola de nuevo!. Esta es mi segunda petición. Te paso el parámetro edad. Mi ID es 38... me recuerdas? </p>
<p>Vamos a ver... 38... oh! Aquí estás! La última vez me dijiste que te llamabas Juan!. </p>	

	<p class="red">El identificador de sessión es una COOKIE llamada JSESSIONID</p>

	<h4>Creación de la sesión</h4>
	<p>La sesión se crea automáticamente al ingresar a la página web, o bien cuando una sesión termine.</p>
<pre><span class="bold">Podemos ver el valor de JSESSIONID:</span><code>${pageContext.session.id}</code></pre>

	<h3>Matar una sesión</h3>
<pre><span class="bold">Configurando un timeout en el web.xml</span><code>&lt;web-app ...&gt;
	&lt;servlet&gt;
		...
	&lt;/servlet&gt;
	&lt;session-config&gt;
		&lt;session-timeout&gt;15&lt;/session-timeout&gt;
	&lt;/session-config&gt;
&lt;/web-app&gt;</code></pre>
<p>La sesión será anulada tras 15 minutos de inactividad.</p>

<pre><span class="bold">Asignando un timeout desde código java:</span><code>session.setMaxInactiveInterval(60*20);</code></pre>
Argumento en segundos (en este caso,) 20 minutos


<pre><span class="bold">Método invalidate</span><code>session.invalidate();</code></pre>

	<h3>Si el cliente tiene las cookies deshabilitadas... URL rewriting</h3>
	<pre><code>out.println(''&lt;a href=''\&lt;a href=\'''' + response.encodeURL(''/BeerTest.do'')+''\''&gt;click me&lt;/a&gt;'';</code></pre>
<p>Add the extra session ID info to this URL
</p>


	<h3>Sessión</h3>
	<p>Usar variables de sesión es más rápido, pero cuesta memoria RAM.</p>
	<p>Usar la base de datos es más lento pero no consume RAM.</p>
	<p>En  la RAM del servidor se almacenará el identificador de sesión y los objetos vinculados a ella.</p>
	<p>En una COOKIE del cliente se almacenará dicho identificador de sesión.</p>
<p>Para almacenar un valor en la sessión</p>
<pre><code>HttpSession session = request.getSession();
session.setAttribute("valor", valor);</code></pre>



	<h3>Listener de sesión</h3>
	<p><span class="font-weight-bold">Crear un listener de sesión</span>: Btn derecho sobre un package → new → Listener → Escribo el nombre → next → HTTP session events → Livecycle → marco la check</p>

	<p>Será posible modificar el contenido inicial de la sesión desde el session listener:</p>
<pre><code>public void sessionCreated(HttpSessionEvent request){
	HttpSession session = request.getSession();
}</code></pre>




	<h4>Recuperar y guardar un ArrayList en la sesión</h4>
	<p>Antes de usar el ArrayList que vamos a recuperar de la sesión, tendremos que comprobar que no sea nulo u obtendremos una NullPointerException.</p>
<pre><code>HttpSession session = request.getSession();
	
ArrayList &lt;Libro&gt; libros = (ArrayList &lt;Libro&gt;) session.getAttribute(&quot;libros&quot;);
if(libros == null){
	libros = new ArrayList&lt;Libro&gt;();
}
libros.add(libro);
<span class="green">//<span class="bold">Nota</span>: en caso de que session.getAttribute nos devuelva null, será necesaria <span class="bold">la siguiente línea</span>. Si no devuelve null, no será necesaria, ya que el ArrayList estaría apuntando a la sesión y al modificar el ArrayList se estaría modificando directamente el valor que está en la sesión.
<span class="bold">//session.setAttribute("palabras", al);</span></span></code></pre>

<h3>Ejercicios  Sesión</h3>

<h4>CRUD contra la sesion</h4>


<div class="row">
	<div class="col-md-10"><p>Hacer una página con alta, baja modificación y consulta de una Persona.</p><p>Los atributos de dicha persona serán <span class="i">nombre</span>, <span class="i">dni</span> y <span class="i">edad</span></p></div>
	<div class="col-md-10"><?= getRes('recurso','zip/crud-sin-bd.zip', 'Descargar recurso') ?></div>
</div>


<h4>Ejercicio sumatorio</h4>
	<p>Hacer un proyecto web nuevo en el que a través de un formulario se vayan sumando dos números introducidos por el usuario. </p>
	<p>En un campo de tipo input aparecerá la suma de los dos números introducidos</p>
	<p>En otro campo aparecerá la suma de todos los números introducidos desde el comienzo de la sesión.</p>
	<p>En otro campo más aparecerá la suma desde que arrancamos el servidor</p>
	<p>Para ello, desde una página index.jsp enviaremos la información a un controlador servlet que realizará las operaciones necesarias. El resultado de estas operaciones será devuelto a la página de inicio index.jsp.</p>
	<p>El botón limpiar mata la sesión. Esto será procesado por el controlador servlet.</p>

<p>Para acceder al ámbito de la aplicación usaremos:</p>
<pre><code>ServletContext ctx = getServletContext();</code></pre>


	<h4 id="libreria_sin_sesion">Ejercicio librería con sesión</h4>
	<p>Hacer un CRUD para los libros de una librería. Usaremos un SessionListener los datos de la base de datos en un ArrayList que almacenaremos en la sesión. A partir de ahí, todas las operaciones las haremos contra dicha sesión.</p>
	<p>En caso de terminar antes, intentar que los cuadros de modificación se actualicen al cambiar el valor de la combo. <br>
Para ello, cuando la combo cambie, enviaré la id del libro, la compararé con la id de los libros almacenados en el arraylist y devolveré los datos del libro para el cual hubo coincidencia.</p>
<div class="row">
<div class="col-md-5">
<img src="img/libreria-mvc.svg" alt="librería mvc">

</div>
<div class="col-md-5">
<img src="img/libreria-mvc-2.svg" alt="librería mvc 2">

</div>
<div class="col-md-2"><?= getRes('recurso','zip/calidades-futbol-jpa.zip', 'Descargar ejercicio calidades con JPA') ?></div>
</div>


	<h4>Ejercicio <span class="text-primary">librería – con Map</span></h4>
	<p>Repetir el ejercicio de la diapositiva anterior utilizando un TreeMap para almacenar la información en vez de un ArrayList.</p>
<pre><code>
<span class="font-weight-bold">M&eacute;todos del TreeMap:</span>
objetoTreeMap.put(Object key, Object value);
objetoTreeMap.remove(Object key);
objetoTreeMap.get(Object key);
objetoTreeMap.firstEntry().getValue();

<span class="font-weight-bold">Recorrer un Map:</span>
&lt;c:forEach var=&quot;libro&quot; items=&quot;${sessionScope.libros}&quot;&gt;
	&lt;option value=&quot;&lt;c:out value=&quot;${libro.value.id}&quot; /&gt;&quot; 
...</code></pre>

	<h4>Ejercicio: <span class="text-primary">Lista de palabras</span></h4>
	<p>Hacer un formulario que permita añadir palabras a un ArrayList. Dicho ArrayList será almacenado en la sesión. Con código EL iremos visualizando el contenido del ArrayList:</p>
<pre><code>${ArrayListPalabras}</code></pre>
	 
<div></article>

	<div></article><article><div><h2 id="inclusion">Inclusión de JSP's</h2>

	<article><div>

		<h3>&lt;%@ include file=&quot;Header.html&quot; %&gt;</h3>
		<p>La inclusión se ejecuta en tiempo de traducción, se genera un único fichero java a partir de uno o varios JSP. </p>
		<p>No permite importar una dirección url.</p>


		<h3>&lt;jsp:include page=&quot;Header.jsp&quot; /&gt;</h3>
		<p>Esta es la etiqueta que usualmente usamos.</p>
		<p>Es la versión xml de la directiva anterior.</p>

		<h3>&lt;c:import url=&quot;http://google.es&quot; /&gt;</h3>
		<p>Para usarla hay que importar la librería jstl.</p>
		<p>Es igual que &lt;jsp:include, pero con más posibilidades.</p>
		<p>Permite importar url's externas.</p>

		<h3>Ejercicio</h3>


		<div class="row">
			<div class="col-md-6">		<p>Hacer dos páginas web cuyas secciones cabecera y botonera sean cargadas con la etiqueta &lt;jsp:include ... /></p>
		<p>Para realizar este ejercicio tendremos que crear cuatro documentos:</p>
		<ul>
			<li>cabecera.html</li>
			<li>botonera.html</li>
			<li>pagina1.jsp</li>
			<li>pagina2.jsp</li>
		</ul>
</div>
			<div class="col-md-6"><img class="img-fluid" src="img/pantallazo8.svg" alt="ver solución ejercicio"></div>
		</div>



		<h3>Ejercicio</h3>
		<p>Ahora los links de la botonera enlazarán con la propia página, pasándole un parámetro que será recogido y usado para que una etiqueta &lt;c:choose&gt; procese el parámetro y cargue el contenido correspondiente.</p>
		<span>Para realizar este ejercicio necesitaremos 3 páginas:</span>
<ul>
	<li>contenido1.html</li>
	<li>contenido2.html</li>
	<li>index.jsp</li>
</ul>
<div></article>
</main>
<?php 

});
include $path."/diapos_theme/footer.php";
?>