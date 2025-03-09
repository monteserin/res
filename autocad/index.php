<?php 

/*
$titulo_curso="Curso de Autocad 2D";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){

*/
	?>
<section id="amor" class="verIndice">
				<article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#cad">CAD (Computer Aided Design)</a></li>


		<li><a href="#interface">Interface</a>
			<ol>
				<li><a href="#barra_acceso_rapido">Barra de acceso rápido</a></li>
				<li><a href="#cambiar_entre_archivos_abiertos">Cambiar entre archivos abiertos</a></li>
				<li><a href="#salvar_y_definir_plantilla">Salvar y definir plantilla</a></li>
				<li><a href="#rejilla">Habilitar, deshabilitar rejilla</a></li>
			</ol>
		</li>
		<li><a href="#recuperacion_archivos_temporales">Recuperación de archivos temporales</a></li>
		<li><a href="#herramienta_linea">Herramienta línea</a>
			<ol>
						<li><a href="#entrada_dinamica">Entrada dinámica</a></li>
				<li><a href="#activar_desactivar_pinzamiento">Activar/Desactivar nodos de pinzamiento</a></li>
				<li><a href="#pulsacion_espacio">Pulsación de espacio</a></li>
				<li></li>

			</ol>
		</li>
		<li><a href="#ortho_mode">Ortho Mode</a></li>
		<li><a href="#steering_wheel">Steering Wheel</a></li>
		<li><a href="#zoom_span">Zoom y Span</a></li>
		<li>
			<a href="#borrar_elementos">Borrar elementos</a>
		</li>
		<li>
			<a href="#seleccion">Selección</a>
		</li>
		<li>
			<a href="#snapping">Snapping o Referencia a objetos</a>
		</li>

		<li><a href="#rastreo">Rastreo de referencia a objetos</a></li>

		<li><a href="#rejilla2">Rejilla</a></li>
		<li><a href="#polar_mode">Polar Mode</a></li>
		<li><a href="#coordenadas">Coordenadas</a></li>
		<li><a href="#medir">Medir</a></li>
		<li><a href="#dibujar_circulo">Dibujar un círculo (c)</a></li>
		<li><a href="#panel_propiedades_rapidas">Panel de propiedades rápidas</a></li>
		<li><a href="#mover_objeto">Mover un objeto</a></li>

<li><a href="#alargar_acortar">Alargar / Acortar</a></li>
<li><a href="#simetria">Simetría</a></li>
<li><a href="#circa">Circa a partir de dos tangentes y el radio</a></li>
<li><a href="#dibujar_rectangulo">Dibujar un rectángulo</a></li>
<li><a href="#dibujar_elipse">Dibujar una elipse</a></li>
<li><a href="#rotar_girar">Rotar / Girar un objeto</a></li>
<li><a href="#parametrico">Paramétrico</a>
		<ol>
			<li><a href="#paralela">Paralela</a></li>
			<li><a href="#perpendicular">Perpendicular</a></li>
			<li><a href="#coincidencia">Coincidencia</a></li>
			<li><a href="#horizontal_vertical">Horizontal y Vertical</a></li>
			<li><a href="#concentrico">Concéntrico</a></li>
			<li><a href="#colineal">Colineal</a></li>
			<li><a href="#igualdad">Igualdad</a></li>
			<li><a href="#tangencia">Tangencia</a></li>
			<li><a href="#simetria">Simetría</a></li>
			<li><a href="#fijar"></a></li>
		</ol>

</li>
<li><a href="#visualizacionRestricciones">Visualización de Restricciones</a></li>
<li><a href="#reestricionesAutomaticas">Reestricciones automáticas</a></li>
<li><a href="#reestriccionesParametricas">Ejercicio reestricciones paramétricas</a></li>
<li><a href="#reestricciones_dimensionales">Reestricciones dimensionales</a></li>
<li><a href="#reestricciones_dimensionales_parametricas">>Ejercicio reestricciones dimensionales y paramétricas</a></li>

<li><a href="#estirar">Estirar</a></li>
<li><a href="#ejercicios_curvas_tangentes">Ejercicios curvas tangentes</a>
	<ol>
		<li><a href="#cuchara">Ejercicio cuchara</a></li>
		<li><a href="#curvas">Ejercicio curvas</a></li>
	</ol>

</li>

<li><a href="#dibujar_poligono">Dibujar un polígono (inscrito o circunscrito)</a>
	<ol>
		<li><a href="#ejercicio_poligono">Ejercicio Polígono circunscrito</a></li>

	</ol>
</li>

<li><a href="#arandela">Arandela</a></li>
<li><a href="#splines">Splines</a></li>
<li><a href="#rayo">Rayo</a></li>
<li><a href="#punto">Punto</a></li>
<li><a href="#dividir">Dividir</a></li>
<li><a href="#descomponer">Descomponer</a></li>
<li><a href="#graduar">Graduar</a></li>
<li><a href="#dibujar_mano_alzada">Dibujar a mano alzada</a></li>
<li><a href="#sombreado">Sombreado</a></li>

<li><a href="#desfase">Desfase</a></li>
<li><a href="#filetear_empalmar">Fiiletear o empalmar</a></li>
<li><a href="#achaflanar">Achaflanar</a></li>

<li><a href="#ejercicios">Ejercicios</a>
<ol>
	<li><a href="#percha">Ejercicio Percha</a></li>
	<li><a href="#grifo">Ejercicio Grifo</a></li>
	<li><a href="#gancho">Ejercicio Gancho</a></li>
	<li><a href="#senal">Ejercicio Señal</a></li>
</ol>


</li>

<li><a href="#mango">Ejercicio mango</a></li>
<li><a href="#recta_tangente_a_dos_circas">Recta tangente a dos circas</a></li>
<li><a href="#matriz_rectangular_polar">Matriz rectangular y polar</a></li>
<li><a href="#herramienta_alinear">Herramienta alinear</a></li>
<li><a href="#recorte_multiple">Recorte múltiple</a>
	<ol>
		<li><a href="#puerta">Ejercicio Puerta</a></li>
		<li><a href="#aros_olimpicos">Aros olímpicos</a></li>
	</ol>
</li>
<li><a href="#crear_polilinea">Crear una polilínea</a>
	<ol>
		<li><a href="#linea_a_polilinea">Convertir líneas en polilínea</a></li>
		<li><a href="#ejercicio_polilineas">Ejercicio Polilíneas</a></li>
	</ol>
	
</li>
<li><a href="#uso_matriz_rectangular">Uso de la matriz rectangular</a>
<ol>
	<li><a href="#ejercicio_matriz_rectangular">Ejercicio</a></li>
</ol>

</li>

<li><a href="#capas">Capas</a>
<ol>
	
<li><a href="#igualar_propiedades">Igualar propiedades</a></li>
<li><a href="#eliminar_limpiar_capas">Eliminar/Limpiar capas de un plano</a></li>
</ol>
</li>

<li><a href="#texto">Texto</a>

<ol>
<li><a href="#introducir_texto_una_sola_linea">Introducir texto de una sola línea</a></li>

<li><a href="#crear_estilos_texto">Crear estilos de texto</a></li>
<li><a href="#texto_multilinea">Texto multilínea</a></li>
<li><a href="#justificar">Justificar</a></li>
<li><a href="#insertar_simbolo">Insertar un símbolo</a></li>
<li><a href="#corrector_ortografico">Corrector ortográfico</a></li>

</ol>
</li>

<li><a href="#dimensionamiento_acotacion">Dimensionamiento o acotación</a>
	<ol>
		<li><a href="#partes_cota">Partes de una cota</a></li>
		<li><a href="#rayado_secciones">Rayado de secciones</a></li>
		<li><a href="#simbolos">Símbolos</a></li>
		<li><a href="#acotacion_diametro">Acotación del diámetro</a></li>
		<li><a href="#linea_aux_cota">Línea auxiliar de cota</a></li>
		<li><a href="#linea_cota">Línea de cota</a></li>
		<li><a href="#lineas_cota">Líneas de cota</a></li>
		<li><a href="#extremo_cota">Extremo de cota</a></li>
		<li><a href="#cifras_cota">Cifras de cta</a></li>
		<li><a href="#simbologia">Simbología</a></li>
		<li><a href="#estilo_cotas">Estilo de las cotas</a></li>
		<li><a href="#capa_defpoints">Capa defpoints</a></li>
	</ol>

</li>

<li><a href="#ejercicios_acotacion">Ejercicios acotación</a></li>

<li><a href="#bloques">Bloques – crear un bloque</a>

	<ol>
		<li><a href="#exportar_bloque">Exportar un bloque</a></li>
		<li><a href="#editar_bloque">Editar un bloque</a></li>
		<li><a href="#cambiar_punto_base">Cambiar el punto base de inserción de un bloque</a></li>
		<li><a href="#salvar_bloque">Salvar una copia del bloque con un nombre nuevo</a></li>
		<li><a href="#crear_libreria">Crear una librería de bloques</a></li>
		<li><a href="#eliminar_bloque">Eliminar un bloque de la lista de disponibles</a></li>
		<li><a href="#redefinir_bloque_insertado">Redefinir un bloque ya insertado</a></li>
		<li><a href="#superposicion_elementos">Superposición de elementos
(necesario para el ejercicio siguiente)</a></li>
<li><a href="#atributos">Atributos</a></li>
<li><a href="#definir_atributo">Definir un atributo</a></li>
<li><a href="#insertar_bloque_con_atributos">Insertar un bloque con atributos</a></li>
	</ol>
</li>

<li><a href="#perspectivas">Perspectivas</a>
	<ol>
		<li><a href="#conica">Perspectiva Cónica</a></li>
		<li><a href="#oblicua">Perspectiva Oblicua</a></li>
		<li><a href="#conica2">Perspectiva cónica vs axonométrica</a></li>
		<li><a href="#isometrica">Perspectiva 
isométrica</a></li>
<li><a href="#caballera">Perspectiva Caballera</a></li>

<li><a href="#escalimetro">Uso del escalímetro</a></li>
	</ol>

</li>

<li><a href="#crear_polilinea">Crear polilínea</a></li>

<li><a href="#qselect">qselect</a></li>

<li><a href="#ej_casa">Ejercicio Casa</a></li>

<li><a href="#ref_externas">Referencias externas</a></li>


<li><a href="#imprimiendo">Imprimiendo (plot)</a></li>

<li><a href="#escala">Escala</a></li>

<li><a href="#ventanas_graficas">Ventanas gráficas (Viewports)</a></li>
<li><a href="#objetos_anotativos">Objetos anotativos</a></li>
		<li><a href="#coleccion-ejercicios-autocad">Ejercicios de autocad</a></li>


		</ol>
</article>
</section>
<main class="curso">
<article>
	<div>
<h2 id="cad">CAD (Computer Aided Design)</h2>
<p>Ventajas frente al diseño a mano:</p>
<ul>
	<li>Reducción de los tiempos de desarrollo de los planos de un proyecto completo.</li>
	<li>Facilita las modificaciones de los planos.</li>
	<li>El espacio físico que ocuparán los planos.</li>
	<li>La postura del cuerpo desarrollando con CAD es más saludable que dibujando sobre una mesa de dibujo.</li>
</ul>
<p>Desventajas:</p>
<ul>
	<li>Requiere un periodo de aprendizaje.</li>
	<li>El equipo necesario (hardware y software) puede resultar costoso.</li>
	<li>Más lento para plasmar ideas rápidas.</li>
</ul>


<?php //echo do_shortcode('[purchase_link id="33776" text="Descarga todos los ficheros dwg de los ejercicios de autocad 2D" style="button" color="blue"]');
 ?>
