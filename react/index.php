<?php 
$titulo_curso="ReactJS Completo | APRENDE REACTJS | Pablo Monteserín";
$meta_description = 'En este curso veremos esta gran librería de facebook destinada a hacer aplicaciones de todo tipo con Javascript';
$img_curso = 'curso-react.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
?>
  	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Course",
			"name": "Curso de React",
			"description": "En este curso veremos esta gran librería de facebook destinada a hacer aplicaciones de todo tipo con Javascript.",
			"provider": {
				"@type": "Person",
				"name": "Pablo Monteserín",
				"sameAs": ["https://pablomonteserin.com/", "https://www.facebook.com/pablomonteserincom/", "https://www.linkedin.com/in/%E2%99%A5-pablo-monteser%C3%ADn-59079728/", "https://www.youtube.com/user/PabloMonteserinTutor", "https://twitter.com/monteserin1982"]
			}
		}
	</script>

  <section id="amor" class="verIndice">
  <article id="inicio_del_documento" class="indice">
  <h3>Índice del curso de <?= $titulo_curso?></h3>
  <ol>
  <li><a href="#introduccion">Introducción al curso de React</a></li>
  <li><a href="#instalacion">Instalación</a></li>
  <li><a href="#editor">El editor</a></li>

  <li><a href="#jsx">JSX</a></li>
  <li><a href="#recogida-datos">useRef</a></li>
  <li><a href="#state">useState</a></li>
  <li><a href="#componentes">Componentes</a></li>
  <li><a href="#props">Props</a></li>
<li><a href="#renderizado-condicional">Renderizado condicional</a></li>
<li><a href="#cargar-imagen">Cargar una imagen</a></li>

  <li><a href="#style">Style</a></li>
  <li><a href="#styled-components">Styled Components</a></li>
  <li><a href="#cambiar-el-favicon">Cambiar el favicon</a></li>
<li><a href="#valores-por-defecto">Valores por defecto</a></li>

<li><a href="#react-router">React router</a></li>
<li><a href="#fetch-api">Fetch API (axios)</a></li>
<li><a href="#recoger-parametros-url">Recoger parámetros de la url</a></li>
<li><a href="#context-api">Context API</a></li>
<li><a href="#login">Login</a></li>
<li><a href="#redux">Redux</a></li>
<li><a href="#react-developer-tool">React Developer Tool</a></li>
<li><a href="#sockets">Sockets</a></li>
<li><a href="#build">Build</a></li>
<li><a href="#styleguidist">Styleguidist</a></li>
<li><a href="#typescript">TypeScript</a></li>
<li><a href="compartir-codigo" class="hasChildren">Compartir código entre React Web y React Native. Dos aproximaciones:</a>
<ol>
<li><a href="#npm">Empaquetar con NPM</a></li>
<li><a href="#importar-codigo-con-prototype">Importar función que usa Prototype</a></li>
</ol>
</li>
</ol>
  </article>
  </section>
<main class="curso">
<?= drawH1WithImg() ?>

<article><div>
<h2 id="introduccion">Introducción al curso de React</h2>
<h3>Javascript y React</h3>

<div class="row">
  <div class="col-md-6"><p>Por su flexibilidad, las posibilidades que ofrece y el camino que he seguido como desarrollador, probablemente sea Javascript el lenguaje de programación que más me gusta. Con Javascript, puedo hacer aplicaciones web, programar en el lado del servidor, aplicaciones móviles, videojuegos... y eso por sí solo ya hacía que programar con Javascript fuese apasionante...</p>

<p>... y luego descubrí <span class="bold">React</span>. Dí bastantes vueltas hasta poder dominar este lenguaje. Empecé a aprenderlo usando programación orientada a objetos, hasta que la gente de Facebook dijo que era mucho mejor utilizar programación funcional para programar en React. Por otra parte React hace un uso intensivo de Javascript, así que cuando me puse a aprender React, rehice el <a href="https://pablomonteserin.com/curso/javascript-es6/" target="_blank">curso de Javascript</a> para explicar este lenguaje utilizando su sintaxis más moderna.</p>

<h3>¿Qué es React?</h3>

<p>React es una librería Javascript de código abierto desarrollada por Facebook focalizada en el desarrollo de interfaces de usuario.</p>

<p>Básicamente con React podemos hacer lo mismo que hacíamos con Javascript. ¿Pero entonces...</p>
</div>
  <div class="col-md-6"><img class="img-fluid" src="img/react-vs-jquery.png" alt="react vs jquery">
</div>
</div>

<h3>¿Qué nos aporta React frente a Javascript?</h3>

<ul>
  <li>Nos facilita escribir código de forma más limpia y ordenada.</li>
  <li>Cuando cambiemos el valor de una variable esta se actualizará automáticamente en la página sin tener que acceder al DOM.</li>
  <li>Dado que React usa nodeJS, y nodeJS simplifica mucho la carga de librerías en nuestro proyecto, usando React también tendremos esta ventaja.</li>
</ul>
<p>Dicho de otra forma, con React podremos desarrollar aplicaciones web de forma mucho más l</p>


<h3>¿Quién usa React?</h3>

<p>Facebook, Instagram, Dropbox, BBC, Airbnb, Netflix...</p>


<h3>¿Qué puedes lograr con React?</h3>
<p>Tras terminar el curso, podrás programar aplicaciones con Javascript de manera rápida, eficiente y por tanto mucho más divertida, sin acceder al DOM para nada, y profundizando en muchos conceptos fundamentales de Javascript. </p>


<h3>Por qué no usar programación orientada a objetos con React</h3>
<ul>
  <li>Porque es más complejo.</li>
  <li>Porque escribes más código.</li>
  <li>Porque lo dice Facebook (su compañía creadora).
  <div class="row">
    <div class="col-sm-6">

    <iframe width="560" height="315" src="https://www.youtube.com/embed/wl_3JIcVvZE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p>Video de Sophie Alpert, gerente de ingeniería en Facebook</p>
     
    </div>

    <div class="col-sm-6">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/r2MzbpEeEDY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <p>Video de Dan Abramox, co-author de <span class="i">redux</span> y de <span class="i">create react app</span> y trabajador de Facebook.</p>
    </div>

  </div>
 </li>
</ul>
</div></article>
<article>
<div>
<h2 id="editor">El editor</h2>


<p>Personalmente uso el <a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a> ya que es gratis, open source y muy completo. Lo utilizo con las siguientes extensiones: </p>

<ul>
  <li><a href="https://marketplace.visualstudio.com/items?itemName=eg2.vscode-npm-script" target="_blank">npm</a>(egamma) → me permite ejecutar instrucciones recogidas en el fichero package.json haciendo click en lugar de tecleandolas en consola.</li>

  <li><a href="https://marketplace.visualstudio.com/items?itemName=dsznajder.es7-react-js-snippets" target="_blank">ES7 React/Redux/GraphQL/React-Native snippets</a> → me da algunos snippets de código para desarrollar más rápido.</li>

  <li><a href="https://marketplace.visualstudio.com/items?itemName=jpoissonnier.vscode-styled-components" target="_blank">vscode-styled-components
</a> → me da coloreado de sintaxis cuando estoy usando styled componentes.</li>
</ul>
</div>
</article>

<article>
  <div>
<h2 id="instalacion">Instalación</h2>
<ol>
	<li><a href="https://nodejs.org/es/" target="_blank">Instalamos nodejs</a></li>
	<li>A partir de aquí, tenemos dos opciones:
  <ol>
  <li>Crear nuestro proyecto a partir del "creador" standard de aplicaciones React: <pre><code>npx create-react-app mi-aplicacion</code></pre></li>
<li>Hacer la configuración manualmente. Es buena idea partir del siguiente proyecto que ya tiene una configuración con únicamente las cosas que necesitamos habitualmente. Para ejecutar el primer comando necesitaremos tener <a href="https://git-scm.com/downloads" target="_blank">git</a> instalado.
<pre><code>git clone https://github.com/monteserin/react-template.git</code></pre>
<pre><span class="bold">Si no queremos descargar la carpeta .git:</span><code>npx degit monteserin/react-template</code></pre>

<p>El código relevante que está dentro de esta plantilla es:</p>
<pre><span class="bold">package.json</span><code>{
  "name": "template",
  "version": "1.0.0",
  "description": "",
  "main": "./dist",
  "scripts": {
    "build": "cross-env NODE_ENV=production PUBLIC_PATH=/ruta-del-proyecto-en-produccion webpack -p",
    "start": "cross-env NODE_ENV=development webpack-dev-server --open --watch",
    "upload": "node ./bin/upload.js"
  },
  "author": "Pablo Monteserín",
  "license": "ISC",
  "devDependencies": {
    "@babel/cli": "^7.0.0",
    "@babel/core": "^7.3.4",
    "@babel/plugin-proposal-optional-chaining": "^7.7.5",
    "@babel/plugin-transform-runtime": "^7.3.4",
    "@babel/preset-env": "^7.3.4",
    "@babel/preset-react": "^7.0.0",
    "@babel/runtime": "^7.5.5",
    "babel-loader": "^8.0.5",
    "babel-plugin-import-directory": "^1.1.0",
    "babel-plugin-inline-import": "^3.0.0",
    "babel-plugin-module-resolver": "^3.2.0",
    "babel-plugin-wildcard": "^5.0.0",
    "babel-preset-react": "^6.24.1",
    "cross-env": "^7.0.2",
    "html-webpack-plugin": "^3.2.0",
    "file-loader": "^4.1.0",
    "react-styleguidist": "9.2.0",
    "terser-webpack-plugin": "^1.2.3",
    "url-loader": "^2.2.0",
    "webpack": "4.29.6",
    "webpack-cli": "^3.3.10",
    "webpack-dev-server": "^3.2.1"
  },
  "dependencies": {
    "axios": "^0.19.0",
    "easy-ftp": "^0.4.1",
    "react": "16.9.0",
    "react-dom": "16.9.0",
    "react-router": "^5.0.1",
    "react-router-dom": "^5.0.1",
    "styled-components": "4.4.1"
  }
}</code></pre>

<div class="row">
<div class="col-md-6">
<p>El webpack.config.js se encarga de configurar el empaquetado (bundle) de la aplicación que vamos a generar:</p>
<pre><span class="bold">webpack.config.js</span><code>// Cargamos un módulo nativo de node que nos gestiona rutas
const path = require('path');

// Cargamos webpack para definir plugins propios
const webpack = require('webpack');

// Este módulo minifica el bundle (el archivo compilado)
const TerserPlugin = require('terser-webpack-plugin');

// Este módulo inyecta el bundle en el HTML
const HtmlWebpackPlugin = require('html-webpack-plugin');

// Constantes con los paths de la aplicación
const paths = {
  ROOT: path.resolve(__dirname),
  DIST: path.resolve(__dirname, 'dist'),
  SRC: path.resolve(__dirname, 'src'),
};

