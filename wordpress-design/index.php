<?php 
/*$titulo_curso="Programación de plantillas en Wordpress";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
    global $path;
    include $path."diapos_theme/body_init.php";
    echo "<h1>$titulo_curso</h1>";
*/
    ?>
<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">

	<ol>
		<li><a href="#lo_minimo_necesario">Lo mínimo necesario</a></li>
			<li><a href="#rompemos_la_plantilla">Rompemos la plantilla</a></li>
            <li><a href="#wp_head_wp_footer">wp_head y wp_footer</a></li>
            <li><a href="#cambiar_img">Cambiar una imagen en nuestra plantilla</a></li>
            <li><a href="#navbar_ppal">Botonera Principal</a></li>
            <li><a href="#contenido">Añadimos la sección de contenido</a></li>
            <li><a href="#ficheros_basicos">Ficheros básicos en una plantilla con WordPress:</a></li>
            <li><a href="#add_hookd">Añadir Hooks</a></li>
            <li><a href="#add_widgets">Añadir Widgets</a></li>

            <li><a href="#crear_menu">Crear un menú modificando su HTML</a></li>
            <li><a href="#rel_no_follow">Añadir rel="nofollow" a todos los enlaces</a></li>
            <li><a href="#child_templates">Crear child pages</a></li>
            <li><a href="#child_themes">Crear child themes</a></li>
            <li><a href="#jQuery">jQuery no está funcionando en Wordpress</a></li>
            <li><a href="#assets">Assets</a></li>
            <li><a href="#evaluar_la_pagina_en_la_que_estamos">Evaluar la página en la que estamos</a></li>
            <li><a href="#shortcodes">Shortcodes</a>
                <ol>
                    <li><a href="#shortcodes">Añadir la posibilidad de usar shortcodes en wordpress sin widgets</a></li>
                    <li><a href="#ejecutarshorcode">Ejecutar un shortcode desde el código fuente de la plantilla</a></li>
                </ol>
            </li>
            

             <li><a href="#add_filtros">Añadir filtros a los resultados de búsqueda del search box</a>
<ol>
    <li><a href="#excluir_categorias">Excluír categorías</a></li>




    <li><a href="#custom_post_type">Mostrar sólo los custom post type indicados</a></li>
</ol>
        <li><a href="#excluir_incluir_categorias">Exluir/Incluir categorías del blog</a></li>

             </li>

            <li><a href="#donde_estoy">Recuperar el id de la página en la que estoy</a></li>

            <li><a href="#crearCustomPostType">Custom Post Type</a></li>

			</ol>
</article>
</section>
<main class="curso">
<section>
    <h2 id="lo_minimo_necesario">Lo mínimo necesario</h2>

<article >
<pre><span class="black bold">index.php</span><code>&lt;!DOCTYPE html&gt;<br/>
&lt;html&gt;
&lt;head&gt;
     &lt;title&gt;&lt;?php bloginfo('name'); ?&gt; &lt;?php wp_title(); ?&gt;&lt;/title&gt;
    &lt;meta name=&quot;description&quot; content=&quot;&lt;?php bloginfo('description'); ?&gt;&quot; /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;&lt;?php bloginfo('stylesheet_url')?&gt;&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;section&gt;
    &lt;header id=&quot;header&quot;&gt;&lt;/header&gt;
    &lt;section id=&quot;content&quot;&gt;&lt;/section&gt;
    &lt;footer id=&quot;footer&quot;&gt;&lt;/footer&gt;
&lt;/section&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<pre><span class="black bold">style.css</span><code><span class="green">/*
    Theme Name: Monteser&iacute;n Template
    Theme URI: URL del theme
    Author: Pablo Monteser&iacute;n
    Author URI: pablomonteserin.com
    Version: 1
    License: GNU General Public License v2 or later
    License URI: http://www.gnu.org/licenses/gpl-2.0.html
    Tags: blue, one-column
*/</span>
footer#footer{
    width:100%;
    height: 90px;
    background: blue
}
header#header{
    width:100%;
    height: 90px;
    background: salmon;
}
section#content{
    margin:auto;
    width:1000px;
    min-height: 500px;
    background: pink;
}</code></pre>
<p class="green">En la cabecera del fichero es donde tendremos los datos de nuestro theme que aparecerán en el menú administrador. <br>

