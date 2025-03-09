<?php
global $titulo_curso;
global $monteserin_path;
global $is_remote;
global $tiene_intro;
global $indiceGuay;
global $modulo;
global $hashtag;
global $indice;
$a = '';
$b = '';
$tit = '';
$icons = '';
//Si no es la página de inicio del curso
//o es un curso de una sola página
//o no estamos online

if ($is_remote && $tiene_intro) {
	$icons = '<section class="iconos">
	<a class="icono_gi modal-trigger" data-modal="modal-ejercicios">
	<img src="' . $monteserin_path . 'img_template/links/icon_ejercicios.png" alt="Icono ejercicios">
	<p class="icon_subtit">Ejercicios</p>
	</a>

	<a class="icono_gi modal-trigger" data-modal="modal-recursos">
	<img src="' . $monteserin_path . 'img_template/links/icon_recursos.png" alt="Icono REcursos">

	<p>Recursos</p>
	</a>
	<a class="icono_gi modal-trigger" data-modal="modal-videos">
	<img src="' . $monteserin_path . 'img_template/links/icon_videos.png" alt="Icono Videos">

	<p>Videos</p>
	</a>
	<p>A lo largo del curso de ' . $titulo_curso . ' encontrarás estos iconos, que son enlaces a los diferentes recursos del curso (ejercicios, ejemplos, ficheros descargables y videos premium).</p>
	</section>';
} else {
	$icons = '';
} ?>
<!--div class="contenedora_magica"-->
<!--a id="ir_a_inicio_de_mierda" href="#inicio_del_documento"></a -->