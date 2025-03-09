<?php 
/*
$titulo_curso="SQL";
$meta_description = 'Guía super ágil para dar tus primeros pasos en las consutas SQL';
$img_curso = '';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
*/
  ?>
<section id="amor" class="verIndice">
<?php // drawH1WithImg() ?>

				<article id="inicio_del_documento" class="indice">
          <h2>Índice del curso de Bootstrap 4</h2>
	<ol>
  <li><a href="#introduccion">Introducción</a></li>  

			</ol>
</article>
</section>
<main class="curso">

<article>
  <div>
  <h2 id="que_es_una_bd">¿Qué es una base de datos?</h2>

<p>Una base de datos es una colección de información organizada de forma que un programa informático pueda seleccionar acceder a los fragmentos de datos que necesite.</p> 

<p>Una base de datos es un sistema de archivos electrónico. </p>

<p>Las bases de datos tradicionales se organizan por campos, registros y archivos.</p>

  </div>

</article>

<article>
<div>
  <h2>Sistema de Gestión de Bases de Datos</h2>

  <p>Un Sistema de Gestión de Bases de Datos (SGBD) es una aplicación comercial que permite construir y gestionar bases de datos, proporcionando al usuario de la Base de Datos las herramientas necesarias para realizar, al menos, las siguientes tareas:</p>

  <ul>
    <li>Definir las estructuras de los datos.</li>
    <li>Manipular los datos. Es decir, insertar nuevos datos, así́como modificar, borrar y consultar los datos existentes.</li>
    <li>Mantener la integridad de la información.</li>
    <li>Proporcionar control de la privacidad y seguridad de los datos en la Base de Datos, permitiendo sólo el acceso a los mismos a los usuarios autorizados.</li>
  </ul>
  </div>

  <p>Algunos ejemplos de SGBD son Mysql, Oracle, Microsoft Access.</p>
</article>


<article>
<div>
  <div>

<h2>Tipos de bases de datos</h2>    
    <p>Existen básicamente 4 tipos de bases de datos:</p>

   <ul>
     <li>Bases de Datos Jerárquicas.</li>
     <li>Bases de Datos en Red.</li>
     <li><span class="font-weight-bold">Bases de Datos Relacionales</span>.</li>
     <li><span class="font-weight-bold">Bases de Datos no relacionales</span>.</li>
   </ul> 



<

<p>Para gestionarlas se utiliza el lenguaje SQL o BSON (Ficheros JSON).</p>

  </div>
</article>


<article>
<div>
<h2>Bases de datos relacionales</h2>

<p>En una base de datos relacional, cada fila en una tabla es un registro con una ID única, llamada clave. Las columnas de la tabla contienen los atributos de los datos y cada registro suele tener un valor para cada atributo</p>

</div>


<h2>Como no estructurar una base de datos relacional:</h2>
[copiar datos de la excel]

<ul>

<li>No sabemos si el Julio de la primera fila es el Julio de la segunda.</li>
<li>Si hubiese que modificar el nombre de un Autor, habría que hacerlo en todas las filas en las que aparece. Si no se hace correctamente habrá discrepancias y no tiene sentido tener la información de los autores repetida.</li>
<li>Si un libro pasase a ser distribuído por otra editorial, habría que cambiar también la dirección a la que está vinculada.</li>
<li>El precio final se puede calcular fácilmente al restar el descuento del precio. Si almacenamos el precio final en la base de datos, podemos almacenarlo incorrectamente y dar lugar a discrepancias. Se podría decir que precio final tiene información duplicada.</li>

</ul>

<h2>Cómo estructurar una base de datos relacional:</h2>
[copiar datos de la excel]
</article>


<article>
<h2>Bases de datos no relacionales</h2>


<p>No tienen un identificador que sirva de relación entre un conjunto de datos y otros. La información se organiza normalmente mediante documentos independientes.</p>

<p>MongoDB es la base de datos no relacional más extendida.</p>
</article>

<article>

<h2>Almacenar datos en tablas vs ficheros</h2>

<img src="img/almacenaje-datos-bd.png" alt="">
</article>

<article>
  
  <div>
    
    <h2>Definición de Modelo entidad-relacion</h2>

    <p>El modelo de datos entidad-relación (E-R) está basado en una percepción del mundo real basada en  objetos básicos, llamados entidades, y sus relaciones.</p>

  <h3>Entidades</h3>
    <p>Una entidad es una «cosa» u «objeto» en el mundo real que es distinguible de otros objetos.</p>
    <p>Por ejemplo, cada persona es una entidad, y sus respectivas cuentas bancarias también pueden ser consideradas entidades.</p>

    <h3>Atributos</h3>

    <p>Las entidades se describen en una base de datos mediante un conjunto de atributos.</p>

