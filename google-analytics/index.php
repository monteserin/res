<?php
/*$titulo_curso = "Curso de Google Analytics";

$root2 =  __DIR__;
$path = substr($root2, 0, strpos($root2, "curso")) . "/curso/";

$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : '';
include $path . "diapos_theme/head.php";
add_action('genesis_after_header', function () {
*/
?><section id="amor" class="verIndice" class="verIndice">
          <article id="inicio_del_documento" class="indice">

               <ol>
                    <li><a href="#quees">¿Qué es la analítica digital?</a></li>
                    <li><a href="#CRO">CRO</a></li>
                    <li><a href="#queEsgoogle">¿Qué es Google Analytics?</a></li>
                    <li><a href="#objetivos">Objetivos de negocio</a></li>
                    <li><a href="#metricas">Métricas</a></li>
                    <li><a href="#atribucion">Atribución</a></li>
                    <li><a href="#configuracion">Instalación de Google Analytics</a></li>
                    <li><a href="#calendario">Calendario</a></li>
                    <li><a href="#audiencia">Audiencia</a></li>

                    <li><a href="#adquisicion">Adquisición</a></li>
                    <li><a href="#comportamiento">Comportamiento</a></li>
                    <li><a href="#conversiones">Conversiones</a></li>

                    <li><a href="#vistas">Vistas</a></li>

                    <li><a href="#customizacion">Menú Customización</a></li>
                    <li><a href="#filtros">Filtros</a></li>
                    <li><a href="#paneles">Paneles</a></li>
                    <li><a href="#objetivos">Objetivos</a></li>
                    <li><a href="#compartirinformes">Compartir informes</a></li>
                    <li><a href="#tiemporeal">Tiempo real</a></li>
                    <li><a href="#personalizar-dashboards">Personalizar Dashboards</a></li>
                    <li><a href="#campaign">Campañas</a></li>

                    <li><a href="#cookies">Cookies</a></li>
                    <li><a href="#adwords">AdWords, Analytics y atribuciones</a></li>
               </ol>
          </article>
     </section>
     <main class="curso">
          <article id="quees">
               <div>
                    <h2>¿Qué es la analítica digital?</h2>
                    <p>La Analítica Digital es el análisis de los datos cualitativos y cuantitativos del negocio y la competencia para impulsar una mejora continua de la experiencia online que tienen tus clientes y potenciales clientes para que se traduzca en alcanzar los resultados deseados (on-line y off-line)</p>

                    <h3>¿Qué son los insights?</h3>
                    <p>Son las acciones que tomamos para mejorar las conversiones de nuestra web</p>
                    <p>Datos -> Información -> Análisis -> Insights</p>

                    <h3>¿Qué áreas trabaja la analítica?</h3>
                    <ol>
                         <li>Captación</li>
                         <li>Activación</li>
                         <li>Competencia</li>
                         <li>Retención</li>
                    </ol>
                    <p>Todas estas áreas giran en torno a la <strong>conversión</strong></p>
               </div>
          </article>

          <article>
               <div>
                    <h2>Enlaces oficiales</h2>

                    <ul>
                         <li><a href="https://analytics.google.com/analytics/academy/course/6" target="_blank">Guía para principiantes</a></li>
                         <li><a href="https://analytics.google.com/analytics/academy/course/7" target="_blank">Curso avanzado</a></li>
                    </ul>
               </div>
          </article>

          <article>
               <div>
                    <h2>Funnel de conversión (embudo de conversión)</h2>

                    <ol>
                         <li>Adquisición. Consiste en llamar la atención del usuario (mediante entradas del blog, publicidad, etc.)</li>
                         <li>Comportamiento. Consiste en lograr la interación del usuario con nuestro negocio.</li>
                         <li>Conversión. Consiste en lograr un objetivo de negocio (habitualmente, una venta).

                              <img src="img/analitics.png">

                         </li>
                    </ol>
               </div>
          </article>

          <article id="CRO">
               <div>
                    <h2>Proceso CRO (Optimización del ratio de conversión)</h2>
                    <img class="center" src="img/cro.jpg" alt="">
               </div>
          </article>
          <article id="queEsgoogle">
               <div>
                    <h2>¿Qué es Google Analytics?</h2>
                    <p>Es una herramienta gratuita con algunas opciones de pago que nos permite conocer el comportamiento de algunos usuarios de nuestra web (cuando hacen click, cuando solicitan información, cuando salen, cuando se registran, cuando compran, cuando repiten una visita, etc.).</p>
                    <p>Google bot es el nombre del rastreador de Google. Cuando Google Bot entra en la página se detona el tracking code de Google Analytics. Sin embargo, la mayoría de los trastreadores no ejecutan código Javascript, por lo que Google Analytics no puede saber cuando han entrado en la web. </p>

                    <h3>Conceptos</h3>
                    <ol>
                         <li><strong>Cuenta</strong>: Puede haber varios usuarios y sitios web vinculados a una cuenta. Podríamos decir que es una "unidad de negocio".</li>
                         <li><strong>Propiedad</strong>: es un sitio web o una app sobre la que se va a aplicar una medición. Una cuenta puede tener muchas propiedades. <br>Una propiedad puede estar asociada a varias cuentas.</li>
                         <li><strong>Vista</strong>: es un conjunto correspondientes a una parte de una propiedad. Por tanto, nos permiten crear subconjuntos de propiedades.</li>
                         <li><strong>Usuarios</strong>: personas que con su login/password tienen
                              determinados permisos, que pueden ser asignados a nivel de cuenta,
                              propiedad y vista.</li>
                    </ol>

                    <p>Todos estos conceptos se gestionan en desde el menú ADMINISTRADOR.</p>
               </div>
          </article>


          <article id="metricas">
               <div>
                    <h2>Métricas</h2>
                    <p>Las usamos para medir objetivos. Pueden ser:</p>
                    <ul>
                         <li>Cuantitativas</li>
                         <li>Cualitativas</li>
                    </ul>

                    <p><strong>KPI</strong>: Es es resultado de cruzar varias métricas (cuantitativas o cualitativas) para obtener resultados orientados al negocio.</p>
               </div>
          </article>


          <article id="atribucion">
               <div>
                    <h2>Atribución</h2>
                    <p>Consiste en asignarle un valor económico a
                         una conversión.</p>
                    <p>De esta forma, podemos conocer el valor económico logrado por las conversiones de cada canal de marketing, y se puede controlar / analizar el retorno de nuestra inversión en captación.</p>
               </div>
          </article>

          <article id="configuracion">
               <div>
                    <h2>Instalación de Google Analytics</h2>
                    <p>Necesitaremos una cuentra de google (una cuenta de gmail).</p>
                    <h3>Instalación Manual</h3>
                    <p>
                         Desde Google Analytics, obtendremos un tracking code que debemos pegar inmediatamente después de la apertura de la etiqueta body. Si estamos usando un CMS como Wordpress, Joomla, etc. bastará con pegar un USER-ID.
                    </p>

                    <p>Podemos comprobar que todo ha quedado bien configurado, mediante el <a href="http://www.gachecker.com/" target="_blank">Google Analytics Chcker.</a></p>
                    <p><a target="_blank" href="https://support.google.com/analytics/answer/1008080?hl=es">Documentación oficial</a></p>
                    <p>Mediante la modificación del código de seguimiento es posible recibir estadísticas de uso de motores de búsqueda que inicialmente google no tenía. Lo haremos mediante la inclusión del método pageTracker_addorganic('google', 'q') </p>


               </div>

          </article>


          <article id="calendario">
               <div>
                    <h2>Calendario</h2>
                    <p>En muchos menus hay disponible un calendario para seleccionar el rango de tiempo durante el cual se van a mostrar las estadísticas, e incluso poder comparar entre rangos de tiempo. Es posible, además hacer que el rango comience en ambos casos en el mismo día de la semana, por ejemplo, en lunes.</p>
                    <img src="./img/calendario-google-analytics.png" alt="calendario de google analytics">
               </div>

          </article>


          <article id="audiencia">
               <div>
                    <h2>Audiencia</h2>
                    <p>Estos informes nos permiten consultar datos de los visitantes de nuestra web:</p>
                    <ul>
                         <li>Género</li>
                         <li>Edad</li>
                         <li>De dónde son (Para poder ver estos datos, habrá que activar <span class="i">advertisement features</span>)</li>
                         <li>Sus intereses (Para poder ver estos datos, habrá que activar <span class="i">advertisement features</span>)</li>
                         <li>Si son nuevas visitas o usuarios que repiten</li>
                         <li>Qué tecnologías usan</li>
                    </ul>

                    <h3>Visión general</h3>
                    <p>Debajo de la gráfico podemos desplegar un panel para añadir anotaciones correspondientes a un día, en el que indicaremos por qué tuvimos más o menos visitas.</p>
                    <img src="./img/anotaciones-en-audiencia-google-analytics.png" alt="Anotaciones en la audiencia de Google Analytics">

                    <h4>Terminología</h4>
                    <ul>
                         <li>
                              <strong>Sessión</strong>: es un conjunto de actividades realizadas en la web. Termina: 

                              <ul>
                                   <li>Tras 30 minutos de inactividad</li>
                                   <li>A media noche</li>
                                   <li>Si el usuario llega al sitio a través de una campaña, la finaliza y luego entra a través de otra</li>
                              </ul>
