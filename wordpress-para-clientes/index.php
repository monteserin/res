<?php 
$titulo_curso="Wordpress para clientes";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	global $path;
	global $hashtag;
	global $indice;
	$tiene_intro=true; // usamos esta variable en body_init.php
	$hashtag = useHashtag();
	$antes= '<p>Esta página contiene varias guías paso a paso de tareas de administración de un sitio Wordpress que a menudo mis clientes quieren saber cuando tienen su Wordpress montado. Aquí encontrarás por tanto como usar herramientas que pueden estar instaladas en tu Wordpress. Por tanto, esta no es una guía sobre como configurar estas herramientas, sino sobre como usarlas una vez están configuradas.</p>';
	$despues='';

$indice ='<ol>  
	<li><a href="/curso/wordpress-para-clientes/'.$hashtag.'acceso-area-administracion">Acceso al area de administración</a></li>

	<li><a href="/curso/wordpress-para-clientes/'.$hashtag.'modificar-pagina-web-con-elementor">Modificar página web con Elementor</a></li>

	<li><a href="/curso/wordpress-para-clientes/'.$hashtag.'cambiar-video-con-elementor">Cambiar video con Elementor</a></li>

	<li><a href="/curso/wordpress-para-clientes/'.$hashtag.'establecer-contenido-restringido">Establecer contenido restringido para los usuarios que introducen una contraseña</a></li>


	<li><a href="/curso/wordpress-para-clientes/'.$hashtag.'crear-galeria-fotos">Crear una nueva galería de fotos</a></li>

	<li><a href="/curso/wordpress-para-clientes/'.$hashtag.'duplicar-pagina">Duplicar página</a></li>
 

</ol>';

echo '<style>main li{padding-top:30px}</style>';
include $path."diapos_theme/body_init.php";
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
if(muestra('acceso-area-administracion')){ ?>
<main class="curso">
	<h1 id="acceso-area-administracion">Acceso al area de administración</h1>
	<ol>
	<li>Escribimos en la barra de direcciones de tu navegador la url de tu página web seguida de la palabra <span class="bold">/wp-admin</span>: <pre><code>http://tu-pagina.com/<span class="bold">wp-admin</span></code></pre></li>
	<li>Deberíamos llegar a una página web con un formulario donde introducir un nombre y contraseña similar a este:
	
	<img src="./img/formulario-login-wordpress.png" alt="Formulario login Wordpress">
	
	</li>
	<li>Introducimos el usuario y contraseña que te he facilitado.</li>
	</ol>
</main>

<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('modificar-pagina-web-con-elementor')){ ?>

<main class="curso">
		<h1 id="modificar-pagina-web-con-elelementor">Modificar página web con Elementor</h1>

	<article>


	<ol>
	<li>Tras haber accedido al area de administración de Wordpress, regresamos al frontend (lo que ve el usuario de la página web). Para ello, pulsamos el enlace de <span class="bold">visitar sitio</span>.
	
	<img src="./img/formulario-login-wordpress.png" alt="Formulario login Wordpress">
	</li>

	<li>Navegamos hasta la página que queremos modificar.</li>

	<li>En la fila superior tenemos un enlace que pone: Editar con Elementor. Lo pulsamos.
	<img src="./img/editar-con-elementor.png" alt="editar con elementor">
	
	</li>
	</ol>

</article>

</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('cambiar-video-con-elementor')){ ?>

<main class="curso">
<h1>Cambiar video con Elementor</h1>

<ol>
<li>Tras haber pulsado en editar con elementor…</li>
<li>Pulsamos sobre el video que queremos cambiar. En la columna de la izquierda aparece su url de youtube.
<img src="./img/cambiar-video.png" alt="cambiar video youtube">

</li>

<li>Ponemos la nueva url de youtube.</li>

</ol>
</main>



<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('establecer-contenido-restringido')){ ?>

<main class="curso">
<h1>Establecer contenido restringido para los usuarios que introducen una contraseña</h1>

<ol>
<li>Tras haber pulsado en editar con elementor…</li>

<li>El contenido restringido debe estar en medio de los bloques que contienen el texto [restrict] y [/restrict].</li>

<li>Puedes arrastrar bloques pulsando y arrastrando la zona con seis puntitos.

<img src="./img/contenido-restringido.png" alt="contenido restringido">
</li>
</ol>
</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('crear-galeria-fotos')){ ?>

<main class="curso">
<h1>Crear una nueva galería de fotos</h1>

<ol>
<li>Seleccionamos el menú de Envira Gallery dentro del area de administración de Wordpress.
<img src="./img/envira-gallery.png" alt="envira gallery">

</li>

<li>Pulsamos sobre el botón de añadir nueva <img src="./img/nueva-engira-gallery.png" alt="Nueva envira gallery">
</li>


<li>Le ponemos un nombre y escogemos las imágenes desde nuestro ordenador o desde la biblioteca de medios de wordpress.
<img src="./img/envira-gallery-nombre.png" alt="Envira Gallery Nombre">
</li>


<li>Es probable que nos interese cambiar el número de columnas de la galería. Podemos hacer esto desde el menú config.
<img src="./img/envira-gallery-config.png" alt="Envira Gallery Config">

</li>


<li>También desde el menú config podemos hacer que las imagenes se recorten para que tengan todas el mismo tamaño. Para ello marcaremos la check Crop Images.
<img src="./img/envira-gallery-crop-images.png" alt="Envira Gallery Crop Images">
</li>

<li>Finalmente, copiagmos y pegamos uno de los codigos shortcode de la galería en la página en la que querramos insertarla
<img src="./img/envira-gallery-shortcodes.png" alt="Envira Gallery Shortcode">
</li>

</ol>
</main>


<?php 

///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

 }if(muestra('duplicar-pagina')){ ?>

<main class="curso">
<h1>Duplicar una página</h1>

<ol>
<li>Desde el area de administración de Wordpress, nos vamos al menú páginas:
<img src="./img/wordpress-menu-paginas.png" alt="Wordpress menú páginas">

</li>

<li>Pulsamos en el botón de clonar

<img src="./img/clonar-pagina-wordpress.png" alt="clonar página wordpress">
</li>

</ol>
</main>



<?php 
}
});
include $path."/diapos_theme/footer.php";
?>