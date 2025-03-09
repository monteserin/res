<?php 
$titulo_curso="node JS";
$meta_description = 'En este curso te enseño lo que he aprendido de NodeJS utilizándolo para programar la parte del servidor de multitud de aplicaciones';
$img_curso = 'curso-nodejs.svg';

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
  "name": "Curso de NodeJS",
  "description": "Curso de NodeJS para programar del lado del servidor utilizando Javascript. Nivel básico. Veremos como dar los primeros pasos programando con NodeJS.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Monteserín",
    "sameAs": ["https://pablomonteserin.com/","https://www.facebook.com/pablomonteserincom/","https://www.linkedin.com/in/%E2%99%A5-pablo-monteser%C3%ADn-59079728/","https://www.youtube.com/user/PabloMonteserinTutor","https://twitter.com/monteserin1982"]
  }
}
</script>

<section id="amor" class="verIndice">
				<article id="inicio_del_documento" class="indice">
<ol class="indice">
	<li><a href="#que_es">¿Qué es NodeJS?</a></li>
    <li><a href="#instalacion">Instalación de NodeJS</a></li>
    <li><a href="#hola-mundo">Hola Mundo</a></li>
    <li><a href="#package-json">package.json</a></li>
    <li><a href="#modulos">Módulos</a>
   <li><a href="#autorecargar-cambios">Módulo para actualizar los cambios</a></li>
    <li><a class="hasChildren" href="#">express</a>
        <ol>
                        <li><a href="#generacion-proyecto-express">Generación de un proyecto express</a></li>
                
</ol>

</ol>
</article>			
</section>
<main class="curso">
<?= drawH1WithImg() ?>

         <article><div><h2 id="que_es">¿Qué es NodeJS?</h2>
         
<div class="row">
  <div class="col-md-10"><p>El lenguaje de programación Javascript está cada vez más extendido. Aunque fundamentalmente se ocupa de las funcionalidades que tiene una página web del lado de lo que el usuario está viendo, con nodeJS podrás  programar con Javascript del lado del servidor. En este curso veremos como configurarlo, hacer consultas a la base de datos, comenzar proyectos desde cero, usar sockets...</p>
       <p>Node.js es una plataforma para el desarrollo de aplicaciones en entorno del servidor mediante programación Javascript.</p>
       <p>Presenta grandes ventajas en la implementación de aplicaciones que deben responder en tiempo real.</p>
       <p>Pretende disputar terreno a lenguajes de servidor como PHP, Java, C# etc.</p></div>
  <div class="col-md-2"><?= getRes('video_premium',220711099) ?></div>
</div>


        
   </div>
    </article><article><div><h2 id="instalacion">Instalación de NodeJS</h2>

<div class="row">
  <div class="col-md-10">    <ol>
       <li><strong>En Windows o Mac</strong>: <a href="https://nodejs.org/es/download" target="_blank">NodeJS</a>.</li>
       <li><strong>En linux</strong>: <pre><code>sudo apt-get install -y npm</code></pre></li>
   </ol></div>
  <div class="col-md-2"><div class="centraditos">
        <?= getRes('video_premium',220711094) ?>
        <?= getRes('video_premium',220711097) ?>
        </div></div>
</div>


</div>
        </article><article><div><h2 id="hola-mundo">Hola Mundo</h2>


        <div class="row">
          <div class="col-md-10">
        <pre><strong>hola-mundo.js</strong><code>console.log("hola Mundo")</code></pre>
        <p>Ejecutamos:</p>
        <pre><code>node hola-mundo.js</code></pre></div>
          <div class="col-md-2"><?= getRes('video_premium',220760450) ?></div>
        </div>
        </div>
        </article><article><div><h2>Crear un nuevo proyecto</h2>
<pre><code>npm init</code></pre></div>
  </article><article><div><h2 id="package-json">package.json</h3>
  
  <div class="row">
    <div class="col-md-10">    <pre><strong>package.json</strong><code>{
	"name": "proyecto", <span class="green">// Indicamos el nombre del proyecto</span>
	"version": "0.0.0", <span class="green">// Indicamos la versión del proyecto</span>
	"private": true,
	"scripts": {
		"start": "node ./bin/www" <span class="green">//Indicamos el archivo que se debe ejecutar para arrancar el proyecto</span>
	},
	"dependencies": { 
		"body-parser": "~1.13.2",
		"cookie-parser": "~1.3.5",
		"debug": "~2.2.0",
		"express": "~4.13.1",
		"hbs": "~3.1.0",
		"morgan": "~1.6.1",
		"serve-favicon": "~2.3.0"
	}
}  
</code></pre></div>
    <div class="col-md-2"><?= getRes('video_premium',221230713) ?></div>
  </div>
	

