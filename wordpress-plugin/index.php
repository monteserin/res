<?php 
$titulo_curso="Curso de plugins para Wordpress";
$meta_description = 'Llevo usando wordpress desde hace más de 10 años. Con este curso te muestro la selección de plugins que he ido haciendo a lo largo de los años.';
$img_curso = 'curso-wordpress.svg';
$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
    global $dots;
?>
 <script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Course",
			"name": "Curso de plugins para Wordpress",
			"description": "Curso de plugins para Wordpress en el que veremos la selección de plugins que he ido haciendo a lo largo de los años para realizar sitios web con Wordpress. Llevo más de 12 años impartiendo, mejorando y actualizando el contenido de este curso.",
			"provider": {
				"@type": "Person",
				"name": "Pablo Monteserín",
				"sameAs": ["https://pablomonteserin.com/", "https://www.facebook.com/pablomonteserincom/", "https://www.linkedin.com/in/%E2%99%A5-pablo-monteser%C3%ADn-59079728/", "https://www.youtube.com/user/PabloMonteserinTutor", "https://twitter.com/monteserin1982"]
			}
		}
	</script>

 <section id="amor" class="verIndice">
		<article id="inicio_del_documento" class="indice">
	<ol>
            <li><a href="#introduccion">Introducción</a></li>
            <li><a href="#contact-form">Formulario de contacto</a>
            <li><a href="#newsletter">Newsletters</a> 
            <li><a href="#wysiwyg-contenido">WYSIWYG y contenido</a></li>
<li><a href="#social">Social</a></li>
<li><a href="#widgets">Widgets</a></li>
<li><a href="#multimedia">Multimedia</a>
<li><a href="#calendario">Calendario</a></li>
<li><a href="#mapas">Mapas</a></li>
<li><a href="#optimizacion">Optimización</a></li>
<li><a href="#seguridad">Seguridad</a></li>
<li><a href="#backups">Backups y migración</a></li>
<li><a href="#otros">Otros</a>
</li></ol>';

</article>
	</section>

<main class="curso">
<?= drawH1WithImg() ?>

<article>
<div>
        <h2 id="introduccion">Introducción</h2>

<p>Extienden las funcionalidades de wordpress.</p>
<p>Es posible instalar plugins que no estén recogidos en wordpress.org. <span class="black bold">Plugins → Add new → Upload</span></p>
<p>Nota: no podemos eliminar plugins que estén activos.</p>


    <h3>Problema típico al insertar plugins en sistemas linux (Mac, Ubuntu, etc.)</h3>
    <p class="green">
        To perform the requested action, WordPress needs to access your web server. Please enter your FTP credentials to proceed. If you do not remember your credentials, you should contact your web host.
    </p>

    <p>
<span class="black bold">Solución:</span> </p>
<p>Añadimos esta línea al fichero wp-config.php ubicado en la raíz:</p>
<pre><code>define('FS_METHOD','direct');</code></pre>

    <p><a target="_blank" href="http://plugintable.com/">http://plugintable.com/</a> → En esta página están los plugins más importantes de wordpress.</p>
    </div>
</article>

<article>
<div>

<h2 id="contact-form">Formulario de contacto</h2>

<ul>
    <li>
            <a id="contact_form_7" target="_blank" href="https://wordpress.org/plugins/contact-form-7/">Contact Form 7</a> → Añade un formulario de contacto. Lo configuraremos contra una cuenta del servidor (loquesea@dominio.com), y no contra una cuenta de gmail o hotmail. <br>
            <a href="https://contactform7.com/special-mail-tags/" target="_blank">Shortcodes disponibles para contact form 7</a>.
            <p>En el siguiente código, observa que primero va el tipo de etiqueta, luego el campo al que hacen referencia, luego los <span class="i">class</span> e <span class="i">id's</span> y finalmente el <span class="i">placeholder</span>. Debemos mantener este orden.</p>
<pre><code>[text direccion class:direccion id:direccion placeholder"nombre"]</code></pre>


<p>En chrome no se ven las <span class="i">checkboxes</span> de aceptación. Para visualizarlas, utilizaremos el siguiente código:</p>
<pre><code>input[type="checkbox"] {
    width: 13px !important ;
    -webkit-appearance: checkbox !important;
}</code></pre>
        </li>
        <li><a id="contact_form_7_modules" target="_blank" href="https://wordpress.org/plugins/contact-form-7-modules/">Contact Form 7 Modules: Hidden Fields</a> → Permite añadir campos ocultos dinámicos (pueden cambiar en función del título de la web ,etc. ) al contact form 7</li>
        <li>
            <a id="contact_form_7_dynamic" target="_blank" href="https://wordpress.org/plugins/contact-form-7-dynamic-text-extension/">Contact Form 7 Dynamic Text Extension</a> → Permite recoger en el formulario, parámetros enviados desde la página anterior. Para ello usaremos estos shortcodes:
            <pre><code>
[dynamichidden name_que_tendra_el_input "CF7_GET key='name_en_la_url_que_uso_para_recoger_datos'"]
[dynamictext name_que_tendra_el_input "CF7_GET key='name_en_la_url_que_uso_para_recoger_datos'"]

            </code></pre>
        </li>

        <li><a href="https://wordpress.org/plugins/wpcf7-redirect/" target="_blank" id="contact_form_7_redirect">Contact Form 7 Redirection</a></li>
<li id="contact_form_7_google_captcha">Contact Form 7 Google Captcha -> Para hacer esta integración no es necesario un plugin. Desde el menú Contacto -> Integración es posible hacerlo.</li>
<li><a id="math_captcha" href="https://wordpress.org/plugins/wp-math-captcha/" target="_blank">Math Captcha</a> -> Añade un captcha matemático al Contact Form 7 que no va a precisar integración con Google.</li>
<li><a target="_blank" href="https://wordpress.org/plugins/flamingo/" id="flamingo">Flamingo</a> -> Almacena en la base de datos de Wordpress los mails enviados por los usuarios</li>
                <li><a id="wp_mail_smpt" target="_blank"  href="https://wordpress.org/plugins/wp-mail-smtp/">wp-mail-smtp</a> → Permite mandar correos por SMTP, más seguro que usar la función mail de php. Algunos servidores (como HostEurope), no permiten usar la función mail por defecto, por razones de seguridad. A menudo, los servidores gratuitos (como Free Web Hosting Area) no permiten usar el servicio SMTP. <br>Habitualmente, utilizaremos los datos de conexión de una cuenta de nuestro server, en lugar de una de hotmail o gmail.</a></li>
    <!--li><a target="_blank"  href="https://wordpress.org/plugins/maintenance/">Maintenance</a>. Sólo los usuarios logueados podrán ver la página. Este plugin es útil sobre todo en la instalación de Wordpress, cuando aparece la check de si queremos que google indexe nuestra web. Debemos marcar esa check para que google la indexe a pesar de que todavía esté en desarrollo. Luego, instalaremos este plugin, para que, aunque google indexe la página, esta todavía no sea visible. Si no marcamos la check, luego nos costará que google indexe la web.</li-->
    <!--li><a target="_blank"  href="https://wordpress.org/plugins/easy-testimonials/">Easy Testimonials</a>. Permite incluir una sección con paginación de testimonios así como un slider de testimonios.</li-->
