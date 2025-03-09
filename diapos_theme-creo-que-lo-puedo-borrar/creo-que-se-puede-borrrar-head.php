<?php 
/*
enunciado
video explicación
codigo gris 
recurso escargable

----
video resuelto
ejercicio resuelto
-----	
*/
include 'paths.php';
$root = __DIR__;
$inicio_ruta = "https://";
$path= substr($root,0, strripos($root,'res')).'res/';
$premium = "";

//Si estamos en pablomonteserin.com
if(stripos($root, "/usr/home/pablomonteserin/www/curso")!== false){
	define('WP_USE_THEMES', false);
	require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

//* Add support for structural wraps
	/*add_theme_support( 'genesis-structural-wraps', array(
		'header',
		'nav',
		'subnav',
		'site-inner',
		'footer-widgets',
		'footer'
	) );*/

	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	//Eliminamos el texto Sorry, no content matched your criteria.
	add_filter( 'genesis_noposts_text', 'leaven_change_search_text_one', 10, 2 );
	function leaven_change_search_text_one( $text ) {
		$text ='';
		return $text;
	}


	add_filter( 'genesis_attr_site-container', function( $attributes ) {
		$attributes['class'] = $attributes['class']. ' monteserin_curso';
		  return $attributes;
	  } );


	remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
//eliminamos el texto you are here
	add_filter( 'genesis_breadcrumb_args', 'afn_breadcrumb_args' );
	function afn_breadcrumb_args( $args ) {
		$args['labels']['prefix'] = '';
		return $args;
	}

	function custom_title() {
		global $titulo_curso;
		return '👨🏻‍💻 Curso de '.$titulo_curso;
	}
	add_filter( 'pre_get_document_title', 'custom_title' );	


	
	add_action( 'wp_head', function() {

		global $meta_description;
		echo ' <meta name="description" content="'.$meta_description.'" />';
		
	  } );



	
// ELIMINAR SIDEBAR

//* Remove sidebars and header widget area
	unregister_sidebar( 'header-right' );
	unregister_sidebar( 'sidebar' );
	unregister_sidebar( 'sidebar-alt' );

//* Unregister layout settings
	genesis_unregister_layout( 'content-sidebar' );
	genesis_unregister_layout( 'sidebar-content' );
	genesis_unregister_layout( 'content-sidebar-sidebar' );
	genesis_unregister_layout( 'sidebar-content-sidebar' );
	genesis_unregister_layout( 'sidebar-sidebar-content' );

//* Force full width layout selection
	add_filter( 'genesis_pre_get_option_site_layout', 'genesis_do_layout' );
	function genesis_do_layout( $opt ) {
		$opt = 'full-width-content';
		return $opt;
	}


	/***********************/
	add_action('genesis_footer', function(){
		echo '	<!-- Modal Ejercicios-->
		<div class="modal" id="modal-ejercicios">
		<div class="modal-box">

		<div class="close-modal" style="font-weight: bold">X</div> 

		<div class="modal-body">
		<p>A lo largo de este curso encontrarás este icono sobre el que acabas de pulsar. Si has contratado una cuenta premium, los iconos con esta imagen te darán acceso al ejercicio resuelto y su correspondiente código fuente.</p>
		<p><a href="https://pablomonteserin.com/registro-premium/" target="_blank">Contrata ya tu cuenta premium!.</a></p>
		</div>
		</div>
		</div>
		<!-- Modal Recursos-->
		<div class="modal" id="modal-recursos">
		<div class="modal-box">

		<div class="close-modal" style="font-weight: bold">X</div> 

		<div class="modal-body">
		<p>A lo largo de este curso encontrarás este icono sobre el que acabas de pulsar. Si has contratado una cuenta premium, los iconos con esta imagen te darán acceso a los recursos descargables necesarios para hacer el ejercicio correspondiente.</p>
		<p><a href="https://pablomonteserin.com/registro-premium/" target="_blank">Contrata ya tu cuenta premium!.</a></p>
		</div>
		</div>
		</div>
		<!-- Modal Videos-->
		<div class="modal" id="modal-videos">
		<div class="modal-box">

		<div class="close-modal" style="font-weight: bold">X</div> 

		<div class="modal-body">
		<p>A lo largo de este curso encontrarás este icono sobre el que acabas de pulsar. Si has contratado una cuenta premium, los iconos con esta imagen te darán acceso al videoturoial que explica el ejercicio o la teoría que correspondai.</p>
		<p><a href="https://pablomonteserin.com/registro-premium/" target="_blank">Contrata ya tu cuenta premium!.</a></p>
		</div>
		</div>
		</div>';
	

	});
} else{ // si no estamos en remoto...
	$inicio_ruta= 'http://';
	global $titulo_curso;
	global $path;
	global $premium;
	$premium="premium";

	echo '<title>'.$titulo_curso.' | Pablo Monteserín</title>';
	//function add_action($p1, $p2) {  call_user_func_array($p2,array()); }
	//function genesis(){}
	
	
	echo '<style>h1{top:0}</style>';

echo '<div class="site-container monteserin_curso">';
echo '<main class="curso">';
}




include $path.'diapos_theme/getres/getres.php';
	function muestra($m){
		global $modulo;
		global $is_remote;
		//echo "------is_remote: ". $is_remote . " - modulo: ". $modulo . " - m:".$m;
		if( $is_remote && $modulo == $m || !$is_remote){
			return true;
		}
		return false;
	}

	function useHashtag($usalo = false){
		global $is_remote;
		if($is_remote && !$usalo){
			return '';
		}else{
			return '#';
		}		  
	}

	function drawH1WithImg(){
		global $titulo_curso;
		global $img_curso;
		global $dots; 
		return '<div class="container"><h1 class="row align-items-center">
		<div class="col-8 text-left">
			'.$titulo_curso.'<br /><span class="text-primary">Diseño Web</span></div>	
			<div class="col-3">
			<img class="img-fluid d-none d-xl-block" src="https://pablomonteserin.com/wp-content/themes/m/img/logos/'.$img_curso.'">

			</div>
	</h1>'.$dots.'</div>';
	}
	
?>