<p>Al ejecutar <strong>npm install</strong>, se busca el archivo 'package.json' y se procede a instalar todos los módulos especificados en la propiedad 'dependencies'.</p>
</div></article><article><div><h2 id="modulos">Módulos</h2>
	<h3 id="crearmodulos">Crear módulos</h3>
	<p>Un módulo es un fichero donde se crean grupos de funciones</p>
	<pre><strong>aritmetica.js</strong><code>var PI=3.14;
function dividir(x1,x2){
    if (x2==0){
        mostrarErrorDivision();
    }else{
        return x1/x2;
    }
}

function mostrarErrorDivision() {
    console.log('No se puede dividir por cero');
}
exports.dividir=dividir;
exports.PI=PI;</code></pre>
<pre><strong>main.js</strong><code>var mat=require('./aritmetica');

console.log('La división de 8/4='+mat.dividir(8,4));
console.log('El valor de PI='+mat.PI);</code></pre>
    <p>Para lanzarlo todo:</p>
    <pre><code>node main.js</code></pre>
    <p>Un módulo también puede ser una carpeta que contiene un conjunto de ficheros y subcarpetas.</p>
    <?= getRes('video_premium',220760532) ?>
    <h4 id="modulosnucleo">Módulos del núcleo de nodejs</h4>

    <div class="row">
      <div class="col-md-10"> <p>Algunos de los módulos del núcleo de Node.js son: os, fs, http, url, net, path, process, dns etc..</p>
    <pre><strong>prueba.js</strong><code>var os=require('os');
console.log('Sistema operativo:'+os.platform());
console.log('Versión del sistema operativo:'+os.release());
console.log('Memoria total:'+os.totalmem()+' bytes');
console.log('Memoria libre:'+os.freemem()+' bytes');</code></pre></div>
      <div class="col-md-2"> <?= getRes('video_premium',220760495) ?></div>
    </div>
       
   
        <h4>Módulo para administrar el sistema de archivos: fs</h4>
        <pre><code>var fs=require('fs');
<span class="green">//writeFile(donde_vamos_a_escribir, que_vamos_a_escribir, que_vamos_a_ejecutar_despues_de_escribir)</span>
fs.writeFile('./archivo.txt','aaaaaa\nbbbbbb',function(error){
if (error)
    console.log(error);
else
    console.log('El archivo fue creado');
});
console.log('Última línea del programa');</code></pre>
        <p>Como nodejs es asíncrono, veremos que antes de mostrarse el texto <strong>"El archivo fue creado"</strong> se muestra el texto <strong>"Última línea del programa"</strong>.</p>
    

    
        <h4 id="instalacionmodulo">Instalación de un módulo</h4>
        <pre><code>npm install socket.io</code></pre>
        <pre><span class="bold">forma abreviada:</span><code>npm i -S socket.io</code></pre>

    <pre><code>npm i --g socket.io</code></pre>
        <p>El parametro --g hace que el módulo se instale de forma global y esté disponible para todos los usuarios en todos los proyectos. No podremos ejecutar este comando si no somos root.</p>

        <p>Tras instalar un módulo, será recomendable reiniciar el servidor para que los cambios surtan efecto</p>

        <?= getRes('video_premium',221231007) ?></div>
</article><article><div><h2 id="autorecargar-cambios">Módulo para actualizar los cambios con express</h2>

<div class="row">
  <div class="col-md-10">    <pre><code>npm i nodemon</code></pre>
    <pre><strong>package.json</strong><code>"scripts":{
    <span class="green">// "start": "node ./bin/www"</span>
    "start": "nodemon ./bin/www"
}</code></pre>

</div>
  <div class="col-md-2"><?= getRes('video_premium',220760510) ?>
</div>
</div>

<h3>Para parar el servidor:</h3>
<pre><code>npm stop</code></pre>
<pre><span class="font-weight-bold">app.js</span><code>process.title = myApp;</code></pre>
<pre><span class="font-weight-bold">scripts.json</span><code>"scripts": {
    "start": "app.js",
    "stop": "pkill --signal SIGINT myApp" <span class="green">/*process title*/</span>
}</code></pre>


</div>
</article><article><div><h2 id="generacion-proyecto-express">Generación de un proyecto que utilice express</h2>
<p>Tenemos dos opciones:</p>
<ul>
    <li>Usar <span class="bold">express-generator</span>:
    <p>La siguiente herramienta genera una estructura de carpetas y ficheros adecuada para realizar desarrollos con el módulo express. Para instalarla:</p>
<pre><code>npm i express-generator --g</code></pre>
<p>Para usuarla:</p>
<pre><code>express proyecto --hbs <span class="green">//hbs indica el sistema de plantillas a utilizar</span></code></pre>
</li>
<li>Creando el proyecto con express manualmente (recomendado):</li>

