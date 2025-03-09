<?php 
/*
$titulo_curso="Curso de Autocad 3D";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
add_action( 'genesis_after_header', function(){
	global $path;
	include $path."diapos_theme/body_init.php";

	*/
?>
<section id="amor" class="verIndice">
    <h1><?= $titulo_curso?></h1>
	<ol>
		<li><a href="#plantillaAcadISO">Plantilla acadiso vs acadiso3d</a></li>
		<li><a href="#hacerVisiblePanel">Hacer visible el panel de capas y cambiar el color de línea</a></li>
		<li><a href="#cambiarColorAreaTrabajo">Cambiar el color del area de trabajo</a></li>
		<li><a href="#activar_desactivar_rejilla">Activar/Desactivar rejilla</a></li>
		<li><a href="#primitivas">Primitivas</a></li>
		<li><a href="#modificar_escalar_primitivas">Modificar / Escalar Primitivas</a></li>
		<li><a href="#orbita_libre">Órbita libre</a></li>
		<li><a href="#rueda_navegacion">Rueda de navegación</a></li>
		<li><a href="#vistas">Vistas</a></li>
		<li><a href="#ventanas_graficas">Ventanas gráficas</a></li>
		<li><a href="#estilos_visuales">Estilos visuales</a></li>
		<li><a href="#extrusion">Extrusión</a></li>
		<li><a href="#extruir_polilineas">Diferencia entre extruir líneas y extruir polilíneas</a></li>
		<li><a href="#ejercicio">Ejercicio</a></li>
		<li><a href="#scu_vs_scp">SCU vs SCP</a></li>
		<li><a href="#rotacion3d">Rotación 3D vs Gira3D</a></li>
		<li><a href="#pulsar_o_tirar">Pulsar o Tirar</a></li>
		<li><a href="#interaccion_booleana">Intersección booleana</a></li>
		<li><a href="#simetria3D">Simetría 3D</a></li>
		<li><a href="#corte">Corte</a></li>
		<li><a href="#polilinea3D">Polilinea 3D</a></li>
		<li><a href="#cambio_plano">Cambio del plano de trabajo xy</a></li>
		<li><a href="#hacer_cuna">Hacer una cuña</a></li>
		<li><a href="#obtener_interseccion">Obtener un objeto intersección de dos objetos</a></li>
		<li><a href="#extrusion_mediante_trayectoria">Extrusión mediante trayectoria</a></li>
		<li><a href="#percha">Percha</a></li>
		<li><a href="#revolucion">Revolución (2 formas)</a></li>
		<li><a href="#menu_modelado">Menú Modelado de malla → Primitivas → Modelado, Mallas, Sup. Definida por lados</a></li>
		<li><a href="#superficie_reglada">Superficie reglada</a></li>
		<li><a href="#solevarp">Solevarp</a></li>
		<li><a href="#filete_empalme">Filete o empalme</a></li>
		<li><a href="#matriz_3d">Matriz 3D</a></li>
		<li><a href="#ejercicio_destornillador">Ejercicio destornillador</a></li>
		<li><a href="#ejercicio_batidora">Ejercicio batidora</a></li>
		<li><a href="#empalme_varias_aristas">Empalme de varias aristas</a></li>
		<li><a href="#pasar_esta_pieza_a_3d">Pasar esta pieza a 3D</a></li>
		<li><a href="#chaflan">Chaflán</a></li>
		<li><a href="#editar_solidos">Editar sólidos</a></li>
		<li><a href="#desplazar_caras">Desplazar caras</a></li>
		<li><a href="#extruir_caras">Extruir caras</a></li>
		<li><a href="#desfasar">Desfasar</a></li>
		<li><a href="#inclinar_caras">Inclinar caras</a></li>
		<li><a href="#copiar_caras">Copiar caras</a></li>
		<li><a href="#colorear_caras">Colorear caras</a></li>
		<li><a href="#girar_caras">Girar caras</a></li>
		<li><a href="#corte">Corte</a></li>
		<li><a href="#activar_vista">Activar vista materiales y texturas</a></li>
		<li><a href="#ajustador_rendimiento">Ajustador de rendimiento</a></li>
		<li><a href="#aplicar_textura">Aplicar una textura predefinida</a></li>
		<li><a href="#modificar_propiedades">Modificar propiedades de un material de la lista de predefinidos</a></li>
		<li><a href="#asignacion_materiales">Asignación de materiales por capas</a></li>
		<li><a href="#propiedades_objeto">Propiedades de un objeto</a></li>
		<li><a href="#error_coherencia">Error de coherencia</a></li>
		<li><a href="#alinear_3d">Alinear 3D</a></li>
		<li><a href="#modelado_malla">Modelado malla</a></li>
		<li><a href="#suavizar_malla">Suavizar Malla</a></li>
		<li><a href="#convertir_objeto">Convertir un objeto 3D en un objeto de malla</a></li>
		<li><a href="#aumentar_poligonos">Aumentar el número de polígonos de una malla</a></li>
		<li><a href="#modificar_malla">Modificar una malla</a></li>
		<li><a href="#modelado_malla">Modelado de malla → Malla → Añadir pliegue</a></li>
		<li><a href="#dividir_cara_malla">Dividir cara de malla</a></li>
		<li><a href="#acotar_3d">Acotar en 3D</a></li>
		<li><a href="#insertar_un_material">Insertar un material de la biblioteca</a></li>
		<li><a href="#crear_modificar_material">Crear o modificar un material</a></li>
		<li><a href="#insertar_luces">Insertar luces de la biblioteca</a></li>
		<li><a href="#luz_artificial">La luz artificial</a></li>
		<li><a href="#propiedades_fundamentales">Propiedades fundamentales</a></li>
		<li><a href="#iluminacion_estandar">Iluminación estandar e iluminación fotométrica</a></li>
		<li><a href="#luz_sol">La luz del sol</a></li>
		<li><a href="#cambiar_imagen_fondo">Cambiar imagen de fondo</a></li>
		<li><a href="#configuracion_renderizado">Configuración del renderizado</a></li>
		<li><a href="#guardar_resultado">Guardar el resultado desde la ventana de salida de render</a></li>
		<li><a href="#camaras">Cámaras</a></li>
		<li><a href="#paseo_vuelo">Paseo y Vuelo</a></li>
		<li><a href="#proyecto">Proyecto</a></li>

