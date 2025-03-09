<?php 
/*$titulo_curso="Curso de Excel";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	*/?>
<section id="amor" class="verIndice">
				<article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#para_que_sirve">¿Para qué sirve?</a></li>
		<li><a href="#interfaz">Interfaz</a></li>
		<li><a href="#hojas">Hojas de cálculo</a></li>
		<li><a href="#celdas">Celdas</a></li>
		<li><a href="#mejorando_textos">Mejorando los textos</a></li>
		<li><a href="#formulas">Fórmulas</a></li>
		<li><a href="#vlookup">VLOOKUP</a></li>
		<li><a href="#ejercicio_largo_facturacion">Ejercicio largo de facturación</a></li>
		<li><a href="#grafico">Gráfico</a></li>
		<li><a href="#tablas_dinamicas">Tablas dinámicas</a></li>
		<li><a href="#macros">Macros</a></li>
			</ol>
</article>
</section>
<main class="curso">

<article>
	<div>
<h2 id="para_que_sirve">¿Para qué sirve una hoja de cálculo?</h2>
<p>Permite manipular datos numéricos y alfanuméricos dispuestos en forma de tablas.</p>
<p>Habitualmente permiten dibujar distintos tipos de gráficas</p>
</div>
</article>

<article id="interfaz">
	<div>
	<h2>Interfaz</h2>
	<img style="width:100%" src="img/interfaz-excel.svg" alt="interfaz excel">
	<h3>Modificación de la barra de herramientas de acceso rápido</h3>
	<ul>
		<li>Pulso con el botón derecho sobre una herramienta del ribbon → Add to Quick Access ToolBar</li>
		<li>Pulso con el botón derecho sobre una herramienta de la barra de herramientas de acceso rápido → Remove from Quick Access ToolBar</li>
		<li>Pulso en la flechita que hay a la derecha de la barra de herramientas → selecciono la que deseo añadir.</li>
		<li>Pulso en la flechita que hay a la derecha de la barra de herramientas → More Commands <br> o <br>Office Button → Excel Options → Customize  
			<ul>
				<li>			→ selecciono la herramienta deseada y pulso → Add → Ok</li>
				<li>			→ selecciono la herramienta deseada → remove</li>
			</ul>
		</li>
	</ul>
<p><span class="black bold">Desplazar la barra de herramientas de acceso rápido:</span> <br>
Pulso con el botón derecho sobre una herramienta del ribbon → Show Quick Access ToolBar Below/Above the Ribbon.
</p>


<h3>Atajos del teclado</h3>
<pre>
nuevo documento			→ ctrl + n
salvar 								→ ctrl + s
cortar 								→ ctrl + x
copiar 								→ ctrl + c
pegar 								→ ctrl + v
escritorio 							→ ventanitas + d
cambiar de aplicación 		→ alt + tab
</pre>


<h3>Definir nuestros propios atajos del teclado</h3>
<ol>
	<li>Pulso en la flechita que hay a la derecha de la barra de herramientas acceso rápido → More Commands <br> o	<br>
Office Button → Excel Options → Customize  
	</li>
	<li>→ keyboard shortcut → customize</li>
</ol>


<h3>Atajos del teclado para navegar por el documento</h3>
<pre>
<span class="black bold">AvPag</span> 				→ Avanza página.
<span class="black bold">RePag</span>				→ Retrocede página.


<span class="black bold">Inicio</span> 				→ Va al inicio de la línea.
<span class="black bold">ctrl + inicio</span> 		→ Va al comienzo del documento.
</pre>
	</article>
	<article id="hojas">
<h3>¿Qué es un workbook?</h3>
<p>Un conjunto de hojas de cálculo.</p>

<h3>Renombrar, añadir y borrar hojas de cálculo</h3>
<img src="img/pie-excel.svg" alt="pie excel">

<p class="red">Cambiar nombre a la hoja de cálculo: </p>
<ul class="red">
	<li>Hacer doble click sobre la hoja o botón derecho → rename</li>
	<li>Home → Cells → Format → Rename Sheet</li>
</ul>

<p class="green">Añadir una nueva hoja</p>
<ul class="green">
	<li>Añadir una nueva hoja pulsando el botón</li>
	<li>También puedo hacer click con el botón derecho sobre cualquier hoja → Insert → WorkSheet</li>
	<li>También puedo pulsar shift + F11</li>
</ul>

<p class="blue">Borrar una hoja</p>
<ul class="blue">
	<li>hago click con el botón derecho sobre ella → delete</li>
	<li>Home → Cells → delete</li>
</ul>
</div>
</article>

<article id="celdas">
	<div>
	<h2>Celdas</h2>
	<h3>Trabajar con celdas</h3>
	<p>En general, para borrar/insertar una fila/columna:</p>
	<p>Botón derecho sobre la celda → Insert/Delete  <br>
	o	<br>
	Home → Cells → Insert/Delete
	</p>

	<p class="notas">
		Manteniendo pulsada la tecla shift al hacer la selección, podré seleccionar varias filas o columnas.
	</p>
	

	<h3>Cambiar el tamaño de las celdas</h3>
	<img src="img/tabla.svg" alt="tabla">

	
	<h3>Juntar celdas</h3>
	<p>Wrap Text (Si las celdas contienen texto que no cabe dentro y queremos permitir la multilínea:)</p>
<pre>


Botón derecho sobre la celda → Cell Format → Alignment 	→ Merge
														→ Wrap text
</pre>

<h3>Insertar bordes</h3>
<p>Home → Font → Desplegable bordes</p>

<h3>Congelar celdas</h3>
<p>Las celdas elegidas no se desplazarán y por tanto serán siempre visibles cuando utilizamos la scroll bar.</p>
<pre>
View → Window → Freeze Panes 
										→ Unfreeze Panes
										→ Freeze Top Row
										→ Freeze First Column
										→ Freeze Panes (congela una fila y una columna simultáneamente)
</pre>