<div class="row">
<div class="col-lg-6">
<pre><span class="bold">package.json</span><code>{
  "name": "server",
  "version": "1.0.0",
  "description": "",
  "main": "index.js",
  "scripts": {
    "local": "cross-env NODE_ENV=development webpack --config webpack.config.js --watch",
    "start-local": "nodemon --watch build --exec \"node build/bundle.js\"",
    "build": "cross-env NODE_ENV=production webpack --config webpack.config.js",
    "start": "node ./build/bundle.js",
    "upload-dinahosting": "npm run build && node ./bin/upload.js",
    "heroku": "npm run build && git add . && git commit -m 'subida' && git push heroku master"
  },
  "author": "Pablo Monteserín",
  "license": "ISC",
  "dependencies": {
    "@babel/runtime": "^7.5.5",
    "body-parser": "^1.19.0",
    "cors": "^2.8.5",
    "easy-ftp": "^0.4.1",
    "express": "^4.17.1",
    "jsonwebtoken": "^8.5.1",
    "mysql2": "^2.1.0",
    "sequelize": "^5.21.3",
    "socket.io": "^2.3.0"
  },
  "devDependencies": {
    "@babel/core": "^7.5.5",
    "@babel/plugin-proposal-class-properties": "^7.5.5",
    "@babel/plugin-proposal-decorators": "^7.7.4",
    "@babel/plugin-proposal-optional-chaining": "^7.2.0",
    "@babel/plugin-transform-runtime": "^7.5.5",
    "@babel/plugin-transform-spread": "^7.2.2",
    "@babel/preset-env": "^7.5.5",
    "@babel/runtime": "^7.5.5",
    "cross-env": "^5.2.0",
    "babel-cli": "^6.26.0",
    "babel-core": "^7.0.0-bridge.0",
    "babel-eslint": "^10.0.2",
    "babel-jest": "^24.8.0",
    "babel-loader": "^8.0.6",
    "nodemon": "^1.19.1",
    "terser-webpack-plugin": "^1.3.0",
    "webpack": "^4.37.0",
    "webpack-cli": "^3.3.6",
    "webpack-dev-server": "^3.7.2",
    "webpack-node-externals": "^1.7.2"
  }
}</code></pre>

</div>
<div class="col-lg-6">


<pre><span class="bold">webpack.config.js</span><code>const path = require('path');
const webpackNodeExternals = require('webpack-node-externals');
const TerserPlugin = require('terser-webpack-plugin');

const development = process.env.NODE_ENV === 'development';

// Constant with our paths
const paths = {
  OUTPUT: path.resolve(__dirname, 'build'),
};

module.exports = {
  entry: {
    bundle: './src/index.js',
  },
  target: 'node',
  node: {
    __filename: true,
    __dirname: true,
  },
  output: {
    path: paths.OUTPUT,
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: 'babel-loader',
      },
    ],
  },
  resolve: {
    extensions: ['.js', '.jsx'],
  },
  optimization: {
    minimizer: [
      new TerserPlugin({
        sourceMap: development,
        cache: true,
        parallel: true,
        terserOptions: {
          compress: true,
          ecma: 6,
          mangle: true,
        },
      }),
    ],
  },
  externals: [webpackNodeExternals()],
  mode: process.env.NODE_ENV,
  devtool: development && 'source-map',
};</code></pre>
</div></div>

<div class="row">
<div class="col-lg-6">
<pre><span class="bold">./src/controllers/index.js</span><code>import Api from './api/api';

const Controllers = (app) => {
    Api(app);
};

export default Controllers;</code></pre>
</div>

<div class="col-lg-6">
<pre><span class="bold">.babelrc</span><code>{
    "presets": ["@babel/preset-env"],
    "plugins": [
      "@babel/plugin-transform-spread",
      "@babel/plugin-proposal-class-properties",
      "@babel/plugin-proposal-optional-chaining",
      "@babel/plugin-transform-runtime"
    ]
  }</code></pre>
</div>
</div>



<div class="row">
  <div class="col-lg-6">
<pre><span class="bold">./src/controllers/api/index.js</span><code>import * as Model from '../../models';
import { asyncHandler } from '../../middlewares/error-handler';
import jwt from 'jsonwebtoken';

const SECRET = 'uuuu';

const StartApiServer = (app) => {
    app.get('/', function (req, res, next) {
        res.send("va bien la cosa")
    });

    app.post('/alumnoIntroduceCodigo', asyncHandler(async (req, res, next) => {
        const cod = req.body.cod;
        if (!cod) return res.sendStatus(400);
        const students = await Model.searchStudentsFromClass(cod.trim());
        res.send(students);
    }));
}</code></pre></div>
  <div class="col-lg-6">