</div>
</article>
<article>
	<div>
	<h2 id="interface">Interface</h2>
	<p>En este panel desplegable podemos seleccionar el workspace (2D), así como salvar su configuración.</p>
	<img src="img/interfaz-1.png" alt="interfaz autocad 2d - selección de workspace" style="width:100%">
	<p>Cada menú consta de sus correspondientes paneles. Cada panel tiene sus correspondientes herramientas.</p>
	<img src="img/interfaz-2.png" alt="interfaz autocad 2d, paneles de los menus"  style="width:100%">
	<p>Para obtener ayuda de la herramienta, basta con dejar el cursor encima</p>
	<img src="img/interfaz-3.png" alt="interfaz autocad 2d, ayuda de la herramienta" style="width:100%; max-width:517px!important">
	<p>También podemos utilizar herramientas utilizando la barra de comandos</p>
	<img src="img/interfaz-4.png" alt="autocad, barra de comandos">

	<h3 id="barra_acceso_rapido">Barra de acceso rápido</h3>
	<img src="img/interfaz-5.png" alt="barra de acceso rápido de autocad">
		<h3>Ver la barra de menú clásica</h3>
	<p>Barra de acceso rápido → Flechita desplegable → Mostrar Barra de menús</p>
	<p>Para configurarla, basta con arrastrar el icono a la barra de acceso de trabajo.</p>
	<img src="img/interfaz-6.png" alt="configuración de la barra de acceso rápido de autocad">
<h3 id="cambiar_entre_archivos_abiertos">Cambiar entre archivos abiertos</h3>
<p>Menú Vista → Panel ventanas → Cambiar Ventanas (windows)</p>
<h3 id="salvar_y_definir_plantilla">Salvar y definir plantilla</h3>
<p>Para salvar una plantilla con las unidades de medida, espacio de trabajo y dibujos ya hechos por defecto: <br>
<span class="black bold">A → Archivo → Guardar como → Plantilla de dibujo autocad (*.dwt)</span></p>
<p>
Para que al crear un nuevo documento, este importe por defecto la plantilla definida: <br>
<span class="black bold">Btn dch → Opciones → Archivos →  Parámetros de plantilla → Nombre de archivo de plantilla por defecto → Examinar</span>
</p>
<h3>Cambiar propiedades de autocad</h3>
<p>Btn dch → Opciones</p>
<h4>Cambiar el fondo de autocad a negro:</h4>
<p>Btn dch → Opciones → Visualización → Colores → 2D model space → Uniform Background</p>
<h4>Cambiar tamaño del puntero en cruz</h4>
<p>Btn derecho → Opciones → Visualización → Tamaño del puntero en cruz (cross hair size)</p>

<h4 id="rejilla">Habilitar, deshabilitar rejilla</h4>
<p> ctrl + g</p>
</div>
</article>
<article>
	<div>
	<h2 id="recuperacion_archivos_temporales">Recuperación de archivos temporales</h2>
	<p>Se encuentran en la ruta:</p>
	<p>C:\Documents and Settings\usuario\Configuración local\Temp</p>
	<p>Nota: Para ver la carpeta “Configuración local” habrá que activar el visionado. </p>
	</div>
</article>
<article>
	<div>
	<h2 id="herramienta_linea">Herramienta línea</h2>
	<p>Voy Haciendo segmentos -> Confirmo con enter o con botón derecho y luego enter.</p>
	<p>Cuando estoy trazando líneas, con la tecla tab puedo alternar entre introducir una longitud o un número de grados.</p>

	<h3 id="entrada_dinamica">Entrada dinámica</h3>
	<img src="img/entrada-dinamica.png" alt="autocad 2d, entrada dinámica">	
	<p>Con enter confirmamos y con tab cambiamos de cuadro de entrada.</p>
	<p>Para poder introducir coordenadas absolutas sin problemas, habrá que desactivar la entrada dinámica.</p>
	<img src="img/entrada-dinamica-2.png" alt="introducción de coordenadas en autocad">


<h3 id="activar_desactivar_pinzamiento">Activar/Desactivar nodos de pinzamiento</h3>
<p>Btn derecho → Opciones → Selección → Grid Size → establezco el tamaño más pequeño</p>
<img src="img/linea-1.png" alt="grid en autocad">
<img src="img/linea-2.png" alt="grid en autocad 2d">
<h3>En caso de que nos desaparezca el panel de entrada de comandos...</h3>
<p>… podremos pulsar ctrl+9 para recuperarlo</p>
<img src="img/desaparecen-comandos-1.png" alt="panel de comandos que desaparece en autocad">
<img src="img/desaparecer-comandos-2.png" alt="ver panel de comando en autocad">

	<h3 id="pulsacion_espacio">Pulsación de espacio</h3>
	<p>Repite el uso de la última herramienta empleada.</p>
	</div>
</article>
<article>
	<div>
	<h2 id="ortho_mode">Ortho Mode</h2>
	<p>Dibuja líneas a 0º, 90º, 180º y 240º.</p>
	<img src="img/ortho-mode.png" alt="ortho mode en autocad">
	</div>
</article>
<article>
	<div>
	<h2 id="steering_wheel">Steering Wheel</h2>
	<p>Menú Vista → Ruedas de Navegación</p>
	<p>Para hacer visible/invisible la rueda seleccionada: shift + w</p>
	<p>Parámetros de Steering Wheel: 
En el recuadro de Visualización desactivamos todas las checks.</p>
</div>
</article>
<article>
	<div>
	<h2 id="zoom_span">Zoom y Span</h2>
	<p>Menú Vista → 		Navegar</p>
	<p>Zoom shortcut:		z</p>
	<p>Zoom extensión: 		z → e,							Doble click sobre la rueda del ratón	</p>
	<p>Encuadre/Span shortcut:		e/sp</p>
	</div>
</article>
<article>
	<div>
	<h2 id="borrar_elementos">Borrar elementos</h2>
	<p>Tras seleccionarlos, pulsamos sobre la goma de borrar (Menú Modificar → Borrar ):</p>
	</div>
</article>
<article>
	<div>
	<h2 id="seleccion">Selección</h2>
	<p>Seleccionar un objeto 				→ Pulso sobre él con el ratón.</p>
	<p>Deseleccionar un objeto seleccionado			→	 Pulso sobre él con el ratón manteniendo shift pulsado.
 	</p>
 	<p>Seleccionar todos los objetos 	→ ctrl+a</p>
 	<p>Deseleccionar todos los objetos → esc</p>
 	<p>Haciendo un cuadro de selección comenzando en la esquina superior izquierda del mismo, selecciono los objetos que caigan dentro del mismo.</p>
	 <p>Haciendo un cuadro de selección comenzando en la esquina inferior derecha del mismo, selecciono los objetos que toquen el mismo.</p>
	 </div>
</article>
<article>
	<div>
	<h2 id="snapping">Snapping o Referencia a objetos</h2>
	<p>Barra de estado → Referencia a objetos</p>
	</div>

</article>
<article>
	<div>
	<h2 id="rastreo">Rastreo de referencia a objetos</h2>
	<p>Barra de estado → Rastreo de referencia a objetos</p>
	<img src="img/referencia-a-objetos.png" alt="referencia a objetos en autocad">
	</div>
</article>
<article>




	<div>
	<h2>Ejercicio</h2>
	<?php// getRes('ejemplo','ex/1-snapping.dwg','Abrir 1_snapping.dwg') ?>
	<img src="img/ejercicio-1.png" alt="ejercicio swapping con autocad">
	</div>
</article>
<article>
	<div>
	<h2>Ejercicio</h2>
	<img src="img/ejercicio-2-1.png" alt="ejercicio swap en autocad">
	<img src="img/ejercicio-2-2.png" alt="ejercicio swapping en autocad">

		<?php //getRes('ejemplo','ex/2-piezas-vistas.dwg','Descargar dwg con vistas 2D y 3D') ?>
		</div>
</article>
<article>
	<div>
	<h2 id="rejilla2">Rejilla</h2>
	<p><strong>Activación y configuración:</strong> Barra de estado -> Botón derecho sobre la rejilla -> Configuro el snap en los ejes X e Y.</p>


<p>Por lo general, estableceremos unos de snap iguales a los de la malla.</p>
<img src="img/rejilla.png" alt="rejilla de autocad">

	<h3>Ejercicio rejilla 1</h3>
	<p>Nota: Desactivar rastreo polar, rastreo de referencia a objetos y referencia a objetos</p>
	<img src="img/ejercicio-polar.png" alt="ejercicio coordenadas polares en autocad">
		<?php // getRes('ejemplo','ex/3-rejilla.dwg','Descargar dwg') ?>

	<h3>Ejercicio rejilla 2</h3>
	<p>Desactivar rastreo polar, rastreo de referencia a objetos y referencia a objetos</p>
<img src="img/ejercicio-polar-2.png" alt="ejercicio rejilla en autocad">	

		<?php // getRes('ejemplo','ex/4-rejilla-lampara.dwg','Descargar dwg') ?>
		</div>
</article>
<article>
	<div>
	<h2 id="polar_mode">Polar Mode</h2>
	<img src="img/polar-mode.png" alt="polar mode en autocad">
	<h3>Ejercicio Polar Mode</h3>
	<p>Todo lo que parece simétrico, es simétrico. Todo lo que parece que tiene una inclinacioón de 45º, tiene una inclinación de 45º.</p>
	<img src="img/cotas.png" alt="cotas en autocad" >

			<?php // getRes('ejemplo','ex/5-polar.dwg','Descargar dwg') ?>
			</div>
</article>
<article>
	<div>
	<h2>Ejercicio</h2>
	<img src="img/pajarita.png" alt="ejercicio pajarita en autocad">
				<?php // getRes('ejemplo','ex/6-pajarita.dwg','Descargar dwg') ?>
				</div>
</article>


<article>
	<div>
	<h2 id="coordenadas">Coordenadas</h2>
<p>Para escribir las coordenadas, pulso la coma con la entrada dinámica activada.</p>
	<p>Para forzar coordenadas relativas, a pesar de la configuración por defecto, se precede de @</p>

<p>Para forzar coordenadas absolutas, a pesar de la configuración por defecto, se precede de #</p>

<p>Y para cambiar la configuración por defecto se usa la variable dynpicoords (0=relativas, 1=absolutas)
(o puedes usar el comando dsettings --> dynamic input --> pointer input -->settings y asignar desde ahí la variable)</p>


	<p>Absolutas:				500,500</p>
	<p>Relativas:					@500,0</p>
	<p>Relativas polares:	@500&lt;90</p>

		<h3>Ejercicio coordenadas 1</h3>
		<p>Si al hacer este ejercicio el cursor se me sale de la pantalla y no me da el zoom, podré usar la steering wheel (shift + w)</p>
	<img src="img/cotas-2.png" alt="ejercicio cotas en autocad">

				<?php // getRes('ejemplo','ex/7-coordenadas-absolutas.dwg','Descargar dwg') ?>

	<h3>Ejercicio coordenadas 2</h3>
	<p>Hacer tres cuadrados de lado 500 unidades. El primero lo haremos mediante coordenadas absolutas, el segundo mediante coordenadas relativas y el tercero mediante coordenadas relativas polares.</p>
	<img src="img/cuadrados.png" alt="ejercicio cuadrados en autocad">

					<?php // getRes('ejemplo','ex/8-cuadrado-coordenadas.dwg','Descargar dwg') ?>
					</div>
</article>
<article>
	<div>
	<h2 id="medir">Medir</h2>
	<p>Comando:		dist</p>
	</div>
</article>
<article>
	<div>
	<h2 id="dibujar_circulo">Dibujar un círculo (c)</h2>
	<p>Menú Inicio → Dibujo → Círculo</p>
	</div>
</article>
<article>
	<div>
	<h2 id="panel_propiedades_rapidas">Panel de propiedades rápidas</h2>
