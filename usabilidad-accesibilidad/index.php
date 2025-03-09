<?php 
/*$titulo_curso="Accesibilidad y Usabilidad";

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
    <li><a href="#accesibilidad">Accesibilidad</a></li>
    <li><a href="#limitada">Causas de accesibilidad web limitada</a></li>
    <li><a href="#leyes">Leyes</a></li>
    <li><a href="#ventajas-accesiblidad">Ventajas accesibilidad</a></li>
    <li><a href="#WCAG">Web Content Accessibility Guidelines(WCAG)</a></li>
    <li><a href="#usabilidad">Usabilidad</a></li>
    <li><a href="#tipos">Tipos de usuarios web</a></li>
    <li><a href="#estudio-usabilidad">Hacer un estudio de usabilidad</a></li>
    <li><a href="#herramientas-usabilidad">Herramientas online para usabilidad</a></li>
    <li><a href="#herramientas-velocidad">Herramientas para aumentar la velocidad de nuestro site</a></li>
            <li><a href="#clasificacion_x_arquitectura">Clasificación de las web atendiendo a su finalidad</a></li>
    <li><a href="#CRO">CRO</a></li>

    <li><a href="#showcase">Showcase</a></li>
    <li><a href="#accesibilidad">Accesibilidad</a></li>
</ol>
</article>
</section>

<main class="curso">
<section>
<article>
<h2 id="accesibilidad">Accesibilidad web</h2>
<p>Tiene como objetivo lograr que las páginas web sean utilizables por el máximo número de personas, independientemente de sus conocimientos o capacidades personales y de las características técnicas del equipo utilizado para acceder a la web.</p>
<p><span class="black bold">Steven Pemberton</span>, figura importante en el ámbito del desarrollo web: <br>
<span class="red">"Si tu sitio no es accesible, tendrás menos visitas. Fin de la historia."</span>
</p>
</article>
<article>
    <h2 id="limitada">Causas de accesibilidad web limitada</h2>
    <ul>
        <li><span class="black bold">Visuales</span>: baja visión, ceguera, daltonismo.
</li>
<li><span class="black bold">Motrices</span>: dificultad o imposibilidad de usar las manos: temblores (Parkinson), tensión muscular, distrofia muscular, amputaciones.</li>
<li><span class="black bold">Auditivas</span>: sordera o deficiencia auditiva.
</li>
<li><span class="black bold">Cognitivas</span>: dificultad de aprendizaje (dislexia), poca memoria o habilidades lógicas, dificultades de atención.</li>
    </ul>
</article>

<article>
    <h2 id="leyes">Leyes</h2>
    <ul>
        <li><a target="_blank" href="http://www.boe.es/boe/dias/2007/11/21/pdfs/A47567-47572.pdf">Real Decreto 1494/2007, de 12 de noviembre</a></li>
        <li><a target="_blank" href="http://www.boe.es/boe/dias/2007/06/23/pdfs/A27150-27166.pdf">Ley 11/2007, de 22 de junio.</a></li>
        <li><a target="_blank" href="http://www.boe.es/boe/dias/2007/10/24/pdfs/A43251-43259.pdf">Ley 27/2007, de 23 de octubre.</a></li>
        <li><a target="_blank" href="http://www.boe.es/boe/dias/2013/12/03/pdfs/BOE-A-2013-12632.pdf">http://www.boe.es/boe/dias/2013/12/03/pdfs/BOE-A-2013-12632.pdf</a></li>
    </ul>
    <p>Fijan el nivel de adecuación obligatorio y equivalente a las WCAG 2.0 para: <br>
<ul>
    <li>los portales de Internet de la Administración Pública.</li>
    <li>las empresas que reciben financiación pública.</li>
    <li>las empresas privadas con más de 100 trabajadores o que facturen más de 6 millones de euros (especialmente entidades bancarias, agencias de viaje, aseguradoras, empresas de transporte, suministradoras de electricidad, gas y agua, etc.).</li>
</ul>
    </p>
    <p>Abordan temas como la certificación de los portales; las sanciones por incumplimiento de las obligaciones de accesibilidad.</p>
</article>
<article>
    <h2 id="ventajas-accesiblidad">Ventajas de la accesibilidad web</h2>
    <ul>
        <li>Aumenta el número de potenciales visitantes de la página.</li>
        <li>Reduce el tiempo de carga de las páginas web y la carga del servidor web.</li>
        <li>Demuestra responsabilidad social.</li>
        <li>Cumples las disposiciones legislativas.</li>
        <li>Mejor indexación en los motores de búsqueda.</li>
        <li>Mejora la usabilidad de la web.</li>
    </ul>
</article>
<article>
    <h2 id="WCAG">Web Content Accessibility Guidelines(WCAG)</h2>
    <h3>Pautas</h3>
    <p>Estas pautas no sólo benefician a las personas con discapacidad, sino también a todos aquellos usuarios que en un momento determinado tengan dificultades para acceder a la web ya sea a través de teléfonos móviles, navegadores web, etc.</p>
    <h3>Links</h3>
<ul>
    <li><a target="_blank" href="http://www.w3.org/TR/WCAG20/">Web Content Accessibility Guidelines 2.0</a></li>
</ul>
    </p>

    <h3>Estructura de la WCAG 2.0</h3>
    <ul>
        <li>Cuatro principios básicos: 
        <ul>
            <li>perceptible.</li>
            <li>operable.</li>
            <li>comprensible.</li>
            <li>robusto.</li>
        </ul>
        </li>
        <li>Cada principio básico tiene unas pautas (12) que desarrolla una serie de conformidad (60), clasificados por niveles de accesibilidad:
            <ul>
                <li>A (el más bajo)</li>
                <li>AA</li>
                <li>AAA (el más alto)</li>
            </ul>
        </li>
    </ul>

    <h3>Validadores automáticos de accesibilidad</h3>
    <ul>
        <li>
            <a target="_blank" href="http://examinator.ws/">http://examinator.ws/</a>
        </li>
        <li>
            <a target="_blank" href="http://www.tawdis.net/">http://www.tawdis.net/</a>
        </li>
        <li>
            <a target="_blank" href="http://www.sidar.org/hera/">http://www.sidar.org/hera/</a>
        </li>
        <li>
            <a target="_blank" href="http://sipt07.si.ehu.es/evalaccess2/crawler.html">http://sipt07.si.ehu.es/evalaccess2/crawler.html</a>
        </li>
        <li>
            <a target="_blank" href="http://jxnblk.com/colorable/demos/text/">Validador de contraste de los colores de fondo</a>
        </li>
    </ul>
</article>

<article>
    <h2>9 Recomendaciones para hacer un sitio web accesible</h2>
    <ol>
        <li>Seguir los estándares del W3C. Logotipos de validación: <a href="http://www.w3.org/QA/Tools/Icons">http://www.w3.org/QA/Tools/Icons</a>, <a href="http://www.tawdis.net/info/logotipoTaw/?lang=es">http://www.tawdis.net/info/logotipoTaw/?lang=es</a></li>
        <li>Todas las imágenes deben tener un texto alternativo (atributo alt) que será el que visualicen los navegadores que no muestren imágenes (lectores de pantalla, ordenadores con una conexión lenta, navegadores de texto). Dicho atributo debe contener la descripción de la imagen. Enlace a plugin de firefox para deshabilitar las imágenes: <a href="https://addons.mozilla.org/en-US/firefox/addon/image-block/">https://addons.mozilla.org/en-US/firefox/addon/image-block/</a></li>
        <li>Los enlaces tienen que tener un nombre significativo del lugar al que apuntan. Este texto debe ser comprensible fuera de su contexto y, por tanto, no sirve el tan usado "pulsa aquí".</li>
        <li>Para organizar la información dentro de la página web se deberán usar los h1,h2...</li>
        <li>Deben usarse tipologías de letras de fácil lectura.</li>
        <li>Debe evitarse en lo posible  el uso de tablas para maquetar, a menos que sean imprescindibles. </li>
        <li>Siempre que sea posible deben usarse hojas de estilo (CSS) para separar el contenido de la Presentación.</li>
        <li>En caso de añadir contenido multimedia (sonido, animaciones y/o vídeo) deberán proporcionarse subtítulos (para el sonido) o descripción de las animaciones y los vídeos.
        <li>En caso de usar marcos, deberá usarse una etiqueta &lt;noframe&gt; que incorpore los enlaces necesarios para la navegación. Se deberá identificar perfectamente cada uno de los marcos</li>
</li>
    </ol>
</article>
</section>

<section>
    <article>
        <h2 id="usabilidad">USABILIDAD</h2>
<video style="width:100%" class="video" src="img/estres.mp4" controls></video>
        <p>Tiene como objetivo lograr una navegación fácil, cómoda e intuitiva.</p>
        <p><span class="black bold">Jakob Nielsen</span> <br>
En Internet, la usabilidad es una condición necesaria para sobrevivir.</p>
<ul>
    <li>Si un usuario se pierde en una página web, la abandona.</li>
    <li>Si le cuesta leer la información, se va.</li>
    <li>Si no encuentra con facilidad lo que busca, salta a otra página.</li>
    <li>Si le resulta complicado rellenar un formulario, lo deja en blanco.</li>

</ul>

    </article>
    <article>
        <h2>El diseño visual es fundamental para comunicar.</h2>
    </article>
    <article>
        <h2>Sliders</h2>
        <p>Suelen ocupar más de la mitad de la página y son poco usables. Si el usuario lee lento (a empezado a leer el slider tarde, tiene problemas de visión, es de otro país...) puede no darle tiempo a leer la información del slider</p>

        <p>el usuario no quiere que sucedan cosas en una página que el no ha accionado. en este sentido, un slider es molesto.</p>
        <p><a target="_blank"  href="http://www.nngroup.com/articles/auto-forwarding/">Enlace a un estudio de Nielsen Norman Group</a> en el que se demuestra la inutilidad de un slider sobre lavadoras colocado en la página de Siemens,</p>

    </article>
    <article>
        <h2 id="tipos">Tipos de Usuarios Web</h2>
        <ul>
            <li><span class="black bold">Creadores</span>. Son aquellos usuarios que interaccionan activamente con la web mediante la publicación de Contenidos.</li>
            <li><span class="black bold">Críticos</span>. Usuarios que califican y escriben reseñas de forma puntual.</li>
            <li><span class="black bold">Coleccionistas</span>. Son aquellos usuarios que acceden frecuentemente a información actualizada (RSS).</li>
            <li><span class="black bold">Socializadores</span>. Son aquellos que utilizan las redes sociales.</li>
            <li><span class="black bold">Espectadores</span>. Son aquellos que se limitan a navegar por los contenidos publicados por otros.</li>
            <li><span class="black bold">Inactivos</span>. Son aquellos que no participan de ninguna de las anteriores actividades.</li>
        </ul>
    </article>
    <article >
        <h2>Eye Tracking</h2>
        <img src="img/laptop.svg" alt="Ordenador portatil">
        <img src="img/eye_tracking.svg" alt="eye tracking">
<p><a target="_blank" href="http://eyequant.com/">http://eyequant.com/</a> → Mediante inteligencia artificial simula los resultados que obtendríamos en un test de eye tracking.</p>


    </article>
    <article>
        <h2 id="estudio-usabilidad">Hacer un estudio de usabilidad</h2>
        <ol>
            <li><span class="black bold">Reclutar a los participantes</span> <p>El número mínimo  de participantes es 5 (no involucrados en el desarrollo del sitio web).
Los participantes deberían tener perfiles y características acordes con la audiencia potencial.</p></li>
            <li><span class="black bold">Local y materiales</span><p>Disponer de un espacio donde nadie interfiera en la realización de la prueba.</p></li>
            <li><span class="black bold">Planificación de la prueba</span><p>Elabore un guión en el que se describa: qué le va a decir a cada participante; que le va a pedir que haga; cómo va a hacerlo; cuánto tiempo estima necesario para cada paso en la prueba.</p></li>
            <li><span class="black bold">Antes de empezar</span>

            <ul>
                <li>Comience explicándole que el objetivo de la prueba es evaluar la calidad de uso del sitio.</li>
                <li>Aproveche para extraer más información sobre el usuario, sus preferencias, experiencia y conocimientos.</li>
                <li>¿Uso de Internet? ¿Para qué lo utiliza?¿Qué sitios web suele visitar?</li>
                <li>Al usuario se le debe instar a que durante la prueba piense en voz alta. </li>
                <li>La función del evaluador debe observar silenciosamente, sin ayudar al usuario en la consecución de tareas.</li>
            </ul></li>
            <li><span class="black bold">Comienzo de la prueba</span>
    <ul>
        <li>El evaluador abre el navegador con el sitio web cargado.</li>
        <li>Le indicamos al usuario que no haga nada, que únicamente observe el interfaz y diga qué cree
que está viendo, de qué cree trata el sitio web, para qué cree que sirve, y todas aquellas impresiones que tenga.</li>
    </ul>
    <p><span class="u">Analizar la facilidad de uso.</span> <br>Para ello se le encomienda al usuario la realización de tareas concretas, como:
    <ul>
        <li>Buscar cierta información.</li>
        <li>Contactar con el autor.</li>
        <li>Descargar ciertos contenidos.</li>
    </ul>
<ul>
    <li><span class="black">Elaboración de un informe</span> <br>

    Todo lo que se haya observado y anotado durante la prueba, debe ser resumido y sintetizado en un informe final qué incluirá los problemas de usabilidad que tiene el sitio web y algunas posibles soluciones</li>
</ul>
    </p>
            </li>

        </ol>
    </article>

    <article>
        <h2 id="herramientas-usabilidad">Herramientas online</h2>
        <ul>
    
            <li><a target="_blank" href="test-euristico.pdf">Test heurístico</a></li>
            <li><a target="_blank" href="https://www.optimalworkshop.com/">Card Sorting</a> → Puede ser una gran ayuda a la hora de realizar el estudio de usabilidad detallado en la diapositiva anterior.</a></li>
            <li><a target="_blank" href="https://www.optimalworkshop.com/">https://www.optimalworkshop.com/</a></li>
            <li><a target="_blank" href="http://navflow.com/">NavFlow</a> y <a href="http://theclicktest.com/">ClickTest</a>→ Permiten evaluar el diseño de nuestra página web.</li>
        </ul>
    </article>
    <article>
        <h2 id="herramientas-velocidad">Herramientas para aumentar la velocidad de nuestro site</h2>

        <ul>
            <li><a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/">Google Page Speed</a></li>
            <li><a target="_blank" href="https://testmysite.thinkwithgoogle.com/">Google Test My Site</a></li>
            <li><a target="_blank" href="http://gtmetrix.com/">GTMetrix - Este test nos dá bastante más información que el de Google. Además, permite comparar varias webs.</a></li>
        </ul>
    </article>

    <article>
        <h2>Corrección del error: 
Leverage browser caching </h2>

<a target="_blank" href="/curso/servidor-apache/index.php#aumentar_velocidad">Ver como mejorar la velocidad de la página mediante la modificación del .htaccess.</a>
    </article>
</section>
<section>
    <article>
        <h2 id="CRO">CRO (optimización del ratio de conversión)</h2>
        <h3>Proceso</h3>
        <img src="img/esquema.png" alt="proceso cro">
        <h3>Pilares</h3>
        <img src="img/pilares.png" alt="pilares cro">

        <h3>Se basa en los principios de:</h3>
        <h4>Comunidad</h4>
        <img src="img/comunidad-cro.jpg" alt="comunidad cro">
        <h4>Inmediatez</h4>
        <img src="img/inmediatez.jpg" alt="inmediatez cro">
        <img src="img/inmediatez-2-cro.jpg" alt="inmediatez cro">
        <h4>Autoridad</h4>
        <img src="img/influencers-sociales.jpg" alt="influencers sociales">
        <h4>Confianza</h4>
        <img src="img/confianza.jpg" alt="confianza cro">
        <img src="img/logos-confianza-cro.jpg" alt="logos confianza">
        <h4>Patrones de comportamiento</h4>
                <img src="img/inmediatez-2-cro.jpg" alt="patrones de comportamiento">

    </article>
</section>
<section>

    <article>
    <h2 id="showcase">Showcase</h2>

    <p>Algunos ejemplos algo duros: </p>
<ul>
    <li><a rel="nofollow" target="_blank"  href="http://pedidos.pizzeriabritannia.com/">Pizzería Británica</a></li>
    <li><a rel="nofollow" target="_blank" href="http://www.arngren.net/">arngren.com</a></li>
    <li><a rel="nofollow" target="_blank" href="http://www.lingscars.com/">lingscars.com</a></li>
    <li>
        <a rel="nofollow" target="_blank" href="http://www.007museum.com/">007museum.com</a>
    </li>
    <li><a rel="nofollow" target="_blank" href="http://www.richardsbrothersseafoods.com.au/">richardsbrothersseafoods.com.au</a></li>
    <li><a rel="nofollow" target="_blank" href="http://www.chestertourist.com/morehotels.htm">chestertourist.com/morehotels.htm</a></li>
    <li><a rel="nofollow" target="_blank" href="http://www.sphere.bc.ca/test/sruniverse.html">sphere.bc.ca/test/sruniverse.html</a></li>
    <li><a rel="nofollow" target="_blank" href="http://www.rushbiddies.com/">rushbiddies.com/</a></li>
    <li><a rel="nofollow" target="_blank" href="http://www.supervideo.com/">supervideo.com/</a></li>
    <li><a rel="nofollow" target="_blank" href="http://www.serene-naturist.com/">serene-naturist.com/</a></li>
    <li><a rel="nofollow" target="_blank" href="http://www.alovelyworld.com/">alovelyworld.com/</a></li>
    <li><a rel="nofollow" target="_blank" href="http://evuk.co.uk/">evuk.co.uk/</a></li>
</ul>
    

</article>
<article>
    <h2 id="clasificacion_x_arquitectura">Clasificación de las webs atendiendo a su finalidad</h2>
    <h3 id="landing_page">Landing page</h3>
    <h4>Clasificación</h4>
    <h5>No comercial</h5>
    <p>Es una página de entrada a nuestro site. El usuario puede haber accedido a ella por varios caminos:</p>
    <ul>
        <li>Escribiendo el dominio en el buscador, en cuyo caso, la landing será la home.</li>
        <li>Pulsando sobre un banner de publicidad.</li>
        <li>Si escribiste un post y lo compartiste en las redes sociales, ese post, será la landing page.</li>
        <li>etc.</li>
    </ul>
    <h5>Comercial</h5>
    <p>Las anteriores son páginas de entrada natural a nuestro site. Pero nosotros podemos crear una página específicamente diseñada para posicionar un vender un producto. </p>
    <p>Podemos hacerlo de dos formas:</p>
    <ul>
        <li>Conservando los enlaces y estructura de la web.
        </li>
        <li>Quitando todo lo que sobra para centrarnos en el producto. Ni menus de opciones, ni últimas publicaciones, ni redes sociales... sólo el objetivo de la landing page. Todo lo demás son distracciones para el usuario y páginas de salida de su objetivo. La idea es que de una landing sólo se pueda salir de una forma: ejecutando el call to action (o pulsando el botón de retroceso). La única cosa que debe haber para interactuar debe ser el call to action. Además, desde el site principal tampoco debería haber enlaces para ir a esa landing page, pues perderían los menus de navegación. Para difundir esta página usaremos:
            <ul>
                <li>Redes sociales.</li>
                <li>Email marketing.</li>
            </ul>
        </li>
    </ul>
        <img src="img/landing-1-pablomonteserin.png" style="width:48%; display:inline-block; vertical-align: top" alt="landing page">

    <img src="img/landing-2-pablomonteserin.png" style="width:48%; display:inline-block; vertical-align: top" alt="landing page">
    <h4>Características</h4>
    <style>
.pp::-webkit-input-placeholder {
   color: green;
}

.pp:-moz-placeholder { /* Firefox 18- */
   color: green;  
}