Estas deben ser las primeras líneas del fichero ya que sin ellas el theme no será valido y por lo tanto descartado por Wordpress. 
</p>
</article>

<article>
    <h2>Ya está hecha la plantilla</h2>
</article>

</section>

<section>
    <h2 id="rompemos_la_plantilla">Rompemos la plantilla</h2>
<article >
    
    <p>Separamos del header para arriba y del footer para bajo en header.php y footer.php y los reinsertamos en la plantilla usando get_header();  y get_footer();</p>
    <p>
        Para incluir partes de la plantilla tenemos: <br>
<ul>
    <li>get_header();</li>
    <li>get_footer();</li>
    <li>get_sidebar();</li>
    <li><span class="black">get_template_part</span>('partePersonalizadaSinPuntophp');</li>
</ul>

    </p>


<pre><code>&lt;!DOCTYPE html&gt;<br/>
&lt;html&gt;
&lt;head&gt;
     &lt;title&gt;&lt;?php bloginfo('name'); ?&gt; &lt;?php wp_title(); ?&gt;&lt;/title&gt;
    &lt;meta name=&quot;description&quot; content=&quot;&lt;?php bloginfo('description'); ?&gt;&quot; /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;&lt;?php bloginfo('stylesheet_url')?&gt;&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;section&gt;
    &lt;header id=&quot;header&quot;&gt;&lt;/header&gt;
---------------------------------------------------------------------------------
    &lt;section id=&quot;content&quot;&gt;&lt;/section&gt;
---------------------------------------------------------------------------------
    &lt;footer id=&quot;footer&quot;&gt;&lt;/footer&gt;
&lt;/section&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

</article>
</section>

<section>
        <h2 id="wp_head_wp_footer">wp_head() y wp_footer()</h2>

<article>
<pre><code><span class="green">/* wp_head se pone justo antes del cierre de la etiqueta &lt;/head&gt; y            
* wp_footer se pone justo antes del cierre de la etiqueta &lt;/body&gt;
*/ </span>
&lt;?php <span class="red bold">wp_head();</span> ?&gt;
&lt;/head&gt;

&#x2026;

&lt;?php <span class="red bold">wp_footer();</span> ?&gt;
&lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
</article>
</section>

<section>
        <h2 id="cambiar_img">Cambiar una imagen en nuestra plantilla</h2>

<article>
    <p>Para obtener dinámicamente la ruta a la plantilla podemos usar:</p>
<pre><code>&lt;?php echo get_stylesheet_directory_uri()?&gt;</code></pre>
    <p>Por tanto, para cargar una fotografía usaremos:</p>
<pre><code>&lt;img class=&quot;logo&quot; src=&quot;&lt;?php echo get_stylesheet_directory_uri()?&gt;/elefante.jpg&quot; alt=&quot;&quot;&gt;          
</code></pre>
</article>
</section>

<section>
        <h2 id="navbar_ppal">Botonera Principal</h2>

<article>
    <p><span class="black bold">Pondremos este código dónde querramos que se vea la botonera principal:</span> </p>
<pre><span class="bold black">plantilla.php</span><code>
&lt;?php 
$defaults = array(
    'header' =&gt; 'Header menu',
        'theme_location'  =&gt; 'aqui lo pongo',
        'menu'            =&gt; '',
        'container'       =&gt; 'div',
        'container_class' =&gt; '',
        'container_id'    =&gt; '',
        'menu_class'      =&gt; 'menu',
        'menu_id'         =&gt; '',
        'echo'            =&gt; true,
        'fallback_cb'     =&gt; 'wp_page_menu',
        'before'          =&gt; '',
        'after'           =&gt; '',
        'link_before'     =&gt; '',
        'link_after'      =&gt; '',
        'items_wrap'      =&gt; '&lt;ul id=&quot;%1$s&quot; class=&quot;%2$s&quot;&gt;%3$s&lt;/ul&gt;',
        'depth'           =&gt; 0,
        'walker'          =&gt; ''
);