<p>Se despliega al hacer doble click sobre la pieza.</p>
	<img src="img/propiedades-rapidas-1.png" alt="propiedades rápidas en autocad">
	<img src="img/propiedades-rapidas-2.png" alt="panel de propiedades rápidas en autocad 2D">
	</div>
</article>
<article>
	<div>
	<h2 id="mover_objeto">Mover un objeto</h2>
	<ol>
		<li>Selecciono un objeto.</li>
		<li>
			<ul>
				<li>Para desplazarlo, vuelvo a pulsar sobre él y lo desplazo (Move shortcut → m).</li>
				<li>Para copiarlo, vuelvo a pulsar sobre él manteniendo ctrl pulsado y lo desplazo.</li>
			</ul>
		</li>
	</ol>


	<p>Si cuando lo estoy moviendo tengo la opción ortho seleccionada, lo desplazaré sólo vertical u horizontalmente.</p>
	<img src="img/mover-objeto.png" alt="mover un objeto en autocad 2D">	
	</div>
</article>

<article>
	<div>
	<h2 id="alargar_acortar">Alargar / Acortar</h2>
	<ol>
		<li>Selecciono la herramienta(menu home, panel modify)</li>
		<li>Selecciono el objeto que delimita hasta donde se alargará/acortará el objeto que quiero deformar. </li>
		<li>Confirmo con enter.</li>
		<li>Selecciono el objeto que quiero alargar, acortar.</li>
		<li>Confirmo con enter.</li>
	</ol>
<img src="img/alargar-acortar.png" alt="alargar y acortar en autocad 2D">	

	<h3>Ejercicio alargar acortar 1</h3>
	<p>Recurriendo sólo a acortamientos y estiramientos, lograr la transformación deseada.</p>
	<img src="img/ejercicio-alargar-acortar.png" alt="ejercicio alargar y acortar en autocad 2D">	

					<?php // getRes('ejemplo','ex/9-escalera.dwg','Descargar dwg') ?>

	<h3>Ejercicio alargar acortar 2</h3>
	<img src="img/ying-yang.png" alt="ejercicio ying yang en autocad 2D">
						<?php // getRes('ejemplo','ex/10-yingyang.dwg','Descargar dwg') ?>
						</div>
</article>
<article>
	<div>
	<h2 id="simetria">Simetría</h2>
	<ol>
		<li>Selecciono la herramienta (Menú Inicio → Modificar → Simetría).</li>
		<li>Selecciono el objeto del que quiero obtener un simétrico.</li>
		<li>Confirmo con enter.</li>
		<li>Selecciono los dos puntos del eje de simetría.</li>
	</ol>

	<h3>Ejercicio simetría</h3>
	<img src="img/ejercicio-simetria.png" alt="ejercicio simetría en autocad 2D">
							<?php // getRes('ejemplo','ex/11-simetria.dwg','Descargar dwg') ?>
							</div>
</article>
<article>
	<div>
	<h2>Comando rg</h2>
	<p>Para regenerar la pantalla.</p>
	</div>
</article>
<article>
	<div>
	<h2 id="circa">Circa a partir de dos tangentes y el radio</h2>
	<img src="img/circa.png" alt="hacer una circunferencia en autocad 2D">

	<h3>Ejercicio tangentes</h3>
	<img src="img/ejercicio-circa.png" alt="ejercicio tangentes en autocad 2D">
								<?php // getRes('ejemplo','ex/12-bascula.dwg','Descargar dwg') ?>
								</div>
</article>
<article>
	<div>
	<h2 id="dibujar_rectangulo">Dibujar un rectángulo</h2>
	<p>Menú Inicio → Dibujo → Rectángulo</p>
	</div>
</article>
<article>
	<div>
	<h2 id="dibujar_elipse">Dibujar una elipse</h2>
	<p>Menú Inicio → Dibujo → Elipse</p>
	<?php // getRes('ejemplo','ex/13-eclipse.dwg','Descargar dwg') ?>
	</div>
</article>
<article>
	<div>
	<h2>Ejercicio</h2>
	<p>Centrar elipse en rectángulo</p>
	<img src="img/centrar-img.png" alt="centrar elipse en rectángulo en autocad 2D">
	</div>
</article>
<article>
	<div>
	<h2 id="rotar_girar">Rotar / Girar un objeto</h2>
	<img src="img/rotar-girar-obj.png" alt="girar, rotar objeto en autocad 2D">
	</div>
</article>
<article>
	<div>
	<h2 id="parametrico">Paramétrico</h2>
	<p>La segunda selección se adecua para cumplir la restricción aplicada a dos objetos.</p>

	<ol>
		<li>Selecciono la herramienta (Menú Paramétrico -> panel gemétrico -> herramienta)</li>
		<li>Selecciono el primer objeto, el que manda.</li>
		<li>Confirmo con enter.</li>
		<li>Selecciono el segundo objeto, el que obedece.</li>
		<li>Confirmo con enter.</li>
	</ol>
	<?php // getRes('ejemplo','ex/14-parametrico.dwg','Descargar dwg') ?>

	<h4 id="paralela">Paralela</h4>
	<img src="img/paralela.png" alt="hacer una paralela en autocad 2D">

	<h4 id="perpendicular">Perpendicular</h4>
	<img src="img/perpendicular.png" alt="hacer una perpendicular en autocad 2D">

	<h4 id="coincidencia">Coincidencia</h4>
	<p>Hace que dos objetos líneas coincidan en un punto concreto de ambas.</p>
	<img src="img/coincidencia.png" alt="hacer dos objetos coincidentes en autocad 2D">

	<h4 id="horizontal_vertical">Horizontal y Vertical</h4>
	<img src="img/horizontal-y-vertical.png" alt="línea horizontal y vertical en autocad 2D">

	<h4 id="concentrico">Concéntrico</h4>
	<img src="img/concentrico.png" alt="formas concéntricas en autocad 2D">	

	<h4 id="colineal">Colineal</h4>
	<img src="img/colineal.png" alt="líneas colineales en autocad 2D">

	<h4 id="igualdad">Igualdad</h4>
	<img src="img/igualdad.png" alt="igualdad en autocad 2D">	

	<h4 id="tangencia">Tangencia</h4>
	<img src="img/tangencia.png" alt="tangentes en autocad 2D">

	<h4 id="simetria">Simetría</h4>
	<img src="img/simetria.png" alt="simetría en autocad 2D">	

	<h4 id="fijar">Fijar</h4>
	<img src="img/fijar.png" alt="fijar objetos en autocad 2D">	

	<h3 id="visualizacionRestricciones">Visualización de Restricciones</h3>
	<p>Paramétrico → Geométricas → Mostrar: <br>
Selecciono los elementos de los que quiero visualizar las restricciones y tras pulsar enter soy capaz de verlas.
	</p>
	<p>Paramétrico → Geométricas → Mostrar todo: <br>
Visualiza todas las restricciones de todos los elementos.
	</p>
	<p>Paramétrico → Geométricas → Ocultar todo: <br>
Oculta todas las restricciones de todos los elementos.
	</p>

	<h3 id="reestricionesAutomaticas">Restricciones automáticas</h3>
	<p>Paramétrico → Geométricas → Restricciones automáticas</p>
	<p>Tras seleccionar un objeto las restricciones sobre el mismo son generadas automáticamente.</p>

	<h3 id="reestriccionesParametricas">Ejercicio reestricciones paramétricas</h3>
	<p>Añadir las reestricciones paramétricas necesarias para que al variar el radio del arco (haciendo doble click sobre él y variando sus propiedades) la figura quede como en la foto de arriba, no como en la de abajo.</p>
	<img src="img/restricciones.png" alt="aplicar reestricciones en autocad 2D">	
	<?php // getRes('ejemplo','ex/15-ejercicio-parametrico.dwg','Descargar dwg') ?>

	<h3 id="reestricciones_dimensionales">Restricciones dimensionales</h3>
	<p>Paramétrico → Dimensionales</p>
	<p>Hacen que aunque la figura cambie, la dimensión restringida permanezca constante.</p>
	<?php // getRes('ejemplo','ex/16-restricciones-dimensionales.dwg','Descargar dwg') ?>

	<h3 id="reestricciones_dimensionales_parametricas">Ejercicio reestricciones dimensionales y paramétricas</h3>
	<ol>
		<li>Dada la siguiente figura, le aplicaremos una restricción dimensional (valor 80). </li>
		<li>Luego aplicaremos restricciones automáticas.
				<ul>
					<li>primero las de coincidencia.</li>
					<li> luego las de verticalidad y horizontalidad (si las hubiese).</li>
					<li>luego las de paralelismo.</li>
					<li>luego las de tangencia.</li>
					<li>luego las de concentricidad.</li>
				</ul>
		</li>
		<li>Comprobamos que al aumentar el valor de esta restricción dimensional, la figura se desbarajusta, y unas líneas se montan por encima de otras. Debemos añadir las restricciones necesarias para que esto no ocurra.</li>
	</ol>
	<p>Nota: La segunda selección se adecua para cumplir la restricción aplicada a dos objetos.</p>
	<img src="img/reestricciones-dimensionales.png" alt="reestricciones dimensionales en autocad 2D">

	<h3>Añadiendo expresiones a restricciones dimensionales</h3>
	<p>Paramétrico → Administrar → Administrador de parámetros → Doble Click en la celda de expresión</p>
	<img src="img/expresiones-en-reestricciones.png" alt="añadir expresiones a reestricciones">

	<h3>Controlar la visualización de las restricciones dimensionales</h3>
	<p>Paramétrico → Por cota → flechita oblicua</p>
	</div>
</article>
<article>
	<div>
	<h2 id="estirar">Estirar</h2>
	<p>Estira los objetos intersecados por una ventana de captura.</p>
	<ol>
		<li>Menú Home -> Panel Modify -> Stretch</li>
		<li>Hago un area de selección sobre el área que quiero estirar.</li>
		<li>Confirmo el area con enter.</li>
		<li>Estiro.</li>
	</ol>
	<img src="img/estirar.png" alt="extirar objetos en autocad 2D">
	</div>
</article>

<article>
	<div>
	<h2 id="ejercicios_curvas_tangentes">Ejercicios curvas tangentes</h2>
	<h3 id="cuchara">Ejercicio cuchara</h3>
	<img src="img/cuchara.png" alt="ejercicio hacer una cuchara en autocad 2D">
	<?php // getRes('ejemplo','ex/17-cuchara.dwg','Descargar dwg') ?>

	<h3 id="curvas">Ejercicio curvas</h3>
	<p>Tendré que utilizar un círculo del tipo tan, tan, radio.</p>
	<img src="img/curvas.png" alt="ejercicio curvas en autocad 2D">
		<?php // getRes('ejemplo','ex/18-curvas.dwg','Descargar dwg') ?>
		</div>
</article>
<article>
	<div>
	<h2 id="dibujar_poligono">Dibujar un polígono (inscrito o circunscrito)</h2>
	<ol>
		<li>Menú Inicio → Dibujo → Despliego -> Polígono</li>
		<li>Introduzco el número de lados.</li>
		<li>Confirmo con enter.</li>
		<li>Hago click en la ubicación del centro del polígono.</li>
		<li>Introduzco si el triángulo es inscrito o circunscrito.</li>
	</ol>

	<h3 id="ejercicio_poligono">Ejercicio Polígono circunscrito</h3>
	<img src="img/ejercicio-poligono.png" alt="hacer un polígono circunscrito con autocad 2D">
			<?php // getRes('ejemplo','ex/19-bolas-hexagono.dwg','Descargar dwg') ?>
			</div>
