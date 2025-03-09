<?php 
$titulo_curso="PHP y MySQL";
$meta_description = 'Con este curso de PHP y MySQL aprenderás los fundamentos que te permitirán comenzar a desarrollar aplicaciones con bases de datos';

$img_curso = 'curso-mysql.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	global $dots;
?>

<section id="amor" class="verIndice">
		<article id="inicio_del_documento" class="indice">

<ol>
		<li><a href="#conexion">Conexión</a></li>
		<li><a href="#sentencias-sql">Sentencias SQL</a>
		<li><a href="#ejercicios-alta-baja-modificacion-consulta">Ejercicios alta, baja, modificación y consulta</a>
		<li><a href="#paginacion">Paginación</a>
		<li><a href="#ejercicio-listado">Ejercicio listado libros</a>
		</li>

		<li><a href="#variables-sesion">Variables de sesión</a></li>

		<li><a href="#inyeccion-sql">Inyección SQL</a></li>

		<li><a href="#ejercicio-mensajeria">Ejercicio mensajería</a></li>
<li><a href="#foro">Foro</a></li>


<li><a href="#ejercicios-php-mysql">Ejercicios PHP y MySQL</a></li>
	</ol>
</section>';

<main class="curso">
<?= drawH1WithImg() ?>

<article><div><h2>Conexión</h2>


<p><span class="bold black">Nota:</span>
Al final de estas diapositivas hay una serie de ejercicios propuestos para los que terminen antes.</p>


	<h3 id="conexion">
		Establecer la conexión usando la extensión mysqli
	</h3>
	<ul>
		<li> Permite comunicar fácilmente un documento html codificado en UTF-8 con una base de datos codificada en UTF-8 salvando los engorrosos problemas que supone el uso de acentos y eñes.</li>
		<li> Permite POO (no la vamos a ver en este bloque).</li>
		<li>Permite usar las nuevas funcionalidades de MySQL 4.1 y superior.</li>
		<li>Mejora el rendimiento.</li>
	</ul>

<div class="row">
	<div class="col-md-10">
	<pre><code>$conexionPersonas = mysqli_connect('localhost', 'root', 'pp', 'personas')
	or die(&quot;hubo un error al conectar con la base de datos&quot;);

mysqli_set_charset($conexionPersonas, &quot;utf8&quot;);

<span class="green">//mysqli_close($conexionPersonas);</span></code></pre>
</div>
	<div class="col-md-2">
	<?= getRes("video_premium abierto", 228544092) ?>
	</div>
</div>


		
		

	<h2 id="sentencias-sql">Sentencias SQL</h2>



	
	<h3 id="convenio">Convenio al escribir código SQL</h3>
	<p>Las instrucciones SQL deberían escribirse siempre en mayúsculas.</p>
		<?= getRes("video_premium abierto", 228544293) ?>


	<h3 id="crearUnaTabla">Crear una tabla</h3>

<div class="row">
	<div class="col-md-10"><pre><code>&lt;?php
	include &quot;../conexion.php&quot;;
	$sql = &quot;<span class="red">CREATE TABLE IF NOT EXISTS persona(
	dni VARCHAR(9) NOT NULL PRIMARY KEY,
	nombre VARCHAR(30), 
	edad INT
	)</span>&quot;;
	mysqli_query($conexionPersonas, $sql)
	or die(mysqli_error($conexionPersonas).&quot;&lt;br/&gt;&quot;.$sql);
?&gt;</code></pre></div>
	<div class="col-md-2"><?= getRes("video_premium abierto", 228544350) ?></div>
</div>

			

	

	<h3 id="borrarUnaTabla">Borrar una tabla</h3>
<div class="row">
	<div class="col-md-10">
	<pre><code>&lt;?php
	
	include &quot;../conexion.php&quot;;
	
	$sql = &quot;<span class="red">DROP TABLE persona</span>&quot;;
	
	mysqli_query($conexionPersonas, $sql)
	or die(mysqli_error($conexionPersonas).&quot;&lt;br/&gt;&quot;.$sql); 			
				
?&gt;</code></pre>
</div>
	<div class="col-md-2"><?= getRes("video_premium abierto", 228544739) ?></div>
</div>

			

	

	<h3 id="alta">Insertar un registro</h3>
<div class="row">
	<div class="col-md-10"><pre><code>&lt;?php
	include &quot;../conexion.php&quot;;
	
	$sql = &quot;<span class="red">INSERT INTO persona VALUES('53564783E','Juan', 27)</span>&quot;;
	
	mysqli_query($conexionPersonas, $sql)	
	or die(mysqli_error($conexionPersonas).&quot;&lt;br/&gt;&quot;.$sql); 			
			
?&gt;</code></pre></div>
	<div class="col-md-2"><?= getRes("video_premium abierto", 228545668) ?></div>
</div>

	

	

	<h3 id="ejercicioInserccion"><span class="text-dark">Ejercicio:</span> insercción</h3>
	<p>Crear usando phpmyadmin una tabla llamada “ejercicio_persona” e insertar mediante un formulario un registro de tres campos (nombre, altura y edad) recogidos de un formulario</p>

	<div class="centraditos">
			<?= getRes("video_premium abierto", 228544808) ?>

						<?= getRes("video_premium abierto", 228544842) ?>
						</div>

	<h3 id="inserccionMultiple">Insercción múltiple</h3>