<li><a href="https://www.gravityforms.com/pricing/" target="_blank">Gravity Forms</a></li>

</ul>
</div>
</article>

<article>

<div>
    <h2 id="newsletter">Newsletters</h2>
<ul>
<li><a id="mailpoet" target="_blank"  href="https://wordpress.org/plugins/wysija-newsletters/">MailPoet Newsletters</a> → Para mandar boletines. Para crear un formulario de inscripción iremos a "Mail Poet -> ajustes -> formularios" .</a></li>

<li><a id="mailchimp" target="_blank" href="https://es.wordpress.org/plugins/mailchimp-for-wp/">MailChimp for WordPress</a>→ Es el plugin más usado para el envío de newsletter y me dió muchos menos problemas de configuración que mailpoet.</li>

</ul>

  </article>

  <article>
      <div>
<h2 id="wysiwyg-contenido">WYSIWYG y contenido</h2>


<ul>
    <li><a id="elementor" href="https://elementor.com/" target="_blank">Elementor</a></li>
        <li><a id="read_justify_button" href="https://es.wordpress.org/plugins/re-add-text-justify-button/" target="_blank">Re add text justify button</a></li>
        <li><a id="cpt" href="https://wordpress.org/plugins/custom-post-type-ui/">Custom Post Type UI</a> -> Crea custom post type personalizados</li>


<!--li><a id="page_builder" target="_blank"  href="https://wordpress.org/plugins/so-widgets-bundle/">SiteOrigin Widgets Bundle</a> → Permite hacer estructuras de filas y columnas sin saber maquetar. Para usarlo, desde la pantalla, de entrada o de página. Insertaremos una fila con un número determinado de celdas. Luego, pulsando con el botón derecho sobre la celda, podremos editar su contenido. En elmodo de edición de filas tiene la opción para que estas ocupen el 100% de la pantalla. También es posible introducir los tamaños de las filas por teclado, pulsando tabulador para cambiar de fila a fila y enter para confirmar todos los tamaños introducidos.
</li-->
        <li><a href="https://wordpress.org/plugins/mce-table-buttons/" target="_blank" id="mce_table_buttons">MCE Table Buttons</a> → Añade un botón para creación de tablas al editor WYSIWYG</li>
  <li><a id="tinyMCE_advanced" href="https://wordpress.org/plugins/tinymce-advanced/" target="_blank">TinyMCE Advanced</a> → Editor WYSIWYG vitaminado. Para configurarlo: Settings -> TinyMCE Advanced. Podemos añadir formatos personalizados a la combo de formatos del editor editando el functions.php con este código:

<pre><code>add_filter('tiny_mce_before_init', 'wpse3882_tiny_mce_before_init');
function wpse3882_tiny_mce_before_init($settings){
    $style_formats = array(
        array('title' => 'Red text', 'inline' => 'span', 'styles' => array('color' => '#ff0000')),
        array('title' => 'Fondo azul', 'block' => 'h2', 'classes' => 'fondo_azul'),
    );
    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;
}</code></pre>        </li>
        <li><a target="_blank"  href="https://wordpress.org/plugins/magic-dates/">Magic Dates</a> → Count up.</li>
        <li><a id="duplicate_post" href="http://lopo.it/duplicate-post-plugin/">Duplicate Post</a> → Permite duplicar páginas y entradas.</li>

        <li><a id="tabby" target="_blank" href="https://wordpress.org/plugins/tabby-responsive-tabs/">Tabby</a> Permite convertir páginas independientes en pestañas de una misma página. Pulsa aquí para ver la <a href="http://cubecolour.co.uk/tabby-responsive-tabs/" target="_blank">documentación de Tabby</a></li>
          <li><a target="_blank"  href="https://es.wordpress.org/plugins/title-remover/">Title Remover
</a> → Añade la posibilidad de ocultar el títulos de páginas y posts.</li>

</ul>
</div>
</article>
<article>
    <div>
    <h2 id="social">Social</h2>


<ul>
            <li><a id="twitter" target="_blank" href="https://wordpress.org/plugins/twitter/">Twitter</a> → Añade un botón de seguir mediante un widget.</li>
        <li><a id="twitter2" target="_blank" href="https://wordpress.org/plugins/wp-twitter-feeds/">WP twitter feeds</a> -> nos permite visualizar el feed de noticias de Twitter. Para recuperar los datos de acceso, usaremos <a target="_blank" href="https://apps.twitter.com/app/new">este enlace.</a></li>
                <li><a id="add_to_any" href="https://wordpress.org/plugins/add-to-any/" target="_blank">Add to Any</a> → Añade botones de compartir en redes sociales. Si quiero personalizar la apariencia de dichos botones, con CSS es sencillo</li>

                <li><a href="https://es.wordpress.org/plugins/onesignal-free-web-push-notifications/" target="_blank">One signal</a>Permite que la gente se susbriba a nuestra página a través del navegador. Tras instalar el plugin, habrá que sincronizarlo con <a href="https://onesignal.com/" target="_blank"></a></li>

           
</ul>
</div>
</article>
<article>
    <div>
            <h2 id="widgets">Widgets</h2>



    <ol>
        <li><a href="https://wordpress.org/plugins/q2w3-fixed-widget/" id="fixed_widget" target="_blank">Q2W3 Fixed Widget</a> → Fija el area de widget para que no desaparezca.</li>
                        <li><a id="widget_css_class" target="_blank" href="https://wordpress.org/plugins/widget-css-classes/">Widget CSS Classes</a> → Permite añadir un class a nuestros widgets para maquetarlos de forma diferente.</li>

<li><a id="recent_posts" target="_blank"  href="https://wordpress.org/plugins/recent-posts-widget-extended/">Recent Posts Widget Extended</a> → Permite colocar la última entrada y personalizar su apariencia.</li>


    <!--li><a id="feature_page" target="_blank"  href="https://wordpress.org/plugins/feature-a-page-widget/">Feature a page widget</a>. Permite introducir el previo de una página (con su featured image) en un widget</li-->
        <li><a target="_blank"  href="https://wordpress.org/plugins/widget-logic/">Widget Logic</a> → Permite administrar la visualización de plugins (qué plugins se verán en qué páginas).</li>

    </ol>
    </div>
</article>
<article>
<div>
    <h2 id="multimedia">Multimedia</h2>


