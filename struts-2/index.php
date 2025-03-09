<?php 
/* 
$titulo_curso="Struts 2";
$meta_description = 'Curso con videotutoriales acerca de este framework para desarrollo de aplicaciones web con Java';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
add_action( 'genesis_after_header', function(){
	global $dots;

*/
	?>
<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#diferencias">Diferencias con Struts 1</a></li>
		<li><a href="#descarga">Descarga | Instalación con Maven</a>	</li>
		<li><a href="#redireccionamientos">Redireccionamientos</a>

<ol>
<li><a href="#redireccionamiento_directo">Redireccionamiento directo</a></li>
<li><a href="#redireccionamiento_al_metodo_execute">Redireccionamiento al método execute del action</a></li>	
<li><a href="#redireccionamiento_a_un_metodo">Redireccionamiento a un método concreto del action</a></li>
<li><a href="#con_parametros">Redireccionamiento a un método con paso de parámetros</a></li>
<li><a href="#salida">La salida de un action es la entrada de otro</a></li>
</ol>
		
		</li>
			<li><a href="#errores_tipicos">Errores típicos</a></li>
			<li><a href="#maquetacion">Maquetación y Struts 2</a></li>
			<li><a href="#ejercicios">Ejercicios</a></li>
			<li><a href="#notas">Notas Struts2</a></li>
			<li><a href="#ejercicio_libreria">Ejercicio librería</a></li>
			<li><a href="#internacionalizacion">Internacionalización</a></li>
			<li><a href="#validacion">Validación</a></li>
			<li><a href="#hospital">Ejercicio hospital</a></li>
			<li><a href="#ejercicio_futbol_checkboxlist">Ejercicio futbol </a></li>
			<li><a href="#tiles">Tiles</a></li>
			<li><a href="#upload_file">Upload File</a></li>
			<li><a href="#struts2_ajax">Struts2 y Ajax</a></li>
			<li><a href="#paginacion">Ejercicio paginación</a></li>

			</ol>
</article>
</section>
<main class="curso">
<article>
	<div>
<h2 id="diferencias">Diferencias con Struts1</h2>
<p>Struts2 tiene configuración por defecto.</p>
<p>Ahora el struts-config.xml se llama struts.xml y está en otro sitio (paquete src).</p>
					<?php // getRes("video_premium",297065428) ?>
					</div>
</article>
<article>
	<div>
	<h2 id="descarga">Descarga | Instalación con Maven</h2>
	<a href="http://struts.apache.org/download.cgi" target="_blank">http://struts.apache.org/download.cgi</a>
					<?php // getRes("video_premium",297065449) ?>
					</div>
</article>
<article>
	<div>
	<h2 id="redireccionamientos">Redireccionamientos</h2>

	<h3 id="redireccionamiento_directo">Redireccionamiento directo</h3>
				<?php // getRes("video_premium",297065472) ?>

<pre><span class="black bold">index.jsp</span><code>&lt;a href=&quot;<span class="red bold">enlace</span>.action&quot;&gt;Enlace&lt;/a&gt;</code></pre>