wp_nav_menu( $defaults );

?&gt;
    </code>
</pre>

<pre><span class="black bold">functions.php</span><code>
&lt;?php 
    register_nav_menus( array(
        'aqui lo pongo'   =&gt; __( 'El men&uacute; de arriba' ),
        'secondary' =&gt; __( 'Secondary menu in left sidebar'),
    ) );
?&gt;        
    </code>
</pre>

</article>
</section>

<section>
        <h2 id="contenido">Añadimos la sección de contenido</h2>

<article>
        
<pre><span class="black bold">En index.php:</span><code>get_header();
while ( have_posts() ) : the_post();
    get_template_part( 'content', get_post_format() ); 
endwhile;
get_footer();</code></pre>

<pre><span class="black bold">content.php</span><code>$query = get_post(get_the_ID()); 
$content = apply_filters('the_content', $query->post_content);
echo $content;</code></pre>
</article>
</section>

<section>
        <h2 id="ficheros_basicos">Ficheros básicos en una plantilla con WordPress:</h2>

<article>

    <ul>
        <li><span class="black bold">style.css</span> – Hoja de estilos principal del theme</li>
        <li><span class="black bold">index.php</span> – Página principal del theme</li>
        <li><span class="black bold">screenshot.png</span> → Es la foto del previo de wordpress que aparece en el panel de administración de wordpress. El tamaño correcto de esta fotografía es de 880 x 660 pixels.</li>
        <li><span class="black bold">comments.php</span> – Template para los comentarios (sino existe se coge el de por defecto de Wordpress)</li>
        <li><span class="black bold">comments-popup.php</span> – Template para los comentarios vía pop-up (sino existe se coge el de por defecto de Wordpress) </li>
        <li><span class="black bold">single.php</span> – Template usado para mostrar una entrada en concreto, también se puede montar de tal forma que se base en el index.php.</li>
        <li><span class="black bold">page.php</span> – Template usado para las páginas generadas.</li>
        <li><span class="black bold">category.php</span> – Template usado para mostrar las categorías</li>
        <li><span class="black bold">author.php</span> – Template que usa cuando queremos mostrar información del autor.</li>
        <li><span class="black bold">date.php</span> – Template usado para cuando buscamos por fechas</li>
        <li><span class="black bold">archive.php</span> – Template que nos muestras las entradas filtradas por Archives, este archivo puede sustituir a los 4 anteriores.</li>
        <li><span class="black bold">search.php</span> – Template que usamos para las búsquedas.</li>
        <li><span class="black bold">404.php</span> – Template que implementamos para cuando no encuentra una página dentro de nuestro dominio.</li>
    </ul>
</article>
</section>

<section>
        <h2 id="add_hookd">Añadir hooks</h2>

<article>
    <pre><span class="black bold"><span class="black bold">header.php (por ejemplo)</span></span><code>do_action('despues_body');</code></pre>
    <pre><span class="black bold">functions.php</span><code>add_action('despues_body', function(){
        <span class="green bold">...</span>
}, 100);</code></pre>
</article>
</section>

<section>
        <h2 id="add_widgets">Añadir Widgets</h2>

<article>
        <p>Al añadir el siguiente código se añadirán dos paneles de Widgets dentro del panel de administración de Wordpress. </p>