</article>
<article>
	<div>
	<h2 id="arandela">Arandela</h2>
	<ol>
		<li>Menú Inicio → Dibujo → Despliego -> Arandela</li>
		<li>Introduzco el diámetro interno de la arandela.</li>
		<li>Introduzc el diámetro externo de la arandela.</li>
		<li>Hago click sobre la ubicación del centro de la arandela.</li>
	</ol>
	</div>
</article>
<article>
	<div>
	<h2 id="splines">Splines</h2>
	<p>Son curvas</p>
	<ol>
		<li>Menú Inicio → Dibujo → Despliego -> Splines</li>
		<li>Hago click sobre el punto inicial de la curva</li>
		<li>Hago click sobre el siguiente punto de la curva</li>
		<li>Moviendo el cursor, puedo variar la curvatura del spline</li>
	</ol>
	</div>
</article>
<article>
	<div>
	<h2 id="rayo">Rayo</h2>
	<p>Es una línea infinita con un punto de origen.</p>
		<ol>
		<li>Menú Inicio → Dibujo → Despliego -> Rayo</li>
		<li>Hago click sobre el punto inicial del rayo</li>
		<li>Hago click para definir la dirección del rayo.</li>
	</ol>
	<p>Menú Inicio → Dibujo → Rayo</p>
	</div>
</article>
<article>
	<div>
	<h2 id="punto">Punto</h2>
	<p>Menú Inicio → Dibujo → Punto</p>
	<p>Para cambiar el aspecto y tamaño del punto, tenemos dos opciones:</p>
	<ul>
		<li>Ejecutar el comando DDPTYPE</li>
		<li>Abrir el workspace menú clásico → Menú 		Formato → Tipo de punto</li>
	</ul>
	</div>
</article>
<article>
	<div>
	<h2 id="dividir">Dividir</h2>

	<p>Permite dividir una entidad en segmentos iguales. No parte el objeto, pero sitúa puntos a lo largo de su trazado.</p>

			<ol>
		<li>Menú Inicio → Dibujo → Despliego -> En el menú punto está la opción de dividir</li>
		<li>Selecciono la línea que quiero dividir.</li>
		<li>Introduzco el número de puntos divisorios que quiero crear-</li>
		</ol>aaaaaaaaaaaa
	<img src="img/dividir.png" alt="dividir un segmento con autocad 2D">
	</div>
</article>
<article>
	<div>
	<h2 id="descomponer">Descomponer</h2>
		<p>Se utiliza para descomponer bloques</p>

	<ol>
		<li>Menú Inicio → Modificar → Descomponer (explode)</li>
		<li>Selecciono el objeto que quiero descomponer (por ejemplo, un rectángulo)</li>
		<li>Confirmo pulsando enter.</li>
	</ol>
	</div>
</article>
<article>
	<div>
	<h2>Ejercicio</h2>
	<p>Dibujar un rectángulo con la herramienta rectángulo y usando la herramienta dividir, dividirlo en tres partes.</p>
	<img src="img/dividir-rectangulo.png" alt="dividir un rectángulo con autocad 2D">	
				<?php // getRes('ejemplo','ex/20-dividir.dwg','Descargar dwg') ?>
				</div>
</article>
<article>
	<div>
	<h2 id="graduar">Graduar</h2>
	<p>Es igual que el anterior, pero en este caso indicamos la distancia en vez del número de segmentos.</p>

	<ol>
		<li>Menú Inicio → Dibujar → Despliego → Graduar (measure)</li>
		<li>Selecciono el objeto que quiero graduar.</li>
		<li>Introduzco la longitud de la graduación.</li>
	</ol>
	</div>
</article>
<article>
	<div>
	<h2 id="dibujar_mano_alzada">Dibujar a mano alzada</h2>
	<p>Escribimos "boceto" (sketch) en la línea de comandos.</p>
	</div>
</article>
<article>
	<div>
	<h2 id="sombreado">Sombreado</h2>
	<ol>
		<li>Menú Dibujo → Hatch</li>
		<li>Selecciono el elemento al que quiero añadir sombreado.</li>
	</ol>
	<img src="img/sombreado.png" alt="aplicar sombreados en autocad 2D">	
	<p>Para modificar un sombreado ya aplicado, basta con hacer doble click sobre él.</p>
	</div>
</article>
<article>
	<div>
	<h2>Ejercicio stop</h2>
	<img src="img/stop.png" alt="hacer señal de stop con autocad 2D">
						<?php // getRes('ejemplo','ex/21-stop.dwg','Descargar dwg') ?>

<h3>Ejercicio</h3>
	<img src="img/ejercicio-2.png" alt="hacer el logo de Toyota con autocad 2D">
						<?php // getRes('ejemplo','ex/22-logo-mitsubishi.dwg','Descargar dwg') ?>

	<h3>Ejercicio</h3>
	<img src="img/ejercicio-3.png" alt="ejercicio pentagonos con autocad 2D">
						<?php // getRes('ejemplo','ex/23-pentagonos.dwg','Descargar dwg') ?>

	</div></article>

	<article><div>
	<h2 id="desfase">Desfase (offset)</h2>
	<ol>
		<li>Menú Dibujo → Modify → Offset</li>
		<li>Introduzco la cantidad de desfase.</li>
		<li>Selecciono el objeto sobre el que quiero aplicar el desfase.</li>
	</ol>
	<img style="width:45%; vertical-align:top" src="img/desfase-1.png" alt="desfase en autocad 2D">
	<img style="width:45%; vertical-align:top" src="img/desfase-2.png" alt="desfase en autocad 2D">

	<h3>Ejercicio desfase 1</h3>
	<img src="img/ejercicio-desfase.png" alt="aplicar un desfase con autocad 2D">
						<?php // getRes('ejemplo','ex/24-cara-desfasada.dwg','Descargar dwg') ?>

	<h3>Ejercicio desfase 2</h3>
	<img src="img/ejercicio-desfase-2.png" alt="ejercicio, como aplicar un desfase con autocad 2D">
							<?php // getRes('ejemplo','ex/25-triangulo-offset.dwg','Descargar dwg') ?>
							</div>
</article>
<article>
	<div>
	<h2 id="filetear_empalmar">Filetear o empalmar</h2>
		<ol>
		<li>Menú Dibujo → Modify → Filete</li>
		<li>Introduzco la opción: Radius</li>
		<li>Confirmo con enter.</li>
		<li>Selecciono los dos lados del filete.</li>
	</ol>
	<img src="img/filetear-1.png" alt="filetear on autocad 2D">
	<img src="img/filetear-2.png" alt="empalmar con autocad 2D">
	</div>
</article>
<article>
	<div>
	<h2 id="achaflanar">Achaflanar</h2>
			<ol>
		<li>Menú Dibujo → Modify → Chamfer</li>
		<li>Introduzco la opción: distance (d)</li>
		<li>Introduzco la primera distancia del chaflán.</li>
		<li>Introduzco la segunda distancia del chaflán.</li>
		<li>Selecciono los dos lados del filete.</li>
	</ol>
	<img src="img/achaflanar-1.png" alt="achaflanar con autocad 2D">	
	<img src="img/achaflanar-2.png" alt="cómo achaflanar con autocad 2D">
	</div>
</article>
<article>
	<div>
<h2 id="ejercicios">Ejercicios</h2>
	<h3 id="percha">Ejercicio Percha</h3>
	<img src="img/percha.png" alt="ejercicio, hacer una percha con autocad 2D">
							<?php // getRes('ejemplo','ex/26-percha.dwg','Descargar dwg') ?>

	<h3 id="grifo">Ejercicio Grifo</h3>
	<img src="img/grifo.png" alt="ejercicio, hacer un grifo con autocad 2D">
							<?php // getRes('ejemplo','ex/27-grifo.dwg','Descargar dwg') ?>

	<h3 id="gancho">Ejercicio Gancho</h3>
	<img src="img/ejercicio-gancho.png" alt="ejercicio, hacer un gancho con autocad 2D">
							<?php // getRes('ejemplo','ex/28-gancho.dwg','Descargar dwg') ?>

	<h3 id="senal">Ejercicio Señal</h3>
	<img src="img/ejercicio-senal.png" alt="ejercicio, hacer una señal con autocad 2D">	
							<?php // getRes('ejemplo','ex/29-senal-hombres.dwg','Descargar dwg') ?>

	<h3>Desfase</h3>
	<p>Con líneas desfasadas podemos calcular el centro de una circunferencia que sea tangente a una curva, tenga un radio determinado y pase por un punto.</p>
	<ol>
		<li>Hacemos un círculo con el radio indicado y centro en el punto por dónde queremos que pase la circa final. El el gráfico, el punto marcado con una x.</li>
		<li>Aplicamos un desfase con el radio indicado a la circa con la que queremos que la circa final sea tangente.</li>
		<li>Obtendremos dos puntos de corte. Son los centros de la posible solución.</li>
	</ol>
	<img src="img/desfase.png" alt="aplicar un desfase con autocad 2D">
	</div>
</article>
<article>
	<div>
	<h2 id="mango">Ejercicio Mango</h2> 
	<img src="img/ejercicio-mango.png" alt="hacer unn mango con autocad 2D">
							<?php // getRes('ejemplo','ex/30-mango-batidora.dwg','Descargar dwg') ?>
							</div>
</article>
<article>
	<div>
<h2 id="recta_tangente_a_dos_circas">Recta tangente a dos circas</h2>
<ol>
	<li>Selecciono la herramienta línea</li>
	<li>Introduzco el comando tan</li>
	<li>Pulso sobre el contorno de una de las dos circas</li>
	<li>Introduzco el comando tan</li>
	<li>Pulso sobre el contorno de la otra circa</li>
</ol>
	<h2>Obtener recta tangente de cierta inclinación</h2>

	<ol>
		<li>Hago pasar una recta "a" paralela a la recta dada por el centro de la circunferencia.</li>
		<li>Trazo una recta "b" perpendicular a la recta "a" y que pase por el centro de la circa. </li>
		<li>El resultado del problema es una recta que con la inclinación de la recta dada y que pasa por el punto de intersección de la recta b con la circa. </li>
	</ol>
	<img src="img/recta-tangente-1.png" alt="hacer una recta tangente con autocad 2D">
	<img src="img/recta-tangente-2.png" alt="hacer una recta tangente usando autocad 2D">
	</div>
</article>
<article>
	<div>
	<h2>Ejercicio</h2>
	<img src="img/chisme.png" alt="hacer una figura con autocad 2D">
			<?php // getRes('ejemplo','ex/31-pieza.dwg','Descargar dwg') ?>
			</div>
</article>
<article>
	<div>
	<h2 id="matriz_rectangular_polar">Matriz rectangular y polar</h2>
		<ol>
		<li>Menú Dibujo → Modify → Array</li>
		<li>Configuro la matriz (y selecciono si quiero una matriz rectangular o polar) y pulso en el botón select objects.</li>
		<li>Confirmo.</li>
	</ol>
	<img style="width:45%; display:inline.block" src="img/matriz-rectangular.png" alt="matriz rectangular con autocad 2D">

	<img style="width:45%; display:inline.block" src="img/matriz-polar.png" alt="matriz polar con autocad 2D">
	</div>
</article>
<article>

<div>
	<h2 id="herramienta_alinear">Herramienta alinear</h2>
	<ol>
		<li>Menú Dibujo → Modify → Despliego → Alinear</li>
		<li>Selecciono un punto de origen de referencia.</li>
		<li>Selecciono un punto de destino.</li>
		<li>Selecciono un punto de origen de referencia.</li>
		<li>Selecciono un punto de destino.</li>
		<li>Decido si quiero escalar.</li>
	</ol>
	<img src="img/alinear-1.png" alt="alinear objetos con autocad 2D">
	<img src="img/alinear-2.png" alt="alinear objetos usando autocad 2D">
	<img src="img/alinear-3.png" alt="alinear formas usando autocad 2D">
	</div>
</article>
<article>
	<div>