<div class="row">
	<div class="col-md-10">
	<pre><code>&lt;?php
	include &quot;../conexion.php&quot;;
	
	$sql = &quot;INSERT INTO persona VALUES 
		('37485763P','Rodolfo', 24), 
		('37465829O','Sonia',79);&quot;;
	
	mysqli_query($conexionPersonas, $sql)
	or die(mysqli_error($conexionPersonas).&quot;&lt;br/&gt;&quot;.$sql); 			
 				
?&gt;</code></pre>

</div>
	<div class="col-md-2"><?= getRes("video_premium", 228545567) ?></div>
</div>


	<h3 id="baja">Eliminar registro</h3>

<div class="row">
	<div class="col-md-10">
	
<pre><code>&lt;?php
	
	include &quot;../conexion.php&quot;;
	
	$sql = &quot;<span class="red">DELETE FROM persona WHERE dni='37485763P'</span>&quot;;

	mysqli_query($conexionPersonas, $sql)
	or die(mysqli_error($conexionPersonas).&quot;&lt;br/&gt;&quot;.$sql); 			
		
?&gt;</code></pre>
</div>
	<div class="col-md-2"><?= getRes("video_premium", 228546385) ?></div>
</div>

	


	<h3 id="modificacion">Actualizar registro</h3>

	<div class="row">
		<div class="col-md-10">
		<pre><code>
&lt;?php

	include &quot;../conexion.php&quot;;
	
	$sql = &quot;UPDATE persona SET edad=84, nombre='Pablo' WHERE dni='37485763P'&quot;;

	mysqli_query($conexionPersonas, $sql)
	or die(mysqli_error($conexionPersonas).&quot;&lt;br/&gt;&quot;.$sql); 			
				
?&gt;</code></pre>
		</div>
		<div class="col-md-2"><?= getRes("video_premium", 228546406) ?></div>
	</div>
	



	<h3 id="consulta">Consulta</h3>

	<div class="row">
		<div class="col-md-10">
		<pre><code>&lt;?php
	include &quot;../conexion.php&quot;;

	$sql = &quot;SELECT * FROM persona&quot;;	
	$result = mysqli_query($conexionPersonas, $sql)
	or die(mysqli_error($conexionPersonas).&quot;&lt;br/&gt;&quot;.$sql); 			
	
	$row = mysqli_fetch_assoc($result);
	echo $row['nombre']; 
?&gt;</code></pre>
</div>
		<div class="col-md-2"><?= getRes("video_premium", 228546429) ?></div>
	</div>
	
<div class="row">
	<div class="col-sm-4">
	<img class="img-fluid" src="img/select.svg" alt="broma consulta select">	
	</div>
</div>
	


	<h3 id="consultaBucle">Consulta con bucle</h3>

	<div class="row">
		<div class="col-md-6"><pre><code>&lt;?php
	include &quot;../conexion.php&quot;;

	$sql = &quot;<span class="red">SELECT * FROM persona</span>&quot;;	
	$result = mysqli_query($conexionPersonas, $sql)
	or die(mysqli_error($conexionPersonas).&quot;&lt;br/&gt;&quot;.$sql); 			
	
	echo &quot;&lt;table&gt;&quot;;
		while($row = mysqli_fetch_assoc($result)){
			echo &quot;&lt;tr&gt;&lt;td&gt;&quot;;
			echo $row['nombre'];
			echo &quot;&lt;/td&gt;&lt;/tr&gt;&quot;;
		}
	echo &quot;&lt;/table&gt;&quot;;
?&gt;</code></pre></div>
		<div class="col-md-6">
		<div class="centraditos">
<?= getRes("video_premium", 228546454) ?>

	<?= getRes('ejemplo','ex/consulta-con-bucle.php','Consulta con bucle') ?>
</div>
</div>
	</div>
	
	


<h3 id="consultaBucleVariable"><span class="text-dark">Ejercicio:</span> Consulta con bucle almacenando en una variable</h3>
<div class="centraditos">
<?= getRes("video_premium", 228546492) ?>
<?= getRes("video_premium", 228546508) ?>
</div>
	<h3 id="ejercicioCombo"><span class="text-dark">Ejercicio:</span> combo</h3>
	<p>Cargar una combo con los valores que devuelva una consulta</p>
	<div class="centraditos">
	<?= getRes("video_premium", 228546548) ?>
	<?= getRes('ejemplo','ex/cargar-combo.php','Cargar combo' ) ?>
		<?= getRes("video_premium", 228546567) ?>
		</div>


	<h3>Nota</h3>
	<p>Las sentencias SQL que modifican la base de datos deberían ser ubicadas al principio de la página.</p>
	
	<div class="row">
		<div class="col-md-10">
		<img class="img-fluid" src="img/code_order.svg" alt="Orden correcto para el código"></div>
		<div class="col-md-2"><?= getRes("video_premium", 228546735) ?></div>
	</div>
	
			

	<h4 id="eliminarRegistro">Ejercicio: <span class="text-primary">eliminar registro</span></h4>
	<p>Pintar una tabla y un pequeño formulario en el que escribiendo alguno de los nombres que contiene la tabla y pulsando el botón de eliminar, podamos eliminar personas de la base de datos</p>

				<div class="centraditos">
				<?= getRes("video_premium", 228546750) ?>

	<?= getRes('ejemplo','ex/listar-baja.php','Listar - Baja') ?>
	<?= getRes("video_premium", 228546774) ?>

				</div>

	<h2>Ejercicios: <span class="text-primary">alta, baja, modificación y consulta</span></h2>

	<h3 id="ejercicios-alta-baja-modificacion-consulta">Ejercicio lista invitados</h3>
	<p>Hacer cuatro páginas web para una lista de invitados. Una será el menú, otra para consultar los invitados, otra para dar de alta un nuevo invitado y otra para darlo de baja. La tabla que usaremos tendrá dos campos: nombre (VARCHAR) e ID (INT, AUTOINCREMENT, PK).</p>
	<p>Después de hacer el alta, para que no se repita la inserción de datos al refrescar la página, una solución sencilla es utilizar la siguiente línea:</p>
	<pre><code>header('Location: index.php');</code></pre>