</li>
<li><strong>Usuarios</strong>: son individuos que han tenido al menos una sesión en el sitio web.</li>
                         <li><strong>Nuevas sesiones</strong>: visitas provenientes de usuarios nuevos.</li>
                         <li><strong>Páginas Vistas</strong>: son el número de veces que las páginas con Tracking Code fueron mostradas a los usuarios. Incluye cuando la misma página es vista por el mismo usuario varias veces.</li>

                         <li><strong>Páginas/Sesión</strong>: es la media de páginas vistas en una sesión.</li>
                         <li><strong>Tasa de rebote</strong>: indica el porcentaje de personas que entran en nuestra página, no interactúan, y se van. <br>De 0 a 30, es muy buena, del 30 al 50 es normal, del 50 al 70 es mala y más del 70 es malísima. Este es el mejor indicador de si mi página funciona o no.</li>

                         <li><strong>Dimensiones</strong>: Es algo que describe a una entidad y se puede medir (zona geográfica, navegador, resolución de la pantalla, etc.).</li>
                         <li><strong>Valor</strong>: es la cuantificación numérica de una dimensión. Por ejemplo, mi altura.</li>
                         <li><strong>Métrica</strong>: Es alguna operación con los valores de una dimensión. Por ejemplo, algutra media de un grupo de personas. <a href="https://developers.google.com/analytics/devguides/reporting/core/dimsmets#cats=event_tracking" target="_blank">Aquí están todas.</a>
                         </li>
                         <li>
                              <strong>Segmento</strong>: es un subconjunto de datos. Se construye mediante filtros.
                              <p>Si voy a hacer una campaña de publicidad segmentada (por ejemplo usando facebook), es muy interesante conocer los rango de edades, gustos, sexo de mi audiencia, para dirigir la campaña a ese tipo de personas.</p>
                              <p>Ejemplo: Audiencia -> Información geográfica -> Ubicación -> Agregar segmento -> Puedo seleccionar un segmento ya creado o Crear segmento</p>


                         </li>
                    </ul>