<pre><span class="black bold">functions.php</span><code>
if (function_exists('register_sidebar')) {
    <span class="blue">register_sidebar(array(
            'name' =&gt; 'Footer Left',
            'id'   =&gt; 'top-widgets',
            'description'   =&gt; 'Widget Area',
            'before_widget' =&gt; '&lt;div class=&quot;two&quot;&gt;',
            'after_widget'  =&gt; '&lt;/div&gt;',
            'before_title'  =&gt; '&lt;h2&gt;',
            'after_title'   =&gt; '&lt;/h2&gt;'
    ));     </span>
    <span class="orange">register_sidebar(array(
            'name' =&gt; 'Sidebar Widgets',
            'id'   =&gt; 'sidebar-widgets',
            'description'   =&gt; 'Widget Area',
            'before_widget' =&gt; '&lt;div class=&quot;one&quot;&gt;',
            'after_widget'  =&gt; '&lt;/div&gt;',
            'before_title'  =&gt; '&lt;h2&gt;',
            'after_title'   =&gt; '&lt;/h2&gt;'
     ));</span>
    }</code></pre>
<pre><span class="black bold">footer.php (o dónde sea)</span><code>
&lt;?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') ) : ?&gt;
&lt;?php endif; ?&gt;</code></pre>
</article>


<article>
    <h2>Evaluar si estoy en cierta página</h2>
    <p>Este código afectará a una página y todas sus paginaciones</p>
    <pre><code>add_action( 'wp_head', function(){
    if( is_page( array( 'coreografias' ) )){
        <span class="green bold">//Aquí es posible meter métodos add_action y remove_action</span>
    }
} );</code></pre>
</article>
<article>
    <h2 id="rel_no_follow">Añadir rel="nofollow" a todos los enlaces</h2>
    <p>Añadiremos el siguiente código al functions.php: <br>
<pre>
    <code>
function crunchify_nofollow_cat($text) {
    global $post;
    $text = stripslashes(wp_rel_nofollow($text));
    return $text;
}
add_filter('the_content', 'crunchify_nofollow_cat');
    </code>
</pre>
    </p>
</article>
</section>
<section>
        <h2 id="child_templates">Crear child pages</h2>

<article>
    <p>Crearemos un fichero loQueSea.php que como mínimo debe tener entre sus comentarios iniciales, inmediatamente al comienzo del documento, la primera línea en rojo de las que se muestran a continuación:</p>
<pre><code>&lt;?php
<span class="green">/* 
<span class="red bold">Template Name: Homepage</span> 
Description: Cool child theme based on Monteserin
Author: Pablo Monteserin
Version: 1.0
Template: monteserin
*/</span>
?&gt;</code></pre>
<p class="green">Si el nombre del template es page-{sulg}.php, no hará falta asignarlo a una página o post para que funcione.</p>


</article>
</section>

<section>
    <h2 id="child_themes">Crear child themes</h2>

    <article>
<pre><span class="black bold">wp-content/themes/tempera-child/style.css</span><code><span class="green">/*
Theme Name: tempera-child
Theme URI: http://semanticae.es
Version: 4.0
Description: Tema hijo de tempera para hacer cambios sin riesgo
Template: tempera

*/</span>
@import url("../tempera/style.css");

/*----------------- Empieza a añadir cambios aquí abajo -------------------------------*/

#content tr th, #content thead th {
    font-size: 14px;
    padding: 5px 2px;
}

.textwidget h3 {
        margin:0px;
}
#site-title  {
        margin-left: 60px;
}</code></pre>
</article>
</section>

<section>
        <h2 id="jQuery">jQuery no está funcionando en Wordpress</h2>

<article>
<pre><span class="black bold">Si este código no funciona:</span><code>$(document).ready(function(){
    alert('test');
});</code></pre>


<pre><span class="black bold">Podemos usar este en su lugar:</span><code>(function($) {
    $(function(){

    })
})(jQuery);</code></pre>


</article>
</section>

<section>
        <h2 id="assets">Assets</h2>

<article>
<pre><span class="bold">Carga de assets en el functions.php</span><code>add_action('wp_enqueue_scripts', 'prefix_add_my_stylesheet', 999);