</ol>


<style>
article{
	border: 1px solid black
}
</style>
</article>
</section>
<section>
<article>
	<?php // echo do_shortcode('[purchase_link id="33783" text="Descarga todos los ficheros dwg de los ejercicios de autocad 3D" style="button" color="blue"]');
 ?>

<h2 id="plantillaAcadISO">Plantilla acadiso vs acadiso3d</h2>
<p>Para que las líneas del acadiso3d se pinten en negro, basta con ejecutar el comando capas.</p>

</article>
<article>
	<h2 id="hacerVisiblePanel">Hacer visible el panel de capas y cambiar el color de línea</h2>
	<img src="img/configuracion-tipica.png" alt="configuración típica del entorno en autocad 3D">
</article>
<article>
	<h2 id="cambiarColorAreaTrabajo">Cambiar el color del area de trabajo</h2>
	<p>Btn derecho → opciones → visualización → Colores → Proyección en perspectiva 3D → Origen terrestre de fondo</p>
	<img src="img/cambiar-area-de-trabajo.png" alt="cambiar el área de trabajo en autocad 3D">
</article>
<article>
	<h2 id="activar_desactivar_rejilla">Activar/Desactivar rejilla</h2>
	<img src="img/rejilla-1.png" alt="la rejilla en autocad 3D">
	<img src="img/rejilla-2.png" alt="la rejilla en autocad 3D">
	<p>Barra de estado → Visualizar rejilla</p>
</article>
<article>
	<h2 id="primitivas">Primitivas</h2>
	<p>Menú Inicio → Modelado</p>
</article>
<article>
	<h2 id="modificar_escalar_primitivas">Modificar / Escalar Primitivas</h2>
	<p>Basta con seleccionarla y desplazar sus modos de modificación.</p>
	<img src="img/primitivas.png" alt="primitivas en autocad 3D">
</article>
<article>
	<h2 id="orbita_libre">Órbita libre</h2>
	<p>Menú Vista → Navegar → Desplegable → Órbita libre</p>
	<p>(Puedo acceder a la órbita libre pulsando control+rueda del ratón)</p>
</article>
<article>
	<h2 id="rueda_navegacion">Rueda de navegación</h2>
	<p>Shift + w</p>
	<p>Puedo centrar el pivote de órvita con la opción “centrar” y luego orbitar con este punto de pivote.</p>
</article>
<article>
	<h2 id="vistas">Vistas</h2>
	<p>Menú Vista → Vistas</p>
	<p>Nos permite mover nuestro punto de vista. </p>
	<p>No está disponible para la estructura alámbrica 2D.</p>
	<img src="img/cubo-vistas.png" alt="cubo de vistas en autocad 3D">
</article>
<article>
	<h2 id="ventanas_graficas">Ventanas gráficas</h2>
	<p>Menú Vista → Ventanas → Nuevo</p>

</article>
<article>
	<h2 id="estilos_visuales">Estilos visuales</h2>
	<img src="img/estilos-visuales.png" alt="estilos visuales en autocad 3D">
</article>
<article>
	<h2 id="extrusion">Extrusión</h2>
	<p>Inicio/Dibujo → Modelado → Extrusión</p>
	<img src="img/estrusion.png" alt="extrusión en autocad 3D">	