<h4>Dimensiones</h4>

<div class="row">
<div class="col-lg-8">
<p>Nos permiten visualizar nuestra audiencia en función de los criterios marcados.</p>
<p>Tras pulsar en una de estas dimensiones, podremos ver información más detallada pulsando sobre el link full report.</p>
<img class="img-fluid" src="./img/google-analytics-full-report.png" alt="Google Analytics full report">
</div>
<div class="col-lg-4">
     <img class="img-fluid" src="./img/google-analytics-dimensiones.png" alt="Google anlytics dimensions">
</div>

</div>

<h5>Full report</h5>

<p>Este informe muestra información de la dimensión seleccionada con varias columnas con sus métricas.</p>

<img src="./img/google-analytics-full-report-2.png" alt="Google Analytics Full Report">

<p>Es posible cambiar las métricas que deseamos visualizar pulsando en los siguientes enlaces:</p>

<ul>
     <li>Summary: información general.</li>
     <li>Site Usage: información de comportamiento.</li>
     <li>Goal Set: información acerca de los objetivos marcados. Sólo aparecerá si he configurado algún objetivo.</li>
     <li>E-commerce: información de las transacciones que han tenido lugar en mi sitio web, si es que he hecho la configuración necesaria para ello.</li>
</ul>

<p>Es posible añadir una segunda dimensión al informe, para ver los resultados en función de dos criterios. En este caso he filtrado datos por país y dispositivo móvil:</p>
<img src="./img/dos-dimensiones.png" alt="muestra de datos atendiendo a dos dimensiones">

<p>Es posible filtrar los datos obtenidos utilizando el cuadro de filtro:</p>
<img src="./img/google-analytics-filtrar.png" alt="Filtrar en Google Analytics">

<p>Podemos establecer varios modos de visualización de los datos:</p>
<img src="./img/modos-de-visualizacion-de-los-datos.png" alt="Modos de visualización de los datos en Google analytics">

<p>La comparision View compara los datos con el promedio del sitio web.</p>
<img src="./img/comparision-view.png" alt="comparision view">

