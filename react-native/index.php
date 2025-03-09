<?php 
$titulo_curso="ReactJS Native | Pablo Monteserín";
$meta_description = 'En este curso veremos esta gran librería de facebook destinada a hacer aplicaciones de todo tipo con Javascript';
$img_curso = 'curso-react.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "res"))."/res/";
include $path."diapos_theme/head.php";
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
<li><a href="#expo">Expo</a></li>
<li><a href="#react-native">React native</a></li>
<li><a href="#peticiones-desde-movil">Hacer peticiones desde el teléfono móvil a mi ordenador</a></li>
<li><a href="#react-native-navigation">React Native Navigation</a></li>
<li><a href="#compilar-expo">Compilar con Expo en la nube</a></li>
</ol>
  </article>
  </section>
<main class="curso">
<?= drawH1WithImg() ?>

<article><div><h2 id="expo">Expo</h2>
</div></article><article><div><h2 id="expo">Expo</h2>
<p><a href="https://facebook.github.io/react-native/docs/getting-started" target="_blank">Documentación de la instalación</a>.</p>
 <ol>
 <li>Instalamos Expo en el sistema operativo:
 <pre><code>npm install -g expo-cli</code></pre></li>
 <li>Creaomos nuestro proyecto Expo
 <pre><code>expo init AwesomeProject</code></pre></li>
 </li>
<li>Ejecutamos el proyecto que hemos creado<pre><code>npm start</code></pre></li>
<li>Instalamos la aplicación Expo en el teléfono móvil: <a href="https://play.google.com/store/apps/details?id=host.exp.exponent" target="_blank">Expo</a>
 <li>Para desplegar la aplicación en el móvil, podemos
 <ul>
 <li>Pulsar el botón "" teniendo el móvil conectado con la opción debug usb (opciones de desarrollo) activada. Por razones de estabilidad, esta es la opción más recomendable.</li>
 <li>Escanear el código de qr generado tras ejecutar <span class="i">npm start</span> con la aplicación Expo.</li>
 </ul>
 </li>
 </ol>
	</div></article><article><div><h2 id="react-native">React native</h2>
  
  
  
  <h3>Instalar React Native</h3>
  <pre><span class="bold">Instalar react native</span><code>npm install -g react-native-cli</code></pre>
  <pre><span class="bold">Crear un proyecto con react native</span><code>react-native init pruebaReactNative</code></pre>
  <p>Tras crear nuestro proyecto React, podemos abrir la carpeta Android del mismo con Android Studio.</p>
  <h3>Ejecutar nuestra aplicación</h3>
<p>Debemos crear el fichero <span class="i">local.properties</span>:</p>
<pre><span class="bold">./android/local.properties</span><code>sdk.dir = /home/monty/Android/Sdk</code></pre>
  <pre><code>sudo react-native run-android</code></pre>
<p class="red bold">En linux, si intentaba lanzar la aplicación después de que el ordenador hubiese entrado en modo suspensión, no se lanzaba, y obtenía un error.</p>
  <h4>Para lanzar el emulador sin abrir el android studio:</h4>
  <pre><code>cd ~/Android/Sdk/tools/bin
emulator -list-avds // este comando muestra los teléfonos instalados
cd ~/Android/Sdk/tools/
emulator -avd nexus // he renombrado el nombre por defecto que el avd manager le da al dispositivo y lo he llamado nexus para que sea más fácil de escribir</code></pre>