<h2>Ejercicios</h2>
	<h3>Ejercicio</h3>
	<img src="img/ejercicio-formas.png" alt="ejercicio formas con autocad 2D">
				<?php // getRes('ejemplo','ex/32-matriz-polar.dwg','Descargar dwg') ?>

	<h3>Ejercicio</h3>
	<img src="img/ejercicio-formas-2.png" alt="hacer una hélice con autocad 2D">	
				<?php // getRes('ejemplo','ex/33-helice.dwg','Descargar dwg') ?>

	<h3>Ejercicio</h3>
	<img src="img/senal-nieve.png" alt="hacer una señal de tráfico con autocad 2D">
				<?php // getRes('ejemplo','ex/34-senal-nieve.dwg','Descargar dwg') ?>

	<h3>Escalado</h3>
	<p>Menú Inicio → Modificar → Escala</p>
	</div>
</article>
<article>
	<div>
	<h2>Ejercicio Escalado</h2>
	<p>Abrir el archivo <a target="_blank" href="ex/35-escalado.dwg">35_escalado.dwg</a>. Dibujar un cuadrado de 0.5 unidades de lado (0.5 m). Escalar el dibujo de la consola que tenga un ancho de 12cm y por tanto sus dimensiones sean las correctas con respecto de la mesa. Escalar de 10 en 10.</p>
	<p>Realizar el escalado aumentando 4 veces y reduciendo 3 y por referencia.</p>
	<img src="img/gameboy.png" alt="escalar una gameboy con autocad 2D">

					<?php // getRes('ejemplo','ex/35-escalado.dwg','Descargar dwg') ?>
					</div>
</article>
<article>
	<div>
	<h2 id="recorte_multiple">Recorte múltiple</h2>
	<ol>
		<li>Menú Dibujo → Modify → Despliego → Break</li>
		<li>Selecciono el objeto que quiero romper.</li>
		<li>Pulso la f para introducir y confirmo (first point de rotura)</li>
		<li>Selecciono el primer punto de rotura.</li>
		<li>Selecciono el segundo punto de rotura.</li>
	</ol>

	<img src="img/recorte-multiple.png" alt="recorte múltiple en autocad 2D">	

	<h3 id="puerta">Ejercicio Puerta</h3>

	<img src="img/puerta.png" alt="hacer una puerta en autocad 2D">
					<?php // getRes('ejemplo','ex/36-puerta.dwg','Descargar dwg') ?>

	<h3 id="aros_olimpicos">Ejercicio – aros olímipicos</h3>

	<img src="img/aros-olimpicos.png" alt="aros olímpicos en autocad 2D">
						<?php // getRes('ejemplo','ex/37-aros-olimpicos.dwg','Descargar dwg') ?>
						</div>
</article>
<article>
	<div>
	<h2 id="crear_polilinea">Crear una polilínea</h2>
	<p>Una polilínea es un conjunto de líneas en las que todas ellas formas una sola entidad.</p>
	<p>Un polígono, un cículo, etc, son polilíneas.</p>
	<img src="img/polilinea.png" alt="hacer una polilinea en autocad 2D">
	
	<h3 id="linea_a_polilinea">Convertir líneas en polilínea</h3>
	<img src="img/polilinea-3.png" alt="convertir líneas a polilínea con autocad 2D">	
	<p>Para crear una polilínea a partir de líneas simples cada línea debe comenzar donde termina la interior (no sirve una línea que corte a otra en un punto intermedio).</p>

	<ol>
		<li>Comando "pedit" o "editpol"</li>
		<li>Selecciono una línea.</li>
		<li>Se me indica que no es una polilínea y se me pregunta si quiero convertirla en una → Confirmo</li>
		<li>Hago un Join (j) con el resto de las líneas de la geometría</li>
		<li>Close</li>
	</ol>

	<h3 id="ejercicio_polilineas">Ejercicio Polilíneas</h3>
	<p>Convertir los cuadros de la puerta en polilínea y aplicar desfase</p>
	<img src="img/puerta-2.png" alt="hacer una puerta con polilíneas en autocad 2D">
	</div>
</article>
<article>
	<div>
	<h2 id="uso_matriz_rectangular">Uso de la matriz rectangular</h2>
	<p>2 filas, 4 columnas <br>
Desplazamiento entre filas:	20 <br>
Desplazamiento entre columnas: 10
</p>
<img src="img/matriz-rectangular-2.png" alt="matriz rectangular en autocad">
<img src="img/matriz-rectangular-3.png" alt="hacer una matriz rectangular en autocad 2D">

	<h3 id="ejercicio_matriz_rectangular">Ejercicio</h3>
	<img src="img/curva-2.png" alt="hacer una curva con autocad 2D">
	<p>Continuación</p>
	<img src="img/curva-3.png" alt="amplicación del ejercicio de la curva en autcocad 2D">
	<p>Continuación</p>
	<img src="img/curva-4.png" alt="segunda amplicación del ejercicio de la curva en autocad 2D">
						<?php // getRes('ejemplo','ex/38-gran-logo.dwg','Descargar dwg') ?>
						</div>
</article>
<article>
	<div>
	<h2 id="capas">Capas</h2>
	<img src="img/capas.png" alt="capas en autocad 2D">
	<p>Es posible hacer que un elemento dentro de una capa tenga diferentes propiedades a las de la capa a la que pertenece. Sin embargo, esto no es recomendable.</p>
	<img src="img/capas-2.png" alt="gestión de capas en autocad 2D">
	<h3 id="igualar_propiedades">Igualar propiedades</h3>
	<p>Menú Inicio → Panel Portapeles → Herramienta igualar propiedades</p>
	<p>Comando: igualarprop  </p>
	<h3 id="eliminar_limpiar_capas">Eliminar/Limpiar capas de un plano</h3>
	<p>Eliminar: comando laydel</p>
	<p>Limpiar: comando purge, limpia o li</p>
<h3>Ejercicio</h3>
<p>Abrir el archivo 						<?php // getRes('ejemplo','ex/39-gamebody1.dwg','39-gamebody1.dwg') ?>
 y obtener el siguiente resultado:</p>
<img src="img/gameboy.png" alt="gameboy con autocad 2D">
<img src="img/gameboy-2.png" alt="modificar gameboy con autodcad2D">
<p>Para que las variaciones de grosor sean visibles en la vista modelo:</p>

<p>Comando:		lwdisplay <br>
Valor:				on</p>
<p>Cuando trate de eliminar una capa y no sea capaz porque el programa arroje uno de los siguientes errores:</p>
<img src="img/borrar-capa.png" alt="borrar una capa con autocad 2D">
<p>Utilizaré, desde una capa que no sea la que deseo borrar, el comando laydel.</p>
<?php // getRes('ejemplo','ex/39-gamebody1.dwg','Descargar ejercicio resuelto') ?>
</div>
</article>
<article>
	<div>
	<h2 id="texto">Texto</h2>
	<h3 id="introducir_texto_una_sola_linea">Introducir texto de una sola línea</h3>
	<p>Menú Inicio → Anotación → Una línea</p>
	<p>Desde la línea de comandos me pide la altura, ángulo de rotación, etc.</p>

	<h3 id="crear_estilos_texto">Crear estilos de texto</h3>
	<img src="img/crear-estilos.png" alt="crear estilos con autocad 2D">

	<h3 id="texto_multilinea">Texto multilínea</h3>
	<img src="img/texto-multilinea-1.png" alt="texto multilinea con autocad 2D">
	<img src="img/texto-multilinea-2.png" alt="gestionar texto multilinea con autocad 2D">

	<h3 id="justificar">Justificar</h3>
	<img src="img/justificar.png" alt="justificar texto con autocad 2D">

	<h3 id="insertar_simbolo">Insertar un símbolo</h3>
	<img src="img/insertar-simbolo.png" alt="insertar símbolo con autocad 2D">

	<h3 id="corrector_ortografico">Corrector ortográfico</h3>
	<img src="img/corrector-ortografico.png" alt="corrector ortográfico con autocad 2D">
	</div>
</article>
<article>
	<div>
	<h2>Ejercicio</h2>
	<p>Dibujar primero la señal y luego añadir el texto.</p>
	<p>La señal y el texto que la misma contiene deberían estar en diferentes capas.</p>
	<img src="img/50.png" alt="ejercicio señal con autocad">
	<?php // getRes('ejemplo','ex/40-50km.dwg','Descarga dwg') ?>
	</div>
</article>
<article>
	<div>
	<h2 id="dimensionamiento_acotacion">Dimensionamiento o acotación</h2>
	<p>Lo haremos en una capa concreta.</p>
	<img src="img/dimensionamiento.png" alt="acotar con autocad 2D">

	<h3 id="partes_cota">Partes de una cota</h3>
	<img src="img/partes-cota.png" alt="partes de una cota con autocad 2D">
	<p>Una cota sólo se indicará una sola vez en un dibujo, salvo que sea indispensable repetirla.</p>
	<img src="img/cotas-3.png" alt="cotas con autocad 2D">
	<p>No debe omitirse ninguna cota</p>
	<img src="img/cotas-4.png" alt="no deben omitirse cotas">
	<p>No se acotarán líneas ocultas, salvo que con ello se eviten vistas adicionales, o se
aclare sensiblemente el dibujo. Esto siempre puede evitarse utilizando secciones.
</p>
<img src="img/cotas-ocultas.png" alt="cotas ocultas">
<p>Las cotas se situarán por el exterior de la pieza. Se admitirá el situarlas en el interior, siempre que no se pierda claridad en el dibujo.
</p>
<img src="img/ubicacion-cotas.png" alt="ubicación de las cotas">
<p>Debe evitarse, la necesidad de obtener cotas por suma o diferencia de otras, ya que puede implicar errores en la fabricación.
</p>
<img src="img/cotas-x-diferencia.png" alt="cotas por diferencia">
<p>Salvo que sea imprescindible, las líneas de cota y auxiliares no deben cruzarse</p>
<img src="img/no-deben-cruzarse.png" alt="las cotas no deben cruzarse">

	<h3 id="rayado_secciones">Rayado de secciones</h3>
	<p>Se hace con líneas continua finas, inclinadas 45º respecto de las aristas del cuerpo.
</p>
<img src="img/rayado.png" alt="rayado en autocad 2D">

	<h3 id="simbolos">Símbolos</h3>
	<img src="img/simbolos.png" alt="simbolos en autocad 2D">	

	<h3 id="acotacion_diametro">Acotación del diámetro</h3>
	<p>Se emplea para acotar una superficie circular cuando en una vista no aparece como tal.</p>
	<img src="img/acotacion-diametro.png" alt="acotación de diámetro">
	<h3 id="linea_aux_cota">Línea auxiliar de cota</h3>
	<img src="img/linea-aux-cota.png" alt="línea auxiliar de cota">	
	<?php // getRes('ejemplo','ex/41-teoria-acotacion.dwg','Descargar ejemplos acotación') ?>

	<h3 id="linea_cota">Línea de cota</h3>
	<img src="img/linea-cota.png" alt="línea auxiliar de cota">
	<h3 id="lineas_cota">Líneas de cota</h3>
	<img src="img/lineas-cota.png" alt="líneas de cota">
	<h3 id="extremo_cota">Extremo de cota</h3>
	<img src="img/extremo-cota.png" alt="extremo de cota">
	<h3 id="cifras_cota">Cifras de cota</h3>
	<p>Tipografía UNE 1034</p>
	<img src="img/cifras-cota.png" alt="cifras de cota">
	<h3 id="simbologia">Simbología</h3>
	<img src="img/simbologia-1.png" alt="simbología de cotas">
	<img src="img/simbologia-2.png" alt="simbologías de cotas">
	<img src="img/simbologia-3.png" alt="simbologías de cotas">
	<img src="img/simbologia-4.png" alt="simbologías de cotas">
	<img src="img/simbologia-5.png" alt="simbologías de cotas">
	<img src="img/simbologia-6.png" alt="simbologías de cotas">
	<h3 id="estilo_cotas">Estilo de las cotas</h3>