<h3>Active Users</h3>
<p>Aquí podremos ver cuantos usuarios han tenido una sesión en 1, 7, 14 o 28 días.</p>

                    <h3>Información Geográfica (Geo)</h3>

                    <h4>Ubicación (Location)</h4>

                    <p>Hay que fijarse en los lugares:
                         
                    <ul>
                         <li>que tienen poco tráfico pero un alto porcentaje de conversión, ya que estos son buenos sitios para difundir nuestro contenido.</li>
                         <li>que tienen un alto porcenajte de rebote, para intentar adaptarnos a ellos.</li>
                    </ul>
                    </p>
             <h3>Mobile</h3>
             <h4>Overview</h4>
             <p>Hay que fijarse en sí el porcentaje de rebote se dispara en mobile. Esto sería señal de que nuestro sitio web no está bien adaptado al móvil. </p>
               </div>
          </article>
          <article id="adquisicion">
               <div>
                    <h2>Adquisición</h2>
                    <p>Aquí podremos consultar de dónde salen las visitas (redes sociales, mailing, visitas directas, búsquedas orgánicas, etc.)</p>

                    <h3>Fuentes</h3>
                    <ul>
                         <li>Organic Search ( búsquedas en google).</li>
                         <li>Direct (o none, visita directa, bien por introducir la url en el navegador o por llegar a través de un marcador).</li>
                         <li>Social (redes sociales).</li>
                         <li>Referral (tráfico que viene desde otra web).</li>
                         <li>CPC (tráfico que viene de una campaña de pago).</li>
                         <li>Email (tráfico que viene de una campaña de email marketing)</li>
                    </ul>
                    <h4>Channels</h4>
                    
                    <h3>Ver que enlaces externos nos están aportando tráfico</h3>
                    <p>Adquisición ⟶ Overview ⟶ Referral. Podemos establecer como dimensión secundaria la "ruta de referencia" para ver desde que ruta nos están enlazando.</p>


                    <h3>Ver cuales son las páginas de más éxito de mi web</h3>
                    <p>Aquí van un par de formas</p>
                    <ol>
                         <li>Adquisición ⟶ Todo el tráfico ⟶ Fuente/Medio ⟶ Otros ⟶ Adquisición ⟶ Página de destino</li>
                         <li>Adquisición ⟶ Search Console ⟶ Páginas de destino. Aquí podemos ver el CTR (porcentaje de gente que hace click, o interactúa con la web). Si tenemos un alto CTR, pero un porcentaje de sesiones bajo, significa que la gente que llega a la página interactúa con ella, pero que llegan pocas personas. Habrá que mejorar el SEO.</li>
                    </ol>
                    <h3>Ver qué páginas tienen un mayor porcentaje de rebote</h3>
                    <p>Adquisición ⟶ Todo el tráfico ⟶ Canales ⟶ Otros ⟶ Página de destino) </p>
                    <h5>Para qué usar el informe de páginas de destino</h5>
                    <ol>
                         <li>Para ver por dónde entran las visitas.</li>
                         <li>Para identificar las páginas de destino con alto porcentaje de abandonos.</li>
                    </ol>
                    <h3>Ver cuales son las páginas más compartidas en redes sociales</h3>
                    <p>Adquisición ⟶ Social ⟶ Visión general ⟶ Páginas ⟶ URL compartida</p>

     <h4>Source/Medium</h4>
     <p><span class="i">Source</span> ofrece información ampliada acerca del <span class="i">Medium</span>.</p>
     <p>Por ejemplo, si el <span class="i">Medium</span> es referral, el <span class="i">Source</span> será la url del medio.</p>
     <p>Necesitamos tráfico de calidad, que llegue a nuestra web y no rebote. Podemos comprobar la calidad del source/medium de la siguiente forma:</p>

     <ul>
          <li>Establecemos la vista <span class="bold">Comparison</span></li>
          <li>Marcamos la opción <span class="i">Bounce rate</span> en la casilla (compared to site average)</li>
     </ul>