<p>Por ejemplo, los atributos número-cuenta y saldo describen una cuenta particular de un banco y pueden ser atributos del conjunto de entidades cuenta. Análogamente, los atributos <span class="font-italic">nombre-cliente</span>, <span class="font-italic">calle-cliente</span> y <span class="font-italic">ciudad-cliente</span> pueden describir una entidad cliente.</p>

<p>Un atributo extra, <span class="font-italic">id-cliente</span>, se usa para identificar unívocamente a los clientes (dado que puede ser posible que haya dos clientes con el mismo nombre, dirección y ciudad).</p> 

<p>Se debe asignar un identificador único de cliente a cada cliente.</p>

<h3>Relaciones</h3>

<p>Una relación es una asociación entre varias entidades.</p>
<p>El conjunto de todas las entidades del mismo tipo, y el conjunto de todas las relaciones del mismo tipo, se denominan respectivamente conjunto de entidades y conjunto de relaciones.</p>

<h3>Diagrama del modelo entidad-relación</h3>

<p>La estructura lógica general de una base de datos se puede expresar gráficamente mediante un diagrama ER, que consta de los siguientes componentes:</p>

<ul>
  <li>Rectángulos, que representan conjuntos de entidades.</li>
  <li>Elipses, que representan atributos.</li>
  <li>Rombos, que representan relaciones entre conjuntos de
entidades.</li>
<li>Líneas, que unen los atributos con los conjuntos de entidades y los conjuntos de entidades con las relaciones.</li>
</ul>

<p>Cada componente se etiqueta con la entidad o relación que representa.</p>

<p>El diagrama E-R indica que hay dos conjuntos e entidades
cliente y cuenta, con los atributos descritos anteriormente.</p>

<img src="./img/e-r.svg" alt="">


  </div>
</article>

<article>
  <div>
    <h2>Ejercicio: <span class="text-primary">entidad-relación</span></h2>

    <p>Hacer el diagrama e-r de: <span class="font-weight-bold">usuario - asignaturas - temario</span></p>
  </div>

</article>

<article>
  <div>
  <h2>Definición de Modelo relacional</h2>

  <p>En el modelo relacional se utiliza un grupo de tablas para representar los datos y las relaciones entre ellos.</p>

<p>Cada tabla está compuesta por varias columnas, y cada columna tiene un nombre único.</p>
<p>En la figura siguiente se presenta un ejemplo de base de datos relacional consistente en tres tablas:</p>

<ul>
  <li>Clientes del banco.</li>
  <li>Cuentas.</li>
  <li>Cuentas de cada cliente</li>
</ul>


<table>
  <tr>
    <th>id-cliente</th>
    <th>nombre-cliente</th>
    <th>calle-cliente</th>
    <th>ciudad-cliente</th>
  </tr>
  <tr>
    <td>19.283.746</td>
    <td>González</td>
    <td>Arenal</td>
    <td>La Granja</td>
  </tr>
  <tr>
    <td>01.928.374</td>
    <td>Gómez</td>
    <td>Carretas</td>
    <td>Cerceda</td>
  </tr>
  <tr>
    <td>67.789.901</td>
    <td>López</td>
    <td>Mayor</td>
    <td>Gijón</td>
  </tr>
  <tr>
    <td>18.273.609</td>
    <td>Abril</td>
    <td>Preciados</td>
    <td>Oviedo</td>
  </tr>
  <tr>
    <td>32.112.312</td>
    <td>Santos</td>
    <td>Carretas</td>
    <td>Gijón</td>
  </tr>
  <tr>
    <td>33.666.999</td>
    <td>Paco</td>
    <td>Ramblas</td>
    <td>León</td>
  </tr>
  <tr>
    <td>01.928.374</td>
    <td>Gómez</td>
    <td>Carretas</td>
    <td>Gijón</td>
  </tr>
</table>


