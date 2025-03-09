<?php 
/*$titulo_curso="Word";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
*/
	?>
<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#ofimatica">Ofimática</a></li>
		<li><a href="#interfaz">Interfaz</a></li>
		<li><a href="#editar_texto">Editar texto</a></li>
		<li><a href="#editar_parrafos">Editar párrafos</a></li>
		<li><a href="#identacion">Identación o tabulado</a></li>
		<li><a href="#editar_pagina">Editar página</a></li>
		<li><a href="#dibujos">Dibujos</a></li>
		<li><a href="#listas">Listas</a></li>
		<li><a href="#tablas">Tablas</a></li>
		<li><a href="#mejorando_textos">Mejorando los textos</a></li>
		<li><a href="#estilos">Estilos</a></li>
		<li><a href="#bloques">Bloques</a></li>
		<li><a href="#macros">Macros</a></li>
			</ol>
</article>
</section>


<main class="curso">
<?php // drawH1WithImg() ?>

<article>
	<div>
<h2 id="ofimatica">Ofimática</h2>
<p>Es el software y el hardware utilizado para llevar a cabo las tareas típicas de una oficina. </p>
</div>
</article>
<article>
	<div>
	<h2 id="interfaz">Interfaz</h2>
	<img style="width:100%" src="img/interfaz_office.svg" alt="interfaz office">

	<h3>Modificación de la barra de herramientas de acceso rápido</h3>
	<ul>
		<li>Pulso con el botón derecho sobre una herramienta del ribbon → Add to Quick Access ToolBar</li>
		<li>Pulso con el botón derecho sobre una herramienta de la barra de herramientas de acceso rápido → Remove from Quick Access ToolBar</li>
		<li>Pulso en la flechita que hay a la derecha de la barra de herramientas → More Commands <br>o	<br>

Office Button → Word Options → Customize  <br>
			→ selecciono la herramienta deseada y pulso → Add → Ok <br>
			→ selecciono la herramienta deseada → remove
		</li>
	</ul>
		<p><span class="black bold">Desplazar la barra de herramientas de acceso rápido:</span>

		Pulso con el botón derecho sobre una herramienta del ribbon → Show Quick Access ToolBar Below/Above the Ribbon.</p>

	<h3>Atajos del teclado</h3>
<img src="img/ctrl+x.svg" alt="cortar, ctrl + x">

	<pre>nuevo documento				→ ctrl + n
salvar 					→ ctrl + s
cortar 					→ ctrl + x
copiar 					→ ctrl + c
pegar 					→ ctrl + v
escritorio 				→ ventanitas + d
cambiar de aplicación 			→ alt + tab</pre>
	
	<h3>Definir nuestro propios atajos del teclado</h3>
	<ol>
		<li>
			Pulso en la flechita que hay a la derecha de la barra de herramientas → More Commands <br>o	<br>

Office Button → Word Options → Customize  			
		</li>
		<li>→ keyboard shortcut → customize</li>
	</ol>
	<h3>Atajos del teclado para navegar por el documento</h3>
<img src="img/item_navegacion.svg" alt="item navegación">

<pre>
<span class="black bold">AvPag</span> 				→ Avanza página.
<span class="black bold">RePag</span>				→ Retrocede página.

<span class="purple bold">Ctrl + AvPag</span> 			→ Va al siguiente item de navegación seleccionado (por defecto el inicio de la página siguiente).
<span class="purple bold">Ctrl + RePag</span> 			→ Va al anterior item de navegación seleccionado (por defecto el inicio de la página anterior).

<span class="black bold">Inicio</span> 				→ Va al inicio de la línea.
<span class="black bold">Fin</span>				→ Va al final de la línea.
<span class="black bold">ctrl + inicio</span> 			→ Va al comienzo del documento.
<span class="black bold">ctrl + fin</span>			→ Va al final del documento.
</pre>	
<p class="red">Para seleccionar un item de navegación.</p>
</div>
</article>
<article>
	<div>
	<h2>Zoom</h2>
	<ul>
		<li>Zoom</li>
		<li>100%</li>
		<li>One Page</li>
		<li>Two Pages</li>
		<li>Page Width</li>
	</ul>
	</div>
