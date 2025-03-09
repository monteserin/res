<?php 
$titulo_curso="Wordpress";
$meta_description = 'Llevo usando wordpress desde hace más de 10 años. Con este curso te enseño a hacer páginas web sin programar utilizando el CMS más extendido del mundo.';
$img_curso = 'curso-wordpress.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
?>
    
<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
            <li><a href="#algunosterminos">Algunos términos</a></li>

		<li><a href="#instalacion">Instalación</a></li>
            <li><a href="#opciones_pantalla">Opciones de pantalla</a></li>
            <li><a href="#post_pages">POSTS vs PAGES</a></li>
            <li><a href="#categorias">Categorías y Tags</a></li>
            <li><a href="#edicion_posts">Página de edición de posts. Opciones</a></li>
            <li><a href="#profile">Users → Your Profile</a></li>
            <li><a href="#menu_navegacion_principal">Crear el menú de navegación principal</a></li>
            <li><a href="#settings">Settings</a></li>
            <li><a href="#instalar_plantilla">Instalar Plantilla</a></li>
            <li><a href="#widgets">Widgets</a></li>
            <li><a href="#importar">Importar desde blogger, otro wordpress, etc. a servidor</a></li>
            <li><a href="#tips">Tips</a></li>

	</ol>
</article>
</section>
<main class="curso">
<?= drawH1WithImg() ?>

<article>
    <div>
<h2 id="algunosterminos">Algunos términos</h2>
	<h3>CMS</h3>
	<p><strong>Content Managment System</strong> (o Sistema gestor de contenidos). Es una aplicación que nos permite crear, editar, y en general administrar los contenidos de nuestra página web a través de una interfaz que pretende ser intuitiva. </p>
	<h3>Lenguajes</h3>
	<p>Lenguaje de programación: PHP</p>
	<p>Lenguaje de la base de datos: MySQL</p>

	<h3>Front-end</h3>
	<p>Es el contenido de una web que está disponible para el público general o para un grupo de usuarios concreto</p>
	<h3>Back-end</h3>
	<p>Es una página web privada que utilizan los administradores web para actualizar/modificar los contenidos del front-end. Front-end y back-end comparten la misma informacion de la base de datos.</p>

<h3>GPL</h3>
<p>Licencia GPL (General Public License).
Es una licencia de software libre que permite a los usuarios realizar:</p>
<ul>
	<li>copia</li>
	<li>modificación</li>
	<li>distribución</li>
</ul>

<p>del programa y sus derivados (plugins, plantillas, etc)</p>
<p><a target="_blank"  style="font-size:1.2em; color:brown" href="http://tecnologia.elpais.com/tecnologia/2012/11/28/actualidad/1354095742_842570.html">Esto es lo que tiene el software libre...</a></p>
                        <?= getRes('video_premium',227625962) ?>
</div>
</article>

<article>
    <div>
<h2 id="instalacion">Instalación</h2>

<div class="row">
<div class="col-md-6">
<h3><a target="_blank"  href="https://wordpress.com">wordpress.com</a></h3>
    <p>
Automatiza el proceso que debemos hacer manualmente en wordpress.org. Sin embargo la aplicación no estará alojada en nuestro servidor, y habrá ciertas funcionalidades de las que no disponemos y otras por las que deberemos pagar.</p>

<div class="row">
                        <?= getRes('video_premium abierto','KPLdDifake4', 'Diferencias entre wordpress.com y wordpress.org') ?>

                        <?= getRes('video_premium abierto', 'qRB2RysETas', 'Cómo crear una página en wordpress.com') ?>
                        </div>
                        </div>

                        <div class="col-md-6">
    <h3><a target="_blank" href="https://wordpress.org/download/">wordpress.org</a> </h3>
    <p>Lo descomprimimos en una carpeta de nuestro servidor, creamos una base de datos y  accedemos a dicha carpeta mediante un navegador web.</p>
<div class="row">
<?= getRes('video_premium abierto',394905310, 'Instalar Wordpress tu propio servidor gratuito (No CDMON)') ?>

<?= getRes('video_premium abierto',227626003, 'Instalar Wordpress en CDMON sin instalador mágico') ?>
</div>
                        <span class="font-weight-bold">Descarga en español:</span> <br>

<a target="_blank"  href="http://es.wordpress.org/">http://es.wordpress.org/</a>
</p>

</div>
</div>


<hr>
<p>Tutorial: <a target="_blank" href="https://pablomonteserin.com/recuperar-la-contrasena-wordpress/">Cómo recuperar la contraseña de nuestro Wordpress</a></p>

<p><a href="https://pablomonteserin.com/wordpress-el-mejor-cms/">Por qué me gusta tanto Wordpress</a></p>

</div>
</article>

<article>
    <div>
    <h2 id="opciones_pantalla">Opciones de pantalla</h2>

    <p> Están en la esquina superior derecha. Para modificar las opciones que serán inicialmente visibles desde el panel de administración:</p>

<?= getRes('video_premium abierto',230017958) ?>
</div>
</article>
<article>
    <div>
    <h2 id="post_pages">POSTS vs PAGES</h2>