<ul>
<!--li><a href="">Soliloquy </a> → La versión gratuita no permite ponerlo a pantalla completa. La versión gratuita me va bien cuando el slider tiene fotos de un ancho fijo.</li-->
<li><a id="smart_slider" target="_blank" href="https://wordpress.org/plugins/smart-slider-3/">Smart slider</a>: Su versión gratuitia permite colocar un slider a ancho completo y superponer y animar texto. 
<ol>
    <li>Cuando configuramos una "Main animation" esta se aplica a todo el slide, pero cuando configuramos además una "Background animation" la imagen de fondo cogerá esta nueva animación y la capa superpuesta se animará de acuerdo a la "Main animation". Esto lo podemos usar para animar bloques de texto.</li>
    <li>Cuando queremos la típica estructura de dos imágenes centradas, una con foto y otra con texto, usaremos un layout de dos columnas.</li>
</ol>
</li>

    <li>
        <a id="gallery_video" target="_blank" href="https://wordpress.org/plugins/gallery-video/">Huge IT Video Gallery</a> → Me gusta más el Envira Gallery, pero para poner videos necesitaremos la versión pro, y con este plugin no hace falta. Tiene algunos conflictos de Javascript con el plugin autoptimize.

    </li>
    <li><a id="envira_gallery_lite" target="_blank" href="https://wordpress.org/plugins/envira-gallery-lite/">Envira Gallery Lite</a></li>

    <li><a id="foogallery" target="_blank" href="https://wordpress.org/plugins/foogallery/">Foo Gallery</a>→ Aunque es algo lenta que Envira Gallery, no tiene la limitación de subida de 30 mb para su versión gratuita y permite meter cómodamente captions a las fotos.</li>


    <li>
        <a id="gallery_video" target="_blank" href="https://wordpress.org/plugins/svg-support/">svg support</a>→ permite añadir imágenes a Wordpress en formato SVG.

    </li>
    
</ul>
</div>
</article>
<article>
    <div>
    <h2 id="calendario">Calendario</h2>


<ol>
    <li><a id="google_calendar_events" target="_blank"  href="https://wordpress.org/plugins/google-calendar-events/">Google Calendar Events</a> → Calendario que se sincorniza con google y que puedo maquetar como yo quiera, no como el iframe de google.</li>
<li><a id="the_events_calendar" target="_blank" href="https://wordpress.org/plugins/the-events-calendar/">Events Calendar</a> → Podemos definir la página dónde se va a ver el calendario, llendo a Events → Settings → Events URL slug</li>
<li><a id="the_events_calendar_shortcode" href="https://wordpress.org/plugins/the-events-calendar-shortcode/">The Events Calendar Shortcode</a> → Events Calendar nos daba un calendario con eventos que podremos gestionar desde wordpress. Para poner el calendario en un widget, necesitaremos la versión pro o usar este plugin</li>

<li><a id="MyCalendar" href="https://wordpress.org/plugins/my-calendar/">MyCalendar</a> → Calendario similar al "The Events Calendar" que podremos poner en el area de widgets. 
<ul>
    <li>Si queremos enlaces de navegación en el correspondiente widget "My Calendar: Mini Calendar", rellenaremos el campo "Navigation Below Calendar", "nav".</li>
    <li>Si queremos cambiar el día en que comienza el calendario -> Settings (de wordpress, no del plugin) -> general -> week starts on</li>

</ul>
</li>
</ol>




    </ul>
</div>
    </article>
    <article>
        <div>
<h2 id="mapas">Mapas</h2>


<ul>
    <li><a id="google_maps" target="_blank" href="https://wordpress.org/plugins/api-key-for-google-maps/">API KEY for Google Maps</a> → Forma sencilla de solucionar el problema que se muestra en la consola de Javascript de algunas plantillas: "Google Maps API error: MissingKeyMapError". Habrá que generar una <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key">API KEY</a>.  </li>

<li><a id="geodirectory" target="_blank" href="https://wpgeodirectory.com/">Geodirectory</a>. Permite añadir un mapa con chichetas de lugares. Shortcodes:
	<pre><span class="black bold">Mapa principal</span><code>[gd_homepage_map width=100% height=300 autozoom=true scrollwheel=false]</code></pre>
    <pre><span class="black bold">Mapa vinculado a una categoría</span><code>[gd_listing_map category="134" width=100% height=300 scrollwheel=false zoom=2 ]</code></pre>
    <pre><span class="black bold">Listado de lugares</span><code>[gd_listings post_type="gd_place" layout=1 post_number="10" category="134"]</code></pre>
<p>Para que funcione es necesario:</p>
<ul>
    <li><span class="black bold">Introducir la API key de Google</span>: Menu Geodirectory -> Design -> Map. </li>
    <li>Vincular las localizaciones a un listing o categoría. De lo contrario nos dará el error: <strong>"Sorry, no records were found. Please adjust your search criteria and try again"</strong></li>
    <li>Comprar el plugin de multilocations: <a href="https://wpgeodirectory.com/downloads/location-manager/" target="_blank">Location Manager</a> (salvo que todas las localizaciones estén en la misma zona).</li>
    <li>A veces es necesario quitar muchos extras que añade el shortcode por defecto (últimos lugares, right sidebar, etc.) Para ello podemos ir a: Geodirectory -> Design</li>
</ul>
<p><strong>Enlaces rotos</strong></p>
<p>Cuando al pulsar sobre alguna de las chinchetas obtengamos un error 404, podemos hacer alguna de las siguientes cosas ( o todas):</p>
<ol>
    <li>ajustes -> enlaces permanentes -> volvemos a salvar</li>
    <li>geodirectory -> enlaces permanentes -> volvemos a salvar</li>
    <li>geodirectory -> GD tools -> Location category counts -> RUN</li>
</ol>


<p><strong>Franchise Manager</strong></p>
    <p>Si queremos tener varias direcciones vinculadas a un solo place (franquicias), debemos instalar al addon <strong>Franchise Manager</strong>. Para usar este plugin:</p>
		<ol>
			<li>Geodirectory -> Franchise Settings -> Select post type to enable franchise feature -> Place Settings</li>
			<li>Ahora editamos un place:
				<ol>
					<li>Place Franchise Settings: yes:  Esta será la franquicia padre. Los demás lugares que creemos a partir de este, serán hijos.</li>
					<li> Lock franchise fields -> Los campos seleccionados se repetirán para todos los lugares franquiciados hijos.</li>
					<li>Para crear lugares franquiciados iremos al frontend de la franquicia padre estando logueados -> Add Franchise -> aparecerán para rellenar los campos que no bloqueamos en el apartado anterior. Debemos seleccionar Add New Franchise, o modificaremos la franquicia padre que hemos seleccionado en lugar de añadir una nueva.</li>
					<li>La nueva franquicia no estará activa por defecto, habrá que publicarla.</li>
				</ol>
			</li>
		</ol>
        <p>Mostrar la localización del lugar en el listado de lugares que comparten el mismo tag: GD > Place settings > Custom Fields tab > Address field > Show in what locations? > select “Listings page”.</p>
<p><strong>Traducir Franchised places</strong></p>
<ol>
    <li>Creamos un place.</li
