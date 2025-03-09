<?php 
$titulo_curso="JSE con JDBC";
$meta_description = 'En este curso daremos los primeros pasos para desarrollar aplicaciones Java con Bases de datos';
$img_curso = 'curso-jdbc.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

$tiene_intro=true;
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	global $dots;
?>

<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#jdbc">JDBC</a></li>
		<li><a href="#install">Instalar base de datos en local</a></li>
		<li><a href="#conexion">Conexión</a></li>
		<li><a href="#consultas_basicas">Operaciones con tablas</a></li>
		<li><a href="#insercion">Inserción</a></li>
		<li><a href="#eliminar">Eliminar</a></li>
		<li><a href="#modificar">Modificar</a></li>
		<li><a href="#consulta">Consulta</a></li>
				<li><a href="#bean">Bean</a></li>
		<li><a href="#prepared_statement">Prepared Statement</a></li>
	</ol>
</article>
</section>
<main class="curso">
<?= drawH1WithImg() ?>

<article>
	<div>
<h2 id="jdbc">JDBC (Java DataBase Conectivity)</h2>
<p>Conjunto de drivers y librerías que permiten conectar la tecnología Java con una base de datos.</p>
</div>
</article>

<article>
	<div>
	<h2 id="install">Instalar la base de datos en local</h2>

	<div class="row">
		<div class="col-md-10"><p>Nesitaremos lo siguiente: </p>
<ol>
	<li><a target="_blank" href="https://www.apachefriends.org/index.html">Descargar XAMPP</a>
</li>
<li><a href="ex/mysql-connector-java-5.1.45-bin.jar">Descargar driver de conexión a mysql</a>,<a target="_blank" href="https://www.mysql.com/products/connector/">Página de la librería</a>. Para evitar problemas de permisos, es conveniente añadir el Jar al proyecto (Add JARs) en lugar de como Jar externo (Add External JARs).
</li>
<li><a target="_blank" href="https://dev.mysql.com/downloads/workbench/">Descargar mysql workbench</a></li>
</ol></div>
		<div class="col-md-2"><?= getRes("video_premium",250350701) ?></div>
	</div>
	


</div>
</article>
<article>
	<div>
	<h2 id="conexion">Conexión</h2>

<div class="row">
	<div class="col-md-10">
<pre><code>Class.forName(&quot;com.mysql.jdbc.Driver&quot;);
<span class="green">// Define the data source for the driver</span>
String sourceURL = &quot;jdbc:mysql://localhost/personas&quot;;
<span class="green">// Create a connection through the DriverManager</span>
Connection databaseConnection = DriverManager.getConnection(sourceURL, &quot;root&quot;, &quot;pp&quot;);
databaseConnection.close();</code></pre></div>
	<div class="col-md-2"><?= getRes("video_premium",250350732) ?></div>
</div>





</div>
</article>
<article>
	<div>
<h2 id="consultas_basicas">Operaciones SQL</h2>
	<h3>Crear una tabla</h3>

<div class="row">
	<div class="col-md-10">
	<p>Introducir las siguientes 3 líneas en el código anterior para que se cree una tabla en la base de datos seleccionada:</p>
<pre><code>Statement statement = databaseConnection.createStatement();
statement.executeUpdate(&quot;<span class="red">CREATE TABLE nueva_tabla (dni VARCHAR(9) NOT NULL PRIMARY KEY, nombre VARCHAR(30))</span>&quot;);
statement.close();</code></pre></div>
	<div class="col-md-2"><?= getRes("video_premium",250350780) ?></div>
</div>
	


	<h3>Borrar tabla</h3>


	<p>Teniendo en cuenta la siguiente sintaxis sql para borrar una tabla, utilizarla para borrar la tabla anterior:</p>
<pre><code>DROP TABLE nueva_tabla;</code></pre>	

<h3 id="insercion">Inserción</h3>

<?= getRes("video_premium",250350805) ?>

	<h4>Consulta de inserción en SQL</h4>
<p>Hay 2 formas: </p>

<ol>
	<li>
		<pre><code>INSERT INTO table_name
VALUES (value1,value2,value3,...);</code></pre>
	</li>
	<li>
<pre><code>INSERT INTO table_name (column1,column2,column3,...)
VALUES (value1,value2,value3,...);</code></pre>
	</li>
</ol>


	<h4>Ejercicio: <span class="text-primary">insertar registro</span></h4>

	<div class="row">
	<div class="col-md-10">	<p>Crear usando el gestor gráfico una tabla llamada
"prueba" e insertar mediante la consola (usando la clase Scanner) un registro de tres campos (dni, nombre y edad).
</p></div>
	<div class="col-md-2"><?= getRes("video_premium",250350847) ?></div>
</div>








	<h3 id="eliminar"><span class="text-dark">Ejercicio:</span> eliminar registro</h3>