</article>
<article>
	<div>
	<h2>Dividir el espacio de trabajo entre varios documentos</h2>
	<p>View → Window → Arrange All</p>
	</div>
</article>
<article>
	<div>
	<h2>Ejercicio – Copiar y Pegar texto</h2>
	<p>Abrir el documento de texto disponible en <a href="docs/copyPasteSOL.docx">este enlace</a>, y copiar el texto en negrita y subrayado en un nuevo documento.</p>
	</div>
</article>

<article> 
	<div>
<h2 id="editar_texto">Editar texto</h2>
<h3>Selección de texto</h3>
<p><span class="black bold">Para seleccionar una palabra, un párrafo, un conjunto de palabras o un conjunto de párrafos podemos:</span><br>
Colocar el cursor al comienzo de la palabra, pulsar el botón del ratón y sin soltar arrastrar hasta el extremo opuesto de la selección.
</p>

<p><span class="blac bold">Para seleccionar una palabra podemos:</span><br>
Hacer doble click sobre la palabra.
</p>

<p><span class="black bold">Para seleccionar un párrafo podemos:</span><br>
- Hacer tripleclick sobre el párrafo. <br>
- Hacer doble click a la izquierda del párrafo.	
</p>

<h3>Formas de editar un texto</h3>
<ul>
	<li>Mediante el menú emergente que aparece al seleccionar una o varias palabras.</li>
	<li>Mediante el ribbon (Home → Font).</li>
	<li>Mediante el cuadro de diálogo del menú Home → Font</li>
</ul>
<img src="img/editar_un_texto.svg" alt="editar un texto">

<h3>Ejercicio</h3>
<p>Cambiar el formato al siguiente texto:</p>
<p>El sabio puede sentarse en un hormiguero, pero sólo el necio se queda sentado en él.</p>
<p>Para que tenga el siguiente formato:</p>
<p><span class="u">El <span class="black" style="font-size:1.7em">sabio</span> puede sentarse</span> en un <span class="red" style="font-family:trebuchet">hormiguero</span>, pero sólo el <span style="font-size:0.7em">necio</span> se <span style="background:brown">queda</span> <span class="black bold">sentado</span> en él.</p>
</div>
</article>
<article>
	<div>
	<h2 id="editar_parrafos">Editar párrafos</h2>
	<h3>Estilo de párrafo</h3>
	<p>Home → Paragraph → Cuadro de diálogo</p>
	
	<h3>Justificación</h3>
	<p>Home → Paragraph:</p>
	<ul>
		<li>Align Text Left</li>
		<li>Center</li>
		<li>Align Text Right</li>
		<li>Justify</li>
	</ul>
	
	<h3>Ejercicio</h3>
	<p>Justificar el documento <a href="docs/justify.docx">adjunto</a> de la forma indicada.</p>

	<div class="output">
<p style="text-align:center">Carta de presentación</p>

<p style="text-align:right">Industrias Gavina, S.A. <br>
	Pol. Independencia, 240 <br>
	Att. Dpto. Personal <br>
	50003 – Zaragoza <br>
	Zaragoza a 24 de Febrero de 2004</p>

<p>Estimado Sr/Sra.:</p>
<p style="text-align:justify">He podido comprobar por distintos medios que su empresa INDUSTRIAS CES S.A., es líder
en la fabricación de productos para la construcción.
Por mi experiencia como Jefe de Ventas en una firma del sector, he seguido con atención el
desarrollo de su empresa; por ello estimo que mi colaboración podría serles útil a la hora de
planificar campañas y/o promocionar su firma.
Por este motivo, desearía tener la oportunidad de conversar con Uds. en una entrevista para
comentarles mis conocimientos y experiencias.

<p>En espera de sus noticias, les saluda atentamente</p>
<p style="text-align:right">Fdo. Juan Gómez Martín</p>

	</div>
	</div>
