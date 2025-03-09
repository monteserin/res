<?php 
$titulo_curso="jQuery Mobile";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	?>
<section id="amor" class="verIndice">
<article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#introduccion">Cuando usarlo</a></li>
		<li><a href="#primera-pagina">Primera página</a></li>
		<li><a href="#transiciones">Transiciones</a></li>

		<li><a href="#dialog">Dialog</a></li>
		<li><a href="#headers">Headers</a></li>
		<li><a href="#footers">Footers</a></li>
		<li><a href="#navigation-bars">Navigation Bars</a></li>

		<li><a href="#tabs">Tabs</a></li>
		<li><a href="#position_fixed">data-position:"fixed"</a></li>
		<li><a href="#botones">Botones</a></li>

		<li><a href="#formularios">Forms</a></li>
		<li><a href="#listas">Listas</a></li>
		<li><a href="#accordion">Accordion</a></li>
		<li><a href="#panel">Panel</a></li>
		<li><a href="#grid">Grid</a></li>
		
		<li><a href="#themes">Themes</a></li>
		<li><a href="#elementos_persistentes">Elementos persistentes</a></li>
		<li><a href="#eventos">Eventos</a></li>
		<li><a href="#default_settings">Default settings</a></li>
		<li><a href="#plugins">Plugins de jQuery Mobile</a></li>


			</ol>

</article></section>
<main class="curso">
<?= drawH1WithImg() ?>

<article>
	<div>
	<h2 id="introduccion">jQuery-mobile</h2>
	<p>
		<h3>¿Cuando usar jQueryMobile?</h3>
		<p>Cuando el diseño que quieras hacer coincide bastante con el que te ofrece jQueryMobile. En caso contrario, es 
probable que pasemos más tiempo sobreescribiendo estilos y entendiendo como funciona jQueryMobile para sobreescribirlos que desarrollando. 
	</p>
	<p>En cualquier caso, la carga de la aplicación será más rápido sin jQuery Mobile. </p>
	<p>Por otra parte, cuantas menos tecnologías confluyan en un mismo proyecto menos conocimientos serán necesarios para desarrollarlo.</p>
	<h4>jQueryMobile</h4>
		
		<p>
			<span class="font-weight-bold">Descarga</span> <br>
			<a href="http://jquerymobile.com/">http://jquerymobile.com/</a>
		</p>
</div>

</article>
<article>
	<div>
	<h2 id="primera-pagina">Primera página jQuery Mobile</h2>

	<pre><code>
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;&lt;/title&gt;
	&lt;meta charset='utf-8'&gt;
	&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;css/jquerymobile.css&quot;&gt;
	&lt;script type=&quot;text/javascript&quot; src=&quot;js/jquery.js&quot;&gt;&lt;/script&gt;
	&lt;script type=&quot;text/javascript&quot; src=&quot;js/jquerymobile.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;section id=&quot;firstpage&quot; <span class="bold red">data-role=&quot;page&quot;</span>&gt;
		&lt;header <span class="bold red">data-role=&quot;header&quot;</span>&gt;
			&lt;h2&gt;Cabecera&lt;/h2&gt;
		&lt;/header&gt;
		&lt;div <span class="red bold">data-role=&quot;content&quot;</span>&gt;
			&lt;p&gt;Esta es la primera p&aacute;gina&lt;/p&gt;
			&lt;a href=&quot;#secondpage&quot; style=&quot;background:pink&quot; &gt;
				Ir a la segunda p&aacute;gina
			&lt;/a&gt;
			&lt;a href=&quot;#secondpage&quot; <span class="red bold">data-role=&quot;button&quot;</span> style=&quot;background:pink&quot;&gt;
				Ir a la segunda p&aacute;gina
			&lt;/a&gt;
			&lt;button style=&quot;background:pink&quot;&gt;fasdf&lt;/button&gt;
		&lt;/div&gt;
		&lt;footer <span class="red bold">data-role=&quot;footer&quot;</span>&gt;El pie de la p&aacute;gina&lt;/footer&gt;
	&lt;/section&gt;
&lt;/body&gt;
&lt;/html&gt;
	</code></pre>

	<p class="red bold">Jquery mobile utiliza los atributos data-role para aplicar los estilos.</p>

	<?= getRes('ejemplo','ex/cabecera.html','Cabecera',1) ?>
<div class="notas">
	<h3>Notas:</h3>
<p>Puedo hacer que un enlace tenga apariencia de botón de dos formas:
<ul>
	<li>Mediante atributos: 	data-role="button"</li>
	<li>Mediante clases: 			class="ui-btn"</li>
</ul>
	</p>

	<p>Si no deseamos que un elemento coja los estilos que le asigna jQuery, podemos usar: <br>
data-role="none"
	</p>
</div>
	
	<h3>Añadimos una segunda página al documento anterior</h3>

	<pre><code>
&lt;section id=&quot;secondpage&quot; data-role=&quot;page&quot;&gt;
	&lt;header data-role=&quot;header&quot;&gt;
		&lt;h2&gt;Cabecera&lt;/h2&gt;
	&lt;/header&gt;
	&lt;div data-role=&quot;content&quot;&gt;
		&lt;p&gt;Esta es la segunda p&aacute;gina&lt;/p&gt;
	&lt;/div&gt;
	&lt;footer data-role=&quot;footer&quot;&gt;El pie de la p&aacute;gina 2&lt;/footer&gt;
&lt;/section&gt;
	</code></pre>
	<?= getRes('ejemplo','ex/cabecera-2.html','Ver solución', 1) ?>

	<h3>Enlaces a páginas externas</h3>
	<p>jQueryMobile carga el contenido de la etiqueta &lt;section data-role=&quot;page&quot;&gt; de la nueva página dentro de la etiqueta &lt;section data-role=&quot;page&quot;&gt; de la página actual. </p>
	<p>Si no deseas este comportamiento puedes usar cualquiera de los dos siguientes sistemas:</p>

	<pre><code>&lt;a href=&quot;externalPage.html&quot; rel=&quot;external&quot;&gt;External link&lt;/a&gt;
&lt;a href=&quot;externalPage.html&quot; data-ajax=&quot;false&quot;&gt;External link&lt;/a&gt;</code></pre>