<img src="./img/source-medium-bounce-rate.png" alt="source/medium bounce rate">

                   
               </div>
          </article>

          <article id="comportamiento">
               <div>
                    <h2>Comportamiento</h2>
                    <p>Aquí podremos consultar cómo interactúan los usuarios con nuestra web:</p>

                    <ul>
                         <li>Sus páginas de entrada y salida</li>
                         <li>Cuales han visitado</li>
                         <li>Con una implementación adicional podremos ver incluso que es lo que los usuarios han buscado en la web y cómo han interactuado con algunos elementos específicos.</li>
                    </ul>

                    <p>Aquí es muy útil la pestaña Velocidad del sitio -> Sugerencias de velocidad, que nos da informes sacados de Google Page Speed.</p>
                    <h4>Flujo de comportamiento</h4>
                    <p>Muestra un gráfico con la forma que tienen los usuarios de interactuar con la web.</p>
                    <h4>Velocidad del sitio</h4>
                    <h5>Descripción general</h5>
                    <p>Más de ocho segundos de tiempo de carga puede derivar en un alto porcentaje de abandono de l la web.
                         <h5>Sugerencias de velocidad</h5>
                         <p>Podemos ver algunas sugerencias de mejora en la velociad de carga.</p>
                         <h5>Eventos</h5>
                         <p>Son interacciones del usuario con el contenido (descarga, clicks, reproducciones de un video, etc.). Los eventos pueden generar alertas personalizadas o automáticas.</p>
                         <p>Un evento tiene los siguientes componentes:</p>
                         <ul>
                              <li>Categoría</li>
                              <li>Acción</li>
                              <li>Etiqueta (opcional, pero recomendado)</li>
                              <li> Valor (opcional)</li>
                         </ul>
                         <h6>Eventos de intelligence</h6>
                         <p>Generan aletras cuando se producen. Estas pueden ser.</p>
                         <ol>
                              <li>automáticas: Se generan al producirse un cambio significativo en las métricas de uso o tráfico.</li>
                              <li>automáticas de AdWords: Se generan al producirse un cambio significativo en el tráfico de adWords</li>
                              <li>Personalizadas: Se generan cuando el tráfico alcanza la cantidad fijada.</li>
                         </ol>

                         <h3>Content Drilldown (agrupación de contenido)</h3>
                         <p>Permite establecer agrupaciones temáticas del contenido de la web para ver que rendimiento está ofreciendo.</p>
               </div>

          </article>


          <article>
               <div>
                    <h2 id="conversiones">Conversiones</h2>

                    <p>Aquí podremos consultar cuantos objetivos del negocio hemos conseguido.</p>
                    <p>Se cumple un objetivo (también llamado conversión o goal) cada vez que el usuario hace algo que queremos que haga (compra, se registra, se suscribe...). </p>



                    <p>Se añaden desde la página de configuración del perfil.</p>
                    <p>Datos a rellenar</p>
                    <ol>
                         <li>Nombre del tipo (head match)</li>
                         <li>Nombre del archivo (sin el dominio)</li>
                    </ol>
                    <p>Ejemplo de goal cuando no cambia la url:</p>
                    <pre><code>&lt;a title=&#x201d;Aprende a ganar dinero jugando al Poquer con Educapoker la mejor escuela de poker online&#x201d; onclick=&#x201d;pageTracker._trackPageview(&#x2018;/goal/educapoker&#x2019;);return true&#x201d; href=&#x201d;http://www.educapoker.com/invitar/hashito&#x201d;&gt;Educapoker&lt;/a&gt;
