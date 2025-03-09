<?php
$titulo_curso = "Visual Studio Code";
$meta_description = 'En este curso tienes los mejores consejos para sacarle el máximo partido a este fantásico editor de código.';
$img_curso = 'curso-visual-studio-code.svg';

$root2 =  __DIR__;
$path = substr($root2, 0, strpos($root2, "curso")) . "/curso/";

include $path . "diapos_theme/head.php";
add_action('genesis_after_header', function () {
	global $dots;
?>

	<section id="amor" class="verIndice">

		<article id="inicio_del_documento" class="indice">
			<h2>Índice del curso de Visual Studio Code</h2>
			<ol>
				<li><a href="#shorcuts">Shocuts</a></li>
				<li><a href="#extensions">Extensiones</a></li>
				<li><a href="#emmet">Emmet</a></li>
				<li><a href="#splitview">Split View</a></li>
				<li><a href="#commands">Paleta de comandos</a></li>
				<li><a href="#snippets">Crea tus propios snippets</a></li>
				<li><a href="#snippets">Crea tus propios snippets</a></li>
<li><a href="#react">Usar Emmet por defecto cuando editamos un fichero de React Native
</a></li>
			</ol>
		</article>
	</section>
	<main class="curso">
	<?= drawH1WithImg() ?>

		<article>
			<div>
			<h2 id="shorcuts">Shortcuts</h2>
			<ul>
				<li>Buscar en archivos: ctrl + shift + f</li>
				<li>Ir al archivo: ctrl + p</li>
				<li>Abrir terminal: ctrl + `</li>
				<li>Toggle word wrap: alt + z</li>
				<li>Selección múltiple: ctrl + d</li>
				<li>Cursor múltiple: alt + click</li>
				<li>Botón derecho sobre la pestaña -> Open container folder</li>
				<li>Accesos de la sidebar:
					<ul>
						<li><span class="bold">Explorador de ficheros</span> (ctrl + shift + e)</li>
						<li><span class="bold">Búsqueda</span> (ctrl + shift + f)
							<p>Pulsando en la flechita desplegaremos la posibilidad de reemplazar.</p>
							<img style="width:400px" src="./img/search-visual-studio-code.png" alt="search en visual studio code">
						</li>

						<li><span class="bold">Git</span> (ctrl + shift + g)</li>
						<li><span class="bold">Debug</span> (ctrl + shift + d)</li>
						<li><span class="bold">Extensions</span> (ctrl + shift + x). Para <a href="https://marketplace.visualstudio.com/" target="blank">ir al marketplace</a>.


							
				</li>
			</ul>
			</li>
			</ul>
			</div>
		</article>

<article>
	<div>
		<h2 id="extensions">Extensiones</h2>
		<ul>
								<li><a href="https://marketplace.visualstudio.com/items?itemName=christian-kohler.path-intellisense" target="_blank">Path Intelligense</a> by Christian Kohler -> Ayuda en el autocompletado de las rutas. Muy útil en React.</li>
								<li><a href="https://marketplace.visualstudio.com/items?itemName=humy2833.ftp-simple" target="_blank">ftp-simple</a> by humy2833 -> Permite subir un proyecto a internet cómodamente. El comando <span class="bold">ftp-simple config</span> es para configurar la conexión. Luego podemos subir a internet pulsando con el botón derecho sobre la carpeta deseada.</li>
								<li><a href="https://marketplace.visualstudio.com/items?itemName=techer.open-in-browser" target="_blank">Open in Browser</a>(alt + b). En linux este shortcut no funcionó y tuve que usar alt + shift + b.</li>
								<li><a href="https://marketplace.visualstudio.com/items?itemName=Shan.code-settings-sync" target="_blank">
								<ol>
									<li>En el ordenador de origen: ctrl + shift + p → sync → Advanced options → Sync: Open Settings</li>
								</ol>
								
								</li>
								<li><a href="https://marketplace.visualstudio.com/items?itemName=PKief.material-icon-theme" target="_blank">Material Icon Theme
									</a> by Philipp Kief -> Redefine los iconos visuales del menú ficheros</li>
								<li><a href="https://marketplace.visualstudio.com/items?itemName=alefragnani.project-manager" target="_blank">Project Manager</a> -> Permite gestionar los projectos abiertos más cómodamente.</li>
								<li><a href="https://marketplace.visualstudio.com/items?itemName=CoenraadS.bracket-pair-colorizer" target="_blank">Bracket Pair Colorizer</a> -> Resalta la apertura y cierre de etiquetas.</li>
								<li><a href="https://marketplace.visualstudio.com/items?itemName=naumovs.color-highlight" target="_blank">Color HighLighting</a> -> Muestra un previo del color seleccionado</li>

								<li><a href="https://marketplace.visualstudio.com/items?itemName=dsznajder.es7-react-js-snippets" target="_blank">ES7 React/Redux/GraphQL/React-Native snippets</a> by dsznajder -> Snippets para Javascript y React.
									<ul>
										<li>ctrl + shift + p -> ES7 -> Muestra todos los comandos disponibles.</li>
										<li>rfc + enter -> React Functional Component.</li>
										<li>clg + enter -> console.log</li>
										<li>imp + enter -> import module</li>
									</ul>

								</li>
								<li><a href="https://marketplace.visualstudio.com/items?itemName=Gruntfuggly.todo-tree" target="_blank">Todo Tree</a> by Gruntfuggly -> Permite tener un listado de tareas vinculado a nuestro proyecto<br> <img src="img/todos.png" alt="visual studio code todos"></li>

								<li><a href="https://marketplace.visualstudio.com/items?itemName=msjsdiag.debugger-for-chrome" target="_blank">Debugger for Chrome</a> by Microsoft -> Permite debugar una aplicación poniendo los puntos de parada en el Visual Studio Code. Consideraciones:
									<ul>
										<li>Será necesario desplegar la aplicación en el servidor (usando localhost).</li>
										<li>Debemos crear el fichero de configuración: ctrl + shift + p -> <span class="bold">Debug: Open launch.json</span>. Debemos asegurarnos de que el puerto definido en el fichero de configuración coincide con el puerto donde se va a ejecutar la aplicación.</li>
										<li>Finalmente, ejecutamos la aplicación con <span class="bold">npm start</span>, y lanzamos el debug con <span class="bold">F5</span>.</li>
									</ul>
								</li>

								<li><a href="https://marketplace.visualstudio.com/items?itemName=jpoissonnier.vscode-styled-components" target="_blank">vscode-styled-components
									</a> by Julien Poissonnier -> permite visualizar correctamente el resaltado de sintaxis cuando usemos el módulo de React <span class="bold">styled components</span>.</li>
							</ul>


							<ul>
								<li><a href="https://marketplace.visualstudio.com/items?itemName=alefragnani.Bookmarks" target="_blank">Bookmarks</a> by Alessandro Fragnani. Permite marcar una líneas de código para saltar entre ellas. ctrl + alt + k: crea un bookmark. ctrl + alt + j: salta entre bookmarks.</li>

								<li><a href="https://marketplace.visualstudio.com/items?itemName=rokoroku.vscode-theme-darcula" target="_blank">Darcula</a> by rokoroku. Tema de IntellJ.</li>
						</li>

					</ul>


	</div>
</article>

		<article>
			<div>
			<h2 id="emmet">Emmet</h2>
			<p>Visual Studio Code viene con Emmet de serie:</p>
			<pre>Ejemplo: <code>ul > li > a</code></pre>
								</div>
		</article>
		<article>
			<div>
			<h2 id="splitview">Split View</h2>
			<p>Puedes usar el botón de split view:</p>
			<img style="width:200px" src="img/split-view.png" alt="visual studio code split view">
			<p>ctrl + shift + p => split editor</p>
			</div>
		</article>
		<article>
			<div>
			<h2 id="commands">Paleta de comandos (ctrl + shift + p)</h2>
			<ul>

				<li>
					<p>Envolver una palabra: Selecciono la palabra que quiero envolver -> wrap with abreviation</p>
				</li>
				<li>View: Toggle <strong>Menu</strong> Bar</li>
				<li>View: Toggle <strong>Status</strong> Bar</li>
				<li>View: Toggle <strong>Full</strong> Screen</li>
				<li>View: Toggle <strong>Side Bar</strong> Visibility</li>

			</ul>
			</div>
		</article>

		<article>
			<div>
			<h2 id="snippets">Crear tus propios snippets</h2>
			<div class="row">
				<div class="col-md-10">			<p>File -> Preferences -> User Snippets -> New Global Snippets File</p>


<pre><code>{
&quot;Un Snippet de Ejemplo&quot;: {
&quot;scope&quot;: &quot;html&quot;,
&quot;prefix&quot;: &quot;ejemplo&quot;,
&quot;body&quot;: [
 &quot;&lt;p&gt;&quot;,
&quot;&lt;a href=\&quot;$1\&quot;&gt;$2&lt;/a&gt;&quot;,
&quot;&lt;p&gt;&quot;
],
}
}</code></pre></div>
				<div class="col-md-2"><?= getRes('recurso', './codigos-web.zip', 'Descargar snippets de ejemplo') ?></div>
			</div>

			
			</div>
		</article>ç
		<article>
			<div>
			<h2 id="react">Usar Emmet por defecto cuando editamos un fichero de React Native</h2>

			<p>ctrl + shift + p -> Preferences: Open User Settings -> Iconito en la esquina superior derecha</p>

			<img src="img/user-settings.png" alt="User Settings">
			<p>Pegamos el siguiente código</p>


			<pre><code>"files.associations": {
    "*.js": "javascriptreact"
}</code></pre></div>
		</article>
	</main>
<?php
});
include $path . "/diapos_theme/footer.php";
?>