<p>Los enlaces a páginas externas con AJAX no funcionan salvo que los ejecutemos en un servidor.</p>
	

	<h3>Ejercicio</h3>
	<p>Hacer una página con jQuery mobile que tenga dos enlaces que carguen la siguiente página. Uno lo hará utilizando AJAX y el otro no.</p>

	<pre><code>
<span class="black bold">externalPage.html</span>&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;section id=&quot;secondpage&quot; data-role=&quot;page&quot;&gt;
		&lt;header data-role=&quot;header&quot;&gt;
			&lt;h1&gt;Cabecera&lt;/h1&gt;
		&lt;/header&gt;
		&lt;div data-role=&quot;content&quot;&gt;
			&lt;p&gt;Esta es la segunda p&aacute;gina&lt;/p&gt;
		&lt;/div&gt;
		&lt;footer data-role=&quot;footer&quot;&gt;El pie de la p&aacute;gina 2&lt;/footer&gt;
	&lt;/section&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
	<?= getRes('ejemplo','ex/cabecera-3.html','Ver solución', 1) ?>
</div>
</article>


<article>
	<div>
	<h2 id="transiciones">Transiciones</h2>
	<pre><code>&lt;p&gt;&lt;a href=&quot;#secondpage&quot; data-transition=&quot;fade&quot;&gt;fade&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#secondpage&quot; data-transition=&quot;flip&quot;&gt;flip&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#secondpage&quot; data-transition=&quot;pop&quot;&gt;pop&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#secondpage&quot; data-transition=&quot;slide&quot;&gt;slide&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#secondpage&quot; data-transition=&quot;slidedown&quot;&gt;slidedown&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#secondpage&quot; data-transition=&quot;slideup&quot;&gt;slideup&lt;/a&gt;&lt;/p&gt;</code></pre>
<p>Nota: <br>
Para cambiar la dirección de la animación slide usaremos el atributo: <br>
data-direction="reverse"</p>
<?= getRes('ejemplo','ex/cabecera-4.html', 'Cabecera', 1) ?>
</div>
</article>
<article>
<div>
<h2 id="dialog">Dialog</h2>

<pre><code>&lt;p&gt;&lt;a href=&quot;#secondpage&quot; data-rel=&quot;dialog&quot;&gt;Mostrar el cuadro de di&aacute;logo&lt;/a&gt;&lt;/p&gt;</code></pre>
<div class="notas">
	<h4>Notas:</h4>

	<ul>
		
		<li>
			<pre><code>&lt;a data-rel=&quot;dialog&quot;&gt; debe estar dentro de &lt;div data-role=&quot;page&quot;&gt;</code></pre>
		</li>

		<li>
			Al pulsar sobre el enlace se mostrará un cuadro de diálogo, cuyo código será un section con su correspondiente header, footer, etc. 
		</li>
		<li>
			Si utilizo un enlace data-rel=”dialog” para acceder a un section y luego trato de ir a ese section utilizando un enlace normal, seguiré mostrando un cuadro de diálogo. Si, al contrario, utilizo un enlace normal y luego accedo al section mediante un enlace de cuadro de diálogo, mostraré un activity normal, en lugar de un cuadro de diálogo. Por tanto el section utilizado como cuadro de diálogo no debe ser usado como activity.
		</li>
		<li>
			El botón de cerrar cuadro de diálogo se maqueta automáticamente en el header del section. Por tanto, para mostrar el botón, el section deberá tener un header.
		</li>
	</ul>
</div>
<?= getRes('ejemplo','ex/cabecera-5.html','Cabecera 5', 1) ?>
</div>
</article>

<article>
	<div>
	<h2 id="headers">Headers en jQuery Mobile</h2>

	<pre><code>&lt;header data-role=&quot;header&quot;&gt;
	&lt;h1&gt;Cabecera&lt;/h1&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot;&gt;Btn&lt;/a&gt;
&lt;/header&gt;</code></pre>
	<?= getRes('ejemplo','ex/cabecera-6.html','Cabecera 6', 1) ?>

	<pre><code>&lt;header data-role=&quot;header&quot;&gt;
	&lt;h1&gt;Cabecera&lt;/h1&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; class=&quot;ui-btn-right&quot;&gt;Btn&lt;/a&gt;
&lt;/header&gt;</code></pre>
	<?= getRes('ejemplo','ex/cabecera-7.html','Cabecera 7', 1) ?>

	<pre><code>&lt;header data-role=&quot;header&quot;&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; &gt;Btn 1&lt;/a&gt;
		&lt;h2&gt;Cabecera&lt;/h2&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; &gt;Btn 2&lt;/a&gt;
&lt;/header&gt;</code></pre>
	<?= getRes('ejemplo','ex/cabecera-8.html', 'Cabecera 8', 1) ?>
</div>
</article>
<article>
</div>
<h2 id="footers">Footers en jQuery Mobile</h2>
	<p>
		<span class="black bold">Sin espaciado</span>
		<pre><code>&lt;footer data-role=&quot;footer&quot;&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; &gt;Btn 2&lt;/a&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; &gt;Btn 2&lt;/a&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; &gt;Btn 2&lt;/a&gt;
&lt;/footer&gt;</code></pre>
	</p>
	<?= getRes('ejemplo','ex/footers1.html', 'Footers 1',1) ?>

<span class="black bold">Con un poco de espaciado:
</span>
	<pre><code>&lt;footer data-role=&quot;footer&quot; class=&quot;ui-bar&quot;&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; &gt;Btn 2&lt;/a&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; &gt;Btn 2&lt;/a&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; &gt;Btn 2&lt;/a&gt;
&lt;/footer&gt;</code></pre>
	<?= getRes('ejemplo','ex/footers2.html','Footers 2', 1) ?>
</div>
</article>
<article>
	<div>
	<h2 id="navigation_bars">Navigation Bars en jQuery Mobile</h2>

	<pre><code>&lt;nav data-role=&quot;navbar&quot;&gt;
	&lt;ul&gt;
		&lt;li&gt;&lt;a href=&quot;#&quot; &gt;1&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=&quot;#&quot; &gt;2&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=&quot;#&quot; &gt;3&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=&quot;#&quot; &gt;4&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</code></pre>

	<p>Si quiero que uno de los enlaces permanezca marcado, le añado el atributo: <br>