</article>
<article>
	<h2 id="extruir_polilineas">Diferencia entre extruir líneas y extruir polilíneas</h2>
	<img src="img/diferencia-extrusiones.png" alt="diferencia entre extrusiones en autocad 3D">	
</article>
<article>
	<h2 id="ejercicio">Ejercicio</h2>
	<img src="img/diferencia-extrusiones.png" alt="ejercicio diferencia de extrusiones en autocad 3D">
</article>
<article>
	<h2>Ejercicio</h2>
	<p>Levantar sobre este plano ya hecho en el módulo 2D, unos muros de 20 unidades</p>
	<img src="img/levantar-paredes.png" alt="ejercicio levantar paredes de una casa en autocad 3D">
		<?php // getRes('ejemplo','ex/2-extrusion.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="scu_vs_scp">SCU vs SCP</h2>
	<p>SCU: Sistema coordenado universal. Es fijo.</p>
	<p>SCP: Sistema coordenado particular. Es móvil.</p>
</article>
<article>
	<h2 id="rotacion3d">Rotación 3D vs Gira3D</h2>
	<p>En ambos casos es posible introducir un número para los grados de giro</p>
	<p><span class="black bold">Inicio → Modificar → Rotación 3D.</span> <br>
Para cambiar el giro respecto del SCU y respecto del SCP. Botón derecho sobre el gizmo → Btn derecho sobre el gizmo → alinear con → SCU o SCP
</p>
<p><span class="black bold">Comando Gira3D</span>: gira la pieza respecto de elementos en pantalla.</p>
</article>
<article>
	<h2>Ejercicio</h2>
	<img src="img/ejercicio-3D.png" alt="ejercicio con autocad 3D">
			<?php // getRes('ejemplo','ex/3-cubo-cilindro.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="pulsar_o_tirar">Pulsar o Tirar</h2>
	<img src="img/pulsar-o-tirar.png" alt="pulsar o tirar con autocad 3D">
</article>
<article>
	<h2>Ejercicio</h2>
	<img src="img/ejercicio-3D-2.png" alt="otro ejercicio de pulsar o tirar con autocad 3D">
	<p>Resolver usando la herramienta de pulsar y tirar en vez de la de extrusión.</p>
				<?php // getRes('ejemplo','ex/4-tubo.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="interaccion_booleana">Intersección booleana</h2>
	<img src="img/interseccion-booleana.png" alt="intersección booleana con autocad 3D">
	<img src="img/interseccion-booleana-2.png" alt="intersección booleana con autocad 3D">
				<?php // getRes('ejemplo','ex/5-interseccion-booleana.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio</h2>
	<img src="img/ejercicio-3D-3.png" alt="ejercicio autocad 3D">	
					<?php // getRes('ejemplo','ex/6-extrusion-y-booleano.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="simetria3D">Simetría 3D</h2>
	<p>Menú Inicio → Modificar → Simetría 3D</p>
</article>
<article>
	<h2 id="#corte">Corte</h2>
	<p>Menú Inicio → Editar sólidos → Corte</p>
</article>
<article>
	<h2>Ejercicio</h2>
	<img src="img/ejercicio-3D-4.png" alt="ejercicio autocad 3D">	
						<?php // getRes('ejemplo','ex/7-portico.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="polilinea3D">Polilinea 3D</h2>
	<p>Debemos utilizar esta orden para hacer una polilínea en el eje Z.</p>
</article>
<article>
	<h2>Ejercicio</h2>
	<p>Nota:  <br>
Si una línea discontinua, por el hecho de ser discontinua no corta a otra línea, no será posible usar el snapping.</p>
<img src="img/ejercicio-3D-5.png" alt="ejercicio autocad 3D">
<img src="img/ejercicio-3D-5-2.png" alt="ejercicio autocad 3D">
						<?php // getRes('ejemplo','ex/8-mesas-y-sillas.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="cambio_plano">Cambio del plano de trabajo xy</h2>
	<p>Menú Vista → Panel Coordenadas →  <br>
3 puntos <br>
Cara</p>

<p>Barra de estado → Permitir/No permitir SCP dinámico </p>
</article>
<article>
	<h2>Ejercicio</h2>
	<img src="img/ejercicio-3D-6.png" alt="ejercicio autocad 3D">

<p>Nota: con la herramienta pulsar y tirar también podremos hacer extrusiones negativas.

</p>
<p>Al pulsar y tirar a partir de un prisma, dicho prisma y la extrusión serán uno.</p>
						<?php // getRes('ejemplo','ex/9-cambio-plano-trabajo.dwg','Descargar dwg') ?>