<p>En mi caso, una vez sé el nombre del dispositivo, podría ejecutar:</p>
<pre><code>/home/monty/Android/Sdk/tools/emulator -avd nexus</code></pre>
</div></article><article><div><h2>Crear una aplicación con react native</h2>
  <p>Para crear nuestras aplicaciones para React Native tenemos dos opciones oficialmente soportadas por facebook: Expo y Create React App (<a href="https://facebook.github.io/react-native/docs/getting-started" target="_blank">https://facebook.github.io/react-native/docs/getting-started</a>).</p>
<p>La diferencia de React Native con React se refiere sólo a la capa de presentación. React Native tiene varios de componentes específicos para desarrollo móvil.</p>
  <p>Estas dos herramientas nos permiten crear cómodamente una aplicación con React Native en la que todo está configurado y listo para empezar a modificar.</p>
 <h4>React Native Dev Tool</h4>
<p>Mostraremos su menú pulsando CTRL + M</p>
<p>En una versión de linux no me funcionó, así que en la terminal ejecuté:</p>
<pre><code>adb shell input keyevent 82</code></pre>

<div class="row">
  <div class="col-md-9">
    
<p>Desde aquí podemos:</p>
<ul>
<li>Refrescar el emulador con los últimos cambios (R + R, o reload)</li>
<li>Enable Hot Reloading y Enable Live Reload
<ul>
	<li>No debes tener la opción <span class="i">Enable Hot Realoading</span> habilitada si tienes la opción <span class="i">Enable Live Reload</span> habilitada. Hacen conflicto.</li>
	<li>Por regla general, sólo habilitaremos la opción <span class="i">Enable Live Reload</span> en lugar de la <span class="i">Enable Hot Realoading</span>.</li>
</ul></li>
<li>Ver los logs de la aplicación desde chrome (<span class="i">Remote JS Debugging</span>)</li>
</ul>
  </div>
  <div class="col-md-3">
  <img src="./img/dev-mode.png" alt="Dev Mode Android Native">

  </div>
</div>
<h4>Añadiendo los códigos anteriores al <span class="i">package.json</span></h4>
<pre><code><span class="gris">
  "scripts": {
  	...
    "start": "node node_modules/react-native/local-cli/cli.js start &
</span> /home/monty/Android/Sdk/tools/emulator -avd nexus & sudo react-native run-android",
    "panel": "/home/monty/Android/Sdk/platform-tools/adb shell input keyevent 82"
  <span class="gris">
    ...
  }
  </span></code></pre>
<p>El plugin <span class="i bold red">npm scripts</span> de egamma para <span class="i">Visual Studio Code</span> permite ejecutar un script del <span class="i">package.json</span> haciendo click sobre él.</p>
<p>A veces un servicio de <span class="i">nodejs</span> se queda abierto y no permite volver a desplegar otro en el mismo puerto. Podemos cerrar todos los servicios de <span class="i">nodejs</span> ejecutando el comando:</p>
<pre><code>killall node</code></pre>
<h4>Configuración importante para mejorar el flujo de trabajo desde el Android Studio</h4>
<p>Para deshabilitar Enable Hot Reloading por defecto:</p>
<ol>
	<li>Abrimos Android Studio</li>
	<li>File -> Settings -> <ol><li>HotSwap -> Dehabilitamos <span class="i">Enable hot-swap agent for Groovy code</span></li>
	<li>Instant run -> <span class="i">Enable instant run to hot swap code/resource changes on deploy (default enabled)</span></li>
	</ol></li>
	<li>Android Virtual Device Manager -> En uno de los emuladores pulsamos sobre la flechita que apunta hacia abajo -> <span class="i">Wipe data</span> (por si hubiese quedado guardada una configuración diferente de la que acabamos de establecer).</li>
</ol>
<p>Para ejecutar siempre el dispositivo en Cold Boot</p>
<ol>
<li>Abrimos el Android Studio.</li>
<li>Vamos al <span class="i">Android Virtual Device Manager.</span></li>
<li>Pulsamos en el lápiz del dispositivo que queremos editar.</li>
<li>Show advanced Settins</li>
<li>Emulated Performance -> Boot Option: Cold Boot</li>
</ol>
<h3>Componente inicial</h3>
<pre><code>import React from 'react';
import { View, Text, Button } from 'react-native';

const btnPulsado = _ =&gt; {
  alert(111);
}

const App = () =&gt; {
  return (
    &lt;View style={styles.container}&gt;
      &lt;Text style={styles.title}&gt;Restaurant Review &lt;/Text&gt;
      &lt;Text style={styles.title}&gt;Restaurant Review &lt;/Text&gt;
      &lt;Button title=&quot;Bot&oacute;n&quot; onPress={btnPulsado}/&gt;
    &lt;/View&gt;
  );
};

export default App;</code></pre>
  <h3>Componentes de react native</h3>

<div class="row">
  <div class="col-md-4">Equivalente a los div de HTML. Sirve para agrupar componentes.<pre><code>&lt;View&gt;&lt;View&gt;</code></pre></div>
  <div class="col-md-5"><pre><code>&lt;Button title="Cerrar" onPress={ () => {btnPulsado()}}/&gt;</code></pre></div>
  <div class="col-md-3"><pre><code>&lt;Text&gt;El texto&lt;Text&gt;</code></pre></div>
</div>


<div class="row">
<div class="col-md-4"><p>Cargar una imagen</p><pre><code>const imagen = require ('./images/picture.jpg');
&lt;Image source={imagen} /&gt;</code></pre></div>  
<div class="col-md-4">Cargar un combo desplegable:
    <pre><code>&lt;Picker style={styles.container} 
  selectedValue={microCicloActivo}
  onValueChange={valor =&gt; setValor(valor)}&gt;
    &lt;Picker.Item key=0 value=0 label="titulo 0"/&gt;
    &lt;Picker.Item key=1 value=1 label="titulo 1"/&gt;
    &lt;Picker.Item key=2 value=2 label="titulo 2"/&gt;
&lt;/Picker&gt;</code></pre></div>

<div class="col-md-4">Cargar un cuadro de diálogo. <a href="https://www.npmjs.com/package/react-native-modal" target="_blank">Cargaremos una librería externa para hacerlo</a>.</div>
 
  
  
</div>

<
<p>Otros componentes:</p>
  <ul>
    <li>FlatList / mainList (listas de elementos)</li>
    <li>AsyncStorage (equivalente a localStorage)</li>
  </ul>
	<h3>Estilos</h3>
  <p>En React Native es como si todos los elmentos tuviesen aplicado el estilo css <span class="i">display:flex</span> por defecto.</p>
  <div class="row">
<div class="col-md-9 ">
<pre><code>const App = () =&gt; {
	return (
		&lt;View style={styles.wrapper}&gt;
			&lt;View style={styles.container}&gt;
			&lt;Text style={styles.col}&gt;COL1&lt;/Text&gt;
			&lt;Text style={styles.col}&gt;COL2&lt;/Text&gt; 
		&lt;/View&gt;
		&lt;Text style={styles.fila_abajo}&gt;FILA ABAJO&lt;/Text&gt;
	&lt;/View&gt;
	);
};

const styles = StyleSheet.create({
  container: {
    backgroundColor: 'orange',
    flexDirection: 'row',
    justifyContent: 'center',//flex-start, flex-end
  },
  col: {
    fontSize:30,
    borderColor:'black',
    borderWidth:3,
    padding:20
  },
  wrapper:{
    height: '100%',
    backgroundColor:'pink',
    flexDirection:'column',
    justifyContent: 'space-between'

  },
  fila_abajo: {
    textAlign:'center',
    backgroundColor:'green'
  }
});</code></pre>
</div>
<div class="col-md-3">
<img class="img-fluid" src="img/react-styles.png" alt="styles en react native">

</div>
</div>

<?= getRes('recurso','zip/react-native/estilosreactnative.zip', 'Descargar ejemplo estilos React Native') ?>
	</div></article><article><div><h2 id="peticiones-desde-movil">Hacer peticiones desde el teléfono móvil a mi ordenador</h2>
	<p><span class="bold">IP privada</span>: identifica a un dispositivo dentro de mi red. Cuando ejecutamos la aplicación con Expo, esta ip identifica a mi ordenador. Tendré que usar esta ip en lugar de localhost para poder acceder a la información desde mi movil, ya que 127.0.0.1 es una ip local que sólo funciona cuando accedo desde el propio dispositivo.</p>
</div></article><article><div><h2 id="react-native-navigation">React Native Navigation</h2>
<p><a href="https://reactnavigation.org/
" target="_blank">Documentación oficial</a>.</p>
<p>Un stack es un grupo de páginas (puede haber 1 o más)</p>
<p>Para cambiar de página utilizando la navegación que hemos implementado, usaremos:</p>
<pre><code>onPress={() => { props.navigation.navigate({ routeName: 'Calendar' })}}</code></pre>
<h3>Navegación con StackNavigator</h3>
<pre><code>npm i react-navigation --save 
sudo npm i react-navigation-stack --save
sudo npm i react-native-gesture-handler --save</code></pre>
<pre><code>import React from 'react';
import AppContainer from './application/AppContainer';

export default App = () =&gt; &lt;AppContainer/&gt;</code></pre>
<p>El siguiente módulo carga:</p>
<ul>
	<li>Los stacks</li>
	<li>Los screen de los stacks</li>
	<li>La configuración de los stacks</li>
</ul>
<p>Todo ello en un solo documento. Más adelante veremos una forma apropiada de segmentar el proyecto.</p>

<div class="row">
<div class="col-lg-6">

<pre><span class="bold">./application/AppContainer.js</span><code>import React from 'react';
import { createAppContainer } from 'react-navigation';
import { createStackNavigator } from 'react-navigation-stack';

import HomeScreen from '../screens/home';
import Page2Screen from '../screens/page2';


const AppNavigator = createStackNavigator(
  {
    Home: HomeScreen,
    Page2: Page2Screen,
  },
  {
    initialRouteName: 'Home',

    defaultNavigationOptions: {
      headerStyle: {
        backgroundColor: 'pink',
      },
      headerTintColor: '#fff',
      headerTitleStyle: {
        fontWeight: 'bold',
      },
    },
  }
);

export default createAppContainer(AppNavigator);</code></pre>
</div>
<div class="col-lg-6">
<pre><span class="bold">screens/Home</span><code>import React from 'react';
import { StyleSheet, Text, View, Button } from 'react-native';

export default function Home(props) {
  return (
    &lt;View&gt;
      &lt;Text&gt;Esta es la pagina Home2&lt;/Text&gt;

      &lt;Button
        title=&quot;Go to Page2&quot;
        onPress={() =&gt; props.navigation.navigate('Page2')} /&gt;

    &lt;/View&gt;
  );
}</code></pre>
<?= getRes('recurso','./zip/react-native/stack-navigation.zip', 'Descargar recurso') ?>
</div>

</div>


<h3>Navegación con StackNavigator Reestructurada</h3>
<h4>Carga del módulo de navegación principal</h4>
<p>Reubicamos el <span class="bold">App.js</span> dentro de la nueva carpeta <span class="bold">src</span>. Para ello tendremos que redefinir la ruta en <span class="bold">./node_modules/expo/AppEntry.js</span>.</p>
<pre><span class="bold">./src/App.js</span><code>import React from 'react';
import Navigation from './navigation/navigationContainer';

export default _ =&gt; &lt;Navigation /&gt;</code></pre>


<div class="row">
  <div class="col-lg-6">
  <h5>Cargamos la navegación principal.</h5>

  <pre><span class="bold">./src/navigation/navigationContainer.js</span><code>import { createSwitchNavigator, createAppContainer } from 'react-navigation';
import MainNavigator from './MainNavigator/mainNavigator';

export default createAppContainer(createSwitchNavigator(
    {
        MainNavigator
    },{
        
    }
))</code></pre>
  </div>
  <div class="col-lg-6">

  <h5>Definimos la navegación principal.</h5>
<pre><span class="bold">./src/navigation/MainNavigator/mainNavigator.js</span><code>import { createStackNavigator } from 'react-navigation-stack';
import { config } from '../NavigationConfigs/stackConfig';
import simpleStacks from '../ScreenStacks/ScreenStacks';

const {Home,Page2} = simpleStacks;

export default createStackNavigator(
  {
    Home,
    Page2,
  },
 config
);</code></pre>
  </div>
</div>

<h4>Definición del módulo de navegación principal</h4>
<p>La anterior navegación principal ha cargado dos cosas cuyo código mostramos a continuación:</p>
<ul>
	<li>Los stacks (Home y Page2)</li>
	<li>La configuración.</li>
</ul>
<div class="row">
  <div class="col-lg-6">
    
<pre><span class="bold">./src/ScreenStacks/ScreenStacks.js</span><code>import screens from "./screens";
import stackConfig from "../NavigationConfigs/stackConfig";
import { createStackNavigator } from 'react-navigation-stack';

// Deconstruimos las screens
const {
    HomePage,
    Page2Page
} = screens;

// Cargamos cada Stack con su correspondiente configuración
const Home = createStackNavigator(HomePage, stackConfig);
const Page2 = createStackNavigator(Page2Page, stackConfig);

// Exportamos los stacks
export default {
    Home,
    Page2
}</code></pre>
  </div>
  <div class="col-lg-6">
    
<pre><span class="bold">./src/navigation/ScreenStacks/screens.js</span><code>// Importamos todos los screens que hemos definido en la carpeta screens

import Home from "../../screens/home";
import Page2 from "../../screens/page2";

// Exportamos un objeto en el que vinculamos cada page a su correspondiente screen
export default {
    HomePage: {
        Home, 
    },
    Page2Page:{
        Page2
    }
}</code></pre>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    
<pre><span class="bold">./src/navigation/NavigationConfigs/stackConfig.js</span><code>export const withHeader ={
	header: {
		title: 'title'
	}
}

export default {
	headerStyle: {
		backgroundColor: 'pink',
	},
	headerTintColor: '#fff',
	headerTitleStyle: {
		fontWeight: 'bold',
	},
}</code></pre>
  </div>
  <div class="col-lg-6">
  <?= getRes('recurso','zip/react-native/stack-navigation-2.zip', 'Descargar recurso') ?>

  </div>
</div>

<h3>Navegación con BottomNavigator</h3>
<pre><span class="bold">./src/navigation/MainNavigator/mainNavigator.js</span><code>import { createStackNavigator } from 'react-navigation-stack';
import { config } from '../NavigationConfigs/stackConfig';
import simpleStacks from '../ScreenStacks/ScreenStacks';
import bottomStacks from '../BottomNavigation/bottomNavigation';

const {Home, Page2} = simpleStacks;

export default createStackNavigator(
  {
    Home,
    bottomStacks
  },
 config
);</code></pre>

<div class="row">
  <div class="col-lg-6">

  <pre><span class="bold">./src/navigation/BottomNavigation/bottomNavigation.js</span><code>import {bottomScreenStacks} from "../ScreenStacks/ScreenStacks";
import Config from '../NavigationConfigs/bottomNavigationConfig';
import { createBottomTabNavigator } from 'react-navigation-tabs';

export default createBottomTabNavigator(bottomScreenStacks, Config);</code></pre>
  </div>
  <div class="col-lg-6">
    
<pre><span class="bold">./src/navigation/ScreenStacks/ScreenStacks.js</span><code>...
//bottom stack screens
export const bottomScreenStacks = {
    bottom1,
    bottom2
}</code></pre>
  </div>
</div>

<pre><span class="bold">./src/navigation/NavigationConfigs/bottomNavigationConfig.js</span><code>import React from 'react';
import Icon from 'react-native-vector-icons/Ionicons';
import constants from &quot;../../utils/constants&quot;;

const {

	myInitialRouteName,

	//styles for the bottom navigator
	backgroundBottomColor,
	activeButtonColor,
	inactiveButtonColor,
	//icons
	iconSize,
	calendarIcon,
	fridgeIcon,
	gamesIcon,
	profileIcon,
	weeklyIcon
} = constants

export default {

	defaultNavigationOptions: ({ navigation }) =&gt; ({
		tabBarIcon: ({ focused, horizontal, tintColor }) =&gt; {
			const { routeName } = navigation.state;
			let iconName =
				routeName == 'bottom1' ? calendarIcon :
					routeName == 'bottom2' ? fridgeIcon : null ;

            // You can return any component that you like here!
			return &lt;Icon name={iconName} size={iconSize} color={tintColor} /&gt;;
		},
	}),

	tabBarOptions: {
		activeTintColor: activeButtonColor,
		inactiveTintColor: inactiveButtonColor,
		style: {
			backgroundColor: backgroundBottomColor,
		},
		initialRouteName: myInitialRouteName
	},
}</code></pre>

<div class="row">
  <div class="col-md-10"><pre><span class="bold">./src/utls/constants.js</span><code>export default {

myInitialRouteName: 'Calendar',

//styles for the bottom navigator
backgroundBottomColor: 'black',
activeButtonColor: 'orange',
inactiveButtonColor: 'white',

//icons
iconSize: 25,
calendarIcon:'ios-home' ,
fridgeIcon: 'ios-settings'     
}</code></pre></div>
  <div class="col-md-2"><?= getRes('recurso','zip/react-native/bottom-navigation.zip', 'Descargar recurso') ?></div>
</div>


<h3>Navegación con DrawerNavigation</h3>
<div class="row">
  <div class="col-md-10"><pre><span class="bold">appcontainer.js</span><code>import React from 'react';
import { createAppContainer } from 'react-navigation';
import { createDrawerNavigator } from 'react-navigation-drawer';

import HomeScreen from '../screens/home';
import Page2Screen from '../screens/page2';

  

const MyDrawerNavigator = createDrawerNavigator({
  Home: {
    screen: HomeScreen,
  },
  Notifications: {
    screen: Page2Screen,
  },
});

export default createAppContainer(MyDrawerNavigator);</code></pre></div>
  <div class="col-md-2"><?= getRes('recurso','./zip/react-native/drawer-navigation.zip', 'Descargar recurso') ?></div>
</div>



</div></article><article><div><h2 id="compilar-expo">Compilar con Expo en la nube</h2>
<ol>
<li>Creamos una cuenta en <a href="https://expo.io/" target="_blank">Expo</a></li>
<li>Añadimos al app.js los datos que definen el nombre del paquete en Android e Ios:
<pre><code>"expo": {
  ...
  "ios": {
    "bundleIdentifier": "com.yourcompany.yourappname"
  },
  "android": {
    "package": "com.yourcompany.yourappname"
  }
}</code></pre>
</li>
<li>Ejecutamos el código
<pre><code>expo build:android</code></pre>
</li>
</ol>
</div></article>
</main>
<?php 

include $path."/diapos_theme/footer.php";
?>