//process.env nos permite acceder a las variables de entorno del sistema operativo
//Accedemos a las variables definidas de entorno que hemos definido en el package.json
const development = process.env.NODE_ENV === 'development';
const publicPath = process.env.PUBLIC_PATH || '';

// Set plugins
const HtmlWebpackPluginConfig = new HtmlWebpackPlugin({
  template: './src/index.html',
  hash: !development,
});

const processEnvPlugin = new webpack.DefinePlugin({
  'process.env': {
    PUBLIC_PATH: JSON.stringify(publicPath),
  },
});

module.exports = {
  entry: path.join(paths.SRC, 'index.js'),
  output: {
    path: paths.DIST,
    filename: 'bundle.js',
    publicPath: publicPath || '/',
  },
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /node_modules/,
        use: 'babel-loader',
      },
      {
        test: /\.(jpg|jpeg|gif|png|wav)$/,
        loader: 'file-loader',
        options: {
          publicPath: `${publicPath}/statics/images/`,
          outputPath: './statics/images/',
          name: '[name].[ext]',
        },
      },
      {
        test: /\.(eot|svg|ttf|woff|woff2|otf)$/,
        loader: 'file-loader',
        options: {
          publicPath: `${publicPath}/statics/vectors/`,
          outputPath: './statics/vectors/',
          name: '[name].[ext]',
        },
      },
    ],
  },
  resolve: {
    extensions: ['.js'],
  },
  devServer: {
    historyApiFallback: true,
    disableHostCheck: true,
    hot: false,
    port: 8080,
  },
  optimization: {
    minimize: !development,
    minimizer: [
      new TerserPlugin({
        sourceMap: development,
        cache: true,
        parallel: true,
        terserOptions: {
          compress: !development,
          ecma: 6,
          ie8: false,
          mangle: true,
        },
      }),
    ],
  },
  mode: process.env.NODE_ENV,
  devtool: development && 'source-map',
  plugins: [
    HtmlWebpackPluginConfig,
    processEnvPlugin,
  ],
};</code></pre>
</div>

<div class="col-md-6">
<p>Babel se encarga de transpilar nuestro código Javascript EcmaScript 6+ ( preset-env ) y nuestro código JSX ( preset-react ) a versiones más antiguas y por tanto más aceptadas por la mayoría de los nacegadores. </p>

<p>Un preset es una agrupación de plugins. Los plugins definirán como se hará la transpilación en babel.</p>

<p>Cómo ves, primero ponemos las agrupaciones de plugins (presets) y luego los plugins sueltos.</p>
<pre><span class="bold">.babelrc</span><code>{
  "presets": [
    "@babel/preset-env", "@babel/preset-react"
  ],
  "plugins": [
    "@babel/plugin-transform-runtime"
  ]
}</code></pre>
<pre><span class="bold">/src/index.html</span><code>&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
  &lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
    &lt;title&gt;React App&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div id=&quot;root&quot;&gt;&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
<pre><span class="bold">src/index.js</span><code>import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';

ReactDOM.render(
  &lt;App /&gt;,
  document.getElementById('root')
);</code></pre>

<pre><span class="bold">src/App.js</span><code>import React from 'react';

const App = _ =&gt; (
    &lt;div&gt;
        hola
    &lt;/div&gt;
);

export default App;</code></pre>
<pre><span class="bold">bin/upload.js</span><code>const EasyFtp = require('easy-ftp');
const ftp = new EasyFtp();
const config = {
    "name": "pablomonteserin.com",
    "host": "example.com",
    "port": 21,
    "type": "ftp",
    "username": "usuario",
    "password": "password",
};

//(connect)
ftp.connect(config);
ftp.upload("./dist/**", "/www/termine", function(err) {
    if(err) {
        return console.error(err);
    }
    console.info('Deployed!');
});</code></pre>
</div>

</div>
</li>
  </ol>
  </li>
</ol>
<h3>Arrancar una aplicación</h3>
<pre><code>npm start</code></pre>
  </div></article>
  
  
  <article><div><h2 id="jsx">JSX</h2>
<p>Se usa para declarar componentes utilizando una sintaxis que recuerda a código html. La transformación de nuestro código JSX a un código Javascript que usa la librería de React es llevada a cabo, habitualmente, por el <a href="https://babeljs.io/en/repl" target="_blank">  transpilador babel</a>.</p>
<div class="row">
  <div class="col-md-6"><p class="font-weight-bold">1. Declaración básica de una constante:</p>
  <pre><code>const element = &lt;h1&gt;Hello World&lt;/h1&gt;;</code></pre>

</div>
  <div class="col-md-6"><p class="font-weight-bold">2. Cuando tenemos varios elementos que queremos almacenar en una sola variable o constante de JSX, estos elementos deben estar anidados en uno solo:</p>
  <pre><code>const url = &lt;div&gt;
              &lt;h1&gt;a&lt;/h1&gt;
              &lt;h2&gt;b&lt;/h2&gt;
            &lt;/div&gt;</code></pre></div>
            <div class="col-md-6"><p class="font-weight-bold">3. Para definir clases, usaremos className:</p>
<pre><code>const JSX = (
  &lt;div className=&quot;nombre&quot;&gt;
    &lt;h1&gt;Add a class to this div&lt;/h1&gt;
  &lt;/div&gt;);</code></pre>
</div>
<div class="col-md-6">
<p class="font-weight-bold">4. El código HTML se escribe tal cual, y el código Javascript se pone entre llaves:</p>
  <pre><code>const element = &lt;h1&gt;{ 2 + 2 }&lt;/h1&gt;</code></pre>
<pre><code>const url = "foto.jpg"
const foto = &lt;img src={url} /&gt;</code></pre>

<pre><code>function multiplicar(a,b){return a*b}
const element = &lt;h1&gt;{ multiplicar(2,3)}&lt;/h1&gt;</code></pre>

</div>

  <div class="col-md-6"><p class="font-weight-bold">5. Comentarios:</p>
<pre><code>const JSX = (
  &lt;div&gt;
    &lt;h1&gt;This is a block of JSX&lt;/h1&gt;
    &lt;p&gt;Here's a subtitle&lt;/p&gt;
  &lt;/div&gt;
  {/* comentarios*/}
);</code></pre>
</div>

  <div class="col-md-6">
  <p class="font-weight-bold">6. Detección de eventos:</p>
<pre><code>const btnPulsado = () =&gt;{
  alert(&quot;hola&quot;);
}

const App = _ =&gt; (
  &lt;button onClick={btnPulsado}&gt;P&uacute;lsame&lt;/button&gt;
);</code></pre>
  <p><a href="https://reactjs.org/docs/events.html" target="_blank">Eventos soportados</a></p>
  </div>
  <div class="col-md-6"><p class="font-weight-bold">Array I</p>

<pre><code>const App = _ =&gt; {
const numeros = [1,1,3,5,7]
return (
  &lt;div&gt;
    {numeros.map(n =&gt; {
      return &lt;p&gt;{n}&lt;/p&gt;
    })}
  &lt;/div&gt;
);
}</code></pre></div>

  <div class="col-md-6">
  <p class="font-weight-bold">Array II</p>
  <p>Cada elemento del array debe tener asociada una key única cuando lo recorremos. Si la key está repetida, el valor sólo se imprimirá una vez.</p>
  <pre><code>const App = _ =&gt; {
  const numeros = [1,1,3,5,7]
  return (
    &lt;div&gt;
      {numeros.map(n =&gt; {
        return &lt;p key={n}&gt;{n}&lt;/p&gt;
      })}
    &lt;/div&gt;
  );
}</code></pre>
  </div>
  <div class="col-md-6"><p class="font-weight-bold">Array III</p>
  <p>Cada uno de los elementos sobre los que estamos iterando debe tener un atributo key diferente. Por tanto, sería mala idea usar n como key, ya que puede repetirse. Sería más recomendable usar index como key (que es lo que uso en el ejemplo), ya que es un valor que se va incrementando.</p>
  <pre><code>const App = _ {
  const numeros = [1,1,3,5,7]
  return (
    &lt;div&gt;
      {numeros.map((n, index) =&gt; {
        return &lt;p key={index}&gt;{n}&lt;/p&gt;
      })}
    &lt;/div&gt;
  );
}</code></pre></div>
</div>

  </div></article>
  
  <article><div><h2 id="recogida-datos">useRef</h2>

<p>Los Hooks fueron introducidos en la versión 16.8 de React para optimizar en programación funcional el uso de ciertas funcionalidades inherentes a la programación orientada a objetos cuando usábamos la clase Component.</p>

<p>Los Hooks fueron introducidos en la versión 16.8 de React para permitir el uso de la API de React.Component en los componentes funcionales sin tener que heredarla ( y por tanto, evitamos usar conceptos de programación orientada a objetos).</p>

<div class="row">
  <div class="col-md-6">

  <pre><code>import React, {useRef} from 'react';

const App = _ =&gt; {
  const nombreRef = useRef(null);

  const procesar = _ =&gt; {
    console.log(nombreRef.current.value);
  }
  return (
    &lt;div className=&quot;App&quot;&gt;
      &lt;input type=&quot;text&quot; ref={nombreRef}/&gt;
      &lt;button onClick={procesar}&gt;Enviar&lt;/button&gt;
    &lt;/div&gt;
  )
}

export default App;</code></pre>
  </div>

  <div class="col-md-6">
    
<div class="row">
<?= getRes('recurso','ex/useRef/procesa-formulario/index.html', 'Ver ejercicio') ?>
<?= getRes('recurso','zip/useRef/procesa-formulario.zip', 'Descargar ejemplo') ?>
</div>
  </div>

</div>

  <h3>Ejercicios - recogida de datos</h3>
  <p>De momento, en estos ejercicios no pintaremos la solución en la página HTML, sino que la mostraremos como una traza en la consola.</p>
<ol>
<li>
<h4>Euros a dólares</h4>
<div class="row">
  <div class="col-md-8">
<p>Vamos a hacer un ejercicio similar al anterior. Se trata de un conversor de euros a dólares. Supondremos que un euro son dos dólares. El usuario introducirá un valor en euros y se mostrará un mensaje de alerta con el correspondiente valor en dólares.</p>
<p>Para hacer este ejercicio, parte del código del ejemplo anterior, pero modificándolo para que en lugar de hablar de grados Centígrados y grados Fahrenheit, en el código fuente se haga referencia a euros y dólares.</p></div>
  <div class="col-md-4"><div class="centraditos">
<?= getRes('ejemplo','ex/useRef/dolares/dist/index.html', 'Ver ejercicio') ?>
<?= getRes('recurso','ex/useRef/dolares/dolares.zip', 'Descargar ejercicio') ?>
<?= getRes("video_premium", 411008001) ?>

</div></div>
</div>

  