</code></pre>
               </div>
          </article>

          <article>
               <h2>Admin</h2>
               <p>Aquí podremos gestionar:</p>
               <ul>
                    <li>Permisos de los usuarios.</li>
                    <li>Tracking code.</li>
                    <li>Vistas</li>
                    <li>Filtros</li>
               </ul>

          </article>
          <article>
               <div>
                    <h2>Vistas</h2>


                    <ol>
                         <li>Admin -> Columna View -> View Settings -> Create new View -> Reporting View Name -> Escribo el nombre de la vista y su franja horaria. </li>
                         <li>Volvemos a acceder a la vista recien creada y marcamos Exclude all hits from knoww bots and spiders</li>
                         <li>Seleccionamos la vista recién creada -> accedemos a filters -> Add Filter
                              <ol>
                                   <li>Llamaremos al filtro: Excluir tráfico interno.</li>
                                   <li>Filter type: Exclude</li>
                                   <li>traffic from the IP addresses</li>
                                   <li>that are equal to</li>
                                   <li> En la página web <a href="https://www.cual-es-mi-ip.net/" target="_blank">cual es mi ip</a> podré conocer la ip desde la que me conecto y excluirla.</li>
                              </ol>
                         </li>
                    </ol>
                    <p>Tras haber creado un filtro, podemos ir a cualquier vista -> filters -> add new filter -> y aplicar un filtro ya creado.
                    </p>

                    <p>Es posible recuperar una vista borrada si lo hacemos en los 35 días siguientes a su eliminación.</p>
                    <p>Es importante mantener siempre una vista sin filtrar para asegurarnos de que siempre vamos a poder acceder a los datos originales.</p>

                    <p>En casos de tener varios filtros en una vista, estos serán aplicados secuencialmente, desde el primero (el de más arriba) hasta el último.</p>
               </div>
          </article>

          <article id="customizacion">
               <div>
                    <h2>Menú Customización</h2>
                    <p> Permite combinar una métrica con una dimensión para mostrar un resultado.</p>
               </div>
          </article>


          <article id="filtros">
               <div>
                    <h2>Filtros</h2>
                    <p>Me permiten obtener información sólo de la gente que se conecta a través del móvil, de cierta zona geográfica, eliminar la IP de mi empresa del conteo de visitas, etc.</p>
                    <p>Cuidado al aplicar un filtro, porque no son reversibles. Debo aplicar un filtro contra un perfil copiado. Por tanto, es importante mantener siempre un perfil sin filtrar. Esto es así porque los datos brutos no pueden ser reprocesados, y manteniendo un perfil sin filtrar nos aseguramos de poder acceder a los datos originales.</p>
                    <p>Los nuevos perfiles no son totalmente operativos (y por tanto fiables) hasta pasadas 24 horas.</p>

                    <p>Los filtros se ejecutan en el orden en que aparecen.</p>
                    <p>Menú admin -> Account -> All Filters</p>


                    <p>Adquisición -> Todo el tráfico -> Canales -> En el cuadro de búsqueda introduzco google.com. También puedo pulsar en avanzado para afinar el filtro. Podemos añadir expresiones regulares como google.comxpablomonteserin.com (que vengan de google.com o de pablomonteserin.com)</p>
                    <p><a target="_blank" href="https://www.cheatography.com/jay-taylor/cheat-sheets/google-analytics-regular-expressions/">Enlace a chuletas de expresiones regulares</a></p>
                    <p><a target="_blank" href="http://rubular.com/">Es posible probar la expresión regular en este enlace</a></p>
                    <p>Expresión regular para eliminar una IP de los análisis:</p>
                    <pre><code>^198\.86\.220\.(1-9)|10$</code></pre>
                    <p><a target="_blank" href="http://www.analyticsmarket.com/freetools">En este enlace hay varias herramientas para usar analytics.</a></p>
                    <h3>Para qué sirve un perfil</h3>
                    <ol>
                         <li>Para mirar más de cerca el tráfico a Subdomino específico</li>
                         <li>Para limitar el acceso de un usuario a un segmento de datos</li>

                         <li>Para mirar más de cerca el tráfico en una o varias páginas.</li>
                    </ol>
                    <h3>Para qué sirven los filtros</h3>
                    <ol>
                         <li>Informe sobre sólo un subdominio o directorio</li>
                         <li>Excluir la visita de una dirección IP en particular</li>
                         <li>Incluir sólo el tráfico proveniente de una campaña en particular</li>

                         <li>Reemplazar complicadas URL de la página por cadenas de texto legibles</li>
                    </ol>
               </div>
          </article>

  

          <article id="objetivos">
               <div>
                    <h2>Objetivos</h2>
                    <p>Administrador -> panel ver -> Objetivos -> Crear nuevo objetivo -> Descripción del objetivo. La opción más típica es destino, donde generalmente pondremos la url de una página de gracias (por suscribirse, compra, etc.)</p>
               </div>
          </article>

          <article id="compartirinformes">
               <div>
                    <h2>Compartir informes</h2>
                   
<p>Tenemos un enlace para hacerlo en la esquina superior izquierda de la mayoría de las secciones: Correo electrónico.</p>

<img src="./img/google-analytics-compartir-informe.png" alt="Google Analytics - compartir informe">

<ul>
     <li><span class="bold">Save</span>: permite crear un link al informe.Esta información estará en el menú <span class="i">Customisation ⟶ Custom reports, en la columna de navegación de la izquierda.</li>
     <li><span class="bold">Export</span>: permite exportar el informe a formato PDF o SVG.</li>
     <li><span class="bold">Share</span>: permite mandar un email con una copia del informe o incluso programar el envío regular de estos mails.</li>
     <li><span class="bold">Edit</span>: permite configurar la información que se mostrará en el informe, añadiendo filtros, vistas, etc. Esta información estará en el menú <span class="i">Customisation ⟶ Custom reports, en la columna de navegación de la izquierda.</span></li>
</ul>