<pre><span class="bold black">WebContent/WEB-INF/web.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot; ?&gt;
&lt;web-app
	xmlns=&quot;http://xmlns.jcp.org/xml/ns/javaee&quot;
	xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
	xsi:schemaLocation=&quot;http://xmlns.jcp.org/xml/ns/javaee 
	http://xmlns.jcp.org/xml/ns/javaee/web-app_3_1.xsd&quot;
	version=&quot;3.1&quot;&gt;

	&lt;filter&gt;
		&lt;filter-name&gt;struts2&lt;/filter-name&gt;
		&lt;filter-class&gt;org.apache.struts2.dispatcher.filter.StrutsPrepareAndExecuteFilter
		&lt;/filter-class&gt;
	&lt;/filter&gt;
	&lt;filter-mapping&gt;
		&lt;filter-name&gt;struts2&lt;/filter-name&gt;
		&lt;url-pattern&gt;/*&lt;/url-pattern&gt;
	&lt;/filter-mapping&gt;
	
&lt;/web-app&gt;</code></pre>

<pre><span class="bold black">src/struts.xml</span><code>&lt;!DOCTYPE struts PUBLIC
	&quot;-//Apache Software Foundation//DTD Struts Configuration 2.3//EN&quot;
	&quot;http://struts.apache.org/dtds/struts-2.3.dtd&quot;&gt;

&lt;struts&gt;
	&lt;package name=&quot;com.pablomonteserin.action&quot; extends=&quot;struts-default&quot;&gt;
		&lt;action name=&quot;enlace&quot;&gt;
			&lt;result&gt;/pagina2.jsp&lt;/result&gt;
		&lt;/action&gt;
	&lt;/package&gt;
&lt;/struts&gt;</code></pre>
<pre><span class="bold black">página2.jsp</span><code>Llegamos a ĺa página 2</code></pre>
<a href="ex/a_I_redireccionamiento_directo.zip">Descarga</a>
(utilizaremos este ejercicio como base para los siguientes)

<h3 id="redireccionamiento_al_metodo_execute">Redireccionamiento al método execute del action</h3>
			<?php // getRes("video_premium",297065486) ?>

<pre><span class="bold">index.jsp</span><code>&lt;a href=&quot;<span class="pink bold">accion</span>.action&quot;&gt;Enlace a acción&lt;/a&gt;</code></pre>
	<pre><span class="black bold">struts.xml</span><code>&lt;!DOCTYPE struts PUBLIC
    &quot;-//Apache Software Foundation//DTD Struts Configuration 2.0//EN&quot;
    &quot;http://struts.apache.org/dtds/struts-2.0.dtd&quot;&gt;
&lt;struts&gt;
	&lt;package name=&quot;com.pablomonteserin.action&quot; extends=&quot;struts-default&quot;&gt;
		&lt;action name=&quot;<span class="pink bold">accion</span>&quot; class=&quot;com.pablomonteserin.action.<span class="green">SaludarAction</span>&quot;&gt;
			&lt;result&gt;/pagina2.jsp&lt;/result&gt;
		&lt;/action&gt;
	&lt;/package&gt;
&lt;/struts&gt;</code></pre>
<pre><span class="bold black">SaludarAction.java</span><code>
public class <span class="green bold">SaludarAction</span> extends <span class="bold blue">ActionSupport</span> {
	private String <span class="purple">resultado</span>;

	public String <span class="red bold">execute</span>(){
		<span class="purple">resultado</span> = &quot;Hola Pablo&quot;;
		return SUCCESS;
	}
	//getters y setters el atributo resultado
}</code></pre>
<pre><span class="bold black">pagina2.jsp</span><code>&lt;%@ taglib prefix=&quot;s&quot; uri=&quot;/struts-tags&quot;%&gt;
&lt;h2&gt;&lt;s:property value=&quot;<span class="purple">resultado</span>&quot; /&gt;&lt;/h2&gt;</code></pre>
<h3 id="redireccionamiento_a_un_metodo">Redireccionamiento a un método concreto del action</h3>
			<?php // getRes("video_premium",297065501) ?>

<pre><span class="bold black">index.jsp</span><code>&lt;a href=&quot;<span class="pink bold">accion2</span>.action&quot;&gt;Enlace a acción&lt;/a&gt;</code></pre>

<pre><span class="black bold">struts.xml</span><code>&lt;!DOCTYPE struts PUBLIC
    &quot;-//Apache Software Foundation//DTD Struts Configuration 2.0//EN&quot;
    &quot;http://struts.apache.org/dtds/struts-2.0.dtd&quot;&gt;
&lt;struts&gt;
	&lt;package name=&quot;com.pablomonteserin.action&quot; extends=&quot;struts-default&quot;&gt;
		&lt;action name=&quot;<span class="pink bold">accion2</span>&quot; class=&quot;com.pablomonteserin.action.SaludarAction&quot; method=&quot;<span class="red bold">saludar</span>&quot;&gt;
			&lt;result&gt;/pagina2.jsp&lt;/result&gt;
		&lt;/action&gt;
	&lt;/package&gt;
&lt;/struts&gt;</code></pre>
<pre><span class="black bold">SaludarAction.java</span><code>public class SaludarAction extends ActionSupport {
	private String <span class="purple">resultado</span>;

	public String <span class="red">saludar</span>(){
		<span class="purple">resultado</span> = &quot;Hola Juan&quot;;
		return SUCCESS;
	}
	//getters y setters para el atributo resultado
}</code></pre>

<pre><span class="bold black">pagina2.jsp</span><code><%@ taglib prefix="s" uri="/struts-tags"%>
&lt;h2&gt;&lt;s:property value=&quot;resultado&quot; /&gt;&lt;/h2&gt;</code></pre>


<h3 id="con_parametros">Redireccionamiento a un método con paso de parámetros</h3>

			<?php // getRes("video_premium",297065516) ?>

<p>Debemos definir estos parámetros como atributos globales dentro del action y hacer sus correspondientes getters y setters</p>




<h3 id="salida">La salida de un action es la entrada de otro</h3>
			<?php // getRes("video_premium",297065532) ?>

	<pre><span class="black bold">struts.xml</span><code>&lt;!DOCTYPE struts PUBLIC
    &quot;-//Apache Software Foundation//DTD Struts Configuration 2.0//EN&quot;
    &quot;http://struts.apache.org/dtds/struts-2.0.dtd&quot;&gt;
&lt;struts&gt;
	&lt;package name=&quot;com.pablomonteserin.action&quot; extends=&quot;struts-default&quot;&gt;
		&lt;action name=&quot;accionRedireccion&quot; class=&quot;com.pablomonteserin.action.SaludarAction&quot; method=&quot;saludar&quot;&gt;
			&lt;result <span class="red">type=&quot;redirectAction&quot;</span>&gt;accion3&lt;/result&gt;
		&lt;/action&gt;
	&lt;/package&gt;
&lt;/struts&gt;</code></pre>


	<div class="notas">
		<p><span class="black bold">Notas</span>: <br>
Si usamos type="chain", redireccionaremos a otro bean, pero cuando finalmente vayamos a un jsp, le llegará la información del penúltimo action ejecutado.
</p>
	</div>
	</div>
</article>
<article>
	<div>
	<h2 id="errores_tipicos">Errores típicos</h2>

			<?php // getRes("video_premium",297065554) ?>

	<p><span class="bold black">Error 404</span> <br>
Es posible que en el struts.xml se haga referencia a una clase Java que realmente no existe.
	</p>

	</div>
</article>
<article>
	<div>
	<h2 id="maquetacion">Maquetación y Struts 2</h2>
	<p>Por defecto Struts2 añade etiquetas de tablas a las etiquetas de los formularios. Esto puede dar problemas a la hora de maquetar un formulario. Para evitarlos usaremos el atributo theme="simple":</p>
	<pre><code>&lt;s:textfield  name=&quot;mes&quot; size=&quot;2&quot; maxlength=&quot;4&quot; theme=&quot;simple&quot;/&gt;</code></pre>
	<p>También puedo utilizar este atributo en el formulario, con lo cual todos los inputs del mismo se maquetarán sin estructura de tabla.</p>
				<?php // getRes("video_premium",297063585) ?>
				</div>

</article>

<article>
	<div>
	<h2 id="action_support">Formularios</h2>
<pre><span class="bold black">nombre.jsp	</span><code>&lt;%@ taglib prefix=&quot;s&quot; uri=&quot;/struts-tags&quot;%&gt;
&lt;s:form method=&quot;post&quot; action=&quot;<span class="red">Saludar</span>&quot;&gt;				
	&lt;s:textfield label=&quot;Introduce tu nombre&quot; name=&quot;titulo.nombre&quot;/&gt;
	&lt;s:submit/&gt;
&lt;/s:form&gt;</code></pre>

<pre><span class="black bold">Imprimir una combo concatenando el texto mostrado:</span><code>&lt;s:select name=&quot;paciente.id&quot; list=&quot;pacientes&quot; headerKey=&quot;0&quot; headerValue=&quot;Select One&quot; listKey=&quot;id&quot; listValue=&quot;nombre+'  '+apellidos&quot; /&gt;</code></pre>
	


<pre><span class="black bold">Puedes tener un botón que efectúe un action específico sin necesidad de programarlo con javascript:</span><code>&lt;s:submit action=&quot;baja&quot; /&gt;</code></pre>
<pre><span class="black bold">y luego, en el struts.xml:</span><code>&lt;constant name=&quot;struts.mapper.action.prefix.enabled&quot; value=&quot;true&quot;/&gt;
&lt;package nam...</code></pre>
</div>
	
</article>


<article>
	<div>
	<h2 id="ejercicios">Ejercicios</h2>
	<h3>Ejercicio </h3>
			<?php // getRes("video_premium",297063601) ?>

	<p>Hacer un action llamado "SumadorAction" con 3 propiedades: n1, n2 y suma, sus correspondientes métodos getters y setters y un método <strong>execute</strong> que sumará estos dos números y devolverá la suma.</p>
	<p>Ingresaremos los datos mediante un formulario y tras hacer submit iremos a una página dónde visualizaremos el resultado de la operación.</p>
		<?php // getRes("video_premium",297063610) ?>

	<h3>Ejercicio</h3>
	<p>Hacer una calculadora. Gestionar y realizar la operación desde dentro del método <strong>execute</strong></p>
<p>Combo con valores harcodeados en struts2: <br>
&lt;s:select list=&quot;#{'value1':'txtMostrado1', 'value2':'txtMostrado2'}&quot; name=&quot;operacion&quot;/&gt;
</p>
	<?php // getRes("ejemplo","ex/CalculadoraConStruts2.zip", "Calculadora Struts 2") ?>

		<?php // getRes("video_premium",297063622) ?>

		</div>
</article>

<article>
	<div>
	<h2 id="notas">Notas Struts2</h2>
	<p>En struts2 utilizaremos una única clase java que será llamada por todos los action de un mismo mantenimiento (alta, baja, modificación y consulta).</p>
<p><span class="black bold">Mapear propiedades:</span></p>	
	<p>Puedo mapear directamente las propiedades de un bean si desde la vista utilizo <span class="green">el nombre del bean junto con la propiedad que quiero mapear</span>:</p>
<pre><code>&lt;s:textfield name=&quot;<span class="green">paciente.nombre</span>&quot; value=&quot;%{paciente.nombre}&quot; /&gt;</code></pre>
<pre><span class="black bold">Recorrer una colección:</span><code>&lt;s:iterator value=&quot;libros&quot;&gt;
	&lt;s:property value=&quot;titulo&quot;/&gt; - 
	&lt;s:property value=&quot;precio&quot;/&gt;
&lt;/s:iterator&gt;</code></pre>
</div>
</article>
<article>
	<div>
	<h2 id="ejercicio_libreria">Ejercicio librería</h2>
		<?php // getRes("video_premium",297063636) ?>

<img src="img/libreria-struts.svg" alt="Foto ejercicio librería struts 2">
	<div class="notas">
		<p><span class="black bold">Recomendación:</span> <br>
Usar decimal para el precio en la base de datos, en lugar de Float o Double. Esto nos ahorrará problemas al trabajar con los decimales. </p>
	</div>


	<?php // getRes("video_premium",297059963) ?>


	<h3>Ejercicio - usar Treemap</h3>
	<p>Realizar el ejercicio anterior utilizando un TreeMap de libros que será almacenado en la sesión. Al iniciar la aplicación el SessionListener almacenará en la sesión un treemap con los libros que hay en la base de datos. A partir de ese momento, las operaciones se realizarán directamente sobre la sesión, sin utilizar la base de datos.</p>
<pre><span class="black bold">Uso de la sesión desde un action de Struts2:</span><code>Map session = ActionContext.getContext().getSession();
TreeMap libros = (TreeMap) session.get("libros");</code></pre>



<pre><span class="black bold">Uso de la sesión desde un listener:</span><code>HttpSession session = arg0.getSession();
session.setAttribute("libros", new TreeMap());</code></pre>


	
	<pre><span class="black bold">Recorrer un TreeMap con iterator:</span> <code>&lt;s:iterator value=&quot;libros&quot; &gt;
	&lt;s:property value=&quot;value.titulo&quot;/&gt;&lt;/a&gt;&lt;/td&gt;
&lt;/s:iterator&gt;</code></pre>
	
	<pre><span class="black bold">Recorrer una collection almacenada en la session:</span><code>&lt;s:iterator value=&quot;#session.personas&quot;&gt;
	&lt;s:property value=&quot;nombre&quot;/&gt;&lt;br/&gt;
	&lt;s:property value=&quot;edad&quot;/&gt;&lt;br/&gt;
	&lt;hr/&gt;
&lt;/s:iterator&gt;</code></pre>


				<?php // getRes("ejemplo","ex/libreriastruts2.zip", "Descargar librería Struts 2") ?>
				</div>
</article>
<article>
	<div>
<h2 id="internacionalizacion">Internacionalización</h2>
	<h3>Hola Mundo con internacionalización</h3>

<pre><span class="black bold">struts.xml</span><code>&lt;constant name=&quot;struts.custom.i18n.resources&quot; value=&quot;global&quot; /&gt;</code></pre>

<pre><span class="black bold">global.properties</span> (en la raíz de la carpeta src)<code><span class="red">pagina_inicio.holaMundo</span> = Hola mundo\!\!</code></pre>
<p style="margin-top:0px">Si este fichero tiene acentos, caracteres asiáticos, etc, podemos hacer que se vean correctamente utilizando la herramienta que viene entre los binarios (carpeta bin) del jdk: <br>
<span class="black">native2ascii -encoding utf8 C:\source.txt C:\output.txt</span></p>


<pre><span class="black bold">HelloWorld.jsp</span><code>&lt;%@ taglib prefix=&quot;s&quot; uri=&quot;/struts-tags&quot;%&gt;
&lt;s:text name=&quot;<span class="red">pagina_inicio.holaMundo</span>&quot; /&gt;
Para poner un textfield con label:
&lt;s:textfield key="login.username" name="username" /&gt;</code></pre>

	<h3>Internacionalización – varios idiomas</h3>
	<pre>-src
	- global.properties
	- global_pt.properties
	- global_es.properties</pre>

	
<pre><span class="black bold">HelloWorld.jsp</span><code>&lt;a href=&quot;location.action?request_locale=es&quot;&gt;En Espa&ntilde;ol&lt;/a&gt;
&lt;a href=&quot;location.action?request_locale=pt&quot;&gt;En Portugu&eacute;s&lt;/a&gt;&lt;/p&gt;</code></pre>

	
La clase vinculada a location.action no hace nada en particular:
<pre><code class="green">&lt;action name=&quot;location&quot;&gt;
	&lt;result&gt;HelloWorld.jsp&lt;/result&gt;
&lt;/action&gt;</code></pre>

Basta con el el parámetro enviado sea request_locale para que se produzca correctamente el cambio del idioma.
</p>
<p>Si queremos cargar el español, y el español es el idioma por defecto, dejaremos en blanco el fichero global_es.properties, de tal forma que al no encontrar nada, el sistema se irá a leer el fichero de configuración por defecto, que estará en español. </p>

<h3>Internacionalización imprimiendo valores dentro de un atributo. Hay dos formas</h3>
<pre><span class="black bold">HelloWorld.jsp</span><code>&lt;%@ taglib prefix=&quot;s&quot; uri=&quot;/struts-tags&quot;%&gt;
&lt;h2&gt;
<span class="purple">&lt;s:property value=&quot;%{getText('resource.msg')}&quot; /&gt;
&lt;s:property value=&quot;mensaje&quot; /&gt;</span>
&lt;/h2&gt;

<span class="purple">Cuando queramos usar internacionalización en el atributo de una etiqueta, utilizaremos esta forma de cargar los textos.</span></code></pre>



<pre><span class="black bold">global.properties</span><code><span class="red">resource.msg</span> = Seleccione una opci&oacute;n, por favor

<span class="black bold">HelloWorld.java</span>
public class HelloWorld extends ActionSupport {
	private String mensaje;

	public String recuperaMensaje(){
		setMensaje(getText(&quot;<span class="red">resource.msg</span>&quot;));
		<span class="green">/*nota:
		Es posible recuperar el idioma actual usando:
		Locale loc = getLocale(); */</span>
		return SUCCESS;
	}
	public String getMensaje() {
		return mensaje;
	}

	public void setMensaje(String mensaje) {
		this.mensaje = mensaje;
	}
}</code></pre>
</div>	
</article>
<article>
	<div>
	<h2>Nota!</h2>
	<p>Obtener el nombre del action que se está ejecutando:</p>
	<pre><code>String action = com.opensymphony.xwork2.ActionContext.getContext().getName();