<table>
  <tr>
    <th>número-cuenta</th>
    <th>saldo</th>
  </tr>
  <tr>
    <td>C-101</td>
    <td>500</td>
  </tr>
  <tr>
    <td>C-215</td>
    <td>700</td>
  </tr>
  <tr>
    <td>C-102</td>
    <td>400</td>
  </tr>
  <tr>
    <td>C-305</td>
    <td>350</td>
  </tr>
  <tr>
    <td>C-201</td>
    <td>900</td>
  </tr>
  <tr>
    <td>C-217</td>
    <td>750</td>
  </tr>
  <tr>
    <td>C-222</td>
    <td>700</td>
  </tr>
</table>

<table>
  <tr>
    <th>id-cliente</th>
    <td></td>
  </tr>
  <tr>
    <td>19.283.746</td>
    <td>C-101</td>
  </tr>
  <tr>
    <td>01.928.374</td>
    <td>C-215</td>
  </tr>
  <tr>
    <td>67.789.901</td>
    <td>C-102</td>
  </tr>
  <tr>
    <td>18.273.609</td>
    <td>C-305</td>
  </tr>
  <tr>
    <td>32.112.312</td>
    <td>C-201</td>
  </tr>
  <tr>
    <td>33.666.999</td>
    <td>C-217</td>
  </tr>

    <tr>
    <td>01.928.374</td>
    <td>C-222</td>
  </tr>
</table>
</div>
</article>


<article>
  <div>
    <h2>Ejercicio:</h2>
    <p>Crear las tablas para Usuario - Asignaturas - Temario</p>
  </div>
</article>
<article>
  <div>
    
    <h2>Integridad y consistencia de los datos</h2>


    <p>El término integridad de datos se refiere la correctitud y completitud de la informacion en una base de datos.</p>

<p>Cuando los contenidos se modifican con sentencias INSERT, DELETE o UPDATE. La integridad de los datos almacenados puede perderse de muchas maneras diferentes.</p>

<p>Pueden añadirse datos no válidos a la base de datos, tales como un pedido que especifica un producto no existente.</p>

<p>Pueden modificarse datos existentes tomando un valor incorrecto, como por ejemplo si se reasigna un vendedor a una oficina no existente.</p>

<p>Los cambios pueden ser aplicados parcialmente, como por ejemplo si se añade un pedido de un producto sin ajustar la cantidad disponible para vender.</p>

<h3>Tipos de integridades y controles</h3>

<h4>Integridad de dominio</h4>

<p>Es la validez de las restricciones que debe cumplir una determinada columna de la tabla.</p>

<ul>
  <li>Datos Requeridos: establece que una columna tenga un valor no NULL. Se define efectuando la declaración de una columna como NOT NULL cuando al crear la tabla, como parte de la sentencia CREATE TABLE.</li>

<li>Chequeo de Validez: cuando se crea una tabla cada columna tiene un tipo de datos y el DBMS asegura que solamente los datos del tipo especificado sean ingresados en la tabla.</li>


</ul>


<h4>Integridad de entidad</h4>

<p>Establece que la clave primaria de una tabla
debe tener un valor único para cada fila de la tabla; si no, la base de datos perderá su integridad.</p>

<p>Se especifica en la sentencia CREATE TABLE.
El DBMS comprueba automáticamente la unicidad del valor de la clave primaria con cada sentencia INSERT Y UPDATE.</p>

<p>Un intento de insertar o actualizar una fila con un valor de la clave primaria ya existente fallará.</p>


<h4>Integridad referencial</h4>

<p>Asegura la integridad entre las claves foráneas y
primarias (relaciones padre/hijo).</p>

<p>Existen cuatro actualizaciones de la base de datos que pueden corromper la integridad referencial:</p>

<ul>
  <li>Insertar una fila hijo cuya llave foránea no coincide con la llave primaria del padre.</li>
  <li>Actualizar la clave ajena de la fila hijo con una sentencia UPDATE y que esta no coincida con ninguna llave primaria del padre.</li>

  <li>Eliminar una fila padre que deje huérfanas a sus filas hijas.</li>
<li>Actualizar la clave primaria de una fila padre, donde si en una fila padre (dejaría huerfanas a sus fijas hijas).</li>
</ul>
  </div>
</article>

<article>
  <div>
<h2 id="que_es">¿Qué es SQL?</h2>


<p>Significa lenguaje estructurado de consulta (Structured Query Language).</p>
<p>Es el lenguaje estándar que se utiliza para definir, gestionar y manipular la información contenida en una Base de Datos Relacional.</p>

<h3>Data types</h3>
<img src="./img/mysql-data-types.jpg" alt="">