.pp::-moz-placeholder {  /* Firefox 19+ */
   color: green;  
}

.pp:-ms-input-placeholder {  
   color: green;  
}
    </style>
    <ul>
        <li><strong>Producto.</strong>. Debemos hacer más incapié en las ventajas que reporta el producto para el usuario en lugar de en las características del mismo. Si queremos vender un curso, nos centraremos en como este curso va a cambiar la vida del usuario en lucar de en las horas de formación que ofrecemos.</li>
        <li><strong>Objetivo</strong>, con su correspondiente Call to action (CTA). Si en vez de una landing page fuese un site compuesto de varias páginas, el CTA debe estar visible en todas. <br> A menudo, el objetivo es que el usuario rellene un formulario, en cuyo caso, debemos tener en cuenta:
            <ul>
                <li class="green">Debe ser fácil de entender y presentar las instrucciones de forma clara y concisa.</li>
                <li style="background:#FFBABA">Indica educadamente los errores</li>
                <li class="red">Genera confianza</li>
                <li>Un formulario con menos campos obtiene mayor número de conversiones. Esa es la idea, pero sin pasarse.</li>
                <li>Es mejor que en la propia landing esté el formulario de contacto, en lugar de un enlace para acceder a él.</li>
                <li>En ocasiones, dependiendo de la casuística, debería incorporarse un teléfono. Por ejemplo, una clínica de desintoxicación de drogodependencia. Es un asunto muy personal, y no es tan fácil que la gente introduzca sus datos en un formulario de contacto. También en el caso de reservar mesa para un restaurante, mucha gente no se fiará de que la reserva se haya hecho realmente bien a través del formulario de contacto.</li>
                <li>El formulario de contacto es el único método que nos permitirá, mediante google analitics, obtener datos personales del cliete: desde dónde ha llegado a la página, dónde vive, cuando se ha conectado, sus  gustos y aficiones, etc. </li>
            </ul>
            <div style="text-align:center">
                
            <form action="#" >
                <input type="text" placeholder="Nombre" class="pp" style="background:url(img/erroricon.png) no-repeat right #FFBABA; padding:left:20px)"> <br>  
                <input type="text" placeholder="Apellidos" class="pp">   <br>   
                <input type="text" placeholder="Email" class="pp"> <br> 
                <input type="submit" value="CTA">
            </form>
            <p style="font-size:0.8em; color:red">Sus datos están seguros con nosotros</p>

            </div>

        </li>
        <li><strong>Imagen vendedora</strong>. Es la foto del producto o el servicio. También puede ser una foto que de algo que cree sensaciones positivas en el usuario. Es posible utilizar videos.
            <ol>
                <li>Numerosos estudios han demostrado que las fotos con personas convencen mejor.</li>
                <li>Diversos estudios han demostrado que las fotos de productos que se pueden rotar 360º consiguen aumentar significativamente las conversiones.</li>
                <li>Debe evocar sensaciones positivas en el visitante.</li>
                <li>Deben tener una clara relación con el mensaje que se desea transmitir.</li>
            </ol>

        </li>
        <li><strong>Beneficios</strong>.  Descritos en base a puntos muy concretos, ya que, el usuario en Internet no lee grandes cuerpos de texto.
            <ul>
                <li>Trata de vender lo que vas a poder hacer con el producto. Si estás vendiendo un taladro, haz incapie en los pedazo agujeros que podrás hacer en la pared.</li>
                <li>Los beneficios van enfocados a una audiencia concreta. Si escribes para todo el mundo, no conectarás con nadie.</li>
                <li>Los visitantes no leen, escanean. Teenlo en cuenta a la hora de redactar de forma concisa y en puntos clave, los beneficios de tu producto
                <ul>
                    <li style="list-style-image: url('img/check.png');">Beneficio 1</li>
                    <li style="list-style-image: url('img/check.png');">Beneficio 2</li>
                    <li style="list-style-image: url('img/check.png');">Beneficio 3</li>
                </ul>
            
                </li>
            </ul>
        </li>
    </ul>
           <img src="img/landing-page.jpg" alt="landing page" style="width:45%;vertical-align: top; display:inline-block">
                        <img src="img/fecundacion-in-vitro.png" style="width:45%;vertical-align: top; display:inline-block" alt="landing page">

    <h3>Microsite</h3>
    <p>Es un mini-site con 3 o 5 páginas que se centra en promocionar un producto, servicio o evento concreto. Por tanto, su vida generalmente se extiende durante un periodo de tiempo limitado. Debe tener un enlace al site principal.</p>
    <p>Tienen su propio dominio o subdominio.</p>
    <p>Están focalizadas en un único producto, objetivo o CTA (call to action) concreto. Para ello sus keywords has sido trabajadas para indexar esa temática.</p>