</article>
<article>
	<h2>Ejercicio</h2>
	<img src="img/ejercicio-3D-7.png" alt="ejercicio autocad 3D">
							<?php // getRes('ejemplo','ex/10-caseta.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="hacer_cuna">Hacer una cuña</h2>
	<p>Menú Inicio → Modelado → Cuña</p>
	<p>El lado levantado de la cuña siempre coincide con el eje y.</p>
	<img src="img/ejercicio-3D-8.png" alt="ejercicio autocad 3D">
</article>
<article>
	<h2 id="obtener_interseccion">Obtener un objeto intersección de dos objetos</h2>
	<img src="img/intersecciones.png" alt="intersecciones de objetos con autocad 3D">
</article>
<article>
	<h2 id="extrusion_mediante_trayectoria">Extrusión mediante trayectoria</h2>
	<p>Menú Inicio → Modelado → Extrusión  → Barrer</p>
<img src="img/baston.png" alt="hacer un bastón con autocad 3D">	
						<?php // getRes('ejemplo','ex/12-baston.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio</h2>
	<img src="img/curva.png" alt="ejercicio curva con autocad 3D">
							<?php // getRes('ejemplo','ex/12-baston.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="percha">Percha</h2>
	<img src="img/percha.png" alt="hacer una percha con autocad 3D">
	<img src="img/percha-2.png" alt="hacer una percha con autocad 3D">
							<?php // getRes('ejemplo','ex/13-percha.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="revolucion">Revolución (2 formas)</h2>
	<p>Para hacer revoluciones, tenemos dos herramientas: <br>
Menú Inicio → Panel Modelado → Revolución</p>
<p>Menú Modelado de Malla → Primitivas → Superficie de Revolución (en este segundo caso, con el comando surftab1 podremos definir el número de superficies que se formarán al revolucionar).</p>
<img src="img/revolucion.png" alt="revolución con autocad 3D">
							<?php // getRes('ejemplo','ex/14-revolucion.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio</h2>
	<p>Hacer un vaso.</p>
	<img src="img/img-hacer-un-vaso.png" alt="hacer un vaso con autocad 3D">
								<?php // getRes('ejemplo','ex/15-vaso.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio</h2>
	<p>Hacer una copa.</p>
	<img src="img/hacer-una-copa.png" alt="hacer una copa con autocad 3D">
								<?php // getRes('ejemplo','ex/16-copa.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio</h2>
	<p>Hacer una campana.</p>
	<img src="img/hacer-una-campana.png" alt="hacer una campana con autocad 3D">
								<?php // getRes('ejemplo','ex/17-campana.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio</h2>
	<img src="img/ejercicio-3D-9.png" alt="ejercicio autocad 3D">

								<?php // getRes('ejemplo','ex/18-fuente.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="menu_modelado">Menú Modelado de malla → Primitivas → Modelado, Mallas, Sup. Definida por lados </h2>
	<img src="img/modelado-malla.png" alt="modelado malla con autocad 3D">
	<p>Esta herramienta genera una superficie a partir de 4 lados. Si la figura tuviera más de 4 lados, habría que agruparlos en polilíneas.</p>
								<?php // getRes('ejemplo','ex/20-cupula.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio - gancho</h2>
<img src="img/ejercicio-gancho-2.png" alt="ejercicio gancho con autocad 3D">
								<?php // getRes('ejemplo','ex/19-gancho-3d.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio tablero ajedrez</h2>
<img src="img/ajedrez.png" alt="ejercicio tablero con autocad 3D">	
								<?php // getRes('ejemplo','ex/21-ajedrez.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="superficie_reglada">Superficie reglada</h2>
	<img src="img/superficie-reglada.png" alt="superficie reglada con autocad 3D">
								<?php // getRes('ejemplo','ex/23-superficie-reglada.dwg','Descargar dwg') ?>

	<p>Cada vértice de la superficie de abajo coincide con un vértice de la superficie de arriba. Esto puede originar problemas si no se enfoca bien el proceso de realización del sólido.</p>
	<img src="img/superficie-reglada-2.png" alt="superficie reglada con autocad 3D">