<p>La sintaxis de creación puede variar ligeramente de una base de datos a otra ya que los tipos de campo aceptados no están completamente estandarizados.</p>

<p>La sintaxis para realizar la creación de una tabla, suele ser algo como lo siguiente.</p>


<pre><code>CREATE TABLE nombre_tabla (
nombre_campo_1 tipo_1 propiedades_1,
nombre_campo_2 tipo_2 propiedades_2,
nombre_campo_n tipo_n propiedades_n,
PRIMARY KEY( nombre_campo_x , ... )
)</code></pre>

<pre><span class="font-weight-bold">Ejemplo</span><code>CREATE TABLE cliente (
  cli_id INT(4) NOT NULL AUTO_INCREMENT,
  cli_nombre VARCHAR(50),
  cli_apellidos VARCHAR(100),
  cli_direccion VARCHAR(500),
  cli_email VARCHAR(255),
  cli_codigo_postal VARCHAR(50),
  cli_poblacion VARCHAR(255),
  cli_pedidos INT,
PRIMARY KEY( cli_id )
)

CREATE TABLE articulo (
  art_id INT(4) NOT NULL AUTO_INCREMENT,
  art_titulo VARCHAR(50),
  art_autor VARCHAR(25),
  art_editorial VARCHAR(25),
  art_recio REAL,
  PRIMARY KEY( art_id )
)

CREATE TABLE pedido (
  ped_id INT(4) NOT NULL AUTO_INCREMENT,
  cli_id INT(4) NOT NULL,
  art_id INT(4) NOT NULL,
  ped_fecha DATE,
  ped_cantidad INT(4),
  ped_total INT(4),
  FOREIGN KEY (cli_id) REFERENCES cliente(cli_id),
  FOREIGN KEY (art_id) REFERENCES articulo(art_id),
  PRIMARY KEY(ped_id)
)</code></pre>


  <h3>Ejercicio: Monta tu base de datos</h3>


<h3>INSERT, UPDATE, DELETE</h3>

<h4>INSERT</h4>

<pre><code>INSERT INTO nombre_tabla (nombre_campo1, nombre_campo2,...)
VALUES (valor_campo1, valor_campo2...)</code></pre>

<pre><span class="font-weight-bold">Ejemplo</span><code>INSERT INTO cliente (cli_nombre, cli_apellidos, cli_direccion, cli_codigo_postal, cli_email)
VALUES ('Perico', 'Palotes', 'Percebe n􀀁13', '123456’, correo@correo.es')</code></pre>

<ul>
  <li>Todos los capos definidos como NOT NULL deben ser insertados</li>
  <li>Los campos numéricos no van delimitados por apóstrofes '.</li>
  <li>SQL no distingue entre mayúsculas y minúsculas para las palabras reservadas, aunque se suelen utilizar mayúsculas para diferenciarlas.</li>
  <li>En muchos países el código postal tiene letras, por eso no lo hemos definido como numérico.</li>

</ul>

<h4>DELETE</h4>
<pre><code>DELETE FROM tabla WHERE condiciones</code></pre>

<pre><code>DELETE FROM cliente WHERE cli_nombre = 'Perico‘;</code></pre>

<p class="font-weight-bold text-primary">WARNING: Si no especificamos una condición, lo que estamos haciendo es borrar toda la tabla</p>

<div class="responsiveContent">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/i_cVJgIz_Cs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<h3>UPDATE</h3>
<p>Con WHERE especificamos que filas actualizaremos, y con SET especificamos que campos se actualizan y con que valor. La sintaxis es de este tipo:</p>

<pre><code>UPDATE nombre_tabla
SET
  nombre_campo1 = valor_campo1,
  nombre_campo2 = valor_campo2, ...
WHERE condiciones_de_selección</code></pre>

<pre><span class="font-weight-bold">Ejemplo</span><code>UPDATE cliente SET cli_nombre = ‘José’
WHERE cli_nombre = ‘Pepe’</code></pre>

<h3>SELECT</h3>

<p>La selección total o parcial de una tabla se lleva a cabo mediante la instrucción SELECT.</p>


<p>En dicha selección hay que especificar:</p>

<ul>
  <li>Los campos que queremos seleccionar</li>
  <li>La tabla en la que hacemos la selección</li>

</ul>


<pre><code>SELECT cli_nombre, cli_direccion FROM cliente;</code></pre>

<p>Si quisiésemos seleccionar todos los campos, podríamos utilizar el comodín * del siguiente modo:</p>

