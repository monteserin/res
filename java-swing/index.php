<?php 
/*
$titulo_curso="Java Swing";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	global $path;
	$tiene_intro=true; // usamos esta variable en body_init.php
	include $path."diapos_theme/body_init.php";
	echo "<h1>$titulo_curso</h1>";
*/
	?>
<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#jframe">JFrame</a></li>
		<li><a href="#crear_componente">Crear un componente y añadirlo a la ventana</a></li>
		<li><a href="#algunos_componentes">Algunos componentes</a></li>
		<li><a href="#forma_habitual">Forma habitual de instanciar una ventana</a></li>
		<li><a href="#jbutton">JButton</a></li>
		<li><a href="#layouts">Layouts</a>
			<ol>
				<li><a href="#borderlayout">BorderLayout</a></li>
				<li><a href="#boxlayout">BoxLayout</a></li>
				<li><a href="#grouplayout">Group Layout</a></li>

			</ol>
		</li>

		<li><a href="#jtable">JTable</a>
		<ol>
			<li><a href="#cambiar_header">Cambiar el header de la tabla</a></li>
			<li><a href="#alimentar_tabla">Alimentar la tabla sin usar su constructor</a></li>
			<li><a href="#alimentando">Alimentando la tabla con un ArrayList</a></li>
		<li><a href="#add_listener">Añadiendo un listener a la tabla</a></li>
		<li><a href="#add_popup">Añadir un popup al pulsar sobre una fila</a></li>
		<li><a href="#materializar_borrado">Materializar la opción de borrado</a></li>
</ol>
</li>

	<li><a href="#tabs">Tabs</a></li>


		<li><a href="#menu_bar">Menu Bar</a></li>
		<li><a href="#cuadro_dialogo">Cuadro de diálogo para abrir/salvar ficheros</a></li>

		</ol>


		</li>



		</ol>
</article>
</section>
<main class="curso">
<section>

	<article>
	<h2 id="jframe">JFrame</h2>
	<pre><code>JFrame frame = new JFrame("Nombre de la ventana"); <span class="green">// Creamos la ventana con un titulo</span>
frame.setSize(800,600); <span class="green">//le asignamos un tamaño</span>
<span class="green">//frame.setLocation(0,0); //Definimos el origen de coordenadas de la ventana</span>
frame.setLocationRelativeTo(null);<span class="green">//Centra la ventana en la pantalla</span>
frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);<span class="green">//definimos que pasará cuando pulsemos el botón de cerrar</span>
frame.setVisible(true); <span class="green">//La hacemos visible</span></code></pre>
</article>
<article>

<h2 id="crear_componente">Crear un componente y añadirlo a la ventana</h2>
<pre><code>JButton button = new JButton("Texto boton");
frame.add(button);</code></pre>
<p>Sin haber establecido un layout, el botón se estirará para ocupar toda la pantalla</p>
<p>Para evitar esto, podemos usar un layout, por ejemplo:</p>
<pre><code>frame.setLayout(new FlowLayout());</code></pre>

<p>Si queremos que los componentes se alineen verticalmente, no es posible usando FlowLayout, pero podemos crear una nueva clase llamada <a target="_blank" href="cosas/VerticalFlowLayout.java">VerticalFlowlayout</a></p>

</article>
<article>
	<h2 id="algunos_componentes">Algunos componentes</h2>
	<pre><code>JTextArea ciclosTextArea = new JTextArea(15,20);

<span class="green">//Muestra un mensaje no editable</span>
JLabel label = new JLabel("nombre");

<span class="green">//Muestra un cuadro de diálogo con un mensaje</span>
JOptionPane.showMessageDialog(Ventana.this, "Eggs are not supposed to be green."); </code></pre>
</article>

<article>
<h2 id="forma_habitual">Forma habitual de instanciar una ventana</h2>
<pre><code>public class Main {
	public static void main(String[] args) {
		Ventana ventana = new Ventana();
		ventana.setVisible(true);
	}
}</code></pre>