<pre><span class="bold">./src/controllers/sockets/index.js</span><code>import socketIO from 'socket.io';
import * as Model from '../../models';
import { socketHandler } from '../../middlewares/error-handler';

const StartSocketServer = (server) => {
  const io = socketIO(server);
  io.on('connection', function (socket) {
    socket.on('alguienTermino', socketHandler(async (msg) => {
      await Model.heterminado(msg.alumnoId);
      io.emit('alguienTermino', msg);
  }));    
}</code></pre>
</div>
</div>


<div class="row">
<div class="col-lg-6">

<pre><span class="bold">./src/models/database.js</span><code>const { Sequelize } = require('sequelize');

const dbHeroku = {
    host: 'remote.com',
    user: 'remoteUser',
    password: 'remotePassword',
    database: 'remoteDB',
    connectionLimit : 10,
};

const dbLocal = {
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'databaseLocal'
}
const { database, user, password, host } = dbHeroku;
export default new Sequelize(database, user, password, {
    host,
    dialect: 'mysql',
});</code></pre>
</div>
<div class="col-lg-6">

<pre><span class="bold">./src/models/student.js</span><code>import db from './database';
const { QueryTypes } = require('sequelize');

export const searchStudentsFromClass = cod => db.query(
    'SELECT * FROM alumnos WHERE cod = :cod',
    { 
        replacements: { cod },
        type: QueryTypes.SELECT
    }
)</code></pre>

</div>  
</div>



<pre><span class="bold">./src/middlewares/error-handler.js</span><code>/*Tenemos una función que recibe como parámetro la función de cada controlador,
la ejecuta (resolve)
y si  hay algún error, lo mostrará por consola y lanzará un 500
*/
export const asyncHandler = controller => (req, res, next) => Promise
  .resolve(controller(req, res, next))
  .catch((err) => {
    console.error('Request error:' + err.toString());
    if (err) return res.sendStatus(500).send();
});
 
export const socketHandler = controller => msg => Promise
  .resolve(controller(msg))
  .catch((err) => {
    console.error('Socket error:' + err);
});</code></pre>


<pre><span class="bold">./src/middlewares/index.js</span><code>import cors from 'cors';
import bodyParser from 'body-parser';

const Middlewares = (app) => {
    app.use(bodyParser.urlencoded());
    app.use(bodyParser.json());
    app.use(cors()) // Use this after the variable declaration
    app.use(function (req, res, next) {
        res.header('Access-Control-Allow-Origin', '*');
        res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
        res.header('Access-Control-Allow-Credentials', true);
        res.header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE,OPTIONS');
    
        if (req.method === 'OPTIONS') {
            res.end();
        } else {
            next();
        }
    });
};

export default Middlewares;</code></pre>
<pre><span class="bold">./src/index.js</span><code>import express from 'express';
import http from 'http';
import Middlewares from './middlewares';
import Controllers from './controllers';

const app = express();
/*
Heroku utiliza la variable de entorno process.env.port para asignar el puerto donde se va ejecutar el servidor,
por eso la hemos definido en esta plantilla
*/
const port = process.env.PORT || 3005;

Middlewares(app);
Controllers(app);

const server = http.createServer(app);

server.listen(port, () => console.log(`Server listening to http://localhost:${port}`));
</code></pre>


<p>Para arrancar nuestra aplicación en el puerto 3000:</p>
<pre><code>npm start</code></pre>

<p>Si queremos parar node:</p>
<pre><code>ps auxxx | grep node <span class="green">#Este comando nos permite ver los servicios de node que se están ejecutando</span>
kill -9 1480 8573 <span class="green">#Paramos los servicios de node activos</span></code></pre></div>
	</article><article><div><h2>Ejercicios rutas</h2>
	<p>Crear un nuevo proyecto con <span class="i">nodejs</span> que implemente los siguientes enrutamientos:</p>
	<ul>
		<li>/ -> Muestra una traza en la terminal</li>
		<li>/init -> Carga una vista llamada <span class="i">inicio</span> que muestra el texto "página de inicio"</li>
		<li>/user-init -> Carga una vista llamada <span class="i">inicio-usuario</span> que muestra el texto "hola [usuario]", donde [usuario] es un valor que recibimos del router]</li>
		<li>/libro -> Muestra el código HTML <pre><code>&lt;h2&gt;Carga libro&lt;/h2&gt;</code></pre>, pero sin cargar ningún fichero de vista. La palabra <span class="i">libro</span> será un nuevo fichero enrutador definido dentro de la carpeta <span class="i">routes</span></li>
		<li>/libro/alta -> Muestra la traza "formulario alta". La palabra <span class="i">libro</span> será un nuevo fichero enrutador definido dentro de la carpeta <span class="i">routes</span>.</li>
	</ul></div>
    </article>
</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>