<div class="row">
        <div class="col-md-6">
        <h3>POSTS (entradas)</h3>

<p>Se estructuran de forma dinámica, siendo mostradas en orden cronológico inverso</p>

<p>Contiene información que será actualizada periódicamente.</p>
<h4>Ejemplos:</h4>
<ul>
    <li>noticias</li>
    <li>artículos</li>
    <li>entradas de blog</li>
</ul>

<h4>Organización:</h4>
<ul>
    <li>Por hora y fecha de publicación.</li>
    <li>Por categorías.</li>
    <li>Por etiquetas.</li>
    <li>Por autor.</li>
</ul>
<h4>Crear una nueva entrada</h4>
<p>Posts → Add New</p>
</p>
    </div>
    <div class="col-md-6">
        <h3>PAGES</h3>
        <p>Se estructuran de forma estática, su posición no cambia dinámicamente.</p>
        <p>Contiene información que no está previsto que cambie con periodicidad: </p>
<h4>Ejemplos</h4>
        <ul>
    <li>about page</li>
    <li>contact</li>
</ul>



<h4>Organización:</h4>
<p>- Relación Padre/Hijo.</p>

<h4>Crear una nueva página:</h4>
<p>Pages → Add new</p>
    </div>
    </div>
    
    <?= getRes('video_premium abierto',230018497) ?>
    </div>   

</article>
<article>
    <div>
    <h2 id="categorias">Categorías y Tags</h2>
   

<div class="row">
    <div class="col-md-6">
        <h3>CATEGORÍAS</h3>

<ul>
    <li>Se utilizan para agrupaciones globales de contenido.</li>
    <li>Tienen jerarquía.</li>
    <li>Son obligatorias.</li>
</ul>


    </div>
    <div class="col-md-6">
        <h3>TAGS</h3>

<ul>
    <li>Se utilizan para describir detalles específicos del contenido.</li>
    <li>No tienen jerarquía </li>
    <li>Son opcionales</li>
</ul>
</div>
    </div>
<p>En un blog de cocina, podríamos tener categorías para los tipos de cocina (japonesa, peruana, colombiana, etc) y tags para los ingredientes (tomate, arroz, curry, etc.)</p>



</div>
    </article>

<article>
    <div>
    <h2 id="edicion_posts">Página de edición de posts. Opciones</h2>
    <p>
        <span class="font-weight-bold">Introducir una imagen</span> <br>
Habrá que subirla al servidor. Para ello tenemos el link “Upload/Insert” situado justo encima de la barra de herramientas del textarea dónde escribimos el post.

    </p>

    <p><span class="font-weight-bold">Introducir más de un salto de línea en el post</span> <br>
Una página gratuita alojada en wordpress.com tiene activado un filtro que impide escribir en nuestro post ciertas etiquetas. Para salvar este problema y poder introducir más de un salto de línea, escribiremos, desde la vista html del editor del post: &nbsp;&lt;br/&gt; por cada salto de línea que queramos introducir.
</p>

<p><span class="font-weight-bold">Crear una categoría</span></p>

<p><span class="font-weight-bold">Crear tags</span>
Sirven para que sea más fácil encontrar los posts referidos a cierto tag. Además la información de los tags es indexada por google.</p>

    <p>
<span class="font-weight-bold">Decidir cuando será publicado el Post. </span> <br>
Es útil suponiendo que queramos tener cierta periodicidad en nuestras publicaciones y queramos que lo que hoy escribimos se publique a cierta fecha y hora. Para ello, dentro del menú de posts, Edit publish.</p>

<p><span class="font-weight-bold">Habilitar/Deshabilitar comentarios a nivel de post</span> <br>
Entro en la pantalla de edición de post -> Screen Options (esquina superior derecha) -> Habilito la check Discussion -> Más abajo, en la pantalla, habilito la check Allow Discussion
</p>

    <?= getRes('video_premium abierto','WMVvTdufMMc') ?>

    <h3>Subida de imágenes</h3>
    <p>Cuando subes una imagen a través de WordPress, este la triplica, creando 3 versiones más de diferentes tamaños.</p>
    <p>El tamaño de estas versiones se puede gestionar en ajustes -> medios</p>
    <p>Si queremos regenerar el tamaño de las imágenes ya subidas, podemos usar el plugin: <a href="https://wordpress.org/plugins/regenerate-thumbnails/" target="_blank"> Regenerate Thumbnails</a></p>
</article>



<article>
<div>
<h2 id="menu_navegacion_principal">Crear el menú de navegación principal</h2>

    <?= getRes("video_premium abierto",'nwXkiy6lZhg' ,'Ver video') ?>
</div>