<div class="centraditos">
<?= getRes("video_premium", 228546795) ?>

	<?= getRes('ejemplo','ex/lista-invitados/index.html','Ejercicio lista invitados') ?>
	<?= getRes("video_premium", 228546834) ?>

</div>

	<h3 id="ejercicioLibreria">Ejercicio librería</h3>
	<p>Hacer cinco páginas web para una librería. Una será el menú, otra para consultar los libros, otra para dar de alta un nuevo libro, otra para darlo de baja y otra para modificarlo. La tabla que usaremos tendrá 3 campos: id(PRIMARY KEY, AUTOINCREMENT), titulo (VARCHAR), precio (FLOAT).</p>

<div class="centraditos">
<?= getRes("video_premium", 228546800) ?>

			<?= getRes('ejemplo','ex/libreria/index.html','Ver ejercicio de la librería funcionando' ) ?>
			<?= getRes("video_premium", 228546862) ?>

		</div>

		<h3 id="ejercicioActualizaCuadro">Ejercicio actualiza cuadro</h3> 
	<p>Hacer una página web con un cuadro de texto y una combo en la que se muestra un listado de personas. Cuando la combo cambia de valor el cuadro de texto se actualiza con la edad de la persona.</p>
	<p>Para enviar el formulario cuando cambie la combo, le pondré este atributo a la combo:</p>
	<pre><code>onchange="this.form.submit()"</code></pre>

	<div class="centraditos">
	<?= getRes("video_premium", 228547009) ?>

	<?= getRes('ejemplo','ex/update-combo.php','Ver ejercicio de actualizar combo funcionando' ) ?>

	<?= getRes("video_premium", 228547087) ?>

</div>

<h3 id="hospital">hospital</h3>
	<h4 id="hospital1">Ejercicio hospital I</h4>
				<?= getRes("video_premium", 228547457) ?>

	<div class="notas">
		NOTAS:
Cuando pulse el botón de eliminar, haré un redireccionamiento a la página de consulta utilizando: <br>
<pre><code>header("location:index.html");</code></pre>
Estructura general del código php en modificación.php: <br>
<pre><code>if(isset($_POST['modificaButton'])){
&#x2026;.
}else if(isset($_POST['eliminaButton'])){
&#x2026;.
}
$sql = &quot;select * from paciente where id=$id&quot;;...</code></pre>
			<div class="row">
<?= getRes("video_premium", 228547263) ?>
<?= getRes('ejemplo','ex/hospital-1/index.html', 'Ejercicio Hospital') ?>

			
			</div>
	</div>

	<h4 id="dateFormat">Date format</h4>

<div class="row">
	<div class="col-md-10">
	<pre><code>&lt;?php 
<span class="green">/*Con el siguiente c&oacute;digo podremos recuperar una fecha de la base de datos y reorganizarla como queramos*/</span>
$originalDate = &quot;2010-03-21&quot;;
$newDate = date(&quot;d-m-Y&quot;, strtotime($originalDate));
?&gt;</code></pre>
</div>
	<div class="col-md-2"><?= getRes("video_premium", 228547249) ?></div>
</div>

	

			
	
	<h4 id="hospitalii">Ejercicio hospital II</h4>
				<?= getRes("video_premium", 228547234) ?>

	<p>NOTAS: <br>
La fecha será un campo de tipo DATE. <br>
Cuando pulse el botón de eliminar, haré un redireccionamiento a la página de consulta utilizando: <br>
	header("location:index.html"); <br>
Estructura general del código php en modificación.php: <br>
<pre><code>if(isset($_POST['modificaButton'])){
&#x2026;.
}else if(isset($_POST['eliminaButton'])){
&#x2026;.
}
$sql = &quot;select * from paciente where id=$id&quot;;...</code></pre>
		<div class="centraditos">
<?= getRes("video_premium", 228547291) ?>
<?= getRes('ejemplo','ex/hospital-2/index.html', 'Ejercicio Hospital 2') ?>

			
			</div>