System.out.println(action);</code></pre>
</div>
</article>
<article>
	<div>
	<h2 id="validacion">Validación</h2>

	<pre><span class="black bold">index.jsp</span><code>&lt;%@ page contentType=&quot;text/html; charset=UTF-8&quot; %&gt;
&lt;%@ taglib prefix=&quot;s&quot; uri=&quot;/struts-tags&quot; %&gt;
&lt;s:head/&gt;
&lt;s:form action=&quot;Register&quot; &gt;
	&lt;s:textfield label=&quot;User Name&quot; key=&quot;<span class="blue">user.username</span>&quot;/&gt;
	&lt;s:password label=&quot;Password&quot; key=&quot;<span class="blue">user.password</span>&quot; /&gt;
	&lt;s:textfield label=&quot;Email&quot; key=&quot;<span class="blue">user.email</span>&quot; /&gt;
	&lt;s:submit/&gt;
&lt;/s:form&gt;</code></pre>
<pre><span class="black bold">PacienteAction.java </span><code>(el action debe tener los getters y
setters de las propiedades que quiero validar o no se producir&aacute; la validaci&oacute;n).</code></pre>
<pre><span class="black bold">PacienteAction-validation.xml</span> (mismo paquete que PacienteAction.java)<code>&lt;!DOCTYPE validators PUBLIC
&quot;-//Apache Struts//XWork Validator 1.0.2//EN&quot;
&quot;http://struts.apache.org/dtds/xwork-validator-1.0.2.dtd&quot;&gt;
&lt;validators&gt;
&lt;field name=&quot;<span class="blue">user.username</span>&quot;&gt;
	&lt;field-validator type=&quot;requiredstring&quot;&gt;&lt;message key=&quot;<span class="purple">validateRequired</span>&quot;/&gt;&lt;/field-validator&gt;