<pre><code>public class Ventana extends JFrame {
	public Ventana() {
		inicializar();
	}
	private void inicializar() {
		this.setSize(800,600);
	}
}</code></pre>
</article>
</section>

<section>
	<h2 id="jbutton">JButton</h2>
<pre><code>JButton btn= new JButton("Botón");
btn.addActionListener(this);
...
public void actionPerformed(ActionEvent e) {		
	if(e.getSource() == this.hacerMagia) {
			
	}else if(e.getSource() == this.altaCurso) {
			
	}
}</code></pre>	
<p>o</p>
<pre><code>.addActionListener(new ActionListener() {
	@Override
	public void actionPerformed(ActionEvent e) {
		int row = tabla.getSelectedRow();
		listadoCursos.remove(row);
		alimentarTabla();
		System.out.println(row);
	}
});</code></pre>
</section>
<section>
	<h2 id="layouts">Layouts</h2>
	<article>
		<h3 id="borderlayout">BorderLayout</h3>
		<p>Por defecto, si no indicamos nada, nuestras ventanas tienen BorderLayout.</p>
		<pre><code>	JButton btn1 = new JButton("btn1");
JButton btn2 = new JButton("btn2");
		
this.add(btn1);
this.add(btn2);</code></pre>

	<h3 id="boxlayout">BoxLayout</h3>
	<pre><code><span class="green">BoxLayout.PAGE_AXIS coloca los elementos verticalmente, de arriba a abajo</span>
this.setLayout(new BoxLayout(this.getContentPane(), BoxLayout.PAGE_AXIS));
		
JButton btn1 = new JButton("btn1");
JButton btn2 = new JButton("btn2");
		
this.add(btn1);
this.add(btn2);</code></pre>

<h3 id="grouplayout">Group Layout</h3>
<p>Esto es un poco enrevesado. Para que funcione correctamente tengo que añadir todos los componentes dos veces, una horizontal y otra verticalemente</p>
<pre><code>	GroupLayout layout = new GroupLayout(this.getContentPane());
layout.setAutoCreateContainerGaps(true);
layout.setAutoCreateGaps(true);

layout.setHorizontalGroup(layout.createSequentialGroup().addComponent(btn1).addComponent(btn2).addGroup(layout.createParallelGroup(GroupLayout.Alignment.LEADING).addComponent(btn3).addComponent(btn4)));

layout.setVerticalGroup(layout.createSequentialGroup().addGroup(layout.createParallelGroup(GroupLayout.Alignment.BASELINE).addComponent(btn1).addComponent(btn2).addComponent(btn3)).addComponent(btn4));


this.setLayout(layout);</code></pre>
</section>

<section>
	<h2 id="jtable">JTable</h2>

	<pre><code>String data[][]={ {"101","Amit","670000"},{"102","Jai","780000"},{"101","Sachin","700000"}};    
<span class="green">// (es posible incrustar código html si lo hacemos dentro de las etiquetas &lt;html&gt;)</span>
String columns[]={"Ciclo","Módulo","&lt;html&gt;Unidad&lt;br&gt;Formativa&gt;","Opcion"};         
JTable tabla=new JTable(cursillos,column);    
tabla.setBounds(30,40,200,300);          
JScrollPane sp=new JScrollPane(tabla); 

sp.setPreferredSize(new Dimension(1000, 300));
sp.setMinimumSize(new Dimension(1000,200));

panelGlobal.add(sp);</code></pre>

<h4 id="cambiar_header">Cambiar el header de la tabla</h4>
<pre><code>tabla = new JTable();
JTableHeader th = tabla.getTableHeader();
th.setPreferredSize(new Dimension(100, 100));</code></pre>
<h4>Si sólo quisiera modificar la altura de la tabla, pero no su anchura</h4>
<pre><code>JTableHeader th = tabla.getTableHeader();
		