</p>

	<h3>BREAK!</h3>
	<h4 id="hospitaliii">Ejercicio hospital III</h4>
	<p>Hacer 5 páginas web para un hospital. Una será el menú. Otra para consultar los pacientes, otra para dar de alta un nuevo paciente, otra para darlo de baja y otra modificar su registro. La tabla de pacientes tiene 4 campos: id(PRIMARY KEY, AUTOINCREMENT), nombre (VARCHAR), apellidos (VARCHAR), fecha_alta(DATE).  La sección de modificación, la desarrollaremos en los 6 pasos que veremos a continuación.</p>

	<div class="centraditos">
	<?= getRes("video_premium", 228548064) ?>

	<?= getRes('ejemplo','ex/hospital-3/index.html', 'Ejercicio Hospital 3') ?>
	<?= getRes("video_premium", 228547477) ?>

				</div>

	<h3 id="ejercicio-lista-equipos-jugadores">Ejercicio listado de equipos y jugadores</h3>
	<p>Realizar una página en la que mostraremos los equipos de primera división en una tabla.</p>
	<p>La Imagen de la tabla será un hipervínculo. Al pulsar sobre la imagen, llevaremos al usuario a otra página en la que verá los jugadores del equipo seleccionado.</p>
	<div class="centraditos">
	<?= getRes("video_premium", 228547432) ?>

					<?= getRes("recurso","/curso/assets/bd/futbol.sql","Descargar base de datos") ?>
					<?= getRes("recurso","/curso/assets/zip/imagenesFutbol.zip","Descargar imágenes" ) ?>


					<?= getRes("video_premium", 228547517) ?>



<?= getRes("ejemplo","ex/futbol-listado-foto-enlazada/index.php","Ejercicio listado") ?>
</div>

<h3 id="ejercicio-tabla-compleja">Ejercicio tabla compleja</h3>
	<?= getRes("recurso","/curso/assets/bd/juego.sql","Descargar base de datos") ?>

	<p>Recuperar los valores de la base de datos e imprimirlos según se muestra en pantalla.</p>
	<p>Para ello iremos cargando de información el contenido de cada celda.</p>
	<p>Utilizaremos un solo bucle while que tendrá dentro condicionales if con los que iremos armando la tabla de salida. Al tener un solo bucle while, ahorraremos recursos.</p>

							<?= getRes("video_premium", 228547741) ?>

<pre><code>if($row['consola']==&quot;ps2&quot;)
	$juegosPS2 .= $row['nombre'].&quot;&lt;br/&gt;&quot;;</code></pre>
	</p>
		<p>Esta es la tabla que usaremos en este ejercicio:</p>
<pre><code>&lt;table border=&quot;1&quot;&gt;
    &lt;tr&gt;
        &lt;td rowspan=&quot;3&quot;&gt;Celda1
	&lt;/td&gt;
        &lt;td rowspan=&quot;2&quot;&gt;Celda2
	&lt;/td&gt;
        &lt;td&gt;Celda2
	&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Celda3
	&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
	&lt;td&gt;Celda4
	&lt;/td&gt;
	&lt;td&gt;Celda5
	&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;</code></pre>	
<div class="centraditos">
					<?= getRes("video_premium", 228547747) ?>

	<?= getRes('video_premium','ex/tabla-dificil/haciendo-multiples-consultas.php', 'Múltiples consultas') ?>
	</div>

	<h3 id="ejercicio-futbol-calidades">
		Ejercicio calidades
	</h3>
	<div class="centraditos">
	<?= getRes("video_premium", 228547857) ?>
	<?= getRes("recurso","/curso/assets/bd/futbol.sql","Descargar base de datos") ?>
	</div>
	<p>
		Para que las capas amarillas contenidas en la tabla aparezcan alineadas con la parte baja de la misma usaremos el siguiente estilo: </p>
<pre><code>&lt;td style='vertical-align:bottom'&gt;</code></pre>
	
	<div class="centraditos">
						<?= getRes("video_premium", 228547859) ?>

						
	<?= getRes('ejemplo','ex/futbol-calidades/futbol-calidades.php', 'Ver solución') ?>
	
						</div>

	<h2 id="paginacion">Paginación</h2>

	<article >
		<h3 id="paginar1">Paginar 1</h3>
								<?= getRes("video_premium", 228548028) ?>

		<pre><code>&lt;?php
include &quot;../conexion.php&quot;;	
<span class="green">/*el primer par&aacute;metro es el registro en el que empezamos y el segundo es el incremento de paginaci&oacute;n*/</span>
$sql = &quot;SELECT * FROM jugador LIMIT 0,20&quot;;
$result = mysqli_query($conexionFutbol, $sql)
or die(&quot;error en la consulta&quot;);

while($row = mysqli_fetch_assoc($result)){
    echo $row['nombre'].&quot;&lt;/br&gt;&quot;;
}
?&gt;</code></pre>
<div class="centraditos">
		<?= getRes("video_premium", 228548053) ?>

	<?= getRes('ejemplo','ex/paginar/1-paginar.php', 'Paginar I') ?>
</div>
		<h3 id="paginar2">Paginar II -  ejercicio</h3>
		<p>Recojer como parámetro de la URL la página a la que voy y a partir de ella, poner en la consulta el registro a partir del cual comienzo a leer.</p>
		<p>Cada página tendrá veinte registros.</p>

				<div class="centraditos">
				<?= getRes("video_premium", 229109712) ?>

				<?= getRes('ejemplo','ex/paginar/2-paginar.php?pag=3', 'Paginar II') ?>
				<?= getRes("video_premium", 229109316) ?>

	</div>
		<h3 id="paginar3">Ejercicio – Añadir tres enlaces que nos permitirán paginar.</h3>
								<?= getRes("video_premium", 229109368) ?>

		<pre><code>&lt;a href=&quot;index.php?pag=0&quot;&gt;Pagina 1&lt;/a&gt;</code></pre>