>    <li>Creamos las franquicias del place.</li>
    <li>Para que todo funcione correctamente, <strong>el place y sus franquicias deben estar publicadas (no sirve que estén definidas como borrador).</strong></li>
    <li>Con el WPML duplicamos el main place(el place que creamos al principio) al idioma deseado, de tal forma que también se duplicarán automáticamente sus franquicias.</li>
</ol>
<p>Para añadir/eliminar campos descriptivos personalizados (tamaño, número de bares, precio por metro cuadrado...) a los lugares: Geodirectory -> Place Settings -> Configuro que campos estarán activos y puedo añadir nuevos campos. No olvidar que para que un campo esté activo debemos haberle dado un valor en "<span class="font-weight-bold">Show in what locations?</span>"</p>
<pre><span class="font-weight-bold">Eliminar los breadcbrums en geodirectory</span><code>add_filter('geodir_breadcrumb','geodir_breadcrumb_remove',10,2);
function geodir_breadcrumb_remove($breadcrumb, $separator){
return '';
}</code></pre>

<pre><span class="font-weight-bold">Eliminar iconos sociales</span><code>remove_action('geodir_detail_page_sidebar', 'geodir_detail_page_sidebar_content_sorting', 1);

add_action('geodir_detail_page_sidebar', 'geodir_detail_page_sidebar_content_sorting_custom', 1);

function geodir_detail_page_sidebar_content_sorting_custom(){
    $arr_detail_page_sidebar_content =
    apply_filters('geodir_detail_page_sidebar_content' , 
                    array(  'geodir_share_this_button',
                            'geodir_detail_page_google_analytics',
                            'geodir_edit_post_link',
                            'geodir_detail_page_review_rating',
                            'geodir_detail_page_more_info'
                        )
                );
    if(!empty($arr_detail_page_sidebar_content)){
        foreach($arr_detail_page_sidebar_content as $content_function){
            if(function_exists($content_function)){
                add_action('geodir_detail_page_sidebar' , $content_function);   
            }
        }
    }
}</code></pre>

    <!-- li><a target="_blank"  href="https://wordpress.org/plugins/photo-gallery/">Photo Gallery</a> → Este plugin es el que más me gusta, pero me dio problemas a la hora de generar los shortcodes. Lo que recomiendo es que cada vez que queramos generar un shortcode reiniciemos el proceso pulsando sobre el enlace de Generate Shortcode.</li>
    <li><a target="_blank"  href="https://wordpress.org/plugins/gallery-by-supsystic/">Photo Gallery by Supsystic
</a></li>
    <li><a target="_blank"  href="https://wordpress.org/plugins/nextgen-gallery/">NextGen Gallery</a> → Este plugin me gusta menos que el anterior, pero como está muy extendido, pongo una pequeña documentación sobre su uso: para subir más fotos a una galería ya existente, veremos cual es ruta de la galería desde el panel de administración, subiremos las fotos por ftp y pulsaremos el botón de reescanear la carpeta para detectar nuevas fotos. Snippets para usar la galería:
<pre>
    <code>
[ngg_images gallery_ids="4" display_type="photocrati-nextgen_basic_thumbnails"]
    </code>
</pre>
Documentación: <a target="_blank"  href="http://www.nextgen-gallery.com/nextgen-gallery-shortcodes/">http://www.nextgen-gallery.com/nextgen-gallery-shortcodes/</a>
    </li-->
            <!-- li>
            <!a target="_blank"  href="https://wordpress.org/plugins/wp-jquery-lightbox/">WP jQuery Lightbox</a> → Aplica un efecto lightbox a las fotos de mi página.
        </li-->
        <!-- li>
            <a target="_blank"  href="http://revolution.themepunch.com/">Revolution Slider</a> → Este plugin de pago es un slider. El mejor slider que conozco.
        </li>
      
        <li><a target="_blank"  href="https://wordpress.org/plugins/ml-slider/">Meta Slider</a></li-->


<pre><span class="font-weight-bold">Reordenar los place tabs</span><code>
add_filter('geodir_detail_page_tab_list_extend', 'geodir_detail_page_tab_list_extend') ;
 
<span class="green font-weight-bold">//Este es el orden actual de las pestañas:</span>
function geodir_detail_page_tab_list_extend($tab_array){
    if ( 'gd_place' == get_post_type() ) {
    <span class="green font-weight-bold">//Esta es la séptima pestaña, por defecto es la séptima, pero la hemos movido al primer puesto</span>
    if(isset($tab_array['reviews'])){
         $new_tab_array['reviews'] = $tab_array['reviews'];
         <span class="green font-weight-bold">//El siguiente código indica que esta es la pestaña activa por defecto</span>
         $new_tab_array['reviews']['is_active_tab']='1';
         unset($tab_array['reviews']); <span class="green font-weight-bold">//Deshabilitamos el viejo tab</span>
    }
    if(isset($tab_array['post_profile'])){
         $new_tab_array['post_profile'] = $tab_array['post_profile'];
         $new_tab_array['post_profile']['is_active_tab']='';
         unset($tab_array['post_profile']);
    }
    if(isset($tab_array['post_info'])){
         $new_tab_array['post_info'] = $tab_array['post_info'];
         unset($tab_array['post_info']);
    }
    if(isset($tab_array['post_images'])){
         $new_tab_array['post_images'] = $tab_array['post_images'];
         unset($tab_array['post_images']);
    }
    if(isset($tab_array['post_video'])){
         $new_tab_array['post_video'] = $tab_array['post_video'];
         unset($tab_array['post_video']);
    }
    if(isset($tab_array['special_offers'])){
         $new_tab_array['special_offers'] = $tab_array['special_offers'];
         unset($tab_array['special_offers']);
    }
    if(isset($tab_array['post_map'])){
         $new_tab_array['post_map'] = $tab_array['post_map'];
         unset($tab_array['post_map']);
     }
    if(isset($tab_array['related_listing'])){
        $new_tab_array['related_listing'] = $tab_array['related_listing'];
        unset($tab_array['related_listing']);
    }
    foreach($tab_array as $key=>$tab){
        $new_tab_array[$key]=$tab;
    }
 
    return $new_tab_array ; } 
    else { return $tab_array ;  }
}</code></pre>
<p><span class="black bold">Para eliminar los tabs</span>: Geodirectory -> Design -> Details -> Detail Page Tab Settings -> Exclude selected tabs from detail page.</p>

<p><span class="black bold">Para traducir lugares y que se traduzcan</span>: Dentro del lugar o post que quiero traducir, le daremos a duplicate (en el idioma deseado) en lugar de darle al botón de translate.  </p>
<p>Este plugin es incompatible con <strong><a target="_blank" href="https://wordpress.org/plugins/multilingual-press/">Multilingual press</a></strong></p>

<p>Tener en cuenta que para traducir algunas cadenas, a veces se usan variables. Por ejemplo, si quiero traducir "Place category" la cadena correspondiente es <span class="font-weight-bold">%s category: %l</span></p>