<span class="black bold">class="ui-btn-active ui-state-persist"</span> <br>
El primer class resalta la opción, y el segundo la mantiene resaltada entre páginas.</p>
<?= getRes('ejemplo','ex/navigation-bar.html','navigation bar', 1) ?>
</div>
</article>
<article>
	<div>
	<h2 id="tabs">Ejercicio - tabs en jQuery Mobile</h2>
	<p>Dentro de un div con el atributo data-role="tabs" tendremos otro div con el atributo <span style="color:red">data-role="navbar"</span> que a su vez contendrá una lista de enlaces.</p>

	<p>A continuación y al mismo nivel que el div con <span style="color:red">data-role="navbar"</span> tendremos 3 div cuyas id coincidirán con con los indicados en los href de los enlaces.</p>
<?= getRes('ejemplo','ex/tabs.html','tabs', 2) ?>
</div></article>
<article><div>
	<h2 id="position_fixed">data-position="fixed" en jQuery Mobile</h2>
	<p>Este atributo hará que el header (o el footer), no se vayan por los límites de la pantalla al hacer scroll.</p>
	<pre><code>&lt;header data-role=&quot;header&quot; data-position=&quot;fixed&quot;&gt;
&lt;footer data-role=&quot;footer&quot; data-position=&quot;fixed&quot;&gt;El pie de la p&aacute;gina&lt;/footer&gt;</code></pre>

	<p>Si al hacer scroll down el footer desaparece puedo:</p>
	<ul>
		<li>añadir data-tap-toggle="false" al footer</li>
		<li>o</li>
		<li>Añadir el siguiente javascript:
		<pre><code>
$(&quot;[data-role=header]&quot;).fixedtoolbar({ tapToggle: false });&lt;/li&gt;		
		</code></pre>
	</li>
	</ul>
	<p><span class="red">El siguiente atributo</span> hará que el contenido de la página ocupe toda su totalidad, de tal forma que se meterá por debajo del header o el footer al hacer scroll.	
<pre><code>
&lt;section id=&quot;firstpage&quot; data-role=&quot;page&quot; <span class="red bold">data-fullscreen=&quot;true&quot;</span>&gt;
</code></pre>
	</p>
<?= getRes('ejemplo','ex/full-screen.html','full screen', 1) ?>

</div>

</article>

<article>
	<div>
	<h2 id="botones">Botones en jQuery Mobile</h2>
	<p>Por defecto un botón ocupa el 100% de la pantalla, salvo que le añadamos el atributo: <br>
data-inline="true"
	</p>
<pre><span class="black bold">Botones agrupados verticalmente:</span><code>&lt;div data-role=&quot;controlgroup&quot;&gt;
	&lt;button &gt;Bot&oacute;n&lt;/button&gt;
	&lt;input type=&quot;button&quot; value=&quot;Bot&oacute;n&quot;/&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; &gt;Button&lt;/a&gt;
&lt;/div&gt;</code></pre>
	<p>
<pre><span class="black bold">Botones agrupados horizontalmente:</span><code>&lt;div data-role=&quot;controlgroup&quot; data-type=&quot;horizontal&quot;&gt;
	&lt;button data-inline=&quot;true&quot;&gt;Bot&oacute;n&lt;/button&gt;
	&lt;input type=&quot;button&quot; value=&quot;Bot&oacute;n&quot; data-inline=&quot;true&quot; /&gt;
	&lt;a href=&quot;#&quot; data-role=&quot;button&quot; data-inline=&quot;true&quot;&gt;Button&lt;/a&gt;
&lt;/div&gt;</code></pre>
	</p>
	<?= getRes('ejemplo','ex/botones.html', 'botones',1) ?>

	
	<h3>data-icon</h3>

	<pre><code>&lt;button class=&quot;ui-btn ui-icon-home ui-btn-icon-left&quot;&gt;button text&lt;/button&gt;</code></pre>
	<p>Listado de iconos disponibles: <a target="_blank" href="http://api.jquerymobile.com/icons/">http://api.jquerymobile.com/icons/</a></p>
	<p>El código que determina las imágenes de los iconos es un código que define una imagen en formato SVG embebido dentro de la propia hoja de estilos, por lo que no será necesario cargar las imágenes como foto.</p>

	<p><span class="black bold">class que determinan su posición dentro del botón</span>
<ul>
	<li>ui-btn-icon-bottom</li>
	<li>ui-btn-icon-left</li>
	<li>ui-btn-icon-right</li>
	<li>ui-btn-icon-top</li>
	<li>ui-btn-icon-notext (el tamaño del botón se ajustará al tamaño del icono)</li>
</ul>
	</p>

	<?= getRes('ejemplo','ex/data-icon.html','data-icon', 1) ?>

	<h3>Custom data icon</h3>

	<pre><code>&lt;style type=&quot;text/css&quot;&gt;
.ui-icon-<span class="red bold">twitter</span>:after{
	background-image: url(images/twitter.png);
	background-color: red;
	background-size: 100% 100%;
	background-repeat: no-repeat;
}
&lt;/style&gt;

&lt;button data-icon=&quot;<span class="red bold">twitter</span>&quot; data-iconpos=&quot;bottom&quot;&gt;&lt;/button&gt;</code></pre>
<div class="row">
	<a class="recurso" href="ex/twitter.png">Descargar logo twitter.</a>
	<?= getRes('ejemplo','ex/custom-data-icon.html','custom data icon', 1) ?>
</div>
	<h3>Ajustar una foto al botón que la contiene</h3>
	<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	section#firstpage div a{
		background-image: url(images/twitter.png);
		background-size: 100% 100%;
	}
&lt;/style&gt;

&lt;section id=&quot;firstpage&quot; data-role=&quot;page&quot;&gt;
	&lt;div data-role=&quot;content&quot;&gt;
		&lt;a href=&quot;#&quot; data-inline=&quot;true&quot; data-role=&quot;button&quot; data-iconpos=&quot;bottom&quot;&gt;&lt;/a&gt;
	&lt;/div&gt;