<p><span class="black bold">Cambiar el formato del contenido numérico de la celda</span> <br>
Home → Number <br>
(Para poner metros cuadrados: btn derecho sobre la celda → Format Cells → Number → Custom → #0.00 "Meters²")
</p>

<p><span class="black bold">Cambiar el formato de texto de una celda:</span> <br>
Home → Font
</p>

<p><span class="black bold">Cambiar la alineación del contenido de una celda</span> <br>
Home → Alignment
</p>

<p><span class="black bold">Ordenar columnas contenido columnas (no aplicable a filas)</span> <br>
Selecciono la columna → Editing → Sort & Filter </p>

<p><span class="black bold">Formatear un grupo de celdas como una tabla de word:</span> <br>
Selecciono las celdas → Home → Styles → Format as a Table
</p>

<p><span class="black bold">Eliminar duplicados de una columna:</span> <br>
Data → Data tools → Remove Duplicates.
</p>

<p><span class="black bold">Convertir texto en celdas.</span> <br>
Data → Data Tools → Text to Columns → Delimited →...
</p>

<p><span class="black bold">Validar datos cuando la celda pierde el foco</span> <br>
Data → Data Tools → Data Validation → Settings → Error Alert 
</p>

<h3>Estilo de celdas</h3>
<p>Home → Styles → Cell Styles → ...</p>
</div>
</article>

<article id="mejorando_textos">
	<div>
	<h2>Mejorando los textos</h2>
	<h3>Corrector ortográfico</h3>
	<p><span class="black bold">Corregir una palabra:</span> <br>
	Selecciono la palabra que quiero corregir → <br>
→ botón derecho para abrir menú emergente →  <br>
→ Synonyms →  <br>
→ aparecen varias opciones de corrección ortográfica.</p>

<p><span class="black bold">Corregir todo el documento, a partir de la línea dónde tengo el cursor:</span> <br>
Review → Proofing → Spelling.
</p>

<p>AddToDictionary: La palabra indicada dejará de ser interpretada como un error ortográfico.</p>

<h3>Sinónimos</h3>
<p><span class="black bol">Hacer una búsqueda exhaustiva de los sinónimos de una palabra:</span> <br>
Review → Proofing → Research</p>

<h3>Configuración autocorrector</h3>
<p>Office Button → Excel Options → Proofing <br>
												→ AutoCorrect Options</p>


<h3>Referencias a otras celdas</h3>												
<p>
De la propia hoja → =A1 <br>

De otra hoja → =Sheet1!$A$1 <br>

De otro fichero Excel → =[rqr.xlsx]Sheet1!$A$1</p>
</div>
</article>
<article id="formulas"> 
	<div>
<h2>Fórmulas</h2>
<ul>
	<li>Van precedidas del signo =.</li>
	<li>Ejs:		=3+3, =5-3, =2*3, =8/4, =3+2*3, =(3+2)*3, =D2*C2, 			=D2*$C2</li>
	<li> Si escribo una fórmula en una celda “C2” una operación que utiliza los valores alojados en otra/s celdas “A2”, si pulso sobre la celda “C2” y selecciono la esquina inferior derecha de la misma, puedo extender la operación a las celdas contiguas. Dicha operación tomará valores relativos a la/s celda/s “A2”.</li>
	<li>Para cojer siempre el valor de la celda A2 y que este no aumente, precedo sus símbolos de un $ ($A$2).</li>
	<li>Para ver gráficamente qué celdas están afectando a la celda seleccionada,  <br>
Formulas → Formula Auditing → Trace Precedents
	</li>
	<li>Para ver gráficamente dónde se manifestará el resultado de operar la celda seleccionada, <br>
 Formulas → Formula Auditing → Trace Dependents
	</li>
	<li>Para borrar las flechas: <br>
Formulas → Formula Auditing → Remove Arrows
	</li>
	<li>Para ver las fórmulas en vez de los resultados de las mismas: <br>
Formulas → Formula Auditing → Show Formulas
	</li>
	<li>Para ir viendo sustituidos paulatinamente los valores de las celdas en las expresión: <br>
Formulas → Formula Auditing → Evaluate Formula → 
	</li>
</ul>

	<h3>Funciones</h3>
	<p>AutoSuma: <br>
Selecciono la celda dónde quiero mostrar el resultado →  <br>
Formulas → Function Library → AutoSum →  <br>
Selecciono las celdas que que darán lugar al resultado.
	</p>

	<p>Otras funciones: <br>
AVERAGE, MAX, MIN, ISNUMBER
	</p>
	
	<h3>Ejercicio</h3>

	<a href="docs/propuestos/vendedores.xlsx">Descargar el excel que hay que completar.</a> 
	<p>Recibimos de las distintas sucursales de la empresa, los datos correspondientes a las ventas en euros de cada vendedor en los distintos trimestres del año.</p>
<table class="border">
	<tr>
		<th>Vendedor</th>
		<th>Trimestre 1</th>
		<th>Trimestre 2</th>
		<th>Trimestre 3</th>
		<th>Trimestre 4</th>
	</tr>
	<tr>
		<td>Miguel García</td>
		<td>1.500.000</td>
		<td>2.000.000</td>
		<td>1.850.000</td>
		<td>2.100.000</td>
	</tr>
	<tr>
		<td>Raúl Arzac</td>
		<td>1.200.000</td>
		<td>1.340.000</td>
		<td>1.750.000</td>
		<td>1.800.000</td>
	</tr>
	<tr>
		<td>Elena Casas</td>
		<td>1.460.000</td>
		<td>1.700.000</td>
		<td>1.900.000</td>
		<td>2.000.000</td>
	</tr>
	<tr>
		<td>Javier Martín</td>
		<td>1.100.000</td>
		<td>1.600.000</td>
		<td>1.640.000</td>
		<td>1.700.000</td>
	</tr>
</table>
	<p>
Diseña una hoja de cálculo que refleje estos datos y permita obtener los siguientes valores: <br>
Ventas totales por trimestres. <br>
Ventas totales por vendedor. <br>
Promedio trimestral de ventas por vendedor. <br>
Promedio de ventas por trimestre.</p>

<h3>Ejercicio</h3>
<p>Completar</p>
<a href="docs/propuestos/ventas.xlsx">Descargar el excel que hay que completar.</a>

<table class="border">
	<tr>
		<th>Resultados por productos</th>
		<th>Producto A</th>
		<th>Producto B</th>
		<th>Total</th>
	</tr>
	<tr>
		<td>(1) Ventas</td>
		<td>50.0</td>
		<td>55.0</td>
		<td></td>
	</tr>
	<tr>
		<td>(2) Devoluciones</td>
		<td>5.5</td>
		<td>7.2</td>
		<td></td>
	</tr>
	<tr>
		<td>(4) Amortizaciones10.5</td>
		<td>10.5</td>
		<td>5.0</td>
		<td></td>
	</tr>
	<tr>
		<td>(5) Costes de producción</td>
		<td>9.0</td>
		<td>7.3</td>
		<td></td>
	</tr>
	<tr>
		<td>Margen Bruto (3-4-5)</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
<a href="docs/resueltos/ventas.xlsx">Descargar ejercicio resuelto.</a>

<h3>Ejercicio</h3>
<a href="docs/propuestos/ejercicioFamiliasPropuesto.xlsx">Descargar ejercicio familias propuesto.</a>

<p>A la vista de la nómina IRPF:</p>
<p>Calcular las columnas vacías, sabiendo que la retención practicada a priori sobre el sueldo bruto es del 15% en concepto de IRPF y 2% en concepto de Seguridad Social (SS).</p>
<p>Calcular la paga mensual, sabiendo que son quince pagas, distribuidas a lo largo del año.</p>
<a href="docs/resueltos/ejercicioFamiliasResuelto.xlsx">Descargar ejercicio familias resuelto</a>
<table class="border">
	<tr>
		<th>Nombre</th>
		<th>Sueldo bruto</th>
		<th>IRPF</th>
		<th>SS</th>
		<th>Sueldo Neto</th>
		<th>Pagas</th>
	</tr>
	<tr>
		<td>Ruiz</td>
		<td>1.200.000</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Sandoval</td>
		<td>1.250.000</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Antúnez</td>
		<td>1.320.000</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Melendo</td>
		<td>1.100.000</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Morales</td>
		<td>2.300.000</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Izquierdo</td>
		<td>2.340.000</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Rovira</td>
		<td>3.400.000</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>

<h3>Trabajo con fechas</h3>
<p>=DATE(<span class="bold red">C2</span>;<span class="bold blue">>B2</span;<span class="bold green">A2</span>)</p>
<table class="border">
	<tr>
		<td></td>
		<td>a</td>
		<td>b</td>
		<td>c</td>
		<td>d</td>
		<td>e</td>
		<td>f</td>
	</tr>
	<tr>
		<td></td>
		<td>1</td>
		<td>DÍA</td>
		<td>MES</td>
		<td>AÑO</td>
		<td>FECHA</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>2</td>
		<td><span class="green bold">14</span></td>
		<td><span class="bold blue">10</span></td>
		<td><span class="red bold">1984</span></td>
		<td>14/10/1984</td>
		<td>Domingo 14 de ocutbre de 1984</td>
	</tr>
</table>
<p>Para cambiar el formato de la celda: botón derecho sobre la celda → Format cells → Date</p>
<p>Para operar fechas: <br>
=DATE(C2;B2;A2+<span class="black bold">30</span>)
</p>

<h3>Ejercicio</h3>
<a href="docs/propuestos/fechas.xlsx">Descargar ejercicio propuesto.</a>
<p>La fecha para tener descuento es igual a la fecha de la factura más los días para descontar.</p>
<p>La cantidad de descuento es igual a la cantidad de factura por el % de descuento.</p>
<p>La cantidad neta a pagar es igual a la cantidad de factura menos la cantidad de descuento.</p>
<a href="docs/resueltos/fechas.xlsx">Descargar ejercicio resuelto.</a>

<table class="border">
	<tr>
		<th>A</th>
		<th>B</th>
		<th>C</th>
		<th>D</th>
		<th>E</th>
		<th>F</th>
		<th>G</th>
		<th>H</th>
		<th>I</th>
		<th>J</th>
		<th>K</th>
	</tr>
	<tr>
		<th>1</th>
		<th rowspan="2">Nombre cuenta</th>
		<th rowspan="2">Cantidad factura</th>
		<th colspan="3">Fecha factura</th>
		<th rowspan="2">% de desc.</th>
		<th rowspan="2">Días para descontar</th>
		<th rowspan="2">Fecha para tener desc.</th>
		<th rowspan="2">Cantidad descuento</th>
		<th rowspan="2">Neto a pagar</th>
	</tr>
	<tr>
		<th>2</th>
		<th>día</th>
		<th>mes</th>
		<th>año</th>
	</tr>
	<tr>
		<th>3</th>
		<td>Rodolfo y Cía</td>
		<td>500,00 €</td>
		<td>30</td>
		<td>12</td>
		<td>2005</td>
		<td>2%</td>
		<td>10</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th>4</th>
		<td>Acme</td>
		<td>225,00 €</td>
		<td>19</td>
		<td>10</td>
		<td>2005</td>
		<td>2%</td>
		<td>10</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th>5</th>
		<td>Industrial</td>
		<td>336,00 €</td>
		<td>18</td>
		<td>3</td>
		<td>2005</td>
		<td>5%</td>
		<td>45</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th>6</th>
		<td>Mudanzas Pérez</td>
		<td>778,48 €</td>
		<td>2</td>
		<td>7</td>
		<td>2005</td>
		<td>5%</td>
		<td>45</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th>7</th>
		<td>Ind. Del Norte</td>
		<td>472,00 €</td>
		<td>15</td>
		<td>4</td>
		<td>2005</td>
		<td>8%</td>
		<td>14</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th>8</th>
		<td>Comp. Central</td>
		<td>988,43 €</td>
		<td>7</td>
		<td>11</td>
		<td>2005</td>
		<td>2%</td>
		<td>10</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th>9</th>
		<td>Fernández</td>
		<td>634,00</td>
		<td>29</td>
		<td>9</td>
		<td>2005</td>
		<td>5%</td>
		<td>45</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th>10</th>
		<td>Serv. Seguridad</td>
		<td>100,00 €</td>
		<td>9</td>
		<td>5</td>
		<td>2005</td>
		<td>8%</td>
		<td>14</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th>11</th>
		<td>Total</td>
		<td>4.033,91 €</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
</div>
</article>
<article>
	<div>
	<h2>Condicionales</h2>
	<img style="width:100%" src="img/condicionales-1.svg" alt="uso condicionales en excel"> <br>
	<img style="width:100%" src="img/condicionales-2.svg" alt="uso condicionales en excel 2"> <br>
	<img style="width:100%" src="img/condicionales-3.svg" alt="uso condicionales en excel 3">
	
		<h3>Ejercicio</h3>
		<img style="width:100%" src="img/alturas.svg" alt="ejercicio alturas">
		<a href="docs/propuestos/alturas.xlsx">Descargar ejercicio propuesto.</a>
		<a href="docs/resueltos/alturas.xlsx">Descargar ejercicio resuelto.</a>
	
	<h3>ISERROR</h3>
	<p>=IF(ISERROR(B1*C1);<span class="red bold">"-"</span>;<span class="blue bold">B1*C1</span>)</p>
	<p>Si contiene error, pon <span class="red bold">un texto</span>, sino, <span class="bold blue">pon el resultado de la operación</span>.</p>
	<p>Un error puede ser una división por 0 o multiplicar por una celda vacía.</p>
	
	<h3>EJERCICIO</h3>
	<a href="docs/propuestos/paises.xlsx">Descargar ejercicio países propuesto.</a>
	<table>
		<tr>
			<th>País</th>
			<th>Deuda Externa</th>
			<th>PIB/Hab</th>
			<th>% Alfabet</th>
			<th>Código</th>
		</tr>
		<tr>
			<td>Argentina</td>
			<td>155000</td>
			<td>5000</td>
			<td>97</td>
			<td></td>
		</tr>
		<tr>
			<td>Brasil</td>
			<td>182000</td>
			<td>3850</td>
			<td>85</td>
			<td></td>
		</tr>
		<tr>
			<td>Chile</td>
			<td>36000</td>
			<td>4850</td>
			<td>94</td>
			<td></td>
		</tr>
		<tr>
			<td>Uruguay</td>
			<td>21000</td>
			<td>4700</td>
			<td>97</td>
			<td></td>
		</tr>
		<tr>
			<td>Bolivia</td>
			<td>29500</td>
			<td>2850</td>
			<td>80</td>
			<td></td>
		</tr>
		<tr>
			<td>Paraguay</td>
			<td>32000</td>
			<td>2850</td>
			<td>80</td>
			<td></td>
		</tr>
		<tr>
			<td>Perú</td>
			<td>45000</td>
			<td>3200</td>
			<td>80</td>
			<td></td>
		</tr>
		<tr>
			<td>Ecuador</td>
			<td>56000</td>
			<td>3000</td>
			<td>83</td>
			<td></td>
		</tr>
		<tr>
			<td>Venezuela</td>
			<td>88000</td>
			<td>4500</td>
			<td>89</td>
			<td></td>
		</tr>
		<tr>
			<td>Colombia</td>
			<td>100000</td>
			<td>3200</td>
			<td>80</td>
			<td></td>
		</tr>
	</table>

	<p>Rellenar la columna Código:</p>
	<p><span class="black bold">A</span> para aquellos países que tengan una deuda externa menor a 40000 y cumplan con una de las siguientes condiciones: PIB/Hab < 4000 ó %Alfabet > 90</p>
	<p><span class="black bold">B</span> para los países con una deuda externa >= 40000 y un PIB/Hab>4500</p>
	<p><span class="black bold">C</span> para el resto de los países</p>
	<a href="docs/resueltos/paises.xlsx">Descargar el ejercicio resuelto.</a>
	</article>
	<article id="vlookup">
	<h2>VLOOKUP</h2>
	<p>VLOOKUP(<span class="red">3</span>;<span class="green">C3:D5</span>;<span class="blue">2</span>;FALSE): Busca un 3 en el rango C3D5 y devuelve como resultado la segunda columna de esta tabla. FALSE indica que la coincidencia debe ser exacta.</p>
	<img src="img/vlookup.svg" alt="ejemplo vlookup">

	<p><span class="red">¿Qué busco?</span> <br>
<span class="green">¿Dónde lo busco?</span> <br>
<span class="blue">¿En qué columna está el valor resultado?</span></p>


<h3>Ejercicio VLOOKUP</h3>
<img src="img/ejercicio-vlookup.svg" alt="ejercicio vlookup">
<a href="docs/propuestos/VLOOKUP.xlsx">Descargar ejercicio propuesto.</a>
<a href="docs/resueltos/VLOOKUPResuelto.xlsx">Descargar ejercicio resuelto.</a>


<h3>Formato condicional</h3>
<p><span class="black bold">Resaltado condicional:</span> <br>
Home → Styles → Conditional Formatting → HighLight Cell Rules
</p>

<p><span class="black bold">Eliminar reasaltado condicional:</span> <br>
Home → Styles → Conditional Formatting → Clear Rules
</p>

<p><span class="black bold">Administración de condicionales:</span> <br>
Home → Styles → Conditional Formatting → Manage Rules <br>
Las reglas situadas más arriba tienen preferencia. Puedo hacer que si se cumple cierta regla se dejen de evaluar el resto marcando la check “Stop If True”
</p>


<h3>Ejercicio formato condicional</h3>
<a href="docs/propuestos/formatoCondicional.xlsx">Descargar ejercicio propuesto.</a>
<img src="img/formato-condicional.svg" alt="formato condicional">
<a href="docs/resueltos/formatoCondicional.xlsx">Descargar ejercicio resuelto.</a>
</div>
	</article>
	<article id="ejercicio_largo_facturacion">
		<div>
<h3>Ejercicio largo facturación</h3>
<h4>Hoja de clientes</h4>
<table>
	<tr>
		<th>ID cliente</th>
		<th>Cliente</th>
		<th>Dirección</th>
		<th>NIF/CIF</th>
		<th>C.P.</th>
		<th>Municipio</th>
		<th>Provincia</th>
		<th>Teléfono</th>
		<th>Actividad</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Juan</td>
		<td>C/13 Rue del Percebe</td>
		<td>B-213748743</td>
		<td>33203</td>
		<td>Gijón</td>
		<td>Asturias</td>
		<td>934094040</td>
		<td>formación</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Pepito</td>
		<td>C/Camino de Rubín 2º, 4º I</td>
		<td>C-372847857</td>
		<td>33013</td>
		<td>Gijón</td>
		<td>Asturias</td>
		<td>934094040</td>
		<td>formación</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Rodolfo</td>
		<td>C/Jovellanos 15</td>
		<td>D-372874627</td>
		<td>33206</td>
		<td>Gijón</td>
		<td>Asturias</td>
		<td>934456816</td>
		<td>formación</td>
	</tr>
	<tr>
		<td>4</td>
		<td>María</td>
		<td>C/Cabrales</td>
		<td>F-382754674</td>
		<td>33213</td>
		<td>Gijón</td>
		<td>Asturias</td>
		<td>985134323</td>
		<td>formación</td>
	</tr>
	<tr>
		<td>5</td>
		<td>Sofía</td>
		<td>Paseo de Begoña</td>
		<td>G-372837464</td>
		<td>33203</td>
		<td>Gijón</td>
		<td>Asturias</td>
		<td>985532354</td>
		<td>formación</td>
	</tr>
	<tr>
		<td>6</td>
		<td>Hugo</td>
		<td>C/Saavedra 17</td>
		<td>H-283746574</td>
		<td>33213</td>
		<td>Gijón</td>
		<td>Asturias</td>
		<td>985139234</td>
		<td>formación</td>
	</tr>
	<tr>
		<td>7</td>
		<td>Mercedes</td>
		<td>C/Juan Alvargonzález</td>
		<td>I-2837465834</td>
		<td>33213</td>
		<td>Gijón</td>
		<td>Asturias</td>
		<td>985134354</td>
		<td>formación</td>
	</tr>
	<tr>
		<td>8</td>
		<td>Nysea</td>
		<td>C/Asturias 17</td>
		<td>B-657625024</td>
		<td>33213</td>
		<td>Gijón</td>
		<td>Asturias</td>
		<td>985323454</td>
		<td>formación</td>
	</tr>
	<tr>
		<td>9</td>
		<td>Sara</td>
		<td>C/Asturias 19</td>
		<td>D-234534534</td>
		<td>33203</td>
		<td>Gijón</td>
		<td>Asturias</td>
		<td>985130243</td>
		<td>formación</td>
	</tr>
</table>
<a href="docs/propuestos/facturacion.xlsx">Descargar ejercicio propuesto.</a>

<div class="output" style="overflow:auto">
	
	<table border="1" style="  border-collapse:collapse;">
<colgroup></colgroup>
<colgroup></colgroup>
<colgroup></colgroup>
<colgroup></colgroup>
<colgroup style="border: 5px solid red;"></colgroup>
<colgroup style="border: 5px solid green;"></colgroup>
<colgroup style="border: 5px solid green;"></colgroup>
<colgroup style="border: 5px solid brown;"></colgroup>
<colgroup></colgroup>
<colgroup></colgroup>
<colgroup style="border: 5px solid orange;"></colgroup>
<colgroup></colgroup>
<colgroup style="border:5px solid purple"></colgroup>
<colgroup></colgroup>
<colgroup></colgroup>

	<thead>
		<tr>
			<th>1</th><th></th><th>Nº Factura</th><th>ID Cliente</th><th>Cliente</th><th>Fecha Emisión Factura</th><th>Fecha realización servicio</th><th>Concepto</th><th>Horas</th><th>Tarifa Hora</th><th>Coste</th><th>IRPF(%)</th><th>IRPF (cantidad)</th><th>Total</th><th style="background:green">Pagado</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>2</td>
			<td>0</td>
			<td>1</td>
			<td>1</td>
			<td>Juan</td>
			<td style="background:red"></td>
			<td style="background:red"></td>
			<td>Clase matemáticas</td>
			<td>10</td>
			<td>4</td>
			<td>40,00 €</td>
			<td>15%</td>
			<td>6,00 €</td>
			<td>34,00 €</td>
			<td style="background:green">6/21/2012</td>

		</tr>
		<tr>
			<td>3</td>
			<td>0</td>
			<td>2</td>
			<td>2</td>
			<td>Pepito</td>
			<td>3/28/2012</td>
			<td>22/03/2012</td>
			<td>Clase lengua</td>
			<td>10</td>
			<td>5</td>
			<td>50,00 €</td>
			<td>15%</td>
			<td>7,50 €</td>
			<td>42,50 €</td>
			<td style="background:green">4/2/2012</td>
		</tr>
		<tr>
			<td>4</td>
			<td>0</td>
			<td>3</td>
			<td>2</td>
			<td>Pepito</td>
			<td>3/28/2012</td>
			<td style="background:red"></td>
			<td>Clase historia</td>
			<td>10</td>
			<td>4</td>
			<td>40,00 €</td>
			<td>15%</td>
			<td>6 €</td>
			<td>34,00 €</td>
			<td style="background:green">4/26/2012</td>
		</tr>
		<tr>
			<td>5</td>
			<td>0</td>
			<td>4</td>
			<td>2</td>
			<td>Pepito</td>
			<td>3/28/2012</td>
			<td style="background:red"></td>
			<td>Clase ruso</td>
			<td>25</td>
			<td>2</td>
			<td>50,00 €</td>
			<td>15%</td>
			<td>7,50 €</td>
			<td>42,50 €</td>
			<td style="background:green">5/14/2012</td>
		</tr>
		<tr>
			<td>6</td>
			<td>0</td>
			<td>5</td>
			<td>3</td>
			<td>Rodolfo</td>
			<td>4/30/2012</td>
			<td>23/04/2012</td>
			<td>Clase japonés</td>
			<td>25</td>
			<td>5</td>
			<td>125,00 €</td>
			<td>15%</td>
			<td>18,75 €</td>
			<td>106,25 €</td>
			<td style="background:green">5/9/2012</td>
		</tr>
		<tr>
			<td>7</td>
			<td>0</td>
			<td>6</td>
			<td>3</td>
			<td>Rodolfo</td>
			<td>4/30/2012</td>
			<td>20/5/2012</td>
			<td>Clase matemáticas</td>
			<td>3</td>
			<td>3</td>
			<td>9,00 €</td>
			<td>15%</td>
			<td>1,35 €</td>
			<td>7,65 €</td>
			<td style="background:green">6/21/2012</td>
		</tr>
		<tr>
			<td>8</td>
			<td>0</td>
			<td>7</td>
			<td>2</td>
			<td>Pepito</td>
			<td>5/25/2012</td>
			<td>21/05/2012</td>
			<td>Clase japonés</td>
			<td>15</td>
			<td>4</td>
			<td>60,00 €</td>
			<td>15%</td>
			<td>9,00 €</td>
			<td>51,00 €</td>
			<td style="background:green">6/11/2012</td>
		</tr>
		<tr>
			<td>9</td>
			<td>0</td>
			<td>8</td>
			<td>2</td>
			<td>Pepito</td>
			<td>5/26/2012</td>
			<td>14/18/5/2012</td>
			<td>Clase ruso</td>
			<td>25</td>
			<td>6</td>
			<td>150,00 €</td>
			<td>15%</td>
			<td>22,50 €</td>
			<td>127,50 €</td>
			<td style="background:green">6/11/2012</td>
		</tr>
		<tr>
			<td>10</td>
			<td>1</td>
			<td>9</td>
			<td>2</td>
			<td>Pepito</td>
			<td>6/3/2010</td>
			<td>28/5/2012</td>
			<td>Clase ruso</td>
			<td>15</td>
			<td>4</td>
			<td>60,00 €</td>
			<td>15%</td>
			<td>9,00 €</td>
			<td>51,00 €</td>
			<td style="background:red"></td>
		</tr>
		<tr>
			<td>11</td>
			<td>2</td>
			<td>9</td>
			<td>2</td>
			<td>Pepito</td>
			<td>5/26/2012</td>
			<td>5/29/2012</td>
			<td>Clase matemáticas</td>
			<td>10</td>
			<td>2</td>
			<td>20,00 €</td>
			<td>15%</td>
			<td>3,00 €</td>
			<td>17,00 €</td>
			<td style="background:green">6/12/2012</td>
		</tr>
		<tr>
			<td>12</td>
			<td>3</td>
			<td>9</td>
			<td>2</td>
			<td>Pepito</td>
			<td>5/26/2012</td>
			<td>5/29/2012</td>
			<td>Taxi</td>
			<td>-</td>
			<td>-</td>
			<td>32,00 €</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td style="background:red"></td>
		</tr>
		<tr>
			<td>13</td>
			<td>4</td>
			<td>9</td>
			<td>2</td>
			<td>Pepito</td>
			<td>5/26/2012</td>
			<td>5/29/2012</td>
			<td>Avión</td>
			<td>-</td>
			<td>-</td>
			<td>10,00 €</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td style="background:green">6/14/2012</td>
		</tr>
		<tr>
			<td>14</td>
			<td>5</td>
			<td>9</td>
			<td>2</td>
			<td>Pepito</td>
			<td>5/26/2012</td>
			<td>5/29/2012</td>
			<td>Autobús</td>
			<td>-</td>
			<td>-</td>
			<td>32,00 €</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td style="background:green">6/15/2012</td>
		</tr>
		<tr>
			<td>15</td>
			<td>5</td>
			<td>10</td>
			<td>3</td>
			<td>Rodolfo</td>
			<td>6/14/2012</td>
			<td>6/8/2012</td>
			<td>Clase japonés</td>
			<td>3</td>
			<td>4</td>
			<td>12,00 €</td>
			<td>15%</td>
			<td>1,80 €</td>
			<td>10,20 €</td>
			<td style="background:green">6/21/2012</td>
		</tr>
		<tr>
			<td>16</td>
			<td>5</td>
			<td>11</td>
			<td>8</td>
			<td>Nysea</td>
			<td>6/14/2012</td>
			<td>3/6/2012</td>
			<td>Clase ruso</td>
			<td>20</td>
			<td>3</td>
			<td>60,00 €</td>
			<td>15%</td>
			<td>9,00 €</td>
			<td>51,00 €</td>
			<td style="background:green">7/18/2012</td>
		</tr>
		<tr>
			<td>17</td>
			<td>5</td>
			<td>11</td>
			<td>8</td>
			<td>Nysea</td>
			<td>6/14/2012</td>
			<td>3/06/2012</td>
			<td>Autobús</td>
			<td>-</td>
			<td>1</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td style="background:green">7/19/2012</td>
		</tr>
		<tr>
			<td>18</td>
			<td>5</td>
			<td>12</td>
			<td>2</td>
			<td>Pepito</td>
			<td>6/28/2012</td>
			<td>19/07/2012</td>
			<td>Taxi</td>
			<td>32</td>
			<td>4</td>
			<td>128,00 €</td>
			<td>15%</td>
			<td>19,20 €</td>
			<td>108,80 €</td>
			<td style="background:green">4/7/2012</td>
		</tr>
		<tr>
			<td>19</td>
			<td>5</td>
			<td>13</td>
			<td>2</td>
			<td>Pepito</td>
			<td>7/5/2012</td>
			<td>4/7/2012</td>
			<td>Clase lengua</td>
			<td>15</td>
			<td>3</td>
			<td>45,00 €</td>
			<td>15%</td>
			<td>6,75 €</td>
			<td>38,25 €</td>
			<td style="background:green">7/18/2012</td>
		</tr>
		<tr>
			<td>20</td>
			<td>5</td>
			<td>13</td>
			<td>2</td>
			<td>Pepito</td>
			<td>7/5/2012</td>
			<td>4/7/2013</td>
			<td>Clase matemáticas</td>
			<td>-</td>
			<td>1</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td style="background:green">7/19/2012</td>
		</tr>
	</tbody>
</table>

</div>

<p class="red">Busca el idCliente en la tabla de cliente e imprime el nombre correspondiente.</p>
<p class="green">Si la fecha de emisión de la factura o la fecha de realización del servicio no contienen información, la celda correspondiente se pinta en rojo.</p>
<p class="orange">El coste es la tarifa/hora por el número de horas.</p>
<p class="purple">Multiplicaré el coste por el IRPF</p>

	<p>Usaremos formateador condicional. Dos condiciones:</p>
	<ul>
		<li>si la celda es un número y dicho número es un 0.</li>
		<li>si la celda de la misma fila de la columna de horas es un "-".</li>
	</ul>

<p>En estos casos, pondremos un "-".</p>

<p class="blue">Si estos campos no contienen información, deben colorearse en rojo. Si contienen información, en verde.</p>


<h3>Hoja de factura</h3>
<img src="img/factura.svg" alt="factura">
<p>Los datos de la factura deben rellenarse automáticamente tras introducir el número de factura.</p>

<h3>Ejercicio COUNTIF   COUNTIF(RANGO;VALOR BUSCADO)</h3>
<img src="img/factura-2.svg" alt="factura 2">

<h3>Hoja de factura II</h3>
<img src="img/factura-3.svg" alt="factura 2">

<h3>El contrato
CONCATENATE(...,...,...,...)</h3>
<div class="output">
	<p>MANIFIESTAN</p>
	<p>"PRIMERO.- Que LA EMPRESA, se dedica a la actividad de",--------------</p>
	<p>SEGUNDO.- Que EL PROFESIONAL cuenta con la capacitación necesaria para impartir la formación a que se hace referencia en el apartado tercero.</p>
	<p>"TERCERO.- Que EL PROFESIONAL, se compromete a impartir el ",----------," de ",----------," horas. los días 23, 25 y 27 de abril de 2012,  de 9 a 13:0 horas, en las instalaciones de '",-----------,"Barcelona' activa, sita en ",I11,", ",-------------,", así como a aportar el material necesario (diapositivas, fotocopias, etc.) para el correcto funcionamiento del curso, por el que percibirá una retribución de ",-------------," €/hora, en concepto de impartición y preparación del curso, importe sobre el que se practicará la retención del ",-----------,"%  de IRPF. Estas cantidades serán pagaderas mediante factura mensual de las horas impartidas y retribuida en el plazo máximo de 30 días naturales fecha factura."</p>
	<p>CUARTO.- Al tratarse de una colaboración profesional para impartir formación, el presente contrato tiene naturaleza mercantil.</p>
	<p>Y en prueba de conformidad con cuanto antecede firman ambas partes por duplicado en lugar y fecha ut-supra.</p>
</div>

<h3>Opciones de configuración de impresión y presentación</h3>
<p>Page layout → Page Setup → flechita oblicua</p>



<h3>Ejercicio 
 continua en diapositiva siguiente</h3>

 <p>En un nuevo libro de trabajo cree la tabla según el modelo adjunto:</p>
 <p>Fuente para todo el documento: Tahoma 12 ptos.</p>
 <p>Modifique el formato bordes, sombreados, alineaciones...</p>
 <p>Ajuste automáticamente el ancho de las columnas para que los datos se visualicen correctamente.</p>
 <p>Formato de los datos numéricos: moneda 2 decimales.</p>
 <p>Combinar y centrar las celdas de la primera fila de las tablas, como se ve en el enunciado. Fuente: Tahoma 16ptos. negrita cursiva.</p>
 <p>Orientación horizontal. </p>
<img src="img/factura-4.svg" alt="factura 4">
<ul>
	<li>Elimine las hojas sobrantes del libro; el libro debe tener una única hoja, a la que llamará "SUPUESTO".</li>
	<li>Modifique los cuatro márgenes del libro a 2 cm. Ajustar a 1 página de ancho por 1 de alto. Centre la página horizontal y verticalmente.</li>
	<li>Añada como encabezado su nombre y año de nacimiento, centrado y subrayado. Añada como pie a la derecha, la fecha, que deberá actualizarse automáticamente.</li>
	<li>Calcular con fórmulas las celdas con sombreado gris de la propia tabla, usando referencias absolutas sobre las celdas (para copiar las fórmulas de una celda a otra): <br>

	BONUS = Ventas x % Bonus. <br>
	COMISIÓN = Usar función “Sí”: Si la venta es hasta 230000, la comisión será un 11%, si es mayor, será un 15%. <br>
	REMUNERACIÓN = Comisiones + Bonus, usar aquí las referencias relativas (para copiar las fórmulas de una celda a otra). <br>
	VTAS.NETAS = Ventas – Remuneración, usar aquí referencias relativas (para copiar las fórmulas de una celda a otra). <br>
	VTAS. ESTIMADAS = Añadir a Vtas. Netas el porcentaje estimado para el año siguiente
	</li>
</ul>

<h3>Crear un nuevo documento a partir de una plantilla</h3>
<p>Office Button → new → Installed template → 
Loari Amortization</p>

<p><span class="black bold">Para salvar la plantilla:</span> <br>
Office Button → save as → Other Formats → Excel Templates
</p>
	</article>
	<article id="grafico">
	<h2>Gráfico</h2>
<h3>Crear un gráfico</h3>
<p>Seleccionamos las celdas de las que queremos sacar el gráfico <br>
o <br>
Sereccionamos alguna de las celdas que cae dentro de la información que pretendemos
</p>
<p>→ Insert → Chart</p>


<h3>Modificar gráfico</h3>
<p>Al insertar o seleccionar el gráfico, el ribbon superior cambia para mostrar herramientas capaces de modificarlo.</p>
<p>Podemos seleccionar:</p>
<ul>
	<li>el área del gráfico (click del área blanco del gráfico)</li>
	<li> únicamente el gráfico (click sobre el gráfico)</li>
	<li>una porción del gráfico (doble click sobre la porción).
Botón derecho → Format Data Series</li>
</ul>

<h3>Ejercicio</h3>
<p>Dado el siguiente documento, insertar un diagrama de barras y otro de sectores. </p>
<img src="img/grafico.svg" alt="gráfico excel">
	</article>
	<article id="tablas_dinamicas">
<h2>Tablas dinámicas</h2>
<p>Llamamos dinámica a una tabla que nos permite ir obteniendo diferentes totales, filtrando datos, cambiando su presentación, visualizando o no los datos origen, etc.</p>
<p>Abrir el siguiente <a href="docs/propuestos/tablaDinamica.xlsx">fichero</a>.</p>
<p>Insert → Tables → PivotTable → seleccionamos el lugar donde se encuentran los datos que queremos analizar (incluidas las cabeceras) y el lugar donde queremos ubicarla.</p>
<p>Arrastrando y soltando los campos a los cuadros Column labels y Row labels podré generar una tabla con un registro por referencia y una columna por mes.</p>
<img src="img/tablas-dinamicas.svg" alt="tablas dinámicas">



<h3>Refrescar tabla dinámica</h3>
<p>Una tabla dinámica no se actualiza automáticamente cuando sus datos origen cambian. Para que se actualice: botón derecho sobre la tabla dinámica → actualizar.</p>

<h3>Formato de tablas dinámicas</h3>
<p>Si trato de formatear una tabla dinámica de la forma tradicional (botón derecho → cell format), los cambios se aplicarán a una sola celda; para evitar esto:</p>
<p>Botón derecho sobre la celda → Value Field Settings → Number Format</p>



<h3>Filtrar tabla dinámica</h3>
<p>Pulsando sobre la flechita del combo desplegable de las cabeceras de la tabla, podré decidir a partir de que valores filtrar.</p>

<h3>Ejercicio</h3>
<a href="docs/propuestos/tablaDinamicaDepartamentos.xlsx">Descarga ejercicio propuesto.</a>

<p>Construir a partir de los siguientes datos, las tablas dinámicas que muestren la siguiente información:</p>
<p>Tabla dinámica 1: Cantidad de personas por departamento</p>
<p>Tabla dinámica 2: Cantidad de personas por departamento y delegación</p>
<p>Tabla dinámica 3:  Suma y promedio de sueldo por departamento.</p>
<p>Tabla dinámica 4: Sueldo más alto por departamento y cargo.</p>

	<a href="docs/resueltos/tablaDinamicaDepartamentosResuelto.xlsx">Descargar ejercicio tablas dinámicas resuelto.</a>

	<img src="img/tablas-dinamicas.svg" alt="tablas dinámicas">

	
	<p>No mostrar un valor; en su lugar mostrar el valor de la relación de una celda con otra</p>
	<p>Botón derecho sobre el valor → Value Field Settings → Show value as → </p>
	<p>Difference from :  <br>
% Of: <br>
% Difference from:  <br>
Running total in: <br>
% of row</p>


<h3>Realizar agrupaciones</h3>
<p>Selecciono dos o más celdas que quiero agrupar → Botón derecho → Group</p>
<p>Puedo modificar el nombre del grupo pulsando sobre la celda del mismo.</p>



<h3>Ejercicio agrupaciones</h3>
<a href="docs/propuestos/ejercicioFamiliasPropuesto.xlsx">Descargar ejercicio propuesto.</a>
<p>Mostrar todos los gastos de cada familiaDada, agrupándolos por familias y por trimestres.</p>
<p>Agrupar ahora los gastos por año y por trimestre en vez de por familia y por trimestre.</p>

<ul>
	<li>Comparar porcentualmente los gastos en aseo, comida y ropa con los del 2008.</li>
	<li>Comparado con los gastos en suministros del 2008, que tanto por ciento supone la diferencia de gastos de los siguientes años.</li>
</ul>

<a href="docs/resueltos/ejercicioFamiliasResuelto.xlsx">Descargar ejercicio familias resuelto</a>
</div>
</article>

<article id="macros">
	<div>
	<h2>Macros</h2>
	<p>Una macro es una grabación de acciones que luego podremos reproducir.</p>
	<p><span class="black bold">Grabar una macro:</span> <br>
View → Macros → Record Macro →  Hago las operaciones que quiero grabar → View → Macros → Stop Recording
	</p>
	<p><span class="black bold">Reproducir una macro:</span> <br>
Pulso el botón o la combinación de teclas que escogí para reproducir la macro.
	</p>
	<p><span class="black bold">Editar macros:</span><br>
View → Macros → Record Macro →Macros → Edit
	</p>

	
	<h3>Formato</h3>
	<p>0.00 → Muestra los números con una aproximación determinada. <br>
	<p>0,987 → 0,99					0.987 →  0.987 <br>
	<p>Los números omitidos serán redondeado.</p>

	<br>

	<p><span class="red bold">#</span>,<span class="red bold">#</span> → Omite son decimales innecesarios. <br>
<span class="red">0</span>,<span class="red">0</span>	→ ,5
	</p>

	<p>#.# → Introduce separador de miles. <br>
444444444	→  444.444.444
	</p>
	

	<h3>Macros</h3>
	<p><span class="black bold">Grabar una macro:</span> <br>
View → Macros → Record Macro →  Hago las operaciones que quiero grabar → View → Macros → Stop Recording
	</p>

	<p><span class="black bold">Macro a grabar(introducir formato de miles):</span><br>
Botón derecho sobre la/s celda/s → Format Cells → Number → Custom → #.##0,00
	</p>
	<p><span class="black bold">Reproducir una macro:</span><br>
Pulso el botón o la combinación de teclas que escogí para reproducir la macro.
	</p>

	<p><span class="black bold">Modificación del shortcut y la descripción de una macro:</span> <br>
View → Macros → View macros → Options → <br>
Si mantengo pulsado SHIFT, esta tecla se añadirá a la combinación necesaria para ejecutar la macro. <br>
Si el atajo del teclado introducido ya existe, se sobreescribirá.
	</p>

	<p><span class="black bold">Añadir una macro a la barra de herramientas de acceso rápido:</span> <br>
Botón derecho sobre la barra de herramientas de acceso rápido → Customize quick acces toolbar → Choose commands from: macros → add (botón modify para modificar el icono de la macro) → ok 
	</p>

	
	<h3>Selección de celdas por criterios</h3>
	<p>Home → Editing → Find & Select → <br>
- Opciones por defecto. <br>
- Go to special.</p>

<h3>Ejercicio</h3>
<p>Hacer una macro que coloree celdas en rojo con borde negro y aplicar dicha macro a todos los textos del documento.</p>



<h3>Asociar una macro a un componente</h3>
<p>Insert → shape → botón derecho sobre el componente → assing Macro</p>
<p><span class="black bold">Ejercicio</span>: al pulsar sobre un botón con el texto ordenar alfabéticamente, los empleados deben ordenarse alfabéticamente. Si pulso sobre el botón ordenar por edad, los empleados debe ordenarse de acuerdo a su edad.</p>


<h3>VBA</h3>
<p>Una macro es un pequeño programa escrito en VBA (visual basic for applications).</p>
<p>Podemos acceder al código fuente de nuestras macros pulsando alt+F11.</p>
<p>Aparecerá un explorador de proyectos (View → proyect explorer) con el proyecto abierto y sus correspondientes hojas, y debajo otro panel con las propiedades del proyecto (View → Properties window).</p>



<h3>Código Macro sencilla</h3>
<pre>
	<code>
<span class="red">Sub holaMundo()</span>
    MsgBox(“Hola, buenos días”);
<span class="red">End Sub</span>
	</code>
</pre>


<h3>Mostrar el valor de una celda</h3>
<pre>
	<code>
Sub holaMundo()
   MsgBox ("El valor de la celda D2 es: " &amp; Range("D2"))
End Sub
	</code>
</pre>

<h3>If</h3>
<p>Poner expresamente la propiedad Value es opcional.</p>
<pre><code>Sub holaMundo()
   If IsNumeric(Range("D2").Value) = True Then
      MsgBox ("La celda contiene un número")
   End If
End Sub</code></pre>



<h3>Else</h3>
<pre>
	<code>
Sub holaMundo()
   If IsNumeric(Range("D2")) = True Then
        MsgBox ("La celda contiene un número")
    Else
        MsgBox ("La celda no contiene un número")
   End If
End Sub
	</code>
</pre>



<h3>Otras condiciones</h3>
<pre>
If Range(&quot;D2&quot;) &gt; 200 Then 
If Range(&quot;D2&quot;) &gt; 200 = True Then
						&lt;
						&gt;=
						&lt;=
						==
						&lt;&gt;</pre>



<h3>And Or</h3>
<pre>
	<code>
 If Range(&quot;D2&quot;) &gt;= 200 And Range(&quot;D2&quot;) &lt; 100 Then

 If Range(&quot;D2&quot;) &gt;= 200 And Range(&quot;D2&quot;) &lt; 100 Then
	</code>
</pre>



<h3>WITH</h3>

<pre><code>Sub holaMundo()
    With Range(&quot;D2&quot;)
        If .Value &gt;= 200 And .Value &lt; 100 Then
            MsgBox (&quot;La celda D2 contiene un valor mayor de 200&quot;)
    End With
End Sub</code></pre>

<pre><code>Sub holaMundo()
    If Range(&quot;D2&quot;).Value &gt; 100 And Range(&quot;D2&quot;).Value &lt; 200 Then
        MsgBox (&quot;La celda D2 contiene un valor entre 100 y 200&quot;)
    End If
End Sub</code></pre>


<h3>Select - Case</h3>
<pre><code>Sub holaMundo()
    With Range(&quot;A1&quot;)
        Select Case .Value
            Case Is &gt; 70
                MsgBox (&quot;Valor mayor que 20&quot;)
            Case Is &lt; 10
                MsgBox (&quot;Valor menor que 10&quot;)
            Case 40 To 50
                MsgBox (&quot;Valor entre 40 y 50&quot;)
            Case Else
                MsgBox (&quot;Ninguno de los anteriores&quot;)
        End Select
   End With
End Sub</code></pre>


<h3>Cambiar el color de una celda</h3>
<pre><code>Range("A1").Interior.ColorIndex = 3
Range("A1").Interior.ColorIndex = xlColorIndexNone</code></pre>



<h3>Ejercicio</h3>
<p>Al pulsar un botón comprobar el valor de una celda. Si es mayor que 1000, pintar la celda de verde; si es menor que 500, pintarla de rojo, sino, mostrar un mensaje de alerta.</p>



<h3>For</h3>

<pre><code>For i = 1 To 10
    Cells(1, i) = "Hola mundo!"
Next i</code></pre>


<h3>Ejercicio</h3>
<p>Pintar las 30 primeras celdas de la tercera columna (D) de rojo.</p>



<h3>Ejercicio</h3>

<p>Al pulsar un botón comprobar el valor de las 30 primeras celdas de la tercera columna (D). Para cada celda,  si es mayor que 1000, pintar la celda de verde; si es menor que 500, pintarla de rojo, sino, mostrar un mensaje de alerta.</p>
<p>Para resolver el ejercicio, mezclar width con select-case.</p>



<h3>Selección</h3>

<pre><span class="black bold">Absolute (Selecciona la celda E8)</span>:<code>
Sub Macro1()
    Range("E8").Select
End Sub
</code></pre>

<pre><span class="black bold">Relativa</span>:
	<code>
Sub seleccionRelativa()
	<span class="blue">ActiveCell.Offset(-2, 4)</span><span class="span green">Range("A1:B3").Select</span> 
End Sub
	</code>
</pre>

<p class="blue">Desplazamiento vertical y horizontal a partit de la celda en la que estoy.</p>
<p class="green">A partir de la celda seleccionada, haremos un cuadro de selección que si comenzase en el origen iría desde la celda A1 a la A3.</p>


<h3>Bucle For</h3>
<pre><code>Sub BucleFor()
    Range("B1").Select
    For counter = 1 To 50
        ActiveCell.Offset(3, 0).Range("A1").Select
        Selection.Interior.Color = RGB(255, 0, 0)
    Next counter
End Sub</code></pre>
<img src="img/marcro.svg" alt="macro">

<h3>Ejercicio</h3>
<img src="img/marcro.svg" alt="macro">
</div>
</article>
	</main>
<?php 
//});
//include $path."/diapos_theme/footer.php";
?>