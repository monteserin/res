<?php 
/*$titulo_curso="PowerPoint";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
*/?>
<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">	<ol>
		<li><a href="#interfaz">Interfaz</a></li>
		<li><a href="#diapositivas">Diapositivas</a></li>
		<li><a href="#layouts">Layouts</a></li>
		<li><a href="#ejercicio1">Ejercicio 1</a></li>
		<li><a href="#add_animations">Añadir animaciones</a></li>
		<li><a href="#insertar">Insertar</a></li>
		<li><a href="#ejercicio3">Ejercicio 3</a></li>
		<li><a href="#ejercicio_presentacion">Ejercicio presentación</a></li>
		<li><a href="#insertar_excel">Insertar Excel</a></li>
			</ol>
</article>
</section>
<main class="curso">
<?php // drawH1WithImg() ?>

<article>
<div>
<h2 id="interfaz">Interfaz</h2>
<img src="img/interfaz-powerpoint.svg" alt="interfaz powerpoint">
</div>
</article>
<article>
<div>
	<h2 id="diapositivas">Diapositivas</h2>
	<h3>Creamos una presentación nueva</h3>
	<pre>
Office Button → New → 	Blank and recent
							Installed Templates (con información ya introducida)
							Installed Themes</pre>
	</div>
</article>
<article>
<div>
	<h2 id="layouts">Layouts</h2>
<p><span class="black bold">Para acceder a ellos</span> <br>
Home → Slides → Layout
</p>

<p><span class="black bold">Para crear un slide Master:</span> </p>
<pre>View → Presentation Views → Slide Master → Opciones útiles:  
			→ Insert Layout 
			→ Rename
			→  Master Layout → Insert Place Holder (habrá que editarlo para que se vea en el slide final). Si quiero insertar un texto que no será editable en la vista diapositiva, introduciré un text box en lugar de un place holder.</pre>

<p>	<span class="black bold">Nota</span>: todos los layouts dependen del primero. Si lo modifico, se modificarán los hijos.</p>

	<h3>Salvar el Theme con las modificaciones echas en el Layout</h3>
	<p>Design → Themes → Save Current Theme</p>
	<h3>Cambiar el color de fondo</h3>
	<p>Botón derecho sobre el fondo → Format Background</p>
	<h3>Añadir una diapositiva</h3>
	<p>Panel izquierdo de slides → new Slide</p>
</div>
</article>
<article>
	<div>
	<h2 id="ejercicio1">ejercicio 1.ppt</h2>
						<?php // getRes('ejemplo','docs/ejs/1Cochessucios.pps','Ver como quedaría el ejercicio resuelto') ?>
						</div>

</article>
<article>
	<div>
	<h2 id="add_animations">Añadir animaciones</h2>
	<p><span class="black bold">De diapositiva:</span>
Seleccionamos el slide al que le queremos añadir la animación → Animations → Transition to this Slide
	</p>

	<p><span class="black bold">De Objeto:</span>
Seleccionamos el objeto al que le queremos añadir la animación → Animations → Custom animation
	</p>
	</div>
</article>
<article>
	<div>
<h2 id="insertar">Insertar</h2>
	<h3>Insertar un gif animado</h3>
	<p>Consiste en añadir una foto, como cualquier otra. La diferencia es que un gif animado, tiene animación, dando la sensación de película de video.</p>
	<a href="http://www.gifmania.com/">gifmania.com</a>

	<h3>Ejercicio 2</h3>
	<a href="docs/ejs/2.pps">Ver cómo quedaría el ejercicio resuelto.</a>

	<h3>Insertar media</h3>
	<p>Insert → Media Clips → Movie o Sound</p>

	<h3>Insertar link / acción</h3>
	<p>Irán vinculadas a cierto elemento.</p>
	<p>Selecciono el elemento → Insert → Links → Link o Action</p>
	</div>
</article>
<article >
	<div>
	<h2 id="ejercicio3">Ejercicio 3</h2>
							<?php // getRes('ejemplo','docs/ejs/3Fuentesaúco.ppt','Ver cómo quedaría el ejercicio resuelto') ?>
							</div>
</article>
<article id="ejercicio_presentacion">
	<div>
	<h2>Ejercicio – Hacer una presentación con:</h2>
	<ol>
		<li>botones de acción.</li>
		<li>animaciones que se ejecutan automáticamente una detrás de otra.</li>
		<li>animaciones que se ejecutan Simultáneamente.</li>
		<li>un icono que entre en escena mediante una trayectoria de desplazamiento definida por nosotros mismos.</li>
		<li>un gif animado.</li>
		<li>una música de fondo.</li>
		<li>Tema: el amor!.</li>
	</ol>

	

	<h3 id="insertar_excel">Insertar Excel</h3>
	<p><span class="black bold">Insertar un Excel a partir de uno existente:</span> <br>
Insert → Text → Object → Create From File →  Microsoft Office Excel Worksheet
	</p>
	<p><span class="black bold">Insertar un Excel a partir de uno existente permitiendo la sincronización:</span>
Insert → Text → Object → Create From File →  Microsoft Office Excel Worksheet → Marco la check link <br>
Luego, para actualizar, botón derecho sobre la excel: update link
	</p>
	<p><span class="black bold">Insertar un nuevo Excel:</span> <br>
Insert → Table → Excel Spreadsheet <br>
Insert → Text → Object → Create New →  Microsoft Office Excel Worksheet <br>
Si quisiera que este excel embebido recuperase valores de otro excel: <br>

<ol>
	<li>Tenemos un excel embebido en el power point (A).</li>
	<li>Abro el excel (B) del que quiero recuperar los valores.</li>
	<li>Abro un nuevo excel C y cargo la celda que me interesa de B. Se arma una ruta relativa.</li>
	<li>Cierro B. Ahora la ruta es absoluta.</li>
	<li>Copio esta ruta absoluta de B en A.</li>
</ol>
	</p>
	<p>Si hago modificaciones en el excel sin tener el powerpoint abierto, estas no se actualizarán automáticamente. Para forzar el refresco:</p>

	<p>Doble click en la excel embebida → Data → Connections → Edit Links → Update Values</p>

	<p>También puedo darle a Change Source si quiero capturar los datos de una Excel diferente.</p>
	</div>
</article>

</main>
<?php 
//});
//include $path."/diapos_theme/footer.php";
?>