</li>


  <li>
  <h4>Grados centígrados</h4>
  <div class="row">
    <div class="col-md-8">  
  <p>Definir una clase App que recogerá los grados centígrados introducidos y se los pasará a la clase App principal para que se encargue de calcular los grados Fahrenheit.</p>
  
<p>Para ello deberé multiplicar por 9/5 y sumar 32. Como todo el mundo sabe, 20 grados centígrados son 68 grados Farenheit.</p></div>
    <div class="col-md-4"><div class="centraditos">
 <?= getRes('ejemplo','ex/useRef/grados/dist/index.html', 'Ver ejercicio') ?> 
<?= getRes('recurso','ex/useRef/grados/grados.zip', 'Descargar ejercicio') ?>
<?= getRes("video_premium", 411029423) ?>
</div></div>
  </div>
  
  

</li>
<li>
<div class="row">
  <div class="col-md-8"><h4>Calcular la superficie de un rectángulo</h4>
<p>Tendremos un formulario que recogerá el ancho y el alto de un rectángulo y calculará su superficie.</p></div>
  <div class="col-md-4"><div class="centraditos">
<?= getRes('ejemplo','ex/useRef/rectangulo/dist/index.html', 'Ver ejercicio') ?>
<?= getRes('recurso','ex/useRef/rectangulo/rectangulo.zip', 'Descargar ejercicio') ?>

<?= getRes("video_premium", 411060633) ?>
</div></div>
</div>  




</li>
</ol>
  </div></article><article><div><h2 id="state">useState</h2>
<p>Cuando actualizamos una variable state, automáticamente, en caso de ser necesario, el código html vinculado a esa variable es actualizado.</p>