</article>
<article>
    <div>

    <h2 id="profile">Users → Your Profile</h2>


    <div class="row">
        <div class="col-md-10"><p>Es posible cambiar toda la información del usuario, salvo el username.</p>
    <p>Esta información será pública.</p>
    <p>Podremos añadir diversas cuentas de mensajería (messenger, yahoo mail, google talk) para posibilitar que los usuarios de la página puedan entrar en contacto con nosotros.</p>
    <p>Como imagen de perfil es posible utilizar una imagen subida a gravatar.com, de tal forma que al cambiar la imagen en gravatar.com esta se actualice automáticamente en todos los sitios vinculados a dicha imagen.</p></div>
        <div class="col-md-2"><?= getRes('video_premium',230019095) ?></div>
    </div>
    
    
</div>    
</article>

<article>
    <div>
    <h2 id="settings">Settings</h2>
    
<p><span class="font-weight-bold">Quitar el texto de la página: just another wordpress.com site</span> <br>
→ Generales → Descripción corta</p>

<p><span class="font-weight-bold">Cambiar página de inicio</span> <br>
→ Reading → Front page displays</p>
<p><span class="font-weight-bold">Url's amigables:</span> <br>
→ permanlinks</p>
<p>Los medios (una foto, un pdf, etc.) tienen asignados una url dentro de Wordpress. A veces esa url coincide con la de una página web, y no podemos asignar a la web la url que deseamos. Para solventar esto, debemos asociar el medio a web en la biblioteca de medios.</p>

<div class="row">
    <div class="col-md-10"><img class="img-fluid" src="img/medios.png" alt="pantallazo de la biblioteca de medios de wordpress"></div>
    <div class="col-md-2"><?= getRes('video_premium',230019704) ?></div>
    </div>
</div>



</article>
<article>
    <div>
    <h2 id="instalar_plantilla">Instalar Plantilla</h2>
<div class="row">
    <div class="col-md-10">
    <p>Appearance → Themes → Install themes</p>
    <p>También podemos descargar una plantilla y descomprimirla en la carpeta wp-content/themes</p></div>
    <div class="col-md-2"><?= getRes('video_premium',230019946) ?></div>
</div>



</div>
</article>

<article>
    <div>
    <h2 id="widgets">Widgets</h2>

<div class="row">
    <div class="col-md-10">
    <p>Apariencia → Widgets, o desde Apariencia → customize.</p>
    <p>Su ubicación depende de la plantilla. Además, a menudo la plantilla trae widgets por defecto.</p>
    
    </div>
    <div class="col-md-2"><?= getRes('video_premium',230020092) ?></div>
</div>

  

   
</div>
</article>



<article>
    <div>
    <h2 id="importar">Importar desde blogger, otro wordpress, etc. a servidor</h2>

<div class="row">
    <div class="col-md-7">
        
    <p>Esto sólo exporta las entradas, páginas, comentarios, campos personalizados, menús de navegación y entradas personalizadas. No los widgets, ni la plantilla, ni los plugins...</p>
    <p>En wordpress.com: <br>
Tools → Exportar</p>

<p>En localhost: <br>
Tools → Import</p>
    </div>
    <div class="col-md-5">
    <div class="centraditos">
   <?= getRes('video_premium',221233844) ?>
   <?= getRes('video_premium',230020165) ?>
   </div>

    </div>
</div>

</article>


<article>
    <div>
        <h2 id="tips">Tips</h2>
    <h3>Cargar traducciones del core de Wordpress</h3>
    <ol>
        <li>Debemos conocer nuestra versión de wordpress que está en la esquina inferior izquierda de nuestro panel de administración.</li>
        <li>Debemos descargar de la página <a target="_blank" href="http://es.wordpress.org/releases">http://es.wordpress.org/releases</a> el paquete de wordpress correspondiente a nuestra versión y nuestro idioma.</li>
        <li>Copiamos el fichero carpetaDescargadaWordpress/wp-content//languages/es_ES.mo en la análoga carpeta de nuestra instalación de Wordpress. Si dicha carpeta no existe, la creamos.</li>
        <li>Editamos el fichero wp-config.php y en la definición de la constante de idioma asignamos el valor del idioma que estamos instalando: <br>
define("WPLANG", "es_ES");</li>
    </ol>
    <h3 id="cambiar_idioma">Cambiar el idioma de wordpress</h3>

<p>Ajustes -> Generales -> Idioma del sitio: Español</p>

<?= getRes('video_premium',230017925) ?>

<h3 id="muchos_menus">Problema al insertar muchos menús</h3>
    <p>Cada vez que salvamos un menú, realmente estamos salvando ese y todos los ya almacenados. El servidor tiene un límite en el número de variables que puede mandar en una petición. Dicho límite puede hacer que a partir de cierto punto no se nos salven los menús. Para aumentar dicho límite, en versiones recientes de php podemos crear un fichero php.ini que modifique la configuración del servidor en un hosting compartido. Para solventar el problema descrito, este fichero deberá tener el siguiente código:</p>
<div class="row">
    <div class="col-md-10"><pre><code>max_execution_time = 120
max_input_time = 60
max_input_vars = 3000
memory_limit = 512M</code></pre></div>
    <div class="col-md-2"><?= getRes('video_premium',230020590, 'Arreglar problema de menú con muchos submenús en wordpress') ?></div>
</div>



   
</div>
</article>



</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>