<p>Es posible consultar el histórico de tickets abiertos en profile -> support history.</p>


<pre><span class="font-weight-bold">Mostrar el texto "vota" en el rating</span><code>//Habrá que ir a GD > Design > Scripts > Custom Style CSS y pegar allí el código    
.comment-respond .gd_rating:before {
    content:"Vota!";
}

.comment-respond .gd_rating {
    overflow: visible!important;
}</code></pre>
</div>
</article>
<article>
    <div>
<h2 id="optimizacion">Optimización</h2>


    <ul>
                <li><a id="alt_renamer" target="_blank" href="https://wordpress.org/plugins/media-alt-renamer/">Media Alt Renamer</a> → Facilita la modificación del texto alternativo de las imágenes desde la biblioteca de medios. </li>
            <!--li><a id="media_clearer" target="_blank" href="https://meowapps.com/media-cleaner/">Media File Cleaner</a> → Permite eliminar las imágenes no utilizadas. No va muy fino y aunque tiene papelera de reciclaje a veces borra de más. </li>
<li><a href="https://wordpress.org/plugins/custom-permalinks/" target="_blank" id="custom_permanlinks">Custom Permanlinks</a> → Permite editar las urls amigables.</li-->

<li><a id="wp_sweep" target="_blank"  href="https://wordpress.org/plugins/wp-sweep/">WPSweep</a> → Limpia y optimiza la base de datos.</li>
<li><a id="custom_functions" href="https://wordpress.org/plugins/my-custom-functions/" target="_blank">My Custom Functions</a></li>
<!-- li><a id="wp_smush_it" target="_blank"  href="https://wordpress.org/plugins/wp-smushit/">WP Smush</a> → Comprime las imágenes de wordpress para aumentar el rendimiento del sitio. Aparecerá un menú en Medios -> WP Smush. Pulsaremos en el enlace de abajo (You can also smush images individually from your Media Library). Si lo mantenemos activo, el plugin se encargará de comprimir las imágenes que vayamos subiendo. La versión pro, permite comprimir imágenes que están fuera de la carpeta de la plantilla.</li-->



<!--li><a target="_blank"  href="https://wordpress.org/plugins/async-js-and-css/">Async JS and CSS</a> → Activa la carga asincrónica de los scripts y css. Para solventar los problemas que puede dar con jQuery, en las <a href="https://wordpress.org/plugins/async-js-and-css/faq/">FAQ</a> vienen algunas soluciones </li-->
<li><a id="seo_by_yoast" target="_blank"  href="https://wordpress.org/plugins/wordpress-seo/">Yoast SEO</a> → Para hacer el SEO de nuestra web. Si falla el sitemap.xml que genera este plugin, el siguiente suele funcionar (a mí me pasó). Conviene activar las opciónes avanzadas de configuración del plugin (SEO -> características -> Páginas de ajustes avanzados).</li>
<li><a id="google_sitemaps" target="_blank" href="https://wordpress.org/plugins/google-sitemap-generator/">Google XML Sitemaps</a></li>

<li><a id="analytics" target="_blank"  href="https://wordpress.org/plugins/host-analyticsjs-local/">Complete Analytics Optimization Suite (CAOS)</a> → Activa Google analitics de forma automática  e independiente de la plantilla. Tiene la gran ventaja frente a otros plugins de que la librería de google Analytycs la caga localmente, agilizando la carga de la página y mejorando nuestro page speed. No olvidar copiar y pegar el tracking code en la configuración del plugin.
<li><a id="broken_link_checker" target="_blank"  href="https://wordpress.org/plugins/broken-link-checker/">Broken Link Checker</a> → Comprueba la existencia de enlaces rotos. Una vez utilizado es aconsejable desactivarlo hasta que lo queramos volver a usar porque consume recursos.</li>
</li>
<li><a id="ssl_redireccion" target="_blank" href="https://wordpress.org/plugins/really-simple-ssl/">Really Simple SSL</a> → Redirecciona todas las peticiones a https.</li>


<!--li><a id="asyn_javascript" target="_blank" href="https://wordpress.org/plugins/async-javascript/">Async Javascript</a> → Permite cargar el código de forma asíncrona para agilizar la carga de la web. Es recomendable usarlo en conjunción con el autoptimize</li>

<li><a id="hummingbird" href="https://wordpress.org/plugins/hummingbird-performance/">Hummingbird</a> → Plugin para aumentar la velocidad y evitar el render-blocking JavaScript and CSS in above-the-fold content. Uso:
<ol>
    <li>Hummingbird -> Asset Optimization</li>
    <li>Empezaremos por el JS. 
            <ul>
                <li>No cominaremos ficheros.</li>
                <li>Prácticamente todos los ficheros pueden cargarse al final del footer y en modo defer, pero iremos marcando estas opciones poco a poco y dejando para el final aquellas ficheros padre de los cuales dependen el resto.</li>

            </ul>
    </li>
    <li>Tener en cuenta que hasta que no visitemos la página en la que está el fichero al que hemos hecho las modificaciones, el cambio no se aplicará. Los ficheros cambios que tengan cambios que no estén materializados tendrán una ruedita de progreso al lado.
<img src="img/hummingbird-cambio-no-aplicado.png" alt="hummingbird-cambio-no-aplicado">
    </li>
    
</ol>

</li-->
<!--li><a id="imagify" href="https://wordpress.org/plugins/imagify/" target="_blank">Imagify</a></li -->

</li>



    </ul>






</ol>

<h4>Optimización de la velocidad (opción gratutita)</h4>
<ul>
    <li><a id="autoptimize" target="_blank"  href="https://wordpress.org/plugins/autoptimize/">Autoptimize</a> → Minimiza el html, el js y el css sin dar problemas, al contrario de lo que me pasaba con las opciones de minificación de W3 total Cache. Me dió mucho mejores resultados y me resultó mucho más fácil de configurar que el Hummingbird.</li>

    <li><a href="https://es.wordpress.org/plugins/wp-fastest-cache/" target="_blank">Fastest Cache</a> Utilizaremos este plugin para la gestión de la caché y la compresión gzip de la página, mientras que el minificado lo dejaremos en manos del autoptimize</li>

<li><a href="https://wordpress.org/plugins/resmushit-image-optimizer/" id="resmushit">re-smush it</a> → Comprime las fotografías de la web. <br>De todas formas, para obtener el mejor grado de optimización, será necesario usar un servicio web como <a href="https://tinyjpg.com/" target="_blank">https://tinyjpg.com/</a>

</ul>