</article>
<article>
	<div>
	<h2 id="identacion">Identación o tabulado</h2>
	<p>Colocándonos en la primera línea de un párrafo y pulsando tab (Home → Paragraph → Increase Indent), tabulamos ese línea.</p>
	<p>Si nos ubicamos en las sucesivas, o seleccionamos todo el párrafo , al pulsar tab (Home → Paragraph → Increase Indent), tabularemos el párrafo entero.</p>
	<p>Para definir mis propias distancias de tabulación haremos aparecer la regla: <br>
View → Show/Hide → Ruler <br>
Teniendo seleccionada en la intersección de las reglas la opción "Left Tab", al pulsar sobre la regla superior haré aparecer una distancia de tabulación.
	</p>

	<p>Variando entre "Left Tab", "Right Tab" y "Center Tab" podré definir la alineación de los textos respecto del tabulador.</p>
	<p>Para borrar las tabulaciones: <br>
Selecciono la línea cuyas tabulaciones quiero eliminar → botón derecho sobre la selección → Paragraph → Tabs → clear all
	</p>


<h3>Ejercicio</h3>

<p>Utilizando sólo tres tabulaciones por fila, realizar el diseño de tres columnas indicado a continuación:</p>
<table>
	<tr>
		<th colspan="3">Empleado</th>

	</tr>
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Edad</th>
	</tr>
	<tr>
		<td>Juan</td>
		<td>Jorge</td>
		<td>Miriam</td>
	</tr>
	<tr>
		<td>González Zambrana</td>
		<td>Martín Fernández</td>
		<td>López Fernández	</td>
	</tr>
	<tr>
		<td>32</td>
		<td>29</td>
		<td>31</td>
	</tr>
</table>
	<a href="docs/identacion.docx">Descargar el ejercicio de identación resuelto.</a>


<h3>Interlineado</h3>
<p>Se aplica al párrafo sobre el que esté ubicado o a los párrafos seleccionados.</p>
<p>Observar el panel párrafo tiene opción para desplegar un cuadro de diálogo.</p>
<p>Home → Paragraph → Line Spacing</p>
</div>
</article>

<article>
	<div>
	<h2 id="editar_pagina">Editar página</h2>
	<h3>Cambiar márgenes</h3>
	<p>Puedo cambiar los márgenes del párrafo sobre el que estoy ubicado utilizando la regla.</p>
	<p>Para cambiar los márgenes de todo el documento:</p>
	<pre>
		Page Layout → Margins
							→ Custom Margins 
							→ Apply To (a que región se aplican los márgenes definidos)
	</pre>
	
	<h3>Ejercicio</h3>

	<div class="output" style="padding:300px 20px 300px 200px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa enim at, repellat, temporibus non facere cum fugit et ipsum dignissimos excepturi quia, debitis esse ullam pariatur commodi placeat possimus! Repellendus!</div>
	
	<h3>Cambiar orientación</h3>
	<pre>
		Page Layout → Page Setup 	→ Orientation
									→ Cuadro de diálogo
	</pre>
	<h2>Numeración de páginas</h2>
	<p>Insert → Header & Footer → Page Number</p>
	<p>Esto escribe el número de página en el Header o en el Footer según corresponda.</p>
	<p>Para que la primera página no se vea afectada por el Header o el Footer: <br> Page Layout → Page Setup →Cuadro de diálogo → Headers and footers → Different first page</p>
	<p>Para empezar a contar a partir de cierta página: <br> Insert → Header & Footer → Page Number → Format Page Numbers</p>
	
	<h3>Tamaño de la página</h3>
	<pre>Page Layout → Size 	→ …
								→ More Paper Sizes</pre>

	
	<h3>Ejercicio</h3>
	<p>Hacer una página con el siguiente pie y cabecera:</p>
	<table>
		<tr>
			<td>La conjura de los necios</td>
			<td></td>
			<td>John Kennedy Toole</td>
		</tr>
		<tr>
			<td></td>
			<td>Ignatius Reilly se afeita</td>
			<td>Página 1</td>
		</tr>
	</table>
	
	<h3>Diseño de la página</h3>
	<pre>

Page Layout → Page Background 	→ Page Color
															→ Fill effects
											→ Page Borders
											→ Watermark	
	</pre>
	
	<h3>Ejercicio</h3>
	<p>Crear un documento con el siguiente diseño:</p>
	<img src="img/background.svg" alt="imágen de fondo">
	</div>