function prefix_add_my_stylesheet(){
    wp_register_style( 'competencias', get_stylesheet_directory_uri().&quot;/css/competencias.css&quot;);
    wp_enqueue_style( 'competencias');
}</code></pre>

<pre><span class="bold">Carga de assets en un plugin</span><code>add_action('wp_enqueue_scripts', 'scriptsDelLogin', 9999);

function scriptsDelLogin(){
    wp_enqueue_style( 'monteserinLoginCSS',plugins_url("css.css", __FILE__));

    wp_enqueue_script( 'monteserinLoginJS',plugins_url('js.js', __FILE__) ,array('jquery'), 2, true);
}</code></pre></article>
</section>

<section>
        <h2 id="evaluar_la_pagina_en_la_que_estamos">Evaluar la página en la que estamos</h2>

<article>

    <pre><span class="bold">Evaluar si es una entrada del blog</span><code>is_singular('post')</code></pre>

    <pre><span class="bold">Evaluar si es el blog</span><code>is_home()</code></pre>

</article>

<section>
        <h2 id="shortcodes">Shortcodes</h2>


<article>
    <h3>Añadir la posibilidad de usar shortcodes en widgets sin plugin</h3>
    <pre><code>add_filter('widget_text', 'do_shortcode');</code></pre>
</article>

<article>
    <h3 id="ejecutarshorcode">Ejecutar un shortcode desde el código fuente de la plantilla</h3>
    <pre><code>echo do_shortcode('[wcm_restrict plan="plata"]contenido restringido[/wcm_restrict]');</code></pre>
</article>
</section>
<section>