<pre><code>SELECT * FROM cliente;</code></pre>

<p>Si quisiésemos mostrar los clientes de una determinada ciudad usaríamos una expresión como esta:</p>

<pre><code>SELECT * FROM cliente WHERE cli_poblacion LIKE 'Madrid'</code></pre>


<p>Podemos ordenar los resultados:</p>

<pre><code>SELECT *
FROM cliente
WHERE cli_poblacion LIKE 'Madrid'
ORDER BY nombre Se pueden utilizar varios criterios de ordenamiento.</code></pre>

<pre><code>SELECT *
FROM cliente
WHERE cli_poblacion LIKE 'Madrid’
ORDER BY cli_nombre , cli_apellido</code></pre>

<p>Es posible especificar orden ascendente (ASC) o descendente (DESC).</p>

<pre><code>SELECT * FROM cliente WHERE ORDER BY cli_nombre desc</code></pre>

<p>Si quisieramos saber en qué ciudades se encuentran
nuestros clientes sin que estas se repitan cuando haya múltiples ocurrencias...</p>

<pre><code>SELECT DISTINCT cli_poblacion
FROM cliente
ORDER BY cli_poblacion asc</code></pre>

<p>Así evitaríamos ver repetido Madrid tantas veces como clientes tengamos en esa población.</p>


<h4>Operadores de la cláusla WHERE</h4>

<table>
  <tr>
    <th colspan="2">Operadores matemáticos</th>
  </tr>
  <tr>
    <td>&gt;</td>
    <td>Mayor que</td>
  </tr>
  <tr>
    <td>&lt;</td>
    <td>Menor que</td>
  </tr>
  <tr>
    <td>&gt;=</td>
    <td>Mayor o igual que</td>
  </tr>
  <tr>
    <td>&lt;=</td>
    <td>Menor o igual que</td>
  </tr>
  <tr>
    <td>&gt;&lt;</td>
    <td>Distinto</td>
  </tr>
  <tr>
    <td>=</td>
    <td>Igual</td>
  </tr>
</table>

<table>
  <tr>
    <th>Operadores lógicos</th>
  </tr>

  <tr>
    <td>And</td>
  </tr>

<tr>
    <td>Or</td>
  </tr>

<tr>
    <td>Not</td>
  </tr>
</table>

<table>
<tr>
<td>Like
</td>
<td>Selecciona los registros cuyo valor de campo se asemeja, no teniendo en cuenta mayúsculas y minusculas.</td>
</tr>

<tr>
  <td>In y Not In</td>
  <td>Da un conjunto de valores para un campo para los cuales la condición de selección es ( o no ) válida.</td>

</tr>


<tr>
  <td>Is Null y Is Not Null</td>
  <td>Selecciona aquellos registros donde el campo especificado está (o no) vacío.</td>

</tr>
<tr>
<td>Between... And</td>
<td>Selecciona los registros comprendidos en un intervalo.</td>
</tr>

<tr><td>Distinct</td><td>Selecciona los registros no coincidentes</td></tr>

<tr><td>Desc</td><td>Clasifica los registros por orden inverso</td></tr>

</table>


<table><tr><td>*</td><td>Sustituye a todos los campox</td></tr>
<tr><td>%</td><td>Sustituye a cualquier cosa o nada dentro de una cadena</td></tr>
<tr><td>_</td><td>Sustituye un solo carácter dentro de una cadena</td></tr>
</table>




<p>Búsqueda de clientes cuya población sea parecida a “madrid” y cuyo nombre no se parezca a “Pepe”</p>
<pre><code>SELECT * FROM cliente WHERE cli_poblacion LIKE ‘madrid’ AND NOT (cli_nombre LIKE ‘Pepe‘)</code></pre>


<p>Si quisiéramos recoger en una selección a los clientes de nuestra tabla cuyo apellido comienza por A y cuyo número de pedidos esta comprendido entre 20 y 40:</p>

<pre><code>SELECT * FROM cliente WHERE cli_apellidos LIKE ‘A%’ AND cli_pedidos BETWEEN 20 AND 40</code></pre>

<pre><code>SELECT *
FROM cliente
WHERE cli_poblacion IN (‘Madrid’,‘Barcelona’, ‘Valencia’)</code></pre>
</article>

<article>
  <h2>Bases de datos no relacionales</h2>

</article>
</main>
<?php 
// });
// include $path."/diapos_theme/footer.php";
?>