<h4>Optimización premium de la velocidad ( opción de pago, merece la pena pagar)</h4>
    <li><a href="https://es.wordpress.org/plugins/wp-fastest-cache/" target="_blank">Fastest Cache</a> Este plugin tiene una versión premium vitalicia para un solo sitio que cuesta 50€. Tiene minificado de HTML, CSS y JS, Lazy load, carga asíncrona que no da errores, cache, compresión gzip, compresión de las imágenes, cdn... Si compras la versión premium de este plugin ya no sería necesario que usases el autoptimize.</li>

    <!-- li><a target="_blank"  href="https://wordpress.org/plugins/Widgetize Pages Light/">Widgetize Pages Light</a> → Permite introducir widgets en el contenido. Esto se puede hacer de varias formas; una, la que menos me gusta, es añadiendo filas y columnas utilizando el panel que aparecerá debajo de del area de edición de entradas y páginas. La que yo recomiendo es copiando el shortcode que se muestra en den tro del menú de widgetize pages, dónde se ve el listado de los sidebars creados y pegándolo dónde me interese.</li-->
    </div>
</article>

<article>
<div>
    <h2 id="seguridad">Seguridad</h2>


    <p>En general, no es necesario instalar un plugin para mejorar la seguridad de wordpress. Basta <a target="_blank" href="http://www.elperiodico.com/es/noticias/tecnologia/papeles-panama-origen-filtracion-por-que-wordpress-drupal-5046797">actualizar con frecuencia</a>, tener utilizar algo de sentido común y hacer algunas modificaciones en los ficheros .htaccess y wp-config.php</p>
    <ul>
        <li>El nombre del usuario administrador no debe ser "admin", que es el valor por defecto y creado en las instalaciones automáticas.</li>
        <li>La contraseña de los usuarios debe ser segura.</li>
        <li>Debemos eliminar los plugins que no usemos (no sólo desactivarlos), puesto que están subidos al ftp y pueden contener vulnerabilidades.</li>
        <li>Instalar plugins fiables (en principio, que se actualicen con frecuencia, que tengan buena valoración proveniente de varios usuarios, etc.).</li>
        <li>El prefijo de las bases de datos debe ser diferente de wp_, que es el prefijo estandar de todas tablas de wordpress del mundo, y esto permite al hacker tener una información valiosa sobre nuestra web.</li>
        <li>Modificaciones en el .htaccess ubicado en la raíz de wordpress
        <pre id="modificaciones_htaccess"><code><span class="bold"># Bloqueamos acceso al directorio includes</span>
&lt;IfModule mod_rewrite.c&gt;
RewriteEngine On
RewriteBase /
RewriteRule ^wp-admin/includes/ - [F,L]
RewriteRule !^wp-includes/ - [S=3]
RewriteRule ^wp-includes/[^/]+\.php$ - [F,L]
RewriteRule ^wp-includes/js/tinymce/langs/.+\.php - [F,L]
RewriteRule ^wp-includes/theme-compat/ - [F,L]
&lt;/IfModule&gt;

<span class="bold"># Bloqueamos acceso a WP-CONFIG</span>
&lt;Files wp-config.php&gt;
    Order Allow,Deny
    Deny from all
&lt;/Files&gt;

<span class="bold">#S&oacute;lo nuestra IP en el login</span>
&lt;Files wp-login.php&gt;
    Order Allow,Deny
    Deny from all
    Allow from 127.0.0.1
&lt;/Files&gt;

<span class="bold"># Protegemos nuestros HTACCESS</span>
&lt;Files ~ &#x201c;^.*\.([Hh][Tt][Aa])&#x201d;&gt;
    Order allow,deny
    Deny from all
    Satisfy all
&lt;/Files&gt;


<span class="bold"># Cerramos acceso a directorios de themes y plugins</span>
RewriteCond %{REQUEST_URI} !^/wp-content/plugins/file/to/exclude\.php
RewriteCond %{REQUEST_URI} !^/wp-content/plugins/directory/to/exclude/
RewriteRule wp-content/plugins/(.*\.php)$ - [R=404,L]
RewriteCond %{REQUEST_URI} !^/wp-content/themes/file/to/exclude\.php
RewriteCond %{REQUEST_URI} !^/wp-content/themes/directory/to/exclude/
RewriteRule wp-content/themes/(.*\.php)$ - [R=404,L]

<span class="bold"># No permitir ver los directorios</span>
Options -Indexes

<span class="bold"># Bloquear a los listillos que intentan descubrir vuestro author</span>
RewriteCond %{QUERY_STRING} ^author=([0-9]*)
RewriteRule .* http://example.com/? [L,R=302]


<span class="bold"># Deshabilitar el fichero <strong>xmlrpc.php</strong></span>. Ese fichero nos permite publicar remotamente a través de Microsoft Word, Textmate, Thunderbird, smartphones, entre otros clientes. También se encarga de pingbacks (enlaces de otros blogs a nuestros artículos) y enviar los trackbacks (enlaces de nuestro blog hacia artículos de otros blogs). Actualmente no se conocen vulnerabilidades de este fichero, pero hay muchos servicios que siguen atacando wordpress a través de él, lo cual puede derivar en una ralentización de la web. En principio, lo podemos borrar sin problemas ni remordimientos, o deshabilitar desde el .htaccess.
&lt;Files xmlrpc.php&gt;
 order allow,deny 
 deny from all 
&lt;/Files&gt;</code></pre></li>
<li>Permitir el acceso al admin de wordpress, pero sólo desde cierta IP (colocar un fichero .htaccess con este código en la raíz de la carpeta wp-admin):
<pre><code>AuthUserFile /dev/null
AuthGroupFile /dev/null
AuthName "Access Control"
AuthType Basic
order deny,allow
Deny from all
allow from 127.0.0.1
allow from 127.0.0.2
...
</code></pre>
</li>
<li>Modificaciones en el fichero <span class="bold">wp-config.php</span> ubicado en la raíz.
<pre><code>
/*Deshabilitamos la posibilidad de editar el código fuente
de Wordpress desde el panel de administración de Wordpress*/
define('DISALLOW_FILE_EDIT', true);
/*No queremos mostrar información de errores a ningún hacker*/
define('WP_DEBUG', false);
/*En caso de que el servidor tenga certificado de seguridad,
nos interesa utilizarlo para el login*/
define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);</code></pre>
</li>

    </ul>
    <h4>Plugins de seguridad</h4>
    <ul>
        <!--li><a target="_blank" href="https://wordpress.org/plugins/wp-limit-login-attempts/">WP limit login attempts</a></li-->
        <!--li><a id="seguridad" target="_blank" href="https://es.wordpress.org/plugins/all-in-one-wp-security-and-firewall/">All In One WP Security & Firewall</a>
            <ul>
                <li>Escritorio
                    <ol>
                        <li>Firewall básico. Bajo este menú hay varias pestañas de configuración. Iremos marcándolas todas. Tener en cuenta que en la pestaña "Reglas adicionales de cortafuegos", la check "Filtro de cadena de caracteres avanzado", al estar marcada imposibilita acceder a url's que no sean gestionadas desde el panel de administración de wordpress.</li>
                        <li>Permiso del archivo</li>
                        <li>Login lockdown</li>
                        <li>Tiene una opción para habilitar/deshabilitar el modo mantenimiento de la web.</li>
                    </ol>
                </li>
                <li>Brute force</li>
            </ul>
        </li-->
        <!--li><a id="wp_info_remover" target="_blank" href="https://wordpress.org/plugins/meta-generator-and-version-info-remover/">Meta generator and version info remover</a></li-->
        <!--li><a target="_blank" href="https://wordpress.org/plugins/ip-geo-block/">IP GEO Block</a>. Permite bloquer IPs, países, etc.</li>
        <li><a target="_blank" href="https://wordpress.org/plugins/admin-block-country/">Admin Block Country</a>. Bloquea el acceso al panel de control dependiendo de país de la IP.</li-->
    </ul>


 <ul>

    <li><a id="wordfence" href="https://wordpress.org/plugins/wordfence/">Wordfence Security</a> -> Plugin que cuenta de una opción genérica de seguridad que debería bastar para la mayoría de las webs.</li>
    <li><a id="sucuri" target="_blank" rel="nofllow" href="https://wordpress.org/plugins/sucuri-scanner/">Sucuri Security </a>- Auditing, Malware Scanner and Security Hardening</li>

    </ul>

    </div>