</article>
<article>
	<h2>Ejercicio</h2>
	<p>Aplicar superficies regladas a tres polilíneas a distinto nivel y un punto de cierre, para generar un terreno. Todas las polilíneas deberán tener el mismo número de vértices para que la máquina pueda calcular correctamente la superficie reglada.</p>
	<img src="img/ejercicio-superficie-reglada.png" alt="ejercicio superficie reglada con autocad 3D" >
									<?php // getRes('ejemplo','ex/24-terreno.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="solevarp">Solevarp</h2>
	<p>Inicio → Modelado → Solevar → Sólo secciones transversales → Regular parámetros a placer</p>
	<img src="img/solevar.png" alt="solevar con autocad 3D">
										<?php // getRes('ejemplo','ex/25-solevar.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio</h2>
	<p>Por trayectoria es más difícil que por secciones transversales</p>
	<p>Dibujar el teléfono siguiendo uno de estos dos procedimientos:</p>
	<img src="img/ejercicio-solevar.png" alt="ejercicio solevación con autocad 3D">
											<?php // getRes('ejemplo','ex/26-solevar-ejercicio.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="filete_empalme">Filete o empalme</h2>
	<p>Seleccionaremos el radio y la/s arista/s que queremos filetear.</p>
	<img src="img/filete-o-empalme.png" alt="filete o empalme con autocad 3D">	
	<p>En caso de querer hacer un chaflán entre dos piezas, habrá que unirlas antes.</p>
	<img src="img/chaflan.png" alt="chaflán en autocad 3D">
			<?php // getRes('ejemplo','ex/27-filete.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio</h2>
	<img src="img/ejercicio-chaflan.png" alt="ejercicio chaflán con autocad 3D">
			<?php // getRes('ejemplo','ex/28-ejercicio-filete.dwg','Descargar dwg') ?>

</article>
<article><h2>
	Ejercicio
</h2>
<p>Nota: es más fácil hacer los cojines fuera y luego meterlos en el sofá.</p>

<img src="img/sofa.png" alt="hacer un sofá con autocad 3D">
			<?php // getRes('ejemplo','ex/29-sofa.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="matriz_3d">Matriz 3D</h2>
	<p>Menú Inicio → Panel Modificar → Matriz 3D</p>
</article>
<article>
	<h2 id="ejercicio_destornillador">Ejercicio destornillador</h2>
<img src="img/destornillador.png" alt="hacer un destornillador con autocad 3D">	
			<?php // getRes('ejemplo','ex/30-destornillador.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="ejercicio_batidora">Ejercicio batidora</h2>
	<img src="img/ejercicio-batidora-1.png" alt="hacer una batidora con autocad 3D">
	<img src="img/ejercicio-batidora-2.png" alt="hacer una batidora con autocad 3D">
			<?php // getRes('ejemplo','ex/31-batidora.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="empalme_varias_aristas">Empalme de varias aristas</h2>
	<img src="img/empalme.png" alt="empalme de varias aristas con autocad 3D">
			<?php // getRes('ejemplo','ex/32-empalme-varias-aristas.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="pasar_esta_pieza_a_3d">Pasar esta pieza a 3D</h2>
	<img src="img/pasar-pieza-a-3D.png" alt="pasar pieza a 3D con autocad">	
			<?php // getRes('ejemplo','ex/33-pasar-a-3d.dwg','Descargar dwg') ?>


</article>
<article>
	<h2 id="chaflan">Chaflán</h2>
	<p>Debemos precisar la línea sobre la que aplicaremos el chaflán, las medidas del mismo y la arista concreta que deseamos achaflanar.</p>
	<img src="img/chaflan-2.png" alt="hacer un chaflán con autocad 3D">
			<?php // getRes('ejemplo','ex/34-chaflan.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="editar_solidos">Editar sólidos</h2>
	<p>Inicio → Editar sólidos</p>
				<?php // getRes('ejemplo','ex/35-editar-solidos.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="desplazar_caras">Desplazar caras</h2>
	<p>Tendremos que seleccionar todas las caras interiores del agujeto.</p>
	<img src="img/desplazar-caras.png" alt="desplazar caras con autocad 3D">
</article>
<article>
	<h2 id="extruir_caras">Extruir caras</h2>
	<img src="img/extruir-caras.png" alt="extruir caras con autocad 3D">
</article>
<article>
	<h2 id="desfasar">Desfasar</h2>
	<img src="img/desfasar.png" alt="hacer un desfase con autocad 3D">
</article>
<article>
	<h2 id="inclinar_caras">Inclinar caras</h2>
	<img src="img/inclinar-caras.png" alt="inclinar caras con autocad 3D">
</article>
<article>
	<h2 id="copiar_caras">Copiar caras</h2>
	<img src="img/copiar-caras.png" alt="copiar caras con autocad 3D">
</article>
<article>
	<h2 id="colorear_caras">Colorear caras</h2>
	<img src="img/colorear-caras.png" alt="colorear con autocad 3D">
</article>
<article>
	<h2 id="girar_caras">Girar caras</h2>
	<img src="img/girar-caras.png" alt="girar caras con autocad 3D">
</article>
<article>
	<h2 id="corte">Corte</h2>
	<p>Opción 3 puntos: le damos los valores X, Y, Z por donde irá el corte.