<ol>
	<li>Menú home -> Panel annotation -> Lo despliego</li>
	<li>Selecciono el botón de un pincel con una cota</li>
	<li>Comienzo la edición</li>
</ol>
    Selecciono la herramienta(menu home, panel modify)
    Selecciono el objeto que delimita hasta donde se alargará/acortará el objeto que quiero deformar.
    Confirmo con enter.
    Selecciono el objeto que quiero alargar, acortar.
    Confirmo con enter.


	<img src="img/estilos-cotas.png" alt="estilos autocad">
	</div>
</article>
<article>
	<div>
	<h2 id="capa_defpoints">Capa defpoints</h2>
	<p>Es una capa auxiliar que contiene puntos de control para hacer cotas asociativas.</p>
	<p>Se crea automáticamente al introducir cotas.</p>
	<p>No es posible imprimir su contenido.</p>
	</div>
</article>
<article>
	<div>
	<h2 id="ejercicios_acotacion">Ejercicios acotación</h2>
	<h3>Ejercicio 1</h3>
	<p>Configuración para las líneas de cota desde el panel de propiedades, pestaña de Líneas y flechas:</p>
	<p>La línea 1 es el que dibujé primero al hacer la cota y la línea 2 el que dibujé despues.</p>
	<p>Flecha 2: Ninguno. <br>
Línea de extensión 2: Des. <br>
Línea de cota 1, Línea de cota 2: Act. <br>
</p>
<img src="img/ejercicio-cotas.png" alt="ejercicio cotas con autocad">
	<?php // getRes('ejemplo','ex/42-destornillador.dwg','Descargar ejemplos acotación') ?>

	<h3>Ejercicio 2</h3>
	<p>A continuación se muestra una colección de ejercicios de piezas que deben ser acotadas.</p>
	<p>Primero aparece una diapositiva con las piezas 3D y luego otra con las piezas en 2D. Consiste en redibujar la pieza añadiendole las cotas. Los que se encuentren más cómodos dibujarán las vistas a partir de las vistas 3D. Si no es el caso, las vistas serán dibujadas a partir de los planos 2D.</p>
	<p>Luego, la pieza dibujada será cedida a un compañero que tratará de rehacerla utilizando las cotas que le indique su compañero.</p>

	<style>
	.raton + input{
		display: none
	}
	.raton{
		cursor: pointer;
	}
		.oro:checked + div{
			display: block;
		}
		.oro:not(:checked) + div{
			display: none;

		}
	</style>
	<label class="raton" for="piezas1">
	<img src="img/vistas-3.png" alt="ejercicio vistas isométicas">
	<img src="img/vistas-4.png" alt="vistas isométricas en autocad">
	</label><input id="piezas1" type="checkbox" class="oro">
	<div>
	<img src="img/soluciones-vistas.png" alt="soluciones a los ejercicios de vistas en autocad">
</div>

	<label class="raton" for="piezas2">

	<img src="img/vistas-5.png" alt="ejercicio de vistas en autocad 2D">
	<img src="img/vistas-6.png" alt="vistas en autocad 2D">
		</label><input id="piezas2" type="checkbox" class="oro">
	<div>

	<img src="img/solucion-vistas-5.png" alt="ejemplo vistas en autocad 2D">
	<img src="img/solucion-vistas-6.png" alt="ejercicio de vistas en autocad 2D">
</div>	
	<?php // getRes('ejemplo','ex/43-acotar1.dwg','Descargar dwg\'s') ?>

<h3>Otras vistas sin la parte 3D</h3>
	<img src="img/vistas-7.png" alt="más ejercicios de vistas en autocad 2D sin la parte 3D">
	<img src="img/vistas-8.png" alt="ejercicios de vistas en autocad 2D sin la parte 3D">	
	<?php // getRes('ejemplo','ex/43-acotar1.dwg','Descargar dwg\'s') ?>

	<h3>Otras piezas sin la parte 2D</h3>
	<img src="img/sacar-vistas-1.png" alt="ejemplos de vistas 2D">
	<img src="img/sacar-vistas-2.png" alt="más ejemplos de vistas 2D">
		<?php // getRes('ejemplo','ex/43-acotar1.dwg','Descargar dwg\'s') ?>
		</div>
</article>
<article>
	<div>
	<h2 id="bloques">Bloques – crear un bloque</h2>
	<ol>
		<li>Menú home → block → Create</li>
	</ol>

	<img src="img/bloques.png" alt="bloques en autocad 2D">
	<img src="img/bloques-2.png" alt="teoría de bloques en autocad 2D">
	<p>Al insertar un bloque insertamos todas sus capas.</p>
	<p>Al arrastrar un bloque desde el explorador de windows, este es insertado con ruta absoluta</p>
	<img src="img/bloques-3.png" alt="uso de bloques en autocad 2D">
	<h3 id="exportar_bloque">Exportar un bloque</h3>
	<p>Ctrl + 2 <br>
Menú Vista → Panel Paletas → Design Center</p>
<p>Botón derecho sobre una carpeta → Establecer como inicio → Al pulsar sobre el botón de inicio regresaré a la carpeta seleccionada.</p>
<h3 id="editar_bloque">Editar un bloque</h3>
<p>Hacemos doble click sobre él.</p>
<h3 id="cambiar_punto_base">Cambiar el punto base de inserción de un bloque</h3>
<p>Entro en el modo edición del bloque → Editor de bloques → Punto base</p>
<p>El punto base de inserción del bloque será el punto 0,0 de dicho bloque.</p>
<h3 id="salvar_bloque">Salvar una copia del bloque con un nombre nuevo</h3>
<p>Edito el bloque → Menú Editor de bloques → Panel Abrir/Guardar → Guardar bloque como</p>
<h3 id="crear_libreria">Crear una librería de bloques</h3>
<p>Una librería de bloques es un fichero .dwg que contiene bloques que podré insertar usando el design center (ctrl + 2).</p>
<h3 id="eliminar_bloque">Eliminar un bloque de la lista de disponibles</h3>
<p>Borro todas las instancias del bloque que quiero eliminar y ejecuto el comando limpia (purge).</p>
<h3 id="redefinir_bloque_insertado">Redefinir un bloque ya insertado</h3>
<p>Teniendo activo el dwg cuyos bloques quiero modificar → Design Center → </p>
<p>Botón derecho sobre el bloque del dwg que contiene los cambios (tengo que haber salvado el dwg)→ </p>
<p>Sólo redefinir </p>

	<h3 id="superposicion_elementos">Superposición de elementos
(necesario para el ejercicio siguiente)</h3>
<img src="img/superposicion-bloques.png" alt="superposición de bloques en autocad 2D">
<p>Menú Inicio → Panel Modificar → Herramienta desplegable de posicionamiento</p>

	<h3>Ejercicio - Crear un bloque que será un cubo en 2d y obtener el resultado siguiente.</h3>
	<img src="img/ejercicio-bloques.png" alt="ejercicio de bloques en autocad 2D">

	<h3>Ejercicio bloques 2</h3>
		<?php // getRes('ejemplo','ex/45-simbolos-autocad.dwg','Descargar dwg con iconos') ?>

	<p>Crear un bloque para cada símbolo diferente  y acoplarlos en los respectivos circuitos.</p>
	<img src="img/ejercicio-bloques-2.png" alt="ejercicio de bloques en autocad 2D">
		<?php // getRes('ejemplo','ex/45-simbolos-resuelto.dwg','Descargar dwg ejercicio') ?>

	<h3>Ejercicio</h3>
	<p>Insertando bloques pertenecientes a esta página: <br>

http://www.bloquesautocad.com/ <br>

Obtener el siguiente resultado:

</p>
<img src="img/ejercicio-bloques-3.png" alt="ejercicio de bloques en autocad 2D">
		<?php // getRes('ejemplo','ex/46-casa-bloques-2d.dwg','Descargar dwg ejercicio') ?>

<h3 id="atributos">Atributos</h3>
<p>Un Atributo es texto que puede ser unido a un bloque para comunicar más información de la que transmite la geometría del bloque por sí misma.</p>
<img src="img/atributos-bloques-1.png" alt="atributos de bloques en autocad 2D">
<img src="img/atributos-bloques-2.png" alt="atributos de bloques en autocad 2D">
<div class="row">
		<?php // getRes('ejemplo','ex/47-atributos-planteado.dwg','Descargar dwg ejercicio') ?>
		<?php // getRes('ejemplo','ex/47-atributos-resuelto.dwg','Descargar dwg ejercicio') ?>
</div>
<p>Las imágenes anteriores representan un sofá. Los atributos describen el nombre del fabricante, el número de modelo, color y costo. </p>
<h3 id="definir_atributo">Definir un atributo</h3>
<ol>
	<li>Creamos un bloque.</li>
	<li>Menú Insertar → Panel atributos → Definir Atributos.</li>
	<li><p><span class="black bold">Identificador</span> : Nombre del atributo.		→ CPU <br>
	<span class="black bold">Solicitud</span>: Mensaje para ayudar al usuario a introducir la información.
										→ ¿Cuál es la velocidad de la CPU? <br>
										<span class="black bold">Por defecto</span>: valor por defecto. 			→ XXGHz.
		
	</p></li>
	<li>Seleccionamos un punto de inserción.</li>
	<li>Añadimos tres atributos más marcando la check "Alinear por debajo de la definición de atributos anterior".</li>
</ol>
<table>
	<tr>
		<th>TAG</th>
		<th>PROMPT</th>
		<th>VALUE</th>
	</tr>
	<tr>
		<td>MONITOR</td>
		<td>¿Cuál es el TAMAÑO DEL MONITOR?</td>
		<td>XX''</td>
	</tr>
	<tr>
		<td>HDD</td>
		<td>¿Qué capacidad tiene el Disco Duro?</td>
		<td>X.XX GB</td>
	</tr>
	<tr>
		<td>RAM</td>
		<td>¿Cuánta RAM tiene instalada?</td>
		<td>XXXMB</td>
	</tr>
</table>
<h3 id="insertar_bloque_con_atributos">Insertar un bloque con atributos</h3>
<p>Cuando insertemos el bloque nos pedirá en la línea de comando los valores para el atributo creado.</p>

<p>&#x00bf;Cu&aacute;l es la Velocidad del CPU? &lt;XXX GHz&gt;: <span class="blue">2.6 GHz</span> <span class="red">&lt;ENTER&gt;</span> <br>
&#x00bf;Cu&aacute;l es el TAMA&Ntilde;O DEL MONITOR? &lt;XX&quot;&gt;: 21&quot; <span class="red">&lt;ENTER&gt;</span> <br>
&#x00bf;Qu&eacute; capacidad tiene el Disco Duro? &lt;XXX Gb&gt;: 200Gb <span class="red">&lt;ENTER&gt;</span> <br>
&#x00bf;Cu&aacute;nta RAM tiene instalada &lt;XXX Mb&gt;: <span class="blue">1024Mb</span> <span class="red">&lt;ENTER&gt;</span> <br>
&#x00bf;Qu&eacute; estaci&oacute;n es esta? &lt;XXX&gt;: <span class="blue">104</span> <span class="red">&lt;ENTER&gt;</span>
</p>

	<h3>Modificar un atributo</h3>
	<p>Hacemos doble click sobre él.</p>
	<p>Para ocultar los atributos (opción útil para imprimir, por ejemplo): <br>