&lt;/section&gt;</code></pre>
<div class="row">
	<a class="recurso" href="ex/custom_image_button.html">Descargar logo twitter</a>

	<?= getRes('ejemplo','ex/custom_image_button.html','Ver ejemplo',1) ?>
</div>

	<h3>Ajustar un icono al botón que lo contiene</h3>

	<pre><code>&lt;style type=&quot;text/css&quot;&gt;
	section#firstpage div a{
		background-image: url(images/twitter.png);
		background-size: 100% 100%;
	}
&lt;/style&gt;

&lt;section id=&quot;firstpage&quot; data-role=&quot;page&quot;&gt;
	&lt;div data-role=&quot;content&quot;&gt;
		&lt;a href=&quot;#&quot; data-inline=&quot;true&quot; data-role=&quot;button&quot; data-iconpos=&quot;bottom&quot;&gt;&lt;/a&gt;
	&lt;/div&gt;
&lt;/section&gt;</code></pre>
	<?= getRes('ejemplo','ex/custom-data-icon-2/index.html','custom data icon 2', 2) ?>
</div>
</article>

<article>
	<div>
	<h2 id="formularios">formularios en jQuery Mobile</h2>
	<p>Todos los elementos dentro de un formulario deben ir dentro de la etiqueta &lt;form&gt;</p>
	<p>Todas las etiquetas dentro de un formulario deben tener una id única.</p>
	<p>Los formularios son enviados automáticamente vía AJAX.</p>

	<pre><span class="black bold">&lt;h2&gt;labels visibles&lt;/h2&gt;</span><code>&lt;label for=&quot;basicfield&quot;&gt;Basic Text Field:&lt;/label&gt;
&lt;input type=&quot;text&quot; name=&quot;basicfield&quot; id=&quot;basicfield&quot; value=&quot;&quot; placeholder=&quot;texto&quot;&gt;&lt;br&gt;
&lt;div data-role=&quot;fieldcontain&quot;&gt;
	&lt;label for=&quot;address&quot;&gt;Your address:&lt;/label&gt;
	&lt;input type=&quot;text&quot; name=&quot;address&quot; id=&quot;address&quot; value=&quot;&quot; placeholder=&quot;&quot;&gt;
&lt;/div&gt;

<span class="black bold">&lt;h2&gt;labels ocultos</span> &lt;span style=&quot;font-size:0.5em&quot;&gt; (aunque google sigue index&aacute;ndolo y los lectores auditivos son capaces de o&iacute;rlo)&lt;/h2&gt;
<span class="green">&lt;h5&gt;ui-hidden-accesible oculta el label al que se lo asigno&lt;/span&gt;&lt;/h5&gt;</span>
&lt;label for=&quot;username&quot; class=&quot;ui-hidden-accessible&quot;&gt;Basic Text Field:&lt;/label&gt;
&lt;input type=&quot;text&quot; name=&quot;username&quot; id=&quot;username&quot; value=&quot;&quot; placeholder=&quot;texto&quot;&gt;&lt;br&gt;
<span class="green">&lt;h5&gt;ui-hide-label se aplica a la capa contenedora y oculta los label que hay dentro&lt;/h5&gt;</span>
&lt;div data-role=&quot;fieldcontain&quot; class=&quot;ui-hide-label&quot;&gt;
	&lt;label for=&quot;address&quot;&gt;Your address:&lt;/label&gt;
	&lt;input type=&quot;text&quot; name=&quot;address&quot; id=&quot;address&quot; value=&quot;&quot; placeholder=&quot;&quot;&gt;
&lt;/div&gt;
	</code></pre>
	<p class="red">
		jQueryMobile gestiona todas las peticiones usando AJAX, y esto en muchos casos, como en los formularios que envían peticiones por POST o cuando trato de acceder a una página que tiene sus propias librerías de Javascript, hace que la aplicación no funcione correctamente.
	</p>

<?= getRes('ejemplo','ex/forms.html','forms', 1) ?>
<h3>switcher</h3>
<pre><code>&lt;select data-role=&quot;slider&quot;&gt;
	&lt;option value=&quot;On&quot;&gt;On&lt;/option&gt;
	&lt;option value=&quot;Off&quot;&gt;Off&lt;/option&gt;
&lt;/select&gt;</code></pre>

<?= getRes('ejemplo','ex/switcher.html','switcher', 1) ?>

<h3>Slider</h3>
<pre><code>
&lt;input type=&quot;range&quot; data-show-value=&quot;true&quot; data-popup-enabled=&quot;true&quot; min=&quot;0&quot; max=&quot;100&quot; value=&quot;50&quot;&gt;
</code></pre>

<?= getRes('ejemplo','ex/slider.html','slider' , 1) ?>

<h3>radio buttons</h3>
<pre><code>&lt;fieldset data-role=&quot;controlgroup&quot;&gt;
	&lt;legend&gt;Escoge una opci&oacute;n&lt;/legend&gt;
	&lt;label for=&quot;rb1&quot;&gt;Radio button1&lt;/label&gt;
	&lt;input type=&quot;radio&quot; id=&quot;rb1&quot; name=&quot;rb1&quot; value=&quot;rb1&quot;&gt;
	&lt;label for=&quot;rb2&quot;&gt;Radio button2&lt;/label&gt;
	&lt;input type=&quot;radio&quot; id=&quot;rb2&quot; name=&quot;rb1&quot; value=&quot;rb2&quot;&gt;
	&lt;label for=&quot;rb3&quot;&gt;Radio button3&lt;/label&gt;
	&lt;input type=&quot;radio&quot; id=&quot;rb3&quot; name=&quot;rb1&quot; value=&quot;rb3&quot;&gt;
&lt;/fieldset&gt;

&lt;fieldset data-role=&quot;controlgroup&quot; data-type=&quot;horizontal&quot;&gt;
	&lt;legend&gt;Escoge una opci&oacute;n&lt;/legend&gt;
	&lt;label for=&quot;rb4&quot;&gt;Radio button1&lt;/label&gt;
	&lt;input type=&quot;radio&quot; id=&quot;rb4&quot; name=&quot;rb2&quot; value=&quot;rb1&quot;&gt;
	&lt;label for=&quot;rb5&quot;&gt;Radio buton2&lt;/label&gt;
	&lt;input type=&quot;radio&quot; id=&quot;rb5&quot; name=&quot;rb2&quot; value=&quot;rb2&quot;&gt;
	&lt;label for=&quot;rb6&quot;&gt;Radio button3&lt;/label&gt;
	&lt;input type=&quot;radio&quot; id=&quot;rb6&quot; name=&quot;rb2&quot; value=&quot;rb3&quot;&gt;