Con <span class="black bold">Vista</span>, alinearemos el plano cortante con el punto de vista actual.
Con <span class="black bold">Objeto</span>, podemos designar uno que actuará como plano de corte.
Con la opción <span class="black bold">Superficie</span>, podemos alinear el plano de corte con una superficie.</p>
<img src="img/corte.png" alt="hacer un corte con autocad 3D">
<p>Si hacemos un corte por superficie la superficie de corte debe abarcar todo el objeto.
Haremos el plano de corte extrusionando una polilínea.</p>
</article>
<article>
	<h2 id="activar_vista">Activar vista materiales y texturas</h2>
	<img src="img/vista-materiales.png" alt="vista materiales con autocad 3D">
</article>
<article>
	<h2 id="ajustador_rendimiento">Ajustador de rendimiento</h2>
	<p>Lo activaremos en caso de que las texturas no se representen correctamente. Luego habrá que reiniciar autocad.</p>
	<p>Btn dch → Opciones → Sistema → Parámetros de rendimiento → Buscar actualizaciones</p>
</article>
<article>
	<h2 id="aplicar_textura">Aplicar una textura predefinida</h2>
	<p>Menú Vista → Paletas → Paletas de herramientas → Btn dch en las multipestañas → Albañilería, muestra de materiales</p>
	<p>Selecciono el material y luego el objeto sobre el que lo voy a aplicar.</p>
	<p>Si mantengo ctrl pulsado aplicaré el material a una cara en vez de a todo el objeto.</p>
</article>
<article>
	<h2 id="modificar_propiedades">Modificar propiedades de un material de la lista de predefinidos</h2>
	<p>Btn dch sobre el material → Propiedades.</p>
</article>
<article>
	<h2 id="asignacion_materiales">Asignación de materiales por capas</h2>
	<p>Menú render → Materiales → Desplegable → Enlazar por capa</p>
	<p>A la izquierda aparece una lista de materiales y a la derecha las capas.</p>
	<p>Para añadir un material a la lista de materiales → btn dch sobre él → Añadir al dibujo actual.</p>
</article>
<article>
	<h2 id="propiedades_objeto">Propiedades de un objeto</h2>
	<p>Aparecen haciendo doble click sobre él.</p>
</article>
<article>
	<h2 id="error_coherencia">Error de coherencia</h2>
	<p><span class="black bold">Problema</span>: Un objeto perteneciente a una capa no tiene el material de la susodicha capa.</p>
	<p><span class="black bold">Solución</span>: Propiedades del objeto →  Visualización 3D → Material → Por capa</p>
</article>
<article>
	<h2 id="alinear_3d">Alinear 3D</h2>
	<p>Inicio → Modificar → Alinear 3D</p>
	<img src="img/alinear-3D.png" alt="alinear objetos con autocad 3D">
					<?php // getRes('ejemplo','ex/36-alinear3d.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio</h2>
	<img src="img/ejercicio-habitacion-3D.png" alt="ejercicio habitación ">
						<?php // getRes('ejemplo','ex/37-cocina.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="modelado_malla">Modelado malla</h2>
	<img src="img/modelado-malla-2.png" alt="modelado malla con autocad 3D">
	<p>Las mallas están formadas por caras. Pulsando sobre la flechita oblicua del panel de primitivas, podré controlar el número de las misma.</p>
</article>
<article>
	<h2 id="suavizar_malla">Suavizar una malla</h2>
	<p>Seleccionamos el objeto → btn derecho → propiedades →Geometría →  Suavizado</p>
	<p>También podemos realizar esta operación desde: <br>
Menú modelado malla → Malla → Suavizar más 
	</p>
	<p>Cuantas más veces le demos, más suavizaremos el objeto.</p>
	<p>Además, en el panel de propiedades podremos elegir el nivel de suavizado.</p>
</article>
<article>
	<h2 id="convertir_objeto">Convertir un objeto 3D en un objeto de malla</h2>
		<p>Modelado de Malla →Malla -> Suavizar objeto</p>
</article>
<article>
	<h2 id="aumentar_poligonos">Aumentar el número de polígonos de una malla</h2>
	<p>Modelado de malla → malla → refinar malla</p>
	<img src="img/poligonos-malla.png" alt="poligonos malla en autocad 3D">
</article>
<article>
	<h2 id="modificar_malla">Modificar una malla</h2>
	<p>Seleccionamos qué y cómo queremos modificar: <br>
	Menú modelado malla → Subobjeto</p>
	<p>Mantenindo ctrl pulsado podremos seleccionar los  elementos de la pantalla.</p>
	<p>Una vez echa la selección, pasaremos el ratón sobre alguno de los nodos para que aparezca el guizmo de giro</p>