Menú → Insertar → Atributos → icono desplegable.
	</p>

	<h3>Ejercicio</h3>
	<p>Abrir el archivo atributosPlanteado.dwg y obtener el siguiente resultado utilizando atributos para mostrar la información.</p>
	<img src="img/ordenadores.png" alt="ejercicio ordenadores con autocad 2D">	
	</div>
</article>
<article>
	<div>
	<h2 id="perspectivas">Perspectivas</h2>
	<img src="img/perspectivas.png" alt="perspectivas en autocad 2D">
	<h3 id="conica">Perspectiva Cónica. Se divide en:</h3>
	<h4>Perspectiva frontal:</h4>
	<img src="img/perspectiva-frontal.png" alt="perspectiva frontal en autocad 2D">
	<h3 id="oblicua">Perspectiva Oblicua</h3>
	
	<h4>De dos puntos de fuga</h4>
<img src="img/oblicua-dos-puntos.png" alt="dos puntos de fuga">


	<h4>De tres puntos de fuga.</h4>
		<img src="img/oblicua-tres-puntos-fuga.png" alt="tres puntos de fuga">

		<h3 id="conica2">Perspectiva cónica vs axonométrica
Diferencias:</h3>
<p>En perspectiva axonométrica:</p>
<ul>
	<li>Dos lineas paralelas en la realidad son también paralelas en su representación axonométrica. </li>
	<li>La escala del objeto representado no depende de su distancia al observador (en la perspectiva cónica la escala varía en el propio dibujo).</li>
</ul>
<h3 id="isometrica">Perspectiva 
isométrica(todos los ángulos y coeficinetes iguales),
dimétrica (dos ángulos y coeficientes distintos),
trimétrica (tres ángulos y coeficinetes distintos)</h3>
<img src="img/varias-perspectivas.png" alt="varias perspectivas en autocad 2D">
<h3>Isométrica</h3>
<p>Los tres ejes ortogonales principales forman entre sí un ángulo de 120º y sus dimensiones guardan la misma escala sobre cada uno de ellos.</p>
<p>Equivale a mirar una habitación cúbica desde un vértice superior hacia el opuesto.</p>
<p>Los objetos no varían su tamaño en función de la lejanía. Esto tiene ventajas en aplicaciones arquitectónicas, aunque puede dar lugar a situaciones en las que la profundidad y la altura son imposibles de medir.</p>
<img src="img/isometrica.png" alt="perspectiva isométrica">
<h3>Resolución isométrica</h3>
<p>El cursor se adapta a planos de dibujo isométricos.</p>
<p>Para activarla: barra de estado → btn derecho en rejilla → Tipo de referencia → Resolución isométrica.</p>
<p>Para hacer uso de esta resolución debemos tener el orto activado.</p>
<p>Para cambiar de plano de dibujo, pulsaremos F5.</p>
<h3>Ejercicio</h3>
<img src="img/ejercicio-isometrico.png" alt="ejercicio pespectiva isométrica en autocad 2D">
		<?php // getRes('ejemplo','ex/48-cocina-isometrica.dwg','Descargar dwg') ?>

<h3 id="caballera">Perspectiva Caballera</h3>
<p>Los ejes que expresan las magnitudes  de altura Z y anchura X conservan sus dimensiones reales,  mientras que el eje Y, que expresa la profundidad  se ve modificado aplicando un coeficiente de reducción para lograr que la representación gráfica del objeto transfiera la sensación de realidad. </p>
<img src="img/perspectiva-caballera.png" alt="perespectiva caballera en autocad 2D">
<p>El valor del coeficiente de reducción habitualmente lo determina el dibujante en función de criterios de claridad o estéticos. Los valores más empleados son 1/2, 2/3 o 3/4.</p>
<img src="img/perspectiva-caballera-2.png" alt="perspectiva caballera usando autocad 2D">
		<?php // getRes('ejemplo','ex/49-caballera.dwg','Descargar dwg') ?>

<h3 id="escalimetro">Uso del escalímetro</h3>
<p>Unidades en el papel : unidades reales</p>
<p>Ejemplo:	1:75</p>
	<h3>Pasar un plano a escala</h3>
	<p>Con el escalímetro medimos en un papel el tamaño que tendría una dimensión en la realidad (o en nuestro documento de autocad).</p>
	<img src="img/ejercicio-perspectivas.png" alt="ejercicio de perespectivas en autocad 2D">
	</div>
</article>
<article>
	<div>
	<h2 id="crear_polilinea">Crear polilínea</h2>
	<h3>Ejercicio</h3>
	<p>Realizar este ejercicio utilizando sólo la herramienta crear polilínea y el ajuste a cuadrícula.</p>
	<img src="img/paraguas.png" alt="ejercicio hacer un paraguas con polilíneas en autocad">	
			<?php // getRes('ejemplo','ex/50-polilinea1.dwg','Descargar dwg') ?>

	<h3>Ejercicio</h3>
	<p>Realizar utilizando polilíneas el dibujo de la izquierda y luego curvar las líneas usando  <br>
editar polilínea → curVar
	</p>
	<img src="img/ejercicio-polilineas.png" alt="hacer un paraguas con autocad 2D" >
			<?php // getRes('ejemplo','ex/51-polilinea2.dwg','Descargar dwg') ?>

	<h3>Ejercicio</h3>
	<img src="img/ejercicio-polilineas-2.png" alt="ejercicio polilíneas en autocad 2D">
			<?php // getRes('ejemplo','ex/52-polilineas3.dwg','Descargar dwg') ?>
			</div>

</article>
<article>
	<div>
	<h2 id="qselect">_qselect (quick select, selección rápida)</h2>
	<p>Nos ayuda a seleccionar elementos en pantalla. Puede ser útil para seleccionar y así poder eliminar bloques que no tienen contenido dentro del proyecto. Luego, con el comando limpia, dichos bloques desaparecerán del mismo.</p>
	<p>También podemos hacer búsquedas filtradas usando el comando fi.</p>
	</div>
</article>
<article>
	<div>
	<h2>Nota</h2>
	<p>A veces autocad no es capaz de calcular correctamente los contornos de sombreado. Esto ocurre especialmente cuando en un recinto hay figuras complejas (como por ejemplo sanitarios). Lo más sencillo será explotar los sanitarios, quedarnos con sus contornos y tratar de hacer el sombreado de nuevo utilizando estos contornos.</p>
	</div>
</article>
<article>
	<div>
	<h2 id="ej_casa">Ejercicio Casa</h2>
	<p>Medir con el escalímetro.</p>
	<img src="img/ejercicio-plano.png" alt="ejercicio plano casa con autocad 2D">

	<h3>Anotación contínua</h3>
	<p>Anotar → Cotas → Contínua</p>


	<h3>Ejercicio → Acotar</h3>
	<p>Anotar el perímetro y el ancho y alto de las habitaciones</p>
	<img src="img/ejercicio-acotar.png" alt="acotar dimensiones casa con autocad 2D">
			<?php // getRes('ejemplo','ex/54-instalacion-radiadores.dwg','Descargar dwg') ?>

	<h3>Calcular areas</h3>
	<p>2 formas:</p>
	<p>Comando: area →Añadir Area</p>
	<p>Propiedad area de una polilínea.</p>
	<h3>Usar campos para calcular área</h3>
	<p>Insertar → Campo →Categoría de campo:objeto → Nombre de campo: objeto → Tipo de objeto (selecciono la polilínea del dibujo) → Propieadad Area → Aceptar</p>
	<p>La sombra gris del campo indica la parte del mismo que cambiará al cambiar el elemento al que está asociado. Dicha sombra no aparecerá en la impresión.</p>
	<p>Cualquier texto que añada al campo permanecerá invariante al variar el objeto al que está asociado y no se mostrará sombreado.</p>

	<h3>Ejercicio</h3>
	<p>Crear una capa donde mostraremos las areas de las distintas habitaciones.</p>

	<h3>Ejercicio – colocar los radiadores.</h3>
	<p>Colocar un módulo de radiador por cada metro cuadrado. </p>
	<p>No poner más de 2 radiadores por habitación (debido a costes, estética y pérdidas de calor por tubería).</p>
	<p>Primero, ubicamos los radiadores. Deberán estar a 5cm de la pared. El nombre del radiador nos informará del número de módulos del mismo. Además, trataremos de que todos los radiadores de una misma estancia tengan el mismo número de módulos. Cuando tenga que introducir más de 15 módulos, lo haré distribuyéndolos en dos radiadores.</p>

	<h3>Ejercicio – Colocar las tuberías</h3>
	<p>Una tubería será de entrada y saldrá de la caldera, ubicada en la cocina, y conectará con todos los radiadores, mientras que otra a trazos será de salida, por lo que saldrá de todos los radiadores y conectará con la caldera.</p>
<h3>
	Contar metros de tubería – carga de ficheros autolisp (lsp)
</h3>
<p>
	<span class="black bold">Cargar un fichero lsp:</span> <br>
	Comando: appload <br>
Barra de herramientas de acceso rápido → Mostrar barra de menús → Herramientas → Cargar aplicación <br>
<span class="black bold">Cargar un fichero lsp de forma permanente</span>
Del menú anterior selecciono la opción: 
Cargar al inicio → Contenido.
</p>

<p>
	<span class="black bold">Fichero para contar metros de tubería: </span> <br>
Addline.lsp	→  Ejecuta: addline
</p>
<p>
	<span class="black bold">Fichero para eliminar líneas superpuestas:</span>
	Duplicate-line-removale.lsp → Ejecuta: cut
</p>


	<h3>Ejercicio</h3>

	<p>Agrupar toda la carpintería en bloques, distinguiendo entre:</p>
<ul>
	<li>sanitarios</li>
	<li>ventanas</li>
	<li>puertas</li>
	<li>carpintería</li>
</ul>
<p>Además, insertar el bloque de un auto en el garaje.</p>
<p>Luego, hacer la instalación de calefacción.</p>


<p>Archivo:
54_casa/CASAPLANTEADA.DWG</p>
<img src="img/ejercicio-plano-2.png" alt="ejercicio plano con autocad 2D">
</div>
</article>

<article>
	<div>
<h2 id="ref_externas">Referencias externas</h2>
	<h3>Insertar imagen externa</h3>
	<p>Menú Insertar → Referencia → Enlazar</p>

	<h3>Crear un nuevo archivo dwg desde el cual hacemos referencia al plano original</h3>
<p>Enlazamos en nuevo doc, con el viejo:  <br>
Menu Insertar -> REferencia -> Enlazar
</p>
<p>Delimitamos el área que referenciamos: <br>
Menú Insertar → Referencia → Delimitar → <br>
Pinchamos sobre una parte del objeto que queremos delimitar -> Nuevo Contorno -> Rectángulo
</p>
<p>Si al hacer zoom extensión se nos centra la vista en el recinto delimitado, todo ha ido bien.</p>
<p>Para deactivar la delimitación: <br>
Menú Insertar → Referencia → Delimitar -> seleccionamos el objeto -> DES
</p>

	<h3>Notas</h3>
	<p>Si modifico una capa del archivo de referencia, el archivo referenciador será modificado.</p>
	<p>Si elimino una capa en el archivo de referencia, el archivo referenciador no actualizará esta modificación.</p>
	<p>Al modificar el archivo referenciador, los cambios no se actualizan en el archivo de referencia.</p>

	<h3>Obtener un fichero zip que incluya todas las referencias externas</h3>
	<p>Comando   ETRANSMIT</p>
	<p>Nota: habrá que descomprimir el fichero zip para poder visualizarlo correctamente (no bastará con ejecutarlo mientras esté comprimido).</p>

	<h3>Ejercicio</h3>
	<p>Eliminar las capas necesarias y hacer la instalación de calefacción de esta vivienda.</p>
	<p>Archivo: 55_calefaccionBorrarCapas/ORIGINAL.DWG</p>
	<img src="img/ejercicio-plano-3.png" alt="ejercicio plano auto con autocad 2D">

	<h3>Ejercicio</h3>
	<p>Una vez terminado el ejercicio anterior, empaquetarlo usando el comando etransmit y descomprimirlo en una ruta diferente de la original.</p>
	</div>
