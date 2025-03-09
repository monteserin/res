<?php 
/*
$titulo_curso="Open Street Maps - Leaflet.js";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
add_action( 'genesis_after_header', function(){
	global $path;
	include $path."diapos_theme/body_init.php";
	echo "<h1>$titulo_curso</h1>";
	*/
?>
<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
<ol>  
	<li><a href="#instalacion">Instalación</a></li>
	<li><a href="#cargar_un_marker">Cargar un marker</a></li>
	<li><a href="#centrar_mapa">Centrar el mapa en una posición al pulsar sobre un botón</a></li>
	<li><a href="#centrar_mapa_2">Centrar el mapa estableciendo un nivel de zoom</a></li>
</ol>
</article>
</section>
<main class="curso">

<article id="mapas">
	<h2>¿Qué es leaflet.js?</h2>
	<p>Es una librería de Javascript que nos permitirá manipular fácilmente los mapas de <strong>openstreetmaps</strong></p>


<h2 id="instalacion">Instalación</h2>
<p>En este enlace tenemos las ligrerías necesarias de <a href="https://leafletjs.com/download.html" target="_blank">leaflet.js</a>.</p>
<h2>Cargar un mapa</h2>
	<pre><code>	var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&amp;copy; &lt;a href=&quot;https://www.openstreetmap.org/copyright&quot;&gt;OpenStreetMap&lt;/a&gt; contributors'
}).addTo(map);</code></pre>

<?php // getRes('ejemplo','ex/cargar-mapa.html', 'Cargar mapa') ?>

</article>


<article>
	<h2 id="cargar_un_marker">Cargar un market</h2>
	<pre><code>L.marker([51.5, -0.09]).addTo(map)
.bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
.openPopup();</code></pre>
<?php // getRes('ejemplo','ex/mapa-con-marker.html', 'Cargar un marker') ?>

</article>


<article>
	<h2 id="centrar_mapa">Centrar el mapa en una posición al pulsar sobre un botón</h2>
	<pre><code>function centerLeafletMapOnMarker(map, marker) {
	var latLngs = [ marker.getLatLng() ];
	var markerBounds = L.latLngBounds(latLngs);
	map.fitBounds(markerBounds);
}</code></pre>

	<?php // getRes('ejemplo','ex/centrar-mapa.html', 'Centrar mapa') ?>

</article>

<article>
	<h2 id="centrar_mapa_2">Centrar el mapa estableciendo un nivel de zoom</h2>
	<pre><code>const options = {"maxZoom": 13}
map.fitBounds(markerBounds, options);</code></pre>

	<?php // getRes('ejemplo','ex/con-zoom.html', 'Centrado con Zoom') ?>

</article>
</main>
<?php 
//});
//include $path."/diapos_theme/footer.php";
?>