</article>

<article>
	<div>
	<h2 id="dibujos">Dibujos</h2>
	<pre>
Insert → Illustrations 	→ Pictures
									→ Shapes
	</pre>
	
	<h3>Ejercicio</h3>
	<p>Meter 3 imágenes y tres formas en una página.</p>

	
	<h3>Ejercicio</h3>
	<p>Al hacer doble click sobre la imagen será posible retocarla.</p>
	<p>Manipulando los controles, obtener algo similar a esto:</p>
<img src="img/ejercicio-imagen.svg" alt="ejercicio imagen">
<a href="docs/imagenRetocada.docx">Ver resultado final</a>	

<h3>Ejercicio</h3>
<p>Para cambiar la flotabilidad de la imagen, botón derecho sobre la imagen → Text Wrapping</p>
<img src="img/cv.svg" alt="curriculum">
</div>
</article>
<article>
	<div>
	<h2 id="listas">Listas</h2>
	<p>Selecciono el texto al que le quiero aplicar la lista →Home →Paragraph → </p>
	<p>→ Bullets <br>
→ Numbering <br>
→ Multilevel List (define la apariencia de una lista de varios niveles)</p>

<p>(puedo pulsar en la flechita de la derecha para definir la apariencia de la lista). </p>
<p>Es posible cambiar los márgenes de una lista utilizando la regla.</p>

<h3>Ejercicio</h3>
<p>Hacer la siguiente lista:</p>
<img src="img/listas.svg" alt="listas">
<a href="docs/listas.docx">Ver ejercicio resuelto</a>
</div>
</article>
<article>
	<div>
	<h2 id="tablas">Tablas</h2>
	<h3>Crear tablas</h3>
<pre>
Insert → Tables → Table
								→ Selecciono las celditas de la tabla.
								→ Drawn table.
								<span class="purple">→ Convert Text to Table:</span>
								→ Excel SpreadSheet
</pre>

<p class="purple">Nombre, Apellidos, Edad <br>
Juan, Fernández garcía, 38 <br>
Miriam, López Fernández, 27 <br>
Jose, Gonzalez Zambrana, 26</p>

<h3>Modificar tablas</h3>
<p>Al pulsar sobre cualquier celda de la tabla:</p>
<ul>
	<li>las reglas se modifican para mostrar sus medidas y es posible modificarla modificando los controles de las reglas.
</li>
<li>aparece disponible un nuevo ribbon llamado layout, dónde podremos modificar la tabla.</li>
</ul>

<h3>Ribbon layout</h3>
<ul>
	<li>Cambiar los tamaños de las celdas : cell size.</li>
	<li>Unir varias celdas: merge.</li>
	<li>Realizar operaciones entre celdas: Data → Formula</li>
	<li>Convertir la tabla a texto: Data → Convert to Text</li>
</ul>

<h3>Ribbon design</h3>
<p>Cambiar la apariencia de la tabla, ponerle bordes, etc: Table Styles.</p>
</div>
</article>

<article>
	<div>
	<h2>Columnas</h2>
<pre>
	Page Layout → Page Setup 	→ Columns
								→ More columns permite 												opciones como poner una 												línea entre las columnas. 
								→ Breaks (termina la columna)
</pre>	

	<h3>Ejercicio</h3>
	<div class="output">
<div style="column-cont:3; column-gap:40px; column-rule:2px solid black">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex.
</div>		
	</div>
	<a href="docs/columnas.docx">Ver ejercicio columnas resuelto</a>
	
	<h3>Ejercicio</h3>
	<img src="img/ejercicio-word.svg" alt="ejercicio word">

	
	<h3>Ejercicio</h3>
	<img src="img/ejercicio-word-gastronomia.svg" alt="ejercicio word gastronomía">
</div>
</article>