</article>
<article>
	<div>
	<h2 id="imprimiendo">Imprimiendo (plot)</h2>
	<p>Barra de herramientas de acceso rápido → Trazar
(ctrl + p)</p>
<p>Seleccionamos</p>
<ol>
	<li>la impresora (salida pdf).</li>
	<li>el tamaño del papel (A4).</li>
	<li>el area de trazado (ventana).</li>
	<li>el desfase de trazado (colocará la esquina inferior derecha del trazado donde indiquemos, siendo el punto 0,0 la esquina inferior derecha del documento). Seleccionamos centrar trazado.</li>
	<li>la escala de trazado : Escala hasta ajustar (ajusta el tamaño del trazado al tamaño de la página).</li>

</ol>
<p>En vista preliminar podremos ver un previo del resultado.</p>
</div>
</article>
<article>
	<div>
	<h2 id="escala">Escala</h2>
	<img src="img/escala.png" alt="escala en autocad 2D">
	<p>1 unidad en el modelo serán 10 mm en el papel.</p>

	<h3>Unidades de medida de autocad</h3>
	<p>Son, sencillamente, "unidades de dibujo". Se pueden expresar en milímetros o en pulgadas. <br>
A → Ayudas al dibujo → Unidades.
	</p>
	<p>Es altamente recomendable que las unidades de dibujo coincidan con las unidades de impresión.</p>
<hr>
	<p>En el siguiente ejemplo las unidades de dibujo están expresadas en mm, las de impresión en mm y en pulgadas.</p>
	<img src="img/escala-1.png" alt="unidades escala en autocad 2D">
	<img src="img/escala-2.png" alt="unidades escala en autocad 2D">
				<?php // getRes('ejemplo','ex/58-escala-cuadrado.dwg','Descargar dwg') ?>

	<p>En el segundo caso, el cuadrado, de 100 mm de lado se sale de los límites de la presentación</p>
	<img src="img/escala-3.png" alt="unidades escala en autocad 2D">
	<img src="img/escala-4.png" alt="unidades escala en autocad 2D">

	<h3>Ejercicio</h3>
	<p>Hacer un cuadrado de 0.5 unidades de lado y modificar el factor de escala en la impresión para al imprimir obtengamos un cuadrado de 5 cm de lado.</p>
	<p>Podremos comprobar el resultado acercando un folio a la pantalla. Cuando la vista previa de la pantalla coincida con las dimensiones del folio estaremos viendo las imágenes con sus dimensiones reales.</p>

	<h3>Impresión final (Presentación o Layout)</h3>
	<p>Usualmente incluye:</p>
	<ul>
		<li>Titúlo del dibujo.</li>
		<li>Escala.</li>
		<li>Logo de la compañía.</li>
		<li>Información de la compañía.</li>
		<li>Información del cliente.</li>
	</ul>
	...
	<h3>Podemos ver como quedaría la presentación final pulsando en su correspondiente pestaña.</h3>
	<img src="img/layout.png" alt="hacer un layout para autocad 2D">
	<p><span class="black bold">Ventana gráfica o Viewport: </span>
Agujero en la presentación que nos permite ver el modelo.</p>
<p>Delimitación del área de impresión. Cambiará en función del tamaño de impresión y del tipo de impresora</p>

	<h3>Administrando Layouts</h3>
	<p><span class="black bold">Renombrar un layout:</span> doble click sobre su pestaña.</p>
	<p><span class="black bold">Eliminar un layout</span>: botón derecho sobre su pestaña → Suprimir.</p>
	<p><span class="black bold">Duplicar un layout</span>: arrastro su pestaña manteniendo ctrl pulsado.</p>

	<h3>Administración de configuraciones de página</h3>
	<p>Cada presentación puede tener varias configuraciones de impresión, aunque sólo una será la asignada.</p>
	<p>Cuando imprimimos desde la peresentación, la escala de impresión debe ser 1:1</p>
	<img src="img/administracion-configuraciones-pagina.png" style="width:100%" alt="administración de configuraciones de página en autocad 2D">
	<p>Seleccionamos la opción "Administración de configuraciones de página" tras pulsar con el botón derecho sobre la pestaña Presentación1.</p>
<h3>Impresión desde la presentación</h3>
<h3>Insertar un cajetín</h3>
<p>Tendremos un documento .dwg con el cajetín. Este será un bloque. Lo seleccionaremos y lo arrastraremos a la vista presentación. Las dimensiones del cajetín deben ser apropiadas para la escala de la presentación. Esto lo podemos solventar teniendo varias plantillas o variando la escala del cajetín una vez insertado.</p>	
<img src="img/cajetin.png" alt="cajetín para autocad 2D">
<h3>Normativa para cajetines</h3>
<h4>El casillero</h4>
<p>Debe contar con los siguientes datos:</p>
<ol>
	<li>
		Fecha de realización y comprobación del dibujo.
	</li>
	<li>Inicial de nombre y apellidos de los que realizaron y comprobaron el dibujo.</li>
	<li>Firmas del realizador y del comprobador.</li>
	<li> Nombre de la empresa o centro docente (escuela).</li>
	<li>Escala.</li>
	<li>Denominación del plano.</li>
	<li>Número del plano.</li>
	<li>Número total de planos.
</li>
</ol>
<h3>La norma UNE 1-035-83 determina diversos tipos de casilleros .
</h3>
<h3>Casillero A4</h3>
<img src="img/cajetin-2.png" alt="cajetín norma UNE 1-035-83 en autocad 2D">
<ol>
	<li>Fecha de realización y comprobación del dibujo.</li>
	<li>Inicial de nombre y apellidos de los que realizaron y comprobaron el dibujo.</li>
	<li>Firmas del realizador y del comprobador</li>
	<li>Nombre de la empresa o centro docente (escuela).
</li>
<li>Escala</li>
<li>Denominación del plano</li>
<li>Número del plano</li>
<li>Número total de planos</li>
</ol>
<h3>Casillero A4 simplificado</h3>
<img src="img/casillero-a-simplificado.png" alt="casillero simplificado en autocad 2D">
<ol>
	<li>Fecha de realización y comprobación del dibujo.</li>
	<li>Inicial de nombre y apellidos de los que realizaron y comprobaron el dibujo.</li>
	<li>Firmas del realizador y del comprobador</li>
	<li>Nombre de la empresa o centro docente (escuela).</li>
	<li>Escala</li>
	<li>Denominación del plano</li>
	<li>Número del plano</li>
	<li>Número total de planos</li>
</ol>
<h3>Ubicación del casillero en A4</h3>
<img src="img/ubicacion-casillero-a4.png" alt="ubicación de casillero en un a4"> 
<h3>Ubicación del casillero en A3</h3>
<img src="img/ubicacion-casillero-a3.png" alt="ubicación de casillero en un a3">
<h3>Ejercicio</h3>
<p>Hacer un cajetín y utilizarlo para presentar un documento.</p>
<img src="img/ejercicio-hacer-cajetin.png" alt="hacer un cajetín con autocad 2D">
</div>
</article>
<article>
	<div>
	<h2 id="ventanas_graficas">Ventanas gráficas (Viewports)</h2>
	<p>Menú Vista → Ventanas gráficas → Nuevo → Dos: Vertical</p>
	<p>Pulsando una vez sobre el borde de la ventana gráfica podré desplazarla y modificar su tamaño.</p>
	<p>Haciendo doble click en el interior de la ventana gráfica podré modificar su contenido.</p>
	<p>Lo apropiado es crear una nueva capa llamada viewports (por ejemplo) donde meteré los bordes de las ventanas gráficas.</p>
	<p>Para introducir ventanas rectangulares simples podemos usar el comando: -ventanas</p>
	<h3>Escala de la ventana gráfica</h3>
	<p>La puedo ajustar haciendo zoom o para ser más exactos recurrir a la barra de opciones inferior.</p>
	<img src="img/escala-ventanas-graficas.png" alt="escala de ventanas gráficas con autocad 2D">
	<p>El candado me posibilita bloquear el factor de escala de la ventana gráfica.</p>
	<p>A partir de ahí, al hacer zoom o pan, haré zoom o pan sobre toda la presentación</p>

	<h3>Ejercicio</h3>
	<p>Usando <br>
Menú Vista → Ventanas gráficas → Nuevo → Dos: Vertical  <br>
Obtener la siguiente vista preliminar. La salida será en un A3. El factor de escala debe estar formado por número enteros (ejemplo 20:1).</p>
<img src="img/ejercicio-plano-5.png" alt="ejercicio plano en autocad 2D">
<?php // getRes('ejemplo','ex/58-viewport.dwg','Descargar dwg') ?>

	<h3>Ejercicio</h3>
	<p>Dibujar un cuadrado de 5 unidades de lado. En la realidad, será un recinto de 5 m de lado.</p>
	<p>¿Cuál sería una escala aceptable para usar en el viewport (escala dibujo)?</p>
	<p>¿Cuál sería la escala que habría que poner en el cajetín?</p>
	<p class="red">Hacemos esta conversión puesto que en autocad la unidad de trabajo suelen ser mm.</p>
	<p>Escala cajetín = EscalaDibujo*(1 unidad en el modelo/ x unidades en la realidad)(x mm/1(medida))</p>
	<p>Escala cajetín (cm:m) = 25 * (1 cm en el modelo / 100 cm en la realidad)*(0.1mm/1cm)</p>
	<img src="img/ejercicio-hacer-cajetin.png" alt="ejercicio hacer un cajetín con autocad 2D">
	<p>Reusando Presentaciones (Layouts)</p>
	<p>Pulsando ctrl +2 accedo a  un panel desde el que puedo insertar las presentaciones elaboradas en otros ficheros .dwg en el presente fichero .dwg. <br>
Basta con arrastar la presentación sobre mi espacio de trabajo para tenerla disponible.</p>
<img src="img/reusando-layouts.png" alt="reusando layouts en autocad 2D">
<?php // getRes('ejemplo','ex/plantilla-cajetin.dwg','Descargar dwg') ?>
</div>
</article>
<article>
	<div>
	<h2 id="objetos_anotativos">Objetos anotativos</h2>
	<p>Su tamaño permanece invariante independientemente de la escala en la que se representen.</p>
	<img src="img/objetos-anotativos.png" alt="objetos anotativos en autocad 2D">
<?php // getRes('ejemplo','ex/59-anotativos.dwg','Descargar dwg') ?>
</div>
</article>

<article>
	<div>
	<h2 id="coleccion-ejercicios-autocad">Ejercicios de autocad</h2>
				<?php // getRes('ejemplo','ex/ejercicios-para-afianzar-habilidades.dwg','Descargar dwg') ?>

<img src="ejercicios-2D/1.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/2.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/3.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/4.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/5.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/6.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/7.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/8.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/9.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/10.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/11.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/12.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/13.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/14.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/15.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/16.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/17.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/18.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/19.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/20.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/21.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/22.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/23.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/24.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/25.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/26.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/27.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/28.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/29.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/30.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/31.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/32.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/33.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/34.png" alt="ejercicio autocad 2D">

<img src="ejercicios-2D/35.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/36.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/37.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/38.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/39.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/40.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/41.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/42.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/43.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/44.png" alt="ejercicio autocad 2D">

<img src="ejercicios-2D/45.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/46.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/47.png" alt="ejercicio autocad 2D">
<img src="ejercicios-2D/48.png" alt="ejercicio autocad 2D">

</div>
</article>

</main>

<?php 
//});
//include $path."/diapos_theme/foote