<div class="row">
	<div class="col-md-10">	<p>Añadir un método eliminarRegistro() que contiene el código necesario para eliminar una fila.</p>
	<pre><code>DELETE FROM persona WHERE dni='p'</code></pre></div>
	<div class="col-md-2"><?= getRes("video_premium",250350969) ?></div>
</div>




	<h3 id="modificar"><span class="text-dark">Ejercicio:</span> modificar tabla</h3>

<div class="row">
	<div class="col-md-10">

	<p>Añadir un método modificarRegistro() que contiene el código necesario para modificar una tabla.</p>
	<p>El código sql sería parecido a este:</p>
<pre><code>UPDATE persona SET nombre='juan', edad = 37 WHERE dni = 'u'</code></pre>
	</div>
	<div class="col-md-2"><?= getRes("video_premium",250352239) ?></div>
</div>



	<h2  id="consulta">Consultar personas</h2>


<div class="row">
	<div class="col-md-6">	<p>Integrar el siguiente código en un nuevo .java para poder realizar una consulta en la base de datos.</p>

<pre><code>List&lt;Persona&gt; personas = new ArrayList&lt;Persona&gt;();

Statement statement = databaseConnection.createStatement();
ResultSet personasRS = statement.executeQuery(&quot;<span class="red">SELECT * FROM persona</span>&quot;);
while (personasRS.next()){
Persona p = new Persona();
p.setNombre(personasRS.getString(&quot;nombre&quot;));
personas.add(p);
}</code></pre></div>
	<div class="col-md-4"><img class="img-fluid" src="img/select_joke.svg" alt="chiste de una select con SQL"></div>
	<div class="col-md-2"><?= getRes("video_premium",250352261) ?></div>
</div>


	



</div>
</article>
<article>
	<div>
<h2 id="bean">Bean</h2>


<div class="row">
	<div class="col-md-7">
		Generación automática de los getters y setters: <br>
		Btn derecho sobre el código → source → 
Generate Getters and Setters <br>
Alt + shift + s → 
Generate Getters and Setters
	</div>
	<div class="col-md-5">
		<pre><code>public class Persona {
	private String dni;
	private String nombre;
	private int edad;
	public String getDni() {
		return dni;
	}
	public void setDni(String dni) {
		this.dni = dni;
	}
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public int getEdad() {
		return edad;
	}
	public void setEdad(int edad) {
		this.edad = edad;
	}
}</code></pre>
	</div>
	</div>
	<h3><span class="text-dark">Ejercicio:</span> Almacenar en una collection de Beans</h3>


	<div class="row">
		<div class="col-md-10">
	<p>El ejercicio consta de cuatro clases java:</p>
<ul>
	<li>Una clase que será nuestro bean Persona </li>
	<li>Una clase Conexion con un método estático getConnection() que me devolverá la conexión a la base de datos.</li>
	<li>Una clase Servicio que contendrá el método consultarTodo() que me devolverá una colección de Beans.</li>
	<li>Una clase llamada Main con el siguiente código:
<pre><code>public static void main(String[] args) {
	Servicio servicio = new Servicio();
	Collection &lt;Persona&gt; collection = servicio.consultarTodo();
	Iterator&lt;Persona&gt; it = collection.iterator();
	while(it.hasNext()){
		Persona persona = it.next();
		System.out.println(persona.getNombre());
	}
}</code></pre>

</li>
</ul></div>
		<div class="col-md-2"><?= getRes("video_premium",250352629) ?></div>
	</div>


</div>
</article>
<article>
	<div>
	<h2 id="prepared_statement">Prepared Statement</h2>

<div class="row">
	<div class="col-md-10">	<p>Protege contra la inyección SQL. A partir de ahora, utilizaremos siempre preparedStatement.</p>
<pre><code>PreparedStatement pstmt = null;
pstmt = databaseConnection.prepareStatement(&quot;INSERT INTO persona VALUES (?,?,?)&quot;);
pstmt.setString(1, &quot;dni5&quot;);
pstmt.setString(2, &quot;nombre1&quot;);
pstmt.setInt(3,9);
pstmt.execute();
pstmt.close();</code></pre>
</div>
	<div class="col-md-2"><?= getRes("video_premium",250352630) ?></div>
</div>
	
	


	<h3><span class="text-dark">Ejercicio:</span> PreparedStatement I</h3>
	<p>Insertar valores en la tabla usando preparedStatement.</p>


	<h3>Prepared Statement II</h3>
	<pre><code>PreparedStatement pstmt = null;
pstmt = databaseConnection.prepareStatement(&quot;SELECT * FROM persona where nombre = ?&quot;);
pstmt.setString(1, &quot;Pablo&quot;);
ResultSet rs = pstmt.executeQuery();
while(rs.next()){
	System.out.println(rs.getString(&quot;direction&quot;));
}
pstmt.close();</code></pre>

	<h3><span class="text-dark">Ejercicio:</span> PreparedStatement II</h3>
	<p>Consultar un valor concreto de una tabla utilizando PreparedStatement.</p>

	<?= getRes("video_premium",250353672) ?>
</div>
</article>
</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>