<div class="centraditos">
				<?= getRes("video_premium", 229109986) ?>

		<?= getRes('ejemplo','ex/paginar/ejercicio-paginar-enlaces.php', 'Paginar III') ?>
</div>
		<h4 id="enlacesPaginacion">Ejercicio – Generar enlaces paginación</h4>
		<p>Utilizando el bucle for y la siguiente consulta, generar los enlaces de paginación.</p>
						<?= getRes("video_premium", 229109374) ?>

		<pre><code>SELECT count(*) AS 'num_reg' FROM jugador</code></pre>

<div class="centraditos">
	<?= getRes("video_premium", 229109384) ?>

		<?= getRes('ejemplo','ex/paginar/enlaces-paginacion.php','Enlaces de paginación') ?>
	</div>
		<h3 id="mostrar10Enlaces">Ejercicio mostrar sólo 10 enlaces</h3>
		<p>Mostrar sólo 10 enlaces, con centro en la página en la que estoy.</p>
			<?= getRes("video_premium", 229109436) ?>

		<p>Nota: <br>
<p>Nos puede resultar útil usar esta línea de código:</p>
<pre><code>$pagInicial = ($pag&lt;5)?0:$pag-5;</code></pre>

<div class="centraditos">
	<?= getRes("video_premium", 229112501) ?>

	<?= getRes('ejemplo','ex/paginar/diez-enlaces-con-centro-en-el-que-estoy.php','10 enlaces con centro en el que estoy') ?>
	</div>
<h4 id="siempre10">Ejercicio - siempre 10</h4>
<p>Al resolver el ejercicio anterior, si voy a la última página se me mostrarán 5 enlaces en lugar de diez. Hacer los ajustes necesarios para que se vean diez enlaces.</p>
	<?= getRes("video_premium", 229112961) ?>

<pre><code>$pagInicial = ($pag&lt;5)?0:$pag-5;
if($pagInicial+10>$numPags){
	$pagFinal = $numPags;
	$pagInicial = $numPags-10;
}else{
	$pagFinal = $pagInicial+10;
}</code></pre>
<div class="centraditos">
	<?= getRes("video_premium", 229112510) ?>

<?= getRes('ejemplo','ex/paginar/arreglando-techo.php', 'Arreglando techo') ?>
	</div>
		<h4 id="optimizacion">Ejercicio
Optimización paginación</h4>
	<?= getRes("video_premium", 229112535) ?>

<pre><code>$sql = &quot;SELECT SQL_CALC_FOUND_ROWS * FROM jugador LIMIT $registroAlQueVoy,$incrementoPaginacion&quot;;
$result = mysqli_query($conexionFutbol, $sql) or die(&quot;error en la consulta 1&quot;);


$sql2 = &quot;SELECT FOUND_ROWS() AS 'num_reg'&quot;;
$result2 = mysqli_query($conexionFutbol, $sql2);</code></pre>

<div class="centraditos">
		<?= getRes("video_premium", 229113222) ?>

<?= getRes('ejemplo','ex/paginar/7-found-rows.php', 'Ver solución') ?>
		</div>
		<h4 id="resaltarPaginaActual">Ejercicio: <span class="text-primary">resaltar página actual</span></h4>

	<div class="centraditos">
	<?= getRes("video_premium", 229112563) ?>

		<?= getRes('ejemplo','ex/paginar/8-resaltar-current-page.php','Ver solución') ?>
		<?= getRes("video_premium", 229112588) ?>


</div>
		<h3 id="botones">Ejercicio – Añadir los botones anterior y siguiente, que paginan una vez hacia delante o una vez hacia detrás, según el caso</h3>
		<div class="centraditos">
		<?= getRes("video_premium", 229112545) ?>
		<?= getRes("recurso","/curso/assets/bd/futbol.sql","Descargar base de datos") ?>

<?= getRes("video_premium", 229113510) ?>
		<?= getRes('ejemplo','ex/paginar/ejercicio-anterior-y-siguiente.php','Ver solución') ?>

		


		</div>

	<h2 id="ejercicio-listado">Ejercicio listado libros</h2>

	<article >
		<h3 id="libros1">Ejercicio listado libros I - consultar</h3>

				<div class="row">
				<?= getRes("video_premium", 229113826) ?>

		<?= getRes('ejemplo','ex/tabla-libros/consulta.php', 'Consulta libros') ?>
		<?= getRes("video_premium", 229113849) ?>

</div>
		<h3 id="libros2">Ejercicio listado libros II - insertar</h3>
						<?= getRes("video_premium", 229113575) ?>

		<p><span class="font-weight-bold">Nota:</span> <br>
Pasarle parámetros al action de un formulario directamente en su URL funciona sólo si estamos
enviando la información por POST. En caso contrario, la URL que definimos en el action y la
que generamos dinámicamente entran en conflicto y los parámetros definidos explícitamente en
el action del formulario no son enviados. <br>
&lt;form method=&quot;post&quot; action=&quot;ServletController?action=alta&quot;&gt;&lt;/p&gt;
</p>

<p><span class="font-weight-bold">Para programar la opción de agregar un nuevo registro, tenemos dos opciones:</span>
<ul>
	<li>Podemos hacer un formulario que abarque sólo las celdas de la fila dónde se encuentra el