&lt;/field&gt;
&lt;field name=&quot;<span class="blue">user.password</span>&quot;&gt;
	&lt;field-validator type=&quot;requiredstring&quot;&gt;&lt;message key=&quot;validateRequired&quot;/&gt;&lt;/field-validator&gt;
        &lt;field-validator type=&quot;stringlength&quot;&gt;
		&lt;param name=&quot;minLength&quot;&gt;6&lt;/param&gt;
		&lt;param name=&quot;trim&quot;&gt;true&lt;/param&gt;
		&lt;message key=&quot;<span class="purple">validatePassword</span>&quot;/&gt;
	&lt;/field-validator&gt;
&lt;/field&gt;
&lt;field name=&quot;<span class="blue">user.email</span>&quot;&gt;
	&lt;field-validator type=&quot;requiredstring&quot;&gt;&lt;message key=&quot;<span class="purple">validateRequired</span>&quot;/&gt;&lt;/field-validator&gt;
        &lt;field-validator type=&quot;email&quot;&gt;&lt;message key=&quot;<span class="purple">validateMail</span>&quot;/&gt;&lt;/field-validator&gt;
&lt;/field&gt;
&lt;/validators&gt;</code></pre>
<pre><span class="black bold">package.properties</span><code>validateRequired = ${getText(fieldName)} is required.
validateMail = ${getText(fieldName)} is not in correct format.
validatePassword = ${getText(fieldName)} should be more than 6 character.</code></pre>
<pre><span class="black bold">struts.xml</span><code>&lt;action name=&quot;Register&quot; class=&quot;com.PacienteAction&quot;&gt;
	&lt;result&gt;/index.jsp&lt;/result&gt;
	&lt;result name=&quot;input&quot;&gt;index.jsp&lt;/result&gt;
&lt;/action&gt;</code></pre>
<p>PacienteAction.java , PacienteAction-validation.xml y package.properties deben estar en el mismo paquete</p>
<div class="notas">
	<p><span class="black bold">Nota</span>: <br>Lo más apropiado es definir los mensajes de los errores de validación en los ficheros package.properties y las etiquetas de los elementos en los ficheros global. Para mostrar los errores de validación  no es necesario registrar los ficheros package.properties en el struts.xml. Sin embargo, si queremos elementos del tipo <s:text /> hagan uso de los valores definidos en estos ficheros,  si que deberemos definirlos en el struts.xml</p>

</div>

	<h3>Validar un número</h3>
<pre><span class="black bold">index.jsp</span><code>&lt;s:head/&gt;
&lt;s:form action=&quot;Register&quot; &gt;
	&lt;s:textfield key=&quot;numero&quot; /&gt; 
	&lt;s:submit/&gt;
&lt;/s:form&gt;</code></pre>
<pre><span class="black bold">ValidationAction-validation.xml</span><code>&lt;!DOCTYPE validators PUBLIC
        &quot;-//OpenSymphony Group//XWork Validator 1.0.2//EN&quot;
        &quot;http://www.opensymphony.com/xwork/xwork-validator-1.0.2.dtd&quot;&gt;