&lt;/fieldset&gt;</code></pre>
<?= getRes('ejemplo','ex/radio-button.html', 'radio button', 1) ?>

<p>Resetear las checkboxes marcadas en otras page cuando hago la carga con Ajax</p>
<pre><code>$('input[type=radio]'').prop('checked', false).checkboxradio('refresh');</code></pre>


<h3>checkbox</h3>

<pre><code>&lt;fieldset&gt;
	&lt;legend&gt;Agree to the terms:&lt;/legend&gt;
	&lt;label for=&quot;cb1&quot;&gt;Rojo&lt;/label&gt;
	&lt;input type=&quot;checkbox&quot; name=&quot;cb1&quot; id=&quot;cb1&quot;&gt;

	&lt;label for=&quot;cb2&quot;&gt;Azul&lt;/label&gt;
	&lt;input type=&quot;checkbox&quot; name=&quot;cb2&quot; id=&quot;cb2&quot;&gt;

	&lt;label for=&quot;cb3&quot;&gt;Amarillo&lt;/label&gt;
	&lt;input type=&quot;checkbox&quot; name=&quot;cb3&quot; id=&quot;cb3&quot;&gt;
&lt;/fieldset&gt;</code></pre>
<?= getRes('ejemplo','ex/checkbox.html','checkbox', $premium) ?>


<h3>select I</h3>
<pre><code>&lt;fieldset &gt;
	&lt;legend for=&quot;select1&quot;&gt;Opt 1:&lt;/legend&gt;
	&lt;select name=&quot;combo&quot; id=&quot;combo&quot;&gt;
		&lt;option value=&quot;value1&quot;&gt;Value 1&lt;/option&gt;
		&lt;option value=&quot;value2&quot; disabled=&quot;disabled&quot;&gt;Value 2&lt;/option&gt;
		&lt;option value=&quot;value3&quot;&gt;Value 3&lt;/option&gt;
		&lt;option value=&quot;value4&quot;&gt;Value 4&lt;/option&gt;
	&lt;/select&gt;
&lt;/fieldset&gt;</code></pre>
<?= getRes('ejemplo','ex/select-1.html','select I', $premium) ?>



<h3>select II</h3>

<pre><code>&lt;fieldset data-role=&quot;controlgroup&quot; <span class="red">data-type=&quot;horizontal&quot;</span>&gt;
	&lt;legend for=&quot;select1&quot;&gt;Opt 1:&lt;/legend&gt;
	&lt;select name=&quot;combo&quot; id=&quot;combo&quot;&gt;
		&lt;option value=&quot;value1&quot;&gt;Value 1&lt;/option&gt;
		&lt;option value=&quot;value2&quot; disabled=&quot;disabled&quot;&gt;Value 2&lt;/option&gt;
		&lt;option value=&quot;value3&quot;&gt;Value 3&lt;/option&gt;
		&lt;option value=&quot;value4&quot;&gt;Value 4&lt;/option&gt;
	&lt;/select&gt;
	&lt;select name=&quot;combo2&quot; id=&quot;combo2&quot;&gt;
		&lt;option value=&quot;value1&quot;&gt;Value 1&lt;/option&gt;
		&lt;option value=&quot;value2&quot; disabled=&quot;disabled&quot;&gt;Value 2&lt;/option&gt;
		&lt;option value=&quot;value3&quot;&gt;Value 3&lt;/option&gt;
		&lt;option value=&quot;value4&quot;&gt;Value 4&lt;/option&gt;
	&lt;/select&gt;
&lt;/fieldset&gt;</code></pre>
<?= getRes('ejemplo','ex/select-2.html','select II', 1) ?>

<h3>select III – (no nativo)</h3>
<pre><code>&lt;fieldset data-role=&quot;controlgroup&quot; data-type=&quot;horizontal&quot;&gt;
	&lt;legend for=&quot;select1&quot;&gt;Opt 1:&lt;/legend&gt;
	&lt;select name=&quot;combo&quot; id=&quot;combo&quot; data-native-menu=&quot;false&quot;&gt;
<span class="green">&lt;!-- La siguiente option es maquetada diferente porque no tiene atributo value--&gt;</span>
		<span class="red">&lt;option&gt;Elige una opci&oacute;n&lt;/option&gt;</span>
		&lt;optgroup label=&quot;Primer grupo&quot;&gt;
			&lt;option value=&quot;value1&quot;&gt;Value 1&lt;/option&gt;
			&lt;option value=&quot;value2&quot; disabled=&quot;disabled&quot;&gt;Value 2&lt;/option&gt;
			&lt;option value=&quot;value3&quot;&gt;Value 3&lt;/option&gt;
			&lt;option value=&quot;value4&quot;&gt;Value 4&lt;/option&gt;
		&lt;/optgroup&gt;
		&lt;optgroup label=&quot;Segundo grupo&quot;&gt;
			&lt;option value=&quot;value5&quot;&gt;Value 5&lt;/option&gt;
			&lt;option value=&quot;value6&quot; disabled=&quot;disabled&quot;&gt;Value 6&lt;/option&gt;
			&lt;option value=&quot;value7&quot;&gt;Value 7&lt;/option&gt;
			&lt;option value=&quot;value8&quot;&gt;Value 8&lt;/option&gt;
		&lt;/optgroup&gt;
	&lt;/select&gt;
&lt;/fieldset&gt;</code></pre>

<?= getRes('ejemplo','ex/select-3.html','select III', 1) ?>

<h3>select IV – multiple selected</h3>
<pre><code>&lt;fieldset data-role=&quot;controlgroup&quot; data-type=&quot;horizontal&quot;&gt;
	&lt;legend for=&quot;select1&quot;&gt;Multiple Enabled:&lt;/legend&gt;
	&lt;select name=&quot;select1&quot; id=&quot;select2&quot; <span class="red bold">multiple=&quot;multiple&quot;</span> data-native-menu=&quot;false&quot;&gt;
		&lt;option&gt;Elige una opci&oacute;n&lt;/option&gt;
		&lt;option value=&quot;value1&quot;&gt;Value 1&lt;/option&gt;
		&lt;option value=&quot;value2&quot; disabled=&quot;disabled&quot;&gt;Value 2&lt;/option&gt;
		&lt;option value=&quot;value3&quot;&gt;Value 3&lt;/option&gt;
		&lt;option value=&quot;value4&quot;&gt;Value 4&lt;/option&gt;
		&lt;option value=&quot;value5&quot;&gt;Value 5&lt;/option&gt;
		&lt;option value=&quot;value6&quot; disabled=&quot;disabled&quot;&gt;Value 6&lt;/option&gt;
		&lt;option value=&quot;value7&quot;&gt;Value 7&lt;/option&gt;
		&lt;option value=&quot;value8&quot;&gt;Value 8&lt;/option&gt;
	&lt;/select&gt;
&lt;/fieldset&gt;</code></pre>

<?= getRes('ejemplo','ex/select-4.html','select IV', 1) ?>


<h3>Ejercicio – Hacer el formulario propuesto</h3>

<p><span class="black bold">Consideraciones.</span> <br>El evento change no funciona directamente contra un &lt;input type=&quot;range&quot; /&gt;, ya que jQueryMobile se encarga de transformar este elemento en un &lt;input type=&quot;number&quot; /&gt;</p>
<p>Por otro lado, el slider tiene otros eventos, como: <br>
<pre><code>$("input" ).on( "<span class="black bold">slidestart</span>", optionClicked );
$("input" ).on( "<span class="black bold">slidestop</span>", optionClicked );</code></pre>
</p>

<?= getRes('ejemplo','ex/forms-exercise.html','Ejercicio formularios', 1) ?>
</div>
</article>
<article>
	<div>
	<h2 id="listas">listas</h2>
	<pre><code>&lt;ul data-role=&quot;listview&quot; <span class="purple bold">data-inset=&quot;true&quot;</span> data-filter=&quot;true&quot; data-filter-placeholder=&quot;txt a buscar&quot;&gt;
	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;List item 1&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;List item 2&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;List item 3&lt;/a&gt;&lt;/li&gt;
	&lt;li data-role=&quot;divider&quot;&gt;Divisor&lt;/li&gt;
	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;List item con burbuja contadora
			&lt;span class=&quot;ui-li-count&quot;&gt;15&lt;/span&gt;
		&lt;/a&gt;
	&lt;/li&gt;
	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;images/logoNegroAjustado.png&quot; class=&quot;ui-li-icon&quot;&gt;&lt;/a&gt;
	&lt;/li&gt;
	&lt;li data-role=&quot;list-divider&quot;&gt;Divisor&lt;/li&gt;
	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;images/logoNegroAjustado.png&quot; &gt;&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href=&quot;#&quot; <span class="orange bold">data-rel=&quot;back&quot;</span> <span class="brown bold">class=&quot;ui-btn&quot;</span>&gt; Volver&lt;/a&gt;
&lt;/ul&gt;</code></pre>
	<ul>
		<li><span class="purple">Este atributo hace que la lista no ocupe el 100% del ancho de la pantalla. </span></li>
		<li><span class="orange bold">Botón para ir hace atrás.</span></li>
		<li><span class="brown bold">Para dar al enlace apariencia de botón</span></li>

	</ul>
	<div class="notas">
		Tener en cuenta que al poner una imagen en una lista, si es un icon, se espera que sea de 16x16px o de 80x80px.
	</div>
<?= getRes('ejemplo','ex/listas.html','Listas', 1) ?>


</article>
	<article>
<h3 id="listas">Ejercicio listas</h3>

<p>Hacer el ejercicio del enlace completando totalmente la sección de monociclos, tal como se indica.</p>

<p>No olvidar ubicar los botones de retroceso.</p>
<div class="row">
<a class="recurso" href="ex/images_juggling.zip">Descargar imágenes.</a>
<?= getRes('ejemplo','ex/tienda-malabares.html','Tienda malabares', 1) ?>



</div>
</article>
<article>

<h3 id="accordion">Accordion</h3>
<p>Para cambiar el icono que se muestra en el acordeo, usaremos el atributo data-collapsed-icon</p>
<p>Para cambiar los estilos del encabezado: <br>
.ui-collapsible-heading-toggle{background: salmon !important}</p>

<pre><code>&lt;div data-role=&quot;collapsible-set&quot;&gt;
	&lt;div data-role=&quot;collapsible&quot; data-collapsed=&quot;false&quot;&gt;
		&lt;h4&gt;Section 1&lt;/h4&gt;
		&lt;p&gt;I'm the collapsible set content for section 1.&lt;/p&gt;
	&lt;/div&gt;

	&lt;div data-role=&quot;collapsible&quot;&gt;
		&lt;h4&gt;Section 2&lt;/h4&gt;
		&lt;p&gt;I'm the collapsible set content for section 2.&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
<?= getRes('ejemplo','ex/accordion.html','Acordeón', 1) ?>
</div>
</article>
<article>
	<div>
<h2 id="paneles">Paneles en jQuery Mobile</h2>

<pre><code>&lt;header data-role=&quot;header&quot; data-theme=&quot;b&quot;&gt;
  &lt;h2&gt;Cabecera&lt;/h2&gt;
    &lt;a href=&quot;#shortlist&quot; class=&quot;ui-btn-left&quot;&gt;Push&lt;/a&gt;
	&lt;div id=&quot;shortlist&quot; <span class="red bold">data-role=&quot;panel&quot; data-display=&quot;overlay&quot;</span>&gt;
      		&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum illo facere vitae, vel, eligendi, quibusdam corporis dolorum nulla doloremque sint placeat alias voluptatum? Beatae doloremque, libero dolores dolorum illo!&lt;/p&gt;   
	&lt;/div&gt;
&lt;/header&gt;</code></pre>

<?= getRes('ejemplo','ex/panel.html','Ver ejemplo', 1) ?>


<h3>Ejercicio</h3>
<p>Al pulsar un botón situado a la derecha en el header que aparezca un panel con un listview de opciones </p>
<p><span class="bold black">Consideraciones:</span> <br>
Para que el panel emerja desde la derecha usaremos:
 <span class="black bold">data-position="right"</span>
 </p>
<?= getRes('ejemplo','ex/widget_ejercicio.html','Ejercicio widget', 1) ?>
</div></article>


<article>
<div>
<h2 id="grid">Grid en jQuery Mobile</h2>
<p><span class="red">ui-grid-a</span>: las <span class="blue">celdas</span> ocuparán el 50% de la pantalla, ui-grid-b, un tercio; ui-grid-c, un cuarto, y así hasta e.</p>

<pre><code>&lt;div class=&quot;ui-grid-a&quot;&gt;
	<div class="blue">&lt;div class=&quot;ui-block-a&quot;&gt;
		Content
	&lt;/div&gt;
	&lt;div class=&quot;ui-block-b&quot;&gt;
		Content
	&lt;/div&gt;</div>
&lt;/div&gt;</code></pre>
<?= getRes('ejemplo','ex/grid.html', 'grid', 1) ?>



<h3>Grid con varias filas</h3>
<pre><code>&lt;div class=&quot;ui-grid-b&quot;&gt;
	&lt;div class=&quot;ui-block-a&quot;&gt;
		&lt;p&gt;Content&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class=&quot;ui-block-b&quot;&gt;
		&lt;p&gt;Content&lt;/p&gt;
	&lt;/div&gt;

	&lt;div class=&quot;ui-block-a&quot;&gt;
		&lt;p&gt;Content&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class=&quot;ui-block-b&quot;&gt;
		&lt;p&gt;Content&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class=&quot;ui-block-c&quot;&gt;
		&lt;p&gt;Content&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
<p>Si quiero empezar una nueva fila sin terminar de poner las celdas de la fila en la que estoy, utilizaré &lt;div class=&quot;ui-block-a&quot;&gt;</p>
<?= getRes('ejemplo','ex/grid-con-varias-celdas.html','grid con varias celdas',1) ?>
</div>
</article>
<article>
	<div>
<h2 id="themes">Themes en jQuery Mobile</h2>
<p>Pueden ser diferentes para diferentes partes de la aplicación. Hay 2. </p>
<span class="black bold">Vista previa:</span>: <br>
<a target="_blank" href="http://jquerymobile.com/demos/1.1.1/docs/pages/pages-themes.html">http://jquerymobile.com/demos/1.1.1/docs/pages/pages-themes.html</a>
</p>
<pre><code>&lt;section id=&quot;firspage&quot; data-role=&quot;page&quot; data-theme=&quot;a&quot;&gt;
	&lt;header data-role=&quot;header&quot; data-theme=&quot;d&quot;&gt;
		&lt;h2&gt;Cabecera&lt;/h2&gt;
	&lt;/header&gt;
	&lt;div data-role=&quot;content&quot; data-theme=&quot;e&quot;&gt;
		&lt;p&gt;Esta es la primera p&aacute;gina&lt;/p&gt;
		&lt;p&gt;&lt;a href=&quot;#secondpage&quot;&gt;Ir a la segunda p&aacute;gina&lt;/a&gt;&lt;/p&gt;
	&lt;/div&gt;
	&lt;footer data-role=&quot;footer&quot; data-theme=&quot;b&quot;&gt;El pie de la p&aacute;gina&lt;/footer&gt;
&lt;/section&gt;</code></pre>
<p><span class="bold black">Editor de colores de plantillas:</span>
<div class="row">
<a class="recurso" href="http://jquerymobile.com/themeroller/">Themeroller</a>


</p>

<a class="recurso" href="ex/themes.html">Themes</a>

</div>

<h3>Sobreescribir los estilos del theme</h3>

<ul>
	<li>Si sobreescribimos usando estilos en línea, funcionará siempre.</li>
	<li>Si no usamos estilos en línea, es posible que no funcione, en cuyo caso, habrá que utilizar toda la ruta de elementos hasta acceder al elemento que quiero maquetar. Ej: <br>
<span class="black bold">section#firstpage div#content a</span>
	</li>
	<li>De todas formas, lo más práctico será usar el modificador !important: <br>
h2{background:red <span class="black bold">!important;</span>}
	</li>
</ul>

<h3>Ejercicio</h3>
<p>Crear un theme usando <a href="http://themeroller.jquerymobile.com/">themeroller</a>, e importarlo para que funcione en alguno de los ejercicios que hemos realizado.</p>

<p>La hoja de estilos jquery.mobile.css contiene una estructura y un theme, ambos juntos en el mismo documento. Al importar un theme, tendré que importar el structure.css (disponible zip descargado de jquerymobile.com) y el theme.css generado con themeroller, cada uno por separado.</p>

</div>
</article>
<article><div>
	<h2 id="elementos-persistentes">Elementos persistentes</h2>
	<p>Pueder ser el header o el footer. Deben ser colocados respectivamente antes o después de todas las &lt;section data-role=&quot;page&quot;&gt; a los que van a afectar.</p>

	<p>Luego, habrá que usar el siguiente javascript: <br>
<pre><code>
$(document).ready(function() {
	$( &quot;[data-role='header'], [data-role='footer']&quot; ).toolbar();
});
</code></pre>
	</p>
	<?= getRes('ejemplo','ex/cabecera-persistente.html', 'Cabecera persistente', 1) ?>

	<h3>Excepciones a los elementos persistentes</h3>
<p>Sólo los data-role=page que estén por debajo del data-role=header independiente cogerán esa cabecera.</p>

<p>Sólo los data-role=page que estén por encima del data-role=footer independiente cogerán esa cabecera.</p>

<?= getRes('ejemplo','ex/cabecera-persistente-2.html','Cabecera persistente 2', 1) ?>
</div>
</article>
<article>
	<div>
	<h2 id="eventos">Eventos en jQuery Mobile</h2>

	<p><span class="black bold">Touch events</span>: tap, taphold (1 segundo), swipe, (tanto vertical como horizontalmente, más de 30px), swipeleft, swiperight.</p>
	<p><span class="black bold">Scroll events</span>: se disparan cuando empiezo y paro de hacer scroll.</p>
	<p>
<span class="black bold">Page events:  </span> <br>
<span class="u">Para página internas:</span><br>
pagebeforecreate → 	pagecreate → pageinit. <br>
En pagebeforecreate puedes manipular cualquier etiqueta antes de que jQM lo haga. Usaremos page init en vez del evento ready del DOM. <br>
<span class="u">Para carga de páginas externas: </span> <br>
pagebeforeload 	→ pageload <br>	
				→ pageloadfailed 
pageremove <br>	
<span class="black bold">Orientation events</span>: se disparan cuando el dispositivo cambia su orientación.</p>



<h3>Touch events</h3>
<p>Usando jQueryMobile ya no usaremos $(document).ready(). En su lugar usaremos:</p>
<pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
	<span class="red bold">$(document).on(&quot;pageinit&quot;, &quot;#firstpage&quot;,function(evt){</span>
		$(&quot;#firstpage&quot;).on(&quot;tap&quot;, function(e){
			alert(&quot;tap&quot;);
		});
		$(&quot;#firstpage&quot;).on(&quot;swiperight&quot;, function(e){
			alert(&quot;swiperight&quot;);
		});

		$(&quot;#firstpage&quot;).on(&quot;swipeleft&quot;, function(e){
			alert(&quot;swipeleft&quot;);
		});
	})