botón de agregar (esta es la opción más sencilla, pero desde el punto de vista de la validación
del código html sería incorrecta).</li>
<li>Podemos hacer un formulario que abarque toda la tabla html donde se están mostrando los
resultados de la consulta (esta opción es un poco más compleja, pero el código html validaría
correctamente).</li>
</ul>
</p>
<div class="row">
				<?= getRes("video_premium", 229114184) ?>

				<?= getRes("ejemplo", "ex/tabla-libros/alta.php") ?>


</div>
		<h3 id="libros3">Ejercicio listado libros III - borrar</h3>
						<?= getRes("video_premium", 229113615) ?>

		<p>Lo más sencillo será utilizar un formulario para cada fila, de tal forma que abarque todas las celdas
de cada registro.Esta opción no valida el código html.</p>
<p>Si escogemos la opción de utilizar un formulario que envuelva a toda la tabla podremos obtener la id
del libro que queremos eliminar utilizando un 
<pre><code>&lt;input type="hidden" name="identificador"&gt;</code></pre>
 en el que
almacenaremos la id del libro correspondiente al botón pulsado. Para lograr esto utilizaremos en el
onclick del botón de baja llamaré a la función baja(id):
<pre><code>function borra(id){
	document.getElementById(&quot;action&quot;).value = &quot;baja&quot;;
	document.getElementById(&quot;idEnviada&quot;).value = id;
	document.getElementById(&quot;formulario&quot;).submit();
}</code></pre>
</p>
<p>(No puede haber en un formulario dos elementos con el mismo name, así que generaré los name
del formulario utilizando la id de cada libro ).</p>
<div class="centraditos">
				<?= getRes("video_premium", 229113628) ?>
		<?= getRes('ejemplo','ex/tabla-libros/baja.php', 'Baja') ?>

</div>
		<h3 id="libros4">Ejercicio listado libros IV - Modificar</h3>
							<?= getRes("video_premium", 229113583) ?>

		<p>
			Podemos usar la siguiente función:</p>
<pre><code>function modificar(id){
	document.getElementById(&quot;action&quot;).value = &quot;modificar&quot;;
	document.getElementById(&quot;idEnviada&quot;).value = id;
	document.getElementById(&quot;modifica_titulo&quot;).value = document.getElementById(&quot;titulo_&quot;+id).value;
	document.getElementById(&quot;modifica_precio&quot;).value = document.getElementById(&quot;precio_&quot;+id).value;
	document.getElementById(&quot;formulario&quot;).submit();
}</code></pre>
<div class="centraditos">
<?= getRes("video_premium", 229114696) ?>

		<?= getRes('ejemplo','ex/tabla-libros/modificacion.php','Modificación') ?>

</div>
		<h3 id="libros5">Ejercicio listado libros V – paginar</h3>
		<?= getRes('video_premium','ex/tabla-libros/con-paginacion.php', 'Con paginación') ?>
	
	<h2>Variables de sesión</h2>
	
<h3 id="login">login</h3>
<h4 id="variables-sesion">Manejo de variables de sesión</h4>
<?= getRes("video_premium", 229114915) ?>

<div class="row">
	<div class="col-md-6">
	<pre><span class="font-weight-bold">login.php</span><code>
&lt;?php
    <span class="red">session_start();</span>
    $_SESSION['sid'] = session_id();
    echo $_SESSION['sid'];
?&gt;

&lt;br/&gt;&lt;br/&gt;&lt;a href=&quot;pagina2.php&quot;&gt;Ir a pagina 2&lt;/a&gt;</code></pre>

	</div>
	<div class="col-md-6">

	<pre><span class="font-weight-bold">pagina2.php</span><code>
&lt;?php 
	<span class="red">session_start();</span>
	echo $_SESSION['sid'].&quot;&lt;/br&gt;&quot;;
?&gt;</code></pre>

	</div>
</div>


<div class="centraditos">
<?= getRes("video_premium", 229115000) ?>

<?= getRes("video_premium", 229115013) ?>

<?= getRes('ejemplo','ex/login/ejemplo/login.php', 'Login') ?>

</div>
		<p><span class="red">session_start();</span> debe estar siempre en la primera línea de código, antes incluso que un retorno de carro o un espacio en blanco.</p>
	

	<h2 id="inyeccion-sql">Inyección SQL</h2>
<h3>Ejemplo de inyección SQL</h3>
<p>Nombre de usuario introducido: <span class="black bold">blabla' or 1=1</span></p>
<p> SELECT * FROM Users WHERE nombre = 'blabla' or 1=1</p>
	
	<?= getRes("video_premium", 229114930) ?>

		<h4 id="ejercicioLogin">Ejercicio login</h4>

		<p>El usuario no podrá acceder a pagina2.php a no ser que se haya logueado anteriormente.</p>
		<p>Para hacer log out:
		<pre><code>&lt;?php 
	session_start();
	session_destroy();
?&gt;</code></pre>
</p>

<?= getRes('ejemplo','ex/login/ejercicio-login/login.php', 'Login') ?>
<p>Nota!!
Si el collate de una base de datos termina en ci (case insensitive), esta no distinguirá entre mayúsculas y minúsculas.</p>
</div></article>
<article><div>