&lt;validators&gt;
	&lt;field name=&quot;numero&quot;&gt;
		&lt;field-validator type=&quot;regex&quot;&gt;
		&lt;param name=&quot;expression&quot;&gt;&lt;![CDATA[^\d*$]]&gt;&lt;/param&gt;
		&lt;message&gt; Debe ser un entero&lt;/message&gt;
		&lt;/field-validator&gt;
	&lt;/field&gt;
&lt;/validators&gt;</code></pre>
<pre><span class="black bold">package.properties</span><code>
invalid.fieldvalue.numero = debes introducir un n&uacute;mero</code></pre>
<p class="green">Con la línea anterior lo que hacemos es personalizar el mensaje de error <span class="bold">Invalid field value for field "numero"</span> que obtendríamos al convertir un texto en un número.</p>
	<h3>Validación con theme="simple"</h3>
	<pre><code>&lt;%@ page contentType=&quot;text/html; charset=UTF-8&quot; %&gt;
&lt;%@ taglib prefix=&quot;s&quot; uri=&quot;/struts-tags&quot; %&gt;
    &lt;s:head/&gt;
    &lt;s:fielderror /&gt;
&lt;s:form action=&quot;Register2&quot; <span class="black">theme=&quot;simple&quot;</span> &gt;
    &lt;s:textfield key=&quot;<span class="brown bold">user.username</span>&quot;/&gt;
	&lt;s:fielderror fieldName=&quot;<span class="brown bold">user.username</span>&quot; /&gt;&lt;br/&gt;
    &lt;s:password key=&quot;<span class="red bold">user.password</span>&quot; /&gt;
	&lt;s:fielderror fieldName=&quot;<span class="red bold">user.password</span>&quot; /&gt;&lt;br/&gt;
    &lt;s:textfield key=&quot;<span class="bold purple">user.email</span>&quot;/&gt;
	&lt;s:fielderror fieldName=&quot;<span class="bold purple">user.email</span>&quot; /&gt;&lt;br/&gt;
    &lt;s:submit/&gt;
&lt;/s:form&gt;</code></pre>
<div class="notas">
	<p><span class="bold black">Nota</span>: <br>
para quitar las etiquetas ul y li que general el fielderror, habrá que modificar struts2-core-2.0.11.1.jar/template/simple/fielderror.ftl y quitarlas de ahí.
	</p>
</div>

	<h3>Otras validaciones</h3>
<pre><code>&lt;validators&gt;
  &lt;field name=&quot;bar&quot;&gt;
      &lt;field-validator type=&quot;required&quot;&gt;
          &lt;message&gt;You must enter a value for bar.&lt;/message&gt;
      &lt;/field-validator&gt;
      &lt;field-validator type=&quot;int&quot;&gt;
          &lt;param name=&quot;min&quot;&gt;6&lt;/param&gt;
          &lt;param name=&quot;max&quot;&gt;10&lt;/param&gt;
          &lt;message&gt;bar must be between ${min} and ${max}, current value is ${bar}.&lt;/message&gt;
      &lt;/field-validator&gt;
  &lt;/field&gt;
  &lt;field name=&quot;bar2&quot;&gt;
      &lt;field-validator type=&quot;regex&quot;&gt;
          &lt;param name=&quot;expression&quot;&gt;[0-9],[0-9]&lt;/param&gt;
          &lt;message&gt;The value of bar2 must be in the format &quot;x, y&quot;, where x and y are between 0 and 9&lt;/message&gt;
     &lt;/field-validator&gt;
  &lt;/field&gt;
  &lt;field name=&quot;date&quot;&gt;
      &lt;field-validator type=&quot;date&quot;&gt;
          &lt;param name=&quot;min&quot;&gt;12/22/2002&lt;/param&gt;
          &lt;param name=&quot;max&quot;&gt;12/25/2002&lt;/param&gt;
          &lt;message&gt;The date must be between 12-22-2002 and 12-25-2002.&lt;/message&gt;
      &lt;/field-validator&gt;
  &lt;/field&gt;
  &lt;validator type=&quot;expression&quot;&gt;
      &lt;param name=&quot;expression&quot;&gt;foo lt bar &lt;/param&gt;
      &lt;message&gt;Foo must be greater than Bar. Foo = ${foo}, Bar = ${bar}.&lt;/message&gt;
  &lt;/validator&gt;
&lt;/validators&gt;</code></pre>
<div class="notas">
	<p><span class="bold black">Notas</span>:</p>
<ul>
	<li><a href="http://struts.apache.org/release/2.0.x/docs/validation.html">Documentación de validación</a></li>
	<li>Cuando definimos una validación, esta se efectuará para todos los métodos de un action. Si no queremos que la validación se aplique sobre algún método en concreto, podemos usar la directiva: <br>	
<span class="black bold">@SkipValidation</span> <br>
precediendo al método.</li>
</ul>

</div>

</div>
</article>

<article>
	<div>
	<h2 id="hospital">Ejercicio</h2>
	<p>Rehacer el ejercicio del hospital utilizando Struts 2. </p>
<pre><code>&lt;s:select headerValue=&quot;Elija una opci&oacute;n&quot; headerKey=&quot;-1&quot; list=&quot;pacientes&quot; multiple=&quot;false&quot; listValue=&quot;%{nombre}&quot; listKey=&quot;%{id}&quot; name=&quot;paciente.id&quot;&gt;
&lt;/s:select&gt;</code></pre>
	
<div class="notas">
	<p><span class="black bold">Notas</span>;	</p>

<ul>
	<li>Para que se vea el headerValue debe haberse definido un headerKey.</li>
	<li>Para poner cuadros de texto en horizontal: <br>
<pre><code><span class="green">&lt;tr&gt;&lt;td&gt;Fecha de alta: &lt;/td&gt;
&lt;td&gt;&lt;s:textfield  size=&quot;2&quot; maxlength=&quot;2&quot; name=&quot;dia&quot; theme=&quot;simple&quot; /&gt;-
	&lt;s:textfield  name=&quot;mes&quot; size=&quot;2&quot; maxlength=&quot;4&quot; theme=&quot;simple&quot;/&gt;-
	&lt;s:textfield size=&quot;4&quot; maxlength=&quot;4&quot; name=&quot;anio&quot; theme=&quot;simple&quot;/&gt;