&lt;/script&gt;</code></pre>

<div class="notas">
	<p>Nota:
Observamos que el tap se dispara cuando hacemos swipe. Habrá que probar este código en el emulador o en el móvil para que el tap se dispare sólo cuando corresponda.</p>
</div>



<h3>Orientation event</h3>
<pre><code>$(document).on(&quot;pageinit&quot;, &quot;#firstpage&quot;,function(evt){
	$(&quot;#firstpage&quot;).on(&quot;orientationchange&quot;, function(e){
		alert(&quot;orientation changed to: &quot; + e.orientation);
	});
})</code></pre>
<?= getRes('ejemplo','ex/event.html','Ver ejemplo' , 1) ?>
<h3>Scroll Events</h3>

<pre><code>$(document).on(&quot;pageinit&quot;, &quot;#firstpage&quot;,function(evt){
	$(document).on(&quot;scrollstop&quot;, function(e){
		alert(&quot;scrolling stopped&quot;);
	});
})</code></pre>
<?= getRes('ejemplo','ex/scroll-events.html','Ver ejemplo', 1) ?>



<h3>Page events - transitions</h3>

<pre><code>$(document).on(&quot;pagebeforehide&quot;, &quot;#firstpage&quot;,function(evt, data){
	alert(&quot;p&aacute;gina antes de ocultarse&quot;);
})
$(document).on(&quot;pagebeforeshow&quot;, &quot;#firstpage&quot;,function(evt, data){
	alert(&quot;p&aacute;gina antes de mostrarse&quot;);
})
$(document).on(&quot;pagehide&quot;, &quot;#firstpage&quot;,function(evt, data){
	alert(&quot;pagina que se oculta&quot;);
})
$(document).on(&quot;pageshow&quot;, &quot;#firstpage&quot;,function(evt, data){
	alert(&quot;p&aacute;gina que se muestra&quot;);
})</code></pre>
<?= getRes('ejemplo','ex/page-events-transitions/index.html', 'Ver ejemplo', 4) ?>