<img src="img/microsite.jpg" alt="microsite">
    <h3>Web</h3>
    <p>Contiene todos los productos y servicios de la empresa. A lo largo de las páginas que la contienen pueden tener varios CTA, aunque idealmente deberían estar focalizadas en uno.</p>





    <img src="img/landing-web-microsite.png" alt="landing web microsite">
    </article>

        <h3>Problemas de usabilidad</h3>
        <p>Las siguientes páginas han pagado por estar posicionadas en internet</p>

        <h3> Ley de Fitts</h3>
        <p>Demuestra que el tiempo necesario para alcanzar un objetivo visual con cualquier dispositivo apuntador manual depende del tamaño del objetivo y la distancia a la que se encuentre el puntero de él.</p>
 
        <h3>¿Dónde está el botón de compra?</h3>
<img style="width:100%" src="img/btn-compra.png" alt="ejemplo de página dónde no se encuentra nada">
<img style="width:100%" src="img/fabada4.svg" alt="ejemplo de página dónde el botón de compra se encuentra fácilmente">
  
        <h3>¿Dónde estoy?</h3>
        <img style="width:100%" src="img/btn-compra.png" alt="página dónde el usuario no sabe dónde estoy">
 
        <h3>Enlaces rotos</h3>
        <img style="width:100%" src="img/enlaces_rotos.svg" alt="un enlace patrocinado y roto">
        <img style="width:100%" src="img/renault_404.svg" alt="pagina de error 404 de renault">
    </article>
</section>

    </main>
<?php 
//});
//include $path."/diapos_theme/footer.php";
?>