</article>
<article>
    <div>
<h2 id="backups">Backups y migración</h2>


    <p>Dependiendo de lo que buscamos y sobre todo de nuestros bolsillos, existen diferentes plugins para migrar, pero para mí, el gran ganador es Updraft plus. Este plugin es de pago si lo que queremos es migrar nuestro wordpress de una url a otra</p>
    <ul>
        <li><a id="updraftplus" href="https://updraftplus.com/" target="_blank">Updraft Plus</a>. Para hacer una migración:
<ol>
    <li>instalamos un wordpress limpio en la ruta de destino</li>
    <li>instalamos la versión plus (de pago) de updraft en el wordpress origen y en el wordpress destino</li>
    <li>me logeo en ambos wordpress con mi usuario updraft plus desde mi página premium/extensions</li>   
    <li>activo el plugin de migración en ambos wordpress</li>
    <li>En la página de destino: Menú Ajustes -> Respaldos Updraft Plus -> Botón Clonar/Migrar -> Create  Key -> copia el codigo en la pagina destino lo pego en la de origen</li>
    <li>Ahora ya puedo enviar una backup desde la de origen a la de destino
</li>
</ol>
        </li>
    </ul>
    <p>Si no podemos comprar el updraft plus, existen otras opciones más gratuitas / económicas.</p>
   
    <p>Una copia de seguridad puede fallar por diversos motivos. El más frecuente es que el servidor desde el que queremos sacar la copia o el servidor al que queremos migrar la copia tengan una configuración que nos imposibilite materializarla. Esto debería ser un problema del proveedor de hosting, aunque a menudo es el ténico de software el que termina arreglándolo. Por eso cito varios plugins para copiar bases de datos. Podemos ir utilizando dichos plugins en el orden que aquí propongo (el backup buddy que es de pago podemos obviarlo) en busca de un método que nos permita hacer la copia.</p>
    <ul>
            <li><a id="duplicator" target="_blank" href="https://wordpress.org/plugins/duplicator/">Duplicator </a> → Para hacer copias de seguridad de la web. Me dio problemas para sacar una copia de seguridad de una página echa con las plantillas divi de elegant themes. Según leí en foros, la verisón de pago no daba estos problemas, pero no la proble. El plugin backup buddy no me dió estos problemas, pero ha habido situaciones en las que el backup buddy no me iba y el duplicator sí. <a target="_blank" href="https://pablomonteserin.com/copia-seguridad-wordpress-2-duplicator/">Ver video con explicación de Duplicator</a></li>

    <li><a id="backupbuddy" target="_blank"  href="https://ithemes.com/purchase/backupbuddy/">Backup buddy</a> → Plugin de pago para hacer copias de seguridad, al contrario que el Updraft Plus, este pagas una vez y se acabó (no una vez al año). <br>

    <p>Razones por las que puede fallar:</p>
    <ul>
    	<li>    Para utilizarlo habrá que tener unos valores altos de max_execution_time y memory_limit en el php.ini. De lo contrario no queda claro porqué la copia de seguridad no se puede hacer. En cdmon, ampliar estos valores de forma temporal es muy cómodo.</li>
    	<li>Puede hacer conflicto con el ithemes security. Si la copia falla, una opción es deshabilitar el ithemes security para ver si así funciona.</li>
    </ul>
 
    <p>Una vez instalado este plugin, hay dos menús interesantes a tener en cuenta</p>
    <ul>
        <li><strong>Server tools -> Server</strong>: Aquí podemos comprobar-corregir la configuración del sevidor para que sea la más apropiada posible.</li>
        <li><strong>Server tools -> Site Size Maps</strong>: Aquí podemos ver qué carpetas son la que ocupan más del servidor. Esto es útil porque si el plugin se encuentra un fichero muy grande a la hora de sacar la copia de seguridad, puede fallar (sobre todo si estamos en un alojamiento compartido y no podemos cambiar el time out). Por ello, debemos asegurarnos de que no haya ficheros muy largos en el server a la hora de hacer la copia.</li>
    </ul>
    </li>
    <li><a id="all_in_wp_migration" target="_blank"  href="https://wordpress.org/plugins/all-in-one-wp-migration/">All-in-One WP Migration</a> → Plugin para hacer copias de seguridad. Es algo más largo de usar que el backup buddy. Para la restauración, primero hay que instalar un wordpress limpio, luego instalar el plugin, y a partir de ahí, hacer la restauración. Permite hacer un backup de un multisite, si bien, no va perfecto.</li>


   <li><p><a id="wp_migrate_db" target="_blank" href="https://wordpress.org/plugins/wp-migrate-db/">WP Migrate DB</a> o Migración de manual. Consiste descargar los ficheros por FTP y exportar la base de datos. WP Migrate permite exportar la base de datos reemplazando las cadenas de texto que hacen referencia a la ruta de Wordpress por los valores de la ruta de destino.</p>

<p>Para obtener las rutas que debo usar durante la exportación:</p>
<ol>
    <li><span class="font-weight-bold">Primera ruta</span>. Es la ruta para llegar a la carpeta de destino, sustituyendo el protocolo y el subdominio www (si lo tuviese) por //</li>
    <li><span class="font-weight-bold">Segunda ruta</span><pre><span class="font-weight-bold">
</span><code>&lt;?php
    // Ejecuto el siguiente comando php desde un fichero ubicado en la ruta de destino. 
    echo __DIR__;
?&gt;</code>
</pre>
</li>
</ul>


   <p> Este proceso lo podríamos hacer nosotros manuealmente con el "buscar reemplazar" de nuestro editor de código. Una vez subidos los ficheros al nuevo servidor e importado la base de datos, habrá que modificar el fichero wp-config.php para configurar la base de datos:</p>

    <pre><code>define('DB_NAME', 'borramep');