<article>
	<div>
	<h3>Ejercicio</h3>
	<img src="img/ejercicio-carrera-globos.svg" alt="ejercicio carrera de globos">
	
	<h3>Ejercicio - virus</h3>
	<a href="docs/virus.docx">Ver ejercicio virus</a>
	
	<h3>Ejercicio - vidas secretas</h3>
	<a href="docs/vidaSecretas.docx">Ver ejercicio vidas secretas</a>
	</div>
</article>

<article>
	<div>
	<h2 id="mejorando_textos">Mejorando los textos</h2>
	<h3>Corrector ortográfico</h3>
	<p><span class="black bold">Corregir una palabra:</span><br>
	Selecciono la palabra que quiero corregir → <br>
		→ botón derecho para abrir menú emergente →  <br>
						→ aparecen varias opciones de corrección 	ortográfica
	</p>

	<p><span class="black bold">Corregir todo el documento, a partir de la línea dónde tengo el cursor:</span> <br>
Review → Proofing → Spelling &amp; Grammar
	</p>

	<p>AddToDictionary: La palabra indicada dejará de ser interpretada como un error ortográfico.</p>

<h3>Sinónimos</h3>
<p><span class="black bold">Corregir una palabra:</span> <br>
Selecciono la palabra que quiero corregir → <br>
botón derecho para abrir menú emergente → <br>
→ Synonyms → <br>
→ aparecen varias opciones de corrección ortográfica
</p>

<p><span class="black bold">Hacer una búsqueda exhaustiva de los sinónimos de una palabra:</span> <br>
Review → Proofing → Research
</p>

<h3>Configuración del autocorrector</h3>
<p>Office Button → Word Options → Proofing 
												→ AutoCorrect Options</p>
												</div>
</article>

<article>
	<div>
	<h2 id="estilos">Estilos</h2>
	<h3>Usar un set de estilos</h3>
	<p>Un set de estilos es un conjunto de formatos de texto. <br>
<span class="red bold">Home → Styles →Change Styles.</span>
	</p>
	<p>Para modificar un estilo concreto → botón derecho sobre él → Modificar.</p>
	<p>Para salvar nuestro Quick style → Home → Styles → botón debajo de la barrita de scroll vertical → Save selection as new Quick style.</p>
	<p>Para un mismo estilo existen diferentes themes, que perfilan el resultado final del mismo. <br>
Page Layout → Themes → Themes
	</p>

	

	<h3>Definir un nuevo estilo</h3>

	<p>Home → Styles → Cuadro de diálogo → New Style</p>
	<p>Pulsando con el botón derecho sobre el style recién creado podré modificarlo.</p>

	

	<h3>Crear un nuevo documento a partir de una plantilla</h3>
	<p>Office Button → new → Installed template → Oriel Resume</p>
	<p>Podré editar cada item pulsando sobre el texto entre corchetes.</p>
	<p><span class="black bold">Para salvar la plantilla:</span> <br>
Office Button → save as → Other Formats → Word Template
	</p>
	</div>
</article>

<article>
	<div>
	<h2 id="bloques">Bloques</h2>
	<p><span class="black bold">Crear un nuevo bloque:</span> <br>
Selecciono el texto que quiero convertir en bloque → Insert → Text → Quick Parts → Save Selection to Quick Part Gallery</p>

<p><span class="black bold">Insertar un bloque creado:</span> <br>
Selecciono el texto que quiero convertir en bloque → Insert → Text → Quick Parts 
</p>

<p>Selecciono el texto que quiero convertir en bloque → Insert → Text → Quick Parts → Building Blocks Organicer</p>
</div>
</article>

<article>
	<div>
	<h2 id="macros">Macros</h2>
	<p>Una macro es una grabación de acciones que luego podremos reproducir.</p>
	<p><span class="black bold">Grabar una macro:</span> <br>
View → Macros → Record Macro →<br>
Hago lo que tenga que hacer <br>
View → Macros → Stop Recording</p>

<p><span class="black bold">Reproducir una macro:</span> <br>
Pulso el botón o la combinación de teclas que escogí para reproducir la macro.
</p>

<p><span class="black bold">Editar macros:</span> <br>
View → Macros → Record Macro →Macros → Edit
</p>
</div>
</article>
	</main>
<?php 
//});
//include $path."/diapos_theme/footer.php";
?>