<h2 id="ejercicio-mensajeria">Ejercicio mensajería</h2>

	<h3 >Mensajería</h3>
<h4>Enviar un array</h4>

<div class="row">
	<div class="col-md-8">
	<pre><code>&lt;?php 
if(isset($_REQUEST[&quot;enviar&quot;])){
    $opt = $_REQUEST[&quot;opt&quot;];
    foreach ($opt as $value) {
        echo $value.&quot;&lt;br/&gt;&quot;;
    }
}
 ?&gt;
 &lt;form action=&quot;#&quot;&gt;
	&lt;input type=&quot;checkbox&quot; name=&quot;opt[]&quot; value=&quot;aaaa&quot;&gt;
	&lt;input type=&quot;checkbox&quot; name=&quot;opt[]&quot; value=&quot;bbbb&quot;&gt;
	&lt;input type=&quot;checkbox&quot; name=&quot;opt[]&quot; value=&quot;cccc&quot;&gt;
	&lt;input type=&quot;submit&quot; name=&quot;enviar&quot;&gt;
 &lt;/form&gt;</code></pre>
	</div>
	<div class="col-md-4"><div class="centraditos">
		<?= getRes("video_premium", 229115248) ?>
	<?= getRes("video_premium", 229115286) ?>
</div>
</div>
</div>

 
		<h4 id="ejercicio-mensajeria">Ejercicio – crear un programa de mensajería </h4>
			
		<div class="row">
			<div class="col-md-10">
			<img class="img-fluid" src="img/mensajeria.svg" alt="ejercicio mensajería con PHP y MySQL">
			</div>
			<div class="col-md-2"><?= getRes("video_premium", 229115248) ?></div>
		</div>

		

		
		<table class="border" style="display:inline-block">
		<tr>
			<th colspan="4">mensaje</th>
		</tr>
		<tr>
			<th>id</th>
			<th>remitente</th>
			<th>destinatario</th>
			<th>mensaje</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			<td>Hola!</td>
		</tr>
		<tr>
			<td>2</td>
			<td>1</td>
			<td>2</td>
			<td>Qué pasa tron!</td>
		</tr>
		<tr>
			<td>3</td>
			<td>1</td>
			<td>1</td>
			<td>Hola Caracola</td>
		</tr>
		<tr>
			<td>4</td>
			<td>1</td>
			<td>2</td>
			<td>Te odio</td>
		</tr>
	</table>
	<table class="border" style="display:inline-block">
		<tr>
			<th colspan="3">usuario</th>
		</tr>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>pass</th>
		</tr>
		<tr>
			<td>1</td>
			<td>pp</td>
			<td>kk</td>
		</tr>
		<tr>
			<td>2</td>
			<td>kk</td>
			<td>kk</td>
		</tr>
	</table>
<div class="centraditos">
	<?= getRes("video_premium", 229115286) ?>
		<?= getRes('video_premium','ex/mensajeria-foro/1-mensajeria/1-sin-mostrar-remitente/index.html','Sin mostrar remitente' ) ?>
	</div>

		<h4 id="consultaMultitabla">Consulta multitabla</h4w>
		<pre><code>$sql = &quot;SELECT mensaje, nombre FROM mensaje, usuario WHERE mensaje.destinatario='$id' AND usuario.id=mensaje.remitente&quot;;</code></pre>

	<?= getRes("video_premium", 229116677) ?>
		<h4 id="autor">Ejercicio: <span class="text-primary">al consultar los mensajes debe poder verse el autor de los mismos</span></h4>

			<div class="row">
			<?= getRes("video_premium", 229116706) ?>

		<?= getRes('ejemplo','ex/mensajeria-foro/1-mensajeria/2-mostrando-remitente/index.html', 'Mostrando remitente') ?>
		<?= getRes("video_premium", 229116701) ?>


	</div>

</div>

</article>

<article>
	<div>
	<h2  id="foro">Foro</h2>
	<h3>Foro</h3>
		<h4>Ejercicio – crear un foro</h4>

<div class="row">
	<div class="col-md-10"><img class="img-fluid" src="img/foro.svg" alt="ejercicio foro con PHP y MySQL"></div>
	<div class="col-md-2"><?= getRes("video_premium", 229116714) ?></div>
</div>

				

		<div class="table-responsive">
		<table class="border" >
		<tr>
			<th colspan="3">usuario</th>
		</tr>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>pass</th>
		</tr>
		<tr>
			<td>1</td>
			<td>pp</td>
			<td>pp</td>
		</tr>
		<tr>
			<td>2</td>
			<td>kk</td>
			<td>kk</td>
		</tr>
	</table>
	</div>

	<div class="table-responsive">
	<table class="border">
		<tr>
			<th colspan="4">comentario</th>
		</tr>
		<tr>
			<th>id</th>
			<th>id_usuario</th>
			<th>id_hilo</th>
			<th>comentario</th>
		</tr>
		<tr>
			<td>1</td>
			<td>2</td>
			<td>7</td>
			<td>es super guay!</td>
		</tr>
		<tr>
			<td>2</td>
			<td>2</td>
			<td>8</td>
			<td>En pablomonteserin.com los vendes muy buenos</td>
		</tr>
	</table>
	</div>

	<div class="table-responsive">
	<table class="border">
		<tr>
			<th colspan="4">hilo</th>
		</tr>
		<tr>
			<th>id</th>
			<th>id_usuario</th>
			<th>nombre_hilo</th>
			<th>texto_hilo</th>
		</tr>
		<tr>
			<td>7</td>
			<td>1</td>
			<td>Escoger ordenador</td>
			<td>Dónde comprar uno bueno</td>
		</tr>
		<tr>
			<td>8</td>
			<td>1</td>
			<td>¿Qué opinas de Ubuntu?</td>
			<td>Dudas sobre Ubuntu</td>
		</tr>
	</table>
	</div>
	<div class="centraditos">
		<?= getRes("video_premium", 229116731) ?>

		<?= getRes('ejemplo','ex/mensajeria-foro/foro/sin-fechas/index.html', 'Mensajería - foro') ?>
