<?php 
	global $is_remote;
	if($is_remote){
		add_action( 'genesis_footer', function() {
			wp_enqueue_script( 'curso_js', site_url().'/res/diapos_theme/js/curso.js',array('jquery'), 2, true);
		} );

	}else{
		// el highlight de wordpress lo cargué en el functions.php
		echo '<script src="'.$monteserin_path.'js/curso.js"></script>';
		echo '<link rel="stylesheet" href="'.$monteserin_path.'/css/style.css">';
		echo '</div></div>';
	}

	

	genesis();