&lt;/td&gt;&lt;/tr&gt;		</span></code></pre>
	</li>
	<li>Para mostrar una fecha podemos usar la etiqueta: <br>
<pre><code>&lt;s:date name="fecha" format="dd/MM/yyyy" /&gt;</code></pre>
	</li>
</ul>
</div>
</div>
</article>
<article>
	<div>
	<h2>Redefinir la apariencia de una etiqueta (checkboxlist)</h2>
	<ol>
		<li>Creo el paquete template.<span class="green">vertical_checkbox</span></li>
		<li>Dentro, creo el fichero checkboxlist.ftl</li>
		<li>Pego el siguiente código:
<pre><code>&lt;#assign itemCount = 0/&gt;
&lt;#if parameters.list??&gt;
&lt;@s.iterator value=&quot;parameters.list&quot;&gt;
&lt;#assign itemCount = itemCount + 1/&gt;
&lt;#if parameters.listKey??&gt;
&lt;#assign itemKey = stack.findValue(parameters.listKey)/&gt;
&lt;#else&gt;
&lt;#assign itemKey = stack.findValue('top')/&gt;
&lt;/#if&gt;
&lt;#if parameters.listValue??&gt;
&lt;#assign itemValue = stack.findString(parameters.listValue)?default(&quot;&quot;)/&gt;
&lt;#else&gt;
&lt;#assign itemValue = stack.findString('top')/&gt;
&lt;/#if&gt;
&lt;#assign itemKeyStr=itemKey.toString() /&gt;
&lt;input type=&quot;checkbox&quot; name=&quot;${parameters.name?html}&quot; value=&quot;${itemKeyStr?html}&quot; id=&quot;${parameters.name?html}-${itemCount}&quot; class=&quot;${parameters.cssClass?html}&quot; &lt;#rt/&gt;
&lt;#if tag.contains(parameters.nameValue, itemKey)&gt;
checked=&quot;checked&quot;&lt;#rt/&gt;
&lt;/#if&gt;
&lt;#if parameters.disabled?default(false)&gt;
disabled=&quot;disabled&quot;&lt;#rt/&gt;
&lt;/#if&gt;
&lt;#if parameters.title??&gt;
title=&quot;${parameters.title?html}&quot;&lt;#rt/&gt;
&lt;/#if&gt;
&lt;#include &quot;/${parameters.templateDir}/simple/scripting-events.ftl&quot; /&gt;
&lt;#include &quot;/${parameters.templateDir}/simple/common-attributes.ftl&quot; /&gt;
/&gt;
&lt;label for=&quot;${parameters.name?html}-${itemCount}&quot; class=&quot;checkboxLabel&quot;&gt;${itemValue?html}&lt;/label&gt;
<span class="bold red">&lt;br/&gt;</span>
&lt;/@s.iterator&gt;
&lt;#else&gt;
&lt;/#if&gt;</code></pre>
		</li>
		<li>Debo utilizar el atributo theme al llamar a la etiqueta: <br>
&lt;s:checkboxlist list=&quot;%{equipos}&quot; name=&quot;codigosEquipo&quot; listKey=&quot;equipoCod&quot; listValue=&quot;nombre&quot; theme=&quot;vertical_checkbox&quot; /&gt;
</li>
	</ol>
</article>
<article>
	<div>
	<h2>Hacer una comparación</h2>
	<pre><code>&lt;s:set var=&quot;varMsg&quot; value=&quot;%{'msg'}&quot;/&gt;
&lt;s:property value=&quot;varMsg&quot;/&gt;
&lt;s:if test=&quot;%{varMsg=='msg'}&quot;&gt;Comparacion con &eacute;xito&lt;/s:if&gt;</code></pre>

	<p>Problemas al hacer una comparación contra una única letra. (Hay que escapar las comillas de la letra para que en vez de un char lo trate como un String):</p>
<pre><code>&lt;s:if test=&quot;%{usuario.tipoUsuario==\&quot;A\&quot;}&quot; &gt; 
&Eacute;xito
&lt;/s:if&gt;</code></pre>
	
	</div>
</article>
<article>
	<div>
	<h2 id="ejercicio_futbol_checkboxlist">Ejercicio futbol</h2>
	<a href="ex/imagenesFutbol.zip">Descargar fotografías.</a>
	<img class="img-fluid" src="img/futbol.svg" alt="applicación futbol">
	<p>La lista de checks marcadas será tratada como lista, en vez de como array. Para consultar los jugadores en función de dicha lista (que he llamado codigosEquipo), utilizaremos la siguiente consulta de Hibernate:
<pre><code>hqlQuery = session.createQuery(&quot;from Jugador j where j.equipo.equipoCod in (:listaDeParametros)&quot;);
hqlQuery.setParameterList(&quot;listaDeParametros&quot;, <span class="purple bold">codigosEquipo</span>);</code></pre>
private List&lt;Integer&gt; <span class="bold purple">codigosEquipo</span>; en el action directamente me castea la lista de Strings en una lista de Integers.
	</p>
<p>Para recuperar las checks de equipos sin tener que llamar expresamente a un method desde el struts.xml puedo sobreescribir el método getEquipos de EquiposAction: </p>
<pre><code>public List getEquipos() {
	equipos = equipoBO.getEquipos();
	return equipos;
}</code></pre>


	<h3>Ejercicio</h3>
	<p>En el ejercicio anterior, al mostrar la lista de jugadores, mostrar también el equipo al que pertenecen.</p>
<pre><span class="bold black">Jugador.hbm.xml</span><code>
&lt;many-to-one <span class="black">lazy=&quot;false&quot;</span> name=&quot;equipo&quot; class=&quot;com.pablomonteserin.model.data.Equipo&quot; fetch=&quot;select&quot;&gt;
	&lt;column name=&quot;equipo_cod&quot; /&gt;
&lt;/many-to-one&gt;</code></pre>
<pre><span class="black bold">equipos.jsp</span><code>
&lt;s:property value=&quot;equipo.nombre&quot; /&gt;</code></pre>
</div>
</article>

<article>
	<div>
	<h2 id="tiles">tiles</h2>
<pre><span class="black bold">index.jsp</span><code>
&lt;meta http-equiv=&quot;Refresh&quot; content=&quot;0;url=<span class="bold red">homePage</span>.action&quot;&gt;
web.xml
&lt;listener&gt;
	&lt;listener-class&gt;org.apache.struts2.tiles.StrutsTilesListener&lt;/listener-class&gt;