<article>
    <h2 id="crear_menu">Crear un menú modificando su HTML</h2>
    <pre><code>class <span class="red bold">Walker_Custom_Menu</span> extends Walker_Nav_Menu {
    function display_element( $element, &amp;$children_elements, $max_depth, $depth=0, $args, &amp;$output ){
        <span class="green">//Creamos un m&eacute;todo has_children  que estar&aacute; disponible para las siguientes funciones y devolver&aacute; true cuando un nodo tenga hijos</span>
        $id_field = $this-&gt;db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]-&gt;has_children = ! empty( $children_elements[$element-&gt;$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
    function start_lvl(&amp;$output, $depth=0, $args=array()) {
        $class=&quot;&quot;;
        if ( $args-&gt;has_children ) {
            $class ='class=&quot;dl-submenu&quot;';
        }
        $output .= &quot;\n&lt;ul &quot;.$class.&quot;&gt;\n&quot;;
    }
    function end_lvl(&amp;$output, $depth=0, $args=array()) {
        $output .= &quot;&lt;/ul&gt;\n&quot;;
    }
    function start_el(&amp;$output, $item, $depth, $args) {
        $class = &quot;&quot;;
        if ( $args-&gt;has_children ) {
            $class =&quot;submenu&quot;;
        }
        $output.= '&lt;li&gt;&lt;a href=&quot;' . esc_attr( $item-&gt;url ) .'&quot;&gt;'.esc_attr($item-&gt;title).&quot;&lt;/a&gt;&quot;;
    }
    function end_el(&amp;$output, $item, $depth=0, $args=array()) {
        $output .= &quot;&lt;/li&gt;\n&quot;;
    }
}</code></pre>
    <h3>Para usar el menú anterior (directamente, sin registrarlo)</h3>
    <pre><code>&lt;?php
    wp_nav_menu(array(
        'menu'    =&gt; 1, //menu id
        'walker'  =&gt; new Walker_Custom_Menu(), //use our custom walker
        'container' =&gt; false, //evita la creaci&oacute;n de una capa container
        'menu_class' =&gt; 'dl-menu', //el class del ul que lo engloba todo
        'items_wrap'        =&gt; '&lt;ul id=&quot;dl-menu&quot; class=&quot;dl-menu&quot;&gt;%3$s&lt;/ul&gt;', //definimos como ser&aacute; el ul que envuelve a nuestra botonera
    ));
?&gt;</code></pre>
</article>
</section>

<section>
        <h2 id="donde_estoy">Recuperar el id de la página en la que estoy</h2>

<article>
<pre><code>global $post;
echo $post->ID;

$pagename = get_query_var('pagename');
echo $pagename;</code></pre>
</article>
</section>

<section>
        <h2 id="add_filtros">Añadir filtros a los resultados de búsqueda del search box</h2>

<article>

    <h3 id="excluir_categorias">Excluír categorías</h3>
<pre><code>function exclude_category($query) {
    if ( $query->is_home ) {
        $query->set( 'tax_query', array(
            'relation' => 'OR',
            array(
                'post_type' =>'proyectos',
                'taxonomy' => 'category',
                'field' =>  'ID',
                'terms' => 3
            ),
            array(
                'taxonomy' => 'post_tag',
                'field' => 'slug',
                'terms' => 'urgent'
            )
        ));
    }
    return $query;
}
add_filter('pre_get_posts', 'exclude_category');</code></pre>
<h3 id="custom_post_type">Mostrar sólo los custom post type indicados</h3>
    <pre><code>function searchfilter($query) {
 
    if ($query->is_search &amp;&amp; !is_admin() ) {
        $query->set('post_type',array('post','page', 'product'));
    }
    return $query;
}
 
add_filter('pre_get_posts','searchfilter');</code></pre>
</article>
</section>

<section>
        <h2 id="excluir_incluir_categorias">Exluir/Incluir categorías del blog</h2>

<article>

    <pre><code>add_action( 'pre_get_posts', 'bg_exclude_categories' );
function bg_exclude_categories( $query ) {
    if( $query->is_main_query() &amp;&am; $query->is_home() ) {
        <span class="green">//$query->set( 'cat', array( -27, -30 ) );</span>
        <span class="green">$query->set( 'category__not_in', array( 120) );  }</span>
    $query->set( 'category__not_in', array( 120) );  }
}</code></pre>
</article>
</section>


<section>
    <h2 id="crearCustomPostType">Custom Post Type (CPT)</h2>
<article>
    <h3>Crear Custom Post Type</h3>
    <pre><code>// Our custom post type function
function create_posttype() {
 
    register_post_type( 'movies',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Movies' ),
                'singular_name' => __( 'Movie' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'movies'),
          //  'taxonomies'  => array( 'category' ) Pondremos el siguiente código si queremos poder clasificar por categorías
        )
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );</code></pre>
</article>
<article>
<h3>Recuperar Custom Post Type</h3>
<pre><code>$args = array(
    'post_type' =>'proyectos',
    'taxonomy' =&gt; 'proyecto',
    'parent' =&gt; 0,
    'hide_empty' =&gt; false,   
    'posts_per_page' =&gt; 2 // -1 para mostrarlos todos
);
 
$proyectos = new WP_Query( $args );
if( $proyectos-&gt;have_posts() ) :

?&gt;
  &lt;ul&gt;
    &lt;?php
      while( $proyectos-&gt;have_posts() ) :
        $proyectos-&gt;the_post();
        ?&gt;
        &lt;div class=&quot;box_custom_post_type&quot;&gt;
        &lt;div&gt;&lt;?= get_the_post_thumbnail() ?&gt;&lt;/div&gt;
        &lt;h3&gt;&lt;a href=&quot;&lt;?=get_post_permalink() ?&gt;&quot;&gt;&lt;?=get_the_title() ?&gt;&lt;/a&gt;&lt;/h3&gt;
        &lt;div&gt;&lt;?= get_the_content() ?&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;?php

      endwhile;
      wp_reset_postdata();
    ?&gt;
  &lt;/ul&gt;
&lt;?php
else :
  esc_html_e( 'No proyectos in the diving taxonomy!', 'text-domain' );
endif;</code></pre>


</section>
</main>

<?php 
//});
//include $path."/diapos_theme/footer.php";
?>