Dimension d = th.getPreferredSize();
d.height = 30;
th.setPreferredSize(d);</code></pre>
<h4 id="alimentar_tabla">Alimentar la tabla sin usar su constructor</h4>
<pre><code>DefaultTableModel tableModel = new DefaultTableModel(cursillos, columns);
tabla.setModel(tableModel);</code></pre>

<h4 id="alimentando">Alimentando la tabla con un ArrayList</h4>
<pre><code>String[][] arrayListCursoToMultidimensionalStringArray(ArrayList<Curso>cursos){
	Iterator&lt;Curso&gt; it = cursos.iterator();
	String [][] cursosArray= new String[cursos.size()][3];
	int i=0;
	while(it.hasNext()) {
		Curso c = it.next();
		String[]curso = {c.getCiclo(), c.getModulo(), c.getUf(), "X"};
		cursosArray[i] =curso; 
		i++;
	}
	return cursosArray;	
}</code></pre>

<h4 id="add_listener">Añadiendo un listener a la tabla</h4>
<pre><code>JTable jt=new JTable(cursillos,column);   

jt.addMouseListener(new MouseAdapter() {
	public void mousePressed(MouseEvent e) {
		System.out.println("llega");
	}
});</code></pre>

<h3 id="add_popup">Añadir un popup al pulsar sobre una fila</h3>
<pre><code>JPopupMenu popup = new JPopupMenu();
JMenuItem removeItem = new JMenuItem("Eliminar fila");
popup.add(removeItem);

JTable tabla=new JTable(cursillos,column);   

tabla.addMouseListener(new MouseAdapter() {
	public void mousePressed(MouseEvent e) {
		<span class="bold">popup.show(jt, e.getX(), e.getY());</span>
	}
});
</code></pre>

<h3 id="materializar_borrado">Materializar la opción de borrado</h3>
<pre><code>removeItem.addActionListener(new ActionListener() {
	
	@Override
	public void actionPerformed(ActionEvent e) {
		int row = tabla.getSelectedRow();
		System.out.println(row);
	}
});</code></pre>
</section>


<section>
	<h2 id="tabs">Tabs</h2>
	<pre><code>JTabbedPane tabbedPane = new JTabbedPane();

tabbedPane.add("Colors", new JPanel());
tabbedPane.add( "Fruits", new JPanel());
tabbedPane.add("Vitamins", new JPanel( ) ) ;
	 
panelGlobal.add(tabbedPane);</code></pre>
<p>Para modificar dinámicamente el contenido de un tab:</p>
<pre><code>tabbedPane.setComponentAt(2, panelCursos);</code></pre>
</section>


<section>
	<article>
		<h2 id="menu_bar">Menu Bar</h2>
		<pre><code>JMenuBar menuBar = new JMenuBar();
JMenu fileMenu = new JMenu("Archivo");
JMenuItem importarMenuItem = new JMenuItem("Importar");
JMenuItem exportarMenuItem = new JMenuItem("Exportar");

fileMenu.add(importarMenuItem);
fileMenu.add(exportarMenuItem);

menuBar.add(fileMenu);
this.setJMenuBar(menuBar);</code></pre></article>
</section>

<section>
	<article>
		<h2 id="cuadro_dialogo">Cuadro de diálogo para abrir/salvar ficheros</h2>
		<pre><span class="green">Abrir un fichero</span><code>JFileChooser c = new JFileChooser();				
int rVal = c.showOpenDialog(Ventana.this);
if (rVal == JFileChooser.APPROVE_OPTION) {
	System.out.println(c.getSelectedFile().getName());
	System.out.println(c.getCurrentDirectory().toString());
}
if (rVal == JFileChooser.CANCEL_OPTION) {
	System.out.println("Pulsaste cancelar");
}</code></pre>

<pre><span class="green">Salvar un fichero</span><code></code></pre>
	</article>
</section>
</main>
<?php 
//});
//include $path."/diapos_theme/footer.php";
?>