&lt;/listener&gt;</code></pre>
<pre><span class="black bold">struts.xml</span><code>&lt;!DOCTYPE struts PUBLIC
    &quot;-//Apache Software Foundation//DTD Struts Configuration 2.0//EN&quot;
    &quot;http://struts.apache.org/dtds/struts-2.0.dtd&quot;&gt;
&lt;struts&gt;
	&lt;package name=&quot;default&quot; extends=&quot;struts-default&quot;&gt;
		&lt;result-types&gt;
			&lt;result-type name=&quot;<span class="green">tiles</span>&quot; class=&quot;org.apache.struts2.views.tiles.TilesResult&quot; /&gt;
		&lt;/result-types&gt;
		&lt;action name=&quot;<span class="bold red">*Page</span>&quot;&gt;
			&lt;result  type=&quot;<span class="green">tiles</span>&quot;&gt;<span class="red">{1}</span>&lt;/result&gt;
		&lt;/action&gt;
	&lt;/package&gt;
&lt;/struts&gt;
tiles.xml (situado en la ra&iacute;z de la carpeta WEB-INF)
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot; ?&gt;
&lt;!DOCTYPE tiles-definitions PUBLIC
&quot;-//Apache Software Foundation//DTD Tiles Configuration 2.0//EN&quot;
&quot;http://tiles.apache.org/dtds/tiles-config_2_0.dtd&quot;&gt;
&lt;tiles-definitions&gt;
        &lt;definition name=&quot;<span class="blue">baseLayout</span>&quot; template=&quot;/layouts/<span class="purple bold">baseLayout.jsp</span>&quot;&gt;
                &lt;put-attribute name=&quot;title&quot; value=&quot;Template&quot; /&gt;
                &lt;put-attribute name=&quot;header&quot; value=&quot;/templates/header.jsp&quot; /&gt;
                &lt;put-attribute name=&quot;menu&quot; value=&quot;/templates/menu.jsp&quot; /&gt;
                &lt;put-attribute name=&quot;body&quot; value=&quot;/templates/body.jsp&quot; /&gt;
        &lt;/definition&gt;
        &lt;definition name=&quot;<span class="red bold">home</span>&quot; extends=&quot;<span class="blue">baseLayout</span>&quot;&gt;
                &lt;put-attribute name=&quot;title&quot; value=&quot;Home Page&quot; /&gt;
                &lt;put-attribute name=&quot;body&quot; value=&quot;/pages/home.jsp&quot; /&gt;
        &lt;/definition&gt;
        &lt;definition name=&quot;contactUs&quot; extends=&quot;baseLayout&quot;&gt;
                &lt;put-attribute name=&quot;title&quot; value=&quot;Contact Us Page&quot; /&gt;
                &lt;put-attribute name=&quot;body&quot; value=&quot;/pages/aboutUs.jsp&quot; /&gt;
        &lt;/definition&gt;
&lt;/tiles-definitions&gt;</code></pre>
<pre><span class="bold purple">baseLayout.jsp</span><code>
&lt;%@ taglib uri=&quot;http://tiles.apache.org/tags-tiles&quot; prefix=&quot;tiles&quot; %&gt;
&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot;
&quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot;&gt;
	&lt;title&gt;&lt;tiles:insertAttribute name=&quot;title&quot; ignore=&quot;true&quot; /&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;div style=&quot;width:100%; height:70px; background:salmon; float:left&quot;&gt;
	&lt;tiles:insertAttribute name=&quot;header&quot; /&gt;
	&lt;/div&gt;
	&lt;div style=&quot;width:200px; height:500px; background:pink; float:left&quot;&gt;
		&lt;tiles:insertAttribute name=&quot;menu&quot; /&gt;
	&lt;/div&gt;
	&lt;div style=&quot;width:800px; height:500px; background:green; float:left&quot;&gt;
		&lt;tiles:insertAttribute name=&quot;body&quot; /&gt;
	&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
<?php // getRes("ejemplo","ex/struts2.3.8_conTiles_jars.zip", "Descargar librerías de Struts 2.3.8 con tiles") ?>
>

	<h3>Problemas de codificación usando tiles</h3>
	<p>Puede ser útil añadir el siguiente código al web.xml, en el caso de que tengamos problemas con los acentos, para corregir problemas u obtener información de ellos:</p>
<pre><code>&lt;web-app&gt;
    ...
    &lt;jsp-config&gt;
        &lt;jsp-property-group&gt;
            &lt;url-pattern&gt;*.jsp&lt;/url-pattern&gt;
            &lt;page-encoding&gt;UTF-8&lt;/page-encoding&gt;
            &lt;trim-directive-whitespaces&gt;true&lt;/trim-directive-whitespaces&gt;
        &lt;/jsp-property-group&gt;
    &lt;/jsp-config&gt;    
&lt;/web-app&gt;</code></pre>
</div>
</article>
<article>
	<div>
	<h2 id="upload_file">Upload file (subir fichero)</h2>
<pre><span class="black bold">index.jsp</span><code>
&lt;%@taglib prefix=&quot;s&quot; uri=&quot;/struts-tags&quot; %&gt;
&lt;html&gt;
	&lt;head&gt;&lt;title&gt;Struts2 File Upload Example&lt;/title&gt;&lt;/head&gt;
	&lt;body&gt;
		&lt;s:actionerror/&gt;
		&lt;s:fielderror/&gt;
		&lt;s:form action=&quot;<span class="red bold">UploadMyFile</span>&quot; <span class="blue bold">enctype=&quot;multipart/form-data&quot;</span> method=&quot;POST&quot;&gt;
			&lt;s:file name=&quot;<span class="pink bold">uploadFile</span>&quot; label=&quot;Please select a file to upload&quot;&gt;&lt;/s:file&gt;
			&lt;s:submit&gt;&lt;/s:submit&gt;
		&lt;/s:form&gt;
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
<pre><span class="black bold">struts.xml</span><code>&lt;action name=&quot;<span class="bold red">UploadMyFile</span>&quot; class=&quot;com.pablomonteserin.action.FileUploadAction&quot;&gt;
	&lt;interceptor-ref name=&quot;defaultStack&quot;&gt;
		&lt;param name=&quot;fileUpload.allowedTypes&quot;&gt;text/plain,image/png,image/gif,image/jpeg&lt;/param&gt;
		&lt;param name=&quot;fileUpload.maximumSize&quot;&gt;200000&lt;/param&gt;
	&lt;/interceptor-ref&gt;
	&lt;result name=&quot;success&quot;&gt;/uploadedFile.jsp&lt;/result&gt;</code></pre>