<div class="row">
  <div class="col-md-8"><p class="bold">Los hooks (<span class="i">useState</span> y <span class="i">useEffect</span>)fueron introducidos en la versión 16.8 de react. Por tanto, para utilizarlos, deberemos tener al menos esta versión en el <span class="i">package.json</span></p></div>
  <div class="col-md-4"><pre><code>  "dependencies": {
    "react": "<span class="bold">^16.8.6</span>",
    "react-dom": "<span class="bold">^16.8.6</span>",</code></pre></div>
</div>




    
<h3>Modificar un estado</h3>
<div class="row">
  <div class="col-lg-3"><p>Cuando queremos modificar un estado, utilizaremos el segundo parámetro que devuelve la función <span class="i">useState</span>, que al ejecutarla nos guardará el parámetro que le pasemos como nuevo valor del estado.</p></div>
  <div class="col-lg-9"><pre><code>import React, {useState} from 'react';

const App = _ =&gt;{
  const [contador, actualizarContador] = useState(1);   
  return &lt;span onClick={() =&gt; actualizarContador(contador + 1)} &gt;{contador}&lt;/span&gt;
}

export default App;</code></pre></div>
</div>






<h3>Con useState también podemos recoger un valor del usuario</h3>
<p>Si queremos recoger un valor introducido por el usuario, también usaremos useState. No obstante, es posible hacer esto utilizando el método <span class="i">useRef</span>, pero dado que este no funciona en ReactNative, no lo vamos a ver.</p>

<div class="row">
<div class="col-sm-10">


<pre><code>const App = _ =&gt; {
  const [inputText, setInputText ] = useState('');

    return (
      &lt;div className=&quot;App&quot;&gt;
        &lt;input type=&quot;text&quot; value={inputText} onChange={ txt =&gt; setInputText(txt.target.value)} /&gt;
        &lt;div&gt;{ inputText }&lt;/div&gt;
      &lt;/div&gt;
    );
}</code></pre>
</div>

<div class="col-sm-2">
<?= getRes('recurso','./zip/useState/teoria-procesa-valor.zip', 'Descargar ejemplo') ?>
</div>

</div>

<h3>Cambiar valor en el click</h3>

<div class="row">

<div class="col-sm-10">

<pre><code>const App = _ =&gt; {
  const [inputText, setInputText ] = useState('');
  const [valorAMostrar, setValorAMostrar ] = useState(0);

    return (
      &lt;div className=&quot;App&quot;&gt;
        &lt;input type=&quot;text&quot; value={inputText} onChange={ txt =&gt; setInputText(txt.target.value)} /&gt;
        &lt;button onClick={ () =&gt; setValorAMostrar(inputText)}&gt;Cambiar valor&lt;/button&gt;
        &lt;div&gt;{ valorAMostrar }&lt;/div&gt;
      &lt;/div&gt;
    );
}</code></pre>
</div>

<div class="col-sm 2">
<?= getRes('recurso','./zip/useState/teoria-cambiar-valor-en-click.zip', 'Descargar ejemplo') ?>

</div>
</div>
<h3>Ejercicios State</h3>
<ol>
  <li>
<p>Ahora modificaremos los ejercicios que vimos en la sección de <em>useRef</em> para pintar la solución de los ejercicios en pantalla: </p>


<ol>


<li>  <h4>Euros a dólares</h4>

<div class="row">
  <div class="col-md-8"><p>Hay que realizar un conversor de euros a dólares. Supondremos que un euro son dos dólares. El usuario introducirá un valor en euros y se mostrará un mensaje en pantalla con el correspondiente valor en dólares.</p>
</div>
  <div class="col-md-4">
  <div class="centraditos">

  <?= getRes('ejemplo','ex/useState/dolares/dist/index.html', 'Ver ejemplo procesa dólares con State') ?>


<?= getRes('recurso','ex/useState/dolares/dolares.zip', 'Descargar ejercicio euros con State') ?>


<?= getRes("video_premium", 411125456) ?>

</div>
  </div>
</div>




</li>


<li><h4>Grados centígrados</h4> 

<div class="row">
  <div class="col-md-8">
  <p>Hay que realizar un conversor de grados Centígrados a grados Fahrenheit. Supondremos que un euro son dos dólares.</p>  
  
  <p>Para ello deberé multiplicar por 9/5 y sumar 32. Como todo el mundo sabe, 20 grados centígrados son 68 grados Farenheit.</p></div>
  <div class="col-md-4"><div class="centraditos">
  <?= getRes('ejemplo','ex/useState/grados/dist/index.html', 'Ver ejemplo procesa grados con State') ?>
  <?= getRes('recurso','ex/useState/grados/grados.zip', 'Descargar ejercicio grados con State') ?>
  

  <?= getRes("video_premium", 411134655) ?>
  </div></div>
</div>




  

  </li>



<li><h4>Calcular la superficie de un rectángulo</h4>

<div class="row">
  <div class="col-md-8"><p>Tendremos un formulario que recogerá el ancho y el alto de un rectángulo y calculará su superficie.</p>
</div>
  <div class="col-md-4"><div class="centraditos">

  <?= getRes('ejemplo','ex/useState/rectangulo/dist/index.html', 'Ver ejemplo procesa rectángulo con State') ?>
  
<?= getRes('recurso','ex/useState/rectangulo/rectangulo.zip', 'Descargar ejercicio rectángulo con State') ?>



<?= getRes("video_premium", 411147491) ?>
</div></div>
</div>


</li>

</ol>

</li>
<li>
<p>Desarrollar una aplicación. Al pulsar sobre cada uno de esos botones, debe cargarse la imagen correspondiente a una de las propiedades del siguiente objeto:</p>
<pre><code>const ANIMAL_IMAGES = {
  img1: "http://via.placeholder.com/111x111",
  img2: "http://via.placeholder.com/222x222",
  img3: "http://via.placeholder.com/333x333",
};</code></pre>
<div class="row">


<div class="col-sm-6">
<img src="img/ejercicio-imagenes.png" alt="ejercicio imagenes con react">
</div>

<div class="col-sm-6">
<div class="row">
<?= getRes('ejemplo','ex/useState/cambiar-imagen/dist/index.html', 'Ver ejemplo cambiar imagen') ?>

<?= getRes('recurso','ex/useState/cambiar-imagen/cambiar-imagen.zip', 'Ejercicio cambiar imagen resuelto') ?>

<?= getRes("video_premium", 411160290) ?>
</div>
</div>
</div>

</li>
</ol>
    </div></article><article><div><h2 id="componentes">Componentes</h2>

<div class="row">
  <div class="col-md-6">
  <p>Son partes de la interfaz visual.</p>
  <p>Su nombre debe, obligatoriamente, comenzar por mayúscula. Si no comienza por mayúscula, tendremos un error que es difícil de interpretar.</p>
  <p>Cada vez que el componente se renderiza, sus funciones se vuelven a crear, por lo que cuantas más funciones podamos definr fuera del mismo, mejor</p>
</div>
  <div class="col-md-6">  <p>Un componente <span class="bold">debe devolver código JSX o null</span>.</p>
  <pre><code>import React from 'react';

const MyComponent = _ =&gt; &lt;div&gt;hola&lt;/div&gt;;

const App = _ =&gt; {
  return (
    &lt;div className=&quot;App&quot;&gt;
      &lt;MyComponent /&gt;
    &lt;/div&gt;
  );
}

export default App;</code></pre></div>
</div>




  <h3>Creación de un componente en un fichero externo</h3>

<div class="row">
  <div class="col-md-6">
  <pre><span class="bold">src/App.js</span><code>import Saludo from './components/saludador'

const App = _ => (
  <span class="red bold">&lt;Saludo /&gt;</span>
);

export default App;</code></pre>
  </div>
  <div class="col-md-6">  <pre><span class="bold">src/components/saludador.js</span><code>import React from 'react'

const <span class="red bold">Saludo</span> = _ => (
  &lt;div&gt;hola&lt;/div&gt;
);

export default <span class="red bold">Saludo</span>;</code></pre></div>
</div>

  

   <h3>Ejercicios Componentes</h3>
   <ol>

   
<li><h4>Euros a dólares</h4>

<div class="row">
  <div class="col-md-8"><p>Vamos a hacer un conversor de euros a dólares. Supondremos que un euro son dos dólares. El usuario introducirá un valor en euros y se mostrará el correspondiente valor en dólares.</p>

  <p>Definir un componente App que contendrá un único componente llamado Form. Este componente recogerá los euros introducidos, procesará la respuesta y la mostrará por pantalla.</p>

</div>
  <div class="col-md-4"><div class="centraditos">

  <?= getRes('ejemplo','ex/components/dolares/dist/index.html', 'Ver ejercicio resuelto dólares') ?>

  <?= getRes('recurso','zip/components/euros-a-dolares.zip', 'Descargar ejercicio resuelto dólares') ?>

  <?= getRes("video_premium", 411433699) ?>
</div></div>
</div>


</li>

     <li><h4>Grados centígrados</h4>

<div class="row">
  <div class="col-md-8">
  <p>Definir un componente App que contendrá un único componente llamado Form. Este componente recogerá los grados centígrados introducidos, procesará la respuesta y la mostrará por pantalla.</p>
<p>Para ello deberé multiplicar por 9/5 y sumar 32. Como todo el mundo sabe, 20 grados centígrados son 68 grados Farenheit.</p>
  </div>
  <div class="col-md-4">
  <div class="centraditos">

  <?= getRes('ejemplo','ex/components/grados/dist/index.html', 'Ver ejemplo grados') ?>

<?= getRes('recurso','zip/components/grados.zip', 'Descargar ejercicio resuelto grados') ?>

<?= getRes("video_premium", 411440282 ) ?>
</div>
  </div>
</div>

  

</li>

<li>
<h4>Calcular la superficie de un rectángulo</h4>

<div class="row">
  <div class="col-md-8"><p>Tendremos un formulario que recogerá el ancho y el alto de un rectángulo y calculará su superficie.</p>
  <p>Definir un componente App que contendrá un único componente llamado Form. Este componente recogerá los el alto y el ancho, procesará la respuesta y la mostrará por pantalla.</p>
</div>
  <div class="col-md-4"><div class="centraditos">

  <?= getRes('ejemplo','ex/components/rectangulo/dist/index.html', 'Ver ejercicio resuelto superficie rectángulo') ?>

<?= getRes('recurso','zip/components/superficie-rectangulo.zip', 'Descargar recurso') ?>

<?= getRes("video_premium", 411453234) ?>
</div></div>
</div>


</li>
   </ol>
    </div></article><article><div><h2 id="props">Props</h2>
    <p>Sintácticamente una prop es similar a los atributos de HTML.</p>

    <div class="row">
      <div class="col-md-6">  <pre><code>const App = _ =&gt; (
  &lt;Hello title=&quot;hola pepito&quot;/&gt;
);</code></pre></div>
      <div class="col-md-6"><pre><code>const Hello = (props) =&gt; {
  return &lt;h2&gt;{props.title}&lt;/h2&gt;
};</code></pre></div>
    </div>


<h3>children</h3>

<div class="row">
  <div class="col-sm-6">
 <pre><code>import React from 'react';
import Box from './components/box';

const App = _ =&gt; (
  &lt;div&gt;
    &lt;Box&gt;Texto 1&lt;/Box&gt;
    &lt;Box&gt;Texto 2&lt;/Box&gt;
  &lt;/div&gt;
);

export default App;</code></pre>

</div>

<div class="col-sm-6">
  <pre><code>import React from 'react';

const Box = (props) =&gt; (
  &lt;div&gt;
    {props.children}
  &lt;/div&gt;
);

export default Box;</code></pre>
</div>

</div>
<div class="row">
  <?= getRes('recurso','zip/children.zip', 'Descargar ejemplo children') ?>
<?= getRes('ejemplo','ex/children/index.html', 'Ver ejemplo children') ?>
</div>



<h3>Destructuring del props</h3>
  <pre><code>const App = _ =&gt;(
  &lt;Prueba prop1={3} prop2={4} /&gt;
);

const Prueba = ({prop1, prop2}) =&gt;(
  &lt;div&gt;
    <span class="font-weight-bold">{/* gracias al destructuring no tengo que usar this.props.prop1 para imprimir la propiedad prop1  */}</span>  
    &lt;p&gt;{prop1}&lt;/p&gt;
    &lt;p&gt;{prop2}&lt;/p&gt;
  &lt;/div&gt;
);</code></pre>
<p>Las props son constantes, y por tanto, no debemos modificarlas.</p>


<h3>Ejercicios props</h3>
<ol>
  <li>  <p>Ejercicio - props</p>

<div class="row">
  <div class="col-lg-8">  <p>Crear un componente llamado <span class="i">Post</span> que debe imprimir el valor de las props <span class="i">postTile</span>, <span class="i">author</span>, y contenido (<span class="i">children</span>).</p>
<pre><code>const App = _ =&gt; (
    &lt;div className=&quot;App&quot;&gt;
        &lt;Post postTitle=&quot;Viaje a la luna&quot; author=&quot;Julio Verne&quot;&gt;Texto 1&lt;/Post&gt;
        &lt;Post postTitle=&quot;Viaje a Marte&quot; author=&quot;Pablo Mon&quot;&gt;Texto 2&lt;/Post&gt;
    &lt;/div&gt;
);</code></pre></div>
  <div class="col-lg-4"><div class="centraditos">
  <?= getRes('ejemplo','ex/props/Post/dist/index.html', 'Ver ejercicio resulto props') ?>

  <?= getRes('recurso','ex/props/Post/Post.zip', 'Descargar ejercicio resuelto props') ?>

  <?= getRes("video_premium", 411808113) ?>
</div></div>
</div>



</li>
  <li><p>Ahora modificaremos los ejercicios que vimos en las secciones anteriores. Vamos a modificar el componente Form para que solamente reciba el valor y pinte la respuesta. Para ello, le pasaremos el valor mediante <span class="i">props</span>. Toda la lógica estará en el componente App.</p>

  <ul>

  <li><div class="row">
  <div class="col-md-4">  
  Convertir euros en dólares.</div>
  <div class="col-md-8">  
    
  <div class="centraditos">

  <?= getRes('ejemplo','ex/props/dolares/dist/index.html', 'Ver ejercicio dólares') ?>
  <?= getRes('recurso','ex/props/dolares/dolares.zip', 'Descargar ejercicio dolares') ?>

  <?= getRes("video_premium", 411821458) ?>

</div>

  </div></div>
</li>

  <li>
    
  <div class="row">
    <div class="col-md-4">Calcular grados Fahrenheit.</div>
    <div class="col-md-8">
    <div class="centraditos">

    <?= getRes('ejemplo','ex/props/grados/dist/index.html', 'Ver ejercicio grados') ?>


    <?= getRes('recurso','ex/props/grados/grados.zip', 'Descargar ejercicio grados') ?>
    
    <?= getRes("video_premium", 411830835) ?>
    </div>
  </div>
  </div>
  </li>
 


  <li><div class="row">
    <div class="col-md-4">Calcular la superficie de un rectángulo.</div>
    <div class="col-md-8">
      
    <div class="centraditos">
    <?= getRes('ejemplo','ex/props/rectangulo/dist/index.html', 'Ver ejercicio rectángulo') ?>
    <?= getRes('recurso','ex/props/rectangulo/rectangulo.zip', 'Descargar ejercicio rectangulo') ?>
    
    <?= getRes("video_premium", 411836322) ?>
    </div>
</div>
  </div>    </li>
</ul>

</li>
<li>Ejercicio coste hotel. <br>

<div class="row">
  <div class="col-lg-8">
  
  
  <p> Haremos una aplicación para calcular el coste de un viaje. Para ello desarrollaremos un componente App que tomarará del usuario el número de noches.</p> 
  <p>Para obtener el número de noches del usuario no usaremos <span class="font-italic">useRef</span>. Lo recogeremos utilizando <span class="font-italic">useState</span>, actualizando el estado a medida que escribimos:</p>

  <pre><code>&lt;input type=&quot;text&quot; onChange={ obj =&gt; setNoches(obj.target.value) } /&gt;</code></pre>
  
  <p>Luego le pasaremos este valor como prop a dos componentes:</p>
<ul>
  <li>Componente CosteHotel: múltiplica el número de noches por los 140 euros que cuesta cada noche.</li>
  <li>Componente CosteAlquiler: 
<ul>
  <li>Cada día de alquiler cuesta 40 €.</li>
  <li>Si alquilas un coche por 3 días o más, obtienes un descuento de 20€ sobre el total.</li>
  <li>Si alquilas un coche por 7 días o más, obtienes un descuento de 50€ sobre el total (no acumulable con los 20€ de haber alquilado por más de 3 días).</li>
</ul>
  </li>
</ul></div>
  <div class="col-lg-4">
  <div class="centraditos">
  <?= getRes('ejemplo','ex/props/coste-hotel/dist/index.html', 'Ver ejercicio coste hotel ') ?>

  <?= getRes('recurso','ex/props/coste-hotel/coste-hotel.zip', 'Descargar ejemplo') ?>

  <?= getRes("video_premium", 412085914) ?>
</div>
  </div>
</div>


</li>
</ol> 
  <h3>Default props</h3>
  <p>En caso de que la prop no reciba ningún valor, el default prop será su valor por defecto</p>
<pre><code>const Prueba = (props) =&gt; (
  &lt;div&gt;{props.title}&lt;/div&gt; 
);

Prueba.defaultProps = {
  title: 'Amor'
}

const App = _ =&gt; (
  &lt;Prueba /&gt;
);</code></pre>
   <h3>Prop Types</h3>
  <p>Nos permiten filtrar el tipo de dato que va a almacenar cierta prop. Este tipo de avisos debe estar deshabilitado en producción, son sólo para desarrollo.</p>
  
  <div class="row">
    <div class="col-md-6"><pre><code>npm i prop-types</code></pre></div>
    <div class="col-md-6">  <pre><code>const Items = (props) =&gt; (
  &lt;h1&gt;Quantity: {props.quantity}&lt;/h1&gt;
);</code></pre></div>
  </div>
  
  <h3>Interpretar el HTML de una prop</h3>
<pre><code>const App = _ =&gt;(
  &lt;Prueba rawHtml={&quot;&lt;strong&gt;hola&lt;/strong&gt;&quot;} /&gt;
);

const Prueba = ({rawHtml}) =&gt; (
  &lt;div dangerouslySetInnerHTML={{__html: rawHtml}}/&gt;
  <span class="font-weight-bold">{/*El siguiente código no funcionaría*/}</span>
  &lt;div&gt;{rawHtml}&lt;/div&gt;
);</code></pre>
<h3>Pasar una prop del hijo al padre</h3>

<div class="row">
<div class="col-lg-6">

<pre><span class="bold">app.js</span><code>const App = _ =&gt; {

const changePadre = param =&gt; {
  alert(param);
}

return (
  &lt;div className=&quot;App&quot;&gt;
    &lt;MiComponente onSomeEvent={changePadre} /&gt;
  &lt;/div&gt;
);
}

export default App;</code></pre>

</div>

<div class="col-lg-6">

<pre><span class="bold">miComponente.js</span><code>import React from 'react';
export default ({onSomeEvent}) =&gt; {

    return (
        &lt;button onClick={() =&gt; onSomeEvent(3)}&gt;Pulame&lt;/button&gt;
    )
}</code></pre>

</div>

</div>

<?= getRes('recurso','./zip/props-del-hijo-al-padre.zip', 'Descargar recurso') ?>
  </div></article><article><div><h2 id="renderizado-condicional">Renderizado condicional</h2>
<p>No es posible poner un if en JSX. En su lugar, tenemos las siguientes opciones:</p>
<h4>Con estados. Si el estado o la propiedad existe, lo muestro, si no no hago nada</h4>

<div class="row">
  <div class="col-sm-6">

  <pre><code>return (
  &lt;div&gt;
    {truco.reps &amp;&amp; (
        &lt;div&gt;{truco.reps}&lt;/div&gt;
    )}
  &lt;/div&gt;
);</code></pre>
  </div>

  <div class="col-sm-6">

  <pre><code>return (
  alumnos &amp;&amp; (
    &lt;div&gt;Hola&lt;/div&gt;
  )
)</code></pre>
  </div>

</div>

<h4>Con estados II. Si el estado o la propiedad existe, lo muestro, si no, hago otra cosa</h4>
<pre><code>return (
  &lt;div&gt;
    {truco.reps
      ? &lt;div&gt;{truco.reps}&lt;/div&gt;
      : &lt;div&gt;No reps specified&lt;/div&gt;
    }
  &lt;/div&gt;
);</code></pre>
  <h3>Ejercicios renderizado condicional</h3>
<ol>
  <li>
    <div class="row">
      <div class="col-md-8"> <p> Haremos una aplicación para calcular el coste de un viaje. Para ello desarrollaremos un componente que recibirá como <span class="i">prop</span> el número de noches y un número que determinará si el componente va a calcular el coste del hotel o el coste del viaje:</p>
<pre><code>&lt;ComponenteMultiple opcion=&quot;1&quot; noches={nochesState}/&gt;
&lt;ComponenteMultiple opcion=&quot;2&quot; noches={nochesState}/&gt;</code></pre>
<ul>
  <li>Opción 1 ( Coste Hotel): múltiplica el número de noches por los 140 euros que cuesta cada noche.</li>
  <li>Opción 2 ( Coste Alquiler): 
<ul>
  <li>Cada día de alquiler cuesta 40 €.</li>
  <li>Si alquilas un coche por 3 días o más, obtienes un descuento de 20€ sobre el total.</li>
  <li>Si alquilas un coche por 7 días o más, obtienes un descuento de 50€ sobre el total (no acumulable con los 20€ de haber alquilado por más de 3 días).</li>
</ul>
  </li>
</ul>

<p>Para hacer este ejercicio, ComponenteMultiple tendrá definidas en su interior dos funciones: <span class="font-italic">calculaCosteHotel</span> y <span class="font-italic">calculaAlquilerCoche</span></p>

</div>
      <div class="col-md-4"><div class="centraditos">
      <?= getRes('ejemplo','ex/renderizado-condicional/coste-hotel/dist/index.html', 'Ver ejercicio coste hotel con renderizado condicional') ?>

  <?= getRes('recurso','ex/renderizado-condicional/coste-hotel/coste-hotel.zip', 'Descargar ejercicio coste hotel con renderizado condicional') ?>

<?= getRes("video_premium", 412098643) ?>
</div></div>
    </div>
  
  
 

</li>
    <li>
    <div class="row">
      <div class="col-md-8">    <p>Vamos a juntar los siguientes tres proyectos en uno solo: </p>
<ul>
<li>Convertir euros en dólares ( dólares = euros * 2)</li>

<li>Calcular grados Fahrenheit (grados fahrenheit =  9/5 + 32 de los centígrados)</li>
  <li>Calcular la superficie de un rectángulo (largo * ancho)</li>
</ul>
<p>Pintaremos tres veces un único componente en pantalla que mostrará en función de una prop el resultado correcto.</p>
<pre><code>&lt;ComponenteMultiple opcion=&quot;1&quot; datos1={datosState1} /&gt;
&lt;ComponenteMultiple opcion=&quot;2&quot; datos1={datosState1} /&gt;
&lt;ComponenteMultiple opcion=&quot;3&quot; datos1={datosState1} datos2={datosState2} /&gt;</code></pre>
  
  <p>Para hacer este ejercicio, ComponenteMultiple tendrá definidas en su interior tres funciones: <span class="font-italic">calculaDolares</span>, <span class="font-italic">calculaGrados</span> y <span class="font-italic">calculaSuperficie</span>.</p>
  </div>
      <div class="col-md-4"><div class="centraditos">
      <?= getRes('ejemplo','ex/renderizado-condicional/dolares-grados-superficie/dist/index.html', 'Ver ejercicio renderizado condicional') ?>
      <?= getRes('recurso','ex/renderizado-condicional/dolares-grados-superficie/dolares-grados-superficie.zip', 'Descargar ejercicio renderizado condicional') ?>

<?= getRes("video_premium", 412461438) ?>
</div>
</div>
    </div>
    

</li>

  </div></article>
  

  <article>
  <div>
  <h2>Cargar una imagen</h2>
  <p>(o un video, un sonido, etc...)</p>
<pre><code>import myImg from 'ruta/fondo.svg';	
&lt;img src={myImg} /&gt;</code></pre>
  
    	<p>Si quisieramos cargar la imagen a partir de un listado de objeto (tipo json), deberemos usar un ficheros js en el que importaremos las imágenes:</p>

      <pre><code>import img1 from './assets/img/img1.jpg';
import img2 from './assets/img/img2.jpg';

export default [
  {
    "title" : "title 1",
    "img": img1
  },
  {
    "title" : "title 2",
    "img": img2
  }
]</code></pre>


</div>
  </article>
  
  <article><div><h2 id="style">Style</h2>
	<pre><code>const App = _ =&gt; &lt;div style={{color:&quot;red&quot;, fontSize:&quot;72px&quot;}}&gt;Big Red&lt;/div&gt;;
</code></pre>	
<h3>Es posible utilizar objetos para definir estilos</h3>
<pre><code>import React from 'react';

const styles ={color: &quot;purple&quot;, fontSize: &quot;40px&quot;, border:&quot;2px solid purple&quot;}

const App = _ =&gt; &lt;div style={styles}&gt;Style Me!&lt;/div&gt;;

export default App;
</code></pre>
</div></article>



<article><div><h2 id="styled-components">Styled Components</h2>
<pre><code>npm i styled-components</code></pre>
<p>Usaremos el siguiente plugin de visual studio code: <span class="bold">vscode-styled-components
</span> from Julien Poissonnier.</p>

<div class="row">


<div class="col-sm-6">
<pre><code class="javascript">import styled from 'styled-components';

export const Cuadrado = styled.div`
  width: 70px;
  height: 70px;
  background-color: pink;
`;</code></pre>

</div>


<div class="col-sm-6">

<pre><code>import { Cuadrado } from './styled';
...
&lt;Cuadrado /&gt;</code></pre>

</div>


</div>

<div class="row">
  <div class="col-md-4">
  <h3>Hacer hover</h3>
<pre><code class="javascript">export const Panel = styled.div`
  background-color: salmon;
  &:hover {
	  background-color: paleGreen
  }
`;</code></pre>
  </div>
  <div class="col-md-8">
  <h3>Cargar atributos</h3>
  
<pre><code>export const Input = styled.input.attrs(props => ({
    type: "password",
    maxLength: props.myMaxLength || 5,
    }))`
  color: blue;
`;</code></pre>

<pre><code>&lt;Input myMaxLength={2}/&gt;</code></pre>
  </div>
  </div>

  <h3>Heredar de otro componente</h3>
<pre><code>export const Rectangulo = styled(Cuadrado)`
  width: 200px;
`;</code></pre>

  
<div class="row">
  <div class="col-md-12">
  <h3>Incrustar código</h3>
<pre><code class="javascript">// El código de CabeceraComun debe estar definido antes de ser usado

import styled, { css } from 'styled-components';

const BigText = css`
	font-size: 3rem;
`;

export const RedText = styled.p`
	background: red;
	${BigText};
`;

export const BlueText = styled.p`
	background: blue;
	${BigText}
`;</code></pre>
  </div>
  <div class="col-md-12">
  <h3>Para hacer media queries</h3>
<pre><code>const desktopStartWidth = 996;

const desktop = `@media (min-width: ${desktopStartWidth}px)`;
const mobile = `@media (max-width: ${desktopStartWidth}px)`;

const Cuadrado = styled.div`
	...
	${mobile} {
		width:100%;
	}
`;</code></pre>
  </div>
</div>




<h3>Para maquetar el body</h3>

<div class="row">
<div class="col-md-7">

<pre><code class="javascript">import styled, { createGlobalStyle } from 'styled-components';

export const GlobalStyle = createGlobalStyle`
	body {
		background-color: salmon;
	}
`;</code></pre>
</div>

<div class="col-md-5">
<pre><span class="bold">./src/App.js</span><code>import { GlobalStyle } from '../../comunes';

export default _ =&gt; (
    &lt;div&gt;
      &lt;GlobalStyle /&gt; 
    &lt;/div&gt;
);</code></pre>
</div>

</div>
</div></article>


<article><div><h2 id="cambiar-el-favicon">Cambiar el favicon</h2>
<pre><span class="bold">webpack.config.js</span><code>const HtmlWebpackPluginConfig = new HtmlWebpackPlugin({
  ...
  favicon: './src/rocky.png',
});</code></pre>
	</div></article><article><div><h2 id="valores-por-defecto">Valores por defecto</h2>
	<h3 id="valor-por-defecto-combo">Valor por defecto de una combo</h3>
<pre><code>&lt;select value={value.level}&gt;</code></pre>
<h3>Valor por defecto de un checkbox</h3>
<pre><code>&lt;input type=&quot;checkbox&quot; defaultChecked={true}/&gt;</code></pre>
<p>La propiedad <span class="bold">defaultChecked</span> sólo funciona en el render inicial. Si  queremos cambiar el valor inicial de la checkbox (por ejemplo, porque hemos hecho una petición al servidor con <span class="bold">useEffect</span>, usaremos <span class="bold">checked</span> en lugar de <span class="bold">defaultChecked</span>).</p>

     </div></article>
     
     
     
     
     <article><div><h2 id="react-router">React router</h2>
<p>Nos permite cargar unos componentes u otros en función de la url.</p>
<pre><code>npm i react-router
npm i react-router-dom</code></pre>

<p><a href="https://reacttraining.com/react-router/core/guides/philosophy" target="_blank">
Documentación de react-router</a></p>
<h4>Configuración básica</h4>
<pre><span class="bold">src/App.js</span><code>import React from 'react';
import Routes from './application/routes';

const App = () => <span class="red bold">&lt;Routes /&gt;</span>;;

export default App;
</code></pre>
<pre><span class="bold">src/application/routes.js</span><code>import React from 'react';
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import Home from '../pages/home';
import Contacto from '../pages/contacto';
import Producto from '../pages/producto';

const <span class="red bold">Routes</span> = () =&gt; (
    &lt;BrowserRouter&gt;
        &lt;Switch&gt;
            <span class="green">{ /*El atributo exact significa que ese nodo no afecta a sus descendientes.
             Si no lo ponemos, al escribir /login, accederíamos igualmente a Home */}    </span>
            &lt;Route exact path=&quot;/&quot; component={Home} /&gt;
            &lt;Route path=&quot;/contacto&quot; component={Contacto} /&gt;
            &lt;Route path=&quot;/producto/:id&quot; component={Producto} /&gt;
             { /* Es muy recomendable añadir esta ruta para obtener un mensaje de error en el caso de que la 
            ruta no exista. De lo contrario, si la ruta no existe llegaremos a una página en blanco */}    
            &lt;Route path=&quot;*&quot; component={() =&gt; &lt;div&gt;404&lt;/div&gt; } /&gt;
        &lt;/Switch&gt;
    &lt;/BrowserRouter&gt;
);

export default Routes;
</code></pre>

<div class="row">
  <div class="col-md-10">
  <pre><span class="bold">src/pages/home/home.js</span><code>import React from 'react';
import { Link } from 'react-router-dom';

const Home = _ =&gt; 
    &lt;ul&gt;
        &lt;li&gt;&lt;Link to={`/`}&gt;Inicio&lt;/Link&gt;&lt;/li&gt;
        &lt;li&gt;&lt;Link to={`/contacto`}&gt;Contacto&lt;/Link&gt;&lt;/li&gt;
        &lt;li&gt;&lt;Link to={`/producto/1`}&gt;Producto 1&lt;/Link&gt;&lt;/li&gt;
        &lt;li&gt;&lt;Link to={`/ajksdfkjhasdk`}&gt;Error en la url&lt;/Link&gt;&lt;/li&gt;
    &lt;/ul&gt;

export default Home;</code></pre>
  </div>
  <div class="col-md-2"><?= getRes('recurso','zip/router-app.zip', 'Descargar ejemplo router app') ?></div>
</div>



<p>Cuando hagamos un build del proyecto las rutas definidas en el fichero <span class="bold">routes.js</span>, no funcionarán si el proyecto está en una subcarpeta del servidor. Podemos salvar este problema añadiendo el siguiente atributo a la etiqueta <span class="bold">&lt;BrowserRouter /&gt;</span> del fichero <span class="bold">routes.js</span></span></p>
<pre><code>&lt;BrowserRouter basename={'/ruta-en-la-que-esta-el-proyecto-y-que-no-debe-terminar-en-barra'} &gt;</code></pre>

<p>Cómo en nuestro <span class="font-weight-bold">package.json</span> hemos definido la ruta del proyecto, podemos importarla de ahí en lugar de volver a definirla:</p>
<pre><code>&lt;BrowserRouter basename={process.env.PUBLIC_PATH}&gt;</code></pre>
<h4>Recoger un parámetro enviado con React Router</h4>

<div class="row">

<div class="col-md-6">

<pre><span class="bold">src/application/routes.js</span><code>&lt;Route path=&quot;/producto/<span class="red bold">:id</span>&quot; component={Producto} /&gt;</code></pre>
</div>

<div class="col-md-6">
<pre><span class="bold">Producto</span><code>useEffect(() => {
  const id = props.match.params.id;
}, [])</code></pre>

</div>
</div>

<h4>Redirección desde React</h4>
<p>Definimos el método que ejecutará la redirección:</p>
<pre><code>const Contacto = (<span class="red bold">{</span> history <span class="red bold">}</span>) =&gt; {
    const pulsado = _ =&gt; {
        history.replace('/');
    }

    return(  
            &lt;button onClick={pulsado}&gt;Pulsame&lt;/button&gt;
    )
}</code></pre>

  </div></article><article><div><h2 id="fetch-api">Fetch API (axios)</h2>
<p>Cuando queremos recuperar datos de un servidor, debemos usar el método <span class="i">useEffect</span> para ejecutar la petición al servidor sólo cuando el componente se monta. De lo contrario, lo que ocurriría es:</p>
<ol>
  <li>Al renderizar el componente <span class="i">App</span> se haría la petición al servidor.</li>
  <li>Cuando la información llega del servidor, cambiaría el estado de la variable <span class="i">name</span></li>
  <li>Al cambiar el estado de la variable, se generaría otro render.</li>
  <li>Al ejecutarse otro render, volveríamos al paso 1, y así seguiríamos indefinidamente.</li>
</ol>
<h3>Ejemplo básico, usando then</h3>
  <pre><span class="bold">./app.js</span><code>import React, {useEffect} from 'react';

const App = () =&gt; {
  const [name, setName] = useState(null);

  useEffect(() =&gt; {
    fetch('https://swapi.co/api/people/1') // hacemos la petici&oacute;n get
    .then(res =&gt; res.json()) // cuando hayamos terminado (then) parseamos a json la respuesta de la petici&oacute;n
    .then(res =&gt; setName(res.name)); // cuando hayamos terminado (then) actualizamos el estado nombre
  }, []); <span class="red">//Debemos usar los [] para que la petición sólo se ejecute cuando el componente se monte. De lo contrario se ejecutaría en cada render. Si ponemos una variable de estado dentro de los [], la petición se ejecutárá cada vez que esa variable cambie.</span>
  return &lt;p&gt;{name}&lt;/p&gt;;
}</code></pre>
  <h3>Axios</h3>
<pre><code>import React, {useState, useEffect} from 'react';
import axios from 'axios';

const App =() => {
  const [users, setUsers ] = useState([]);

  useEffect(() => {
    axios.get(`https://pablomonteserin.com/cosas.php?p=list`)
    .then(res => {
      setUsers(res.data);
    })
  }, [])
  ...</code></pre>
    </div></article><article><div><h2 id="recoger-parametros-url">Recoger parámetros de la url</h2>
<pre><code>import React, {useState, useEffect} from 'react'
import queryString from 'query-string';

export default ({location}) => {
  useEffect(() => {
    const { id } = queryString.parse(location.search);
  }, [])</code></pre>
  </div></article><article><div><h2 id="context-api">Context API</h2>


<p>Nuestro objeto Provider se encargará de hacer visible el objeto que le pasemos para todos los componentes anidados en él.</p>

  <p>El valor que recibe el provider, es único. Por eso, si queremos almacenar varios valores, lo que haremos será usar un objeto con múltiples propiedades.</p>

  <div class="row">

  <div class="col-lg-6">

  <pre><span class="bold">./app.js</span><code>import React from 'react';
import MyProvider from './application/provider';
import ShowState from './pages/showstate';
import LogIn from './pages/login';

const App = _ => {
  return (
    &lt;MyProvider&gt;
      &lt;LogIn /&gt;
      &lt;ShowState /&gt;
    &lt;/MyProvider&gt;
  );
}

export default App;</code></pre>
  </div>

  <div class="col-lg-6">
  <pre><span class="bold">./src/application/provider.js</span><code>import React,{createContext,useState} from 'react';

const MyProvider =(props)=&gt;{
    const [state,setState] = useState({});
    return (
        &lt;div&gt;
            &lt;AppContext.Provider value={[state,setState]}&gt;
                {props.children}
            &lt;/AppContext.Provider&gt;  
        &lt;/div&gt;
        );
    }

export default MyProvider;
export const AppContext = createContext();</code></pre>
  </div>
  </div>


  
  <div class="row">

  <div class="col-lg-6">
  <pre><span class="bold">./src/pages/login.js</span><code>import React,{useRef,useContext} from 'react';
import {AppContext} from '../../application/provider';

const LogIn=()=&gt;{
    let nom = useRef(null);

    const [state,setState] = useContext(AppContext);

    return( &lt;input type=&quot;text&quot; ref = {nom} 
            onChange={ () =&gt; {setState({name:nom.current.value})}} /&gt;
    );
}

export default LogIn;</code></pre>
  </div>

  <div class="col-lg-6">
    
<pre><span class="bold">./src/pages/showstate.js</span><code>import React, { useContext } from 'react';
import { AppContext } from '../../application/provider';

const ShowState = () =&gt; {
  const [state, setState] = useContext(AppContext);
  return ( &lt;p&gt;{state.name}&lt;/p&gt; );
}

export default ShowState;</code></pre>
  </div>
  </div>


<?= getRes('recurso','./zip/context-api.zip', 'Descargar ejercicio resuelto') ?>
</div></article><article><div><h2 id="redux">Redux</h2>
 <p>Permite definir estados globales.</p>
  <p>No tiene sentido usar <span class="i">Redux</span> y <span class="i">useState</span> para una misma variable. Si una variable es global a nivel de aplicación, no tiene sentido hacerla global a nivel de componente. Estaríamos guardando la aplicación dos veces.</p>
  <p>Necesitaremos instalar el siguiente módulo para poder usarlo:</p>
    <pre><code>npm i redux
npm i react-redux </code></pre>


<div class="row">
  <div class="col-md-6">

<h3>Diferencia entre Context API y Redux</h3>
<p>Redux es una librería totalmente externa a react.</p>
<ul>
<li>Reducers</li>
<li>Actions</li>
<li>Middlewares</li>
</ul>
<p>Context API</p>
<ul>
<li>Provider value={useRreducer()}</li>
<li>Consumer</li>
</ul>
<h3>Aplicación con Redux</h3>
  <p>El objeto en el que se guarda el <span class="i">state</span> global de la aplicación se llama <span class="i bold">store</span>.</p>
  <p>Estructura global:</p>
  <ul>
  	<li>src/App.js</li>
  	<li>src/components/
		<ul>
			<li>form/form.js</li>
			<li>palabra/palabra.js</li>
		</ul>
  	</li>
  	<li>src/store/
		<ul>
			<li>palabra
				<ul>
					<li>actions.js</li>
					<li>reducer.js <span class="gris">(modifican los estados de la aplicación)</span></li>
				</ul>
			</li>
			<li>index.js <span class="gris">(aquí se registran los reducers)</span></li>
		</ul>
  	</li>
  </ul>
  </div>
  <div class="col-md-6">
  <div class="centraditos">
  <?= getRes('recurso','zip/redux/con-redux.zip', 'Descargar ejercicio con redux') ?>
  <?= getRes('ejemplo','ex/redux/con-redux/index.html', 'Ver ejercicio con redux') ?>
</div>
<pre><span class="bold">./src/App.js</span><code>import React, { Component } from 'react';
import Form from './components/Form';
import PalabraAlmacenada from './components/palabra';

const App = _ =&gt;(
	&lt;div className=&quot;App&quot;&gt;
		&lt;Form/&gt;
		&lt;PalabraAlmacenada/&gt;
	&lt;/div&gt;
);

export default App;</code></pre>
  </div>
</div>



<h4>Los componentes</h4>
<p class="bold backred">Un componente que accede a un estado de <span class="i">Redux</span>, debe recibirlo como <span class="i blue">prop</span>. Si no lo hacemos, el código no dará error, pero tampoco funcionará.</p>
<pre><span class="bold">./src/components/form/form.js</span><code>import { <span class="backgreen cursor" id="modificaPalabraObj2" onclick="goto('#modificaPalabraObj')">modificaPalabra</span> } from '../../store/palabra/actions';
import {connect} from "react-redux";

const Form = ({ <span class="blue">modificaPalabra</span> }) =&gt; {
	const palabraRef = useRef(null);
	return (
		&lt;input ref={palabraRef} type=&quot;text&quot; placeholder=&quot;La palabra&quot;/&gt;
		&lt;button onClick={ () => {modificaPalabra(palabraRef.current.value);}} &gt;Add&lt;/button&gt;
	)
};

<span class="gris">/* - El método connect conecta <span class="pink">un componente (en este caso Form)</span> con la Store.
   - <span class="backblue">El primer parámetro (que en este caso vale <span class="i">null</span> porque no lo necesitamos)</span> es la función de este componente que recibiŕía el state de la store para pintarlo por pantalla.
   - <span class="backgreen">El segundo parámetro</span> es un objeto que contiene las acciones de redux que vamos a utilizar en el componente.
Tanto el <span class="i">state</span> al que nos hemos suscrito con el primer parámetro, como las acciones del segundo le llegarán al componente como <span class="blue">props</span>.*/</span>

export default connect(<span class="backblue">null</span>, { <span class="backgreen">modificaPalabra</span> })(<span class="pink">Form</span>)

<span class="gris">//Si fuesen varios métodos a los que nos quisieramos conectar, lo haríamos de esta forma:
//export default connect(<span class="backblue">null</span>, { <span class="backgreen">modificaPalabra, modificaOtraCosa</span> })(<span class="pink">Form</span>)</span></code></pre>

<p>El siguiente comoponente no modifica la store, por tanto, no tengo que vincularlo a un action.</p>
<pre><span class=" bold">./src/components/palabra/palabra.js</span><code>import React from 'react';
import {connect} from 'react-redux';
import { <span class="backGreen cursor" id="selectActiveWordObj2" onclick="goto('#selectActiveWordObj')">selectActiveWord</span> } from '../../store/palabra/reducer';

const PalabraAlmacenada = ({ palabra }) =&gt; (
	&lt;output&gt;{palabra}&lt;/output&gt;
);

/*
* Cada vez que se ejecuta una acción, se ejecutará también una llamada a todas las funciones mapStateToProps de mi aplicación
* Por tanto, usaremos esta función para recuperar la parte del esta que nos interesa.
* */
function mapStateToProps(state) {
    return {
        palabra: selectActiveWord(state)
    }
}

<span class="gris">/*La función connect, vincula el componente PalabraAlmacenada con la store.
Para ello, utilizamos la función mapStateToProps cuyo parámetro <span class="i">state</span> representa la store. 
En este caso no usamos acciones (el segundo parámetro).*/</span>

export default connect(mapStateToProps)(PalabraAlmacenada);</code></pre>
<h4>actions</h4>
<p>La modificación de los estados del store no se hace directamente. Para efectuarla, tendremos que definir y usar unas funciones llamadas <span class="i">actions</span>.</p>
<p>Estas funciones tienen una estructura específica. Deben devolver un objeto con las siguientes propiedades:</p>
<ul>
  <li><span class="bold">type</span>. Esta propiedad es obligatoria y su valor debe ser un string. Es la propiedad que usaremos en el reducer para determinar el cambio concreto a realizar en la <span class="i">store</span>.</li>
  <li><span class="bold">payload</span>. Esta propidad es opcional. Es un contenido asociado a la acción que vamos a realizar. Por ejemplo, si queremos dar una persona de alta, sería un objeto con las propiedades de esa persona.</li>
</ul>
<pre><span class="bold">./src/store/palabra/actions.js</span><code>// Las acciones siempre tienen la estructura { type, payload }
export const <span class="backgreen cursor" id="modificaPalabraObj" onclick="goto('#modificaPalabraObj2')">modificaPalabra</span> = (palabra) => {
    return {
        type: 'MODIFY_WORD',
        payload: palabra
    }
};</code></pre>
<h4>reducers</h4>
<p>Se encargan de materializar los actions. </p>
<p>Cuando lanzamos un action, se ejecutan todos los reducers, hasta encontrar aquel cuya condición coincide con el <span class="i">type</span> de la action que estamos ejecutando.</p>
<p>Incluso aunque ya se haya cumplido la igualdad del <span class="i">type</span>, seguirán ejecutándose todos los reducers hasta llegar al final.</p>
<pre><span class="bold">./src/store/palabra/reducer.js</span><code>const initialState = { palabra: "" };

// action es el valor devuelto por el action
//action.payload será el valor que quiero añadir, borrar, etc
export default (state = initialState, action) => {
    if (action.type === 'MODIFY_WORD') {
        return {
            ...state, //Lo que devuelve un reducer es lo que se quedará en el state, por tanto, debe devolver todo lo que había antes (además de la información que cambia)
            palabra: action.payload
        }
    }

    return state;
};

export const <span class="backGreen cursor" id="selectActiveWordObj" onclick="goto('#selectActiveWordObj2')">selectActiveWord</span> = state => state.palabraReducer.palabra;</code></pre>
<h4>store</h4>
<p>El store un objeto que contiene todo el arbol de estados de la aplicación. Un estado es una propiedad del store.</p>
<p>En el store se registran los <span class="i">reducers</span>, que como veremos más adelante serán los que modifiquen los estados.</p>
<pre><span class="bold">./src/store/index.js</span><code>import { createStore, combineReducers } from 'redux';
import palabraReducer from './palabra/reducer';

const reducers = combineReducers({
    palabraReducer
});

const store = createStore(
    reducers,
    window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__()
);

export default store;</code></pre>
<h4>Finalmente, para cargar React</h4>
<pre><span class="bold">./src/index.js</span><code>import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';

import { Provider } from 'react-redux';
import store from './store';

const Application = () =&gt; (
    &lt;Provider store={store}&gt;
        &lt;App /&gt;
    &lt;/Provider&gt;
);


ReactDOM.render(&lt;Application /&gt;, document.getElementById('root'));</code></pre>
	<h3>Ejercicios Redux</h3>
	<ol>
		<li>
    
    <div class="row">
      <div class="col-md-6">
      <p>Modificaremos los ejercicios que vimos en la sección de recogida de datos: </p>
<ul>
  <li>Calcular grados Fahrenheit</li>
  <li>Convertir euros en dólares</li>
  <li>Calcular la superficie de un rectángulo.</li>
</ul>
<p>Cada uno de estos ejercicios debe tener dos componentes. Uno en el que se introducirán los datos y otro en el que se pintarán los resultados. Utilizaremos <span class="i">redux</span> para compartir del valor a través de los diferentes componentes.</p>
<pre><code>const App = _ =&gt; (
    &lt;div className=&quot;App&quot;&gt;
        &lt;Form/&gt;
        &lt;PintarResultado/&gt;
    &lt;/div&gt;
);</code></pre>

      </div>
      <div class="col-md-6">
      <div class="centraditos">
  <?= getRes('recurso','zip/redux/grados-redux.zip', 'Descargar ejercicio grados') ?>
  <?= getRes('recurso','zip/redux/euros-a-dolares-redux.zip', 'Descargar ejercicio dólares') ?>
  <?= getRes('recurso','zip/redux/superficie-rectangulo-redux.zip', 'Descargar ejercicio rectángulo') ?></div>
<div class="centraditos">
  <?= getRes('ejemplo','ex/redux/grados-redux/index.html', 'Ver ejercicio grados') ?>
  <?= getRes('ejemplo','ex/redux/euros-a-dolares-redux/index.html', 'Ver ejercicio dólares') ?>
  <?= getRes('ejemplo','ex/redux/superficie-rectangulo-redux/index.html', 'Ver ejercicio dólares') ?>
</div>

      </div>
    </div>
    
</li>
	</ol>
  <h3>Ejercicio listado con Redux</h3>
  <p>Crear un componente que consulte un array con un listado de valores y los muestre por pantalla.</p>
  <p>Al pulsar sobre un elemento del listado, debemos almacenar su id con Redux y utilizarla para pintar el título de ese elemento recuperándolo con Redux desde otro componente.</p>
  
  <div class="row">
    <div class="col-md-6">
    <p>El componente del listado, quedaría de la siguiente forma:</p>
  <pre><code>import React from &quot;react&quot;;
import {connect} from &quot;react-redux&quot;;
import { setActiveElement } from '../../store/elementoActivo/actions';

const Listado = ({ setActiveElement }) =&gt; {
    const elementos = [
        {id: 1, name: 'elemento1'},
        {id: 2, name: 'elemento2'},
        {id: 3, name: 'elemento3'},
        {id: 4, name: 'elemento4'},
        {id: 5, name: 'elemento5'},
        {id: 6, name: 'elemento6'}
    ];

    return (
        &lt;ul&gt;
            { elementos.map(({ id, name }) =&gt; (
                &lt;li
                    onClick={() =&gt; setActiveElement(id)}
                    key={id}&gt;{name}
                &lt;/li&gt;
            ))}
        &lt;/ul&gt;
    );
};

export default connect(null, { setActiveElement })(Listado)</code></pre>
    </div>
    <div class="col-md-6">
    <div class="centraditos">
<?= getRes('recurso','zip/listado.zip', 'Descargar programa listado') ?>
<?= getRes('ejemplo','ex/listado/index.html', 'Ver ejercicio listado') ?>
</div>
    </div>
  </div>
  


  <h3>Ejercicio listado de componentes con Redux</h3>
  <p>El componente (Persona) debe recibir la <span class="i">prop</span> del evento que se ha producido.</p>
  
  <div class="row">
<div class="col-md-6">

<pre><span class="bold">Listado</span><code>{ elementos.map(({ id, name }) =&gt; (
  &lt;Persona
    onClick={() =&gt; setActiveElement(id)}
    key={id}
    nombre={name} /&gt;
  ))}</code></pre>
</div>
<div class="col-md-6">

<pre><span class="bold">Persona</span><code>const Persona = ({ nombre, onClick }) =&gt; {
    return (
        &lt;div onClick={onClick}&gt;{nombre}&lt;/div&gt;
    );
};</code></pre>
</div>

  </div>
 
<div class="row">
<?= getRes('recurso','zip/listado-personas.zip', 'Descargar recurso personas') ?>
<?= getRes('ejemplo','ex/listado-personas/index.html', 'Ver ejercicio listado personas') ?>
</div>
  </div></article><article><div><h2 id="react-developer-tool">React Developer Tool</h2>
  <p>Es un plugin que podemos añadir al navegador y que nos permitirá inspeccionar los componentes React de la página, ver sus prop, saber si una página está hecha con React, etc.</p>
  </div></article><article><div><h2 id="sockets">Sockets</h2>

<div class="row">
  <div class="col-md-6">
  <p>Funciona en ReactJS y React Native.</p>
<p><a href="https://socket.io/" target="_blank">Documentación</a></p>
<pre><code>npm i socket.io-client</code></pre>

  </div>
  <div class="col-md-6">
  <pre><code>import io from 'socket.io-client';
const socket = io('http://localhost:3000');
...

socket.emit('msgEnviado', {msg, id:1});</code></pre>
  </div>
</div>


    </div></article><article><div><h2 id="login">Login</h2>
    <p>Pasos:</p>
    <ol>
      <li>Tendremos una página con un componente <span class="i">Login</span> que recogerá el nombre y el usuario de un formulario y se los mandará al servidor.</li>
      <li>El servidor le enviará de vuelta un token generado con <span class="i">jwt</span> a partir de la <span class="i">id</span> de ese usuario.</li>
      <li>Guardaremos ese token globalmente usando redux.</li>
      <li>Tendremos una segunda página en la que veremos la id del usuario logueado sólo si este ha logrado loguearse con éxito.

      <div class="row">
        <div class="col-md-7">
        <pre><code>const ContenidoRestringido = ({ accessToken }) =&gt; { 
    const [userData, setUserData] = useState(null);

    useEffect(() =&gt; {
        getJson('/user-data', '', { headers: { accessToken } }).then(setUserData);
    },[]);

    return (
        &lt;div&gt;
            &lt;p&gt;Contenido reestringido&lt;/p&gt;
            {userData &amp;&amp; (
                &lt;div&gt;{userData.idRecuperadaDeLaBaseDeDatos}&lt;/div&gt;
            )}
        &lt;/div&gt;
    );
}

const mapStateToProps = state =&gt; {
    return{
        accessToken: selectToken(state),
    }
}

export default connect(mapStateToProps)(ContenidoRestringido);</code></pre>
        </div>
        <div class="col-md-5">
        <div class="centraditos">
<?= getRes('recurso','zip/validacion-varias-urls-con-context-api.zip', 'Descargar cliente con context API') ?>
    <?= getRes('recurso','zip/redux/validacion-varias-urls.zip', 'Descargar cliente con redux') ?>
        <?= getRes('recurso','zip/validacion-jwt-server.zip', 'Descargar servidor con nodejs') ?>
</div>
        </div>
      </div>

      </li>
    </ol>
    
</div></article><article><div><h2 id="build">Build</h2>
<pre><code>npm run build</code></pre>
<p>Esto crea en la carpeta <span class="i">build</span> un compilado de nuestra aplicación. Sin embargo, el <span class="i">index.html</span> de la aplicación generada utiliza rutas relativas y sólo funcionará si añadimos un punto al inicio de cada url. Para evitar esto en cada compilado, podemos añadir la siguiente línea al <span class="i">package.json</span>:</p>
<pre><code><span class="gris">{
  "name": "borrame",
  "version": "0.1.0",
  "private": true,</span>
  "homepage": "./",</code></pre>

  </div></article><article><div><h2 id="styleguidist">Styleguidist</h2>
  

	<p>Nos permite probar módulos de manera independiente.</p>

<div class="row">
  <div class="col-md-6">
  <pre><code>npm i -g cross-env</code></pre>
	<pre><code>npm install -g webpack
npm install -g react-styleguidist</code></pre>
  </div>
  <div class="col-md-6">
  <pre><span class="bold">package.json</span><code>{
	...
	"scripts": {
    	...
    	"start-styleguide": "styleguidist server",
	},
	...
}
</code></pre>
  </div>
</div>




<div class="row">
  <div class="col-md-6">
  <pre><span class="bold">./src/components/titanpad/README.md</span><code>Basic usage

```js
import Titanpad from './index';

&lt;Titanpad visible={true} cod=&quot;appsguays&quot; /&gt;    
```</code></pre>
  </div>
  <div class="col-md-6">
  <pre><span class="bold">./src/components/titanpad/index.js</span><code>import React, { useState, useEffect } from 'react';

export default ({ visible, cod }) =&gt; {
    return (
        &lt;div&gt;
			...
        &lt;/div&gt;
    )
}</code></pre>
  </div>
</div>




<p>Referenciamos todos los componentes que queremos evaluar.</p>
<pre><span class="bold">styleguide.config.js</span><code>const path = require('path');
const webpackConfig = require('./webpack.config.js');

module.exports = {
	webpackConfig,
	styleguideDir: 'docs',
	skipComponentsWithoutExample: true,
	theme: {
		maxWidth: 1400,
	},
	title: 'Termine Core',
	sections: [
		{
			name: 'Titanpad',
			components: 'src/components/titanpad/index.js',
		},
		{
			name: 'Paneles',
			components: 'src/components/paneles/index.js',
		},
	],
};</code></pre>
</div></article>


<article><div><h2 id="typescript">Typescript</h2>
<p><a href="https://www.typescriptlang.org/docs/home.html" target="_blank">Documentación oficial</a></p>
<pre><code>sudo create-react-app miproyectotypescript -typescript</code></pre>
<pre><span class="bold">Tipado básico</span><code>import React from 'react';
import logo from './logo.svg';
import './App.css';
import { number } from 'prop-types';

interface Author {
  id: number;
  name: string;
  age: number;
}

interface Book {
  id: number;
  title: string;
  price: number;
  author: Author;
}


const author : Author = {
  id:0,
  name: &quot;Pablo Monteser&iacute;n&quot;,
  age: 27
}

const books: Book[] = [
  {
    id:0,
    title: &quot;Monteser&iacute;n lo ha vuelto a hacer&quot;,
    price: 21,
    author: author
  },
  {
    id:1,
    title: &quot;Monteser&iacute;n se va a la monta&ntilde;a&quot;,
    price: 19,
    author: author
  }
]

interface NumberAndString {
  number: number;
  string: string;
}
const getNumberAndString = (number:number, string:string):NumberAndString =&gt; {

  const NumberAndString ={
    number: 3,
    string: &quot;monteserin&quot;
  }  

  return NumberAndString;
}
const App: React.FC = () =&gt; {
  const myNumberAndString = getNumberAndString(3, &quot;hola&quot;);


  return (
    
    &lt;div className=&quot;App&quot;&gt;
      {
        books.map(obj =&gt; &lt;p&gt;{obj.title}&lt;/p&gt;)
      }
      
       &lt;p&gt;{myNumberAndString.string}&lt;/p&gt;
      
    &lt;/div&gt;
  );
}

export default App;</code></pre>
</div></article><article><div><h2 id="npm">Empaquetar con NPM</h2>
<ol>
  <li>Creamos una carpeta en nuestro ordenador en la que añadiremos el código del módulo. Dentro de esta carpeta, crearemos la carpeta src, que es donde almacenaremos los ficheros fuente que vamos a compilar para que estos compilados sean accesibles a través de npm.</li>
  <li><pre><code>npm init</code></pre></li>
  <li>Creamos el fichero cuyas funciones queremos exportar <pre><span class="bold">./index.js</span><code>import Paneles from './components/paneles';

export {
    Paneles
};</code></pre></li>
  <li>Nos loqueamos con nuestra cuenta de npm: <pre><code>npm login</code></pre></li>
  <li><pre><code>npm run build
npm publish</code></pre>Tras ejecutar este comando aparecerá el paquete en nuestra cuenta de npm, en la sección <span class="bold">packages</span>. Cada vez que publiquemos, será necesario aumentar el número de versión.
    <pre><code>  "version": "1.0.0",</code></pre>
    <ul>
      <li>El primer número implica cambios que hacen mi API incompatible</li>
      <li>El segundo es para cambios que tienen compatibilidad hacia atrás</li>
      <li>El tercer número es para corrección de errores</li>
    </ul>
  </li>
 <li>Ya podemos instalar el módulo en otro proyecto: <pre><code>npm i modulo --save</code></pre></li>
 <h3>Cargar nuestro módulo en otro proyecto</h3>
<p>Si el proyecto donde vamos a cargar nuetro módulo ya tiene React (lo habitual), tendremos que tener el siguiente código en el <span class="bold">webpack.config.js</span> para evitar exportar React en el bundle.</p>
<pre><span class="bold">webpack.config.js</span><code>module.exports = {
  entry: path.join(paths.SRC, 'index.js'),
  output: {
    // ..
    /* La siguiente línea hace la traducción de ES6 a commonjs
    commonJS es lo que utilizabamos para importar un módulo (mediante require) antes de ES6 
    */
    libraryTarget: 'commonjs2',
  },
  //..
  /*
Si el proyecto que el que vamos a importar nuestro módulo
ya utiliza React, debemos excluir estas librerías de la exportación utilizando el siguiente código:
*/ 
if (!development) {
  // Don't bundle react or react-dom
  module.exports.externals = {
    react: 'react',
    'react-dom': 'react-dom',
  };
}</code></pre>
<p>Además hemos de especificar en el <span class="bold">package.json</span> que donde vayamos a importar nuestro módulo debe tener estas dependencias. Si no lo hacemos el módulo no funcionará en el caso de que fuese importado en un proyecto que no tuviese estas dependencias:</p>
<pre><code>"peerDependencies": {
  "react": "16.9.0",
  "react-dom": "16.9.0"
},</code></pre>
<h4>Empaquetar imágenes y otros recursos estáticos (wav, ttf, etc) en un módulo</h4>
<p>En general, en los módulos que crearemos para ser importados en otros proyectos no añadiremos recursos estáticos (imágenes, fuentes, sonidos, etc.). </p>

<p>Empaquetar estos recursos estáticos en el módulo supone los siguientes problemas:</p>

<ul>
  <li>La gestión correcta de la ruta del recurso, que difiere en cada proyecto en que va a ser importado el módulo (public_path) y que se complica bastante. Una solución sería cargar los recursos desde un servidor externo.</li>
  <li>La importacción o extracción de los estáticos del módulo externo en nuestro propio proyecto, que también complica la lógica del código.</li>
</ul>

<p>La mejor alternativa sería que pasar las rutas de los ficheros estáticos como prop desde el proyecto en el que ha sido importado el módulo.</p>

<h4>Cargar un módulo localmente (sin publicarlo en npm)</h4>
<p>Los pasos descritos anteriormente son comunes tanto para publicar en internet como para cargar un módulo directamente desde nuestro ordenador.</p>
<p>En el caso de que querramos cargar un módulo local:</p>
<ol>
<li>Tomamos nota del nombre que queremos importar. Este nombre, está en el package.json. <pre><code>{
  "name": "malabares-core",</code></pre></li>
<li>Ejecutamos el siguiente comando en la raíz del módulo que queremos importar<pre><code>npm link</code></pre></li>

<li>En el <span class="bold">webpack.config.js</span> del proyecto al que queremos hacer la importación, debemos tener el módulo <span class="bold">resolve</span> con el siguiente código:
<pre><code> resolve: {
  extensions: ['.js'],
  symlinks: true,
  alias: {
    react: path.resolve('./node_modules/react'),
    'react-dom': path.resolve('./node_modules/react-dom')
  },
},</code></pre></li>
<li>En la raíz de la aplicación en la que queremos importar nuestro módulo ejecutamos el siguiente comando: 
<pre><code>npm link malabares-core</code></pre>
</li>
</ol>
  </div></article>
  
  
</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>