</div>
		<h4>Ejercicio – crear un foro con fechas</h4>

		<p>Añadiremos a las tablas de hilos y de comentarios un nuevo campo llamado fecha de tipo timestamp y utilizaremos la funcíón NOW(), de SQL.</p>

		<div class="row">
		<?= getRes("video_premium", 229117127) ?>

<?= getRes('ejemplo','ex/mensajeria-foro/foro/con-fechas/index.html', 'foro con fechas') ?>
<?= getRes("video_premium", 229117164) ?>

</div>
		<h4>Ejercicio – que se muestre el autor del hilo y del comentario</h4>
				<?= getRes("video_premium", 229118259) ?>

		<div class="centraditos">
				<?= getRes("video_premium", 229118652) ?>
		<?= getRes('ejemplo','ex/mensajeria-foro/foro/recupera-nombre-comentarista-autor-hilo/index.html', 'Recupera nombre comentarista') ?>


</div>
	

	<h2 id="ejercicios-php-mysql">Ejercicios PHP y MySQL</h2>

	<h3 id="extrasChecks">Ejercicio checks</h3>
<ol>
	<li>Imprimir todas las checks.</li>
	<li>Recuerda el radio de la opción seleccionada.</li>
	<li>Tras enviar el formulario, las checks deben recordar el valor seleccionado. </li>
	<li>Debemos generar una cadena de texto con todos los valores enviados por el array de las checks separados por comas.</li>
	<li>Si pulsamos sobre “Enviar” habiendo seleccionado el radio de “Estadios” deben aparecer las características de los mismos.</li>
	<li>Recuperar también los jugadores. 
	<pre><code>select JUGADORES.nombre 'nombreJugadores', EQUIPOS.nombre 'nombreEquipos' <br/>from JUGADORES, EQUIPOS <br/>where JUGADORES.equipo_cod in(&quot;.$equiposCheckadosSeparadosPorComas.&quot;) <br/>and JUGADORES.equipo_cod=EQUIPOS.equipo_cod order by EQUIPOS.nombre&quot;;</code></pre></li>
</ol>

<div class="centraditos">
<?= getRes("recurso","/curso/assets/bd/futbol.sql","Descargar base de datos") ?>
<?= getRes('ejemplo','ex/extras-futbol/futbol-jugadores-estadios/index.php', 'futbol, jugadores, estadios') ?>
</div>
	<h4 id="conPaginacion">Añadir paginación al ejercicio anterior</h4>
	<p>Usaremos cun código similar a este para marcar la página a la que vamos: </p>
<pre><code>
href='index.php?enviar=Enviar&opcion=jugadores&registroAlQueVoy=15&arrayDeEquipos[]=15,16'</code></pre>
	

	<h3 id="contador1"><span class="text-dark-color">Ejercicio: </span>Contador</h3>
	<p>Hacer un contador de visitas que aproveche las funcionalidades de la modalidad AI (autoincrementado de la base de datos).</p>
	<p>Para recuperar los datos usaremos:</p> <pre><code>select max(contador)'cuentaVisitas' from contador1;</code></pre>
	
<h3 id="contador2"><span class="text-dark-color">Ejercicio:</span> contador II</h3>
<p>Ahora haremos un contador utilizando un sólo registro para almacenar la información (utilizando la sentencia sql update en vez de insert)</p>

	
	<h3 id="contador3"><span class="text-dark">Ejercicio:</span> contador III</h3>
		<p>Hacer un contador usando imágenes. Tener en cuenta que con la función substr puedo coger un trozo de una cadena de texto y con la función strlen puedo contar los caracteres de una cadena de texto.</p>
	
		<h3 id="contador4"><span class="text-dark">Ejercicio:</span> contador IV</h3>
		<p>Cargaremos una hoja de estílos u otra dependiendo de si el contador contiene un número par o impar. Esta hoja de estílos hará que la única capa de nuestra página web se visalice en naranja cuando el contador sea par y en rosa cuando sea impar.</p>

		<h3 id="contador5"><span class="text-dark">Ejercicio:</span> contador V</h3>
		<p>El contador debe funcionar mediante la pulsación de un botón.</p>
	
		<h3 id="contador6"><span class="text-dark">Ejercicio:</span> el contador tendrá un include que contendrá todo el código php necesario para que pueda funcionar.</h3>
	
		<h3 id="contador7"><span class="text-dark">Ejercicio:</span> Encapsular el código del ejercicio anterior en el método imprimir, que estará definido dentro del fichero 7_funciones.php</h3>
</div>	
</article>
</main>
<?php 

});
include $path."/diapos_theme/footer.php";
?>