define('DB_USER', 'root');
define('DB_PASSWORD', 'pp');
define('DB_HOST', 'localhost');</code></pre>

   
<a target="_blank"  class="enlace_a_video"  href="https://pablomonteserin.com/migrar-un-wordpress-sin-plugin/">Ver tutorial</a></li>

 <li><a id="mediaTools" target="_blank" href="https://wordpress.org/plugins/media-tools/">Media Tools</a>: podemos usar este plugin cuando importamos contenido a wordpress. En estos casos, las urls de las imágenes suelen ser relativas al lugar desde el que hemos hecho la importación. Este plugin se encarga de importar las imágenes a nuestro site.</li>
            <li><a id="setfirst" target="_blank" href="https://wordpress.org/plugins/set-all-first-images-as-featured/">Set All First Images As Featured</a></li>

    <li><a id="search_and_replace" target="_blank" href="https://wordpress.org/plugins/search-and-replace/">Search and Replace</a>: permite reemplazar cadenas en la base de datos. Muy útil cuando tras una migración algo no funciona.</li>

    
</ol>
            </div>
 </article> 

 <article>
     <div>
    <h2 id="otros">Otros</h2>

    
<ul> 


<li><a id="ifmenu" href="https://wordpress.org/plugins/if-menu/">If Menu</a> → permite mostrar menús en Wordpress sólo cuando se cumplen ciertas condiciones.</li>
 <li><a id="logout_menu" target="_blank" href="https://wordpress.org/plugins/baw-login-logout-menu/">Login Logout Menu</a> → Permite añadir un link para desloguearnos de wordpress.</li>



           

<li><a href="https://wordpress.org/plugins/adminimize/" target="_blank" id="adminimizer">Adminimizer</a> → permite definir los menús del panel de administración que se verán en función del rol del usuario logueado.</li>   
<li><a id="acf" target="_blank" href="https://wordpress.org/plugins/">ACF (Advanced Custom Field) </a> → Permite añadir campos de texto personalizados a nuestra publicaciones para mostrarlos dónde nos interese. <a target="_blank" href="https://www.advancedcustomfields.com/resources/displaying-custom-field-values-in-your-theme/">Documentación</a>.</li>
<li><a id="csh_login" href="https://wordpress.org/plugins/csh-login/">CSH Login</a>  → Login modal pop up. Muestra un pop up para poder acceder a Wordpress.</li>

<li><a id="awsm_team" href="https://codecanyon.net/item/the-team-pro-team-showcase-wordpress-plugin/17521235">AWESOME Team</a> → Permite mostrar los miembros de un equipo de forma elegante.</li>
 


<li><a id="menu_visibility" target="_blank" href="https://wordpress.org/plugins/menu-items-visibility-control/">Menu Items Visibility Control</a> -> Nos permite filtrar que menus se van a ver en función del perfil del usuario, etc.</li>

        <li><a id="yuzo" target="_blank" href="https://wordpress.org/plugins/yuzo-related-post/">Yuzo - Related Posts</a> → Para que funcione, tras haberlo instalado, al menos habrá que indicar en el campo "<span class="bold">Related to</span>", el valor "<span class="bold">Category</span>"</li>
        <li><a id="super_rss_reader" href="https://wordpress.org/support/plugin/super-rss-reader">Super RSS Reader</a> → Permite cargar las últimas entradas publicadas en otro blog</li>

        <li><a id="loco_translate" target="_blank" href="https://wordpress.org/plugins/loco-translate/">Loco Translate</a> → Permite traducir cadenas de texto de Wordpress y poner lo que nos plazca. Si la plantilla con la que estamos trabajando es una plantilla hija y queremos modificar sus cadenas, probablemente, tendremos que buscar la cadena a traducir en la plantilla padre: Loco Translate -> Genesis.</li>
       

        <li><a id="akismet" target="_blank"  href="https://wordpress.org/plugins/akismet/">Akismet</a> → Es un filtro de Spam para los comentarios.</li>


        <li><a id="deshabilita_comentarios" target="_blank"  href="https://wordpress.org/plugins/disable-comments/">disable comments</a> → Deshabilita comentarios.</li>
      
        <li><a id="adminer" target="_blank" rel="nofollow" href="https://www.adminer.org/#download">Adminer</a> → Te permite acceder a la base de datos desde wordpress.</li>
                <li><a id="go_portfolio" target="_blank"  href="http://codecanyon.net/item/go-portfolio-wordpress-responsive-portfolio/5741904">Go Portfolio</a></li>
        <li><a href="https://wordpress.org/plugins/waving-portfolio/" target="_blank">Waving Portfolio</a> → Este plugin para portfolio abra la información vinculada a una foto en un pop up en lugar de en una nueva url y es gratuito.</li>
        <li><a target="_blank" href="https://wordpress.org/plugins/cookie-notice/">Cookie Notice by dFactory</a>.</li>
 <li><a id="easy_digital_downloads" href="https://easydigitaldownloads.com/" target="_blank">Easy Digital Downloads</a>
<p>Añadiremos elementos descargables desde el menú downloads. Luego, insertaremos los productos descargables dónde nos interese utilizando un shortcode.</p>
<p>Si en pasarela de pago escogemos "pago de prueba", podremos hacer pruebas de como funciona la venta.</p>
 </li>      
      
      <li><a id="headerandfooterscripts" href="https://wordpress.org/plugins/header-footer/" target="_blank">Header and Footer</a>: permite añadir un script a todas las páginas del site simlutanamente.</li>
      <li><a id="perpageaddto" href="https://wordpress.org/plugins/per-page-add-to/" target="_blank">Per page add to</a>: permite añadir scripts a nivel de página.</li>
      <li><a href="https://affiliatewp.com/pricing/" target="_blank">Affiliate WP</a>: Permite establecer afiliados (personas que a cambio de interceder para que te lleves una venta se llevan una comisión).  

<ol>
	<li>Establecemos a qué plataforma queremos vincular el plugin de afiliados (Restrict Content PRO, Woocommerce, Easy Digital Downloads, Contact Form 7, etc.): Afiliados -> Ajustes -> Integraciones</li>
	<li>Creamos un nuevo afiliado: Afiliados -> Afiliados -> Añadir nuevo -> </li>
	<li>Al crear un afiliado se crea una página llamada Affiliate Area. </li>
	<li>En esta página hay una pestaña: affiliate url. En esta pestaña hay una url que es la que debe usar el cliente para que la venta contabilice para el afiliado. Aquí podemos introducir cualquier url de la página para transformarla en una url de afiliados.</li>
	<li>Todo lo que haga en la web la persona que llega a ella a través de una url de afiliados queda trackeado en una cookie, aunque en la url desaparece el parámetro de afiliados.</li>
	<li>En Afiliados -> ajustes, configuramos.</li>
	<li>En Afiliados -> ajustes -> varios podemos establecer que cuando la persona llegue a la página de afiliados sin estar registrada aparezca un formulario para poder darse de alta como afiliada.</li>
</ol>
      </li>
</ul>
</div>
</article>
</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>