</article>
<article>
	<h2>Ejercicio</h2>
	<ol>
		<li>Desplazamos caras.</li>
		<li>Suavizamos objeto.</li>
		<li>Girar vértices y escalar caras.</li>
	</ol>
	<img src="img/ejercicio-tabla.png" alt="ejercicio tabla con autocad 3D">
							<?php // getRes('ejemplo','ex/38-mallas.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="modelado_malla">Modelado de malla → Malla → Añadir pliegue</h2>
	<p>Esto sólo se aprecia cuando tenemos niveles de suavizado. Cuando nos pide un parámetro, nos está pidiendo el nivel de suavizado (1, 2, 3, 4) a partir del cual se apreciarán los efectos de esta herramienta.</p>
	<img src="img/pliegue.png" alt="hacer un pliegue con autocad 3D">
</article>
<article>
	<h2 id="dividir_cara_malla">Dividir cara de malla</h2>
	<p>Modelado de malla → Editar malla → Dividir cara de malla → Selecciono la cara a dividir → Selecciono los vértices de división</p>
	<img src="img/dividir-malla.png" alt="dividir malla con autocad 3D">
</article>
<article>
	<h2 id="acotar_3d">Acotar en 3D</h2>
	<p>Debemos girar el plano xy para colocarlo en la dirección de acotación.</p>
</article>
<article>
	<h2>Ejercicio</h2>
	<p>Dibujar un prisma rectangular y sacar todas estas cotas:</p>
	<img src="img/prisma-rectangular.png" alt="prisma rectangular con autocad 3D">
d de lámpara” para que logre apreciarse la 
</article>
<article>
	<h2 id="insertar_un_material">Insertar un material de la biblioteca</h2>
	<p>Menú vista → Panel paletas → Paletas de herramientas</p>
	<p>En la paleta que se visualiza → btn derecho sobre las pestañas múltiples → Opción puertas y ventanas (por ejemplo) → selecciono un material y lo arrastro sobre el objeto deseado.</p>
</article>
<article>
	<h2 id="crear_modificar_material">Crear o modificar un material</h2>
	<p>Menú Vista → Paletas 3D → Materiales</p>
	<p>Para aplicar un material a un objeto, podemos seleccionarlo y arrastrarlo al mismo.</p>
	<p>Para almacenar un material en la lista de materiales por defecto, igualmente, podemos seleccionarlo y arrastrarlo a la misma.</p>
</article>
<article>
	<h2 id="insertar_luces">Insertar luces de la biblioteca</h2>
	<p>Menú Vista → Paletas → Paletas de herramientas → Btn dch en las multipestañas → Luces genéricas</p>
</article>
<article>
	<h2 id="luz_artificial">La luz artificial</h2>
	<p>Puede ser de 3 tipos:</p>
	<ul>
		<li>Puntual → Irradia en todas las direcciones.</li>
		<li>Foco → Irradia en una dirección.</li>
		<li>Distante.→ No tienen un origen, sólo una dirección.</li>
	</ul>
	<p>Para consultar las luces introducidas: <br>

	Menú Vista → Paletas 3D → Paleta luces en modelo </p>
</article>
<article>
	<h2 id="propiedades_fundamentales">Propiedades fundamentales</h2>
	<p>Color del filtro. <br>
Color de la lámpara. <br>
Factor de intensidad.</p>
</article>
<article>
	<h2>Ejercicio</h2>
	<ol>
		<li>Crear un una primitiva de prisma rectangular.</li>
		<li>Aplicarle la textura suelos → corcho.</li>
		<li>Colocar una luz puntual.</li>
		<li>Regular la propiedad “Intensidad de lámpara” para que logre apreciarse la textura del corcho.</li>
	</ol>
	<img src="img/prisma-rectangular-luces.png" alt="aplicar luces a un prisma rectangular">
							<?php // getRes('ejemplo','ex/40-iluminacion-cubo.dwg','Descargar dwg') ?>

</article>
<article>
	<h2 id="iluminacion_estandar">Iluminación estandar e iluminación fotométrica.</h2>
	<p>La iluminación fotométrica ofrece resultados fotorealistas a partir de ficheros *.ies cedidos por los fabricantes de luminancias (ej, philips, etc.)</p>
	<p>Para cambiar entre una y otra: <br>Comando: lightunits</p>
	<ul>
		<li>0: iluminación estandar.</li>
		<li>1: iluminación fotométrica usando parámetros internacionales.</li>
		<li>2: iluminación fotométrica usando parámetros fotométricos norteamericanos.
</li>
	</ul>
	<p>O Menú Render → Panel Luces → Desplegable → Unidades de iluminación.</p>
</article>
<article>
	<h2 id="luz_sol">La luz del sol</h2>
	<p><span class="black bold">Características:</span> </p>
	<ul>
		<li>No se atenúa.</li>
		<li>Irradia sus rayos de modo paralelo con una inclinación y tono que depende del lugar geográfico, de la fecha y de la hora del día en que nos encontremos.</li>
		<li>Su luz suele ser amarilla.</li>
	</ul>
	<p><span class="black bold">Activarla o Desactivarla:</span> <br>