<p>Podemos poner el cursor sobre el iconito verde para saber el tamaño de la muestra a que hace referencia el informe.</p>
<p>Aquí, además podemos alternar entre <span class="i">Greater Precision</span> o <span class="i">Faster Response</span> para determinar a que le damos prioridad, si a una respuesta rápida o a un informe preciso.</p>
<img src="./img/porcentaje-de-la-muestra.png" alt="Porcentaje de la muestra del informe">

               </div>
          </article>
          <article id="tiemporeal">
               <div>
                    <h2>Tiempo Real</h2>
                    <p>Permite ver en tiempo real:</p>
                    <ol>
                         <li>Número activo de visitantes</li>
                         <li>Páginas vistas por minuto</li>
                         <li>Páginas vistas por segundo</li>
                    </ol>
               </div>
          </article>

          <article>

          <div>
               <h2 id="personalizar-dashboards">Personalizar Dashboards</h2>

               <p>Customisation ⟶ Dashboards ⟶</p>

               <ul>
                    <li>Add Widget ()</li>
                    <li>Customise Dashboard (establece la distribución de los elementos del Dashboard).</li>
               </ul>
               <p>Es posible arrastrar y soltar diferentes widgets dentro de un dashboard.</p>

               <p>Un dashboard puede ser público o privado.</p>
               <ul>
                    <li>Si es privado, sólo lo podré ver yo.</li>
                    <li>Si es público, será compartido por los diferentes usuarios de la vista. Si los otros usuarios modifican la visualización de este dashboard, no te afectará a tí.</li>
               </ul>

               <div class="row">

               <div class="col-md-6">
               <p>La opción <span class="i">Share template link</span> permite exportar el escritorio, sin sus asociados.</p>
               <p>Google cuenta con un repositorio de escritorios exportados por diferentes usuarios. Nosotros también podemos importarlos o exportar los nuestros.</p>
               </div>
               <div class="col-md-6">
               <img class="img-fluid" src="./img/exportar-repositorio-a-google.png" alt="exportar dashboard a Google">

               </div>
               </div>
             
               
               <h3>Paneles</h3>
                    <p>Contienen bloques informativos que he ido seleccionando al gusto.</p>
                    <p>En muchas de las secciones de Google analytics tengo el botón "add to dashboard" o "añadir al panel", que me permitirá añadir una sección nueva al panel deseado.</p>

          </div>
          </article>

<article>
<div>

<h2 id="campaign">Campañas</h2>
<h3>Tipos de campañas</h3>

<ol>
<li>Publicidad textual, mostrando los anuncios entre los resultados orgánicos de Google.</li>
<li>Banners, colocados estratégicamente en ciertas páginas web.</li>
<li>Banners, colocados en redes sociales.</li>
<li>De Email marketing.</li>

</ol>
<h3>Campaign tags</h3>
<p>Son pequeñas cantidades de información añadidas a una URL, que incluirán datos para poder hacer el seguimiento de la campaña.</p>

<p>Campaign Tags o variables de seguimiento:</p>
<ul>
     <li>
          Requeridos:
          <ul>
          <li><strong>utm_source</strong> (source, citysearch)<</li>
                         <li><strong>utm_medium</strong> (cpc, banner, email)</li>
                         <li><strong>utm_campaign</strong>: nombre de la campaña.</li>

          </ul>
     </li>
     <li>Opcionales:
          <ul>
               <li><strong>utm_content</strong>: podremos indicar versiones del anuncio.</li>
               <li><strong>Term</strong>: identifica las keywords para campañas de pago.    </li>
          </ul>

     </li>
</ul>

                    <p>Para añadir una campaña iremos a <a target="_blank" href="https://www.google.es/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0CCEQFjAAahUKEwjOpbLh14bJAhUBoRoKHb4UAYo&url=https%3A%2F%2Fsupport.google.com%2Fanalytics%2Fanswer%2F1033867%3Fhl%3Den&usg=AFQjCNEGc4kWvNlrKH_08vuzNFKnG25hPg&sig2=Nuv3F1uIbNwtWl1UYCLxSQ">URL Builder</a>. Aquí obtendremos será un link rastreable mediante el que obtendremos información de la persona que ha hecho click.</p>
               
                    <h4>Virtual Page Views</h4>
                    <p>Permiten hacer el seguimiento de una visita que no genera visita de página.</p>
                    <p>Por ejemplo, no podemos introducir el código de google analytics dentro del código fuente de un pdf que el usuario está visualizando, pero sí podemos crear una url virtual.</p>
                    <p>También se aplica cuando no se genera una url distinta al acceder a un contenido (lo cual ocurre cuando usamos AJAX).</p>
                    <p>Las funciones “_trackPageview” y "_trackEvent()" de Google Analytics nos soluciona poder seguir todos los eventos dentro de nuestro Site que no tengan urls distintas, generando páginas virtuales.</p>
                    
                    </div>