&lt;/action&gt;

<pre><span class="black bold">FileUploadAction.java</span><code><span class="green">//Habr&iacute;a que poner los getters y setters de fileSize(long), <span class="pink">uploadFile</span>FileName(String) y uploadFile(File)</span>
public String execute() throws Exception {
	String filePath = &quot;/home/monty/Desktop/&quot;+<span class="pink bold">uploadFile</span>FileName;
	File newFile = new File(filePath);
	FileUtils.copyFile(<span class="pink bold">uploadFile</span>, newFile);
	return SUCCESS;
}</code></pre>
</div>
</article>
<article>
	<div>
	<h2>combobox tag</h2>
<pre><code>&lt;s:form&gt;
	<span class="green bold">Para que funcione correctamente, el combobox debe estar dentro de un formulario, ya que dicho formulario ser&aacute; referenciado en el c&oacute;digo javascript que genera la etiqueta</span>
	&lt;s:combobox label=&quot;My Favourite Color&quot; name=&quot;myFavouriteColor&quot; list=&quot;#{'red':'red','green':'green','blue':'blue'}&quot; headerKey=&quot;-1&quot; headerValue=&quot;--- Please Select ---&quot; emptyOption=&quot;true&quot; value=&quot;green&quot; /&gt;
	&lt;s:combobox label=&quot;Personas&quot; name=&quot;persona&quot; list=&quot;personas&quot; headerKey=&quot;-1&quot; headerValue=&quot;--- Please Select ---&quot; listValue=&quot;nombre&quot; listKey=&quot;id&quot; emptyOption=&quot;true&quot; value=&quot;Juan&quot; /&gt;
&lt;/s:form&gt;</code></pre>
</div>	
</article>
<article>
	<div>
	<h2 id="struts2_ajax">Struts 2 y Ajax</h2>
	<p>Consultar las diapositivas de Ajax y Query hasta la diapositiva: ''Enviar un array múltiple'' inclusive.</p>
	<p>Tener en cuenta que a partir de la versión 1.4 de Jquery cambió la forma de enviar objetos, y dejó de ser compatible con algunos frameworks, como Struts 2. Para utilizar la metodología antigua de envio de la información:</p>
<pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
jQuery.ajaxSettings.traditional = true; 
&#x2026;.</code></pre>

	<h3>Una combo carga en función de otra</h3>

	<p>Cargar una combo con los equipos de futbol y tras seleccionar un equipo, utilizando ajax, cargar otra comobo con los jugadores del equipo seleccionado.</p>
	<p>Utilizaremos el siguiente código Jquery: </p>
<pre><code>$(document).ready(function(){
	$(&quot;#combo1&quot;).change(function(event){
		//almacenamos en id el value de la option seleccionada
		var id = $(&quot;#combo1&quot;).find(':selected').val();
		$.get('cargaComboJugadores.action', { 'equipoCod': id}, showResult, &quot;text&quot;);
	});
});</code></pre>

	<h3>Enviar y gestionar objetos serializados</h3>
	<p>Generaremos un objeto JSON a partir de los resultados de una consulta en la base de datos.
	 Leeremos dichos resultados con Javascript.</p>
	
<pre><span class="bold">prueba-ajax.html</span><code>&lt;script&gt;
$.ajax({
	url: "https://app-futbol.herokuapp.com/verEquiposAjax.action",
	dataType:'JSON',
	type: "GET",
	crossDomain: true,
	contentType: "application/json",
	success: function(response){
		console.log(response)
		for(var i =0; i&lt;response.length; i++){
			console.log(response[i].nombre)
		}
	}
})
&lt;/script&gt;</code></pre>
<pre><span class="bold">struts.xml</span><code>&lt;action name=&quot;verEquiposAjax&quot; class=&quot;com.pablomonteserin.action.EquipoAction&quot; method=&quot;verEquiposAjax&quot;&gt;
	&lt;result&gt;/equipos-ajax.jsp&lt;/result&gt;
&lt;/action&gt;</code></pre>
	
<pre><span class="bold black">En el Action:</span><code>public String verEquiposAjax() {
	EquiposBO equiposBO = new EquiposBO();
	equipos = equiposBO.getEquipos();
	Gson gson = new GsonBuilder().create();
	codigo = gson.toJson(equipos);
	return SUCCESS;
}</code></pre>

<pre><span class="bold">equipos-ajax.jsp</span><code>&lt;s:property  escapeXml=&quot;false&quot; escapeHtml=&quot;false&quot; escapeJavaScript=&quot;false&quot; value=&quot;personaSerializada&quot; /&gt;</code></pre>

<?php // getRes("ejemplo","ex/futbol2.zip", "Descargar ejemplo") ?>
</div>
</article>
<article>
	<div>
	<h2 id="paginacion">Ejercicio paginación</h2>
	<p>Hacer una paginación sobre el listado <span class="bold black">completo</span> de jugadores. En dicha paginación simplemente se mostrarán los nombres de los jugadores.</p>
	<p>Para paginar dividimos la información en bloques de registros. Si cada página (o bloque) tiene 10 registros y quiero ir a la página 3, haré una consulta que vaya al registro 30 y a partir de ahí me devuelva los siguientes 10 registros.</p>	
	<p>Para que una consulta comience a partir de cierto registro, usaré el siguiente método:</p>
<pre><code>hqlQuery.setFirstResult(registro);</code></pre>



<p>Para que una consulta no me devuelva más de 10 resultados, usaré el siguiente método: </p>
<pre><code>hqlQuery.setMaxResults(10);</code></pre>


<p>
	Para imprimir los enlaces a cada una de las páginas, utilizaré el siguiente código:</p>
	<pre><code>&lt;s:iterator begin=&quot;1&quot; end=&quot;numRegistros&quot; step=&quot;10&quot; status=&quot;i&quot;&gt;
	&lt;a class=&quot;enlace&quot; href=&quot;inicioPaginacion.action?reg=&lt;s:property value=&quot;#i.index*10&quot;/&gt;&quot;&gt;&lt;s:property value=&quot;#i.count&quot;/&gt;
	&lt;/a&gt;
&lt;/s:iterator&gt;</code></pre>
</div>
</article>
</section>
</main>
<?php 
// });
// include $path."/diapos_theme/footer.php";
?>