Menú Render → Sol y ubicación → Estado del sol
	</p>
</article>
<article>
	<h2 id="cambiar_imagen_fondo">Cambiar imagen de fondo</h2>
	<p>Menú Vistas → Panel Vista →  Vistas guardadas → Vista modelo → Nueva → Fondo → Imagen</p>
	<p>Selecciono la vista modelo recien creada → Definir actual</p>
</article>
<article>
	<h2 id="configuracion_renderizado">Configuración del renderizado</h2>
	<p>Consiste en generar un mapa de bits a partir de un modelo 3d.</p>
	<p><span class="black bold">Configuración</span> <br>
Menú Render → Flechita oblicua.
	</p>
	<p>Aquí podré cambiar, entre otras cosas, el tamaño del render (640x480 por defecto).</p>
</article>
<article>
	<h2 id="guardar_resultado">Guardar el resultado desde la ventana de salida de render</h2>

</article>
<article>
	<h2 id="camaras">Cámaras</h2>
	<p>Comando:		camara</p>
	<p>Al pulsar sobre la cámara veremos la ventana de vista preliminar de la misma.</p>
	<p>Para renderizar lo que ve una cámara: <br>
	Selecciono la cámara → Botón derecho sobre la cámara → Establecer vista de cámara → Render </p>

	<h3>Menú render →Hacemos visible el Panel de animaciones → Trayectoria de animación</h3>
	<img src="img/render-1.png" alt="hacer un render con autocad 3D">
	<img src="img/render-2.png" alt="hacer un render con autocad 3D">
</article>
<article>
	<h2>Ejercicio</h2>
	<p>Extruir las paredes de la casa realizada en ejercicios anteriores a 2.30 m, y dejar los huecos de las ventanas a 1 m. del suelo. Dichas ventanas tendrán 80 cm de altura.</p>
	<p>Importar los bloques 3D de la galería de bloques 3D de la carpeta compartida.</p>
	<img src="img/levantar-paredes-2.png" alt="levantar paredes con autocad 3D">
							<?php // getRes('ejemplo','ex/41-casa.dwg','Descargar dwg') ?>

</article>
<article>
	<h2>Ejercicio</h2>
	<p>Aplicando animación por trayectoria hacer una animación que visite la casa del ejercicio anterior al anterior.</p>
	<p>Haremos una trayectoria del movimiento de la cámara, y le sacaremos una copia escalándola ligeramente para la trayectoria del objetivo de la cámara.</p>
</article>
<article>
	<h2 id="paseo_vuelo">Paseo y Vuelo</h2>
	<p>Render → Animaciones </p>
	<p>Paseo → Nos movemos en un plano paralelo al xy.</p>
	<p>Vuelo → Se elimina la restricción del plano xy.</p>
	<p>Para variar el tamaño del paso/vuelo seleccionamos la opción parámetros de paseo y vuelo en el desplegable.</p>
</article>
<article>
	<h2 id="proyecto">Proyecto</h2>
	<p>Todos los alumnos menos cuatro harán un edificio y deberán presentar el tipo de edificio, la forma y los metros cuadrados del mismo. </p>
	<p>Los que no hagan el edificio, harán el plano de la zona geográfica donde irán todos los edificios e incluirá por referencia externa a todos los demás.</p>
	<p>El proyecto contiene en su raíz una carpeta “barrios” que contiene otras cuatro carpetas:</p>
	<ul>
		<li>1barrioNorte</li>
		<li>2barrioSur</li>
		<li>3barrioEste</li>
		<li>4barrioOeste</li>
	</ul>
	<p>Dentro de estas carpetas hay más carpetas, una por alumno. Cada alumno debe renombrar su carpeta correspondiente con su nombre y almacenar ahí los archivos de su proyecto.</p>
<p>Los alumnos que vayan a hacer un barrio encontrarán dentro de su carpeta un recuadro de 70 m2 con las dimensiones de su barrio.</p>
<p>Cuando todas las carpetas hayan sido renombradas, desde el archivo ciudad.dwg ubicado en la raíz del proyecto incluiré cada uno de los barrios.</p>
<p>Los alumnos que hagan un barrio serán a su vez los encargados de incluir en el mismo las edificaciones de sus compañeros.</p>
<h3>Presentar:</h3>

<p>El fichero dwg empaquetado con etransmit.</p>
<p>Un render de nuestro trabajo (si hacemos barrio, 2 render uno con las casas incluídas y otro con las casas sin incluir).</p>
</article>

	<h2>Colección de ejercicios de autocad 3D</h2>
								<?php // getRes('ejemplo','ex/42-vistas.dwg','Descargar dwg') ?>

	<?php include $path."autocad-3d/ejercicios.php"; ?>
</section>
<?php 
//});
//include $path."/diapos_theme/footer.php";
?>