</article>
          <article id="cookies">
               <div>
                    <h2>Cookies </h2>
                    <ol>
                         <li><strong>First party cookies</strong>: sólo están asociadas al dominio que las genera. Son las que usa Google Analytics.</li>
                         <li><strong>Third party cookies</strong>: nos permite saber, por ejemplo desde que web el usuario accede a nuestra web. Están presentes incluso cuando el usuario no está en nuestra web. Pueden ser añadidas, modificadas y eliminadas desde diferentes dominios, por lo que son menos fiables.</li>
                         <li><strong>utma</strong>: genera un ID de usuario único, que se utiliza para hacer recuento de cuantas veces visita el sitio un usuario. También registra cuando fue la primera y última vez que visitó la web.</li>
                         <li><strong>utmz</strong>: Se encarga de registrar el origen de un usuario</li>
                    </ol>
                    <p>Google analytics utiliza las cookies First party cookies, utmba, utmb y utmz</p>
                    <p>Otra clasificación de las cookies:</p>
                    <ol>
                         <li>Cookies temporales: se eliminan al cerrar el navegador.</li>
                         <li>Cookies persistentes</li>
                    </ol>
               </div>
          </article>

          <article id="adwords">
               <div>
                    <h2>AdWords, Analytics y atribuciones</h2>
                    <p><strong>Atribuciones</strong>: Define a qué ruta te conversión (un formulario de contacto, una newsletter, un banner en una red social), se debe la consecución de una conversión. <a target="_blank" href="https://support.google.com/analytics/answer/1662518?hl=es">Ver un ejemplo de modelo de atribución</a>.</p>
                    <p>Todas las fuentes de tráfico, sobreescriben al tráfico directo. Es decir, si accedo a una web escribiendo su url en google, y luego (o antes) llego a la web desde otra fuente (correo, web...) la adquisición se atribuye a esta fuente.</p>
                    <p>Los datos referentes a desde dónde accedo a una web son almacenados en las cookies durante 6 meses. Este valor se puede modifcar.</p>
                    <p>La cookie en Adwords dura 1 mes y no se puede modificar.</p>

                    <p>Las conversiones mostradas en adwords y en analytics son diferentes debido la forma de contabilizarlas es diferente.</p>
                    <p>Si el primer clic viene de una palabra de cpc y el clic de la conversion viene de una segunda palabra de cpc para adwords la conversion es asignada a la primera palabra , cuando para analytics lo es para la segunda.</p>

                    <p>Evitar que google analytics asigna las conversiones a la ultima fuente de tráfico:</p>
                    <ol>
                         <li>Añadimos este código a la url: miweb.com/index.html?<strong>utm_nooverride=1</strong></li>
                    </ol>
                    <h5>Google Analytics cataloga un visitante como nuevo a pesar de que ya ha estado en la web</h5>
                    <ol>
                         <li>El visitante a bloqueado las cookies.</li>
                         <li>El visitante ha borrado las cookies desde la primera visita.</li>
                         <li>El visitante usa un navegador diferente del de la primera visita.</li>
                    </ol>
                    <h5>Visitas CPC en Google Analytics</h5>
                    <p>El parámetro gclid se agrega automáticamente mediante la función de etiquetado automático de Google AdWords para realizar un seguimiento de los datos de campañas, de medios y de palabras clave en Analytics. Si se borra este parámetro o el etiquetado automático no está habilitado las visitas de google CPC no se verán en Analytics.</p>
                    <p>Por otra parte, si el visitante tiene deshabilitado Javascript o ha bloqueado las cookies estos clicks no se verán reflejados en Analytics. Tener en cuenta que un click de Adwords no es lo mismo que una visita de Analytics.</p>

                    <h3>Ventajas de vincular nuestra cuenta de AdWords con nuestra cuenta de Google Analytics</h3>
                    <ol>
                         <li>Google Analytics podrá diferenciar entre Google CPC y visitas no CPC.</li>
                         <li>Podremos ver los datos de AdWords en nuestra cuenta de Google Analytics</li>
                         <li>Google Analytics podrá calcular el ROI de nuestras campañas de AdWords.</li>
                    </ol>
               </div>
          </article>
     </main>

<?php
// });
// include $path . "/diapos_theme/footer.php";
?>