<h4>Otros métodos y propiedades</h4>

<ul><li>
	
	$.mobile.changePage(to, options) → para cambiar la página programaticamente. El segundo parámetro es opcional.
</li>

<li>$.mobile.silentScroll(vPos) → hace un scroll hasta una posición determinada sin activar los listeners de scroll.</li>

<li>$.mobile.activePage → propiedad que contiene la página actual.</li>
<li>$.mobile.showPageLoadingMsg() → muestra un cuadro de dialogo de carga.</li>
<li>$.mobile.hidePageLoadingMsg() → oculta el cuadro de dialogo de carga.</li>


</ul>

<p><span class="bold black">Importante!:</span>
Tras añadir elementos dinámicamente (usando javascript) estos no cogen los estilos de jquerymobile, para que que los cojan, usaremos:
$("#mainList")<span class="red bold">.trigger("create");</span>
</p>



<h3>Ejercicio</h3>

<p>Al hacer swipe right, avanzar a la siguiente página.</p>

<?= getRes('ejemplo','ex/ejercicio-touch-events.html','Ejercicio touch events', 1) ?>
</div>
</article>

<article><div>
	<h2 id="default_settings">Default settings</h2>

	<p>Debemos cargar la configuración por defecto antes de cargar la librería de jQuerymobile.</p>

	<pre><code><span class="red">&lt;script type=&quot;text/javascript&quot; src=&quot;js/jquery.js&quot;&gt;&lt;/script&gt;</span>
