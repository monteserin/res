<?php 
$titulo_curso="Curso de Google Maps Javascript API";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
add_action( 'genesis_after_header', function(){
	global $path;
	include $path."diapos_theme/body_init.php";
	echo "<h1>$titulo_curso</h1>";
?>

<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
<ol>  
	<li><a href="#mapas">Google Maps API</a></li>
	<li><a href="#add_marker_I">Añadir un marker I</a></li>
	<li><a href="#add_marker_II">Añadir un marker II</a></li>
	<li><a href="#add_marker_III">Añadir un marker III</a></li>
	<li><a href="#add_marker_IV">Añadir un marker IV</a></li>
	<li><a href="#add_marker_V">Añadir un marker V</a></li>
	<li><a href="#geolocalizacion_detecting_support">Geolocalización – detecting support</a></li>
	<li><a href="#geolocalizacion_ubicacion_cliente">Geolocalización obteniendo la ubicación del cliente</a></li>
	<li><a href="#integracion">Ejercicio – integrar geolocalización con  la API de google maps</a></li>
</ol>
</article>
</section>

<main class="curso">
<section>

<article id="mapas">
	<h2>Google Maps API</h2>
	<p>La API de Google Maps se volvió de pago en mayo del 2018, y aunque los primeros 200€ de uso de la api son gratis (coste por visitas), si tenemos un alto volumen de tráfico es posible que tengamos que pagar. En cualquier caso, será necesario introducir nuestros datos bancarios para usar la API.</p>
	<p>Aunque el código fuente de mis ejemplos está comprobado, no estoy pagando por usar la API de Google, y por tanto, los enlaces llevan a un mapa que no funciona.</p>
<div class="row">
	
	<a class="recurso" target="_blank" href="http://maps.google.com/maps/api/geocode/json?address=Comte+Urgell+143+08036+Barcelona&sensor=false">json con dirección</a>
	<a target="_blank" href="http://code.google.com/apis/maps/documentation/javascript/tutorial.html">Documentación oficial</a>
</div>

	<pre><code>&lt;script type=&quot;text/javascript&quot; src=&quot;http://maps.googleapis.com/maps/api/js?sensor=true&quot;&gt;
&lt;/script&gt;
	...

	var myOptions = {
		center:  new google.maps.LatLng(43.5293101753168, -5.6773233792),
		zoom: 18,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	// &quot;mapa&quot; es un div
	var map = new google.maps.Map(document.getElementById(&quot;mapa&quot;), myOptions);
	...</code></pre>
<p class="green">
	Para hacer la prueba, podremos introducir las coordenadas de Gijón: <br>	

	Latitude: 43.5293101753168 <br> 
	Longitude: -5.6773233792 <br>
</p>
<?= getRes('ejemplo','ex/mapa1.html', 'Mapa 1') ?>
<h2 id="add_marker_I">Añadir un marker I</h2>

<p>Tendremos que añadir el siguiente código al código que ya teníamos</p>
<pre><code>function addMarker(lat, lng){
	var mapMarker = new google.maps.Marker({
		position:new google.maps.LatLng(lat, lng),
		title: "Estás aquí."
	});
	mapMarker.setMap(map);
}
</code></pre>

<?= getRes('ejemplo','ex/mapa2.html', 'Añadir Marker 1') ?>


<h2 id="add_marker_II">Añadir un marker II</h2>

<pre><code>var goldStar = {
	path: 'M 125,5 155,90 245,90 175,145 200,230 125,180 50,230 75,145 5,90 95,90 z',
	fillColor: "yellow",
	fillOpacity: 0.8,
	scale: 0.2,
	strokeColor: "gold",
	strokeWeight: 14
};
var mapMarker = new google.maps.Marker({
	position:latlng,
	title: "Estás aquí.",
	icon:goldStar
});	
</code></pre>
<?= getRes('ejemplo','ex/anadir-marker.html', 'Añadir Marker 2',$premium) ?>


<h2 id="add_marker_III">Añadir un marker III</h2>
<pre><code>var <span class="red bold">pinIcon</span> = new google.maps.MarkerImage(
	"Tux.svg",
	null, <span class="green">/* size is determined at runtime */</span>
	null, <span class="green">/* origin is 0,0 */</span>
	null, <span class="green">/* anchor is bottom center of the scaled image */</span>
	new google.maps.Size(42, 68)
);

var mapMarker = new google.maps.Marker({
	position:latlng,
	title: "Estás aquí.",
	icon: <span class="red bold">pinIcon</span>,
});
</code></pre>
<?= getRes('ejemplo','ex/anadir-marker-3.html', 'Añadir marker 3') ?>

<h2 id="add_marker_IV">Añadir un marker IV con texto</h2>
<pre><code>var infoWindowOpts = { content: "bla bla bla..." };
var infoWindow = new google.maps.InfoWindow(infoWindowOpts);

google.maps.event.addListener(mapMarker, 'click', function() {
	infoWindow.open(map,mapMarker); 
});

</code></pre>
<?= getRes('ejemplo','ex/anadir-marker-4.html', 'Añadir marker 4') ?>


<h2 id="add_marker_V">Añadir un marker V</h2>
<p>Recorrer el siguiente array añadiendo una chincheta con el correspondiente texto informativo en cada iteración.</p>
<pre><code>var markerArray = [[43.529492, -5.677978, "texto1"],[43.528921, -5.676688, "texto2"], [43.529522, -5.676489, "texto3"]];</code></pre>
<?= getRes('ejemplo','ex/anadir-marker-5.html', 'Añadir marker 5') ?>


<h2 id="geolocalizacion_detecting_support">Geolocalización – detecting support</h2>
<pre><code>&lt;script&gt;
	var geo;
	
	function getGeoLocation(){
		try{
			if(navigator.geolocation)return navigator.geolocation;
			else return undefined;
		}catch(e){
			return undefined;
		}
	}

	function init(){
		if(geo = getGeoLocation()){
			alert(&quot;Geolocalizaci&oacute;n soportada&quot;);
		}else{
			alert(&quot;Geolocalizaci&oacute;n no soportada&quot;);
		}
	}
	window.onload = init;
&lt;/script&gt;
</code></pre>
<?= getRes('ejemplo','ex/geo_detect_support.html','Ver ejemplo detectar support') ?>

<h2 id="geolocalizacion_ubicacion_cliente">Geolocalización obteniendo la ubicación del cliente</h2>
<pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
	var geo;

	function showCoords(position){
		var lat = position.coords.latitude;
		var lng = position.coords.longitude;
		alert(&quot;latitude:&quot; + lat);
		alert(&quot;longitude: &quot; + lng);
	}

	function getGeoLocation(){
		try{
			if(navigator.geolocation)return navigator.geolocation;
			else return undefined;
		}catch(e){
			return undefined;
		}
	}

	function init(){
		if(geo = getGeoLocation()){
			alert(&quot;Geolocalizaci&oacute;n soportada&quot;);
			//El m&eacute;todo showCoords tomar&aacute; el valor de su par&aacute;metro position del objeto geo
			geo.getCurrentPosition(showCoords);
		}else{
			alert(&quot;Geolocalizaci&oacute;n no soportada&quot;);
		}
	}
	window.onload = init;
&lt;/script&gt;</code></pre>
<div class="notas">
	<h3>Nota:</h3>
	<p class="red">Probar los ejercicios utilizando localhost en vez de file:/// y mejor en chrome que en firefox, de lo contrario, funciona de forma intermitente</p>
</div>
<?= getRes('ejemplo','ex/geolocation.html','Ver ejemplo geolocalización') ?>



<h3 id="integracion">Ejercicio – integrar geolocalización con  la API de google maps</h3>

<?= getRes('ejemplo','ex/geolocation_google_maps.html', 'Ver ejercicio geolocalización') ?>
</article>

</section>
</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>