&lt;script type=&quot;text/javascript&quot;&gt;
$(document).on(&quot;mobileinit&quot;,function(){
	alert(&quot;inicio&quot;);
	$.mobile.defaultPageTransition = &quot;slide&quot;;
	$.mobile.ajaxEnabled = false;
	$.mobile.defaultDialogTransition = &quot;flip&quot;;
	$.mobile.pageLoadErrorMessage = &quot;Ups!&quot;;
})
&lt;/script&gt;
<span class="red">&lt;script type=&quot;text/javascript&quot; src=&quot;js/jquerymobile.js&quot;&gt;&lt;/script&gt;</span></code></pre>
<?= getRes('ejemplo','ex/default-settings.html','Default settings', 1) ?>

</div>
</article>
<article><div>
	<h2 id="plugins">Plugins de jQueryMobile</h2>

	<ul>
		<li><a href="http://www.filamentgroup.com/lab/jquery-mobile-pagination-plugin.html">http://www.filamentgroup.com/lab/jquery-mobile-pagination-plugin.html</a></li>


		<li><a href="http://dev.jtsage.com/jQM-SimpleDialog/">http://dev.jtsage.com/jQM-SimpleDialog/</a></li>

		<li><a href="http://dev.jtsage.com/">http://dev.jtsage.com/</a></li>

		<li><a href="https://github.com/hiroprotagonist/jquery.mobile.actionsheet">https://github.com/hiroprotagonist/jquery.mobile.actionsheet</a></li>
	</ul>
</div>
</article>
</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>